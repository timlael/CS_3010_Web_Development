use test
drop table if exists tmlz5d_pb;
create table if not exists tmlz5d_pb(
id MEDIUMINT NOT NULL AUTO_INCREMENT,
fname varchar(100) NOT NULL,
lname varchar(100) NOT NULL,
area varchar(5) NOT NULL,
num1 varchar(4) NOT NULL,
num2 varchar(4) NOT NULL,
PRIMARY KEY (id)
);
insert into tmlz5d_pb (fname,lname,area,num1,num2) values("Jane", "Doe", "(314)", "716-", "0000");
insert into tmlz5d_pb (fname,lname,area,num1,num2) values("Tom", "Thumb", "(618)", "687-", "1932");
insert into tmlz5d_pb (fname,lname,area,num1,num2) values("Dick", "Preston", "(303)", "414-", "1973");
insert into tmlz5d_pb (fname,lname,area,num1,num2) values("Harry", "Rahall", "(217)", "265-", "2013");
select * from tmlz5d_pb;

