<?php
class Login_model extends CI_Model {

    public function __construct()
    {
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->database();
    }
    
    function getData()
    {
        
        $query = $this->db->get('ct_employees');
        
        if ($query->num_rows() > 0)
        {
            return $query->result();
        }else{
            show_error('Database is empty!');
        }
    }

    function doLogin($username, $password)
    {
        $query = $this->db->query("SELECT emp_id, emp_dept_id, emp_first_name, emp_last_name, emp_role, emp_dept_manager, emp_login FROM ct_employees WHERE emp_login='".$username."' and emp_pass='".$password."' and emp_status=1 ");
        $row = $query->row_array();
        
        //Set Session values       
        if ($query->num_rows() > 0) {
            

            //$this->session->set_userdata('userid', $row['id']);
            //$this->session->set_userdata('deptid', $row['dept_id']);
            //$this->session->set_userdata('username', $row['firstname']." ".$row['lastname']);        

            $logdata = array(
                    'empid'  => $row['emp_id'],
                    'loginid'  => $row['emp_login'],
                    'empname'  => $row['emp_first_name']." ".$row['emp_last_name'],
                    'deptid'    => $row['emp_dept_id'],
                    'role'   => $row['emp_role'],
                    'manager'   => $row['emp_dept_manager'],
                    'logged_in' => TRUE
            );
            $this->session->set_userdata($logdata);
        }

        return $query->num_rows();
    }

    function doLogout()
    {
        $logdata = array(
                'empid'  =>'',
                'loginid'  =>'',
                'empname' => '',
                'deptid' => '',
                'role' => '',
                'manager' => '',
                'logged_in' => FALSE,
               );

        $this->session->unset_userdata($logdata);
        $this->session->sess_destroy();        
        //redirect('default_controller','refresh');
        redirect('/');
    }
}
?>