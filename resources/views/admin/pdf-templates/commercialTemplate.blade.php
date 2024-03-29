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
      .center {
  margin: auto;
  width: 50%;
  text-align: center;
 
  padding: 10px;
}
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
          <div class="center">
            <img src="TsogaLogo1.jpeg" width="300" height="100" />
          
            <p style="font-size: 12px;">Shop 5 Health Emporium, c/o Church & Market Street, Halfway House, Midrand, 1685 <br> <strong> FSP License Number: </strong> 49909 <br> <strong> Telephone : </strong> 010 442 6968 <br> <strong> Email : </strong> info@tsogainsure.co.za <br> <strong> Website : </strong> <a href="https://tsogainsure.co.za//">www.tsogainsure.co.za</p>
                 
          </div>            
          <hr>
          <h5 class="text-center" style="font-weight: bold;">BROKER APPOINTMENT FORM</h5>
          <hr>
   
        <P style="font-size: 13px;"> 
        I/ We hereby appoint <strong> TSOGA AFRIKA INSURANCE BROKERS PTY LTD </strong> as my/our broker to arrange, manage and maintain my/our short-term insurance as mutually agreed upon from time to time. <strong> TSOGA AFRIKA INSURANCE BROKERS PTY LTD </strong>  is an authorized Financial Services Provider Licence Number: 49909
        </P>
      
        <P style="font-size: 13px;"> We the undersigned (hereafter called the Client) hereby appoint  <strong> TSOGA AFRIKA INSURANCE BROKERS PTY LTD </strong> as our Insurance Broker effective from the date of signature and with respect to the policies below. We hereby give consent to the Broker obtaining information from all product providers to enable the Broker to comply with the provisions of this appointment. Such appointment is to remain in force until cancelled by either party in writing giving 30 days written notice. </P>
        
        <h5 class="text-left" style="font-weight: bold;">Duties of Client</h5>
        
        <p >
            <ol>
              <li style="font-size: 13px;">The Client undertakes to make available and disclose all information relating to his insurance cover and claims history, which may lead an Insurer to a different conclusion or rating even if such questions are not asked. The client must answer all questions and questionnaires in full and truthfully. Failing to do this could result in a breach of the contract of insurance and the repudiation of a claim by the insurer.</li>
             
              <li style="font-size: 13px;">The Client undertakes to advise the Broker as soon as is possible and within any time limit specified on the policy of any event which may lead to a claim whether it is intended to claim or not.</li>
              
              <li style="font-size: 13px;">The Client undertakes to advise the Broker of any change in information which he might have to disclose relating to the risk within 30 days of such change and have no claim against the Broker for any damage, financial or otherwise, caused by the fact that the Client did not submit or submitted belatedly, any such material change. Although the Broker can advise on valuations and sums insured, the final decision will always rest with the client and unless the client gives written instruction otherwise it will be the value reflected on the policy.</li>
            
              <li style="font-size: 13px;">The Client undertakes to act in the utmost good faith at all times.</li>
             
              <li style="font-size: 13px;">The Client undertakes to pay all premiums and fees as indicated by the Broker and on such credit terms as have been communicated for each particular policy.</li>
             
              <li style="font-size: 13px;">Tsoga Afrika Insurance Brokers reserve the right to do an ITC check on behalf of the Insurer. </li>
            </ol> 
        </p>
               
        <h5 class="text-left" style="font-weight: bold;">Duties of the Broker</h5>

        <p >
            <ol>                          
              <li style="font-size: 13px;">The Broker undertakes to act at all times in the utmost good faith and is to ensure that all information that is relevant to a risk and given by the Client is passed on to the insurer. All other information about the client will be kept with the utmost confidentiality. </li>
             
              <li style="font-size: 13px;">The Broker will obtain comparative quotations at proposal stage, recommend the most appropriate product(s) and thereafter obtain comparative quotations annually from the market, present these and advise the client on additional covers available at the annual review. The Broker will give advice on valuations and sums insured at the annual review </li>
             
              <li style="font-size: 13px;">The Broker will assist the Client with the submission of claims, keep the Client informed of the progress of claims regularly and advise on the settlement from the Insurer. The Broker will use their expertise to advise a fair settlement. The Broker will not charge for this claims service as long as they are the appointed Brokers </li>
              <li style="font-size: 13px;">Tsoga Afrika Insurance Brokers reserve the right to do an ITC check on behalf of the Insurer. </li>
            </ol> 
        </p>
        <br>  
        <table border="0.5" id="customers">
            <tr>
            <td style="font-size: 13px;">Appointment Date </b></td> 
              
             <td style="font-size: 13px;">@if($lead){{$lead->effective_date_appointment}}@else ...........................................@endif</td>  
           
            </tr>
			
            <tr>
            <td style="font-size: 13px;">Stokvel Name </b></td>              
                <td style="font-size: 13px;">@if($lead){{$lead->name_of_stokfela}}@else ...........................................@endif</td>
            </tr>
</table>
		
            <h5 class="text-left" style="font-weight: bold;">Personal Details</h5>

<table border="0.5" id="customers">
            <tr>
            <td style="font-size: 13px;">Firstname </b></td>              
                <td style="font-size: 13px;">@if($lead){{$lead->full_name}}@else ...........................................@endif</td>
            </tr>

            <tr>
            <td style="font-size: 13px;">Surname </b></td>              
                <td style="font-size: 13px;">@if($lead){{$lead->surname}}@else ...........................................@endif</td>
            </tr>
            <tr>
            <td style="font-size: 13px;">Date of Birth </b></td>              
                <td style="font-size: 13px;">@if($lead){{$lead->date_of_birth}}@else ...........................................@endif</td>
            </tr>

            <tr>
            <td style="font-size: 13px;">Identiy Number </b></td>              
                <td style="font-size: 13px;">@if($lead){{$lead->id_number}}@else ...........................................@endif</td>
            </tr>

</table>
      

       
            <h5 class="text-left" style="font-weight: bold;">Contact Details</h5>

<table border="0.5" id="customers">
            <tr>
            <td style="font-size: 13px;">Telephone - Home </b></td>               
                <td style="font-size: 13px;">@if($lead){{$lead->telephone_home}}@else ...........................................@endif</td>
            </tr>

            <tr>
            <td style="font-size: 13px;">Telephone - Work </b></td>              
                <td style="font-size: 13px;">@if($lead){{$lead->telephone_work}}@else ...........................................@endif</td>
            </tr>
            <tr>
            <td style="font-size: 13px;">Telephone - Cellphone </b></td>              
                <td style="font-size: 13px;">@if($lead){{$lead->telephone_cell}}@else ...........................................@endif</td>
            </tr>
            <tr>
            <td style="font-size: 13px;">Email Address </b></td>              
                <td style="font-size: 13px;">@if($lead){{$lead->email}}@else ...........................................@endif</td>
            </tr>
            <tr>
            <td style="font-size: 13px;">Physical Address </b></td>             
                <td style="font-size: 13px;">@if($lead){{$lead->address}}@else ...........................................@endif</td>
            </tr>
</table>
            <h5 class="text-left" style="font-weight: bold;">Business Details</h5>
<table border="0.5" id="customers">
            <tr>
            <td style="font-size: 13px;">Name of Business </b></td>             
                <td style="font-size: 13px;">@if($lead){{$lead->name_of_business}}@else ...........................................@endif</td>
            </tr>
            
            <tr>
            <td style="font-size: 13px;">Type of Business </b></td>              
                <td style="font-size: 13px;">@if($lead){{$lead->business_type}}@else ...........................................@endif</td>
            </tr>
            
            <tr>
            <td style="font-size: 13px;">Business Registration No. </b></td>              
                <td style="font-size: 13px;">@if($lead){{$lead->registration_number}}@else ...........................................@endif</td>
            </tr>
</table> 
   
            <h5 class="text-left" style="font-weight: bold;">Current Insurance</h5>

<table border="0.5" id="customers">
            <tr>
            <td style="font-size: 13px;">Name of Insurer </b></td>               
                <td style="font-size: 13px;">@if($lead){{$lead->current_insurance}}@else ...........................................@endif</td>
            </tr>
            <tr>
            <td style="font-size: 13px;">Policy Number </b></td>             
                <td style="font-size: 13px;">@if($lead){{$lead->policy_number}}@else ...........................................@endif</td>
            </tr>
</table>  

            <h5 class="text-left" style="font-weight: bold;">Sign Off</h5>
<table border="0.5" id="customers">
            <tr>
            <td style="font-size: 13px;">Name of Signatory </b></td>              
                <td style="font-size: 13px;">@if($lead){{$lead->name_of_signatory}}@else ...........................................@endif</td>
            </tr>

            <tr>
                <td style="font-size: 13px;">Signatory Contact Number </b></td>              
                <td style="font-size: 13px;">@if($lead){{$lead->contact_number}}@else ...........................................@endif</td>
            </tr>

            <tr>
                <td style="font-size: 13px;">Signature Date </b></td>              
                <td style="font-size: 13px;">@if($lead){{$lead->created_at}}@else ...........................................@endif</td>
            </tr>

            <tr>
            <td style="font-size: 13px;">Client Signature </b></td>   
                <td  > <img class="center-block" src="@if($lead){{$lead->signature_file}}@else @endif" width="100%" /></td> 
            </tr>
          </table>                
        </div> 
    </div>
 
 



  </body>
</html>