# BELAJAR PHP

Repository ini merupakan repository untuk menampung hasil kegiatan peserta pembelajaran php dasar yang di inisiasi oleh rekan-rekan dari grup computer science pada whatsapp.

# Panduan Pengguna

## Fork repo ini, dengan mengklik tombol fork pada pojok atas halaman repo ini

![ss](/Yunindyo%20Prabowo/asset/Screenshot_20200509_220428.png)

## Clone repo yang telah anda buat, caranya masuk kedalam halaman repostory anda kemudian pada klik tombol clone, salin alamat linknya, dan buka terminal atau cmd lalu ketikkan perintah berikut,

sebagai contoh:

```bash
 git clone https://github.com/ypraw/Belajar-PHP.git
```

ganti `ypraw` dengan username yang anda gunakan.

masuk kedalam directory hasil clone yang anda buat, ketikkan

```bash
cd Belajar-PHP
```

buat folder menggunakan nama anda, dan di dalamnya isikan dengan materi yang telah anda selesaikan.

```text
tips: Gunakan subfolder untuk membedakan antara latihan satu dengan latihan 2 dst
    - [folder nama]Yunindyo Prabowo
        - Folder latihan 1
             * isi file.php
        - Folder latihan 1
             * isi file.php
```

## Lakukan perubahan sesuai dengan keinginan anda dan commit perubahan tersebut

tambah file yang telah anda buat.

```bash
git add namafile
```

contoh

```bash
git add latihan5.php
```

tambahkan pesan commit.

```bash
git commit -m "Menambah modul latihan5"
```

push ke github.

```bash
git push origin master
```

## Submit and pull request

Setelah melakukan push ke repository anda, kemudian dilanjutkan untuk pull request pada reposiory yang telah saya buat.

Tombol ini akan otomatis muncul ketika anda melakukan perubahan pada kode sumber yang telah anda fork.

## Sync forked repo to Original Repo

tambahkan url repo utama sebagai remote upstream, dengan perintah berikut:

```bash
git remote add upstream https://github.com/ypraw/Belajar-PHP.git
```

check remote upstream, dengan syntaks berikut

```bash
git remove -v
```

## Merging original repo into your fork repo

selanjutnya, fetch data dari original repo ke dalam repo lokal kita dengan perintah,

```bash
git fetch upstream
```

lalu push data ke repo fork yang berada di github dengan perintah berikut,

```bash
git push origin master
```
