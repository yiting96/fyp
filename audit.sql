CREATE TABLE `auditlog` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `logintime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
