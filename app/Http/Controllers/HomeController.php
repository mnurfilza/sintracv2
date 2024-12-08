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

            $result = DB::table('product')->select('product.id as product_id','product.name as product_name','product.desc as product_desc','product.thumbnail as product_thumbnail','type_product.*')
            ->leftJoin('type_product','product.id','=','type_product.product_id')
            ->where('product_id', '=', $id)->get();
            $processedData = [];
    
            foreach ($result as $item) {
                $productId = $item->product_id;
    
                // Jika sub_category belum ada, tambahkan data sub_category
                if (!isset($processedData[$productId])) {
                    $processedData[$productId] = [
                        'id' => $item->product_id,
                        'title' => $item->product_name,
                        'text' => $item->product_desc,
                        'image' => $item->product_thumbnail,
                        'types' => [] // Menambahkan array 'brand' untuk menampung brand
                    ];
                }
    
                // Tambahkan brand ke dalam sub_category jika brand id ada
                if ($item->id) {
                    $processedData[$productId]['types'][] = [
                        'id' => $item->id,
                        'title' => $item->label,
                        'image' => $item->thumbnail,
                        'text'=>$item->desc
                    ];
                }
            }
    
            // Hasilkan data yang sudah diproses
            $processedData = array_values($processedData);
            // Tampilkan hasil
           
    
            return view('list-type', ['data' => $processedData]);
    }

    public function sub_category(string $category)
    {
        $result = DB::table('category')->select('category.id as category_id','category.title as category_title','category.desc as category_desc','sub_category.*')
        ->leftJoin('sub_category','sub_category.category_id','=','category.id')
        ->where('category.id', '=', $category)->get();
        $processedData = [];

        foreach ($result as $item) {
            $categoryId = $item->category_id;

            // Jika sub_category belum ada, tambahkan data sub_category
            if (!isset($processedData[$categoryId])) {
                $processedData[$categoryId] = [
                    'id' => $item->category_id,
                    'title' => $item->category_title,
                    'desc' => $item->category_desc,
                    'sub_category' => [] // Menambahkan array 'brand' untuk menampung brand
                ];
            }

            // Tambahkan brand ke dalam sub_category jika brand id ada
            if ($item->id) {
                $processedData[$categoryId]['sub_category'][] = [
                    'id' => $item->id,
                    'title' => $item->title,
                    'thumbnail' => $item->thumbnail,
                    'text'=>$item->desc
                ];
            }
        }

        // Hasilkan data yang sudah diproses
        $processedData = array_values($processedData);
        // Tampilkan hasil
       

        // echo "<pre>";
        // print_r($processedData);
        // echo "</pre>";
        // die();

        return view('list-sub-category', ['data' => $processedData]);
    }

}
