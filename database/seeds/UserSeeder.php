<?php

use Illuminate\Database\Seeder;
use App\Join;
use TCG\Voyager\Models\Role;
use TCG\Voyager\Models\User;

class UserSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        if (User::count() == 0) {
            $role = Role::where('name', 'admin')->firstOrFail();

            User::create([
//                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
                'remember_token' => Str::random(60),
                'role_id' => $role->id,
            ]);
            Join::create([
                'first_name' => 'Admin',
                'last_name' => 'Admin',
                'email' => 'admin@admin.com',
                'phone' => '1234',
                'gender' => 'male',
                'creation' => date('Y-m-d'),
                'occupation' => 'self-employed',
                'M-status' => 'married',
                'dependants' => 'No',
                'goals' => 'No',
            ]);
        }
    }

}
