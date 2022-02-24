<?php

use Classes\createPDF;

require_once 'vendor/autoload.php';

$data = [
    'name_field'=>'Dummy name ',
    'email_field'=>'Dummy email added',
    'phone_field'=>'2714278346317856',
    'enquiry_field'=>'lorem dummy text '
];

$pdf = new createPDF;
$response = $pdf->create($data);

var_dump($response);