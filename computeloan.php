<?php

$loanAmount = $_POST["loan_amount"];   
$clientType = $_POST["client_type"];

//validate if the method of form is POST
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $interestRate = 0;

    if($loanAmount < 100000){
        $interestRate = 10;
    } else {
        $interestRate = 5;
    }

    if($clientType == "1"){
        $interestRate = $interestRate - 2;
    }
    $interestAmount = $loanAmount * ($interestRate / 100);
    $totalLoan = $loanAmount + $interestAmount;

    header("location: loancalculator.php?loan=".$totalLoan);
}