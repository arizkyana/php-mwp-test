<?php
class Controller
{
    var $vars = [];
    var $layout = "main";
    
    function set($d)
    {
        $this->vars = array_merge($this->vars, $d);
    }
    
    function model($model){
        require(ROOT . "app/Models/{$model}.php");
    }
    
    function render($filename)
    {
        extract($this->vars);
        ob_start();
        require(ROOT . "views/" . ucfirst(str_replace('Controller', '', get_class($this))) . '/' . $filename . '.php');
        $content = ob_get_clean();
        
        if ($this->layout == false)
        {
            $content;
        }
        else
        {
            require(ROOT . "views/layouts/" . $this->layout . '.php');
        }
    }
    
    private function secure_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    protected function secure_form($form)
    {
        foreach ($form as $key => $value)
        {
            $form[$key] = $this->secure_input($value);
        }
    }
    
    protected function response($data, $is_success = TRUE){
        header('Content-Type: application/json');
        
        if ($is_success) {
            return json_encode([
            'meta' => [
            'code' => 200,
            'message' => 'success'
            ],
            'data' => $data
            ]);
        } else {
            return json_encode([
            'meta' => [
            'code' => 500,
            'message' => 'failed'
            ]]);
        }
    }
    
    protected function datatables($data, $is_success = TRUE){
        header('Content-Type: application/json');
        
        return json_encode($data);

        
    }
}
?>