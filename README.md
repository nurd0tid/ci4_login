# Codeigniter 4 Login
Codeigniter 4 Sistem Login Sederhana, Menggunakan Library dari Myth/Auth yang sudah di custom agar pada menu register bisa upload file

## SMTP
- [X] [Daftar](https://mailtrap.io/) Mailtrap ( Untuk Verification Email & Forgot/Reset Password )

### Fitur
- [x] **Templating/Layouting With Otika** 
- [x] **Login**
- [x] **Register With Upload Image**
- [x] **Verification Email**
- [x] **Reset/Forgot Password**

## Instalasi
Silahkan Daftar Terlebih dahulu pada mailtrap untuk menerima Verification Email & Link Forgot/Reset Password kemudian ganti sesuai arahan dibawah ini.
```php
public $fromEmail = ''; ( Isi Dengan Email Mailtrap )
public $fromName = 'Codeigniter Apps'; ( bebas ganti sesuka kalian )
public $protocol = 'smtp';
public $SMTPHost = 'smtp.mailtrap.io';
public $SMTPUser = 'YOUR_USERNAME_MAILTRAP';
public $SMTPPass = 'YOUR_PASSWORD_MAILTRAP';
public $SMTPPort = 2525;
public $SMTPTimeout = 5;
public $SMTPCrypto = 'tls';
public $mailType = 'html';
```

## Migration Database
Silahkan kalian ketikan dibawah ini, untuk migrasi database, kalau terdapat error nyalain extension:sqlite3 di PHP.ini XAMPP kalian
```sh
$ php spark migrate -all
```

## Running
Gunakan Command untuk menginstal apps ini.
```php
php spark serve
```

Semoga bermanfaat Ges
