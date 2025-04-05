--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `userid` varchar(30) NOT NULL,
  `action` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`userid`, `action`) VALUES
('5c0149c8a305a', 'mark coursework'),
('5c0149c8a305a', 'go to bed'),
('5c0149c8a305a', 'eat dinner'),
('5c0149c8a305a', 'wash dishes'),
('5c0149c8a305a', 'read book');
