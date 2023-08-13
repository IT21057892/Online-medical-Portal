var pname = document.getElementById('name');
var email = document.getElementById('email');
var phone = document.getElementById('phone');
var pres_ID = document.getElementById('pres-id');
var submit = document.getElementById('submit-btn');

submit.addEventListener('click' ,function(){
    if(pname.value == ""){
        pname.style.borderColor = 'red';
    }

    else if(pname.value != ""){
        pname.style.borderColor = 'green';
      }
});

submit.addEventListener('click' ,function(){
    if(email.value == ""){
        email.style.borderColor = 'red';
    }

    else if(email.value != ""){
        email.style.borderColor = 'green';
      }
});

submit.addEventListener('click' ,function(){
    if(phone.value == ""){
        phone.style.borderColor = 'red';
    }

    else if(phone.value != ""){
        phone.style.borderColor = 'green';
      }
});

submit.addEventListener('click' ,function(){
    if(pres_ID.value == ""){
        pres_ID.style.borderColor = 'red';
    }

    else if(pres_ID.value != ""){
        pres_ID.style.borderColor = 'green';
      }
});

/*checking phone number length.........................................*/
submit.addEventListener('click' ,function(){
    if(phone.value.length != 10){
        alert('Incorrect phone number!');
        phone.style.borderColor = 'red';
    }
  });
   /*checking phone number length end*/

   /*reception notification*/
   submit.addEventListener('click' ,function(){
    if(pname.value != "" && email.value != "" && phone.value != "" && pres_ID.value != "" && phone.value.length == 10){
        alert('We will send the reception to your E-mail !');
    }
  });
     /*reception notification end*/