<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personmodel extends CI_Model {
    public function calculateAge($dob)
    {
        // use the code from the tutorial exercise for calculating age.
        $today = date("Y-m-d");
        $diff = date_diff(date_create($dob), date_create($today));
        return $diff->format('%y');
    }
}