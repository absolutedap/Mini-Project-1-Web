# Portfolio Website

Website portofolio statis yang dibuat menggunakan HTML, CSS, dan Bootstrap 5.  
Website ini menampilkan informasi pribadi, skill, pengalaman, dan sertifikat dalam tampilan modern full dark theme dengan gradient ungu-hitam.

---

## 1. Section Home (Hero Section)

<img width="1919" height="1027" alt="image" src="https://github.com/user-attachments/assets/6814b25e-7f94-4f8b-a385-0e75470f7efd" />

### Tampilan
Menampilkan:
- Foto profil
- Nama
- Deskripsi singkat
- Tombol navigasi ke About Me

### Penjelasan Code
- Menggunakan `<section id="home">`
- Layout menggunakan Bootstrap class:
  - `container`
  - `d-flex`
  - `align-items-center`
  - `text-center`
- Gambar menggunakan class custom `.profile-img`
- Background menggunakan gradient dari CSS

---

## 2. Section About Me

<img width="1918" height="1026" alt="image" src="https://github.com/user-attachments/assets/a70d9eb3-67b1-4152-b302-201916f843ee" />

### Tampilan
Menampilkan:
- Deskripsi diri
- Pengalaman dalam bentuk list
- Skill dengan progress bar

### Penjelasan Code
- Menggunakan `<section id="about">`
- Layout menggunakan Bootstrap Grid System:
  - `row`
  - `col-md-6`
- Progress bar menggunakan komponen Bootstrap:
  - `progress`
  - `progress-bar`
- Styling warna skill menggunakan class custom `.skill-bar`

---

## 3. Section Certificates

<img width="1917" height="1028" alt="image" src="https://github.com/user-attachments/assets/f74a6dbc-6dda-4618-8f91-f6dc5716a599" />

### Tampilan
Menampilkan:
- Daftar sertifikat dalam bentuk card
- Layout grid responsif (3 kolom di desktop)

### Penjelasan Code
- Menggunakan `<section id="certificates">`
- Layout grid menggunakan:
  - `row`
  - `col-md-4`
- Card menggunakan komponen Bootstrap:
  - `card`
  - `card-body`
  - `card-img-top`
- Ditambahkan efek hover menggunakan CSS

---

## 🧭 4. Navbar

### Tampilan
- Navbar fixed di atas
- Navigasi ke setiap section
- Responsive (collapse di mobile)

### Penjelasan Code
- Menggunakan komponen `navbar` dari Bootstrap
- `navbar-expand-lg`
- `navbar-dark`
- `fixed-top`
- Menggunakan `collapse` untuk responsive menu

---

## Styling

Semua styling tambahan ditulis pada file:
style.css

Yang mengatur:
- Gradient background ungu-hitam
- Warna teks
- Hover effect card
- Custom button
- Custom progress bar
- Styling navbar

## Teknologi yang Digunakan

Teknologi yang digunakan pada pembuatan website ini adalah:
- HTML
- CSS
- Bootstrap 5
