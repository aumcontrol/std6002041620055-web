drop table staff;
create table staff(id int primary key auto_increment,
     first_name varchar(300) not null,
     last_name varchar(300) not null,
	 address text not null,
     position varchar(11) not null,
     sex varchar(1) not null,
     dob date not null,
     salary int not null,
     telephone varchar(11) not null,
	 email text not null,
     branch_no varchar(4) not null
     );