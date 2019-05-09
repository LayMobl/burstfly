<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('tags')->insert([
        'name' => 'tagname',
        'image' => 'ergerg.jpg',
        'created_at' => NOW(),
        'updated_at' => NOW()
      ]);
    }
}
