<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Admin', 'email' => 'admin@admin.com', 'password' => '$2y$10$/a8qhVJvfAiMjkOvgV/1S.zYsmE5tOAQ0Xvx3vSTy7HdivXYpdDom', 'role_id' => 1, 'user_status' => 'Active', 'remember_token' => '', 'employee_code' => null, 'gender' => 'Male', 'dateofbirth' => '', 'job_title' => '', 'profile_picture' => '', 'department_id' => null,],
            ['id' => 2, 'name' => 'sherif khaled', 'email' => 'sherif.khaleed@gmail.com', 'password' => '$2y$10$f9c35QoyCcygMVJ.MHrxWOaMa8CQjb4bf3DjVpn7cFeNNxIihcpNS', 'role_id' => 2, 'user_status' => 'Active', 'remember_token' => null, 'employee_code' => null, 'gender' => 'Male', 'dateofbirth' => '10-10-2017', 'job_title' => 'software developer', 'profile_picture' => '/tmp/phpsGtC1u', 'department_id' => 1,],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
