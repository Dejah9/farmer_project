/*DROP DATABASE farmerdb;
CREATE DATABASE farmerdb;
USE farmerdb;
/*DROP TABLE IF EXISTS SELLER;
DROP TABLE IF EXISTS FARMER;
DROP TABLE IF EXISTS PRODUCE;
*//*
CREATE TABLE FARMER(
	fid int NOT NULL AUTO_INCREMENT, 
	fname varchar(255)NOT NULL, 
	lname varchar(255)NOT NULL, 
	location varchar(255)NOT NULL, 
	phone varchar(10), 
	PRIMARY KEY(fid) );

CREATE TABLE CONSUMERS(
	c_id int NOT NULL AUTO_INCREMENT,
	name varchar(255) NOT NULL,
	location varchar(255)NOT NULL,
	phone varchar(10),
	PRIMARY KEY(c_id) );

CREATE TABLE PRODUCE(
	produceid int NOT NULL AUTO_INCREMENT, 
	food varchar(255)NOT NULL, 
	PRIMARY KEY(produceid));

CREATE TABLE SELLER( 
	sfid int NOT NULL,
	sproduceid int NOT NULL,
	amount int NOT NULL,
	deliverydate date not null,
	CONSTRAINT FK_FARMER FOREIGN KEY (sfid) REFERENCES FARMER(fid),
	CONSTRAINT FK_PRODUCE FOREIGN KEY (sproduceid) REFERENCES PRODUCE(produceid),
	CONSTRAINT PK_SELLER PRIMARY KEY(sfid,sproduceid));

CREATE TABLE LAND_SIZE(
	l_id INT NOT NULL AUTO_INCREMENT,
	lsize int NOT NULL,
	CONSTRAINT FK_FARMER_landsize FOREIGN KEY (l_id) REFERENCES FARMER(fid),
	PRIMARY KEY (l_id));

create table User(
	user_id int,
	password varchar(40),
	username varchar(12),
	primary key (user_id)
);

create table MONTH(
	month_id int not null,
	month_name varchar (10) not null,
	primary key(month_id)
);

Select produce.label, produce.amount, produce.deliverydate from produce;


insert into FARMER (fname, lname, location, phone)
	values ('Peta','Peters','down a road','8037484302');
insert into PRODUCE (label)
	values ('Grace Kennedy');
	
insert into User (user_id, password, username) values ('101',md5('password'),'dejah');
insert into User (user_id, password, username) values ('102',md5('password'),'riddim');
insert into User (user_id, password, username) values ('100',md5('password'),'karlton');


*/

/*
select SELLER.sproduceid,FARMER.fname, FARMER.lname, max(SELLER.amount) 
	from SELLER inner join FARMER on SELLER.sfid = FARMER.fid;
*/

/*
INSERT INTO SELLER (sfid,sproduceid,amount, deliverydate) VALUES (4,1,600,'2018-07-18');                                                                        
INSERT INTO SELLER (sfid,sproduceid,amount, deliverydate) VALUES (1,3,500,'2018-07-18');
INSERT INTO SELLER (sfid,sproduceid,amount, deliverydate) VALUES (2,3,200,'2018-07-19');
INSERT INTO SELLER (sfid,sproduceid,amount, deliverydate) VALUES (2,2,200,'2018-07-18');
INSERT INTO SELLER (sfid,sproduceid,amount, deliverydate) VALUES (2,4,700,'2018-05-18');
INSERT INTO SELLER (sfid,sproduceid,amount, deliverydate) VALUES (2,2,200,'2018-05-18');


select SELLER.sproduceid,FARMER.fname, FARMER.lname, max(SELLER.amount) 
	from SELLER inner join FARMER on SELLER.sfid = FARMER.fid
	where SELLER.deliverydate between '2018-04-18' and '2018-06-18';




select SELLER.sproduceid,FARMER.fname, FARMER.lname, SELLER.amount 
	from SELLER inner join FARMER on SELLER.sfid = FARMER.fid
	where SELLER.deliverydate between '2018-04-18' and '2018-06-18';


select PRODUCE.label,FARMER.fname, FARMER.lname, SELLER.amount 
	from SELLER 
	join FARMER on SELLER.sfid = FARMER.fid
	join PRODUCE on SELLER.sproduceid = PRODUCE.produceid
	where SELLER.deliverydate between '2018-04-18' and '2018-06-18';

*/

/*INSERT INTO MONTH (month_id, month_name) VALUES 
(1, 'Jan'),
(2, 'Feb'),
(3, 'Mar'),
(4, 'Apr'),
(5, 'May'),
(6, 'Jun'),
(7, 'Jul'),
(8, 'Aug'),
(9, 'Sept'),
(10, 'Oct'),
(11, 'Nov'),
(12, 'Dec');*/

/*
select PRODUCE.food, SELLER.amount, MONTH.month_name from SELLER
join FARMER on SELLER.sfid = FARMER.fid
join PRODUCE on SELLER.sproduceid= PRODUCE.produceid
join MONTH on MONTH(deliverydate) = MONTH.month_id
where SELLER.sfid = 2;

insert into LAND_SIZE (l_id, lsize) values ('1','200');
insert into LAND_SIZE (lsize) values ('300');
insert into LAND_SIZE (lsize) values ('400');
insert into LAND_SIZE (lsize) values ('900');


CREATE TABLE CONSUMERS_DELIVERY( 
	con_id int NOT NULL,
	Cproduceid int NOT NULL,
	amount int NOT NULL,
	deliverydate date not null,
	CONSTRAINT FK_CONSUMERS FOREIGN KEY (con_id) REFERENCES CONSUMERS(c_id),
	CONSTRAINT FK_PRODUCE2 FOREIGN KEY (Cproduceid) REFERENCES PRODUCE(produceid),
	CONSTRAINT PK_CONSUMERS_D PRIMARY KEY(con_id,Cproduceid,deliverydate));
	
	
	
	SELECT SELLER.sfid, FARMER.fname, FARMER.lname, SELLER.sproduceid, SELLER.amount, SELLER.deliverydate FROM SELLER join FARMER on SELLER.SFID =  FARMER.fid;
	
	
	

select MONTH.month_name as month, count(SELLER.amount) as total  from SELLER join MONTH on MONTH(deliverydate) = MONTH.month_id where SELLER.sproduceid = 1;


select sum(SELLER.amount) as total  from SELLER where SELLER.sproduceid = 3 and month(deliverydate) = 7; /*this works*/



/*
select sum(SELLER.amount) as total  from SELLER where SELLER.sproduceid = 3 and month(deliverydate) = 7;


  SELECT YEAR(deliverydate) as SalesYear,
         MONTH(deliverydate) as SalesMonth,
         SUM(amount) AS TotalSales
    FROM SELLER where SELLER.sproduceid = 3
GROUP BY YEAR(deliverydate), MONTH(deliverydate)
ORDER BY YEAR(deliverydate), MONTH(deliverydate);/*this works*/

/*

  SELECT YEAR(deliverydate) as SalesYear,
         MONTH(deliverydate) as SalesMonth,
         SELLER.sproduceid as ProduceID
         SUM(amount) AS TotalSales
    FROM SELLER where SELLER.sproduceid < 3 
GROUP BY  SELLER.sproduceid, YEAR(deliverydate), MONTH(deliverydate)
ORDER BY  YEAR(deliverydate), MONTH(deliverydate);

SELECT YEAR(deliverydate) as SalesYear,
         MONTH(deliverydate) as SalesMonth,
         SUM(amount) AS TotalSales
    FROM SELLER where SELLER.sproduceid > 0
GROUP BY YEAR(deliverydate), MONTH(deliverydate)
ORDER BY YEAR(deliverydate), MONTH(deliverydate);

SELECT YEAR(deliverydate) as SalesYear,
         MONTH(deliverydate) as SalesMonth,
         SELLER.sproduceid as ProduceID,
         SUM(amount) AS TotalSales
    FROM SELLER where SELLER.sproduceid > 0
GROUP BY YEAR(deliverydate), MONTH(deliverydate)
ORDER BY YEAR(deliverydate)DESC, MONTH(deliverydate) ; /*this works*/ /*FINAL TO EDIT MORE*/


	