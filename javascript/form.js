var biaya = 150000;

function OnInput(){
    alert("Pesanan telah dikirimkan");
}

function EditTotal(){
    var x = document.getElementById("JamBermain").value;
    document.getElementById("Total").innerHTML = biaya*x;
}

function GantiInformasi(){
    var x = document.getElementById("lapangan").value;
    if(x == "1"){
        document.getElementById("NamaLapangan").innerHTML = "Super Futsal";
        document.getElementById("NamaJalan").innerHTML = "Jl. Rutan No.1";
        document.getElementById("WaktuBuka").innerHTML = "Buka Jam 07:00 - 21:00 / Senin - Sabtu";
        document.getElementById("Harga").innerHTML = "Rp150.000/Jam";
        biaya = 150000;
        document.getElementById("Total").innerHTML = biaya;
        document.getElementById("WaktuMain").setAttribute("min", "07:00");
        document.getElementById("WaktuMain").setAttribute("max", "21:00");
    } else if(x == "2"){
        document.getElementById("NamaLapangan").innerHTML = "Goro Arena";
        document.getElementById("NamaJalan").innerHTML = "Jl. Rutan No.1";
        document.getElementById("WaktuBuka").innerHTML = "Buka Jam 09:00 - 00:00 / Setiap Hari";
        document.getElementById("Harga").innerHTML = "Rp120.000/Jam";
        biaya = 120000;
        document.getElementById("Total").innerHTML = biaya;
        document.getElementById("WaktuMain").setAttribute("min", "09:00");
        document.getElementById("WaktuMain").setAttribute("max", "00:00");
    }
}
