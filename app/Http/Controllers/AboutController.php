<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function getAboutPage(Request $requets){

        //return "This is about page";
        return view("about", [
            'title' => '**784**',
            'naim' => 'getAboutPage',
            'users' => [
                'User 1',
                'User 2',
                'User 3'
            ]
        ]);
    }
}
