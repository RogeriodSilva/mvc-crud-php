create table users(
  id integer primary key autoincrement,
  name varchar(50) not null,
  email varchar(50) unique not null,
  password varchar(60) not null
);