document.getElementById('singin').addEventListener('click',function(){

console.log('submit');
const idField=document.getElementById('user-email');
const id=idField.value;

const passwoedField=document.getElementById('user-password');
const password=passwoedField.value;

if(id=='2021200000098@seu.edu.bd'&& password=='rabby')
{
    window.location.href='index1.html';
}
else
{
    alert('ID or Password is wrong.Please Try again;')
}


})