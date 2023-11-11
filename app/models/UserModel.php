<?php
namespace model;

class UserModel {
    private $db;
    public $table = 'users';

    public function __construct($db)
    {
        $this->db = $db;       
    }

    public function getUsers() 
    {
        return $this->db->get($this->table);
    }

    public function addUser($data)
    {  
        return $this->db->insert($this->table, $data);
    }

    public function updateUser($user_id, $data)
    {
        $condition = "id = $user_id";
        return $this->db->where($condition)->update($this->table, $data);
    }

    public function deleteUser($user_id)
    {
        $condition = "id = $user_id";
        return $this->db->where($condition)->delete($this->table);
    }

    public function getUser($user_id)
    {
        $condition = "id = $user_id";
        $user= $this->db->where($condition)->get($this->table);
        if (!empty($user)) {
            return $user[0];
        } else {
            return null;
        }
    }
}