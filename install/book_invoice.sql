CREATE TABLE book_invoice(
                        invoice_id int auto_increment,
			book_id int not null,
			bookname varchar(30) not null,
			sellername varchar(30) not null,
			buyername varchar(30) not null,
			sold varchar(8) not null,
			primary key(invoice_id)
			) default charset=utf8;
