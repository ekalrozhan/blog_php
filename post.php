<?php

use LDAP\Result;

include("db.php");

class Post
{
    private $db;
    public function __construct($db)
    {
        $this->db = $db;
    }

    // insert data
    public function addPost($title, $description, $image)
    {
        $sql = "INSERT INTO posts(title, description, image) VALUES('$title', '$description', '$image')";
        $result = mysqli_query($this->db, $sql);
        return $result;
    }

    public function getPost()
    {
        $sql = "SELECT * FROM posts";
        $result = mysqli_query($this->db, $sql);
        return $result;
    }
}
