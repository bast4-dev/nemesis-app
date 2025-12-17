<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create()
    {
        Article::create([
            'title' => "L'IA soigne mieux",
            'description' => "L'intelligence artificielle aide les médecins à diagnostiquer plus vite."
        ]);

        Article::create([
            'title' => "Villes vertes",
            'description' => "Les métropoles deviennent plus écologiques et durables."
        ]);

        Article::create([
            'title' => "Télétravail",
            'description' => "Plus de liberté, mais aussi plus de solitude."
        ]);

        return "Les articles ont été créés avec succès";
    }

    public function update($id)
    {
        $article = Article::find($id);

        if (!$article) {
            return "Erreur : L'article avec l'ID n°$id n'existe pas";
        }

        $article->title = "Nouveau titre";
        $article->description = "Nouvelle description";
        $article->save();

        return "Article n°$id modifié avec succès";
    }

    public function delete($id)
    {

        $article = Article::find($id);

        if (!$article) {
            return "Erreur : L'article avec l'ID n°$id n'existe pas";
        }

        $article->delete();
        return "Article n°$id supprimé avec succès";
    }

    public function show($id)
    {

        $article = Article::find($id);

        if (!$article) {
            return "Erreur : L'article avec l'ID n°$id n'existe pas";
        }

        return view('pages.article-details', ['article' => $article]);
    }
}
