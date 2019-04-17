drop table client;
create table client(id int primary key auto_increment,
     first_name varchar(300) not null,
     last_name varchar(300) not null,
	 address text not null,
     telephone varchar(11) not null,
     pref_type varchar(5) not null,
     max_rent int not null
     );