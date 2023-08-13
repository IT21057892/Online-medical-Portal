var firstName = document.getElementById('first-name');
var lastName = document.getElementById('last-name');
var email = document.getElementById('e-mail');
var address = document.getElementById('address');
var gender = document.getElementById('gender');
var DOB = document.getElementById('DOB');
var phone = document.getElementById('phone');
var password = document.getElementById('password');
var conf_pass = document.getElementById('confirm-password');
var signUp = document.getElementById('sign-up');

/*field empty check.............................................*/
signUp.addEventListener('click' ,function(){
  if(firstName.value == "")
  {
    firstName.style.borderColor = 'red';
  }

  else if(firstName.value != ""){
    firstName.style.borderColor = 'green';
  }
});

signUp.addEventListener('click' ,function(){
    if(lastName.value == "")
    {
      lastName.style.borderColor = 'red';
    }
  
    else if(lastName.value != ""){
      lastName.style.borderColor = 'green';
    }
  });

  signUp.addEventListener('click' ,function(){
    if(email.value == "")
    {
        email.style.borderColor = 'red';
    }
  
    else if(email.value != ""){
        email.style.borderColor = 'green';
    }
  });

  signUp.addEventListener('click' ,function(){
    if(address.value == "")
    {
        address.style.borderColor = 'red';
    }
  
    else if(address.value != ""){
        address.style.borderColor = 'green';
    }
  });

  signUp.addEventListener('click' ,function(){
    if(phone.value == "")
    {
        phone.style.borderColor = 'red';
    }
  
    else if(phone.value != ""){
        phone.style.borderColor = 'green';
    }
  });

  signUp.addEventListener('click' ,function(){
    if(password.value == "")
    {
        password.style.borderColor = 'red';
    }
  
    else if(password.value != ""){
        password.style.borderColor = 'green';
    }
  });

  signUp.addEventListener('click' ,function(){
    if(conf_pass.value == "")
    {
        conf_pass.style.borderColor = 'red';
    }
  
    else if(conf_pass.value != ""){
        conf_pass.style.borderColor = 'green';
    }
  });

  signUp.addEventListener('click' ,function(){
    if(DOB.value == "")
    {
        DOB.style.borderColor = 'red';
    }
  
    else if(DOB.value != ""){
        DOB.style.borderColor = 'green';
    }
  });

  signUp.addEventListener('click' ,function(){
    if(gender.value == "")
    {
        gender.style.borderColor = 'red';
    }
  
    else if(gender.value != ""){
        gender.style.borderColor = 'green';
    }
  });
  /*field empty check end*/

  /*checking phone number length.........................................*/
  signUp.addEventListener('click' ,function(){
    if(phone.value.length != 10){
        phone.style.borderColor = 'red';
    }
  });
   /*checking phone number length end*/

   /*password length check*/
   signUp.addEventListener('click' ,function(){
    if(password.value.length <8){
        alert('Password must be more than 8 characters!');
        password.style.borderColor = 'red';
    }
  });
   /*password length check end*/

   signUp.addEventListener('click' ,function(){
    if(password.value != conf_pass.value){
        alert('Confirm password faild!');
        conf_pass.style.borderColor = 'red';
    }
  });