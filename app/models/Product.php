<?php

class Product
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function addProduct($data)
    {

        // die(print_r($data));

        $this->db->query('INSERT INTO products (product_id, title, price, unit, image) VALUES (:product_id, :title, :price, :unit, :image)');
        $this->db->bind(':product_id', $data['pid']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':unit', $data['unit']);
        $this->db->bind(':image', $data['image']);


        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    //admin
    public function productList()
    {
        $this->db->query('SELECT * FROM products WHERE status = 1');
        // $this->db->bind(':email', $email);
        $row  = $this->db->resultSet();

        return $row;
    }
    public function checkAdmin($email)
    {
        $this->db->query('SELECT * FROM users WHERE email = :email');;
        $this->db->bind(':email', $email);
        $row  = $this->db->single();
        // die($row->role);
        if ($row->role == 'admin') {
            // die(print_r($row));
            return true;
        } else {
            // die(print_r($row));
            return false;
        }
    }
    public function dltData($id)
    {
        $this->db->query('UPDATE products SET status= 0 WHERE id = :id');;
        $this->db->bind(':id', $id);
        $result  = $this->db->execute();
        // die($row->role);
        if ($result == true) {
            // die(print_r($result));
            return true;
        } else {
            return false;
        }
    }
    public function editData($data)
    {
        $this->db->query("UPDATE users SET name = :name,email= :email, role = :role   WHERE id = :id");
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':role', $data['role']);
        $result  = $this->db->execute();
        if ($result == true) {
            // die(print_r($data));
            return true;
        } else {
            return false;
        }
    }
}
