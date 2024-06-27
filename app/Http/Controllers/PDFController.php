<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function generatePDF(Request $request)
    {
        $questions = $request->input('questions');
        $responses = $request->input('responses');
    
 
    
        $data =[
            'questions' => $questions,
            'responses' => $responses,
            
               ];
               dd($data);
        $pdf = Pdf::loadView('PDF.file-pdf', $data);
        return $pdf->stream('cahier_de_charge.pdf');
    }
    
}
