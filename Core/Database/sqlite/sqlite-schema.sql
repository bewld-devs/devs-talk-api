create table users (
  `id` INTEGER PRIMARY KEY,
  `username` VARCHAR(50),
  `first_name` VARCHAR(50),
  `last_name` VARCHAR(50),
  `email` VARCHAR(50),
  `password` VARCHAR(50),
  `position` VARCHAR(50),
  `address` VARCHAR(50),
  `about` TEXT,
  `created_at` datetime,
  `updated_at` datetime,
  `avatar` VARCHAR(50)
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
create table `posts` (
  `id` INTEGER PRIMARY KEY,
  `content` TEXT,
  `image` VARCHAR(50),
  `likes` INT,
  `user_id` INT,
  `comment_id` INT,
  `created_at` datetime,
  `updated_at` datetime
);
