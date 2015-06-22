<?php

namespace Gildniy\Questions;

use Gildniy\Questions\Answers\AnswerRepository;
use Gildniy\Questions\Answers\EloquentAnswerRepository;
use Gildniy\Questions\Questions\EloquentQuestionRepository;
use Gildniy\Questions\Questions\QuestionRepository;
use Illuminate\Support\ServiceProvider;

class QuestionsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/questions.php' => config_path('gildniy.questions.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('/migrations'),
        ], 'migrations');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->bind(QuestionRepository::class, EloquentQuestionRepository::class);
        $this->app->bind(AnswerRepository::class, EloquentAnswerRepository::class);
    }
}
