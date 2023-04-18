-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 18 Apr 2023 pada 00.58
-- Versi server: 5.7.39
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `revisi-api-kp-lptik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bimbingan`
--

CREATE TABLE `bimbingan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bimbingan`
--

INSERT INTO `bimbingan` (`id`, `nip`, `angkatan`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, '198201182008121002', '20', 'bimbingan pak jab akt 20', NULL, NULL),
(2, '198001102008121002', '20', 'bimbingan pak husnil akt', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pa` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`, `jenis_kelamin`, `alamat`, `email`, `no_hp`, `status_pa`, `created_at`, `updated_at`) VALUES
('198001102008121002', 'Fajril Akbar', 'laki-laki', 'Padang', 'ijab@email.com', '023785034', 1, NULL, NULL),
('198201182008121002', 'Husnil Kamil', 'laki-laki', 'Padang', 'husnilk@email.com', '03258903', 1, NULL, NULL),
('199208202019031005', 'Adi Arga Arifnur', 'laki-laki', 'Padang', 'adi@email.com', '086523468', 0, NULL, NULL),
('199308152022032017', 'Rahmatika Pratama Santi', 'perempuan', 'Padang', 'rahmatikaps@email.com', '0972532', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen_pengampu`
--

CREATE TABLE `dosen_pengampu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dosen_pengampu`
--

INSERT INTO `dosen_pengampu` (`id`, `nip`, `kelas_id`) VALUES
(1, '198201182008121002', '825ff885-dd34-11ed-a3fc-f0921c5d8f3e'),
(2, '198001102008121002', '825fdace-dd34-11ed-a3fc-f0921c5d8f3e'),
(3, '198201182008121002', '9a3a2f5b-dd36-11ed-a3fc-f0921c5d8f3e'),
(4, '198201182008121002', '9a3a4d58-dd36-11ed-a3fc-f0921c5d8f3e');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fakultas`
--

CREATE TABLE `fakultas` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `fakultas`
--

INSERT INTO `fakultas` (`uuid`, `nama`) VALUES
('020b313a-dd27-11ed-a3fc-f0921c5d8f3e', 'Kedokteran'),
('020b53c3-dd27-11ed-a3fc-f0921c5d8f3e', 'Teknik'),
('f61d8ba8-dd26-11ed-a3fc-f0921c5d8f3e', 'Teknologi Informasi'),
('f61dc0c7-dd26-11ed-a3fc-f0921c5d8f3e', 'Farmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periode_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_ruang` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_matkul` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari` enum('senin','selasa','rabu','kamis','jum''at') COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `nama_kelas` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `periode_id`, `kode_ruang`, `kode_matkul`, `hari`, `jam_mulai`, `jam_selesai`, `nama_kelas`, `created_at`, `updated_at`) VALUES
('56b375ce-dd35-11ed-a3fc-f0921c5d8f3e', 'df84b7e8-dd2e-11ed-a3fc-f0921c5d8f3e', 'H 2.3', 'JSI62136', 'jum\'at', '07:30:00', '09:10:00', 'bi A', NULL, NULL),
('56b3a4fb-dd35-11ed-a3fc-f0921c5d8f3e', 'df84b7e8-dd2e-11ed-a3fc-f0921c5d8f3e', 'H 2.8', 'JSI61130', 'jum\'at', '13:30:00', '15:40:00', 'sppsi A pak haris', NULL, NULL),
('825fdace-dd34-11ed-a3fc-f0921c5d8f3e', 'df84b7e8-dd2e-11ed-a3fc-f0921c5d8f3e', 'H 2.1', 'JSI62139', 'selasa', '07:30:00', '09:10:00', 'komp awan A', NULL, NULL),
('825ff885-dd34-11ed-a3fc-f0921c5d8f3e', 'df84b7e8-dd2e-11ed-a3fc-f0921c5d8f3e', 'H 2.2', 'JSI62120', 'senin', '13:30:00', '15:40:00', 'pbd a', NULL, NULL),
('9a3a2f5b-dd36-11ed-a3fc-f0921c5d8f3e', 'df84b7e8-dd2e-11ed-a3fc-f0921c5d8f3e', 'H 2.4', 'JSI62120', 'rabu', '10:10:00', '12:50:00', 'pbd b', NULL, NULL),
('9a3a4d58-dd36-11ed-a3fc-f0921c5d8f3e', 'df84b7e8-dd2e-11ed-a3fc-f0921c5d8f3e', 'H 2.5', 'JSI62125', 'kamis', '07:30:00', '10:00:00', 'pweb a', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mahasiswa` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_mhs` enum('aktif','nonaktif') COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_mahasiswa`, `jenis_kelamin`, `alamat`, `email`, `no_hp`, `status_mhs`, `prodi_id`, `created_at`, `updated_at`) VALUES
('2010311062', 'Sultan Rafli', 'laki-laki', 'padang', 'sultan@email.com', '0795357235', 'aktif', '79fb2ce5-dd27-11ed-a3fc-f0921c5d8f3e', NULL, NULL),
('2010892347', 'siti', 'perempuan', 'Padang', 'siti@email.com', '0970977', 'aktif', '3d20a7b6-dd27-11ed-a3fc-f0921c5d8f3e', NULL, NULL),
('2010952049', 'Amiral Fadhil', 'laki-laki', 'Padang', 'miral@email.com', '079548468', 'aktif', '6174c179-dd27-11ed-a3fc-f0921c5d8f3e', NULL, NULL),
('2011521017', 'Iqbal Fitrahul Ramadhan', 'laki-laki', 'Pariaman', 'iqbalfr@email.com', '097523934', 'aktif', '3d20a7b6-dd27-11ed-a3fc-f0921c5d8f3e', NULL, NULL),
('2011521024', 'Harriko Nur Harzeki', 'laki-laki', '50 kota', 'zeki@email.id', '08896869987', 'aktif', '3d20a7b6-dd27-11ed-a3fc-f0921c5d8f3e', NULL, NULL),
('2011522028', 'M. Hafiz Aulia R.', 'laki-laki', 'Agam', 'apis@email.com', '098098', 'aktif', '3d20a7b6-dd27-11ed-a3fc-f0921c5d8f3e', NULL, NULL),
('2011523019', 'Kemal Muhammad Hiero', 'laki-laki', 'Lubuk Minturun', 'kemal@email.com', '085155158625', 'aktif', '3d20a7b6-dd27-11ed-a3fc-f0921c5d8f3e', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa_bimbingan`
--

CREATE TABLE `mahasiswa_bimbingan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bimbingan_id` bigint(20) UNSIGNED NOT NULL,
  `nim_mhs` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mahasiswa_bimbingan`
--

INSERT INTO `mahasiswa_bimbingan` (`id`, `bimbingan_id`, `nim_mhs`) VALUES
(1, 2, '2011523019'),
(2, 2, '2011522028'),
(3, 1, '2011521024'),
(4, 1, '2011521017');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matkul`
--

CREATE TABLE `matkul` (
  `kode_matkul` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_matkul` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks_matkul` tinyint(3) NOT NULL,
  `jenis` enum('kuliah','kp','ta') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `matkul`
--

INSERT INTO `matkul` (`kode_matkul`, `nama_matkul`, `sks_matkul`, `jenis`, `created_at`, `updated_at`) VALUES
('JSI60142', 'Kerja Praktik/Magang', 2, 'kp', NULL, NULL),
('JSI61116', 'Pemograman Berorientasi Objek', 3, 'kuliah', NULL, NULL),
('JSI61130', 'Strategi Pengelolaan dan Perolehan Sistem Informasi', 3, 'kuliah', NULL, NULL),
('JSI61131', 'Pemograman Teknologi Bergerak', 3, 'kuliah', NULL, NULL),
('JSI62107', 'Interaksi Manusia dan Komputer', 3, 'kuliah', NULL, NULL),
('JSI62120', 'Perancangan Basis Data', 3, 'kuliah', NULL, NULL),
('JSI62125', 'Pemograman Web', 4, 'kuliah', NULL, NULL),
('JSI62136', 'Intelegensi Bisnis', 2, 'kuliah', NULL, NULL),
('JSI62139', 'Komputasi Awan', 2, 'kuliah', NULL, NULL),
('TSI101', 'Pengantar Sistem Informasi', 2, 'kuliah', NULL, NULL),
('TSI102', 'Struktur Data dan Algoritma', 2, 'kuliah', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_11_000002_create_fakultas_table', 1),
(6, '2023_01_11_000003_create_prodi_table', 1),
(7, '2023_01_11_000006_create_dosen_table', 1),
(8, '2023_01_11_000007_create_mahasiswa_table', 1),
(9, '2023_01_11_000021_create_bimbingan_table', 1),
(10, '2023_01_11_081850_create_mahasiswa_bimbingan_table', 1),
(11, '2023_01_11_081911_create_periode_table', 1),
(12, '2023_01_12_000004_create_matkul_table', 1),
(13, '2023_01_12_000005_create_ruang_table', 1),
(14, '2023_01_12_000007_create_kelas_table', 1),
(15, '2023_01_12_000008_create_studi_mhs_table', 1),
(16, '2023_01_12_000010_create_dosen_pengampu_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `periode`
--

CREATE TABLE `periode` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `periode`
--

INSERT INTO `periode` (`id`, `tahun`, `semester`) VALUES
('df84b7e8-dd2e-11ed-a3fc-f0921c5d8f3e', '2021', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 9223372036854775807, 'auth_token', '33899a7acfb5b7cc6d19d54c86bfb2750d0c9d211fd7e92f0f9c3c66e3f42ebf', '[\"*\"]', NULL, NULL, '2023-04-17 23:15:33', '2023-04-17 23:15:33'),
(2, 'App\\Models\\User', 9223372036854775807, 'auth_token', '9c4a9afd96584f0debd28c263b5b9dbd045a79a7e3be3131802ffa35962af860', '[\"*\"]', NULL, NULL, '2023-04-17 23:21:09', '2023-04-17 23:21:09'),
(3, 'App\\Models\\User', 9223372036854775807, 'auth_token', '5b164ed22cfeb37df36876ecd793429b57e0a2429e4af65e96911779877c5455', '[\"*\"]', NULL, NULL, '2023-04-17 23:41:08', '2023-04-17 23:41:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_jur` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenjang` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id`, `nama_jur`, `jenjang`, `fakultas_id`) VALUES
('3d20a7b6-dd27-11ed-a3fc-f0921c5d8f3e', 'Sistem Informasi', 'S1', 'f61d8ba8-dd26-11ed-a3fc-f0921c5d8f3e'),
('3d20e01d-dd27-11ed-a3fc-f0921c5d8f3e', 'Teknik Komputer', 'S1', 'f61d8ba8-dd26-11ed-a3fc-f0921c5d8f3e'),
('6174c179-dd27-11ed-a3fc-f0921c5d8f3e', 'Teknik Elektro', 'S1', '020b53c3-dd27-11ed-a3fc-f0921c5d8f3e'),
('6174e296-dd27-11ed-a3fc-f0921c5d8f3e', 'Teknik Lingkungan', 'S1', '020b53c3-dd27-11ed-a3fc-f0921c5d8f3e'),
('79fb2ce5-dd27-11ed-a3fc-f0921c5d8f3e', 'Pendidikan Dokter', 'Profesi', '020b313a-dd27-11ed-a3fc-f0921c5d8f3e');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang`
--

CREATE TABLE `ruang` (
  `kode_ruang` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_ruang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ruang`
--

INSERT INTO `ruang` (`kode_ruang`, `ket_ruang`) VALUES
('H 2.1', NULL),
('H 2.2', NULL),
('H 2.3', NULL),
('H 2.4', NULL),
('H 2.5', NULL),
('H 2.6', NULL),
('H 2.7', NULL),
('H 2.8', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `studi_mhs`
--

CREATE TABLE `studi_mhs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `semester_mhs` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('setuju','tdk_setuju') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `studi_mhs`
--

INSERT INTO `studi_mhs` (`id`, `nim`, `kelas_id`, `nilai`, `semester_mhs`, `status`, `created_at`, `updated_at`) VALUES
(1, '2011523019', '56b375ce-dd35-11ed-a3fc-f0921c5d8f3e', '', '5', 'setuju', '2023-04-17 15:52:08', '2023-04-17 15:52:08'),
(2, '2011523019', '9a3a4d58-dd36-11ed-a3fc-f0921c5d8f3e', '90', '4', 'setuju', '2023-04-17 15:52:08', '2023-04-17 15:52:08'),
(3, '2011521017', '9a3a4d58-dd36-11ed-a3fc-f0921c5d8f3e', '85', '4', 'setuju', '2023-04-17 15:58:39', '2023-04-17 15:58:39'),
(4, '2011521024', '9a3a4d58-dd36-11ed-a3fc-f0921c5d8f3e', '90', '5', 'setuju', '2023-04-17 15:58:39', '2023-04-17 15:58:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('d','m') COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `role`, `password`, `created_at`, `updated_at`) VALUES
('397e61fd-dd37-11ed-a3fc-f0921c5d8f3e', '198201182008121002', 'd', '$2y$10$liw.1m3aFJJ3zF792w14o./P2dwL.EhXKj4RcB79J0VMhO0e6W5Va', '2023-04-17 15:46:36', '2023-04-17 15:46:36'),
('398ce067-dd37-11ed-a3fc-f0921c5d8f3e', '198001102008121002', 'd', '$2y$10$l2NavJ3Y39ijYAlbdziImeQCCmQkNcfY9ICqCaeVefJsZvVlrjZca', '2023-04-17 15:46:36', '2023-04-17 15:46:36'),
('6d30767d-dd37-11ed-a3fc-f0921c5d8f3e', '2011521017', 'm', '$2y$10$wrFqYceakJ.AezokxOSMCO5ZliIAta5OQRAWfkFjIqNwka5GnORTG', '2023-04-17 15:48:02', '2023-04-17 15:48:02'),
('6d3e9ce5-dd37-11ed-a3fc-f0921c5d8f3e', '2011523019', 'm', '$2y$10$vchbwMXSdHjKpHd715q4n.QRKSglUIZUuj/mYG1vI9GgMdJmOLWjS', '2023-04-17 15:48:02', '2023-04-17 15:48:02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bimbingan`
--
ALTER TABLE `bimbingan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nip` (`nip`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `dosen_pengampu`
--
ALTER TABLE `dosen_pengampu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dosen_pengampu_kelas_id_foreign` (`kelas_id`),
  ADD KEY `nip` (`nip`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`uuid`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelas_periode_id_foreign` (`periode_id`),
  ADD KEY `kode_ruang` (`kode_ruang`,`kode_matkul`),
  ADD KEY `kode_matkul` (`kode_matkul`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `mahasiswa_prodi_id_foreign` (`prodi_id`);

--
-- Indeks untuk tabel `mahasiswa_bimbingan`
--
ALTER TABLE `mahasiswa_bimbingan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mahasiswa_bimbingan_bimbingan_id_foreign` (`bimbingan_id`),
  ADD KEY `nim_mhs` (`nim_mhs`);

--
-- Indeks untuk tabel `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`kode_matkul`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prodi_fakultas_id_foreign` (`fakultas_id`);

--
-- Indeks untuk tabel `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`kode_ruang`);

--
-- Indeks untuk tabel `studi_mhs`
--
ALTER TABLE `studi_mhs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `studi_mhs_kelas_id_foreign` (`kelas_id`),
  ADD KEY `nim` (`nim`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bimbingan`
--
ALTER TABLE `bimbingan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `dosen_pengampu`
--
ALTER TABLE `dosen_pengampu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa_bimbingan`
--
ALTER TABLE `mahasiswa_bimbingan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `studi_mhs`
--
ALTER TABLE `studi_mhs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bimbingan`
--
ALTER TABLE `bimbingan`
  ADD CONSTRAINT `bimbingan_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `dosen_pengampu`
--
ALTER TABLE `dosen_pengampu`
  ADD CONSTRAINT `dosen_pengampu_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`),
  ADD CONSTRAINT `dosen_pengampu_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`);

--
-- Ketidakleluasaan untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`kode_matkul`) REFERENCES `matkul` (`kode_matkul`) ON UPDATE CASCADE,
  ADD CONSTRAINT `kelas_ibfk_2` FOREIGN KEY (`kode_ruang`) REFERENCES `ruang` (`kode_ruang`) ON UPDATE CASCADE,
  ADD CONSTRAINT `kelas_periode_id_foreign` FOREIGN KEY (`periode_id`) REFERENCES `periode` (`id`);

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_prodi_id_foreign` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`);

--
-- Ketidakleluasaan untuk tabel `mahasiswa_bimbingan`
--
ALTER TABLE `mahasiswa_bimbingan`
  ADD CONSTRAINT `mahasiswa_bimbingan_bimbingan_id_foreign` FOREIGN KEY (`bimbingan_id`) REFERENCES `bimbingan` (`id`),
  ADD CONSTRAINT `mahasiswa_bimbingan_ibfk_1` FOREIGN KEY (`nim_mhs`) REFERENCES `mahasiswa` (`nim`);

--
-- Ketidakleluasaan untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD CONSTRAINT `prodi_fakultas_id_foreign` FOREIGN KEY (`fakultas_id`) REFERENCES `fakultas` (`uuid`);

--
-- Ketidakleluasaan untuk tabel `studi_mhs`
--
ALTER TABLE `studi_mhs`
  ADD CONSTRAINT `studi_mhs_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`),
  ADD CONSTRAINT `studi_mhs_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
