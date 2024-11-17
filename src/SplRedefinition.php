<?php declare(strict_types=1);

namespace MichaelCozzolino\PhpRedefinitions;

use function iterator_to_array;

/**
 * @psalm-api
 */
class SplRedefinition
{
    /**
     * @psalm-suppress InvalidArgument Psalm is not able to understand that Traversable|array is iterable
     *
     * @template TKey of array-key
     * @template TValue
     *
     * @param iterable<TKey, TValue> $iterator
     * @param bool                   $preserve_keys
     *
     * @return array<TKey, TValue>
     */
    public function iteratorToArray(iterable $iterator, bool $preserve_keys = true): array
    {
        return iterator_to_array($iterator, $preserve_keys);
    }
}
