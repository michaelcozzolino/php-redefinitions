<?php declare(strict_types=1);

namespace MichaelCozzolino\PhpRedefinitions;

use function json_encode;

/**
 * @psalm-api
 */
class JsonRedefinition
{
    /**
     * @param mixed              $value
     * @param int                $flags
     * @param int<1, 2147483647> $depth
     *
     * @return string|false
     */
    public function jsonEncode(mixed $value, int $flags = 0, int $depth = 512): string | false
    {
        return json_encode($value, $flags, $depth);
    }
}
