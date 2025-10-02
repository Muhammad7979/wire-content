<?php

namespace App\Livewire\Components;

use App\Models\Article as ArticleModel;

use Livewire\Component;

class ArticleCard extends Component
{
    public ArticleModel $article;

    public function render()
    {
        return view('livewire.components.article-card');
    }
}
