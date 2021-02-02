#
# TABLE STRUCTURE FOR: ci_sessions
#

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `id` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT 0,
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('0f1o0crmtgas6rls0i9vpa8uj1ae44bp', '192.168.2.117', '1602576856', '__ci_last_regenerate|i:1602576856;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('0quol588nhq9ncpi65l2pnlohkm9pl35', '192.168.2.117', '1602661280', '__ci_last_regenerate|i:1602661280;uid|s:3:\"306\";uname|s:25:\"kadam.sopan6919@gmail.com\";ufname|s:11:\"Sopan Kadam\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('0sr38b5a6i56obosjj98d4oool7vkidt', '192.168.2.116', '1606803441', '__ci_last_regenerate|i:1606803441;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('19t3nc521sii2rqr617kba3h9e7b9lti', '192.168.2.117', '1602570201', '__ci_last_regenerate|i:1602570201;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1cn73ne1dtbjln5ovb8t6lp981kigpbj', '192.168.2.117', '1602566297', '__ci_last_regenerate|i:1602566297;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1crjg4h7iccv8b6v95h6onqhi76hdjt9', '192.168.2.117', '1602577181', '__ci_last_regenerate|i:1602577181;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1f9pg7i7r8t5qkdpvkt26tlf5kg4k7gl', '192.168.2.117', '1602579433', '__ci_last_regenerate|i:1602579433;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1l0larjjhdtffsb33mtofn9ksmjrbcm3', '::1', '1604407967', '__ci_last_regenerate|i:1604407967;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1o3a8fqfcqnuaho18qa7f8bc0iv4kup3', '192.168.2.117', '1602580136', '__ci_last_regenerate|i:1602580136;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1s3eno1hsp65p7ipi588no2cnu1l8gmd', '192.168.2.117', '1602649996', '__ci_last_regenerate|i:1602649996;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1t4coih55orq5u0tajj4ir54q01rm7bh', '::1', '1604407365', '__ci_last_regenerate|i:1604407365;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1t7sgrcfobgjqmc6mhq8328jiehtilma', '::1', '1604397813', '__ci_last_regenerate|i:1604397813;uid|s:3:\"309\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:4:\"User\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('2art1u35qrogfgitojj37jhpuelv1l6j', '192.168.2.117', '1602590102', '__ci_last_regenerate|i:1602590102;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('2bfdbcetp9lfd3oerj0anl3h54l40k9l', '192.168.2.117', '1602584007', '__ci_last_regenerate|i:1602584007;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('2hsti42b33u6bltab8qnbapiluuoh3it', '192.168.2.117', '1602660681', '__ci_last_regenerate|i:1602660681;uid|s:3:\"305\";uname|s:23:\"zsmalik786888@gmail.com\";ufname|s:14:\"Saniya Maniyar\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('2lh520b9dskj4gdevoikd1tqe686f726', '192.168.2.117', '1602580894', '__ci_last_regenerate|i:1602580894;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('2njl6hsvjag4ru6m9up7ev5vakr9heov', '192.168.2.117', '1602657927', '__ci_last_regenerate|i:1602657927;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('2nrgs0lb0k11b59g3rvnrdg2ciet4gge', '192.168.2.117', '1602592521', '__ci_last_regenerate|i:1602592521;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('313v98nuel5984ooentag8plobe0s1v6', '192.168.2.117', '1602657021', '__ci_last_regenerate|i:1602657021;uid|s:3:\"305\";uname|s:23:\"zsmalik786888@gmail.com\";ufname|s:14:\"Saniya Maniyar\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3hq57329ko6j3l6qrjt09u8gren6326u', '::1', '1605867802', '__ci_last_regenerate|i:1605867802;uid|s:3:\"310\";uname|s:22:\"pritpatel307@gmail.com\";ufname|s:10:\"Prit Patel\";urole|s:3:\"311\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"311\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3qfgb6g2mh51u9858918v0imhm151rqp', '192.168.2.117', '1602583659', '__ci_last_regenerate|i:1602583659;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3s0jqk1vs1hfi2dthkd2gtj3ebf8ff4l', '192.168.2.117', '1602658394', '__ci_last_regenerate|i:1602658394;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4e51o63e2inhkfgi7mpt78cekovbjadm', '::1', '1604397259', '__ci_last_regenerate|i:1604397259;uid|s:3:\"309\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:4:\"User\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4nab4sqmm0kncv5kkk56c2st6rrgf3kq', '::1', '1605854835', '__ci_last_regenerate|i:1605854835;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}color|s:15:\"abc(\"warning\");\";__ci_vars|a:2:{s:5:\"color\";s:3:\"old\";s:3:\"msg\";s:3:\"old\";}msg|s:24:\"Them Edited Successfully\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4uo78ms1q21rcvve2plqq0glr076l5n2', '::1', '1604395067', '__ci_last_regenerate|i:1604395067;uid|s:3:\"309\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:4:\"User\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('506nrnri9i9f8pcue3np8o0qs3td8jd1', '192.168.2.117', '1602580566', '__ci_last_regenerate|i:1602580566;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('55gkq840smotpbma3ceb2oraqrmvu69r', '192.168.2.117', '1602585925', '__ci_last_regenerate|i:1602585925;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5902vr32p7s20rgnl8o4u8pqi3ms98mc', '::1', '1604404157', '__ci_last_regenerate|i:1604404157;uid|s:3:\"309\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:4:\"User\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5cnogfn9a0on202jlareeo315l0dacr5', '192.168.2.117', '1602654792', '__ci_last_regenerate|i:1602654792;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5dkbobeei2g4h93re0ict3719tjg04g0', '::1', '1604396942', '__ci_last_regenerate|i:1604396942;uid|s:3:\"309\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:4:\"User\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5gm5ib0fr4rrhmn2d2q67hr76ekfkgo6', '::1', '1605854147', '__ci_last_regenerate|i:1605854147;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5j665uihrolmeo165lou0pu9pclmout6', '192.168.2.117', '1602587377', '__ci_last_regenerate|i:1602587377;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5jserq4gj9lr8hglsrgf1gtl9kcddt7a', '192.168.2.117', '1602589428', '__ci_last_regenerate|i:1602589428;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5kigrkc15210peuoa3higv32ltfckojf', '192.168.2.117', '1602564248', '__ci_last_regenerate|i:1602564248;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5p7o2eflsbi99j1kt2ugrvnd4u0cd5k1', '192.168.2.117', '1602657295', '__ci_last_regenerate|i:1602657295;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5tsknfg2eiafsepg5c8hfvc3rlbu7372', '192.168.2.117', '1602581450', '__ci_last_regenerate|i:1602581450;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('6041abtpi52agm4kpcgsk6etdgv25fog', '192.168.2.117', '1603790865', '__ci_last_regenerate|i:1603790865;uid|s:3:\"307\";uname|s:28:\"maheshdeshmukh2662@gmail.com\";ufname|s:15:\"Mahesh Deshmukh\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('69mreqabv184ji9vpef42mgirh3u0bea', '192.168.2.117', '1602585566', '__ci_last_regenerate|i:1602585566;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('6fhp7679q47skgcr74q7ol3ftr3llq6o', '::1', '1604393085', '__ci_last_regenerate|i:1604393085;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('6fldrt4mn9sgpfh923ekkflbm9lnhsg3', '192.168.2.117', '1602567224', '__ci_last_regenerate|i:1602567224;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('6gt76ilcgkrdmvilmpki4ubs1vqop2id', '192.168.2.117', '1602593927', '__ci_last_regenerate|i:1602593633;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('6nl9j4e2kv8f1n3d3hjp9t2uboamil4d', '192.168.2.117', '1603885746', '__ci_last_regenerate|i:1603885746;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('6rib9c0hljub86tfjjrtcket16dlqa6g', '192.168.2.117', '1602583145', '__ci_last_regenerate|i:1602583145;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('796qr0ma0mrlg9htnssibb6nct1dc5oi', '::1', '1604407007', '__ci_last_regenerate|i:1604407007;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('7f8fj8po1civ8mbe21nhkhppqgbtnm53', '192.168.2.117', '1602650591', '__ci_last_regenerate|i:1602650591;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('7s6l5qsrvtrhks3aulg675f62etcr1d8', '192.168.2.117', '1602577835', '__ci_last_regenerate|i:1602577835;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('7slsvna3useq3bcl8cedlnqc9smkq8g0', '192.168.2.117', '1602579113', '__ci_last_regenerate|i:1602579113;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}color|s:15:\"abc(\"success\");\";__ci_vars|a:2:{s:5:\"color\";s:3:\"old\";s:3:\"msg\";s:3:\"old\";}msg|s:27:\"Data Submitted Successfully\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('86jbrp61jfl3a9kjtksd10vnrifuhhpo', '::1', '1604396573', '__ci_last_regenerate|i:1604396573;uid|s:3:\"309\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:4:\"User\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('86rg6tfrj5cl0s8q7tc9qtd4so20fv60', '192.168.2.117', '1602577522', '__ci_last_regenerate|i:1602577522;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('8jbil9pfsrgej8q575vs4pp74djn7e7b', '::1', '1604465503', '__ci_last_regenerate|i:1604465502;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('8lvauktdk4mopth0ktasvviq2l3b25jq', '192.168.2.117', '1602589733', '__ci_last_regenerate|i:1602589733;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('8shlfs3eic8hfok6qcm04q2f7f6ktiuo', '192.168.2.117', '1603452543', '__ci_last_regenerate|i:1603452543;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('91r0bmqtfvs2il9trbkrchi646s8ggdb', '192.168.2.117', '1602587739', '__ci_last_regenerate|i:1602587739;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('96jumephkdaqnivh533avbthlcg1l6on', '192.168.2.117', '1602661400', '__ci_last_regenerate|i:1602661400;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('9coi7csjs4v1vhji8bnc4s18rdq5sr9s', '192.168.2.117', '1602654380', '__ci_last_regenerate|i:1602654380;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('9frs90mbc8dd7lnudhd2pp9jquq39rlc', '192.168.2.117', '1603454368', '__ci_last_regenerate|i:1603454368;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('9i0nbc2tifcruevlgpnrom9mb46bq1t1', '::1', '1605852910', '__ci_last_regenerate|i:1605852910;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('9t07o1a2cndvv9abj3sqc70hlvg9o60m', '192.168.2.117', '1603687938', '__ci_last_regenerate|i:1603687849;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('9t569abpv5e4jbjfjur0m2fkpe578ibd', '192.168.2.117', '1603453213', '__ci_last_regenerate|i:1603453213;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('a087p5mjic25ald645uppulu8mb8em9j', '192.168.2.117', '1602578218', '__ci_last_regenerate|i:1602578218;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('a16kv26idaj3a8j2g5rji482d9obrbje', '192.168.2.117', '1602569431', '__ci_last_regenerate|i:1602569431;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('a262d20o4c1ra6ttin8e6dscnqtmcfnl', '192.168.2.117', '1602586375', '__ci_last_regenerate|i:1602586375;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ab3eb9gd13dbmkcati975he01m5pvl3l', '192.168.2.117', '1602651237', '__ci_last_regenerate|i:1602651237;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('aj2ue4a3ct4j9bjhmkbn26lks78sge75', '192.168.2.117', '1602569047', '__ci_last_regenerate|i:1602569047;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('akv5uevje0ve3uee1allee6usk38190k', '::1', '1604394485', '__ci_last_regenerate|i:1604394485;uid|s:3:\"308\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:4:\"User\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ascjk7lbri5r2tfog2kd0p3isr036ap4', '::1', '1604395402', '__ci_last_regenerate|i:1604395402;uid|s:3:\"309\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:4:\"User\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b38kfakp0poavhm0c3t9a65r5jqqmabg', '192.168.2.117', '1602579795', '__ci_last_regenerate|i:1602579795;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b59n8ob9scmrtao5oukq0br8jv87rpcf', '192.168.2.117', '1602565085', '__ci_last_regenerate|i:1602565085;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('bhfuteitjv3ebcq7vu6lrs3nqu446hgl', '192.168.2.110', '1605876299', '__ci_last_regenerate|i:1605876299;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('bjgi19c7vkd2njcte67r7vfcsddkir1b', '192.168.2.117', '1602588050', '__ci_last_regenerate|i:1602588050;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('bmt2jgbcmrr1sikkiqqlojjkjprte4ja', '::1', '1605853296', '__ci_last_regenerate|i:1605853296;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('bon5ce18g4p7cv47c2hve5r0aackaak6', '192.168.2.117', '1603455024', '__ci_last_regenerate|i:1603455024;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('bs0p4spu8i9ka00ek5iju2gvr7rulbln', '192.168.2.197', '1603870277', '__ci_last_regenerate|i:1603870277;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('bugkqajeo2i0fsdeja8lf8tgoqqnuda0', '::1', '1605867449', '__ci_last_regenerate|i:1605867449;uid|s:3:\"310\";uname|s:22:\"pritpatel307@gmail.com\";ufname|s:10:\"Prit Patel\";urole|s:3:\"311\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"311\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('c5le1eu2c2kv9bgdgssdg3vv2g8cf4qe', '192.168.2.116', '1606803441', '__ci_last_regenerate|i:1606803441;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('c6fg2igm11d64iqqfdf1kt2o378fil9i', '192.168.2.197', '1603867560', '__ci_last_regenerate|i:1603867560;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('cue0ssnc40edte6gm0l05t8195274pe4', '::1', '1604406349', '__ci_last_regenerate|i:1604406349;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('d8oala6408rkpomstpkska8561fi2mft', '::1', '1605074464', '__ci_last_regenerate|i:1605074464;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('dah1gld21eq8p01h65r51jt0smncgi6n', '192.168.2.117', '1602567888', '__ci_last_regenerate|i:1602567888;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('djb81ud516reob8qgsglq8mrcckv35q1', '::1', '1605075101', '__ci_last_regenerate|i:1605075101;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('dt72f3pl6rfu1sbhb4j43h3mo8e1iesf', '192.168.2.117', '1602661524', '__ci_last_regenerate|i:1602661400;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e3654c5bdm0b8q89kcg41j6i0he0dcbs', '192.168.2.117', '1603455664', '__ci_last_regenerate|i:1603455664;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e9nqf06qh7ka7qn5pbar0h7q30jn9dn1', '::1', '1605852511', '__ci_last_regenerate|i:1605852511;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ecspmur93fnct9blm6drk5khgk9ua3oq', '::1', '1604407971', '__ci_last_regenerate|i:1604407967;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}msg|s:16:\"Backup Created !\";__ci_vars|a:2:{s:3:\"msg\";s:3:\"old\";s:5:\"color\";s:3:\"old\";}color|s:15:\"abc(\"success\");\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('efm6jauk176u2hfrsh3jr5mvmkt9c01t', '192.168.2.117', '1603888764', '__ci_last_regenerate|i:1603888764;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ehn5ckn55e8232q0tqoohgeq0aus5ajc', '192.168.2.117', '1602655185', '__ci_last_regenerate|i:1602655185;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('eibovj8tan2t721efhb7ikd5io70o188', '192.168.2.117', '1602572500', '__ci_last_regenerate|i:1602572500;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('esvor094ubk2u2gfrhgl4tv41b4ah52l', '192.168.2.117', '1602586697', '__ci_last_regenerate|i:1602586697;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('f22pf0nb1vrds6psusgbkl65vorv6j3i', '::1', '1605871825', '__ci_last_regenerate|i:1605871825;uid|s:3:\"310\";uname|s:22:\"pritpatel307@gmail.com\";ufname|s:10:\"Prit Patel\";urole|s:3:\"311\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"311\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('fgddvlog0a4uqg2cbe9anffjvpu0er54', '192.168.2.117', '1602585217', '__ci_last_regenerate|i:1602585217;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}color|s:15:\"abc(\"success\");\";__ci_vars|a:2:{s:5:\"color\";s:3:\"old\";s:3:\"msg\";s:3:\"old\";}msg|s:27:\"Data Submitted Successfully\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('fh6fsd6dmot40p1ifn0bg63tm0c668ra', '192.168.2.117', '1602573062', '__ci_last_regenerate|i:1602573062;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('fhchjrfs6uak5t065r4cub12e0d5tja1', '192.168.2.117', '1602652105', '__ci_last_regenerate|i:1602652105;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('fl8vtqmhgc7ogvj3k23nbuqht0mdlr6h', '192.168.2.197', '1603865869', '__ci_last_regenerate|i:1603865869;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('g65bonrnlk82nf5bvki0mmb722t76n9e', '::1', '1604664879', '__ci_last_regenerate|i:1604664820;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('gl4m1qpebpkql75k3g8ndv3ql85tdqhj', '192.168.2.117', '1602592204', '__ci_last_regenerate|i:1602592204;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('gqpdc24o59o7q5brqu8rsecgjl64p4e2', '::1', '1604398186', '__ci_last_regenerate|i:1604398186;uid|s:3:\"309\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:4:\"User\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('hqulmbc4r2ihemcn83om60l8fvcb2frq', '192.168.2.117', '1602570879', '__ci_last_regenerate|i:1602570879;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('i2j11geh0udqktujhljfnot9uj9himpm', '::1', '1604396166', '__ci_last_regenerate|i:1604396166;uid|s:3:\"309\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:4:\"User\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('i4rkl59q5afqaufgoku91n1rk0oln2le', '::1', '1605861236', '__ci_last_regenerate|i:1605861236;uid|s:3:\"310\";uname|s:22:\"pritpatel307@gmail.com\";ufname|s:10:\"Prit Patel\";urole|s:3:\"311\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"311\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('irid08p3ubc8enj4v6ngbl8iu904np9j', '192.168.2.117', '1602572173', '__ci_last_regenerate|i:1602572173;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('jksegfjpuds9hmfvcnfbfprjqh7hjv1l', '192.168.2.117', '1602566626', '__ci_last_regenerate|i:1602566626;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('jo0ueu6i8aod0606lns1o8mqod0j6mbj', '192.168.2.117', '1602656042', '__ci_last_regenerate|i:1602656042;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('jr4k0c2oi06oi1dubc6higsj80gf3rf8', '192.168.2.117', '1602591890', '__ci_last_regenerate|i:1602591890;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('jvtthsnjk341plentl6b54vn3f1kikni', '192.168.2.117', '1602648838', '__ci_last_regenerate|i:1602648838;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('k1qp34jslcjec7ngpivrq06sds0rn3e4', '::1', '1604405485', '__ci_last_regenerate|i:1604405485;uid|s:3:\"309\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:4:\"User\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('k71e2st5d130dtdg5i6kg7kc4kamoigp', '192.168.2.197', '1603866700', '__ci_last_regenerate|i:1603866700;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('k9k0n13ptlpmkp99mpelica3tohnt8gq', '192.168.2.117', '1602584618', '__ci_last_regenerate|i:1602584618;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('krcs431gtmopr9rqrus4k282pha312v4', '::1', '1604404468', '__ci_last_regenerate|i:1604404468;uid|s:3:\"309\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:4:\"User\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ks01u75j5piugvvbqul2k4vg9lc4cf3k', '192.168.2.117', '1602568692', '__ci_last_regenerate|i:1602568692;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('kstuvfjpi7goqm62jt7olnfckk94i9ct', '192.168.2.117', '1602578524', '__ci_last_regenerate|i:1602578524;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('l7cj5s4cqonq39a4b1el8oe8cr2m3pg1', '192.168.2.117', '1602570517', '__ci_last_regenerate|i:1602570517;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('l96ktv1s1ppg3drt63q9r0druerksubg', '192.168.2.117', '1602648887', '__ci_last_regenerate|i:1602648883;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ldjshlo4pfh8t5kem487ipgmjhl9mplh', '::1', '1605859749', '__ci_last_regenerate|i:1605859749;uid|s:3:\"310\";uname|s:22:\"pritpatel307@gmail.com\";ufname|s:10:\"Prit Patel\";urole|s:3:\"311\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"311\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('lhs3ec61ctnapetmls1mma42296oljle', '192.168.2.197', '1603870300', '__ci_last_regenerate|i:1603870277;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ll9g5kgubrf5rqfn2smsvskh17cdpmnb', '192.168.2.117', '1603790819', '__ci_last_regenerate|i:1603790705;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('lmkabqgu5m53r19q9fbpha2jhcsps1du', '192.168.2.117', '1602573505', '__ci_last_regenerate|i:1602573505;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('loevg9oi51svvd8c8vr7pjkss1b4dbit', '192.168.2.117', '1602661345', '__ci_last_regenerate|i:1602661280;uid|s:3:\"306\";uname|s:25:\"kadam.sopan6919@gmail.com\";ufname|s:11:\"Sopan Kadam\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('lqkcl3g3o4cule143qed2il6pibkn9je', '::1', '1605871959', '__ci_last_regenerate|i:1605871950;uid|s:3:\"309\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:4:\"User\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('lvgjgf58m6rn9ufidb3heckko6rvotob', '192.168.2.117', '1602588967', '__ci_last_regenerate|i:1602588967;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('me6v4jt85m292sutn6g4mphbmfhh25om', '::1', '1605851639', '__ci_last_regenerate|i:1605851639;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('mi8he8b4p72pnbl55sv4krd4tl4ejbba', '192.168.2.110', '1603949450', '__ci_last_regenerate|i:1603949400;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}msg|s:16:\"Backup Created !\";__ci_vars|a:2:{s:3:\"msg\";s:3:\"old\";s:5:\"color\";s:3:\"old\";}color|s:15:\"abc(\"success\");\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('mj26tedn4lb4gesa3n3fsn3r87rj5nk4', '::1', '1604406692', '__ci_last_regenerate|i:1604406692;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('mufd3dpfldrpairo6tu1ffj765p0fuf7', '192.168.2.117', '1602568206', '__ci_last_regenerate|i:1602568206;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('n7h6kkj2mk8bih7k8kin4omdfg3q0oih', '192.168.2.117', '1605877101', '__ci_last_regenerate|i:1605877096;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('nglvho19kcqr15qk24f8548p56a02k32', '192.168.2.117', '1602651548', '__ci_last_regenerate|i:1602651548;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('nhfbricgdqn0l8035nisaa6c919rplb7', '192.168.2.117', '1602571836', '__ci_last_regenerate|i:1602571836;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('nkk5m6c3q0bumopqb794rdhgmiafhlpg', '192.168.2.117', '1602588645', '__ci_last_regenerate|i:1602588645;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('nvk5d3lkigufh6b15amav98eb4h0g5fr', '192.168.2.117', '1603453539', '__ci_last_regenerate|i:1603453539;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('odkgu30a9amlkeu1noolllko3q6aaser', '192.168.2.117', '1602593633', '__ci_last_regenerate|i:1602593633;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ovqh0igrcstdor1d6riioetees6vtdbp', '192.168.2.117', '1602592866', '__ci_last_regenerate|i:1602592866;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('p5khgnsr624d4leifjm61q9k4p13io6j', '192.168.2.117', '1602573837', '__ci_last_regenerate|i:1602573837;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('p7cpcu3nhbgqu8h5u09j8c9qcuflevlm', '192.168.2.117', '1602656964', '__ci_last_regenerate|i:1602656964;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('p93apg255nebg8mep0hgpefb0tbr098h', '192.168.2.117', '1602653042', '__ci_last_regenerate|i:1602653042;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('pb97688ti02g9mvmcmltu7npda0nloat', '192.168.2.117', '1602657626', '__ci_last_regenerate|i:1602657626;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('pfsee58b9qn4qaq4190ui9m7umk1qjd0', '192.168.2.117', '1602654050', '__ci_last_regenerate|i:1602654050;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('pg86m30pb962m778pm3l1ireet650ij9', '192.168.2.117', '1602571188', '__ci_last_regenerate|i:1602571188;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('podceu28crlmm9v2ir4t03a9akbh6t3o', '::1', '1604398521', '__ci_last_regenerate|i:1604398521;uid|s:3:\"309\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:4:\"User\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('pqd9sijk13vg1h4lhgv4s88bb9kq5tm3', '192.168.2.117', '1602660419', '__ci_last_regenerate|i:1602660419;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('q50na5k18j955itpouu1lnobplc67n7s', '192.168.2.117', '1602571503', '__ci_last_regenerate|i:1602571503;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('qa5k15i9ff3cs5h4d706ar4pjuvaasaq', '192.168.2.117', '1602582413', '__ci_last_regenerate|i:1602582413;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}color|s:15:\"abc(\"success\");\";__ci_vars|a:2:{s:5:\"color\";s:3:\"old\";s:3:\"msg\";s:3:\"old\";}msg|s:27:\"Data Submitted Successfully\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('qk8b6soastaedqr147eki9hkud2d74dq', '192.168.2.117', '1603455974', '__ci_last_regenerate|i:1603455973;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('r30f3kl4o6btspq90pg48oe8epd0de4g', '::1', '1604403438', '__ci_last_regenerate|i:1604403438;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('r5tsgar10r0280kjr89kbq5ppga3nvco', '192.168.2.117', '1602582716', '__ci_last_regenerate|i:1602582716;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('rc96b4j0g5ig6j0obduvhqlrt9jnn1o3', '::1', '1605866842', '__ci_last_regenerate|i:1605866842;uid|s:3:\"310\";uname|s:22:\"pritpatel307@gmail.com\";ufname|s:10:\"Prit Patel\";urole|s:3:\"311\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"311\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('romr2r3tq8frckckrpr414fgnbuqos4a', '192.168.2.117', '1602582073', '__ci_last_regenerate|i:1602582073;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('rpmajfi6vpve13ijelnv96067jghohku', '192.168.2.117', '1603454711', '__ci_last_regenerate|i:1603454711;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('rr4obhopt5pkheom0g4gnqj69jc3f0gf', '192.168.2.117', '1602587066', '__ci_last_regenerate|i:1602587066;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('sspd59001hs9t2vf9bfoql94ov28p8p9', '192.168.2.117', '1603452226', '__ci_last_regenerate|i:1603452226;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('sti6f61u31ft2nn1rpdn39lgj0ligucf', '192.168.2.117', '1602569788', '__ci_last_regenerate|i:1602569788;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('t1kgpj5jvq9g33kfafb2t15q9ltf2ujb', '::1', '1605855605', '__ci_last_regenerate|i:1605855605;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('t75jpdeh90k3d0s0e2ih88dik04h0n15', '192.168.2.117', '1602650932', '__ci_last_regenerate|i:1602650932;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('t85iqbgc51teiaqpoksaq0aikocjbtqr', '192.168.2.117', '1602652676', '__ci_last_regenerate|i:1602652676;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('tcuqnkkm7as6sadteg95vjln9tr47tir', '::1', '1605855210', '__ci_last_regenerate|i:1605855210;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('tmbjv7uv8ktsd4acs24r2m9mbi3870pk', '192.168.2.117', '1603452857', '__ci_last_regenerate|i:1603452857;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}color|s:15:\"abc(\"success\");\";__ci_vars|a:2:{s:5:\"color\";s:3:\"old\";s:3:\"msg\";s:3:\"old\";}msg|s:23:\"Menu Added Successfully\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('u5t6qjm860g703ik3q38d2r16kqj8is6', '192.168.2.117', '1603790705', '__ci_last_regenerate|i:1603790705;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ucqqehjfc0mtopp9quvlmcq2ac4dnt2c', '192.168.2.117', '1602565511', '__ci_last_regenerate|i:1602565511;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('udo6f1l0eb62lklc9a51e9sn4ogj4qm4', '192.168.2.117', '1602656529', '__ci_last_regenerate|i:1602656529;uid|s:3:\"305\";uname|s:23:\"zsmalik786888@gmail.com\";ufname|s:14:\"Saniya Maniyar\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('var64v3uam5qpinsmrpmfmm8qs93f8vg', '::1', '1604395842', '__ci_last_regenerate|i:1604395842;uid|s:3:\"309\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:4:\"User\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('vck2baoctkrqr35a65ca7bntvtc5k9rb', '192.168.2.117', '1606805656', '__ci_last_regenerate|i:1606805651;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('vd3c72r3dallacobmkk8pipavhbddlv0', '192.168.2.117', '1602590413', '__ci_last_regenerate|i:1602590413;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('vd7llpd56lid3esb0l88qqec2cc90000', '192.168.2.117', '1602661054', '__ci_last_regenerate|i:1602661054;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('vn7rii1f75uunp07djhaa0m1vnqr353v', '::1', '1605075101', '__ci_last_regenerate|i:1605075101;uid|s:3:\"273\";uname|s:29:\"dhananjay.jadhav@clariwell.in\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"256\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"256\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('vr1lu9pvktt9mupb1n78ptu2f448ggmh', '::1', '1605860910', '__ci_last_regenerate|i:1605860910;uid|s:3:\"310\";uname|s:22:\"pritpatel307@gmail.com\";ufname|s:10:\"Prit Patel\";urole|s:3:\"311\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"311\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:12:\"System Admin\";}}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('vteq0camhddttp5k9jonf5l6jelkggu4', '192.168.2.117', '1602590742', '__ci_last_regenerate|i:1602590742;uid|s:3:\"304\";uname|s:22:\"jdhananjay15@gmail.com\";ufname|s:16:\"Dhananjay Jadhav\";urole|s:3:\"302\";uroles|a:1:{i:0;a:3:{s:11:\"LHRs_IdRole\";s:3:\"302\";s:11:\"LHRs_Active\";s:1:\"1\";s:8:\"RoleName\";s:9:\"Candidate\";}}');


#
# TABLE STRUCTURE FOR: groups
#

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id_group` int(11) NOT NULL AUTO_INCREMENT,
  `Group_Name` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_group`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `groups` (`id_group`, `Group_Name`) VALUES ('1', 'Sales Team');
INSERT INTO `groups` (`id_group`, `Group_Name`) VALUES ('2', 'Web Development & Digital Markrting Team');
INSERT INTO `groups` (`id_group`, `Group_Name`) VALUES ('3', 'HR & Admin');
INSERT INTO `groups` (`id_group`, `Group_Name`) VALUES ('4', 'Placement');
INSERT INTO `groups` (`id_group`, `Group_Name`) VALUES ('5', 'Training');


#
# TABLE STRUCTURE FOR: ledgers
#

DROP TABLE IF EXISTS `ledgers`;

CREATE TABLE `ledgers` (
  `idledgers` int(11) NOT NULL AUTO_INCREMENT,
  `LedgerCode` varchar(45) DEFAULT NULL,
  `LedgerName` varchar(255) NOT NULL,
  `LedgerGroup` int(11) DEFAULT NULL,
  `LedgerIsGroup` tinyint(1) DEFAULT 0,
  `LedgerParent` int(11) DEFAULT NULL,
  `LedgerDesc` varchar(45) DEFAULT NULL,
  `LedgerSeqNo` int(11) DEFAULT NULL,
  `LedgerPhoto` text DEFAULT NULL,
  PRIMARY KEY (`idledgers`),
  KEY `LedgerCode` (`LedgerCode`),
  KEY `LedgerCode_2` (`LedgerCode`)
) ENGINE=InnoDB AUTO_INCREMENT=312 DEFAULT CHARSET=latin1;

INSERT INTO `ledgers` (`idledgers`, `LedgerCode`, `LedgerName`, `LedgerGroup`, `LedgerIsGroup`, `LedgerParent`, `LedgerDesc`, `LedgerSeqNo`, `LedgerPhoto`) VALUES ('95', '', 'Users Master', '0', '1', '0', 'Officer Users', '0', NULL);
INSERT INTO `ledgers` (`idledgers`, `LedgerCode`, `LedgerName`, `LedgerGroup`, `LedgerIsGroup`, `LedgerParent`, `LedgerDesc`, `LedgerSeqNo`, `LedgerPhoto`) VALUES ('100', 'ROLE', 'Roles', '0', '1', '0', '', NULL, NULL);
INSERT INTO `ledgers` (`idledgers`, `LedgerCode`, `LedgerName`, `LedgerGroup`, `LedgerIsGroup`, `LedgerParent`, `LedgerDesc`, `LedgerSeqNo`, `LedgerPhoto`) VALUES ('256', 'System Admin', 'System Admin', '100', '0', '0', 'System Admin', '0', NULL);
INSERT INTO `ledgers` (`idledgers`, `LedgerCode`, `LedgerName`, `LedgerGroup`, `LedgerIsGroup`, `LedgerParent`, `LedgerDesc`, `LedgerSeqNo`, `LedgerPhoto`) VALUES ('273', 'Employee', 'Dhananjay Jadhav', NULL, '0', NULL, NULL, NULL, NULL);
INSERT INTO `ledgers` (`idledgers`, `LedgerCode`, `LedgerName`, `LedgerGroup`, `LedgerIsGroup`, `LedgerParent`, `LedgerDesc`, `LedgerSeqNo`, `LedgerPhoto`) VALUES ('302', 'User', 'User', '100', '0', '0', 'Candidate Role For all Registered candidates ', '0', NULL);
INSERT INTO `ledgers` (`idledgers`, `LedgerCode`, `LedgerName`, `LedgerGroup`, `LedgerIsGroup`, `LedgerParent`, `LedgerDesc`, `LedgerSeqNo`, `LedgerPhoto`) VALUES ('309', 'User Registration', 'Dhananjay Jadhav', NULL, '0', NULL, 'User Registration', NULL, NULL);
INSERT INTO `ledgers` (`idledgers`, `LedgerCode`, `LedgerName`, `LedgerGroup`, `LedgerIsGroup`, `LedgerParent`, `LedgerDesc`, `LedgerSeqNo`, `LedgerPhoto`) VALUES ('310', 'Employee', 'Prit Patel', NULL, '0', NULL, '', '0', NULL);
INSERT INTO `ledgers` (`idledgers`, `LedgerCode`, `LedgerName`, `LedgerGroup`, `LedgerIsGroup`, `LedgerParent`, `LedgerDesc`, `LedgerSeqNo`, `LedgerPhoto`) VALUES ('311', 'System Admin', 'System Admin', '100', '0', '0', 'User Admin', '0', NULL);


#
# TABLE STRUCTURE FOR: login_has_roles
#

DROP TABLE IF EXISTS `login_has_roles`;

CREATE TABLE `login_has_roles` (
  `LHRs_IdLogin` int(10) NOT NULL,
  `LHRs_IdRole` int(11) NOT NULL,
  `LHRs_Active` tinyint(1) DEFAULT 0,
  `LHRs_From` datetime DEFAULT NULL,
  `LHRs_To` datetime DEFAULT NULL,
  PRIMARY KEY (`LHRs_IdLogin`,`LHRs_IdRole`),
  KEY `fk_login_has_role_role1` (`LHRs_IdRole`),
  KEY `fk_role_has_login_login1` (`LHRs_IdLogin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('136', '134', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('136', '138', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('136', '140', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('136', '163', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('136', '219', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('136', '256', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('137', '134', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('137', '138', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('137', '163', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('137', '256', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('137', '257', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('262', '256', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('262', '266', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('262', '267', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('262', '268', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('262', '269', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('262', '270', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('262', '271', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('263', '256', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('263', '264', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('263', '266', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('272', '271', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('273', '256', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('273', '268', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('273', '269', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('273', '270', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('273', '271', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('274', '270', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('275', '268', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('276', '269', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('277', '268', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('278', '256', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('282', '268', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('283', '268', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('284', '268', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('285', '268', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('286', '268', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('287', '268', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('304', '302', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('305', '302', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('306', '302', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('307', '302', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('308', '302', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('309', '302', '1', NULL, NULL);
INSERT INTO `login_has_roles` (`LHRs_IdLogin`, `LHRs_IdRole`, `LHRs_Active`, `LHRs_From`, `LHRs_To`) VALUES ('310', '311', '1', NULL, NULL);


#
# TABLE STRUCTURE FOR: logins
#

DROP TABLE IF EXISTS `logins`;

CREATE TABLE `logins` (
  `idlogins` int(10) NOT NULL,
  `LoginUsername` varchar(50) DEFAULT NULL,
  `LoginPassKey` text DEFAULT NULL,
  `LoginChangePassword` tinyint(4) NOT NULL,
  `LoginActive` tinyint(1) NOT NULL DEFAULT 0,
  `LoginOTP` text NOT NULL,
  PRIMARY KEY (`idlogins`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `logins` (`idlogins`, `LoginUsername`, `LoginPassKey`, `LoginChangePassword`, `LoginActive`, `LoginOTP`) VALUES ('273', 'dhananjay.jadhav@clariwell.in', '$2y$10$8mdX6ryeA08EHDmpTSwrfewpUuHwpMlT2lUM3yWs8Ff30zajHzP7e', '1', '1', '4511');
INSERT INTO `logins` (`idlogins`, `LoginUsername`, `LoginPassKey`, `LoginChangePassword`, `LoginActive`, `LoginOTP`) VALUES ('309', 'jdhananjay15@gmail.com', '$2y$10$faESo5qq0.pGIXKKkwbIQ.qvK5PzccU20JBf/VCYRWmfAlV4zexli', '1', '1', '493607');
INSERT INTO `logins` (`idlogins`, `LoginUsername`, `LoginPassKey`, `LoginChangePassword`, `LoginActive`, `LoginOTP`) VALUES ('310', 'pritpatel307@gmail.com', '$2y$10$8mdX6ryeA08EHDmpTSwrfewpUuHwpMlT2lUM3yWs8Ff30zajHzP7e', '1', '1', '213450');


#
# TABLE STRUCTURE FOR: menu_type
#

DROP TABLE IF EXISTS `menu_type`;

CREATE TABLE `menu_type` (
  `idmenu_type` int(11) NOT NULL,
  `MT_MenuName` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idmenu_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `menu_type` (`idmenu_type`, `MT_MenuName`) VALUES ('0', 'Child');
INSERT INTO `menu_type` (`idmenu_type`, `MT_MenuName`) VALUES ('1', 'Main');
INSERT INTO `menu_type` (`idmenu_type`, `MT_MenuName`) VALUES ('2', 'Master');
INSERT INTO `menu_type` (`idmenu_type`, `MT_MenuName`) VALUES ('3', 'Dashboard');


#
# TABLE STRUCTURE FOR: menus
#

DROP TABLE IF EXISTS `menus`;

CREATE TABLE `menus` (
  `idmenus` int(11) NOT NULL AUTO_INCREMENT,
  `Menu_IsMenu` int(11) DEFAULT NULL,
  `Menu_Type` int(11) NOT NULL,
  `Menu_Position` int(11) DEFAULT NULL,
  `Menu_Code` varchar(45) DEFAULT NULL,
  `Menu_Name` varchar(45) NOT NULL,
  `Menu_IsParent` tinyint(1) DEFAULT NULL,
  `Menu_SubName` text DEFAULT NULL,
  `Menu_Icon` varchar(45) NOT NULL,
  `Menu_link` text NOT NULL,
  `Menu_RouteTo` text NOT NULL,
  `Menu_LinkOption` varchar(45) DEFAULT NULL,
  `Menu_Parrent` int(11) DEFAULT NULL,
  `Menu_Level` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idmenus`)
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=latin1;

INSERT INTO `menus` (`idmenus`, `Menu_IsMenu`, `Menu_Type`, `Menu_Position`, `Menu_Code`, `Menu_Name`, `Menu_IsParent`, `Menu_SubName`, `Menu_Icon`, `Menu_link`, `Menu_RouteTo`, `Menu_LinkOption`, `Menu_Parrent`, `Menu_Level`) VALUES ('14', '1', '0', NULL, NULL, 'Manage User Roles', NULL, '', 'fa fa-user', 'all-users', 'ledger/all_users', NULL, '102', '0');
INSERT INTO `menus` (`idmenus`, `Menu_IsMenu`, `Menu_Type`, `Menu_Position`, `Menu_Code`, `Menu_Name`, `Menu_IsParent`, `Menu_SubName`, `Menu_Icon`, `Menu_link`, `Menu_RouteTo`, `Menu_LinkOption`, `Menu_Parrent`, `Menu_Level`) VALUES ('102', NULL, '2', NULL, NULL, 'Role Management', NULL, NULL, 'fa fa-gear', '#', '#', NULL, '102', '0');
INSERT INTO `menus` (`idmenus`, `Menu_IsMenu`, `Menu_Type`, `Menu_Position`, `Menu_Code`, `Menu_Name`, `Menu_IsParent`, `Menu_SubName`, `Menu_Icon`, `Menu_link`, `Menu_RouteTo`, `Menu_LinkOption`, `Menu_Parrent`, `Menu_Level`) VALUES ('104', NULL, '0', NULL, NULL, 'Role Has Menu', NULL, NULL, 'fa fa-users', 'roles-list', 'roles/roles_list', NULL, '102', '0');
INSERT INTO `menus` (`idmenus`, `Menu_IsMenu`, `Menu_Type`, `Menu_Position`, `Menu_Code`, `Menu_Name`, `Menu_IsParent`, `Menu_SubName`, `Menu_Icon`, `Menu_link`, `Menu_RouteTo`, `Menu_LinkOption`, `Menu_Parrent`, `Menu_Level`) VALUES ('109', NULL, '1', NULL, NULL, 'Add Emotion', NULL, NULL, 'fa fa-user', 'dashboard', 'dashboard', NULL, '109', '0');
INSERT INTO `menus` (`idmenus`, `Menu_IsMenu`, `Menu_Type`, `Menu_Position`, `Menu_Code`, `Menu_Name`, `Menu_IsParent`, `Menu_SubName`, `Menu_Icon`, `Menu_link`, `Menu_RouteTo`, `Menu_LinkOption`, `Menu_Parrent`, `Menu_Level`) VALUES ('131', NULL, '0', NULL, NULL, 'Add Menus', NULL, NULL, '', 'menus', 'menu/index', NULL, '102', '0');
INSERT INTO `menus` (`idmenus`, `Menu_IsMenu`, `Menu_Type`, `Menu_Position`, `Menu_Code`, `Menu_Name`, `Menu_IsParent`, `Menu_SubName`, `Menu_Icon`, `Menu_link`, `Menu_RouteTo`, `Menu_LinkOption`, `Menu_Parrent`, `Menu_Level`) VALUES ('134', NULL, '1', NULL, NULL, 'Theme Setting', NULL, NULL, 'fa fa-cog', 'theme-setting', 'theme/index', NULL, '0', '0');
INSERT INTO `menus` (`idmenus`, `Menu_IsMenu`, `Menu_Type`, `Menu_Position`, `Menu_Code`, `Menu_Name`, `Menu_IsParent`, `Menu_SubName`, `Menu_Icon`, `Menu_link`, `Menu_RouteTo`, `Menu_LinkOption`, `Menu_Parrent`, `Menu_Level`) VALUES ('136', NULL, '1', NULL, NULL, 'System Backup', NULL, NULL, 'fa fa-database', 'system-backup', 'System_backup/backup', NULL, '0', '0');
INSERT INTO `menus` (`idmenus`, `Menu_IsMenu`, `Menu_Type`, `Menu_Position`, `Menu_Code`, `Menu_Name`, `Menu_IsParent`, `Menu_SubName`, `Menu_Icon`, `Menu_link`, `Menu_RouteTo`, `Menu_LinkOption`, `Menu_Parrent`, `Menu_Level`) VALUES ('149', NULL, '1', NULL, NULL, 'Your Emotion  Data', NULL, NULL, 'fa fa-user', 'user-emotion', 'User_datum/user_side', NULL, '0', '0');
INSERT INTO `menus` (`idmenus`, `Menu_IsMenu`, `Menu_Type`, `Menu_Position`, `Menu_Code`, `Menu_Name`, `Menu_IsParent`, `Menu_SubName`, `Menu_Icon`, `Menu_link`, `Menu_RouteTo`, `Menu_LinkOption`, `Menu_Parrent`, `Menu_Level`) VALUES ('150', NULL, '1', NULL, NULL, 'Users', NULL, NULL, 'fa fa-users', 'Users', 'Users/index', NULL, '150', '0');


#
# TABLE STRUCTURE FOR: role
#

DROP TABLE IF EXISTS `role`;

CREATE TABLE `role` (
  `idrole` int(11) NOT NULL,
  `R_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `R_Active` tinyint(4) NOT NULL,
  `R_Desc` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: role_has_menus
#

DROP TABLE IF EXISTS `role_has_menus`;

CREATE TABLE `role_has_menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `RHMs_IdRole` int(11) NOT NULL,
  `RHMs_IdMenu` int(11) NOT NULL,
  `RHMs_Seq` int(11) DEFAULT NULL,
  `RHMs_Permission` varchar(5) DEFAULT NULL,
  `RHMs_Level` int(11) DEFAULT 1,
  `RHMs_Parrent` int(11) DEFAULT NULL,
  `RHMs_Refer` varchar(45) DEFAULT NULL,
  `RHMs_MenuPosition` int(11) NOT NULL,
  `RHMs_MenuType` int(11) NOT NULL,
  `RHMs_MenuParent` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=latin1;

INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('1', '134', '1', '0', '', '0', '1', '', '0', '0', '0');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('2', '134', '2', '0', '', '0', '2', '', '0', '0', '0');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('3', '134', '4', '0', '', '0', '4', '', '0', '0', '0');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('4', '134', '5', '0', '', '0', '5', '', '0', '0', '0');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('5', '134', '6', '0', '', '0', '6', '', '0', '0', '0');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('6', '134', '7', '0', '', '0', '7', '', '0', '0', '0');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('7', '134', '8', '0', '', '0', '8', '', '0', '0', '0');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('8', '134', '9', '0', '', '0', '9', '', '0', '0', '0');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('9', '134', '10', '0', '', '0', '10', '', '0', '0', '0');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('10', '134', '23', '0', '', '0', '23', '', '0', '0', '0');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('11', '134', '74', '0', '', '0', '74', '', '0', '0', '0');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('12', '134', '77', '0', '', '0', '77', '', '0', '0', '0');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('13', '138', '81', '0', '', '0', '81', '', '0', '2', '81');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('14', '138', '87', '0', '', '0', '87', '', '0', '0', '81');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('15', '139', '11', '0', '', '0', '11', '', '0', '0', '0');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('16', '139', '14', '0', '', '0', '14', '', '0', '0', '0');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('17', '139', '16', '0', '0', '1', '11', NULL, '0', '0', '0');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('18', '139', '18', '0', '', '0', '18', '', '0', '0', '0');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('19', '139', '102', '0', '', '0', '102', '', '2', '2', '102');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('20', '140', '24', '0', '', '0', '24', '', '0', '0', '0');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('21', '256', '7', '0', '', '0', '7', '', '0', '0', '102');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('22', '256', '14', '0', '', '0', '14', '', '0', '0', '102');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('23', '256', '55', '0', '', '0', '55', '', '0', '0', '102');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('25', '256', '103', '0', '', '0', '103', '', '0', '0', '102');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('26', '256', '104', '0', '', '0', '104', '', '0', '0', '102');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('27', '256', '108', '0', '', '0', '108', '', '1', '3', '108');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('28', '257', '85', '0', '', '0', '85', '', '1', '2', '85');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('29', '257', '98', '0', '', '0', '98', '', '0', '0', '85');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('30', '256', '110', '0', '', '0', '110', '', '0', '1', '0');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('32', '256', '111', '0', '', '0', '111', '', '3', '1', '111');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('33', '256', '112', '0', '', '0', '112', '', '4', '2', '112');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('34', '256', '113', '0', '', '0', '113', '', '0', '0', '112');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('35', '256', '115', '0', '', '0', '115', '', '0', '0', '112');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('36', '256', '114', '0', '', '0', '114', '', '5', '1', '114');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('37', '256', '116', '0', '', '0', '116', '', '0', '0', '112');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('38', '256', '117', '0', '', '0', '117', '', '0', '0', '112');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('39', '256', '118', '0', '', '0', '118', '', '6', '1', '118');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('40', '256', '119', '0', '', '0', '119', '', '7', '1', '119');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('41', '256', '120', '0', '', '0', '120', '', '8', '1', '120');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('42', '256', '121', '0', '', '0', '121', '', '8', '1', '121');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('43', '256', '122', '0', '', '0', '122', '', '10', '1', '122');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('44', '256', '123', '0', '', '0', '123', '', '11', '1', '123');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('45', '264', '124', '0', '', '0', '124', '', '1', '3', '0');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('46', '268', '125', '0', '', '0', '125', '', '1', '3', '125');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('47', '268', '114', '0', '', '0', '114', '', '2', '1', '114');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('48', '269', '121', '0', '', '0', '121', '', '2', '1', '121');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('49', '269', '123', '0', '', '0', '123', '', '3', '1', '123');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('50', '270', '119', '0', '', '0', '119', '', '3', '1', '119');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('51', '270', '118', '0', '', '0', '118', '', '2', '1', '118');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('53', '270', '126', '0', '', '0', '126', '', '1', '3', '126');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('54', '269', '127', '0', '', '0', '127', '', '1', '3', '127');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('55', '271', '120', '0', '', '0', '120', '', '2', '1', '120');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('56', '269', '122', '0', '', '0', '122', '', '4', '1', '122');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('57', '256', '128', '0', '', '0', '128', '', '0', '0', '112');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('58', '271', '111', '0', '', '0', '111', '', '1', '1', '111');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('59', '271', '112', '0', '', '0', '112', '', '3', '2', '112');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('60', '271', '113', '0', '', '0', '113', '', '0', '0', '112');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('61', '271', '115', '0', '', '0', '115', '', '0', '0', '112');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('62', '271', '116', '0', '', '0', '116', '', '0', '0', '112');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('63', '271', '117', '0', '', '0', '117', '', '0', '0', '112');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('64', '256', '129', '0', '', '0', '129', '', '0', '0', '112');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('65', '256', '130', '0', '', '0', '130', '', '12', '1', '130');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('66', '256', '131', '0', '', '0', '131', '', '1', '0', '102');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('67', '256', '134', '0', '', '0', '134', '', '2', '1', '134');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('68', '256', '102', '0', '', '0', '102', '', '1', '2', '102');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('69', '256', '136', '0', '', '0', '136', '', '3', '1', '136');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('73', '302', '143', '0', '', '0', '143', '', '1', '1', '143');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('74', '256', '144', '0', '', '0', '144', '', '4', '2', '144');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('75', '256', '145', '0', '', '0', '145', '', '0', '0', '144');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('76', '256', '146', '0', '', '0', '146', '', '0', '0', '144');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('77', '256', '147', '0', '', '0', '147', '', '5', '1', '147');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('78', '256', '148', '0', '', '0', '148', '', '6', '1', '148');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('81', '256', '150', '0', '', '0', '150', '', '4', '1', '150');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('82', '256', '109', '0', '', '0', '109', '', '0', '1', '109');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('84', '302', '109', '0', '', '0', '109', '', '0', '1', '109');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('85', '302', '149', '0', '', '0', '149', '', '1', '1', '149');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('86', '311', '109', '0', '', '0', '109', '', '0', '1', '109');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('87', '311', '150', '0', '', '0', '150', '', '1', '1', '150');
INSERT INTO `role_has_menus` (`id`, `RHMs_IdRole`, `RHMs_IdMenu`, `RHMs_Seq`, `RHMs_Permission`, `RHMs_Level`, `RHMs_Parrent`, `RHMs_Refer`, `RHMs_MenuPosition`, `RHMs_MenuType`, `RHMs_MenuParent`) VALUES ('88', '311', '149', '0', '', '0', '149', '', '3', '1', '149');


#
# TABLE STRUCTURE FOR: theme
#

DROP TABLE IF EXISTS `theme`;

CREATE TABLE `theme` (
  `idtheme` int(11) NOT NULL AUTO_INCREMENT,
  `project` text COLLATE utf8_unicode_ci NOT NULL,
  `main_nav` text COLLATE utf8_unicode_ci NOT NULL,
  `left_nav` text COLLATE utf8_unicode_ci NOT NULL,
  `submenu` text COLLATE utf8_unicode_ci NOT NULL,
  `icon` text COLLATE utf8_unicode_ci NOT NULL,
  `developer` text COLLATE utf8_unicode_ci NOT NULL,
  `devsite` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idtheme`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `theme` (`idtheme`, `project`, `main_nav`, `left_nav`, `submenu`, `icon`, `developer`, `devsite`) VALUES ('1', 'FINAL PROJECT', '#1C90FB', '#0879E0', '#1A1A1A', '0ce4600b773f652be070027d8fda2b6a.jpg', '-', '-');


#
# TABLE STRUCTURE FOR: uroles_has_menu
#

DROP TABLE IF EXISTS `uroles_has_menu`;

CREATE TABLE `uroles_has_menu` (
  `iduroles_has_menu` int(11) NOT NULL,
  `URHM_IdRole` int(11) NOT NULL,
  `URHM_IdMenu` int(11) NOT NULL,
  `URHM_Level` int(11) NOT NULL,
  `URHM_Parent` int(11) NOT NULL,
  `URHM_Seq` int(11) NOT NULL,
  `URHM_Active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `uroles_has_menu` (`iduroles_has_menu`, `URHM_IdRole`, `URHM_IdMenu`, `URHM_Level`, `URHM_Parent`, `URHM_Seq`, `URHM_Active`) VALUES ('1', '2', '1', '1', '0', '1', '1');
INSERT INTO `uroles_has_menu` (`iduroles_has_menu`, `URHM_IdRole`, `URHM_IdMenu`, `URHM_Level`, `URHM_Parent`, `URHM_Seq`, `URHM_Active`) VALUES ('2', '2', '2', '2', '1', '2', '1');


#
# TABLE STRUCTURE FOR: user_data
#

DROP TABLE IF EXISTS `user_data`;

CREATE TABLE `user_data` (
  `iduser_data` int(11) NOT NULL AUTO_INCREMENT,
  `UD_iduser` int(11) NOT NULL,
  `UD_Emotion` text COLLATE utf8_unicode_ci NOT NULL,
  `UD_Date` datetime NOT NULL,
  PRIMARY KEY (`iduser_data`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `user_data` (`iduser_data`, `UD_iduser`, `UD_Emotion`, `UD_Date`) VALUES ('1', '309', 'Happy', '2003-11-20 17:27:11');
INSERT INTO `user_data` (`iduser_data`, `UD_iduser`, `UD_Emotion`, `UD_Date`) VALUES ('3', '309', 'Neutral', '2020-11-03 17:47:19');
INSERT INTO `user_data` (`iduser_data`, `UD_iduser`, `UD_Emotion`, `UD_Date`) VALUES ('4', '309', 'Sad', '2020-11-03 18:16:58');
INSERT INTO `user_data` (`iduser_data`, `UD_iduser`, `UD_Emotion`, `UD_Date`) VALUES ('5', '309', 'Happy', '2020-11-06 17:43:06');
INSERT INTO `user_data` (`iduser_data`, `UD_iduser`, `UD_Emotion`, `UD_Date`) VALUES ('6', '309', 'Neutral', '2020-11-06 17:43:12');
INSERT INTO `user_data` (`iduser_data`, `UD_iduser`, `UD_Emotion`, `UD_Date`) VALUES ('7', '273', 'Happy', '2020-11-06 17:44:23');
INSERT INTO `user_data` (`iduser_data`, `UD_iduser`, `UD_Emotion`, `UD_Date`) VALUES ('8', '273', 'Neutral', '2020-11-11 11:22:09');
INSERT INTO `user_data` (`iduser_data`, `UD_iduser`, `UD_Emotion`, `UD_Date`) VALUES ('9', '309', 'Happy', '2020-11-11 11:23:00');
INSERT INTO `user_data` (`iduser_data`, `UD_iduser`, `UD_Emotion`, `UD_Date`) VALUES ('10', '309', 'Sad', '2020-11-20 12:24:25');
INSERT INTO `user_data` (`iduser_data`, `UD_iduser`, `UD_Emotion`, `UD_Date`) VALUES ('11', '310', 'Neutral', '2020-11-20 14:28:57');
INSERT INTO `user_data` (`iduser_data`, `UD_iduser`, `UD_Emotion`, `UD_Date`) VALUES ('12', '310', 'Sad', '2020-11-20 14:32:48');
INSERT INTO `user_data` (`iduser_data`, `UD_iduser`, `UD_Emotion`, `UD_Date`) VALUES ('13', '273', 'Neutral', '2020-12-01 11:41:18');


#
# TABLE STRUCTURE FOR: users
#

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `idusers` int(11) NOT NULL,
  `User_FullName` text NOT NULL,
  `User_Email` text NOT NULL,
  `User_Mobile` text NOT NULL,
  `User_RandCode` int(11) NOT NULL,
  `User_RegDate` date NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO `users` (`tid`, `idusers`, `User_FullName`, `User_Email`, `User_Mobile`, `User_RandCode`, `User_RegDate`) VALUES ('6', '309', 'Dhananjay Jadhav', 'jdhananjay15@gmail.com', '9022093006', '896962', '2020-11-03');
INSERT INTO `users` (`tid`, `idusers`, `User_FullName`, `User_Email`, `User_Mobile`, `User_RandCode`, `User_RegDate`) VALUES ('7', '310', 'Prit Patel', 'pritpatel307@gmail.com', '9090909090', '98976', '2020-11-20');


