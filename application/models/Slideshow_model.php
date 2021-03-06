<?php

/**
 * Created by PhpStorm.
 * User: BERM-PC
 * Date: 21/12/2558
 * Time: 7:14
 */
class Slideshow_Model extends CI_Model
{

    public function getById($id)
    {
        $data = array();
        $this->db->select("*");
        $this->db->from('slideshow');
        $this->db->where('id', $id);
        $this->db->where('is_deleted=', 0);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row_array();
        }
        $query->free_result();
        return $data;
    }

    public function getAll()
    {
        $data = array();
        $this->db->select('*');
        $this->db->from('slideshow');
        $this->db->where('is_deleted=', 0);
        $this->db->where('published', 1);
        $this->db->order_by("order_seq", 'ASC');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

    public function loadSlideShowDataTable()
    {
        $data = array();
        $rows = array();
        $this->db->select("*");
        $this->db->from("slideshow");
        $this->db->where("is_deleted =", 0);
        $this->db->order_by("order_seq", 'ASC');
        $this->db->order_by("created_date", 'ASC');
        $query = $this->db->get();

        // echo $this->db->last_query();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $rows[] = array(
                    "id" => $row->id,
                    "file_name" => $row->file_name,
                    "caption_th" => $row->caption_th,
                    "caption_en" => $row->caption_en,
                    "order_seq" => $row->order_seq,
                    "published" => $row->published,
                    "created_date" => Calendar::formatDateTimeToDDMMYYYY($row->updated_date)
                );
            }
        }

        $data['data'] = $rows;
        $query->free_result();
        return $data;
    }


    public function save($data)
    {
        $this->db->insert('slideshow', $data);
        if ($this->db->insert_id() > 0) {
            return true;
        } else {
            return false;
        }
    }



    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('slideshow', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('slideshow');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}