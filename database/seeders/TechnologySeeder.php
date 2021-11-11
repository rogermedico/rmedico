<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{

    private $technologies = [
        'Laravel',
        'Angular',
        'RxJS',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->technologies as $technology) {
            Technology::create([
                'name' => $technology,
            ]);
        }

    }
}
