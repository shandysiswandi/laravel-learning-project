# Laravel Learning Project

ini ada repo kumpulan belajar laravel.
ganti `branch` untuk melihat project.

## Laravel Telescope

package ini biasanya digunakan untuk melihat semua proses aplikasi yang sedang di development,
tidak menutup kemungkinan package ini juga bisa dijalankan di production tergantung developernya.

-   untuk mengganti tema jadi gelap
    -   pergi ke `app\Providers\TelescopeServiceProvider`
    -   lalu tambah code ini `Telescope::night();` di dalam fungsi `register()`, paling atas
-   Route telescope default
    -   http://localhost:8000/telescope
-   ling dokumentasi
    -   https://laravel.com/docs/7.x/telescope
