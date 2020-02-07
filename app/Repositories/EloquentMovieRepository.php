<?php

namespace App\Repositories;

use App\Models\Movie;
use App\Repositories\Interfaces\EloquentMovieRepositoryInterface;

/**
 * Class EloquentMovieRepository
 * @package App\Repositories
 */
class EloquentMovieRepository implements EloquentMovieRepositoryInterface
{
    /**
     * @var Movie
     */
    private $movie;

    /**
     * EloquentMovieRepository constructor.
     * @param  Movie  $movie
     */
    public function __construct(Movie $movie)
    {
        $this->movie = $movie;
    }

    /**
     * @return iterable
     */
    public function getAll(): ?iterable
    {
        return $this->movie
            ->all();
    }
}
