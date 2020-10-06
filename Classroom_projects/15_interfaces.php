<?php

/* 
Country
City
Mayor

*/

interface CountryIntreface
{
    public function getName(): string;
}

interface BigCityInterface
{
    public function getMayor(): string;
}

interface SmallTownIbnterface
{
}

class City implements CountryIntreface, BigCityInterface
{
    private string $name;
    private string $mayor;

    public function __construct($city, $mayorName)
    {
        $this->name = $city;
        $this->mayor = $mayorName;
    }

    public function getName(): string
    {
        return $this->name;
    }
    
    public function getMayor(): string
    {
        return $this->mayor;
    }
}

class Town implements CountryIntreface, SmallTownIbnterface
{
    private string $name;
    
    public function __construct($city)
    {
        $this->name = $city;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

class CountryCollection
{
    public array $country = [];

    public function add($city): void
    {
        $this->country[] = $city;
    }

    public function all(): array
    {
        return $this->country;
    }
}

$country = new CountryCollection();
$country->add(new City("Riga", "Nils Usakovs"));
$country->add(new Town("Mazpisani"));

foreach($country->all() as $city) {
    echo $city->getName();
    if ($city instanceof BigCityInterface) {
        echo  " is a big city and has a mayor named " . $city->getMayor() . ".\n";
    } elseif ($city instanceof SmallTownIbnterface) {
        echo " is a small town and doesn't have a mayor.\n";
    }
}
