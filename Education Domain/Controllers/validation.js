function validate(){
    let username = document.getElementById('username').value;

    if('username'!=""){
        document.getElementById('usernameErrorMessage').innerHTML= username;
    }
        else{
                document.getElementById('usernameErrorMessage').innerHTML= 'Username is required';
        }


        let email= document.getElementById('email').value;

    if(email == ''){
        document.getElementById('email').innerHTML = 'Empty Name field ';		
    }
    else if(email.length <3 ){
        document.getElementById('email').innerHTML = 'Email is invalid !';	
    }
    else if( email.includes("@gmail.com")){
        document.getElementById('email').innerHTML = email;
             }
    else if( email.includes("@yahoo.com")){
        document.getElementById('email').innerHTML = email;
             }	
    else if( email.includes("@.edu")){
        document.getElementById('email').innerHTML = email;
             }	          
      else{
        document.getElementById('email').innerHTML = 'Email is invalid !';
    }

    let password = document.getElementById('password').value;
    if(password == ''){
        document.getElementById('email').innerHTML = 'Empty Password field ';		
    }
    else if(password.length <3 ){
        document.getElementById('email').innerHTML = 'Password is short !';	
    }
}

