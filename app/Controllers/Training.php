<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Training extends BaseController
{
    public function index()
    {
        return view('training/index');
    }
}
