<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name'=>'watc2h',
            'email'=>'test@test.com',
            'password' => bcrypt('password'),
            'admin' => 1
            ]);
        App\Profile::create([
                'user_id' => $user->id,
                'avatar'=> 'upload/avatars/1.jpg',
                'about'=>'lorem fsdffsjfksjflsf fjsdklfjs;fjs;fjsdf',
                'facebook'=>'facebook.com',
                'youtube'=>'youtube.com'
            ]);
    }
}
