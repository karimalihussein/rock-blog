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
      $user =  App\User::create([
            'name' => 'karim ali',
            'email' => 'karim1@gmail.com',
            'password' => bcrypt('01200902377'),
            'admin' => 1
        ]);
        App\Profile::create([
              'user_id' => $user->id,
              'avatar' => 'uploads/avatars/1.png',
              'about' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio aliquam dolorem, et magni repellat eius officia pariatur dicta nobis ipsa laboriosam excepturi tenetur distinctio. Praesentium, tempora! Iusto minima soluta aperiam.',
              'facebook' => 'facebook.com',
              'youtube' => 'youtube.com',
        ]);
    }
}
