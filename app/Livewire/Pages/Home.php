<?php

namespace App\Livewire\Pages;

use App\Models\Article;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Home extends Component
{
    public $articles;

    public function mount(){
        $this->articles = Article::limit(8)->get();
    }
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.pages.home');
    }
}
