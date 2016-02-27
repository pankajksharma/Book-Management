CREATE TABLE book_users(
			sno smallint AUTO_INCREMENT,
			user_type int default 0,
			username VARCHAR(15),
			firstname VARCHAR(25),
			lastname VARCHAR(25),
			pwd VARCHAR(20),
			email_id VARCHAR(25),
			phone VARCHAR(15),
			college VARCHAR(30),
			adr_line1 VARCHAR(20) ,
			adr_line2 VARCHAR(20),
			adr_city VARCHAR(30),
			adr_state VARCHAR(30),
			adr_coun VARCHAR(30),
			nobs int,
			joined_on datetime default CURRENT_TIMESTAMP ,
			logged_in int default 0,
			primary key(sno)
			);
INSERT INTO book_users(sno,user_type,username,firstname,lastname,pwd,email_id) VALUES(1,1,'admin','admin','admin',123456,'admin@example.com');
