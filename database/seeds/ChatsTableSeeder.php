<?php

use Illuminate\Database\Seeder;

class ChatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chats')->insert([
            'id' => 1,
            'chatbody' => 'Hello there!',
            'users_id' => 1,
            'read' => 0,
            'created_at' => '2016-11-04 23:47:00',
            'updated_at' => '2016-11-04 23:47:00',
        ]);

        DB::table('chats')->insert([
            'id' => 2,
            'chatbody' => 'Hi! Nice to meet you!',
            'users_id' => 2,
            'read' => 0,
            'created_at' => '2016-11-04 23:47:02',
            'updated_at' => '2016-11-04 23:47:02',
        ]);
    }
}
