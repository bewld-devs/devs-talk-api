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
insert into `posts` (
    `id`,
    `content`,
    `image`,
    `likes`,
    `user_id`,
    `comment_id`,
    `created_at`,
    `update_at`
  )
values (
    1,
    'praesent blandit lacinia erat vestibulum sed magna at nunc commodo placerat praesent blandit nam nulla integer pede justo lacinia eget tincidunt eget tempus vel',
    'http://dummyimage.com/245x100.png/5fa2dd/ffffff',
    193,
    15,
    4,
    '4/15/2022',
    '2/11/2022'
  ), (
    2,
    'vestibulum sed magna at nunc commodo placerat praesent blandit nam nulla integer pede justo lacinia eget',
    'http://dummyimage.com/157x100.png/cc0000/ffffff',
    712,
    14,
    3,
    '9/9/2021',
    '7/15/2022'
  ), (
    3,
    'bibendum morbi non quam nec dui luctus rutrum nulla tellus in sagittis dui vel nisl duis ac nibh fusce lacus',
    'http://dummyimage.com/245x100.png/5fa2dd/ffffff',
    192,
    10,
    7,
    '4/22/2022',
    '10/4/2021'
  ), (
    4,
    'lobortis ligula sit amet eleifend pede libero quis orci nullam molestie nibh in lectus pellentesque at nulla suspendisse potenti',
    'http://dummyimage.com/201x100.png/5fa2dd/ffffff',
    262,
    4,
    10,
    '7/8/2022',
    '9/7/2021'
  ), (
    5,
    'ipsum aliquam non mauris morbi non lectus aliquam sit amet diam in magna bibendum imperdiet nullam',
    'http://dummyimage.com/139x100.png/cc0000/ffffff',
    449,
    12,
    8,
    '10/16/2021',
    '11/16/2021'
  ), (
    6,
    'nisl nunc nisl duis bibendum felis sed interdum venenatis turpis',
    'http://dummyimage.com/209x100.png/cc0000/ffffff',
    823,
    7,
    3,
    '3/8/2022',
    '3/16/2022'
  ), (
    7,
    'volutpat in congue etiam justo etiam pretium iaculis justo in hac',
    'http://dummyimage.com/215x100.png/ff4444/ffffff',
    907,
    1,
    3,
    '12/9/2021',
    '12/14/2021'
  ), (
    8,
    'risus praesent lectus vestibulum quam sapien varius ut blandit non interdum in ante vestibulum ante ipsum primis in faucibus orci luctus et',
    'http://dummyimage.com/222x100.png/5fa2dd/ffffff',
    139,
    20,
    15,
    '3/10/2022',
    '6/23/2022'
  ), (
    9,
    'donec quis orci eget orci vehicula condimentum curabitur in libero ut massa volutpat convallis morbi odio odio elementum eu interdum eu',
    'http://dummyimage.com/216x100.png/ff4444/ffffff',
    840,
    9,
    14,
    '1/6/2022',
    '1/10/2022'
  ), (
    10,
    'posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit amet lobortis sapien sapien non mi',
    'http://dummyimage.com/124x100.png/5fa2dd/ffffff',
    440,
    11,
    20,
    '7/1/2022',
    '12/2/2021'
  ), (
    11,
    'volutpat eleifend donec ut dolor morbi vel lectus in quam fringilla rhoncus mauris enim leo rhoncus sed vestibulum sit',
    'http://dummyimage.com/213x100.png/ff4444/ffffff',
    897,
    20,
    2,
    '6/5/2022',
    '8/23/2021'
  ), (
    12,
    'posuere nonummy integer non velit donec diam neque vestibulum eget vulputate',
    'http://dummyimage.com/235x100.png/5fa2dd/ffffff',
    24,
    8,
    20,
    '5/3/2022',
    '9/17/2021'
  ), (
    13,
    'lectus aliquam sit amet diam in magna bibendum imperdiet nullam orci pede venenatis non sodales sed tincidunt eu felis fusce posuere felis sed lacus morbi sem mauris laoreet',
    'http://dummyimage.com/169x100.png/dddddd/000000',
    391,
    18,
    11,
    '9/7/2021',
    '4/29/2022'
  ), (
    14,
    'lacus morbi quis tortor id nulla ultrices aliquet maecenas leo odio condimentum id luctus nec molestie sed justo pellentesque viverra',
    'http://dummyimage.com/250x100.png/dddddd/000000',
    730,
    16,
    12,
    '1/8/2022',
    '8/21/2021'
  ), (
    15,
    'sit amet nulla quisque arcu libero rutrum ac lobortis vel dapibus at diam nam tristique tortor eu',
    'http://dummyimage.com/230x100.png/ff4444/ffffff',
    57,
    7,
    5,
    '5/15/2022',
    '11/25/2021'
  ), (
    16,
    'nullam sit amet turpis elementum ligula vehicula consequat morbi a ipsum integer a nibh in quis',
    'http://dummyimage.com/214x100.png/cc0000/ffffff',
    22,
    9,
    16,
    '7/26/2022',
    '3/11/2022'
  ), (
    17,
    'id lobortis convallis tortor risus dapibus augue vel accumsan tellus nisi eu orci mauris lacinia sapien quis libero nullam sit amet',
    'http://dummyimage.com/219x100.png/5fa2dd/ffffff',
    154,
    11,
    4,
    '4/23/2022',
    '11/27/2021'
  ), (
    18,
    'euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis aliquam convallis nunc proin at turpis a pede posuere nonummy integer non',
    'http://dummyimage.com/186x100.png/cc0000/ffffff',
    89,
    4,
    13,
    '7/31/2022',
    '10/17/2021'
  ), (
    19,
    'proin leo odio porttitor id consequat in consequat ut nulla sed accumsan felis ut at dolor quis odio consequat varius integer ac leo pellentesque ultrices mattis',
    'http://dummyimage.com/140x100.png/ff4444/ffffff',
    476,
    7,
    2,
    '2/5/2022',
    '11/23/2021'
  ), (
    20,
    'ligula nec sem duis aliquam convallis nunc proin at turpis a pede posuere nonummy integer non velit donec diam',
    'http://dummyimage.com/111x100.png/cc0000/ffffff',
    783,
    20,
    13,
    '4/23/2022',
    '6/25/2022'
  ), (
    21,
    'nunc rhoncus dui vel sem sed sagittis nam congue risus semper porta volutpat quam pede lobortis',
    'http://dummyimage.com/146x100.png/dddddd/000000',
    450,
    11,
    14,
    '9/16/2021',
    '2/28/2022'
  ), (
    22,
    'integer pede justo lacinia eget tincidunt eget tempus vel pede morbi porttitor lorem id ligula suspendisse ornare consequat lectus in est risus auctor sed tristique in tempus sit amet sem',
    'http://dummyimage.com/189x100.png/cc0000/ffffff',
    36,
    1,
    6,
    '3/22/2022',
    '10/30/2021'
  ), (
    23,
    'purus aliquet at feugiat non pretium quis lectus suspendisse potenti in eleifend quam a odio in hac habitasse platea dictumst',
    'http://dummyimage.com/152x100.png/dddddd/000000',
    133,
    18,
    6,
    '11/9/2021',
    '1/29/2022'
  ), (
    24,
    'cursus urna ut tellus nulla ut erat id mauris vulputate elementum nullam varius nulla facilisi cras non velit nec nisi vulputate nonummy maecenas tincidunt lacus at',
    'http://dummyimage.com/192x100.png/cc0000/ffffff',
    893,
    17,
    16,
    '8/18/2021',
    '10/22/2021'
  ), (
    25,
    'pede ac diam cras pellentesque volutpat dui maecenas tristique est et tempus semper est quam pharetra magna ac consequat metus sapien ut nunc vestibulum ante ipsum primis in faucibus',
    'http://dummyimage.com/244x100.png/5fa2dd/ffffff',
    458,
    17,
    18,
    '4/3/2022',
    '8/14/2022'
  ), (
    26,
    'ipsum dolor sit amet consectetuer adipiscing elit proin risus praesent lectus vestibulum quam sapien varius ut blandit non interdum in ante vestibulum ante ipsum primis in faucibus orci luctus',
    'http://dummyimage.com/207x100.png/dddddd/000000',
    593,
    13,
    5,
    '12/9/2021',
    '11/21/2021'
  ), (
    27,
    'vel ipsum praesent blandit lacinia erat vestibulum sed magna at nunc commodo placerat praesent blandit nam nulla integer pede justo',
    'http://dummyimage.com/104x100.png/5fa2dd/ffffff',
    881,
    13,
    5,
    '4/9/2022',
    '5/17/2022'
  ), (
    28,
    'sapien non mi integer ac neque duis bibendum morbi non quam nec',
    'http://dummyimage.com/192x100.png/dddddd/000000',
    861,
    1,
    17,
    '12/27/2021',
    '9/29/2021'
  ), (
    29,
    'ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae nulla dapibus dolor vel est donec odio justo sollicitudin ut suscipit a',
    'http://dummyimage.com/118x100.png/ff4444/ffffff',
    893,
    4,
    1,
    '2/26/2022',
    '6/14/2022'
  ), (
    30,
    'nisi vulputate nonummy maecenas tincidunt lacus at velit vivamus vel nulla eget eros elementum pellentesque quisque porta volutpat erat quisque erat',
    'http://dummyimage.com/212x100.png/5fa2dd/ffffff',
    681,
    4,
    13,
    '8/18/2021',
    '3/6/2022'
  ), (
    31,
    'diam erat fermentum justo nec condimentum neque sapien placerat ante nulla justo aliquam quis turpis eget elit sodales scelerisque mauris sit amet eros suspendisse accumsan tortor quis turpis',
    'http://dummyimage.com/175x100.png/dddddd/000000',
    409,
    7,
    14,
    '9/4/2021',
    '12/27/2021'
  ), (
    32,
    'elit ac nulla sed vel enim sit amet nunc viverra dapibus nulla suscipit ligula in lacus curabitur at ipsum ac tellus semper',
    'http://dummyimage.com/170x100.png/dddddd/000000',
    914,
    10,
    17,
    '3/28/2022',
    '6/13/2022'
  ), (
    33,
    'id massa id nisl venenatis lacinia aenean sit amet justo morbi ut odio',
    'http://dummyimage.com/105x100.png/5fa2dd/ffffff',
    531,
    3,
    14,
    '5/8/2022',
    '4/25/2022'
  ), (
    34,
    'eget massa tempor convallis nulla neque libero convallis eget eleifend luctus ultricies eu nibh quisque id justo sit amet sapien dignissim vestibulum vestibulum ante ipsum primis',
    'http://dummyimage.com/176x100.png/5fa2dd/ffffff',
    94,
    11,
    9,
    '4/28/2022',
    '7/6/2022'
  ), (
    35,
    'magnis dis parturient montes nascetur ridiculus mus etiam vel augue vestibulum rutrum rutrum neque aenean auctor gravida sem praesent id massa id nisl venenatis lacinia aenean',
    'http://dummyimage.com/146x100.png/cc0000/ffffff',
    912,
    12,
    7,
    '3/11/2022',
    '9/12/2021'
  ), (
    36,
    'lorem ipsum dolor sit amet consectetuer adipiscing elit proin interdum mauris non ligula pellentesque ultrices phasellus id sapien in',
    'http://dummyimage.com/115x100.png/dddddd/000000',
    563,
    17,
    11,
    '7/7/2022',
    '2/18/2022'
  ), (
    37,
    'in congue etiam justo etiam pretium iaculis justo in hac habitasse platea dictumst etiam',
    'http://dummyimage.com/108x100.png/ff4444/ffffff',
    733,
    4,
    6,
    '10/1/2021',
    '7/16/2022'
  ), (
    38,
    'diam id ornare imperdiet sapien urna pretium nisl ut volutpat sapien arcu sed augue aliquam erat volutpat in congue etiam justo etiam pretium iaculis justo in hac',
    'http://dummyimage.com/233x100.png/5fa2dd/ffffff',
    341,
    1,
    12,
    '2/27/2022',
    '6/11/2022'
  ), (
    39,
    'dolor morbi vel lectus in quam fringilla rhoncus mauris enim leo rhoncus sed vestibulum sit amet cursus id turpis integer aliquet massa id lobortis',
    'http://dummyimage.com/134x100.png/5fa2dd/ffffff',
    179,
    12,
    5,
    '12/28/2021',
    '9/13/2021'
  ), (
    40,
    'augue a suscipit nulla elit ac nulla sed vel enim sit amet nunc viverra dapibus nulla suscipit ligula in',
    'http://dummyimage.com/167x100.png/ff4444/ffffff',
    73,
    6,
    9,
    '1/24/2022',
    '8/21/2021'
  ), (
    41,
    'pretium iaculis justo in hac habitasse platea dictumst etiam faucibus cursus urna ut tellus nulla ut erat id mauris vulputate elementum nullam varius nulla facilisi cras',
    'http://dummyimage.com/145x100.png/cc0000/ffffff',
    595,
    7,
    2,
    '5/6/2022',
    '10/11/2021'
  ), (
    42,
    'ridiculus mus etiam vel augue vestibulum rutrum rutrum neque aenean auctor gravida sem praesent id massa id',
    'http://dummyimage.com/227x100.png/5fa2dd/ffffff',
    579,
    17,
    8,
    '5/21/2022',
    '9/4/2021'
  ), (
    43,
    'a pede posuere nonummy integer non velit donec diam neque vestibulum',
    'http://dummyimage.com/206x100.png/5fa2dd/ffffff',
    177,
    9,
    9,
    '8/8/2022',
    '1/8/2022'
  ), (
    44,
    'ullamcorper augue a suscipit nulla elit ac nulla sed vel enim sit amet nunc',
    'http://dummyimage.com/109x100.png/dddddd/000000',
    895,
    9,
    9,
    '9/24/2021',
    '8/17/2022'
  ), (
    45,
    'blandit nam nulla integer pede justo lacinia eget tincidunt eget tempus vel pede morbi porttitor lorem id ligula suspendisse',
    'http://dummyimage.com/110x100.png/cc0000/ffffff',
    493,
    17,
    13,
    '8/14/2022',
    '2/4/2022'
  ), (
    46,
    'turpis integer aliquet massa id lobortis convallis tortor risus dapibus augue vel accumsan tellus nisi eu orci mauris lacinia sapien quis libero nullam sit amet turpis elementum',
    'http://dummyimage.com/180x100.png/dddddd/000000',
    289,
    7,
    13,
    '9/20/2021',
    '12/17/2021'
  ), (
    47,
    'vulputate elementum nullam varius nulla facilisi cras non velit nec nisi vulputate nonummy maecenas tincidunt lacus at velit vivamus vel nulla eget',
    'http://dummyimage.com/242x100.png/dddddd/000000',
    133,
    18,
    5,
    '9/14/2021',
    '3/23/2022'
  ), (
    48,
    'habitasse platea dictumst aliquam augue quam sollicitudin vitae consectetuer eget rutrum at lorem integer tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum sed',
    'http://dummyimage.com/121x100.png/cc0000/ffffff',
    400,
    6,
    19,
    '10/13/2021',
    '7/11/2022'
  ), (
    49,
    'amet cursus id turpis integer aliquet massa id lobortis convallis tortor risus dapibus augue vel accumsan tellus nisi eu orci mauris lacinia sapien quis libero nullam sit',
    'http://dummyimage.com/144x100.png/ff4444/ffffff',
    630,
    10,
    1,
    '12/2/2021',
    '5/7/2022'
  ), (
    50,
    'vestibulum eget vulputate ut ultrices vel augue vestibulum ante ipsum primis in faucibus orci luctus et ultrices',
    'http://dummyimage.com/123x100.png/5fa2dd/ffffff',
    846,
    8,
    12,
    '8/10/2022',
    '10/14/2021'
  );