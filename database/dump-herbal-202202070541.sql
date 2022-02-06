-- MySQL dump 10.13  Distrib 5.7.36, for Linux (x86_64)
--
-- Host: localhost    Database: herbal
-- ------------------------------------------------------
-- Server version	5.7.36-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbm_barang`
--

DROP TABLE IF EXISTS `tbm_barang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbm_barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(100) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `date_deleted` datetime DEFAULT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbm_barang`
--

LOCK TABLES `tbm_barang` WRITE;
/*!40000 ALTER TABLE `tbm_barang` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbm_barang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbm_image`
--

DROP TABLE IF EXISTS `tbm_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbm_image` (
  `image_name` text,
  `fk_transaksi` int(11) DEFAULT NULL,
  `fk_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbm_image`
--

LOCK TABLES `tbm_image` WRITE;
/*!40000 ALTER TABLE `tbm_image` DISABLE KEYS */;
INSERT INTO `tbm_image` VALUES ('https://www.google.co.id/maps/uv?pb=!1s0x2dd7fb7bd7a0d64b%3A0x4ecb91495a2b1dfe!3m1!7e115!4s%2F%2Flh6.googleusercontent.com%2Fproxy%2FlQwc7NuyO3q1eLFuAodGH4oMBiJnwOudm9_YTap3sY3mlxTu58M6x3PEv6KqAJTZnYgwFkbTF_e4mWS-Zvh7DzPQMhkin9MikfnrmBuOY-pAL8zKnOt34iQKBzXkNZy7y__kxQTXVIWaKcdAOCUDVMT2oLliIk4KKlUsV4CkB9lN%3Dw213-h160-k-no!5stoko%20anugrah%20herbal%20-%20Google%20Nggoleki!15sCgIgAQ&imagekey=!1e2!2sO8RdVP4B9HEAAAQYfek98A&hl=jv&sa=X&ved=2ahUKEwj_w67hj6f1AhWT7HMBHTZcBOcQoip6BAgiEAM',NULL,1),('https://www.google.com/search?q=Mumtaz+Herbal+Surabaya&sxsrf=AOaemvKXga1eD65ynYn4QkHzmZ7jQ0VheQ:1641964211988&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjH8dqsuav1AhXFzDgGHWyDD7gQ_AUoAXoECAIQAw&biw=1366&bih=568&dpr=1',NULL,2),('https://www.google.com/maps/uv?pb=!1s0x2dd7fb9de6a45b29%3A0xdf70f12d7e113dbe!3m1!7e115!4shttps%3A%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipNHSRwyfNMEmULQOW769PUt9_h0RH0A6PY4HEk3%3Dw260-h175-n-k-no!5stoko%20herbal%20surabaya%20-%20Penelusuran%20Google!15sCgIgAQ&imagekey=!1e10!2sAF1QipNHSRwyfNMEmULQOW769PUt9_h0RH0A6PY4HEk3&hl=id)',NULL,3),('https://www.google.com/search?q=toko+herbal+sidoarjo&tbm=isch&ved=2ahUKEwjs06unubD1AhXPi9gFHVfqAZAQ2-cCegQIABAA&oq=toko+herbal+sidoarjo&gs_lcp=CgNpbWcQAzIHCCMQ7wMQJ1CKC1iKC2DOEGgAcAB4AIABWogBWpIBATGYAQCgAQGqAQtnd3Mtd2l6LWltZ8ABAQ&sclient=img&ei=vwHhYaz4GM-X4t4P19SHgAk&bih=625&biw=1366)',NULL,4),('https://vymaps.com/ID/Toko-Obat-Herbal-99-2713953492010471/)',NULL,5),('https://vymaps.com/ID/Al-Ahsan-Toko-Herbal-293151050764173/)',NULL,6),('https://www.google.com/search?q=daftar%20toko%20herbal%20di%20jawa%20timur%20dengan%20longitude&oq=daftar+toko+herbal+sejawa+timur+dengan+longitude+&aqs=chrome..69i57j33i10i160j33i10i21.13731j0j7&sourceid=chrome&ie=UTF-8&tbs=lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:10&tbm=lcl&sxsrf=AOaemvJhHI-sNY5dNgNjay00E90sLLBPAA:1642136229727&rflfq=1&num=10&rldimm=4718433137219823749&lqi=CjFkYWZ0YXIgdG9rbyBoZXJiYWwgZGkgamF3YSB0aW11ciBkZW5nYW4gbG9uZ2l0dWRlWjMiMWRhZnRhciB0b2tvIGhlcmJhbCBkaSBqYXdhIHRpbXVyIGRlbmdhbiBsb25naXR1ZGWSARVoZXJiYWxfbWVkaWNpbmVfc3RvcmWqATkQASo1IjFkYWZ0YXIgdG9rbyBoZXJiYWwgZGkgamF3YSB0aW11ciBkZW5nYW4gbG9uZ2l0dWRlKCY&ved=2ahUKEwjY7JSVurD1AhVNSGwGHWg7BdgQvS56BAgKEDI&rlst=f',NULL,7),('https://www.google.com/search?q=herbal+grosir+31&oq=herbal+grosir+31&aqs=chrome..69i57j0i512j0i22i30l3j69i60l2j69i61.4265j0j7&sourceid=chrome&ie=UTF-8)',NULL,8),('https://www.foodierate.com/listing/iboe-herbal-bar-surabaya-bubutan-pusat-grosir-surabaya-pgs)',NULL,9),('https://www.stokistproduknasa.com/2019/07/grosir-produk-nasa-di-surabaya-jawa-timur.html)',NULL,10),('https://www.google.com/search?q=Toko+herbal+surabaya&sxsrf=AOaemvLo3IyU_vNyvlYlQxVdMNTI582W_w%3A1642137248923&ei=oAbhYZ3oN6-C4-EPhLe46AY&ved=0ahUKEwiduJP7vbD1AhUvwTgGHYQbDm0Q4dUDCA0&uact=5&oq=Toko+herbal+surabaya&gs_lcp=Cgdnd3Mtd2l6EAMyBAgjECcyBggAEBYQHjIGCAAQFhAeMgYIABAWEB4yBggAEBYQHjIGCAAQFhAeMgYIABAWEB4yBggAEBYQHjIGCAAQFhAeMgYIABAWEB46BwgjEOoCECdKBAhBGABKBAhGGABKBQhEGIUOSgQIQxgDUNUtWNUtYKwzaAJwAHgAgAG8AYgBvAGSAQMwLjGYAQCgAQGgAQKwAQrAAQE&sclient=gws-wiz) ',NULL,11),('https://www.google.com/search?q=HERBAL+66+SURABAYA+(Habbatussauda%2Fjinten%2C+Minyak+Zaitun%2C+Madu%2C+dll)&oq=HERBAL+66+SURABAYA+(Habbatussauda%2Fjinten%2C+Minyak+Zaitun%2C+Madu%2C+dll)&aqs=chrome..69i57.1174j0j7&sourceid=chrome&ie=UTF-8) ',NULL,12),('https://www.google.com/search?q=Herbal+Haisya&sxsrf=AOaemvLDk2qk3HhrQmAEIh1N3Uj1L52nNg%3A1642137329610&ei=8QbhYce_JNuG4-EPw_G16AY&ved=0ahUKEwiH_M-hvrD1AhVbwzgGHcN4DW0Q4dUDCA0&uact=5&oq=Herbal+Haisya&gs_lcp=Cgdnd3Mtd2l6EAMyBwgjEOoCECcyBwgjEOoCECcyBwgjEOoCECcyBwgjEOoCECcyBwgjEOoCECcyBwgjEOoCECcyBwgjEOoCECcyBwgjEOoCECcyBwgjEOoCECcyBwgjEOoCECdKBAhBGABKBAhGGABKBQhEGJMGSgQIQxgDUPgFWJ4cYMMfaAJwAHgAgAEAiAEAkgEAmAEAoAEBoAECsAEKwAEB&sclient=gws-wiz) ',NULL,13),('https://www.google.com/search?q=Sidomuncul%2C+Jl.+Raya+Sumberejo%2C+Rangagung%2C+Sumberejo&sxsrf=AOaemvJHw_1--Wsr75bKPk8pGNGOmnBZ2w%3A1642137435182&ei=WwfhYeXBCtir4t4Ps-WAkAo)',NULL,14),('https://www.google.com/search?q=(CV.+NaFa+Store+%7C+Jual+Obat+Majakanza+%7C+Distributor+Resmi+Kanza+%7C+Jual+Obat+Herba&sxsrf=AOaemvLFzK8FNWyXPnx0ih_Orf7rZKQVVg:1642137892658&tbm=isch&source=iu&ictx=1&vet=1&fir=VehEyRW0z3nK7M%252C4ObvsdZ93mAGSM%252C_%253BUyay-sVPRXJg4M%252CXPRTuodsam7jTM%252C_%253B5AkAfoOIZxAB7M%252C8dLEeogFzuRySM%252C_%253BIkKFl19jXwamsM%252CTWdoOV4Ezca3nM%252C_%253BAWBM_aNeSDyn_M%252C-4n5xYwsIz-sXM%252C_%253B0hEyn10w9YNJPM%252COjN25c1dfHv88M%252C_%253BPQKtXiFDBIm0lM%252CEzvm6w9Ko3FY6M%252C_%253BYd_WarUezIXPLM%252CQLPRxBo5qs8ggM%252C_%253BK6CDcWYgQQ-O_M%252C75IsefPJ-N7J_M%252C_%253BWgclSd63o34DhM%252CC3oQ-8jmY1yxOM%252C_&usg=AI4_-kRjz1hJI5GgKxxGkM4yelDjfvroMQ&sa=X&ved=2ahUKEwj_9I2uwLD1AhVq7XMBHbb9BPAQ9QF6BAgJEAE#imgrc=Uyay-sVPRXJg4M)',NULL,15),('https://lh5.googleusercontent.com/p/AF1QipMmWnj_41DZ8LqCAPnLxTkC-NvbcHLtAzneWA7n=w408-h544-k-no)',NULL,16),('https://www.google.com/maps/uv?pb=!1s0x2dd7fb13d09ad943:0xd616a8a99257f14!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipMmWnj_41DZ8LqCAPnLxTkC-NvbcHLtAzneWA7n%3Dw120-h160-k-no!5scap+cip+herbal+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipMmWnj_41DZ8LqCAPnLxTkC-NvbcHLtAzneWA7n&hl=id&sa=X&ved=2ahUKEwjQ5cr_wbD1AhXD7XMBHRT3DnAQoip6BAgjEAM)',NULL,17),('https://www.google.com/maps/uv?pb=!1s0x2e780dcca2078619:0x4d6ad5163645f607!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipPlOzr9T3cqQ0b_9eQgNVQ6acpLqs_0l2UXquRd%3Dw130-h87-n-k-no!5sToko+obat+herbal+jombang+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipPlOzr9T3cqQ0b_9eQgNVQ6acpLqs_0l2UXquRd&hl=id)',NULL,18),('https://www.google.com/maps/uv?pb=!1s0x2e786b065d356699:0xb5c7ce5fc92d2dc2!3m1!7e115!4shttps://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid%3DxXTP-B_OeE2KRWn310ldgw%26cb_client%3Dsearch.gws-prod.gps%26yaw%3D46.78037%26pitch%3D0%26thumbfov%3D100%26w%3D260%26h%3D175!5sToko+obat+herbal+jombang+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e2!2sxXTP-B_OeE2KRWn310ldgw&hl=id)',NULL,19),('https://www.google.com/maps/uv?pb=!1s0x2dd7e4ff8de46e01:0x3064c5547e6394bc!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipN6gqW636X46BnqPGcm0pmRabfCxGDMRNG6lhHS%3Dw260-h175-n-k-no!5stoko+grosir+herbal+jawa+timur+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipN6gqW636X46BnqPGcm0pmRabfCxGDMRNG6lhHS&hl=id)',NULL,20),('https://www.google.com/maps/uv?pb=!1s0x2e78400e2a269065:0x92487dcaf19e5fc!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipOphJJ_9BRZi24XcjeJEBh3EvRtwDMQCLssH3wK%3Dw173-h175-n-k-no!5sToko+obat+herbal+jombang+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipOphJJ_9BRZi24XcjeJEBh3EvRtwDMQCLssH3wK&hl=id)',NULL,21),('https://www.google.com/maps/uv?pb=!1s0x2e784021fc6b6e13:0x68c134cac4183d8d!3m1!7e115!4shttps://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid%3DhJO_3gupUlkp2MgfaJlWNg%26cb_client%3Dsearch.gws-prod.gps%26yaw%3D270.7498%26pitch%3D0%26thumbfov%3D100%26w%3D520%26h%3D175!5sToko+obat+herbal+jombang+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e2!2shJO_3gupUlkp2MgfaJlWNg&hl=id)',NULL,22),('https://www.google.com/maps/uv?pb=!1s0x2dd7fb1d6223721f:0xaeb618b9996e295a!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipPljYpvjAGO9arfT9hQe04PlDRf3OQ6JxaGqBI6%3Dw86-h87-n-k-no!5stoko+grosir+herbal+jawa+timur+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipPljYpvjAGO9arfT9hQe04PlDRf3OQ6JxaGqBI6&hl=id)',NULL,23),('https://grosirherbalsidoarjo.business.site/?utm_source=gmb&utm_medium=referral)',NULL,24),('https://lh5.googleusercontent.com/p/AF1QipP7iGX4j9SJPGLY9L9QM9DpMWXYsvvUOa4ntM5g=w427-h240-k-no)',NULL,25),('https://www.google.com/maps/uv?pb=!1s0x2e789808aca63a4f:0x3e8279990972fcd0!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipMN2y3GZZw9_I2YqrxK1YGpONvrHBu_Gubi5EA%3Dw260-h175-n-k-no!5sgudang+herbal+malang+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipMN2y3GZZw9_I2YqrxK1YGpONvrHBu_Gubi5EA&hl=id)',NULL,26),('https://www.google.com/maps/uv?pb=!1s0x2e77f74e7e9c715b%3A0xe6f3545df8c25428!3m1!7e115!4shttps%3A%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipNhL2K7BcSHZaxmjGt7jGIPMNaUn-hojwa1kvcZ%3Dw260-h175-n-k-no!5stoko%20grosir%20herbal%20lamongan%20-%20Penelusuran%20Google!15sCgIgAQ&imagekey=!1e10!2sAF1QipNhL2K7BcSHZaxmjGt7jGIPMNaUn-hojwa1kvcZ&hl=id#)',NULL,27),('https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=EAQtzywBQ2c2mzQvHJ1Vkg&cb_client=search.gws-prod.gps&w=408&h=240&yaw=69.762634&pitch=0&thumbfov=100)',NULL,28),('https://www.google.com/maps/uv?pb=!1s0x2dd6298b320d971b%3A0xb718341b3c18a6e2!3m1!7e115!4shttps%3A%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipOUC1ftr7xMMQEsPkVaV_0qd_ula8_DVA9V9Rqt%3Dw130-h87-n-k-no!5sToko%20obat%20herbal%20malang%20-%20Penelusuran%20Google!15sCgIgAQ&imagekey=!1e10!2sAF1QipOUC1ftr7xMMQEsPkVaV_0qd_ula8_DVA9V9Rqt&hl=id#)',NULL,29),('https://lh5.googleusercontent.com/p/AF1QipN9v09SI1RcMSbeEi_f9oe56eat1ePV72jeBs67=w470-h240-k-no)',NULL,30),('https://www.google.com/maps/uv?pb=!1s0x2dd629dab44fdb85:0x844a75574547825a!3m1!7e115!4s//lh4.googleusercontent.com/proxy/4xD4NU8XKMUjbQf5k5lfRcyGqqLT16pQhHDqp9YtcA2kfHOxlYZOlwEodPKcoLPvNROUWvG6_lL7JEhzc4DEoBn-adl6VjlMAA2Z8peU34wi0-x1UcrrjVOgc7XwN5JwuQI2bxooBnq1XB_F9M8BhG6f1mXMYF2zB_CvskkIIP3I%3Dw173-h175-n-k-no!5sToko+obat+herbal+malang+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e2!2sEais2vHbjtEAAAQfCbC_ow&hl=id)',NULL,31),('https://www.google.com/maps/uv?pb=!1s0x2dd7dfdfe009f683:0xd72df28495d99227!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipMPWhTuxuB2Nm1DUbFkKyMq1Qgty2hT8JOuuVnX%3Dw173-h175-n-k-no!5srumah+herbal+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipMPWhTuxuB2Nm1DUbFkKyMq1Qgty2hT8JOuuVnX&hl=id)',NULL,32),('https://www.google.com/maps/uv?pb=!1s0x2e784b9ff3b7a001:0x5cebb4655c5a0cc6!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipPBWoeRa65HvMzpcUpzew7LFeNwGf6ZiXbhLOhG%3Dw86-h87-n-k-no!5sobat+herbal+nganjuk+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipPBWoeRa65HvMzpcUpzew7LFeNwGf6ZiXbhLOhG&hl=id)',NULL,33),('https://www.google.com/maps/uv?pb=!1s0x2e784ba46260bd3b:0xb8197310901590bd!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipNBRAS_WeJmEJFIJNQrTcnoImQubYvLAJMeiyI5%3Dw260-h175-n-k-no!5sobat+herbal+nganjuk+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipNBRAS_WeJmEJFIJNQrTcnoImQubYvLAJMeiyI5&hl=id)',NULL,34),('https://www.google.com/maps/uv?pb=!1s0x2dd1533c9cef3eef:0xc08d85518a18ad25!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipOmtbnEyFGjvii8bseC5RlROX2xnVfYBtvUBYdM%3Dw260-h175-n-k-no!5stoko+grosir+herbal+banyuwangi+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipOmtbnEyFGjvii8bseC5RlROX2xnVfYBtvUBYdM&hl=id)',NULL,35),('https://www.google.com/maps/uv?pb=!1s0x2e78edf9ac5fe8bf:0xfd51316d62857642!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipOGC56MfmzNViD0GsYnNVY2bLx2Uc6lp6b2tOvz%3Dw173-h175-n-k-no!5sToko+obat+herbal+blitar+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipOGC56MfmzNViD0GsYnNVY2bLx2Uc6lp6b2tOvz&hl=id)',NULL,36),('https://www.google.com/maps/uv?pb=!1s0x2e784bcdae19dba5:0xa41ea3f48106693e!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipMFonl5_i9JkMFgOqe9zv-A3Q3O4H6wrFXmUpc-%3Dw260-h175-n-k-no!5sobat+herbal+nganjuk+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipMFonl5_i9JkMFgOqe9zv-A3Q3O4H6wrFXmUpc-&hl=id)',NULL,37),('https://lh3.googleusercontent.com/glsgmb/AJtb4XB6LQ0McZqx4D0pU-iCyMU02hEUbvxlOx4kJwWLEdV5XK-ArSvEUtifk9zdKCWNQSM22OsdrvDB7Bo38sMXy_-o_A=w148-h100-p-no)',NULL,38),('https://www.google.com/maps/uv?pb=!1s0x2e780d8b1030ecf5:0xb712645e2a8716a5!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipMRZm_6v5nF2iI1vfpnWlkxSS39KxL6hd9M2mOI%3Dw130-h87-n-k-no!5sToko+obat+herbal+mojokerto+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipMRZm_6v5nF2iI1vfpnWlkxSS39KxL6hd9M2mOI&hl=id)',NULL,39),('https://www.google.com/maps/uv?pb=!1s0x2e780d8ade83f22f:0x33ecccda1a1f5664!3m1!7e115!4s//lh3.googleusercontent.com/proxy/k-fuwZOilJZUwK-4Z0eewFbQf5xkY2A8GeE-Z7wEQA2W19x-gOhzXpP8Y6uqZA3TmXpyPwUCvxawGUXcFA2pCpZA8IanXSbkY_EhOEqSe0hcLGLEtD3Gql6wtJgFoq8DuC6zImyqzHNEnVlrJNiIflBTzllRLAGLOJtHWYSZRQYy%3Dw130-h87-n-k-no!5sToko+obat+herbal+mojokerto+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e2!2sbjFxcPkKfA0AAAQZTQ2xlQ&hl=id)',NULL,40),('https://www.google.com/maps/uv?pb=!1s0x2e780d32be05f175:0xcdfdbc1957a98727!3m1!7e115!4shttps://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid%3D1hBDysTshVC5JJwa8Kozlw%26cb_client%3Dsearch.gws-prod.gps%26yaw%3D104.10594%26pitch%3D0%26thumbfov%3D100%26w%3D173%26h%3D87!5sToko+obat+herbal+mojokerto+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e2!2s1hBDysTshVC5JJwa8Kozlw&hl=id)',NULL,41),('https://www.google.com/maps/uv?pb=!1s0x2dd691567539a983:0x86cd37ec4940f504!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipNBDM5eIKOKSLXm8nK0kmgyGINGg5xrG6gkhuYw%3Dw260-h175-n-k-no!5stoko+grosir+herbal+jember+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipNBDM5eIKOKSLXm8nK0kmgyGINGg5xrG6gkhuYw&hl=id)',NULL,42),('https://www.google.com/maps/uv?pb=!1s0x2e784964a84a4935:0x223079aa2821dca4!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipM-6mGNmWh6AVYYdwq1o-ytAd_RyuOtpsJHR7cB%3Dw173-h175-n-k-no!5sobat+herbal+nganjuk+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipM-6mGNmWh6AVYYdwq1o-ytAd_RyuOtpsJHR7cB&hl=id)',NULL,43),('https://www.google.com/maps/uv?pb=!1s0x2e784b06892d267d:0x88f1a14a9728d47b!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipOwVCpwPA3kJfM51KVzMHRPBsZ9kc_4idbEhGeR%3Dw260-h175-n-k-no!5sobat+herbal+nganjuk+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipOwVCpwPA3kJfM51KVzMHRPBsZ9kc_4idbEhGeR&hl=id)',NULL,44),('https://www.google.com/maps/uv?pb=!1s0x2e7847b486f2c133:0x41369c3af4b013ec!3m1!7e115!4shttps://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid%3DJ8YSWtkilJAbq6vwdV4jZQ%26cb_client%3Dsearch.gws-prod.gps%26yaw%3D192.81491%26pitch%3D0%26thumbfov%3D100%26w%3D260%26h%3D175!5sobat+herbal+nganjuk+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e2!2sJ8YSWtkilJAbq6vwdV4jZQ&hl=id)',NULL,45),('https://www.google.com/maps/uv?pb=!1s0x2e7849b8ec67bced:0x6547e7970ce737ce!3m1!7e115!4shttps://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid%3D8MGngNa3ItgcDH6-qzKH0g%26cb_client%3Dsearch.gws-prod.gps%26yaw%3D105.14389%26pitch%3D0%26thumbfov%3D100%26w%3D520%26h%3D175!5sobat+herbal+nganjuk+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e2!2s8MGngNa3ItgcDH6-qzKH0g&hl=id)',NULL,46),('https://www.google.com/maps/uv?pb=!1s0x2e781277d5653af3:0xeff62d6154bacb3!3m1!7e115!4s//lh5.googleusercontent.com/proxy/zBER4yH5seIAGaRw2A3gmWuQQy8pcADkYexzGpWU9PZVfBVsy8kZEDRmnZwHCZNHrTNj8lRcft3146gAZg_jYxeYZAmvwGSIUWR8Isw9P9Ckf3a0HBHW-hBGeXoh5lQHnTLdCisndIC4wGhQRjF2mGDvwutdcmoMbJ8mSEgjOz4T%3Dw260-h175-n-k-no!5sToko+obat+herbal+mojokerto+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e2!2sY4PKwYtxJqIAAAQZS2msBw&hl=id)',NULL,47),('https://www.google.com/maps/uv?pb=!1s0x2dd7adfe39c2d6e3:0x1b098b677af8ebf8!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipP-9i3hSbt2QFm_EIZ4aMLj1k75caAYsYjO6S9t%3Dw260-h175-n-k-no!5sobat+herbal+probolinggo+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipP-9i3hSbt2QFm_EIZ4aMLj1k75caAYsYjO6S9t&hl=id)',NULL,48),('https://lh3.googleusercontent.com/p/AF1QipMzL3KVJ6yTmpnCnABEIy6FgCSBdpEBQH1BIakI=h305-no)',NULL,49),('https://www.google.com/maps/uv?pb=!1s0x2dd7adeaa32d06b1:0x3bf56c9a77a5b48!3m1!7e115!4shttps://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid%3DneQjfdqaip8agfQz7dfSRw%26cb_client%3Dsearch.gws-prod.gps%26yaw%3D101.47597%26pitch%3D0%26thumbfov%3D100%26w%3D520%26h%3D175!5sobat+herbal+probolinggo+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e2!2sneQjfdqaip8agfQz7dfSRw&hl=id)',NULL,50),('https://www.google.com/maps/uv?pb=!1s0x2e780b124396d627:0x6a4f0d8d1ed0e840!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipOfde2ZkR56Av2flUdyhhmC3xxEpfA94E7en_RZ%3Dw260-h175-n-k-no!5sToko+obat+herbal+mojosari+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipOfde2ZkR56Av2flUdyhhmC3xxEpfA94E7en_RZ&hl=id)',NULL,51),('https://www.google.com/maps/uv?pb=!1s0x2dd7b344d78a1217:0x3e251a2c480203a1!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipN2qdM45JUHQNS3COHDt-3J2yMObwQ5W_ZDKDWX%3Dw260-h175-n-k-no!5sobat+herbal+probolinggo+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipN2qdM45JUHQNS3COHDt-3J2yMObwQ5W_ZDKDWX&hl=id)',NULL,52),('https://www.google.com/maps/uv?pb=!1s0x2dd7e753c68bb2b7:0xe7a4e62a19107943!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipO1qC3lbo0g1o2lIZcoO3T-CYrUS7fOSIwKGGC9%3Dw260-h175-n-k-no!5stoko+grosir+herbal+buduran+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipO1qC3lbo0g1o2lIZcoO3T-CYrUS7fOSIwKGGC9&hl=id)',NULL,53),('https://www.google.com/maps/uv?pb=!1s0x2e7797e2523532fb:0x7c6e49648059c766!3m1!7e115!4shttps://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid%3Dk5jA8gBMbaU1pOb2c1wdbg%26cb_client%3Dsearch.gws-prod.gps%26yaw%3D130.67578%26pitch%3D0%26thumbfov%3D100%26w%3D520%26h%3D175!5sToko+obat+herbal+tuban+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e2!2sk5jA8gBMbaU1pOb2c1wdbg&hl=id)',NULL,54),('https://www.google.com/maps/uv?pb=!1s0x2dd7e5fd9a5f4fc3:0xaff2d9084f6b218a!3m1!7e115!4s//lh5.googleusercontent.com/proxy/rVVQanWHSjm709o85grggzF06_P-CpTGVuMOHAzYXnnjt5mLgVVtoOZCrn4ouoKg3pIfhDNmMOhSjKCXQriNLLs-OiHjeYPgJRvE4Mt0-TGH_eor1cPmmgZ0AwxYIvGGh5Gk3Fx8IZGjBxxmr4zJBPUzzJflTsonay8Ev03kWP1p%3Dw260-h175-n-k-no!5stoko+grosir+herbal+buduran+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e2!2szplKZafmfDoAAAQYjtUnYw&hl=id)',NULL,55),('https://www.google.com/maps/uv?pb=!1s0x2dd7e1a15f6ffead:0xefb4f2d5b4d9ce8b!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipOexf67ruiplBZsA35BNulomnEusZnY1c8t6alO%3Dw260-h175-n-k-no!5sToko+obat+herbal+tulangan+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipOexf67ruiplBZsA35BNulomnEusZnY1c8t6alO&hl=id)',NULL,56),('https://www.google.com/maps/uv?pb=!1s0x2dd7e43d95555555:0x407c48225818bede!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipNlnWOaKhimE6P4yO9aXgj3IkxgzlVBDlDv7e0k%3Dw260-h175-n-k-no!5stoko+grosir+herbal+buduran+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipNlnWOaKhimE6P4yO9aXgj3IkxgzlVBDlDv7e0k&hl=id)',NULL,57),('https://www.google.com/maps/uv?pb=!1s0x2dd7e3cf935c26e7:0x72eba8983e837553!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipOr1t_zjC_XCGHMq1O0yQuKhQz5Ti5N14HEawTe%3Dw260-h175-n-k-no!5sToko+obat+herbal+taman+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipOr1t_zjC_XCGHMq1O0yQuKhQz5Ti5N14HEawTe&hl=id)',NULL,58),('https://www.google.com/maps/uv?pb=!1s0x2dd7e525cf1c1f63:0x5492af5f685ffc9c!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipMdRDplEUzt8htdQfIFeo5dyDhPGD9L8g-h6YKq%3Dw173-h175-n-k-no!5stoko+grosir+herbal+buduran+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipMdRDplEUzt8htdQfIFeo5dyDhPGD9L8g-h6YKq&hl=id)',NULL,59),('https://www.google.com/maps/uv?pb=!1s0x2dd7e3ad30ff48f3:0x33d7e9ddb3cad6a8!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipOYknEiKuTd1nE3KiwSfNwOha9Qgn2m4X6F6rRa%3Dw260-h175-n-k-no!5sToko+obat+herbal+taman+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipOYknEiKuTd1nE3KiwSfNwOha9Qgn2m4X6F6rRa&hl=id)',NULL,60),('https://www.google.com/maps/uv?pb=!1s0x2dd7fa276049545b:0x12059f2cb3976d5a!3m1!7e115!4s//lh6.googleusercontent.com/proxy/SmFW4mN0lmCGmfxwktCrmB2cajS7cUTkAfdhpGsRb8QDm3hOEsVXGlAQ1e2cgL_iyo8JVtYbgAZM0W3GOsyLUY8qG76gE_9W3o83FchuOnDW1Wf2P99Bl26jgJfihwEdmeBJVzP1NZ0yCUGibe_HuRBe_MBkm6P-V5E1mvArWhXs%3Dw173-h175-n-k-no!5sToko+obat+herbal+surabaya+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e2!2sgvsYdvJf3QMAAAQYaf5U3g&hl=id)',NULL,61),('https://www.google.com/maps/uv?pb=!1s0x2dd7fb9de6a45b29:0xdf70f12d7e113dbe!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipNHSRwyfNMEmULQOW769PUt9_h0RH0A6PY4HEk3%3Dw260-h175-n-k-no!5sToko+obat+herbal+surabaya+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipNHSRwyfNMEmULQOW769PUt9_h0RH0A6PY4HEk3&hl=id)',NULL,62),('https://www.google.com/maps/uv?pb=!1s0x2e7797a57e18f2cb:0xa5583181afc1d476!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipN5Y27h1YqyE2GU7m38NbciFhYzqLDCDTK10iL-%3Dw260-h175-n-k-no!5stoko+grosir+herbal+tuban+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipN5Y27h1YqyE2GU7m38NbciFhYzqLDCDTK10iL-&hl=id)',NULL,63),('https://www.google.com/maps/uv?pb=!1s0x2dd7f9f34669eb3d:0x6b40488683d57e4!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipMrKtX6E3gbvM0ruaYMK-2w4tgvmG1BwCdlbttG%3Dw260-h175-n-k-no!5sToko+obat+herbal+surabaya+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipMrKtX6E3gbvM0ruaYMK-2w4tgvmG1BwCdlbttG&hl=id)',NULL,64),('https://www.google.com/maps/uv?pb=!1s0x2dd7f9778a41777f:0xd340d0fff3d52cc7!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipNu8Jy0_kVlVYuTc2sZT_CGzgwPkNyFO3Lrqtz6%3Dw260-h175-n-k-no!5sToko+apotik++herbal+surabaya+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipNu8Jy0_kVlVYuTc2sZT_CGzgwPkNyFO3Lrqtz6&hl=id)',NULL,65),('https://www.google.com/maps/uv?pb=!1s0x2dd7fba257acd7e5:0x4f697905c50e5a27!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipOPqXbwJ-jV6mwZoiEGxkGHHSNt4OjYLErGpmck%3Dw130-h87-n-k-no!5sobat+herbal+duku+pakis+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipOPqXbwJ-jV6mwZoiEGxkGHHSNt4OjYLErGpmck&hl=id)',NULL,66),('https://lh3.googleusercontent.com/glsgmb/AJtb4XCQ1R-2FR0MmpeyznwfXD2VDse8AArrRhXTbSpuQU2EUCIc0qPd3fO2ddcu9_inFZSDFb74mnixYAjBtycKwhQ25A=w148-h100-p-no)',NULL,67),('https://www.google.com/maps/uv?pb=!1s0x2dd7e18cbbb03fe9:0x630cb829c2857396!3m1!7e115!4s//lh6.googleusercontent.com/proxy/sOHJzngF6JJNdSSWcYiIs-x8pzqVJ5YXLH1kQlF6y5hEjFD81JmHErLgj_g_HzzjRKKz6IrL5k2-siPBzk9rpp5lMRyrne9iN3eAzikdmlABFGwzyB3rBiaBslGNjU_sLbs32gMir9TalOTAwoN22I9E3n1XzLAmjGzXwgbVEqG9%3Dw260-h175-n-k-no!5sjual+herbal+di+jawa+timur+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e2!2sc0h_s39Ml0EAAAQYn9IaQw&hl=id)',NULL,68),('https://www.google.com/maps/uv?pb=!1s0x2dd7fc87a80edf07:0x8abc070abece5fb2!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipOjc44yzocHitOv0GimSlYQ-yiqoAIl-o2DGz5b%3Dw260-h175-n-k-no!5sjual+herbal+di+jawa+timur+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipOjc44yzocHitOv0GimSlYQ-yiqoAIl-o2DGz5b&hl=id)',NULL,69),('https://www.google.com/maps/uv?pb=!1s0x2dd7fb577b431e4b:0xc058ea2bff773d5c!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipOuoVTAYcjG8GoyMspaqhjC0TTgeHeGgDpChXiK%3Dw260-h175-n-k-no!5sToko+apotik++herbal+surabaya+-+Penelusuran+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipOuoVTAYcjG8GoyMspaqhjC0TTgeHeGgDpChXiK&hl=id)',NULL,70),('https://www.google.co.id/maps/uv?pb=!1s0x2dd7fb7bd7a0d64b%3A0x4ecb91495a2b1dfe!3m1!7e115!4s%2F%2Flh6.googleusercontent.com%2Fproxy%2FlQwc7NuyO3q1eLFuAodGH4oMBiJnwOudm9_YTap3sY3mlxTu58M6x3PEv6KqAJTZnYgwFkbTF_e4mWS-Zvh7DzPQMhkin9MikfnrmBuOY-pAL8zKnOt34iQKBzXkNZy7y__kxQTXVIWaKcdAOCUDVMT2oLliIk4KKlUsV4CkB9lN%3Dw213-h160-k-no!5stoko%20anugrah%20herbal%20-%20Google%20Nggoleki!15sCgIgAQ&imagekey=!1e2!2sO8RdVP4B9HEAAAQYfek98A&hl=jv&sa=X&ved=2ahUKEwj_w67hj6f1AhWT7HMBHTZcBOcQoip6BAgiEAM',NULL,71);
/*!40000 ALTER TABLE `tbm_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbm_kota`
--

DROP TABLE IF EXISTS `tbm_kota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbm_kota` (
  `id_kota` int(11) NOT NULL AUTO_INCREMENT,
  `kota` varchar(100) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `date_deleted` datetime DEFAULT NULL,
  PRIMARY KEY (`id_kota`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbm_kota`
--

LOCK TABLES `tbm_kota` WRITE;
/*!40000 ALTER TABLE `tbm_kota` DISABLE KEYS */;
INSERT INTO `tbm_kota` VALUES (2,'Sidoarjo',NULL,'2021-09-09 23:00:23',NULL,NULL),(3,'Surabaya',NULL,'2021-09-09 23:27:22',1,'2021-09-09 23:27:54'),(4,'Mojokerto',NULL,'2021-09-09 23:33:30',NULL,NULL);
/*!40000 ALTER TABLE `tbm_kota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbm_user`
--

DROP TABLE IF EXISTS `tbm_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbm_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `password` text,
  `nama_toko` varchar(100) DEFAULT NULL,
  `alamat` text,
  `fk_kota` int(11) DEFAULT NULL,
  `no_hp` char(20) DEFAULT NULL,
  `status` int(11) DEFAULT '0' COMMENT '0 = not verified\n1 = verified',
  `access` char(10) DEFAULT NULL COMMENT 'admin\nuser',
  `longitude` varchar(100) DEFAULT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbm_user`
--

LOCK TABLES `tbm_user` WRITE;
/*!40000 ALTER TABLE `tbm_user` DISABLE KEYS */;
INSERT INTO `tbm_user` VALUES (1,NULL,NULL,'TOKO ANUGRAH HERBAL | MELAYANI GROSIR DAN ECERAN',NULL,NULL,'087829407428',0,NULL,'-7.3133161226809715','112.72380225353703'),(2,NULL,NULL,'Mumtaz Herbal Surabaya',NULL,NULL,'082141929674',0,NULL,'-7.2749893','112.7551674'),(3,NULL,NULL,'AL DHAN HERBAL',NULL,NULL,'082233943756',0,NULL,'-7.3640701','112.6328946'),(4,NULL,NULL,'Berkah herbal sidoarjo ',NULL,NULL,'087743215654',0,NULL,'-7.463153','112.6556212'),(5,NULL,NULL,'Toko Obat Herbal 99',NULL,NULL,'081330027019',0,NULL,'-7.1181','112.41501'),(6,NULL,NULL,'Al ahsan Toko Herbal',NULL,NULL,'081258488838',0,NULL,'-7.34484','112.69721'),(7,NULL,NULL,'toko obat penyakit liver banyuwangi ',NULL,NULL,'085655545500',0,NULL,'-7.9024222','112.280247'),(8,NULL,NULL,'HERBAL GROSIR 31',NULL,NULL,'082244792358',0,NULL,'-7.463153','112.6556212'),(9,NULL,NULL,'IBOE Herbal Bar - Pusat Grosir Surabaya Lt. 4F',NULL,NULL,'081252508127',0,NULL,'-7.463153','112.6556212'),(10,NULL,NULL,'Jual Herbal NASA Agen Distributor Surabaya',NULL,NULL,'081330066288',0,NULL,'-7.3666342,112','6313814,12'),(11,NULL,NULL,'Toko herbal surabaya',NULL,NULL,'085646481890',0,NULL,'-7.463153','112.6556212'),(12,NULL,NULL,'HERBAL 66 SURABAYA (Habbatussauda/jinten, Minyak Zaitun, Madu, dll',NULL,NULL,'089699364779',0,NULL,'-7.3554486','112.6310789'),(13,NULL,NULL,'Herbal Haisya',NULL,NULL,'081259512717',0,NULL,'-7.451899260409018','112.67178220355747'),(14,NULL,NULL,'Sidomuncul, Jl. Raya Sumberejo, Rangagung, Sumberejo',NULL,NULL,'08998798767',0,NULL,'-7.441483590812745','112.66508131094858'),(15,NULL,NULL,'CV. NaFa Store | Jual Obat Majakanza | Distributor Resmi Kanza | Jual Obat Herbal',NULL,NULL,'085730308404',0,NULL,'-7.419308935954328','112.67164352126409'),(16,NULL,NULL,'Toko herbal islami',NULL,NULL,'081385462854',0,NULL,'-7.447079502502294','112.7114942077906'),(17,NULL,NULL,'Cak Cip Herbal',NULL,NULL,'085607763971',0,NULL,'-7.314875035712672','112.74423157305941'),(18,NULL,NULL,'AGEN STOCK HNI CANDI MULYO JOMBANG',NULL,NULL,'081252552247',0,NULL,'-7.511159738187346','112.2404477550281'),(19,NULL,NULL,'omah herbal ',NULL,NULL,'085100171788',0,NULL,'-7.520690184984631','112.23907446398951'),(20,NULL,NULL,'Humaira Herbal - Sedati',NULL,NULL,'082123055501',0,NULL,'-7.379178961812896','112.76061169040932'),(21,NULL,NULL,'tokoh aneka herbal',NULL,NULL,'08984874487',0,NULL,'-7.524774598189106','112.22039725390978'),(22,NULL,NULL,'Obat Herbal Pelangsing Perut FIFORLIF',NULL,NULL,'081287858549',0,NULL,'-7.524774598189106','112.23220800894963'),(23,NULL,NULL,'HUSSEIN HERBAL (Toko Jual Grosir Herbal',NULL,NULL,'085733634933',0,NULL,'-7.1267145077914185','112.58751432395539'),(24,NULL,NULL,'grosir herbal sidoarjo',NULL,NULL,'085645781985',0,NULL,'-7.410136407776371','112.66696574881747'),(25,NULL,NULL,'Agen distributor grosir herbal murah jombang',NULL,NULL,'08976767979',0,NULL,'-7.558186471340548','112.2377011752705'),(26,NULL,NULL,'Gudang Herbal Malang',NULL,NULL,'082225203582',0,NULL,'-7.990408919676949','112.65501670654987'),(27,NULL,NULL,'Lamongan Herbal',NULL,NULL,'081553844444',0,NULL,'-7.107285167832711','112.41656798743537'),(28,NULL,NULL,'istana herbal malang ',NULL,NULL,'081286865500',0,NULL,'-7.911338320644912','112.6064260626897'),(29,NULL,NULL,'TOKO AJONG HERBAL',NULL,NULL,'0859144763598',0,NULL,'-7.9231641058409545','112.64097152823666'),(30,NULL,NULL,'Agen Herbal Nasa Lamongan',NULL,NULL,'081233504321',0,NULL,'-7.093680621577812','112.38809742525594'),(31,NULL,NULL,'Supplier Herbal Malang',NULL,NULL,'(0341) 486501',0,NULL,'-7.924026573111725','112.63311641886267'),(32,NULL,NULL,'Rumah Herbal Al Hikmah',NULL,NULL,'08988414906',0,NULL,'-7.514089489886896','112.64341741835935'),(33,NULL,NULL,'Toko Serba Herbal',NULL,NULL,'085130329066',0,NULL,'-7.560834317601975','111.9085267374905'),(34,NULL,NULL,'Toko Herbal Naturindo Nganjuk',NULL,NULL,'085855558566',0,NULL,'-7.55860973420934','111.9187810352221'),(35,NULL,NULL,'Toko Herbal Banyuwangi',NULL,NULL,'082312772002',0,NULL,'-8.207775295631315','114.13752225252838'),(36,NULL,NULL,'Herbal Aimpel',NULL,NULL,'09888373987',0,NULL,'-8.053223535361287','112.17017091345326'),(37,NULL,NULL,'Herbal KLOROFIL',NULL,NULL,'085774155000',0,NULL,'-7.574518186959406','111.89556715804073'),(38,NULL,NULL,'PUSAT HERBAL, STAR HERBAL OFFICIAL ',NULL,NULL,'082334409872',0,NULL,'-7.459240960413005','112.44149356831049'),(39,NULL,NULL,'Sentra Herbal Mojokerto',NULL,NULL,'081332941931',0,NULL,'-7.453113404933924','112.4342658087746'),(40,NULL,NULL,'Herbal Sarinah',NULL,NULL,'081382606500',0,NULL,'-7.449709170397354','112.43007708575065'),(41,NULL,NULL,'Qnc Jelly Gamat Mojokerto',NULL,NULL,'0895339420575',0,NULL,'-7.462645120832245','112.43943363179852'),(42,NULL,NULL,'TOKO HERBAL PASUTRI JEMBER',NULL,NULL,'087712448679',0,NULL,'-8.135764975171254','113.66335591783287'),(43,NULL,NULL,'Apotik Herbal Indonesia KC Nganjuk',NULL,NULL,'085230804770',0,NULL,'-7.585552162128017','112.02152120393939'),(44,NULL,NULL,'Thifa Herbal',NULL,NULL,'081703248991',0,NULL,'-7.558886983494563','111.8975404069866'),(45,NULL,NULL,'Duta herbal',NULL,NULL,'085336658118',0,NULL,'-7.552311233416104','112.08371131961749'),(46,NULL,NULL,'Gerai Sehat M-King Demangan Tanjunganom',NULL,NULL,'085646146133',0,NULL,'-7.552233977452926','111.98988817061158'),(47,NULL,NULL,'Sahabat herbal ',NULL,NULL,'(0321) 332847',0,NULL,'-7.462660225424004','112.42779413710446'),(48,NULL,NULL,'Stockis Resmi Tiens Probolingg',NULL,NULL,'895334320583',0,NULL,'-7.729734471347129','113.20745028443625'),(49,NULL,NULL,'Hammam Herbal',NULL,NULL,'082131336640',0,NULL,'-7.478772080711865','112.42616939095376'),(50,NULL,NULL,'Herbal Indo Utama',NULL,NULL,'081226157195',0,NULL,'-7.722267666080118','113.20195711825194'),(51,NULL,NULL,'Madinah Store',NULL,NULL,'085236565614',0,NULL,'-7.510521634336126','112.55591596171523'),(52,NULL,NULL,'DISTRIBUTOR / AGEN RESMI NASA',NULL,NULL,'085655083400',0,NULL,'-7.7233206421833795','113.17288197328448'),(53,NULL,NULL,'Distributor Herbal Sidoarjo',NULL,NULL,'082257450622',0,NULL,'-7.430941571955054','112.73940544062675'),(54,NULL,NULL,'adinda herbal',NULL,NULL,'082142230141',0,NULL,'-6.875590669353022','112.06034155050851'),(55,NULL,NULL,'afeng shop buduran',NULL,NULL,'081331406923',0,NULL,'-7.420939097400766','112.72293803318458'),(56,NULL,NULL,'Berkah herbal sidoarjo ',NULL,NULL,'087743215654',0,NULL,'-7.484011899060687','112.6557251202036'),(57,NULL,NULL,'Herbal Surabaya',NULL,NULL,'081939004333',0,NULL,'-7.405782002802423','112.74006613386497'),(58,NULL,NULL,'Toko Keharmonisan Pasutri Sidoarjo',NULL,NULL,'081230599687',0,NULL,'-7.348001190624264','112.70361889143224'),(59,NULL,NULL,'Agen Herbal NASA (Nurul Azizah',NULL,NULL,'087819547958',0,NULL,'-7.4127690615668405','112.72186785825313'),(60,NULL,NULL,'Obat Herbal Pelangsing Perut FIFORLIF',NULL,NULL,'085645330957',0,NULL,'-7.363340438477859','112.67227965929648'),(61,NULL,NULL,'toko obat herbal',NULL,NULL,'085645330957',0,NULL,'-7.259277697240088','112.78045268702307'),(62,NULL,NULL,'AL DHAN HERBAL',NULL,NULL,'082233943756',0,NULL,'-7.264058929042805','112.75585132750251'),(63,NULL,NULL,'Duta Herbal Kerawang',NULL,NULL,'081230466008',0,NULL,'-6.869398440343093','112.06843501445866'),(64,NULL,NULL,'Kios Vitamale Surabaya',NULL,NULL,'083857595674',0,NULL,'-7.2364718449363075','112.76142345896059'),(65,NULL,NULL,'APOTEK HERBAL',NULL,NULL,'081330066288',0,NULL,'-7.242878445872878','112.76283930129216'),(66,NULL,NULL,'AKBAR HERBAL SURABAYA online shop',NULL,NULL,'085231060002',0,NULL,'-7.294753255919994','112.71952533974455'),(67,NULL,NULL,'HERBALSEMBUHKU',NULL,NULL,'085755201000',0,NULL,'-7.234323151155394','112.79149413957057'),(68,NULL,NULL,'Jual obat herbal SARI LEBAH SARI BUMI',NULL,NULL,'085787151091',0,NULL,'-7.4540581967184245','112.70660488715065'),(69,NULL,NULL,'Alami Herbal Surabaya',NULL,NULL,'081328537492',0,NULL,'-7.3039845990436385','112.70590759861261'),(70,NULL,NULL,'Toko Herbal Shifaa',NULL,NULL,'858537627638',0,NULL,'-7.285480028117243','112.77510698697672'),(71,NULL,NULL,'TOKO ANUGRAH HERBAL | MELAYANI GROSIR DAN ECERAN',NULL,NULL,'081232277222',0,NULL,'-7.313676077319031','112.72343934646295');
/*!40000 ALTER TABLE `tbm_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbt_transkasi`
--

DROP TABLE IF EXISTS `tbt_transkasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbt_transkasi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `fk_user` int(11) DEFAULT NULL,
  `fk_barang` int(11) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `diskon` double DEFAULT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `date_deleted` datetime DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbt_transkasi`
--

LOCK TABLES `tbt_transkasi` WRITE;
/*!40000 ALTER TABLE `tbt_transkasi` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbt_transkasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `tbv_barang`
--

DROP TABLE IF EXISTS `tbv_barang`;
/*!50001 DROP VIEW IF EXISTS `tbv_barang`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `tbv_barang` AS SELECT 
 1 AS `id_barang`,
 1 AS `nama_barang`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `tbv_kota`
--

DROP TABLE IF EXISTS `tbv_kota`;
/*!50001 DROP VIEW IF EXISTS `tbv_kota`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `tbv_kota` AS SELECT 
 1 AS `id_kota`,
 1 AS `kota`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `tbv_toko`
--

DROP TABLE IF EXISTS `tbv_toko`;
/*!50001 DROP VIEW IF EXISTS `tbv_toko`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `tbv_toko` AS SELECT 
 1 AS `id_user`,
 1 AS `nama_toko`,
 1 AS `status`,
 1 AS `alamat`,
 1 AS `id_kota`,
 1 AS `kota`,
 1 AS `image`,
 1 AS `longitude`,
 1 AS `latitude`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `tbv_transaksi`
--

DROP TABLE IF EXISTS `tbv_transaksi`;
/*!50001 DROP VIEW IF EXISTS `tbv_transaksi`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `tbv_transaksi` AS SELECT 
 1 AS `id_transaksi`,
 1 AS `id_user`,
 1 AS `harga`,
 1 AS `diskon`,
 1 AS `nama_toko`,
 1 AS `nama_barang`,
 1 AS `image_name`,
 1 AS `longitude`,
 1 AS `latitude`*/;
SET character_set_client = @saved_cs_client;

--
-- Dumping routines for database 'herbal'
--

--
-- Final view structure for view `tbv_barang`
--

/*!50001 DROP VIEW IF EXISTS `tbv_barang`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `tbv_barang` AS select `tb`.`id_barang` AS `id_barang`,`tb`.`nama_barang` AS `nama_barang` from `tbm_barang` `tb` where (isnull(`tb`.`deleted_by`) and isnull(`tb`.`date_deleted`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `tbv_kota`
--

/*!50001 DROP VIEW IF EXISTS `tbv_kota`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `tbv_kota` AS select `tk`.`id_kota` AS `id_kota`,`tk`.`kota` AS `kota` from `tbm_kota` `tk` where (isnull(`tk`.`deleted_by`) and isnull(`tk`.`date_deleted`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `tbv_toko`
--

/*!50001 DROP VIEW IF EXISTS `tbv_toko`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `tbv_toko` AS select `tu`.`id_user` AS `id_user`,`tu`.`nama_toko` AS `nama_toko`,`tu`.`status` AS `status`,`tu`.`alamat` AS `alamat`,`tk`.`id_kota` AS `id_kota`,`tk`.`kota` AS `kota`,`ti`.`image_name` AS `image`,`tu`.`longitude` AS `longitude`,`tu`.`latitude` AS `latitude` from ((`tbm_user` `tu` join `tbm_kota` `tk` on((`tk`.`id_kota` = `tu`.`fk_kota`))) left join `tbm_image` `ti` on((`ti`.`fk_user` = `tu`.`id_user`))) where ((`tu`.`nama_toko` is not null) and (`tu`.`latitude` is not null) and (`tu`.`longitude` is not null)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `tbv_transaksi`
--

/*!50001 DROP VIEW IF EXISTS `tbv_transaksi`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `tbv_transaksi` AS select `tt`.`id_transaksi` AS `id_transaksi`,`us`.`id_user` AS `id_user`,`tt`.`harga` AS `harga`,`tt`.`diskon` AS `diskon`,`us`.`nama_toko` AS `nama_toko`,`tb`.`nama_barang` AS `nama_barang`,`im`.`image_name` AS `image_name`,`us`.`longitude` AS `longitude`,`us`.`latitude` AS `latitude` from (((`tbt_transkasi` `tt` join `tbm_user` `us` on((`us`.`id_user` = `tt`.`fk_user`))) join `tbm_barang` `tb` on((`tb`.`id_barang` = `tt`.`fk_barang`))) left join `tbm_image` `im` on((`im`.`fk_transaksi` = `tt`.`id_transaksi`))) where (isnull(`im`.`fk_user`) and isnull(`tt`.`deleted_by`) and isnull(`tt`.`date_deleted`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-07  5:41:11
