<?php

namespace App\View\Components;

use App\Models\User; // ✅ Use the correct User model ----- CHAT-GPT recommendation for error when trying to include this Component to article show
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ArticleContactAuthor extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public User $author)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.article-contact-author');
    }
}
