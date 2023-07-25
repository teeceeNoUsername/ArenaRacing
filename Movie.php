<?php
require_once "Entity.php";

class Movie extends Entity
{
    public $title;
    public $runtime;
    public $releaseDate;
    public $actors = [];

    public function __construct($id, $title, $runtime, $releaseDate)
    {
        parent::__construct($id);
        $this->title = $title;
        $this->runtime = $runtime;
        $this->releaseDate = $releaseDate;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getRuntime()
    {
        return $this->runtime;
    }

    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    public function addActor(Actor $actor, $character)
    {
        $this->actors[] = ['actor' => $actor, 'character' => $character];
    }

    public function getActors()
    {
        return $this->actors;
    }

    public function getActorsByDescendingAge()
    {
        usort($this->actors, function ($a, $b) {
            return $a['actor']->getDateOfBirth() < $b['actor']->getDateOfBirth();
        });

        return json_encode($this->actors);
    }

   
}

