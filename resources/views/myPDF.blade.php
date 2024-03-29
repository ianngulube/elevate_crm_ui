<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Elevate Onboarding</title>
    <meta name="description" content="Signature Pad - HTML5 canvas based smooth signature drawing using variable width spline interpolation.">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- CSS only -->
    <style>
        #customers {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
        }
        
        #customers tr:nth-child(even){background-color: #f2f2f2;}
        
        #customers tr:hover {background-color: #ddd;}
        
        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #04AA6D;
          color: white;
        }
        table {
    table-layout : fixed;
}
 
        </style>
    
  </head>
  <body>
    <div>
      <div>
        <p>
        <h3 class="text-center">Private & Confidential </h3>
        <img class="center-block" src="TsogaLogo.jpeg" />
        <br>
        <h4 class="text-center">Intermediary Appointment: Personal Lines</h4>
        <br>
        <ol>
          <li>I, the undersigned, appoint Tsoga Afrika Insure Brokers (Pty) Ltd, hereinafter referred to as Tsoga, as my non-mandated intermediary. <br> This means that Tsoga is appointed as my short-term insurance broker in order to: <ul>
              <li>a. secure quotations on my behalf from a range of Insurers</li>
              <li>b. arrange for insurance cover on my behalf after I accept a quotation</li>
              <li>c. process any claims on my behalf with my Insurer</li>
              <li>d. renew my Insurance cover as and when necessary and only after securing my agreement to do so</li>
              <li>e. amend my Insurance cover from time to time as per my request</li>
              <li>f. provide me with guidance regarding matters of a short-term insurance nature</li>
              <li>g. deal with queries that I may have regarding my Insurance cover</li>
            </ul>
          </li>
          <br>
          <li>In order to fulfill these responsibilities, I authorise Tsoga to obtain, on my behalf and at my request, all relevant information pertaining to my existing insurance cover for all personal business, including: <ul>
              <li>a. policy wordings</li>
              <li>b. policy schedules</li>
              <li>c. endorsements</li>
              <li>d. detailed claims experience</li>
            </ul>
          </li>
          <br>
          <li>I take note of the following: <ul>
              <li>a. that Tsoga Africa Insurance Brokers (Pty) Ltd (Tsoga) is a registered Financial Services Provider under licence number 49909 and company registration number 2017/510564/07</li>
              <li>b. that Tsoga does not collect or handle Insurance premiums; these are paid directly by the client to the Insurer</li>
              <li>c. that, as required by law, Tsoga has Professional Indemnity / Fidelity Guarantee Insurance in place</li>
            </ul>
          </li>
          <br>
          <li>Client Confirmation: </li>
       
          <p></p>
          <table border="0.5" id="customers">
            <tr>
                <td><b>Effective Date Of  Appointment</b></td>
              
             {{--  <td>@if($lead){{$lead->effective_date_appointment}}@else ...........................................@endif</td>--}}   
             <td>...........................................</td>
            </tr>
            <tr>
                <td><b>Name Of Stokfela</b></td>
              
                <td>@if($lead){{$lead->name_of_stokfela}}@else ...........................................@endif</td>
            </tr>

            <tr>
                <td><b>Contact Person 1</b></td>
              
                <td>@if($lead){{$lead->contact_person_1}}@else ...........................................@endif</td>
            </tr>
            <tr>
                <td><b>ID Number 1</b></td>
              
                <td>@if($lead){{$lead->id_number_1}}@else ...........................................@endif</td>
            </tr>

            <tr>
                <td><b>Contact Person 2</b></td>
              
                <td>@if($lead){{$lead->contact_person_2}}@else ...........................................@endif</td>
            </tr>
            <tr>
                <td><b>ID Number 2</b></td>
              
                <td>@if($lead){{$lead->id_number_2}}@else ...........................................@endif</td>
            </tr>

            <tr>
                <td><b>Name of Signatory</b></td>
              
                <td>@if($lead){{$lead->name_of_signatory}}@else ...........................................@endif</td>
            </tr>
            <tr>
                <td><b>Contact Number</b></td>
              
                <td>@if($lead){{$lead->contact_number}}@else ...........................................@endif</td>
            </tr>

            <tr>
                <td><b>Date:</b></td>
              
                <td>@if($lead){{$lead->date}}@else ...........................................@endif</td>
            </tr>
            
            <tr>
                <td><b>Signature:</b></td>
                <td  > <img class="center-block" src="@if($lead){{$lead->signature_file}}@else @endif" width="100%" /></td>
              
                
            </tr>
          </table>
        
             
         </div>
       
       
    </div>
 
 


 
  </body>
</html>