# HMS_v1 — Hotel Management System

Repository ini berisi source code aplikasi **Hotel Management System** berbasis **CodeIgniter 4**.

Repository ini menggunakan workflow **branch per developer**, dimana:

* `master` → branch utama (stable)
* setiap developer memiliki branch sendiri

Contoh struktur branch:

```
master
ryanzulmi
namateman
```

Developer **tidak boleh langsung commit ke master**.
Semua perubahan dilakukan di branch masing-masing.

---

# 1. Prasyarat

Pastikan sudah terinstall:

* Git
* PHP (minimal sesuai kebutuhan CodeIgniter)
* Composer
* Web server (XAMPP / Laragon / dll)

Cek instalasi:

```
git --version
php -v
composer -V
```

---

# 2. Clone Repository

Clone repository ke komputer lokal:

```
git clone https://github.com/ryanzulmi/HMS_v1.git
```

Masuk ke folder project:

```
cd HMS_v1
```

Cek branch:

```
git branch -a
```

Biasanya akan terlihat:

```
* master
remotes/origin/master
```

---

# 3. Install Dependency

Jika project menggunakan **Composer**:

```
composer install
```

---

# 4. Setup Environment

Copy file `.env`:

```
cp env .env
```

atau di Windows:

```
copy env .env
```

Edit konfigurasi database di `.env`.

Contoh:

```
database.default.hostname = localhost
database.default.database = hms_db
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
```

---

# 5. Menjalankan Project

Jalankan server development:

```
php spark serve
```

Akses di browser:

```
http://localhost:8080
```

---

# 6. Membuat Branch Developer

Setiap developer harus membuat branch sendiri.

Contoh developer **Ryan**:

```
git checkout -b ryanzulmi
```

Push branch ke GitHub:

```
git push -u origin ryanzulmi
```

Developer lain misalnya **Andi**:

```
git checkout -b andi
git push -u origin andi
```

Sekarang branch akan muncul di GitHub:

```
master
ryanzulmi
andi
```

---

# 7. Workflow Development

Sebelum mulai coding **WAJIB update master terlebih dahulu**.

```
git checkout master
git pull origin master
```

Masuk ke branch sendiri:

```
git checkout ryanzulmi
```

Update branch dengan master:

```
git merge master
```

Sekarang branch sudah mengikuti update terbaru.

---

# 8. Melakukan Perubahan Kode

Setelah melakukan perubahan:

```
git add .
git commit -m "menambahkan fitur booking"
```

Push ke branch sendiri:

```
git push -u origin andi
```

---

# 9. Merge ke Master (via GitHub — Recommended)

Jika fitur sudah selesai:

1. Buka repository di GitHub
2. Klik **Pull Requests**
3. Klik **New Pull Request**

Pilih:

```
base: master
compare: ryanzulmi
```

Klik:

```
Create Pull Request
```

Setelah direview:

```
Merge Pull Request
```

---

# 10. Merge via Bash (Alternatif)

Jika ingin merge via command line:

```
git checkout master
git pull origin master
git merge ryanzulmi
git push origin master
```

---

# 11. Update Repository Setelah Merge

Setelah merge ke master, semua developer harus update:

```
git checkout master
git pull origin master
```

Kemudian update branch masing-masing:

```
git checkout ryanzulmi
git merge master
```

---

# 12. Aturan Development

Developer **tidak diperbolehkan**:

* commit langsung ke `master`
* push langsung ke `master`

Developer **harus**:

* membuat branch sendiri
* pull master sebelum coding
* push ke branch sendiri
* merge ke master melalui Pull Request

---

# 13. File yang Tidak Masuk Repository

File berikut tidak ikut di Git:

```
/vendor
/writable/cache
/writable/logs
.env
```

Pastikan file tersebut ada di `.gitignore`.

---

# 14. Perintah Git yang Sering Digunakan

Update master:

```
git checkout master
git pull origin master
```

Masuk branch developer:

```
git checkout namabranch
```

Commit perubahan:

```
git add .
git commit -m "update fitur"
```

Push perubahan:

```
git push
```

---

# 15. Struktur Branch

Workflow repository:

```
           master
             │
     ┌───────┴────────┐
     │                │
   ryanzulmi       temansaya
     │                │
   coding           coding
     │                │
     └──────merge─────┘
             │
           master
```

---

# Author

Ryan Zulmi
Project: HMS_v1 (Hotel Management System)
