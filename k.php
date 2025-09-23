1. Excel cocok untuk data kecil dan analisis sederhana. Kelemahannya: rawan error kalau data besar, sulit multiuser (dipakai banyak orang bareng), tidak ada sistem keamanan khusus.

Sedangkan MySQL lebih efisien untuk data besar, bisa diakses banyak user, ada fitur query (SQL), relasi antar tabel, backup, serta keamanan data (hak akses, user).

Jadi MySQL lebih efisien karena scalable, terstruktur, dan mendukung banyak pengguna dalam waktu bersamaan.

2. SELECT nama 
FROM siswa 
WHERE kelas = 'X IPA 1';

3. Login ke MySQL (misalnya lewat XAMPP / phpMyAdmin)

Buat database:
CREATE DATABASE sekolah;

Gunakan database:
USE sekolah;

Buat tabel siswa:
CREATE TABLE siswa (
    id_siswa INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(100),
            kelas VARCHAR(50),
                tanggal_lahir DATE
                );


4. Data yang perlu dicatat agar database dapat membantu guru:
- id_siswa
- nama
- kelas
- tanggal lahir
- mata_pelajaran
- nilai
- alamat
- nomor hp
- nama orang tua
- status aktif

Semakin lengkap datanya, semakin mudah guru melakukan pencarian, laporan, dan analisis.

6. Database sangat penting untuk membuat aplikasi web sekolah karena ini membuat web lebih terstruktur, aman, mudah mencari data, dan juga efisien.

Jika tidak menggunakan database, data siswa, guru, dan nilai harus disimpan secara manual. Kalau manual, ini rentan hilang, dan juga mengelolanya tidak efisien dan tidak cepat mencari data.

5. CREATE TABLE guru (
        id_guru INT AUTO_INCREMENT PRIMARY KEY,
            nama_guru VARCHAR(100),
                mata_pelajaran VARCHAR(50)
                );
)
Daftar Materi:
1. excel → Excel vs MySQL
2. ipa → SQL SELECT x ipa 1
3. step → langkah 1.login sql
4. dataguru → data yg bantu guru
5. createguru → desain tabel mapel
6. db → pentingnya database untuk aplikasi sekolah
7. komponen → komponen DBMS (DDL, DML, DCL, engine)
8. peran → peran DBMS
9. createbuku → SQL CREATE TABLE buku
10. peminjaman → SQL CREATE TABLE peminjaman dengan foreign key

6. Database sangat penting untuk membuat aplikasi web sekolah karena ini membuat web lebih terstruktur, aman, mudah mencari data, dan juga efisien.

Jika tidak menggunakan database, data siswa, guru, dan nilai harus disimpan secara manual. Kalau manual, ini rentan hilang, dan juga mengelolanya tidak efisien dan tidak cepat mencari data.

7. Komponen DBMS:
- Data Definition Language (DDL) → untuk membuat dan mengubah struktur database.
- Data Manipulation Language (DML) → untuk mengelola data (insert, update, delete).
- Data Control Language (DCL) → untuk mengatur hak akses dan izin user.
- Database Engine → bagian inti yang mengatur penyimpanan, pengambilan, dan keamanan data.

8. Peran DBMS:
- Bisa mengatur hak akses (misalnya admin sekolah bisa tambah data, guru hanya bisa lihat nilai).
- Menyediakan backup & recovery supaya data tidak hilang.
- Membuat data lebih terorganisir & konsisten, sehingga laporan lebih cepat.

9. CREATE TABLE buku (
        id_buku INT AUTO_INCREMENT PRIMARY KEY,
            judul VARCHAR(150),
                pengarang VARCHAR(100)
                );
)
10. CREATE TABLE peminjaman (
        id_pinjam INT AUTO_INCREMENT PRIMARY KEY,
            id_buku INT,
                id_anggota INT,
                    tgl_pinjam DATE,
                        tgl_kembali DATE,
                            FOREIGN KEY (id_buku) REFERENCES buku (id_buku),
                                FOREIGN KEY (id_anggota) REFERENCES anggota (id_anggota)
                                );
)