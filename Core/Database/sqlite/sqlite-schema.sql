CREATE TABLE `users` (
  `id` INTEGER PRIMARY KEY AUTOINCREMENT,
  `username` varchar(255),
  `email` varchar(255),
  `password` varchar(255),
  `created_at` datetime,
  `updated_at` datetime
);

INSERT INTO `users` (
    `username`,
    `email`,
    `password`,
    `created_at`,
    `updated_at`
  )
VALUES(
    'admin',
    'admin@devstalk.com',
    '81dc9bdb52d04dc20036dbd8313ed055',
    '2022-03-24 09:33:40',
    '2022-03-24 09:33:40'
  );

  DROP TABLE `users`;