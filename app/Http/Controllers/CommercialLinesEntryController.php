<?php

namespace App\Http\Controllers;

use App\Utilities\Lists;
use Illuminate\Http\Request;
use App\Models\CommercialLines;
use Illuminate\Support\Facades\Http;

class CommercialLinesEntryController extends Controller
{
    //
   //
   public function index()
   {
       
       return view('user.commercial');
   }

   public function onboard(Request $r)
   {
 
            $validated = $r->validate([
                'contact_number' => 'required',
                'name_of_signatory' => 'required',
            ]);

          $p =  new CommercialLines();
          $p->effective_date_appointment = $r->get('effective_date_appointment');
          $p->name_of_business = $r->get('name_of_business');
          $p->name_of_stokfela = $r->get('name_of_stokfela');
          $p->current_insurance = $r->get('current_insurance');
          $p->registration_number = $r->get('registration_number');
          $p->vat_no = $r->get('vat_no');
          $p->contact_person = $r->get('contact_person');
          $p->name_of_signatory = $r->get('name_of_signatory');
          $p->contact_number  = $r->get('contact_number');
          $p->date_of_birth  = $r->get('date_of_birth');
          $p->full_name  = $r->get('full_name');
          $p->id_number  = $r->get('id_number');
          $p->policy_number  = $r->get('policy_number');
          $p->surname  = $r->get('surname');
          $p->telephone_home  = $r->get('telephone_home');
          $p->telephone_cell  = $r->get('telephone_cell');
          $p->telephone_work  = $r->get('telephone_work');
          $p->address  = $r->get('address');
          $p->business_type  = $r->get('business_type');
          $p->email  = $r->get('email');
    
          $p->signature_file =$r->get('test');
         
          
          
          $p->save();

          $record  = CommercialLines::find($p->id);
   
           if( $record )
           {
   
               $message =  "Dear ". $p->name_of_signatory. " ". ", thank you for trusting Tsoga Insurance Brokers with your insurance, your application has been received and we will contact you soon. Regards Tsoga Insurance Brokers ";
   
               $list = new Lists;
        
               $list->sendSMSToLead($r->get('contact_number'),$message);
        
               
               $r->session()->flash('success', 'Successfully onboarded!');
        
               return redirect(route('onboarding.commercial.index'));
               
           }
           else        
           {
               $r->session()->flash('error', 'Something Went wrong please try again');
           }
   
   
        
      
        
   }
}
