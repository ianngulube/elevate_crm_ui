

function moveNext(id){
    document.getElementById(id).click();
}

function setValues(){
    var txtName  = document.getElementById("name").value;
    var lblName  = document.getElementById("lblName");
    lblName.innerHTML= (txtName!=='')? txtName:'<button class="btn btn-red btn-xs btn-icon" type="button"><i class="fas fa-flag"></i>';

    var txtSurname  = document.getElementById("surname").value;
    var lblSurname  = document.getElementById("lblSurname");
    lblSurname.innerHTML= (txtSurname!=='')? txtSurname:'<button class="btn btn-red btn-xs btn-icon" type="button"><i class="fas fa-flag"></i>';


    var txtType = document.getElementById("userType");
    var txtTypeText = txtType.options[txtType.selectedIndex].text;
    var lblUserType  = document.getElementById("lblUserType");
    lblUserType.innerHTML = (txtTypeText!=='Select Seeker or Provider profiles')? txtTypeText:'<button class="btn btn-red btn-xs btn-icon" type="button"><i class="fas fa-flag"></i>';


    var txtAge  = document.getElementById("age").value;
    var lblAge  = document.getElementById("lblAge");
    lblAge.innerHTML= (txtAge!=='')? txtAge:'<button class="btn btn-red btn-xs btn-icon" type="button"><i class="fas fa-flag"></i>';

    var txtEmail  = document.getElementById("email").value;
    var lblEmail  = document.getElementById("lblEmail");
    lblEmail.innerHTML=  (txtEmail!=='')? txtEmail:'<button class="btn btn-red btn-xs btn-icon" type="button"><i class="fas fa-flag"></i>';

    var txtNationality = document.getElementById("nationality");
    var txtNationalityText = txtNationality.options[txtNationality.selectedIndex].text;
    var lblNationality  = document.getElementById("lblNationality");
    lblNationality.innerHTML = (txtNationalityText!=='Select Nationality')? txtNationalityText:'<button class="btn btn-red btn-xs btn-icon" type="button"><i class="fas fa-flag"></i>';

    var txtArea = document.getElementById("area").value;
    var lblArea  = document.getElementById("lblArea");
    lblArea.innerHTML = (txtArea!=='')? txtArea:'<button class="btn btn-red btn-xs btn-icon" type="button"><i class="fas fa-flag"></i>';

    var txtGender = document.getElementById("gender");
    var txtGenderText = txtGender.options[txtGender.selectedIndex].text;
    var lblGender  = document.getElementById("lblGender");
    lblGender.innerHTML = (txtGenderText!=='Select Gender')? txtGenderText:'<button class="btn btn-red btn-xs btn-icon" type="button"><i class="fas fa-flag"></i>';

    var txtEthnicity = document.getElementById("ethnicity");
    var txtEthnicityText = txtEthnicity.options[txtEthnicity.selectedIndex].text;
    var lblEthnicity  = document.getElementById("lblEthnicity");
    lblEthnicity.innerHTML = (txtEthnicityText!=='Select Ethnicity')? txtEthnicityText:'<button class="btn btn-red btn-xs btn-icon" type="button"><i class="fas fa-flag"></i>';

    //terms_accepted
    //privacy_accepted


    var  lblTerms =  document.getElementById("lblTerms");
    var  lblPrivacy =  document.getElementById("lblPrivacy");
    if(document.querySelector('#terms_accepted:checked') !== null){
        lblTerms.innerHTML ='<button class="btn btn-success btn-xs btn-icon" type="button"><i class="fas fa-check-circle"></i>';
    }
    else{
        lblTerms.innerHTML='<button class="btn btn-red btn-xs btn-icon" type="button"><i class="fas fa-flag"></i>';
    }

    if(document.querySelector('#privacy_accepted:checked') !== null){
        lblPrivacy.innerHTML ='<button class="btn btn-success btn-xs btn-icon" type="button"><i class="fas fa-check-circle"></i>';
    }
    else{
        lblPrivacy.innerHTML ='<button class="btn btn-red btn-xs btn-icon" type="button"><i class="fas fa-flag"></i>';
    }



}



