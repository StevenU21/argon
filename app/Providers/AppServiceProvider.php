<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use App\Policies\ArticlePolicy;
use App\Policies\CategoryPolicy;
use App\Policies\TagPolicy;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFour();
        Gate::policy(Category::class, CategoryPolicy::class);
        Gate::policy(Tag::class, TagPolicy::class);
        Gate::policy(Article::class, ArticlePolicy::class);
    }
}
