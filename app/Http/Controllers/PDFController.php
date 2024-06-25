<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function generatePDF(Request $request)
    {
        $message = $request->query('message');
        $response = $request->query('response');

        
        $data =[
            'message' => $message,
            'response' => $response
        ];

        $pdf = Pdf::loadView('PDF.file-pdf', $data);
        return $pdf->stream('cahier_de_charge.pdf');
    }
    
}
