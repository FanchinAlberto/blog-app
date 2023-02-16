<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function display(): View
    {
    	$comments = Comment::orderBy('created_at', 'desc')->get();

        return view('news-detail', [
        	'comments' => $comments
        ]);
    }

    public function getNews($id)
    {
    	$categories = Category::all();

    	$news = News::find($id);

    	return view('news-detail', [
            'news' => $news,
            'categories' => $categories
    	]);
    }
}
