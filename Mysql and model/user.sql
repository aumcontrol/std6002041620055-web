drop table user;
create table user (
  id int(11) NOT NULL AUTO_INCREMENT,
  username varchar(45) NOT NULL,
  email varchar(200) NOT NULL,
  password varchar(128) NOT NULL,
  created_at datetime DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  is_active enum('Active','Inactive') DEFAULT 'Active',
  PRIMARY KEY (id),
  UNIQUE KEY email_UNIQUE (email),
  UNIQUE KEY username_UNIQUE (username)
);