<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use DateTime;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            [
                'name'=>'Giovanny',
                'last_name'=>'Segura',
                'email'=>'giovanny12316@hotmail.com',
                'user'=>'Giova',
                'password'=>'123456',
                'type'=>'admin',
                'active'=>1,
                'address'=>'Por Ahi',
                'created_at'=>new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=>'Luis',
                'last_name'=>'Ahhh',
                'email'=>'giovanny45664@hotmail.com',
                'user'=>'Lucho',
                'password'=>'123456',
                'type'=>'user',
                'active'=>1,
                'address'=>'Por Ahi',
                'created_at'=>new DateTime,
                'updated_at'=> new DateTime
            ],
        );
        User::insert($data);
    }
}
