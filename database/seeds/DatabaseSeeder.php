<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      // $this->call(UsersTableSeeder::class);
      // $this->call(CatTableSeeder::class);
      // $this->call(PostTableSeeder::class);
          $this->call(AppTableSeeder::class);
            // DB::table('users')->insert([
            // ['id'=>1, 'email'=>'nhat','password'=>bcrypt(1234), 'lever'=>0]
            // ]);
    }
}
