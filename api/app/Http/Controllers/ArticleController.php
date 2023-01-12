<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
        /**
    * Fetch all articles from the db
    * 
    */
    public function all() {
        $articles = Article::all();

        if ($articles->isNotEmpty()) {
            return view('articles.all', [
                'articles' => $articles,
            ]);
        } else {
            return view('errors.404');
        }
    }

    /**
    * Fetch articles by category
    */
    public function fetchByCategory($category) {
        $category = str_replace('-', '_', $category);
        $articles = Article::where('main_category', $category)->get();
        
        if (($articles)->isNotEmpty()) {
            return view('articles.category', [
                'articles' => $articles,
                'category' => $category
            ]);
        } else {
            return view('errors.404');
        }
    }

    /**
    * Fetch article by title
    * @param string $category,$title
     */

    public function fetchByTitle($category,$title) {
        $category = str_replace('-', '_', $category);
        $article = Article::where('main_category', $category)
                    ->where('title', str_replace('-', ' ', $title))
                    ->first();
        
        if (!empty($article)) {
            return view('articles.title', [
                'article' => $article
            ]);
        }
        else {
            return view('articles.404');
        }
    }
}
