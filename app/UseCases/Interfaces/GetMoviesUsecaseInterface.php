<?php

namespace App\UseCases\Interfaces;

/**
 * Interface GetMoviesUsecaseInterface
 * @package App\UseCases\Interfaces
 */
interface GetMoviesUsecaseInterface
{
    /**
     * @return iterable|null
     */
    public function handle(): ?iterable;
}
