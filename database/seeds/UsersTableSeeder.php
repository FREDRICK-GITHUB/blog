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
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'admin' => 1,
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/predphoto.jpg',
            'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In dolorem eligendi dicta exercitationem autem rem, molestiae architecto corporis temporibus ab iusto magnam quas laboriosam, ea voluptatem odit deserunt dolore ex!',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
    }
}
