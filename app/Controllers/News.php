<?php

namespace App\Controllers;

class News extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'News | Brileaf',
        ];
        return view('pages/news', $data);
    }
    
    public function nepal()
    {
        $data =[
            'tittle' => 'News Details | Brileaf',
        ];
        return view('pages/news-nepal', $data);
    }
    public function aemfi()
    {
        $data =[
            'tittle' => 'News Details | Brileaf',
        ];
        return view('pages/news-aemfi', $data);
    }
    public function uscmarshall()
    {
        $data =[
            'tittle' => 'News Details | Brileaf',
        ];
        return view('pages/news-marshall', $data);
    }
    public function gsbthailand()
    {
        $data =[
            'tittle' => 'News Details | Brileaf',
        ];
        return view('pages/news-gsbthailand', $data);
    }
    
}




