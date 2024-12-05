<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brand')->insert([
            'id' => 1,
            'name' => 'BYD',
            'sub_category_id'=>1,
            'thumbnail'=>'Forklift-Attachment/Bale-Clamp-Attachment.png',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, rerum. Aspernatur enim, sit ullam distinctio eos aliquid corporis eius debitis! Aliquam nostrum a alias molestiae aspernatur quae quibusdam, quos pariatur?'
            
        ]); 
    }
}
