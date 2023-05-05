<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'nom' => 'Projet A',
            'description' => 'Description du projet A',
            'date_debut' => '2023-01-01',
            'date_fin' => '2023-02-28',
            'etat' => 'En cours',
            'responsable' => 'John Doe'
        ]);

        Project::create([
            'nom' => 'Projet B',
            'description' => 'Description du projet B',
            'date_debut' => '2023-03-01',
            'date_fin' => '2023-04-30',
            'etat' => 'En attente',
            'responsable' => 'Jane Doe'
        ]);

        Project::create([
            'nom' => 'Projet C',
            'description' => 'Description du projet C',
            'date_debut' => '2023-05-01',
            'date_fin' => '2023-06-30',
            'etat' => 'Terminé',
            'responsable' => 'Maxime Dupont'
        ]);
    }
}
