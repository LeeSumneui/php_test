create table notice_board(
num int not null auto_increment,
id varchar(10) not null,
name varchar(10) not null,
subject varchar(100) not null,
content text,
registe_day int,
ip int,
primary key(num));