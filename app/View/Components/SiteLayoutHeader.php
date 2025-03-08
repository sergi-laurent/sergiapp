<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SiteLayoutHeader extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $menu = [
            'Articles'=>route('articles.index'),
            'Authors'=> route('authors.index'),
            'Keywords'=> route('admin.keywords.index'),
            //'contact us'=> null,
        ];

        return view('components.site-layout-header', compact(var_name:'menu'));
    }
}
