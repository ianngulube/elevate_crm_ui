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
   
          <div class="center">
            
            <img  src="hope.jpg" width="70%" height="10%" />
            <p style="font-style: italic;">249 Cornerwes and Republic Road, Midrand  
            <br> Contact Number :  <b>0823066514 / 0645272855
            <br> Email Address :  <b>info@hopepropertystokvel.co.za
            </b><br> Website : <a href="https://hopepropertystokvel.co.za/">hopepropertystokvel.co.za</a></p>
           
            <h4 >STATEMENT OF ACCOUNT </h4>
        </div>

        <p style="font-size: 14px;"> <b> MEMBER DETAILS </p>
  
        <hr>
        <p style="font-size: 12px;"> FULLNAME :<b> {{$lead->contact_person_1}} </b></p>

        <p style="font-size: 12px;"> MEMBERSHIP NUMBER :<b> {{$lead->current_insurance }} </p>
        <p style="font-size: 12px;"> PHYSICAL ADDRESS : <b> {{$lead->name_of_signatory}} </p>
        <p style="font-size: 12px;"> CONTACT NUMBER: <b> {{$lead->contact_number}} </p>
        <p style="font-size: 12px;"> EMAIL ADDRESS: <b> {{$lead->email}} </p>
        <p style="font-size: 12px;"> STATEMENT DATE : <b> {{$lead->effective_date_appointment}} </p>  
 
        <p style="font-size: 14px;"> <b> INVESTMENT DETAILS </p>   
        <hr>  
        <p style="font-size: 12px;"> PROPERTY NAME : <b> {{$lead->property_name}}  </p>
        <p style="font-size: 12px;"> CATEGORY : <b> {{$lead->property_category}}  </p>
        <p style="font-size: 12px;"> PROPERTY VALUE : <b> R {{$lead->property_value}} </p>
        <p style="font-size: 12px;"> START DATE : <b> {{$lead->start_date}} </p>
        <p style="font-size: 12px;"> END DATE : <b> {{$lead->end_date}} </p>
        <p style="font-size: 12px;"> INVESTMENT DURATION : <b> {{$lead->investment_years}} YEARS </p>
       
        <p style="font-size: 14px;"> <b> CONTRIBUTIONS SUMMARY </p>  
<hr>
          <p></p>
          <table border="0.5" id="customers" style="font-size: 10px;">

            <tr>
                <td><b>Date </b></td>               
             <td> @if($lead){{$lead->date_one}}@else ...........................................@endif</td>               
             <td><b> Description</b></td>              
             <td> @if($lead){{$lead->description_one}}@else ...........................................@endif</td> 
            
             <td><b> Payment</b></td>              
             <td>R @if($lead){{$lead->payment_one}}@else ...........................................@endif</td>
             
            </tr>

            <tr>
            <td><b>Date </b></td>               
             <td> @if($lead){{$lead->date_two}}@else ...........................................@endif</td>               
             <td><b> Description</b></td>              
             <td> @if($lead){{$lead->description_two}}@else ...........................................@endif</td> 
            
             <td><b> Payment</b></td>              
             <td>R @if($lead){{$lead->payment_two}}@else ...........................................@endif</td>
             
            </tr>

            <tr>
            <td><b>Date </b></td>               
             <td> @if($lead){{$lead->date_three}}@else ...........................................@endif</td>               
             <td><b> Description</b></td>              
             <td> @if($lead){{$lead->description_three}}@else ...........................................@endif</td> 
            
             <td><b> Payment</b></td>              
             <td>R @if($lead){{$lead->payment_three}}@else ...........................................@endif</td>
             
            </tr>                        
          </table>

          <p style="font-size: 14px;"> <b> AGE ANALYSIS </p>   
        <hr>  
          <table border="0.5" id="customers" style="font-size: 10px;">

          <tr>
			 <td><b> Current</b></td>              
             <td>R @if($lead){{$lead->current_amount}}@else ...........................................@endif</td>
             <td><b>30 (days)  </b></td>               
             <td>R @if($lead){{$lead->thirty_days}}@else ...........................................@endif</td>               
             <td><b>60 (days) </b></td>              
             <td> @if($lead){{$lead->sixty_days}}@else ...........................................@endif</td> 
             <td><b> 90 (days) </b></td>              
             <td>R @if($lead){{$lead->ninety_days}}@else ...........................................@endif</td> 
             <td><b> Penalty Amount</b></td>              
             <td>R @if($lead){{$lead->amount_due}}@else ...........................................@endif</td>
            </tr>                     
          </table>

          <p style="font-size: 12px;">  TOTAL CONTRIBUTIONS : <b> R {{$lead->total_contributions}} </p>
          <p style="font-size: 12px;">  OUTSTANDING BALANCE : <b> R {{$lead->balance}}  </p>
          <br>
        <br> 

        <p style="font-size: 14px;"> <b> IMPORTANT INFORMATION </p>    
        <hr>  
        <p style="font-size: 12px;"> Please note payments that are 7 days after your due date, R300 late payment charges will be effective. Should you have any queries in regard to this invoice or should you note any disrepancy.Please see the banking details below for your payment.</p>     
        <p style="font-size: 12px;"> Account Name : <b> Hope Property Stokvel </p>
        <p style="font-size: 12px;"> Bank Name : <b> First National Bank (FNB) </p>
        <p style="font-size: 12px;"> Account Number : <b> 85985709 </p>
        <p style="font-size: 12px;"> Branch Code : <b> 20526 </p>

          <p> Helping Our People Exceed! </p>            
         </div>
       
       
    </div>
 
 


 
  </body>
</html>