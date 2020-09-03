<?php


use Phinx\Seed\AbstractSeed;
use Faker\Factory as Faker;

class UsersSeeder extends AbstractSeed
{

    public function run()
    {
        $faker = Faker::create();
        $data = [];
        for ($i = 0; $i < 20; $i++) {
            $data[] = [
              'first_name' => $faker->firstName,
              'last_name'  => $faker->lastName,
              'email'      => $faker->unique()->email,
              'password'   => password_hash('secret', PASSWORD_DEFAULT),
              'created_at' => date('Y-m-d H:i:s')
            ];
        }
        $this->table('users')->insert($data)->saveData();

    }
}
