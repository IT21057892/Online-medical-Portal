var invoice_number = documnet.getElementById('invoice_number');
var patient_number = documnet.getElementById('patient_number');
var patient_name = documnet.getElementById('patient_name');
var amount = documnet.getElementById('amount');
var submit = document.getElementById('submit-btn_2');



submit.addEventListener('click',function(){
    if(invoice_number.value == "")
    {
        invoice_number.style.borderColor = 'red';
    }
    else if(invoice_number.value != "")
    {
        invoice_number.style.borderColor = 'green';
    }

});


submit.addEventListener('click',function(){
    if(patient_number.value == "")
    {
        invoice_number.style.borderColor = 'red';
    }
    else if(patient_number.value != "")
    {
        patient_number.style.borderColor = 'green';
    }

});


submit.addEventListener('click',function(){
    if(patient_name.value == "")
    {
        patient_name.style.borderColor = 'red';
    }
    else if(patient_name.value != "")
    {
        patient_name.style.borderColor = 'green';
    }

});


submit.addEventListener('click',function(){
    if(amount.value == "")
    {
        amount.style.borderColor = 'red';
    }
    else if(amount.value != "")
    {
        amount.style.borderColor = 'green';
    }

});


