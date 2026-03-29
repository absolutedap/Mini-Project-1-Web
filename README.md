# Portfolio Website

Website portfolio dinamis yang dibuat menggunakan PHP, MySQL, CSS, dan Bootstrap 5.
Website ini menampilkan informasi profil, pengalaman, skill, dan sertifikat dengan tampilan modern menggunakan tema dark gradient ungu-hitam.

---

## 1. Section Hero (Profile)

### Tampilan

<img width="1919" height="1035" alt="image" src="https://github.com/user-attachments/assets/72e08ae2-11c4-4343-bb6b-5418402aa357" />

Menampilkan:

* Foto profil
* Nama
* Deskripsi singkat

### Penjelasan Code

* Menggunakan `<section class="hero">`
* Data diambil dari database tabel **profile**
* Ditampilkan menggunakan PHP:

  ```php
  <?= htmlspecialchars($profile['name']) ?>
  ```
* Layout menggunakan Bootstrap:

  * `container`
  * `text-center`
* Styling menggunakan CSS custom:

  * `.hero`
  * `.profile-img`

---

## 2. Section Experience

### Tampilan

<img width="1919" height="1032" alt="image" src="https://github.com/user-attachments/assets/32f8eacd-27ba-4de2-bee6-aa7450e303e3" />

Menampilkan:

* Daftar pengalaman
* Judul pengalaman
* Deskripsi pengalaman
* Ditampilkan dalam bentuk card

### Penjelasan Code

* Menggunakan `<section class="section">`
* Data diambil dari tabel **experiences**
* Menggunakan looping PHP:

  ```php
  foreach($experiences as $exp)
  ```
* Layout menggunakan Bootstrap Grid:

  * `row`
  * `col-md-4`
* Card menggunakan class custom:

  * `.card-dark`

---

## 3. Section Skills

### Tampilan

<img width="1919" height="1026" alt="image" src="https://github.com/user-attachments/assets/099c6069-2915-4ea8-8713-fa0a87b0ad06" />

Menampilkan:

* Nama skill
* Persentase kemampuan
* Progress bar visual

### Penjelasan Code

* Menggunakan `<section class="section-dark">`
* Data diambil dari tabel **skills**
* Menggunakan looping PHP:

  ```php
  foreach($skills as $skill)
  ```
* Progress bar dibuat custom (tidak menggunakan Bootstrap):

  * `.skill-bar`
  * `.skill-fill`
* Lebar progress diatur dari database:

  ```php
  style="width: <?= $skill['percent'] ?>%"
  ```

---

## 4. Section Certificates

### Tampilan

<img width="1911" height="1024" alt="image" src="https://github.com/user-attachments/assets/f131ce89-77a8-46c1-ac03-f01b3d971f8b" />

Menampilkan:

* Gambar sertifikat
* Judul sertifikat
* Efek hover zoom

### Penjelasan Code

* Menggunakan `<section class="section">`
* Data diambil dari tabel **certificates**
* Menggunakan looping PHP:

  ```php
  foreach($certificates as $cert)
  ```
* Layout menggunakan Bootstrap Grid:

  * `row`
  * `col-md-4`
* Styling menggunakan:

  * `.cert-img`
* Efek hover menggunakan transform CSS

---

## Styling

Semua styling ditulis pada file:

```
css/style.css
```

Yang mengatur:

* Background gradient ungu-hitam
* Warna teks (dark mode)
* Card modern (glass/dark effect)
* Progress bar custom
* Hover effect pada card dan gambar

---

## Teknologi yang Digunakan

* HTML
* CSS
* PHP
* MySQL
* Bootstrap 5
