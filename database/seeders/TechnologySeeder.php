<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{

    private $technologies = [
        'Angular',
        'Angular Material',
        'RxJS',
        'NgRx',
        'Angular Flex-Layout',
        'FileSaver.js',
        'ExcelJS',
        'Laravel',
        'JWT',
        'Intervention Image',
        'MySQL',
        'Git',
        'NPM',
        'Composer',
        'Codeigniter',
        'Bootstrap',
        'Swagger',
        'PHPUnit',
        'PostMan',
        'PWA',
        'RapidAPI',
        'API',
        'Dark mode',
        'In Memory Web API',
        'CRUD',

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
