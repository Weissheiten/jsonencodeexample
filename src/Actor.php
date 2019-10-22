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
    public function __construct(string $name, array $movies){
        $this->name = $name;
        $this->movies = $movies;
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
            'movies' => $this->getMovies()
        ];
        return $rv;
    }
}