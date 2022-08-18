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



create table users (
  `id` INTEGER PRIMARY KEY,
  `username` VARCHAR(50),
  `first_name` VARCHAR(50),
  `last_name` VARCHAR(50),
  `email` VARCHAR(50),
  `password` VARCHAR(50),
  `position` VARCHAR(50),
  `address` VARCHAR(50),
  `created_at` datetime,
  `updated_at` datetime,
  `avatar` VARCHAR(50)
);
insert into `users` (
    `id`,
    `username`,
    `first_name`,
    `last_name`,
    `email`,
    `password`,
    `position`,
    `address`,
    `created_at`,
    `updated_at`,
    `avatar`
  )
values (
    1,
    'Reginald',
    'Luce',
    'Crumbleholme',
    'lcrumbleholme0@sogou.com',
    "81dc9bdb52d04dc20036dbd8313ed055",
    'Legal Assistant',
    '978 Elgar Hill',
    '8/4/2022',
    '9/23/2021',
    'https://robohash.org/exercitationembeataeperspiciatis.png?size=50x50&set=set1'
  ), (
    2,
    'Gerhard',
    'My',
    'Brannon',
    'mbrannon1@istockphoto.com',
    "81dc9bdb52d04dc20036dbd8313ed055",
    'Executive Secretary',
    '74 Hintze Point',
    '1/27/2022',
    '12/21/2021',
    'https://robohash.org/temporibusipsaincidunt.png?size=50x50&set=set1'
  ), (
    3,
    'Vanny',
    'Boycie',
    'Lugard',
    'blugard2@eventbrite.com',
    "81dc9bdb52d04dc20036dbd8313ed055",
    'Account Representative II',
    '04 Warbler Drive',
    '9/19/2021',
    '5/18/2022',
    'https://robohash.org/sitsaepeassumenda.png?size=50x50&set=set1'
  ), (
    4,
    'Pablo',
    'Joyan',
    'Montrose',
    'jmontrose3@booking.com',
    "81dc9bdb52d04dc20036dbd8313ed055",
    'Sales Representative',
    '9 Dixon Drive',
    '2/13/2022',
    '5/3/2022',
    'https://robohash.org/quiarerumdeleniti.png?size=50x50&set=set1'
  ), (
    5,
    'Nanete',
    'Dara',
    'Screen',
    'dscreen4@howstuffworks.com',
    "81dc9bdb52d04dc20036dbd8313ed055",
    'Sales Associate',
    '49127 Claremont Circle',
    '12/1/2021',
    '9/22/2021',
    'https://robohash.org/nonnonet.png?size=50x50&set=set1'
  ), (
    6,
    'Corine',
    'Bernie',
    'Cawsey',
    'bcawsey5@bloomberg.com',
    "81dc9bdb52d04dc20036dbd8313ed055",
    'Senior Sales Associate',
    '6542 Blaine Crossing',
    '11/2/2021',
    '1/5/2022',
    'https://robohash.org/doloribusetlaudantium.png?size=50x50&set=set1'
  ), (
    7,
    'Kora',
    'Randall',
    'Tuffield',
    'rtuffield6@howstuffworks.com',
    "81dc9bdb52d04dc20036dbd8313ed055",
    'Assistant Professor',
    '7 Norway Maple Trail',
    '4/5/2022',
    '2/11/2022',
    'https://robohash.org/quiutin.png?size=50x50&set=set1'
  ), (
    8,
    'Erma',
    'Di',
    'Dantesia',
    'ddantesia7@geocities.jp',
    "81dc9bdb52d04dc20036dbd8313ed055",
    'Civil Engineer',
    '809 Havey Plaza',
    '4/19/2022',
    '7/9/2022',
    'https://robohash.org/estearumiste.png?size=50x50&set=set1'
  ), (
    9,
    'Chevy',
    'Loralee',
    'Norkett',
    'lnorkett8@multiply.com',
    "81dc9bdb52d04dc20036dbd8313ed055",
    'Executive Secretary',
    '69057 Chinook Drive',
    '4/2/2022',
    '7/4/2022',
    'https://robohash.org/officiisoditdolore.png?size=50x50&set=set1'
  ), (
    10,
    'Kyla',
    'Anselm',
    'Boagey',
    'aboagey9@addtoany.com',
    "81dc9bdb52d04dc20036dbd8313ed055",
    'Mechanical Systems Engineer',
    '9107 Sherman Center',
    '1/9/2022',
    '12/2/2021',
    'https://robohash.org/dolorummaioresharum.png?size=50x50&set=set1'
  ), (
    11,
    'Zorine',
    'Toinette',
    'Fayerbrother',
    'tfayerbrothera@rediff.com',
    "81dc9bdb52d04dc20036dbd8313ed055",
    'Account Executive',
    '4546 Russell Place',
    '11/29/2021',
    '4/10/2022',
    'https://robohash.org/omniseteum.png?size=50x50&set=set1'
  ), (
    12,
    'Tessie',
    'Elliot',
    'Jantel',
    'ejantelb@earthlink.net',
    "81dc9bdb52d04dc20036dbd8313ed055",
    'Sales Associate',
    '299 Gateway Pass',
    '5/20/2022',
    '5/16/2022',
    'https://robohash.org/ducimusatquearchitecto.png?size=50x50&set=set1'
  ), (
    13,
    'Kelsey',
    'Rowe',
    'Wathell',
    'rwathellc@macromedia.com',
    "81dc9bdb52d04dc20036dbd8313ed055",
    'Statistician II',
    '40641 Carey Park',
    '1/21/2022',
    '7/26/2022',
    'https://robohash.org/etsuntsimilique.png?size=50x50&set=set1'
  ), (
    14,
    'Jewelle',
    'Kacy',
    'Diglin',
    'kdiglind@umich.edu',
    "81dc9bdb52d04dc20036dbd8313ed055",
    'Analog Circuit Design manager',
    '4909 Paget Pass',
    '10/19/2021',
    '9/2/2021',
    'https://robohash.org/accusantiumdeseruntaut.png?size=50x50&set=set1'
  ), (
    15,
    'Margarette',
    'Juanita',
    'Philipart',
    'jphiliparte@nymag.com',
    "81dc9bdb52d04dc20036dbd8313ed055",
    'Senior Editor',
    '5676 Longview Center',
    '6/12/2022',
    '8/16/2022',
    'https://robohash.org/sitnostrumatque.png?size=50x50&set=set1'
  ), (
    16,
    'Emylee',
    'Aigneis',
    'Dinjes',
    'adinjesf@so-net.ne.jp',
    "81dc9bdb52d04dc20036dbd8313ed055",
    'Occupational Therapist',
    '5413 Pond Plaza',
    '2/12/2022',
    '1/20/2022',
    'https://robohash.org/utatsoluta.png?size=50x50&set=set1'
  ), (
    17,
    'Frasquito',
    'Colleen',
    'Wynter',
    'cwynterg@hostgator.com',
    "81dc9bdb52d04dc20036dbd8313ed055",
    'Software Engineer III',
    '569 Arizona Court',
    '4/26/2022',
    '7/18/2022',
    'https://robohash.org/rerumfugiatpariatur.png?size=50x50&set=set1'
  ), (
    18,
    'Waldo',
    'Dela',
    'de Clerq',
    'ddeclerqh@nifty.com',
    "81dc9bdb52d04dc20036dbd8313ed055",
    'Nurse Practicioner',
    '36 Fuller Way',
    '2/25/2022',
    '3/29/2022',
    'https://robohash.org/inautsed.png?size=50x50&set=set1'
  ), (
    19,
    'Nester',
    'Menard',
    'Bray',
    'mbrayi@nyu.edu',
    "81dc9bdb52d04dc20036dbd8313ed055",
    'Senior Sales Associate',
    '5 Sutteridge Hill',
    '8/6/2022',
    '6/28/2022',
    'https://robohash.org/laboriosametcupiditate.png?size=50x50&set=set1'
  ), (
    20,
    'Hersch',
    'Shanon',
    'Barczewski',
    'sbarczewskij@mapquest.com',
    "81dc9bdb52d04dc20036dbd8313ed055",
    'Administrative Assistant III',
    '01 Sutherland Street',
    '8/5/2022',
    '3/2/2022',
    'https://robohash.org/voluptasvoluptatesaspernatur.png?size=50x50&set=set1'
  );