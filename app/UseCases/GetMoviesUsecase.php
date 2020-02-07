<?php

namespace App\UseCases;

use App\Repositories\Interfaces\EloquentMovieRepositoryInterface;
use App\UseCases\Interfaces\GetMoviesUsecaseInterface;

/**
 * Class GetMoviesUsecase
 * @package App\UseCases
 */
class GetMoviesUsecase implements GetMoviesUsecaseInterface
{
    /**
     * @var EloquentMovieRepositoryInterface
     */
    private $eloquentMovieRepository;

    /**
     * GetMoviesUsecase constructor.
     * @param  EloquentMovieRepositoryInterface  $eloquentMovieRepository
     */
    public function __construct(EloquentMovieRepositoryInterface $eloquentMovieRepository)
    {
        $this->eloquentMovieRepository = $eloquentMovieRepository;
    }

    /**
     * @return iterable|null
     */
    public function handle(): ?iterable
    {
        return $this->eloquentMovieRepository->getAll();
    }
}
