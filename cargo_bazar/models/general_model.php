<?php

class General_model extends CI_Model {

    function page_listing($page, $recordperpage, $tbl_name, $orderBy_columName, $ASC_DESC) {
        $this->db->select('*');
        $this->db->from($tbl_name);
        $this->db->order_by($orderBy_columName, $ASC_DESC);
        $this->db->limit($recordperpage, $page);
        $result = $this->db->get();
        return $result;
    }

    function page_listing_num($tbl_name) {

        $this->db->select('*');
        $this->db->from($tbl_name);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function getRecord($select, $tbl_name, $columName, $where) {

        $this->db->select($select);
        $this->db->from($tbl_name);
        $this->db->where($columName, $where);

        return $this->db->get();
    }

    function getRecordOrderBY($select, $tbl_name, $columName, $where, $orderBy_columName, $ASC_DESC) {

        $this->db->select($select);
        $this->db->from($tbl_name);
        $this->db->where($columName, $where);
        $this->db->order_by($orderBy_columName, $ASC_DESC);
        return $this->db->get();
    }

    function getRecordLimit($select, $tbl_name, $columName, $where, $recordperpage, $page) {
        $this->db->select($select);
        $this->db->from($tbl_name);
        $this->db->where($columName, $where);
        $this->db->limit($recordperpage, $page);
        return $this->db->get();
    }

    function getAllRecords($select, $tbl_name,$row="",$where="",$limit="",$order_by="") {

        if($select!=""){
            $this->db->select($select);
        }
        if($where!=""){
            $this->db->where($where);
        }
        if($limit!=""){

            $this->db->limit($limit,0);
        }
        if($order_by!=""){
            $this->db->order_by($order_by,'DESC');
        }

        $this->db->from($tbl_name);

        if($row==""){

            return $this->db->get();
        }
        else{
            $query =$this->db->get();
            return $query->row();
        }

    }

    function getAllRecordsOrderBY($select, $tbl_name, $orderBy_columName, $ASC_DESC) {
        $this->db->select($select);
        $this->db->from($tbl_name);
        $this->db->order_by($orderBy_columName, $ASC_DESC);
        return $this->db->get();
    }

    function getRecordMultipleWhere($select, $tbl_name, $whereArray) {

        $this->db->select($select);
        $this->db->from($tbl_name);
        $this->db->where($whereArray);
        $result = $this->db->get();
        return $result;
    }

    function getRecordMultipleWhereRemoveQuoma($select, $tbl_name, $whereArray) {

        $this->db->select($select, False);
        $this->db->from($tbl_name);
        $this->db->where($whereArray);
        $result = $this->db->get();
        return $result;
    }

    function getRecordMultipleWhereOrderBy($select, $tbl_name, $whereArray, $orderBy_columName, $ASC_DESC) {

        $this->db->select($select);
        $this->db->from($tbl_name);
        $this->db->where($whereArray);
        $this->db->order_by($orderBy_columName, $ASC_DESC);
        $result = $this->db->get();
        return $result;
    }

    function getRecordMultipleWhereOrderByLimit($select, $tbl_name, $whereArray, $orderBy_columName, $ASC_DESC, $recordPerPage, $page) {

        $this->db->select($select);
        $this->db->from($tbl_name);
        $this->db->where($whereArray);
        $this->db->order_by($orderBy_columName, $ASC_DESC);
        $this->db->limit($recordPerPage, $page);
        $result = $this->db->get();
        return $result;
    }

    function getRecordMultipleWhereLimit($select, $tbl_name, $whereArray, $recordPerPage, $page) {

        $this->db->select($select);
        $this->db->from($tbl_name);
        $this->db->where($whereArray);
        $this->db->limit($recordPerPage, $page);
        $result = $this->db->get();
        return $result;
    }

    function insertRecord_ReturnID($tbl_name, $data) {
        $this->db->insert($tbl_name, $data);
        return $this->db->insert_id();
    }

    function insertRecord($tbl_name, $data) {
        $this->db->insert($tbl_name, $data);
        return true;
    }

    function editRecord($columName, $where, $tbl_name, $data) {
        $this->db->where($columName, $where);
        $this->db->update($tbl_name, $data);
        return $this->db->affected_rows();
    }

    function editRecordWhere($whereArray, $tbl_name, $data) {

        $this->db->where($whereArray);
        $this->db->update($tbl_name, $data);
        return $this->db->affected_rows();
    }

    function deleteRecord($columName, $where, $tbl_name) {
        $this->db->where($columName, $where);
        $this->db->delete($tbl_name);
    }

    function deleteRecordWhere($whereArray, $tbl_name) {

        $this->db->where($whereArray);
        $this->db->delete($tbl_name);
        return $this->db->affected_rows();
    }

}

?>
