<?php

use Illuminate\Database\Seeder;
use App\Roles;
use App\Requests;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(Roles::class, 30)->create();
        factory(Requests::class, 1000)->create();
    }
}
