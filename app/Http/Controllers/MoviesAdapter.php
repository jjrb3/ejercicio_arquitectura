<?php

namespace App\Http\Controllers;

use App\UseCases\Interfaces\GetMoviesUsecaseInterface;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

/**
 * Class MoviesAdapter
 * @package App\Http\Controllers
 */
class MoviesAdapter extends Controller
{
    /**
     * @var GetMoviesUsecaseInterface
     */
    private $getMoviesUsecase;

    /**
     * MoviesAdapter constructor.
     * @param  GetMoviesUsecaseInterface  $getMoviesUsecase
     */
    public function __construct(GetMoviesUsecaseInterface $getMoviesUsecase)
    {
        $this->getMoviesUsecase = $getMoviesUsecase;
    }

    /**
     * @return Factory|View
     */
    public function __invoke()
    {
        return view('home', [
            'movies' => $this->getMoviesUsecase->handle()
        ]);
    }
}
