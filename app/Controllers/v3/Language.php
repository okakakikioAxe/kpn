<?php

namespace App\Controllers\v3;

use App\Controllers\BaseController;

class Language extends BaseController
{
    public function switch($lang)
    {
        if (! in_array($lang, ['id', 'en'])) {
            $lang = 'id';
        }

        session()->set('lang', $lang);

        return redirect()->back();
    }
}
