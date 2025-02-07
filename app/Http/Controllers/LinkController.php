<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LinkController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'url' => 'required|url',
        ]);

        $link = Link::where('url', $data['url'])->first();

        if(!$link) {
            $code = Link::generateUniqueCode();
            $link = Link::create([
                'url' => $data['url'],
                'code' => $code,
                'user_id' => auth()->id() ?? null,
            ]);
        }

        $base = env('BASE_LINK', 'https://nel.sh/');
        $shortLink = $base . $link->code;

        return redirect()->route('home')->with('short_link', $shortLink);
    }

    /**
     * Display the specified resource.
     */
    public function show(Link $link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Link $link)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Link $link)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {
        //
    }

}
