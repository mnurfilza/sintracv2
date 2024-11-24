<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('compro');
    }

    public function products(string $category)
    {

        $hero = [
            "title"=>"Hydraulic Forklift",
            "image" => "../assets/img/hydraulic_forklift.webp",
            "text" => "Some quick example text to build on the card title and make up the bulk of the card's content.",

        ];
        $cards = [
            [
                "title" => "Card Title 1",
                "text" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
                "image" => "../assets/img/hydraulic_forklift.webp",
                "link" => "#"
            ],
            [
                "title" => "Card Title 2",
                "text" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
                "image" => "../assets/img/hydraulic_forklift.webp",
                "link" => "#"
            ],
            [
                "title" => "Card Title 3",
                "text" => "SSome quick example text to build on the card title and make up the bulk of the card's content.",
                "image" => "../assets/img/hydraulic_forklift.webp",
                "link" => "#"
            ],
            [
                "title" => "Card Title 3",
                "text" => "SSome quick example text to build on the card title and make up the bulk of the card's content.",
                "image" => "../assets/img/hydraulic_forklift.webp",
                "link" => "#"
            ],
            [
                "title" => "Card Title 3",
                "text" => "SSome quick example text to build on the card title and make up the bulk of the card's content.",
                "image" => "../assets/img/hydraulic_forklift.webp",
                "link" => "#"
            ],
            [
                "title" => "Card Title 3",
                "text" => "SSome quick example text to build on the card title and make up the bulk of the card's content.",
                "image" => "../assets/img/hydraulic_forklift.webp",
                "link" => "#"
            ],
            [
                "title" => "Card Title 3",
                "text" => "SSome quick example text to build on the card title and make up the bulk of the card's content.",
                "image" => "../assets/img/hydraulic_forklift.webp",
                "link" => "#"
            ]
            ];


        return view('list-product', [
            'cards' => $cards,
            'hero' => $hero
        ]);
    }

   
}
