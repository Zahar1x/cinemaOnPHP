<?php

class Database {
    protected $connection = null;

    /**
     * @throws Exception
     */
    public function __construct() {

        try {
            $this->connection = pg_connect("host=192.168.56.101
            dbname=studbd_1
            user=zaharix
            password=dz0239489");


            if (pg_last_error()) {
                throw new Exception("Could not connect to database.");
            }
        } catch (Exception $e) {
                throw new Exception($e->getMessage());
            }
    }

    /**
     * @throws Exception
     */
    public function select($query = "" )
    {
        try {
            $stmt = $this->executeStatement( $query );
            $result = pg_fetch_all($stmt);
            //$stmt->close();

            return $result;
        } catch(Exception $e) {
            throw New Exception( $e->getMessage() );
        }
        return false;
    }

    /**
     * @throws Exception
     */
    private function executeStatement($query = "")
    {
        try {
            $stmt = pg_query($this->connection, $query);
            if($stmt === false) {
                throw New Exception("Unable to do prepared statement: " . $query);
            }
            return $stmt;
        } catch(Exception $e) {
            throw New Exception( $e->getMessage() );
        }
    }
}