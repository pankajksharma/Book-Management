CREATE TABLE book_books(
			book_id int not null auto_increment,
			sell_date datetime default CURRENT_TIMESTAMP,
			username varchar(30) not null,
			bookname varchar(30) not null,
			authorsname varchar(30),
			edition int default 0,
			cond varchar(30),
			price int not null,
			type_id int not null,
			subject varchar(30),
			rec_year varchar(30),
			ind_pic varchar(50),
			primary key(book_id)
			) default charset=utf8;
