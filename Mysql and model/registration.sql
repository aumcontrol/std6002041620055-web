drop table registration;
create table registration(id int primary key auto_increment,
     branch_no varchar(4) not null,
     staff_no varchar(4),
     date_joined date not null
     );