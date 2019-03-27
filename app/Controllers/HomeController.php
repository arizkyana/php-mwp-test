<?php

class HomeController extends Controller {
    private $request;
    private $calls;
    public function __construct($request){
        $this->request = $request;
        $this->model('Calls');
        
        $this->calls = new Calls();
    }
    
    public function index(){
        $this->set([
        'js' => [
        'https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
        'https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
        '/assets/js/home/index.js'
        ]
        ]);
        
        
        $this->render("index");
    }
    
    public function detail(){
        
        $call_id = $this->request->params[0];
        
        $detail = $this->calls->detail($call_id);
        
        
        $this->set([
        'js' => [
        'https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
        'https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
        '/assets/js/home/detail.js'
        ],
        'detail' => $detail
        ]);
        
        $this->render("detail");
    }
    
    public function data(){
        echo json_encode([
        'test' => 'ini json data'
        ]);
    }
}