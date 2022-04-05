<?php

namespace App\Scoring;

use App\Entity\BigFootSighting;

interface ScoringFactorInterface
{
    /**
     * @throws \InvalidArgumentException
     */
    public function score(BigFootSighting $bigFootSighting): int;
}