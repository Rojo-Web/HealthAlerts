<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf; 

class PDFController extends Controller
{
    public function generatePDF()
    {
        $data = ['title' => 'Welcome to Laravel PDF generation using dompdf'];
        $pdf = Pdf::loadView('pdf_view', $data);

        return $pdf->download('document.pdf');
    }
}
