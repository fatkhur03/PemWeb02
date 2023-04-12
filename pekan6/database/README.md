# Pemorograman SQL 
Belajar Programming SQL

## Memulai Belajar SQL
### 1. Buat Database dbpos di server mysql/mariadb anda
    mysql -u root -p
    #setelah masuk ke prompt mysql
    mysql> create database dbpos;
    mysql> \q
### 2. Download File dbpos.sql dari github ini
### 3. Restore dbpos.sql ke database mysql/mariadb anda
Lakukan restore file dbpos.sql yang telah di download dengan perintah berikut ini pada terminal / command prompt sistem operasi anda

    mysql -u root -p < direktori_download_sql\dbpos.sql
### 4. Login ke database dbpos di server mysql/mariabdb anda
    mysql -u root -p dbpos
### 5. Jalankan query
1. Tampilkan table yang ada pada database

    mysql> show tables;
   
2. Tampilkan seluruh data pelanggan

    mysql> select * from pelanggan;
