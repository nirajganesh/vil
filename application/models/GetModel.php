<?php
class GetModel extends CI_Model{

    // Fetch info
    public function getInfo($table)
    {
        return $this->db->get($table)->result();
    }
    

    // Fetch info with type
    public function getInfoType($table,$col,$key)
    {
        $this->db->where($col, $key);
        return $this->db->get($table)->result();
    }

    // Fetch info with type
    public function getInfoCities($table,$col,$array)
    {
        $this->db->where($col, $array[0]->city_id);
        foreach($array as $a){
            $this->db->or_where($col, $a->city_id);
        }
        return $this->db->get($table)->result();
    }

    // Fetch info with type
    public function getInfoStates($table,$col,$array)
    {
        $this->db->where($col, $array[0]->state_id);
        foreach($array as $a){
            $this->db->or_where($col, $a->state_id);
        }
        return $this->db->get($table)->result();
    }

    // Fetch info with type
    public function getInfoCountries($table,$col,$array)
    {
        $this->db->where($col, $array[0]->country_id);
        foreach($array as $a){
            $this->db->or_where($col, $a->country_id);
        }
        return $this->db->get($table)->result();
    }

    // Fetch visible info with type
    public function getVisibleCareersId($id)
    {
        $this->db->select('*')
                ->from('careers')
                ->join('cities', 'cities.id = careers.city_id', 'LEFT')
                ->join('states', 'cities.state_id = states.id', 'LEFT')
                ->where('careers.visibility','1')
                ->where('careers.city_id',$id);
        return $this->db->get()->result();
    }

    public function getCareers()
    {
        $this->db->select('*')
                ->from('careers')
                ->join('cities', 'cities.id = careers.city_id', 'LEFT')
                ->join('states', 'cities.state_id = states.id', 'LEFT');
        return $this->db->get()->result();
    }

    public function getVisibleCareers()
    {
        $this->db->select('*')
                ->from('careers')
                ->join('cities', 'cities.id = careers.city_id', 'LEFT')
                ->join('states', 'cities.state_id = states.id', 'LEFT')
                ->where('careers.visibility','1');
        return $this->db->get()->result();
    }

    public function getRegInfo()
    {
        $this->db->select('*')
                ->from('registrations r')
                ->join('cities', 'cities.id = r.city_id', 'LEFT')
                ->join('states', 'cities.state_id = states.id', 'LEFT')
                ->join('reg_roles', 'reg_roles.role_id = r.role_id', 'LEFT');
        return $this->db->get()->result();
    }
    
    public function getRegInfo2()
    {
        $this->db->select('*')
                ->from('registrations r')
                // ->join('cities', 'cities.id = r.city_id', 'LEFT')
                ->join('states', 'r.state_id = states.id', 'LEFT')
                ->join('reg_roles', 'reg_roles.role_id = r.role_id', 'LEFT');
        return $this->db->get()->result();
    }

    // Fetch info by id
    public function getInfoById($id, $table)
    {
        $this->db->where('id', $id);
        return $this->db->get($table)->row();
    }

    // Fetch info by id
    public function getInfoByColId($col, $id, $table)
    {
        $this->db->where($col, $id);
        return $this->db->get($table)->row();
    }

    // Fetch info by order
    public function getInfoByOrder($table)
    {
        return $this->db->order_by('id', 'desc')
                        ->get($table)
                        ->result();
    }

    public function getFeat()
    {
        $news = $this->db->select('id, head, img_src, date, slug')
                        ->order_by('id', 'desc')
                        ->where('featured', 1)
                        ->limit(4)
                        ->get('news')
                        ->result();
        $reports = $this->db->select('id, head, thumb as img_src, created_at as date, pdf_url')
                        ->order_by('id', 'desc')
                        ->where('featured', 1)
                        ->limit(4)
                        ->get('reports')
                        ->result();
        $data = array_merge($news,$reports);
        if(count($data) > 4){
            function date_sort($a, $b) {
                return strtotime($b->date) - strtotime($a->date);
            }
            usort($data, "date_sort");
            return array_slice($data, 0, 4 );
        }
        else{
            return $data;
        }        
    }

    // Fetch limited info by order
    public function getLimInfo($table,$lim,$order)
    {
        return $this->db->limit($lim)
                        ->order_by('id', $order)
                        ->get($table)
                        ->result();
    }

    // Fetch visible Info
    public function getVisibleInfo($table)
    {
        $this->db->where('visibility', '1');
        return $this->db->get($table)->result();
    }

    // Fetch max info
    public function getMaxNo($table, $column)
    {
        $this->db->select_max($column);
        $result = $this->db->get($table)->row();  
        return $result->$column;
    }

    // Fetch Products individual page
    public function getPage($id)
    {
        $this->db->select('*')
                ->from('product_pages')
                ->join('products', 'products.page_id = product_pages.id', 'LEFT')
                ->where('product_pages.id', $id);
        return $this->db->get()->row();
    }

    // Fetch Products individual page in admin
    public function getPageForAdmin($id)
    {
        $this->db->select('*')
                ->from('product_pages')
                ->join('products', 'products.page_id = product_pages.id', 'LEFT')
                ->where('products.id', $id);
        return $this->db->get()->row();
    }



    public function fetch_blogs($limit, $start)
    {
        $this->db->select('n.*');
        $this->db->from('news n');
        $this->db->order_by('id','desc');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result();
    }
    public function getBlog($id)
    {
        $items=$this->db->select('b.*')
                ->from('blogs b')
                ->where('b.id',$id)
                ->get()
                ->row();
        return $items;
    }
    public function getBlogsByTag($tag)
    {
        $items=$this->db->select('b.*')
                ->from('blogs b')
                ->order_by('b.id','desc')
                ->like('tags', $tag)
                ->get()
                ->result();
        return $items;
    }
   


    // Fetch Enquiries
    public function getEnquiries()
    {
        return $this->db->get('enquiries')->result();
    }

    // Count no. of rows in table 
    public function record_count($table) 
    {
        return $this->db->count_all($table);
    }
    
    // Fetch Admin Profile
    public function getAdminProfile()
    {
        return $this->db->get('users')->row();
    }

    // Fetch Website Profile
    public function getWebProfile()
    {
        return $this->db->get('webprofile')->row();
    }

    

}
?>