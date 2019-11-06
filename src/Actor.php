<?php

namespace HTL3R\Jsonexample;

/**
 * Class Actor
 * @package HTL3R\Jsonexample\Actor
 *
 * Represents an actor with name and movies
 */
class Actor implements \JsonSerializable
{
    /**
     * @var string name of the actor
     */
    private $name;

    /**
     * @var array movies the actor played in
     */
    private $movies;

    /**
     * @var float net worth of the actor/actress for publication in forbes
     */
    private $networth = 0;

    /**
     * @var float unimportant attribute of an individual actor in centimeters
     */
    private $height;

    /**
     * @param float $networth
     */
    public function setNetworth($networth)
    {
        $this->networth = $networth;
    }

    /**
     * @return float
     */
    public function getNetworth()
    {
        return $this->networth;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getMovies(): array
    {
        return $this->movies;
    }

    /**
     * Actor constructor.
     * @param string $name
     * @param array $movies
     *
     * Creates a new actor
     */
    public function __construct(string $name, array $movies, float $networth = NULL, float $height = NULL){
        $this->name = $name;
        $this->movies = $movies;
        $this->networth = (is_null($networth)) ? 0 : $networth;
        $this->height = (is_null($height)) ? 0 : $height;
    }

    /**
     * Specify data which should be serialized to JSON
     * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize() : array
    {
        $rv = [
            'name' => $this->name,
            'movies' => $this->getMovies(),
            'networth' => $this->networth
        ];
        return $rv;
    }
}
