<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DB;

class SetUpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'Ahmad Ali',
            'email'=>'ahmad@gmail.com',
            'phone' => '01935056526',
            'username'=>'ahmad',
            'role'=>'admin',
            'status'=>'active',
            'password'=> Hash::make('111'),
            'created_at'=> Carbon::now()->toDateTimeString(),
        ]);
        DB::table('roles')->insert([
            [
                'role_name' => 'Super Admin',
                'role_slug' => 'super-admin',
            ],
            [
                'role_name' => 'Admin',
                'role_slug' => 'admin',
            ],
            [
                'role_name' => 'Author',
                'role_slug' => 'author',
            ],
            [
                'role_name' => 'Editor',
                'role_slug' => 'editor',
            ],
            [
                'role_name' => 'Subscriber',
                'role_slug' => 'subscriber',
            ],
            
        ]);
    }
}
