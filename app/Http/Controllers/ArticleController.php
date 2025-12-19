<?php
namespace App\Http\Controllers;
use App\Models\Article;
class ArticleController extends Controller
{
    public function show($id)
    {
        $article = Article::find($id);
        if (!$article) {
            return 'Article avec id ' . $id . ' non trouvé';
        }
        return view('pages.article-details', ['article' => $article]);
    }
        public function create()
    {
            Article::create([
                'title' => 'L’IA soigne mieux',
                'desc' => 'L’intelligence artificielle aide les médecins à diagnostiquer plus vite.',
            ]);
            Article::create([
                'title' => 'Villes vertes',
                'desc' => 'Les métropoles deviennent plus écologiques et durables.',
            ]);
            Article::create([
                'title' => 'Télétravail',
                'desc' => 'Plus de liberté, mais aussi plus de solitude.',
            ]);
            return "Articles créés avec succès.";
    }
    public function update($id)
    {
        Article::find($id);
        if (!Article::find($id)) {
            return 'Article avec id ' . $id . ' non trouvé donc non modifiable';
        }
        Article::where('id', $id)->update([
            'title' => 'Titre Modifié',
        ]);
        return "Article " . $id . " mis à jour avec succès.";
    }
    public function delete($id)
    {
        if (!Article::find($id)) {
            return 'Article avec id ' . $id . ' non trouvé ou déja supprimé';
        }
        Article::destroy($id);
        return "Article " . $id . " supprimé avec succès.";
    }
}