<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            //FICTION
            [
                'category_id'=>1,
                'title'=>'5 cm'
            ],
            [
                'category_id'=>1,
                'title'=>'Laskar Pelangi'
            ],
            [
                'category_id'=>1,
                'title'=>'Edensor'
            ],

            //SCIENCE
            [
                'category_id'=>2,
                'title'=>'The Selfish Gene'
            ],
            [
                'category_id'=>2,
                'title'=>'A Briefer History of Time'
            ],
            [
                'category_id'=>2,
                'title'=>'Pale Blue Dot: A Vision of the Human Future in Space'
            ],

            //COMEDY
            [
                'category_id'=>3,
                'title'=>'Senggol Kiri Senggol Kanan'
            ],
            [
                'category_id'=>3,
                'title'=>'Si Juki - Kisah Kusut Dunia Dongeng'
            ],

            //HORROR
            // [
            //     'category_id'=>4,
            //     'title'=>'Dracula'
            // ],
            // [
            //     'category_id'=>4,
            //     'title'=>'House of Leaves'
            // ],

            //COMPUTER
            [
                'category_id'=>5,
                'title'=>'The C Programming Language'
            ],
            [
                'category_id'=>5,
                'title'=>'The Art of Computer Programming'
            ],
            [
                'category_id'=>5,
                'title'=>'Software Systems Architecture: Working With Stakeholders Using Viewpoints and Perspectives'
            ]
        ]);
    }
}
