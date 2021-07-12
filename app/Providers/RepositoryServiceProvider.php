<?php

namespace App\Providers;

use App\Repositories\AuthorschouchRepository;
use App\Repositories\AuthorschouchRepositoryInterface;
use App\Repositories\ComprehensivetaskRepository;
use App\Repositories\ComprehensivetaskRepositoryInterface;
use App\Repositories\CurriculumexpertRepository;
use App\Repositories\CurriculumexpertRepositoryInterface;
use App\Repositories\GradeRepository;
use App\Repositories\GradeRepositoryInterface;
use App\Repositories\SchoolRepository;
use App\Repositories\SchoolRepositoryInterface;
use App\Repositories\SubConceptRepository;
use App\Repositories\SubConceptRepositoryInterface;
use App\Repositories\TargetConceptRepository;
use App\Repositories\TargetConceptRepositoryInterface;
use App\Repositories\TeacherRepository;
use App\Repositories\TeacherRepositoryInterface;
use App\Repositories\ThemeRepository;
use App\Repositories\ThemeRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(AuthorschouchRepositoryInterface::class, AuthorschouchRepository::class);
        $this->app->bind(ComprehensivetaskRepositoryInterface::class, ComprehensivetaskRepository::class);
        $this->app->bind(CurriculumexpertRepositoryInterface::class, CurriculumexpertRepository::class);
        $this->app->bind(GradeRepositoryInterface::class, GradeRepository::class);
        $this->app->bind(SchoolRepositoryInterface::class, SchoolRepository::class);
        $this->app->bind(SubConceptRepositoryInterface::class, SubConceptRepository::class);
        $this->app->bind(TargetConceptRepositoryInterface::class, TargetConceptRepository::class);
        $this->app->bind(TeacherRepositoryInterface::class, TeacherRepository::class);
        $this->app->bind(ThemeRepositoryInterface::class, ThemeRepository::class);

    }
}
