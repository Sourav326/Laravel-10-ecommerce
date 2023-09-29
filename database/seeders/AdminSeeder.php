<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRecords = [
            ['id'=> 1,'name'=>'Super Admin','type'=>'superadmin',
            'vendor_id'=>0,'mobile'=>'9878676543',
            'email'=>'admin@yopmail.com','password'=>'$2a$12$7x7GfydxmbwIFaDJBnjNqemVByzggqWJYdeh7xXcWpNSFj94RdGUO',
            'image'=>'','status'=>1],
        ];
        Admin::insert($adminRecords);
    }
}
