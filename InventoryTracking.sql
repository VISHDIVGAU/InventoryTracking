CREATE database InventoryTracking;
USE InventoryTracking;
drop table if exists Cities; 
drop table if exists Inventory;

create table Cities( 
	cid int primary key auto_increment,  
	name varchar(24) not null
); 
create table Inventory( 
	pid int primary key auto_increment,  
	p_name varchar(50) not null,
	quantity int not null,
    i_city int not null,
	FOREIGN KEY (i_city) REFERENCES Cities(cid) 
);  

insert into cities (name) values ("NYC");
insert into cities (name) values ("Austin");
insert into cities (name) values ("Boston");
insert into cities (name) values ("LA");
insert into cities (name) values ("Seattle");


insert into inventory(p_name, quantity, i_city) values("lenovo legions",4, 1);
insert into inventory(p_name, quantity, i_city) values("Lenovo ipad 15 sleeve",10, 1);
insert into inventory(p_name, quantity, i_city) values("lenevo ipad 15",4, 1);
insert into inventory(p_name, quantity, i_city) values("Macbook air",10, 5);
insert into inventory(p_name, quantity, i_city) values("MacPro",12, 5);
insert into inventory(p_name, quantity, i_city) values("Airpods",20, 5);


select i.pid, i.p_name, i.quantity, c.cid, c.name 
from inventory as i join cities as c 
on i.i_city= c.cid 
order by c.name, i.quantity;