     
      function mySubmitFunction(e) {
        e.preventDefault();
        someBug();
        return false;
      }

      function createMember(dataURL){
        // initialise data 
        var type = document.getElementById("type");        

        var name_of_signatory = document.getElementById("name_of_signatory");        
        var contact_number = document.getElementById("contact_number");  

        var effective_date_appointment = document.getElementById("effective_date_appointment");  
        var name_of_stokfela = document.getElementById("name_of_stokfela");       
        var name_of_business = document.getElementById("name_of_business");  
        var registration_number = document.getElementById("registration_number");  
        var vat_no = document.getElementById("vat_no");  
        var contact_person = document.getElementById("contact_person"); 
        var date =   document.getElementById("date");  
        
        
        
    
        if(name_of_signatory.length==0||contact_number.length==0){
            alert("Please fill in all the fields required.");
        }
        else{
           
            var data = JSON.stringify({
                "type":type.value,
                "effective_date_appointment":effective_date_appointment.value,
                "name_of_stokfela":name_of_stokfela.value,
                "name_of_business":name_of_business.value,
                "registration_number":registration_number.value,
                "vat_no":vat_no.value,
                "contact_person":contact_person.value,
                "name_of_signatory":name_of_signatory.value,
                "contact_number":contact_number.value,
                "date":date.value,
                "signature":dataURL
                }) ;
    
            // initialise API 
console.log(data);
            var http = new XMLHttpRequest();
           // var url = 'https://api.dev.duravest.co.za/api/create-member';
            var url = 'https://elevate.api.duravest.co.za/api/create-member';
        
            http.open('POST', url, true);
             
            //Send the proper header information along with the request
            http.setRequestHeader('Content-type', 'application/json');
            
            http.onreadystatechange = function() {//Call a function when the state changes.
      
                if(http.readyState == 4 && http.status == 200) {                  
           
                console.log('sent to api via call')   ;            
                    
                
                }
            }
            
           // http.send(data);
           http.send(data);
        }

        
         
    }
  