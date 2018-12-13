<?php 


class TwitterSource {

    public function fetch($hashtags, $users, $count) {

        $settings = $this->load_config();
        
        $url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
        $requestMethod = "GET";
        
        ///echo 'Fetching ' . $count . ' tweets from ' . $users;

        $getfield = '?screen_name=' . $users . '&count=' . $count;

        $twitter = new TwitterAPIExchange($settings);

        $resp = $twitter->setGetfield($getfield)
                    ->buildOauth($url, $requestMethod)
                    ->performRequest();

        $string = json_decode($resp,$assoc = TRUE);

        if(array_key_exists("errors", $string)) {echo "Sorry, there was a problem"; exit();}

        $newsfeed = array();

        foreach($string as $items)
        {
            $newsfeed[] = $items['text'];
        }

        return $newsfeed;

    }    


    private function load_config() {
        $file = file_get_contents(__ROOT__.'/config.json');
        $config = json_decode($file, true);

        return $config;
    }

}