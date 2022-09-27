<?php

class Dbh {
    protected function connect() {
        try {
            $dbServerName = "localhost";
            $dbUsername = "tohru";
            $dbPassword = "Patohru@NZKVPS_CL2";
            $dbName = "ooplogin";

            $dbh = new PDO('mysqli:host=localhost;dbname=ooplogin', $dbUsername, $dbPassword);
            return $dbh;
        } catch(PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}