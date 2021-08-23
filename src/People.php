<?php

/**
 * Любой человек
 */
class People
{
    // голоса, кторомы распоряжается человек
    protected int $votes;

    // области, в которых человек предположительно компетентен
    protected array $expertArea;

    public function __construct()
    {
        // свой голос
        $this->votes = 1;
    }

    public function getExpertArea(): array
    {
        return $this->expertArea;
    }

    public function setExpertArea(array $expertArea): void
    {
        $this->expertArea = $expertArea;
    }


    public function delegateVotes(People $agent)
    {
        $agent->addVotes($this->votes);
        $this->votes = 0;
    }

    public function addVotes(int $votes)
    {
        $this->votes += $votes;
    }
}