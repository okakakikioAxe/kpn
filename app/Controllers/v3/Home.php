<?php

namespace App\Controllers\v3;

use App\Controllers\BaseController;

class Home extends BaseController
{

    public function index_v3(): string
    {
        // $supported = ['id', 'en', 'cn'];
        // if (!in_array($lang, $supported)) {
        //     return view('v3/id/homepage_id');
        // }
        return view('v3/pages/home', [
            'title' => 'Beranda',
            'description' => 'Tes',
        ]);
        // $this->cachePage(86400);
    }
}
