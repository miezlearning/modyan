# Instruksi Khusus untuk Pesan Commit dalam Bahasa Indonesia
Berikan pesan commit dalam bahasa Indonesia sesuai dengan spesifikasi Komit Konvensional berikut:

- Mulai dengan tipe commit seperti `fitur`, `perbaikan`, dan lain-lain.
- Tambahkan cakupan (opsional) dalam tanda kurung setelah tipe.
- Tambahkan tanda seru `!` jika commit mengandung perubahan besar (breaking change).
- Setelah titik dua dan spasi, tulis deskripsi singkat tentang perubahan.
- Jika perlu, tambahkan penjelasan lebih lanjut satu baris kosong setelah deskripsi.
- Tambahkan footer (opsional) satu baris kosong setelah isi, misalnya `PERUBAHAN BESAR: <deskripsi>` atau referensi lain.

**Format pesan commit:**
```
<tipe>[opsional cakupan]: <deskripsi>

[opsional isi]

[opsional footer(s)]
```

### Elemen Struktural
Komit berisi elemen struktural berikut untuk mengkomunikasikan maksud kepada konsumen pustaka Anda:

1. **🐛 perbaikan:** Komit dengan tipe `perbaikan` memperbaiki bug di basis kode (berkorelasi dengan `PATCH` dalam Versi Semantik).
2. **✨ fitur:** Komit dengan tipe `fitur` memperkenalkan fitur baru ke basis kode (berkorelasi dengan `MINOR` dalam Versi Semantik).
3. **💥 PERUBAHAN BESAR:** Komit yang memiliki footer `PERUBAHAN BESAR:`, atau menambahkan `!` setelah tipe/cakupan, memperkenalkan perubahan API besar (berkorelasi dengan `MAJOR` dalam Versi Semantik). Perubahan besar dapat menjadi bagian dari komit dengan tipe apa pun.
4. Tipe lain seperti `build:`, `tugas:`, `ci:`, `dokumentasi:`, `gaya:`, `refaktor:`, `performa:`, `uji:`, dan lainnya diperbolehkan.
5. Footer selain `PERUBAHAN BESAR: <deskripsi>` dapat disediakan dan mengikuti konvensi serupa dengan [format trailer git](https://git-scm.com/docs/git-interpret-trailers).

Cakupan dapat disediakan untuk tipe komit, memberikan informasi kontekstual tambahan dalam tanda kurung, misalnya, `fitur(parser): tambah kemampuan parsing array`.

## Contoh Pesan Commit dalam Bahasa Indonesia

### Pesan commit dengan deskripsi dan footer perubahan besar
```
✨ fitur: izinkan konfigurasi untuk memperluas konfigurasi lain

💥 PERUBAHAN BESAR: kunci `extends` sekarang digunakan untuk memperluas file konfigurasi lain
```

### Pesan commit dengan `!` untuk perubahan besar
```
✨ fitur!: kirim email ke pelanggan saat produk dikirim
```

### Pesan commit dengan cakupan dan `!` untuk perubahan besar
```
✨ fitur(api)!: kirim email ke pelanggan saat produk dikirim
```

### Pesan commit dengan `!` dan footer PERUBAHAN BESAR
```
🛠 tugas!: hentikan dukungan untuk Node 6

💥 PERUBAHAN BESAR: gunakan fitur JavaScript yang tidak tersedia di Node 6
```

### Pesan commit tanpa isi
```
📚 dokumentasi: perbaiki ejaan CHANGELOG
```

### Pesan commit dengan cakupan
```
✨ fitur(bahasa): tambah bahasa Polandia
```

### Pesan commit dengan isi multi-paragraf dan beberapa footer
```
🐛 perbaikan: cegah perlombaan permintaan

Tambah id permintaan dan referensi ke permintaan terbaru. Abaikan
respons masuk selain dari permintaan terbaru.

Hapus batas waktu yang digunakan untuk mengurangi masalah perlombaan tetapi sekarang sudah
usang.

Ditinjau oleh: Z
Referensi: #123
```

## Spesifikasi
Kata kunci "HARUS", "TIDAK BOLEH", "DIWAJIBKAN", "SEBAIKNYA", "TIDAK SEBAIKNYA", "DISARANKAN", "BOLEH", dan "OPSIONAL" harus ditafsirkan sesuai [RFC 2119](https://www.ietf.org/rfc/rfc2119.txt).

1. Komit HARUS diawali dengan tipe, yang terdiri dari kata benda, `fitur`, `perbaikan`, dll., diikuti oleh cakupan OPSIONAL, `!` OPSIONAL, dan tanda baca terminal yang DIWAJIBKAN dan spasi.
2. Tipe `fitur` HARUS digunakan ketika sebuah komit menambahkan fitur baru ke aplikasi atau pustaka Anda.
3. Tipe `perbaikan` HARUS digunakan ketika sebuah komit merupakan perbaikan bug untuk aplikasi Anda.
4. Cakupan OPSIONAL dapat disediakan setelah tipe. Cakupan HARUS terdiri dari kata benda yang menggambarkan bagian dari basis kode yang diapit oleh tanda kurung, misalnya, `perbaikan(parser):`
5. Deskripsi HARUS segera mengikuti tanda baca dan spasi setelah awalan tipe/cakupan. Deskripsi adalah ringkasan singkat tentang perubahan kode, misalnya, `perbaikan: masalah pem-parsing-an array ketika string mengandung spasi ganda`.
6. Isi komit yang lebih panjang DAPAT disediakan setelah deskripsi singkat, memberikan informasi kontekstual tambahan tentang perubahan kode. Isi HARUS dimulai satu baris kosong setelah deskripsi.
7. Isi komit bersifat bebas dan DAPAT terdiri dari sejumlah paragraf yang dipisahkan oleh baris baru.
8. Satu atau lebih footer DAPAT disediakan satu baris kosong setelah isi. Setiap footer HARUS terdiri dari sebuah token kata, diikuti oleh pemisah `:<spasi>` atau `<spasi>#`, diikuti oleh nilai string.
9. Token footer HARUS menggunakan `-` sebagai pengganti karakter spasi, misalnya, `Ditinjau-oleh` (ini membantu membedakan bagian footer dari isi multi-paragraf). Pengecualian dibuat untuk `PERUBAHAN BESAR`, yang juga DAPAT digunakan sebagai token.
10. Nilai footer DAPAT mengandung spasi dan baris baru, dan penguraian HARUS terhenti ketika pasangan token/pemisah footer yang valid berikutnya diamati.
11. Perubahan besar HARUS ditunjukkan dalam awalan tipe/cakupan sebuah komit, atau sebagai entri dalam footer.
12. Jika disertakan sebagai footer, sebuah perubahan besar HARUS terdiri dari teks uppercase `PERUBAHAN BESAR`, diikuti oleh dua titik, spasi, dan deskripsi, misalnya, `PERUBAHAN BESAR: variabel lingkungan sekarang memiliki prioritas lebih tinggi daripada file konfigurasi`.
13. Jika disertakan dalam tipe/cakupan, perubahan besar HARUS ditunjukkan dengan `!` segera sebelum `:`. Jika `!` digunakan, `PERUBAHAN BESAR:` BOLEH dihilangkan dari bagian footer, dan deskripsi komit HARUS digunakan untuk menjelaskan perubahan besar.
14. Tipe selain `fitur` dan `perbaikan` BOLEH digunakan dalam pesan komit Anda, misalnya, `dokumentasi: perbarui dokumen referensi.`
15. Unit informasi yang membentuk Komit Konvensional TIDAK BOLEH diperlakukan sebagai sensitif terhadap huruf oleh pelaksana, dengan pengecualian `PERUBAHAN BESAR` yang HARUS ditulis dengan huruf besar.
16. `PERUBAHAN-BESAR` HARUS sinonim dengan `PERUBAHAN BESAR`, ketika digunakan sebagai token dalam footer.