<?php

namespace App\Livewire\Pages;

use App\Models\Article as ArticleModel;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Article extends Component
{
    public ArticleModel $article;

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.pages.article');
    }
}
