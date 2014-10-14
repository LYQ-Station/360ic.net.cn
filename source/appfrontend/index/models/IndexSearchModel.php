<?php

class IndexSearchModel extends BaseModel
{
    public function fetchList ($keyword, $page_no = 1, $params = null)
    {
        $select = $this->db->select()
                ->from(array('st'=>DBTables::STOCK), '*')
                ->join(array('cmp'=> DBTables::USER), 'st.cid=cmp.id', array('company','address','phone'))
                ->where("model LIKE ?", "%$keyword%");
        
        $pager = new Pager360($this->db, $select, 35);
        $sql = $pager->get_page($page_no);
        
        $ret = new stdClass();
        $ret->data = $this->db->fetchAll($sql);
        $ret->pager = $pager;
        
        return $ret;
    }
}