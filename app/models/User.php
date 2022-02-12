<?php

class User
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function logAuth($email, $password)
    {
        $this->db->query('SELECT * FROM users WHERE email = :email');;
        $this->db->bind(':email', $email);
        $row  = $this->db->single();
        // die($row);
        $hashed_password = $row->password;
        // $password = password_hash($password, PASSWORD_DEFAULT);
        if (password_verify($password, $hashed_password)) {
            // die($email . ' true=> ' . $password . ' = ' . $hashed_password);

            return $row;
        } else {
            // die($email . ' => ' . $password . ' = ' . $hashed_password);
            return false;
        }
    }
    public function findUserbyEmail($email)
    {
        $this->db->query('SELECT * FROM users WHERE email = :email');;
        $this->db->bind(':email', $email);
        $row  = $this->db->single();

        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function checkAdmin($email)
    {
        $this->db->query('SELECT * FROM users WHERE email = :email');;
        $this->db->bind(':email', $email);
        $row  = $this->db->single();
        // die($row->role);
        if ($row->role = 'admin') {
            // die(print_r($row));
            return true;
        } else {
            return false;
        }
    }
    public function register($data)
    {
        $this->db->query('INSERT INTO `users`(`name`, `email`, `password`) VALUES (:name,:email,:password)');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
