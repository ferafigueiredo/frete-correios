<?php
/**
 * Created by PhpStorm.
 * User: ferafigueiredo
 * Date: 07/03/17
 * Time: 00:51
 */

namespace FreteCorreios\Helpers;


class CurlHelper
{
    private $url;
    private $params;

    function __construct($url, $params)
    {
        $this->url = $url;
        $this->params = $params;
    }

    public function execute($method)
    {
        $ch = curl_init();

        if ($method == CURLOPT_POST):

            curl_setopt($ch, CURLOPT_URL, $this->url);
            curl_setopt($ch, $method, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query( $this->params ) );

        else:

            curl_setopt($ch, CURLOPT_URL, $this->url ."?". http_build_query( $this->params ));

        endif;
        // receive server response ...
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec ($ch);

        curl_close ($ch);

        return $server_output;
    }
}