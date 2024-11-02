
# **Business Requirements Document (BRD)**  
**Sistem Simpan Pinjam Buku Perpustakaan**

---

## **1. Introduction**

### 1.1 Purpose of Document
Dokumen ini merupakan *Business Requirement Document* (BRD) yang bertujuan untuk menjelaskan kebutuhan dan alur kerja pada proyek pengembangan Sistem Simpan Pinjam Buku Perpustakaan. Sistem ini dirancang untuk mendukung proses registrasi anggota, manajemen data buku, peminjaman, dan pengembalian buku.

### 1.2 Project Scope
Sistem ini akan mencakup modul-modul berikut:
- **Manajemen Anggota**: Melakukan registrasi, update data, dan notifikasi status penerimaan anggota perpustakaan.
- **Manajemen Buku**: Mengelola data buku yang mencakup penambahan, penghapusan, dan pengecekan ketersediaan buku.
- **Peminjaman Buku**: Mengelola peminjaman buku oleh anggota, termasuk proses pengecekan ketersediaan buku dan pemberitahuan jadwal pengembalian.
- **Pengembalian Buku**: Mengatur proses pengembalian buku serta mencatat status peminjaman.

---

## **2. System Requirement**

### 2.1 Business Flow

1. **Registrasi Anggota**:
   - Anggota melakukan registrasi.
   - Pustakawan bagian registrasi menerima notifikasi registrasi.
   - Data anggota diupdate oleh pustakawan.
   - Jika registrasi diterima, anggota menerima notifikasi dan dapat melanjutkan proses peminjaman. Jika ditolak, anggota menerima notifikasi penolakan.

2. **Peminjaman Buku**:
   - Anggota yang terdaftar dapat melihat daftar buku.
   - Setelah memilih buku untuk dipinjam, anggota melakukan peminjaman, dan pustakawan bagian buku menerima notifikasi.
   - Pustakawan melakukan pengecekan ketersediaan buku. Jika tersedia, peminjaman disetujui dan anggota menerima jadwal pengembalian buku. Jika tidak tersedia, proses peminjaman dihentikan.

3. **Manajemen Buku**:
   - Pustakawan dapat memperbarui data buku, menambah, atau menghapus buku sesuai kebutuhan inventaris.

---

## **3. Business Requirement**

### 3.1 Fungsional Requirement

| No | Kebutuhan Modul/Doctype                          | Status             |
|----|--------------------------------------------------|--------------------|
| 1  | **Registrasi Anggota**<br>- Insert<br>- View<br>- Update<br>- Delete | Modul/doctype baru |
| 2  | **Penerimaan/Notifikasi Status Registrasi**<br>- Ditolak<br>- Diterima | Modul/doctype baru |
| 3  | **Manajemen Buku**<br>- Menambah Buku<br>- Menghapus Buku<br>- Update Data Buku | Modul/doctype baru |
| 4  | **Pengecekan Ketersediaan Buku**<br>- Tersedia<br>- Tidak Tersedia | Modul/doctype baru |
| 5  | **Peminjaman Buku**<br>- Pengecekan Ketersediaan<br>- Update Jadwal Pengembalian | Modul/doctype baru |
| 6  | **Pengembalian Buku**<br>- Mengembalikan Buku<br>- Memberitahukan Jadwal Pengembalian | Modul/doctype baru |

---

## **4. Approval**

| No. | Modul/Doctype             | Tingkat Approval                                               |
|-----|----------------------------|----------------------------------------------------------------|
| 1   | **Registrasi Anggota**     | Pustakawan bagian registrasi melakukan verifikasi anggota baru dan menentukan status diterima atau ditolak. |
| 2   | **Peminjaman Buku**        | Pustakawan bagian buku memverifikasi ketersediaan buku dan menyetujui peminjaman jika buku tersedia. |
| 3   | **Pengembalian Buku**      | Pustakawan bagian buku mencatat pengembalian buku dan memeriksa kelengkapan. |

---


Dokumen ini dapat digunakan sebagai panduan untuk pengembangan sistem simpan pinjam buku perpustakaan.