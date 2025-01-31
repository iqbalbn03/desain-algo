
# **Analisis Sistem Manajemen Les Bahasa Inggris Berbasis Laravel, Docker, dan MySQL Dengan Metode 5W1H**

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
version: '3.8'
services:
  app:
    build: .
    container_name: laravel_app
    volumes:
      - .:/var/www/html
    depends_on:
      - db
  db:
    image: mysql:8
    container_name: mysql_db
    environment:
      MYSQL_ROOT_PASSWORD: root
      MYSQL_DATABASE: les_bahasa
      MYSQL_USER: user
      MYSQL_PASSWORD: password
    ports:
      - "3306:3306"
```

---

## **8. Implementasi Fitur**

### **8.1. Pendaftaran Siswa**

* **Fitur:**
  * Form pendaftaran siswa baru.
* **Implementasi:**
  ```sql
  CREATE TABLE Siswa (
      ID_Siswa INT PRIMARY KEY AUTO_INCREMENT,
      Nama VARCHAR(100),
      Kontak VARCHAR(20),
      Program_Les VARCHAR(50)
  );
  ```

### **8.2. Manajemen Kelas**

* **Fitur:**
  * Input jadwal kelas dan instruktur.
* **Implementasi:**
  ```sql
  CREATE TABLE Kelas (
      ID_Kelas INT PRIMARY KEY AUTO_INCREMENT,
      Nama_Kelas VARCHAR(100),
      Jadwal DATE,
      ID_Instruktur INT,
      FOREIGN KEY (ID_Instruktur) REFERENCES Instruktur(ID_Instruktur)
  );
  ```

### **8.3. Evaluasi dan Pelaporan**

* **Fitur:**
  * Input nilai dan feedback.
* **Implementasi:**
  ```sql
  CREATE TABLE Evaluasi (
      ID_Evaluasi INT PRIMARY KEY AUTO_INCREMENT,
      ID_Siswa INT,
      Nilai INT,
      Feedback TEXT,
      FOREIGN KEY (ID_Siswa) REFERENCES Siswa(ID_Siswa)
  );
  ```
