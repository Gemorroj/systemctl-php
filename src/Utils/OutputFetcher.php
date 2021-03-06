<?php

namespace SystemCtl\Utils;

class OutputFetcher
{
    /**
     * Fetch unit names from a command output
     *
     * @param string $suffix
     * @param string $output
     *
     * @return string[]
     */
    public static function fetchUnitNames(string $suffix, string $output): array
    {
        preg_match_all('/(?<unit>.*)\.' . $suffix . '\s/', $output, $matches);
        return $matches['unit'] ?? [];
    }
}
