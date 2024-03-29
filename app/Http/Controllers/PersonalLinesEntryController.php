<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalLines;
use App\Models\CommercialLines;
use App\Utilities\Lists;
use Illuminate\Support\Facades\Http;

class PersonalLinesEntryController extends Controller
{
    //
    public function index()
    {
        
        return view('user.personal');
    }

    public function onboard(Request $r)
    { 
        $validated = $r->validate([
            'contact_number' => 'required',
            'name_of_signatory' => 'required',
        ]);
           
      $p =  new PersonalLines();
      $p->effective_date_appointment = $r->get('effective_date_appointment');
      $p->name_of_stokfela = $r->get('name_of_stokfela');
      $p->current_insurance = $r->get('current_insurance');
      $p->contact_person_1 = $r->get('contact_person_1');
      $p->id_number_1 = $r->get('id_number_1');
      $p->contact_person_2 = $r->get('contact_person_2');
      $p->id_number_2 = $r->get('id_number_2');
      $p->name_of_signatory = $r->get('name_of_signatory');
      $p->contact_number  = $r->get('contact_number');
 
      $p->signature_file =$r->get('test');
      
      
       $p->save();

       $personalLinesRecord  = PersonalLines::find(  $p->id);

        if( $personalLinesRecord )
        {

            $message =  "Dear ". $p->name_of_signatory. " ". ", thank you for trusting Tsoga Insurance Brokers with your insurance, your application has been received and we will contact you soon. Regards Tsoga Insurance Brokers ";

            $list = new Lists;
     
            $list->sendSMSToLead($r->get('contact_number'),$message);
 

            
            $r->session()->flash('success', 'Successfully onboarded!');
     
            return redirect(route('onboarding.personal.index'));
            
        }
        else        
        {
            $r->session()->flash('error', 'Something Went wrong please try again');
        }


     
   
     

      
      
      // dd( $r);
    }
}
