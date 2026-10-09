# TugasWeb-P10-BlogCRUD

Aplikasi Blog CRUD sederhana menggunakan Laravel.
Tugas Rutin 10 mata kuliah Pemrograman Web.

## Fitur

### Requirements
1. `Route::resource('posts')` dengan named routes
2. `PostController` resource (7 method)
3. Blade layout master (`@extends` / `@yield`)
4. 2 Blade component: Alert dan Card
5. Validasi dengan pesan error per field dan old input
6. Flash message sukses/gagal
7. `@csrf` di semua form, `@method('PUT')` / `@method('DELETE')`
8. Route Model Binding dan pagination

### Bonus
- Pencarian post berdasarkan judul
- Soft delete
- Upload gambar

## Teknologi
- Laravel
- Bootstrap 5 (CDN)
- SQLite

## Cara Menjalankan
1. `composer install`
2. `copy .env.example .env`
3. `php artisan key:generate`
4. `php artisan migrate --seed`
5. `php artisan storage:link`
6. `php artisan serve`
7. Buka `http://127.0.0.1:8000`

Data awal dibuat lewat seeder (`DatabaseSeeder`).
