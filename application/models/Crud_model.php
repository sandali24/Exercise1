<?php
class Crud_model extends CI_Model 
{
    public function saverecords($data)
    {
        if (!empty($data['loan_amount']) && !empty($data['interest']) && !empty($data['period']) && !empty($data['start_date']) && !empty($data['loan_status'])) {

             // Set both "period" and "instalments" fields to the same value
             $data['instalments'] = $data['period'];

            // Calculate loan end date
            $loanStartDate = new DateTime($data['start_date']);
            $loanPeriodMonths = intval($data['period']); // Convert to integer
            $loanEndDate = clone $loanStartDate;
            $loanEndDate->modify("+$loanPeriodMonths months");

            // Insert into database
            $data['end_date'] = $loanEndDate->format('Y-m-d'); // Set end_date field



           //Calculate monthly interest rate
            $loanAmount = floatval($data['loan_amount']);
            $interestRate = floatval($data['interest']);
            $installments = intval($data['period']); 

            //Calculate monthly interest rate
            $monthlyInterestRate = $interestRate / 12 / 100;
            $denominator = pow(1 + $monthlyInterestRate, $installments) - 1;

            //Calculate the installment amount
            $installmentAmount = ($loanAmount * $monthlyInterestRate * pow(1 + $monthlyInterestRate, $installments)) / $denominator;
            $data['montly_rental'] = $installmentAmount;

            // Calculate interest amount
            $interestAmount = $installmentAmount * $installments - $loanAmount;
            // $data1['int_amount'] = $interestAmount;

            //Calculate the total amount
            $totalAmount = $installmentAmount + $interestAmount;

            $this->db->insert('re_eploan', $data); // Insert into re_eploan table
            $loan_code = $this->db->insert_id();
            // $this->db->insert('re_eploanshedule', $data1); // Insert into re_eploanshedule table

  // Insert schedule data into re_eploanshedule table
  $currentDate = clone $loanStartDate;
  for ($i = 0; $i < $installments; $i++) {
      $data1 = array(
          'loan_code' => $loan_code,
          'cap_amount' => $installmentAmount,
          'deu_date' => $currentDate->format('Y-m-d'),
          'int_amount' => $interestAmount,
          'tot_instalment' => $totalAmount
      );
      $this->db->insert('re_eploanshedule', $data1);
      $currentDate->modify("+1 month");
  }

            return $loan_code; // Return loan end date
        } else {
            return false; // Handle the case when loan_amount is empty
        }

    }

    public function getLoanDetails($loan_code)
    {
        $this->db->where('loan_code', $loan_code);
        $query = $this->db->get('re_eploan');
        return $query->row();
    }

    public function get_all_loans()
    {
        $query = $this->db->get('re_eploan');
        return $query->result();
    }

} 
?>
