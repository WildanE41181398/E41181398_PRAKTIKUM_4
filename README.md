# PRAKTIKUM 4 REST + CI 3

# DEFINISI
**REST**, singkatan bahasa Inggris dari Representational State Transfer, adalah suatu gaya arsitektur perangkat lunak untuk untuk pendistibusian sistem hipermedia seperti www. Pada arsitektur REST, REST server menyediakan resources (sumber daya/data) dan REST client mengakses dan menampilkan resource tersebut untuk penggunaan selanjutnya.
**CodeIgniter** merupakan aplikasi sumber terbuka yang berupa framework PHP dengan model MVC (Model, View, Controller) untuk membangun website dinamis dengan menggunakan PHP. 

## Requirements (Kebutuhan)
- [PHP](https://php.net/) versi 5.6 atau versi lebih baru.
- [XAMPP](https://www.apachefriends.org/download.html) 7.4.2 atau versi yang lebih baru.
- [Codeigniter](https://codeigniter.com/en/download) versi 3.1.11 atau the latest Version.
- [Visual Studio Code](https://code.visualstudio.com/download) versi 1.43.0 atau versi yang lebih baru.
- [Postman](https://www.postman.com/downloads/) versi 7.20.0.

## Preparations (Persiapan)
1. Menjalankan atau start Webserver anda, di sini saya menggunakan XAMMP
2. Mendownload atau Fork repository ini ke dalam htdocs anda, beri nama folder project dengan nama **E41181398_PRAKTIKUM_4**
3. Tuliskan link berikut pada browser anda http://localhost/E41181398_PRAKTIKUM_4/ dan menampilkan seperti :
![gambar_tampilan_welcome](https://lh3.googleusercontent.com/sHOXft-959Sbv42HCulAAgdQ3blqYHSok8Ky7CQtKRd_giTpUqyiyXstvmX5h7zm3hMGjD3Jjp0-gNDJx_ht-SLR-81uSfChcFOQTkRu93UetULSLhl3882nL_t9IFydGJL_fK6i6pkjB13vtTALHPNvDpVhZhVn-4AfjPP1i7xkcAG3KWmrE5VMu7J3IzVzehIKnJdvIxgovRNstxDP5urQi0sCGCwjCmSKWrIfdDHplPicPPXXB8dioa0T7hqUr7cq6ILH5Vo5rmk_vxprU0UhKedJ2RCOkrI_lQ86781M9VJIXkb2JadOaJGh5DzrLSmGFUxHyVA2-ciDpILbZ-i8yEQ49oaba775dU8w7ZFEMdp5zMVPxIGJcZjXu2bvMqpGqASHAJ6yZdiaHfAxit5XV6d2tKHLMxAQKd5TzEry9N6yCe34uvNnHSojY4HpjqGzSmrCW0K14FhQfsWsPrd3YRJRnaZeFzT-_rGAryHsGu-MOcFAdQzBS4Mcjr1uzxE6Jt-Xp7AIlayVWMWXwRxOTPK3WrpaKdCNPMoqfm8NwoUeiGWQQqJPlHIfE5ZIU0l6E4gxcCV46j_M7jS1eHW2qkNoiA2dfpxJ8rEsig1ojzSo_X0YM5kShmpd9fNI1i81ZFCzhxC-Tm4T49W2sr537LicNd60-BOKUilR9MDClQY=w1920-h349-no)

4. Membuat database baru dan beri nama **kontak**, dan import file `kontak.sql` ke dalam database tersebut <br>
5. Melakukan konfigurasi pada file `application/config/database.php` jadikan sama seperti baris kode berikut :
``` php
defined('BASEPATH') OR exit('No direct script access allowed');
$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
    'dsn'   => '',
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'kontak',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
```
## Implementasi

1. Menggunakan app Postman untuk melakukan  **function** Get, Post, Put dan Delete, Install Postman dengan mengunduhnya [disini](https://www.postman.com/downloads/)
2. Buka Postman, tambahkan tab baru dengan menekan tombol + 
3. Masukkan link berikut http://localhost/E41181398_PRAKTIKUM_4/index.php/kontak dan silahkan memanipulasi data yang telah terhubung dengan database. Pada kasus ini menggunakan **function** Get, Post, Put, dan Delete.

## Informasi
- Seluruh syntax untuk memanipulasi data berada pada file `application/controllers/Kontak.php`




