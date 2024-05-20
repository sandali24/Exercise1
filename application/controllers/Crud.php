<?php
class Crud extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Crud_model');
    }

    public function index()
    {
        $this->load->view('insert');
    }

    public function savedata()
    {
        if($this->input->post('save'))
        {
            $data['loan_amount'] = $this->input->post('loan_amount');
            $data['interest'] = $this->input->post('interest');
            $data['period'] = $this->input->post('period');
            $data['start_date'] = $this->input->post('start_date');
            $data['loan_status'] = $this->input->post('loan_status');

            $loan_code = $this->Crud_model->saverecords($data);
            if($loan_code) {
                redirect("Crud/viewLoanDetails/$loan_code");
            } else {
                echo "Insert error!";
            }
        }
    }


	public function viewloans()
    {
        $data['loans'] = $this->Crud_model->get_all_loans();
        $this->load->view('viewloans', $data);
    }

    public function viewLoanDetails($loan_code)
    {
        $data['loan'] = $this->Crud_model->getLoanDetails($loan_code);
		$data['schedule'] = $this->Crud_model->getLoanSchedule($loan_code);
        $this->load->view('loan_details', $data);
    }
}
?>
