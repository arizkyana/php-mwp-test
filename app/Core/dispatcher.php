<?php
class Dispatcher
{
    private $request;
    public function dispatch()
    {
        $this->request = new Request();
        Router::parse($this->request->url, $this->request);
        $controller = $this->loadController();
        
        call_user_func_array([$controller, $this->request->action], $this->request->params);
    }
    public function loadController()
    {
        $name = ucwords($this->request->controller) . "Controller";
        $file = ROOT . 'app/Controllers/' . $name . '.php';
        // var_dump($this->request);
        require($file);
        $controller = new $name($this->request);
        return $controller;
    }
}
?>