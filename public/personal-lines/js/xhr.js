     
      /*function mySubmitFunction(e) {
        e.preventDefault();
        someBug();
        return false;
      }*/

      function createMember(dataURL){
        // initialise data 
 
        var type = document.getElementById("type");  
        var effective_date_appointment = document.getElementById("effective_date_appointment");  
        var name_of_stokfela = document.getElementById("name_of_stokfela");       
        var contact_person_1 = document.getElementById("contact_person_1");  
        var id_number_1 = document.getElementById("id_number_1");  
        var contact_person_2 = document.getElementById("contact_person_2");  
        var id_number_2 = document.getElementById("id_number_2"); 
        var name_of_signatory = document.getElementById("name_of_signatory");        
        var contact_number = document.getElementById("contact_number"); 
        var date =   document.getElementById("date");  
        
        
        
    
        if(name_of_signatory.length==0||contact_number.length==0){
            alert("Please fill in all the fields required.");
        }
        else{
           
            var data = JSON.stringify({
                "type":type.value,
                "effective_date_appointment":effective_date_appointment.value,
                "name_of_stokfela":name_of_stokfela.value,
                "contact_person_1":contact_person_1.value,
                "id_number_1":id_number_1.value,
                "contact_person_2":contact_person_2.value,
                "id_number_2":id_number_2.value,
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
  