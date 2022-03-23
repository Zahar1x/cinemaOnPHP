<?php
require_once PROJECT_ROOT_PATH . "/models/Database.php";

class UserModel extends Database
{
    /**
     * @throws Exception
     */
    public function getUsers($limit)
    {
        return $this->select("select * from app.person ORDER BY id ASC");
    }
}