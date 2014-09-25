<?php

class CompanyModel extends BaseModel
{
    public function fetchCompanyInfo ($cid)
    {
        $select = $this->db->select()
                ->from(DBTables::USER)
                ->where('id=?', $cid);
        
        $res = $this->db->query($select);
        return $res->fetch();
    }
    
    public function fetchItemList ($keyword, $page_no = 1, $params = null)
    {
        $select = $this->db->select()
                ->from(DBTables::STOCK);
        
        if ($keyword)
        {
            $select->where("partno LIKE ?", "%$keyword%");
        }
        
        $pager = new Pager360($this->db, $select);
        $sql = $pager->get_page($page_no);
        
        $ret = new stdClass();
        $ret->data = $this->db->fetchAll($sql);
        $ret->pager = $pager;
        
        return $ret;
    }
    
    public function removeAllItems ($cid)
    {
        $select = $this->db->delete(DBTables::STOCK, $this->db->quoteInto('cid=?', $cid));
    }
}