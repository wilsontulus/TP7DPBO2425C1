# Tugas Praktikum DPBO #7

Dibuat untuk menyelesaikan TP7 Desain Pemrograman Berorientasi Objek (DPBO)

## Janji

Saya Willsoon Tulus Parluhutan Simanjuntak dengan NIM 2404756 mengerjakan evaluasi Tugas Praktikum 7 dalam mata kuliah Desain Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. 

Aamiin.

## Desain program

### Diagram UML:

![UML Diagram](Dokumentasi/uml_diagram.svg)

### Deskripsi desain basis data:

- Tabel `members` menampung data para member perpustakaan yang berupa ID member, nama, email, dan nomor telepon. Tiap member bisa memiliki lebih dari 1 pinjaman buku.
- Tabel `loans` menampung data pinjaman buku yang terkait dengan masing-masing satu member dan satu buku, yang memiliki data berupa ID pinjaman, ID buku, ID member, tanggal pinjaman, dan tanggal pengembalian. Tiap sesi pinjaman hanya dapat terhubung kepada satu buku dan satu member.
- Tabel `books` menampung data buku yang tersedia dalam perpustakaan, yang memiliki data berupa ID buku, judul, penulis, ISBN, ID genre, dan jumlah stok buku. Tiap buku hanya dapat memiliki satu genre.
- Tabel `genres` menampung data genre yang dikenal, terdiri dari ID genre dan nama genre masing-masing. Tiap genre dapat digunakan oleh lebih dari 1 buku.

## Alur jalan program

Program ini menyediakan antarmuka berupa webpage yang bisa dibuka oleh user (misal: admin perpustakaan) untuk mengelola stok buku perpustakaan, member perpustakaan, dan pinjaman buku.

Program ini memiliki fungsi CRUD untuk buku, member, dan pinjaman buku, sehingga pengelola perpustakaan dapat mengelola data-data tersebut dengan fleksibel. Pengelola dapat melakukan penambahan, perubahan, maupun penghapusan data buku serta data member. 

Untuk data pinjaman, pengguna dapat mengajukan pinjaman buku, serta melakukan pengembalian buku. Data akan selalu dicatat dan tidak dapat dihapus dari antarmuka webpage.

## Preview operasional program

![Preview](Dokumentasi/preview.mp4)

