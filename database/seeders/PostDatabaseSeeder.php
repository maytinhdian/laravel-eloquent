<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            ['title'=>'Bài viết số 1','content'=>'Nội dung bài viết số 1'],
            ['title'=>'Bài viết số 2','content'=>'Nội dung bài viết số 2'],
            ['title'=>'Bài viết số 3','content'=>'Nội dung bài viết số 3'],
            ['title'=>'Bài viết số 4','content'=>'Nội dung bài viết số 4'],
            ['title'=>'Bài viết số 5','content'=>'Nội dung bài viết số 5'],
            ['title'=>'Bài viết số 6','content'=>'Nội dung bài viết số 6'],
        ]);
    }
}
