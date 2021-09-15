<?php

require_once "Database.php";

class Post{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    // get all post//////
    public function getAllPost(){
        $this->db->query("SELECT * FROM post");
        return $this->db->resultSet();
    }

    // get single result///
    public function getPostById(int $id) {
        $this->db->query("SELECT * FROM post WHERE id=:id");
        $this->db->bind(":id", $id);
        return $this->db->singleResult();
    }

    // add post to db///
    public function createPost(string $title, string $body): bool{
        $this->db->query("INSERT INTO post VALUES('', '$title', '$body')");
         if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
    //  update a  post by id 
    public function updatePost(int $id, string $title, string $body){
        $this->db->query("UPDATE post SET title=:title, body=:body WHERE id=:id");
        $this->db->bind(":title", $title);
        $this->db->bind("body", $body);
        $this->db->bind("id", $id);

        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    // delete a post by id
    public function deletePost(int $id): bool{
        $this->db->query("DELETE FROM post WHERE id=:id");
        $this->db->bind(":id", $id);
           if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

}
?>