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
            [
                'name'=>'Ahmad Ali',
                'email'=>'ahmad@gmail.com',
                'phone' => '01935056526',
                'username'=>'ahmad',
                'role'=>'admin',
                'status'=>'active',
                'password'=> Hash::make('111'),
                'created_at'=> Carbon::now()->toDateTimeString(),
            ],[
                'name'=>'Sabbir Ahmed',
                'email'=>'sabbir@gmail.com',
                'phone' => '0160012612',
                'username'=>'sabbir',
                'role'=>'user',
                'status'=>'inactive',
                'password'=> Hash::make('111'),
                'created_at'=> Carbon::now()->toDateTimeString(),
            ],[
                'name'=>'Reja Kazi',
                'email'=>'reja@gmail.com',
                'phone' => '0182022369',
                'username'=>'reja',
                'role'=>'user',
                'status'=>'active',
                'password'=> Hash::make('111'),
                'created_at'=> Carbon::now()->toDateTimeString(),
            ]
        ]);
        DB::table('roles')->insert([
            [
                'role_name' => 'Super Admin',
                'role_slug' => 'super-admin',
            ],[
                'role_name' => 'Admin',
                'role_slug' => 'admin',
            ],[
                'role_name' => 'Author',
                'role_slug' => 'author',
            ],[
                'role_name' => 'Editor',
                'role_slug' => 'editor',
            ],[
                'role_name' => 'Subscriber',
                'role_slug' => 'subscriber',
            ],
            
        ]);
        DB::table('basics')->insert([
            'basic_company_name' => '@D corporation ltd',
            'basic_title' => 'fullfil your requirements',
        ]);
        DB::table('contacts')->insert([
            'contact_phone1' => '01935056526',
            'contact_email1' => 'info@ad.corporation.xyz',
            'contact_address1' => '100/1, East Ahmmad Nagar, Mirpur-1, Dhaka-1216',
        ]);
        DB::table('socials')->insert([
            'social_facebook' => 'www.facebook.com/ad.ahmad.0',
            'social_instagram' => 'www.instagram.com/ad/corporation'
        ]);
        // DB::table('')->insert([

        // ]);
    }
}
