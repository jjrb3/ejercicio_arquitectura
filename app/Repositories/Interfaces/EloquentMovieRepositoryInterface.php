<?php

namespace App\Repositories\Interfaces;

/**
 * Interface EloquentMovieRepositoryInterface
 * @package App\Repositories\Interfaces
 */
interface EloquentMovieRepositoryInterface
{
    /**
     * @return iterable
     */
    public function getAll(): ?iterable;
}
