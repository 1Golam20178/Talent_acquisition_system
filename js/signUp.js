document.getElementById('singUp').addEventListener('click',function(){

    console.log('submit');
    const email=document.getElementById('user-email');
    const id=email.value;
    
    const password=document.getElementById('user-password');
    const password1=password.value;
    
    if(id==password1)
    {
        alert('Successful;');
    }
    else
    {
        alert('ID or Password is wrong.Please Try again;');
    }
    
    
    })