<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Redirect;
use Illuminate\Http\Request;

class RedirectController extends Controller
{

    public function index(Request $request, $slug) {
        $redirectLink = '/';
        $link = Link::where('code', $slug)->first();

        if($link) {
            $redirectLink = $link->url;
        }

        $data = [
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'url' => $request->fullUrl(),
            'code' => $slug,
            'method' => $request->method(),
            'referrer' => $request->header('referer'),
            'language' => $request->getPreferredLanguage(),
            'is_secure' => $request->secure(),
        ];

        if (auth()->check()) {
            $data['user_id'] = auth()->id();
        }

        Redirect::create($data);

//        $redirectLink .= '?ip=' . $request->ip();

        return redirect($redirectLink);
    }

}
