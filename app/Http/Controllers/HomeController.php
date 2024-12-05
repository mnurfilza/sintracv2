<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller

{
    public function home()
    {
        return view('compro');
    }

    public function products(string $category)
    {

        $result = DB::table('brand')->select('brand.id as brand_id','brand.name as brand_name','brand.desc as brand_desc','brand.thumbnail as brand_thumbnail','product.*')
        ->leftJoin('product','brand.id','=','product.brand_id')
        ->where('brand_id', '=', $category)->get();
        $processedData = [];

        foreach ($result as $item) {
            $brandId = $item->brand_id;

            // Jika sub_category belum ada, tambahkan data sub_category
            if (!isset($processedData[$brandId])) {
                $processedData[$brandId] = [
                    'id' => $item->brand_id,
                    'title' => $item->brand_name,
                    'text' => $item->brand_desc,
                    'image' => $item->brand_thumbnail,
                    'product' => [] // Menambahkan array 'brand' untuk menampung brand
                ];
            }

            // Tambahkan brand ke dalam sub_category jika brand id ada
            if ($item->id) {
                $processedData[$brandId]['product'][] = [
                    'id' => $item->id,
                    'title' => $item->name,
                    'image' => $item->thumbnail,
                    'text'=>$item->desc
                ];
            }
        }

        // Hasilkan data yang sudah diproses
        $processedData = array_values($processedData);
        // Tampilkan hasil
       

        return view('list-product', ['data' => $processedData]);
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


        $result = DB::table('sub_category')->select('brand.*','sub_category.id as sub_id','sub_category.title','sub_category.desc as sub_desc','sub_category.thumbnail as sub_thumbnail')->leftJoin('brand','sub_category.id','=','brand.sub_category_id')->where('sub_category.id', '=', $category)->get();
        
        $processedData = [];

        foreach ($result as $item) {
            $subCategoryId = $item->sub_id;

            // Jika sub_category belum ada, tambahkan data sub_category
            if (!isset($processedData[$subCategoryId])) {
                $processedData[$subCategoryId] = [
                    'id' => $item->sub_id,
                    'title' => $item->title,
                    'desc' => $item->sub_desc,
                    'thumbnail' => $item->sub_thumbnail,
                    'brand' => [] // Menambahkan array 'brand' untuk menampung brand
                ];
            }

            // Tambahkan brand ke dalam sub_category jika brand id ada
            if ($item->id) {
                $processedData[$subCategoryId]['brand'][] = [
                    'id' => $item->id,
                    'name' => $item->name,
                    'thumbnail' => $item->thumbnail,
                    'desc'=>$item->desc
                ];
            }
        }

        // Hasilkan data yang sudah diproses
        $processedData = array_values($processedData);
        // Tampilkan hasil
       

        return view('list-brand', ['data' => $processedData]);
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
