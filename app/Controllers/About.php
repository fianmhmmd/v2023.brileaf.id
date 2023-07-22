<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'About Us | Brileaf',
        ];
        return view('pages/about', $data);
    }
    
}




