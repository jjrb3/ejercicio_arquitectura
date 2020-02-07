<?php

namespace App\UseCases;

use App\Repositories\Interfaces\EloquentMovieRepositoryInterface;
use App\UseCases\Interfaces\GetMoviesUsecaseInterface;
use http\Encoding\Stream\Inflate;

/**
 * Class GetMoviesUsecase
 * @package App\UseCases
 */
class GetMoviesUsecase implements GetMoviesUsecaseInterface
{
    /**
     * @var string
     */
    public const TYPE_API_JSON = 'API_JSON';

    /**
     * @var string
     */
    public const TYPE_DB = 'DB';

    /**
     * @var string
     */
    private const URI_JSON_API = 'https://api.themoviedb.org/3/discover/movie?sort_by=popularity.desc&language=es&api_key=97471e5be48ff4bedbb9d38e23f92ac3';

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
     * @param  string  $type
     * @return iterable|null
     */
    public function handle(string $type)
    {
        return $type === self::TYPE_DB
            ? $this->eloquentMovieRepository->getAll()
            : json_decode(file_get_contents(self::URI_JSON_API));
    }
}
