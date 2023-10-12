// Tetapkan tanggal kita menghitung mundur
// var tanggalAwal = new Date("13 October 2023 19:00:00").getTime();

var tanggalAwal = new Date("13 October 2023 02:42:00").getTime();
var tanggalAkhir  = new Date("13 October 2023 03:05:00").getTime();

var xxx =  new Date("13 October 2023 02:26:00").getTime();

// Perbarui hitungan mundur setiap 1 detik
var x = setInterval(function () {

  // Dapatkan tanggal dan waktu hari ini
  var sekarang = new Date().getTime();

  // Temukan jarak antara sekarang dan tanggal hitung mundur
  var jarak = tanggalAwal - sekarang;

  var berlangsung = tanggalAkhir - sekarang;

  // Perhitungan waktu untuk hari, jam, menit dan detik
  var hari = Math.floor(jarak / (1000 * 60 * 60 * 24));
  var jam = Math.floor((jarak % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var menit = Math.floor((jarak % (1000 * 60 * 60)) / (1000 * 60));
  var detik = Math.floor((jarak % (1000 * 60)) / 1000);

  // Tampilkan hasilnya di elemen dengan id="demo"
  document.getElementById("demo").innerHTML = hari + " Hari " + jam + " Jam " +menit + " Menit " + detik + " Detik ";
  // document.getElementById("tbDate").innerHTML = "Awal = " + tanggalAwal + "<br> Akhir = " + tanggalAkhir + "<br> berlangsung = " + berlangsung + "<br> jarak =" + jarak;

  // Jika hitungan mundur selesai, tulis beberapa teks
  if (jarak < 0 && berlangsung > 0) {
      localStorage.clear();
      // location.reload(true);
      document.getElementById("demo").innerHTML = "ACARA BERLANGSUNG";
  }
  else if (jarak < berlangsung) {
      clearInterval(x);
      document.getElementById("demo").innerHTML = "<font style='color:#bbb'>ACARA SELESAI</font>";
  }

}, 1000);
