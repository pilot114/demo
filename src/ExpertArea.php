<?php

/**
 * Область компетенций, к которой относятся люди и законы
 */
class ExpertArea
{
    protected string $name;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}