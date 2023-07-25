<?php
require_once "Movie.php";
require_once "Actor.php";

$actor1 = new Actor(1, 'Bruce Lee', '1990-01-01');
$actor2 = new Actor(2, 'Jim Iyke', '1985-03-15');

$movie = new Movie(1, 'Titanic', 120, '2023-07-01');
$movie->addActor($actor1, 'ROB VENOM');
$movie->addActor($actor2, 'Assassin');

// Get JSON representation of the Movie entity
print $movie->toJson();

// Get all actors ordered by descending age
$actorsByAge = $movie->getActorsByDescendingAge();
print $actorsByAge;