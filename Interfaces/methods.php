<?php
namespace App\Interfaces;

 interface methods{


    public function  getPopularRepositoriesFromDate($date,$limit);


    public function  getPopularRepositoriesByLanguage($language,$limit);


    public function  fetchData($url);
 }
