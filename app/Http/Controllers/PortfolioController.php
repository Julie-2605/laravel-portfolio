<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'id' => 1,
                'title' => 'E-commerce Laravel',
                'description' => 'Une plateforme e-commerce complète avec Laravel, Livewire et Alpine.js',
                'image' => 'https://via.placeholder.com/500x300',
                'tags' => ['Laravel', 'Livewire', 'Alpine.js', 'Tailwind CSS'],
                'link' => '#',
            ],
            [
                'id' => 2,
                'title' => 'Application de Gestion',
                'description' => 'Système de gestion d\'entreprise avec Laravel, Vue.js et API RESTful',
                'image' => 'https://via.placeholder.com/500x300',
                'tags' => ['Laravel', 'Vue.js', 'MySQL', 'API'],
                'link' => '#',
            ],
            [
                'id' => 3,
                'title' => 'Blog Communautaire',
                'description' => 'Plateforme de blog avec système de commentaires et authentification',
                'image' => 'https://via.placeholder.com/500x300',
                'tags' => ['Laravel', 'Inertia.js', 'React', 'PostgreSQL'],
                'link' => '#',
            ],
        ];

        $skillCategories = [
            [
                'title' => 'Backend',
                'skills' => [
                    ['name' => 'PHP', 'level' => 90],
                    ['name' => 'Laravel', 'level' => 95],
                    ['name' => 'MySQL', 'level' => 85],
                    ['name' => 'API RESTful', 'level' => 80],
                    ['name' => 'Redis', 'level' => 75],
                ],
            ],
            [
                'title' => 'Frontend',
                'skills' => [
                    ['name' => 'HTML/CSS', 'level' => 90],
                    ['name' => 'JavaScript', 'level' => 85],
                    ['name' => 'Vue.js', 'level' => 80],
                    ['name' => 'Tailwind CSS', 'level' => 90],
                    ['name' => 'Livewire', 'level' => 85],
                ],
            ],
            [
                'title' => 'Outils & Méthodes',
                'skills' => [
                    ['name' => 'Git', 'level' => 90],
                    ['name' => 'Docker', 'level' => 75],
                    ['name' => 'CI/CD', 'level' => 70],
                    ['name' => 'Agile/Scrum', 'level' => 80],
                    ['name' => 'Tests Unitaires', 'level' => 75],
                ],
            ],
        ];

        return view('portfolio', compact('projects', 'skillCategories'));
    }
}
