# Buat Pesan Komit Konvensional dengan Bahasa Indonesia
Berikan pesan commit sesuai dengan spesifikasi Komit Konvensional berikut ini:

- Mulai dengan tipe commit seperti `feat`, `fix`, dan lain-lain.
- Tambahkan cakupan (opsional) dalam tanda kurung setelah tipe.
- Tambahkan tanda seru `!` jika commit mengandung perubahan besar (breaking change).
- Setelah titik dua dan spasi, tuliskan deskripsi singkat perubahan.
- Jika perlu, tambahkan penjelasan lebih lanjut satu baris kosong setelah deskripsi.
- Tambahkan footer (opsional) satu baris kosong setelah isi, misalnya `BREAKING CHANGE: <deskripsi>` atau referensi lain.

Contoh format pesan commit:

---

```
<tipe>[opsional cakupan]: <deskripsi>

[opsional isi]

[opsional footer(s)]
```
---

<br />
Komit berisi elemen struktural berikut, untuk mengkomunikasikan maksud kepada konsumen pustaka Anda:

1. **🐛 fix:** komit dengan _tipe_ `fix` memperbaiki bug di basis kode Anda (ini berkorelasi dengan [`PATCH`](http://semver.org/#summary) dalam Versi Semantik).
1. **✨ feat:** komit dengan _tipe_ `feat` memperkenalkan fitur baru ke basis kode (ini berkorelasi dengan [`MINOR`](http://semver.org/#summary) dalam Versi Semantik).
1. **💥 BREAKING CHANGE:** komit yang memiliki footer `BREAKING CHANGE:`, atau menambahkan `!` setelah tipe/cakupan, memperkenalkan perubahan API besar (berkorelasi dengan [`MAJOR`](http://semver.org/#summary) dalam Versi Semantik). Perubahan besar dapat menjadi bagian dari komit dengan tipe apa pun.
1. _tipe_ selain `fix:` dan `feat:` diperbolehkan, misalnya [@commitlint/config-conventional](https://github.com/conventional-changelog/commitlint/tree/master/%40commitlint/config-conventional) (berdasarkan [konvensi Angular](https://github.com/angular/angular/blob/22b96b9/CONTRIBUTING.md#-commit-message-guidelines)) merekomendasikan `build:`, `chore:`, `ci:`, `docs:`, `style:`, `refactor:`, `perf:`, `test:`, dan lainnya.
1. _footer_ selain `BREAKING CHANGE: <deskripsi>` dapat disediakan dan mengikuti konvensi serupa dengan [format trailer git](https://git-scm.com/docs/git-interpret-trailers).

Tipe tambahan tidak diwajibkan oleh spesifikasi Komit Konvensional, dan tidak memiliki efek implisit dalam Versi Semantik (kecuali mereka menyertakan BREAKING CHANGE).
<br /><br />
Cakupan dapat disediakan untuk tipe komit, untuk memberikan informasi kontekstual tambahan dan terkandung dalam tanda kurung, misalnya, `feat(parser): tambahkan kemampuan untuk mem-parsing array`.

## Contoh

### Pesan komit dengan deskripsi dan footer perubahan besar
```
✨ feat: izinkan objek konfigurasi yang disediakan untuk memperluas konfigurasi lain

💥 BREAKING CHANGE: kunci `extends` dalam file konfigurasi sekarang digunakan untuk memperluas file konfigurasi lain
```

### Pesan komit dengan `!` untuk menarik perhatian pada perubahan besar
```
✨ feat!: kirim email ke pelanggan saat produk dikirim
```

### Pesan komit dengan cakupan dan `!` untuk menarik perhatian pada perubahan besar
```
✨ feat(api)!: kirim email ke pelanggan saat produk dikirim
```

### Pesan komit dengan `!` dan footer BREAKING CHANGE
```
🛠 chore!: hentikan dukungan untuk Node 6

💥 BREAKING CHANGE: gunakan fitur JavaScript yang tidak tersedia di Node 6.
```

### Pesan komit tanpa isi
```
📚 docs: perbaiki ejaan CHANGELOG
```

### Pesan komit dengan cakupan
```
✨ feat(lang): tambahkan bahasa Polandia
```

### Pesan komit dengan isi multi-paragraf dan beberapa footer
```
🐛 fix: cegah perlombaan permintaan

Perkenalkan id permintaan dan referensi ke permintaan terbaru. Abaikan
respons masuk selain dari permintaan terbaru.

Hapus batas waktu yang digunakan untuk mengurangi masalah perlombaan tetapi sekarang sudah
usang.

Ditinjau oleh: Z
Referensi: #123
```

## Spesifikasi

Kata kunci "HARUS", "TIDAK BOLEH", "DIWAJIBKAN", "HARUS", "TIDAK BOLEH", "SEBAIKNYA", "TIDAK SEBAIKNYA", "DISARANKAN", "BOLEH", dan "OPSIONAL" dalam dokumen ini harus ditafsirkan seperti yang dijelaskan dalam [RFC 2119](https://www.ietf.org/rfc/rfc2119.txt).

1. Komit HARUS diawali dengan tipe, yang terdiri dari kata benda, `feat`, `fix`, dll., diikuti
  oleh cakupan OPSIONAL, `!` OPSIONAL, dan tanda baca terminal yang DIWAJIBKAN dan spasi.
1. Tipe `feat` HARUS digunakan ketika sebuah komit menambahkan fitur baru ke aplikasi atau pustaka Anda.
1. Tipe `fix` HARUS digunakan ketika sebuah komit merupakan perbaikan bug untuk aplikasi Anda.
1. Cakupan OPSIONAL dapat disediakan setelah tipe. Cakupan HARUS terdiri dari kata benda yang menggambarkan
  bagian dari basis kode yang diapit oleh tanda kurung, misalnya, `fix(parser):`
1. Deskripsi HARUS segera mengikuti tanda baca dan spasi setelah awalan tipe/cakupan.
Deskripsi adalah ringkasan singkat tentang perubahan kode, misalnya, _fix: masalah pem-parsing-an array ketika string mengandung spasi ganda_.
1. Isi komit yang lebih panjang dapat DISEDIAKAN setelah deskripsi singkat, memberikan informasi kontekstual tambahan tentang perubahan kode. Isi HARUS dimulai satu baris kosong setelah deskripsi.
1. Isi komit bersifat bebas dan dapat terdiri dari sejumlah paragraf yang dipisahkan oleh baris baru.
1. Satu atau lebih footer DAPAT disediakan satu baris kosong setelah isi. Setiap footer HARUS terdiri dari
 sebuah token kata, diikuti oleh pemisah `:<spasi>` atau `<spasi>#`, diikuti oleh nilai string (ini terinspirasi oleh
  [konvensi trailer git](https://git-scm.com/docs/git-interpret-trailers)).
1. Token footer HARUS menggunakan `-` sebagai pengganti karakter spasi, misalnya, `Acked-by` (ini membantu membedakan
  bagian footer dari isi multi-paragraf). Pengecualian dibuat untuk `BREAKING CHANGE`, yang juga DAPAT digunakan sebagai token.
1. Nilai footer DAPAT mengandung spasi dan baris baru, dan penguraian HARUS terhenti ketika pasangan token/pemisah footer yang valid berikutnya diamati.
1. Perubahan besar HARUS ditunjukkan dalam awalan tipe/cakupan sebuah komit, atau sebagai entri dalam
  footer.
1. Jika disertakan sebagai footer, sebuah perubahan besar HARUS terdiri dari teks uppercase BREAKING CHANGE, diikuti oleh dua titik, spasi, dan deskripsi, misalnya.,
_BREAKING CHANGE: variabel lingkungan sekarang memiliki prioritas lebih tinggi daripada file konfigurasi_.
1. Jika disertakan dalam tipe/cakupan, perubahan besar HARUS ditunjukkan dengan `!` segera sebelum `:`. Jika `!` digunakan, `BREAKING CHANGE:` boleh dihilangkan dari bagian footer,
  dan deskripsi komit HARUS digunakan untuk menjelaskan perubahan besar.
1. Tipe selain `feat` dan `fix` BOLEH digunakan dalam pesan komit Anda, misalnya, _docs: perbarui dokumen referensi._
1. Unit informasi yang membentuk Komit Konvensional TIDAK BOLEH diperlakukan sebagai sensitif terhadap huruf oleh pelaksana, dengan pengecualian BREAKING CHANGE yang HARUS ditulis dengan huruf besar.
1. BREAKING-CHANGE HARUS sinonim dengan BREAKING CHANGE, ketika digunakan sebagai token dalam footer.

## Mengapa Menggunakan Komit Konvensional

* Secara otomatis menghasilkan CHANGELOG.
* Secara otomatis menentukan peningkatan versi semantik (berdasarkan tipe komit yang dilakukan).
* Mengkomunikasikan sifat perubahan kepada rekan tim, publik, dan pemangku kepentingan lainnya.
* Memicu proses build dan publikasi.
* Memudahkan orang untuk berkontribusi pada proyek Anda, dengan memungkinkan mereka menjelajahi
  riwayat komit yang lebih terstruktur.

## FAQ

### Bagaimana saya harus menangani pesan komit dalam fase pengembangan awal?

Kami sarankan Anda melanjutkan seolah-olah Anda sudah merilis produk. Biasanya *seseorang*, bahkan jika itu adalah sesama pengembang perangkat lunak Anda, menggunakan perangkat lunak Anda. Mereka ingin tahu apa yang diperbaiki, apa yang rusak, dll.

### Apakah tipe dalam judul komit ditulis dengan huruf besar atau kecil?

Setiap penulisan dapat digunakan, tetapi sebaiknya konsisten.

### Apa yang harus saya lakukan jika komit sesuai dengan lebih dari satu tipe komit?

Kembali dan buat beberapa komit jika memungkinkan. Sebagian dari manfaat Komit Konvensional adalah kemampuannya untuk mendorong kita membuat komit dan PR yang lebih terorganisir.

### Bukankah ini menghambat pengembangan cepat dan iterasi yang cepat?

Ini menghambat pergerakan cepat dengan cara yang tidak teratur. Ini membantu Anda untuk dapat bergerak cepat dalam jangka panjang di berbagai proyek dengan berbagai kontributor.

### Mungkinkah Komit Konvensional membuat pengembang membatasi jenis komit yang mereka buat karena mereka akan berpikir dalam tipe yang disediakan?

Komit Konvensional mendorong kita untuk membuat lebih banyak komit dengan tipe tertentu seperti perbaikan. Selain itu, fleksibilitas Komit Konvensional memungkinkan tim Anda untuk membuat tipe mereka sendiri dan mengubah tipe tersebut seiring waktu.

### Bagaimana ini terkait dengan SemVer?

Komit dengan tipe `fix` harus diterjemahkan ke dalam rilis `PATCH`. Komit dengan tipe `feat` harus diterjemahkan ke dalam rilis `MINOR`. Komit dengan `BREAKING CHANGE` dalam komit, terlepas dari tipe, harus diterjemahkan ke dalam rilis `MAJOR`.

### Bagaimana saya harus memberi versi ekstensi saya terhadap Spesifikasi Komit Konvensional, misalnya `@jameswomack/conventional-commit-spec`?

Kami sarankan menggunakan SemVer untuk merilis ekstensi Anda terhadap spesifikasi ini (dan
mendorong Anda untuk membuat ekstensi ini!)

### Apa yang harus saya lakukan jika saya secara tidak sengaja menggunakan tipe komit yang salah?

#### Ketika Anda menggunakan tipe yang sesuai dengan spesifikasi tetapi bukan tipe yang benar, misalnya `fix` alih-alih `feat`

Sebelum menggabungkan atau merilis kesalahan, kami sarankan menggunakan `git rebase -i` untuk mengedit riwayat komit. Setelah rilis, pembersihan akan berbeda sesuai dengan alat dan proses yang Anda gunakan.

#### Ketika Anda menggunakan tipe *tidak* sesuai spesifikasi, misalnya `feet` alih-alih `feat`

Dalam skenario terburuk, tidak ada salahnya jika sebuah komit mendarat yang tidak memenuhi spesifikasi Komit Konvensional. Ini hanya berarti komit tersebut akan terlewat oleh alat yang berdasarkan pada spesifikasi.

### Apakah semua kontributor saya perlu menggunakan spesifikasi Komit Konvensional?

Tidak! Jika Anda menggunakan alur kerja berbasis squash di Git, pemelihara utama dapat membersihkan pesan komit saat digabung—menambahkan tidak ada beban kerja pada pengembang yang hanya berkontribusi sesekali.
Salah satu alur kerja yang umum untuk ini adalah membuat sistem git Anda secara otomatis menggabungkan komit dari permintaan tarik dan menyajikan formulir bagi pemelihara utama untuk memasukkan pesan komit git yang benar untuk penggabungan.

### Bagaimana Komit Konvensional menangani komit pembatalan?

Membatalkan kode bisa rumit: apakah Anda membatalkan beberapa komit? jika Anda membatalkan sebuah fitur, apakah rilis selanjutnya seharusnya menjadi patch?
Komit Konvensional tidak secara eksplisit mendefinisikan perilaku pembatalan. Sebagai gantinya, kami menyerahkannya kepada penulis alat
untuk menggunakan fleksibilitas _tipe_ dan _footer_ untuk mengembangkan logika mereka dalam menangani pembatalan.

Satu rekomendasi adalah menggunakan tipe `revert`, dan footer yang merujuk pada SHA komit yang dibatalkan:

```
revert: mari kita tidak pernah lagi berbicara tentang insiden mie

Referensi: 676104e, a215868
```
