<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    // public function about()
    // {
    //     return view('about');
    // }

    public function about(Request $request)
    {
        $carousels = [
            [
                "url" => "https://source.unsplash.com/user/erondu/900x300",
                "width" => "900",
                "height" => "300"
            ],
            [
                "url" => "https://source.unsplash.com/user/charlesdeluvio/900x300",
                "width" => "900",
                "height" => "300"
            ],
            [
                "url" => "https://source.unsplash.com/user/danielkorpai/900x300",
                "width" => "900",
                "height" => "300"
            ]
        ];
        return view('about', compact('carousels'));
    }
}
