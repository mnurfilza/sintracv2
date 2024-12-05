<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductStorageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_storage_seeder')->insert([
            'id' => 1,
            'product_id' => 1,
            'path'=> 'Forklift-Attachment/Bale-Clamp-Attachment.png'
        ]); 
    }
}
