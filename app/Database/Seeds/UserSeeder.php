<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'Fauzan',
            'email' => 'fauzan223360@gmail.com',
            'password' => password_hash('basith2121', PASSWORD_BCRYPT),
            'role' => 'admin'
        ];

        $this->db->table('users')->insert($data);
    }
}
