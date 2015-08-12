<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2015-08-07 09:24:22 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 09:24:22 --> No URI present. Default controller set.
DEBUG - 2015-08-07 09:24:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 09:24:22 --> Total execution time: 0.2538
DEBUG - 2015-08-07 09:24:22 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 09:24:22 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 09:24:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 09:24:22 --> Global POST, GET and COOKIE data sanitized
ERROR - 2015-08-07 09:24:22 --> 404 Page Not Found: Faviconico/index
ERROR - 2015-08-07 09:24:22 --> 404 Page Not Found: Faviconico/index
DEBUG - 2015-08-07 09:24:22 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 09:24:22 --> Global POST, GET and COOKIE data sanitized
ERROR - 2015-08-07 09:24:22 --> 404 Page Not Found: Faviconico/index
DEBUG - 2015-08-07 09:37:43 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 09:37:43 --> No URI present. Default controller set.
DEBUG - 2015-08-07 09:37:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 09:37:43 --> Total execution time: 0.0097
DEBUG - 2015-08-07 09:38:41 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 09:38:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2015-08-07 09:38:41 --> Severity: Parsing Error --> syntax error, unexpected '}', expecting T_STRING or T_VARIABLE or '{' or '$' /usr/local/apache2/htdocs/CodeIgniter-3.0.0/application/controllers/Database_test.php 145
DEBUG - 2015-08-07 09:52:47 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 09:52:47 --> Global POST, GET and COOKIE data sanitized
ERROR - 2015-08-07 09:52:47 --> Severity: Parsing Error --> syntax error, unexpected T_AS /usr/local/apache2/htdocs/CodeIgniter-3.0.0/application/controllers/Database_test.php 140
DEBUG - 2015-08-07 09:53:24 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 09:53:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 09:53:25 --> Total execution time: 0.2160
DEBUG - 2015-08-07 09:53:38 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 09:53:38 --> Global POST, GET and COOKIE data sanitized
ERROR - 2015-08-07 09:53:38 --> Query error: Table 'test.pearson_mytable' doesn't exist - Invalid query: SELECT (SELECT SUM(payments.amount) FROM payments WHERE payments.invoice_id=4) AS amount_paid
FROM `pearson_mytable`
DEBUG - 2015-08-07 09:57:38 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 09:57:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 09:57:38 --> Total execution time: 0.0132
DEBUG - 2015-08-07 09:58:44 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 09:58:44 --> Global POST, GET and COOKIE data sanitized
ERROR - 2015-08-07 09:58:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '*
FROM `pearson_tblcategory`' at line 1 - Invalid query: SELECT (SELECT SUM(pearson_tblpicture.pic_status) FROM pearson_tblpicture WHERE pearson_tblpicture.pic_id=4) AS amount_paid, *
FROM `pearson_tblcategory`
DEBUG - 2015-08-07 09:59:29 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 09:59:29 --> Global POST, GET and COOKIE data sanitized
ERROR - 2015-08-07 09:59:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '*
FROM `pearson_tblcategory`' at line 1 - Invalid query: SELECT (SELECT SUM(pearson_tblpicture.pic_status) FROM pearson_tblpicture WHERE pearson_tblpicture.pic_id=4) AS amount_paid, *
FROM `pearson_tblcategory`
DEBUG - 2015-08-07 10:00:46 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 10:00:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 10:00:46 --> Total execution time: 0.0063
DEBUG - 2015-08-07 10:03:52 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 10:03:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 10:03:52 --> Total execution time: 0.0117
DEBUG - 2015-08-07 10:09:37 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 10:09:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 10:09:37 --> Total execution time: 0.2057
DEBUG - 2015-08-07 10:14:40 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 10:14:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 10:14:40 --> Total execution time: 0.3858
DEBUG - 2015-08-07 10:14:53 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 10:14:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 10:14:54 --> Total execution time: 0.4114
DEBUG - 2015-08-07 10:17:38 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 10:17:38 --> Global POST, GET and COOKIE data sanitized
ERROR - 2015-08-07 10:17:38 --> Query error: Column 'pic_id' in where clause is ambiguous - Invalid query: SELECT *
FROM `pearson_tblpicture`
JOIN `pearson_tblpicturecategory` ON `pearson_tblpicture`.`pic_id` = `pearson_tblpicturecategory`.`pic_id`
LEFT JOIN `pearson_tblcategory` ON `pearson_tblpicturecategory`.`cat_id` = `pearson_tblcategory`.`cat_id`
WHERE `pic_id` > 4
AND `cat_id` < 6
DEBUG - 2015-08-07 10:18:22 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 10:18:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 10:18:22 --> Total execution time: 0.0297
DEBUG - 2015-08-07 10:23:38 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 10:23:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 10:23:38 --> Total execution time: 0.0167
DEBUG - 2015-08-07 10:24:37 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 10:24:37 --> Global POST, GET and COOKIE data sanitized
ERROR - 2015-08-07 10:24:37 --> Query error: Table 'test.tblpicture' doesn't exist - Invalid query: SELECT (SELECT SUM(tblpicture.pic_status) FROM tblpicture WHERE tblpicture.pic_id=4) AS amount_paid, pearson_tblcategory.*
FROM `pearson_tblcategory`
WHERE `cat_id` = 5
DEBUG - 2015-08-07 10:25:02 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 10:25:02 --> Global POST, GET and COOKIE data sanitized
ERROR - 2015-08-07 10:25:02 --> Query error: Table 'test.tblpicture' doesn't exist - Invalid query: SELECT (SELECT SUM(tblpicture.pic_status) FROM tblpicture WHERE tblpicture.pic_id=4) AS amount_paid, `pearson_tblcategory`.*
FROM `pearson_tblcategory`
WHERE `cat_id` = 5
DEBUG - 2015-08-07 10:25:17 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 10:25:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 10:25:17 --> Total execution time: 0.0130
DEBUG - 2015-08-07 10:28:55 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 10:28:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 10:28:55 --> Total execution time: 0.0077
DEBUG - 2015-08-07 10:29:51 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 10:29:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 10:29:51 --> Total execution time: 0.0113
DEBUG - 2015-08-07 10:30:33 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 10:30:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 10:30:33 --> Total execution time: 0.0100
DEBUG - 2015-08-07 10:37:59 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 10:37:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 10:37:59 --> Total execution time: 0.0167
DEBUG - 2015-08-07 10:43:37 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 10:43:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 10:43:38 --> Total execution time: 0.2633
DEBUG - 2015-08-07 10:44:48 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 10:44:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 10:44:48 --> Total execution time: 0.0126
DEBUG - 2015-08-07 10:45:12 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 10:45:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 10:45:12 --> Total execution time: 0.2550
DEBUG - 2015-08-07 10:47:51 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 10:47:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 10:47:51 --> Total execution time: 0.2530
DEBUG - 2015-08-07 10:53:48 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 10:53:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 10:53:48 --> Total execution time: 0.0109
DEBUG - 2015-08-07 11:00:52 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 11:00:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 11:00:52 --> Total execution time: 0.0377
DEBUG - 2015-08-07 11:08:30 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 11:08:30 --> Global POST, GET and COOKIE data sanitized
ERROR - 2015-08-07 11:08:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1 1' at line 5 - Invalid query: SELECT *
FROM `pearson_tblpicture`
GROUP BY `keyword`, `pic_status`
HAVING `keyword` = 'axe'
AND pic_status 1 1
DEBUG - 2015-08-07 11:08:43 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 11:08:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 11:08:44 --> Total execution time: 0.2729
DEBUG - 2015-08-07 11:10:16 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 11:10:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 11:10:16 --> Total execution time: 0.0452
DEBUG - 2015-08-07 11:12:07 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 11:12:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 11:12:07 --> Total execution time: 0.2930
DEBUG - 2015-08-07 11:32:21 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 11:32:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 11:32:21 --> Total execution time: 0.0362
DEBUG - 2015-08-07 11:58:57 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 11:58:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 11:58:57 --> Total execution time: 0.1135
DEBUG - 2015-08-07 12:01:23 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 12:01:23 --> Global POST, GET and COOKIE data sanitized
ERROR - 2015-08-07 12:01:23 --> Severity: Parsing Error --> syntax error, unexpected T_VARIABLE /usr/local/apache2/htdocs/CodeIgniter-3.0.0/application/controllers/Database_test.php 157
DEBUG - 2015-08-07 12:01:34 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 12:01:34 --> Global POST, GET and COOKIE data sanitized
ERROR - 2015-08-07 12:01:34 --> Severity: Parsing Error --> syntax error, unexpected T_VARIABLE /usr/local/apache2/htdocs/CodeIgniter-3.0.0/application/controllers/Database_test.php 156
DEBUG - 2015-08-07 12:01:48 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 12:01:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 12:01:48 --> Total execution time: 0.0810
DEBUG - 2015-08-07 12:02:03 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 12:02:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2015-08-07 12:02:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 13 - Invalid query: SELECT `pearson_tblcategory`.`cat_name`, `pearson_tblpicture`.`keyword`, `pearson_tblpicturecategory`.`date_create`
FROM `pearson_tblpicture`
JOIN `pearson_tblpicturecategory` ON `pearson_tblpicture`.`pic_id` = `pearson_tblpicturecategory`.`pic_id`
LEFT JOIN `pearson_tblcategory` ON `pearson_tblpicturecategory`.`cat_id` = `pearson_tblcategory`.`cat_id`
WHERE   (
`pearson_tblpicture`.`pic_id` = 4 AND `pearson_tblcategory`.`cat_id` = 6
OR    (
`pearson_tblpicture`.`pic_id` = 8 AND `pearson_tblcategory`.`cat_id` = 7
AND `pearson_tblcategory`.`cat_id` IN(8, 9, 10, 11, 13, 14)
  )
AND  `pearson_tblpicture`.`keyword` LIKE '%match' ESCAPE '!'
OR  `pearson_tblpicture`.`keyword` LIKE 'match%' ESCAPE '!'
AND  `pearson_tblpicture`.`keyword` NOT LIKE '%match%' ESCAPE '!'
DEBUG - 2015-08-07 12:02:12 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 12:02:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 12:02:13 --> Total execution time: 0.5756
DEBUG - 2015-08-07 13:53:16 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 13:53:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 13:53:16 --> Total execution time: 0.1209
DEBUG - 2015-08-07 14:18:45 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 14:18:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 14:18:45 --> Total execution time: 0.0187
DEBUG - 2015-08-07 14:19:26 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 14:19:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 14:19:26 --> Total execution time: 0.0081
DEBUG - 2015-08-07 14:25:30 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 14:25:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 14:25:30 --> Total execution time: 0.0199
DEBUG - 2015-08-07 14:30:50 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 14:30:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2015-08-07 14:30:50 --> Severity: Parsing Error --> syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' /usr/local/apache2/htdocs/CodeIgniter-3.0.0/application/controllers/Database_test.php 208
DEBUG - 2015-08-07 14:31:41 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 14:31:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 14:31:41 --> Total execution time: 0.0981
DEBUG - 2015-08-07 14:41:58 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 14:41:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 14:41:58 --> Total execution time: 0.0469
DEBUG - 2015-08-07 14:43:37 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 14:43:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 14:43:37 --> Total execution time: 0.0643
DEBUG - 2015-08-07 14:53:38 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 14:53:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 14:53:38 --> Total execution time: 0.0501
DEBUG - 2015-08-07 14:54:11 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 14:54:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 14:54:11 --> Total execution time: 0.0054
DEBUG - 2015-08-07 14:55:39 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 14:55:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 14:57:20 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 14:57:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 14:58:50 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 14:58:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 15:16:19 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 15:16:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 15:16:21 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 15:16:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 15:16:21 --> Total execution time: 0.0331
DEBUG - 2015-08-07 15:16:29 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 15:16:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 15:16:29 --> Total execution time: 0.0099
DEBUG - 2015-08-07 15:17:47 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 15:17:47 --> Global POST, GET and COOKIE data sanitized
ERROR - 2015-08-07 15:17:47 --> Severity: Parsing Error --> syntax error, unexpected ';', expecting ')' /usr/local/apache2/htdocs/CodeIgniter-3.0.0/application/config/database.php 76
DEBUG - 2015-08-07 15:18:00 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 15:18:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 15:18:00 --> Total execution time: 0.0889
DEBUG - 2015-08-07 15:18:04 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 15:18:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 15:18:04 --> Total execution time: 0.0144
DEBUG - 2015-08-07 15:18:08 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 15:18:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 15:18:08 --> Total execution time: 0.0134
DEBUG - 2015-08-07 15:19:18 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 15:19:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2015-08-07 15:19:18 --> Query error: Not unique table/alias: 'pearson_tblcategory' - Invalid query: SELECT `cat_name`
FROM `pearson_tblcategory`, `pearson_tblcategory`, `pearson_tblpicture`
 LIMIT 10, 20
DEBUG - 2015-08-07 15:20:57 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 15:20:57 --> Global POST, GET and COOKIE data sanitized
ERROR - 2015-08-07 15:20:57 --> Query error: Not unique table/alias: 'pearson_tblcategory' - Invalid query: SELECT `cat_name`
FROM `pearson_tblcategory`, `pearson_tblcategory`, `pearson_tblpicture`
 LIMIT 10, 20
DEBUG - 2015-08-07 15:24:33 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 15:24:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2015-08-07 15:24:33 --> Severity: Parsing Error --> syntax error, unexpected T_VARIABLE /usr/local/apache2/htdocs/CodeIgniter-3.0.0/application/controllers/Database_test.php 271
DEBUG - 2015-08-07 15:24:40 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 15:24:40 --> Global POST, GET and COOKIE data sanitized
ERROR - 2015-08-07 15:24:40 --> Query error: Not unique table/alias: 'pearson_tblcategory' - Invalid query: SELECT `cat_name`
FROM `pearson_tblcategory`, `pearson_tblcategory`, `pearson_tblpicture`
 LIMIT 10, 20
DEBUG - 2015-08-07 15:25:10 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 15:25:10 --> Global POST, GET and COOKIE data sanitized
ERROR - 2015-08-07 15:25:10 --> Severity: Notice --> Undefined variable: query /usr/local/apache2/htdocs/CodeIgniter-3.0.0/application/controllers/Database_test.php 272
ERROR - 2015-08-07 15:25:10 --> Severity: Error --> Call to a member function free_result() on a non-object /usr/local/apache2/htdocs/CodeIgniter-3.0.0/application/controllers/Database_test.php 272
DEBUG - 2015-08-07 15:25:43 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 15:25:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 15:25:43 --> Total execution time: 0.0100
DEBUG - 2015-08-07 15:25:47 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 15:25:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 15:25:47 --> Total execution time: 0.0045
DEBUG - 2015-08-07 15:26:14 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 15:26:14 --> Global POST, GET and COOKIE data sanitized
ERROR - 2015-08-07 15:26:14 --> Query error: Not unique table/alias: 'pearson_tblcategory' - Invalid query: SELECT `cat_name`
FROM `pearson_tblcategory`, `pearson_tblcategory`, `pearson_tblpicture`
 LIMIT 10, 20
DEBUG - 2015-08-07 15:27:17 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 15:27:17 --> Global POST, GET and COOKIE data sanitized
ERROR - 2015-08-07 15:27:17 --> Query error: Not unique table/alias: 'pearson_tblcategory' - Invalid query: SELECT *
FROM `pearson_tblcategory`, `pearson_tblcategory`
WHERE `cat_id` = 5
DEBUG - 2015-08-07 15:28:06 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 15:28:06 --> Global POST, GET and COOKIE data sanitized
ERROR - 2015-08-07 15:28:06 --> Query error: Not unique table/alias: 'pearson_tblcategory' - Invalid query: SELECT *
FROM `pearson_tblcategory`, `pearson_tblcategory`
WHERE `cat_id` = 5
DEBUG - 2015-08-07 15:28:51 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 15:28:51 --> Global POST, GET and COOKIE data sanitized
ERROR - 2015-08-07 15:28:51 --> Query error: Not unique table/alias: 'pearson_tblcategory' - Invalid query: SELECT *
FROM `pearson_tblcategory`, `pearson_tblcategory`
WHERE `cat_id` = 5
DEBUG - 2015-08-07 15:29:01 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 15:29:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 15:29:01 --> Total execution time: 0.0057
DEBUG - 2015-08-07 15:29:11 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 15:29:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 15:29:11 --> Total execution time: 0.0081
DEBUG - 2015-08-07 15:29:15 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 15:29:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 15:29:15 --> Total execution time: 0.0102
DEBUG - 2015-08-07 15:29:51 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 15:29:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 15:29:51 --> Total execution time: 0.0045
DEBUG - 2015-08-07 15:30:05 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 15:30:05 --> Global POST, GET and COOKIE data sanitized
ERROR - 2015-08-07 15:30:05 --> Query error: Not unique table/alias: 'pearson_tblcategory' - Invalid query: SELECT *
FROM `pearson_tblcategory`, `pearson_tblcategory`
WHERE `cat_id` = 5
DEBUG - 2015-08-07 15:31:57 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 15:31:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 15:31:58 --> Total execution time: 0.0316
DEBUG - 2015-08-07 15:32:16 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 15:32:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 15:32:16 --> Total execution time: 0.0363
DEBUG - 2015-08-07 15:32:21 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 15:32:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 15:32:21 --> Total execution time: 0.1149
DEBUG - 2015-08-07 15:32:59 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 15:32:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 15:32:59 --> Total execution time: 0.0083
DEBUG - 2015-08-07 15:33:12 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 15:33:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 15:33:12 --> Total execution time: 0.0698
DEBUG - 2015-08-07 15:34:17 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 15:34:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 15:34:17 --> Total execution time: 0.0053
DEBUG - 2015-08-07 15:43:52 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 15:43:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 15:43:53 --> Total execution time: 0.0680
DEBUG - 2015-08-07 15:54:25 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 15:54:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 15:54:25 --> DB Transaction Failure
DEBUG - 2015-08-07 15:54:25 --> Total execution time: 0.0093
DEBUG - 2015-08-07 15:54:31 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 15:54:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 15:54:31 --> DB Transaction Failure
DEBUG - 2015-08-07 15:54:31 --> Total execution time: 0.0046
DEBUG - 2015-08-07 16:00:00 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 16:00:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 16:00:00 --> DB Transaction Failure
DEBUG - 2015-08-07 16:00:00 --> Total execution time: 0.0119
DEBUG - 2015-08-07 16:08:44 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 16:08:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 16:08:44 --> DB Transaction Failure
DEBUG - 2015-08-07 16:08:44 --> Total execution time: 0.0120
DEBUG - 2015-08-07 16:11:07 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 16:11:07 --> Global POST, GET and COOKIE data sanitized
ERROR - 2015-08-07 16:11:07 --> Query error: Table 'test.pearson_tblcateddgory' doesn't exist - Invalid query: INSERT INTO `pearson_tblcateddgory` (`cat_id`, `cat_name`, `date_create`) VALUES (22, 'my data insert', 'vv')
DEBUG - 2015-08-07 16:11:07 --> DB Transaction Failure
DEBUG - 2015-08-07 16:16:51 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 16:16:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 16:16:51 --> Total execution time: 0.0219
DEBUG - 2015-08-07 16:16:57 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 16:16:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 16:16:57 --> Total execution time: 0.0221
DEBUG - 2015-08-07 16:17:16 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 16:17:16 --> Global POST, GET and COOKIE data sanitized
ERROR - 2015-08-07 16:17:16 --> Query error: Duplicate entry '22' for key 'PRIMARY' - Invalid query: INSERT INTO `pearson_tblcategory` (`id`, `cat_name`, `order_id`) VALUES (22, 'my data insert', 'vv')
DEBUG - 2015-08-07 16:17:16 --> DB Transaction Failure
DEBUG - 2015-08-07 16:17:31 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 16:17:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 16:17:31 --> Total execution time: 0.0231
DEBUG - 2015-08-07 16:26:47 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 16:26:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 16:26:47 --> DB Transaction Failure
DEBUG - 2015-08-07 16:26:47 --> Total execution time: 0.0405
DEBUG - 2015-08-07 16:27:08 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 16:27:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 16:27:08 --> DB Transaction Failure
DEBUG - 2015-08-07 16:27:08 --> Total execution time: 0.0062
DEBUG - 2015-08-07 16:28:36 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 16:28:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 16:28:36 --> Total execution time: 0.0336
DEBUG - 2015-08-07 16:31:57 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 16:31:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 16:31:57 --> Total execution time: 0.0344
DEBUG - 2015-08-07 16:32:55 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 16:32:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 16:32:55 --> Total execution time: 0.0189
DEBUG - 2015-08-07 16:34:49 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 16:34:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2015-08-07 16:34:49 --> Query error: Field 'date_create' doesn't have a default value - Invalid query: INSERT INTO `pearson_tblcategory` (`cat_id`, `cat_name`, `order_id`) VALUES (22, 'ddmy data insert', 23)
DEBUG - 2015-08-07 16:36:02 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 16:36:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 16:36:02 --> Total execution time: 0.0170
DEBUG - 2015-08-07 16:50:58 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 16:50:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 16:50:58 --> Total execution time: 0.0073
DEBUG - 2015-08-07 16:51:01 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 16:51:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 16:51:01 --> Total execution time: 0.0088
DEBUG - 2015-08-07 16:53:30 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 16:53:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 16:53:30 --> Total execution time: 0.0385
DEBUG - 2015-08-07 16:54:16 --> UTF-8 Support Enabled
DEBUG - 2015-08-07 16:54:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-08-07 16:54:16 --> Total execution time: 0.0139
