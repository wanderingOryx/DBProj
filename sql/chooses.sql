LOAD DATA LOCAL INFILE "chooses.csv"
INTO TABLE chooses 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
