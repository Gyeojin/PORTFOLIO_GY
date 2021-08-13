-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-08-13 06:41
-- 서버 버전: 10.4.19-MariaDB
-- PHP 버전: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `test`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `pf_msg`
--

CREATE TABLE `pf_msg` (
  `pf_msg_idx` int(11) NOT NULL,
  `pf_msg_id` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '아이디',
  `pf_msg_pass` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '비밀번호',
  `pf_msg_email` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '이메일',
  `pf_msg_tit` text CHARACTER SET utf8 NOT NULL COMMENT '타이틀',
  `pf_msg_desc` text CHARACTER SET utf8 NOT NULL COMMENT '내용',
  `pf_msg_reg` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '작성 날짜'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `pf_msg`
--
ALTER TABLE `pf_msg`
  ADD PRIMARY KEY (`pf_msg_idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `pf_msg`
--
ALTER TABLE `pf_msg`
  MODIFY `pf_msg_idx` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
