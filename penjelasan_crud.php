<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjelasan CRUD</title>
</head>
<body>
    
<h1>Pertemuan-3</h1>
<h5>Membuat kelas "buah" dan property "nama" dan warna </h5>
<?php
class buah {
    // Properties
    public $nama;
    public $warna;

    // Methods
    function set_name($nama) {
        $this->nama = $nama;
    }
    function get_name() {
        return $this->nama;
    }
}

$apel = new buah();
$pisang = new buah();
$apel->set_name('apel');
$pisang->set_name('pisang');

echo $apel->get_name();
echo "<br>";
echo $pisang->get_name();
?>
<h5>Membuat kelas "Mobil" dengan objek "toyota" property "warna"</h5>
<?php
class mobil {
    // Properties
    public $nama;
    public $warna;

    // Methods
    function set_name($nama) {
        $this->nama = $nama;
    }
    function get_name() {
        return $this->nama;
    }
    function set_warna($warna) {
        $this->warna = $warna;
    }
    function get_warna() {
        return $this->warna;
    }
}

$toyota = new mobil();
$toyota->set_name('toyota');
$toyota->set_warna('biru metalik');
echo $toyota->get_name();
echo "<br>";
echo $toyota->get_warna();
?>

<h1>Pertemuan-5</h1>
<h5>Konstanta dan Abstrak</h5>
<p>mohon maaf bapak  materi ini belum dikirimkan pptnya </p>
<h1>Pertemuan-7</h1>
<h5>Penjelasan Coding CRUD</h5>
<h6>File database</h6>
<p> file ini berisi code yang berfungsi menghubungkan antara file php yang digunakan dengan database yang telah ditentukan</p>
<img width="500" src="Screenshot (229).png">
<p>pertama kita harus membuat file database terlebih dahulu</p>
<ul>
    <li>$host diisi dengan nama servernya yaitu localhost</li>
    <li>$user diisi dengan username yaitu root </li>
    <li>$password dikosongkan, namun bagi pengguna mamp maka passwordnya yaitu root</li>
    <li>$db berisi nama database yang akan digunakan/dihubungkan dengan projek kita</li>
    <li>$kon =  mysqli_connect() adalah query/perintah yang digunakan untuk koneksi dengan database, didalamnya kita masukkan $host $user $db yang nantinya value dari variabel-variabel tersebut akan dieksekusi oleh program <br>
        if (!$kon) => isset $kon { die("Koneksi gagal:".mysqli_connect_error())}: apabila $kon tidak berhasil /gagal maka perintah connect error dan mencetak "Koneksi gagal" </li>
</ul>

<img  width="500" src="Screenshot (230).png">
<ul>
    <li>link rel="stylesheet" href="..." adalah kode  untuk memasukkan template/link bootsrap, yang fungsinya untuk membuat tampilan user interface yang lebih menarik dan rapi, ini opsional (terserah pengguna) sesuai kreativitas masing-masing</li>
</ul>
<img  width="500" src="Screenshot (232).png">
<p>selanjutnya kita membuat file baru yang dinamakan add_data. didalamnya kita memasukkan script untuk menghasilkan program yang bisa menginputkan suatu data dan data tersebut masuk ke database</p>
<ul>
    <li>div class= container berfungsi sebagai elemen pembungkus untuk untuk mengatur tata letak, styling, dan struktur konten secara fleksibel dan rapi</li>
    <li>function input ($data) digunakan  untuk memproses dan membersihkan data yang di inputkan oleh  pengguna sebelum digunakan
        <ol>trim($data) : mengatisipasi typo</ol>
        <ol>stripslashes($data) : menghapus karakter backslash (\)</ol>
        <ol>htmlspecialchars($data) : mengkonversi karakter khusus menjadi entitas html untuk mencegah XSS</ol>
        <ol>return$data : mengembalikan  data  yang sudah diproses</ol>
    </li>
</ul>
<img  width="500" src="Screenshot (232)1.png">
<p>simpelnya kode diatas berfungsi menerima inputan data melalui metode post dan menyimpannya kedalam database.</p>
<ul>
    <li>if ($_SERVER["REQUEST_METHOD"] == "POST") memastikan kode  hanya dijalankan jika request menggunakan metode POST</li>
    <li>fungsi input () seperti yang sudah dijelaskan sebelumnya  yaitu berfungsi membersihkan data yang diinputkan menggunakan metode request post pada variabel nama_barang, stok, dst</li>
    <li>$sql="insert into dst" adalah query /perintah sql untuk menambahkan data pada tabel atiyya barang dengan susunan yang harus sesuai yaitu dimulai dari nama barang hingga harga jual</li>
    <li>$hasil =mysqli_query() : untuk menjalankan query sql pada koneksi database dengan parameter $kon(objek koneksi database yang dibuat sebelumnya di file database, dan $sql(query sql yang dijalankan) yang akan menghasilkan true jika query berhasil dan mengembalikan ke false jika query gagal</li>
    <li>fungsi if else pada kode ini digunakan untuk mengarahkan user ke file index.php jika berhasil dan jika gagal akan menampilkan pesan kesalahan dalam format mtl alert dengan kelas bootstrap</li>
</ul>
<p>selanjutnya sript dibawah digunakan untuk mengirim data ke server menggunakan metode POST. Tag div digunakan untuk membuat tempat untuk menginputkan nama barang, stok, harga beli, dan harga jual dengan tipe class yaitu form group, lalu membuat button untuk submit data yang telah dimasukkan </p>
<img  width="500" src="Screenshot (233).png">
<p>selanjutnya kita membuat file baru dengan nama edit.php, file ini berisi kode yang digunakan untuk membuat program menjadi dapat mengedit data yang sudah ada dan otomatis mengubah juga pada database </p>
<img  width="500" src="Screenshot (234).png">
<ul>
    <li>untuk isi head sama dengan file add_data</li>
    <li>jangan lupa untuk tetap menyertakan include database.php, untuk menghubungkan dengan database</li>
    <li>selanjutnya function input(data) pun tetap dituliskan di file ini (sama seperti file add_data)</li>
</ul>
<p>selanjutnya untuk mengecek apakah ada nilai yang dikirim menggunakan methos GET dengan nama id_peserta menggunakn script berikut</p>
<img  width="500" src="Screenshot (235).png">
<p>selanjutnya kita tuliskan perintah/query sql untuk mengupdate barang pada tabel barang</p>
<img  width="500" src="Screenshot (235)1.png">
<p>setelah menuliskan perintah update, maka selanjutnya diikuti dengan $hasil untuk mengeksekusi query(update) diatas</p>
<img  width="500" src="Screenshot (235)2.png">
<p>kemudian kita akan mengecek kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas</p>
<img  width="500" src="Screenshot (235)3.png">
<p>Script terakhir pada file edit.php ini sama dengan yang ada pada file add_data</p>
<img  width="500" src="Screenshot (236).png">
<br>
<p>selanjutnya untuk file baru yaitu index.php, scriptnya sebagai berikut <br> untuk bagian tittle nya kita ganti, link bootstrap tetap dituliskan, lalu kita buat untuk judulnya (daftar buku )dengan menggunakan h4, dan kita buka tag php, jangan lupa untuk menginclude kan database </p>
<img width="500" src="Screenshot (237).png">
<p>selanjutnya kita cek apakah ada kiriman form dari metode post</p>
<img width="500" src="Screenshot (237)1.png">
<p>selanjutnya kita buat kondisinya jika berhasil atau tidak</p>
<img width="500" src="Screenshot (237)2.png">
<p>selanjutnya kita buat tabel dengan header id barang, nama barang, stok, harga beli, dan harga jual <br>
    lalu kita bukan tag php baru jangan lupa untuk tetap menginclude kan database lalu kita buat query sql untuk mengambil seluruh id barang, disini kita gunakan saja loop  while yang akan mengambil data id barang hingga habis <br>
    lalu kiita  lanjutkan membuat tabel row yang diisikan dengan perintah php karena untuk data nya kita ambil dari variabel $no dan $data</p>
    <img width="500" src="Screenshot (238).png">
    <img width="500" src="Screenshot (239).png">

<h4>Terima Kasih!</h4>

<h1>Pertemuan-4</h1>
<h5>Konstructor dan Destructor</h5>
<?php

    class mahasiswa {
        // Properties
        public $nama;
        public $tinggi_badan;
        public $warna_kulit;

        // Methods
        function __construct($nama, $tinggi_badan, $warna_kulit) {
            $this->nama = $nama;
            $this->tinggi_badan = $tinggi_badan;
            $this->warna_kulit = $warna_kulit;
        }
        function get_nama() {
            return $this->nama;
        }
        function get_tinggi_badan() {
            return $this->tinggi_badan;
        }
        function get_warna_kulit() {
            return $this->warna_kulit;
        }
        function __destruct() {
            echo "Mahasiswa tersebut bernama {$this->nama}, tinggi badan {$this->tinggi_badan} dan warna kulit {$this->warna_kulit}.";
        }
    }

    $nasywa = new mahasiswa ("nasywa", "160cm","sawo matang");
    $novita = new mahasiswa ("novita", "155","sawo matang");
    $khasna = new mahasiswa ("khasna", "150cm","kuning langsat"); ?>





</body>
</html>