<?php
namespace App\Interfaces;

 interface methods{

    public function  getPopularRepositories($date,$limit);

    public function  getPopularRepositoriesFromDate($date,$limit);


    public function  getPopularRepositoriesByLanguage($language,$limit);


    public function  fetchData($url);
 }
