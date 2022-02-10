<?php


namespace App\classes;


class User
{
    public function getAllUser()
    {
        return[
            0=>[
                'id' => 1,
                'name' => 'T Khan',
                'email' => 'admin@gmail.com',
                'password' => '123456'
            ],
             1=>[
                'id' => 2,
                'name' => 'Rafa Khan',
                'email' => 'rafa@gmail.com',
                'password' => '456321'
             ],
        ];
    }

}