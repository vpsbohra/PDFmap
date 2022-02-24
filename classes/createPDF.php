<?php

namespace Classes;

use mikehaertl\pdftk\Pdf;

class createPDF{

    public function create($data){
        $filename = "pdf".rand(200,120000).'.pdf';
        $pdf = new Pdf('./test.pdf');
        $pdf->fillForm($data)
        ->flatten()
        ->saveAs('./completed/'.$filename); 
        return $filename;
    }

}