# **Analisis Sistem Manajemen Les Bahasa Inggris Dengan Metode 5W1H**

---

## **1. Latar Belakang**

Bahasa Inggris merupakan bahasa internasional yang penting dalam dunia pendidikan dan pekerjaan. Banyak siswa, mahasiswa, dan pekerja mengikuti **les bahasa Inggris** untuk meningkatkan keterampilan berbahasa mereka. Namun, pengelolaan kursus bahasa Inggris sering menghadapi kendala seperti:

* Kesulitan dalam manajemen pendaftaran dan data siswa.
* Kurangnya sistem untuk memantau kehadiran dan perkembangan siswa.
* Tidak adanya sistem evaluasi yang efektif untuk menilai kemajuan siswa.
* Pelaporan keuangan yang masih manual dan kurang transparan.
* Kurangnya pemanfaatan teknologi dalam pembelajaran daring.

Oleh karena itu, diperlukan sistem manajemen berbasis teknologi untuk meningkatkan efisiensi pengelolaan les bahasa Inggris.

---

## **2. Identifikasi Masalah**

1. Tidak adanya sistem terpusat untuk mengelola data siswa dan jadwal kelas.
2. Sulitnya memantau kehadiran siswa dalam setiap sesi les.
3. Kurangnya transparansi dalam pelaporan pembayaran dan keuangan.
4. Belum adanya sistem evaluasi yang terstruktur untuk mengukur perkembangan siswa.
5. Manajemen waktu yang tidak optimal dalam pengaturan jadwal kelas dan instruktur.

---

## **3. Rumusan Masalah**

1. Bagaimana membangun sistem pendaftaran siswa yang efisien dan mudah diakses?
2. Bagaimana merancang dashboard untuk mengelola data siswa, jadwal, dan keuangan?
3. Bagaimana mengimplementasikan fitur pemantauan kehadiran dan perkembangan siswa?
4. Bagaimana menyusun laporan keuangan yang transparan untuk manajemen les?
5. Bagaimana merancang sistem evaluasi berbasis tes dan feedback?

---

## **4. Tujuan Penelitian**

1. Membangun sistem pendaftaran siswa yang terstruktur dan efisien.
2. Merancang dashboard untuk pengelolaan data siswa, kelas, dan keuangan.
3. Mengembangkan fitur pemantauan kehadiran dan kemajuan siswa.
4. Membuat laporan keuangan otomatis yang transparan dan mudah diakses.
5. Merancang sistem evaluasi berbasis ujian dan feedback dari instruktur.

---

## **5. Metode Analisis (5W1H)**

### **5.1. What (Apa)**

* **Apa yang ingin dicapai?** Membangun sistem manajemen kursus bahasa Inggris berbasis teknologi untuk meningkatkan efektivitas operasional.
* **Apa masalah utama?** Manajemen pendaftaran, jadwal, keuangan, dan evaluasi masih dilakukan secara manual.

### **5.2. Why (Mengapa)**

* **Mengapa sistem ini diperlukan?** Untuk meningkatkan efisiensi pengelolaan kursus, transparansi keuangan, dan efektivitas pembelajaran.
* **Mengapa menggunakan Laravel, Docker, dan MySQL?** Laravel untuk pengembangan cepat, Docker untuk stabilitas lingkungan, MySQL untuk pengelolaan database yang terstruktur.

### **5.3. Who (Siapa)**

* **Siapa yang terlibat?** Manajemen kursus, instruktur, siswa, dan orang tua siswa.
* **Siapa pengguna sistem?**
  * Admin untuk mengelola data siswa dan jadwal kelas.
  * Instruktur untuk memantau kehadiran dan hasil belajar siswa.
  * Siswa untuk melihat jadwal dan hasil evaluasi.
  * Orang tua untuk memantau progres anak.

### **5.4. When (Kapan)**

* **Kapan sistem diimplementasikan?** Setelah 6 bulan pengembangan dan pengujian.
* **Kapan evaluasi dilakukan?** Setiap akhir sesi kelas dan dalam laporan bulanan.

### **5.5. Where (Di mana)**

* **Di mana sistem digunakan?** Di lembaga les bahasa Inggris dan dapat diakses secara daring melalui web.
* **Di mana data disimpan?** Database MySQL yang disimpan di server cloud.

### **5.6. How (Bagaimana)**

* **Bagaimana sistem dibangun?** Laravel untuk frontend/backend, Docker untuk containerisasi, MySQL untuk database.
* **Bagaimana cara kerja?**
  * Siswa mendaftar melalui sistem.
  * Admin mengatur jadwal kelas dan instruktur.
  * Instruktur mencatat kehadiran dan perkembangan siswa.
  * Sistem menghasilkan laporan keuangan dan evaluasi siswa.

---

## **6. Perancangan Sistem**

### **6.1. Entity Relationship Diagram (ERD)**

Entitas utama:

* **Siswa** (ID_Siswa, Nama, Kontak, Program_Les)
* **Instruktur** (ID_Instruktur, Nama, Keahlian)
* **Kelas** (ID_Kelas, Nama_Kelas, Jadwal, ID_Instruktur)
* **Kehadiran** (ID_Kehadiran, ID_Siswa, ID_Kelas, Status)
* **Evaluasi** (ID_Evaluasi, ID_Siswa, Nilai, Feedback)
* **Keuangan** (ID_Keuangan, ID_Siswa, Jumlah, Status_Pembayaran)

### **6.2. Flowchart Sistem**

1. **Pendaftaran Siswa** → Input Data → Verifikasi → Database.
2. **Penjadwalan Kelas** → Input Jadwal → Notifikasi Siswa → Pelaksanaan.
3. **Pemantauan Kehadiran** → Input Kehadiran → Update Data.
4. **Evaluasi** → Input Hasil Tes → Generate Laporan → Feedback.
5. **Pelaporan Keuangan** → Input Pembayaran → Generate Laporan.

---

## **7. Implementasi Teknologi**

### **7.1. Konfigurasi Docker**

```yaml
services:
  db:
    image: mysql:latest
    container_name: mysql_container
    environment:
      MYSQL_ROOT_PASSWORD: root
      MYSQL_DATABASE: les_inggris
      MYSQL_USER: user
      MYSQL_PASSWORD: 123
    ports:
      - "3306:3306"
    volumes:
      - db_data:/var/lib/mysql

volumes:
  db_data:

---

# **8. Implementasi Fitur**

### **8.1. Pendaftaran Siswa**

```sql
CREATE TABLE Siswa (
    ID_Siswa INT PRIMARY KEY AUTO_INCREMENT,
    Nama VARCHAR(100),
    Kontak VARCHAR(20),
    Program_Les VARCHAR(50)
);
```


### **8.2. Manajemen Kelas**

```sql
CREATE TABLE Instruktur (
    ID_Instruktur INT PRIMARY KEY AUTO_INCREMENT,
    Nama VARCHAR(100),
    Keahlian VARCHAR(100)
);

CREATE TABLE Kelas (
    ID_Kelas INT PRIMARY KEY AUTO_INCREMENT,
    Nama_Kelas VARCHAR(100),
    Jadwal DATE,
    ID_Instruktur INT,
    FOREIGN KEY (ID_Instruktur) REFERENCES Instruktur(ID_Instruktur)
);
```


### **8.3. Evaluasi dan Pelaporan**

```sql
CREATE TABLE Evaluasi (
    ID_Evaluasi INT PRIMARY KEY AUTO_INCREMENT,
    ID_Siswa INT,
    Nilai INT,
    Feedback TEXT,
    FOREIGN KEY (ID_Siswa) REFERENCES Siswa(ID_Siswa)
);
```
### **8.4. Manajemen Keuangan**

```sql
CREATE TABLE Keuangan (
    ID_Keuangan INT PRIMARY KEY AUTO_INCREMENT,
    ID_Siswa INT,
    Jumlah DECIMAL(10,2),
    Status_Pembayaran VARCHAR(50),
    FOREIGN KEY (ID_Siswa) REFERENCES Siswa(ID_Siswa)
);
```

## **9. Diagram alir**

* **Implementasi:**

```
  @startuml
  start
    :Siswa mendaftar;
    :Admin memverifikasi data;
    if (Data valid?) then (Ya)
      :Simpan data ke database;
      :Berikan akses ke siswa;
    else (Tidak)
      :Tampilkan pesan error;
      stop
    endif
    :Admin membuat jadwal kelas;
    :Instruktur memantau kehadiran siswa;
    :Instruktur menginput hasil evaluasi;
    :Sistem menghasilkan laporan evaluasi;
    :Admin mencatat pembayaran;
    :Sistem menghasilkan laporan keuangan;
  stop
  @enduml
```

## **10. Diagram usecase**

* **Implementasi:**

```
@startuml
actor Siswa
actor Admin
actor Instruktur

rectangle "Sistem Manajemen Les Bahasa Inggris" {
  Siswa -- (Mendaftar ke Sistem)
  Siswa -- (Melihat Jadwal Kelas)
  Siswa -- (Mengakses Hasil Evaluasi)

  Admin -- (Memverifikasi Pendaftaran)
  Admin -- (Membuat Jadwal Kelas)
  Admin -- (Mengelola Keuangan)

  Instruktur -- (Memantau Kehadiran)
  Instruktur -- (Menginput Hasil Evaluasi)

  (Mengelola Keuangan) <-- Admin
  (Menghasilkan Laporan Evaluasi) <-- Instruktur
  (Menghasilkan Laporan Keuangan) <-- Admin
}

@enduml
```
## **11. Relasi Database**

![alt text](<Screenshot from 2025-01-31 23-23-41.png>)


