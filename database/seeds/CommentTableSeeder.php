<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('comments')->insert([
        'work_id' => 1,
        'message' => '34000 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae recusandae aperiam eligendi iusto sint nihil, esse temporibus quisquam sequi repellendus ducimus delectus molestiae animi amet itaque commodi sunt unde perspiciatis.',
        'created_at' => NOW(),
        'updated_at' => NOW()
      ]);
      \DB::table('comments')->insert([
        'work_id' => 1,
        'message' => 'Dragon Dildo',
        'created_at' => NOW(),
        'updated_at' => NOW()
      ]);
    }
}
