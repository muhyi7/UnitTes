Penjelasan Unit Test Sederhana- WKPL Minggu 9(19/10/2023)

WordCount.php
Mendefinisikan sebuah kelas WordCount yang memiliki satu metode, 
yaitu countWords, yang menerima sebuah kalimat sebagai masukan.
Metode ini menghitung jumlah kata dalam kalimat dengan memecah kalimat 
menjadi kata-kata menggunakan spasi sebagai pemisah dan menghitung jumlah 
kata yang dihasilkan. Hasil perhitungan tersebut kemudian dikembalikan sebagai output.

SimpleCount.php

Pada kode di atas, terdapat pengujian (testing) menggunakan framework PHPUnit untuk 
menguji kelas WordCount. Dalam metode testCountWords, sebuah objek dari WordCount 
dibuat untuk menghitung jumlah kata dalam sebuah kalimat yang seharusnya menghasilkan output 4 kata.
Namun, ada perbedaan antara nilai yang diharapkan (5) dan hasil perhitungan yang seharusnya (4).
Sebagai hasilnya, pengujian ini akan gagal, menunjukkan bahwa implementasi countWords dalam 
kelas WordCount tidak berfungsi dengan benar karena menghasilkan hasil yang tidak sesuai dengan yang diharapkan.
Perbaiki ekspetasi ke 4 agar pengujian sesuai.
