<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('admin_menu')->insert([
            [
                "parent_id" => 0,
                "order"     => 8,
                "title"     => "Users",
                "icon"      => "fa-users",
                "uri"       => ""
            ],
            [
                "parent_id" => 8,
                "order"     => 9,
                "title"     => "Users",
                "icon"      => "fa-users",
                "uri"       => "users"
            ]
        ]);
    }
}
