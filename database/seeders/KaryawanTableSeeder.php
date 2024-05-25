<?php

namespace Database\Seeders;

use App\Models\employees;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryawanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'name_karyawan' => 'John Doe',
                'tanggal_lahir' => '1985-05-15',
                'alamat' => '123 Main Street',
                'foto' => 'https://i0.wp.com/ctmirror-images.s3.amazonaws.com/wp-content/uploads/2021/01/dummy-man-570x570-1.png?fit=570%2C570&ssl=1',
                'status_pernikahan' => 'Menikah',
                'created_at' => now(),
            ],
            [
                'name_karyawan' => 'Jane Smith',
                'tanggal_lahir' => '1990-07-22',
                'alamat' => '456 Maple Avenue',
                'foto' => 'https://www.shutterstock.com/image-vector/person-gray-photo-placeholder-woman-600nw-1241538838.jpg',
                'status_pernikahan' => 'Belum Menikah',
                'created_at' => now(),
            ],
            [
                'name_karyawan' => 'R. Ratu',
                'tanggal_lahir' => '2026-03-11',
                'alamat' => 'Cipayung',
                'foto' => 'https://www.shutterstock.com/image-vector/person-gray-photo-placeholder-woman-600nw-1241538838.jpg',
                'status_pernikahan' => 'Belum Menikah',
                'created_at' => now(),
            ],
            [
                'name_karyawan' => 'Iqball',
                'tanggal_lahir' => '1990-05-03',
                'alamat' => 'Depok',
                'foto' => 'https://i0.wp.com/ctmirror-images.s3.amazonaws.com/wp-content/uploads/2021/01/dummy-man-570x570-1.png?fit=570%2C570&ssl=1',
                'status_pernikahan' => 'Menikah',
                'created_at' => now(),
            ],
            [
                'name_karyawan' => 'Robert Brown',
                'tanggal_lahir' => '1982-03-10',
                'alamat' => '789 Oak Lane',
                'foto' => 'https://i0.wp.com/ctmirror-images.s3.amazonaws.com/wp-content/uploads/2021/01/dummy-man-570x570-1.png?fit=570%2C570&ssl=1',
                'status_pernikahan' => 'Menikah',
                'created_at' => now(),
            ],
            [
                'name_karyawan' => 'Emily Davis',
                'tanggal_lahir' => '1995-11-30',
                'alamat' => '321 Pine Road',
                'foto' => 'https://www.shutterstock.com/image-vector/person-gray-photo-placeholder-woman-600nw-1241538838.jpg',
                'status_pernikahan' => 'Belum Menikah',
                'created_at' => now(),
            ],
            [
                'name_karyawan' => 'Michael Wilson',
                'tanggal_lahir' => '1988-09-25',
                'alamat' => '654 Cedar Street',
                'foto' => 'https://i0.wp.com/ctmirror-images.s3.amazonaws.com/wp-content/uploads/2021/01/dummy-man-570x570-1.png?fit=570%2C570&ssl=1',
                'status_pernikahan' => 'Menikah',
                'created_at' => now(),
            ],
            [
                'name_karyawan' => 'Sarah Johnson',
                'tanggal_lahir' => '1993-02-18',
                'alamat' => '987 Birch Boulevard',
                'foto' => 'https://www.shutterstock.com/image-vector/person-gray-photo-placeholder-woman-600nw-1241538838.jpg',
                'status_pernikahan' => 'Belum Menikah',
                'created_at' => now(),
            ],
            [
                'name_karyawan' => 'David Miller',
                'tanggal_lahir' => '1978-06-05',
                'alamat' => '246 Elm Avenue',
                'foto' => 'https://i0.wp.com/ctmirror-images.s3.amazonaws.com/wp-content/uploads/2021/01/dummy-man-570x570-1.png?fit=570%2C570&ssl=1',
                'status_pernikahan' => 'Menikah',
                'created_at' => now(),
            ],
            [
                'name_karyawan' => 'Laura Taylor',
                'tanggal_lahir' => '1984-12-15',
                'alamat' => '135 Spruce Way',
                'foto' => 'https://www.shutterstock.com/image-vector/person-gray-photo-placeholder-woman-600nw-1241538838.jpg',
                'status_pernikahan' => 'Belum Menikah',
                'created_at' => now(),
            ],
            [
                'name_karyawan' => 'James Anderson',
                'tanggal_lahir' => '1991-08-19',
                'alamat' => '753 Willow Drive',
                'foto' => 'https://i0.wp.com/ctmirror-images.s3.amazonaws.com/wp-content/uploads/2021/01/dummy-man-570x570-1.png?fit=570%2C570&ssl=1',
                'status_pernikahan' => 'Menikah',
                'created_at' => now(),
            ],
            [
                'name_karyawan' => 'Patricia Martinez',
                'tanggal_lahir' => '1987-04-22',
                'alamat' => '369 Chestnut Circle',
                'foto' => 'https://www.shutterstock.com/image-vector/person-gray-photo-placeholder-woman-600nw-1241538838.jpg',
                'status_pernikahan' => 'Belum Menikah',
                'created_at' => now(),
            ],
        ]);
    }
}
