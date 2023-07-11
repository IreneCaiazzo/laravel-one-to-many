<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            [
                'name' => 'Frontend',
            ],
            [
                'name' => 'Backend',
            ],
            [
                'name' => 'Fullstack',
            ],
        ];


        foreach ($types as $type) {
            Type::create($type);
        }
    }
}
