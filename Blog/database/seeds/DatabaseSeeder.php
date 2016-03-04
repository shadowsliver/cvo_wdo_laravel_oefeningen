<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);

        factory(App\User::class, 4)
            ->create()
            ->each(function($u){
                for($i=0;$i<rand(2,3); $i++){
                    $u->posts()->save(factory(App\Post::class)->make());
                }
            });
    }
}
