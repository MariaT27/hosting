<?php namespace App;

/**
 * Синоним поискового запроса
 */
class SearchSynonym
{
    const SYNONYMS_TO_ADD = [
        'word|excel|power point' => 'office',
        'gta|гта' => 'grand theft auto',
        'nfs|нфс' => 'need for speed',
        'tes' => 'the elder scrolls',
        'асс?асс?ин' => 'assassin',
        'д[еэ]дпул' => 'deadpool',
        'фифа' => 'fifa',
    ];

    const SYNONYMS_TO_REPLACE = [
        'к?с[ия]оми|xiaomi' => 'ксиоми|ксяоми|сиоми|сяоми|xiaomi',
    ];

    // Methods
    public static function addSynonymsToQuery(string $query): string
    {
        return static::applySynonyms($query, static::SYNONYMS_TO_ADD);
    }

    public static function applySynonyms(string $query, array $synonyms, bool $replace = false): string
    {
        $result = preg_replace('/\s{2,}/', ' ', $query);

        foreach ($synonyms as $pattern => $replacement) {
            $result = preg_replace(
                "/\b($pattern)\b/ui",
                $replace ? "($replacement)" : "($1|$replacement)",
                $result
            );
        }

        return $result;
    }

    public static function normalizedQuery(string $query, string $index, bool $hits = false)
    {
        return \Sphinx::helper()->callKeywords($query, $index, $hits);
    }

    public static function replaceWordsInQueryWithSynonyms(string $query)
    {
        static::applySynonyms($query, static::SYNONYMS_TO_REPLACE, true);
    }
}
