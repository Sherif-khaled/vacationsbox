<?php

use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'Administrator (can create other users)',],
            ['id' => 2, 'title' => 'Employee',],
            ['id' => 3, 'title' => 'Manager',],
            ['id' => 4, 'title' => 'Executive Manager',],
            ['id' => 5, 'title' => 'Human Resources',],

        ];

        foreach ($items as $item) {
            \App\Role::create($item);
        }
    }
}
