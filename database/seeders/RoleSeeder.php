<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = $this->getDataToSeed();

        foreach ($roles as $role) {
            \Spatie\Permission\Models\Role::create(['name' => $role]);
        }
    }

    private function getDAtaToSeed(): array
    {
        return [
            'editor' => 'web',
            'subscriber' => 'web',
            'creator' => 'web',
        ];
    }
}
