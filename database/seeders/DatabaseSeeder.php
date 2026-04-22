<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => bcrypt('password')
            ]
        );

        DB::table('products')->insert([
            [
                'name' => 'Bút bi VIP',
                'price' => 15000,
                'quantity' => 12,
                'category' => 'Văn phòng phẩm',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sổ tay A5',
                'price' => 45000,
                'quantity' => 4,
                'category' => 'Văn phòng phẩm',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tai nghe Bluetooth',
                'price' => 320000,
                'quantity' => 0,
                'category' => 'Điện tử',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Đèn bàn LED',
                'price' => 220000,
                'quantity' => 8,
                'category' => 'Nội thất',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cặp sách chống gù',
                'price' => 380000,
                'quantity' => 3,
                'category' => 'Phụ kiện',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $department = Department::create([
            'name' => 'CNTT',
            'description' => 'Phòng CNTT',
        ]);

        Employee::create([
            'name' => 'Nguyen Van A',
            'email' => 'a@gmail.com',
            'position' => 'Dev',
            'department_id' => $department->id,
        ]);
    }
}
