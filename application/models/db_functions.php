<?php
class db_functions extends CI_Model
{
    public function add($tablename,$values)
    {
      $res=  $this->db->insert($tablename,$values);
      return $res;
    }
    public function addunique($tablename,$uniqueFieldname,$uniqueValue,$values)
    {
      $this->db->where($uniqueFieldname,$uniqueValue);
      $q = $this->db->get($tablename);
      if ( $q->num_rows() > 0 ) 
      {
        return 'Duplicate Record';
      } else {
        //Insert
       $res=  $this->db->insert($tablename,$data);
       return 'New Record Inserted !!';
      }
    }

      public function addNewOrUpdate($tablename,$uniqueFieldname,$uniqueValue,$values)
      {
        $this->db->where($uniqueFieldname,$uniqueValue);
        $q = $this->db->get($tablename);
             if ( $q->num_rows() > 0 ) 
             {
                    //Update if exisits
         $this->db->where($uniqueFieldname,$uniqueValue);
        $res=  $this->db->update($tablename,$values);
        return 'Record Updated';
           } else {
          //Insert         
         $res=  $this->db->insert($tablename,$values);
         return 'New Record Inserted !';
        }
      }
      public function delete($tablename,$id,$idValue)
        {
        //delete
        $this->db->where($id, $idValue);
        $this->db->delete($tablename);
        }

        public function getByID($tablename,$field,$value){
          if(!is_numeric($value)){
            $sql= "select H_ID from " . $tablename . " where ". trim($field). " = '". trim($value) ."'";
          } else {
            $sql= "select H_ID from " . $tablename . " where ". trim($field). " = ". trim($value) ;
          }
       
          $q=$this->db->query($sql);
          $row = $q->row();
          if(isset($row)){
            return $row->H_ID;
          } else {return '';}
          
        }

        public function getall($tablename){
          $sql="select * from ". $tablename;
          $q=$this->db->query($sql);
          // var_dump($q);
             if( $q->result())
             {
              return $q->result();
              } 
          
        }
}