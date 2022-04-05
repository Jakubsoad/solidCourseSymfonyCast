<?php

namespace App\Service;

use App\Entity\BigFootSighting;
use App\Model\BigFootSightingScore;
use App\Model\DebuggableBigFootScorer;

class DebuggableSightingScorer extends SightingScorer
{
    public function score(BigFootSighting $sighting): DebuggableBigFootScorer
    {
        $bfScore = parent::score($sighting);

        return new DebuggableBigFootScorer($bfScore->getScore(), 100);
    }
}