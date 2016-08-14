<?php

namespace Flattener;

class Flatten
{
    /**
     * @var bool
     */
    private $isFlat = false;

    /**
     * @param array $inArray
     * @return array
     */
    public function flattener(array $inArray)
    {
        while (!$this->isFlat) {
            $inArray = $this->findNestedArray($inArray);
        }

        return $inArray;
    }

    /**
     * @param array $a
     * @return array
     */
    private function findNestedArray(array $a)
    {
        $flatArray = [];
        $count = 0;

        foreach ($a as $value) {
            if (is_array($value)) {
                $flatArray = array_merge($flatArray, $value);
            } else {
                $count++;
                $flatArray[] = $value;
            }
        }
        $this->isFlat = $count === count($a) ;
        return $flatArray;
    }
}
