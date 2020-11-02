<?php

declare(strict_types=1);

class Dog
{
    private string $name;
    private string $sex;
    private ?string $mother;
    private ?string $father;

    public function __construct(
        string $name,
        string $sex,
        string $mother = null,
        string $father = null
    ) {
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = $mother;
        $this->father = $father;
    }

    public function fathersName(): string
    {
        if ($this->father !== null) {
            return $this->father;
        }
        return 'Father unknown';
    }

    public function mothersName(): string
    {
        if ($this->mother !== null) {
            return $this->mother;
        }
        return 'Mother unknown';
    }

    public function hasSameMotherAs(Dog $dog)
    {
        if ($this->mothersName() === $dog->mothersName()) {
            return true;
        }
        return false;
    }
}
