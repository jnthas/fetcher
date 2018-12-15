<?php
require 'TwitterSource.php';
  
// GET fetcher?source=twitter&hashtags=tech,food&users=g1&num=3

class Fetcher {

    public function fetch() {
        
        $twitter = new TwitterSource();

        $feed = $twitter->fetch("news", "g1", 3);

        header('Content-Type: application/json; charset=utf-8');

        $json = json_encode($feed, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

        return $json;
    }

}

?>