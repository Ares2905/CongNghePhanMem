<?php
class DB {
    public function connect()
    {
        $con = new mysqli('127.0.0.1','root','','webbh');
        if ($con->connect_error) {
            echo 'Kết nối thất bai';
        }
        return $con; 
    }
}