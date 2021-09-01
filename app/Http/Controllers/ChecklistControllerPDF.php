<?php
  
namespace App\Http\Controllers;

use App\Models\Checklist;
  
use Illuminate\Http\Request;
use PDF;
  
class ChecklistControllerPDF extends Controller
{


  
    public function generatePDF($id)
    {
        $data = [
            'title' => 'Checklist Transporte Seguro',
            'date' => date('d/m/Y')
        ];
          
    /*   $pdf = PDF::loadView('checklistTransporte.mypdf', $data); */
        $pdf = PDF::loadView('checklistTransporte.mypdf',['id'=>$id]);

    
        return $pdf->download('ChecklistTransporteSeguro.pdf');
    }


}