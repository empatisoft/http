<?php
/**
 * Developer: ONUR KAYA
 * Contact: empatisoft@gmail.com
 */

namespace Http;

class Http {

    public function getURI($trim = false) {
        $uri = isset($_SERVER['REQUEST_URI']) && !is_null($_SERVER['REQUEST_URI']) ? filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL) : NULL;
        $uri = ltrim($uri,'\/');
        if($trim == true)
            $uri = rtrim($uri,'\/');

        return $uri;
    }

}
