<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Models\Courses;
use Illuminate\Support\Facades\Hash;
use App\Models\Unit;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    $permission=[User::Student,User::Admin,User::Teacher];
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone'=> $faker->phoneNumber,
        'email_verified_at' => now(),
        'password' =>  Hash::make('123'), // password
        'remember_token' => Str::random(10),
        'permission' => array_rand($permission),
    ];
});

//
$factory->define(Courses::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'description' => $faker->text(),
        'price' => $faker->randomFloat(3, 0, 1000),
        'discount' => $faker->randomFloat(3, 0, 1000),
        'created_by' => User::inRandomOrder()->where('permission', User::Teacher)->first()->id ,
    ];
});

$factory->define(Unit::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'sorting' => rand(0, 15),
        'course_id' =>  factory(Courses::class)->create()->id,
        'created_by' => factory(User::class)->create()->id,
    ];
});


$factory->define(Unit::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'content' => $faker->text(),
        'unit_id' =>  factory(Unit::class)->create()->id,
        'created_by' => factory(User::class)->create()->id,
    ];
});