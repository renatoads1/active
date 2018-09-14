create table books(
  id int not null primary key auto_increment,
  name varchar(50),
  author varchar(50)
);
insert into books(name,author) values('c#','renato');
insert into books(name,author) values('java','kele');
insert into books(name,author) values('mysql','joice');
insert into books(name,author) values('html5','isabela');