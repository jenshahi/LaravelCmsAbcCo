<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Page;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('123123');
        $user->save();

        $page_title = new Page();
        $page_title->title = 'home';
        $page_title->heading = '';
        $page_title->description = '';
        $page_title->save();

        $page_title = new Page();
        $page_title->title = 'about';
        $page_title->heading = '';
        $page_title->description = '';
        $page_title->save();

        $page_title = new Page();
        $page_title->title = 'contact';
        $page_title->heading = '';
        $page_title->description = '';
        $page_title->save();
    }
}
