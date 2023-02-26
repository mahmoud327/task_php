<?php

// Instantiate the GitHubAPI class
$github = new GitHubAPI();

$date = '2022-01-01';


// Get the top 10 most popular repositories
$popularRepos = $github->getPopularRepositories($date, 10);

// Get the top 50 most popular repositories created from a given date onwards
$popularReposFromDate = $github->getPopularRepositoriesFromDate($date, 50);

// Get the top 100 most popular PHP repositories
$phpRepos = $github->getPopularRepositoriesByLanguage('PHP', 100);

var_dump ($github);
