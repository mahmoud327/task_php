<?php

use App\Interfaces\methods;

class GitHubAPI  implements methods
{
    private $base_url = "https://api.github.com/search/repositories";



    public function getPopularRepositoriesFromDate($date, $limit)
    {
        $url = $this->base_url . "?q=created:>$date&sort=stars&order=desc&per_page=$limit";
        $data = $this->fetchData($url);
        return $data['items'];
    }

    public function getPopularRepositoriesByLanguage($language, $limit)
    {
        $url = $this->base_url . "?q=language:$language&sort=stars&order=desc&per_page=$limit";
        $data = $this->fetchData($url);
        return $data['items'];
    }

    function fetchData($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('User-Agent: PHP'));
        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result, true);
    }
}
