CREATE TABLE blogData
(
    postid               int AUTO_INCREMENT PRIMARY KEY,
    created_at           TIMESTAMP,
    updated_at           TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    content              TEXT


) ENGINE=innodb;