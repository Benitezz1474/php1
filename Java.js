document.getElementById("BR1").addEventListener("click", Register);
document.getElementById("BR2").addEventListener("click", Login);


var forR=document.querySelector(".formR");
var RH3= document.querySelector(".RH3");
var LH3 = document.querySelector(".LH3");   
var formL = document.querySelector(".formL");



function Register(){
    forR.style.marginLeft="880px";
    forR.style.opacity="1"
    RH3.style.opacity="0";
    formL.style.marginLeft="96%"
    formL.style.opacity="0";
    LH3.style.opacity="1";
    
}

function Login(){
    formL.style.marginLeft="-45%";
    forR.style.marginLeft="-370px";
    LH3.style.opacity="0";
    formL.style.opacity="1";
    forR.style.opacity="0";
    RH3.style.opacity="1";
}