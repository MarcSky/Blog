<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class dbentity_model extends CI_Model
{
    private $_table;
    private $_id;

    public function __construct()
    {
        parent::__construct();
    }

    public function setInfo($table, $id)
    {
        $this->_table = $table;
        $this->_id = $id;
    }

    public function setTable($table)
    {
        $this->_table = $table;
    }

    public function setId($id)
    {
        $this->_id = $id;
    }

    public function getSelect($key=array())
    {
        $this->db->select($key)
            ->from($this->_table);
        $query = $this->db->get();
        return (($query->num_rows()>0) ? $query->result_array() : null);
    }

    public function getSelectWhereArray($index)
    {
        $query = $this->db->get_where($this->_table, $index);
        return (($query->num_rows()>0) ? $query->result_array() : null);
    }

    public function getSelectWhereLike($search)
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->like('text', $search);

        return $this->db->get()->result_array();
    }


    public function getSelectWhere($index)
    {
        $query = $this->db->get_where($this->_table, $index);
        return (($query->num_rows()>0) ? $query->row_array() : null);
    }

    public function getSelectWhereList($index)
    {
        $query = $this->db->get_where($this->_table, $index);
        return (($query->result()>0) ? $query->result() : null);
    }

    public function getFullData()
    {
        $this->db->select('*')
            ->from($this->_table);
        $this->db->where('user_id', $this->_id);
        $query = $this->db->get();

        return (($query->num_rows()>0) ? $query->row_array() : null);
    }

    public function getAllData($table)
    {
        $query = $this->db->get($table);
        return $query->result();
    }

    public function setData($data = array())
    {
        $this->db->insert($this->_table, $data);
    }

    public function updateData($data, $index)
    {
        $this->db->get_where($this->_table, $index);
        $this->db->update($this->_table, $data);
    }

    public function deleteData($id)
    {
        $this->db->delete($this->_table, array('id' => $id));
    }

}