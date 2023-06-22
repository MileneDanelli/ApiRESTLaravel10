<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDefaultUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('admin123')
            ],
            [
                'name' => 'User',
                'email' => 'user@example.com',
                'password' => bcrypt('user123')
            ]
        ];

        foreach ($users as $userData) {
            User::create($userData);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        User::whereIn('email', ['admin@example.com', 'user@example.com'])->delete();
    }
}
