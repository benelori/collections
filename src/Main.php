<?php

namespace App;

use loophp\collection\Collection;

class Main
{
    private $collection;

    /**
     * Main constructor.
     */
    public function __construct()
    {
        // Collection::with() is perfectly valid but will be deprecated soon.
        $collection = Collection::fromIterable(['A', 'B', 'C', 'D', 'E']);

        $this->collection = $collection
            ->append('F', 'G', 'H');
    }

    public function getCollection(): \loophp\collection\Contract\Collection
    {
        return $this->collection;
    }
}
