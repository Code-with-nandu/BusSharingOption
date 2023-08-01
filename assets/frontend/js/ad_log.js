$(document).on('click','#loginbutton',function(){
    let email = $('#email').val();
    let password = $('#password').val();
     alert(email)
    if (email==''){
        alert("Please Enter Your Email!");
    }elseif (password==''){
        alert("Please Enter Your Password")
    }else{
        alert(email)
        alert(password)
    }

});