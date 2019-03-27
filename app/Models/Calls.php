<?php

class Calls {
    
    public function search_text($params){
        $sql = "SELECT * FROM calls WHERE ID LIKE '%{$params['query']}%' OR UserName LIKE '%{$params['query']}%'";
        
        $req = Database::connect()->prepare($sql);
        
        $req->execute();
        
        return $req->fetch();
    }
    
    public function search_date($params){
        $sql = "SELECT * FROM calls WHERE CallDate BETWEEN = {$params['start_date']} AND {$params['end_date']}";
        $req = Database::connect()->prepare($sql);
        
        $req->execute();
        
        return $req->fetch();
    }
    
    public function list_calls($filters){
        
        
        $sql = "SELECT * FROM calls ";
        
        if (isset($filters['start_date']) && isset($filters['end_date'])) {
            $sql = "SELECT * FROM calls WHERE CallDate BETWEEN '{$filters['start_date']}' AND '{$filters['end_date']}'";
        }
        
        
        $count = "SELECT COUNT(ID) as total FROM calls";
        $all = Database::connect()->query($sql);
        $all_count = Database::connect()->query($count)->fetch(PDO::FETCH_ASSOC)['total'];
        
        return [
        'draw' => 1,
        'data' => $all->fetchAll(PDO::FETCH_CLASS),
        'totalRecords' => intval($all_count),
        'recordFiltered' => intval($all_count),
        ];
    }
    
    public function detail($call_id){
        $call = "SELECT * FROM calls WHERE ID = {$call_id}";
        $call_data = Database::connect()->query($call)->fetch(PDO::FETCH_ASSOC);
        
        return $call_data;
    }
    
    public function list_detail_calls($call_id){
        $sql = "SELECT * FROM detail_calls WHERE ID_Calls = {$call_id}";
        $count = "SELECT COUNT(ID) as total FROM detail_calls";
        $all = Database::connect()->query($sql);
        $all_count = Database::connect()->query($count)->fetch(PDO::FETCH_ASSOC)['total'];
        
        return [
        'draw' => 1,
        'data' => $all->fetchAll(PDO::FETCH_CLASS),
        'totalRecords' => intval($all_count),
        'recordFiltered' => intval($all_count),
        ];
    }
    
}