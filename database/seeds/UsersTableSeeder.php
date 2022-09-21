<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $mySelf = new User();
        $mySelf->name = 'stefano';
        $mySelf->email = 'stecarraa95@gmail.com';
        $mySelf->password = Hash::make('CiaoSilvia1');
        $mySelf->save();

        for($i = 0; $i < 10; $i++) {
            $newUser = new User();
            $newUser->name = $faker->userName();
            $newUser->email = $faker->unique()->email();
            $newUser->password = Hash::make($faker->password());
            $newUser->save();
        }
    }
    
}
