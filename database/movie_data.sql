create database movie_data;

use movie_data;

-- create table movie upcoming =====================
create table
  movie_news (
    M_ID int (11) NOT NULL AUTO_INCREMENT,
    M_name varchar(100) NOT NULL,
    cast varchar(100) NOT NULL,
    rdate date NOT NULL,
    description varchar(200) NOT NULL,
    poster varchar(200) NOT NULL,
    PRIMARY key (M_ID)
  );

  INSERT INTO `movie_news` ( `M_name`, `cast`, `rdate`, `description`, `poster`) VALUES
( 'Bhool Bhulaiya 3', 'Kartik Aaryan, Tripti Dimri, Vidya Balan, Rajpal yadav', '2024-11-01', 'The film is a spiritual sequel to the 2022 film Bhool Bhulaiyaa 2. Kartik Aaryan will reprise his role as Rooh Baba from the previous film. ', 'bhool nhulaiya 3.jfif'),
( 'Welcome 3', 'Akshay Kumar, Presh Rawal, Suniel Shetty,raveena Tandon', '2024-12-20', 'The eagerly awaited ‘Welcome 3,’ starring Akshay Kumar, has been making waves in the entertainment industry,  also for some behind-the-scenes drama.', 'welcome3.jpeg'),
( 'Pushpa 2', 'Allu Arjun, Fhadh Faasil, Rashmika Mandanna,Prakash Raj', '2024-12-06', 'directed by Sukumar and the sequel to 2021 Pushpa: The Rise. The film tells the story of a daily labourer rise in the underworld of redwood smuggling', 'Pushpa_2-_The_Rule.jpg');


create table
  movie_show (
    M_ID int (11) NOT NULL AUTO_INCREMENT,
    M_name varchar(100) NOT NULL,
    cast varchar(100) NOT NULL,
    rdate date NOT NULL,
    description varchar(200) NOT NULL,
    poster varchar(200) NOT NULL,
    url varchar(200) not null,
    screen varchar(50),
    rupees varchar(10),
    PRIMARY key (M_ID)
  );

INSERT into
  movie_show (
    M_name,
    cast,
    rdate,
    description,
    poster,
    url,
    screen,
    rupees
  )
VALUES
  (
    'Stree 2',
    'Rajkumar Rao, Shraddha kapoor,pankaj Tripathi',
    '2024-05-15',
    'This time, women are mysteriously abducted by a terrifying headless entity. Once again, it up to Vicky and his friends to save their town and loved ones.',
    'stree-2.jpg',
    'https://youtu.be/VlvOgk5BHS4?si=LhmDUgjB6H0Y9H4Q',
    'screen1',
    '200'
  ),
  (
    'Vedaa',
    'John Abraham, Tamanna Bhatia, Sharvari Wagh, Abishek Banerjee',
    '2024-05-15',
    ' A Veda is a collection of poems or hymns composed in archaic Sanskrit by Indo-European-speaking peoples who lived in northwest India during the 2nd millennium BCE',
    'vedaa.jfif',
    'https://youtu.be/NMcQF6fSziA?si=JEpDA6ZXpedur3UB',
    'screen2',
    '150'
  ),
  (
    'Double iSmart',
    'Ram Pothineni,Sanjay Dutt, Gurbani,Kavya Thapan ',
    '2024-05-15',
    '"Double iSmart" is a sequel to Pothineni and Jagannadhs 2019 sci-fi action film "iSmart Shankar", about an assassin who helps the police when a slain  memories are transferred to his brain.',
    'doublei.jfif',
    'https://youtu.be/ex-3PVeYIWI?si=KfFMy6VYsqwNOlfd',
    'screen3',
    '180'
  );

create table
  movie_registration (
    R_ID int (10) AUTO_INCREMENT,
    R_NAME varchar(20),
    R_AGE INT (2),
    R_GENDER varchar(20),
    R_PHONE_NO varchar(200),
    R_EMAIL varchar(200),
    PRIMARY key (R_ID)
  );

create table
  movie_login (
    L_ID int (10) AUTO_INCREMENT,
    L_EMAIL LONGTEXT NOT NULl,
    L_PASSWORD varchar(200),
    PRIMARY key (L_ID)
  );

create table
  timing (
    T_id int AUTO_INCREMENT,
    T_time varchar(50),
    primary key (T_id)
  );

insert into
  timing (T_time)
values
  ("11:00 AM Frist Show"),
  ("3:00 PM Second Show"),
  ("6:30 AM Last Show");

create table
  booking (
    book_ID int (10) AUTO_INCREMENT,
    ticket_ID varchar(50) not null,
    USER_ID int (10),
    theatre varchar(30),
    movie_name varchar(20),
    show_time varchar(20),
    screen varchar(20),
    seats varchar(10),
    book_date varchar(30),
    amount varchar(20),
    primary key (book_ID)
  );

create table
  booking_cancel (
    book_ID int (10) AUTO_INCREMENT,
    USER_ID int (10),
    movie_name varchar(20),
    show_time varchar(20),
    screen varchar(20),
    seats varchar(10),
    book_date varchar(30),
    cancel_time varchar(20),
    amount varchar(20),
    primary key (book_ID)
  );