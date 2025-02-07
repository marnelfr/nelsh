<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class RedirectController extends Controller
{

    public function index($slug) {
        $redirectLink = '/';
        $link = Link::where('code', $slug)->first();

        if($link) {
            $redirectLink = $link->url;
        }

        return redirect($redirectLink);
    }

}
