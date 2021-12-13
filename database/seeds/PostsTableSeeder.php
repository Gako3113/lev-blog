<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 5)->create();
        // DB::table('posts')->insert([
        //     'title' => '命名の心得',
        //     'body' => '命名はデータを基準に考える',
        // ]);
        // DB::table('posts')->insert([
        //     'title' => 'エラー文',
        //     'body' => '読めるようになれば怖くない',
        // ]);
    }
}
