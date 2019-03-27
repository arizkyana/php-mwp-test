<?php
class Router
{
    
    
    static public function parse($url, $request)
    {
        $url = trim($url);
        if ($url == "/")
        {
            $request->controller = "home";
            $request->action = "index";
            $request->params = [];
        }
        else
        {
            $url_parts = parse_url($url);
            $clean_url = $url_parts['scheme'] . '://' . $url_parts['host'] . (isset($url_parts['path'])?$url_parts['path']:'');
            
            $explode_url = explode('/', $clean_url);
            
            $explode_url = array_slice($explode_url, 3);
            
            
            
            $request->controller = $explode_url[0];
            $request->action = $explode_url[1] ? $explode_url[1] : 'index';
            $request->params = array_slice($explode_url, 2);
            
            $queries = explode('&', $_SERVER['QUERY_STRING']);
            
            $request->query = [];
            foreach($queries as $query) {
                $explode_query = explode("=", $query);
                $request->query[$explode_query[0]] = $explode_query[1];
                // array_push($request->query, [
                // $explode_query[0] => $explode_query[1]
                // ]);
            }
            
            
            
            
            
        }
    }
}
?>