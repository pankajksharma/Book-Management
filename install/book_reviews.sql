CREATE TABLE book_reviews(
			review_id int AUTO_INCREMENT,
			book_id int,
			username VARCHAR(15),
			email_id VARCHAR(25),
			review TEXT,
			flag int,
			primary key(review_id)
			) default charset=utf8;
