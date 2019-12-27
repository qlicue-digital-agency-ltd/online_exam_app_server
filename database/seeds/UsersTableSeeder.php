<?php

use App\Events\UserHasRegisteredSucceffulyEvent;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        ///System administrator
        $user = new User();
        $user->phone = "+255715123456";
        $user->password = Hash::make('admin123');
        $user->save();

        event(new UserHasRegisteredSucceffulyEvent($user, 'Administrator'));
    }
}
