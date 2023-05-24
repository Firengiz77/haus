-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 24, 2023 at 10:23 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `haus`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `desc`, `image`, `created_at`, `updated_at`) VALUES
(1, '{\"az\":\"<p>Salam salma salam salam salsamSalam salma salam salam salsamSalam salma salam salam salsamSalam salma salam salam salsamSalam salma salam salam salsamSalam salma salam salam salsamSalam salma salam salam salsamSalam salma salam salam salsam<\\/p>\",\"en\":\"<p>Welcome to Haus Luxury Interiors, a multibrand showroom that offers a premium collection of furniture, lighting and decor items. Our showroom features a variety of Italian and American brands, allowing you to choose from the best of both worlds. With ten years of experience in the industry, we have honed our expertise and honed our skills to bring you only the finest products available.<\\/p>\\r\\n\\r\\n<p>At Haus Luxury Interiors, we understand the importance of having a beautiful and functional home. That&#39;s why we take great care in selecting only the best furniture, lighting, and decor items for our showroom. We believe that every piece should not only look great, but also be made to last. That&#39;s why we only work with the most trusted and reputable brands in the industry.<\\/p>\\r\\n\\r\\n<p>Whether you&#39;re looking for a statement piece for your living room, a new light fixture for your kitchen, or just some stylish accessories to complete your home, you&#39;re sure to find what you&#39;re looking for at Haus Luxury Interiors. Our experienced team of interior designers and product specialists are always on hand to offer advice and assistance, so you can be sure you&#39;re making the right choice for your home.<\\/p>\\r\\n\\r\\n<p>Thank you for considering Haus Luxury Interiors for your home furnishings needs. We look forward to helping you create the home of your dreams.<\\/p>\"}', 'uploads/about/1756067861833640.webp', '2023-01-07 16:18:10', '2023-02-09 09:44:55');

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `desc`, `created_at`, `updated_at`, `image`) VALUES
(4, '{\"en\":\"our mission\"}', '{\"en\":\"<p>To offer a premium selection of furniture, lighting, and decor products from trusted and reputable brands, while providing exceptional customer service and expert design advice.<\\/p>\"}', '2023-01-31 03:06:01', '2023-02-09 09:46:17', 'uploads/attribute/1756720608825859.jpg'),
(5, '{\"en\":\"our vision\"}', '{\"en\":\"<p>To become the leading provider of high-end luxury home furnishings and inspire customers to create beautiful and functional homes.<\\/p>\"}', '2023-01-31 03:06:16', '2023-02-09 09:46:02', 'uploads/attribute/1756720616575004.jpg'),
(6, '{\"en\":\"Our Values\"}', '{\"en\":\"<ul>\\r\\n\\t<li>Quality:&nbsp;<\\/li>\\r\\n\\t<li>Customer satisfaction:&nbsp;<\\/li>\\r\\n\\t<li>Innovation:&nbsp;<\\/li>\\r\\n\\t<li>Collaboration:&nbsp;<\\/li>\\r\\n\\t<li>Sustainability:&nbsp;<\\/li>\\r\\n<\\/ul>\"}', '2023-01-31 03:06:33', '2023-02-09 09:47:56', 'uploads/attribute/1756720626380267.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `desc`, `created_at`, `updated_at`, `slug`, `meta_keyword`, `meta_title`, `meta_description`, `alt`) VALUES
(6, '{\"en\":\"Every element of the system\"}', 'uploads/blog/1756717458278516.jpg', '{\"en\":\"<p>its suitability for use in a wide range of different contemporary and traditional arrangements, West also features glints of pure creativity, such as the chaise-longue, in pentagonal or hexagonal form and the elements that stand out for their striking backrests in saddle hide, ergonomically shaped to rise and support the rear cushion. True elements of surprise, they break up the compositional layout, creating a stylistic point of interest, and interrupting the continuous effect of the fabric covering, visually lightening the volume at the rear. A solution designed to optimise both look and form, created with the know-how about design and the savoir-faire associated with fine tailoring that have&nbsp;always distinguished the Minotti brand.<\\/p>\\r\\n\\r\\n<p>Every element of the system is made with exquisite goose down padding to ensure maximum comfort, features cushions finished with a piping that defines their profile and a distinctive aluminium strip, slightly rounded at the edges which skims the floor, in a brand new polished Brandy colour finish.<\\/p>\\r\\n\\r\\n<p>its suitability for use in a wide range of different contemporary and traditional arrangements, West also features glints of pure creativity, such as the chaise-longue, in pentagonal or hexagonal form and the elements that stand out for their striking backrests in saddle hide, ergonomically shaped to rise and support the rear cushion. True elements of surprise, they break up the compositional layout, creating a stylistic point of interest, and interrupting the continuous effect of the fabric covering, visually lightening the volume at the rear. A solution designed to optimise both look and form, created with the know-how about design and the savoir-faire associated with fine tailoring that have&nbsp;always distinguished the Minotti brand.<\\/p>\\r\\n\\r\\n<p>Every element of the system is made with exquisite goose down padding to ensure maximum comfort, features cushions finished with a piping that defines their profile and a distinctive aluminium strip, slightly rounded at the edges which skims the floor, in a brand new polished Brandy colour finish.<\\/p>\\r\\n\\r\\n<div id=\\\"gtx-trans\\\" style=\\\"position: absolute; left: -185px; top: 90.1875px;\\\">\\r\\n<div class=\\\"gtx-trans-icon\\\">&nbsp;<\\/div>\\r\\n<\\/div>\"}', '2023-01-31 02:39:21', '2023-02-03 14:59:51', 'every-element-of-the-system', '{\"en\":\"Every element of the system\"}', '{\"en\":\"Every element of the system\"}', '{\"en\":\"Every element of the system\"}', '{\"en\":\"Every element of the system\"}'),
(7, '{\"en\":\"West also features glints of pure creativity\"}', 'uploads/blog/1756822265552121.jpg', '{\"en\":\"<p>faceting effect livens up and interrupts the cubism that sets the morphology of the West system apart from the cliches of modern design. Characterised by its suitability for use in a wide range of different contemporary and traditional arrangements, West also features glints of pure creativity, such as the chaise-longue, in pentagonal or hexagonal form and the elements that stand out for their striking backrests in saddle hide, ergonomically shaped to rise and support the rear cushion. True elements of surprise, they break up the compositional layout, creating a stylistic point of interest, and interrupting the continuous effect of the fabric covering, visually lightening the volume at the rear. A solution designed to optimise both look and form, created with the know-how about design and the savoir-faire associated with fine tailoring that have&nbsp;always distinguished the Minotti brand.<\\/p>\\r\\n\\r\\n<p>Every element of the system is made with exquisite goose down padding to ensure maximum comfort, features cushions finished with a piping that defines their profile and a distinctive aluminium strip, slightly rounded at the edges which skims the floor, in a brand new polished Brandy colour finish.<\\/p>\\r\\n\\r\\n<p><img alt=\\\"\\\" src=\\\"https:\\/\\/haus-one.markup.az\\/images\\/blog\\/blog-single1.jpg\\\" \\/><img alt=\\\"\\\" src=\\\"https:\\/\\/haus-one.markup.az\\/images\\/blog\\/blog-single1.jpg\\\" style=\\\"float:right\\\" \\/><\\/p>\\r\\n\\r\\n<p>faceting effect livens up and interrupts the cubism that sets the morphology of the West system apart from the cliches of modern design. Characterised by its suitability for use in a wide range of different contemporary and traditional arrangements, West also features glints of pure creativity, such as the chaise-longue, in pentagonal or hexagonal form and the elements that stand out for their striking backrests in saddle hide, ergonomically shaped to rise and support the rear cushion. True elements of surprise, they break up the compositional layout, creating a stylistic point of interest, and interrupting the continuous effect of the fabric covering, visually lightening the volume at the rear. A solution designed to optimise both look and form, created with the know-how about design and the savoir-faire associated with fine tailoring that have&nbsp;always distinguished the Minotti brand.<\\/p>\\r\\n\\r\\n<p>Every element of the system is made with exquisite goose down padding to ensure maximum comfort, features cushions finished with a piping that defines their profile and a distinctive aluminium strip, slightly rounded at the edges which skims the floor, in a brand new polished Brandy colour finish.<\\/p>\\r\\n\\r\\n<div id=\\\"gtx-trans\\\" style=\\\"position: absolute; left: 392px; top: 14.7969px;\\\">\\r\\n<div class=\\\"gtx-trans-icon\\\">&nbsp;<\\/div>\\r\\n<\\/div>\"}', '2023-01-31 02:39:47', '2023-02-03 15:00:05', 'west-also-features-glints-of-pure-creativity', '{\"en\":\"West also features glints of pure creativity\"}', '{\"en\":\"West also features glints of pure creativity\"}', '{\"en\":\"West also features glints of pure creativity\"}', '{\"en\":\"West also features glints of pure creativity\"}'),
(8, '{\"en\":\"Use Pastel Colors & Natural Materials\"}', 'uploads/blog/1756822277001671.png', '{\"en\":\"<p>faceting effect livens up and interrupts the cubism that sets the morphology of the West system apart from the cliches of modern design. Characterised by its suitability for use in a wide range of different contemporary and traditional arrangements, West also features glints of pure creativity, such as the chaise-longue, in pentagonal or hexagonal form and the elements that stand out for their striking backrests in saddle hide, ergonomically shaped to rise and support the rear cushion. True elements of surprise, they break up the compositional layout, creating a stylistic point of interest, and interrupting the continuous effect of the fabric covering, visually lightening the volume at the rear. A solution designed to optimise both look and form, created with the know-how about design and the savoir-faire associated with fine tailoring that have&nbsp;always distinguished the Minotti brand.<\\/p>\\r\\n\\r\\n<p>Every element of the system is made with exquisite goose down padding to ensure maximum comfort, features cushions finished with a piping that defines their profile and a distinctive aluminium strip, slightly rounded at the edges which skims the floor, in a brand new polished Brandy colour finish.<\\/p>\\r\\n\\r\\n<p><img alt=\\\"\\\" src=\\\"https:\\/\\/haus-one.markup.az\\/images\\/blog\\/blog-single1.jpg\\\" style=\\\"height:360px; width:421px\\\" \\/><img alt=\\\"\\\" src=\\\"https:\\/\\/haus-one.markup.az\\/images\\/blog\\/blog-single1.jpg\\\" style=\\\"float:right; height:360px; width:421px\\\" \\/><\\/p>\\r\\n\\r\\n<p>faceting effect livens up and interrupts the cubism that sets the morphology of the West system apart from the cliches of modern design. Characterised by its suitability for use in a wide range of different contemporary and traditional arrangements, West also features glints of pure creativity, such as the chaise-longue, in pentagonal or hexagonal form and the elements that stand out for their striking backrests in saddle hide, ergonomically shaped to rise and support the rear cushion. True elements of surprise, they break up the compositional layout, creating a stylistic point of interest, and interrupting the continuous effect of the fabric covering, visually lightening the volume at the rear. A solution designed to optimise both look and form, created with the know-how about design and the savoir-faire associated with fine tailoring that have&nbsp;always distinguished the Minotti brand.<\\/p>\\r\\n\\r\\n<p>Every element of the system is made with exquisite goose down padding to ensure maximum comfort, features cushions finished with a piping that defines their profile and a distinctive aluminium strip, slightly rounded at the edges which skims the floor, in a brand new polished Brandy colour finish.<\\/p>\"}', '2023-02-02 07:08:43', '2023-02-03 14:58:04', 'use-pastel-colors-natural-materials', '{\"en\":\"blog 4\"}', '{\"en\":\"blog 4\"}', '{\"en\":\"blog 4\"}', '{\"en\":null}'),
(11, '{\"en\":\"Use Pastel Colors & Natural Materials 2\"}', 'uploads/blog/1756822284796229.jpg', '{\"en\":\"<p>its suitability for use in a wide range of different contemporary and traditional arrangements, West also features glints of pure creativity, such as the chaise-longue, in pentagonal or hexagonal form and the elements that stand out for their striking backrests in saddle hide, ergonomically shaped to rise and support the rear cushion. True elements of surprise, they break up the compositional layout, creating a stylistic point of interest, and interrupting the continuous effect of the fabric covering, visually lightening the volume at the rear. A solution designed to optimise both look and form, created with the know-how about design and the savoir-faire associated with fine tailoring that have&nbsp;always distinguished the Minotti brand.<\\/p>\\r\\n\\r\\n<p>Every element of the system is made with exquisite goose down padding to ensure maximum comfort, features cushions finished with a piping that defines their profile and a distinctive aluminium strip, slightly rounded at the edges which skims the floor, in a brand new polished Brandy colour finish.<\\/p>\\r\\n\\r\\n<p>its suitability for use in a wide range of different contemporary and traditional arrangements, West also features glints of pure creativity, such as the chaise-longue, in pentagonal or hexagonal form and the elements that stand out for their striking backrests in saddle hide, ergonomically shaped to rise and support the rear cushion. True elements of surprise, they break up the compositional layout, creating a stylistic point of interest, and interrupting the continuous effect of the fabric covering, visually lightening the volume at the rear. A solution designed to optimise both look and form, created with the know-how about design and the savoir-faire associated with fine tailoring that have&nbsp;always distinguished the Minotti brand.<\\/p>\\r\\n\\r\\n<p>Every element of the system is made with exquisite goose down padding to ensure maximum comfort, features cushions finished with a piping that defines their profile and a distinctive aluminium strip, slightly rounded at the edges which skims the floor, in a brand new polished Brandy colour finish.<\\/p>\"}', '2023-02-03 14:43:11', '2023-02-03 14:58:11', 'use-pastel-colors-natural-materials-2', '{\"en\":\"demo\"}', '{\"en\":\"demo\"}', '{\"en\":\"demo\"}', '{\"en\":null}');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tags`
--

CREATE TABLE `blog_tags` (
  `blog_id` varchar(255) NOT NULL,
  `tag_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_tags`
--

INSERT INTO `blog_tags` (`blog_id`, `tag_id`) VALUES
('4', '1'),
('5', '2'),
('6', '1'),
('7', '2'),
('8', '1'),
('11', '1'),
('11', '2');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `category_id`, `alt_category_id`, `created_at`, `updated_at`, `meta_title`, `meta_desc`, `meta_keyw`, `desc`, `image`, `logo`, `images`) VALUES
(1, '{\"en\":\"Furniture\",\"ru\":\"Furniture\"}', 'furniture', '0', NULL, '2023-01-31 06:38:48', '2023-02-08 13:53:40', '{\"en\":\"mebel alt cat 1\",\"ru\":\"mebel alt cat 1\"}', '{\"en\":\"mebel alt cat 1\",\"ru\":\"mebel alt cat 1\"}', '{\"en\":\"mebel alt cat 1\",\"ru\":\"mebel alt cat 1\"}', '{\"en\":\"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem harum nemo possimus facere labore sed temporibus molestiae magnam sapiente. Fugiat.\",\"ru\":\"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem harum nemo possimus facere labore sed temporibus molestiae magnam sapiente. Fugiat.\"}', 'uploads/brand/1756793946297227.jpg', 'uploads/brand/1756793735256746.png', '[\"1758247391.jpg\",\"741905087.jpg\",\"1408034282.jpg\",\"164521983.png\"]'),
(2, '{\"en\":\"Accessories\"}', 'accessories', '0', NULL, '2023-01-31 06:39:31', '2023-02-14 08:12:04', '{\"en\":\"aksesuarlar\"}', '{\"en\":\"aksesuarlar\"}', '{\"en\":\"aksesuarlar\"}', '{\"en\":\"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem harum nemo possimus facere labore sed temporibus molestiae magnam sapiente. Fugiat.\"}', 'uploads/brand/1756794028834017.jpg', 'uploads/brand/1756794028834933.png', '{\"1\":\"2118387666.webp\",\"2\":\"504025434.webp\",\"3\":\"2053908090.jpg\",\"4\":\"1223377352.jpg\"}'),
(3, '{\"en\":\"Lightining\",\"az\":\"Lighting\",\"ru\":\"Isiqlandirma\"}', 'lightining', '0', NULL, '2023-01-31 06:39:45', '2023-02-16 07:53:42', '{\"az\":\"Lighting\",\"en\":\"Lightining\",\"ru\":\"Isiqlandirma\"}', '{\"az\":\"lighting\",\"en\":\"Lightining\",\"ru\":\"Isiqlandirma\"}', '{\"az\":\"lighting\",\"en\":\"Lightining\",\"ru\":\"Isiqlandirma\"}', '{\"az\":\"lighting\",\"en\":\"Lightining\",\"ru\":\"Isiqlandirma\"}', 'uploads/brand/1757088767950371.webp', 'uploads/brand/1757088767951736.jpg', '[\"587881284.jpg\",\"1115013807.jpg\",\"1970487906.jpg\",\"369652534.jpg\"]'),
(4, '{\"en\":\"Caracole\",\"az\":\"Mebel alt cat 1 \"}', 'caracole', '1', NULL, '2023-01-31 06:41:01', '2023-02-09 08:40:59', '{\"en\":\"Caracole Azerbaijan\"}', '{\"en\":\"Brand 1\"}', '{\"en\":\"Brand 1\"}', '{\"en\":\"Caracole creates high-style, unique furniture filled with personality and practicality. Their custom upholstery program, Caracole Couture, offers hundreds of fabrics to create one-of-a-kind pieces. Caracole\'s highly edited portfolio ranges from classic to modern and is defined by exceptional style. Each piece is adaptable and unique, providing a fresh breath of air for your home.\"}', 'uploads/brand/1757160630152001.png', 'uploads/brand/1757160630154147.png', '[\"1131866206.jpg\",\"1237895771.jpg\",\"123587213.jpg\",\"1259256943.jpg\"]'),
(5, '{\"en\":\"Calligaris\"}', 'calligaris', '1', NULL, '2023-01-31 06:53:20', '2023-02-09 08:46:46', '{\"en\":\"Calligaris\"}', '{\"en\":\"Calligaris\"}', '{\"en\":\"Calligaris\"}', '{\"en\":\"Calligaris\"}', 'uploads/brand/1757179913712796.jpg', 'uploads/brand/1757179913721681.webp', '{\"0\":\"1467846447.jpg\",\"2\":\"571079409.jpg\",\"3\":\"325049457.jpg\",\"4\":\"83460525.jpg\"}'),
(6, '{\"en\":\"Alf Dafre\"}', 'alf-dafre', '1', NULL, '2023-01-31 06:53:24', '2023-02-17 07:23:44', '{\"en\":\"Alf Dafre\"}', '{\"en\":\"Alf Dafre\"}', '{\"en\":\"Alf Dafre\"}', '{\"en\":\"Alf Dafre\"}', 'uploads/brand/1757536829382761.jpg', 'uploads/brand/1757536829384918.png', '{\"3\":\"566849878.jpg\",\"4\":\"1596475803.jpg\",\"5\":\"1608270733.jpg\",\"6\":\"22620395.jpg\"}'),
(7, '{\"en\":\"Qeeboo\"}', 'qeeboo', '2', NULL, '2023-01-31 06:53:34', '2023-02-14 07:27:58', '{\"en\":\"test\"}', '{\"en\":\"test\"}', '{\"en\":\"test\"}', '{\"en\":\"test\"}', 'uploads/brand/1757790382582953.jpg', 'uploads/brand/1757790382585307.png', '[\"1584023717.webp\",\"1672987693.webp\",\"320518333.jpg\",\"1967713362.webp\"]'),
(9, '{\"en\":\"Masiero\"}', 'masiero', '3', NULL, '2023-01-31 06:53:52', '2023-02-16 08:07:17', '{\"en\":\"Masiero\"}', '{\"en\":\"Masiero\"}', '{\"en\":\"Masiero\"}', '{\"en\":\"Masiero\"}', 'uploads/brand/1757973439511863.jpg', 'uploads/brand/1757973439525734.svg', '[\"1224357294.jpg\",\"1641503850.jpg\",\"747759071.jpg\",\"1537791505.jpg\"]'),
(12, '{\"en\":\"Valentina\"}', 'valentina', '4', NULL, '2023-01-31 07:31:45', '2023-02-09 09:34:49', '{\"en\":\"Collection 1\"}', '{\"en\":\"Collection 1\"}', '{\"en\":\"Collection 1\"}', '{\"en\":\"Valentina reimagines classic silhouettes in Matte Pearl, and White Truffle finishes with Golden Shimmer accents for an air of elegance fit for royalty. Radiating v-grooved patterns on back-painted glass is complemented by elongated ovals, hourglass shapes, and gently curving forms in satin, velvet, and creamy chenille fabrics. Valentina is distinctly formal yet contemporary & uncluttered.\"}', 'uploads/brand/1756889617393285.jpg', 'uploads/brand/1756889598997221.png', '[\"347307920.jpg\",\"750161960.jpg\",\"1116828180.jpg\",\"573873719.jpg\"]'),
(14, '{\"en\":\"Chairs\"}', 'chairs', '5', NULL, '2023-01-31 07:32:45', '2023-02-08 07:34:12', '{\"en\":\"Chairs\"}', '{\"en\":\"Chairs\"}', '{\"en\":\"Chairs\"}', '{\"en\":\"Chairs\"}', 'uploads/brand/1757180029412698.jpg', 'uploads/brand/1757180029416047.webp', '[]'),
(15, '{\"en\":\"Sofa\"}', 'sofa-1', '6', NULL, '2023-01-31 07:33:04', '2023-02-11 12:16:43', '{\"en\":\"Sofa\"}', '{\"en\":\"Sofa\"}', '{\"en\":\"Sofa\"}', '{\"en\":\"Sofa\"}', 'uploads/brand/1757536901864548.jpg', 'uploads/brand/1757536901865988.png', '[\"976664684.jpg\",\"1760569629.jpg\",\"187309632.jpeg\",\"563385094.jpg\"]'),
(17, '{\"en\":\"Avondale\"}', 'avondale', '4', NULL, '2023-02-02 01:03:54', '2023-02-09 09:40:56', '{\"en\":\"Avondale\"}', '{\"en\":\"Collection 2\"}', '{\"en\":\"Collection 2\"}', '{\"en\":\"Serene, yet sophisticated, the Avondale collection is an authentic reflection of everyday elegance. With a timeless outlook all its own, Avondale is the ultimate expression of the inspired interior.\"}', 'uploads/brand/1757345883553420.jpg', 'uploads/brand/1757345883569403.svg', '{\"4\":\"1594695075.jpg\",\"5\":\"177177748.jpg\",\"6\":\"1257831423.jpg\",\"7\":\"1177844075.jpg\"}'),
(18, '{\"en\":\"Giraffe\"}', 'giraffe', '7', NULL, '2023-02-03 09:07:04', '2023-02-14 07:25:22', '{\"en\":\"Giraffe\"}', '{\"en\":\"Giraffe\"}', '{\"en\":\"Giraffe\"}', '{\"en\":\"Giraffe in Love is a dreamy giraffe holding a classic Marie-Th\\u00e9r\\u00e8se style chandelier, designed by Marcantonio. It represents irony and lightness as the giraffe is in love but she doesn\'t know it yet because her heart is far from her head and she lives love light-heartedly. Available in XL, M, XS and Wall lamp version.\"}', 'uploads/brand/1757790101958127.jpg', 'uploads/brand/1757790101970177.png', '[\"922828282.jpg\",\"1635098724.webp\",\"708093572.jpg\",\"752506088.webp\"]'),
(19, '{\"en\":\"Tables\"}', 'tables', '5', NULL, '2023-02-03 15:49:51', '2023-02-09 08:55:41', '{\"en\":\"Tables\"}', '{\"en\":\"Tables\"}', '{\"en\":\"Tables\"}', '{\"en\":\"Various models to choose - fixed and extensible: when it comes to tables, the proposal by Calligaris is particularly rich, profound and evolved.\"}', 'uploads/brand/1757247375367270.jpg', 'uploads/brand/1757247375375118.webp', '{\"4\":\"1644730695.jpg\",\"5\":\"1466327091.jpg\",\"6\":\"2133003159.jpg\",\"7\":\"186820893.webp\"}'),
(20, '{\"en\":\"FONTAINEBLEAU\"}', 'fontainebleau', '4', NULL, '2023-02-07 07:26:35', '2023-02-07 07:34:07', '{\"en\":\"FONTAINEBLEAU\"}', '{\"en\":\"The Fontainebleau collection offers classically inspired furnishings, drawing from the Rococo and Baroque periods for a touch of glamour in a modern, livable format. Discover the ultimate in luxury with Fontainebleau.\"}', '{\"en\":\"collection, livable luxury, Rococo, Baroque, designs, traditional European palaces, classically inspired, minimalism, heritage influences, modern lifestyles, new genre of tradition.\"}', '{\"en\":\"The Fontainebleau collection offers livable luxury with a blend of Rococo and Baroque designs inspired by traditional European palaces. Each classically inspired piece has a touch of minimalism, creating a modern take on heritage influences. Experience the ultimate in livable luxury with Fontainebleau.\"}', 'uploads/brand/1757156404108039.jpg', 'uploads/brand/1757156404109188.png', '[]'),
(21, '{\"en\":\"Oxford\"}', 'oxford', '4', NULL, '2023-02-07 07:42:15', '2023-02-08 13:54:42', '{\"en\":\"Oxford Collection - Timeless Luxury with a Modern Twist\"}', '{\"en\":\"Oxford Collection - Timeless Luxury with a Modern Twist\"}', '{\"en\":\"Oxford Collection, timeless luxury, modern twist, dark wood, gold, marble-like stone, reeded panels, rounded edges, tall tapered legs, pyrite-painted ferrules\"}', '{\"en\":\"Defined by classic details, like the pairing of dark wood tones with the warmth of gold and marble-like stone, Oxford introduces a look of enduring luxury. Reeded decorative panels, rounded edges, and tall tapered legs capped in pyrite-painted ferrules lend a modern interpretation to traditional silhouettes. Carved, interlocking rings add an element of distinction that defines Oxford\\u2019s statement of strength and resilience, with lustrous fabrics layered in for soft contrast. Familiar forms are reimagined for today\\u2019s scale & functionality.\"}', 'uploads/brand/1757157246538839.jpg', 'uploads/brand/1757157246539636.png', '[\"1545017807.jpg\",\"697602054.jpg\",\"1255983184.jpg\",\"2105605028.jpg\"]'),
(22, '{\"en\":\"Lillian\"}', 'lillian', '4', NULL, '2023-02-07 08:34:58', '2023-02-07 08:36:34', '{\"en\":\"Lillian\"}', '{\"en\":\"Lillian\"}', '{\"en\":\"Lillian\"}', '{\"en\":\"Lillian bir Caracole Kolleksiyas\\u0131d\\u0131r\"}', 'uploads/brand/1757160663842177.png', 'uploads/brand/1757160663845443.svg', '[]'),
(23, '{\"en\":\"Sofa\"}', 'sofa', '5', NULL, '2023-02-08 07:48:39', '2023-02-09 08:54:04', '{\"en\":\"Sofa\"}', '{\"en\":\"Sofa\"}', '{\"en\":\"Sofa\"}', '{\"en\":\"Many models. dozens of configurations for each model. hundreds of upholstery options. the result is always unique.\"}', 'uploads/brand/1757342958355161.jpg', 'uploads/brand/1757248590198678.webp', '[\"1828728195.jpg\",\"192819297.jpg\",\"1702353576.jpg\",\"99656028.jpg\"]'),
(26, '{\"en\":\"EVERLY\"}', 'everly', '4', NULL, '2023-02-11 11:28:20', '2023-02-11 11:29:58', '{\"en\":\"EVERLY\"}', '{\"en\":\"EVERLY\"}', '{\"en\":\"EVERLY\"}', '{\"en\":\"With its contemporary interpretation of traditional design, this timeless collection makes a statement of grandeur by marrying dark wood with curvaceous scrolls, rich fabrics, and complementary accents for bedrooms, living rooms, or dining areas.\"}', 'uploads/brand/1757533857599996.jpg', 'uploads/brand/1757533857612046.png', '[\"245450743.jpg\",\"966351499.jpg\",\"644479668.jpg\",\"1673949682.jpg\"]'),
(27, '{\"en\":\"Adela\"}', 'adela', '4', NULL, '2023-02-11 11:33:13', '2023-02-11 11:33:13', '{\"en\":\"Adela\"}', '{\"en\":\"Adela\"}', '{\"en\":\"Adela\"}', '{\"en\":\"The Adela collection features beautiful curvaceous silhouettes for the entire home. Washed alabaster maple is brushed with a soft metallic blush taupe finish and is accented with a flowing, delicately-carved ribbon motif. Several pieces adorn an astroid-shaped design element that will evoke conversations. Welcome guests with upholstery that has an elegant outward beauty and generous proportions.\"}', 'uploads/brand/1757534164816678.jpg', 'uploads/brand/1757534164818473.png', '[\"2134894326.jpg\",\"524968773.jpg\",\"1125375490.jpg\",\"796744840.jpg\"]'),
(28, '{\"en\":\"Beds\"}', 'beds', '5', NULL, '2023-02-11 12:11:40', '2023-02-11 12:11:40', '{\"en\":\"Beds\"}', '{\"en\":\"Beds\"}', '{\"en\":\"Beds\"}', '{\"en\":\"Your rest deserves the right ally. The choice of the double bed is one of the most delicate. Upholstered, with a fixed base or with a lifting mechanism: configure yours and transform your sleeping area.\"}', 'uploads/brand/1757536584196754.jpg', 'uploads/brand/1757536584211710.webp', '[\"342513573.jpg\",\"1473741133.jpg\",\"1898611260.jpg\",\"630814432.jpg\"]'),
(29, '{\"en\":\"Chairs\"}', 'chairs-1', '6', NULL, '2023-02-11 12:24:17', '2023-02-11 12:24:35', '{\"en\":\"Chairs\"}', '{\"en\":\"Chairs\"}', '{\"en\":\"Chairs\"}', '{\"en\":\"Chairs\"}', 'uploads/brand/1757537378005931.jpg', 'uploads/brand/1757537378007387.png', '[\"1322906810.jpg\",\"551442303.jpg\",\"171870116.jpg\",\"6361797.jpg\"]'),
(30, '{\"en\":\"Rabbit\"}', 'rabbit', '7', NULL, '2023-02-14 08:00:39', '2023-02-14 08:00:39', '{\"en\":\"Rabbit\"}', '{\"en\":\"Rabbit\"}', '{\"en\":\"Rabbit\"}', '{\"en\":\"Rabbit is a family of products with a strong media impact designed by Stefano Giovannoni. The pop icon Rabbit family symbolizes love and fertility, bringing good luck and good wishes, a dual design, for adults and children.The idea of the rabbit, a gentle, lovable, shy animal, comes from the association of its silhouette with that of a seat, where the rabbit\'s ears become the backrest of the chair.\"}', 'uploads/brand/1757792582226419.jpg', 'uploads/brand/1757792582235594.png', '[\"1145626180.png\",\"537748996.png\",\"57285115.png\",\"1584170641.png\"]'),
(31, '{\"en\":\"Atelier\"}', 'atelier', '9', NULL, '2023-02-16 08:14:53', '2023-02-16 08:48:58', '{\"en\":\"Atelier\"}', '{\"en\":\"Atelier\"}', '{\"en\":\"Atelier\"}', '{\"en\":\"Atelier\"}', 'uploads/brand/1757974671829827.jpg', 'uploads/brand/1757974671832718.svg', '[\"956305607.jpg\",\"653265339.jpg\",\"649479356.jpg\",\"1454864713.jpg\"]'),
(34, '{\"en\":\"Atelier - Glass\"}', 'atelier-glass', '9', NULL, '2023-02-16 08:50:20', '2023-02-16 08:50:20', '{\"en\":\"Atelier - Glass\"}', '{\"en\":\"Atelier - Glass\"}', '{\"en\":\"Atelier - Glass\"}', '{\"en\":\"Atelier - Glass\"}', 'uploads/brand/1757976901879096.jpg', 'uploads/brand/1757976901881601.svg', '[\"431646279.jpg\",\"1488191179.jpg\",\"986054726.jpg\",\"1107348213.jpg\"]'),
(36, '{\"en\":\"Baobab\"}', 'baobab', '2', NULL, '2023-02-16 13:10:48', '2023-02-16 13:50:14', '{\"en\":\"Baobab\"}', '{\"en\":\"Baobab\"}', '{\"en\":\"Baobab\"}', '{\"en\":\"Baobab\"}', 'uploads/brand/1757995770263290.jpg', 'uploads/brand/1757995770265386.avif', '[\"362856830.jpg\",\"1778186823.jpg\",\"1224643390.jpg\",\"1494356006.jpg\"]'),
(37, '{\"en\":\"SCENTED CANDLES\"}', 'scented-candles', '36', NULL, '2023-02-16 13:11:58', '2023-02-16 13:18:57', '{\"en\":\"SCENTED CANDLES\"}', '{\"en\":\"SCENTED CANDLES\"}', '{\"en\":\"SCENTED CANDLES\"}', '{\"en\":\"SCENTED CANDLES\"}', 'uploads/brand/1757993801964510.jpg', 'uploads/brand/1757993801966653.jpg', '[\"1753744830.jpg\",\"1592347879.jpg\",\"1237260471.jpg\",\"95843567.jpg\"]'),
(38, '{\"en\":\"Maria Teresa\"}', 'maria-teresa', '9', NULL, '2023-02-16 13:29:27', '2023-02-16 13:29:27', '{\"en\":\"Maria Teresa\"}', '{\"en\":\"Maria Teresa\"}', '{\"en\":\"Maria Teresa\"}', '{\"en\":\"Maria Teresa\"}', 'uploads/brand/1757994462818886.jpg', 'uploads/brand/1757994462831434.svg', '[\"573886062.jpg\",\"2026954193.jpg\",\"489791984.jpg\",\"1744106784.jpg\"]'),
(39, '{\"en\":\"HOME FRAGRANCES\"}', 'home-fragrances', '36', NULL, '2023-02-16 13:38:33', '2023-02-16 13:53:12', '{\"en\":\"HOME FRAGRANCES\"}', '{\"en\":\"HOME FRAGRANCES\"}', '{\"en\":\"HOME FRAGRANCES\"}', '{\"en\":\"HOME FRAGRANCES\"}', 'uploads/brand/1757995591672910.jpg', 'uploads/brand/1757995957263057.jpg', '[\"78583223.jpg\",\"867231433.jpg\",\"208562447.jpg\",\"631755217.jpg\"]'),
(40, '{\"en\":\"ACCESSOIRES\"}', 'accessoires', '36', NULL, '2023-02-16 13:44:38', '2023-02-16 13:47:49', '{\"en\":\"ACCESSOIRES\"}', '{\"en\":\"ACCESSOIRES\"}', '{\"en\":\"ACCESSOIRES\"}', '{\"en\":\"ACCESSOIRES\"}', 'uploads/brand/1757995618068500.jpg', 'uploads/brand/1757995417783421.jpg', '[\"1643762386.jpg\",\"639733534.jpg\",\"668524253.jpg\",\"1169499142.jpg\"]'),
(41, '{\"en\":\"Wardrobes\"}', 'wardrobes', '6', NULL, '2023-02-17 07:09:21', '2023-02-17 07:09:48', '{\"en\":\"Wardrobes\"}', '{\"en\":\"Wardrobes\"}', '{\"en\":\"Wardrobes\"}', '{\"en\":\"Wardrobes\"}', 'uploads/brand/1758061146230402.jpg', 'uploads/brand/1758061146239867.png', '[\"1493988085.jpg\",\"1230670874.jpg\",\"447680324.jpg\",\"1785636681.jpg\"]'),
(42, '{\"en\":\"Tables and Occasional tables\"}', 'tables-and-occasional-tables', '6', NULL, '2023-02-17 07:13:13', '2023-02-17 07:13:13', '{\"en\":\"Tables and Occasional tables\"}', '{\"en\":\"Tables and Occasional tables\"}', '{\"en\":\"Tables and Occasional tables\"}', '{\"en\":\"Tables and Occasional tables\"}', 'uploads/brand/1758061388883162.jpg', 'uploads/brand/1758061388884730.png', '[\"2059386671.jpg\",\"1940370507.jpg\",\"1904819065.jpg\",\"1687751891.jpg\"]'),
(43, '{\"en\":\"Day systems\"}', 'day-systems', '6', NULL, '2023-02-17 07:17:26', '2023-02-17 07:17:26', '{\"en\":\"Day systems\"}', '{\"en\":\"Day systems\"}', '{\"en\":\"Day systems\"}', '{\"en\":\"Day systems\"}', 'uploads/brand/1758061654712156.jpg', 'uploads/brand/1758061654718047.png', '[\"2095692439.jpg\",\"811957114.jpg\",\"344799947.jpg\",\"2005702553.jpg\"]'),
(44, '{\"en\":\"Sideboards and display cabinets\"}', 'sideboards-and-display-cabinets', '6', NULL, '2023-02-17 07:20:05', '2023-02-17 07:20:05', '{\"en\":\"Sideboards and display cabinets\"}', '{\"en\":\"Sideboards and display cabinets\"}', '{\"en\":\"Sideboards and display cabinets\"}', '{\"en\":\"Sideboards and display cabinets\"}', 'uploads/brand/1758061821178757.jpg', 'uploads/brand/1758061821180458.png', '[\"721469319.jpg\",\"251577243.jpg\",\"1428203724.jpg\",\"436032101.jpg\"]'),
(45, '{\"en\":\"Complementi\"}', 'complementi', '6', NULL, '2023-02-17 07:22:06', '2023-02-17 07:22:06', '{\"en\":\"Complementi\"}', '{\"en\":\"Complementi\"}', '{\"en\":\"Complementi\"}', '{\"en\":\"Complementi\"}', 'uploads/brand/1758061948255955.jpg', 'uploads/brand/1758061948258356.png', '[\"255376814.jpg\",\"1737159874.jpg\",\"1907198042.jpg\",\"930490934.jpg\"]'),
(46, '{\"en\":\"Cabinet\"}', 'cabinet', '5', NULL, '2023-02-18 14:33:19', '2023-02-18 14:33:19', '{\"en\":\"Cabinet\"}', '{\"en\":\"Cabinet\"}', '{\"en\":\"Cabinet\"}', '{\"en\":\"Cabinet\"}', 'uploads/brand/1758179674446527.jpg', 'uploads/brand/1758179674461071.svg', '[\"1716433163.jpg\",\"948895592.jpg\",\"373674611.jpg\",\"450736779.jpg\"]'),
(47, '{\"en\":\"Rugs\"}', 'rugs', '5', NULL, '2023-02-18 14:36:08', '2023-02-18 14:36:08', '{\"en\":\"Rugs\"}', '{\"en\":\"Rugs\"}', '{\"en\":\"Rugs\"}', '{\"en\":\"Rugs\"}', 'uploads/brand/1758179852240662.jpg', 'uploads/brand/1758179852246585.svg', '[\"2135404862.jpg\",\"146206011.jpg\",\"1843301308.jpg\",\"1441523493.jpg\"]'),
(48, '{\"en\":\"Occasional furniture\"}', 'occasional-furniture', '5', NULL, '2023-02-18 14:37:33', '2023-02-18 14:37:33', '{\"en\":\"Occasional furniture\"}', '{\"en\":\"Occasional furniture\"}', '{\"en\":\"Occasional furniture\"}', '{\"en\":\"Occasional furniture\"}', 'uploads/brand/1758179941415762.jpg', 'uploads/brand/1758179941419751.svg', '[\"1392599804.jpg\",\"2005267687.jpg\",\"1124498101.jpg\",\"776380098.jpg\"]'),
(49, '{\"en\":\"Objects\"}', 'objects', '5', NULL, '2023-02-18 14:38:45', '2023-02-18 14:38:45', '{\"en\":\"Objects\"}', '{\"en\":\"Objects\"}', '{\"en\":\"Objects\"}', '{\"en\":\"Objects\"}', 'uploads/brand/1758180016615717.jpg', 'uploads/brand/1758180016620840.svg', '[\"847501040.jpg\",\"1850028318.jpg\",\"117539744.jpg\",\"1092305439.jpg\"]'),
(50, '{\"en\":\"Arm chairs\"}', 'arm-chairs', '5', NULL, '2023-02-18 14:39:59', '2023-02-18 14:39:59', '{\"en\":\"Arm chairs\"}', '{\"en\":\"Arm chairs\"}', '{\"en\":\"Arm chairs\"}', '{\"en\":\"Arm chairs\"}', 'uploads/brand/1758180094512438.jpg', 'uploads/brand/1758180094517710.svg', '[\"1120149098.jpg\",\"320152159.jpg\",\"1428228318.jpg\",\"1950357364.jpg\"]'),
(51, '{\"en\":\"Cattelian \\u0130talia\"}', 'cattelian-italia', '1', NULL, '2023-02-18 14:42:15', '2023-02-18 14:42:47', '{\"en\":\"Cattelian \\u0130talia\"}', '{\"en\":\"Cattelian \\u0130talia\"}', '{\"en\":\"Cattelian \\u0130talia\"}', '{\"en\":\"Cattelian \\u0130talia\"}', 'uploads/brand/1758180236844280.jpg', 'uploads/brand/1758180236846103.png', '[\"5769378.jpg\",\"1295107843.jpg\",\"213701238.jpg\",\"1768056589.jpg\"]'),
(52, '{\"en\":\"Table\"}', 'table', '51', NULL, '2023-02-18 14:43:40', '2023-02-18 14:43:40', '{\"en\":\"Table\"}', '{\"en\":\"Table\"}', '{\"en\":\"Table\"}', '{\"en\":\"Table\"}', 'uploads/brand/1758180325990966.jpg', 'uploads/brand/1758180325992321.png', '[\"1530660318.jpg\",\"504486891.jpg\",\"198584497.jpg\",\"38410827.jpg\"]'),
(53, '{\"en\":\"Kelly Hoppen\"}', 'kelly-hoppen', '4', NULL, '2023-02-19 11:11:47', '2023-02-19 11:11:47', '{\"en\":\"Kelly Hoppen\"}', '{\"en\":\"Kelly Hoppen\"}', '{\"en\":\"Kelly Hoppen\"}', '{\"en\":\"Kelly Hoppen has partnered with the US furnishings brand Caracole to design a 23-piece casual contemporary collection that includes bedroom, dining, occasional and upholstery.\"}', 'uploads/brand/1758257591526879.jpg', 'uploads/brand/1758257592594001.png', '[\"1527173306.jpg\",\"426539719.jpg\",\"795383160.jpg\",\"403340779.jpg\"]'),
(54, '{\"en\":\"Zava\"}', 'zava', '3', NULL, '2023-02-19 12:24:57', '2023-02-19 12:24:57', '{\"en\":\"Zava\"}', '{\"en\":\"Zava\"}', '{\"en\":\"Zava\"}', '{\"en\":\"Zava\"}', 'uploads/brand/1758262195425432.jpg', 'uploads/brand/1758262195437456.png', '[\"144113658.jpg\",\"927127380.jpg\",\"1072281602.jpg\",\"158924241.jpg\"]'),
(55, '{\"en\":\"Appliques\"}', 'appliques', '54', NULL, '2023-02-19 12:26:11', '2023-02-19 12:36:57', '{\"en\":\"Appliques\"}', '{\"en\":\"Appliques\"}', '{\"en\":\"Appliques\"}', '{\"en\":\"Appliques\"}', 'uploads/brand/1758262272978282.jpg', 'uploads/brand/1758262272979489.png', '{\"1\":\"1167140916.jpg\",\"2\":\"673190582.jpg\",\"3\":\"908564175.jpg\",\"4\":\"1925102978.jpg\"}'),
(56, '{\"en\":\"Ceiling\"}', 'ceiling', '54', NULL, '2023-02-19 12:26:53', '2023-02-19 12:39:21', '{\"en\":\"Ceiling\"}', '{\"en\":\"Ceiling\"}', '{\"en\":\"Ceiling\"}', '{\"en\":\"Ceiling\"}', 'uploads/brand/1758263101915668.jpg', 'uploads/brand/1758263101917214.png', '{\"1\":\"413707751.png\",\"2\":\"1502019234.jpg\",\"3\":\"1667919466.png\",\"4\":\"1765483246.jpg\"}'),
(57, '{\"en\":\"Floor lamps\"}', 'floor-lamps', '54', NULL, '2023-02-19 12:28:38', '2023-02-19 12:28:38', '{\"en\":\"Floor lamps\"}', '{\"en\":\"Floor lamps\"}', '{\"en\":\"Floor lamps\"}', '{\"en\":\"Floor lamps\"}', 'uploads/brand/1758262427847967.jpg', 'uploads/brand/1758262427849502.png', '[\"586374397.jpg\",\"52982482.jpg\",\"1295108294.jpg\",\"1281002256.jpg\"]'),
(58, '{\"en\":\"Outdoor\"}', 'outdoor', '54', NULL, '2023-02-19 12:29:31', '2023-02-19 12:38:07', '{\"en\":\"Outdoor\"}', '{\"en\":\"Outdoor\"}', '{\"en\":\"Outdoor\"}', '{\"en\":\"Outdoor\"}', 'uploads/brand/1758262483018166.png', 'uploads/brand/1758262483019040.jpg', '{\"1\":\"1231937300.jpg\",\"2\":\"1034231841.jpg\",\"3\":\"209634697.jpg\",\"4\":\"279341615.jpg\"}'),
(59, '{\"en\":\"Suspended lamps\"}', 'suspended-lamps', '54', NULL, '2023-02-19 12:31:19', '2023-02-19 12:31:19', '{\"en\":\"Suspended lamps\"}', '{\"en\":\"Suspended lamps\"}', '{\"en\":\"Suspended lamps\"}', '{\"en\":\"Suspended lamps\"}', 'uploads/brand/1758262595982025.png', 'uploads/brand/1758262595982942.jpg', '[\"1704492787.jpg\",\"200097330.jpg\",\"1236564864.jpg\",\"1004423609.jpg\"]'),
(60, '{\"en\":\"Table lamps\"}', 'table-lamps', '54', NULL, '2023-02-19 12:32:08', '2023-02-19 12:32:08', '{\"en\":\"Table lamps\"}', '{\"en\":\"Table lamps\"}', '{\"en\":\"Table lamps\"}', '{\"en\":\"Table lamps\"}', 'uploads/brand/1758262647267951.png', 'uploads/brand/1758262647268770.jpg', '[\"368984110.jpg\",\"1361738390.jpg\",\"292504145.jpg\",\"307997048.jpg\"]');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `images` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `alt` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `images`, `created_at`, `updated_at`, `alt`) VALUES
(1, '[\"207806179.svg\",\"594473116.webp\",\"370550898.png\",\"1432321285.crdownload\"]', '2023-01-07 16:54:10', '2023-02-16 10:35:49', '{\"en\":\"alt 1\"}'),
(2, '[\"962990324.png\",\"567079878.crdownload\"]', '2023-02-02 07:31:07', '2023-02-16 10:36:24', '{\"en\":\"alt 2\"}');

-- --------------------------------------------------------

--
-- Table structure for table `commons`
--

CREATE TABLE `commons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commons`
--

INSERT INTO `commons` (`id`, `icon1`, `icon2`, `contact_desc`, `created_at`, `updated_at`) VALUES
(1, 'uploads/common/1757983665189472.png', 'uploads/common/1756790752063197.png', '{\"az\":\"<p>MEET OUR PROFESSIONALS23<\\/p>\\r\\n\\r\\n<h2>Together we will do incredible things.<\\/h2>\",\"en\":null}', '2023-01-08 16:13:49', '2023-02-16 10:37:50');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_hours` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `map_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `phone`, `email`, `address`, `fb`, `insta`, `linkedin`, `wp`, `created_at`, `updated_at`, `desc`, `open_hours`, `map_1`, `map_2`) VALUES
(2, '+994 51 215 66 00', 'info@hausluxuryinteriors.az', '{\"en\":\"<p>Ceyhun Hac\\u0131b\\u0259yli 10 Port Baku Mall<\\/p>\",\"az\":\"<p>Ceyhun Hac\\u0131b\\u0259yli 101<br \\/>\\r\\nPort Baku Mall<\\/p>\",\"ru\":\"<p>Ceyhun Hac\\u0131b\\u0259yli 101&nbsp;<\\/p>\\r\\n\\r\\n<p>Port Baku Mall<\\/p>\\r\\n\\r\\n<div id=\\\"gtx-trans\\\" style=\\\"position: absolute; left: -59px; top: -5.33333px;\\\">\\r\\n<div class=\\\"gtx-trans-icon\\\">&nbsp;<\\/div>\\r\\n<\\/div>\"}', 'https://www.facebook.com/profile.php?id=100088017921537', 'https://www.instagram.com/hausluxuryinteriors/', 'https://www.linkedin.com/company/haus-luxury-interiors/', '+994 51 215 66 00', '2023-01-19 01:15:19', '2023-02-10 07:42:06', '{\"en\":null}', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `count_images`
--

CREATE TABLE `count_images` (
  `id` int(11) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `count` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `alt_category_id` varchar(255) NOT NULL,
  `alt_alt_category_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `count_images`
--

INSERT INTO `count_images` (`id`, `category_id`, `count`, `image`, `created_at`, `updated_at`, `alt_category_id`, `alt_alt_category_id`) VALUES
(60, '1', '1', '418137042.jpg', '2023-02-07 02:54:45', '2023-02-07 02:54:45', '4', '12'),
(61, '1', '2', '904710194.jpg', '2023-02-07 06:56:27', '2023-02-07 02:56:27', '4', '12'),
(62, '1', '2', '1426587097.png', '2023-02-07 07:45:14', '2023-02-07 07:45:14', '4', '12'),
(63, '1', '1', '792711130.jpg', '2023-02-07 02:55:22', '2023-02-07 02:55:22', '5', '19'),
(64, '1', '2', '2091854967.png', '2023-02-07 07:45:11', '2023-02-07 07:45:11', '4', '12'),
(65, '1', '2', '979081335.jpg', '2023-02-07 07:45:12', '2023-02-07 07:45:12', '4', '12'),
(66, '1', '1', '362683599.jpg', '2023-02-07 03:26:01', '2023-02-07 03:26:01', '4', '17'),
(67, '1', '2', '340066178.jpg', '2023-02-07 07:26:09', '2023-02-07 03:26:09', '4', '17'),
(68, '1', '1', '1883986184.jpg', '2023-02-07 03:26:04', '2023-02-07 03:26:04', '4', '17'),
(69, '1', '1', '1964199336.jpg', '2023-02-07 03:26:06', '2023-02-07 03:26:06', '4', '17'),
(70, '1', '1', '1617247458.jpg', '2023-02-07 03:26:08', '2023-02-07 03:26:08', '4', '17'),
(71, '2', '2', '921816369.webp', '2023-02-14 07:22:32', '2023-02-14 07:22:32', '7', '18'),
(72, '2', '1', '138141894.webp', '2023-02-07 03:27:08', '2023-02-07 03:27:08', '7', '18'),
(73, '2', '2', '1350811501.webp', '2023-02-14 07:22:31', '2023-02-14 07:22:31', '7', '18'),
(74, '2', '2', '801593317.jpg', '2023-02-14 07:22:33', '2023-02-14 07:22:33', '7', '18'),
(75, '2', '1', '1744631186.webp', '2023-02-07 03:27:13', '2023-02-07 03:27:13', '7', '18'),
(76, '3', '1', '473790291.jpg', '2023-02-07 03:28:18', '2023-02-07 03:28:18', '9', '16'),
(77, '3', '1', '1953533613.jpg', '2023-02-07 03:28:19', '2023-02-07 03:28:19', '9', '16'),
(78, '3', '1', '119861534.jpg', '2023-02-07 03:28:21', '2023-02-07 03:28:21', '9', '16'),
(79, '3', '1', '2008015986.jpg', '2023-02-07 03:28:23', '2023-02-07 03:28:23', '9', '16'),
(80, '3', '1', '498616687.jpg', '2023-02-07 03:28:24', '2023-02-07 03:28:24', '9', '16'),
(81, '1', '4', '1783989248.png', '2023-02-07 07:52:30', '2023-02-07 07:52:30', '4', '17'),
(82, '1', '2', '1321438646.jpg', '2023-02-07 07:45:27', '2023-02-07 07:45:27', '4', '17'),
(83, '1', '3', '903748826.png', '2023-02-07 07:52:33', '2023-02-07 07:52:33', '4', '17'),
(84, '1', '5', '1896494251.png', '2023-02-07 07:51:49', '2023-02-07 07:51:49', '4', '17'),
(85, '1', '3', '212584337.jpg', '2023-02-07 07:52:31', '2023-02-07 07:52:31', '4', '17'),
(86, '1', '2', '665905002.webp', '2023-02-07 07:51:44', '2023-02-07 07:51:44', '4', '17'),
(87, '1', '1', '2071631064.jpg', '2023-02-07 07:45:16', '2023-02-07 07:45:16', '4', '12'),
(88, '3', '3', '806120317.png', '2023-02-07 07:47:46', '2023-02-07 07:47:46', '9', '16'),
(89, '3', '3', '506523088.jpg', '2023-02-07 07:47:47', '2023-02-07 07:47:47', '9', '16'),
(90, '3', '3', '842581297.jpg', '2023-02-07 07:47:49', '2023-02-07 07:47:49', '9', '16'),
(91, '3', '2', '878402549.jpg', '2023-02-07 07:47:23', '2023-02-07 07:47:23', '9', '16'),
(92, '3', '1', '1523131796.jpg', '2023-02-07 07:45:41', '2023-02-07 07:45:41', '9', '16'),
(93, '3', '1', '1836831976.jpg', '2023-02-07 07:45:43', '2023-02-07 07:45:43', '9', '16'),
(94, '3', '1', '1730290545.jpg', '2023-02-07 07:45:44', '2023-02-07 07:45:44', '9', '16'),
(95, '1', '1', '369788212.jpg', '2023-02-07 08:38:07', '2023-02-07 08:38:07', '4', '22'),
(96, '1', '1', '1850093074.jpg', '2023-02-07 08:38:11', '2023-02-07 08:38:11', '4', '22'),
(97, '1', '2', '1699793517.jpg', '2023-02-07 09:04:19', '2023-02-07 09:04:19', '4', '22'),
(98, '1', '1', '66256690.jpg', '2023-02-07 08:38:12', '2023-02-07 08:38:12', '4', '22'),
(99, '1', '1', '2005909863.jpg', '2023-02-07 08:38:14', '2023-02-07 08:38:14', '4', '22'),
(100, '1', '1', '899956127.jpg', '2023-02-07 08:38:15', '2023-02-07 08:38:15', '4', '22'),
(101, '1', '1', '327468790.jpg', '2023-02-07 08:38:18', '2023-02-07 08:38:18', '4', '22'),
(102, '1', '1', '1158767047.jpg', '2023-02-07 08:38:19', '2023-02-07 08:38:19', '4', '22'),
(103, '1', '2', '42042172.jpg', '2023-02-07 14:05:27', '2023-02-07 14:05:27', '4', '21'),
(104, '1', '1', '1867087540.jpg', '2023-02-07 08:57:43', '2023-02-07 08:57:43', '4', '21'),
(105, '1', '1', '961126709.jpg', '2023-02-07 08:59:31', '2023-02-07 08:59:31', '4', '21'),
(106, '1', '4', '16984540.jpg', '2023-02-07 09:02:53', '2023-02-07 09:02:53', '4', '21'),
(107, '1', '4', '1807308818.jpg', '2023-02-07 09:05:44', '2023-02-07 09:05:44', '4', '21'),
(108, '1', '3', '131036694.jpg', '2023-02-07 09:05:43', '2023-02-07 09:05:43', '4', '21'),
(109, '1', '1', '2056179214.jpg', '2023-02-07 09:00:22', '2023-02-07 09:00:22', '4', '22'),
(110, '1', '1', '1950272878.jpg', '2023-02-07 09:02:45', '2023-02-07 09:02:45', '4', '21'),
(111, '1', '1', '1819668506.jpg', '2023-02-07 09:02:47', '2023-02-07 09:02:47', '4', '21'),
(112, '1', '1', '1950764755.jpg', '2023-02-07 09:02:48', '2023-02-07 09:02:48', '4', '21'),
(113, '1', '1', '1861105588.jpg', '2023-02-07 09:03:19', '2023-02-07 09:03:19', '4', '21'),
(114, '1', '1', '291596687.jpg', '2023-02-07 09:03:20', '2023-02-07 09:03:20', '4', '21'),
(115, '1', '1', '38462258.jpg', '2023-02-07 09:05:26', '2023-02-07 09:05:26', '4', '21'),
(116, '1', '1', '1539745023.jpg', '2023-02-07 09:05:56', '2023-02-07 09:05:56', '4', '21'),
(117, '1', '15', '1185905163.png', '2023-02-07 09:18:54', '2023-02-07 09:18:54', '4', '20'),
(118, '1', '21', '979337104.jpg', '2023-02-07 12:14:19', '2023-02-07 12:14:19', '4', '17'),
(119, '1', '5', '358375453.jpg', '2023-02-07 10:44:38', '2023-02-07 10:44:38', '4', '17'),
(120, '1', '7', '731673202.jpg', '2023-02-08 09:45:04', '2023-02-08 09:45:04', '4', '17'),
(121, '1', '4', '1960759802.jpg', '2023-02-08 09:45:14', '2023-02-08 09:45:14', '4', '17'),
(122, '1', '1', '171025349.jpg', '2023-02-07 10:44:53', '2023-02-07 10:44:53', '4', '17'),
(123, '1', '6', '345951235.jpg', '2023-02-08 09:45:10', '2023-02-08 09:45:10', '4', '17'),
(124, '1', '3', '2125570097.jpg', '2023-02-07 10:46:24', '2023-02-07 10:46:24', '4', '20'),
(125, '1', '3', '1003353712.jpg', '2023-02-07 10:46:26', '2023-02-07 10:46:26', '4', '20'),
(126, '1', '1', '1224052323.jpg', '2023-02-07 10:47:40', '2023-02-07 10:47:40', '4', '20'),
(127, '1', '2', '516579966.jpg', '2023-02-07 11:15:45', '2023-02-07 11:15:45', '4', '17'),
(128, '1', '2', '160729850.jpg', '2023-02-08 09:44:44', '2023-02-08 09:44:44', '4', '17'),
(129, '1', '3', '1929582956.jpg', '2023-02-07 12:12:56', '2023-02-07 12:12:56', '4', '20'),
(130, '1', '2', '645037615.jpg', '2023-02-07 12:12:57', '2023-02-07 12:12:57', '4', '20'),
(131, '1', '2', '929125507.jpg', '2023-02-07 12:12:56', '2023-02-07 12:12:56', '4', '20'),
(132, '1', '3', '1781921882.jpg', '2023-02-07 12:13:28', '2023-02-07 12:13:28', '4', '20'),
(133, '1', '1', '1563656054.jpg', '2023-02-07 12:12:58', '2023-02-07 12:12:58', '4', '20'),
(134, '1', '16', '1870345307.jpg', '2023-02-08 09:44:06', '2023-02-08 09:44:06', '4', '20'),
(135, '1', '5', '1976175307.jpg', '2023-02-07 12:13:34', '2023-02-07 12:13:34', '4', '20'),
(136, '1', '15', '1585056211.jpg', '2023-02-08 09:44:31', '2023-02-08 09:44:31', '4', '17'),
(137, '1', '5', '1482096653.jpg', '2023-02-07 12:14:22', '2023-02-07 12:14:22', '4', '17'),
(138, '1', '14', '442108909.jpg', '2023-02-07 12:14:31', '2023-02-07 12:14:31', '4', '17'),
(139, '1', '12', '1433398899.jpg', '2023-02-07 13:57:49', '2023-02-07 13:57:49', '5', '14'),
(140, '1', '6', '1319733264.jpg', '2023-02-07 13:46:13', '2023-02-07 13:46:13', '5', '14'),
(141, '1', '1', '85893089.jpg', '2023-02-07 13:48:22', '2023-02-07 13:48:22', '5', '14'),
(142, '1', '11', '732439768.jpg', '2023-02-07 13:57:50', '2023-02-07 13:57:50', '5', '14'),
(143, '1', '8', '28843309.jpg', '2023-02-07 13:57:53', '2023-02-07 13:57:53', '5', '14'),
(144, '1', '8', '715819757.jpg', '2023-02-07 13:57:56', '2023-02-07 13:57:56', '5', '14'),
(145, '1', '7', '1639981904.jpg', '2023-02-07 13:57:59', '2023-02-07 13:57:59', '5', '14'),
(146, '1', '7', '525960766.jpg', '2023-02-07 13:58:02', '2023-02-07 13:58:02', '5', '14'),
(147, '1', '7', '744118238.jpg', '2023-02-07 13:58:06', '2023-02-07 13:58:06', '5', '14'),
(148, '1', '1', '46447831.jpg', '2023-02-07 13:58:43', '2023-02-07 13:58:43', '5', '14'),
(149, '1', '1', '398389982.jpg', '2023-02-07 13:58:55', '2023-02-07 13:58:55', '5', '14'),
(150, '1', '1', '376008318.jpg', '2023-02-08 07:38:15', '2023-02-08 07:38:15', '5', '19'),
(151, '1', '2', '1189273482.jpg', '2023-02-08 07:56:08', '2023-02-08 07:56:08', '5', '19'),
(152, '1', '2', '449612316.jpg', '2023-02-16 18:48:20', '2023-02-16 18:48:20', '5', '19'),
(153, '1', '1', '1297790253.jpg', '2023-02-08 07:56:08', '2023-02-08 07:56:08', '5', '19'),
(154, '1', '3', '1004313093.jpg', '2023-02-08 13:42:20', '2023-02-08 13:42:20', '5', '19'),
(155, '1', '1', '824956982.jpg', '2023-02-08 09:42:19', '2023-02-08 09:42:19', '4', '21'),
(156, '1', '1', '854604185.jpg', '2023-02-08 09:44:33', '2023-02-08 09:44:33', '4', '17'),
(157, '1', '1', '1481568413.jpg', '2023-02-08 10:20:55', '2023-02-08 10:20:55', '5', '19'),
(158, '1', '3', '1118188992.jpg', '2023-02-08 11:45:49', '2023-02-08 11:45:49', '5', '19'),
(159, '1', '5', '1277493761.jpg', '2023-02-08 11:45:55', '2023-02-08 11:45:55', '5', '19'),
(160, '1', '2', '1090838487.jpg', '2023-02-15 12:52:58', '2023-02-15 12:52:58', '5', '19'),
(161, '1', '1', '1256828889.jpg', '2023-02-08 13:42:36', '2023-02-08 13:42:36', '5', '19'),
(162, '1', '1', '2055034425.jpg', '2023-02-08 14:00:21', '2023-02-08 14:00:21', '5', '19'),
(163, '1', '1', '2031686409.jpg', '2023-02-09 08:53:33', '2023-02-09 08:53:33', '5', '23'),
(164, '1', '1', '87913678.jpg', '2023-02-09 10:08:26', '2023-02-09 10:08:26', '4', '12'),
(165, '1', '1', '390702618.jpg', '2023-02-09 10:08:28', '2023-02-09 10:08:28', '4', '12'),
(166, '1', '1', '39531957.jpg', '2023-02-09 10:08:30', '2023-02-09 10:08:30', '4', '12'),
(167, '1', '1', '1824415084.jpg', '2023-02-10 12:21:37', '2023-02-10 12:21:37', '4', '12'),
(168, '1', '1', '1122037560.jpg', '2023-02-11 11:34:18', '2023-02-11 11:34:18', '4', '27'),
(169, '1', '1', '1934201622.jpg', '2023-02-11 12:18:13', '2023-02-11 12:18:13', '6', '15'),
(170, '1', '1', '1804109606.jpg', '2023-02-11 12:25:44', '2023-02-11 12:25:44', '6', '29'),
(171, '1', '1', '1877159407.jpg', '2023-02-11 12:25:54', '2023-02-11 12:25:54', '6', '29'),
(172, '1', '1', '1942220936.jpg', '2023-02-11 12:25:58', '2023-02-11 12:25:58', '6', '29'),
(173, '2', '2', '1185753904.png', '2023-02-16 07:24:10', '2023-02-16 07:24:10', '7', '18'),
(174, '2', '1', '665722643.png', '2023-02-14 07:50:14', '2023-02-14 07:50:14', '7', '18'),
(175, '2', '1', '971345028.png', '2023-02-14 15:36:55', '2023-02-14 15:36:55', '7', '30'),
(176, '2', '3', '1513032957.png', '2023-02-16 08:28:05', '2023-02-16 08:28:05', '7', '30'),
(177, '2', '1', '1033687945.png', '2023-02-15 12:25:27', '2023-02-15 12:25:27', '7', '30'),
(178, '2', '1', '820190410.gif', '2023-02-15 12:53:57', '2023-02-15 12:53:57', '7', '30'),
(179, '2', '1', '633667750.gif', '2023-02-16 08:47:03', '2023-02-16 08:47:03', '7', '30'),
(180, '3', '1', '525702574.jpg', '2023-02-16 08:50:48', '2023-02-16 08:50:48', '9', '34'),
(181, '3', '1', '102943952.jpg', '2023-02-16 09:37:06', '2023-02-16 09:37:06', '9', '34'),
(182, '1', '1', '1626668673.jpg', '2023-02-16 18:43:08', '2023-02-16 18:43:08', '6', '15'),
(183, '1', '1', '1094386746.jpg', '2023-02-16 18:47:55', '2023-02-16 18:47:55', '5', '19'),
(184, '1', '1', '1080066459.jpg', '2023-02-16 18:48:12', '2023-02-16 18:48:12', '5', '19'),
(185, '1', '3', '1284402787.jpg', '2023-02-16 18:49:52', '2023-02-16 18:49:52', '5', '14'),
(186, '1', '1', '2076557905.jpg', '2023-02-17 07:10:47', '2023-02-17 07:10:47', '6', '41'),
(187, '1', '1', '1034498949.jpg', '2023-02-17 07:11:23', '2023-02-17 07:11:23', '6', '41'),
(188, '1', '1', '705460621.jpg', '2023-02-17 07:13:48', '2023-02-17 07:13:48', '6', '42'),
(189, '1', '2', '142898515.jpg', '2023-02-17 09:04:23', '2023-02-17 09:04:23', '6', '44'),
(190, '1', '1', '1084307235.jpg', '2023-02-17 07:20:40', '2023-02-17 07:20:40', '6', '44'),
(191, '1', '1', '1810334100.jpg', '2023-02-17 07:20:41', '2023-02-17 07:20:41', '6', '44'),
(192, '1', '1', '804413715.jpg', '2023-02-17 07:20:43', '2023-02-17 07:20:43', '6', '44'),
(193, '1', '1', '1816659912.jpg', '2023-02-17 07:20:44', '2023-02-17 07:20:44', '6', '44'),
(194, '1', '1', '1890494475.jpg', '2023-02-17 07:20:45', '2023-02-17 07:20:45', '6', '44'),
(195, '2', '1', '30557974.jpg', '2023-02-17 07:24:16', '2023-02-17 07:24:16', '36', '39'),
(196, '1', '1', '1611501604.jpg', '2023-02-17 09:06:16', '2023-02-17 09:06:16', '4', '12'),
(197, '1', '1', '1186628289.jpg', '2023-02-18 14:38:11', '2023-02-18 14:38:11', '5', '48'),
(198, '1', '1', '461104130.jpg', '2023-02-19 19:21:26', '2023-02-19 19:21:26', '4', '27'),
(199, '1', '1', '264658406.jpg', '2023-02-19 19:22:08', '2023-02-19 19:22:08', '4', '27'),
(200, '1', '1', '1878619477.jpeg', '2023-02-19 19:22:40', '2023-02-19 19:22:40', '6', '15'),
(201, '1', '1', '1211617065.jpg', '2023-02-19 19:26:26', '2023-02-19 19:26:26', '4', '12'),
(202, '1', '1', '1637002711.jpg', '2023-02-19 19:26:53', '2023-02-19 19:26:53', '4', '12'),
(203, '1', '1', '966099406.jpg', '2023-02-19 19:27:18', '2023-02-19 19:27:18', '4', '17'),
(204, '1', '1', '83283815.jpg', '2023-02-19 19:27:32', '2023-02-19 19:27:32', '4', '17');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(5, 'test', 'test@gmail.com', 'test@gmail.com', '2023-02-03 05:03:53', '2023-02-03 05:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Az', 'az', '2022-11-01 02:25:07', '2022-11-01 02:34:52'),
(2, 'En', 'en', '2022-11-01 02:34:47', '2023-01-05 07:45:29'),
(4, 'Ru', 'ru', '2023-02-08 13:33:10', '2023-02-08 13:33:10');

-- --------------------------------------------------------

--
-- Table structure for table `meta_tags`
--

CREATE TABLE `meta_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_meta_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_meta_keyw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_meta_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_meta_keyw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_meta_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_meta_keyw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_meta_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_meta_keyw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `blog_meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_meta_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_meta_keyw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meta_tags`
--

INSERT INTO `meta_tags` (`id`, `about_meta_title`, `about_meta_desc`, `about_meta_keyw`, `home_meta_title`, `home_meta_desc`, `home_meta_keyw`, `contact_meta_title`, `contact_meta_desc`, `contact_meta_keyw`, `portfolio_meta_title`, `portfolio_meta_desc`, `portfolio_meta_keyw`, `created_at`, `updated_at`, `blog_meta_title`, `blog_meta_desc`, `blog_meta_keyw`) VALUES
(1, '{\"en\":\"about meta title\",\"az\":\"about meta title\"}', '{\"en\":\"about meta desc\",\"az\":\"about meta desc\"}', '{\"en\":\"about meta keyw\",\"az\":\"about meta keyw\"}', '{\"en\":\"Haus Luxury \\u0130nteriors  -  Multibrend Showroom\",\"az\":\"home meta title\"}', '{\"en\":\"Transform your space with Haus Luxury Interiors\' premium selection of furniture, lighting, and decor from Italian and American brands. Shop with confidence and expert design advice. Experience luxury living today.\",\"az\":\"home meta desc\"}', '{\"en\":\"home meta keyw\",\"az\":\"home meta keyw\"}', '{\"en\":\"contact meta title\",\"az\":\"contact meta title\"}', '{\"en\":\"contact meta desc\",\"az\":\"contact meta desc\"}', '{\"en\":\"contact meta keyw\",\"az\":\"contact meta keyw\"}', '{\"en\":\"portfolio meta title\",\"az\":\"portfolio meta title\"}', '{\"en\":\"portfolio meta desc\",\"az\":\"portfolio meta desc\"}', '{\"en\":\"portfolio meta keyw\",\"az\":\"portfolio meta keyw\"}', '2023-01-06 05:52:55', '2023-02-09 10:12:07', '{\"en\":\"blog meta title\"}', '{\"en\":\"blog meta desc\"}', '{\"en\":\"blog meta keyw\"}');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_05_115732_create_blogs_table', 2),
(6, '2023_01_05_120342_add_column_to_blogs_table', 3),
(7, '2023_01_05_120940_create_tags_table', 4),
(8, '2023_01_05_121111_add_meta_blogs_table', 4),
(9, '2023_01_06_084223_create_meta_tags_table', 5),
(10, '2023_01_07_191830_create_contacts_table', 6),
(11, '2023_01_07_194431_create_sliders_table', 7),
(12, '2023_01_07_200220_create_abouts_table', 8),
(13, '2023_01_07_202104_create_clients_table', 9),
(14, '2023_01_07_212633_create_services_table', 10),
(15, '2023_01_07_214359_create_projects_table', 11),
(16, '2023_01_07_214840_add_slug_to_projects_table', 12),
(17, '2023_01_07_215031_add_meta_tags_to_projects_table', 13),
(18, '2023_01_08_194703_create_commons_table', 14),
(19, '2023_01_17_115655_add_column_sliders_table', 15),
(20, '2023_01_18_082316_create_attributes_table', 16),
(23, '2023_01_19_113846_create_forms_table', 19),
(25, '2023_01_27_081959_add_column_projects_table', 21),
(26, '2023_01_31_064245_add_column_attributes_table', 22),
(27, '2023_01_31_071003_add_column_contacts_table', 23),
(28, '2023_01_19_050135_add_open_hours_contact_table', 24),
(29, '2023_01_27_073321_add_column_contacts_table', 24),
(30, '2023_01_31_072901_create_portfolio_imgs_table', 24),
(31, '2023_01_31_072927_create_portfolio_videos_table', 24),
(32, '2023_01_31_081530_add_column_images_table', 25),
(33, '2023_01_31_082237_create_brands_table', 26),
(34, '2023_02_02_050441_create_products_table', 27),
(35, '2023_02_02_053553_add_category_id_products_table', 28),
(36, '2023_02_02_072655_add_column_meta_tags_table', 29),
(37, '2023_02_02_072806_add_columns_brands_table', 29),
(38, '2023_02_02_103824_add_desc_1_sliders_table', 30),
(39, '2023_02_03_060517_add_desc_to_brands_table', 31);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_imgs`
--

CREATE TABLE `portfolio_imgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_imgs`
--

INSERT INTO `portfolio_imgs` (`id`, `image`, `created_at`, `updated_at`, `title`) VALUES
(1, '[\"1947521477.jpg\",\"1925583581.jpg\",\"1331219076.jpg\",\"1061714937.jpg\",\"978696264.jpg\",\"778716403.jpg\",\"1093107044.jpg\",\"1683558361.jpg\",\"1177319247.jpg\",\"2139877793.jpg\",\"1555007613.jpg\",\"730904203.jpg\"]', '2023-01-31 04:09:39', '2023-02-03 04:41:12', '{\"en\":\"title 23 en\",\"az\":\"title 23 az\"}');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_videos`
--

CREATE TABLE `portfolio_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_videos`
--

INSERT INTO `portfolio_videos` (`id`, `link`, `created_at`, `updated_at`) VALUES
(5, 'https://www.youtube.com/embed/kq5CpnT1N48', '2023-02-03 04:47:18', '2023-02-04 09:32:21'),
(6, 'https://www.youtube.com/embed/zumJJUL_ruM', '2023-02-03 04:47:22', '2023-02-03 04:47:22'),
(7, 'https://www.youtube.com/embed/kq5CpnT1N48', '2023-02-04 09:33:40', '2023-02-04 09:33:40'),
(8, 'https://www.youtube.com/embed/efwEUYDTkeg', '2023-02-04 09:35:45', '2023-02-04 09:35:45'),
(9, 'https://www.youtube.com/embed/G8VgK3pioBM', '2023-02-04 09:36:24', '2023-02-04 09:36:24');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `meta_title`, `meta_keyword`, `meta_desc`, `images`, `alt`, `slug`, `created_at`, `updated_at`, `category_id`) VALUES
(1, '{\"en\":\"Caracole Azerbaijan, Valentina Collection\"}', '{\"en\":\"Avondale\"}', '{\"en\":\"Valentina reimagines classic silhouettes in Matte Pearl, and White\"}', '[\"966099406.jpg\",\"83283815.jpg\",\"1402328273.jpg\",\"695804857.jpg\",\"1244767547.jpg\",\"1546615122.jpg\",\"294002758.jpg\",\"1407464647.jpg\",\"128890816.jpg\",\"33043004.jpg\",\"1334177152.jpg\",\"1586164913.jpg\",\"285105134.jpg\",\"2091493528.jpg\",\"99322284.jpg\",\"1112606997.jpg\",\"1665578695.jpg\",\"897238749.jpg\",\"438762513.jpg\",\"967799440.jpg\",\"390751099.jpg\",\"1805594575.jpg\",\"246690849.jpg\",\"1991285734.jpg\",\"2063647936.jpg\",\"330751980.jpg\",\"1659749296.jpg\",\"462488528.jpg\",\"1050553084.jpg\",\"276669330.jpg\",\"840667761.jpg\",\"407872023.jpg\",\"212048057.jpg\",\"698607218.jpg\",\"1345015165.jpg\",\"1949906445.jpg\"]', '{\"en\":\"Avondale\"}', '-1', '2023-02-02 02:03:54', '2023-02-09 09:39:22', '17'),
(2, '{\"en\":\"Valentino\"}', '{\"en\":\"Valentino\"}', '{\"en\":\"Valentino\"}', '{\"0\":\"2042219776.jpg\",\"1\":\"145205036.jpg\",\"2\":\"1642166803.jpg\",\"3\":\"1145031723.jpg\",\"4\":\"564022711.jpg\",\"5\":\"862971385.jpg\",\"6\":\"330988743.jpg\",\"7\":\"1824415084.jpg\",\"8\":\"1611501604.jpg\",\"11\":\"1299261007.jpg\",\"12\":\"87913678.jpg\",\"13\":\"1966698904.jpg\",\"14\":\"390702618.jpg\",\"15\":\"275829626.jpg\",\"19\":\"1495061648.jpg\",\"23\":\"1499402596.jpg\",\"24\":\"1241449794.jpg\",\"25\":\"1197916422.jpg\",\"26\":\"1089830342.jpg\",\"27\":\"2086079349.jpg\",\"28\":\"1595029796.jpg\",\"31\":\"1135815083.jpg\",\"32\":\"1952804828.jpg\",\"33\":\"1319680322.jpg\",\"34\":\"1150144905.jpg\",\"35\":\"1637002711.jpg\",\"36\":\"526170001.jpg\"}', '{\"en\":\"Valentino\"}', '-2', '2023-02-03 09:06:26', '2023-05-24 16:22:00', '12'),
(5, '{\"en\":\"Test Valention\"}', '{\"en\":\"Test Valention\"}', '{\"en\":\"Test Valention\"}', '[\"2055034425.jpg\",\"1004313093.jpg\",\"1256828889.jpg\",\"1481568413.jpg\",\"1017082213.jpg\",\"1090838487.jpg\",\"1118188992.jpg\",\"854750621.jpg\",\"1662859989.jpg\",\"1080066459.jpg\",\"449612316.jpg\",\"1277493761.jpg\",\"376008318.jpg\",\"1189273482.jpg\",\"1297790253.jpg\",\"1484325125.jpg\",\"2090809026.jpg\",\"578654897.jpg\",\"2093117286.jpg\",\"1094386746.jpg\"]', '{\"en\":\"Test Valention\"}', '-5', '2023-02-06 06:04:24', '2023-02-08 07:36:51', '19'),
(7, '{\"en\":\"Lillian\"}', '{\"en\":\"Lillian\"}', '{\"en\":\"Lillian\"}', '[\"369788212.jpg\",\"1453529467.jpg\",\"1850093074.jpg\",\"1699793517.jpg\",\"899956127.jpg\",\"697943990.jpg\",\"66256690.jpg\",\"2005909863.jpg\",\"1563214765.jpg\",\"1676662317.jpg\",\"327468790.jpg\",\"1158767047.jpg\",\"588240153.jpg\",\"440735429.jpg\",\"1234438083.jpg\",\"733842707.jpg\",\"450925325.jpg\",\"2056179214.jpg\"]', '{\"en\":\"Lillian\"}', '-7', '2023-02-07 08:35:21', '2023-02-07 08:35:21', '22'),
(10, '{\"en\":\"Fontainebleau\"}', '{\"en\":\"Fontainebleau\"}', '{\"en\":\"Fontainebleau\"}', '{\"1\":\"1956859979.jpg\",\"2\":\"1870345307.jpg\",\"3\":\"552991468.jpg\",\"4\":\"337077897.jpg\",\"5\":\"1940239323.jpg\",\"6\":\"859742162.jpg\",\"7\":\"695871969.jpg\",\"8\":\"1015034348.jpg\",\"9\":\"929125507.jpg\",\"10\":\"1929582956.jpg\",\"11\":\"1781921882.jpg\",\"12\":\"645037615.jpg\",\"13\":\"338196144.jpg\",\"14\":\"894938145.jpg\",\"15\":\"1144151740.jpg\",\"16\":\"1082985782.jpg\",\"17\":\"1224052323.jpg\",\"18\":\"552318747.jpg\",\"19\":\"1976175307.jpg\",\"20\":\"1563656054.jpg\",\"21\":\"2125570097.jpg\",\"22\":\"1003353712.jpg\"}', '{\"en\":\"Fontainebleau\"}', '-9', '2023-02-07 08:58:10', '2023-02-07 10:46:15', '20'),
(11, '{\"en\":\"calligaris table\"}', '{\"en\":\"calligaris table\"}', '{\"en\":\"calligaris table\"}', '[\"130684018.jpg\",\"1319733264.jpg\",\"732439768.jpg\",\"1433398899.jpg\",\"901438985.jpg\",\"85893089.jpg\",\"1347346064.jpg\",\"28843309.jpg\",\"412619464.jpg\",\"1817366278.jpg\",\"935261496.jpg\",\"715819757.jpg\",\"1012712415.jpg\",\"2096574287.jpg\",\"715174584.jpg\",\"1639981904.jpg\",\"1620811181.jpg\",\"1762741099.jpg\",\"1589926968.jpg\",\"525960766.jpg\",\"1628818444.jpg\",\"1532048913.jpg\",\"1652770997.jpg\",\"744118238.jpg\",\"350689267.jpg\",\"1808662003.jpg\",\"398389982.jpg\",\"384084338.jpg\",\"1624573703.jpg\",\"766038657.jpg\",\"46447831.jpg\",\"708897790.jpg\",\"670709567.jpg\",\"181091830.jpg\",\"1376494412.jpg\",\"1505364676.jpg\",\"1555781095.jpg\",\"1690836149.jpg\",\"517284932.jpg\",\"1284402787.jpg\"]', '{\"en\":\"calligaris table\"}', '-10', '2023-02-07 13:43:38', '2023-02-07 13:49:00', '14'),
(16, '{\"en\":\"Sofa\"}', '{\"en\":\"Sofa\"}', '{\"en\":\"Sofa\"}', '[\"1509243929.jpg\",\"1908112823.jpg\",\"2031686409.jpg\",\"2142190653.jpg\",\"729466867.jpg\",\"1732398086.jpg\",\"1092975282.jpg\",\"1208950561.jpg\",\"1446743487.jpg\",\"1580894812.jpg\",\"1561711084.jpg\",\"1555338531.jpg\",\"748299602.jpg\",\"1190314635.jpg\",\"2032682023.jpg\",\"85418668.jpg\",\"1735642156.jpg\",\"832336729.jpg\",\"683932882.jpg\",\"228150783.jpg\"]', '{\"en\":\"Sofa\"}', '-11', '2023-02-09 08:49:44', '2023-02-09 08:49:44', '23'),
(17, '{\"en\":\"EVERLY\"}', '{\"en\":\"EVERLY\"}', '{\"en\":\"EVERLY\"}', '[\"1174896890.jpg\",\"1072485104.jpg\",\"436455834.jpg\",\"208165090.jpg\",\"389105645.jpg\",\"1601024280.jpg\",\"896905883.jpg\",\"1126344103.jpg\",\"1707557217.jpg\",\"600082755.jpg\",\"948084101.jpg\",\"1673230202.jpg\"]', '{\"en\":\"EVERLY\"}', '-12', '2023-02-11 11:28:58', '2023-02-11 11:28:58', '26'),
(18, '{\"en\":\"adela\"}', '{\"en\":\"adela\"}', '{\"en\":\"adela\"}', '[\"2108091025.jpg\",\"497546133.jpg\",\"968534649.jpg\",\"1316185261.jpg\",\"461104130.jpg\",\"630460516.jpg\",\"1616717693.jpg\",\"823262003.jpg\",\"643941909.jpg\",\"1376153566.jpg\",\"815081257.jpg\",\"650790396.jpg\",\"1122037560.jpg\",\"1009029226.jpg\",\"1234641495.jpg\",\"1267223667.jpg\",\"63093950.jpg\",\"2120194760.jpg\",\"1163396238.jpg\",\"252415768.jpg\",\"679596058.jpg\",\"553098193.jpg\",\"21774041.jpg\",\"109211370.jpg\",\"2099269423.jpg\",\"1871441893.jpg\",\"67126776.jpg\",\"2012372153.jpg\",\"1616797546.jpg\",\"1978667229.jpg\",\"933415435.jpg\",\"1105724404.jpg\",\"1755404751.jpg\",\"1193336379.jpg\",\"125057826.jpg\",\"1582741647.jpg\",\"75936657.jpg\",\"1715337628.jpg\",\"431348677.jpg\",\"487585453.jpg\",\"489940224.jpg\",\"264658406.jpg\",\"1154902366.jpg\",\"37862407.jpg\"]', '{\"en\":\"adela\"}', '-13', '2023-02-11 11:34:01', '2023-02-11 11:35:05', '27'),
(19, '{\"en\":\"beds\"}', '{\"en\":\"beds\"}', '{\"en\":\"beds\"}', '[\"514687451.jpg\",\"162419834.jpg\",\"1862087467.jpg\",\"423682979.jpg\",\"1257868135.jpg\",\"1761188303.jpg\",\"579415829.jpg\",\"1063999841.jpg\",\"1894949060.jpg\",\"1465861800.jpg\",\"316246090.jpg\",\"2068390929.jpg\"]', '{\"en\":\"beds\"}', '-14', '2023-02-11 12:12:13', '2023-02-11 12:12:13', '28'),
(20, '{\"en\":\"sofa\"}', '{\"en\":\"sofa\"}', '{\"en\":\"sofa\"}', '[\"1934201622.jpg\",\"614937991.jpg\",\"1878619477.jpeg\",\"1140749939.jpg\",\"1858420454.jpg\",\"1626668673.jpg\"]', '{\"en\":\"sofa\"}', '-15', '2023-02-11 12:18:01', '2023-02-11 12:18:01', '15'),
(21, '{\"en\":\"Chairs\"}', '{\"en\":\"Chairs\"}', '{\"en\":\"Chairs\"}', '[\"780496357.jpg\",\"497115240.jpg\",\"2030495507.jpg\",\"1782126297.jpg\",\"1312758952.jpg\",\"465317112.jpg\",\"1836912278.jpg\",\"1282593270.jpg\",\"1792136455.jpg\",\"1804109606.jpg\",\"1942220936.jpg\",\"658223384.jpg\",\"889219335.jpg\",\"556083907.jpg\",\"1336665956.jpg\",\"1877159407.jpg\",\"288890242.jpg\",\"1401626881.jpg\",\"874034395.jpg\",\"413546882.jpg\",\"1551725044.jpg\",\"1260091512.jpg\",\"97969625.jpg\",\"1471632134.jpg\",\"2111261763.jpg\",\"1913035262.jpg\",\"930829504.jpg\",\"528100135.jpg\",\"220135378.jpg\"]', '{\"en\":\"Chairs\"}', '-16', '2023-02-11 12:25:06', '2023-02-11 12:25:29', '29'),
(22, '{\"en\":\"giraffe\"}', '{\"en\":\"giraffe\"}', '{\"en\":\"giraffe\"}', '[\"1185753904.png\",\"1799491050.png\",\"665722643.png\",\"984855566.png\",\"781156324.png\",\"1399281316.png\"]', '{\"en\":\"giraffe\"}', '-17', '2023-02-14 07:21:40', '2023-02-14 07:24:14', '18'),
(23, '{\"en\":\"rabbit\"}', '{\"en\":\"rabbit\"}', '{\"en\":\"rabbit\"}', '[\"1513032957.png\",\"971345028.png\",\"1033687945.png\",\"2067259439.png\",\"332571406.png\",\"1110747323.png\",\"1111747460.png\",\"1975102150.png\",\"2036689610.png\",\"1434620041.png\",\"820190410.gif\",\"748563853.gif\",\"633667750.gif\"]', '{\"en\":\"rabbit\"}', '-3', '2023-02-14 08:01:09', '2023-02-14 08:01:09', '30'),
(24, '{\"en\":\"atelier\"}', '{\"en\":\"atelier\"}', '{\"en\":\"atelier\"}', '[\"1619101497.jpg\",\"1230157430.jpg\",\"1224018488.jpg\",\"1597687007.jpg\",\"847745030.jpg\",\"202388027.jpg\",\"1829786862.jpg\",\"1999916979.jpg\",\"1668730452.jpg\"]', '{\"en\":\"atelier\"}', '-18', '2023-02-16 08:05:08', '2023-02-16 08:05:08', '30'),
(25, '{\"en\":\"atelier\"}', '{\"en\":\"atelier\"}', '{\"en\":\"atelier\"}', '[\"161026962.jpg\",\"1167826995.jpg\",\"394189787.jpg\",\"2145672107.jpg\",\"1494143753.jpg\",\"1358481697.jpg\",\"813957768.jpg\",\"1157692146.jpg\",\"1904378871.jpg\"]', '{\"en\":\"atelier\"}', '-19', '2023-02-16 08:07:55', '2023-02-16 08:07:55', '30'),
(26, '{\"en\":\"atelier\"}', '{\"en\":\"atelier\"}', '{\"en\":\"atelier\"}', '[\"1129956756.jpg\",\"1777810036.jpg\",\"1115805572.jpg\",\"161039256.jpg\",\"221263247.jpg\",\"1423634180.jpg\",\"528654533.jpg\",\"950903740.jpg\",\"621412618.jpg\"]', '{\"en\":\"atelier\"}', '-4', '2023-02-16 08:30:26', '2023-02-16 08:30:26', '31'),
(27, '{\"en\":\"Atelier - Glass\"}', '{\"en\":\"Atelier - Glass\"}', '{\"en\":\"Atelier - Glass\"}', '[\"180898741.jpg\",\"1096058783.jpg\",\"525702574.jpg\",\"1654201850.jpg\",\"1082575226.jpg\",\"718257829.jpg\",\"1937625585.jpg\",\"1251817372.jpg\",\"1094594493.jpg\",\"102943952.jpg\",\"307070694.jpg\",\"441529547.jpg\",\"1158953219.jpg\",\"1292904017.jpg\",\"1457585959.jpg\",\"443360538.jpg\",\"494112682.jpg\",\"554798054.jpg\",\"739464880.jpg\",\"132164862.jpg\",\"453595923.jpg\",\"1600826077.jpg\",\"1545722020.jpg\",\"328432540.jpg\",\"423532346.jpg\",\"1868926869.jpg\",\"377508710.jpg\",\"1882522083.jpg\",\"927979450.jpg\",\"1731147888.jpg\",\"450097351.jpg\",\"318612626.jpg\",\"1578314107.jpg\",\"617252474.jpg\",\"400134689.jpg\",\"144302876.jpg\",\"75854665.jpg\",\"1938011660.jpg\",\"2073811858.jpg\",\"1335371654.jpg\",\"2038000008.jpg\",\"1480793707.jpg\",\"1841939268.jpg\",\"844474642.jpg\",\"1434532697.jpg\",\"1409818607.png\",\"1030529673.jpg\",\"1030904864.jpg\",\"619083583.jpg\",\"1200438807.jpg\",\"668587729.jpg\",\"1837815664.jpg\",\"415082024.jpg\",\"584931139.jpg\",\"1150256507.jpg\",\"103901837.jpg\",\"799293888.jpg\",\"407730324.jpg\",\"891862705.jpg\"]', '{\"en\":\"Atelier - Glass\"}', '-6', '2023-02-16 08:50:36', '2023-02-16 09:38:39', '34'),
(28, '{\"en\":\"SCENTED CANDLES\"}', '{\"en\":\"SCENTED CANDLES\"}', '{\"en\":\"SCENTED CANDLES\"}', '[\"1040437532.jpg\",\"771820667.jpg\",\"518938251.jpg\",\"753161748.jpg\",\"438213025.jpg\",\"1887714565.jpg\",\"1534811181.jpg\",\"1262347933.jpg\",\"1070674283.jpg\",\"371984239.jpg\"]', '{\"en\":\"SCENTED CANDLES\"}', '-8', '2023-02-16 13:15:54', '2023-02-16 13:35:32', '37'),
(29, '{\"en\":\"Maria Teresa\"}', '{\"en\":\"Maria Teresa\"}', '{\"en\":\"Maria Teresa\"}', '[\"1412308125.jpg\",\"918968363.jpg\",\"1320068324.jpg\",\"1241130565.jpg\",\"228834661.jpg\",\"2120654445.jpg\",\"1363874230.jpg\",\"1843964110.jpg\",\"1853140275.jpg\",\"2113835250.jpg\",\"212193528.jpg\",\"310465410.jpg\",\"1429906235.jpg\",\"1428705445.jpg\",\"748170141.jpg\",\"1979659112.jpg\",\"1274763430.jpg\",\"711186321.jpg\",\"528869558.jpg\",\"2124024694.jpg\",\"284170273.jpg\",\"1232796763.jpg\",\"1328786427.jpg\",\"1912510748.jpg\",\"1286852243.jpg\",\"192295840.jpg\",\"1812837873.jpg\",\"1987437946.jpg\",\"207584926.jpg\",\"628837004.jpg\",\"575340906.jpg\",\"984490963.jpg\",\"54784172.jpg\",\"1890595478.jpg\",\"605627809.jpg\",\"1607696441.jpg\",\"1884166040.jpg\",\"903744461.jpg\",\"404040618.jpg\",\"1219226738.jpg\",\"2138752536.jpg\",\"1858685767.jpg\",\"847884039.jpg\",\"81062364.jpg\",\"1738505763.jpg\",\"1887856340.jpg\",\"427808650.jpg\",\"2036764355.jpg\",\"2061307803.jpg\",\"1576994097.jpg\",\"432763214.jpg\",\"637766870.jpg\",\"1565689870.jpg\",\"174003983.jpg\",\"1728123880.jpg\",\"966200921.jpg\",\"277800343.jpg\",\"1173550258.jpg\",\"5549883.jpg\",\"1278770554.jpg\",\"1607078606.jpg\",\"107480656.jpg\",\"589658069.jpg\"]', '{\"en\":\"Maria Teresa\"}', '-20', '2023-02-16 13:30:26', '2023-02-16 13:30:26', '38'),
(30, '{\"en\":\"HOME FRAGRANCES\"}', '{\"en\":\"HOME FRAGRANCES\"}', '{\"en\":\"HOME FRAGRANCES\"}', '[\"1346952949.jpg\",\"276359371.jpg\",\"1838387825.jpg\",\"1230803210.jpg\",\"81689064.jpg\",\"316610080.jpg\",\"564153976.jpg\",\"1020301545.jpg\",\"1744933738.jpg\",\"1304792923.jpg\",\"1119268385.jpg\",\"1987229452.jpg\",\"1318133447.jpg\",\"171152951.jpg\",\"616291009.jpg\",\"1953770961.jpg\",\"1111889776.jpg\",\"1721630958.jpg\",\"580663491.jpg\",\"1213038339.jpg\",\"534376864.jpg\",\"30557974.jpg\",\"1850737355.jpg\",\"1725085084.jpg\",\"759159071.jpg\",\"1274673893.jpg\",\"1522379680.jpg\",\"1282577689.jpg\",\"467453812.jpg\",\"271235727.jpg\",\"1961841398.jpg\",\"2009242353.jpg\",\"1961761980.jpg\",\"908044473.jpg\",\"1983242880.jpg\",\"1563785494.jpg\",\"588936129.jpg\"]', '{\"en\":\"HOME FRAGRANCES\"}', '-21', '2023-02-16 13:39:24', '2023-02-16 13:39:24', '39'),
(31, '{\"en\":\"ACCESSOIRES\"}', '{\"en\":\"ACCESSOIRES\"}', '{\"en\":\"ACCESSOIRES\"}', '[\"1657743662.jpg\",\"1011724529.jpg\",\"285618342.jpg\",\"2038256717.jpg\",\"1527010675.jpg\",\"265269195.jpg\",\"710510934.webp\",\"745155779.webp\",\"470537289.webp\"]', '{\"en\":\"ACCESSOIRES\"}', '-22', '2023-02-16 13:46:02', '2023-02-16 13:46:02', '40'),
(32, '{\"en\":\"Wardrobes\"}', '{\"en\":\"Wardrobes\"}', '{\"en\":\"Wardrobes\"}', '[\"676422229.jpg\",\"1381535186.jpg\",\"2003003604.jpg\",\"1453285041.jpg\",\"1959792692.jpg\",\"1928841562.jpg\",\"1148868739.jpg\",\"1034498949.jpg\",\"125653721.jpg\",\"1028885282.jpg\",\"1008803301.jpg\",\"414519670.jpg\",\"205156860.jpg\",\"1812576607.jpg\",\"731485458.jpg\",\"2076557905.jpg\",\"1685781858.jpg\",\"121077910.jpg\",\"149424742.jpg\"]', '{\"en\":\"Wardrobes\"}', '-23', '2023-02-17 07:10:16', '2023-02-17 07:10:41', '41'),
(33, '{\"en\":\"Tables and Occasional tables\"}', '{\"en\":\"Tables and Occasional tables\"}', '{\"en\":\"Tables and Occasional tables\"}', '[\"1798546292.jpg\",\"1741427496.jpg\",\"1282411368.jpg\",\"1831317445.jpg\",\"705460621.jpg\",\"1409994425.jpg\",\"1656023385.jpg\",\"1747438803.jpg\",\"1011765708.jpg\",\"699476519.jpg\",\"121950087.jpg\",\"1560543392.jpg\",\"1047257241.jpg\",\"63059190.jpg\",\"271733410.jpg\",\"1007426219.jpg\",\"1392605940.jpg\"]', '{\"en\":\"Tables and Occasional tables\"}', '-24', '2023-02-17 07:13:37', '2023-02-17 07:13:37', '42'),
(34, '{\"en\":\"Day systems\"}', '{\"en\":\"Day systems\"}', '{\"en\":\"Day systems\"}', '[\"952995836.jpg\",\"1220780804.jpg\",\"1406375442.jpg\",\"1748072485.jpg\",\"1177645911.jpg\",\"1150850656.jpg\",\"633496786.jpg\",\"1199769575.jpg\",\"716767650.jpg\",\"1412626693.jpg\",\"1267317745.jpg\",\"1794247987.jpg\",\"1484596290.jpg\",\"2071768812.jpg\",\"1455321947.jpg\",\"1813294966.jpg\",\"732961878.jpg\",\"437013008.jpg\",\"1503243662.jpg\",\"2012210763.jpg\",\"2127865993.jpg\"]', '{\"en\":\"Day systems\"}', '-25', '2023-02-17 07:18:20', '2023-02-17 07:18:37', '43'),
(35, '{\"en\":\"Sideboards and display cabinets\"}', '{\"en\":\"Sideboards and display cabinets\"}', '{\"en\":\"Sideboards and display cabinets\"}', '[\"1816659912.jpg\",\"804413715.jpg\",\"1810334100.jpg\",\"1084307235.jpg\",\"142898515.jpg\",\"1479886377.jpg\",\"1890494475.jpg\"]', '{\"en\":\"Sideboards and display cabinets\"}', '-26', '2023-02-17 07:20:26', '2023-02-17 07:20:26', '44'),
(36, '{\"en\":\"Complementi\"}', '{\"en\":\"Complementi\"}', '{\"en\":\"Complementi\"}', '[\"1456310980.jpg\",\"1142442480.jpg\",\"447485342.jpg\",\"14600055.jpg\",\"1247265817.jpg\",\"629913050.jpg\",\"1703343083.jpeg\",\"1469591116.jpg\",\"1878055767.jpg\",\"971369993.jpg\",\"22079843.jpg\"]', '{\"en\":\"Complementi\"}', '-27', '2023-02-17 07:22:24', '2023-02-17 07:22:24', '45'),
(37, '{\"en\":\"Cabinet\"}', '{\"en\":\"Cabinet\"}', '{\"en\":\"Cabinet\"}', '[\"652810438.jpg\",\"207835773.jpg\",\"425476138.jpg\",\"475959339.jpg\",\"117734353.jpg\",\"220622609.jpg\",\"1753090023.jpg\",\"1052153195.jpg\",\"1077334123.jpg\",\"1445510846.jpg\",\"977481401.jpg\",\"1957182017.jpg\",\"939008311.jpg\",\"1186860469.jpg\",\"1982010333.jpg\",\"830019186.jpg\",\"489774258.jpg\",\"2073929624.jpg\",\"368906620.jpg\",\"1235835272.jpg\",\"891244546.jpg\",\"1805735804.jpg\",\"1451909351.jpg\",\"1449509895.jpg\",\"1544505147.jpg\",\"358944456.jpg\",\"1196050956.jpg\",\"1907564831.jpg\",\"2037335597.jpg\",\"195589052.jpg\",\"887917996.jpg\",\"205180088.jpg\",\"1727915634.jpg\",\"512142412.jpg\",\"1471272094.jpg\",\"1825654104.jpg\",\"2064896748.jpg\",\"1876011041.jpg\",\"1877853002.jpg\"]', '{\"en\":\"Cabinet\"}', '-28', '2023-02-18 14:33:42', '2023-02-18 14:33:42', '46'),
(38, '{\"en\":\"Rugs\"}', '{\"en\":\"Rugs\"}', '{\"en\":\"Rugs\"}', '[\"766980055.jpg\",\"1314289087.jpg\",\"1255956134.jpg\",\"166315971.jpg\",\"1763060827.jpg\",\"1730231495.jpg\",\"960440211.jpg\",\"763488223.jpg\",\"150602914.jpg\",\"1972231883.jpg\",\"1494615186.jpg\",\"35236366.jpg\",\"754585526.jpg\",\"524298347.jpg\",\"394221625.jpg\",\"1844257994.jpg\",\"1477269784.jpg\",\"1023225011.jpg\",\"1324084702.jpg\"]', '{\"en\":\"Rugs\"}', '-29', '2023-02-18 14:36:32', '2023-02-18 14:36:32', '47'),
(39, '{\"en\":\"Occasional furniture\"}', '{\"en\":\"Occasional furniture\"}', '{\"en\":\"Occasional furniture\"}', '[\"617601836.jpg\",\"198606263.jpg\",\"2051956256.jpg\",\"1387400990.jpg\",\"1756501845.jpg\",\"1133890236.jpg\",\"806206997.jpg\",\"586391454.jpg\",\"1920147981.jpg\",\"1168818672.jpg\",\"981727168.jpg\",\"858495237.jpg\",\"395708330.jpg\",\"1916123726.jpg\",\"872927700.jpg\",\"1648380950.jpg\",\"2018700202.jpg\",\"1177165970.jpg\",\"1347102206.jpg\",\"370579820.jpg\",\"1056641022.jpg\",\"218678780.jpg\",\"1876367701.jpg\",\"1475380913.jpg\",\"962477031.jpg\",\"1864061592.jpg\",\"1752351059.jpg\",\"1186628289.jpg\",\"174791659.jpg\",\"357509541.jpg\",\"1106153594.jpg\",\"1399491330.jpg\",\"1417413.jpg\",\"1549028158.jpg\",\"126101626.jpg\",\"1338931747.jpg\",\"441638843.jpg\",\"224667107.jpg\",\"219362763.jpg\",\"332901240.jpg\",\"1101286112.jpg\",\"1037632028.jpg\",\"267852459.jpg\",\"1973289334.jpg\",\"108490451.jpg\",\"966443353.jpg\",\"761782461.jpg\",\"1188241819.jpg\",\"2096415440.jpg\",\"1344432874.jpg\",\"918295317.jpg\",\"2006258583.jpg\",\"1840371848.jpg\",\"2053998766.jpg\",\"441685313.jpg\",\"1789900917.jpg\",\"368705868.jpg\",\"1411981792.jpg\"]', '{\"en\":\"Occasional furniture\"}', '-30', '2023-02-18 14:37:50', '2023-02-18 14:37:50', '48'),
(40, '{\"en\":\"Objects\"}', '{\"en\":\"Objects\"}', '{\"en\":\"Objects\"}', '[\"1749781490.jpg\",\"67750556.jpg\",\"1309634636.jpg\",\"852331966.jpg\",\"1611684859.jpg\",\"207144426.jpg\",\"833172872.jpg\",\"1683654277.jpg\",\"1430538119.jpg\",\"1535005179.jpg\",\"753115190.jpg\",\"470012550.jpg\",\"730656910.jpg\",\"669796419.jpg\",\"1555731199.jpg\",\"5978971.jpg\",\"491876895.jpg\",\"382935022.jpg\",\"1247600791.jpg\",\"2125707848.jpg\",\"1940416169.jpg\",\"422822805.jpg\",\"1254382085.jpg\",\"1759006615.jpg\",\"717626033.jpg\",\"621661165.jpg\",\"1708338357.jpg\",\"935512745.jpg\",\"1807947389.jpg\",\"1990200777.jpg\",\"1377675323.jpg\",\"28278869.jpg\",\"2058293115.jpg\",\"626148481.jpg\",\"1812439824.jpg\",\"2089204365.jpg\",\"1281732862.jpg\",\"1340533793.jpg\",\"1925670736.jpg\",\"1709828088.jpg\",\"1539969973.jpg\",\"1723004240.jpg\",\"1079290968.jpg\",\"1756176226.jpg\"]', '{\"en\":\"Objects\"}', '-31', '2023-02-18 14:39:09', '2023-02-18 14:39:09', '49'),
(41, '{\"en\":\"Arm chairs\"}', '{\"en\":\"Arm chairs\"}', '{\"en\":\"Arm chairs\"}', '[\"1389488449.jpg\",\"759496194.jpg\",\"965987124.jpg\",\"1090987647.jpg\",\"1077682946.jpg\",\"1021746134.jpg\",\"1678711664.jpg\",\"1401913199.jpg\",\"525034431.jpg\",\"1282510532.jpg\",\"803223378.jpg\",\"30604624.jpg\",\"1270004210.jpg\",\"435847881.jpg\",\"2104692291.jpg\",\"421824727.jpg\",\"1015595706.jpg\",\"189673913.jpg\",\"104333110.jpg\",\"1215556553.jpg\"]', '{\"en\":\"Arm chairs\"}', '-32', '2023-02-18 14:40:19', '2023-02-18 14:40:19', '50'),
(42, '{\"en\":\"Table\"}', '{\"en\":\"Table\"}', '{\"en\":\"Table\"}', '[\"1503769161.jpg\",\"425067283.jpg\",\"413289107.jpg\",\"1434047645.jpg\",\"500896370.jpg\",\"905321039.jpg\",\"969264024.jpg\",\"388819903.jpg\",\"107490516.jpg\",\"189443665.jpg\",\"1400910338.jpg\",\"286609561.jpg\",\"265239582.jpg\",\"710777080.jpg\",\"1354956894.jpg\",\"1055344057.jpg\",\"1046622699.jpg\",\"107558085.jpg\",\"1081110448.jpg\",\"1962114755.jpg\",\"499132377.jpg\",\"1956124606.jpg\",\"1902755035.jpg\",\"379262629.jpg\",\"661626201.jpg\",\"868286094.jpg\",\"34109751.jpg\",\"1408913837.jpg\",\"969971716.jpg\",\"350103703.jpg\",\"755361749.jpg\",\"1190174454.jpg\",\"125257105.jpg\",\"647710388.jpg\",\"1534633081.jpg\",\"1947051195.jpg\",\"102825222.jpg\",\"718994987.jpg\",\"507688140.jpg\",\"381654197.jpg\",\"145608507.jpg\",\"848205185.jpg\",\"1633561711.jpg\",\"1577074463.jpg\",\"1285520524.jpg\",\"716724136.jpg\",\"1721948392.jpg\",\"827779660.jpg\",\"1676272982.jpg\",\"1797162879.jpg\",\"364884361.jpg\",\"2137467769.jpg\",\"1253207717.jpg\",\"259655087.jpg\",\"338874547.jpg\",\"923183919.jpg\",\"1010206402.jpg\",\"254300842.jpg\",\"1316039547.jpg\",\"1253079621.jpg\",\"1888259135.jpg\",\"1898010055.jpg\",\"164003839.jpg\",\"2009957597.jpg\",\"272582968.jpg\",\"291674204.jpg\",\"1344818314.jpg\",\"1004957896.jpg\",\"1291495986.jpg\",\"261256423.jpg\",\"2069392235.jpg\",\"1498751932.jpg\",\"155905373.jpg\",\"1446667008.jpg\",\"362720739.jpg\",\"885058894.jpg\",\"1035717410.jpg\",\"1757843297.jpg\",\"1630153823.jpg\",\"197012729.jpg\",\"76271076.jpg\",\"1065707354.jpg\",\"1590835006.jpg\",\"274507329.jpg\",\"967137442.jpg\",\"415768563.jpg\",\"479097282.jpg\",\"1524075306.jpg\",\"2093424519.jpg\",\"1620130777.jpg\",\"1753895127.jpg\",\"1189963607.jpg\",\"1886414867.jpg\",\"1877268445.jpg\",\"1488489239.jpg\",\"2007256692.jpg\",\"1310156230.jpg\",\"800121850.jpg\",\"1302926649.jpg\",\"277628926.jpg\",\"1376004815.jpg\",\"494194711.jpg\",\"9896461.jpg\",\"869716007.jpg\",\"1352669064.jpg\",\"812773701.jpg\",\"1754970808.jpg\",\"385394145.jpg\",\"589242503.jpg\",\"2091981406.jpg\",\"2055391033.jpg\",\"1374253514.jpg\",\"419034921.jpg\",\"2129771705.jpg\",\"226397426.jpg\",\"1593203303.jpg\",\"1578727949.jpg\",\"939133004.jpg\",\"406250247.jpg\",\"1624227952.jpg\",\"28112510.jpg\",\"1978946020.jpg\",\"197360710.jpg\",\"591901744.jpg\",\"717355709.jpg\",\"1047669563.jpg\",\"393777965.jpg\",\"1106829430.jpg\",\"492848376.jpg\",\"1655880437.jpg\",\"569688525.jpg\",\"606172325.jpg\",\"871980392.jpg\",\"595590481.jpg\",\"2051950198.jpg\",\"705800392.jpg\",\"904030841.jpg\",\"1984038433.jpg\",\"1097776609.jpg\",\"1820856388.jpg\"]', '{\"en\":\"Table\"}', '-33', '2023-02-18 14:44:03', '2023-02-18 14:44:03', '52'),
(43, '{\"en\":\"Appliques\"}', '{\"en\":\"Appliques\"}', '{\"en\":\"Appliques\"}', '[\"1526210641.jpg\",\"1454565349.jpg\",\"1053339578.jpg\",\"946757276.jpg\",\"175627881.jpg\",\"1615884975.jpg\",\"1378453379.jpg\",\"783733160.jpg\",\"344542155.jpg\",\"235708763.png\",\"1791279571.jpg\",\"1003299813.jpg\",\"1082262694.jpg\",\"975074114.jpg\",\"1288425968.jpg\",\"178696314.jpg\",\"1986255909.jpg\",\"2052220457.jpg\",\"1335331944.jpg\",\"653350898.jpg\",\"543106941.jpg\",\"1813172731.jpg\",\"827146685.jpg\",\"900144262.jpg\",\"1544176134.jpg\",\"1189859641.png\",\"962267831.jpg\",\"1073003418.png\",\"749992710.jpg\",\"371864158.jpg\",\"644671345.jpg\",\"647709769.jpg\",\"1941941530.jpg\",\"452114731.jpg\",\"1115928484.png\",\"1905957686.jpg\",\"1340154383.jpg\",\"149635283.png\"]', '{\"en\":\"Appliques\"}', '-34', '2023-02-19 12:33:34', '2023-02-19 12:33:34', '55'),
(44, '{\"en\":\"Ceiling\"}', '{\"en\":\"Ceiling\"}', '{\"en\":\"Ceiling\"}', '[\"610663744.jpg\",\"1710917505.jpg\",\"646532434.png\",\"1718155098.jpg\",\"667789487.jpg\",\"1945681584.jpg\",\"442902992.jpg\",\"1278780666.png\",\"768260450.jpg\",\"593658550.png\",\"788948785.png\",\"204369681.jpg\",\"971936135.jpg\",\"1828451861.jpg\",\"2126111341.jpg\",\"257939235.png\",\"27499904.jpg\"]', '{\"en\":\"Ceiling\"}', '-35', '2023-02-19 12:34:04', '2023-02-19 12:34:04', '56'),
(45, '{\"en\":\"Floor lamps\"}', '{\"en\":\"Floor lamps\"}', '{\"en\":\"Floor lamps\"}', '[\"1301051440.jpg\",\"439526165.jpg\",\"2083508241.jpg\",\"1542451698.jpg\",\"764050982.jpg\",\"567460691.jpg\",\"410969444.jpg\",\"1171212242.jpg\",\"1679878319.jpg\",\"1570820830.jpg\",\"912788594.jpg\",\"702243881.jpg\",\"841365816.jpg\",\"123113578.jpg\",\"2034545361.jpg\",\"9516754.jpg\",\"1061455450.jpg\",\"1559182994.png\",\"1780659732.jpg\",\"835819679.jpg\",\"1230044386.jpg\",\"1507178731.jpg\",\"1019408560.jpg\"]', '{\"en\":\"Floor lamps\"}', '-36', '2023-02-19 12:34:31', '2023-02-19 12:34:31', '57'),
(46, '{\"en\":\"Outdoor\"}', '{\"en\":\"Outdoor\"}', '{\"en\":\"Outdoor\"}', '[\"1944863611.jpg\",\"1385291761.jpg\",\"1364261499.jpg\",\"1224469636.png\",\"477998061.jpg\",\"2062452635.jpg\",\"1138173364.jpg\",\"947315508.png\",\"1263154138.jpg\",\"2014003233.jpg\"]', '{\"en\":\"Outdoor\"}', '-37', '2023-02-19 12:35:10', '2023-02-19 12:35:10', '58'),
(47, '{\"en\":\"Suspended lamps\"}', '{\"en\":\"Suspended lamps\"}', '{\"en\":\"Suspended lamps\"}', '[\"1899402819.jpg\",\"1731263983.jpg\",\"641966430.jpg\",\"377649912.jpg\",\"1900033829.jpg\",\"788930113.jpg\",\"219319744.jpg\",\"107668877.jpg\",\"74967346.jpg\",\"1554365136.jpg\",\"1205499681.jpg\",\"2126709700.jpg\",\"892145889.jpg\",\"2061815623.png\",\"563662429.png\",\"2064063787.jpg\",\"54001838.png\",\"524990371.jpg\",\"422498216.jpg\",\"2010324818.jpg\",\"388534774.jpg\",\"1628385520.jpg\",\"649845455.jpg\",\"496202950.jpg\",\"1653369639.jpg\",\"1618711985.jpg\",\"1837767873.jpg\",\"746731091.jpg\",\"828581312.jpg\",\"1739875829.jpg\",\"159366410.jpg\",\"168630858.jpg\",\"493883814.jpg\",\"1777426654.jpg\",\"1698159117.jpg\",\"2033426951.jpg\",\"57605233.jpg\",\"1717933678.jpg\",\"134934239.jpg\",\"58636588.jpg\",\"1224417233.jpg\",\"834961096.jpg\",\"303227002.jpg\",\"762331123.jpg\",\"905775979.jpg\",\"1713330674.jpg\",\"1206492645.png\",\"1227104927.png\",\"281511342.jpg\",\"167079821.jpg\",\"516059889.jpg\",\"656895501.jpg\",\"43603213.jpg\",\"165282338.jpg\",\"99962159.png\",\"26835539.jpg\"]', '{\"en\":\"Suspended lamps\"}', '-38', '2023-02-19 12:35:43', '2023-02-19 12:35:43', '59'),
(48, '{\"en\":\"Table lamps\"}', '{\"en\":\"Table lamps\"}', '{\"en\":\"Table lamps\"}', '[\"453836824.jpg\",\"1259114962.jpg\",\"2115485311.jpg\",\"1414602417.jpg\",\"810226303.jpg\",\"1564377045.jpg\",\"497493096.jpg\",\"1802788767.jpg\",\"234463185.jpg\",\"1656515832.jpg\",\"1763216217.jpg\",\"896732658.jpg\",\"1695940588.jpg\",\"1753587133.jpg\",\"515223604.jpg\",\"1910344390.jpg\",\"1315600243.png\",\"1910019687.jpg\",\"1124877373.jpg\",\"1050910824.jpg\",\"571598801.jpg\",\"2128978778.jpg\"]', '{\"en\":\"Table lamps\"}', '-39', '2023-02-19 12:36:10', '2023-02-19 12:36:10', '60'),
(49, '{\"en\":\"test\"}', '{\"en\":\"test\"}', '{\"en\":\"test\"}', '[\"101909074.webp\"]', '{\"en\":\"test\"}', '-40', '2023-02-20 03:37:00', '2023-02-20 03:37:00', '15');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `video` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `link`, `desc`, `created_at`, `updated_at`, `video`, `desc_1`, `alt`) VALUES
(5, 'uploads/slider/1757793151090820.jpg', 'https://hausluxuryinteriors.az/products/rabbit', '{\"az\":\"Brendinizin inki\\u015faf\\u0131n\\u0131 biz\\u0259 etibar edin!\",\"en\":\"Qeeboo Rabbit\"}', '2023-01-21 08:43:30', '2023-02-14 08:10:13', 'videos/975trp0pdFkwZHzK2KYaKjjgUVCo4FsnL8ZbbBuZ.mp4', '{\"az\":\"Going viral never looked so good Going viral never looked so good Going viral never looked so good Going viral never looked so good Going viral never looked so good Going viral never looked so good\",\"en\":\"Rabbit is a family of products with a strong media impact designed by Stefano Giovannoni.\"}', '{\"en\":\"alt 1\",\"az\":\"alt 1\"}'),
(14, 'uploads/slider/1757157718246794.jpg', 'https://hausluxuryinteriors.az/products/oxford', '{\"en\":\"Caracole Oxford Collection\"}', '2023-02-07 07:49:45', '2023-02-14 08:10:46', NULL, '{\"en\":\"The Oxford Collection offers timeless luxury with a modern twist, featuring dark wood and gold tones with reeded decorative panels and carved interlocking rings. Familiar forms are reimagined for today\'s scale and functionality for a statement of strength and resilience.\"}', '{\"en\":null}');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'test@gmail.com', '2023-02-03 05:13:25', '2023-02-03 05:13:25');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"tag 1\",\"az\":\"tag 1 az\"}', '{\"en\":\"tag-1\",\"az\":\"tag-1\"}', '2023-01-05 08:18:38', '2023-01-05 08:18:43'),
(2, '{\"en\":\"tag 2\"}', '{\"en\":\"tag-2\"}', '2023-01-06 04:41:01', '2023-01-06 04:41:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_status` int(10) NOT NULL DEFAULT 1,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `superadmin` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `admin_status`, `image`, `superadmin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'Admin', 'admin@gmail.com', 1, '202301190906logo-2.png', '1', NULL, '$2y$10$cgq1zRuSsU5HDgsigSD8Uu4aZxk09HiZZvQqOA7LOYfpL7n9YElGW', NULL, '2023-01-27 04:25:55', '2023-01-27 04:25:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commons`
--
ALTER TABLE `commons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `count_images`
--
ALTER TABLE `count_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_tags`
--
ALTER TABLE `meta_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolio_imgs`
--
ALTER TABLE `portfolio_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_videos`
--
ALTER TABLE `portfolio_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `commons`
--
ALTER TABLE `commons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `count_images`
--
ALTER TABLE `count_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `meta_tags`
--
ALTER TABLE `meta_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolio_imgs`
--
ALTER TABLE `portfolio_imgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio_videos`
--
ALTER TABLE `portfolio_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
