Create Table userData 
(
    rowid           INTEGER AUTO_INCREMENT PRIMARY KEY,
    created_at      TIMESTAMP,
    updated_at      TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    username        VARCHAR(20),
    password        VARCHAR(255)
    
) ENGINE=innodb;