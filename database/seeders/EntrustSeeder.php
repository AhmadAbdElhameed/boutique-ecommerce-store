<?php

namespace Database\Seeders;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Role;
use App\Models\Permission;
use App\Models\User;

class EntrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Factory::create();

        $adminRole = Role::create([
            'name' => "admin",
        'display_name' => "Administration",
        'description' => "Administration",
        'allowed_route' => 'admin'
    ]);
        $supervisorRole = Role::create([
            'name' => "supervisor",
        'display_name' => "supervisor",
        'description' => "supervisor",
        'allowed_route' => 'admin'
    ]);
        $customerRole = Role::create([
            'name' => "customer",
        'display_name' => "customer",
        'description' => "customer",
        'allowed_route' => null
    ]);



    $admin = User::create([

        'first_name' => 'Admin',
        'last_name' => 'System',
        'username' => 'admin',
        'email' => 'admin@boutique.test',
        'email_verified_at' => now(),
        'mobile' => '0123654987',
        'user_image' => 'avatar.svg',
        'status' => 1,
        'password' => bcrypt('12345678'),
        'remember_token' => Str::random(10)
    ]);
    $admin->attachRole($adminRole);



    $supervisor = User::create([

        'first_name' => 'Supervisor',
        'last_name' => 'System',
        'username' => 'supervisor',
        'email' => 'supervisor@boutique.test',
        'email_verified_at' => now(),
        'mobile' => '0123753287',
        'user_image' => 'avatar.svg',
        'status' => 1,
        'password' => bcrypt('12345678'),
        'remember_token' => Str::random(10)
    ]);
    $supervisor->attachRole($supervisorRole);



    $customer = User::create([

        'first_name' => 'Ahmad',
        'last_name' => 'Mohammed',
        'username' => 'Ahmad93',
        'email' => 'ahmad@yahoo.com',
        'email_verified_at' => now(),
        'mobile' => '01092991713',
        'user_image' => 'avatar.svg',
        'status' => 1,
        'password' => bcrypt('12345678'),
        'remember_token' => Str::random(10)
    ]);
    $customer->attachRole($customerRole);


    for ($i = 1; $i <=20 ; $i++){
        $random_customer = User::create([

            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'username' => $faker->userName,
            'email' => $faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'mobile' => '010929'.$faker->numberBetween(1000000,9999999),
            'user_image' => 'avatar.svg',
            'status' => 1,
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10)
        ]);
        $random_customer->attachRole($customerRole);

        }



    }
}
