<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'Home | Brileaf',
        ];
        return view('pages/home', $data);
    }
}
