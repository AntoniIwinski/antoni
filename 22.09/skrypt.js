function Cena(){http://127.0.0.1:3000/fryzura.html
    var cena = 0;
    if(document.getElementById("kro").checked){
        cena = 25;
    }
    if(document.getElementById("sre").checked){
        cena = 30;
    }
    if(document.getElementById("pol").checked){
        cena = 40;
    }
    if(document.getElementById("dlu").checked){
        cena = 50;
    }
    document.getElementById("wynik").innerHTML = "Cena strzyżenia: " + cena;
}