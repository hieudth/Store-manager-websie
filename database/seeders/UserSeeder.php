<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'first_name' => Str::random(5),
        //     'last_name' => Str::random(5),
        //     'email' => Str::random().'@gmail.com',
        //     'password' => Hash::make('password'),
        //     'address' => Str::random(30),
        //     'birthday' =>Carbon::create()
        // ]);
        User::factory()
                ->hasRoleUsers(1)
                ->count(50)
                ->create();
    }
}
