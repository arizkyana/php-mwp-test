<?php



class ApiController extends Controller {
    private $request;
    private $calls;
    
    public function __construct($request){
        $this->request = $request;
        
        $this->model('Calls');
        
        $this->calls = new Calls();
    }
    
    // search log by text
    public function search(){
        
        echo $this->response(['query' => $this->calls->search_text($this->request->post)]);
    }
    
    public function search_date(){
        echo $this->response(['query' => $this->calls->search_date($this->request->post)]);
    }
    
    public function list_calls(){
        
        echo $this->datatables($this->calls->list_calls($this->request->query));
    }
    
    public function list_detail_calls(){
        $id = $this->request->params[0];
        echo $this->datatables($this->calls->list_detail_calls($id));
    }
}