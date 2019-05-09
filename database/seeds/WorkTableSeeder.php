<?php

use Illuminate\Database\Seeder;

class WorkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('works')->insert([

        'name' => 'unde perspiciatis.',
        'tag_id' => 1,
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi repellat pariatur illum in assumenda nulla dignissimos ipsum quibusdam dolorem. Laudantium.',
        'created_at' => NOW(),
        'updated_at' => NOW()
      ]);
    }
}
