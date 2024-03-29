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
        <div class="text-center">
    <img src="{{ asset('img/logo_1.JPG') }}" width="450" height="140" />
</div>
<br>
<p class="text-center fst-italic"><strong> FSP License Number: </strong> 49909</b>
<p class="text-center fst-italic">Shop 5 Health Emporium, c/o Church & Market Street, Halfway House, Midrand, 1685</p>
<p class="text-center fst-italic"><strong> Telephone : </strong> 010 442 6968</p>
<p class="text-center fst-italic"><strong> Email : </strong> info@tsogainsure.co.za</p>
<p class="text-center fst-italic"><strong> Website : </strong> <a href="https://tsogainsure.co.za//">www.tsogainsure.co.za</a></p>
<hr>
    
      
        <h4 class="text-center" style="font-weight: bold;">BROKER APPOINTMENT FORM</h4>

      
        <hr>
        <br>
        <P style="font-size: 14px;"> 
        I/ We hereby appoint <strong> TSOGA AFRIKA INSURANCE BROKERS PTY LTD </strong> as my/our broker to arrange, manage and maintain my/our short-term insurance as mutually agreed upon from time to time. <strong> TSOGA AFRIKA INSURANCE BROKERS PTY LTD </strong>  is an authorized Financial Services Provider Licence Number: 49909
        </P>
        <br>
        <P style="font-size: 14px;"> We the undersigned (hereafter called the Client) hereby appoint  <strong> TSOGA AFRIKA INSURANCE BROKERS PTY LTD </strong> as our Insurance Broker effective from the date of signature and with respect to the policies below. We hereby give consent to the Broker obtaining information from all product providers to enable the Broker to comply with the provisions of this appointment. Such appointment is to remain in force until cancelled by either party in writing giving 30 days written notice. </P>
        
        <h6 class="text-left" style="font-weight: bold;">Duties of Client</h6>
        <p >

            <ol>
              <li style="font-size: 14px;">The Client undertakes to make available and disclose all information relating to his insurance cover and claims history, which may lead an Insurer to a different conclusion or rating even if such questions are not asked. The client must answer all questions and questionnaires in full and truthfully. Failing to do this could result in a breach of the contract of insurance and the repudiation of a claim by the insurer.</li>
              <br>
              <li style="font-size: 14px;">The Client undertakes to advise the Broker as soon as is possible and within any time limit specified on the policy of any event which may lead to a claim whether it is intended to claim or not.</li>
              <br>
              <li style="font-size: 14px;">The Client undertakes to advise the Broker of any change in information which he might have to disclose relating to the risk within 30 days of such change and have no claim against the Broker for any damage, financial or otherwise, caused by the fact that the Client did not submit or submitted belatedly, any such material change. Although the Broker can advise on valuations and sums insured, the final decision will always rest with the client and unless the client gives written instruction otherwise it will be the value reflected on the policy.</li>
              <br>
              <li style="font-size: 14px;">The Client undertakes to act in the utmost good faith at all times.</li>
              <br>
              <li style="font-size: 14px;">The Client undertakes to pay all premiums and fees as indicated by the Broker and on such credit terms as have been communicated for each particular policy.</li>
              <br>
              <li style="font-size: 14px;">Tsoga Afrika Insurance Brokers reserve the right to do an ITC check on behalf of the Insurer. </li>
            </ol> 

        </p>

        <h6 class="text-left" style="font-weight: bold;">Duties of the Broker</h6>
        <p >
            <ol>                          
              <li style="font-size: 14px;">The Broker undertakes to act at all times in the utmost good faith and is to ensure that all information that is relevant to a risk and given by the Client is passed on to the insurer. All other information about the client will be kept with the utmost confidentiality. </li>
              <br>
              <li style="font-size: 14px;">The Broker will obtain comparative quotations at proposal stage, recommend the most appropriate product(s) and thereafter obtain comparative quotations annually from the market, present these and advise the client on additional covers available at the annual review. The Broker will give advice on valuations and sums insured at the annual review </li>
              <br>
              <li style="font-size: 14px;">The Broker will assist the Client with the submission of claims, keep the Client informed of the progress of claims regularly and advise on the settlement from the Insurer. The Broker will use their expertise to advise a fair settlement. The Broker will not charge for this claims service as long as they are the appointed Brokers </li>
              <li style="font-size: 14px;">Tsoga Afrika Insurance Brokers reserve the right to do an ITC check on behalf of the Insurer. </li>
            </ol> 
        </p>

        <h6 class="text-left" style="font-weight: bold;">Remuneration</h6>
        <p >
            <ol>  
                      
              <li style="font-size: 14px;">The Broker’s remuneration will consist of commission from the Insurers and / or fees as disclosed to the Client.</li>
            </ol> 
        </p>
          
        <br>
        <form id="form" action="{{route('onboarding.commercial.create')}}" method="POST">
            @csrf
            <div class="row">
              <div class="col">
                <label>
                  <b>Beneficiary Date of Birth:</b>
                </label>
                <input id ="type" name  ="type" type="text" value="p" hidden>
                <input id ="sig" name  ="test" type="sig" value="" hidden>
                <input id ="effective_date_appointment" name  ="effective_date_appointment" type="date" class="form-control" placeholder="Effective Date">
              </div>
            </div>
            <br>
            <h6 class="text-left" style="font-weight: bold;">Group Details</h6>
            <br>
            <div class="row">
                <div class="col">
                  <label style="font-size: 14px;">Current Group / Stokvel Name</label>
                  <input id ="name_of_stokfela" name  ="name_of_stokfela" type="text" class="form-control" >   
                 
                </div>
              </div>
         
              <br>
              <h6 class="text-left" style="font-weight: bold;">Personal Details</h6>
              <br>
              <div class="row">
                <div class="col">
                  <label style="font-size: 14px;">Firstname </label>
                  <input id="full_name" name="full_name" type="text" class="form-control" >
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <label style="font-size: 14px;">Surname </label>
                  <input id="surname" name="surname" type="text" class="form-control" >
                </div>
              </div>
              <br>
              <div class="row">
              <div class="col">
                <label>
                  <b>Date of Birth:</b>
                </label>
                <input id ="type" name  ="type" type="text" value="p" hidden>
                <input id ="sig" name  ="test" type="sig" value="" hidden>
                <input id ="date_of_birth" name  ="date_of_birth" type="date" class="form-control" >
              </div>
            </div>
              <br>
              <div class="row">
                <div class="col">
                  <label style="font-size: 14px;">ID Number</label>
                  <input id="id_number" name="id_number" type="text" class="form-control" >
                </div>
              </div>
              <br>
              <h6 class="text-left" style="font-weight: bold;">Contact Details</h6>
              <br>
              <div class="row">
                <div class="col">
                  <label style="font-size: 14px;">Telephone - Home</label>
                  <input id="telephone_home" name="telephone_home" type="text" class="form-control" >
                </div>
              </div>
              
            <br>
            <div class="row">
                <div class="col">
                  <label style="font-size: 14px;">Telephone - Work</label>
                  <input id ="telephone_work" name  ="telephone_work" type="text" class="form-control" >   
                 
                </div>
              </div>
              <br>
            <div class="row">
                <div class="col">
                  <label style="font-size: 14px;">Telephone - Cellphone</label>
                  <input id ="telephone_cell" name  ="telephone_cell" type="text" class="form-control" >   
                 
                </div>
              </div>
              <br>
            <div class="row">
                <div class="col">
                  <label style="font-size: 14px;">Email Address</label>
                  <input id ="email" name  ="email" type="text" class="form-control" >   
                 
                </div>
              </div>
              <br>
            <div class="row">
                <div class="col">
                  <label style="font-size: 14px;">Physical Address</label>
                  <input id ="address" name  ="address" type="text" class="form-control" >   
                 
                </div>
              </div>
              <br>
              <h6 class="text-left" style="font-weight: bold;">Business Details</h6>
              <br>
              <div class="row">
                <div class="col">
                  <label style="font-size: 14px;">Name of Business</label>
                  <input id="name_of_business" name="name_of_business" type="text" class="form-control" >
                </div>
              </div>
              <br> 
                  <div class="row">
                      <div class="col">
                        <label style="font-size: 14px;">Type of Business</label>
                        <input id="business_type" name="business_type" type="text" class="form-control" >
                      </div>
                  </div>
              <br>
              
              <div class="row">
                <div class="col">
                  <label style="font-size: 14px;">Company Number</label>
                  <input id="registration_number" name="registration_number" type="text" class="form-control" >
                </div>
              </div>
 
              <br>
              <h6 class="text-left" style="font-weight: bold;">Current Insurance</h6>          
              <br>
              <div class="row">
                <div class="col">
                  <label style="font-size: 14px;">Name of Insurer/s</label>
                  <input id="current_insurance" name="current_insurance" type="text" class="form-control" >
                </div>
              </div>
              <br> 
              <div class="row">
                <div class="col">
                  <label style="font-size: 14px;">Policy number</label>
                  <input id="policy_number" name="policy_number" type="text" class="form-control" >
                </div>
              </div>
                         <br>
              <br> 
              <br>
              <h6 class="text-left" style="font-weight: bold;">Sign Off</h6>          
              <br>
              <div class="row">
                <div class="col">
                  <label style="font-size: 14px;">Name of Signatory</label>
                  <input id="name_of_signatory" name="name_of_signatory" type="text" class="form-control" >
                </div>
              </div>
              <br> 
              <div class="row">
                <div class="col">
                  <label style="font-size: 14px;">Signatory Contact Number</label>
                  <input id="contact_number" name="contact_number" type="text" class="form-control" >
                </div>
              </div>
              <br> 
            <br>
            <div class="description">
              <b style="font-size: 14px;">Member Signature:</b>
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