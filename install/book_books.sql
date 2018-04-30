CREATE TABLE book_books(
			book_id int not null auto_increment,
			sell_date datetime default CURRENT_TIMESTAMP,
			username varchar(30) not null,
			bookname varchar(30) not null,
			authorsname varchar(30),
			edition int default 0,
			cond varchar(30),            /* Condition */
			price int not null,         /* Expected Price */
			type_id int not null,       /* Field */
			subject varchar(30),
			rec_year varchar(30),        /* Recommended Year */
			ind_pic varchar(50),         /* Picture */
			primary key(book_id)
			) default charset=utf8;
