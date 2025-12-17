<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{

    public function index()
    {
    $articles = [
        ["title" => "L’IA soigne mieux", "desc" => "L’intelligence artificielle aide les médecins à diagnostiquer plus vite."],
        ["title" => "Villes vertes", "desc" => "Les métropoles deviennent plus écologiques et durables."],
        ["title" => "Télétravail", "desc" => "Plus de liberté, mais aussi plus de solitude."]
    ];
        return view('welcome', ["name" => "Brian" , "articles" => $articles]);
    }
}