<?php

namespace App\Http\Controllers;

use App\UseCases\GetMoviesUsecase;
use App\UseCases\Interfaces\GetMoviesUsecaseInterface;
use Illuminate\Http\JsonResponse;

/**
 * Class MoviesAdapter
 * @package App\Http\Controllers
 */
class MoviesJsonAdapter extends Controller
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(): JsonResponse
    {
        return response()->json([
            'movies' => $this->getMoviesUsecase->handle(GetMoviesUsecase::TYPE_API_JSON)
        ]);
    }
}
