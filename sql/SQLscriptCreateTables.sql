CREATE TABLE Customer (
    cID int primary key,
    numPeople int,
    status varchar(38),
    name varchar(38),
    email varchar(40),
    phone varchar(15)
);
/*
LOAD DATA
INFILE Customer.csv
INSERT
INTO TABLE Customer
FIELDS TERMINATED BY ","
(cID, numPeople, status, name, email, phone)
*/
CREATE TABLE Owner(
    oID int primary key,
    name varchar(38),
    email varchar(40),
    phone varchar(15)
);
/*
LOAD DATA
INFILE Owner.csv
INSERT
INTO TABLE Owner
FIELDS TERMINATED BY ","
(oId, name, email, phone)
*/
CREATE TABLE Place(
    pID varchar(12) primary key,
    rating int,
    status varchar(40),
    sqr decimal,
    location varchar(200),
    accomodation varchar(50)
);
/*
LOAD DATA
INFILE Place.csv
INSERT
INTO TABLE Place
FIELDS TERMINATED BY ","
(pID, rating, status, sql, location, accomodation)

*/
/*-----------Relationships----------*/
CREATE TABLE consults(
    cID int,
    foreign key (cID) references Customer (cID),
    oID int,
    foreign key (oID) references Owner (oID)
);
/*
LOAD DATA
INFILE consults.csv
INSERT
INTO TABLE consults
FIELDS TERMINATED BY ","
(cID, oID)
*/

CREATE TABLE registers(
    cID int,
    foreign key (cID) references Customer (cID),
    oID int,
    foreign key (oID) references Owner (oID),
    pID varchar(12),
    foreign key (pID) references Place (pID),
    day date
);
/*
LOAD DATA
INFILE registers.csv
INSERT
INTO TABLE registers
FIELDS TERMINATED BY ","
(cID, oID, pID, day)
*/

CREATE TABLE chooses(
    cID int,
    foreign key (cID) references Customer (cID),
    pID varchar(12),
    foreign key (pID) references Place (pID),
    decision varchar(15)
);
/*
LOAD DATA
INFILE chooses.csv
INSERT
INTO TABLE chooses
FIELDS TERMINATED BY ","
(cID, pID, decision)
*/