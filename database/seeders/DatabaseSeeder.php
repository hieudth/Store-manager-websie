<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(DeliveryNoteSeeder::class);
        $this->call(DeliveryNoteDetailSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ReceiptSeeder::class);
        $this->call(ReceiptDetailSeeder::class);
        $this->call(SupplierSeeder::class);
        $this->call(RoleSeeder::class);
    }
}
