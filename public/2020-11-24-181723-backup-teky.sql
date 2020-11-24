-- MariaDB dump 10.17  Distrib 10.4.11-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: teky
-- ------------------------------------------------------
-- Server version	10.4.11-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bai_giang`
--

DROP TABLE IF EXISTS `bai_giang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bai_giang` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tenbaigiang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `filebaigiang` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `khoa_hoc_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bai_giang_khoa_hoc_id_foreign` (`khoa_hoc_id`),
  CONSTRAINT `bai_giang_khoa_hoc_id_foreign` FOREIGN KEY (`khoa_hoc_id`) REFERENCES `khoa_hoc` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bai_giang`
--

LOCK TABLES `bai_giang` WRITE;
/*!40000 ALTER TABLE `bai_giang` DISABLE KEYS */;
INSERT INTO `bai_giang` VALUES (1,'An toàn khi đi xe đạp','Tự nhiên xã hội\n\nAn toàn khi đi xe đạp\n\nI/ Mục tiêu:\n\na) Kiến thức: Giúp Hs : Sau bài học Hs biết một số quy định đối với người đi xe đạp.\n\nb) Kỹ năng: Có ý thức chấp hành luật giao thông.\n\n c) Thái độ: Tích cực chấp hành luật giao thông.\n\nII/ Chuẩn bị:* GV: Hình trong SGK trang 46, 47.\n\n * HS: SGK, vở.\n\nIII/ Các hoạt động:\n\n1. Bài cũ: Làng quê và đô thị. 5\n\n - Gv gọi 2 Hs lên trả lời câu 2 câu hỏi:\n\n + Phong cảnh nhà cửa, đường sá ở làng quê và đô thị.\n\n + Kể tên những nghề nghiệp của người dân ở làng quê và đô thị.','baigiang/bai_giang_1_1.pdf',7,'2020-11-24 11:00:48','2020-11-24 11:00:48',NULL),(2,'NÊN THỞ NHƯ THẾ NÀO?',' Tại sao ta nên thở bằng mũi mà không nên thở bằng miệng?\n\n- GV cho HS hoạt động cá nhân\n\n- GV Hướng dẫn HS lấy gương ra soi\n\n- GV đặt câu hỏi, yêu cầu HS trả lời\n\n+ Các em nhìn thấy gì trong mũi?\n\n+ Khi bị sổ mũi em thấy có gì trong mũi chảy ra?\n\n+ Hằng ngày dùng khăn lau mũi em quan sát trên khăn có gì không?\n\n+ Tại sao thở bằng mũi tốt hơn thở bằng miệng?\n\n- Vậy thở như thế nào là tốt nhất?\n\n* Quan sát SGK:\n\n- GV yêu cầu HS quan sát SGK và nêu được: ích lợi của việc hít thở không khí trong lành và tác hại của việc hít thở không khí có nhiều khói, bụi đối với sức khoẻ.\n\n- Yêu cầu HS thảo luận nhóm 2 và TLCH GV đưa ra:\n\n+ Bức tranh nào thể hiện không khí trong lành và bức tranh nào thể hiện không khí nhiều khói bụi?\n\n+ Khi được thở không khí trong lành bạn cảm thấy như thế nào?\n\n+ Nêu cảm giác khi phải thỏ không khí nhiều khói bụi?\n\n- GV yêu cầu HS đại dịên nhóm trình bày kết quả\n\n- Yêu cầu HS nhận xét, bổ sung\n\n- GVchốt ý kiến đúng\n\n- GV yêu cầu HS TLCH:\n\n+ Thở không khí trong lành có ích lợi gì?\n\n+ Thở không khí có nhiều khói bụi có hại như thế nào?\n\n- Gv nêu kết luận: SGK','baigiang/bai_giang_1_2.pdf',7,'2020-11-24 11:00:48','2020-11-24 11:00:48',NULL),(3,'HOẠT ĐỘNG MỞ VÀ CƠ QUAN HÔ HẤP','Thực hành thở sâu:\n\n- GV hướng dẫn HS cách thở sâu: “Bịt mũi nín thở”\n\n- GV hướng dẫn HS chơi trò chơi:\n\n+ Yêu cầu cả lớp thực hành và TLCH: Các em có cảm giác như thế nào?\n\n- Gọi 3 HS lên bảng thở sâu','baigiang/bai_giang_1_3.pdf',7,'2020-11-24 11:00:48','2020-11-24 11:00:48',NULL),(4,'Kính yêu Bác Hồ','1 Thảo luận: Qua câu chuyện em thấy tình cảm giữa Bác Hồ và các cháu Thiếu nhi như thế nào?\n\n2. Tìm hiểu về 5 điều Bác Hồ dạy.\n\n- GV củng cố lại nội dung 5 điều Bác Hồ dạy Thiếu niên Nhi đồng.\n\n* Trò chơi phóng viên,\n\n* Kết luận chung: Bác Hồ là vị lãnh tụ vĩ đại của dân tộc Việt Nam. Kính yêu và biết ơn Bác Hồ chúng ta phải thực hiện 5 điều Bác Hồ dạy.','baigiang/bai_giang_1_4.pdf',7,'2020-11-24 11:00:48','2020-11-24 11:00:48',NULL),(5,'Giữ lời hứa','1) GV phát phiếu học tập.\n\n- Hãy ghi vào ô chữ Đ trước những hành vi đúng, chữ S trước những hành vi sai (Câu hỏi bài 4 vở bài tập Đạo đức trang 7).\n\n2) Thảo luận theo nhóm 2 người.\n\n3) Gọi các nhóm trình bày kết quả.\n\n4) GV kết luận.\n\n- Các việc làm a, b là giữ lời hứa.\n\n- Các việc làm b, c là không giữ lời hứa.\n\nĐóng vai.\n\n- GV chia nhóm.\n\n- GV kết luận.\n\n- Bày tỏ ý kiến – Củng cố.\n\n- GV lần lượt nêu từng ý kiến (xem SGV)\n\n- Kết luận chung.','baigiang/bai_giang_1_5.pdf',7,'2020-11-24 11:00:48','2020-11-24 11:00:48',NULL);
/*!40000 ALTER TABLE `bai_giang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bai_tap`
--

DROP TABLE IF EXISTS `bai_tap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bai_tap` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tenbaitap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loaicauhoi` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'tracnghiem',
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanhminhhoa` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dapan1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dapan2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dapan3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dapan4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dapan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bai_giang_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bai_tap_bai_giang_id_foreign` (`bai_giang_id`),
  CONSTRAINT `bai_tap_bai_giang_id_foreign` FOREIGN KEY (`bai_giang_id`) REFERENCES `bai_giang` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bai_tap`
--

LOCK TABLES `bai_tap` WRITE;
/*!40000 ALTER TABLE `bai_tap` DISABLE KEYS */;
INSERT INTO `bai_tap` VALUES (1,'Bài tập về nhà','Trắc nghiệm','Đấu trường La Mã là công trình nổi tiếng của quốc gia nào?','baitap/1.png','Hy Lạp','Italy','Phần Lan','Các đáp án trên đều sai','b',1,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(2,'Bài tập về nhà','Trắc nghiệm','Bức tượng Nàng tiên cá được đặt tại đâu?','baitap/2.png','Mỹ','Canada','Đan Mạch','Các đáp án trên đều sai','c',1,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(3,'Bài tập về nhà','Trắc nghiệm','Chùa nào là biểu tượng của Myanmar?','baitap/3.png','Shwedagon','WatPhone','That wlang','Các đáp án trên đều sai','b',1,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(4,'Bài tập về nhà','Trắc nghiệm','Burj Khalifa là tòa tháp nổi tiếng của quốc gia nào?','baitap/4.png','Shwedagon','WatPhone','That wlang','Các đáp án trên đều sai','a',2,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(5,'Bài tập về nhà','Trắc nghiệm','Nhà thờ thánh Basil là công trình của nước nào?','baitap/5.png','Shwedagon','WatPhone','That wlang','Các đáp án trên đều sai','c',2,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL);
/*!40000 ALTER TABLE `bai_tap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `buoi_hoc`
--

DROP TABLE IF EXISTS `buoi_hoc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buoi_hoc` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ngayhoc` datetime NOT NULL,
  `ghichu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `noidungbuoihoc` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Chưa kết thúc',
  `lop_hoc_id` bigint(20) unsigned NOT NULL,
  `phong_hoc_id` bigint(20) unsigned NOT NULL,
  `giao_vien_id` bigint(20) unsigned NOT NULL,
  `bai_giang_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `buoi_hoc_lop_hoc_id_foreign` (`lop_hoc_id`),
  KEY `buoi_hoc_phong_hoc_id_foreign` (`phong_hoc_id`),
  KEY `buoi_hoc_giao_vien_id_foreign` (`giao_vien_id`),
  KEY `buoi_hoc_bai_giang_id_foreign` (`bai_giang_id`),
  CONSTRAINT `buoi_hoc_bai_giang_id_foreign` FOREIGN KEY (`bai_giang_id`) REFERENCES `bai_giang` (`id`),
  CONSTRAINT `buoi_hoc_giao_vien_id_foreign` FOREIGN KEY (`giao_vien_id`) REFERENCES `giao_vien` (`id`),
  CONSTRAINT `buoi_hoc_lop_hoc_id_foreign` FOREIGN KEY (`lop_hoc_id`) REFERENCES `lop_hoc` (`id`),
  CONSTRAINT `buoi_hoc_phong_hoc_id_foreign` FOREIGN KEY (`phong_hoc_id`) REFERENCES `phong_hoc` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buoi_hoc`
--

LOCK TABLES `buoi_hoc` WRITE;
/*!40000 ALTER TABLE `buoi_hoc` DISABLE KEYS */;
INSERT INTO `buoi_hoc` VALUES (1,'2020-09-01 00:00:00','','This is test','Chưa kết thúc',1,1,1,1,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(2,'2020-09-08 00:00:00','','This is test','Chưa kết thúc',1,1,1,2,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(3,'2020-09-15 00:00:00','','This is test','Chưa kết thúc',1,1,1,3,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(4,'2020-09-22 00:00:00','','This is test','Chưa kết thúc',1,1,1,4,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(5,'2020-09-29 00:00:00','','This is test','Chưa kết thúc',1,1,1,5,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL);
/*!40000 ALTER TABLE `buoi_hoc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ca_hoc`
--

DROP TABLE IF EXISTS `ca_hoc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ca_hoc` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `thoigianbatdau` time NOT NULL,
  `thoigianketthuc` time NOT NULL,
  `buoi` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ca_hoc`
--

LOCK TABLES `ca_hoc` WRITE;
/*!40000 ALTER TABLE `ca_hoc` DISABLE KEYS */;
INSERT INTO `ca_hoc` VALUES (1,'07:00:00','08:30:00',1,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(2,'08:30:00','10:00:00',1,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(3,'10:00:00','11:30:00',1,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(4,'14:00:00','15:30:00',2,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(5,'15:30:00','17:00:00',2,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(6,'20:00:00','21:30:00',3,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL);
/*!40000 ALTER TABLE `ca_hoc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cau_hinh_luong`
--

DROP TABLE IF EXISTS `cau_hinh_luong`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cau_hinh_luong` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giatri` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cau_hinh_luong`
--

LOCK TABLES `cau_hinh_luong` WRITE;
/*!40000 ALTER TABLE `cau_hinh_luong` DISABLE KEYS */;
INSERT INTO `cau_hinh_luong` VALUES (1,'bhxh','BHXH ',8.00,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(2,'bhyt','BHYT ',1.50,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(3,'bhtn','BHTN',1.00,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL);
/*!40000 ALTER TABLE `cau_hinh_luong` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `check_in`
--

DROP TABLE IF EXISTS `check_in`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `check_in` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `giocheckin` datetime DEFAULT NULL,
  `giocheckout` datetime DEFAULT NULL,
  `ketqua` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nhan_vien_id` bigint(20) unsigned DEFAULT NULL,
  `giao_vien_id` bigint(20) unsigned DEFAULT NULL,
  `ngaycham` date DEFAULT NULL,
  `trangthai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Chưa xác nhận',
  `buoi_hoc_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `check_in_nhan_vien_id_foreign` (`nhan_vien_id`),
  KEY `check_in_buoi_hoc_id_foreign` (`buoi_hoc_id`),
  CONSTRAINT `check_in_buoi_hoc_id_foreign` FOREIGN KEY (`buoi_hoc_id`) REFERENCES `buoi_hoc` (`id`),
  CONSTRAINT `check_in_nhan_vien_id_foreign` FOREIGN KEY (`nhan_vien_id`) REFERENCES `nhan_vien` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `check_in`
--

LOCK TABLES `check_in` WRITE;
/*!40000 ALTER TABLE `check_in` DISABLE KEYS */;
INSERT INTO `check_in` VALUES (1,'2020-11-16 07:05:25','2020-11-16 08:30:28',NULL,NULL,NULL,1,'2020-11-24','Đã xác nhận',1,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(2,'2020-11-17 07:05:30','2020-11-17 08:35:33',NULL,NULL,NULL,1,'2020-11-24','Đã xác nhận',2,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(3,'2020-11-18 06:59:39','2020-11-18 08:38:41',NULL,NULL,NULL,1,'2020-11-24','Đã xác nhận',3,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(4,'2020-11-19 07:00:44','2020-11-19 08:35:46',NULL,NULL,NULL,1,'2020-11-24','Đã xác nhận',4,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(5,'2020-11-20 07:00:48','2020-11-20 08:30:50',NULL,NULL,NULL,1,'2020-11-24','Đã xác nhận',5,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(6,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,1,NULL,'2020-11-20','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(7,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,2,NULL,'2020-11-20','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(8,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,3,NULL,'2020-11-20','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(9,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,1,NULL,'2020-11-19','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(10,'2020-11-24 18:00:51','2020-11-24 18:00:51','Vắng',NULL,2,NULL,'2020-11-19','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(11,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,3,NULL,'2020-11-19','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(12,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,1,NULL,'2020-11-18','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(13,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,2,NULL,'2020-11-18','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(14,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,3,NULL,'2020-11-18','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(15,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,1,NULL,'2020-11-17','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(16,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,2,NULL,'2020-11-17','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(17,'2020-11-24 18:00:51','2020-11-24 18:00:51','Vắng',NULL,3,NULL,'2020-11-17','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(18,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,1,NULL,'2020-11-16','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(19,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,2,NULL,'2020-11-16','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(20,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,3,NULL,'2020-11-16','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(24,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,1,NULL,'2020-11-14','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(25,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,2,NULL,'2020-11-14','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(26,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,3,NULL,'2020-11-14','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(27,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,1,NULL,'2020-11-13','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(28,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,2,NULL,'2020-11-13','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(29,'2020-11-24 18:00:51','2020-11-24 18:00:51','Vắng',NULL,3,NULL,'2020-11-13','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(30,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,1,NULL,'2020-11-12','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(31,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,2,NULL,'2020-11-12','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(32,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,3,NULL,'2020-11-12','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(33,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,1,NULL,'2020-11-11','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(34,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,2,NULL,'2020-11-11','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(35,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,3,NULL,'2020-11-11','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(36,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,1,NULL,'2020-11-10','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(37,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,2,NULL,'2020-11-10','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(38,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,3,NULL,'2020-11-10','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(39,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,1,NULL,'2020-11-09','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(40,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,2,NULL,'2020-11-09','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(41,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,3,NULL,'2020-11-09','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(45,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,1,NULL,'2020-11-07','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(46,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,2,NULL,'2020-11-07','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(47,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,3,NULL,'2020-11-07','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(48,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,1,NULL,'2020-11-06','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(49,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,2,NULL,'2020-11-06','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(50,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,3,NULL,'2020-11-06','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(51,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,1,NULL,'2020-11-05','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(52,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,2,NULL,'2020-11-05','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(53,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,3,NULL,'2020-11-05','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(54,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,1,NULL,'2020-11-04','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(55,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,2,NULL,'2020-11-04','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(56,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,3,NULL,'2020-11-04','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(57,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,1,NULL,'2020-11-03','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(58,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,2,NULL,'2020-11-03','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(59,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,3,NULL,'2020-11-03','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(60,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,1,NULL,'2020-11-02','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(61,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,2,NULL,'2020-11-02','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(62,'2020-11-24 18:00:51','2020-11-24 18:00:51','Có mặt',NULL,3,NULL,'2020-11-02','Đã chấm công',NULL,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL);
/*!40000 ALTER TABLE `check_in` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chi_tiet_hoc_phi`
--

DROP TABLE IF EXISTS `chi_tiet_hoc_phi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chi_tiet_hoc_phi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `khoan_thu_id` bigint(20) unsigned NOT NULL,
  `lich_su_hoc_phi_id` bigint(20) unsigned NOT NULL,
  `dadong` int(11) NOT NULL DEFAULT 0,
  `trangthai` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `chi_tiet_hoc_phi_khoan_thu_id_foreign` (`khoan_thu_id`),
  KEY `chi_tiet_hoc_phi_lich_su_hoc_phi_id_foreign` (`lich_su_hoc_phi_id`),
  CONSTRAINT `chi_tiet_hoc_phi_khoan_thu_id_foreign` FOREIGN KEY (`khoan_thu_id`) REFERENCES `khoan_thu` (`id`) ON DELETE CASCADE,
  CONSTRAINT `chi_tiet_hoc_phi_lich_su_hoc_phi_id_foreign` FOREIGN KEY (`lich_su_hoc_phi_id`) REFERENCES `lich_su_hoc_phi` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chi_tiet_hoc_phi`
--

LOCK TABLES `chi_tiet_hoc_phi` WRITE;
/*!40000 ALTER TABLE `chi_tiet_hoc_phi` DISABLE KEYS */;
/*!40000 ALTER TABLE `chi_tiet_hoc_phi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chuc_vu`
--

DROP TABLE IF EXISTS `chuc_vu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chuc_vu` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luongchinh` bigint(20) unsigned NOT NULL,
  `phucap` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chuc_vu`
--

LOCK TABLES `chuc_vu` WRITE;
/*!40000 ALTER TABLE `chuc_vu` DISABLE KEYS */;
INSERT INTO `chuc_vu` VALUES (1,'Nhân viên tư vấn','Nhân viên tư vấn',9000000,2000000,'2020-11-24 11:00:45','2020-11-24 11:00:45',NULL),(2,'Nhân viên vận hành','Nhân viên vận hành hệ thống',12000000,5000000,'2020-11-24 11:00:45','2020-11-24 11:00:45',NULL),(3,'Kế toán','Kế toán',9000000,3000000,'2020-11-24 11:00:45','2020-11-24 11:00:45',NULL),(4,'Quản trị viên','Quản trị viên hệ thống',15000000,6000000,'2020-11-24 11:00:45','2020-11-24 11:00:45',NULL);
/*!40000 ALTER TABLE `chuc_vu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `danh_sach_bai_tap`
--

DROP TABLE IF EXISTS `danh_sach_bai_tap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `danh_sach_bai_tap` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `buoi_hoc_id` bigint(20) unsigned NOT NULL,
  `bai_tap_id` bigint(20) unsigned NOT NULL,
  `hoc_sinh_id` bigint(20) unsigned NOT NULL,
  `trangthai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Chưa hoàn thành',
  `diem` double(8,2) NOT NULL DEFAULT 0.00,
  `nhanxet` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `chon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `danh_sach_bai_tap_buoi_hoc_id_foreign` (`buoi_hoc_id`),
  KEY `danh_sach_bai_tap_bai_tap_id_foreign` (`bai_tap_id`),
  KEY `danh_sach_bai_tap_hoc_sinh_id_foreign` (`hoc_sinh_id`),
  CONSTRAINT `danh_sach_bai_tap_bai_tap_id_foreign` FOREIGN KEY (`bai_tap_id`) REFERENCES `bai_tap` (`id`),
  CONSTRAINT `danh_sach_bai_tap_buoi_hoc_id_foreign` FOREIGN KEY (`buoi_hoc_id`) REFERENCES `buoi_hoc` (`id`),
  CONSTRAINT `danh_sach_bai_tap_hoc_sinh_id_foreign` FOREIGN KEY (`hoc_sinh_id`) REFERENCES `hoc_sinh` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `danh_sach_bai_tap`
--

LOCK TABLES `danh_sach_bai_tap` WRITE;
/*!40000 ALTER TABLE `danh_sach_bai_tap` DISABLE KEYS */;
/*!40000 ALTER TABLE `danh_sach_bai_tap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `diem_danh`
--

DROP TABLE IF EXISTS `diem_danh`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `diem_danh` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ketqua` int(11) NOT NULL DEFAULT 0,
  `ghichu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `hoc_sinh_id` bigint(20) unsigned NOT NULL,
  `buoi_hoc_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `diem_danh_buoi_hoc_id_foreign` (`buoi_hoc_id`),
  KEY `diem_danh_hoc_sinh_id_foreign` (`hoc_sinh_id`),
  CONSTRAINT `diem_danh_buoi_hoc_id_foreign` FOREIGN KEY (`buoi_hoc_id`) REFERENCES `buoi_hoc` (`id`),
  CONSTRAINT `diem_danh_hoc_sinh_id_foreign` FOREIGN KEY (`hoc_sinh_id`) REFERENCES `hoc_sinh` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diem_danh`
--

LOCK TABLES `diem_danh` WRITE;
/*!40000 ALTER TABLE `diem_danh` DISABLE KEYS */;
INSERT INTO `diem_danh` VALUES (1,0,'',1,1,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(2,1,'',2,1,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(3,-1,'',3,1,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(4,0,'',4,1,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(5,0,'',1,2,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(6,0,'',2,2,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(7,0,'',3,2,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(8,0,'',4,2,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(9,0,'',1,3,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(10,0,'',2,3,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(11,0,'',3,3,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(12,0,'',4,3,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(13,0,'',1,4,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(14,0,'',2,4,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(15,0,'',3,4,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL),(16,0,'',4,4,'2020-11-24 11:00:51','2020-11-24 11:00:51',NULL);
/*!40000 ALTER TABLE `diem_danh` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `giao_vien`
--

DROP TABLE IF EXISTS `giao_vien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `giao_vien` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cmnd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hodem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh` datetime NOT NULL,
  `gioitinh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinhtrang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `loai_giao_vien_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `giao_vien_user_id_foreign` (`user_id`),
  CONSTRAINT `giao_vien_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `giao_vien`
--

LOCK TABLES `giao_vien` WRITE;
/*!40000 ALTER TABLE `giao_vien` DISABLE KEYS */;
INSERT INTO `giao_vien` VALUES (1,'0432423489','Nguyễn Văn','Hoan','1980-12-25 00:00:00','Nam','03666959560','vanhoan98.hp@gmail.com','Hải Phòng','Hoạt động',3,1,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(2,'0123456789','Nguyễn Văn','Hòa','1980-12-26 00:00:00','Nam','03666959561','test@gmail.com','Hải Phòng','Hoạt động',8,2,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(3,'0185509911','Nguyễn Văn ','Toàn','1980-12-27 00:00:00','Nam','03666959562','test@gmail.com','Hải Phòng','Hoạt động',36,1,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(4,'0494476611','Phạm Văn','Toản','1980-12-28 00:00:00','Nữ','03666959563','test@gmail.com','Hải Phòng','Hoạt động',37,1,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(5,'0803443311','Hoàng Thi','Thảo','1980-12-29 00:00:00','Nam','03666959564','test@gmail.com','Hải Phòng','Hoạt động',38,2,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(6,'1112410011','Hoàng Văn','Phong','1980-12-29 00:00:00','Nam','03666959565','test@gmail.com','Hải Phòng','Hoạt động',39,1,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(7,'1421376711','Nguyễn Văn','Hiếu','1980-12-29 00:00:00','Nam','03666959566','test@gmail.com','Hải Phòng','Hoạt động',40,1,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(8,'2564623885','Nguyễn Văn','Cường','1980-12-29 00:00:00','Nam','03666959567','test@gmail.com','Hải Phòng','Hoạt động',41,2,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(9,'2255657185','Nguyễn Văn','Thành','1980-12-29 00:00:00','Nam','03666959568','test@gmail.com','Hải Phòng','Hoạt động',42,1,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(10,'1946690485','Nguyễn Văn','Đạt','1980-12-29 00:00:00','Nam','03666959569','test@gmail.com','Hải Phòng','Hoạt động',43,1,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(11,'1637723785','Nguyễn Văn','Linh','1980-12-29 00:00:00','Nam','03666959570','test@gmail.com','Hải Phòng','Hoạt động',44,2,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(12,'1328757085','Nguyễn Văn','Dương','1980-12-29 00:00:00','Nam','03666959571','test@gmail.com','Hải Phòng','Hoạt động',45,1,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(13,'1019790385','Nguyễn Văn','Đức','1980-12-29 00:00:00','Nam','03666959572','test@gmail.com','Hải Phòng','Hoạt động',46,1,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(14,'0710823685','Nguyễn Văn','Phong','1980-12-29 00:00:00','Nam','03666959573','test@gmail.com','Hải Phòng','Hoạt động',47,2,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(15,'0401856985','Nguyễn Văn','Thinh','1980-12-29 00:00:00','Nam','03666959574','test@gmail.com','Hải Phòng','Hoạt động',48,1,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(16,'0092890285','Nguyễn Văn','Tài','1980-12-29 00:00:00','Nam','03666959575','test@gmail.com','Hải Phòng','Hoạt động',49,1,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(17,'0216076415','Nguyễn Văn','Thắng','1980-12-29 00:00:00','Nam','03666959576','test@gmail.com','Hải Phòng','Hoạt động',50,2,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL);
/*!40000 ALTER TABLE `giao_vien` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hinh_anh_khoa_hoc`
--

DROP TABLE IF EXISTS `hinh_anh_khoa_hoc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hinh_anh_khoa_hoc` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `duongdan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `khoa_hoc_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hinh_anh_khoa_hoc_khoa_hoc_id_foreign` (`khoa_hoc_id`),
  CONSTRAINT `hinh_anh_khoa_hoc_khoa_hoc_id_foreign` FOREIGN KEY (`khoa_hoc_id`) REFERENCES `khoa_hoc` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hinh_anh_khoa_hoc`
--

LOCK TABLES `hinh_anh_khoa_hoc` WRITE;
/*!40000 ALTER TABLE `hinh_anh_khoa_hoc` DISABLE KEYS */;
INSERT INTO `hinh_anh_khoa_hoc` VALUES (1,'hinhanhkhoahoc/mncn_1.jpg',1,'2020-11-24 11:00:47','2020-11-24 11:00:47',NULL),(2,'hinhanhkhoahoc/mncn_2.jpg',1,'2020-11-24 11:00:47','2020-11-24 11:00:47',NULL),(3,'hinhanhkhoahoc/mncn_3.jpg',1,'2020-11-24 11:00:47','2020-11-24 11:00:47',NULL),(4,'hinhanhkhoahoc/belamgame_1.jpg',2,'2020-11-24 11:00:47','2020-11-24 11:00:47',NULL),(5,'hinhanhkhoahoc/belamgame_2.jpg',2,'2020-11-24 11:00:47','2020-11-24 11:00:47',NULL),(6,'hinhanhkhoahoc/belamgame_3.jpg',2,'2020-11-24 11:00:47','2020-11-24 11:00:47',NULL);
/*!40000 ALTER TABLE `hinh_anh_khoa_hoc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hoc_cu`
--

DROP TABLE IF EXISTS `hoc_cu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hoc_cu` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `hinhanhthietbi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenthietbi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lop_hoc_id` bigint(20) unsigned NOT NULL,
  `kho_hoc_cu_id` bigint(20) unsigned NOT NULL,
  `soluong` int(10) unsigned NOT NULL,
  `trangthai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hoc_cu_lop_hoc_id_foreign` (`lop_hoc_id`),
  KEY `hoc_cu_kho_hoc_cu_id_foreign` (`kho_hoc_cu_id`),
  CONSTRAINT `hoc_cu_kho_hoc_cu_id_foreign` FOREIGN KEY (`kho_hoc_cu_id`) REFERENCES `kho_hoc_cu` (`id`),
  CONSTRAINT `hoc_cu_lop_hoc_id_foreign` FOREIGN KEY (`lop_hoc_id`) REFERENCES `lop_hoc` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hoc_cu`
--

LOCK TABLES `hoc_cu` WRITE;
/*!40000 ALTER TABLE `hoc_cu` DISABLE KEYS */;
INSERT INTO `hoc_cu` VALUES (1,'anh/hoccu/1.png','Bộ thực hành lắp ghép robo',1,1,3,'Đầy đủ','2020-11-24 11:00:48','2020-11-24 11:00:48',NULL),(2,'anh/hoccu/2.png','Kit thực hành',1,1,3,'Đầy đủ','2020-11-24 11:00:48','2020-11-24 11:00:48',NULL),(3,'anh/hoccu/3.png','Laptop thực hành',2,1,2,'Đầy đủ','2020-11-24 11:00:48','2020-11-24 11:00:48',NULL);
/*!40000 ALTER TABLE `hoc_cu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hoc_phi`
--

DROP TABLE IF EXISTS `hoc_phi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hoc_phi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `canthu` bigint(20) unsigned NOT NULL DEFAULT 0,
  `dadong` bigint(20) unsigned NOT NULL DEFAULT 0,
  `conno` bigint(20) unsigned NOT NULL DEFAULT 0,
  `trangthai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Đã hoàn thành',
  `hoc_sinh_id` bigint(20) unsigned NOT NULL,
  `deadline` datetime NOT NULL DEFAULT '2020-12-24 17:41:13',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hoc_phi_hoc_sinh_id_foreign` (`hoc_sinh_id`),
  CONSTRAINT `hoc_phi_hoc_sinh_id_foreign` FOREIGN KEY (`hoc_sinh_id`) REFERENCES `hoc_sinh` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hoc_phi`
--

LOCK TABLES `hoc_phi` WRITE;
/*!40000 ALTER TABLE `hoc_phi` DISABLE KEYS */;
INSERT INTO `hoc_phi` VALUES (1,0,0,0,'Đã hoàn thành',1,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(2,0,0,0,'Đã hoàn thành',2,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(3,0,0,0,'Đã hoàn thành',3,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(4,0,0,0,'Đã hoàn thành',4,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(5,0,0,0,'Đã hoàn thành',5,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(6,0,0,0,'Đã hoàn thành',6,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(7,0,0,0,'Đã hoàn thành',7,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(8,0,0,0,'Đã hoàn thành',8,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(9,0,0,0,'Đã hoàn thành',9,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(10,0,0,0,'Đã hoàn thành',10,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(11,0,0,0,'Đã hoàn thành',11,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(12,0,0,0,'Đã hoàn thành',12,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(13,0,0,0,'Đã hoàn thành',13,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(14,0,0,0,'Đã hoàn thành',14,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(15,0,0,0,'Đã hoàn thành',15,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(16,0,0,0,'Đã hoàn thành',16,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(17,0,0,0,'Đã hoàn thành',17,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(18,0,0,0,'Đã hoàn thành',18,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(19,0,0,0,'Đã hoàn thành',19,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(20,0,0,0,'Đã hoàn thành',20,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(21,0,0,0,'Đã hoàn thành',21,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(22,0,0,0,'Đã hoàn thành',22,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(23,0,0,0,'Đã hoàn thành',23,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(24,0,0,0,'Đã hoàn thành',24,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(25,0,0,0,'Đã hoàn thành',25,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(26,0,0,0,'Đã hoàn thành',26,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(27,0,0,0,'Đã hoàn thành',27,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(28,0,0,0,'Đã hoàn thành',28,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(29,0,0,0,'Đã hoàn thành',29,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(30,0,0,0,'Đã hoàn thành',30,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(31,0,0,0,'Đã hoàn thành',31,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(32,0,0,0,'Đã hoàn thành',32,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(33,0,0,0,'Đã hoàn thành',33,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(34,0,0,0,'Đã hoàn thành',34,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(35,0,0,0,'Đã hoàn thành',35,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(36,0,0,0,'Đã hoàn thành',36,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(37,0,0,0,'Đã hoàn thành',37,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(38,0,0,0,'Đã hoàn thành',38,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(39,0,0,0,'Đã hoàn thành',39,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(40,0,0,0,'Đã hoàn thành',40,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(41,0,0,0,'Đã hoàn thành',41,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(42,0,0,0,'Đã hoàn thành',42,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(43,0,0,0,'Đã hoàn thành',43,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(44,0,0,0,'Đã hoàn thành',44,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(45,0,0,0,'Đã hoàn thành',45,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(46,0,0,0,'Đã hoàn thành',46,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(47,0,0,0,'Đã hoàn thành',47,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(48,0,0,0,'Đã hoàn thành',48,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(49,0,0,0,'Đã hoàn thành',49,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(50,0,0,0,'Đã hoàn thành',50,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(51,0,0,0,'Đã hoàn thành',51,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(52,0,0,0,'Đã hoàn thành',52,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(53,0,0,0,'Đã hoàn thành',53,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(54,0,0,0,'Đã hoàn thành',54,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(55,0,0,0,'Đã hoàn thành',55,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(56,0,0,0,'Đã hoàn thành',56,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(57,0,0,0,'Đã hoàn thành',57,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(58,0,0,0,'Đã hoàn thành',58,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(59,0,0,0,'Đã hoàn thành',59,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(60,0,0,0,'Đã hoàn thành',60,'2020-12-24 17:41:13','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL);
/*!40000 ALTER TABLE `hoc_phi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hoc_sinh`
--

DROP TABLE IF EXISTS `hoc_sinh`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hoc_sinh` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `hodem` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `gioitinh` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trangthai` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cmnd` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotenchame` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sodienthoai` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hoc_sinh_user_id_foreign` (`user_id`),
  CONSTRAINT `hoc_sinh_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hoc_sinh`
--

LOCK TABLES `hoc_sinh` WRITE;
/*!40000 ALTER TABLE `hoc_sinh` DISABLE KEYS */;
INSERT INTO `hoc_sinh` VALUES (1,'Nguyễn Kim','Anh','1998-01-11','Nữ','Chính thức','031444322','Lê Nguyễn Hồng An','TesT@gmaul.com','0362081139','Hải Phòng',6,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(2,'Đặng Gia ','Bảo','2009-02-10','Nam','Chính thức','031444323','Nguyễn Võ Khánh An','TesT@gmaul.com','0397515779','Hải Phòng',7,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(3,'Nguyễn Gia ','Bảo','2009-02-24','Nam','Chính thức','031444324','Nguyễn Trường Thiên Ân','TesT@gmaul.com','0338047437','Hải Phòng',9,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(4,'Nguyễn Hoàng ','Đại','2009-08-24','Nam','Chính thức','031444325','Nguyễn Tống Gia Bảo','TesT@gmaul.com','0778857332','Hải Phòng',10,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(5,'Phùng Bá ','Đại','2009-01-12','Nam','Học thử','031444326','Trần Bảo Châu','TesT@gmaul.com','0377642878','Hải Phòng',11,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(6,'Lưu Phương ','Đông','2009-07-07','Nam','Chính thức','031444327','Nguyễn Thị Yến Chi','TesT@gmaul.com','0937762890','Hải Phòng',12,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(7,'Phan Nguyễn Khánh ','Giang','2009-07-08','Nữ','Chính thức','031444328','Trần Ngọc Thương Dịu','TesT@gmaul.com','0794950150','Hải Phòng',13,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(8,'Bùi Thị Ngọc ','Giàu','2009-07-09','Nữ','Chính thức','031444329','Nguyễn Quốc Duy','TesT@gmaul.com','0328371836','Hải Phòng',14,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(9,'Võ Minh ','Hạnh','2009-07-10','Nam','Chính thức','031444330','Phạm Hà Khánh Duy','TesT@gmaul.com','0903532486','Hải Phòng',15,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(10,'Bùi Xuân ','Hòa','2009-07-11','Nam','Chính thức','031444331','Nguyễn Thái Dương','TesT@gmaul.com','0987655823','Hải Phòng',16,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(11,'Nguyễn Nhật ','Huy','2009-07-12','Nam','Chính thức','031444332','Đặng Phước Đông','TesT@gmaul.com','0909740563','Hải Phòng',17,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(12,'Nguyễn Ngọc Diễm ','Hương','2009-07-13','Nữ','Học thử','031444333','Đặng Nguyễn Khánh Hà','TesT@gmaul.com','0343096782','Hải Phòng',18,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(13,'Trần Huỳnh Mai ','Hương','2009-07-14','Nữ','Chính thức','031444334','Lê Nguyễn Ngọc Hân','TesT@gmaul.com','0365765935','Hải Phòng',19,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(14,'Lê Trung ','Kiên','2009-07-15','Nam','Chính thức','031444335','Nguyễn Gia Huy','TesT@gmaul.com','0902700593','Hải Phòng',20,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(15,'Châu Gia ','Kiệt','2009-07-16','Nam','Chính thức','031444336','Trần Lâm Anh Khoa','TesT@gmaul.com','0944885514','Hải Phòng',21,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(16,'Trần Thị Mỹ ','Linh','2009-07-17','Nữ','Chính thức','031444337','Tạ Đình Khôi','TesT@gmaul.com','0764479676','Hải Phòng',22,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(17,'Huỳnh Thanh ','Mai','2009-07-18','Nữ','Chính thức','031444338','Hoàng Tú Lam','TesT@gmaul.com','0707257818','Hải Phòng',23,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(18,'Sa Thị Tuyết ','My','2009-07-19','Nữ','Chính thức','031444339','Hồ Thị Khánh Linh','TesT@gmaul.com','0366033641','Hải Phòng',24,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(19,'Phạm Thanh ','Nga','2009-07-20','Nữ','Chính thức','031444340','Nguyễn Huỳnh Kim Ngân','TesT@gmaul.com','0909405049','Hải Phòng',25,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(20,'Nguyễn Thị Mỹ ','Ngọc','2009-07-21','Nữ','Chính thức','031444341','Nguyễn Trần Thanh Ngân','TesT@gmaul.com','0973138391','Hải Phòng',26,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(21,'Đỗ Vũ ','Nguyên','2009-07-22','Nam','Chính thức','031444342','Tô Huỳnh Hồng Ngân','TesT@gmaul.com','0938483941','Hải Phòng',27,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(22,'Lương Thị Yến ','Nhi','2009-07-23','Nữ','Chính thức','031444343','Bùi Ngọc Minh Nghi','TesT@gmaul.com','0938418067','Hải Phòng',28,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(23,'Nguyễn Thị Thu ','Nhi','2009-07-24','Nữ','Chính thức','031444344','Lê Quỳnh Phương Nghi','TesT@gmaul.com','0358063923','Hải Phòng',29,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(24,'Võ Ngọc Yến ','Nhi','2009-07-25','Nữ','Chính thức','031444345','Nguyễn Ngọc Hạnh Nguyên','TesT@gmaul.com','0902489120','Hải Phòng',30,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(25,'Phạm Quang','Anh','2009-07-25','Nam','Chính thức','031444346','Chu Thị Mai Anh','TesT@gmaul.com','0902489121','Hải Phòng',31,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(26,'Nguyễn Đình','Chiến','2009-07-25','Nam','Chính thức','031444347','Phạm Lương Bằng','TesT@gmaul.com','0902489122','Hải Phòng',32,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(27,'Nguyễn Đức','Đại','2009-07-25','Nam','Chính thức','031444348','Bùi Thị Chang','TesT@gmaul.com','0902489123','Hải Phòng',33,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(28,'Vũ Hoàng','Đạo','2009-07-25','Nam','Chính thức','031444349','Nguyễn Thị Minh Chi','TesT@gmaul.com','0902489124','Hải Phòng',34,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(29,'Bùi Đức','Đạt','2009-07-25','Nam','Chính thức','031444350','Phạm Quang Cường','TesT@gmaul.com','0902489125','Hải Phòng',35,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(30,'Phạm Công Phúc','Đạt','2009-07-25','Nam','Chính thức','031444351','Đào Văn Dũng','TesT@gmaul.com','0902489126','Hải Phòng',36,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(31,'Phạm Văn','Đạt','2009-07-25','Nam','Chính thức','031444352','Hoàng Đức Dũng','TesT@gmaul.com','0902489127','Hải Phòng',37,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(32,'Nguyễn Bỉnh','Đô','2009-07-25','Nam','Chính thức','031444353','Nguyễn Quang Dũng','TesT@gmaul.com','0902489128','Hải Phòng',38,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(33,'Nguyễn Trung','Đức','2009-07-25','Nam','Chính thức','031444354','Dư Đình Dương','TesT@gmaul.com','0902489129','Hải Phòng',39,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(34,'Trần Quang','Hiếu','2009-07-25','Nam','Chính thức','031444355','Ninh Hải Dương','TesT@gmaul.com','0902489130','Hải Phòng',40,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(35,'Phạm Việt','Hoàng','2009-07-25','Nam','Chính thức','031444356','Nguyễn Thị Duyên','TesT@gmaul.com','0902489131','Hải Phòng',41,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(36,'Lương Xuân','Hưng','2009-07-25','Nam','Chính thức','031444357','Lưu Quốc Đạt','TesT@gmaul.com','0902489132','Hải Phòng',42,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(37,'Triệu Đình','Huy','2009-07-25','Nam','Chính thức','031444358','Đặng Lợi Đức','TesT@gmaul.com','0902489133','Hải Phòng',43,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(38,'Lê Đình','Lưu','2009-07-25','Nam','Chính thức','031444359','Hoàng Thị Giang','TesT@gmaul.com','0902489134','Hải Phòng',44,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(39,'Vũ Hiền','My','2009-07-25','Nữ','Chính thức','031444360','Phạm Trường Giang','TesT@gmaul.com','0902489135','Hải Phòng',45,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(40,'Phạm Phương','Nam','2009-07-25','Nam','Chính thức','031444361','Ngô Thanh Hải','TesT@gmaul.com','0902489136','Hải Phòng',46,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(41,'Lê Đức','Nghĩa','2009-07-25','Nam','Chính thức','031444362','Nguyễn Hoàng Hải','TesT@gmaul.com','0902489137','Hải Phòng',47,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(42,'Trần Thành','Nghĩa','2009-07-25','Nam','Chính thức','031444363','Phạm Nguyễn Thanh Hải','TesT@gmaul.com','0902489138','Hải Phòng',48,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(43,'Lương Văn','Ngọc','2009-07-25','Nam','Chính thức','031444364','Vũ Thị Minh Hằng','TesT@gmaul.com','0902489139','Hải Phòng',49,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(44,'Phạm Minh','Ngọc','2009-07-25','Nam','Chính thức','031444365','Nguyễn Thị Thảo Hiền','TesT@gmaul.com','0902489140','Hải Phòng',50,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(45,'Hoàng Việt','Nguyên','2009-07-25','Nam','Chính thức','031444366','Đàm Văn Tuấn Hiệp','TesT@gmaul.com','0902489141','Hải Phòng',51,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(46,'Nguyễn Đăng','Nguyên','2009-07-25','Nam','Chính thức','031444367','Đỗ Hoàng Hiệp','TesT@gmaul.com','0902489142','Hải Phòng',52,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(47,'Nguyễn Thế','Phong','2009-07-25','Nam','Chính thức','031444368','Đỗ Minh Hiếu','TesT@gmaul.com','0902489143','Hải Phòng',53,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(48,'Vũ Chiến','Thắng','2009-07-25','Nam','Chính thức','031444369','Hoàng Minh Hiếu','TesT@gmaul.com','0902489144','Hải Phòng',54,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(49,'Nguyễn Tiến','Thành','2009-07-25','Nam','Chính thức','031444370','Lã Đắc Hiếu','TesT@gmaul.com','0902489145','Hải Phòng',55,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(50,'Cao Bá','Thiên','2009-07-25','Nam','Chính thức','031444371','Phạm Minh Hiếu','TesT@gmaul.com','0902489146','Hải Phòng',56,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(51,'Lê Thành','Trung','2009-07-25','Nam','Chính thức','031444372','Vũ Thế Hoài','TesT@gmaul.com','0902489147','Hải Phòng',57,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(52,'Nguyễn Thành','Trung','2009-07-25','Nam','Chính thức','031444373','Nguyễn Văn Hoan','TesT@gmaul.com','0902489148','Hải Phòng',58,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(53,'Bùi Văn','Trường','2009-07-25','Nam','Chính thức','031444374','Đoàn Đức Hoàng','TesT@gmaul.com','0902489149','Hải Phòng',59,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(54,'Nguyễn Xuân','Trường','2009-07-25','Nam','Chính thức','031444375','Vũ Minh Hoàng','TesT@gmaul.com','0902489150','Hải Phòng',60,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(55,'Lương Anh','Tuấn','2009-07-25','Nam','Chính thức','031444376','Lê Thị Minh Hoạt','TesT@gmaul.com','0902489151','Hải Phòng',61,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(56,'Phan Công','Tuấn','2009-07-25','Nam','Chính thức','031444377','Trần Thị Hồng','TesT@gmaul.com','0902489152','Hải Phòng',62,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(57,'Đồng Đức','Tuệ','2009-07-25','Nam','Chính thức','031444378','Nguyễn Việt Hưng','TesT@gmaul.com','0902489153','Hải Phòng',63,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(58,'Nguyễn Tự','Tùng','2009-07-25','Nam','Chính thức','031444379','Lê Đức Huy','TesT@gmaul.com','0902489154','Hải Phòng',64,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(59,'Nguyễn Đức','Việt','2009-07-25','Nam','Chính thức','031444380','Nguyễn Quang Huy','TesT@gmaul.com','0902489155','Hải Phòng',65,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(60,'Dương Xuân','Vũ','2009-07-25','Nam','Chính thức','031444381','Khúc Văn Khánh','TesT@gmaul.com','0902489156','Hải Phòng',66,'2020-11-24 11:00:46','2020-11-24 11:00:46',NULL);
/*!40000 ALTER TABLE `hoc_sinh` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hop_dong`
--

DROP TABLE IF EXISTS `hop_dong`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hop_dong` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ngaytao` datetime NOT NULL,
  `ngayhethan` datetime NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `nhan_vien_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hop_dong_nhan_vien_id_foreign` (`nhan_vien_id`),
  CONSTRAINT `hop_dong_nhan_vien_id_foreign` FOREIGN KEY (`nhan_vien_id`) REFERENCES `nhan_vien` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hop_dong`
--

LOCK TABLES `hop_dong` WRITE;
/*!40000 ALTER TABLE `hop_dong` DISABLE KEYS */;
/*!40000 ALTER TABLE `hop_dong` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `khen_thuong_ky_luat`
--

DROP TABLE IF EXISTS `khen_thuong_ky_luat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `khen_thuong_ky_luat` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ngaytao` datetime NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lydo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sotien` bigint(20) unsigned NOT NULL,
  `ghichu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `loai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nhan_vien_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `khen_thuong_ky_luat_nhan_vien_id_foreign` (`nhan_vien_id`),
  CONSTRAINT `khen_thuong_ky_luat_nhan_vien_id_foreign` FOREIGN KEY (`nhan_vien_id`) REFERENCES `nhan_vien` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `khen_thuong_ky_luat`
--

LOCK TABLES `khen_thuong_ky_luat` WRITE;
/*!40000 ALTER TABLE `khen_thuong_ky_luat` DISABLE KEYS */;
/*!40000 ALTER TABLE `khen_thuong_ky_luat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kho_hoc_cu`
--

DROP TABLE IF EXISTS `kho_hoc_cu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kho_hoc_cu` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tenhoccu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanhhoccu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soluong` bigint(20) NOT NULL,
  `capphat` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kho_hoc_cu`
--

LOCK TABLES `kho_hoc_cu` WRITE;
/*!40000 ALTER TABLE `kho_hoc_cu` DISABLE KEYS */;
INSERT INTO `kho_hoc_cu` VALUES (1,'Bộ thực hành lắp ghép robo','anh/hoccu/2.png',30,3,'2020-11-24 11:00:48','2020-11-24 11:00:48',NULL),(2,'Kit thực hành','anh/hoccu/1.png',100,0,'2020-11-24 11:00:48','2020-11-24 11:00:48',NULL),(3,'Laptop thực hành','anh/hoccu/4.png',20,0,'2020-11-24 11:00:48','2020-11-24 11:00:48',NULL);
/*!40000 ALTER TABLE `kho_hoc_cu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `khoa_hoc`
--

DROP TABLE IF EXISTS `khoa_hoc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `khoa_hoc` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tenkhoahoc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dotuoi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sisotoida` int(10) unsigned NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dieukienhoc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hocphi` bigint(20) NOT NULL,
  `loai_khoa_hoc_id` bigint(20) unsigned NOT NULL,
  `level_id` bigint(20) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `khoa_hoc_loai_khoa_hoc_id_foreign` (`loai_khoa_hoc_id`),
  KEY `khoa_hoc_level_id_foreign` (`level_id`),
  CONSTRAINT `khoa_hoc_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `level` (`id`),
  CONSTRAINT `khoa_hoc_loai_khoa_hoc_id_foreign` FOREIGN KEY (`loai_khoa_hoc_id`) REFERENCES `loai_khoa_hoc` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `khoa_hoc`
--

LOCK TABLES `khoa_hoc` WRITE;
/*!40000 ALTER TABLE `khoa_hoc` DISABLE KEYS */;
INSERT INTO `khoa_hoc` VALUES (1,'MẦM NON CÔNG NGHỆ – LẬP TRÌNH VỚI SCRATCHJR','5-7 tuổi',16,'Ươm mầm phát triển tư duy logic và sáng tạo trong thời đại số từ 4 tuổi với ngôn ngữ Lập trình Scratch Jr, Robot Uaro, Công nghệ 3D Maker Empire','Trong khóa học này, các bạn nhỏ được tiếp cận làm quen với những công nghệ mới nhất của thời đại 4.0, đã có thể tự thiết kế một trò chơi trên máy tính hay chế tạo, điều khiển một chú robot thông qua những công cụ vô cùng hấp dẫn:\n    Ngôn ngữ Scratch Jr là ngôn ngữ lập trình kéo thả trực quan, với thiết kế sinh động, dễ dàng sử dụng và ghi nhớ. Thông qua việc thiết kế và lập trình các nhân vật phim hoạt hình vui nhộn, tạo ra các trò chơi hấp dẫn các bạn nhỏ sẽ bước đầu tiếp cận với khái niệm lập trình, rèn luyện tư duy logic, kỹ năng thiết kế và tư duy giải quyết vấn đề.\n    ','Không',80000,1,1,NULL,'2020-11-24 11:00:47','2020-11-24 11:00:47'),(2,'BÉ LÀM GAME – CẤP 1','7 - 10 tuổi',16,'Xây dựng đam mê, tạo nền tảng kiến thức Công nghệ; Sử dụng giáo trình xuất sắc tại Mỹ với 50 triệu học sinh & 60,000 trường học trên toàn cầu','Be làm Game giúp học sinh tiếp cận, làm quen và phát triển tư duy - khả năng lập trình thông qua chuỗi các môn học - các công cụ coding vô cùng thú vị:\nLập trình Game 2D với Scratch: Đây là ngôn ngữ lập trình trẻ em phổ biến nhất thế giới, phát triển bởi học viện MIT, Mỹ. Trẻ em tại nhiều quốc gia bắt đầu học lập trình từ 5 tuổi. Công cụ giúp học sinh sáng tạo và phát triển ý tưởng, tăng cường tư duy logic và tiếp cận công nghệ - lập trình một cách tốt nhất. Ngoài ra, học sinh còn được thực hành lập trình trên Robot Truetrue, sản phẩm của Tập đoàn Giáo dục số 1 Hàn Quốc - Sigong Media, phân phối độc quyền bởi Teky.','Không',1000000,1,2,NULL,'2020-11-24 11:00:47','2020-11-24 11:00:47'),(3,'SIÊU NHÂN LẬP TRÌNH WEB – CẤP 2 & CẤP 3','12-18 tuổi',16,'Phát triển tư duy ứng dụng, sáng tạo cá tính và nuôi dưỡng tinh thần doanh nhân công nghệ trong thời đại 4.0; Theo chuẩn Kiến thức Khoa học máy tính CSTA cho K12 của Mỹ','Học sinh sẽ tiếp cận với hoạt động phát triển sản phẩm và ứng dụng công nghệ vào thực tế; ngoài ra học sinh còn được mở rộng các kiến thức liên quan tới khoa học máy tính, bảo mật và hack vốn đang ngày càng trở nên quan trọng hơn trong thế giới công nghệ.\nPython là ngôn ngữ lập trình hướng đối tượng, cấp cao, mạnh mẽ, được sử dụng bởi các công ty công nghệ khổng lồ như Google, Dropbox, Instagram, Quora... nhưng lại vô cùng dễ học. Với cú pháp rất đơn giản, rõ ràng; nó dễ đọc và viết hơn rất nhiều khi so sánh với những ngôn ngữ lập trình khác như C++, Java, C#. Python làm cho việc lập trình trở nên thú vị, cho phép bạn tập trung vào những giải pháp chứ không phải cú pháp. Python đang là xu hướng ngôn ngữ lập trình hàng đầu cho những người mới là','Không cần kiến thức lập trình',1500000,1,3,NULL,'2020-11-24 11:00:47','2020-11-24 11:00:47'),(4,'SIÊU NHÂN LẬP TRÌNH APP – CẤP 2 & CẤP 3','12-18 tuổi',16,'Phát triển tư duy ứng dụng, sáng tạo cá tính và nuôi dưỡng tinh thần doanh nhân công nghệ trong thời đại 4.0; Theo chuẩn Kiến thức Khoa học máy tính CSTA cho K12 của Mỹ','Học sinh sẽ tiếp cận với hoạt động phát triển sản phẩm và ứng dụng công nghệ vào thực tế; ngoài ra học sinh còn được mở rộng các kiến thức liên quan tới khoa học máy tính, bảo mật và hack vốn đang ngày càng trở nên quan trọng hơn trong thế giới công nghệ.\nApp Inventor là một môi trường phát triển tích hợp (IDE) ban đầu được cung cấp bởi Google và hiện được duy trì bởi Viện Công nghệ Massachusetts. Để tạo ra một Ứng dụng di động (Mobile App), bạn không chỉ cần ý tưởng, mà còn cần kiến thức lập trình căn bản cũng như kiến thức sử dụng môi trường phát triển tích hợp để viết lệnh (write code), biên dịch (compile), đóng gói (package), chạy thử (test) hoặc tạo ứng dụng thật (build). Có nhiều môi trường phát triển tích hợp (Integrated Development Envi','Không cần kiến thức lập trình',1500000,1,3,NULL,'2020-11-24 11:00:47','2020-11-24 11:00:47'),(5,'SIÊU NHÂN LẬP TRÌNH GAME 3D & VR VỚI UNITY – CẤP 2 & CẤP 3','11 - 15 tuổi',16,'Giáo trình khoá học chuẩn Mỹ, giảng viên tận tình, nội dung học tập chuyên sâu dài hạn','Khóa học lập trình Game 3D với Unity giúp học sinh khai phá các ý tưởng kịch bản, trò chơi, xây dựng đồ họa, nhân vật, môi trường trong thế giới 2D, 3D và từ đó phân tích, thiết kế, xây dựng và phát triển các game trên đa nền tảng. Ngoài ra học sinh sẽ tìm hiểu các kiến thức lập trình C# căn bản cũng như kiến thức sử dụng môi trường tích hợp để viết lệnh (write code), biên dịch (compile), đóng gói (package), chạy thử (test) hoặc tạo ứng dụng thật (build).','Không cần kiến thức lập trình',1500000,1,2,NULL,'2020-11-24 11:00:47','2020-11-24 11:00:47'),(6,'KHÁM PHÁ ROBOTICS – CẤP 1','7 - 11 tuổi',16,'Giúp con xây dựng đam mê, tạo nền tảng kiến thức Công nghệ 4.0. Chương trình học được ưa chuộng nhất toàn cầu từ LEGO Education. Chương trình đang được áp dụng cho hàng triệu trẻ em trên thế giới.','Học sinh được học LEGO Mindstorms EV3 - chương trình phổ biến với trên 10 triệu bạn nhỏ toàn cầu\n- Với thiết bị và phần mềm LEGO MINDSTORMS Education EV3, học sinh sẽ khám phá 1 chân trời thú vị về robotics và engineering. Cung cấp cho người dùng công cụ mạnh mẽ để thiết kế, lắp ráp và lập trình, đồng thời phát triển kỹ năng 4C thiết yếu như sáng tạo, tư duy phản biện, hợp tác và giao tiếp.\n- Phần mềm LEGO MINDSTORMS Education EV3 là chương trình được phát triển bởi hãng Lego nổi tiếng, chương trình khám phá robot Lego Mindstorm tuân theo tiêu chuẩn đào tạo STEM của Mỹ.','Không',1500000,2,1,NULL,'2020-11-24 11:00:47','2020-11-24 11:00:47'),(7,'XƯỞNG CHẾ TẠO ROBOT – CẤP 2 & CẤP 3','11 - 15 tuổi',16,'Phát triển tư duy ứng dụng công nghệ vào thực tiễn và sáng tạo cá tính; Theo chuẩn kiến thức Kỹ thuật Công nghệ ETS cho K12 của Mỹ','Trình độ sơ cấp:\n- Cung cấp cho học sinh các kiến thức toàn diện về điện, điện tử và tự động hóa. Học sinh có được các kiến thức và thiết kế, xây dựng, sử dụng được các mạch điện, linh kiện điện tử, vi mạch, mạch tích hợp IC; Với bo mạch Arduino và môi trường lập trình mBlock5, Arduino IDE, học sinh sẽ có thể lập trình nên các hệ thống điện tử, hệ thống tự động hóa. Đồng thời kết hợp với việc rèn luyện tư duy lập trình, kỹ năng lập trình 2 ngôn ngữ Scratch (ngôn ngữ lập trình phổ biến nhất dành cho trẻ em) và C/\nTrình độ trung cấp:\n- Cung cấp các kiến thức, công cụ cơ khí, tự động hóa xoay quanh các vấn đề, cấu trúc, máy móc gần gũi với cuộc sống như máy bay, ô tô, .... Điều khiển các hệ thống tự động thông qua Arduino và ứng dụng lập trình trên di động - Android; Sử dụng App Inventor 2 để lập trình nên các ứng dụng kết nối điện thoại và hệ thống điện tử, tự động hóa giúp theo dõi thông số, điều khiển hệ thống; Học viên đủ khả năng tham dự các cuộc thi tin học, cuộc thi khoa học kỹ thuật cấp quốc gia, VIFOTECH, ROBOTACON,\nTrình độ cao cấp:\n- Cung cấp cho học viên các kiến thức về Robot cùng mối liên hệ giữa cấu trúc Robot và cấu tạo các cơ thể sống trong tự nhiên; Giúp học viên có được các kiến thức về các thuật toán điều khiển tự động, thuật toán tìm đường ngắn nhất; Học viên đủ khả năng để xây dựng và lập trình tạo nên các AI Robot mô phỏng hoạt động của con người và của các sinh vật sống trong tự nhiên từ đó giúp đáp ứng và hỗ trợ được trong các nhiệm vụ giao tiếp, phòng vệ, vận chuyển, thăm dò, tương tác với con người, ....','Không',2000000,2,2,NULL,'2020-11-24 11:00:47','2020-11-24 11:00:47'),(8,'THẾ GIỚI VẠN VẬT THÔNG MINH – CẤP 2 & CẤP 3','11-15 tuổi',16,'Phát triển tư duy ứng dụng công nghệ vào thực tiễn và sáng tạo cá tính; Theo chuẩn kiến thức Kỹ thuật Công nghệ ETS cho K12 của Mỹ',' Cung cấp cho học viên nền tảng về khoa học, vật lý, lập trình và điện tử. Thông qua bo mạch Microbit kết hợp với ngôn ngữ lập trình MakeCode, học sinh sẽ hiểu được các kiến thức cơ sở của máy tính, vật lý điện tử, khoa học và lập trình. Bắt đầu từ các khái niệm thông tin, mã nhị phân, kiểu dữ liệu tới biến số, điều kiện, mảng.\n- Ôn luyện và nâng cao các kiến thức khoa học, vật lý điện tử. Thông qua các linh kiện, cảm biến và bo mạch Microbit, học sinh sẽ xây dựng được các hệ thống thí nghiệm, các mạch điều khiển như hệ thống cảm biến nhiệt độ, cảm biến góc nghiêng, ... và ứng dụng của các hệ thống này trong cuộc sống.\nTrình độ trung cấp: Học với C/C++ - 2 ngôn ngữ lập trình phổ biến trong top 10 trên thế giới dành cho người lớn). ','Không',2000000,2,2,NULL,'2020-11-24 11:00:47','2020-11-24 11:00:47');
/*!40000 ALTER TABLE `khoa_hoc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `khoan_thu`
--

DROP TABLE IF EXISTS `khoan_thu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `khoan_thu` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tenkhoanthu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sotien` bigint(20) NOT NULL,
  `hoc_phi_id` bigint(20) unsigned DEFAULT NULL,
  `lop_hoc_id` bigint(20) unsigned DEFAULT NULL,
  `trangthai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `khoan_thu`
--

LOCK TABLES `khoan_thu` WRITE;
/*!40000 ALTER TABLE `khoan_thu` DISABLE KEYS */;
INSERT INTO `khoan_thu` VALUES (1,'Học liệu',200000,1,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(2,'Học liệu',200000,2,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(3,'Học liệu',200000,3,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(4,'Học liệu',200000,4,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(5,'Học liệu',200000,5,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(6,'Học liệu',200000,6,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(7,'Học liệu',200000,7,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(8,'Học liệu',200000,8,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(9,'Học liệu',200000,9,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(10,'Học liệu',200000,10,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(11,'Học liệu',200000,11,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(12,'Học liệu',200000,12,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(13,'Học liệu',200000,13,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(14,'Học liệu',200000,14,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(15,'Học liệu',200000,15,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(16,'Học liệu',200000,16,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(17,'Học liệu',200000,17,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(18,'Học liệu',200000,18,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(19,'Học liệu',200000,19,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(20,'Học liệu',200000,20,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(21,'Học liệu',200000,21,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(22,'Học liệu',200000,22,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(23,'Học liệu',200000,23,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(24,'Học liệu',200000,24,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(25,'Dụng cụ học tập',100000,1,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(26,'Dụng cụ học tập',100000,2,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(27,'Dụng cụ học tập',100000,3,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(28,'Dụng cụ học tập',100000,4,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(29,'Dụng cụ học tập',100000,5,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(30,'Dụng cụ học tập',100000,6,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(31,'Dụng cụ học tập',100000,7,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(32,'Dụng cụ học tập',100000,8,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(33,'Dụng cụ học tập',100000,9,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(34,'Dụng cụ học tập',100000,10,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(35,'Dụng cụ học tập',100000,11,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(36,'Dụng cụ học tập',100000,12,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(37,'Dụng cụ học tập',100000,13,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(38,'Dụng cụ học tập',100000,14,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(39,'Dụng cụ học tập',100000,15,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(40,'Dụng cụ học tập',100000,16,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(41,'Dụng cụ học tập',100000,17,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(42,'Dụng cụ học tập',100000,18,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(43,'Dụng cụ học tập',100000,19,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(44,'Dụng cụ học tập',100000,20,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(45,'Dụng cụ học tập',100000,21,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(46,'Dụng cụ học tập',100000,22,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(47,'Dụng cụ học tập',100000,23,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(48,'Dụng cụ học tập',100000,24,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(49,'Hoạt động ngoại khóa',500000,1,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(50,'Hoạt động ngoại khóa',500000,2,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL),(51,'Hoạt động ngoại khóa',500000,3,NULL,'Chưa đóng','2020-11-24 11:00:52','2020-11-24 11:00:52',NULL);
/*!40000 ALTER TABLE `khoan_thu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `level`
--

DROP TABLE IF EXISTS `level`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `level` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tenlevel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `level`
--

LOCK TABLES `level` WRITE;
/*!40000 ALTER TABLE `level` DISABLE KEYS */;
INSERT INTO `level` VALUES (1,'Sơ cấp','Khóa học dành cho các bé mới bắt đầu tiếp cận','2020-11-24 11:00:47','2020-11-24 11:00:47',NULL),(2,'Trung cấp','Khóa học dành cho các bé đã hoàn thành mức độ sơ cấp','2020-11-24 11:00:47','2020-11-24 11:00:47',NULL),(3,'Cao cấp','Khóa học dành cho các bé đã hoàn thành mức độ trung cấp','2020-11-24 11:00:47','2020-11-24 11:00:47',NULL);
/*!40000 ALTER TABLE `level` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lich_su_hoc_phi`
--

DROP TABLE IF EXISTS `lich_su_hoc_phi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lich_su_hoc_phi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sotiendadong` bigint(20) NOT NULL DEFAULT 0,
  `ngaydong` date NOT NULL,
  `hoc_phi_id` bigint(20) unsigned NOT NULL,
  `nhan_vien_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lich_su_hoc_phi_hoc_phi_id_foreign` (`hoc_phi_id`),
  KEY `lich_su_hoc_phi_nhan_vien_id_foreign` (`nhan_vien_id`),
  CONSTRAINT `lich_su_hoc_phi_hoc_phi_id_foreign` FOREIGN KEY (`hoc_phi_id`) REFERENCES `hoc_phi` (`id`),
  CONSTRAINT `lich_su_hoc_phi_nhan_vien_id_foreign` FOREIGN KEY (`nhan_vien_id`) REFERENCES `nhan_vien` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lich_su_hoc_phi`
--

LOCK TABLES `lich_su_hoc_phi` WRITE;
/*!40000 ALTER TABLE `lich_su_hoc_phi` DISABLE KEYS */;
/*!40000 ALTER TABLE `lich_su_hoc_phi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lich_trai_nghiem`
--

DROP TABLE IF EXISTS `lich_trai_nghiem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lich_trai_nghiem` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `thoigian` datetime NOT NULL,
  `trangthai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ketqua` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `hoc_sinh_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lich_trai_nghiem_hoc_sinh_id_foreign` (`hoc_sinh_id`),
  CONSTRAINT `lich_trai_nghiem_hoc_sinh_id_foreign` FOREIGN KEY (`hoc_sinh_id`) REFERENCES `hoc_sinh` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lich_trai_nghiem`
--

LOCK TABLES `lich_trai_nghiem` WRITE;
/*!40000 ALTER TABLE `lich_trai_nghiem` DISABLE KEYS */;
/*!40000 ALTER TABLE `lich_trai_nghiem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loai_giao_vien`
--

DROP TABLE IF EXISTS `loai_giao_vien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `loai_giao_vien` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tenloaigiaovien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sotienmotgio` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loai_giao_vien`
--

LOCK TABLES `loai_giao_vien` WRITE;
/*!40000 ALTER TABLE `loai_giao_vien` DISABLE KEYS */;
INSERT INTO `loai_giao_vien` VALUES (1,'Giáo viên cơ hữu','Giáo viên đã làm việc lâu năm, gắn bó với trung tâm',150000,'2020-11-24 11:00:45','2020-11-24 11:00:45',NULL),(2,'Giáo viên cộng tác','Giáo viên được trung tâm thuê ngoài theo hợp đồng',100000,'2020-11-24 11:00:45','2020-11-24 11:00:45',NULL);
/*!40000 ALTER TABLE `loai_giao_vien` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loai_khoa_hoc`
--

DROP TABLE IF EXISTS `loai_khoa_hoc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `loai_khoa_hoc` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tenloaikhoahoc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loai_khoa_hoc`
--

LOCK TABLES `loai_khoa_hoc` WRITE;
/*!40000 ALTER TABLE `loai_khoa_hoc` DISABLE KEYS */;
INSERT INTO `loai_khoa_hoc` VALUES (1,'Lập trình & Phát triển ứng dụng ','Scratch Jr là ngôn ngữ lập trình kéo thả trực quan dành cho độ tuổi 4-5 để làm quen với tư duy lập trình, chủ yếu giúp phát triển sự sáng tạo, tư duy logic của trẻ em qua việc tạo ra các sản phẩm, câu chuyện và trò chơi của chính mình.','2020-11-24 11:00:47','2020-11-24 11:00:47',NULL),(2,'Robot & Điện tử tự động','Khoá học này đưa học sinh tiến sâu hơn vào chủ đề Robotics, logics lập trình và thiết kế kiến trúc với Lego Education Wedo. Các em sẽ từng bước dùng các mảnh ghép Lego thực hành với ròng rọc, động cơ, các loại cảm ứng để tạo nên các robot là các nhân vật.','2020-11-24 11:00:47','2020-11-24 11:00:47',NULL),(3,'3D & Truyền thông đa phương tiện','Khoá học dựng hình, vẽ và in 3D được thiết kế từ trình độ sơ cấp tới nâng cao cho học sinh độ tuổi 7-10. Đây là lựa chọn hoàn hảo cho những học sinh thích hoạt động sáng tạo và muốn tạo ra từ các mô hình thực tế, thông qua sử dụng phần mềm.','2020-11-24 11:00:47','2020-11-24 11:00:47',NULL),(4,'Khoá học Online','Học Online với giáo viên giàu kinh nghiệm, trên nền tảng công nghệ ưu việt, tương tác đa chiều, trải nghiệm thú vị, thuận tiện học tập.','2020-11-24 11:00:47','2020-11-24 11:00:47',NULL);
/*!40000 ALTER TABLE `loai_khoa_hoc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lop_hoc`
--

DROP TABLE IF EXISTS `lop_hoc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lop_hoc` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tenlop` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siso` int(10) unsigned NOT NULL DEFAULT 0,
  `trangthai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaybatdau` datetime NOT NULL DEFAULT current_timestamp(),
  `ngayketthuc` datetime DEFAULT NULL,
  `sobuoi` int(10) unsigned NOT NULL DEFAULT 10,
  `sobuoidahoc` int(10) unsigned NOT NULL DEFAULT 0,
  `ghichu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `khoa_hoc_id` bigint(20) unsigned NOT NULL,
  `giao_vien_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lop_hoc_khoa_hoc_id_foreign` (`khoa_hoc_id`),
  KEY `lop_hoc_giao_vien_id_foreign` (`giao_vien_id`),
  CONSTRAINT `lop_hoc_giao_vien_id_foreign` FOREIGN KEY (`giao_vien_id`) REFERENCES `giao_vien` (`id`),
  CONSTRAINT `lop_hoc_khoa_hoc_id_foreign` FOREIGN KEY (`khoa_hoc_id`) REFERENCES `khoa_hoc` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lop_hoc`
--

LOCK TABLES `lop_hoc` WRITE;
/*!40000 ALTER TABLE `lop_hoc` DISABLE KEYS */;
INSERT INTO `lop_hoc` VALUES (1,'HP-XCTRB-0001',4,'Đang hoạt động','2020-10-07 00:00:00','2020-12-16 00:00:00',10,6,'',7,1,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(2,'HP-TGVV-0001',0,'Đã kết thúc','2020-06-08 00:00:00','2020-08-17 00:00:00',10,10,'',8,2,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(3,'MNCN-LTVS-1/10/2020',4,'Đang hoạt động','2020-10-01 00:00:00','2020-12-10 00:00:00',10,7,'',1,3,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(4,'MNCN-LTVS-1/11/2020',3,'Đang hoạt động','2020-11-01 00:00:00','2021-01-10 00:00:00',10,3,'',1,4,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(5,'MNCN-LTVS-5/10/2020',3,'Đang hoạt động','2020-10-05 00:00:00','2020-12-14 00:00:00',10,7,'',1,5,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(6,'MNCN-LTVS-17/10/2020',3,'Đang hoạt động','2020-10-17 00:00:00','2020-12-26 00:00:00',10,5,'',1,7,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(7,'BLG-C1-6/11/2020',0,'Đang hoạt động','2020-11-06 00:00:00','2021-01-15 00:00:00',10,2,'',2,9,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(8,'BLG-C1-13/10/2020',0,'Đang hoạt động','2020-11-13 00:00:00','2021-01-22 00:00:00',10,1,'',2,10,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(9,'BLG-C1-28/10/2020',0,'Đang hoạt động','2020-10-28 00:00:00','2021-01-06 00:00:00',10,3,'',2,11,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(10,'BLG-C1-10/11/2020',0,'Đang hoạt động','2020-11-10 00:00:00','2021-01-19 00:00:00',10,2,'',2,12,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(11,'BLG-C1-11/11/2020',0,'Đang hoạt động','2020-11-11 00:00:00','2021-01-20 00:00:00',10,1,'',2,13,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(12,'SNLTW-C2-8/10/2020',0,'Đang hoạt động','2020-10-08 00:00:00','2020-12-17 00:00:00',10,6,'',3,14,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(13,'SNLTW-C2-12/10/2020',0,'Đang hoạt động','2020-10-12 00:00:00','2020-12-21 00:00:00',10,6,'',3,15,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(14,'SNLTW-C2-16/10/2020',0,'Đang hoạt động','2020-10-16 00:00:00','2020-12-25 00:00:00',10,5,'',3,16,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(15,'SNLTW-C2-21/10/2020',0,'Đang hoạt động','2020-10-21 00:00:00','2020-12-30 00:00:00',10,4,'',3,17,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(16,'SNLTW-C2-25/10/2020',0,'Đang hoạt động','2020-10-25 00:00:00','2021-01-03 00:00:00',10,4,'',3,17,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL);
/*!40000 ALTER TABLE `lop_hoc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `luong`
--

DROP TABLE IF EXISTS `luong`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `luong` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `thang` date NOT NULL,
  `cong` bigint(20) unsigned NOT NULL,
  `tongphucap` bigint(20) unsigned DEFAULT NULL,
  `tongluong` bigint(20) unsigned DEFAULT NULL,
  `bhxh` bigint(20) unsigned DEFAULT NULL,
  `bhyt` bigint(20) unsigned DEFAULT NULL,
  `tongkhautru` bigint(20) unsigned DEFAULT NULL,
  `thuclinh` bigint(20) NOT NULL,
  `trangthai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nhan_vien_id` bigint(20) unsigned DEFAULT NULL,
  `giao_vien_id` bigint(20) unsigned DEFAULT NULL,
  `doituong` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `luong`
--

LOCK TABLES `luong` WRITE;
/*!40000 ALTER TABLE `luong` DISABLE KEYS */;
/*!40000 ALTER TABLE `luong` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `from` bigint(20) unsigned NOT NULL,
  `to` bigint(20) unsigned NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_read` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1520 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (650,'2014_10_12_000000_create_role_groups_table',1),(1394,'2020_09_08_009_create_restores_table',2),(1474,'2014_10_12_000000_create_permission_groups_table',3),(1475,'2014_10_12_000000_create_permissions_table',3),(1476,'2014_10_12_000000_create_roles_table',3),(1477,'2014_10_12_000000_create_users_table',3),(1478,'2014_10_12_000001_create_role_permission_table',3),(1479,'2014_10_12_100000_create_password_resets_table',3),(1480,'2020_09_08_002_create_chuc_vu',3),(1481,'2020_09_08_002_create_hoc_sinhs_table',3),(1482,'2020_09_08_002_create_loai_giao_viens_table',3),(1483,'2020_09_08_003_create_giao_vien',3),(1484,'2020_09_08_004_create_nhan_viens_table',3),(1485,'2020_09_08_005_create_phong_hocs_table',3),(1486,'2020_09_08_008_create_back_ups_table',3),(1487,'2020_09_08_010_create_ca_hocs_table',3),(1488,'2020_09_08_012_create_lich_trai_nghiems_table',3),(1489,'2020_09_08_013_create_hop_dongs_table',3),(1490,'2020_09_08_014_create_khen_thuong_ky_luats_table',3),(1491,'2020_09_08_015_create_loai_khoa_hocs_table',3),(1492,'2020_09_08_016_create_level_table',3),(1493,'2020_09_08_017_create_khoa_hocs_table',3),(1494,'2020_09_08_018_create_lop_hocs_table',3),(1495,'2020_09_08_019_create_hoc_phis_table',3),(1496,'2020_09_08_019_create_khoan_thus_table',3),(1497,'2020_09_08_019_create_lich_su_hoc_phis_table',3),(1498,'2020_09_08_020_create_chi_tiet_hoc_phis_table',3),(1499,'2020_09_08_021_create_hinh_anh_khoa_hocs_table',3),(1500,'2020_09_08_022_create_luongs_table',3),(1501,'2020_09_08_023_create_bai_giangs_table',3),(1502,'2020_09_08_024_create_buoi_hocs_table',3),(1503,'2020_09_08_026_create_bai_taps_table',3),(1504,'2020_09_08_027_create_diem_danhs_table',3),(1505,'2020_09_08_028_create_phan_lops_table',3),(1506,'2020_09_08_029_create_thoi_gian_hocs_table',3),(1507,'2020_09_08_031_create_nghi_pheps_table',3),(1508,'2020_09_08_034_create_nhan_xets_table',3),(1509,'2020_10_12_114802_create_check_ins_table',3),(1510,'2020_10_12_131003_create_danh_sach_bai_taps_table',3),(1511,'2020_10_12_141452_create_kho_hoc_cu_table',3),(1512,'2020_10_12_141453_create_hoc_cus_table',3),(1513,'2020_10_12_142054_create_san_pham_cuoi_khoas_table',3),(1514,'2020_10_18_005433_create_nhan_xet_hoc_sinhs_table',3),(1515,'2020_10_20_122627_create_messages_table',3),(1516,'2020_10_22_182024_create_nhan_xet_khoa_hocs_table',3),(1517,'2020_10_23_075631_create_nhan_xet_giao_viens_table',3),(1518,'2020_11_01_073539_create_phieu_chis_table',3),(1519,'2020_11_20_103234_create_phu_caps_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nghi_phep`
--

DROP TABLE IF EXISTS `nghi_phep`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nghi_phep` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lydo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `hoc_sinh_id` bigint(20) unsigned NOT NULL,
  `buoi_hoc_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nghi_phep_hoc_sinh_id_foreign` (`hoc_sinh_id`),
  KEY `nghi_phep_buoi_hoc_id_foreign` (`buoi_hoc_id`),
  CONSTRAINT `nghi_phep_buoi_hoc_id_foreign` FOREIGN KEY (`buoi_hoc_id`) REFERENCES `buoi_hoc` (`id`),
  CONSTRAINT `nghi_phep_hoc_sinh_id_foreign` FOREIGN KEY (`hoc_sinh_id`) REFERENCES `hoc_sinh` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nghi_phep`
--

LOCK TABLES `nghi_phep` WRITE;
/*!40000 ALTER TABLE `nghi_phep` DISABLE KEYS */;
/*!40000 ALTER TABLE `nghi_phep` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nhan_vien`
--

DROP TABLE IF EXISTS `nhan_vien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nhan_vien` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cmnd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hodem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh` datetime NOT NULL,
  `gioitinh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinhtrang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chuc_vu_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nhan_vien_chuc_vu_id_foreign` (`chuc_vu_id`),
  KEY `nhan_vien_user_id_foreign` (`user_id`),
  CONSTRAINT `nhan_vien_chuc_vu_id_foreign` FOREIGN KEY (`chuc_vu_id`) REFERENCES `chuc_vu` (`id`),
  CONSTRAINT `nhan_vien_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nhan_vien`
--

LOCK TABLES `nhan_vien` WRITE;
/*!40000 ALTER TABLE `nhan_vien` DISABLE KEYS */;
INSERT INTO `nhan_vien` VALUES (1,'04345353','Nguyễn Văn','Linh','1998-12-25 00:00:00','Nam','086959560','nguyenlinh1998adhp@gmail.com','Hải Phòng','Hoạt động',1,2,'2020-11-24 11:00:45','2020-11-24 11:00:45',NULL),(2,'04342324','Phạm Quang','Cường','1998-12-12 00:00:00','Nam','066959560','cuong1998pro@gmail.com','Hải Phòng','Hoạt động',4,1,'2020-11-24 11:00:45','2020-11-24 11:00:45',NULL),(3,'05438632','Nguyễn Văn','Minh','1998-12-02 00:00:00','Nam','043244234','linhnv@teky.vn','Hải Phòng','Hoạt động',4,4,'2020-11-24 11:00:45','2020-11-24 11:00:45',NULL);
/*!40000 ALTER TABLE `nhan_vien` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nhan_xet`
--

DROP TABLE IF EXISTS `nhan_xet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nhan_xet` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `doituongnhanxet_id` bigint(20) unsigned NOT NULL,
  `thoigian` datetime NOT NULL,
  `nhanxet` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nhan_xet_user_id_foreign` (`user_id`),
  CONSTRAINT `nhan_xet_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nhan_xet`
--

LOCK TABLES `nhan_xet` WRITE;
/*!40000 ALTER TABLE `nhan_xet` DISABLE KEYS */;
/*!40000 ALTER TABLE `nhan_xet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nhan_xet_giao_vien`
--

DROP TABLE IF EXISTS `nhan_xet_giao_vien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nhan_xet_giao_vien` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `giao_vien_id` bigint(20) unsigned NOT NULL,
  `thoigian` datetime NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nhan_xet_giao_vien_user_id_foreign` (`user_id`),
  KEY `nhan_xet_giao_vien_giao_vien_id_foreign` (`giao_vien_id`),
  CONSTRAINT `nhan_xet_giao_vien_giao_vien_id_foreign` FOREIGN KEY (`giao_vien_id`) REFERENCES `giao_vien` (`id`),
  CONSTRAINT `nhan_xet_giao_vien_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nhan_xet_giao_vien`
--

LOCK TABLES `nhan_xet_giao_vien` WRITE;
/*!40000 ALTER TABLE `nhan_xet_giao_vien` DISABLE KEYS */;
/*!40000 ALTER TABLE `nhan_xet_giao_vien` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nhan_xet_hoc_sinh`
--

DROP TABLE IF EXISTS `nhan_xet_hoc_sinh`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nhan_xet_hoc_sinh` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `khanangtiepthu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `khanangsangtao` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apdungkienthuc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lambaitapvenha` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ythuchoctap` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinhthanhoctap` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kynanglamviecnhom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kynangthuyettrinh` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hoc_sinh_id` bigint(20) unsigned NOT NULL,
  `buoi_hoc_id` bigint(20) unsigned NOT NULL,
  `lop_hoc_id` bigint(20) unsigned NOT NULL,
  `khoa_hoc_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nhan_xet_hoc_sinh_hoc_sinh_id_foreign` (`hoc_sinh_id`),
  KEY `nhan_xet_hoc_sinh_buoi_hoc_id_foreign` (`buoi_hoc_id`),
  KEY `nhan_xet_hoc_sinh_lop_hoc_id_foreign` (`lop_hoc_id`),
  KEY `nhan_xet_hoc_sinh_khoa_hoc_id_foreign` (`khoa_hoc_id`),
  CONSTRAINT `nhan_xet_hoc_sinh_buoi_hoc_id_foreign` FOREIGN KEY (`buoi_hoc_id`) REFERENCES `buoi_hoc` (`id`) ON DELETE CASCADE,
  CONSTRAINT `nhan_xet_hoc_sinh_hoc_sinh_id_foreign` FOREIGN KEY (`hoc_sinh_id`) REFERENCES `hoc_sinh` (`id`) ON DELETE CASCADE,
  CONSTRAINT `nhan_xet_hoc_sinh_khoa_hoc_id_foreign` FOREIGN KEY (`khoa_hoc_id`) REFERENCES `khoa_hoc` (`id`) ON DELETE CASCADE,
  CONSTRAINT `nhan_xet_hoc_sinh_lop_hoc_id_foreign` FOREIGN KEY (`lop_hoc_id`) REFERENCES `lop_hoc` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nhan_xet_hoc_sinh`
--

LOCK TABLES `nhan_xet_hoc_sinh` WRITE;
/*!40000 ALTER TABLE `nhan_xet_hoc_sinh` DISABLE KEYS */;
/*!40000 ALTER TABLE `nhan_xet_hoc_sinh` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nhan_xet_khoa_hoc`
--

DROP TABLE IF EXISTS `nhan_xet_khoa_hoc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nhan_xet_khoa_hoc` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `khoa_hoc_id` bigint(20) unsigned NOT NULL,
  `thoigian` datetime NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nhan_xet_khoa_hoc_user_id_foreign` (`user_id`),
  KEY `nhan_xet_khoa_hoc_khoa_hoc_id_foreign` (`khoa_hoc_id`),
  CONSTRAINT `nhan_xet_khoa_hoc_khoa_hoc_id_foreign` FOREIGN KEY (`khoa_hoc_id`) REFERENCES `khoa_hoc` (`id`),
  CONSTRAINT `nhan_xet_khoa_hoc_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nhan_xet_khoa_hoc`
--

LOCK TABLES `nhan_xet_khoa_hoc` WRITE;
/*!40000 ALTER TABLE `nhan_xet_khoa_hoc` DISABLE KEYS */;
/*!40000 ALTER TABLE `nhan_xet_khoa_hoc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_group`
--

DROP TABLE IF EXISTS `permission_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_group` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `column` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_group`
--

LOCK TABLES `permission_group` WRITE;
/*!40000 ALTER TABLE `permission_group` DISABLE KEYS */;
INSERT INTO `permission_group` VALUES (1,1,'Quản lý danh mục','2020-11-24 11:00:44','2020-11-24 11:00:44'),(2,1,'Quản lý người dùng','2020-11-24 11:00:44','2020-11-24 11:00:44'),(3,1,'Quản lý khóa học','2020-11-24 11:00:44','2020-11-24 11:00:44'),(4,1,'Quản lý bài giảng','2020-11-24 11:00:44','2020-11-24 11:00:44'),(5,1,'Quản lý bài tập','2020-11-24 11:00:44','2020-11-24 11:00:44'),(6,1,'Quản lý lớp học','2020-11-24 11:00:44','2020-11-24 11:00:44'),(7,1,'Điều chỉnh lịch học','2020-11-24 11:00:44','2020-11-24 11:00:44'),(8,1,'Báo cáo thống kê','2020-11-24 11:00:44','2020-11-24 11:00:44'),(9,1,'Quản lý học cụ','2020-11-24 11:00:44','2020-11-24 11:00:44'),(10,2,'Quản lý giáo viên','2020-11-24 11:00:44','2020-11-24 11:00:44'),(11,2,'Quản lý học sinh','2020-11-24 11:00:44','2020-11-24 11:00:44'),(12,2,'Quản lý khoản thu','2020-11-24 11:00:44','2020-11-24 11:00:44'),(13,2,'Quản lý học phí','2020-11-24 11:00:44','2020-11-24 11:00:44'),(14,2,'Quản lý phiếu chi','2020-11-24 11:00:44','2020-11-24 11:00:44'),(15,2,'Phân lớp','2020-11-24 11:00:44','2020-11-24 11:00:44'),(16,2,'Quản lý lịch hẹn','2020-11-24 11:00:44','2020-11-24 11:00:44'),(17,3,'Quản lý nhân viên','2020-11-24 11:00:44','2020-11-24 11:00:44'),(18,3,'Chấm công giáo viên','2020-11-24 11:00:44','2020-11-24 11:00:44'),(19,3,'Chấm công nhân viên','2020-11-24 11:00:44','2020-11-24 11:00:44'),(20,3,'Xem bảng chấm công','2020-11-24 11:00:44','2020-11-24 11:00:44'),(21,3,'Tính lương','2020-11-24 11:00:44','2020-11-24 11:00:44');
/*!40000 ALTER TABLE `permission_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission_group_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'tv_danhmuc','Truy vấn danh mục',1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(2,'them_danhmuc','Thêm danh mục',1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(3,'sua_danhmuc','Cập nhật danh mục',1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(4,'xoa_danhmuc','Xóa danh mục',1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(5,'tv_nguoidung','Truy vấn người dùng',2,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(6,'them_nguoidung','Thêm người dùng',2,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(7,'sua_nguoidung','Cập nhật người dùng',2,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(8,'xoa_nguoidung','Xóa người dùng',2,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(9,'phanquyen_nguoidung','Phân quyền người dùng',2,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(10,'tv_khoahoc','Truy vấn khóa học',3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(11,'them_khoahoc','Thêm khóa học',3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(12,'sua_khoahoc','Cập nhật khóa học',3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(13,'xoa_khoahoc','Xóa khóa học',3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(14,'tv_baigiang','Truy vấn bài giảng',4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(15,'them_baigiang','Thêm bài giảng',4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(16,'sua_baigiang','Cập nhật bài giảng',4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(17,'xoa_baigiang','Xóa bài giảng',4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(18,'tv_baitap','Truy vấn bài tập',5,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(19,'them_baitap','Thêm bài tập',5,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(20,'sua_baitap','Cập nhật bài tập',5,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(21,'xoa_baitap','Xóa bài tập',5,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(22,'tv_lophoc','Truy vấn lớp học',6,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(23,'them_lophoc','Thêm lớp học',6,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(24,'sua_lophoc','Cập nhật lớp học',6,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(25,'xoa_lophoc','Xóa lớp học',6,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(26,'tv_lichhoc','Truy vấn lịch học',7,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(27,'them_lichhoc','Thêm lịch học',7,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(28,'sua_lichhoc','Cập nhật lịch học',7,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(29,'xoa_lichhoc','Xóa lịch học',7,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(30,'baocao_danhthu','Báo cáo danh thu',8,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(31,'tv_hoccu','Truy vấn học cụ',9,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(32,'them_hoccu','Thêm học cụ',9,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(33,'sua_hoccu','Cập nhật học cụ',9,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(34,'xoa_hoccu','Xóa học cụ',9,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(35,'chia_hoccu','Phân chia học cụ',9,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(36,'tv_giaovien','Truy vấn giáo viên',10,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(37,'them_giaovien','Thêm giáo viên',10,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(38,'sua_giaovien','Cập nhật giáo viên',10,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(39,'xoa_giaovien','Xóa giáo viên',10,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(40,'tv_hocsinh','Truy vấn học sinh',11,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(41,'them_hocsinh','Thêm học sinh',11,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(42,'sua_hocsinh','Cập nhật học sinh',11,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(43,'xoa_hocsinh','Xóa học sinh',11,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(44,'tv_khoanthu','Truy vấn khoản thu',12,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(45,'them_khoanthu','Thêm khoản thu',12,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(46,'sua_khoanthu','Cập nhật khoản thu',12,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(47,'xoa_khoanthu','Xóa khoản thu',12,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(48,'tv_hocphi','Truy vấn học phí',13,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(49,'them_hocphi','Thêm học phí',13,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(50,'sua_hocphi','Cập nhật học phí',13,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(51,'xoa_hocphi','Xóa học phí',13,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(52,'tv_phieuchi','Truy vấn phiếu chi',14,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(53,'them_phieuchi','Thêm phiếu chi',14,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(54,'sua_phieuchi','Cập nhật phiếu chi',14,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(55,'xoa_phieuchi','Xóa phiếu chi',14,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(56,'tv_phanlop','Truy vấn phân lớp',15,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(57,'them_phanlop','Thêm phân lớp',15,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(58,'sua_phanlop','Cập nhật phân lớp',15,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(59,'xoa_phanlop','Xóa phân lớp',15,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(60,'tv_lichhen','Truy vấn lịch hẹn',16,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(61,'them_lichhen','Thêm lịch hẹn',16,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(62,'sua_lichhen','Cập nhật lịch hẹn',16,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(63,'xoa_lichhen','Xóa lịch hẹn',16,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(64,'tv_nhanvien','Truy vấn nhân viên',17,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(65,'them_nhanvien','Thêm nhân viên',17,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(66,'sua_nhanvien','Cập nhật nhân viên',17,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(67,'xoa_nhanvien','Xóa nhân viên',17,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(68,'tv_chamconggiaovien','Truy vấn chấm công (giáo viên)',18,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(69,'them_chamconggiaovien','Thêm chấm công (giáo viên)',18,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(70,'sua_chamconggiaovien','Cập nhật chấm công (giáo viên)',18,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(71,'xoa_chamconggiaovien','Xóa chấm công (giáo viên)',18,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(72,'tv_chamcongnhanvien','Truy vấn chấm công (nhân viên)',19,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(73,'them_chamcongnhanvien','Thêm chấm công (nhân viên)',19,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(74,'sua_chamcongnhanvien','Cập nhật chấm công (nhân viên)',19,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(75,'xoa_chamcongnhanvien','Xóa chấm công (nhân viên)',19,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(76,'tv_bangchamcong','Truy vấn bảng chấm công',20,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(77,'them_bangchamcong','Thêm bảng chấm công',20,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(78,'sua_bangchamcong','Cập nhật bảng chấm công',20,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(79,'xoa_bangchamcong','Xóa bảng chấm công',20,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(80,'tv_bangluong','Truy vấn bảng lương',21,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(81,'them_bangluong','Thêm bảng lương',21,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(82,'sua_bangluong','Cập nhật bảng lương',21,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(83,'xoa_bangluong','Xóa bảng lương',21,'2020-11-24 11:00:44','2020-11-24 11:00:44');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phan_lop`
--

DROP TABLE IF EXISTS `phan_lop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phan_lop` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ngayvaolop` datetime NOT NULL DEFAULT current_timestamp(),
  `hoc_sinh_id` bigint(20) unsigned NOT NULL,
  `lop_hoc_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `phan_lop_hoc_sinh_id_foreign` (`hoc_sinh_id`),
  KEY `phan_lop_lop_hoc_id_foreign` (`lop_hoc_id`),
  CONSTRAINT `phan_lop_hoc_sinh_id_foreign` FOREIGN KEY (`hoc_sinh_id`) REFERENCES `hoc_sinh` (`id`),
  CONSTRAINT `phan_lop_lop_hoc_id_foreign` FOREIGN KEY (`lop_hoc_id`) REFERENCES `lop_hoc` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phan_lop`
--

LOCK TABLES `phan_lop` WRITE;
/*!40000 ALTER TABLE `phan_lop` DISABLE KEYS */;
INSERT INTO `phan_lop` VALUES (1,'2020-11-24 18:00:50',1,1,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(2,'2020-11-24 18:00:50',2,1,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(3,'2020-11-24 18:00:50',3,1,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(4,'2020-11-24 18:00:50',4,1,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(5,'2020-11-24 18:00:50',5,2,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(6,'2020-11-24 18:00:50',6,2,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(7,'2020-11-24 18:00:50',7,2,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(8,'2020-11-24 18:00:50',8,2,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(9,'2020-11-24 18:00:50',59,8,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(10,'2020-11-24 18:00:50',60,8,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(11,'2020-11-24 18:00:50',57,2,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(12,'2020-11-24 18:00:50',58,2,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(13,'2020-11-24 18:00:50',55,7,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(14,'2020-11-24 18:00:50',56,7,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(15,'2020-11-24 18:00:50',53,16,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(16,'2020-11-24 18:00:50',54,16,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(17,'2020-11-24 18:00:50',51,15,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(18,'2020-11-24 18:00:50',52,15,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(19,'2020-11-24 18:00:50',49,14,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(20,'2020-11-24 18:00:50',50,14,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(21,'2020-11-24 18:00:50',47,13,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(22,'2020-11-24 18:00:50',48,13,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(23,'2020-11-24 18:00:50',45,12,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(24,'2020-11-24 18:00:50',46,12,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(25,'2020-11-24 18:00:50',43,11,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(26,'2020-11-24 18:00:50',44,11,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(27,'2020-11-24 18:00:50',41,10,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(28,'2020-11-24 18:00:50',42,10,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(29,'2020-11-24 18:00:50',36,9,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL),(30,'2020-11-24 18:00:50',37,9,'2020-11-24 11:00:50','2020-11-24 11:00:50',NULL);
/*!40000 ALTER TABLE `phan_lop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phieu_chi`
--

DROP TABLE IF EXISTS `phieu_chi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phieu_chi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lydo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaytao` datetime NOT NULL,
  `nhan_vien_id` bigint(20) unsigned NOT NULL,
  `sotien` bigint(20) NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `phieu_chi_nhan_vien_id_foreign` (`nhan_vien_id`),
  CONSTRAINT `phieu_chi_nhan_vien_id_foreign` FOREIGN KEY (`nhan_vien_id`) REFERENCES `nhan_vien` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phieu_chi`
--

LOCK TABLES `phieu_chi` WRITE;
/*!40000 ALTER TABLE `phieu_chi` DISABLE KEYS */;
/*!40000 ALTER TABLE `phieu_chi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phong_hoc`
--

DROP TABLE IF EXISTS `phong_hoc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phong_hoc` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tenphong` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phong_hoc`
--

LOCK TABLES `phong_hoc` WRITE;
/*!40000 ALTER TABLE `phong_hoc` DISABLE KEYS */;
INSERT INTO `phong_hoc` VALUES (1,'303','Phòng thực hành cho lớp Robot','Còn trống','2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(2,'304','Phòng thực hành làm Game','Còn trống','2020-11-24 11:00:46','2020-11-24 11:00:46',NULL);
/*!40000 ALTER TABLE `phong_hoc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phu_cap`
--

DROP TABLE IF EXISTS `phu_cap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phu_cap` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tenphucap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sotien` bigint(20) unsigned NOT NULL,
  `nhan_vien_id` bigint(20) unsigned DEFAULT NULL,
  `giao_vien_id` bigint(20) unsigned DEFAULT NULL,
  `doituong` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phu_cap`
--

LOCK TABLES `phu_cap` WRITE;
/*!40000 ALTER TABLE `phu_cap` DISABLE KEYS */;
INSERT INTO `phu_cap` VALUES (1,'Ăn trưa',300000,1,NULL,'nhanvien','2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(2,'Ăn trưa',300000,2,NULL,'nhanvien','2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(3,'Ăn trưa',300000,3,NULL,'nhanvien','2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(4,'Đi lại',200000,1,NULL,'nhanvien','2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(5,'Đi lại',200000,2,NULL,'nhanvien','2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(6,'Đi lại',200000,3,NULL,'nhanvien','2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(7,'Ăn trưa',300000,NULL,1,'giaovien','2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(8,'Ăn trưa',300000,NULL,2,'giaovien','2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(9,'Ăn trưa',300000,NULL,3,'giaovien','2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(10,'Đi lại',200000,NULL,1,'giaovien','2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(11,'Đi lại',200000,NULL,2,'giaovien','2020-11-24 11:00:46','2020-11-24 11:00:46',NULL),(12,'Đi lại',200000,NULL,3,'giaovien','2020-11-24 11:00:46','2020-11-24 11:00:46',NULL);
/*!40000 ALTER TABLE `phu_cap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `restore`
--

DROP TABLE IF EXISTS `restore`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `restore` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tenfile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaytao` datetime NOT NULL,
  `duongdan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ketqua` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `restore`
--

LOCK TABLES `restore` WRITE;
/*!40000 ALTER TABLE `restore` DISABLE KEYS */;
/*!40000 ALTER TABLE `restore` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_group`
--

DROP TABLE IF EXISTS `role_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_group` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `column` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_group`
--

LOCK TABLES `role_group` WRITE;
/*!40000 ALTER TABLE `role_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_permission`
--

DROP TABLE IF EXISTS `role_permission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_permission` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_permission_role_id_foreign` (`role_id`),
  CONSTRAINT `role_permission_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_permission_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_permission`
--

LOCK TABLES `role_permission` WRITE;
/*!40000 ALTER TABLE `role_permission` DISABLE KEYS */;
INSERT INTO `role_permission` VALUES (1,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(1,3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(1,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(2,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(3,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(4,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(5,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(5,2,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(5,3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(5,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(6,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(6,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(7,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(7,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(8,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(8,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(9,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(9,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(10,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(10,2,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(10,3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(10,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(11,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(11,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(12,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(12,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(13,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(13,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(14,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(14,2,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(14,3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(14,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(15,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(15,3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(15,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(16,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(16,3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(16,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(17,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(17,3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(17,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(18,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(18,2,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(18,3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(18,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(19,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(19,3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(19,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(20,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(20,3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(20,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(21,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(21,3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(21,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(22,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(22,2,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(22,3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(22,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(23,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(23,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(24,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(24,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(25,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(25,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(26,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(26,2,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(26,3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(26,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(27,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(27,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(28,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(28,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(29,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(29,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(30,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(31,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(31,2,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(31,3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(31,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(32,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(32,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(33,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(33,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(34,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(34,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(35,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(35,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(36,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(36,2,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(36,3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(36,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(37,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(37,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(38,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(38,3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(38,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(39,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(39,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(40,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(40,2,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(40,3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(40,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(41,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(41,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(42,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(42,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(43,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(43,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(44,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(44,2,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(44,3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(44,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(45,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(45,3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(45,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(46,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(46,3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(46,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(47,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(47,3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(47,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(48,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(48,2,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(48,3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(48,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(49,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(49,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(50,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(50,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(51,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(51,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(52,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(52,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(53,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(53,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(54,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(54,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(55,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(55,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(56,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(56,2,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(56,3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(56,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(57,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(57,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(58,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(58,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(59,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(59,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(60,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(60,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(61,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(61,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(62,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(62,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(63,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(63,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(64,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(64,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(65,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(65,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(66,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(66,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(67,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(67,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(68,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(68,3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(69,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(69,3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(70,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(71,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(72,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(72,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(73,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(73,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(74,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(74,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(75,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(75,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(76,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(76,3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(76,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(77,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(77,3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(77,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(78,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(78,3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(78,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(79,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(79,3,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(79,4,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(80,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(81,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(82,1,'2020-11-24 11:00:44','2020-11-24 11:00:44'),(83,1,'2020-11-24 11:00:44','2020-11-24 11:00:44');
/*!40000 ALTER TABLE `role_permission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'administrator','Quản trị viên, nhân viên vận hành','2020-11-24 11:00:44','2020-11-24 11:00:44'),(2,'student','Học sinh của trung tâm','2020-11-24 11:00:44','2020-11-24 11:00:44'),(3,'teacher','Giáo viên, cộng tác viên','2020-11-24 11:00:44','2020-11-24 11:00:44'),(4,'contact','Nhân viên sale, tư vấn, kế toán','2020-11-24 11:00:44','2020-11-24 11:00:44');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `san_pham_cuoi_khoa`
--

DROP TABLE IF EXISTS `san_pham_cuoi_khoa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `san_pham_cuoi_khoa` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fileslide` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hoc_sinh_id` bigint(20) unsigned NOT NULL,
  `lop_hoc_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `san_pham_cuoi_khoa_hoc_sinh_id_foreign` (`hoc_sinh_id`),
  KEY `san_pham_cuoi_khoa_lop_hoc_id_foreign` (`lop_hoc_id`),
  CONSTRAINT `san_pham_cuoi_khoa_hoc_sinh_id_foreign` FOREIGN KEY (`hoc_sinh_id`) REFERENCES `hoc_sinh` (`id`),
  CONSTRAINT `san_pham_cuoi_khoa_lop_hoc_id_foreign` FOREIGN KEY (`lop_hoc_id`) REFERENCES `lop_hoc` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `san_pham_cuoi_khoa`
--

LOCK TABLES `san_pham_cuoi_khoa` WRITE;
/*!40000 ALTER TABLE `san_pham_cuoi_khoa` DISABLE KEYS */;
/*!40000 ALTER TABLE `san_pham_cuoi_khoa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `thoi_gian_hoc`
--

DROP TABLE IF EXISTS `thoi_gian_hoc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `thoi_gian_hoc` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `thu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ca_hoc_id` bigint(20) unsigned NOT NULL,
  `lop_hoc_id` bigint(20) unsigned NOT NULL,
  `phong_hoc_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `thoi_gian_hoc_ca_hoc_id_foreign` (`ca_hoc_id`),
  KEY `thoi_gian_hoc_lop_hoc_id_foreign` (`lop_hoc_id`),
  KEY `thoi_gian_hoc_phong_hoc_id_foreign` (`phong_hoc_id`),
  CONSTRAINT `thoi_gian_hoc_ca_hoc_id_foreign` FOREIGN KEY (`ca_hoc_id`) REFERENCES `ca_hoc` (`id`),
  CONSTRAINT `thoi_gian_hoc_lop_hoc_id_foreign` FOREIGN KEY (`lop_hoc_id`) REFERENCES `lop_hoc` (`id`),
  CONSTRAINT `thoi_gian_hoc_phong_hoc_id_foreign` FOREIGN KEY (`phong_hoc_id`) REFERENCES `phong_hoc` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `thoi_gian_hoc`
--

LOCK TABLES `thoi_gian_hoc` WRITE;
/*!40000 ALTER TABLE `thoi_gian_hoc` DISABLE KEYS */;
INSERT INTO `thoi_gian_hoc` VALUES (1,'2',1,1,1,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(2,'7',2,2,2,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(3,'6',3,3,1,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(4,'6',4,4,2,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(5,'2',5,5,1,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(6,'2',6,6,2,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(7,'3',1,7,1,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(8,'3',2,8,2,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(9,'5',3,9,1,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(10,'5',4,10,2,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(11,'3',5,11,1,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(12,'3',6,12,2,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(13,'4',1,13,2,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(14,'4',2,14,1,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(15,'4',3,15,2,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL),(16,'4',4,16,1,'2020-11-24 11:00:49','2020-11-24 11:00:49',NULL);
/*!40000 ALTER TABLE `thoi_gian_hoc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anhdaidien` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  `trangthai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_name_unique` (`name`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'cuong1998pro','$2y$10$l4cAzWxFQei93wJEUm4KMuZGrxwxuPpO285RiLdf6Gm8Aaf7cwj5W','assets/jpg/avatar-2.jpg',1,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(2,'linhnv','$2y$10$cMX0hcjDo8g3R0F.shZd3.5F9Y3F4e2n4feD2eMuth3NG7FhyWDrW','assets/jpg/avatar-4.jpg',4,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(3,'hoannv','$2y$10$LkmpS6uCMm6Lg3V2q/6oRu4S1oXofMotTFLENgDg6qzYSd/cY9slq','assets/jpg/avatar-1.jpg',3,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(4,'admin','$2y$10$KMjVDbnMwv28Rf6fFnfDluM7z01hX0tRxVgUMGh5fT6fVAzPqpram','assets/jpg/avatar-5.jpg',1,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(5,'phuhuynh01','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','assets/jpg/avatar-3.jpg',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(6,'hocsinh01','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/86deda626f2f117aa576e53065ca2ce6?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(7,'hocsinh02','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/d0d6b624e8dc1f6b9df0250b19663334?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(8,'giaovien01','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/ddada9c5285e1c979bd082b3980e0477?set=set4&bgset=&size=400x400',3,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(9,'hocsinh03','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/63586ce4a8e58294f47deaad822de83c?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(10,'hocsinh04','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/0576129326ed4dc42e1d58ed04f154c8?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(11,'hocsinh05','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/9177ac6c2397371ec94d88c13f0e4f3d?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(12,'hocsinh06','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/9f972b73e7b85149628dd81056493d6a?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(13,'hocsinh07','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/73c70f65b271d90c898dae29003d2e55?set=set1&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(14,'hocsinh08','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/5c0befd96d1599257f14037eb922dcde?set=set1&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(15,'hocsinh09','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/09678e6f9451efc383f2c8d24eb1f90a?set=set1&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(16,'hocsinh10','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/bd2e34edb2916044793e974353014db3?set=set1&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(17,'hocsinh11','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/5c16d846cb718a7015503523723e46f5?set=set1&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(18,'hocsinh12','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/0c11167f44066a7e02f50d9d53de3876?set=set1&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(19,'hocsinh13','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/1e67db6e97fe9ff5f723baec4a59631a?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(20,'hocsinh14','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/86b5c10f9c5df34bcd658abd050756e2?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(21,'hocsinh15','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/1eef6e135a795be09d567c4f6909a848?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(22,'hocsinh16','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/8a5526893b746f140df90d9417a39acf?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(23,'hocsinh17','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/9c371df7622ba95ccfe15ccbbb0d11b4?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(24,'hocsinh18','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://gravatar.com/avatar/9c371df7622ba95ccfe15ccbbb0d11b4?s=400&d=robohash&r=x',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(25,'hocsinh19','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://gravatar.com/avatar/286f68720bd9ca609bc091668ddff81d?s=400&d=robohash&r=x',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(26,'hocsinh20','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://gravatar.com/avatar/5a26990083f4554f6536976ca2709b31?s=400&d=robohash&r=x',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(27,'hocsinh21','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/5a26990083f4554f6536976ca2709b31?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(28,'hocsinh22','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/4177d5a68f2eaa97a8dfb453093f0b40?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(29,'hocsinh23','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/e7027447d22effb9e444998610f9058c?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(30,'hocsinh24','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/409f6ac3dchhsdb017c0f1adb60b346657fa?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(31,'hocsinh25','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/409f6ac3dcfhdfb017c0f1adb60b346657fa?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(32,'hocsinh26','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/409f6ac3dcb769790fgfh017c0f1adb60b346657fa?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(33,'hocsinh27','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/409f6ac3dcb017c0f165446adb60b346657fa?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(34,'hocsinh28','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/409f6ac3dcb017c0654765f1adb60b346657fa?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(35,'vanhanh01','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/409f6ac3dcb01742365465c0f1adb60b346657fa?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(36,'giaovien36','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/409f6ac3dcb017c0f432423adb60b346657fa?set=set4&bgset=&size=400x400',3,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(37,'giaovien37','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/409f6ac3dcbasfaswer017c0f1adb60b346657fa?set=set4&bgset=&size=400x400',3,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(38,'giaovien38','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/409f6ac3dcbdfasfs017c0f1adb60b346657fa?set=set4&bgset=&size=400x400',3,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(39,'giaovien39','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/409f6ac3dasrwcb017c0f1adb60b346657fa?set=set4&bgset=&size=400x400',3,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(40,'giaovien40','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/409f6ac3dcbkjk017c0f1adb60b346657fa?set=set4&bgset=&size=400x400',3,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(41,'giaovien41','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/409f6ac3dcb017couio0f1adb60b346657fa?set=set4&bgset=&size=400x400',3,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(42,'giaovien42','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/409f6ac3dcb01798796c0f1adb60b346657fa?set=set4&bgset=&size=400x400',3,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(43,'giaovien43','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/409f6ac3dcb014537c0f1adb60b346657fa?set=set4&bgset=&size=400x400',3,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(44,'giaovien44','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/409f6ac3dcb024217c0f1adb60b346657fa?set=set4&bgset=&size=400x400',3,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(45,'giaovien45','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/409f6ac3dcb54353017c0f1adb60b346657fa?set=set4&bgset=&size=400x400',3,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(46,'giaovien46','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/409f6ac3dcb43543017c0f1adb60b346657fa?set=set4&bgset=&size=400x400',3,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(47,'giaovien47','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/409fdcb017c0f1adb60b346657fa?set=set4&bgset=&size=400x400',3,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(48,'giaovien48','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/409f6ac4242422424?set=set4&bgset=&size=400x400',3,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(49,'giaovien49','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/ddasnh423782349248728424?set=set4&bgset=&size=400x400',3,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(50,'giaovien50','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/sfdahjfsdhafjfsdafashjfasfasfk?set=set4&bgset=&size=400x400',3,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(51,'hocsinh100','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/sfdahjf43242sdhafjashjfasfasfk?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(52,'hocsinh101','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/sfdahjfsdhafjas647567hjfasfasfk?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(53,'hocsinh102','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/sfdahjfsdhafjashjfasf765asfk?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(54,'hocsinh103','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/sfdahjfsdhafja7567shjfasfasfk?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(55,'hocsinh104','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/sfdahj7657fsdhafjashjfasfasfk?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(56,'hocsinh105','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/sfdahjfsdhafjashj2425654fasfasfk?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(57,'hocsinh106','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/sfdahjfsdhayryuroyifjashjfasfasfk?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(58,'hocsinh107','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/sfdahjfsdhafjashjfasytryrfasfk?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(59,'hocsinh108','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/sfdahjfyruyoisdhafjashjfasfasfk?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(60,'hocsinh109','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/sfdahjfsdhafjasertweyowerhjfasfasfk?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(61,'hocsinh110','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/sfdahjfsdhafjashjfasfteriotuweioasfk?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(62,'hocsinh111','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/sfdahjfsdhafjashjuiouiouioufasfasfk?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(63,'hocsinh112','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/sfdahjfsdhafjashjfytutyuasfasfk?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(64,'hocsinh113','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/sfdahjfsdhafjashjfgadgasfasfk?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(65,'hocsinh114','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/sfdahjfsdhafjashjgagfasfasfk?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(66,'hocsinh115','$2y$10$wKRif0mHhnAOGZt4Ux1Iq.yyfVFJla5CvmqEXl02XM4FMYj9CYPy6','https://robohash.org/sfdahjfsdhafjashdfgdfjfasfasfk?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:00:44','2020-11-24 11:00:44',NULL),(67,'hocsinh116','$2y$10$L8v3tDH7BXi5I0h4q1NYvOVzxz65akeqrKMWsIE0IophWZSGxlyWi','https://robohash.org/04147404bf41bcf9bbe0a04f3a4ea0ec1dd1d128?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:02:53','2020-11-24 11:02:53',NULL),(68,'hocsinh117','$2y$10$LnjVXtCU866HxV4xYtq1xOT5gG8HzyBn3lwrx1jFGpAuRqftEl02W','https://robohash.org/6d278d0bc2c73b4c25ad913450e1e8a62b4b553a?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:02:53','2020-11-24 11:02:53',NULL),(69,'hocsinh118','$2y$10$.nHG/qNDw8L2evXevQAHV.0COZbBxsgKoSRUH8W38HeapKiIeLxH.','https://robohash.org/21f3adbe605289da3326ee7158516dc9e1e67a08?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:02:53','2020-11-24 11:02:53',NULL),(70,'hocsinh119','$2y$10$kf.PNx/3RBJM7BD3BMqZA.1rdwq6L.YkGFAq0u5hIE6aqSO7zCOvO','https://robohash.org/4e3a684e6a71684bc7f0cf2abd047ab54704b3cd?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:02:54','2020-11-24 11:02:54',NULL),(71,'hocsinh120','$2y$10$lS1g2KPrJJrpbqX6VztEVOLRlkTfORc7gKW5pYv4qiXrbQ7z0Bt/i','https://robohash.org/d700ae1a336676cbba9e0aeda2b04fa3494c3b57?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:02:54','2020-11-24 11:02:54',NULL),(72,'hocsinh121','$2y$10$NwfUniuteA7wjH/KSPnTKubsxLWQsa8H/NLn/Uip8C4esyXO0ShRW','https://robohash.org/811fde624a86226e9d381da3da493df3938ceac1?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:02:54','2020-11-24 11:02:54',NULL),(73,'hocsinh122','$2y$10$NwO.PumFDvHh2TXiRO6IzOINu.FckcwiBiVXqau/6VRN7.Vm5P.yK','https://robohash.org/35328d3b21bce0db98263ebc30321f9f705595fa?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:02:54','2020-11-24 11:02:54',NULL),(74,'hocsinh123','$2y$10$YCQoLiPkTGQh/E/J2ocfXewpK7fEtyBk25qBch8drnYCK90a0vBNW','https://robohash.org/7bc7d3893bc76988d03dfd0cd80cfd1f54838755?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:02:54','2020-11-24 11:02:54',NULL),(75,'hocsinh124','$2y$10$QVDZNGvn1xeeQOAALr617OlYKe3qSMHwazCX/IhHhSx2Wj8ajWhwW','https://robohash.org/7740ca788c3feebb3b6b5277224984ff374527c6?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:02:54','2020-11-24 11:02:54',NULL),(76,'hocsinh125','$2y$10$nSuGRpIgou0.fnsY7gOSYudonHFJw4LKevDHUWSxKipCstxY3kmPy','https://robohash.org/f105e3400a4b1843386b8627ab9821be66d814f8?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:02:54','2020-11-24 11:02:54',NULL),(77,'hocsinh126','$2y$10$CON9bT3XZnz8K0XknG0ape12r3nAmyOZjDiK8iGU2Zpv5Vea.8Q0S','https://robohash.org/615e3e106c2c24f31a13140caa141352dc48e1b1?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:02:54','2020-11-24 11:02:54',NULL),(78,'hocsinh127','$2y$10$CU52I3iA4XkZxqTMOl9onOGD6h.p6A.jx0mITq3u2lwwzQa/9gMqK','https://robohash.org/81248b59b32dfbbd3d983ae603b2b589e953d280?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:02:54','2020-11-24 11:02:54',NULL),(79,'hocsinh128','$2y$10$eCxXOGhuThEYcvso9WSsMODlagV4LG1oLA8FfX9nPP48QO4zQm1l6','https://robohash.org/4a3e1c04d7790305a7613b81f4bd464732b1f214?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:02:54','2020-11-24 11:02:54',NULL),(80,'hocsinh129','$2y$10$HTV.XP6JXlkE0dqtYmYU/.wRnjf5AXLrYAPYjxAJwIG1qkUtKxD1O','https://robohash.org/ef053c91effc0be584faf1fb5c36ebbe8d33a45b?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:02:54','2020-11-24 11:02:54',NULL),(81,'hocsinh130','$2y$10$CvHDlj5/qljNXstuuG28AObUkGtk6EaUXNbvTx4IGAF8MCD6rbSYe','https://robohash.org/305c401f6fa2a9a9f94b4d20d3f5f0fb66622ae4?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:02:54','2020-11-24 11:02:54',NULL),(82,'hocsinh131','$2y$10$iZW5ayu7zupKg7U5AG1sie5ahFqjzz/mWAfsqvKvYZ4c9S6HxSS8y','https://robohash.org/1f6497d8eac132ebb65bc3babea1e90f4a72ff06?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:02:54','2020-11-24 11:02:54',NULL),(83,'hocsinh132','$2y$10$kvUpcF1hbKyz76yDBKtkDOkP9/HFUypCdGOyaneipw5zHz5iewzpi','https://robohash.org/4b063c42d2a8f92d399290f8efaf5480a4215cef?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:02:54','2020-11-24 11:02:54',NULL),(84,'hocsinh133','$2y$10$kcooERkkvIZehDKNDKpwQuJzE5NhJIOgWokPxBVfl224ONDubqnAO','https://robohash.org/fe63c1e9d4074bf85e7aa7d8f3a6a75a5039345a?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:02:54','2020-11-24 11:02:54',NULL),(85,'hocsinh134','$2y$10$72AbCe3L93BIidOlUNRoX.NUJvG36AkP/w7N.PI/EAUuCcaRoh0vq','https://robohash.org/b21a1e4205fa05495d8500d0c0c7e976d2910b74?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:02:55','2020-11-24 11:02:55',NULL),(86,'hocsinh135','$2y$10$5RHlRMhf.lsuvHAuE4PVjuMVlZIjafTfHu0FXFumUzmX8FjqifGdO','https://robohash.org/aa673a133892d81cf8a893afe6656fc7c59ea8a5?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:02:55','2020-11-24 11:02:55',NULL),(87,'hocsinh136','$2y$10$ERGsRar6dIdYfsUpKuhw9.eQRc4BKKDimXBLy9ibjt96mvfdKIYLO','https://robohash.org/1369fd8afea2ed9517d3d088a5e282b9fac5bb32?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:02:55','2020-11-24 11:02:55',NULL),(88,'hocsinh137','$2y$10$npSf2naD5Z.t82TreeTXo.DzekHEIZr0lkYSe/D6oLLW6HApZwddy','https://robohash.org/b3f8b7ad506e7a369f205d903e693a805b385519?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:02:55','2020-11-24 11:02:55',NULL),(89,'hocsinh138','$2y$10$v1ilhBDyuTo2fdeJ/0P0Ae7l5WhYPK0uBKFTPXsvCj8wCTyZMOeOS','https://robohash.org/58ad001fb892b590c38a13780e11b63e4f8fc876?set=set4&bgset=&size=400x400',2,'Hoạt động',NULL,NULL,NULL,'2020-11-24 11:02:55','2020-11-24 11:02:55',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-24 18:17:35
