-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 29, 2024 at 05:45 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel18311`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Trào phúng, lãng mạn', '2024-05-16 18:03:56', '2024-05-16 18:03:56'),
(2, 'Bí ẩn, ly kỳ', '2024-05-16 18:03:56', '2024-05-16 18:03:56'),
(3, 'Tiểu thuyết', '2024-05-16 18:03:56', '2024-05-16 18:03:56'),
(4, 'Kinh dị', '2024-05-16 18:03:56', '2024-05-16 18:03:56'),
(5, 'Khoa học - Viễn tưởng', '2024-05-16 18:03:56', '2024-05-16 18:03:56'),
(6, 'Thiếu nhi', '2024-05-16 18:03:56', '2024-05-16 18:03:56'),
(7, 'Trinh thám', '2024-05-16 18:03:56', '2024-05-16 18:03:56'),
(8, 'Truyện ngắn - Hiện đại', '2024-05-16 18:03:56', '2024-05-16 18:03:56'),
(9, 'Văn học Việt Nam', '2024-05-16 18:03:56', '2024-05-16 18:03:56'),
(10, 'Văn học Kinh Điển', '2024-05-16 18:03:56', '2024-05-16 18:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(15, '2014_10_12_000000_create_users_table', 1),
(16, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(17, '2019_08_19_000000_create_failed_jobs_table', 1),
(18, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(19, '2024_05_16_235858_create_categories_table', 1),
(20, '2024_05_16_235947_create_products_table', 1),
(21, '2024_05_17_005651_create_carts_table', 1),
(22, '2024_05_17_005659_create_orders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` decimal(13,2) NOT NULL DEFAULT '0.00',
  `image` varchar(355) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sold` bigint UNSIGNED NOT NULL DEFAULT '0',
  `view` bigint UNSIGNED NOT NULL DEFAULT '0',
  `quantity` int DEFAULT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `sold`, `view`, `quantity`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 'Very Nice', 'Dolorem eos praesentium sit maiores.', '299000.00', 'best_selling2.jpg', 6, 100, 12, 1, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(3, 'Moon Dance', 'Accusantium voluptates possimus modi eum ratione soluta temporibus necessitatibus.', '389000.00', 'best_selling1.jpg', 47, 51, 25, 1, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(4, 'Queen Bee', 'Aspernatur sed voluptas qui quasi dolores itaque.', '349000.00', 'best_selling4.jpg', 27, 27, 90, 2, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(5, 'Rừng Na Uy - Murakami', 'Hic ea non asperiores quo ipsam veritatis laborum.', '419000.00', 'rung-na-uy.jpg', 60, 84, 74, 6, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(6, 'Hoàng Tử Bé Saint-Exupéry', 'Ea nemo ipsa dolor.', '369000.00', 'hoang-tu-be.jpg', 60, 87, 22, 8, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(7, 'Bà Ngoại Tôi Gửi Lời Xin Lỗi', 'Aut occaecati minus voluptas.', '599000.00', 'ba-ngoai-toi-gui-loi-xin-loi.jpg', 52, 37, 16, 3, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(8, 'Chuyện kỳ Lạ Ở Tiệm Sách Cũ', 'Quam consequatur hic et.', '418000.00', 'chuyen-ky-la-o-tiem-sach-cu-tanabe.jpg', 1, 30, 41, 7, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(9, 'Bí Mật Của Naoko', 'Eius laudantium illo perspiciatis provident.', '319000.00', 'bi-mat-cua-naoko.jpg', 9, 65, 63, 2, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(10, 'Hoa Mộng Ảo - Keigo', 'Eum et magni possimus voluptas repellendus ut error.', '449000.00', 'hoa-mong-ao.jpg', 61, 40, 80, 7, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(11, 'Thiên Nga Và Dơi', 'Voluptates veniam alias sed quasi ipsam.', '693000.00', 'thien-nga-va-doi.jpg', 50, 56, 95, 7, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(12, 'Thảm Án Lúc Nửa Đêm', 'Harum sapiente velit molestiae et quia dolorem nemo quo.', '490000.00', 'tham-an.jpg', 53, 34, 22, 4, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(13, 'Điểm Dối Lừa - Dan Brown', 'Magni nemo modi omnis voluptatum et quia sunt.', '480000.00', 'diem-doi-lua.jpg', 33, 3, 29, 2, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(14, 'Ngôi Thứ Nhất Số Ít', 'Aliquid repellendus rem quae.', '289000.00', 'ngoi-thu-nhat-so-it-315981.jpg', 45, 44, 35, 8, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(15, 'Những Người Hàng Xóm', 'Similique nam hic non distinctio quia.', '279000.00', 'nhung-nguoi-hang-xom.jpg', 84, 77, 41, 1, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(16, 'Làm Bạn Với Bầu Trời', 'Dicta soluta sapiente quia doloremque.', '599000.00', 'lam-ban-voi-bau-troi.jpg', 95, 76, 17, 3, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(17, 'Những Kẻ Bày Mưu', 'Perferendis maiores commodi labore minus laboriosam quaerat quas quas.', '479000.00', 'nhung-ke-bay-muu.jpg', 45, 35, 93, 7, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(18, 'Ngôi Nhà Kỳ Quái', 'Ducimus aliquid exercitationem provident odio at.', '490000.00', 'ngoi-nha-ky-quai.jpg', 4, 57, 63, 4, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(19, 'Quái Vật Trong Quán Đồ Nướng', 'Eveniet odit eius et.', '599000.00', 'quai-vat-trong-quan-do-nuong.jpg', 40, 48, 19, 7, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(20, 'Đêm Trường Tâm Tối', 'Amet maiores dolorem dicta.', '499000.00', 'dem-truong-tam-toi.jpg', 77, 85, 43, 7, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(21, 'Người Đài Bắc (Bìa Cứng)', 'Pariatur nam nulla et nemo qui.', '389000.00', 'nguoi-dai-bac.jpg', 53, 40, 35, 8, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(22, 'Những Người Đàn Ông', 'Officia inventore et corporis excepturi.', '999000.00', 'nhung-nguoi-dan-ong-khong-co-dan-ba.jpg', 99, 87, 41, 8, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(23, 'Những Người Đẹp Say Ngủ', 'Ullam et magnam cum ut consequatur a.', '490000.00', 'nhung-nguoi-dep-say-ngu.jpg', 82, 30, 18, 8, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(24, 'Làm Đĩ - Vũ Trọng Phụng', 'Laborum et dolorem ea aut excepturi sed minus.', '999999.00', 'lam-di.jpg', 28, 19, 17, 1, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(25, 'Đất Rừng Phương Nam', 'Quo corporis consequuntur quibusdam iusto praesentium blanditiis dolor.', '439000.00', 'dat-rung-phuong-nam.jpg', 3, 42, 49, 9, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(26, 'Những Ngã Tư Và Những Cột Đèn', 'Culpa iure dolores velit magnam.', '390000.00', 'nhung-nga-tu.jpg', 36, 4, 72, 9, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(27, 'Đẹp Là Một Nỗi Đau', 'Et velit adipisci nostrum.', '299000.00', 'dep.jpg', 41, 79, 61, 3, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(28, 'Kiếp Người - Vĩnh Cửu Vô Thường', 'Eos nesciunt vitae sed magni sapiente tempore.', '390000.00', 'kiep-nguoi.jpg', 55, 93, 9, 9, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(29, 'Ngày Cuối Cùng Của Người Bị Kết Án', 'Dolore sed blanditiis asperiores est voluptas consequatur maxime.', '456000.00', 'ngay-cuoi-cung.jpg', 96, 15, 89, 8, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(30, 'Những Người Khốn Khổ', 'Sit at nemo perspiciatis in et est ullam.', '980000.00', 'nhung-nguoi-khon-kho.jpg', 51, 65, 67, 10, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(31, 'Nhà Thờ Đức bà Paris', 'Ut nam illum quos incidunt fugiat.', '490000.00', 'nha-tho-duc-ba-paris.jpg', 88, 68, 27, 10, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(32, 'Đứa Con Gái Hoang Đàng', 'Placeat assumenda et maiores fugit harum aut quae error.', '299000.00', 'dua-con-gai-hoang-dang.jpg', 21, 56, 15, 10, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(33, 'Biên Niên Ký Sao Hỏa', 'Ratione a eum blanditiis quo.', '234000.00', 'bien-nien-ky-sao-hoa.jpg', 81, 80, 59, 5, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(34, 'Tiệm Tạp Hóa Tuổi Thơ', 'Facere aliquid reprehenderit assumenda.', '456000.00', 'tiem-tap-hoa-tuoi-tho.jpg', 2, 10, 32, 9, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(35, 'Người Đọc Suy Nghĩ Của Ác Quỷ', 'Quia ratione explicabo quis doloremque culpa assumenda.', '435000.00', 'nguoi-doc-suy-nghi.jpg', 50, 74, 78, 4, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(36, 'Ký Ức Vĩnh Cửu', 'Mollitia labore est id.', '478000.00', 'ky-uc-vinh-cuu.jpg', 77, 46, 25, 3, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(37, 'Sự Im Lặng Của Bầy Cừu', 'Repudiandae rerum tempore vero dolor.', '689000.00', 'su-im-lang-cua-bay-cuu.jpg', 92, 87, 24, 7, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(38, 'Khi Nhìn Chằm Chằm Vực Thẳm', 'Dolores exercitationem sed optio voluptatem commodi quam.', '412000.00', 'khi-nhin-cham-cham.jpg', 1, 46, 41, 7, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(39, 'Bí Ẩn Phố Âm Dương', 'Sed ab quas voluptatem quo quae nisi.', '543000.00', 'bi-an-pho-am-duong.jpg', 33, 34, 70, 4, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(40, 'Đề Thi Đẫm Máu', 'Repudiandae mollitia iusto aut impedit.', '632000.00', 'de-thi-dam-mau.jpg', 50, 65, 76, 7, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(41, 'Trong Chúng Tôi Có Kẻ Nói Dối', 'Sed consequatur id ea facere itaque eveniet.', '546000.00', 'trong-chung-toi.jpg', 40, 100, 31, 7, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(42, 'Nhân Chứng Cuối Cùng', 'Voluptas adipisci cumque ipsum enim animi voluptatem.', '478000.00', 'nhan-chung-cuoi-cung.jpg', 8, 57, 98, 7, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(43, 'Người Chết Biết Điều Gì', 'Eligendi dolor autem quia quis dolor qui aut.', '689000.00', 'nguoi-chet-biet-dieu-gi.jpg', 26, 82, 77, 4, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(44, 'Vườn Bướm Đêm - Dot Hutchison', 'Dolorem ea doloremque inventore earum cumque aut.', '435000.00', 'vuon-buom-dem.jpg', 2, 28, 93, 7, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(45, 'Hoa Súng Đen - Michel Bussi', 'Odit consequatur quia delectus.', '654000.00', 'hoa-sung-den.jpg', 5, 10, 95, 7, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(46, 'Kẻ Sát Nhân Mộng Du', 'Sit ipsum aut voluptatem molestias fuga et.', '765000.00', 'ke-sat-nhan-mong-du.jpg', 99, 91, 87, 7, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(47, 'Ngôi Làng Cổ Mộ', 'Ea commodi ex nobis facere quia aut.', '467000.00', 'ngoi-lang-co-mo.jpg', 94, 49, 17, 9, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(48, 'Con Thú Mù - Edogawa Ranpo', 'Sit rerum cupiditate molestias asperiores.', '789000.00', 'con-thu-mu.jpg', 3, 66, 67, 8, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(49, 'Ma Thuật Bị Cấm', 'Ut modi reiciendis vitae officiis error iusto.', '521000.00', 'ma-thuat.jpg', 71, 20, 9, 7, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(50, 'Trả Giá - Ioka Shun', 'Esse consequatur explicabo animi cum repudiandae numquam.', '567000.00', 'tra-gia.jpg', 33, 67, 86, 7, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(51, 'Dưới Cánh Của Thầm Thì', 'Cumque omnis optio qui adipisci ut veniam officia.', '612000.00', 'duoi-canh-cua.jpg', 55, 53, 52, 3, '2024-05-16 18:04:08', '2024-05-16 18:04:08'),
(54, 'sản phẩm thứ 7', NULL, '10000000.00', '1717750265.jpg', 0, 0, NULL, 1, '2024-06-07 01:51:05', '2024-06-07 01:51:05'),
(56, 'áo sơ mi', 'AO SO MI DEP LAM', '150000.00', '1718177587.jpg', 0, 0, 3456, 6, '2024-06-07 01:56:13', '2024-06-12 00:33:07'),
(65, 'bài thi', 'bài thi cần được search gg', '120000.00', '1718177397.jpg', 0, 0, 1, 4, '2024-06-10 01:14:36', '2024-06-12 00:29:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ngoan', 'minhngoan@gmail.com', NULL, '$2y$12$OE5JQlYOXy88QviKPGBVBO1Q7IsUtw.Ra98q7swoYeeM9KycrfL8a', NULL, '2024-06-12 01:54:43', '2024-06-12 01:54:43'),
(2, 'ngoan', 'minhngoan1010@gmail.com', NULL, '$2y$12$6H3vbTRSdRUi.9mxtM/c.Ob7G0R6/nf4L68MPG9YPEpQsDcIB41ES', NULL, '2024-06-12 01:56:02', '2024-06-12 01:56:02'),
(3, 'nghia', 'nghia@gmail.com', NULL, '$2y$12$YazOeQ42ZHURi5gtooObReCDuhid0MkGlNqZ5.ZPpF0nuvVisW/LC', NULL, '2024-06-12 02:06:32', '2024-06-12 02:06:32'),
(4, 'ho', 'hot@gmail.com', NULL, '$2y$12$0aRuHSg7XGCN2Tz2ARW8ieeeTiwjTmev.DV18Pdv0FoOKZqXidcti', NULL, '2024-06-12 02:10:41', '2024-06-12 02:10:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
