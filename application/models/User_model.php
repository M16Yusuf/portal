<?php

class User_model extends CI_model
{
    public function getUser($id)
    {
        return $this->db->get_where('user',['id' => $id])->row_array();
    }

    public function getberitaid($id)
    {
        return $this->db->get_where('berita',['id' => $id])->row_array();
    }
    public function update($data,$kondisi)
    {
        $this->db->update('berita',$data,$kondisi);
        return TRUE;
    }

}