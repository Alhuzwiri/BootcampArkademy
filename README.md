# BootcampArkademy
-Pada soal no 1 merupakan kumpulan data diri pribadi saya yang saya tulis dengan format JSON
saya men generate nya dengan https://jsonformatter.curiousconcept.com/ untuk mengoreksi kesalah

-Selanjutnya pada no 2 merupakan sebuah method untuk mem validasi username, email, phone number & passwor
 yang mana Format email: sesuai email (satu atau lebih huruf sebelum dan sesudah simbol “@” dan domain minimal 2 huruf ).
 Format phone: harus angka dan diawali “+62” dengan panjang 8-15 karakter.
 Format username: kombinasi hanya huruf kecil dengan panjang 5-9 karakter.
 Format password: merupakan kombinasi dari huruf kecil, huruf besar, angka, dan karakter spesial minimal satu simbol dan harus   terdapat simbol “#”. Dengan panjang minimal 8 karakter.
 saya mengenerate method tersebut dengan REGEX (https://regex101.com/).
 
 -pada no 3 merupakan sebuah segitiga terbalik yang pada dasarnya pada bahasa pemrograman masuk pada materi prulangan saya   membuatnya dengan onlinegdb (https://www.onlinegdb.com/) dan bahasa yang saya gunakan adalah bahasa C.
 
 -pada soal no 5 merupakan sebuah aplikasi yang digunakan untuk mensorting data dari nilai terbesar ke terkecil yang nantinya outputnya akan berurutan.

Soal no 7 membuat tabel nama, kategori, dan hobi

![nama](https://user-images.githubusercontent.com/11330262/60383494-bba0d980-9a9b-11e9-9803-32f77880b2e1.png)
![hobi](https://user-images.githubusercontent.com/11330262/60383501-d07d6d00-9a9b-11e9-96f8-26658c734859.png)
![kategori](https://user-images.githubusercontent.com/11330262/60383502-d1160380-9a9b-11e9-93af-27ffc287ade5.png)

gambar terakhir merupakan hasil query dari ketiga tabel : 
Select h.name, k.name, n.name from Nama as n inner join Kategori as k on n.id = k.id inner join Hobi as h on h.id_category = k.id
![query](https://user-images.githubusercontent.com/11330262/60383484-97dd9380-9a9b-11e9-942d-9805208e3635.png)

