LOAD DATA LOCAL INFILE "Customer.csv"
INTO TABLE Customer 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
