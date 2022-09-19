---
sidebar_position: 5
---

# Manage Contact 

Untuk mengatur menu tampilan halaman kontak di tema landy, kamu bisa mengikuti langkah-langkah berikut :
1. Kamu bisa membuka menu `Content Manager` di badaso dashboard
2. Pilih item `Landy Theme` and pilih `Fill Content' pada button aksi
3. Anda bisa melakukan edit pada teks judul, subjudul dan deskripsi
<p align="center">
  <a href="https://badaso-docs.uatech.co.id/">
    <img src="http://localhost:3000/img/contact-teks.png" alt="screencapture-badaso-dashboard-uatech-co-id-dashboard-crud-2021-03-17-09-57-08-1" />
  </a>
</p>

4. Masukan logo dan teks konten kontak  pada form konten kontak
<p align="center">
  <a href="https://badaso-docs.uatech.co.id/">
    <img src="http://localhost:3000/img/contact-content.png" alt="screencapture-badaso-dashboard-uatech-co-id-dashboard-crud-2021-03-17-09-57-08-1" />
  </a>
</p>

5. Atur alamat email penerima untuk menerima pesan dari pengunjung website di file `.env` pada `LANDY_MAIL_RECEIVER`
6. Berikut langkah-langkah untuk mengkonfigurasi uji coba email penerima menggunakan smtp pada file `.env`

```php
MAIL_MAILER=smtp
MAIL_HOST=smtp_server_address 
MAIL_PORT=smtp_port
MAIL_USERNAME=smtp_username
MAIL_PASSWORD=smtp_password
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="your_email_account_smtp"
MAIL_FROM_NAME="${APP_NAME}"

```

