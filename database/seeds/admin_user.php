<?php

use Illuminate\Database\Seeder;
use Encore\Admin\Auth\Database\Administrator;
use Encore\Admin\Auth\Database\Role;
use Illuminate\Support\Facades\DB;

class admin_user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_users')->insert([
            'username' => 'araiy',
            'password' => bcrypt('Aq!sw2de3fr4'),
            'name'     => 'Administrator',
        ]);
     
    }
}
