-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-01-30 09:32:39
-- 伺服器版本： 10.4.27-MariaDB
-- PHP 版本： 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `addressbook`
--

DELIMITER $$
--
-- 程序
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `login` (IN `myuid` VARCHAR(20), IN `mypwd` VARCHAR(20))   BEGIN
	declare isLogin int default 0;
	SELECT COUNT(*) INTO isLogin FROM userinfo WHERE uid = myuid and pwd = mypwd;
    if isLogin = 1 THEN
    	SELECT 'https://welcome.php' as url;
    ELSE
    	SELECT 'https://fail.php' as url;
    END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `swap` (INOUT `a` INT, INOUT `b` INT)   begin
    declare tmp int;
    set tmp = a;
    set a = b;
    set b = tmp;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `test` (`n` INT)   begin
	if n > 0 then
		select '> 0' as answer;
	elseif n = 0 then
		select '= 0' as answer;
	else
		select '< 0' as answer;
	end if;
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- 資料表結構 `bill`
--

CREATE TABLE `bill` (
  `tel` varchar(20) NOT NULL,
  `fee` int(11) DEFAULT NULL,
  `dd` datetime NOT NULL DEFAULT current_timestamp(),
  `hid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 傾印資料表的資料 `bill`
--

INSERT INTO `bill` (`tel`, `fee`, `dd`, `hid`) VALUES
('1111', 300, '2019-01-01 00:00:00', 1),
('1111', 700, '2019-02-01 00:00:00', 1),
('1111', 350, '2019-10-01 00:00:00', 2),
('1111', 350, '2023-01-19 04:41:04', 1),
('1112', 700, '2019-01-01 00:00:00', 1),
('1112', 450, '2019-02-01 00:00:00', 1),
('1112', 200, '2019-03-01 00:00:00', 1),
('2222', 150, '2019-01-01 00:00:00', 2),
('2222', 400, '2019-02-01 00:00:00', 2),
('2222', 300, '2019-03-01 00:00:00', 2),
('2222', 600, '2019-05-01 00:00:00', 2),
('2222', 700, '2019-07-01 00:00:00', 2),
('2222', 800, '2019-09-01 00:00:00', 2),
('2222', 620, '2019-10-01 00:00:00', 2),
('2222', 380, '2019-12-01 00:00:00', 2),
('2222', 600, '2023-01-30 09:27:09', 2),
('3333', 500, '2019-04-01 00:00:00', 3),
('4444', 600, '2023-01-30 09:23:10', 4);

-- --------------------------------------------------------

--
-- 資料表結構 `house`
--

CREATE TABLE `house` (
  `hid` int(11) NOT NULL,
  `address` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 傾印資料表的資料 `house`
--

INSERT INTO `house` (`hid`, `address`) VALUES
(1, '台北市南京東路1號'),
(2, '新竹市光復北路1號'),
(3, '台中市公益路二段51號'),
(4, '高雄市五福路3號');

-- --------------------------------------------------------

--
-- 資料表結構 `live`
--

CREATE TABLE `live` (
  `uid` varchar(20) NOT NULL,
  `hid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 傾印資料表的資料 `live`
--

INSERT INTO `live` (`uid`, `hid`) VALUES
('A01', 1),
('A01', 3),
('A02', 1),
('A03', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `body` varchar(300) NOT NULL,
  `dd` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 傾印資料表的資料 `log`
--

INSERT INTO `log` (`id`, `body`, `dd`) VALUES
(1, '將 Z01 張三 插入到 userinfo 資料表中', '2023-01-30 11:52:57'),
(2, '將 Z03  插入到 userinfo 資料表中', '2023-01-30 13:44:49'),
(3, '將userinfo 資料表中的Z03  更新為Z04 王五郎 ', '2023-01-30 14:06:26'),
(4, '刪除userinfo資料表中的 Z01 張三 ', '2023-01-30 14:08:47'),
(5, '將 Z05 吳一郎 插入到 userinfo 資料表中', '2023-01-30 14:16:50'),
(6, '刪除userinfo資料表中的 Z05 吳一郎  於 2023-01-30 14:17:19', '2023-01-30 14:17:19'),
(8, '將userinfo 資料表中的A01 王大明 更新為A01 王大明 ', '2023-01-30 14:55:01'),
(9, '將userinfo 資料表中的A02 李大媽 更新為A02 李大媽 ', '2023-01-30 14:55:01'),
(10, '將userinfo 資料表中的A03 王小毛 更新為A03 王小毛 ', '2023-01-30 14:55:01'),
(11, '將userinfo 資料表中的A04 朱小妹 更新為A04 朱小妹 ', '2023-01-30 14:55:01'),
(12, '將userinfo 資料表中的A05 王大郎 更新為A05 王大郎 ', '2023-01-30 14:55:01'),
(13, '將userinfo 資料表中的A06 王二郎 更新為A06 王二郎 ', '2023-01-30 14:55:01'),
(14, '將userinfo 資料表中的B01 孫小毛 更新為B01 孫小毛 ', '2023-01-30 14:55:01'),
(15, '將userinfo 資料表中的Z04 王五郎 更新為Z04 王五郎 ', '2023-01-30 14:55:01'),
(17, '將userinfo 資料表中的A01 王大明 更新為A01 王大明 ', '2023-01-30 15:00:39');

-- --------------------------------------------------------

--
-- 資料表結構 `new_userinfo`
--

CREATE TABLE `new_userinfo` (
  `uid` varchar(20) NOT NULL,
  `cname` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 傾印資料表的資料 `new_userinfo`
--

INSERT INTO `new_userinfo` (`uid`, `cname`) VALUES
('', '王中明'),
('A01', '王大明'),
('A02', '李大媽'),
('A03', '王小毛'),
('A04', '朱小妹'),
('A05', NULL),
('A06', ''),
('A07', '朱大妹'),
('A08', NULL),
('', '王中明'),
('A01', '王大明'),
('A02', '李大媽'),
('A03', '王小毛'),
('A04', '朱小妹'),
('A05', NULL),
('A06', ''),
('A07', '朱大妹'),
('A08', NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `phone`
--

CREATE TABLE `phone` (
  `tel` varchar(20) NOT NULL,
  `hid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 傾印資料表的資料 `phone`
--

INSERT INTO `phone` (`tel`, `hid`) VALUES
('1111', 1),
('1112', 1),
('2222', 2),
('3333', 3);

-- --------------------------------------------------------

--
-- 資料表結構 `userinfo`
--

CREATE TABLE `userinfo` (
  `uid` varchar(20) NOT NULL,
  `cname` varchar(45) DEFAULT NULL,
  `pwd` varchar(20) DEFAULT NULL,
  `birthday` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 傾印資料表的資料 `userinfo`
--

INSERT INTO `userinfo` (`uid`, `cname`, `pwd`, `birthday`) VALUES
('A01', '王大明', '5678', '1994-10-26'),
('A02', '李大媽', '1234', '1999-02-02'),
('A03', '王小毛', '1234', '1995-10-22'),
('A04', '朱小妹', '1234', '1999-09-13'),
('A05', '王大郎', '1234', '2020-01-30'),
('A06', '王二郎', '1234', '2020-01-31'),
('B01', '孫小毛', '1234', '1994-12-09'),
('Z04', '王五郎', '1234', NULL);

--
-- 觸發器 `userinfo`
--
DELIMITER $$
CREATE TRIGGER `trigger_delete` AFTER DELETE ON `userinfo` FOR EACH ROW BEGIN
  SET @d_uid = old.uid;
  SET @d_cname = ifnull(old.cname, '');
  SET @d_time = now();
  SET @d_str = concat('刪除userinfo資料表中的 ',@d_uid,' ',@d_cname,'  於 ',@d_time,'');
  INSERT INTO log(body) VALUES(@d_str);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trigger_insert` AFTER INSERT ON `userinfo` FOR EACH ROW BEGIN
  SET @myuid = new.uid;
  SET @mycname = ifnull(new.cname, '');
  set @str = concat('將 ',@myuid,' ',@mycname,' 插入到 userinfo 資料表中');
  INSERT INTO log(body) VALUES (@str);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trigger_test` BEFORE UPDATE ON `userinfo` FOR EACH ROW BEGIN
	if @count is null THEN
    	SET @count = 0;
    end if;
    
	if new.pwd <> old.pwd THEN
    	SET @count = @count + 1;
    end if;
    
	if @count > 1 then
		signal sqlstate '45001' set message_text = 'Stop!!';
	end if;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trigger_update` AFTER UPDATE ON `userinfo` FOR EACH ROW BEGIN
  SET @o_uid = old.uid;
  SET @o_cname = ifnull(old.cname, '');
  SET @n_uid = new.uid;
  SET @n_cname = ifnull(new.cname, '');
  set @str = concat('將userinfo 資料表中的',@o_uid,' ',@o_cname,' 更新為',@n_uid,' ',@n_cname,' ');
  INSERT INTO log(body) VALUES (@str);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- 替換檢視表以便查看 `vw_mostcrowded`
-- (請參考以下實際畫面)
--
CREATE TABLE `vw_mostcrowded` (
`address` varchar(200)
,`n` bigint(21)
);

-- --------------------------------------------------------

--
-- 替換檢視表以便查看 `vw_userinfo`
-- (請參考以下實際畫面)
--
CREATE TABLE `vw_userinfo` (
`uid` varchar(20)
,`cname` varchar(45)
);

-- --------------------------------------------------------

--
-- 檢視表結構 `vw_mostcrowded`
--
DROP TABLE IF EXISTS `vw_mostcrowded`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_mostcrowded`  AS SELECT `house`.`address` AS `address`, `bb`.`n` AS `n` FROM (((select max(`a`.`n`) AS `max_n` from (select count(0) AS `n` from `live` group by `live`.`hid`) `a`) `aa` join (select `live`.`hid` AS `hid`,count(0) AS `n` from `live` group by `live`.`hid`) `bb`) join `house`) WHERE `aa`.`max_n` = `bb`.`n` AND `bb`.`hid` = `house`.`hid``hid`  ;

-- --------------------------------------------------------

--
-- 檢視表結構 `vw_userinfo`
--
DROP TABLE IF EXISTS `vw_userinfo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_userinfo`  AS SELECT `userinfo`.`uid` AS `uid`, `userinfo`.`cname` AS `cname` FROM `userinfo` WHERE left(`userinfo`.`cname`,1) <> '王' OR `userinfo`.`cname` is nullnull  ;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`tel`,`dd`);

--
-- 資料表索引 `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`hid`);

--
-- 資料表索引 `live`
--
ALTER TABLE `live`
  ADD PRIMARY KEY (`uid`,`hid`);

--
-- 資料表索引 `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`tel`);

--
-- 資料表索引 `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`uid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `house`
--
ALTER TABLE `house`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
