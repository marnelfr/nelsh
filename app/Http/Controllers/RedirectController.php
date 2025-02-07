<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{

    public function index($slug) {
        $redirections = [
            'rSD34gk' => 'https://latuilerie.com',
            'mZE4GnH' => 'https://youtube.com',
            'sZCBrYY' => 'https://google.com'
        ];

        $redirectLink = '/';

        if(isset($redirections[$slug])) {
            $redirectLink = $redirections[$slug];
        }

        return redirect($redirectLink);
    }

}
