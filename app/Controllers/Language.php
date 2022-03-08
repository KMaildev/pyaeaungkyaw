<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Language extends BaseController
{

    protected $session;
    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
    }

    public function index()
    {
        //
    }

    public function set_lang()
    {
        $language = $this->request->getGet('language');
        $lang = [
            'language'  => $language,
        ];
        $this->session->set($lang);
        echo "<script>window.history.back()</script>";
    }
}
