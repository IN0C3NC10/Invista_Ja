function verifyNumber(){
    var e = document.getElementById("capital").value;
    e%=2;
    if (e>0 || e<0){
        document.getElementById("what").innerHTML = "Impar";
    }else if (e===0){
        document.getElementById("what").innerHTML = "Par";
    }else{
        console.log(e);
    }
}