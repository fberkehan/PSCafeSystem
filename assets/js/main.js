function tikla(tiklanan_id) {


    var x = document.getElementById(tiklanan_id);
    var metin = document.getElementById(tiklanan_id).innerHTML;

    var sonuc = metin.indexOf("#009640");


    if (sonuc == -1) {

    } else {

        if (x.style.fill == "yellow") {

            x.style.fill = "black";

        } else {
            x.style.fill = "yellow";
        }
    }





}