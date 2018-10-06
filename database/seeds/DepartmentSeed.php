<?php

use Illuminate\Database\Seeder;

class DepartmentSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'IT', 'description' => null,],

        ];

        foreach ($items as $item) {
            \App\Department::create($item);
        }
    }
}
