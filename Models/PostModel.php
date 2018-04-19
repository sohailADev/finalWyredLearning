<?php
/**
 * Created by PhpStorm.
 * Users: sohail
 * Date: 1/25/2018
 * Time: 11:19 AM
 */

class PostModel
{
    private $db ;

    public function __construct()
    {
        $this->db = new Database();

    }

    public function  getPosts()
    {
		return $this->db->GetAllPosts();

    }
    public function getPost($id)
    {

        return $this->db->getPostByID($id);
    }
    public function addPost($data)
    {

        $result = $this->db->AddPosts($data);
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }

    }

	public function updatePost($data)
    {


        return $this->db->updatePostEdit($data);

    }
    public function deletePost($id)
    {
        return $this->db->deletePost($id);
    }

    public function search()
    {

		die('serach');

    }

}