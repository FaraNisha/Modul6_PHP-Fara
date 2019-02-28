# Modul6_PHP-Fara

Hasil Autentikasi
![alt text](https://github.com/FaraNisha/Modul6_PHP-Fara/blob/master/Hasil%20Autentikasi%201.PNG)
![alt text](https://github.com/FaraNisha/Modul6_PHP-Fara/blob/master/Hasil%20Autentikasi%202.PNG)

Hasil Cek Cookie
![alt text](https://github.com/FaraNisha/Modul6_PHP-Fara/blob/master/Hasil%20Cek%20Cookie.PNG)

Hasil Latihan Cookie
![alt text](https://github.com/FaraNisha/Modul6_PHP-Fara/blob/master/Hasil%20Latihan%20Cookie.PNG)

Hasil Membuat Session
![alt text](https://github.com/FaraNisha/Modul6_PHP-Fara/blob/master/Hasil%20Membuat%20Session.PNG)

Hasil Menghapus Cookie
![alt text](https://github.com/FaraNisha/Modul6_PHP-Fara/blob/master/Hasil%20Menghapus%20Cookie.PNG)

Hasil Menghapus Session
![alt text](https://github.com/FaraNisha/Modul6_PHP-Fara/blob/master/Hasil%20Menghapus%20Session.PNG)

Hasil Praktikum
![alt text](https://github.com/FaraNisha/Modul6_PHP-Fara/blob/master/Hasil%20Praktikum%201.PNG)
![alt text](https://github.com/FaraNisha/Modul6_PHP-Fara/blob/master/Hasil%20Praktikum%202.PNG)

SOAL :
1. Jelaskan menggunakan bahasa sendiri perbedaan antara cookies dan session!
Cookies:
a.) Cookies disimpan di sisi klien
b.) Cookies tidak aman bagi klien karena cookies dapat disisipi program yang tidak diketahi klien.
Karena cookies tidak aman maka browser klien dapat di-set untuk menghapus cookies dan bahkan men-disable fungsi cookies. Menurut sumber lain cookies juga tidak aman bagi sisi server karena cookies dapat di-edit oleh klien.
c.) Data yang disimpan ke dalam metode cookies dapat bertahan lebih lama dan dapat diatur waktu expired-nya.
Session :
a.) Disimpan disisi server
b.) Lebih aman karena tidak ada file yang dimasukan ke sisi klien
c.) Setelah web browser klien dimatikan maka data yang disimpan metode session akan hilang dan waktu expired juga tidak dapat diatur.

2. Bagaimana cara menghapus session dan cookies pada sebuah browser!
>> Menghapus semua cookie
Jika cookie dihapus, Anda akan logout dari situs dan preferensi yang Anda simpan akan terhapus.
a.) Di komputer Anda, buka Chrome.
b.) Di kanan atas, klik Lainnya Yang Lain lalu Setelan.
c.) Di bagian bawah, klik Lanjutan.
d.) Pada "Privasi dan keamanan", klik Setelan konten.
e.) Klik Cookie lalu Lihat semua cookie dan data situs lalu Hapus semua.
f.) Konfirmasi dengan mengklik Hapus semua.
>>Menghapus Session
adalah dengan mengeksekusi skrip yang dipanggil ketika browser ditutup, yaitu pada bagian body dengan event onUnLoad.

3. Berikan contoh kode dari pembuatan dan menghapus cookies dan session!
>> Membuat Cookie : setcookie(name, value, expire, path, domain);
>> Menghapus Cookie : menunggu melewati batasan waktu expire, bisa juga menggunakan trik misal: setcookie(“nama_user”, “Fara”, time()-1);
>> Membuat Session : session_start ( ) atau session_start;
>> Menghapus Session : unset ($_SESSION[‘nama_variabel’]);
