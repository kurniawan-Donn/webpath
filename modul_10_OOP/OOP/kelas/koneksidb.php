<?php

class KoneksiDB
{
    private $db_host = "localhost";
    private $db_username = "user";
    private $db_password = "password";
    private $db_name = "nama_database";
    private $con = false;
    private $hasil = array();

    private function connect()
    {
        if (!$this->con) {
            $myconn = mysqli_connect($this->db_host, $this->db_username, $this->db_password);
            @mysqli_set_charset('utf8', $myconn);
            if (($myconn)) {
                $seldb = mysqli_select_db($myconn, $this->db_name);
                if ((!$seldb)) {
                    $this->con = true;
                    return true;
                } else {
                    array_push($this->hasil, mysqli_error());
                    return false;
                }
            } else {
                array_push($this->hasil, mysqli_error());
                return false;
            }
        } else {
            return true;
        }
    }
}

?>