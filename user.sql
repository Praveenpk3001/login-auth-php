create table
  users(
    name varchar(60),
    age int,
    gender varchar(50),
    phone double,
    email varchar(255) primary key,
    password text,
    created_at timestamp default current_timestamp
  );