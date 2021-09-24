<?php

class User_model extends CI_model
{
    public function getUser($id)
    {
        return $this->db->get_where('user',['id' => $id])->row_array();
    }
}