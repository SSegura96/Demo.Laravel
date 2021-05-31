<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Post([
            'title' => 'Something else',
            'content' => 'Something other content'
        ]);

        $post->save();

        $post = new \App\Post([
            'title' => 'Sergio is wow',
            'content' => '☺'
        ]);

        $post->save();
    }
}
