<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $project = Project::factory()->create([
            'name' => 'Taj 97',
            'description' => 'Proyecto Taj 97',
            'initial_date' => Carbon::create(2023, 3, 31),
            'Customer' => 'Constructora Ava Builder'
        ]);

        $project->addMedia("public/images/projects/Taj97/Portada.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Taj97/Taj97-1.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Taj97/Taj97-2.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Taj97/Taj97-3.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Taj97/Taj97-4.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Taj97/Taj97-5.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Taj97/Taj97-6.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Taj97/Taj97-7.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Taj97/Taj97-8.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Taj97/Taj97-9.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Taj97/Taj97-10.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Taj97/Taj97-11.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Taj97/Taj97-12.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Taj97/Taj97-13.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Taj97/Taj97-14.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Taj97/Taj97-15.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Taj97/Taj97-16.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Taj97/Taj97-17.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Taj97/Taj97-18.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Taj97/Taj97-19.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Taj97/Taj97-20.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Taj97/Taj97-21.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Taj97/Taj97-22.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Taj97/Taj97-23.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Taj97/Taj97-24.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Taj97/Taj97-25.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Taj97/Taj97-26.jpg")->preservingOriginal()->toMediaCollection('images');

        $project = Project::factory()->create([
            'name' => 'Abby 193',
            'description' => 'Proyecto Abby 193',
            'initial_date' => Carbon::create(2023, 7, 27),
            'Customer' => 'Abby 193'
        ]);

        $project->addMedia("public/images/projects/Abby193/Portada.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Abby193/Abby193-1.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Abby193/Abby193-2.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Abby193/Abby193-3.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Abby193/Abby193-4.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Abby193/Abby193-5.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Abby193/Abby193-6.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Abby193/Abby193-7.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Abby193/Abby193-8.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Abby193/Abby193-9.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Abby193/Abby193-10.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Abby193/Abby193-11.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Abby193/Abby193-12.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Abby193/Abby193-13.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Abby193/Abby193-14.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Abby193/Abby193-15.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Abby193/Abby193-16.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Abby193/Abby193-17.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Abby193/Abby193-18.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Abby193/Abby193-19.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Abby193/Abby193-20.jpg")->preservingOriginal()->toMediaCollection('images');

        $project = Project::factory()->create([
            'name' => 'Mendebal Allegro 1',
            'description' => 'Proyecto Mendebal Allegro 1',
            'initial_date' => Carbon::create(2022, 2, 10),
            'final_date' => Carbon::create(2022, 12, 16),
            'Customer' => 'Constructora Mendebal Allegro 1'
        ]);

        $project->addMedia("public/images/projects/Allegro1/Portada.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Allegro1/Allegro1-1.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Allegro1/Allegro1-2.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Allegro1/Allegro1-3.png")->preservingOriginal()->toMediaCollection('images');

        $project = Project::factory()->create([
            'name' => 'Mendebal Allegro 2',
            'description' => 'Proyecto Mendebal Allegro 2',
            'initial_date' => Carbon::create(2022, 3, 1),
            'final_date' => Carbon::create(2022, 3, 31),
            'Customer' => 'Constructora Mendebal Allegro 2'
        ]);

        $project->addMedia("public/images/projects/Allegro2/Portada.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Allegro2/Allegro2-1.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Allegro2/Allegro2-2.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Allegro2/Allegro2-3.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Allegro2/Allegro2-4.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Allegro2/Allegro2-5.png")->preservingOriginal()->toMediaCollection('images');

        $project = Project::factory()->create([
            'name' => 'Balcones Ollg',
            'description' => 'Proyecto Balcones Ollg',
            'initial_date' => Carbon::create(2023, 3, 18),
            'Customer' => 'Constructora Ollg'
        ]);

        $project->addMedia("public/images/projects/Balcones/Portada.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Balcones/Balcones-1.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Balcones/Balcones-2.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Balcones/Balcones-3.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Balcones/Balcones-4.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Balcones/Balcones-5.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Balcones/Balcones-6.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Balcones/Balcones-7.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Balcones/Balcones-8.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Balcones/Balcones-9.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Balcones/Balcones-10.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Balcones/Balcones-11.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Balcones/Balcones-12.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Balcones/Balcones-13.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Balcones/Balcones-14.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Balcones/Balcones-15.jpg")->preservingOriginal()->toMediaCollection('images');

        $project = Project::factory()->create([
            'name' => 'Bodegas',
            'description' => 'Proyecto Bodegas',
            'initial_date' => Carbon::create(2021, 8, 1),
            'final_date' => Carbon::create(2021, 11, 15),
            'Customer' => 'Proyecto Bodegas'
        ]);

        $project->addMedia("public/images/projects/Bodegas/Portada.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Bodegas/Bodegas-1.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Bodegas/Bodegas-2.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Bodegas/Bodegas-3.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Bodegas/Bodegas-4.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Bodegas/Bodegas-5.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Bodegas/Bodegas-6.png")->preservingOriginal()->toMediaCollection('images');

        $project = Project::factory()->create([
            'name' => 'Candelaria',
            'description' => 'Proyecto Candelaria',
            'initial_date' => Carbon::create(2021, 1, 10),
            'final_date' => Carbon::create(2021, 10, 26),
            'Customer' => 'Constructora Candelaria'
        ]);

        $project->addMedia("public/images/projects/Candelaria/Portada.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Candelaria/Candelaria-1.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Candelaria/Candelaria-2.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Candelaria/Candelaria-3.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Candelaria/Candelaria-4.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Candelaria/Candelaria-5.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Candelaria/Candelaria-6.png")->preservingOriginal()->toMediaCollection('images');

        $project = Project::factory()->create([
            'name' => 'Casas Pereira',
            'description' => 'Proyecto Casas Pereira',
            'initial_date' => Carbon::create(2019, 7, 1),
            'final_date' => Carbon::create(2020, 3, 20),
            'Customer' => 'Proyecto Casas Pereira'
        ]);

        $project->addMedia("public/images/projects/CasaPereira/Portada.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/CasaPereira/CasaPereira-1.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/CasaPereira/CasaPereira-2.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/CasaPereira/CasaPereira-3.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/CasaPereira/CasaPereira-4.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/CasaPereira/CasaPereira-5.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/CasaPereira/CasaPereira-6.png")->preservingOriginal()->toMediaCollection('images');

        $project = Project::factory()->create([
            'name' => 'Casas Interes Social',
            'description' => 'Proyecto Casas Interes Social',
            'initial_date' => Carbon::create(2022, 11, 1),
            'Customer' => 'Proyecto Casas Interes Social'
        ]);

        $project->addMedia("public/images/projects/InteresSocial/Portada.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/InteresSocial/InteresSocial-1.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/InteresSocial/InteresSocial-2.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/InteresSocial/InteresSocial-3.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/InteresSocial/InteresSocial-4.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/InteresSocial/InteresSocial-5.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/InteresSocial/InteresSocial-6.png")->preservingOriginal()->toMediaCollection('images');

        $project = Project::factory()->create([
            'name' => 'Maca Fenix',
            'description' => 'Proyecto Maca Fenix',
            'initial_date' => Carbon::create(2023, 5, 25),
            'final_date' => Carbon::create(2023, 6, 26),
            'Customer' => 'Maca Fenix'
        ]);

        $project->addMedia("public/images/projects/MacaFenix/Portada.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/MacaFenix/MacaFenix-1.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/MacaFenix/MacaFenix-2.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/MacaFenix/MacaFenix-3.jpg")->preservingOriginal()->toMediaCollection('images');

        $project = Project::factory()->create([
            'name' => 'Nova Iorque',
            'description' => 'Proyecto Nova Iorque',
            'initial_date' => Carbon::create(2021, 9, 1),
            'final_date' => Carbon::create(2022, 3, 31),
            'Customer' => 'Nova Iorque'
        ]);

        $project->addMedia("public/images/projects/NovaIorque/Portada.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/NovaIorque/NovaIorque-1.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/NovaIorque/NovaIorque-2.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/NovaIorque/NovaIorque-3.jpg")->preservingOriginal()->toMediaCollection('images');

        $project = Project::factory()->create([
            'name' => 'Tokio',
            'description' => 'Proyecto Tokio',
            'initial_date' => Carbon::create(2021, 9, 1),
            'final_date' => Carbon::create(2022, 3, 31),
            'Customer' => 'Tokio'
        ]);

        $project->addMedia("public/images/projects/Tokio/Portada.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Tokio/Tokio-1.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Tokio/Tokio-2.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Tokio/Tokio-3.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Tokio/Tokio-4.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Tokio/Tokio-5.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/Tokio/Tokio-6.jpg")->preservingOriginal()->toMediaCollection('images');

        $project = Project::factory()->create([
            'name' => 'Urbana Park',
            'description' => 'Proyecto Urbana Park',
            'initial_date' => Carbon::create(2022, 11, 17),
            'final_date' => Carbon::create(2023, 6, 1),
            'Customer' => 'Urbana Park'
        ]);

        $project->addMedia("public/images/projects/UrbanaPark/Portada.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/UrbanaPark/UrbanaPark-1.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/UrbanaPark/UrbanaPark-2.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/UrbanaPark/UrbanaPark-3.jpg")->preservingOriginal()->toMediaCollection('images');

        $project = Project::factory()->create([
            'name' => 'Urban Chicó',
            'description' => 'Proyecto Urban Chicó',
            'initial_date' => Carbon::create(2023, 7, 27),
            'Customer' => 'Urban Chicó'
        ]);

        $project->addMedia("public/images/projects/UrbanChico/Portada.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/UrbanChico/UrbanChico-1.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/UrbanChico/UrbanChico-2.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/UrbanChico/UrbanChico-3.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/UrbanChico/UrbanChico-4.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/UrbanChico/UrbanChico-5.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/UrbanChico/UrbanChico-6.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/UrbanChico/UrbanChico-7.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/UrbanChico/UrbanChico-8.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/UrbanChico/UrbanChico-9.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/UrbanChico/UrbanChico-10.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/UrbanChico/UrbanChico-11.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/UrbanChico/UrbanChico-12.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/UrbanChico/UrbanChico-13.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/UrbanChico/UrbanChico-14.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/UrbanChico/UrbanChico-15.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/UrbanChico/UrbanChico-16.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/UrbanChico/UrbanChico-17.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/UrbanChico/UrbanChico-18.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/UrbanChico/UrbanChico-19.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/UrbanChico/UrbanChico-20.jpg")->preservingOriginal()->toMediaCollection('images');
    }
}
