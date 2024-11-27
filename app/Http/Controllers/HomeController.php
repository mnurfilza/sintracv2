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
                "brand_id" => "toyota-forklift"
            ],
            [
                "title" => "Card Title 2",
                "text" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
                "image" => "../assets/img/hydraulic_forklift.webp",
                "brand_id" => "#"
            ],
            [
                "title" => "Card Title 3",
                "text" => "SSome quick example text to build on the card title and make up the bulk of the card's content.",
                "image" => "../assets/img/hydraulic_forklift.webp",
                "brand_id" => "#"
            ],
            [
                "title" => "Card Title 3",
                "text" => "SSome quick example text to build on the card title and make up the bulk of the card's content.",
                "image" => "../assets/img/hydraulic_forklift.webp",
                "brand_id" => "#"
            ],
            [
                "title" => "Card Title 3",
                "text" => "SSome quick example text to build on the card title and make up the bulk of the card's content.",
                "image" => "../assets/img/hydraulic_forklift.webp",
                "brand_id" => "#"
            ],
            [
                "title" => "Card Title 3",
                "text" => "SSome quick example text to build on the card title and make up the bulk of the card's content.",
                "image" => "../assets/img/hydraulic_forklift.webp",
                "brand_id" => "#"
            ],
            [
                "title" => "Card Title 3",
                "text" => "SSome quick example text to build on the card title and make up the bulk of the card's content.",
                "image" => "../assets/img/hydraulic_forklift.webp",
                "brand_id" => "#"
            ]
            ];


        return view('list-product', [
            'cards' => $cards,
            'hero' => $hero
        ]);
    }

   public function detail(string $id)
   {
     $hero = [
        "title"=>"Hydraulic Forklift",
        "text" => "Some quick example text to build on the card title and make up the bulk of the card's content.",

    ];

    $detail = [
        "title" => "Card Title 3",
        "text" => "SSome quick example text to build on the card title and make up the bulk of the card's content.",
        "image" => "assets/img/hydraulic_forklift.webp",
        "link" => "#"
    ];
    return view('product', [
        'detail' => $detail,
        'hero' => $hero
    ]);
   }

   public function brands(string $category)
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
                "id" => "toyota"
            ],
            [
                "title" => "Card Title 2",
                "text" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
                "image" => "../assets/img/hydraulic_forklift.webp",
                "id" => "#"
            ],
            [
                "title" => "Card Title 3",
                "text" => "SSome quick example text to build on the card title and make up the bulk of the card's content.",
                "image" => "../assets/img/hydraulic_forklift.webp",
                "id" => "#"
            ],
            [
                "title" => "Card Title 3",
                "text" => "SSome quick example text to build on the card title and make up the bulk of the card's content.",
                "image" => "../assets/img/hydraulic_forklift.webp",
                "id" => "#"
            ],
            [
                "title" => "Card Title 3",
                "text" => "SSome quick example text to build on the card title and make up the bulk of the card's content.",
                "image" => "../assets/img/hydraulic_forklift.webp",
                "id" => "#"
            ],
            [
                "title" => "Card Title 3",
                "text" => "SSome quick example text to build on the card title and make up the bulk of the card's content.",
                "image" => "../assets/img/hydraulic_forklift.webp",
                "id" => "#"
            ],
            [
                "title" => "Card Title 3",
                "text" => "SSome quick example text to build on the card title and make up the bulk of the card's content.",
                "image" => "../assets/img/hydraulic_forklift.webp",
                "id" => "#"
            ]
            ];


        return view('list-brand', [
            'cards' => $cards,
            'hero' => $hero
        ]);
    }

    public function type(string $id)
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
                "id" => "t001"
            ],
            [
                "title" => "Card Title 2",
                "text" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
                "image" => "../assets/img/hydraulic_forklift.webp",
                "id" => "#"
            ],
            [
                "title" => "Card Title 3",
                "text" => "SSome quick example text to build on the card title and make up the bulk of the card's content.",
                "image" => "../assets/img/hydraulic_forklift.webp",
                "id" => "#"
            ],
            [
                "title" => "Card Title 3",
                "text" => "SSome quick example text to build on the card title and make up the bulk of the card's content.",
                "image" => "../assets/img/hydraulic_forklift.webp",
                "id" => "#"
            ],
            [
                "title" => "Card Title 3",
                "text" => "SSome quick example text to build on the card title and make up the bulk of the card's content.",
                "image" => "../assets/img/hydraulic_forklift.webp",
                "id" => "#"
            ],
            [
                "title" => "Card Title 3",
                "text" => "SSome quick example text to build on the card title and make up the bulk of the card's content.",
                "image" => "../assets/img/hydraulic_forklift.webp",
                "id" => "#"
            ],
            [
                "title" => "Card Title 3",
                "text" => "SSome quick example text to build on the card title and make up the bulk of the card's content.",
                "image" => "../assets/img/hydraulic_forklift.webp",
                "id" => "#"
            ]
            ];


        return view('list-type', [
            'cards' => $cards,
            'hero' => $hero
        ]);
    }

}
