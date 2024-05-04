var BiayaLapangan = 0;

function EditTotal(){
    var jamMain = document.getElementById("JamBermain").value;
    document.getElementById("Total").innerHTML = BiayaLapangan * jamMain;
    document.getElementById("inputTotal").value = BiayaLapangan * jamMain;
}

function GantiInformasi(){
    var NamaLapangan = document.getElementById("lapangan").value;
    if(NamaLapangan == "Super Futsal"){
        document.getElementById("NamaLapangan").innerHTML = "Super Futsal";
        document.getElementById("NamaJalan").innerHTML = "Jl. Rutan No.1";
        document.getElementById("WaktuBuka").innerHTML = "Buka Jam 07:00 - 21:00 / Senin - Sabtu";
        document.getElementById("Harga").innerHTML = "Rp150.000/Jam";
        BiayaLapangan = 150000;
        document.getElementById("Total").innerHTML = BiayaLapangan;
        document.getElementById("WaktuMain").setAttribute("min", "07:00");
        document.getElementById("WaktuMain").setAttribute("max", "21:00");
        EditTotal();
    } else if(NamaLapangan == "Goro Arena"){
        document.getElementById("NamaLapangan").innerHTML = "Goro Arena";
        document.getElementById("NamaJalan").innerHTML = "Jl. Rutan No.1";
        document.getElementById("WaktuBuka").innerHTML = "Buka Jam 09:00 - 00:00 / Setiap Hari";
        document.getElementById("Harga").innerHTML = "Rp120.000/Jam";
        BiayaLapangan = 120000;
        document.getElementById("Total").innerHTML = BiayaLapangan;
        document.getElementById("WaktuMain").setAttribute("min", "09:00");
        document.getElementById("WaktuMain").setAttribute("max", "00:00");
        EditTotal();
    }
}