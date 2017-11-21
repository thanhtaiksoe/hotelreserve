<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    

{
        //
        $user = new User();
        $user->name = "Super Admin";
        $user->email = "superadmin@gmail.com";
        $user->password = bcrypt("123456");
       /* $user->is_admin = true;*/
        $user->is_super = true;
      /*  $user->save();
        $user->roles()->attach(Role::where('name','Super Admin')->first()); */ 

    }

     /*\DB::table("users")->insert([
            'name'  => 'SuperAdmin',
            'email' => 'superadmin@gmail.com',
            'password' => \Hash::make('123456'),
            'is_super'  => true
        ]); */  
}