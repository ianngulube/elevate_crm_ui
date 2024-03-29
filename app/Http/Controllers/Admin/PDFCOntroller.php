<?php

namespace App\Http\Controllers\Admin;

use PDF;
use Illuminate\Http\Request;
use App\Models\PersonalLines;
use App\Http\Controllers\Controller;
use App\Models\CommercialLines;

class PDFCOntroller extends Controller
{
    //
    public function generatePDF($id,$type)
    {
        if($type=="p")
        {
            $lead =  PersonalLines::find($id);
            $data = [
                'title' => 'Tsoga Form',
                'date' => date('m/d/Y'),
                'lead'=>$lead
            ];
              
            $pdf = PDF::loadView('admin.pdf-templates.personalTemplate', $data);
        
            //return $pdf->download('itsolutionstuff.pdf');
    
            return $pdf->stream( $lead->name_of_signatory.'.pdf', array("Attachment" => false));
        }
        else if($type=="c"){
            $lead =  CommercialLines::find($id);
            $data = [
                'title' => 'Tsoga Form',
                'date' => date('m/d/Y'),
                'lead'=>$lead
            ];
              
            $pdf = PDF::loadView('admin.pdf-templates.commercialTemplate', $data);
        
            //return $pdf->download('itsolutionstuff.pdf');
    
            return $pdf->stream( $lead->name_of_signatory.'.pdf', array("Attachment" => false));
        }
       
    }
}
