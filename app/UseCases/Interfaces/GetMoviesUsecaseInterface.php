<?php

namespace App\UseCases\Interfaces;

/**
 * Interface GetMoviesUsecaseInterface
 * @package App\UseCases\Interfaces
 */
interface GetMoviesUsecaseInterface
{
    /**
     * @param  string  $type
     * @return iterable|null
     */
    public function handle(string $type);
}
