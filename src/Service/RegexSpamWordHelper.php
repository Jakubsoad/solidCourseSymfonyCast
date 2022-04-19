<?php

namespace App\Service;

use App\Comment\CommentSpamCounterInterface;

class RegexSpamWordHelper implements CommentSpamCounterInterface
{
    public function countSpamWords(string $content): int
    {
        $badWordsOnComment = [];

        $regex = implode('|', $this->spamWords());

        preg_match_all("/$regex/i", $content, $badWordsOnComment);

        return count($badWordsOnComment[0]);
    }

    private function spamWords(): array
    {
        return [
            'follow me',
            'twitter',
            'facebook',
            'earn money',
            'SymfonyCats',
        ];
    }

}