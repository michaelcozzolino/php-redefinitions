<?php declare(strict_types=1);

namespace MichaelCozzolino\PhpRedefinitions;

use Traversable;
use function iterator_to_array;

/**
 * @psalm-api
 */
class SplRedefinition
{
    /**
     * @template TKey of array-key
     * @template TValue
     * @param Traversable<TKey, TValue>|array<TKey, TValue> $iterator
     * @param bool                                          $preserve_keys
     *
     * @return array<TKey, TValue>
     */
    public function iteratorToArray(Traversable | array $iterator, bool $preserve_keys = true): array
    {
        return iterator_to_array($iterator, $preserve_keys);
    }
}
