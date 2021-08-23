<?php

/**
 * Общество
 */
class Society
{
    protected array $peoples;

    public function __construct(int $size)
    {
        while($size) {
            $peoples[] = new People();
            $size--;
        }
    }
}