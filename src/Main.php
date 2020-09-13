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
        $collection = Collection::with(['A', 'B', 'C', 'D', 'E']);

        $this->collection = $collection
            ->append('F', 'G', 'H')
            ->all(); // ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H']
    }

    /**
     * @return array
     */
    public function getCollection()
    {
        return $this->collection;
    }
}
