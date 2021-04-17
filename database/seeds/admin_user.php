<?php

use Illuminate\Database\Seeder;
use Encore\Admin\Auth\Database\Administrator;
use Encore\Admin\Auth\Database\Role;

class admin_user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // create a user.
        Administrator::truncate();
        Administrator::create([
            'username' => 'araiy',
            'password' => bcrypt('Aq!sw2de3fr4'),
            'name'     => 'Administrator',
        ]);

        // create a role.
        Role::truncate();
        Role::create([
            'name' => 'Administrator',
            'slug' => 'administrator',
        ]);

        // add role to user.
        Administrator::first()->roles()->save(Role::first());

        // 別のユーザー(例:staff）やロールを初期状態で追加しておく場合
        Administrator::create([
            'username' => 'staff',
            'password' => bcrypt('staff'),
            'name'     => 'staff',
        ]);

        // create a role.
        Role::create([
            'name' => 'staff',
            'slug' => 'staff',
        ]);

        // add role to user.
        Administrator::find(1)->roles()->save(Role::find(1));

    }
}