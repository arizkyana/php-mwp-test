<?php
class Request
{
    public $url;
    public function __construct()
    {
        $this->url = $_SERVER["REQUEST_URI"];
        $this->post = $_POST;
        $this->get = $_GET;
    }
}
?>