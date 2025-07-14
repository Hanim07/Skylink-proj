<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => 'About Us',
            'heroTitle' => 'About Sky Link',
            'heroDescription' => 'We are Ethiopia\'s leading IT services company, dedicated to transforming businesses through innovative technology solutions.',
            
        ];
        
        return view('pages.about', $data);
    }
}
