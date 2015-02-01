CREATE TABLE book_types(
			type_id smallint AUTO_INCREMENT,
			book_type VARCHAR(30),
			primary key(type_id)
			);
INSERT INTO book_types(type_id,book_type) VALUES(1,'default');
