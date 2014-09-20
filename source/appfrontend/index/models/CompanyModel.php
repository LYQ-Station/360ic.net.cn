<?php

class IndexSearchModel extends BaseModel
{
    public function fetchList ($keyword, $page_no = 1, $params = null)
    {
        $select = $this->db->select()
                ->from(DBTables::STOCK)
                ->where("partno LIKE ?", "%$keyword%");
        
        $pager = new Pager360($this->db, $select, 1);
        $sql = $pager->get_page($page_no);
        
        $ret = new stdClass();
        $ret->data = $this->db->fetchAll($sql);
        $ret->pager = $pager;
        
        return $ret;
    }
}