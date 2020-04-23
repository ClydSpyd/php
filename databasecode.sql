CREATE TABLE users (
	user_id int(11) AUTO_INCREMENT PRIMARY KEY NOT null,
    user_first varchar(256) NOT null,
    user_last varchar(256) NOT null,
    user_email varchar(256) NOT null,
    user_uid varchar(256) NOT null,
    user_pwd varchar(256) NOT null
);

INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
  VALUES ('Dave', 'Clydesdale', 'daveclydesdale@gmail.com', 'clydspyd', 'Baloo2020');