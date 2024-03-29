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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('personal-lines/css/signature-pad.css')}}">
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-39365077-1']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
      })();
    </script>
  </head>
  <body>
    <div id="signature-pad" class="signature-pad">
      <div id="scroller">
        <p>
          @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
   
 
@endif
@if($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger">
  {{ $error }}
</div>
@endforeach

@endif
        <h3 class="text-center">Private & Confidential </h3>
        <div class="text-center">    <img  src="{{ asset('img/logo.JPG') }}" /> </div>
    
        <br>
        <h4 class="text-center">BENEFICIARY CERTIFICATE</h4>

        <p class="text-center fst-italic">Tsoga  Africa Brokers  is  an  authorized  financial  service provider, <br> FSP License Number: <b>49909</b><br> <a href="https://tsogainsure.co.za/">www.tsogainsure.co.za</a></p>

        <br>
        
        <ol>
          <li>In Terms of Clause A.1.3 and A 23.8 of the Trust deed dated 24th August 2020, the undersigned Trustees (authorized by Resolution Number 5, dated 9 June 2021) are Authorized to issue beneficiary certificates. This certifies that the undermentioned has invested, the value stated herein, in the Blackpac Trust and is a beneficiary of the Blackpac Trust. The net investment proceeds will be remitted to the contributor via the Stokfella application, as and when the Trustees exercise their
discretion in terms of Clause A 13 of the Trust Deed. <br> NOW THEREFORE the Trustees resolve and record as follows: <ul>
             
            </ul>
          </li>
          <br>
       

          <li>Client Confirmation: </li>
          </p>
          <form id="form" action="{{route('onboarding.personal.create')}}" method="POST">
            @csrf
            <div class="row">
              <div class="col">
                <label>
                  <b>EFFECTIVE DATE OF APPOINTMENT:</b>
                </label>
                <input id ="type" name  ="type" type="text" value="p" hidden>
                <input id ="sig" name  ="test" type="sig" value="" hidden>
                <input id ="effective_date_appointment" name  ="effective_date_appointment" type="date" class="form-control" placeholder="Effective Date">
              </div>
            </div>

            <br>
            <div class="row">
              <div class="col">
                <label>
                  <b>CERTIFICATE NUMBER:</b>
                </label>
                <input id ="name_of_stokfela" name  ="name_of_stokfela" type="text" class="form-control" placeholder="Enter Certificate Number">            
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col">
                <label>BENEFICIARY FULLNAMES:</label>
                <input id="contact_person_1" name = "contact_person_1" type="text" class="form-control" placeholder="Enter Beneficiary Fullnames">
              </div>
              <div class="col">
                <label>BENEFICIARY SURNAME:</label>
                <input id="id_number_1" name ="id_number_1" type="text" class="form-control" placeholder="Enter Beneficiary Surname.">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col">
                <label>AMOUNT INVESTED:</label>
                <input id="contact_person_2" name ="contact_person_2" type="text" class="form-control" placeholder="Enter Amount Invested">
              </div>
              <div class="col">
                <label>ADMINISTRATION ALLOCATION:</label>
                <input id="id_number_2"  name="id_number_2" type="text" class="form-control" placeholder="Enter Admin Allocation">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col">
                <label>NETT INVESTMENT:</label>
                <input id="name_of_signatory" name="name_of_signatory" type="text" class="form-control" placeholder="Enter Nett Investment">
              </div>
              <div class="col">
                <label>CONTACT No.:</label>
                <input id="contact_number" name="contact_number" type="text" class="form-control" placeholder="Enter Contact No.">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col">
                <label>BENEFICIARY ID:</label>
                <input id="current_insurance" name="current_insurance" type="text" class="form-control" placeholder="Enter Name Beneficiary ID">
              </div>
            </div>
           
            <br>
            <div class="description">
              <b>SIGNATURE:</b>
            </div>
            <br>
      </div>
      <div class="signature-pad--body">
        <canvas></canvas>
      </div>
      <div class="signature-pad--footer">
        <div class="description">Sign above</div>
        <div class="signature-pad--actions">
          <div>
            <button type="button" class="btn btn-primary btn-lg button clear" data-action="clear">Clear</button>         
            <button type="submit" class="btn btn-primary btn-lg button save" data-action="save-png">Submit Form</button>
                     </div>

         
                    </div>
        </div>
      </form>
      </div>
        </div>
     
    <script src="{{asset('personal-lines/js/signature_pad.umd.js')}}"></script>
   {{-- <script src="{{asset('personal-lines/js/xhr.js')}}"></script> --}} 
    <script src="{{asset('personal-lines/js/app.js')}}"></script>
 
  </body>
</html>