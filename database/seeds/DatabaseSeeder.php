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
      DB::table('users')->insert([
        ['id'=>1, 'email'=>'nhat','password'=>bcrypt(1234), 'lever'=>0]
        ]);
      // $this->call(UsersTableSeeder::class);
      $this->call(CatTableSeeder::class);
      $this->call(TypeTableSeeder::class);
      $this->call(AppTableSeeder::class);
      $this->call(GameTableSeeder::class);
         
            
    }
}
