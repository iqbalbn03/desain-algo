

# **Business Requirements Document (BRD)**  
**Sistem Manajemen Perpustakaan**

---

## **1. Introduction**

### 1.1 Purpose of Document
Dokumen ini merupakan *Business Requirement Document* (BRD) yang bertujuan untuk menjelaskan kebutuhan dan alur kerja pada proyek pengembangan Sistem Manajemen Perpustakaan. Sistem ini dirancang untuk mendukung pengelolaan data buku, peminjaman, dan pengelolaan data pengunjung perpustakaan, serta pengaturan hak akses berbasis peran pengguna.

### 1.2 Project Scope
Sistem ini mencakup modul-modul berikut:
- **Manajemen Pengunjung**: Pendaftaran dan pengelolaan data pengunjung perpustakaan.
- **Manajemen Buku**: Menambah, memperbarui, dan mengelola data buku serta status ketersediaannya.
- **Peminjaman Buku**: Mengelola proses peminjaman dan pengembalian buku.
- **Manajemen Hak Akses**: Mengatur hak akses berdasarkan peran pengguna menggunakan *Spatie Permissions*.

---

## **2. System Requirement**

### 2.1 Business Flow

1. **Registrasi Pengunjung**:
   - Pengunjung melakukan pendaftaran di perpustakaan.
   - Administrator menerima notifikasi dan memverifikasi pendaftaran pengunjung.
   - Setelah disetujui, pengunjung dapat meminjam buku.

2. **Peminjaman Buku**:
   - Pengunjung yang telah terdaftar dapat melihat daftar buku yang tersedia.
   - Pengunjung melakukan peminjaman buku, dan sistem memeriksa ketersediaan buku.
   - Jika buku tersedia, peminjaman dicatat beserta tanggal pengembalian. Jika tidak, proses peminjaman dihentikan.

3. **Manajemen Buku**:
   - Administrator dapat menambah, memperbarui, atau menghapus data buku serta mengatur status ketersediaan.

---

## **3. Business Requirement**

### 3.1 Functional Requirement

| No | Modul/Doctype                                   | Keterangan            |
|----|-------------------------------------------------|-----------------------|
| 1  | **Registrasi Pengunjung**                       | - Tambah data pengunjung<br> - Edit data pengunjung<br> - Hapus data pengunjung |
| 2  | **Manajemen Buku**                              | - Tambah buku baru<br> - Perbarui data buku<br> - Hapus data buku |
| 3  | **Peminjaman Buku**                             | - Cek ketersediaan buku<br> - Tambah data peminjaman<br> - Perbarui status buku |
| 4  | **Manajemen Hak Akses**                         | - Atur peran pengguna<br> - Berikan izin akses berdasarkan peran |

---

## **4. Approval Workflow**

| No. | Modul                    | Alur Persetujuan                                                 |
|-----|--------------------------|-------------------------------------------------------------------|
| 1   | **Registrasi Pengunjung**| Administrator memverifikasi dan menyetujui/menolak pendaftaran.  |
| 2   | **Peminjaman Buku**      | Administrator memverifikasi ketersediaan buku sebelum peminjaman. |
| 3   | **Manajemen Buku**       | Administrator memiliki akses penuh untuk perubahan data buku.    |

---

## **5. Timeline**

| Tahap                  | Deliverables                              |
|------------------------|------------------------------------------|
| Analisis & Desain      | *Dokumen BRD*                            |
| Pengembangan           | Modul Sistem                             |
| Uji Coba Pengguna      | *Dokumen UAT*                            |
| Pelatihan              | *User Manual*                            |
| Migrasi Data           | *Dokumen Checklist Migrasi*              |
| Peluncuran             | *Dokumen BAST*                           |

