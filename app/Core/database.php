<?php
class Database
{
    private static $bdd = null;
    
    private static $DATABASE;
    private static $USERNAME;
    private static $PASSWORD;
    
    private function __construct() {
        // $this->DATABASE = 'calls';
        // $this->USERNAME = 'dashboardjm';
        // $this->PASSWORD = 'DashboardJM@2019';
    }
    public static function connect() {
        if(is_null(self::$bdd)) {
            self::$bdd = new PDO("mysql:host=68.183.224.197;dbname=calls", "dashboardjm", "DashboardJM@2019");
        }
        return self::$bdd;
    }
}
?>