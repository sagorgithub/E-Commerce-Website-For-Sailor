-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2025 at 10:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newfolder`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `category_id`, `image`, `title`, `link`, `status`, `created_at`, `updated_at`) VALUES
(17, 8, 'public/uploads/banner/1756531745Web-Banner-(Sunnah-Heaven).jpg', 'Premium Zilbab Collection 2025', 'https://sunnahheaven.com/subcategory/zilbab', 1, '2025-08-30 05:29:05', '2025-08-30 05:29:05');

-- --------------------------------------------------------

--
-- Table structure for table `banner_categories`
--

CREATE TABLE `banner_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_categories`
--

INSERT INTO `banner_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(8, 'Premium Zilbab Collection', 1, '2025-08-30 05:28:06', '2025-08-30 05:28:06');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT 'public/uploads/category/default.png',
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `banner_title` text DEFAULT NULL,
  `video` text DEFAULT NULL,
  `banner` text DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `description` text NOT NULL,
  `hero_title` varchar(255) DEFAULT NULL,
  `hero_subtitle` text DEFAULT NULL,
  `hero_button_text` varchar(255) DEFAULT NULL,
  `hero_button_link` varchar(255) DEFAULT NULL,
  `features_title` varchar(255) DEFAULT NULL,
  `features_subtitle` text DEFAULT NULL,
  `benefits_title` varchar(255) DEFAULT NULL,
  `benefits_subtitle` text DEFAULT NULL,
  `testimonials_title` varchar(255) DEFAULT NULL,
  `testimonials_subtitle` text DEFAULT NULL,
  `faq_title` varchar(255) DEFAULT NULL,
  `faq_subtitle` text DEFAULT NULL,
  `cta_title` varchar(255) DEFAULT NULL,
  `cta_subtitle` text DEFAULT NULL,
  `cta_button_text` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `custom_css` text DEFAULT NULL,
  `custom_js` text DEFAULT NULL,
  `show_features` tinyint(1) NOT NULL DEFAULT 1,
  `show_benefits` tinyint(1) NOT NULL DEFAULT 1,
  `show_testimonials` tinyint(1) NOT NULL DEFAULT 1,
  `show_faq` tinyint(1) NOT NULL DEFAULT 1,
  `show_cta` tinyint(1) NOT NULL DEFAULT 1,
  `campaign_type` enum('product','service','landing','promotional') NOT NULL DEFAULT 'product',
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `review` text NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_one` text DEFAULT NULL,
  `image_two` text DEFAULT NULL,
  `image_three` text DEFAULT NULL,
  `status` varchar(55) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `template_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`id`, `name`, `banner_title`, `video`, `banner`, `slug`, `short_description`, `description`, `hero_title`, `hero_subtitle`, `hero_button_text`, `hero_button_link`, `features_title`, `features_subtitle`, `benefits_title`, `benefits_subtitle`, `testimonials_title`, `testimonials_subtitle`, `faq_title`, `faq_subtitle`, `cta_title`, `cta_subtitle`, `cta_button_text`, `meta_title`, `meta_description`, `meta_keywords`, `custom_css`, `custom_js`, `show_features`, `show_benefits`, `show_testimonials`, `show_faq`, `show_cta`, `campaign_type`, `start_date`, `end_date`, `is_featured`, `sort_order`, `review`, `product_id`, `image_one`, `image_two`, `image_three`, `status`, `created_at`, `updated_at`, `template_id`) VALUES
(8, 'Premium Wallet Collection 2024', NULL, NULL, NULL, 'premium-wallet-collection-2024', '<p><strong>🎉 Exclusive Offer:</strong> Get our premium leather wallets at <span style=\"color: #e74c3c; font-weight: bold;\">50% OFF</span>! Limited time only.</p><p>✨ <strong>Features:</strong></p><ul><li>Genuine leather material</li><li>Multiple card slots</li><li>Coin pocket</li><li>RFID protection</li></ul>', '<h2>Premium Wallet Collection 2024</h2><p>Discover our exclusive collection of premium leather wallets designed for the modern professional. Each wallet is crafted with the finest materials and attention to detail.</p><h3>🌟 Why Choose Our Wallets?</h3><ul><li><strong>Premium Quality:</strong> Made from genuine leather</li><li><strong>Smart Design:</strong> Multiple compartments for organization</li><li><strong>RFID Protection:</strong> Keep your cards safe</li><li><strong>Durable:</strong> Built to last for years</li></ul><h3>🎁 Special Features</h3><p>Our wallets come with:</p><ul><li>Coin pocket with zipper</li><li>6+ card slots</li><li>Bill compartment</li><li>ID window</li><li>Key holder</li></ul><h3>💎 Limited Time Offer</h3><p>Don\'t miss this amazing opportunity! Order now and get:</p><ul><li>✅ 50% discount</li><li>✅ Free shipping</li><li>✅ 30-day money back guarantee</li><li>✅ Lifetime warranty</li></ul>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 'product', NULL, NULL, 0, 0, '4.8/5 (500+ Reviews)', 2826, 'public/uploads/campaign/demo-wallet-1.webp', 'public/uploads/campaign/demo-wallet-2.webp', 'public/uploads/campaign/demo-wallet-3.webp', '1', '2025-08-27 23:36:21', '2025-08-27 23:38:40', NULL),
(9, 'Smart Watch Pro Series', NULL, NULL, NULL, 'smart-watch-pro-series', '<p><strong>🚀 New Launch:</strong> Smart Watch Pro Series with <span style=\"color: #3498db; font-weight: bold;\">advanced health monitoring</span>!</p><p>📱 <strong>Smart Features:</strong></p><ul><li>Heart rate monitoring</li><li>GPS tracking</li><li>Water resistant</li><li>7-day battery life</li></ul>', '<h2>Smart Watch Pro Series</h2><p>Experience the future of wearable technology with our Smart Watch Pro Series. Packed with advanced features to keep you connected and healthy.</p><h3>🔋 Key Features</h3><ul><li><strong>Health Monitoring:</strong> Heart rate, blood pressure, sleep tracking</li><li><strong>Fitness Tracking:</strong> GPS, step counter, calorie burn</li><li><strong>Smart Notifications:</strong> Calls, messages, social media alerts</li><li><strong>Water Resistant:</strong> IP68 rating for swimming</li></ul><h3>📊 Advanced Analytics</h3><p>Track your fitness journey with detailed analytics:</p><ul><li>Daily activity summary</li><li>Weekly progress reports</li><li>Goal setting and achievement</li><li>Social sharing features</li></ul><h3>🎯 Perfect For</h3><ul><li>🏃‍♂️ Fitness enthusiasts</li><li>💼 Busy professionals</li><li>👨‍👩‍👧‍👦 Health-conscious individuals</li><li>📱 Tech-savvy users</li></ul>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 'product', NULL, NULL, 0, 0, '4.9/5 (300+ Reviews)', 2826, 'public/uploads/campaign/demo-watch-1.webp', 'public/uploads/campaign/demo-watch-2.webp', 'public/uploads/campaign/demo-watch-3.webp', '1', '2025-08-27 23:36:21', '2025-08-27 23:38:45', NULL),
(10, 'Eco-Friendly Water Bottle', NULL, NULL, NULL, 'eco-friendly-water-bottle', '<p><strong>🌱 Go Green:</strong> Eco-friendly water bottles that <span style=\"color: #27ae60; font-weight: bold;\">save the planet</span>!</p><p>♻️ <strong>Eco Benefits:</strong></p><ul><li>BPA-free material</li><li>Reusable design</li><li>Keeps drinks cold for 24h</li><li>Reduces plastic waste</li></ul>', '<h2>Eco-Friendly Water Bottle</h2><p>Make a difference with our eco-friendly water bottles. Every purchase helps reduce plastic waste and protect our environment.</p><h3>🌍 Environmental Impact</h3><ul><li><strong>Plastic Reduction:</strong> Save 365 plastic bottles per year</li><li><strong>Sustainable Materials:</strong> Made from recycled materials</li><li><strong>Carbon Footprint:</strong> 50% less CO2 emissions</li><li><strong>Biodegradable:</strong> Safe for the environment</li></ul><h3>💧 Perfect Performance</h3><p>Our bottles are designed for optimal performance:</p><ul><li>Keeps drinks cold for 24 hours</li><li>Keeps drinks hot for 12 hours</li><li>Leak-proof design</li><li>Easy to clean</li><li>Dishwasher safe</li></ul><h3>🎨 Beautiful Design</h3><p>Available in multiple colors and sizes:</p><ul><li>500ml - Perfect for daily use</li><li>750ml - Great for workouts</li><li>1L - Ideal for long trips</li></ul>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 'product', NULL, NULL, 0, 0, '4.7/5 (200+ Reviews)', 2826, 'public/uploads/campaign/demo-bottle-1.webp', 'public/uploads/campaign/demo-bottle-2.webp', 'public/uploads/campaign/demo-bottle-3.webp', '1', '2025-08-27 23:36:21', '2025-08-27 23:38:52', NULL),
(11, 'এই গরমে তৃষ্ণা মেটানোর সেরা উপায় – ফ্রেশ লেবুর শরবত এখন অনলাইনে', 'শতভাগ চামড়ার প্রিমিয়াম কোয়ালিটি Jeep Brand এর ওয়ালেট', 'https://youtu.be/bxMbxRVroS4', 'C:\\xampp\\tmp\\phpEC1D.tmp', 'ei-grme-trrishna-metanor-sera-upay-fres-lebur-srbt-ekhn-onlaine', '<p><strong>দাদির রেসিপি, ১০০% খাঁটি লেবু, কোন প্রিজারভেটিভ নেই</strong></p>', '<p><strong>🌞 হিরো সেকশন – বড় করে লিখা:</strong><br><strong>👉 “এই গরমে তৃষ্ণা মেটানোর সেরা উপায় – ফ্রেশ লেবুর শরবত এখন অনলাইনে!”</strong></p><p><strong>🍋 প্রোডাক্ট শট – এক গ্লাসে বরফ ভরা ঠাণ্ডা শরবত, পাশে আধা কাটা লেবু আর একটু পুদিনা পাতা।</strong></p><p><strong>🔥 Call to Action –</strong><br><strong>“এক ক্লিকেই অর্ডার করুন, ৩০ মিনিটে বাসায় ঠাণ্ডা শরবত পৌঁছে যাবে।”</strong></p><p><strong>👩‍🍳 স্টোরি সেকশন –</strong><br><strong>“দাদির রেসিপি, ১০০% খাঁটি লেবু, কোন প্রিজারভেটিভ নেই।”</strong></p><p><strong>📦 অফার –</strong></p><p><strong>১ গ্লাস ৫০ টাকা</strong></p><p><strong>৫ গ্লাস = ২০০ টাকা (একটা ফ্রি)</strong></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 'product', NULL, NULL, 0, 0, 'দাদির রেসিপি, ১০০% খাঁটি লেবু, কোন প্রিজারভেটিভ নেই', 2826, 'public/uploads/campaign/1756339771-0demo1.webp', 'C:\\xampp\\tmp\\phpEC2F.tmp', NULL, '1', '2025-08-28 00:09:32', '2025-08-28 00:09:32', NULL),
(12, 'Premium Floor Touch Zilbab', 'Premium Dubai Chairy Zilbab', NULL, '/tmp/phpyijfG6', 'premium-floor-touch-zilbab', '<p>Soft Dubai Chairy Jilbab</p><p>-জিলবাব গুলো সফট দুবাই চেইরী কাপড়ের তৈরী যা গরমে আরামদায়ক।<br>-নিজস্ব কারখানায় দক্ষ কারিগর দিয়ে তৈরি, সেলাই ফিনিশিং খুবই উন্নত।<br>- সময় নিয়ে রেডি হওয়ার ঝামেলা এড়াতে এবং সুন্নাহ অনুযায়ী সালাত আদায় করতে এই জিলবাব গুলো হবে আপনার বেষ্ট চয়েজ।<br>-কম সময়ে পরিপূর্ণ পর্দা মেইন্টেন করার জন্য এই জিলবাব গুলোর বিকল্প নেই।</p>', '<p>পণ্যের বিবরণ:<br>-সফট&nbsp;দুবাই চেইরী&nbsp;জিলবাব<br>- বডি ফ্রী সাইজ<br>- লং মাথা থেকে সামনে&nbsp;৬৩<br>-পিছনে&nbsp;৬৫</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 'landing', '2025-08-30', '2025-09-02', 0, 0, 'https://sunnahheaven.com/customer/checkout', 2839, 'public/uploads/campaign/1756531297-flore-touch-abaya-zilbab-code--011.webp', '/tmp/phprYcqFQ', '/tmp/phpeQDOx4', '1', '2025-08-30 05:21:37', '2025-08-30 05:21:37', 2);

-- --------------------------------------------------------

--
-- Table structure for table `campaign_reviews`
--

CREATE TABLE `campaign_reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `campaign_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campaign_reviews`
--

INSERT INTO `campaign_reviews` (`id`, `image`, `campaign_id`, `created_at`, `updated_at`) VALUES
(3, 'public/uploads/campaign/1708589841-company-rating.png', 1, '2024-02-22 08:17:21', '2024-02-22 08:17:21'),
(4, 'public/uploads/campaign/1708589841-company-rating.png', 1, '2024-02-22 08:17:21', '2024-02-22 08:17:21'),
(5, 'public/uploads/campaign/1708589841-company-rating.png', 1, '2024-02-22 08:17:21', '2024-02-22 08:17:21'),
(8, 'public/uploads/campaign/1723350415-lzcequhojya5pp9khlq0wr02qcb1vbzrtnfatbfi.jpg', 5, '2024-08-11 04:26:55', '2024-08-11 04:26:55'),
(9, 'public/uploads/campaign/1723350415-zvoldvjueb7phcc4kw8xi8znt625jcvcly079ucx.jpg', 5, '2024-08-11 04:26:55', '2024-08-11 04:26:55'),
(10, 'public/uploads/campaign/1723350415-whatsapp-image-2024-08-07-at-12.07.07_41548411.jpg', 5, '2024-08-11 04:26:55', '2024-08-11 04:26:55'),
(11, 'public/uploads/campaign/1723350415-0s7e5uxiexbhus83f9kljj6k0kgki3bawxu7udts.jpg', 5, '2024-08-11 04:26:55', '2024-08-11 04:26:55'),
(12, 'public/uploads/campaign/1723350415-n9tpmrixgzjlvut2o5xtggpikp2fenjrextflv73.jpg', 5, '2024-08-11 04:26:55', '2024-08-11 04:26:55'),
(13, 'public/uploads/campaign/1723350415-0d0lvmuwtlkrjk81ppwpdja2ezky3aehmeipq4m3.jpg', 5, '2024-08-11 04:26:55', '2024-08-11 04:26:55'),
(14, 'public/uploads/campaign/1723350415-whatsapp-image-2024-08-07-at-12.07.07_aef33b12.jpg', 5, '2024-08-11 04:26:55', '2024-08-11 04:26:55'),
(15, 'public/uploads/campaign/1723350415-whatsapp-image-2024-08-07-at-12.07.07_f8312609.jpg', 5, '2024-08-11 04:26:55', '2024-08-11 04:26:55'),
(16, 'public/uploads/campaign/1723350415-n1jtsp1xsnf2ojtafqamr8lky7b8bmkfklrl8z9j.jpg', 5, '2024-08-11 04:26:55', '2024-08-11 04:26:55'),
(17, 'public/uploads/campaign/1723350415-whatsapp-image-2024-08-07-at-12.06.52_55a154e1.jpg', 5, '2024-08-11 04:26:55', '2024-08-11 04:26:55'),
(18, 'public/uploads/campaign/1723350415-whatsapp-image-2024-08-07-at-12.06.52_2e4e074b.jpg', 5, '2024-08-11 04:26:55', '2024-08-11 04:26:55'),
(19, 'public/uploads/campaign/1723350665-zvoldvjueb7phcc4kw8xi8znt625jcvcly079ucx.jpg', 4, '2024-08-11 04:31:05', '2024-08-11 04:31:05'),
(20, 'public/uploads/campaign/1723350893-lzcequhojya5pp9khlq0wr02qcb1vbzrtnfatbfi.jpg', 6, '2024-08-11 04:34:53', '2024-08-11 04:34:53'),
(21, 'public/uploads/campaign/1723350893-whatsapp-image-2024-08-07-at-12.07.07_41548411.jpg', 6, '2024-08-11 04:34:53', '2024-08-11 04:34:53'),
(22, 'public/uploads/campaign/1723350893-0s7e5uxiexbhus83f9kljj6k0kgki3bawxu7udts.jpg', 6, '2024-08-11 04:34:53', '2024-08-11 04:34:53'),
(23, 'public/uploads/campaign/1723350893-n9tpmrixgzjlvut2o5xtggpikp2fenjrextflv73.jpg', 6, '2024-08-11 04:34:53', '2024-08-11 04:34:53'),
(24, 'public/uploads/campaign/1723350893-0d0lvmuwtlkrjk81ppwpdja2ezky3aehmeipq4m3.jpg', 6, '2024-08-11 04:34:53', '2024-08-11 04:34:53'),
(25, 'public/uploads/campaign/1723350893-zvoldvjueb7phcc4kw8xi8znt625jcvcly079ucx.jpg', 6, '2024-08-11 04:34:53', '2024-08-11 04:34:53'),
(26, 'public/uploads/campaign/1723350893-whatsapp-image-2024-08-07-at-12.07.07_f8312609.jpg', 6, '2024-08-11 04:34:53', '2024-08-11 04:34:53'),
(27, 'public/uploads/campaign/1723350893-whatsapp-image-2024-08-07-at-12.07.07_aef33b12.jpg', 6, '2024-08-11 04:34:53', '2024-08-11 04:34:53'),
(28, 'public/uploads/campaign/1723350893-whatsapp-image-2024-08-07-at-12.06.52_55a154e1.jpg', 6, '2024-08-11 04:34:53', '2024-08-11 04:34:53'),
(29, 'public/uploads/campaign/1723350893-whatsapp-image-2024-08-07-at-12.06.52_2e4e074b.jpg', 6, '2024-08-11 04:34:53', '2024-08-11 04:34:53'),
(30, 'public/uploads/campaign/1723350893-n1jtsp1xsnf2ojtafqamr8lky7b8bmkfklrl8z9j.jpg', 6, '2024-08-11 04:34:53', '2024-08-11 04:34:53'),
(31, 'public/uploads/campaign/1756336745-0demo1.webp', 7, '2025-08-27 23:19:05', '2025-08-27 23:19:05'),
(32, 'public/uploads/campaign/1756336745-0screenshot.webp', 7, '2025-08-27 23:19:05', '2025-08-27 23:19:05'),
(33, 'public/uploads/campaign/1756339772-0screenshot.webp', 11, '2025-08-28 00:09:32', '2025-08-28 00:09:32'),
(34, 'public/uploads/campaign/1756531297-flore-touch-abaya-zilbab-code--011.webp', 12, '2025-08-30 05:21:38', '2025-08-30 05:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT 'public/uploads/category/default.png',
  `meta_title` varchar(191) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `front_view` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `slug`, `image`, `meta_title`, `meta_description`, `front_view`, `status`, `created_at`, `updated_at`) VALUES
(15, 0, 'Men\'s Sunnah', 'men\'s-sunnah', 'uploads/category/1758218495-moisturizer-1.webp', NULL, NULL, 1, 0, '2025-08-30 04:22:02', '2025-09-18 18:14:14'),
(16, 0, 'Woman\'s Sunnah', 'woman\'s-sunnah', 'uploads/category/1758206742-2024-06-01-665af873e3003.webp', NULL, NULL, 1, 0, '2025-08-30 04:22:46', '2025-09-18 18:14:27'),
(17, 0, 'Cleanser', 'cleanser', 'uploads/category/1758218982-moisturizer-1.webp', 'adAD', 'ADd', 0, 1, '2025-09-18 18:09:20', '2025-09-18 18:09:42'),
(18, 0, 'Toner', 'toner', 'uploads/category/1758219133-toner-1.webp', NULL, 'SAFAS', 0, 1, '2025-09-18 18:10:35', '2025-09-18 18:12:13'),
(19, 0, 'Essence', 'essence', 'uploads/category/1758219299-essence-1.webp', NULL, 'DZ', 0, 1, '2025-09-18 18:12:47', '2025-09-18 18:14:59'),
(20, 0, 'Moisturizer', 'moisturizer', 'uploads/category/1758219381-cream-beauty-pngrepo-com.webp', NULL, 'AS', 0, 1, '2025-09-18 18:15:35', '2025-09-18 18:16:21'),
(21, 0, 'Serum', 'serum', 'uploads/category/1758219417-serum.webp', NULL, 'AS', 0, 1, '2025-09-18 18:16:58', '2025-09-18 18:16:58'),
(22, 0, 'Sunscreen', 'sunscreen', 'uploads/category/1758219718-sun-cream.webp', NULL, 'DSF', 0, 1, '2025-09-18 18:21:58', '2025-09-18 18:21:58'),
(23, 0, 'Mask', 'mask', 'uploads/category/1758219805-mud.webp', NULL, NULL, 0, 1, '2025-09-18 18:23:25', '2025-09-18 18:23:25'),
(24, 0, 'Soothing Gel', 'soothing-gel', 'uploads/category/1758219831-soothing-gel-2.webp', NULL, 'Soothing Gel', 0, 1, '2025-09-18 18:23:51', '2025-09-18 18:23:51'),
(25, 0, 'Trial Kit', 'trial-kit', 'uploads/category/1758219907-cosmetics.webp', NULL, 'Trial Kit', 0, 1, '2025-09-18 18:25:07', '2025-09-18 18:25:07'),
(26, 0, 'Hair Care', 'hair-care', 'uploads/category/1758219934-hair-care-2.webp', NULL, 'Hair Care', 0, 1, '2025-09-18 18:25:34', '2025-09-18 18:25:34'),
(27, 0, 'Lip Care', 'lip-care', 'uploads/category/1758219959-lipstick-2.webp', NULL, 'Lip Care', 0, 1, '2025-09-18 18:25:59', '2025-09-18 18:25:59'),
(28, 0, '2 in 1', '2-in-1', 'uploads/category/1758219988-shampoo-1.webp', NULL, '2 in 1', 0, 1, '2025-09-18 18:26:28', '2025-09-18 18:26:28'),
(29, 0, 'Baby Care', 'baby-care', 'uploads/category/1758220009-baby-2.webp', NULL, 'Baby Care', 0, 1, '2025-09-18 18:26:49', '2025-09-18 18:26:49'),
(30, 0, 'Exfoliator', 'exfoliator', 'uploads/category/1758220046-exfl.webp', NULL, 'Exfoliator', 0, 1, '2025-09-18 18:27:26', '2025-09-18 18:27:26'),
(31, 0, 'Bath & Body', 'bath-&-body', 'uploads/category/1758220070-body-care.webp', NULL, 'Bath & Body', 0, 1, '2025-09-18 18:27:50', '2025-09-18 18:27:50'),
(32, 0, 'Eye Care', 'eye-care', 'uploads/category/1758220102-eye-cream.webp', NULL, 'Eye Care', 0, 1, '2025-09-18 18:28:22', '2025-09-18 18:28:22');

-- --------------------------------------------------------

--
-- Table structure for table `childcategories`
--

CREATE TABLE `childcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `childcategoryName` varchar(255) NOT NULL DEFAULT 'text',
  `slug` varchar(255) NOT NULL DEFAULT 'text',
  `subcategory_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `meta_title` varchar(191) DEFAULT NULL,
  `meta_description` longtext DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `childcategories`
--

INSERT INTO `childcategories` (`id`, `childcategoryName`, `slug`, `subcategory_id`, `meta_title`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(153, 'test', 'test', 120, NULL, NULL, 1, '2025-09-17 06:46:11', '2025-09-17 06:46:11');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(10) UNSIGNED NOT NULL,
  `colorName` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `colorName`, `color`, `status`, `created_at`, `updated_at`) VALUES
(32, 'Aqua', '#00FFFF', '1', '2023-11-03 06:04:29', '2023-11-03 09:23:46'),
(35, 'Black', '#000000', '1', '2023-11-03 06:09:13', '2023-11-03 06:09:22'),
(36, 'Bright Blue', '#0096FF', '1', '2023-11-03 06:09:30', '2023-11-03 06:09:38'),
(39, 'Coral', '#FF7F50', '1', '2023-11-03 06:10:23', '2023-11-03 06:10:31'),
(40, 'Gray', '#999999', '1', '2023-11-03 06:10:40', '2023-11-03 06:10:48'),
(41, 'Green', '#008000', '1', '2023-11-03 06:10:57', '2023-11-03 06:11:05'),
(42, 'Hot Pink', '#FF69B4', '1', '2023-11-03 06:11:24', '2023-11-03 06:11:29'),
(44, 'Pink', '#FFC0CB', '1', '2023-11-03 06:12:03', '2023-11-03 08:50:43'),
(48, 'Magenta', '#FF00FF', '1', '2023-11-03 06:13:28', '2023-11-03 06:13:39'),
(49, 'Maroon', '#990000', '1', '2023-11-03 06:13:51', '2023-11-03 06:14:00'),
(50, 'Grass Green', '#7CFC00', '1', '2023-11-03 06:14:14', '2023-11-03 06:59:07'),
(51, 'Navy', '#000080', '1', '2023-11-03 06:14:30', '2023-11-03 06:14:41'),
(52, 'Blue', '#0000FF', '1', '2023-11-03 06:15:01', '2023-11-03 09:53:12'),
(53, 'Olive', '#808000', '1', '2023-11-03 06:15:26', '2023-11-03 06:15:37'),
(54, 'Orange', '#FFA500', '1', '2023-11-03 06:15:46', '2023-11-03 06:15:58'),
(55, 'Yellow Orange', '#FFAA33', '1', '2023-11-03 06:16:17', '2023-11-03 07:03:16'),
(56, 'Orchid', '#DA70D6', '1', '2023-11-03 06:16:35', '2023-11-03 06:16:42'),
(58, 'Purple Heart', '#8b1ec4', '1', '2023-11-03 06:17:09', '2023-11-03 06:17:20'),
(59, 'Red', '#FF0000', '1', '2023-11-03 06:17:30', '2023-11-03 06:17:42'),
(60, 'Canary Yellow', '#FFFF8F', '1', '2023-11-03 06:17:51', '2023-11-03 08:24:41'),
(61, 'Salmon', '#FA8072', '1', '2023-11-03 06:18:13', '2023-11-03 06:18:24'),
(62, 'White', '#ffffff', '1', '2023-11-03 06:18:44', '2023-11-03 06:18:52'),
(63, 'Gold', '#FFD700', '1', '2023-11-03 06:19:02', '2023-11-03 07:08:05'),
(64, 'Crimson', '#DC143C', '1', '2023-11-03 06:37:11', '2023-11-03 09:19:11'),
(65, 'Silver', '#C0C0C0', '1', '2023-11-03 06:40:45', '2023-11-03 09:11:55'),
(67, 'Light Orange', '#FFD580', '1', '2023-11-03 07:13:52', '2023-11-03 07:14:03'),
(68, 'Navajo White', '#FFDEAD', '1', '2023-11-03 07:15:18', '2023-11-03 08:16:20'),
(69, 'Pumpkin Orange', '#FF7518', '1', '2023-11-03 07:17:29', '2023-11-03 07:17:38'),
(70, 'Chocolate', '#D2691E', '1', '2023-11-03 08:01:35', '2023-11-03 08:34:09'),
(73, 'Biscuit', '#FAD7A0', '1', '2023-11-03 09:09:43', '2023-11-03 09:10:20'),
(74, 'demo', '#34d57a', '1', '2024-08-18 17:17:33', '2024-08-18 17:17:33');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `hotline` varchar(50) DEFAULT NULL,
  `hotmail` varchar(50) DEFAULT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `maplink` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `hotline`, `hotmail`, `phone`, `email`, `address`, `maplink`, `status`, `created_at`, `updated_at`) VALUES
(1, '01798827543', 'info@sunnahheaven.com', '01798827543', 'info@sunnahheaven.com', 'Postogola, Rajabari, Kadamtoli, Dhaka-1204', '#', 1, '2023-01-22 10:35:29', '2025-08-30 05:24:41');

-- --------------------------------------------------------

--
-- Table structure for table `courierapis`
--

CREATE TABLE `courierapis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(55) DEFAULT NULL,
  `api_key` varchar(155) DEFAULT NULL,
  `secret_key` varchar(155) DEFAULT NULL,
  `url` varchar(99) DEFAULT NULL,
  `token` text DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courierapis`
--

INSERT INTO `courierapis` (`id`, `type`, `api_key`, `secret_key`, `url`, `token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'steadfast', 'zcopuinzgpwvvlvsp3c4hyww0dolytwm', 'vaydqfeklpm4hqmzrv9uqq3d', 'https://portal.steadfast.com.bd/api/v1/create_order', 'asdfdsfdsafdsf', '1', '2024-02-06 11:29:46', '2024-10-12 09:04:55'),
(2, 'pathao', '', '', 'https://adorazstyle.com/', 'IP1uLgU58zUecqTOm7fOUTdxltCwLDxdpGmxHz89', '0', '2024-02-06 11:29:46', '2024-10-12 09:05:32');

-- --------------------------------------------------------

--
-- Table structure for table `create_pages`
--

CREATE TABLE `create_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `create_pages`
--

INSERT INTO `create_pages` (`id`, `name`, `slug`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Order procedure', 'order-procedure', 'Order procedure', 'অর্ডার করতে আপনার কাঙ্ক্ষিত ক্যাটাগরির অন্তর্গত সাব-ক্যাটাগরি নির্বাচন করুন। সেখান থেকে আপনার&nbsp; কাঙ্খিত প্রোডাক্ট এর গ্রুপে যান। যেমন রম্পার, শর্ট প্যান্ট, টি-শার্ট যে ধরনের পোশাক আপনি নির্বাচন করতে চাচ্ছেন সিলেক্ট করুন। একই অর্ডারে একাধিক ড্রেস ক্রয় করতে যেগুলি পছন্দ করবেন একটা একটা করে আপনি \"এড টু কার্ড\" বাটন ক্লিক করুন। সবগুলি \"এড টু কার্ড\" করা হয়ে গেলে \"বাই নাও\" ক্লিক করুন অথবা&nbsp;<span style=\"background-color: var(--ct-card-bg); text-align: var(--ct-body-text-align);\">একদম নিচের দিকে অথবা একদম উপরে&nbsp;</span>\"এড টু কার্ড\" আইকন বাটন আছে&nbsp;🛒 এই আইকন বাটনে ক্লিক করুন। এ পর্যায়ে আপনার ডেলিভারি ঠিকানা ও মোবাইল নাম্বার দিন এবং ডেলিভারি এরিয়া নির্বাচন করুন অর্থাৎ ঢাকার ভিতরে নাকি ঢাকার বাহিরে। এরপর অর্ডার করুন বাটনে ক্লিক করুন', 1, '2023-10-04 07:02:30', '2024-09-05 23:24:57'),
(3, 'Delivery Rules', 'delivery-rules', 'Delivery Rules', '<p>ki pbm</p>', 1, '2023-10-04 07:03:00', '2024-10-12 09:27:56'),
(5, 'Return Policy', 'return-policy', 'Return Policy', '<div>আমাদের রিটার্ন পলিসি খুবই সহজ::</div><div>প্রথমত ডেলিভারি ম্যান ডেলিভারি দিতে গেলে তার সামনে আপনি প্রোডাক্ট খুলে সবগুলো চেক করে রিসিভ করতে পারবেন। কোন সমস্যা চোখে পড়লে সাথে সাথে ডেলিভারির মান এর কাছে ফেরত দিতে পারবেন। পার্সেল রিসিভ করার পর, পরবর্তীতে কোন সমস্যা বের হলে এবং আমাদেরকে সাত দিনের মধ্যে জানালে আমরা সেটা পরিবর্তন করে দিয়ে থাকি।</div>', 1, '2023-10-04 07:03:42', '2024-09-05 23:37:10'),
(6, 'Terms & Conditions', 'terms-&-conditions', 'Terms & Conditions', '<p>সবগুলি ড্রেসের বিস্তারিত ওয়েবসাইটে দেওয়া আছে যেমন সাইজের মাপ লং, বডি, কাপড়ের বিস্তারিত। সবগুলি বিষয় দেখে শুনে বুঝে অর্ডার করবেন। আপনার ভুল সাইজ নির্বাচন এর জন্য যদি পোশাক আপনার বেবির গায়ে ছোট বড় হয় এবং না লাগে। সে ক্ষেত্রে আপনি চাইলে সাইজ চেঞ্জ করতে পারবেন তবে এক্সচেঞ্জের ডেলিভারি চার্জ&nbsp; আপনাকে বহন করতে হবে। আর আমাদের কোন ভুলের জন্য যদি সঠিক&nbsp; ড্রেস না যায় বা কোন সমস্যা বের হয় সে ক্ষেত্রে ডেলিভারি চার্জ প্রতিষ্ঠান বহন করবেi</p>', 1, '2023-10-04 07:04:05', '2024-09-05 23:45:51'),
(7, 'Privacy Policy', 'privacy-policy', 'Privacy Policy', 'All right reserved by Adorazstyle.com', 1, '2023-10-04 07:04:19', '2024-09-05 23:47:22');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(155) NOT NULL,
  `slug` varchar(155) NOT NULL,
  `phone` varchar(55) NOT NULL,
  `email` varchar(55) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `verify` int(11) DEFAULT NULL,
  `forgot` varchar(11) DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'public/uploads/default/user.png',
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `status` varchar(55) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `slug`, `phone`, `email`, `district`, `area`, `address`, `verify`, `forgot`, `image`, `password`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(106, 'Rakibul Islam', 'Rakibul Islam', '01333491540', NULL, NULL, NULL, NULL, 1, NULL, 'public/uploads/default/user.png', '$2y$10$Kggp5KwXuFMoaNcq6uK4Rukbyqr4S2807iUr.4L5DJcurT4VtHEPG', NULL, 'active', '2024-10-12 09:02:36', '2024-10-12 09:02:36'),
(107, 'MD Masum Rana', 'MD Masum Rana', '01799593940', NULL, NULL, NULL, NULL, 1, NULL, 'public/uploads/default/user.png', '$2y$10$zCIC9sgzzdtZBR77NVaryeHwaBOzS1azCQAbQAr5/rG0WXvgZGpfe', NULL, 'active', '2024-10-12 12:36:14', '2024-10-12 12:36:14'),
(108, 'kazi nazrul islam', 'kazi nazrul islam', '01941787278', NULL, NULL, NULL, NULL, 1, NULL, 'public/uploads/default/user.png', '$2y$10$Rc9KgALV2..KTBzauJhrV.25gizsHJPOnuNS1J415xLAWP4rwhrT2', NULL, 'active', '2024-10-12 13:38:51', '2024-10-12 13:38:51'),
(109, 'চেক অডার', 'চেক অডার', '01890258555', NULL, NULL, NULL, NULL, 1, NULL, 'public/uploads/default/user.png', '$2y$10$jbg00QuqRhx5dWueSAIsKOSEdwEcHn0CWnn9Wu6wl9CxhBISy5yym', NULL, 'active', '2024-10-12 14:59:55', '2024-10-12 14:59:55'),
(110, 'Sahon Srabon', 'Sahon Srabon', '01731937490', NULL, NULL, NULL, NULL, 1, NULL, 'public/uploads/default/user.png', '$2y$10$SJS/uA7LGbMd4cBSIJQBlOWJ7sA4kcc956U3xrZHw5HQfMnigPHTi', NULL, 'active', '2024-10-13 09:35:14', '2024-10-13 09:35:14'),
(111, 'Sajjad Hossain', 'Sajjad Hossain', '01834062542', NULL, NULL, NULL, NULL, 1, NULL, 'public/uploads/default/user.png', '$2y$10$m1vBF98QwVt.7PX5wAP6y.ygvVkoYWMHU9O8SoI/BPiUrakIiFkBu', NULL, 'active', '2024-10-13 12:15:10', '2024-10-13 12:15:10'),
(112, 'Jahid Sajib', 'Jahid Sajib', '01735666264', NULL, NULL, NULL, NULL, 1, NULL, 'public/uploads/default/user.png', '$2y$10$79yG7kPiAO2Tz2Rm0I4gFuAXOCtBmo0zw234t7zkSyUg3LyFjM78O', NULL, 'active', '2024-10-13 12:15:44', '2024-10-13 12:15:44'),
(113, 'Soumen Pal', 'Soumen Pal', '08420640028', NULL, NULL, NULL, NULL, 1, NULL, 'public/uploads/default/user.png', '$2y$10$uvNipICJV40XHY6r4FYRfOU92SXjQIiuNntD4nmcec/3ht2dnvM4K', NULL, 'active', '2024-10-13 12:16:47', '2024-10-13 12:16:47'),
(114, 'MD.SAHADAT BHUIYAN', 'MD.SAHADAT BHUIYAN', '01711928746', NULL, NULL, NULL, NULL, 1, NULL, 'public/uploads/default/user.png', '$2y$10$4onzigQUDUVevkYZ5.2wme6MRfcBJURbSdhxEP4t2r2eqVSCpCQQ6', NULL, 'active', '2024-10-13 15:18:07', '2024-10-13 15:18:07'),
(115, 'Rst Polymer industries Ltd.', 'Rst Polymer industries Ltd.', '01902891472', NULL, NULL, NULL, NULL, 1, NULL, 'public/uploads/default/user.png', '$2y$10$Nqrfx0dM/BUhMaaN24InCutLO9hrnJKEQBeqoFjRiVQ190.zOxT1i', NULL, 'active', '2024-10-13 16:29:47', '2024-10-13 16:29:47'),
(116, 'muskan anisha', 'muskan anisha', '01323626282', NULL, NULL, NULL, NULL, 1, NULL, 'public/uploads/default/user.png', '$2y$10$4WaEKtX0Nplu8fi7ehSl.uezIwYQ7o/tTlnyCtLlzVydCedUxZrK.', NULL, 'active', '2024-10-13 19:36:53', '2024-10-13 19:36:53'),
(117, 'sssssssss dddddddd', 'sssssssss dddddddd', '01731932255', NULL, NULL, NULL, NULL, 1, NULL, 'public/uploads/default/user.png', '$2y$10$ZOhtLdy0AtdXgb8aZVVTNeW13rPWUkCnxxlU7T9lERzT1k95F5vh.', NULL, 'active', '2024-10-13 19:43:27', '2024-10-13 19:43:27'),
(118, 'Samsudduha Hossen', 'Samsudduha Hossen', '01713648671', NULL, NULL, NULL, NULL, 1, NULL, 'public/uploads/default/user.png', '$2y$10$Kt7Bz72U9i1S8qJtOErVse.8p6ScnRs/xK3YcIBNQhAzxJOwb2AY6', NULL, 'active', '2024-10-13 19:52:46', '2024-10-13 19:52:46'),
(119, 'Rkans', 'Rkans', '01793756294', NULL, NULL, NULL, NULL, 1, NULL, 'public/uploads/default/user.png', '$2y$10$aCzlFButg76bpTRitckfIuw5wOAqLZsX.zJ52ozw/bTlIPO0EMAKu', NULL, 'active', '2024-10-14 14:56:27', '2024-10-14 14:56:27'),
(120, 'sfvdz', 'sfvdz', '01744534467', NULL, NULL, NULL, NULL, 1, NULL, 'public/uploads/default/user.png', '$2y$10$gPBW9L9GOLxwfGmTzPWZtOmuv0m5ZsXMEYtrb.qK5XS7P9TdAd30W', NULL, 'active', '2024-10-15 08:54:19', '2024-10-15 08:54:19'),
(121, 'MD.EMON Hossen', 'MD.EMON Hossen', '01903361888', NULL, NULL, NULL, NULL, 1, NULL, 'public/uploads/default/user.png', '$2y$10$Ajr/MulJUyuYbDv5mpZKR..JOYNVL5.Ns0SSv8HGH0znlgHY.kBbK', NULL, 'active', '2025-08-28 00:03:01', '2025-08-28 00:03:01'),
(122, 'MD Saber Hossain Sojeeb', 'MD Saber Hossain Sojeeb', '01824347111', NULL, NULL, NULL, NULL, 1, NULL, 'public/uploads/default/user.png', '$2y$10$jRpdZl.6j2zx/xap.CX0C.o7rfkLRHqrhzJoWiSNSh6GfidyPnTtO', NULL, 'active', '2025-08-30 05:30:26', '2025-08-30 05:30:26'),
(123, 'Daria Sherman', 'Daria Sherman', '01000000000', NULL, NULL, NULL, NULL, 1, NULL, 'public/uploads/default/user.png', '$2y$10$3gyPx829yVSRkuKe9y5IbuLBTlY3L9LotaDn65LJURx9oVc2XzGY6', NULL, 'active', '2025-09-15 10:27:31', '2025-09-15 10:27:31'),
(124, '01000000001', '01000000001-124', '01000000001', NULL, NULL, NULL, NULL, 1, NULL, 'public/uploads/default/user.png', '$2y$10$GfDplUkI4lOkObqp6hXhJ.Am/Nl1IcQMtYE6zfhcwY5aR3N07gW0C', NULL, 'active', '2025-09-21 17:37:26', '2025-09-21 17:37:26');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `area_id` int(11) NOT NULL,
  `area_name` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `shippingfee` varchar(255) NOT NULL,
  `partialpayment` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `area_id`, `area_name`, `district`, `shippingfee`, `partialpayment`, `created_at`, `updated_at`) VALUES
(1, 112, 'Pilkhana', 'Dhaka', '80', '200', '2021-10-23 19:02:41', '2022-12-10 04:25:24'),
(2, 1684, 'Katasur', 'Dhaka', '80', '200', '2021-10-24 19:02:41', '2022-12-10 04:25:24'),
(3, 6, 'Shyamoli', 'Dhaka', '80', '200', '2021-10-25 19:02:40', '2022-12-10 04:25:24'),
(4, 1685, 'Dhanmondi Staff Quarter', 'Dhaka', '80', '200', '2021-10-26 19:02:40', '2022-12-10 04:25:24'),
(5, 418, 'Dhaka Uddyan', 'Dhaka', '80', '200', '2021-10-27 19:02:40', '2022-12-10 04:25:24'),
(6, 7, 'Adabor', 'Dhaka', '80', '200', '2021-10-28 19:02:40', '2022-12-10 04:25:24'),
(7, 114, 'New Market', 'Dhaka', '80', '200', '2021-10-29 19:02:40', '2022-12-10 04:25:24'),
(8, 426, 'Shekhertek', 'Dhaka', '80', '200', '2021-10-30 19:02:40', '2022-12-10 04:25:24'),
(9, 155, 'Old Elephant Road', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(10, 1660, 'Dhanmondi - Rd 1', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(11, 326, 'Science Lab', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(12, 1661, 'Dhanmondi - Rd 2', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(13, 11, 'Lalmatia', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(14, 327, 'Sobhanbag', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(15, 1690, 'Arshinagar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(16, 145, 'Dhaka University', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(17, 1691, 'Washpur', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(18, 1692, 'Garden City', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(19, 1693, 'Boddhovumi', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(20, 148, 'Kazi Nazrul Islam Avenue', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(21, 1187, 'Kaderabad Housing', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(22, 149, 'Kawran Bazar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(23, 1662, 'Dhanmondi - Rd 4', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(24, 115, 'Azimpur', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(25, 162, 'Shahbag', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(26, 306, 'Monipuripara', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(27, 309, 'Bosila', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(28, 1663, 'Dhanmondi - Rd 4A', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(29, 19, 'Sher-E-Bangla Nagar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(30, 116, 'Nilkhet', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(31, 163, 'Katabon', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(32, 1664, 'Dhanmondi - Rd 6', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(33, 164, 'Hatirpool', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(34, 1210, 'Eastern Housing (Adabor)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(35, 1665, 'Dhanmondi - Rd 6', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(36, 1211, 'Teskunipara', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(37, 1212, 'DHAKA TENARI MORE', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(38, 1666, 'Dhanmondi - Rd 3A', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(39, 1213, 'Shahidnagar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(40, 95, 'Bijoy Shoroni', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(41, 1667, 'Dhanmondi - Rd 6A', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(42, 1214, 'Jhigatola', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(43, 185, 'Elephant Road', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(44, 96, 'Farmgate', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(45, 1668, 'Dhanmondi - Rd 8', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(46, 1215, 'Polashi', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(47, 186, 'Kathalbagan', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2023-01-07 01:52:02'),
(48, 97, 'Indira Road', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(49, 1669, 'Dhanmondi - Rd 8A', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(50, 1216, 'Satmoshjid Road', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(51, 1670, 'Dhanmondi - Rd 9', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(52, 1217, 'Shukrabad', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(53, 188, 'Central Road', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(54, 99, 'Tejkunipara', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(55, 1671, 'Dhanmondi - Rd 9A', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(56, 1218, 'BNP Bazar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(57, 100, 'Razabazar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(58, 1672, 'Dhanmondi - Rd 10', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(59, 1673, 'Dhanmondi - Rd 12', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(60, 1139, 'Dhaka uddan', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(61, 101, 'Sukrabad', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(62, 1674, 'Dhanmondi - Rd 12A', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(63, 1140, 'Nobodoy', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(64, 102, 'Panthopath', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(65, 103, 'Kalabagan', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(66, 1675, 'Dhanmondi - Rd 15', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(67, 1141, 'Chad Uddan', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(68, 104, 'Green Road', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(69, 1676, 'Dhanmondi - Rd 15 A', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(70, 1142, 'Mohammadia Housing', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(71, 105, 'Manik Mia Avenue', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(72, 1677, 'Dhanmondi - Rd 27', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(73, 1143, 'Ring Road', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(74, 106, 'Asad Avenue', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(75, 1678, 'Dhanmondi - Rd 28', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(76, 1144, 'Tajmahal Road', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(77, 107, 'West Dhanmondi', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(78, 1679, 'Dhanmondi - Rd 29', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(79, 1145, 'Nurjahan Road', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(80, 133, 'Dhakeshwari', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:24'),
(81, 108, 'Shankar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(82, 1146, 'Rajia Sultana Road', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(83, 1, 'Mohammadpur(Dhaka)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(84, 273, 'Zigatola', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(85, 109, 'Rayer Bazar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(86, 1681, 'Zafrabad', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(87, 183, 'Paribag', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(88, 2, 'Dhanmondi - Rd 3', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(89, 110, 'Tallabag', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(90, 1682, 'Sadek Khan Road', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(91, 111, 'Hazaribag', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(92, 1683, 'Sher e Bangla Road', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(93, 67, 'Nikunja', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(94, 1230, 'Mahanogor', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(95, 1231, 'Nimtola', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(96, 1232, 'Nurerchala', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(97, 1571, 'Jahangir Gate', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(98, 82, 'South Badda', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(99, 325, 'Joar Shahara', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(100, 1572, 'Nijhum gate', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(101, 83, 'Merul Badda', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(102, 1573, 'BAF Bashar (Dhaka cantonment)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(103, 1199, 'Apollo', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(104, 84, 'Niketon', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(105, 72, 'Bashundhara R/A', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(106, 1574, 'Zia Colony', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(107, 1200, 'Nurer Chala', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(108, 85, 'Banani', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(109, 86, 'Banani DOHS', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(110, 73, 'Vatara', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(111, 1575, 'MES colony', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(112, 1201, 'Bawaila Para', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(113, 87, 'Mohakhali', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(114, 74, 'Nadda', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(115, 1202, 'Satarkul', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(116, 1185, 'Kunipara', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(117, 88, 'Mohakhali DOHS', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(118, 1233, 'Pastola Bazar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(119, 14, 'Gudaraghat (Badda)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(120, 75, 'Baridhara', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(121, 1206, 'Khilbar Tek', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(122, 1186, 'Babli Masjid', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(123, 1234, 'Poschim Badda', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(124, 76, 'Baridhara DOHS', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(125, 1235, 'Purbo Badda', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(126, 77, 'Notun Bazar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(127, 91, 'Aziz Palli', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(128, 1236, 'Sat-tola Bazar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(129, 78, 'Adarsha Nagar (Badda)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(130, 1317, 'Namapara-Khilkhet', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(131, 92, 'Bashtola', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(132, 1237, 'Shaheenbagh', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(133, 79, 'Shahjadpur', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(134, 93, 'South Baridhara DIT Project', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(135, 1238, 'Subastu', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(136, 21, 'Cantonment Post Office', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(137, 80, 'Uttor Badda', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(138, 94, 'Aftabnagar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(139, 1239, 'ICDDRB', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(140, 81, 'Middle Badda', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(141, 39, 'Namapara', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(142, 1240, 'Satrasta', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(143, 1348, 'Niketon Bazar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(144, 323, 'Nakhalpara', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(145, 1268, 'Rosulbagh(Mohakhali)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(146, 1241, 'Tekpara Adorsonagor', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(147, 1242, 'Uttar Badda', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(148, 1323, 'Aftab Nagar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(149, 98, 'Tejgaon', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(150, 1243, 'Wireless', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(151, 1244, 'Solmaid', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(152, 27, 'M.E.S', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(153, 44, 'Kurmitola', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(154, 1245, '300 Feet', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(155, 45, 'Shewra', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(156, 1219, 'Kalachandpur', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(157, 174, 'Khilbari Tek (Badda)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(158, 1220, 'Jogonnathpur', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(159, 1221, 'Kuratuli', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(160, 1329, 'TV gate', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(161, 1222, 'Alatunnessa School Road', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(162, 1224, 'Bou Bazar - Mohakhali, Dhaka', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(163, 1733, 'Nikunja 2', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(164, 51, 'Kuril', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(165, 1225, 'Chairman Goli', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(166, 1226, 'Confidence Tower, Jhilpar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(167, 1227, 'Fuji Trade Center', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(168, 3, 'Gulshan', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(169, 1228, 'Khil Barirtek', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(170, 1229, 'Korail', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(171, 66, 'Khilkhet', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(172, 449, 'Mirpur Taltola', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(173, 1332, 'Gudaraghat-Mirpur', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(174, 277, 'Kalshi', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(175, 1333, 'Namapara-Mirpur', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(176, 1334, 'Oxygen', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(177, 1600, 'Mirpur 60 feet', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(178, 8, 'Darussalam', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(179, 9, 'Gabtoli', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(180, 1335, 'Technical', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(181, 1481, 'Eastern Housing (Pallabi)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(182, 10, 'Pallabi', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(183, 1336, 'Mirpur 13 /14 / 15', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(184, 1337, 'Benaroshi Polli', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(185, 12, 'Mirpur DOHS', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(186, 329, 'ECB Chattar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(187, 1338, 'Beribadh-Mirpur', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(188, 13, 'Kochukhet', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(189, 1339, 'Buddhijibi Road', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(190, 1340, 'Purobi Cinema Hall', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(191, 89, 'South Monipur', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(192, 17, 'Agargaon', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(193, 1341, 'Mondir-Mirpur', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(194, 1694, 'Mirpur - 6', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(195, 90, 'Shah Ali Bag', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(196, 18, 'Monipur', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(197, 1342, 'Palasnagor', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(198, 1343, 'Purobi', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(199, 20, 'Ibrahimpur', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(200, 1344, 'Rupnagor', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(201, 1345, 'Senpara', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(202, 315, 'Mirpur 2', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(203, 1131, 'Birulia', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(204, 1346, 'BRTA', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(205, 22, 'Mirpur Cantonment', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(206, 37, 'Dewanpara', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(207, 1347, 'Zoo', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(208, 23, 'Kafrul', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(209, 40, 'Mastertek', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(210, 1695, 'Mirpur - 7', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(211, 24, 'Vashantek', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(212, 41, 'Balughat', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(213, 1696, 'Mirpur - 11', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(214, 25, 'Manikdi', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(215, 42, 'Barontek', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(216, 1697, 'Mirpur - 11.5', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(217, 26, 'Matikata', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(218, 43, 'Goltek', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(219, 1698, 'Mirpur - 12', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(220, 28, 'Rupnagar Residential Area', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(221, 1699, 'Mirpur - 13', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(222, 1165, 'Kallanpur', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(223, 29, 'Duaripara', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(224, 1700, 'Mirpur - 15', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(225, 1166, 'Amin Bazar', 'Dhaka', '150', '510', '2021-10-31 19:02:40', '2022-12-14 10:16:43'),
(226, 30, 'Rainkhola', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(227, 1701, 'Mirpur - 14', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(228, 1167, 'Lalkuthi', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(229, 31, 'Mirpur Diabari', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(230, 1168, 'Mirpur 1', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(231, 32, 'Mazar Road', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(232, 1169, 'Tolarbag', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(233, 33, 'Shagufta', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(234, 1594, 'Arambag (Mirpur)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(235, 1170, 'Ahmed Nagar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(236, 1331, 'Mirpur 10', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(237, 1171, 'Paikpara', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(238, 1172, 'Pirerbag', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(239, 35, 'Baigertek', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(240, 1173, 'Taltola (Mirpur)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(241, 36, 'Madina nagar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(242, 1174, 'MES Colony', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(243, 1175, 'Zia Colony', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(244, 275, 'Kazipara', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(245, 1176, 'Ajiz Market', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(246, 276, 'Shewrapara', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(247, 5, 'Kallyanpur', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(248, 139, 'Fakirapul', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(249, 152, 'Shantibag', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(250, 140, 'Kakrail', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(251, 153, 'Baily Road', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(252, 154, 'Minto Road', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(253, 69, 'Hajipara (Rampura)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(254, 141, 'Naya Paltan', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(255, 142, 'Bijoynagar (Paltan)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(256, 156, 'Eskaton Garden Road', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(257, 143, 'Press Club', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(258, 144, 'High Court', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(259, 157, 'Eskaton', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(260, 158, 'Moghbazar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(261, 288, 'Purana Paltan', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(262, 159, 'Mouchak', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(263, 334, 'Arambag (Motijheel)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(264, 160, 'Malibag', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(265, 161, 'Rampura', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(266, 1207, 'Buddho Mondir', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(267, 1208, 'Sipahibag', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(268, 1636, 'Banasree Block - A', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(269, 1209, 'TT Para', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(270, 1637, 'Banasree Block - B', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(271, 165, 'Bashabo', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(272, 1638, 'Banasree Block - C', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(273, 1132, 'Shahjahanpur (Dhaka)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(274, 166, 'Khilgaon', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(275, 1639, 'Banasree Block - D', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(276, 1640, 'Banasree Block - E', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(277, 319, 'Siddweswari', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(278, 167, 'Middle Bashabo', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(279, 1641, 'Banasree Block - F', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(280, 168, 'Goran', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(281, 1642, 'Banasree Block - G', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(282, 169, 'Madartek', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(283, 396, 'Nandipara', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(284, 1643, 'Banasree Block - H', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(285, 187, 'Malibagh Taltola', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(286, 170, 'Manik Nagar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(287, 171, 'Shahjahanpur', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(288, 1644, 'Banasree Block - I', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(289, 1324, 'Gulbagh', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(290, 1137, 'Haterrjheel', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(291, 125, 'Tikatuly', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(292, 126, 'Motijheel', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(293, 172, 'Banasree (Rampura)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(294, 403, 'Gopibag', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(295, 1645, 'Banasree Block - J', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(296, 189, 'Sabujbag', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(297, 1325, 'Meradiya Bazar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(298, 173, 'Meradia', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(299, 1646, 'Banasree Block - K', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(300, 190, 'Shiddheswari', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(301, 1326, 'Mirbagh', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(302, 1647, 'Banasree Block - L', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(303, 1327, 'Modhubagh', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(304, 1328, 'Rampura TV center', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(305, 1648, 'Banasree Block - M', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(306, 266, 'Shegunbagicha', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(307, 177, 'Mughdapara', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(308, 1649, 'Banasree Block - N', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(309, 267, 'Rajarbag', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(310, 1330, 'Ulan road', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(311, 1223, 'Purbo Rampura', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(312, 1251, 'Chamelibag', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(313, 181, 'Hatirjheel', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(314, 134, 'Kamalapur', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(315, 182, 'Banglamotor', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(316, 1128, 'Manda(Dhaka)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(317, 1596, 'Nazimuddin Road (Malibag)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(318, 150, 'Ramna', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(319, 137, 'Dainik Bangla Mor', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(320, 151, 'Shantinagar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(321, 1657, 'Uttara Sector - 15', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(322, 324, 'Dokshingaon', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(323, 1686, 'Uttara Sector - 16', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(324, 1152, 'Uttara Sector 5', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(325, 1687, 'Uttara Sector - 17', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(326, 1153, 'Uttara Sector 14', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(327, 1688, 'Uttara Sector - 18', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(328, 1154, 'Uttara Sector 3', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(329, 1155, 'Uttara Sector 7', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(330, 1156, 'Uttara Sector 9', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(331, 1157, 'Uttara Sector 11', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(332, 1158, 'Nalbhog', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(333, 1160, 'Phulbaria', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(334, 352, 'Kamarpara', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(335, 1161, 'Dhour', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(336, 1295, 'Ranavola', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(337, 1162, 'Bhatuliya', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(338, 1318, 'Ahalia-Uttara', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(339, 1320, 'Diabari', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(340, 1321, 'Habib Market-Uttara', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(341, 1322, 'Pakuria-Uttara', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(342, 1163, 'Bamnartek', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(343, 1164, 'Turag', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(344, 1650, 'Uttara Sector - 1', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(345, 34, 'Bawnia', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(346, 1654, 'Uttara Sector - 10', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(347, 1655, 'Uttara Sector - 12', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(348, 1656, 'Uttara Sector - 13', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(349, 1257, 'Kotwali (Puran Dhaka)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(350, 113, 'Nawabgonj Puran Dhaka', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(351, 1258, 'Railway Colony', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(352, 1259, 'Rajar Dewri', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(353, 284, 'Sutrapur', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(354, 1261, 'Sat rowja', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(355, 286, 'Kamrangichar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(356, 1262, 'Tantibazar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(357, 146, 'Dhaka Medical', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(358, 147, 'Bongo Bondhu Avenue', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(359, 346, 'Armanitola', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(360, 349, 'Islambag', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(361, 354, 'Mitford', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(362, 117, 'Lalbagh', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(363, 355, 'Shakhari Bazar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(364, 118, 'Chawkbazar (Dhaka)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(365, 356, 'Katherpol', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(366, 316, 'Bongshal', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(367, 119, 'Naya Bazar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(368, 357, 'Bangla Bazar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(369, 120, 'Tatibazar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(370, 358, 'Patuatuly', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(371, 121, 'Luxmi Bazar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(372, 123, 'Puran Dhaka', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(373, 124, 'Siddique Bazar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(374, 397, 'Nazira Bazar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(375, 127, 'Nawabpur', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(376, 128, 'Kaptan Bazar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(377, 263, 'Dolaikhal', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(378, 1248, 'Mahut Tuli', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(379, 129, 'Gulistan', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(380, 406, 'Sadarghat (Dhaka)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(381, 1249, 'Alubazar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(382, 130, 'Bongo Bazar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(383, 407, 'Kaltabazar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(384, 1250, 'Badam Toli', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(385, 131, 'Chankarpul', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(386, 269, 'Babubazar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(387, 270, 'Islampur(Dhaka)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(388, 132, 'Palashi', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(389, 409, 'Gandaria', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(390, 1595, 'Nazimuddin Road (Puran Dhaka)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(391, 271, 'Imamgonj', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(392, 1252, 'Dholaikhal', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(393, 272, 'Nayabazar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(394, 1253, 'Doyagonj', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(395, 1254, 'Farashgong', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(396, 135, 'Wari', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(397, 136, 'Narinda', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(398, 184, 'Bakshibazar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(399, 1395, 'Firozshah', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(400, 1396, 'GEC', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(401, 1397, 'Halishahar', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(402, 1398, 'Halishshar', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(403, 1458, 'Sadarghat', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(404, 1366, 'Cadet College', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(405, 1367, 'Chandgaon', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(406, 1368, 'Chattogram Airport', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(407, 1369, 'Chattogram Bandar', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(408, 1370, 'Chattogram Cantonment', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(409, 1371, 'Chattogram Chawkbazar', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(410, 1431, 'Mohard', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(411, 1372, 'Chattogram Customs Acca', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(412, 999, 'Sitakundu', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(413, 1373, 'Chattogram GPO', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(414, 1433, 'Nasirabad', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(415, 1407, 'Jalalabad', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(416, 1374, 'Chattogram New Market', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(417, 1434, 'North Halishahar', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(418, 1375, 'Chattogram Oxygen', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(419, 1435, 'North Kattali', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(420, 1349, 'Kotwali Chattogram', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(421, 1135, 'Bondor (Chittagong)', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(422, 1376, 'Chattogram Politechnic Institute', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(423, 1436, 'North Katuli', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(424, 1437, 'Noyabazar', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(425, 1350, 'Agrabad', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(426, 1464, 'Sitakunda Barabkunda', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(427, 1136, 'Barahatia', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(428, 1377, 'Chattogram Sailors Colony', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(429, 1438, 'Pahartoli', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(430, 1351, 'AK Khan', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(431, 1465, 'Sitakunda Baroidhala', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(432, 1378, 'Colonel Hat', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(433, 1379, 'Combined Military Hospital (CMH)', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(434, 1439, 'Panchlaish', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(435, 1352, 'Al- Amin Baria Madra', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(436, 1466, 'Sitakunda Bawashbaria', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(437, 1380, 'Court Buliding', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(438, 1440, 'Patenga', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(439, 1353, 'Al- Amin Baria Madrasa', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(440, 1467, 'Sitakunda Bhatiari', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(441, 1354, 'Amin Jute Mills', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(442, 1468, 'Sitakunda Fouzdarhat', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(443, 1122, 'Chittagong Sadar', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(444, 1382, 'Dakkshin Pahartoli', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(445, 1355, 'Anandabazar', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(446, 1469, 'Sitakunda Jafrabad', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(447, 1383, 'Double Mooring', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(448, 1443, 'Rampur', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(449, 1470, 'Sitakunda Kumira', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(450, 1471, 'South Halishahar', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(451, 1444, 'Rampura TSO', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(452, 1358, 'Bayezid Bostami', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(453, 1473, 'Wazedia', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(454, 1419, 'Kattuli', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(455, 1420, 'Khulshi', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(456, 1388, 'Export Processing', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(457, 1423, 'Middle Patenga', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(458, 1474, 'No area', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(459, 448, 'CWH', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(460, 292, 'Shyampur', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(461, 296, 'Dholaipar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(462, 313, 'Shonir Akhra', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(463, 1246, 'Mirhazirbagh', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(464, 404, 'Shwamibag', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(465, 405, 'Sayedabad', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(466, 178, 'Golapbag (Dhaka)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(467, 408, 'Jurain', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(468, 179, 'Jatrabari', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(469, 411, 'RayerBag', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(470, 412, 'Faridabad (Jatrabari)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(471, 1255, 'Dholpur', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(472, 414, 'Donia', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(473, 1597, 'Kodomtoli (Jatrabari)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(474, 415, 'Postogola', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(475, 915, 'Fenchuganj', 'Sylhet', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(476, 916, 'Gowainghat', 'Sylhet', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(477, 917, 'Golapganj (Sylhet)', 'Sylhet', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(478, 918, 'Jaintapur', 'Sylhet', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(479, 920, 'Kanaighat', 'Sylhet', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(480, 921, 'Amberkhana (Sylhet)', 'Sylhet', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(481, 922, 'South Surma', 'Sylhet', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(482, 1497, 'Akhalia', 'Sylhet', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(483, 1498, 'Tilaghor', 'Sylhet', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(484, 1499, 'Shibganj(sylhet)', 'Sylhet', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(485, 1494, 'Zindabazar', 'Sylhet', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(486, 1500, 'Uposhohor(Sylhet)', 'Sylhet', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(487, 1495, 'Pathantula', 'Sylhet', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(488, 1501, 'Kodomtoli', 'Sylhet', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(489, 1496, 'Subidbazar', 'Sylhet', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(490, 1502, 'Sheikhghat.', 'Sylhet', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(491, 1503, 'Majortila', 'Sylhet', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(492, 1504, 'Subhanighat', 'Sylhet', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(493, 911, 'Balaganj', 'Sylhet', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(494, 913, 'Biswanath', 'Sylhet', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(495, 914, 'Companyganj (Sylhet)', 'Sylhet', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(496, 1284, 'Khartail', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(497, 1542, 'Jinumarket', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(498, 1285, 'Majukhan', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(499, 1543, 'T & T(Gazipur)', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(500, 1197, 'Ershadnagar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(501, 1286, 'Milgate', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(502, 1544, 'Shilmun', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(503, 1198, 'Sataish', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(504, 1287, 'National University', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(505, 1545, 'Mudafa', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(506, 1288, 'Surtaranga', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(507, 1546, 'Khapara', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(508, 1289, 'Targach', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(509, 1547, 'Malakerbari', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(510, 1263, 'Khairtail', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(511, 1290, 'Rail Station', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(512, 1548, 'Bypass Road (Gazipur)', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(513, 1549, 'Kodda', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(514, 1264, 'Bonomala', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(515, 1291, 'Boro Dewra', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(516, 1550, 'Duet Road', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(517, 1265, 'Morkun', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(518, 1551, 'Shibbari', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(519, 1552, 'Shimultoli', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(520, 647, 'Chowrasta (Gazipur)', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(521, 1188, 'Kunia', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(522, 1553, 'Jorpukur', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(523, 1189, 'Gacha', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(524, 1190, 'Boro Bari', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(525, 1554, 'Salna', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52');
INSERT INTO `districts` (`id`, `area_id`, `area_name`, `district`, `shippingfee`, `partialpayment`, `created_at`, `updated_at`) VALUES
(526, 649, 'Kaliganj(Gazipur)', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(527, 1191, 'Board Bazar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(528, 1192, 'Kamarjuri', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(529, 1266, 'Bhadam', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(530, 1193, 'Dattapara', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(531, 1267, 'Boro Dewra Dakkhin Para', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(532, 1194, 'Auchpara', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(533, 1195, 'Cherag Ali', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(534, 1269, 'Gopalpur', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(535, 1196, 'Tongi Bazar (Dhaka)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(536, 1270, 'College Gate (Tongi)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(537, 1271, 'Boardbazar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(538, 1272, 'Gazipura', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(539, 1273, 'Hossain Market (Tongi)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(540, 1274, 'Signboard (Gazipur)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(541, 1275, 'Joydebpur', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(542, 1276, 'Dhirasrom', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(543, 1277, 'Dattapara Road', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(544, 1536, 'Pubail', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(545, 1278, 'Badekomelosshor', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(546, 1279, 'Borobari', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(547, 1537, 'Mirerbazar', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(548, 1280, 'Choidana', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(549, 1538, 'Ulokhola', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(550, 1281, 'Deger Chala', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(551, 1539, 'Modhumita', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(552, 1282, 'Gazcha', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(553, 1540, 'Miraspara', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(554, 63, 'Tongi', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(555, 1283, 'Hariken', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(556, 1541, 'Pagar', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(557, 282, 'Ashulia', 'Dhaka', '150', '510', '2021-10-31 19:02:40', '2022-12-14 10:15:49'),
(558, 283, 'Amin Bazar', 'Dhaka', '150', '510', '2021-10-31 19:02:40', '2022-12-14 10:16:34'),
(559, 365, 'Dhamrai', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(560, 1127, 'Baipayl', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(561, 53, 'Savar', 'Dhaka', '150', '510', '2021-10-31 19:02:40', '2022-12-14 10:15:10'),
(562, 61, 'Savar Cantonment', 'Dhaka', '150', '510', '2021-10-31 19:02:40', '2022-12-14 10:14:50'),
(563, 1178, 'Aga Nagar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(564, 1179, 'Kathuria', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(565, 1180, 'Goljarbag', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(566, 1181, 'Nazirabag', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(567, 1260, 'Hasnabad', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(568, 1182, 'Kaliganj - Keraniganj', 'Dhaka', '150', '510', '2021-10-31 19:02:40', '2022-12-14 10:17:35'),
(569, 1183, 'Nazarganj', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(570, 1184, 'Zinzira', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(571, 305, 'Keranigonj', 'Dhaka', '150', '510', '2021-10-31 19:02:40', '2022-12-14 10:17:28'),
(572, 1125, 'Kalatia', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(573, 1256, 'Kodomtoli(Keraniganj)', 'Dhaka', '150', '510', '2021-10-31 19:02:40', '2022-12-14 10:17:22'),
(574, 707, 'Bandar (Narayanganj)', 'Narayanganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(575, 708, 'Chashara (Narayanganj)', 'Narayanganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(576, 1658, 'Signboard (Narayanganj)', 'Narayanganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(577, 1659, 'Jalkuri (Narayanganj)', 'Narayanganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(578, 710, 'Sonargaon', 'Narayanganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(579, 1689, 'Chittagong Road (Narayanganj)', 'Narayanganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(580, 1133, 'Shanarpar (Narayanganj)', 'Narayanganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(581, 1247, 'Bhuigarh-Narayangonj', 'Narayanganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(582, 1123, 'Siddhirganj', 'Narayanganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(583, 1124, 'Fatullah', 'Narayanganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(584, 1680, 'Shibu Market (Narayanganj)', 'Narayanganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(585, 1000, 'Barura', 'Comilla', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(586, 1001, 'Brahmanpara', 'Comilla', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(587, 1002, 'Burichang', 'Comilla', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(588, 1003, 'Chandina', 'Comilla', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(589, 1005, 'Comilla Sadar', 'Comilla', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(590, 1007, 'Debiduar', 'Comilla', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(591, 1015, 'Comilla Sadar South', 'Comilla', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(592, 782, 'Batiaghata', 'Khulna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(593, 783, 'Dacope', 'Khulna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(594, 784, 'Dighalia', 'Khulna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(595, 785, 'Dumuria', 'Khulna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(596, 786, 'Phultala', 'Khulna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(597, 789, 'Rupsa', 'Khulna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(598, 790, 'Khalispur', 'Khulna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(599, 791, 'Sonadanga', 'Khulna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(600, 792, 'Khan jahan ali', 'Khulna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(601, 793, 'Doulatpur', 'Khulna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(602, 1120, 'Khulna Sadar', 'Khulna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(603, 794, 'Terokhada', 'Khulna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(604, 1528, 'Chorpara (Mymensingh)', 'Mymensingh', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(605, 1529, 'Kachijhuli', 'Mymensingh', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(606, 695, 'Dhubaura', 'Mymensingh', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(607, 1530, 'College Road (Mymensigh)', 'Mymensingh', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(608, 696, 'Fulbaria (Mymensingh)', 'Mymensingh', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(609, 1531, 'Akua', 'Mymensingh', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(610, 697, 'Fulpur', 'Mymensingh', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(611, 1532, 'Agriculture University (Mymensingh)', 'Mymensingh', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(612, 1533, 'Zilla School Mor (Mymensingh)', 'Mymensingh', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(613, 699, 'Koltapara (Gouripur Mymensingh)', 'Mymensingh', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(614, 1534, 'Rohomotpur Bypass', 'Mymensingh', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(615, 700, 'Haluaghat', 'Mymensingh', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(616, 1535, 'Mashkanda', 'Mymensingh', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(617, 701, 'Iswarganj', 'Mymensingh', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(618, 702, 'Kacharighat (Mymensingh)', 'Mymensingh', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(619, 703, 'Muktagacha', 'Mymensingh', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(620, 704, 'Nandail', 'Mymensingh', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(621, 932, 'Barisal Sadar', 'Barisal', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(622, 935, 'Mehendiganj', 'Barisal', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(623, 929, 'Babuganj', 'Barisal', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(624, 930, 'Bakerganj', 'Barisal', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(625, 931, 'Banaripara', 'Barisal', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(626, 658, 'Dewanganj', 'Jamalpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(627, 659, 'Islampur(Jamalpur)', 'Jamalpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(628, 660, 'Jamalpur Sadar', 'Jamalpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(629, 661, 'Madarganj', 'Jamalpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(630, 662, 'Melandah', 'Jamalpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(631, 663, 'Sharishabari', 'Jamalpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(632, 1603, 'Subidkhali', 'Patuakhali', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(633, 1606, 'Bagabandar', 'Patuakhali', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(634, 1607, 'Kalaia', 'Patuakhali', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(635, 1609, 'Birpasha', 'Patuakhali', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(636, 949, 'Bauphal', 'Patuakhali', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(637, 950, 'Dasmina', 'Patuakhali', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(638, 951, 'Dumki', 'Patuakhali', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(639, 952, 'Galachipa', 'Patuakhali', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(640, 954, 'Mirjaganj', 'Patuakhali', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(641, 955, 'Patuakhali Sadar', 'Patuakhali', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(642, 677, 'Kalkini', 'Madaripur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(643, 678, 'Madaripur Sadar', 'Madaripur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(644, 679, 'Rajoir', 'Madaripur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(645, 680, 'Shibchar', 'Madaripur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(646, 1716, 'Kacari (Munshiganj)', 'Munshiganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(647, 1717, 'Super Market Mor (Munshiganj)', 'Munshiganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(648, 1718, 'Munshir Hat (Munshiganj)', 'Munshiganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(649, 1719, 'Mirkadim (Munshiganj)', 'Munshiganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(650, 1720, 'Rikabibazar (Munshiganj)', 'Munshiganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(651, 1721, 'Sipahipara (Munshiganj)', 'Munshiganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(652, 1722, 'Muktarpur (Munshiganj)', 'Munshiganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(653, 688, 'Gazaria', 'Munshiganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(654, 690, 'Katakhali (Munshiganj)', 'Munshiganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(655, 691, 'Serajdikhan', 'Munshiganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(656, 693, 'Tangibari', 'Munshiganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(657, 657, 'Bakshiganj', 'Jamalpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(658, 738, 'Jhenaigati', 'Sherpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(659, 739, 'Nakla', 'Sherpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(660, 740, 'Nalitabari', 'Sherpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(661, 741, 'Sherpur Sadar', 'Sherpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(662, 742, 'Sribordi', 'Sherpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(663, 962, 'Zia Nagar (Indurkani)', 'Perojpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(664, 956, 'Bhandaria', 'Perojpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(665, 957, 'Kaukhali (Perojpur)', 'Perojpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(666, 958, 'Mothbaria', 'Perojpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(667, 959, 'Nesarabad (Shawrupkathi)', 'Perojpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(668, 960, 'Nazirpur', 'Perojpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(669, 961, 'Pirojpur Sadar', 'Perojpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(670, 978, 'Chandpur Sadar', 'Chandpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(671, 979, 'Faridganj', 'Chandpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(672, 980, 'Haimchar', 'Chandpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(673, 983, 'Matlab (South)', 'Chandpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(674, 984, 'Matlab (North)(Chengarchar)', 'Chandpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(675, 638, 'Alfadanga', 'Faridpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(676, 639, 'Bhanga', 'Faridpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(677, 640, 'Boalmari', 'Faridpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(678, 641, 'Char Bhadrasan', 'Faridpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(679, 642, 'Faridpur Sadar', 'Faridpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(680, 643, 'Madhukhali', 'Faridpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:52'),
(681, 644, 'Nagarkanda', 'Faridpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(682, 645, 'Sadarpur', 'Faridpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(683, 646, 'Saltha', 'Faridpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(684, 748, 'Kalihati', 'Tangail', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(685, 749, 'Mirzapur', 'Tangail', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(686, 751, 'Nagarpur', 'Tangail', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(687, 752, 'Shakhipur', 'Tangail', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(688, 753, 'Tangail Sadar', 'Tangail', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(689, 743, 'Bashail', 'Tangail', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(690, 744, 'Bhuapur', 'Tangail', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(691, 745, 'Delduar', 'Tangail', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(692, 945, 'Jhalokathi Sadar', 'Jhalokathi', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(693, 946, 'Kathalia', 'Jhalokathi', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(694, 947, 'Nalchiti', 'Jhalokathi', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(695, 948, 'Rajapur (Jhalokathi)', 'Jhalokathi', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(696, 1711, 'Konokpur (Moulvibazar)', 'Moulvibazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(697, 1712, 'Adompur Bazar - Kamalganj', 'Moulvibazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(698, 1715, 'Kazir Bazar (Moulvibazar)', 'Moulvibazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(699, 894, 'Kamalganj', 'Moulvibazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(700, 896, 'Moulvibazar Sadar', 'Moulvibazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(701, 897, 'Rajnagar', 'Moulvibazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(702, 898, 'Sreemongal', 'Moulvibazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(703, 1702, 'Sarkar Bazar (Moulvibazar)', 'Moulvibazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(704, 1703, 'Notun Bridge (Moulvibazar)', 'Moulvibazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(705, 1622, 'Shamshernagar (Moulvibazar)', 'Moulvibazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(706, 1623, 'Sherpur (Moulvibazar)', 'Moulvibazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(707, 1704, 'Tarapasha Bazar - Rajnagar', 'Moulvibazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(708, 1705, 'Munshibazar - Kamalganj', 'Moulvibazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(709, 1706, 'Munshibazar - Rajnagar', 'Moulvibazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(710, 1707, 'Tengra Bazar - Rajnagar', 'Moulvibazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(711, 1708, 'Mukam Bazar - Radar Unit (Moulvibazar)', 'Moulvibazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(712, 1710, 'Patanushar - Shamshernagar', 'Moulvibazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(713, 1515, 'Chowdhury Bazar (Habiganj)', 'Habiganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(714, 1516, 'Sultanmahmudpur', 'Habiganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(715, 889, 'Habiganj Sadar', 'Habiganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(716, 1517, 'Gatiabazar', 'Habiganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(717, 890, 'Lakhai', 'Habiganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(718, 1518, 'Mahmudabad', 'Habiganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(719, 1519, 'Duliakal', 'Habiganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(720, 892, 'Nabiganj', 'Habiganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(721, 1520, 'Mohonpur (Habiganj)', 'Habiganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(722, 885, 'Ajmeriganj', 'Habiganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(723, 887, 'Baniachang', 'Habiganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(724, 1514, 'Rajnogor', 'Habiganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(725, 1107, 'Badarganj', 'Rangpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(726, 1108, 'Gangachara', 'Rangpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(727, 1109, 'Kaunia (Rangpur)', 'Rangpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(728, 1110, 'Mithapukur', 'Rangpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(729, 1111, 'Pirgacha', 'Rangpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(730, 1112, 'Pirganj(Rangpur)', 'Rangpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(731, 1113, 'Rangpur Sadar', 'Rangpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(732, 1114, 'Taraganj', 'Rangpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(733, 773, 'Keshabpur', 'Jessore', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(734, 774, 'Manirampur', 'Jessore', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(735, 775, 'Sharsha', 'Jessore', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(736, 769, 'Bagherpara', 'Jessore', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(737, 770, 'Chowgacha', 'Jessore', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(738, 1129, 'Benapole', 'Jessore', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(739, 771, 'Jessore Sadar', 'Jessore', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(740, 772, 'Jhikargacha', 'Jessore', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(741, 1102, 'Atwari (Panchagarh)', 'Panchagarh', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(742, 1103, 'Boda', 'Panchagarh', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(743, 1104, 'Debiganj', 'Panchagarh', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(744, 1105, 'Panchagarh Sadar', 'Panchagarh', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(745, 1106, 'Tetulia', 'Panchagarh', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(746, 1099, 'Kishoreganj ( Nilphamari)', 'Nilphamari', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(747, 1100, 'Nilphamari Sadar', 'Nilphamari', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(748, 1096, 'Dimla', 'Nilphamari', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(749, 1097, 'Domar', 'Nilphamari', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(750, 1098, 'Jaldhaka', 'Nilphamari', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(751, 1021, 'Ramu', 'Cox\'s Bazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(752, 1023, 'Ukhia', 'Cox\'s Bazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(753, 1576, 'Kalur Dokan', 'Cox\'s Bazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(754, 1577, 'Alir Jahal Road', 'Cox\'s Bazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(755, 966, 'Nakhoyngchari', 'Bandarban', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(756, 1578, 'Barmis Market', 'Cox\'s Bazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(757, 1579, 'Bazar Ghata', 'Cox\'s Bazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(758, 1580, 'Laldighir Par (Cox\'s Bazar)', 'Cox\'s Bazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(759, 1581, 'Holiday Mor(Cox\'s Bazar)', 'Cox\'s Bazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(760, 1582, 'Laboni Point', 'Cox\'s Bazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(761, 1583, 'Sughandha Point', 'Cox\'s Bazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(762, 1584, 'Marin Drive Road', 'Cox\'s Bazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(763, 1585, 'Sonar Tara', 'Cox\'s Bazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(764, 1586, 'Jilonjha', 'Cox\'s Bazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(765, 1587, 'Tarabaniyer chora', 'Cox\'s Bazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(766, 1588, 'Romaliyer chora', 'Cox\'s Bazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(767, 1589, 'Khurushkul', 'Cox\'s Bazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(768, 1590, 'P M Khali', 'Cox\'s Bazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(769, 1591, 'Somity Para', 'Cox\'s Bazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(770, 1017, 'Kolatoli (Cox\'s Bazar)', 'Cox\'s Bazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(771, 938, 'Bhola Sadar', 'Bhola', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(772, 939, 'Borhanuddin', 'Bhola', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(773, 941, 'Daulatkhan', 'Bhola', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(774, 944, 'Tajumuddin', 'Bhola', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(775, 924, 'Bamna', 'Barguna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(776, 925, 'Barguna Sadar', 'Barguna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(777, 926, 'Betagi', 'Barguna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(778, 927, 'Patharghata (Barguna)', 'Barguna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(779, 876, 'Belkuchi', 'Sirajganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(780, 877, 'Chowhali', 'Sirajganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(781, 878, 'Kamarkhanda', 'Sirajganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(782, 879, 'Kazipur', 'Sirajganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(783, 880, 'Raiganj', 'Sirajganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(784, 881, 'Shahajadpur (Sirajganj)', 'Sirajganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(785, 882, 'Sirajganj Sadar', 'Sirajganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(786, 883, 'Tarash', 'Sirajganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(787, 884, 'Ullapara', 'Sirajganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(788, 857, 'Atgharia', 'Pabna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(789, 858, 'Bera', 'Pabna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(790, 859, 'Bhangura', 'Pabna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(791, 860, 'Chatmohar', 'Pabna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(792, 861, 'Faridpur ( Pabna )', 'Pabna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(793, 863, 'Pabna Sadar', 'Pabna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(794, 864, 'Santhia', 'Pabna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(795, 865, 'Sujanagar', 'Pabna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(796, 1616, 'Banwarinagar (Pabna)', 'Pabna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(797, 1617, 'Debottar (Pabna)', 'Pabna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(798, 1618, 'Kashinathpur (Pabna)', 'Pabna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(799, 1619, 'Nakalia (Pabna)', 'Pabna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(800, 1621, 'Sagarkandi (Pabna)', 'Pabna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(801, 855, 'Natore Sadar', 'Natore', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(802, 856, 'Singra', 'Natore', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(803, 851, 'Baghatipara', 'Natore', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(804, 852, 'Baraigram', 'Natore', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(805, 853, 'Gurudaspur', 'Natore', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(806, 854, 'Lalpur', 'Natore', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(807, 840, 'Atrai', 'Naogaon', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(808, 841, 'Badalgachi', 'Naogaon', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(809, 845, 'Naogaon Sadar', 'Naogaon', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(810, 849, 'Raninagar', 'Naogaon', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(811, 835, 'Akkelpur', 'Joypurhat', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(812, 836, 'Joypurhat Sadar', 'Joypurhat', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(813, 837, 'Kalai', 'Joypurhat', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(814, 838, 'Khetlal', 'Joypurhat', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(815, 839, 'Panchbibi', 'Joypurhat', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(816, 811, 'Assasuni', 'Satkhira', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(817, 812, 'Debhata', 'Satkhira', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(818, 813, 'Kaliganj(Satkhira)', 'Satkhira', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(819, 814, 'Kolaroa', 'Satkhira', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(820, 815, 'Satkhira Sadar', 'Satkhira', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(821, 816, 'Shyamnagar', 'Satkhira', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(822, 817, 'Tala', 'Satkhira', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(823, 805, 'Gangni', 'Meherpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(824, 806, 'Meherpur Sadar', 'Meherpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(825, 807, 'Mujibnagar', 'Meherpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(826, 734, 'Gosairhat', 'Shariatpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(827, 735, 'Zajira', 'Shariatpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(828, 736, 'Naria', 'Shariatpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(829, 737, 'Shariatpur Sadar', 'Shariatpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(830, 732, 'Bhedarganj', 'Shariatpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(831, 733, 'Damudiya', 'Shariatpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(832, 727, 'Baliakandi', 'Rajbari', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(833, 728, 'Goalunda', 'Rajbari', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(834, 729, 'Pangsha', 'Rajbari', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(835, 730, 'Rajbari Sadar', 'Rajbari', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(836, 731, 'Kalukhali', 'Rajbari', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(837, 681, 'Daulatpur(Manikganj)', 'Manikganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(838, 682, 'Ghior', 'Manikganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(839, 683, 'Harirampur (Manikganj)', 'Manikganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(840, 684, 'Manikganj Sadar', 'Manikganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(841, 685, 'Saturia', 'Manikganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(842, 686, 'Shibalaya', 'Manikganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(843, 687, 'Singair', 'Manikganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(844, 652, 'Gopalganj Sadar', 'Gopalganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(845, 653, 'Kasiani', 'Gopalganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(846, 654, 'Kotalipara', 'Gopalganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(847, 655, 'Maksudpur', 'Gopalganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(848, 656, 'Tungipara', 'Gopalganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(849, 1115, 'Baliadangi', 'Thakurgaon', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(850, 1134, 'Shibganj (Thakurgaon Sadar)', 'Thakurgaon', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(851, 1116, 'Haripur', 'Thakurgaon', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(852, 1117, 'Pirganj(Thakurgaon)', 'Thakurgaon', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(853, 1118, 'Ranishankail', 'Thakurgaon', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(854, 1119, 'Thakurgaon Sadar', 'Thakurgaon', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(855, 717, 'Atpara', 'Netrokona', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(856, 718, 'Barhatta', 'Netrokona', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(857, 719, 'Durgapur(Netrokona)', 'Netrokona', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(858, 720, 'Kalmakanda', 'Netrokona', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(859, 721, 'Kendua', 'Netrokona', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(860, 722, 'Khaliajuri', 'Netrokona', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(861, 723, 'Madan', 'Netrokona', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(862, 724, 'Mohanganj', 'Netrokona', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(863, 725, 'Netrokona Sadar', 'Netrokona', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(864, 726, 'Purbadhala (Netrokona)', 'Netrokona', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(865, 903, 'Dharmapasha', 'Sunamganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(866, 712, 'Monohardi', 'Norshingdi', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(867, 713, 'Velanogor (Narsingdi)', 'Norshingdi', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(868, 714, 'Palash', 'Norshingdi', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(869, 716, 'Shibpur', 'Norshingdi', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(870, 1505, 'Madhabdi (Narsingdi)', 'Norshingdi', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(871, 1506, 'Babur Haat (Narsingdi)', 'Norshingdi', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(872, 1507, 'Pachdona More (Narsingdi)', 'Norshingdi', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(873, 1508, 'Shaheprotab More (Narsingdi)', 'Norshingdi', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(874, 1509, 'West Brammondi (Narsingdi)', 'Norshingdi', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(875, 1510, 'East Brammondi (Narsingdi)', 'Norshingdi', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(876, 1511, 'Songita Bazar (Narsingdi)', 'Norshingdi', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(877, 1512, 'Shatirpara', 'Norshingdi', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(878, 1513, 'Hasnabad Bazar (Narsingdi)', 'Norshingdi', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(879, 1024, 'Chagalnayya', 'Feni', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(880, 1025, 'Daganbhuiyan', 'Feni', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(881, 1026, 'Feni Sadar', 'Feni', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(882, 1027, 'Parshuram', 'Feni', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(883, 1028, 'Fulgazi', 'Feni', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(884, 1029, 'Sonagazi', 'Feni', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(885, 1072, 'Khanshama', 'Dinajpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(886, 1074, 'Parbatipur', 'Dinajpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(887, 1483, 'College mor (Dinajpur)', 'Dinajpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(888, 1484, 'Boromath (Dinajpur)', 'Dinajpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(889, 1485, 'Pulhat', 'Dinajpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(890, 1486, 'Newtown (Dinajpur)', 'Dinajpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(891, 1487, 'Lilir mor', 'Dinajpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(892, 1488, 'Modern mor (Dinajpur)', 'Dinajpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(893, 1063, 'Birganj', 'Dinajpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(894, 1064, 'Birol', 'Dinajpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(895, 1065, 'Bochaganj', 'Dinajpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(896, 1066, 'Chirirbandar', 'Dinajpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(897, 1067, 'Baluadanga (Dinajpur)', 'Dinajpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(898, 1071, 'Kaharole', 'Dinajpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(899, 1075, 'Fulchari', 'Gaibandha', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(900, 1076, 'Gaibandha Sadar', 'Gaibandha', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(901, 1077, 'Gobindaganj ( Gaibandha )', 'Gaibandha', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(902, 1078, 'Palashbari', 'Gaibandha', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(903, 1079, 'Sadullapur', 'Gaibandha', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(904, 1080, 'Shaghatta', 'Gaibandha', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(905, 1081, 'Sundarganj', 'Gaibandha', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(906, 764, 'Alamdanga', 'Chuadanga', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(907, 765, 'Chuadanga Sadar', 'Chuadanga', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(908, 766, 'Damurhuda', 'Chuadanga', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(909, 767, 'Jibannagar', 'Chuadanga', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(910, 866, 'Bagha', 'Rajshahi', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(911, 867, 'Bagmara (Rajshahi)', 'Rajshahi', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(912, 868, 'Charghat', 'Rajshahi', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(913, 869, 'Durgapur(Rajshahi)', 'Rajshahi', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(914, 870, 'Godagari', 'Rajshahi', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(915, 871, 'Mohanpur (Rajshahi)', 'Rajshahi', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(916, 872, 'Paba', 'Rajshahi', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(917, 873, 'Putia', 'Rajshahi', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(918, 874, 'Tanore', 'Rajshahi', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(919, 875, 'Sadar', 'Rajshahi', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(920, 1121, 'Rajshahi Shadar', 'Rajshahi', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(921, 801, 'Magura Sadar', 'Magura', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(922, 802, 'Mohammadpur (Magura)', 'Magura', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(923, 803, 'Shalikha', 'Magura', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(924, 804, 'Sreepur (Magura)', 'Magura', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(925, 808, 'Kalia', 'Narail', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(926, 809, 'Lohagara(Narail)', 'Narail', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(927, 810, 'Narail Sadar', 'Narail', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(928, 1053, 'Barkal', 'Rangamati', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(929, 1054, 'Belaichari', 'Rangamati', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(930, 1055, 'Jurachari', 'Rangamati', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(931, 1056, 'Kaptai', 'Rangamati', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(932, 1057, 'Kawkhali (Rangamati)', 'Rangamati', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(933, 1058, 'Langadu', 'Rangamati', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(934, 1059, 'Naniarchar', 'Rangamati', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(935, 1060, 'Rajasthali', 'Rangamati', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(936, 1061, 'Rangamati Sadar', 'Rangamati', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(937, 1416, 'Kaptai Kaptai Project', 'Rangamati', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(938, 1417, 'Kaptai Nuton Bazar', 'Rangamati', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(939, 1418, 'Kaptai Sadar', 'Rangamati', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(940, 800, 'Mirpur (Kushtia)', 'Kushtia', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(941, 795, 'Bheramara', 'Kushtia', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(942, 796, 'Daulatpur (Kushtia)', 'Kushtia', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(943, 797, 'Khoksha', 'Kushtia', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(944, 798, 'Kumarkhali', 'Kushtia', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(945, 799, 'Kushtia Sadar', 'Kushtia', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(946, 830, 'Bholahat', 'Chapai Nawabganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(947, 831, 'Gomastapur', 'Chapai Nawabganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(948, 832, 'Nachole', 'Chapai Nawabganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(949, 833, 'Nawabganj Sadar', 'Chapai Nawabganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(950, 834, 'Shipganj ( Chapai )', 'Chapai Nawabganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(951, 1126, 'Chapai Nawabganj Sadar', 'Chapai Nawabganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(952, 776, 'Kotchandpur', 'Jhenaidah', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(953, 777, 'Harinakunda', 'Jhenaidah', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(954, 778, 'Jhenaidah Sadar', 'Jhenaidah', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(955, 779, 'Kaliganj(Jhenaidah)', 'Jhenaidah', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(956, 780, 'Moheshpur', 'Jhenaidah', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(957, 781, 'Shailkupa', 'Jhenaidah', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(958, 1045, 'Companiganj (Noakhali)', 'Noakhali', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(959, 1046, 'Hatiya', 'Noakhali', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(960, 1047, 'Maijdee (Noakhali)', 'Noakhali', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(961, 1048, 'Senbag', 'Noakhali', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(962, 1049, 'Sonaimuri', 'Noakhali', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(963, 1050, 'Subarnachar', 'Noakhali', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(964, 1051, 'Kabir Hat', 'Noakhali', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(965, 1043, 'Begumganj', 'Noakhali', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(966, 1044, 'Chatkhil', 'Noakhali', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(967, 1601, 'Alexandar', 'Laksmipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(968, 1038, 'Laksmipur Sadar', 'Laksmipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(969, 1039, 'Ramgati', 'Laksmipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(970, 1040, 'Ramganj', 'Laksmipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(971, 1041, 'Raipur (Lakshmipur)', 'Laksmipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(972, 1042, 'Kamalnagar', 'Laksmipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(973, 1082, 'Bhurungamari', 'Kurigram', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(974, 1083, 'Chilmary', 'Kurigram', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(975, 1084, 'Fulbari (Kurigram)', 'Kurigram', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(976, 1085, 'Kurigram Sadar', 'Kurigram', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(977, 1086, 'Nageswari', 'Kurigram', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(978, 1087, 'Rajarhat', 'Kurigram', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(979, 1088, 'Rajibpur', 'Kurigram', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(980, 1089, 'Rowmari', 'Kurigram', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(981, 1090, 'Ulipur', 'Kurigram', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(982, 676, 'Tarail', 'Kishoreganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(983, 668, 'Itna', 'Kishoreganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(984, 669, 'Karimganj', 'Kishoreganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(985, 670, 'Katiadi', 'Kishoreganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(986, 671, 'Kishoreganj Sadar', 'Kishoreganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(987, 664, 'Austogram', 'Kishoreganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(988, 665, 'Bajitpur', 'Kishoreganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(989, 673, 'Mithamain', 'Kishoreganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(990, 667, 'Hosainpur', 'Kishoreganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(991, 674, 'Nikli', 'Kishoreganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(992, 675, 'Pakundia', 'Kishoreganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(993, 828, 'Sonatola', 'Bogra', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(994, 829, 'Shajahanpur (Bogura)', 'Bogra', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(995, 818, 'Adamdighi (Bogra)', 'Bogra', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(996, 819, 'Bogra Sadar', 'Bogra', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(997, 820, 'Dhunot', 'Bogra', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(998, 821, 'Dhubchanchia', 'Bogra', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(999, 822, 'Gabtali (Bogra)', 'Bogra', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1000, 823, 'Kahaloo', 'Bogra', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1001, 824, 'Nandigram', 'Bogra', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1002, 825, 'Sariakandi', 'Bogra', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1003, 826, 'Sherpur (Bogra)', 'Bogra', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1004, 827, 'Shibganj ( Bogra )', 'Bogra', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1005, 768, 'Noapara (Jessore)', 'Jessore', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1006, 1052, 'Baghaichari', 'Rangamati', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1007, 1030, 'Dighinala', 'Khagrachari', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1008, 1031, 'Khagrachari Sadar', 'Khagrachari', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1009, 1032, 'Laksmichari', 'Khagrachari', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1010, 1033, 'Mohalchari', 'Khagrachari', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1011, 1034, 'Manikchari', 'Khagrachari', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1012, 1035, 'Matiranga', 'Khagrachari', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1013, 1036, 'Panchari', 'Khagrachari', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1014, 1037, 'Ramgor', 'Khagrachari', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1015, 689, 'Lauhajang', 'Munshiganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1016, 692, 'Sreenagar', 'Munshiganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1017, 359, 'Dohar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(1018, 446, 'Nawabgonj (Dhaka)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(1019, 1629, 'Chandura (Brahmanbaria)', 'Brahmanbaria', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1020, 1630, 'Singarbil (Brahmanbaria)', 'Brahmanbaria', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1021, 1521, 'Kawtoly (Brahmanbaria)', 'Brahmanbaria', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1022, 1631, 'Awliya Bazar (Brahmanbaria)', 'Brahmanbaria', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1023, 1522, 'T.A Road (Brahmanbaria)', 'Brahmanbaria', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1024, 1632, 'Poirtola (Brahmanbaria)', 'Brahmanbaria', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1025, 1523, 'Sarak bazar (Brahmanbaria)', 'Brahmanbaria', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1026, 1633, 'Ulchapara (Brahmanbaria)', 'Brahmanbaria', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1027, 1524, 'Moddopara (Brahmanbaria)', 'Brahmanbaria', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53');
INSERT INTO `districts` (`id`, `area_id`, `area_name`, `district`, `shippingfee`, `partialpayment`, `created_at`, `updated_at`) VALUES
(1028, 1634, 'Bhadugor (Brahmanbaria)', 'Brahmanbaria', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1029, 1525, 'Birashar (Brahmanbaria)', 'Brahmanbaria', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1030, 1635, 'Kumarshil more (Brahmanbaria)', 'Brahmanbaria', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1031, 1526, 'Medda (Brahmanbaria)', 'Brahmanbaria', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1032, 1527, 'Gatura- Pirbari (Brahmanbaria)', 'Brahmanbaria', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1033, 970, 'Akhaura', 'Brahmanbaria', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1034, 973, 'Paikpara (Brahmanbaria Sadar)', 'Brahmanbaria', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1035, 1626, 'Bijoynagor (Brahmanbaria)', 'Brahmanbaria', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1036, 1627, 'Shahbajpur (Brahmanbaria)', 'Brahmanbaria', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1037, 1628, 'Sohilpur (Brahmanbaria)', 'Brahmanbaria', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1038, 1101, 'Saidpur', 'Nilphamari', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1039, 755, 'Bagerhat Sadar', 'Bagerhat', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1040, 756, 'Chitalmari', 'Bagerhat', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1041, 757, 'Fakirhat (Bagerhat)', 'Bagerhat', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1042, 758, 'Kachua(Bagerhat)', 'Bagerhat', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1043, 759, 'Mollarhat', 'Bagerhat', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1044, 760, 'Mongla', 'Bagerhat', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1045, 761, 'Morelganj', 'Bagerhat', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1046, 762, 'Rampal', 'Bagerhat', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1047, 763, 'Sarankhola', 'Bagerhat', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1048, 1091, 'Aditmari', 'Lalmonirhat', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1049, 1092, 'Hatibandha (Lalmonirhat)', 'Lalmonirhat', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1050, 1093, 'Kaliganj(Lalmonirhat)', 'Lalmonirhat', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1051, 1094, 'Lalmonirhat Sadar', 'Lalmonirhat', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1052, 1095, 'Patgram', 'Lalmonirhat', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1053, 1489, 'Old bustand (Sunamganj)', 'Sunamganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1054, 1490, 'Kazirpoint (Sunamganj)', 'Sunamganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1055, 1491, 'Hason Nagar', 'Sunamganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1056, 1492, 'Moddho bazar (Sunamganj)', 'Sunamganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1057, 1493, 'wazkhali', 'Sunamganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1058, 900, 'Biswambharpur', 'Sunamganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1059, 902, 'Derai', 'Sunamganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1060, 905, 'Jagannathpur', 'Sunamganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1061, 906, 'Jamalganj', 'Sunamganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1062, 907, 'Sulla', 'Sunamganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1063, 908, 'Traffic Point (Sunamganj Sadar)', 'Sunamganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1064, 909, 'Taherpur', 'Sunamganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1065, 910, 'South Sunamganj', 'Sunamganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1066, 964, 'Bandarban Sadar', 'Bandarban', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1067, 967, 'Rawanchari', 'Bandarban', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1068, 968, 'Ruma', 'Bandarban', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1069, 1130, 'soho area', 'Bandarban', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1070, 969, 'Thanchi', 'Bandarban', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1071, 1598, 'SDA', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(1072, 1391, 'Fatikchhari Harualchhari', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1073, 1451, 'Raozan Fatepur', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1074, 1392, 'Fatikchhari Najirhat', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:53'),
(1075, 990, 'Fatikchari', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1076, 1452, 'Raozan Guzra Noapara', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1077, 1393, 'Fatikchhari Nanupur', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1078, 991, 'Hathazari', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1079, 1453, 'Raozan jagannath Hat', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1080, 1454, 'Raozan Kundeshwari', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1081, 1394, 'Fatikchhari Narayanhat', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1082, 1455, 'Raozan Mohamuni', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1083, 1456, 'Raozan Pouroshobha', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1084, 995, 'Rangunia', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1085, 1457, 'Rauzan Gahira', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1086, 996, 'Raojan', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1087, 1399, 'Chattogram University', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1088, 1400, 'Hathazari Fatahabad', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1089, 1401, 'Hathazari Gorduara', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1090, 1402, 'Hathazari Katirhat', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1091, 1403, 'Hathazari Madrasa', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1092, 1404, 'Hathazari Mirzapur', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1093, 1463, 'Sayad Bari', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1094, 1405, 'Hathazari Nuralibari', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1095, 1432, 'Muradnagar - Hathazari', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1096, 1406, 'Hathazari Yunus Nagar', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1097, 1381, 'Dakkhin Ghatchak', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1098, 1414, 'Kadeer Nagar', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1099, 1415, 'Kaptai Chandraghona', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1100, 1472, 'Uttar Gatchak', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1101, 1445, 'Rangunia Dhamair', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1102, 1446, 'Rangunia Sadar', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1103, 1447, 'Ranir Hat', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1104, 1448, 'Raozan B.I.T Post Office', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1105, 1389, 'Fakirkill', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1106, 1449, 'Raozan Beenajuri', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1107, 1390, 'Fatikchhari Bhandar Sharif', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1108, 1450, 'Raozan Dewanpur', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1109, 1424, 'Mirsharai Abutorab', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1110, 1425, 'Mirsharai Azampur', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1111, 1426, 'Mirsharai Bharawazhat', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1112, 1427, 'Mirsharai Darrogahat', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1113, 993, 'Mirsarai', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1114, 1428, 'Mirsharai Joarganj', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1115, 1429, 'Mirsharai Korerhat', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1116, 1430, 'Mirsharai Mohazanhat', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1117, 1364, 'Boalkhali Sakpura', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1118, 994, 'Patiya', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1119, 1365, 'Boalkhali Saroatoli', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1120, 1138, 'Karnaphuli', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1121, 1412, 'Jaldia Marine Academy', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1122, 1413, 'Jaldia Merine Accade', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1123, 1441, 'Patiya Budhpara', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1124, 1442, 'Patiya Sadar', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1125, 1356, 'Anawara Battali', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1126, 1357, 'Anawara Paroikora', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1127, 1359, 'Boalkhali Charandwip', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1128, 1360, 'Boalkhali Iqbal Park', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1129, 986, 'Anwara', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1130, 1361, 'Boalkhali Kadurkhal', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1131, 1362, 'Boalkhali Kanungopara', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1132, 1363, 'Boalkhali Sadar', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1133, 988, 'Boalkhali', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1134, 1018, 'Kutubdia', 'Cox\'s Bazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1135, 963, 'Ali Kadam', 'Bandarban', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1136, 1019, 'Moheshkhali', 'Cox\'s Bazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1137, 1020, 'Pekua', 'Cox\'s Bazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1138, 965, 'Lama', 'Bandarban', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1139, 1016, 'Chakoria', 'Cox\'s Bazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1140, 919, 'Zakiganj', 'Sylhet', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1141, 893, 'Barlekha', 'Moulvibazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1142, 899, 'Juri', 'Moulvibazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1143, 912, 'Beanibazar', 'Sylhet', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1144, 972, 'Bancharampur (Nabinagar)', 'Brahmanbaria', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1145, 974, 'Kashba (Nabinagar)', 'Brahmanbaria', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1146, 975, 'Nabinagar (Nabinagar Hub)', 'Brahmanbaria', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1147, 933, 'Gournadi (Barisal)', 'Barisal', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1148, 934, 'Hijla', 'Barisal', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1149, 936, 'Muladi', 'Barisal', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1150, 937, 'Wazirpur', 'Barisal', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1151, 928, 'Agailjhara', 'Barisal', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1152, 1073, 'Nawabganj (Dinajpur)', 'Dinajpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1153, 1062, 'Birampur', 'Dinajpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1154, 1068, 'Phulbari (Dinajpur)', 'Dinajpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1155, 1069, 'Ghoraghat', 'Dinajpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1156, 1070, 'Hakimpur', 'Dinajpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1157, 711, 'Belabo', 'Norshingdi', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1158, 715, 'Raipura (Bhairab)', 'Norshingdi', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1159, 971, 'Ashuganj (Bhairab)', 'Brahmanbaria', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1160, 976, 'Nasirnagar (Bhairab Hub)', 'Brahmanbaria', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1161, 977, 'Sarail (Bhairab Hub)', 'Brahmanbaria', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1162, 672, 'Kuliarchar', 'Kishoreganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1163, 666, 'Bhairab', 'Kishoreganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1164, 1482, 'Gouripur (Comilla)', 'Comilla', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1165, 1006, 'Daudkandi', 'Comilla', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1166, 1008, 'Homna', 'Comilla', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1167, 1010, 'Meghna', 'Comilla', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1168, 1013, 'Titas', 'Comilla', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1169, 901, 'Chattak', 'Sunamganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1170, 904, 'Dowarabazar', 'Sunamganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1171, 709, 'Rupganj', 'Narayanganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1172, 175, 'Bawaliapara (Narayangaj)', 'Narayanganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1173, 706, 'Araihazar', 'Narayanganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1174, 1478, 'Vobanipur Gazipur', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1175, 1570, 'Rajabari Sreepur', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1176, 1479, 'Barmi Sreepur (Gazipur)', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1177, 1480, 'Fulbaria Gazipur', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1178, 650, 'Kapasia', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1179, 1555, 'Porabari Bazar', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1180, 651, 'Sreepur(Gazipur)', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1181, 1556, 'Dhaladia Gazipur', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1182, 1557, 'Hotapara', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1183, 1558, 'Bager bazar', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1184, 1559, 'Member Bari Gazipur', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1185, 1560, 'Gorgoria masterbari', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1186, 1561, 'Mc Bazar', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1187, 1562, 'Nayanpur Sreepur', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1188, 1475, 'Mawna', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1189, 1567, 'Joyna Bazar', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1190, 1476, 'Rajendrapur', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1191, 1477, 'Bhawal Gazipur', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1192, 1004, 'Chowddagram', 'Comilla', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1193, 1009, 'Laksam', 'Comilla', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1194, 1012, 'Nangolkot', 'Comilla', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1195, 1014, 'Monoharganj', 'Comilla', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1196, 787, 'Koira', 'Khulna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1197, 788, 'Paikgacha', 'Khulna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1198, 1592, 'Amadee Bazar', 'Khulna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1199, 1593, 'kopilmuni Bazar', 'Khulna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1200, 888, 'Chunarughat (Shayestaganj Hub)', 'Habiganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1201, 1599, 'Shayestaganj (Shayestaganj Hub)', 'Habiganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1202, 891, 'Madhabpur (Shayestaganj Hub)', 'Habiganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1203, 1614, 'Ranigaon (Shayestaganj Hub)', 'Habiganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1204, 1615, 'Putijuri (Shayestaganj Hub)', 'Habiganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1205, 886, 'Bahubal (Shayestaganj Hub)', 'Habiganj', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1206, 746, 'Ghatail', 'Tangail', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1207, 747, 'Gopalpur (Tangail)', 'Tangail', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1208, 750, 'Modhupur', 'Tangail', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1209, 754, 'Dhanbari', 'Tangail', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1210, 694, 'Valuka', 'Mymensingh', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1211, 698, 'Goffargaon', 'Mymensingh', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1212, 705, 'Trishal', 'Mymensingh', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1213, 1022, 'Teknaf', 'Cox\'s Bazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1214, 997, 'Sandwip (Guptachara)', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1215, 1459, 'Sandwip Shiberhat', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1216, 1460, 'Sandwip Urirchar', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1217, 1610, 'Sandwip (Enam Nagar)', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1218, 1611, 'Sandwip (Complex)', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1219, 1612, 'Sandwip (Kalapaniya)', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1220, 1613, 'Sandwip (Gasua)', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1221, 842, 'Dhamoirhat', 'Naogaon', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1222, 843, 'Manda(Naogaon)', 'Naogaon', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1223, 844, 'Mahadebpur', 'Naogaon', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1224, 846, 'Niamatpur', 'Naogaon', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1225, 847, 'Patnitala', 'Naogaon', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1226, 848, 'Porsha', 'Naogaon', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1227, 850, 'Shapahar', 'Naogaon', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1228, 981, 'Hajiganj (Chandpur)', 'Chandpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1229, 982, 'Kachua(Chandpur)', 'Chandpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1230, 985, 'Shahrasti', 'Chandpur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1231, 862, 'Iswardi', 'Pabna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1232, 1620, 'Pakshi (Pabna)', 'Pabna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1233, 417, 'Konapara', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:25'),
(1234, 278, 'Demra', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1235, 1723, 'Basher pull (Demra)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1236, 1724, 'Bamuail (Demra)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1237, 1725, 'Sharuliya (Demra)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1238, 1726, 'Rani mohol (Demra)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1239, 1727, 'Staffquater (Demra)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1240, 1728, 'Demra bazar (Demra)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1241, 1729, 'Hajinogar (Demra)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1242, 1730, 'Boxnagar (Demra)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1243, 1731, 'Badsha mia road (Demra)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1244, 1732, 'Muslimnagar (Demra)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1245, 413, 'Matuail', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1246, 1305, 'Mollartek', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1247, 1150, 'Mollapara', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1248, 68, 'Sonali Bank Staff Quarter', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1249, 1306, 'Gawair', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1250, 1151, 'Azampur (East)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1251, 1307, 'Kosaibari', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1252, 70, 'Kawla', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1253, 1308, 'Prembagan', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1254, 71, 'Naddapara', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1255, 1309, 'Kachkura', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1256, 1310, 'Helal Market', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1257, 1311, 'Chamur Khan', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1258, 1312, 'Society', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1259, 1313, 'Ismailkholla', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1260, 1292, 'Uttarkhan Mazar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1261, 1314, 'Masterpara', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1262, 1159, 'Azampur (West) (Uttara)', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1263, 1293, 'Dakshinkhan Bazar', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1264, 1315, 'Munda', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1265, 1294, 'Hajipara-Dakshinkhan', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1266, 1316, 'Barua', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1267, 1296, 'Joynal Market', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1268, 1297, 'Johura Market', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1269, 1298, 'Habib Market', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1270, 1319, 'Ainusbag-Dakshinkhan', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1271, 46, 'Ainusbag', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1272, 47, 'Uttarkhan', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1273, 48, 'Dakshinkhan', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1274, 49, 'Fayedabad', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1275, 1299, 'BDR Market-House Building', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1276, 50, 'Ashkona', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1277, 1651, 'Uttara Sector - 2', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1278, 1300, 'BDR Market-Sector 6', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1279, 1652, 'Uttara Sector - 6', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1280, 1301, 'Moinartek', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1281, 1653, 'Uttara Sector - 8', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1282, 1302, 'Atipara', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1283, 1147, 'Uttara Sector-4', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1284, 1303, 'Kot Bari', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1285, 1148, 'Goaltek', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1286, 1304, 'Dewan City', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1287, 1149, 'Chalabon', 'Dhaka', '80', '200', '2021-10-31 19:02:40', '2022-12-10 04:25:26'),
(1288, 940, 'Charfession', 'Bhola', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1289, 942, 'Lalmohan', 'Bhola', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1290, 943, 'Manpura', 'Bhola', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1291, 1569, 'Chondra Gazipur', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1292, 1738, 'Goailbari bazar (Gazipur)', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1293, 1739, 'Hatimara (Gazipur)', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1294, 1740, 'Sardagonj (Gazipur)', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1295, 1741, 'Ambagh (Gazipur)', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1296, 1742, 'Fulbaria bazar (Gazipur)', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1297, 1743, 'Madhobpur (Gazipur)', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1298, 1744, 'Kabirpur (Gazipur)', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1299, 1745, 'Walton high-tech (Gazipur)', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1300, 1746, 'Walton micro-tech (Gazipur)', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1301, 1747, 'Mollapara (Gazipur)', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1302, 1748, 'Jalsukha (Gazipur)', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1303, 1749, 'Gosatra (Gazipur)', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1304, 648, 'Kaliakoir', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1305, 1563, 'Konabari', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1306, 1564, 'Mouchak Gazipur', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1307, 1734, 'Vannara (Gazipur)', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1308, 1565, 'Kashempur', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1309, 1566, 'Shafipur', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1310, 1735, 'Sardarganj (Gazipur)', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1311, 1736, 'Sultan Market (Gazipur)', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1312, 1568, 'Pollibiddut Gazipur', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1313, 1737, 'Baroipara (Gazipur)', 'Gazipur', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1314, 1602, 'Kuakata', 'Patuakhali', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1315, 1604, 'Khepupara', 'Patuakhali', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1316, 1605, 'Payra port', 'Patuakhali', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1317, 923, 'Amtali', 'Barguna', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1318, 1608, 'Mahipur', 'Patuakhali', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1319, 953, 'Kalapara', 'Patuakhali', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1320, 1750, 'Companyganj (Comilla)', 'Comilla', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1321, 1011, 'Muradnagar - Cumilla', 'Comilla', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1322, 1713, 'Tilagao - Kulaura', 'Moulvibazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1323, 1714, 'Bhatera - Kulaura', 'Moulvibazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1324, 895, 'Kulaura', 'Moulvibazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1325, 1624, 'Baramchal (Kulaura)', 'Moulvibazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1326, 1625, 'Robir Bazar (Kulaura)', 'Moulvibazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1327, 1709, 'Brahman Bazar - Kulaura', 'Moulvibazar', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1328, 989, 'Chandanaish', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1329, 992, 'Lohagara', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1330, 1461, 'Satkania Baitul Ijjat', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1331, 1462, 'Satkania Bazalia', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1332, 998, 'Satkania', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1333, 1408, 'Jaldi Banigram', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1334, 1409, 'Jaldi Gunagari', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1335, 1410, 'Jaldi Khan Bahadur', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1336, 1411, 'Jaldi Sadar', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1337, 1384, 'East Joara Barma', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1338, 1385, 'East Joara Dohazari', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1339, 1386, 'East Joara East Joara', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1340, 1387, 'East Joara Gachbaria', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1341, 1421, 'Lohagara Chunti', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1342, 1422, 'Lohagara Padua', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54'),
(1343, 987, 'Banshkhali', 'Chittagong', '150', '510', '2021-10-31 19:02:40', '2022-12-10 04:22:54');

-- --------------------------------------------------------

--
-- Table structure for table `ecom_pixels`
--

CREATE TABLE `ecom_pixels` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(55) NOT NULL,
  `white_logo` varchar(255) NOT NULL,
  `dark_logo` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `facebook_pixel_id` varchar(255) DEFAULT NULL,
  `facebook_conversion_api_token` text DEFAULT NULL,
  `facebook_conversion_api_version` varchar(255) NOT NULL DEFAULT 'v17.0',
  `facebook_server_side_tracking` tinyint(1) NOT NULL DEFAULT 0,
  `facebook_enhanced_ecommerce` tinyint(1) NOT NULL DEFAULT 0,
  `facebook_custom_events` text DEFAULT NULL,
  `copyright` varchar(155) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `name`, `white_logo`, `dark_logo`, `favicon`, `facebook_pixel_id`, `facebook_conversion_api_token`, `facebook_conversion_api_version`, `facebook_server_side_tracking`, `facebook_enhanced_ecommerce`, `facebook_custom_events`, `copyright`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Gulnoze', 'public/uploads/settings/1758525449-gulf1e.1.webp', 'public/uploads/settings/1758455894-gulf1.1pro5.webp', 'public/uploads/settings/1758455901-5481441381222418282961481415586066753733242527n.webp', NULL, NULL, 'v17.0', 0, 0, NULL, NULL, '<b>sadf</b>', 1, '2023-01-21 12:01:07', '2025-09-22 07:17:31');

-- --------------------------------------------------------

--
-- Table structure for table `google_tag_managers`
--

CREATE TABLE `google_tag_managers` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `google_tag_managers`
--

INSERT INTO `google_tag_managers` (`id`, `code`, `status`, `created_at`, `updated_at`) VALUES
(1, 'GTM-K29C9BKJ', 1, '2024-02-11 07:08:03', '2024-08-11 11:45:33');

-- --------------------------------------------------------

--
-- Table structure for table `ip_blocks`
--

CREATE TABLE `ip_blocks` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip_no` varchar(255) NOT NULL,
  `reason` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `landing_pages`
--

CREATE TABLE `landing_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `cta_text` varchar(255) DEFAULT NULL,
  `cta_link` varchar(255) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `extra_fields` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`extra_fields`)),
  `template_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `landing_pages`
--

INSERT INTO `landing_pages` (`id`, `title`, `subtitle`, `description`, `cta_text`, `cta_link`, `image_url`, `extra_fields`, `template_id`, `slug`, `status`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'Premium Dubai Chairy Zilbab Collection', NULL, 'Soft Dubai Chairy Jilbab\r\n\r\n-জিলবাব গুলো সফট দুবাই চেইরী কাপড়ের তৈরী যা গরমে আরামদায়ক।\r\n-নিজস্ব কারখানায় দক্ষ কারিগর দিয়ে তৈরি, সেলাই ফিনিশিং খুবই উন্নত।\r\n- সময় নিয়ে রেডি হওয়ার ঝামেলা এড়াতে এবং সুন্নাহ অনুযায়ী সালাত আদায় করতে এই জিলবাব গুলো হবে আপনার বেষ্ট চয়েজ।\r\n-কম সময়ে পরিপূর্ণ পর্দা মেইন্টেন করার জন্য এই জিলবাব গুলোর বিকল্প নেই।\r\n\r\nপণ্যের বিবরণ:\r\n-সফট দুবাই চেইরী জিলবাব\r\n- বডি ফ্রী সাইজ\r\n- লং মাথা থেকে সামনে ৬৩\r\n-পিছনে ৬৫', 'ORDER NOW', 'https://sunnahheaven.com/customer/checkout', NULL, NULL, 2, 'premium-dubai-chairy-zilbab-collection', 1, 0, '2025-08-30 05:14:16', '2025-08-30 05:14:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2023_01_11_113936_create_permission_tables', 1),
(8, '2023_01_21_150317_create_general_settings_table', 3),
(9, '2023_01_22_140830_create_social_media_table', 4),
(10, '2023_01_22_153053_create_contacts_table', 5),
(12, '2023_01_22_171430_create_categories_table', 6),
(17, '2023_02_09_082622_create_attributes_table', 7),
(21, '2023_02_11_065126_create_brands_table', 8),
(23, '2023_02_20_022411_create_customers_table', 9),
(24, '2023_02_21_083509_create_banners_table', 8),
(25, '2023_02_21_083647_create_banner_categories_table', 8),
(28, '2023_01_11_114621_create_products_table', 10),
(29, '2023_02_09_091624_create_productimages_table', 10),
(31, '2023_02_22_095626_create_districts_table', 11),
(48, '2023_02_22_150326_create_orders_table', 12),
(49, '2023_02_22_150339_create_order_details_table', 12),
(50, '2023_02_22_150351_create_shippings_table', 12),
(51, '2023_02_22_150400_create_payments_table', 12),
(53, '2023_02_25_022224_create_create_pages_table', 13),
(56, '2023_02_27_095310_create_reviews_table', 14),
(57, '2023_02_27_104954_create_order_types_table', 15),
(58, '2023_03_06_160934_create_campaigns_table', 16),
(59, '2023_03_13_121325_create_productprices_table', 17),
(60, '2023_04_17_125517_create_flavors_table', 18),
(61, '2023_04_17_125843_create_productflavors_table', 18),
(62, '2023_08_04_101452_create_shipping_charges_table', 19),
(64, '2023_08_04_204814_create_order_statuses_table', 20),
(65, '2023_08_06_161254_create_ecom_pixels_table', 21),
(66, '2023_06_04_121934_create_colors_table', 22),
(67, '2023_06_04_122329_create_sizes_table', 22),
(68, '2023_06_04_122459_create_productsizes_table', 22),
(69, '2023_06_04_122542_create_productcolors_table', 22),
(71, '2023_08_17_151949_create_campaign_reviews_table', 23),
(72, '2023_08_21_152844_create_ip_blocks_table', 24),
(73, '2023_09_07_171103_create_subcategories_table', 25),
(74, '2023_09_07_171404_create_childcategories_table', 25),
(76, '2024_02_06_165515_create_payment_gateways_table', 26),
(77, '2024_02_07_142550_create_sms_gateways_table', 27),
(78, '2024_02_07_161302_create_courierapis_table', 28),
(79, '2024_02_11_111947_create_google_tag_managers_table', 29),
(80, '2025_08_17_123243_add_title_to_banners_table', 30),
(81, '2025_08_17_132301_add_facebook_server_side_tracking_to_general_settings_table', 31),
(83, '2025_08_28_064237_create_templates_table', 32),
(84, '2025_08_28_052110_add_dynamic_content_to_campaigns_table', 33),
(85, '2025_08_28_073453_add_template_id_to_campaigns_table', 34),
(86, '2025_08_28_064216_create_landing_pages_table', 0),
(87, '2025_08_28_064216_create_landing_pages_table', 17),
(88, '[value-2]', 0),
(89, '2025_09_17_125021_create_skin_types_table', 35),
(90, '2025_09_17_130500_create_skin_concerns_table', 35),
(91, '2025_09_17_130840_add_skin_fields_to_products_table', 35);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 2),
(1, 'App\\Models\\User', 3),
(1, 'App\\Models\\User', 6),
(1, 'App\\Models\\User', 7),
(3, 'App\\Models\\User', 8),
(4, 'App\\Models\\User', 9);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `invoice_id` varchar(55) NOT NULL,
  `amount` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `shipping_charge` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `admin_note` text DEFAULT NULL,
  `order_status` tinyint(4) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `note` varchar(256) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `invoice_id`, `amount`, `discount`, `shipping_charge`, `customer_id`, `admin_note`, `order_status`, `user_id`, `note`, `created_at`, `updated_at`) VALUES
(176, '50509', 965, 0, 70, 121, NULL, 1, 6, NULL, '2025-08-28 00:03:01', '2025-09-15 10:43:36'),
(177, '60636', 1320, 0, 130, 122, NULL, 6, 6, NULL, '2025-08-30 05:30:26', '2025-09-15 12:40:20'),
(178, '41290', 3700, 0, 130, 123, NULL, 3, 6, NULL, '2025-09-15 10:27:31', '2025-09-15 12:34:45'),
(179, '26373', 1260, 0, 70, 124, NULL, 1, NULL, NULL, '2025-09-21 20:25:06', '2025-09-21 20:25:06'),
(180, '29544', 1260, 0, 70, 123, NULL, 1, NULL, NULL, '2025-09-22 19:31:26', '2025-09-22 19:31:26');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `purchase_price` int(11) DEFAULT NULL,
  `sale_price` int(11) NOT NULL,
  `product_discount` int(11) DEFAULT 0,
  `product_size` varchar(255) DEFAULT NULL,
  `product_color` varchar(255) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `purchase_price`, `sale_price`, `product_discount`, `product_size`, `product_color`, `qty`, `created_at`, `updated_at`) VALUES
(396, 176, 2826, '𝟮 𝗣𝗶𝗲𝗰𝗲 𝗦𝗲𝘁 𝐂𝐨-𝐨𝐫𝐝𝐬 𝐂𝐨𝐥𝐥𝐞𝐜𝐭𝐢𝐨𝐧', 895, 895, 0, NULL, NULL, 1, '2025-08-28 00:03:01', '2025-08-28 00:03:01'),
(397, 177, 2839, 'Premium Floor Touch Zilbab', 1150, 1190, 0, NULL, NULL, 1, '2025-08-30 05:30:26', '2025-08-30 05:30:26'),
(398, 178, 2843, 'Premium Floor Touch Zilbab - 015', 1150, 1190, 0, NULL, NULL, 3, '2025-09-15 10:27:31', '2025-09-15 10:27:31'),
(399, 179, 2839, 'Premium Floor Touch Zilbab - 011', 1150, 1190, 0, NULL, NULL, 1, '2025-09-21 20:25:06', '2025-09-21 20:25:06'),
(400, 180, 2839, 'Premium Floor Touch Zilbab - 011', 1150, 1190, 0, NULL, NULL, 1, '2025-09-22 19:31:26', '2025-09-22 19:31:26');

-- --------------------------------------------------------

--
-- Table structure for table `order_statuses`
--

CREATE TABLE `order_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(155) NOT NULL,
  `slug` varchar(155) NOT NULL,
  `status` varchar(55) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_statuses`
--

INSERT INTO `order_statuses` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Pending', 'pending', '1', '2023-08-15 11:28:33', '2023-08-15 11:28:33'),
(3, 'On The Way', 'on-the-way', '1', '2023-08-15 11:31:34', '2023-08-15 11:31:34'),
(4, 'On Hold', 'on-hold', '1', '2023-08-15 11:31:45', '2023-08-15 11:31:45'),
(6, 'Completed', 'completed', '1', '2023-08-15 11:32:06', '2023-08-21 05:46:06'),
(7, 'Cancelled', 'cancelled', '1', '2023-08-21 05:46:15', '2023-08-21 05:46:15'),
(8, 'Unpaid', 'unpaid', '1', '2024-07-06 17:47:36', '2024-07-06 17:47:36');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `trx_id` varchar(55) DEFAULT NULL,
  `sender_number` varchar(55) DEFAULT NULL,
  `payment_method` varchar(55) DEFAULT NULL,
  `payment_status` varchar(55) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `customer_id`, `amount`, `trx_id`, `sender_number`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(102, 102, 73, 820, NULL, NULL, 'Cash On Delivery', 'pending', '2024-09-06 15:13:41', '2024-09-06 15:13:41'),
(105, 105, 75, 520, NULL, NULL, 'Cash On Delivery', 'pending', '2024-09-08 22:25:12', '2024-09-08 22:25:12'),
(106, 106, 76, 1320, NULL, NULL, 'Cash On Delivery', 'pending', '2024-09-09 09:33:35', '2024-09-09 09:33:35'),
(107, 107, 77, 430, NULL, NULL, 'Cash On Delivery', 'pending', '2024-09-09 18:36:14', '2024-09-10 16:43:49'),
(108, 108, 77, 870, NULL, NULL, 'Cash On Delivery', 'pending', '2024-09-09 19:53:57', '2024-09-09 19:53:57'),
(114, 114, 78, 3905, NULL, NULL, 'Cash On Delivery', 'pending', '2024-09-13 14:27:41', '2024-09-13 18:20:45'),
(115, 115, 79, 1870, NULL, NULL, 'Cash On Delivery', 'pending', '2024-09-14 00:32:47', '2024-09-14 00:32:47'),
(116, 116, 80, 1720, NULL, NULL, 'Cash On Delivery', 'pending', '2024-09-15 01:59:28', '2024-09-15 01:59:28'),
(117, 117, 81, 1320, NULL, NULL, 'Cash On Delivery', 'pending', '2024-09-16 09:04:21', '2024-09-16 09:04:21'),
(118, 118, 82, 720, NULL, NULL, 'Cash On Delivery', 'pending', '2024-09-16 16:05:02', '2024-09-16 16:05:02'),
(119, 119, 83, 1320, NULL, NULL, 'Cash On Delivery', 'pending', '2024-09-16 18:36:53', '2024-09-16 18:36:53'),
(120, 120, 85, 505, NULL, NULL, 'Cash On Delivery', 'pending', '2024-09-19 07:19:47', '2024-09-19 07:19:47'),
(121, 121, 86, 1320, NULL, NULL, 'Cash On Delivery', 'pending', '2024-09-22 20:47:42', '2024-09-22 20:47:42'),
(122, 122, 87, 620, NULL, NULL, 'Cash On Delivery', 'pending', '2024-09-23 06:14:58', '2024-09-23 06:14:58'),
(123, 123, 88, 2470, NULL, NULL, 'Cash On Delivery', 'pending', '2024-09-24 16:46:55', '2024-09-24 16:46:55'),
(124, 124, 89, 1530, NULL, NULL, 'Cash On Delivery', 'pending', '2024-09-25 05:13:10', '2024-09-25 05:13:10'),
(125, 125, 90, 1070, NULL, NULL, 'Cash On Delivery', 'pending', '2024-09-28 05:33:32', '2024-09-28 05:33:32'),
(126, 126, 92, 370, NULL, NULL, 'Cash On Delivery', 'pending', '2024-09-30 08:38:04', '2024-09-30 08:38:04'),
(127, 127, 93, 670, NULL, NULL, 'Cash On Delivery', 'pending', '2024-09-30 09:25:44', '2024-09-30 09:25:44'),
(128, 128, 94, 1520, NULL, NULL, 'Cash On Delivery', 'pending', '2024-09-30 22:30:20', '2024-09-30 22:30:20'),
(129, 129, 92, 820, NULL, NULL, 'Cash On Delivery', 'pending', '2024-10-01 09:16:19', '2024-10-01 09:16:19'),
(130, 130, 96, 2320, NULL, NULL, 'Cash On Delivery', 'pending', '2024-10-01 16:31:55', '2024-10-01 16:31:55'),
(131, 131, 97, 1455, NULL, NULL, 'Cash On Delivery', 'pending', '2024-10-02 19:21:59', '2024-10-02 19:21:59'),
(132, 132, 98, 2170, NULL, NULL, 'Cash On Delivery', 'pending', '2024-10-04 13:44:36', '2024-10-04 13:44:36'),
(133, 133, 99, 370, NULL, NULL, 'Cash On Delivery', 'pending', '2024-10-05 16:18:44', '2024-10-05 16:18:44'),
(134, 134, 100, 1180, NULL, NULL, 'Cash On Delivery', 'pending', '2024-10-08 15:37:22', '2024-10-08 15:37:22'),
(135, 135, 101, 1230, NULL, NULL, 'Cash On Delivery', 'pending', '2024-10-09 20:59:54', '2024-10-09 20:59:54'),
(136, 136, 102, 820, NULL, NULL, 'bkash', 'pending', '2024-10-10 03:05:38', '2024-10-10 03:05:38'),
(138, 138, 105, 1470, NULL, NULL, 'Cash On Delivery', 'pending', '2024-10-11 17:29:40', '2024-10-11 17:29:40'),
(176, 176, 121, 965, NULL, NULL, NULL, 'pending', '2025-08-28 00:03:01', '2025-08-28 00:03:01'),
(177, 177, 122, 1260, NULL, NULL, 'Cash On Delivery', 'pending', '2025-08-30 05:30:26', '2025-08-30 05:30:26'),
(178, 178, 123, 3640, NULL, NULL, 'Cash On Delivery', 'pending', '2025-09-15 10:27:31', '2025-09-15 10:27:31'),
(179, 179, 124, 1260, NULL, NULL, 'Cash On Delivery', 'pending', '2025-09-21 20:25:06', '2025-09-21 20:25:06'),
(180, 180, 123, 1260, NULL, NULL, 'Cash On Delivery', 'pending', '2025-09-22 19:31:26', '2025-09-22 19:31:26');

-- --------------------------------------------------------

--
-- Table structure for table `payment_gateways`
--

CREATE TABLE `payment_gateways` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(55) DEFAULT NULL,
  `app_key` varchar(155) DEFAULT NULL,
  `app_secret` varchar(155) DEFAULT NULL,
  `username` varchar(55) DEFAULT NULL,
  `password` varchar(55) DEFAULT NULL,
  `base_url` varchar(99) DEFAULT NULL,
  `success_url` varchar(155) DEFAULT NULL,
  `return_url` varchar(155) DEFAULT NULL,
  `prefix` varchar(25) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_gateways`
--

INSERT INTO `payment_gateways` (`id`, `type`, `app_key`, `app_secret`, `username`, `password`, `base_url`, `success_url`, `return_url`, `prefix`, `status`, `created_at`, `updated_at`) VALUES
(1, 'bkash', '4f6o0cjiki2rfm34kfdadl1eqq', '2is7hdktrekvrbljjh44ll3d9l1dtjo4pasmjvs5vl5qr3fug4b', 'sandboxTokenizedUser02', 'sandboxTokenizedUser02@12345', 'https://tokenized.sandbox.bka.sh/v1.2.0-beta', NULL, NULL, NULL, 0, '2024-02-06 11:29:46', '2024-10-12 09:02:16'),
(2, 'shurjopay', '', '', 'sp_sandbox', 'pyyk97hu&6u6', 'https://sandbox.shurjopayment.com', 'https://ecom.websolutionit.com/payment-success', 'https://ecom1.joss.com.bd/', 'NOK', 0, '2024-02-06 11:29:46', '2024-08-10 10:45:27');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2023-01-11 06:31:32', '2023-01-11 06:31:32'),
(2, 'role-create', 'web', '2023-01-11 06:31:33', '2023-01-11 06:31:33'),
(3, 'role-edit', 'web', '2023-01-11 06:31:34', '2023-01-11 06:31:34'),
(4, 'role-delete', 'web', '2023-01-11 06:31:34', '2023-01-11 06:31:34'),
(5, 'product-list', 'web', '2023-01-11 06:31:34', '2023-01-11 06:31:34'),
(6, 'product-create', 'web', '2023-01-11 06:31:35', '2023-01-11 06:31:35'),
(7, 'product-edit', 'web', '2023-01-11 06:31:35', '2023-01-11 06:31:35'),
(8, 'product-delete', 'web', '2023-01-11 06:31:35', '2023-01-11 06:31:35'),
(9, 'permission-list', 'web', NULL, NULL),
(10, 'permission-create', 'web', NULL, NULL),
(11, 'setting-delete', 'web', '2023-01-21 10:50:15', '2023-01-21 10:50:15'),
(12, 'setting-edit', 'web', '2023-01-21 10:50:35', '2023-01-21 10:50:35'),
(13, 'setting-create', 'web', '2023-01-21 10:50:50', '2023-01-21 10:50:50'),
(14, 'setting-list', 'web', '2023-01-21 10:51:01', '2023-01-21 10:51:01'),
(15, 'social-list', 'web', '2023-01-22 08:33:54', '2023-01-22 08:33:54'),
(16, 'social-create', 'web', '2023-01-22 08:34:07', '2023-01-22 08:34:07'),
(17, 'social-edit', 'web', '2023-01-22 08:34:17', '2023-01-22 08:34:17'),
(18, 'social-delete', 'web', '2023-01-22 08:34:25', '2023-01-22 08:34:25'),
(19, 'contact-list', 'web', '2023-01-22 10:25:01', '2023-01-22 10:25:01'),
(20, 'contact-create', 'web', '2023-01-22 10:25:16', '2023-01-22 10:28:19'),
(21, 'permission-edit', 'web', '2023-01-22 10:26:28', '2023-01-22 10:26:28'),
(22, 'permission-delete', 'web', '2023-01-22 10:26:39', '2023-01-22 10:26:39'),
(23, 'contact-edit', 'web', '2023-01-22 10:28:34', '2023-01-22 10:28:34'),
(24, 'contact-delete', 'web', '2023-01-22 10:28:45', '2023-01-22 10:28:45'),
(25, 'category-list', 'web', '2023-02-08 10:26:58', '2023-02-08 10:26:58'),
(26, 'category-create', 'web', '2023-02-08 10:27:19', '2023-02-08 10:27:19'),
(27, 'category-edit', 'web', '2023-02-08 10:27:28', '2023-02-08 10:27:28'),
(28, 'category-delete', 'web', '2023-02-08 10:27:38', '2023-02-08 10:27:38'),
(29, 'attribute-list', 'web', '2023-02-09 02:54:47', '2023-02-09 02:54:47'),
(30, 'attribute-create', 'web', '2023-02-09 02:55:02', '2023-02-09 02:55:02'),
(31, 'attribute-edit', 'web', '2023-02-09 02:55:14', '2023-02-09 02:55:14'),
(32, 'attribute-delete', 'web', '2023-02-09 02:55:23', '2023-02-09 02:55:23'),
(33, 'banner-category-list', 'web', '2023-02-21 03:00:08', '2023-02-21 03:00:08'),
(34, 'banner-category-create', 'web', '2023-02-21 03:00:34', '2023-02-21 03:00:34'),
(35, 'banner-category-edit', 'web', '2023-02-21 03:00:45', '2023-02-21 03:00:45'),
(36, 'banner-category-delete', 'web', '2023-02-21 03:00:53', '2023-02-21 03:00:53'),
(37, 'banner-list', 'web', '2023-02-21 03:51:27', '2023-02-21 03:51:27'),
(38, 'banner-create', 'web', '2023-02-21 03:51:50', '2023-02-21 03:51:50'),
(39, 'banner-edit', 'web', '2023-02-21 03:52:18', '2023-02-21 03:52:18'),
(40, 'banner-delete', 'web', '2023-02-21 03:52:32', '2023-02-21 03:52:32'),
(41, 'page-list', 'web', '2023-02-24 20:42:52', '2023-02-24 20:42:52'),
(42, 'page-create', 'web', '2023-02-24 20:43:01', '2023-02-24 20:43:01'),
(43, 'page-edit', 'web', '2023-02-24 20:43:08', '2023-02-24 20:43:08'),
(44, 'page-delete', 'web', '2023-02-24 20:43:15', '2023-02-24 20:43:15'),
(49, 'shipping-list', 'web', '2023-08-04 08:46:28', '2023-08-04 08:46:28'),
(50, 'shipping-create', 'web', '2023-08-04 08:47:09', '2023-08-04 08:47:09'),
(51, 'shipping-edit', 'web', '2023-08-04 08:47:23', '2023-08-04 08:47:23'),
(52, 'shipping-delete', 'web', '2023-08-04 08:47:34', '2023-08-04 08:47:34'),
(53, 'color-list', 'web', '2023-08-15 07:48:52', '2023-08-15 07:48:52'),
(54, 'color-create', 'web', '2023-08-15 07:49:01', '2023-08-15 07:49:01'),
(55, 'color-edit', 'web', '2023-08-15 07:49:12', '2023-08-15 07:49:12'),
(56, 'color-delete', 'web', '2023-08-15 07:49:20', '2023-08-15 07:49:20'),
(69, 'subcategory-list', 'web', '2024-01-31 10:49:48', '2024-01-31 10:49:48'),
(70, 'subcategory-create', 'web', '2024-01-31 10:49:56', '2024-01-31 10:49:56'),
(71, 'subcategory-edit', 'web', '2024-01-31 10:50:04', '2024-01-31 10:50:04'),
(72, 'subcategory-delete', 'web', '2024-01-31 10:50:13', '2024-01-31 10:50:13'),
(73, 'childcategory-list', 'web', '2024-01-31 10:51:33', '2024-01-31 10:51:33'),
(74, 'childcategory-create', 'web', '2024-01-31 10:51:41', '2024-01-31 10:51:41'),
(75, 'childcategory-edit', 'web', '2024-01-31 10:51:50', '2024-01-31 10:51:50'),
(76, 'childcategory-delete', 'web', '2024-01-31 10:52:00', '2024-01-31 10:52:00'),
(77, 'skintype-list', 'web', '2025-09-17 09:03:33', '2025-09-17 09:03:33'),
(78, 'skintype-create', 'web', '2025-09-17 09:04:18', '2025-09-17 09:04:18'),
(79, 'skintype-edit', 'web', '2025-09-17 09:04:29', '2025-09-17 09:04:29'),
(80, 'skintype-delete', 'web', '2025-09-17 09:15:26', '2025-09-17 09:15:26'),
(81, 'skinconcern-create', 'web', '2025-09-18 10:44:10', '2025-09-18 10:44:10'),
(82, 'skinconcern-edit', 'web', '2025-09-18 10:44:18', '2025-09-18 10:44:18'),
(83, 'skinconcern-list', 'web', '2025-09-18 10:44:41', '2025-09-18 10:44:41'),
(84, 'skinconcern-delete', 'web', '2025-09-18 10:44:58', '2025-09-18 10:44:58');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productcolors`
--

CREATE TABLE `productcolors` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productcolors`
--

INSERT INTO `productcolors` (`id`, `product_id`, `color_id`, `created_at`, `updated_at`) VALUES
(1, 1, 35, '2024-02-05 09:40:29', '2024-02-05 09:40:29'),
(2, 1, 62, '2024-02-05 09:40:29', '2024-02-05 09:40:29'),
(3, 35, 44, '2024-02-05 09:54:29', '2024-02-05 09:54:29'),
(4, 28, 62, '2024-02-05 14:06:19', '2024-02-05 14:06:19'),
(5, 2, 65, '2024-02-05 14:07:27', '2024-02-05 14:07:27'),
(6, 131, 32, '2024-03-13 00:28:08', '2024-03-13 00:28:08'),
(7, 131, 36, '2024-03-13 00:28:08', '2024-03-13 00:28:08'),
(8, 131, 39, '2024-03-13 00:28:08', '2024-03-13 00:28:08'),
(9, 131, 40, '2024-03-13 00:28:08', '2024-03-13 00:28:08'),
(10, 117, 32, '2024-07-03 01:33:09', '2024-07-03 01:33:09'),
(11, 117, 35, '2024-07-03 01:33:09', '2024-07-03 01:33:09'),
(12, 117, 39, '2024-07-03 01:33:09', '2024-07-03 01:33:09'),
(13, 1, 36, '2024-07-06 15:29:32', '2024-07-06 15:29:32'),
(14, 132, 32, '2024-07-06 17:39:48', '2024-07-06 17:39:48'),
(15, 132, 36, '2024-07-06 17:39:48', '2024-07-06 17:39:48'),
(16, 133, 62, '2024-08-10 10:42:14', '2024-08-10 10:42:14'),
(21, 149, 32, '2024-08-13 08:09:13', '2024-08-13 08:09:13'),
(22, 149, 35, '2024-08-13 08:09:13', '2024-08-13 08:09:13'),
(23, 150, 74, '2024-08-18 17:19:04', '2024-08-18 17:19:04'),
(24, 151, 35, '2024-08-18 23:16:30', '2024-08-18 23:16:30'),
(25, 151, 36, '2024-08-18 23:16:30', '2024-08-18 23:16:30'),
(26, 152, 32, '2024-08-19 17:10:02', '2024-08-19 17:10:02'),
(27, 152, 36, '2024-08-19 17:10:02', '2024-08-19 17:10:02'),
(28, 2812, 35, '2024-09-12 03:38:00', '2024-09-12 03:38:00'),
(29, 2812, 39, '2024-09-12 03:38:00', '2024-09-12 03:38:00'),
(32, 2816, 32, '2024-10-12 04:21:16', '2024-10-12 04:21:16'),
(33, 2816, 35, '2024-10-12 04:21:16', '2024-10-12 04:21:16'),
(34, 2816, 36, '2024-10-12 04:21:16', '2024-10-12 04:21:16'),
(35, 2823, 32, '2024-10-12 12:18:53', '2024-10-12 12:18:53'),
(36, 2823, 35, '2024-10-12 12:18:53', '2024-10-12 12:18:53'),
(37, 2823, 40, '2024-10-12 12:18:53', '2024-10-12 12:18:53'),
(38, 2837, 32, '2025-08-29 23:08:49', '2025-08-29 23:08:49'),
(39, 2838, 40, '2025-08-29 23:53:07', '2025-08-29 23:53:07');

-- --------------------------------------------------------

--
-- Table structure for table `productimages`
--

CREATE TABLE `productimages` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` text DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productimages`
--

INSERT INTO `productimages` (`id`, `image`, `title`, `product_id`, `created_at`, `updated_at`) VALUES
(3025, 'public/uploads/product/1728720165-0main.jpg', '1', 2820, '2024-10-12 08:02:45', '2024-10-12 08:02:45'),
(3026, 'public/uploads/product/1728720165-0screenshot.png', '3', 2820, '2024-10-12 08:02:45', '2024-10-12 08:02:45'),
(3027, 'public/uploads/product/1728720176-photo_edit.jpg', 'Red', 2821, '2024-10-12 08:02:56', '2024-10-12 08:02:56'),
(3028, 'public/uploads/product/1728720176-video_edit.jpg', 'hhh', 2821, '2024-10-12 08:02:56', '2024-10-12 08:02:56'),
(3029, 'public/uploads/product/1728723322-1.jpg', 'Olive Moon', 2822, '2024-10-12 08:55:22', '2024-10-12 08:55:22'),
(3030, 'public/uploads/product/1728723322-3.jpg', 'Black Leaf', 2822, '2024-10-12 08:55:22', '2024-10-12 08:55:22'),
(3031, 'public/uploads/product/1728735533-0main.jpg', '1', 2823, '2024-10-12 12:18:53', '2024-10-12 12:18:53'),
(3032, 'public/uploads/product/1728735533-0screenshot.png', '2', 2823, '2024-10-12 12:18:53', '2024-10-12 12:18:53'),
(3033, 'public/uploads/product/1728735666-0screenshot.png', '1', 2824, '2024-10-12 12:21:06', '2024-10-12 12:21:06'),
(3034, 'public/uploads/product/1728735666-0demo1.jpg', '2', 2824, '2024-10-12 12:21:06', '2024-10-12 12:21:06'),
(3035, 'public/uploads/product/1728747041-1728720176-photo_edit.jpg', '', 2824, '2024-10-12 15:30:41', '2024-10-12 15:30:41'),
(3036, 'public/uploads/product/1728747393-video_edit.jpg', '2', 2823, '2024-10-12 15:36:33', '2024-10-12 15:36:33'),
(3037, 'public/uploads/product/1728747483-fix-any-wordpress-error-and-frontend-backend-and-any-issues.jpg', 'hhh', 2821, '2024-10-12 15:38:03', '2024-10-12 15:38:03'),
(3038, 'public/uploads/product/1728830249-0main.jpg', 'Sahon Srabon', 2825, '2024-10-13 14:37:29', '2024-10-13 14:37:29'),
(3039, 'public/uploads/product/1728830249-6fyvubvbyflimtk2omhnmjznia8myogbqmts0ioa.jpg', 'WhatsApp', 2825, '2024-10-13 14:37:29', '2024-10-13 14:37:29'),
(3040, 'public/uploads/product/1728831172-whatsapp-image-2024-10-02-at-1.50.04-am.jpeg', 'Print Pink', 2826, '2024-10-13 14:52:52', '2024-10-13 14:52:52'),
(3041, 'public/uploads/product/1728831172-whatsapp-image-2024-10-02-at-1.50.04-am-(2).jpeg', 'Blue Eyes', 2826, '2024-10-13 14:52:52', '2024-10-13 14:52:52'),
(3042, 'public/uploads/product/1728831172-whatsapp-image-2024-10-02-at-1.50.08-am.jpeg', 'Print Cashmere', 2826, '2024-10-13 14:52:52', '2024-10-13 14:52:52'),
(3043, 'public/uploads/product/1728842376-img_3863.jpg', 'Red', 2827, '2024-10-13 17:59:36', '2024-10-13 17:59:36'),
(3044, 'public/uploads/product/1728842376-img_3864.jpg', 'Olive', 2827, '2024-10-13 17:59:36', '2024-10-13 17:59:36'),
(3045, 'public/uploads/product/1728842376-img_3862.jpg', 'Gray', 2827, '2024-10-13 17:59:36', '2024-10-13 17:59:36'),
(3046, 'public/uploads/product/1728842376-img_3861.jpg', 'Brown', 2827, '2024-10-13 17:59:36', '2024-10-13 17:59:36'),
(3047, 'public/uploads/product/1728842376-img_3860.jpg', 'Purple', 2827, '2024-10-13 17:59:36', '2024-10-13 17:59:36'),
(3048, 'public/uploads/product/1728842458-img_3863.jpg', 'Red', 2828, '2024-10-13 18:00:58', '2024-10-13 18:00:58'),
(3049, 'public/uploads/product/1728842458-img_3864.jpg', 'Olive', 2828, '2024-10-13 18:00:58', '2024-10-13 18:00:58'),
(3050, 'public/uploads/product/1728842458-img_3862.jpg', 'Gray', 2828, '2024-10-13 18:00:58', '2024-10-13 18:00:58'),
(3051, 'public/uploads/product/1728842458-img_3861.jpg', 'Brown', 2828, '2024-10-13 18:00:58', '2024-10-13 18:00:58'),
(3052, 'public/uploads/product/1728842458-img_3860.jpg', 'Purple', 2828, '2024-10-13 18:00:58', '2024-10-13 18:00:58'),
(3053, 'public/uploads/product/1728842688-img_3863.jpg', 'Red', 2829, '2024-10-13 18:04:48', '2024-10-13 18:04:48'),
(3054, 'public/uploads/product/1728842688-img_3861.jpg', 'Brown', 2829, '2024-10-13 18:04:48', '2024-10-13 18:04:48'),
(3055, 'public/uploads/product/1728842688-img_3860.jpg', 'Moon', 2829, '2024-10-13 18:04:48', '2024-10-13 18:04:48'),
(3056, 'public/uploads/product/1728842717-1728842376-img_3861.jpg', '1', 2830, '2024-10-13 18:05:17', '2024-10-13 18:05:17'),
(3057, 'public/uploads/product/1728842717-1728842376-img_3863.jpg', '3', 2830, '2024-10-13 18:05:17', '2024-10-13 18:05:17'),
(3058, 'public/uploads/product/1728842717-1728842376-img_3864.jpg', '2', 2830, '2024-10-13 18:05:17', '2024-10-13 18:05:17'),
(3059, 'public/uploads/product/1728939618-photo-1.jpg', 'Red', 2831, '2024-10-14 21:00:18', '2024-10-14 21:00:18'),
(3060, 'public/uploads/product/1728939618-photo-2.jpg', 'Olive Moon', 2831, '2024-10-14 21:00:18', '2024-10-14 21:00:18'),
(3061, 'public/uploads/product/1728941161-0main.jpg', 'Sahon Srabon', 2832, '2024-10-14 21:26:01', '2024-10-14 21:26:01'),
(3062, 'public/uploads/product/1728941161-6fyvubvbyflimtk2omhnmjznia8myogbqmts0ioa.jpg', 'Rakib', 2832, '2024-10-14 21:26:01', '2024-10-14 21:26:01'),
(3063, 'public/uploads/product/1728942571-0main.jpg', '1', 2833, '2024-10-14 21:49:31', '2024-10-14 21:49:31'),
(3064, 'public/uploads/product/1728942571-0demo1.jpg', 'Sahon', 2833, '2024-10-14 21:49:31', '2024-10-14 21:49:31'),
(3065, 'public/uploads/product/1728942571-0main.jpg', 'Sahon Srabon', 2833, '2024-10-14 21:49:31', '2024-10-14 21:49:31'),
(3066, 'public/uploads/product/1728942740-whit-print.jpg', '1', 2833, '2024-10-14 21:52:20', '2024-10-14 21:52:20'),
(3067, 'public/uploads/product/1728942740-sky-sea-print.jpg', 'Sahon Srabon', 2833, '2024-10-14 21:52:20', '2024-10-14 21:52:20'),
(3068, 'public/uploads/product/1728942740-black-print.jpg', 'বাংলাদেশে', 2833, '2024-10-14 21:52:21', '2024-10-14 21:52:21'),
(3069, 'public/uploads/product/1728943085-br2.jpg', 'Sky Print', 2834, '2024-10-14 21:58:05', '2024-10-14 21:58:05'),
(3070, 'public/uploads/product/1728943085-black-bm.jpg', 'blu print', 2834, '2024-10-14 21:58:05', '2024-10-14 21:58:05'),
(3071, 'public/uploads/product/1728943524-00.jpg', '1', 2835, '2024-10-14 22:05:24', '2024-10-14 22:05:24'),
(3072, 'public/uploads/product/1728943524-02.jpg', '3', 2835, '2024-10-14 22:05:24', '2024-10-14 22:05:24'),
(3073, 'public/uploads/product/1728943524-01.jpg', '2', 2835, '2024-10-14 22:05:24', '2024-10-14 22:05:24'),
(3074, 'public/uploads/product/1728982380-compressed_black-print.jpg', 'Alex  Black', 2836, '2024-10-15 08:53:00', '2024-10-15 08:53:00'),
(3075, 'public/uploads/product/1728982380-whatsapp-image-2024-10-15-at-2.44.07-pm.jpeg', 'Alex Gray', 2836, '2024-10-15 08:53:00', '2024-10-15 08:53:00'),
(3076, 'public/uploads/product/1728982380-whatsapp-image-2024-10-15-at-2.44.07-pm-(1).jpeg', 'Alex Rose', 2836, '2024-10-15 08:53:00', '2024-10-15 08:53:00'),
(3077, 'public/uploads/product/1728982380-whatsapp-image-2024-10-15-at-2.44.06-pm.jpeg', 'Alex Sea Sky', 2836, '2024-10-15 08:53:00', '2024-10-15 08:53:00'),
(3078, 'public/uploads/product/1728982380-whatsapp-image-2024-10-15-at-2.44.05-pm.jpeg', 'Alex White', 2836, '2024-10-15 08:53:00', '2024-10-15 08:53:00'),
(3079, 'public/uploads/product/1756508929-0demo1.jpg', 'Hlw', 2837, '2025-08-29 23:08:49', '2025-08-29 23:08:49'),
(3080, 'public/uploads/product/1756508929-0screenshot.png', 'Hlw', 2837, '2025-08-29 23:08:49', '2025-08-29 23:08:49'),
(3081, 'uploads/product/1756511550-0demo1.jpg', 'Hlw', 2837, '2025-08-29 23:52:30', '2025-08-29 23:52:30'),
(3082, 'public/uploads/product/1756511587-0demo1.jpg', 'Hlw', 2838, '2025-08-29 23:53:07', '2025-08-29 23:53:07'),
(3083, 'public/uploads/product/1756529195-photo-edit.jpg', '', 2839, '2025-08-30 04:46:35', '2025-08-30 04:46:35'),
(3084, 'uploads/product/1756529619-flore-touch-abaya-zilbab-code--011.jpg', '', 2839, '2025-08-30 04:53:39', '2025-08-30 04:53:39'),
(3085, 'uploads/product/1756529619-flore-touch-abaya-zilbab-code--011-(2).jpg', '', 2839, '2025-08-30 04:53:39', '2025-08-30 04:53:39'),
(3086, 'uploads/product/1756529619-flore-touch-abaya-zilbab-code--011-(3).jpg', '', 2839, '2025-08-30 04:53:39', '2025-08-30 04:53:39'),
(3087, 'uploads/product/1756529619-flore-touch-abaya-zilbab-code--011-(4).jpg', '', 2839, '2025-08-30 04:53:39', '2025-08-30 04:53:39'),
(3088, 'public/uploads/product/1756529842-flore-touch-abaya-zilbab-code--012.jpg', '', 2840, '2025-08-30 04:57:22', '2025-08-30 04:57:22'),
(3089, 'public/uploads/product/1756529842-flore-touch-abaya-zilbab-code--012-(2).jpg', '', 2840, '2025-08-30 04:57:22', '2025-08-30 04:57:22'),
(3090, 'public/uploads/product/1756529842-flore-touch-abaya-zilbab-code--012-(3).jpg', '', 2840, '2025-08-30 04:57:22', '2025-08-30 04:57:22'),
(3091, 'public/uploads/product/1756529842-flore-touch-abaya-zilbab-code--012-(4).jpg', '', 2840, '2025-08-30 04:57:22', '2025-08-30 04:57:22'),
(3092, 'public/uploads/product/1756529842-flore-touch-abaya-zilbab-code--012-(5).jpg', '', 2840, '2025-08-30 04:57:22', '2025-08-30 04:57:22'),
(3093, 'public/uploads/product/1756530009-flore-touch-abaya-zilbab-code--013.jpg', '', 2841, '2025-08-30 05:00:09', '2025-08-30 05:00:09'),
(3094, 'public/uploads/product/1756530009-flore-touch-abaya-zilbab-code--013-(2).jpg', '', 2841, '2025-08-30 05:00:09', '2025-08-30 05:00:09'),
(3095, 'public/uploads/product/1756530009-flore-touch-abaya-zilbab-code--013-(3).jpg', '', 2841, '2025-08-30 05:00:09', '2025-08-30 05:00:09'),
(3096, 'public/uploads/product/1756530009-flore-touch-abaya-zilbab-code--013-(4).jpg', '', 2841, '2025-08-30 05:00:09', '2025-08-30 05:00:09'),
(3097, 'public/uploads/product/1756530009-flore-touch-abaya-zilbab-code--013-(5).jpg', '', 2841, '2025-08-30 05:00:09', '2025-08-30 05:00:09'),
(3098, 'public/uploads/product/1756530162-flore-touch-abaya-zilbab-code--014.jpg', '', 2842, '2025-08-30 05:02:42', '2025-08-30 05:02:42'),
(3099, 'public/uploads/product/1756530162-flore-touch-abaya-zilbab-code--014-(2).jpg', '', 2842, '2025-08-30 05:02:42', '2025-08-30 05:02:42'),
(3100, 'public/uploads/product/1756530162-flore-touch-abaya-zilbab-code--014-(3).jpg', '', 2842, '2025-08-30 05:02:42', '2025-08-30 05:02:42'),
(3101, 'public/uploads/product/1756530162-flore-touch-abaya-zilbab-code--014-(4).jpg', '', 2842, '2025-08-30 05:02:42', '2025-08-30 05:02:42'),
(3102, 'public/uploads/product/1756530308-flore-touch-abaya-zilbab-code--015.jpg', '', 2843, '2025-08-30 05:05:08', '2025-08-30 05:05:08'),
(3103, 'public/uploads/product/1756530308-flore-touch-abaya-zilbab-code--015-(2).jpg', '', 2843, '2025-08-30 05:05:08', '2025-08-30 05:05:08'),
(3104, 'public/uploads/product/1756530308-flore-touch-abaya-zilbab-code--015-(3).jpg', '', 2843, '2025-08-30 05:05:08', '2025-08-30 05:05:08'),
(3105, 'public/uploads/product/1758197661-d57225583f85537965943ae100f44645.jpg', '', 2844, '2025-09-18 12:14:21', '2025-09-18 12:14:21'),
(3106, 'public/uploads/product/1758197869-d57225583f85537965943ae100f44645.jpg', '', 2845, '2025-09-18 12:17:49', '2025-09-18 12:17:49'),
(3107, 'public/uploads/product/1758198536-2024-06-01-665af873e3003.png', '', 2846, '2025-09-18 12:28:56', '2025-09-18 12:28:56');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `childcategory_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `product_code` varchar(155) DEFAULT NULL,
  `purchase_price` int(11) DEFAULT 0,
  `old_price` int(11) DEFAULT NULL,
  `new_price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `pro_unit` varchar(191) DEFAULT NULL,
  `pro_video` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `topsale` tinyint(4) DEFAULT NULL,
  `feature_product` tinyint(4) DEFAULT NULL,
  `campaign_id` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `skin_concern` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`skin_concern`)),
  `skin_type` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`skin_type`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `category_id`, `subcategory_id`, `childcategory_id`, `brand_id`, `product_code`, `purchase_price`, `old_price`, `new_price`, `stock`, `pro_unit`, `pro_video`, `description`, `meta_description`, `topsale`, `feature_product`, `campaign_id`, `status`, `skin_concern`, `skin_type`, `created_at`, `updated_at`) VALUES
(2839, 'Premium Floor Touch Zilbab - 011', 'premium-floor-touch-zilbab---011-2843', 16, 120, 0, NULL, 'P0001', 1150, 2500, 1190, 50, NULL, NULL, '<p class=\"desc-data\" style=\"color: rgb(41, 43, 58); font-family: &quot;Noto Sans Bengali&quot;, Montserrat, sans-serif; letter-spacing: 0.3px; font-size: 15px !important;\">Soft Dubai Chairy Jilbab</p><p class=\"desc-data\" style=\"color: rgb(41, 43, 58); font-family: &quot;Noto Sans Bengali&quot;, Montserrat, sans-serif; letter-spacing: 0.3px; font-size: 15px !important;\">-জিলবাব গুলো সফট দুবাই চেইরী কাপড়ের তৈরী যা গরমে আরামদায়ক।<br>-নিজস্ব কারখানায় দক্ষ কারিগর দিয়ে তৈরি, সেলাই ফিনিশিং খুবই উন্নত।<br>- সময় নিয়ে রেডি হওয়ার ঝামেলা এড়াতে এবং সুন্নাহ অনুযায়ী সালাত আদায় করতে এই জিলবাব গুলো হবে আপনার বেষ্ট চয়েজ।<br>-কম সময়ে পরিপূর্ণ পর্দা মেইন্টেন করার জন্য এই জিলবাব গুলোর বিকল্প নেই।<br><br>পণ্যের বিবরণ:<br>-সফট&nbsp;<span style=\"letter-spacing: 0.3px;\">দুবাই চেইরী</span>&nbsp;জিলবাব<br>- বডি ফ্রী সাইজ<br>- লং মাথা থেকে সামনে&nbsp;৬৩<br>-পিছনে&nbsp;৬৫</p>', NULL, 1, 0, NULL, 1, NULL, NULL, '2025-08-30 04:46:35', '2025-08-30 05:06:42'),
(2840, 'Premium Floor Touch Zilbab - 012', 'premium-floor-touch-zilbab---012-2840', 16, 120, 0, NULL, 'P2840', 1150, 2500, 1190, 50, NULL, NULL, '<p class=\"desc-data\" style=\"color: rgb(41, 43, 58); font-family: &quot;Noto Sans Bengali&quot;, Montserrat, sans-serif; letter-spacing: 0.3px; font-size: 15px !important;\">Soft Dubai Chairy Jilbab</p><p class=\"desc-data\" style=\"color: rgb(41, 43, 58); font-family: &quot;Noto Sans Bengali&quot;, Montserrat, sans-serif; letter-spacing: 0.3px; font-size: 15px !important;\">-জিলবাব গুলো সফট দুবাই চেইরী কাপড়ের তৈরী যা গরমে আরামদায়ক।<br>-নিজস্ব কারখানায় দক্ষ কারিগর দিয়ে তৈরি, সেলাই ফিনিশিং খুবই উন্নত।<br>- সময় নিয়ে রেডি হওয়ার ঝামেলা এড়াতে এবং সুন্নাহ অনুযায়ী সালাত আদায় করতে এই জিলবাব গুলো হবে আপনার বেষ্ট চয়েজ।<br>-কম সময়ে পরিপূর্ণ পর্দা মেইন্টেন করার জন্য এই জিলবাব গুলোর বিকল্প নেই।<br><br>পণ্যের বিবরণ:<br>-সফট&nbsp;<span style=\"letter-spacing: 0.3px;\">দুবাই চেইরী</span>&nbsp;জিলবাব<br>- বডি ফ্রী সাইজ<br>- লং মাথা থেকে সামনে&nbsp;৬৩<br>-পিছনে&nbsp;৬৫</p>', NULL, 1, 0, NULL, 1, NULL, NULL, '2025-08-30 04:57:22', '2025-08-30 04:57:22'),
(2841, 'Premium Floor Touch Zilbab - 013', 'premium-floor-touch-zilbab---013-2841', 16, 120, 0, NULL, 'P2841', 1150, 2500, 1190, 50, NULL, NULL, '<p class=\"desc-data\" style=\"color: rgb(41, 43, 58); font-family: &quot;Noto Sans Bengali&quot;, Montserrat, sans-serif; letter-spacing: 0.3px; font-size: 15px !important;\">Soft Dubai Chairy Jilbab</p><p class=\"desc-data\" style=\"color: rgb(41, 43, 58); font-family: &quot;Noto Sans Bengali&quot;, Montserrat, sans-serif; letter-spacing: 0.3px; font-size: 15px !important;\">-জিলবাব গুলো সফট দুবাই চেইরী কাপড়ের তৈরী যা গরমে আরামদায়ক।<br>-নিজস্ব কারখানায় দক্ষ কারিগর দিয়ে তৈরি, সেলাই ফিনিশিং খুবই উন্নত।<br>- সময় নিয়ে রেডি হওয়ার ঝামেলা এড়াতে এবং সুন্নাহ অনুযায়ী সালাত আদায় করতে এই জিলবাব গুলো হবে আপনার বেষ্ট চয়েজ।<br>-কম সময়ে পরিপূর্ণ পর্দা মেইন্টেন করার জন্য এই জিলবাব গুলোর বিকল্প নেই।<br><br>পণ্যের বিবরণ:<br>-সফট&nbsp;<span style=\"letter-spacing: 0.3px;\">দুবাই চেইরী</span>&nbsp;জিলবাব<br>- বডি ফ্রী সাইজ<br>- লং মাথা থেকে সামনে&nbsp;৬৩<br>-পিছনে&nbsp;৬৫</p>', NULL, 1, 0, NULL, 1, NULL, NULL, '2025-08-30 05:00:09', '2025-08-30 05:00:09'),
(2842, 'Premium Floor Touch Zilbab - 014', 'premium-floor-touch-zilbab---014-2842', 16, 120, 0, NULL, 'P2842', 1150, 2500, 1190, 50, NULL, NULL, '<p class=\"desc-data\" style=\"color: rgb(41, 43, 58); font-family: &quot;Noto Sans Bengali&quot;, Montserrat, sans-serif; letter-spacing: 0.3px; font-size: 15px !important;\">Soft Dubai Chairy Jilbab</p><p class=\"desc-data\" style=\"color: rgb(41, 43, 58); font-family: &quot;Noto Sans Bengali&quot;, Montserrat, sans-serif; letter-spacing: 0.3px; font-size: 15px !important;\">-জিলবাব গুলো সফট দুবাই চেইরী কাপড়ের তৈরী যা গরমে আরামদায়ক।<br>-নিজস্ব কারখানায় দক্ষ কারিগর দিয়ে তৈরি, সেলাই ফিনিশিং খুবই উন্নত।<br>- সময় নিয়ে রেডি হওয়ার ঝামেলা এড়াতে এবং সুন্নাহ অনুযায়ী সালাত আদায় করতে এই জিলবাব গুলো হবে আপনার বেষ্ট চয়েজ।<br>-কম সময়ে পরিপূর্ণ পর্দা মেইন্টেন করার জন্য এই জিলবাব গুলোর বিকল্প নেই।<br><br>পণ্যের বিবরণ:<br>-সফট&nbsp;<span style=\"letter-spacing: 0.3px;\">দুবাই চেইরী</span>&nbsp;জিলবাব<br>- বডি ফ্রী সাইজ<br>- লং মাথা থেকে সামনে&nbsp;৬৩<br>-পিছনে&nbsp;৬৫</p>', NULL, 1, 0, NULL, 1, NULL, NULL, '2025-08-30 05:02:42', '2025-08-30 05:02:42'),
(2843, 'Premium Floor Touch Zilbab - 015', 'premium-floor-touch-zilbab---015-2843', 16, 120, 0, NULL, 'P2843', 1150, 2500, 1190, 50, NULL, NULL, '<p class=\"desc-data\" style=\"color: rgb(41, 43, 58); font-family: &quot;Noto Sans Bengali&quot;, Montserrat, sans-serif; letter-spacing: 0.3px; font-size: 15px !important;\">Soft Dubai Chairy Jilbab</p><p class=\"desc-data\" style=\"color: rgb(41, 43, 58); font-family: &quot;Noto Sans Bengali&quot;, Montserrat, sans-serif; letter-spacing: 0.3px; font-size: 15px !important;\">-জিলবাব গুলো সফট দুবাই চেইরী কাপড়ের তৈরী যা গরমে আরামদায়ক।<br>-নিজস্ব কারখানায় দক্ষ কারিগর দিয়ে তৈরি, সেলাই ফিনিশিং খুবই উন্নত।<br>- সময় নিয়ে রেডি হওয়ার ঝামেলা এড়াতে এবং সুন্নাহ অনুযায়ী সালাত আদায় করতে এই জিলবাব গুলো হবে আপনার বেষ্ট চয়েজ।<br>-কম সময়ে পরিপূর্ণ পর্দা মেইন্টেন করার জন্য এই জিলবাব গুলোর বিকল্প নেই।<br><br>পণ্যের বিবরণ:<br>-সফট&nbsp;<span style=\"letter-spacing: 0.3px;\">দুবাই চেইরী</span>&nbsp;জিলবাব<br>- বডি ফ্রী সাইজ<br>- লং মাথা থেকে সামনে&nbsp;৬৩<br>-পিছনে&nbsp;৬৫</p>', NULL, 1, 0, NULL, 1, NULL, NULL, '2025-08-30 05:05:08', '2025-08-30 05:05:08'),
(2845, 'test2', 'test2-2845', 15, 0, NULL, NULL, 'P2845', 5555, 555555, 225, 245, NULL, NULL, '453ghcn', NULL, 0, 0, NULL, 1, '[\"b AFaS\"]', '[\"test2\",\"sfsd\"]', '2025-09-18 12:17:49', '2025-09-18 12:27:05'),
(2846, 'test1', 'test1-2846', 17, 0, NULL, NULL, 'P2846', 43434, 43343, 3434, 4, NULL, NULL, 'axAzx', NULL, 0, 0, NULL, 1, '[\"b AFaS\"]', '[\"test2\"]', '2025-09-18 12:28:56', '2025-09-18 20:27:23');

-- --------------------------------------------------------

--
-- Table structure for table `productsizes`
--

CREATE TABLE `productsizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productsizes`
--

INSERT INTO `productsizes` (`id`, `product_id`, `size_id`, `created_at`, `updated_at`) VALUES
(1, 1, 12, '2024-02-05 09:40:29', '2024-02-05 09:40:29'),
(2, 1, 13, '2024-02-05 09:40:29', '2024-02-05 09:40:29'),
(4, 1, 15, '2024-02-05 09:40:29', '2024-02-05 09:40:29'),
(5, 35, 7, '2024-02-05 09:54:29', '2024-02-05 09:54:29'),
(6, 35, 8, '2024-02-05 09:54:29', '2024-02-05 09:54:29'),
(7, 35, 9, '2024-02-05 09:54:29', '2024-02-05 09:54:29'),
(8, 28, 6, '2024-02-05 14:06:19', '2024-02-05 14:06:19'),
(9, 28, 7, '2024-02-05 14:06:19', '2024-02-05 14:06:19'),
(10, 28, 8, '2024-02-05 14:06:19', '2024-02-05 14:06:19'),
(11, 28, 9, '2024-02-05 14:06:19', '2024-02-05 14:06:19'),
(12, 2, 6, '2024-02-05 14:07:27', '2024-02-05 14:07:27'),
(13, 2, 7, '2024-02-05 14:07:27', '2024-02-05 14:07:27'),
(14, 2, 8, '2024-02-05 14:07:27', '2024-02-05 14:07:27'),
(15, 131, 6, '2024-03-13 00:28:08', '2024-03-13 00:28:08'),
(16, 131, 7, '2024-03-13 00:28:08', '2024-03-13 00:28:08'),
(17, 131, 8, '2024-03-13 00:28:08', '2024-03-13 00:28:08'),
(18, 131, 9, '2024-03-13 00:28:08', '2024-03-13 00:28:08'),
(19, 131, 10, '2024-03-13 00:28:08', '2024-03-13 00:28:08'),
(20, 117, 6, '2024-07-03 01:33:09', '2024-07-03 01:33:09'),
(21, 117, 7, '2024-07-03 01:33:09', '2024-07-03 01:33:09'),
(22, 117, 8, '2024-07-03 01:33:09', '2024-07-03 01:33:09'),
(23, 117, 9, '2024-07-03 01:33:09', '2024-07-03 01:33:09'),
(24, 1, 10, '2024-07-06 15:29:32', '2024-07-06 15:29:32'),
(25, 132, 7, '2024-07-06 17:39:48', '2024-07-06 17:39:48'),
(26, 132, 8, '2024-07-06 17:39:48', '2024-07-06 17:39:48'),
(28, 149, 6, '2024-08-13 08:09:13', '2024-08-13 08:09:13'),
(29, 149, 9, '2024-08-13 08:09:13', '2024-08-13 08:09:13'),
(30, 149, 10, '2024-08-13 08:09:13', '2024-08-13 08:09:13'),
(31, 150, 11, '2024-08-18 17:19:04', '2024-08-18 17:19:04'),
(32, 150, 16, '2024-08-18 17:19:04', '2024-08-18 17:19:04'),
(33, 151, 6, '2024-08-18 23:16:29', '2024-08-18 23:16:29'),
(34, 151, 8, '2024-08-18 23:16:29', '2024-08-18 23:16:29'),
(35, 152, 11, '2024-08-19 17:10:02', '2024-08-19 17:10:02'),
(36, 152, 13, '2024-08-19 17:10:02', '2024-08-19 17:10:02'),
(37, 152, 16, '2024-08-19 17:10:02', '2024-08-19 17:10:02'),
(38, 811, 17, '2024-08-24 19:51:15', '2024-08-24 19:51:15'),
(39, 811, 18, '2024-08-24 19:51:15', '2024-08-24 19:51:15'),
(40, 811, 19, '2024-08-24 19:51:15', '2024-08-24 19:51:15'),
(41, 811, 21, '2024-08-24 19:51:15', '2024-08-24 19:51:15'),
(42, 815, 17, '2024-08-24 19:54:48', '2024-08-24 19:54:48'),
(43, 815, 18, '2024-08-24 19:54:48', '2024-08-24 19:54:48'),
(44, 815, 19, '2024-08-24 19:54:48', '2024-08-24 19:54:48'),
(45, 815, 21, '2024-08-24 19:54:48', '2024-08-24 19:54:48'),
(46, 816, 17, '2024-08-24 19:55:40', '2024-08-24 19:55:40'),
(47, 816, 18, '2024-08-24 19:55:40', '2024-08-24 19:55:40'),
(48, 816, 19, '2024-08-24 19:55:40', '2024-08-24 19:55:40'),
(49, 816, 21, '2024-08-24 19:55:40', '2024-08-24 19:55:40'),
(50, 2431, 19, '2024-09-04 16:35:49', '2024-09-04 16:35:49'),
(51, 2431, 20, '2024-09-04 16:35:49', '2024-09-04 16:35:49'),
(52, 2431, 21, '2024-09-04 16:35:49', '2024-09-04 16:35:49'),
(53, 2431, 22, '2024-09-04 16:35:49', '2024-09-04 16:35:49'),
(54, 2431, 23, '2024-09-04 16:35:49', '2024-09-04 16:35:49'),
(55, 2432, 21, '2024-09-04 16:44:02', '2024-09-04 16:44:02'),
(56, 2432, 22, '2024-09-04 16:44:02', '2024-09-04 16:44:02'),
(57, 2432, 23, '2024-09-04 16:44:02', '2024-09-04 16:44:02'),
(58, 2432, 24, '2024-09-04 16:44:23', '2024-09-04 16:44:23'),
(59, 2432, 25, '2024-09-04 16:44:23', '2024-09-04 16:44:23'),
(60, 2430, 18, '2024-09-04 17:22:16', '2024-09-04 17:22:16'),
(61, 2430, 19, '2024-09-04 17:22:16', '2024-09-04 17:22:16'),
(62, 2443, 19, '2024-09-04 18:27:33', '2024-09-04 18:27:33'),
(63, 2443, 23, '2024-09-04 18:27:33', '2024-09-04 18:27:33'),
(64, 2444, 19, '2024-09-04 18:31:12', '2024-09-04 18:31:12'),
(65, 2444, 20, '2024-09-04 18:31:12', '2024-09-04 18:31:12'),
(66, 2444, 21, '2024-09-04 18:31:12', '2024-09-04 18:31:12'),
(67, 2456, 18, '2024-09-04 19:13:02', '2024-09-04 19:13:02'),
(68, 2456, 19, '2024-09-04 19:13:02', '2024-09-04 19:13:02'),
(69, 2468, 18, '2024-09-04 19:22:54', '2024-09-04 19:22:54'),
(70, 2468, 21, '2024-09-04 19:22:54', '2024-09-04 19:22:54'),
(71, 2468, 23, '2024-09-04 19:22:54', '2024-09-04 19:22:54'),
(72, 2472, 21, '2024-09-04 19:31:34', '2024-09-04 19:31:34'),
(73, 2472, 22, '2024-09-04 19:31:34', '2024-09-04 19:31:34'),
(74, 2472, 23, '2024-09-04 19:31:34', '2024-09-04 19:31:34'),
(75, 2471, 18, '2024-09-04 19:32:00', '2024-09-04 19:32:00'),
(76, 2471, 19, '2024-09-04 19:32:00', '2024-09-04 19:32:00'),
(77, 2471, 20, '2024-09-04 19:32:00', '2024-09-04 19:32:00'),
(78, 2471, 21, '2024-09-04 19:32:00', '2024-09-04 19:32:00'),
(79, 2470, 18, '2024-09-04 19:32:36', '2024-09-04 19:32:36'),
(80, 2470, 19, '2024-09-04 19:32:36', '2024-09-04 19:32:36'),
(81, 2470, 21, '2024-09-04 19:32:36', '2024-09-04 19:32:36'),
(82, 2470, 25, '2024-09-04 19:32:36', '2024-09-04 19:32:36'),
(83, 2470, 26, '2024-09-04 19:33:21', '2024-09-04 19:33:21'),
(84, 2473, 21, '2024-09-04 19:57:21', '2024-09-04 19:57:21'),
(85, 2473, 22, '2024-09-04 19:57:21', '2024-09-04 19:57:21'),
(86, 2473, 23, '2024-09-04 19:57:21', '2024-09-04 19:57:21'),
(87, 2474, 21, '2024-09-04 19:58:38', '2024-09-04 19:58:38'),
(88, 2474, 22, '2024-09-04 19:58:38', '2024-09-04 19:58:38'),
(89, 2474, 23, '2024-09-04 19:58:38', '2024-09-04 19:58:38'),
(90, 2475, 19, '2024-09-04 20:02:06', '2024-09-04 20:02:06'),
(91, 2475, 20, '2024-09-04 20:02:06', '2024-09-04 20:02:06'),
(92, 2475, 21, '2024-09-04 20:02:06', '2024-09-04 20:02:06'),
(93, 2477, 21, '2024-09-04 20:07:01', '2024-09-04 20:07:01'),
(94, 2477, 22, '2024-09-04 20:07:01', '2024-09-04 20:07:01'),
(95, 2477, 23, '2024-09-04 20:07:01', '2024-09-04 20:07:01'),
(96, 2478, 18, '2024-09-04 20:09:15', '2024-09-04 20:09:15'),
(97, 2478, 19, '2024-09-04 20:09:15', '2024-09-04 20:09:15'),
(98, 2478, 21, '2024-09-04 20:09:15', '2024-09-04 20:09:15'),
(99, 2478, 25, '2024-09-04 20:09:15', '2024-09-04 20:09:15'),
(100, 2478, 26, '2024-09-04 20:09:15', '2024-09-04 20:09:15'),
(101, 2496, 21, '2024-09-04 21:06:45', '2024-09-04 21:06:45'),
(102, 2496, 22, '2024-09-04 21:06:45', '2024-09-04 21:06:45'),
(103, 2496, 23, '2024-09-04 21:06:45', '2024-09-04 21:06:45'),
(104, 2439, 18, '2024-09-05 00:43:29', '2024-09-05 00:43:29'),
(105, 2439, 19, '2024-09-05 00:43:29', '2024-09-05 00:43:29'),
(106, 2812, 6, '2024-09-12 03:38:00', '2024-09-12 03:38:00'),
(107, 2812, 8, '2024-09-12 03:38:00', '2024-09-12 03:38:00'),
(110, 2822, 24, '2024-10-12 08:55:21', '2024-10-12 08:55:21'),
(111, 2822, 25, '2024-10-12 08:55:21', '2024-10-12 08:55:21'),
(112, 2822, 26, '2024-10-12 08:55:21', '2024-10-12 08:55:21'),
(113, 2823, 24, '2024-10-12 12:18:53', '2024-10-12 12:18:53'),
(114, 2826, 24, '2024-10-13 14:52:52', '2024-10-13 14:52:52'),
(115, 2826, 25, '2024-10-13 14:52:52', '2024-10-13 14:52:52'),
(116, 2826, 26, '2024-10-13 14:52:52', '2024-10-13 14:52:52'),
(117, 2827, 24, '2024-10-13 17:59:36', '2024-10-13 17:59:36'),
(118, 2827, 25, '2024-10-13 17:59:36', '2024-10-13 17:59:36'),
(119, 2827, 26, '2024-10-13 17:59:36', '2024-10-13 17:59:36'),
(120, 2828, 24, '2024-10-13 18:00:58', '2024-10-13 18:00:58'),
(121, 2828, 25, '2024-10-13 18:00:58', '2024-10-13 18:00:58'),
(122, 2828, 26, '2024-10-13 18:00:58', '2024-10-13 18:00:58'),
(123, 2829, 24, '2024-10-13 18:04:48', '2024-10-13 18:04:48'),
(124, 2829, 25, '2024-10-13 18:04:48', '2024-10-13 18:04:48'),
(125, 2829, 26, '2024-10-13 18:04:48', '2024-10-13 18:04:48'),
(126, 2831, 26, '2024-10-14 21:00:18', '2024-10-14 21:00:18'),
(127, 2832, 6, '2024-10-14 21:31:00', '2024-10-14 21:31:00'),
(128, 2832, 27, '2024-10-14 21:31:00', '2024-10-14 21:31:00'),
(129, 2833, 27, '2024-10-14 21:49:31', '2024-10-14 21:49:31'),
(130, 2834, 27, '2024-10-14 21:58:05', '2024-10-14 21:58:05'),
(131, 2835, 27, '2024-10-14 22:05:24', '2024-10-14 22:05:24'),
(132, 2836, 27, '2024-10-15 08:53:00', '2024-10-15 08:53:00'),
(133, 2837, 6, '2025-08-29 23:08:49', '2025-08-29 23:08:49'),
(134, 2838, 8, '2025-08-29 23:53:07', '2025-08-29 23:53:07');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(55) NOT NULL,
  `ratting` varchar(4) NOT NULL,
  `review` text NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `status` varchar(55) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `email`, `ratting`, `review`, `product_id`, `customer_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Omor Faruk', 'N / A', '5', 'Nice product,,,', 75, 13, 'pending', '2024-02-05 08:49:50', '2024-07-06 15:31:14'),
(2, 'Samiul Alom', 'N / A', '5', 'nice product', 123, 11, 'pending', '2024-02-10 08:00:20', '2024-02-10 08:00:20'),
(3, 'Samiul Alom', 'N / A', '5', 'nice product', 99, 11, 'pending', '2024-02-10 09:33:38', '2024-02-10 09:33:38'),
(4, 'MD. ASLAM UDDIN', 'N / A', '5', 'yjgh', 13, 37, 'pending', '2024-07-06 14:39:58', '2024-07-06 14:39:58'),
(5, 'aa', 'N / A', '5', 'good', 40, 40, 'pending', '2024-07-06 16:29:09', '2024-07-06 16:29:09'),
(6, 'aa', 'N / A', '3', 'sdfsf', 40, 40, 'pending', '2024-07-06 16:29:33', '2024-07-06 16:29:33'),
(7, 'aa', 'N / A', '5', 'mmmm', 40, 40, 'pending', '2024-07-06 16:29:48', '2024-07-06 16:29:48'),
(8, 'Dhaka Branch', 'araufduh98@gmail.com', '5', 'hmm', 152, 62, 'active', '2024-08-19 17:15:36', '2024-08-19 17:15:58'),
(9, 'Zadu', 'zadumia441@gmail.com', '3', '555', 101, 3, 'active', '2024-08-19 17:16:27', '2024-08-19 17:16:27'),
(10, 'Rakibul Islam', 'N / A', '5', 'Nice Product. I love this design for my wife.', 2839, 106, 'active', '2025-08-30 05:07:39', '2025-08-30 05:07:39'),
(11, '01000000001', 'N / A', '4', 'aD', 2839, 124, 'pending', '2025-09-21 20:00:14', '2025-09-21 20:00:14');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2023-01-11 06:33:09', '2023-01-11 06:33:09'),
(3, 'Editor', 'web', '2023-01-19 06:41:33', '2023-01-19 06:41:33'),
(4, 'Salesman', 'web', '2023-01-19 06:42:28', '2023-01-19 06:42:28');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(5, 4),
(6, 1),
(6, 4),
(7, 1),
(7, 3),
(7, 4),
(8, 1),
(8, 4),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `name` varchar(155) NOT NULL,
  `phone` varchar(55) NOT NULL,
  `address` varchar(256) DEFAULT NULL,
  `area` varchar(256) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `order_id`, `customer_id`, `name`, `phone`, `address`, `area`, `created_at`, `updated_at`) VALUES
(177, 177, 122, 'MD Saber Hossain Sojeeb', '01824347111', 'Postogola, Rajabari', 'হোম ডেলিভারি ঢাকার বাহিরে ১৩০/-', '2025-08-30 05:30:26', '2025-09-15 12:40:20'),
(178, 178, 123, 'Daria Sherman', '01000000000', 'Sunt magnam animi p', 'হোম ডেলিভারি ঢাকার বাহিরে ১৩০/-', '2025-09-15 10:27:31', '2025-09-15 10:29:50'),
(179, 179, 124, 'Odysseus May', '01000000000', 'Suscipit voluptatum', 'হোম ডেলিভারী চার্জ: ঢাকা সিটি ৭০/-', '2025-09-21 20:25:06', '2025-09-21 20:25:06'),
(180, 180, 123, 'Odysseus May', '01000000000', 'sdfa', 'হোম ডেলিভারী চার্জ: ঢাকা সিটি ৭০/-', '2025-09-22 19:31:26', '2025-09-22 19:31:26');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_charges`
--

CREATE TABLE `shipping_charges` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_charges`
--

INSERT INTO `shipping_charges` (`id`, `name`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 'হোম ডেলিভারী চার্জ: ঢাকা সিটি ৭০/-', 70, '1', '2023-08-04 10:34:54', '2024-08-10 10:03:13'),
(2, 'হোম ডেলিভারি ঢাকার বাহিরে ১৩০/-', 130, '1', '2023-08-04 10:35:57', '2024-08-10 10:02:16');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `sizeName` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `sizeName`, `status`, `created_at`, `updated_at`) VALUES
(6, 'S', '1', '2024-02-05 09:38:42', '2024-02-05 09:38:42'),
(7, 'M', '1', '2024-02-05 09:38:46', '2024-02-05 09:38:46'),
(8, 'L', '1', '2024-02-05 09:38:51', '2024-02-05 09:38:51'),
(9, 'XL', '1', '2024-02-05 09:38:57', '2024-02-05 09:38:57'),
(24, '44', '1', '2024-09-04 16:43:24', '2024-10-12 08:45:59'),
(25, '42', '1', '2024-09-04 16:43:34', '2024-10-12 08:45:54'),
(26, '40', '1', '2024-09-04 19:33:07', '2024-10-12 08:45:45'),
(27, 'Free Size', '1', '2024-10-14 21:12:59', '2024-10-14 21:12:59');

-- --------------------------------------------------------

--
-- Table structure for table `skin_concerns`
--

CREATE TABLE `skin_concerns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `order` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(255) NOT NULL DEFAULT 'public/uploads/category/default.png',
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skin_concerns`
--

INSERT INTO `skin_concerns` (`id`, `name`, `slug`, `order`, `image`, `meta_title`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Acne/Pimples Treatment', 'acnepimples-treatment', 1, 'uploads/skinConcern/1758575527-acne-pimple-treatment.webp', 'Acne/Pimples Treatment', 'Acne/Pimples Treatment', 1, '2025-09-18 10:56:47', '2025-09-22 21:12:07'),
(3, 'ASDAx', 'asdax', 23, 'public/uploads/skinConcern/1758193208-products-design-.webp', 'SDZFSZVCzdxc', 'ZVdzDSdSFz', 1, '2025-09-18 11:00:09', '2025-09-18 11:56:47');

-- --------------------------------------------------------

--
-- Table structure for table `skin_types`
--

CREATE TABLE `skin_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `order` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(255) NOT NULL DEFAULT 'public/uploads/category/default.png',
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skin_types`
--

INSERT INTO `skin_types` (`id`, `name`, `slug`, `order`, `image`, `meta_title`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'test2', 'test2', 2, 'uploads/skintype/1758177705-crepeshouse-logo.webp', 'asd', 'cacXa', 1, '2025-09-17 15:26:19', '2025-09-18 11:56:08'),
(4, 'sfsd', 'sfsd', 43, 'uploads/skintype/1758206880-screenshot-2025-02-26-171340.webp', 'sdfsz', 'szdf', 1, '2025-09-17 15:41:04', '2025-09-18 14:48:01');

-- --------------------------------------------------------

--
-- Table structure for table `sms_gateways`
--

CREATE TABLE `sms_gateways` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(99) DEFAULT NULL,
  `api_key` varchar(155) DEFAULT NULL,
  `serderid` varchar(155) DEFAULT NULL,
  `order` varchar(11) DEFAULT NULL,
  `forget_pass` varchar(11) DEFAULT NULL,
  `password_g` varchar(11) DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sms_gateways`
--

INSERT INTO `sms_gateways` (`id`, `url`, `api_key`, `serderid`, `order`, `forget_pass`, `password_g`, `status`, `created_at`, `updated_at`) VALUES
(1, 'https://msg.elitbuzz-bd.com/smsapi', 'C200817461dd7a25cf3924.89247796', '8809612472619', '0', '0', '0', '0', '2024-02-06 11:29:46', '2024-08-10 11:30:08');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `link` varchar(155) NOT NULL,
  `color` varchar(20) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `title`, `icon`, `link`, `color`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Facebook', 'fab fa-facebook-f', 'facebook.com/stylepickershop/', '#f78345', 1, '2023-02-12 11:32:20', '2024-10-14 15:11:04'),
(3, 'Official Mail', 'fab fa-google', 'stylepickershop@gmail.com', '#c53302', 1, '2023-02-14 03:29:41', '2024-10-14 15:11:25');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `subcategoryName` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `meta_title` varchar(191) DEFAULT NULL,
  `meta_description` longtext DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `subcategoryName`, `slug`, `category_id`, `image`, `meta_title`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(120, 'Zilbab', 'zilbab', 16, NULL, NULL, NULL, 1, '2025-08-30 04:23:20', '2025-08-30 04:23:20'),
(121, 'Ekra', 'ekra', 16, NULL, NULL, NULL, 1, '2025-08-30 04:23:45', '2025-08-30 04:23:45');

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `css_class` varchar(255) DEFAULT NULL,
  `view_name` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `config` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`config`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id`, `name`, `description`, `css_class`, `view_name`, `is_active`, `config`, `created_at`, `updated_at`) VALUES
(1, 'Hero CTA Template', 'Simple hero section with call-to-action button', 'template-hero-cta', 'hero-cta', 1, '{\"features\": [\"title\", \"subtitle\", \"cta_text\", \"cta_link\", \"image\"], \"sections\": [\"hero\", \"cta\"]}', '2025-08-28 00:49:11', '2025-08-28 00:49:11'),
(2, 'Product Showcase Template', 'Product showcase with features and benefits', 'template-product-showcase', 'product-showcase', 1, '{\"features\": [\"title\", \"subtitle\", \"description\", \"cta_text\", \"cta_link\", \"image\"], \"sections\": [\"hero\", \"features\", \"benefits\", \"cta\"]}', '2025-08-28 00:49:11', '2025-08-28 00:49:11'),
(3, 'Story Benefits Template', 'Story-based template with benefits section', 'template-story-benefits', 'story-benefits', 1, '{\"features\": [\"title\", \"subtitle\", \"description\", \"cta_text\", \"cta_link\", \"image\"], \"sections\": [\"hero\", \"story\", \"benefits\", \"testimonials\", \"cta\"]}', '2025-08-28 00:49:11', '2025-08-28 00:49:11'),
(4, 'FAQ Contact Template', 'FAQ section with contact form', 'template-faq-contact', 'faq-contact', 1, '{\"features\": [\"title\", \"subtitle\", \"description\", \"cta_text\", \"cta_link\", \"image\"], \"sections\": [\"hero\", \"features\", \"faq\", \"contact\", \"cta\"]}', '2025-08-28 00:49:11', '2025-08-28 00:49:11'),
(5, 'Default Template', 'Default template for all landing pages', 'template-default', 'default', 1, '{\"features\": [\"title\", \"subtitle\", \"description\", \"cta_text\", \"cta_link\", \"image\"], \"sections\": [\"hero\", \"content\", \"cta\"]}', '2025-08-28 00:49:11', '2025-08-28 00:49:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$oFsq3ottFq6ogN.7OxCrJucHL9nC71lpQOVgoDUDOGdtk6gleeBDi', 'CtJgIgvQTPWWZaWmxWWXSdkGuaTf6tThExVsavpfpKCxUa6zluPhlwOII2Ca', 'public/uploads/users/1707537558-faveicon.webp', 1, '2023-01-11 06:33:08', '2024-02-10 03:59:18'),
(6, 'Shayimurecom', 'info@example.com', NULL, '$2y$10$LrLAf2UfN3aIsgyWHIYu2e9Z5/KkoxxuTyG8/aM1mc.yLx2OghxLu', 'sp35Hpmbxcm3Ov2KllkLrEUyp4TlWJUCXcx9qoKpWuUEy5yd9NI4l2jELbdK', 'public/uploads/users/1707537536-faveicon.webp', 1, '2024-02-10 03:58:57', '2024-02-23 13:17:11'),
(7, 'samiur', 'newnestbd@gmail.com', NULL, '$2y$10$.ve5zGd5O6RgtWvxRj2ApeKSH18ssoVM5ilYzQZcGT2tARPOzS7B2', NULL, 'public/uploads/users/1709230014-421108986_122117703284162461_7658740995881704938_n.webp', 1, '2024-03-01 00:06:54', '2024-03-01 00:06:54'),
(8, 'Alex Print', 'anusandhanbd24@gmail.com', NULL, '$2y$10$fRybuLMCHB3hOF7l1qSHJeW/yoq6Bc9PAcaUAYjPHB6liCUAmPzXK', NULL, 'uploads/users/1756508836-0demo1.webp', 1, '2025-08-29 23:07:16', '2025-08-29 23:07:16'),
(9, 'Md Bijoy', 'bijoy@sunnahheaven.com', NULL, '$2y$10$jPI0k5wwVGjg07QQg95WMewRFMswf7PeWqAjBuM9iBDuuto7Ylya2', NULL, 'uploads/users/1756532737-shopping-bag-for-mockup-01.webp', 1, '2025-08-30 05:45:42', '2025-08-30 05:45:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_categories`
--
ALTER TABLE `banner_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `campaigns_template_id_foreign` (`template_id`);

--
-- Indexes for table `campaign_reviews`
--
ALTER TABLE `campaign_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `childcategories`
--
ALTER TABLE `childcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courierapis`
--
ALTER TABLE `courierapis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_pages`
--
ALTER TABLE `create_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecom_pixels`
--
ALTER TABLE `ecom_pixels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `google_tag_managers`
--
ALTER TABLE `google_tag_managers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ip_blocks`
--
ALTER TABLE `ip_blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landing_pages`
--
ALTER TABLE `landing_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_statuses`
--
ALTER TABLE `order_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_gateways`
--
ALTER TABLE `payment_gateways`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `productcolors`
--
ALTER TABLE `productcolors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productimages`
--
ALTER TABLE `productimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productsizes`
--
ALTER TABLE `productsizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_charges`
--
ALTER TABLE `shipping_charges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skin_concerns`
--
ALTER TABLE `skin_concerns`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `skin_concerns_name_unique` (`name`);

--
-- Indexes for table `skin_types`
--
ALTER TABLE `skin_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `skin_types_name_unique` (`name`);

--
-- Indexes for table `sms_gateways`
--
ALTER TABLE `sms_gateways`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `banner_categories`
--
ALTER TABLE `banner_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `campaign_reviews`
--
ALTER TABLE `campaign_reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `childcategories`
--
ALTER TABLE `childcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `courierapis`
--
ALTER TABLE `courierapis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `create_pages`
--
ALTER TABLE `create_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `google_tag_managers`
--
ALTER TABLE `google_tag_managers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `landing_pages`
--
ALTER TABLE `landing_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=401;

--
-- AUTO_INCREMENT for table `order_statuses`
--
ALTER TABLE `order_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `payment_gateways`
--
ALTER TABLE `payment_gateways`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `productcolors`
--
ALTER TABLE `productcolors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `productimages`
--
ALTER TABLE `productimages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3108;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2847;

--
-- AUTO_INCREMENT for table `productsizes`
--
ALTER TABLE `productsizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `skin_concerns`
--
ALTER TABLE `skin_concerns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skin_types`
--
ALTER TABLE `skin_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sms_gateways`
--
ALTER TABLE `sms_gateways`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD CONSTRAINT `campaigns_template_id_foreign` FOREIGN KEY (`template_id`) REFERENCES `templates` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
