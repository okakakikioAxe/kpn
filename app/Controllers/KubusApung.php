<?php

namespace App\Controllers;

class KubusApung extends BaseController
{
    public function testSubmit()
{
    return $this->response
        ->setStatusCode(200)
        ->setBody('POST KUBUS BERHASIL MASUK CONTROLLER');
}

  public function index()
  {
    // Catat waktu ketika form dibuka.
    session()->set(
      'kubus_apung_form_started_at',
      time()
    );

    return view('kubus_apung/form');
  }


  public function submit()
  {
      return $this->response
    ->setStatusCode(200)
    ->setBody('SUBMIT BERHASIL - DATABASE INSERT OK');
    /*
        |--------------------------------------------------------------------------
        | 1. HONEYPOT
        |--------------------------------------------------------------------------
        */

    $honeypot = trim(
      (string) $this->request->getPost('website')
    );

    if ($honeypot !== '') {

      log_message(
        'warning',
        'Kubus Apung honeypot triggered. IP: {ip}',
        [
          'ip' => $this->request->getIPAddress(),
        ]
      );

      /*
             * Bot tidak perlu diberi tahu bahwa
             * request-nya terdeteksi.
             */
      return redirect()->to(
        'form-kubus-apung/terimakasih'
      );
    }


    /*
        |--------------------------------------------------------------------------
        | 2. MINIMUM SUBMIT TIME
        |--------------------------------------------------------------------------
        */

    $formStartedAt = session()->get(
      'kubus_apung_form_started_at'
    );

    if (!$formStartedAt) {

      log_message(
        'warning',
        'Kubus Apung submitted without start timestamp. IP: {ip}',
        [
          'ip' => $this->request->getIPAddress(),
        ]
      );

      return redirect()->to(
        'form-kubus-apung'
      );
    }


    $elapsed = time() - $formStartedAt;

    /*
         * Form harus terbuka minimal 3 detik.
         */
    if ($elapsed < 3) {

      log_message(
        'warning',
        'Kubus Apung submitted too quickly. IP: {ip}, elapsed: {elapsed}s',
        [
          'ip' => $this->request->getIPAddress(),
          'elapsed' => $elapsed,
        ]
      );

      return redirect()
        ->to('form-kubus-apung')
        ->with(
          'error',
          'Silakan tunggu beberapa detik sebelum mengirim form.'
        );
    }


    /*
        |--------------------------------------------------------------------------
        | 3. AMBIL & NORMALISASI INPUT
        |--------------------------------------------------------------------------
        */

    $nama = trim(
      (string) $this->request->getPost('nama')
    );

    $noTelepon = trim(
      (string) $this->request->getPost('no_telepon')
    );

    $tempatBekerja = trim(
      (string) $this->request->getPost('tempat_bekerja')
    );


    /*
         * Normalisasi nomor.
         *
         * Contoh:
         * 0812-3456-7890
         * menjadi:
         * 081234567890
         */
    $noTelepon = preg_replace(
      '/\D+/',
      '',
      $noTelepon
    );


    /*
        |--------------------------------------------------------------------------
        | 4. VALIDATION
        |--------------------------------------------------------------------------
        */

    $rules = [
      'nama' => [
        'rules' => 'required|min_length[3]|max_length[80]|regex_match[/^[\p{L}\s.\'-]+$/u]',
        'errors' => [
          'required' => 'Nama wajib diisi.',
          'min_length' => 'Nama minimal 3 karakter.',
          'max_length' => 'Nama maksimal 80 karakter.',
          'regex_match' => 'Nama hanya boleh berisi huruf, spasi, titik, apostrof, atau tanda hubung.',
        ],
      ],

      'no_telepon' => [
        'rules' => 'required|min_length[10]|max_length[15]|regex_match[/^(08|628)\d+$/]',
        'errors' => [
          'required' => 'Nomor telepon wajib diisi.',
          'min_length' => 'Nomor telepon tidak valid.',
          'max_length' => 'Nomor telepon terlalu panjang.',
          'regex_match' => 'Nomor telepon harus menggunakan format Indonesia yang valid.',
        ],
      ],

      'tempat_bekerja' => [
        'rules' => 'required|min_length[3]|max_length[100]',
        'errors' => [
          'required' => 'Tempat bekerja wajib diisi.',
          'min_length' => 'Tempat bekerja minimal 3 karakter.',
          'max_length' => 'Tempat bekerja maksimal 100 karakter.',
        ],
      ],
    ];


    if (!$this->validate($rules)) {

      return view('kubus_apung/form', [
        'validation' => $this->validator,
      ]);
    }


    /*
        |--------------------------------------------------------------------------
        | 5. DETEKSI SPAM
        |--------------------------------------------------------------------------
        */

    $suspiciousText =
      $this->looksLikeSpamText($nama) ||
      $this->looksLikeSpamText($tempatBekerja);

    $suspiciousPhone =
      $this->looksLikeSpamPhone($noTelepon);


    /*
        |--------------------------------------------------------------------------
        | 6. TENTUKAN RISK LEVEL
        |--------------------------------------------------------------------------
        */

    /*
         * VERY SUSPICIOUS
         *
         * Contohnya:
         * - nomor palsu seperti 0000000000
         * - 1111111111
         * - pola angka sederhana
         */
    if ($suspiciousPhone) {

      $riskLevel = 'very_suspicious';

      /*
         * SUSPICIOUS
         *
         * Contohnya:
         * - Dddddd
         * - Hhhhh
         * - Ggggg
         */
    } elseif ($suspiciousText) {

      $riskLevel = 'suspicious';

      /*
         * NORMAL
         */
    } else {

      $riskLevel = 'normal';
    }


    /*
        |--------------------------------------------------------------------------
        | 7. RATE LIMIT BERDASARKAN RISK
        |--------------------------------------------------------------------------
        */

    $throttler = service('throttler');

    $ip = $this->request->getIPAddress();


    switch ($riskLevel) {

      case 'very_suspicious':

        /*
                 * Maksimal 1 request / 30 menit
                 */
        $throttleKey =
          'kubus-apung-very-suspicious-' .
          md5($ip);

        $allowed = $throttler->check(
          $throttleKey,
          1,
          30 * MINUTE
        );

        break;


      case 'suspicious':

        /*
                 * Maksimal 2 request / 10 menit
                 */
        $throttleKey =
          'kubus-apung-suspicious-' .
          md5($ip);

        $allowed = $throttler->check(
          $throttleKey,
          2,
          10 * MINUTE
        );

        break;


      default:

        /*
                 * Maksimal 5 request / 10 menit
                 */
        $throttleKey =
          'kubus-apung-normal-' .
          md5($ip);

        $allowed = $throttler->check(
          $throttleKey,
          5,
          10 * MINUTE
        );

        break;
    }


    /*
        |--------------------------------------------------------------------------
        | 8. BLOCK JIKA RATE LIMIT HABIS
        |--------------------------------------------------------------------------
        */

    if (!$allowed) {

      $waitSeconds =
        $throttler->getTokentime();

      log_message(
        'warning',
        'Kubus Apung rate limit triggered. IP: {ip}, risk: {risk}, wait: {wait}s',
        [
          'ip' => $ip,
          'risk' => $riskLevel,
          'wait' => $waitSeconds,
        ]
      );

      return redirect()
        ->to('form-kubus-apung')
        ->with(
          'error',
          'Terlalu banyak pengiriman form. Silakan coba lagi beberapa saat.'
        );
    }

    /*
|--------------------------------------------------------------------------
| 9. CEK DUPLICATE LEAD
|--------------------------------------------------------------------------
*/

    $db = \Config\Database::connect();

    $existingLead = $db
      ->table('leads_kubus_apung')
      ->where('no_telepon', $noTelepon)
      ->where(
        'created_at >=',
        date('Y-m-d H:i:s', time() - (6 * HOUR))
      )
      ->get()
      ->getRow();


    if ($existingLead) {

      log_message(
        'info',
        'Duplicate Kubus Apung lead blocked. IP: {ip}, phone: {phone}',
        [
          'ip' => $ip,
          'phone' => $noTelepon,
        ]
      );

      // Timestamp form dibersihkan agar request berikutnya
      // harus membuka form kembali.
      session()->remove(
        'kubus_apung_form_started_at'
      );

      return redirect()
        ->to('form-kubus-apung')
        ->with(
          'duplicate',
          'Data Anda sudah berhasil dikirim sebelumnya. Silakan coba lagi beberapa saat.'
        );
    }


    /*
|--------------------------------------------------------------------------
| 10. SIMPAN DATABASE
|--------------------------------------------------------------------------
*/

    $db->table('leads_kubus_apung')->insert([
      'nama' => $nama,
      'no_telepon' => $noTelepon,
      'tempat_bekerja' => $tempatBekerja,
      'created_at' => date('Y-m-d H:i:s'),
      'updated_at' => date('Y-m-d H:i:s'),
    ]);


    /*
|--------------------------------------------------------------------------
| 11. HAPUS TIMESTAMP FORM
|--------------------------------------------------------------------------
*/

    session()->remove(
      'kubus_apung_form_started_at'
    );


    /*
|--------------------------------------------------------------------------
| 12. REDIRECT
|--------------------------------------------------------------------------
*/

    // return redirect()->to(
    //   'form-kubus-apung/terimakasih'
    // );
    
    
  }


  /*
    |--------------------------------------------------------------------------
    | DETEKSI SPAM TEXT
    |--------------------------------------------------------------------------
    */

  private function looksLikeSpamText(string $text): bool
  {
    $text = strtolower(
      trim($text)
    );

    if ($text === '') {
      return true;
    }


    /*
         * Contoh:
         *
         * Dddd
         * Hhhhh
         * Ggggg
         */
    if (
      preg_match(
        '/(.)\1{3,}/u',
        $text
      )
    ) {
      return true;
    }


    /*
         * Deteksi text dengan karakter
         * yang sangat sedikit.
         *
         * Contoh:
         *
         * xxxxx
         * ababab
         */
    $letters = preg_replace(
      '/[^a-z]/',
      '',
      $text
    );

    if (
      strlen($letters) >= 5
    ) {

      $uniqueLetters = count(
        array_unique(
          str_split($letters)
        )
      );

      if (
        $uniqueLetters <= 2
      ) {
        return true;
      }
    }


    return false;
  }


  /*
    |--------------------------------------------------------------------------
    | DETEKSI SPAM PHONE
    |--------------------------------------------------------------------------
    */

  private function looksLikeSpamPhone(string $phone): bool
  {
    $phone = preg_replace(
      '/\D+/',
      '',
      $phone
    );

    if (!$phone) {
      return true;
    }


    /*
         * Semua angka sama.
         *
         * 0000000000
         * 1111111111
         * 2222222222
         */
    if (
      preg_match(
        '/^(\d)\1+$/',
        $phone
      )
    ) {
      return true;
    }


    /*
         * Nomor dummy umum.
         */
    $dummyNumbers = [
      '0123456789',
      '1234567890',
      '0987654321',
      '9876543210',
    ];

    if (
      in_array(
        $phone,
        $dummyNumbers,
        true
      )
    ) {
      return true;
    }


    return false;
  }


  public function terimakasih()
  {
    return view(
      'kubus_apung/terimakasih'
    );
  }
}
