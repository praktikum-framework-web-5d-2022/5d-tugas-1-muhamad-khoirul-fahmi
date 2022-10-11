<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/dosen');

Route::get('/dosen', function () {
  $arrDosen = [
    "Abdul Yusuf, S.E., M.M",
    "Ajat Sudrajat , SE., MM",
    "Angga Sanita Putra, SE.,MM",
    "Anggi Pasca Arnu, SE., MM",
    "Annisa Aghniya Rahma, ST., M.M",
    "Arif Fadilla, SE., MT.",
    "Asep Maulana, SE., MM",
    "Dadan Ahmad Fadili, Drs.,MM",
    "Danang Kusnanto, SE.,MM",
    "Dr. Achmad Suherman, Drs., M.Pd"
  ];
  return view('dosen', [
    'dosen' => $arrDosen,
    'title' => 'Dosen'
  ]);
});

Route::get('/mahasiswa', function () {
  $arrMahasiswa = [
    "Muhamad Khoirul Fahmi",
    "Aliyyu Gani",
    "Muhamad Fauzan Bakhtiar",
    "Linda Amalia",
    "Andri Al Fauzi",
    "Cika Permata",
    "Budi Herlambang",
    "Lili Lestari",
    "Rudi Heryanto",
    "Bambang Wijaya"
  ];
  return view('dosen', [
    'dosen' => $arrMahasiswa,
    'title' => 'Mahasiswa'
  ]);
});

Route::get('/matakuliah', function () {
  $arrMatkul = [
    "Matematika Ekonomi",
    "Ekonomi Manajerial",
    "Kewirausahaan dan Program Kreativitas Mahasiswa",
    "Hukum dan Etika Bisnis",
    "Manajemen Keuangan",
    "Analisis Data Bisnis",
    "Penyajian Laporan Analisis Data Bisnis",
    "Akuntansi Dalam Pengambilan Keputusan Manajemen",
    "Hukum dan Etika Bisnis",
    "Manajemen Event"
  ];
  return view('dosen', [
    'dosen' => $arrMatkul,
    'title' => 'Mata Kuliah'
  ]);
});
