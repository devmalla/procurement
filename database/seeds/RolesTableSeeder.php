<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('roles')->insert([
            'slug' => 'admin',
            'name' => 'admin',
        ]);

        DB::table('roles')->insert([
            'slug' => 'creator',
            'name' => 'creator',
        ]);

        DB::table('roles')->insert([
            'slug' => 'approver',
            'name' => 'approver',
        ]);

        DB::table('roles')->insert([
            'slug' => 'reviewer',
            'name' => 'reviewer',
        ]);

        DB::table('roles')->insert([
            'slug' => 'bidder',
            'name' => 'bidder',
        ]);
    }
}
