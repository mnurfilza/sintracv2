<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product')->insert([
            'id' => 1,
            'name' => 'Byd Electric Forklift',
            'brand_id'=>1,
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, rerum. Aspernatur enim, sit ullam distinctio eos aliquid corporis eius debitis! Aliquam nostrum a alias molestiae aspernatur quae quibusdam, quos pariatur?'
        ]); 
    }
}
