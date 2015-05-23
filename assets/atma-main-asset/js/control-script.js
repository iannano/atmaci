var base_url = window.location.origin;

$(document).ready(function(){
    //----- Start Menu Redirect -----//
    //$('#main-menu a.item').click(function(e){
        //e.preventDefault();
        //$('#main-menu a').removeClass('active');
        //$(this).addClass('active');
        //location.href=$(this).attr('href')+".php";
    //}); 
    //----- End Menu Redirect -----//
    $.ajax({
        url: base_url + '/atmaci/index.php/data_master/provinsi/view_all',
        method: 'GET',
        success:function(data){
            $('#provinsiItem').html(data);
            $('#provinsiTempatLahir').html(data);
        }
    });
});

//----- Ajax Function -----//
function daftarAtma(event, nama, jk, tgllahir, email, notelphone, pekerjaan, username, password){
    event.preventDefault();
    $.ajax({
        url: '',
        method: 'POST',
        data:{
            nama: nama,
            jk: jk,
            tgllahir: tgllahir,
            email: email,
            notelphone: notelphone,
            pekerjaan: pekerjaan,
            username: username,
            password: password
        },
        success: function (data) {
            
        }
    });
}

function getKotaKelahiran(provinsiKelahiran){
    $.ajax({
        url: base_url + '/atmaci/index.php/data_master/kota/view_by_id_provinsi/' + provinsiKelahiran,
        method: 'GET',
        success:function(data){
            $('#kotaTempatLahir').html(data);
            $('#dropdownKotaKelahiran').removeClass('disabled');
        }
    });
}

function getKota(provinsi){
    $.ajax({
        url: base_url + '/atmaci/index.php/data_master/kota/view_by_id_provinsi/' + provinsi,
        method: 'GET',
        success:function(data){
            $('#kotaItem').html(data);
            $('#dropdownKota').removeClass('disabled');
        }
    });
}

function daftar(nama, jk, provinsiKelahiran, kotaKelahiran, tgllahir, provinsi, kota, alamat, nomerTelphone, pekerjaan, email, password){
    if(grecaptcha.getResponse() == ""){
        alert("Please Verify Captcha Before You Continue");
    }
    else{
        $('#formDaftar').addClass('loading');
        document.cookie = "NamaLengkap =" + nama + "; ";
        document.cookie = "JenisKelamin =" + jk + "; ";
        document.cookie = "ProvinsiKelahiran =" + provinsiKelahiran + "; ";
        document.cookie = "KotaKelahiran =" + kotaKelahiran + "; ";
        document.cookie = "TanggalLahir =" + tgllahir + "; ";
        document.cookie = "Provinsi =" + provinsi + "; ";
        document.cookie = "Kota =" + kota + "; ";
        document.cookie = "Alamat =" + alamat + "; ";
        document.cookie = "Email =" + email + "; ";
        document.cookie = "NomerTelphone =" + nomerTelphone + "; ";
        document.cookie = "Pekerjaan =" + pekerjaan + "; ";
        document.cookie = "Email =" + email + "; ";
        document.cookie = "Password =" + password + "; ";
        $.ajax({
            url:base_url + '/atmaci/index.php/daftar_atma/pilih_paket',
            method:'GET',
            success:function(data){
                $('#render-next-form').html(data);
                $('#1').removeClass('active').addClass('disabled');
                $('#2').addClass('active');
            }
        });   
    }
}

function Paket(paket){
    $('#formPilihPaket').addClass('loading');
    var namaLengkap = getCookies("NamaLengkap");
    var jenisKelamin = getCookies("JenisKelamin");
    var tanggalLahir = getCookies("TanggalLahir");
    var ProvinsiKelahiran = getCookies("ProvinsiKelahiran");
    var KotaKelahiran = getCookies("KotaKelahiran");
    var TanggalLahir = getCookies("TanggalLahir");
    var Provinsi = getCookies("Provinsi");
    var Kota = getCookies("Kota");
    var Alamat = getCookies("Alamat");
    var NomerTelphone = getCookies("NomerTelphone");
    var Pekerjaan = getCookies("Pekerjaan"); 
    var Email = getCookies("Email");
    var Password = getCookies("Password");

    $.ajax({
        url:base_url + '/atmaci/index.php/daftar_atma/daftar/' + KotaKelahiran + "/" + Kota + "/" + paket + "/" + namaLengkap + "/" + jenisKelamin + "/" + TanggalLahir + "/" + Alamat + "/" + Email + "/" + NomerTelphone + "/" + Pekerjaan + "/" + Password + "/" + "0",
        method:'POST',
        success: function() {
            $('#2').removeClass('active').addClass('disabled');
            $('#3').addClass('active');
            $('#render-next-form').load(base_url + '/atmaci/index.php/daftar_atma/konfirmasi/' + Email + "/" + Password + "/" + paket);
        }
    });
}

function loginSisfor(data1, data2){
    $.ajax({
        url: base_url + '/atmaci/index.php/utils/login_sisfo/auth/' + data1 + "/" + data2,
        method: 'GET',
        success:function(data){
            if(data === "1"){
                location.href = base_url + '/atmaci/index.php/sisfo/home'; 
            }
            else{
                
            }
        }
    });
}

function insertProvinsi(data1){
    $.ajax({
        url: base_url + '/atmaci/index.php/data_master/provinsi/insert/' + data1,
        method: 'POST',
        success: function () {
            $('#namaProvinsi').val("");
            $('#segmentTableProvinsi').load(base_url + "/atmaci/index.php/data_master/provinsi/view_all_table");
        }
    });
}

function updateProvinsi(data1){
    var $IDP = $(data1).closest('tr').find('#IDP').html();
    var $NAMAP = $(data1).closest('tr').find('#NAMAP').html();
    $('#modalUpdateProvinsi').modal('show');
    $('#updateIDProvinsi').val($IDP);
    $('#updateProvinsi').val($NAMAP);
    
    $('#buttonUpdateProvinsi').click(function(){
        var $updateNAMAP = $('#updateProvinsi').val();
       $.ajax({
           url: base_url + '/atmaci/index.php/data_master/provinsi/update/' + $updateNAMAP + '/' + $IDP,
           method: 'GET',
           success:function(){
               $('#modalUpdateProvinsi').modal('hide');
               $('#segmentTableProvinsi').load(base_url + "/atmaci/index.php/data_master/provinsi/view_all_table");
           }
       });
    });
}

function deleteProvinsi(data1){
    var $IDP = $(data1).closest('tr').find('#IDP').html();
    var $NAMAP = $(data1).closest('tr').find('#NAMAP').html();
    $('p#IDP').html($IDP);
    $('p#NAMAP').html($NAMAP);
    $('#modalDeleteProvinsi').modal('show');
    $('#cancelDelete').click(function(){
        $('#modalDeleteProvinsi').modal('hide');
    });
    $('#confirmDelete').click(function(){
        $.ajax({
            url: base_url + '/atmaci/index.php/data_master/provinsi/delete/' + $IDP,
            method: 'POST',
            success:function(){
                $('#segmentTableProvinsi').load(base_url + "/atmaci/index.php/data_master/provinsi/view_all_table");
            }
        });
    });
}

function start_countdown(){
    
}

//-----Start Debugging Function-----//
function setCookies(nama, jk, tgllahir, provinsi, kota, alamat, email, nomerHandphone, pekerjaan, username) {
    document.cookie = "NamaLengkap =" + nama + "; ";
    document.cookie = "JenisKelamin =" + jk + "; ";
    document.cookie = "TanggalLahir =" + tgllahir + "; ";
}

function getCookies(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
}

function checkCookiesPendaftaran() {
    var namaLengkap = getCookies("NamaLengkap");
    var jenisKelamin = getCookies("JenisKelamin");
    var tanggalLahir = getCookies("TanggalLahir");
    var ProvinsiKelahiran = getCookies("ProvinsiKelahiran");
    var KotaKelahiran = getCookies("KotaKelahiran");
    var TanggalLahir = getCookies("TanggalLahir");
    var Provinsi = getCookies("Provinsi");
    var Kota = getCookies("Kota");
    var Alamat = getCookies("Alamat");
    var NomerTelphone = getCookies("NomerTelphone");
    var Pekerjaan = getCookies("Pekerjaan"); 
    var Email = getCookies("Email");
    var Password = getCookies("Password");
    
    alert(namaLengkap + " , " + jenisKelamin + " , " + tanggalLahir + " , " + ProvinsiKelahiran + " , " + KotaKelahiran + " , " + TanggalLahir + " , " + Provinsi + " , " + Kota + " , " + Alamat + " , " + NomerTelphone + " , " + Pekerjaan + " , " + Email);
}
//-----End Debugging Function-----//