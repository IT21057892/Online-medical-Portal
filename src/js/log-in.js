var userName = document.getElementById('userName');
var PW = document.getElementById('PW');
var login = document.getElementById('login');

/*field empty check.............................................*/
login.addEventListener('click' ,function(){
    if(userName.value == "")
    {
        userName.style.borderColor = 'red';
    }
  
    else if(userName.value != ""){
        userName.style.borderColor = 'green';
    }
  });

  login.addEventListener('click' ,function(){
    if(PW.value == "")
    {
        PW.style.borderColor = 'red';
    }
  
    else if(PW.value != ""){
        PW.style.borderColor = 'green';
    }
  });
/*field empty check end.............................................*/
