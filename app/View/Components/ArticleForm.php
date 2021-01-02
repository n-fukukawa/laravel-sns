<?php

namespace App\View\Components;

use Illuminate\View\Component;

use App\Models\Article;

class ArticleForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public Article $article)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.article-form');
    }
}
