<?php

namespace App\Controllers;

use App\Helpers\Helpers;

class PageController
{
    public function home()
    {
        return Helpers::view('index');
    }

    public function contact()
    {
        return Helpers::view('contact');
    }

    public function about()
    {
        $company =  'laracast';

        return Helpers::view('about', [
            'company' => $company,
        ]);
    }

    public function aboutCulture()
    {
        return Helpers::view('about-culture');
    }
}
