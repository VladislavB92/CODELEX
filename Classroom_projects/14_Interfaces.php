<?php

/* 
Collection - Zoo.
Animal - interface.
4 animal bjects, that implement interface.
2 of them predators.
Will the animal survive in Zoo?
*/

interface AnimalInterface
{
    public function getName(): string;
}

interface FriendlyInterface
{
    public function getHP(): int;
}

interface PredatorInterface
{
    public function huntPrey(): int;
}

class Zebra implements AnimalInterface, FriendlyInterface
{
    private string $name = "Zebra";
    private int $hp;

    public function __construct($lives)
    {
        $this->hp = $lives;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getHP(): int
    {
        return $this->hp;
    }
}

class Aligator implements AnimalInterface, PredatorInterface
{
    private string $name = "Aligator";
    private int $ap;

    public function __construct($attackPoints)
    {
        $this->ap = $attackPoints;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function huntPrey(): int
    {
        return $this->ap;
    }
}

class Lion implements AnimalInterface, PredatorInterface
{
    private string $name = "Lion";
    private int $ap;

    public function __construct($attackPoints)
    {
        $this->ap = $attackPoints;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function huntPrey(): int
    {
        return $this->ap;
    }
}

class Bunny implements AnimalInterface, FriendlyInterface
{
    private string $name = "Bunny";
    private int $hp;

    public function __construct($lives)
    {
        $this->hp = $lives;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getHP(): int
    {
        return $this->hp;
    }
}

class ZooCollection
{
    public array $zoo = [];

    public function add($animals): void
    {
        $this->zoo[] = $animals;
    }

    public function all(): array
    {
        return $this->zoo;
    }
}

$zoo = new ZooCollection;

$zoo->add(new Zebra(rand(1, 50)));
$zoo->add(new Bunny(rand(1, 50)));
$zoo->add(new Aligator(rand(1, 50)));
$zoo->add(new Lion(rand(1, 50)));


for ($i = 0; $i < count($zoo->zoo); $i++) {
    if ($zoo->zoo[$i] instanceof PredatorInterface) {
        echo "\n" . $zoo->zoo[$i]->getName() . " (AP: " . $zoo->zoo[$i]->huntPrey() . ")" . " hunts ";

        for ($j = 0; $j < count($zoo->zoo); $j++) {
            if ($zoo->zoo[$j] instanceof FriendlyInterface) {
                echo $zoo->zoo[$j]->getName() . " (HP: " . $zoo->zoo[$j]->getHP() . ")" . PHP_EOL;

                if ($zoo->zoo[$i]->huntPrey() > $zoo->zoo[$j]->getHP()) {
                    echo "\n" . $zoo->zoo[$i]->getName() . " ate " . $zoo->zoo[$j]->getName() . PHP_EOL;
                } else {
                    echo "\n" . $zoo->zoo[$j]->getName() . " lives to tell the story";
                }
            }
        }
    }
}
