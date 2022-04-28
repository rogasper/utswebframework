-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Apr 2022 pada 08.18
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utswf`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `drivers`
--

CREATE TABLE `drivers` (
  `id` int(5) UNSIGNED NOT NULL,
  `tipe_driver` varchar(100) NOT NULL,
  `nama_driver` varchar(255) NOT NULL,
  `informasi_tambahan` text NOT NULL,
  `versi_driver` varchar(255) NOT NULL,
  `link_download` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `drivers`
--

INSERT INTO `drivers` (`id`, `tipe_driver`, `nama_driver`, `informasi_tambahan`, `versi_driver`, `link_download`, `created_at`, `updated_at`) VALUES
(1, 'Game Ready Driver', 'GEFORCE GAME READY DRIVER - WHQL', 'Effective October 2021, Game Ready Driver upgrades, including performance enhancements, new features, and bug fixes, will be available for systems utilizing Maxwell, Pascal, Turing, and Ampere-series GPUs. Critical security updates will be available on systems utilizing desktop Kepler-series GPUs through September 2024. A complete list of desktop Kepler-series GeForce GPUs can be found here', '512.59 - WHQL', 'https://us.download.nvidia.com/Windows/512.59/512.59-notebook-win10-win11-64bit-international-dch-whql.exe', '2022-04-28 10:15:33', '2022-04-28 10:15:33'),
(2, 'Studio Driver', 'NVIDIA STUDIO DRIVER - WHQL', 'Exceptions:\r\n\r\nNotebooks supporting Hybrid Power technology are not supported (NVIDIA Optimus technology is supported).\r\nThe following Sony VAIO notebooks are included in the Verde notebook program: Sony VAIO F Series with NVIDIA GeForce 310M, GeForce GT 330M, GeForce GT 425M, GeForce GT 520M or GeForce GT 540M. Other Sony VAIO notebooks are not included (please contact Sony for driver support).\r\nFujitsu notebooks are not included (Fujitsu Siemens notebooks are included).', '512.59 - WHQL', 'https://us.download.nvidia.com/Windows/512.59/512.59-notebook-win10-win11-64bit-international-nsd-dch-whql.exe', '2022-04-28 10:15:33', '2022-04-28 10:15:33'),
(3, 'Game Ready Driver', 'NVIDIA RTX / QUADRO DESKTOP AND NOTEBOOK DRIVER', 'Release 510 is the latest Production Branch release of the NVIDIA RTX Enterprise Driver. This new driver provides improvements over the previous branch in the areas of application performance, API interoperability (e.g., OpenCL/Vulkan), and application power management.\r\n\r\nProduction Branch drivers are designed and tested to provide long-term stability and availability, making these drivers ideal for enterprise customers and other users who require application and hardware certification from ISVs and OEMs respectively.\r\n\r\nThe Production Branch driver is a superset of the NVIDIA Studio Driver and provides all the benefits of the Studio Driver of the same version, in addition to NVIDIA RTX-specific enhancements and testing.', 'R510 U5 (512.59)', 'https://www.nvidia.com/content/DriverDownload-March2009/confirmation.php?url=/Windows/Quadro_Certified/512.59/512.59-quadro-rtx-desktop-notebook-win10-win11-64bit-international-dch-whql.exe&lang=us&type=Quadro', '2022-04-28 12:07:37', '2022-04-28 12:07:37'),
(4, 'DATA CENTER', 'DATA CENTER DRIVER FOR WINDOWS', 'Please go to main driver page find latest NVIDIA drivers for Tesla data center GPUs.', '511.65', 'https://www.nvidia.com/content/DriverDownload-March2009/confirmation.php?url=/tesla/511.65/511.65-data-center-tesla-desktop-win10-win11-64bit-dch-international.exe&lang=us&type=Tesla', '2022-04-28 12:07:37', '2022-04-28 12:07:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-04-28-012413', 'App\\Database\\Migrations\\CreateProducts', 'default', 'App', 1651113404, 1),
(2, '2022-04-28-012421', 'App\\Database\\Migrations\\CreateDrivers', 'default', 'App', 1651113404, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(5) UNSIGNED NOT NULL,
  `tipe_produk` varchar(100) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `fitur_produk` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `foto_produk` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `tipe_produk`, `nama_produk`, `deskripsi_produk`, `fitur_produk`, `harga`, `foto_produk`, `created_at`, `updated_at`) VALUES
(1, 'Graphic Card', 'GEFORCE RTX 3090 Ti', 'The GeForce RTX™ 3090 Ti and 3090 are big ferocious GPUs (BFGPUs) with TITAN class performance. Powered by Ampere—NVIDIA’s 2nd gen RTX architecture—they double down on ray tracing and AI performance with enhanced Ray Tracing Cores, Tensor Cores, and new streaming multiprocessors. Plus, they feature a staggering 24 GB of G6X memory, all to deliver the ultimate experience for gamers and creators.', 'Ray Tracing, 8K HDR Gaming, THE WORLD’S\r\nFASTEST GPUs, MOST REALISTIC &\r\nIMMERSIVE GRAPHICS', 250000, 'https://images.nvidia.com/aem-dam/Solutions/ampere/3090ti-gallery/geforce-rtx-3090-ti-product-gallery-full-screen-3840-1.jpg', '2022-04-28 10:11:17', '2022-04-28 10:11:17'),
(2, 'Graphic Card', 'GEFORCE RTX 3080 Ti', 'The GeForce RTX™ 3080 Ti and RTX 3080 graphics cards deliver the ultra performance that gamers crave, powered by Ampere—NVIDIA’s 2nd gen RTX architecture. They are built with enhanced RT Cores and Tensor Cores, new streaming multiprocessors, and superfast G6X memory for an amazing gaming experience.', 'INNOVATIVE DESIGN, GET FASTER PERFORMANCE WITH NVIDIA DLSS, Ray Tracing, VICTORY MEASURED IN MILLISECONDS', 750000, 'https://www.nvidia.com/content/dam/en-zz/Solutions/geforce/ampere/rtx-3080-3080ti/geforce-rtx-3080-ti-product-gallery-inline-850-3.jpg', '2022-04-28 10:11:17', '2022-04-28 10:11:17'),
(3, 'Graphic Card', 'GEFORCE GTX 1660 Ti', 'Specification: Graphics Processing GeForce® GTX 1660 Ti Core Clock 1800 MHz (Reference card is 1770 MHz) CUDA® Cores 1536 Memory Clock 12000 MHz Memory Size 6 GB Memory Type GDDR6 Memory Bus 192 bit Memory Bandwidth (GB/sec) 288 GB/s Card Bus PCI-E 3.0 x 16 Digital max resolution 7680x4320@60Hz Multi-view 4 Card size', 'Digital max resolution 7680x4320@60Hz Multi-view 4 Card size L=225.65 W=122.02 H=40.5 mm PCB Form ATX DirectX 12 OpenGL 4.5 Recommended PSU 450W Power Connectors 8 Pin*1 Output DisplayPort 1.4 *3 (Max Resolution: 4096x2160 @60 Hz) HDMI 2.0b *1 (Max Resolu', 5650000, 'https://images.tokopedia.net/img/cache/500-square/product-1/2019/2/28/21373708/21373708_2a8208ca-114e-4834-bc8c-d7c41f4159fd_800_800.jpg', '2022-04-28 12:51:36', '2022-04-28 12:51:36'),
(4, 'Graphic Card', 'GEFORCE GTX1650', 'Features\r\nPowered by GeForce® GTX 1650\r\nNVIDIA Turing™ architecture and GeForce Experience™\r\nIntegrated with 4GB GDDR5 128-bit memory interface', 'Powered by GeForce® GTX 1650\r\nNVIDIA Turing™ architecture and GeForce Experience™\r\nIntegrated with 4GB GDDR5 128-bit memory interface\r\nWINDFORCE 2X Cooling System with alternate spinning fans\r\n80 mm unique blade fan\r\n\r\nCore Clock\r\n1710 MHz (Reference card', 3880000, 'https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/3/10/6857c623-0f54-443d-8edb-180a88d4c166.jpg', '2022-04-28 12:51:36', '2022-04-28 12:51:36'),
(5, 'Graphic Card', 'GEFORCE RTX 3050', 'The GeForce RTX™ 3050 is built with the powerful graphics performance of the NVIDIA Ampere architecture. It offers dedicated 2nd gen RT Cores and 3rd gen Tensor Cores, new streaming multiprocessors, and high-speed G6 memory to tackle the latest games. Step up to GeForce RTX.', 'BUILT FOR LIVE STREAMING, YOUR AI-POWERED HOME STUDIO', 50000000, 'https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/1/28/278bec94-cf24-40dd-8bc1-4b730c754bbc.jpg', '2022-04-28 12:51:36', '2022-04-28 12:51:36'),
(6, 'Laptop', 'Acer Nitro 5', 'The Ultimate Play GeForce RTX 30 Series Laptop dengan Ray Tracing dan NVIDIA DLSS', 'Graphics : NVIDIA® GeForce® RTX 3060 with 6GB\r\nProcessor : Intel® Core™ i9-11900H processor (24MB cache, up to 4.9Ghz)\r\nOperating System : Windows 11 Home + Microsoft Office Home and Student 2021\r\nMemory : 1*16GB DDR4\r\nStorage : 512GB SSD NVMe\r\nDisplay :1', 19149000, 'https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/2/1/03b3dcc6-0197-4d2c-88d6-7317a277407a.png', '2022-04-28 12:51:36', '2022-04-28 12:54:47');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
