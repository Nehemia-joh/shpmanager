create database logistic;
use logistic;

create table Goods(
    Product_id int auto_increment primary key,
    Product_name varchar(50),
    Product_price int,
    Quintity int(20),
    Quintity1 int(20),
    updatedate DATE
);

create table sales(
   Product_id int,
   Total_price int,
   Quintity_bougth int,
   salesdate DATE
);

create table Goodsbougth(
    Product_name varchar(50),
    Product_price int,
    Quintity int(20),
    updatedate DATE
);