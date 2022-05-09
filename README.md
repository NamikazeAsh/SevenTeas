# SevenTeasEBookStore
A website created as a college project which utilizes co



Will not work with GitHub pages , you'll have to download the whole thing

Steps from user's side to experience the whole website properly once downloaded
> Ensure MySQL is present on the system
> Create database under name "ebooks"
> Create tables ebooks with given specifications
+------------------+--------------+------+-----+---------+----------------+
| Field            | Type         | Null | Key | Default | Extra          |
+------------------+--------------+------+-----+---------+----------------+
| bookid           | int          | NO   | PRI | NULL    | auto_increment |
| title            | varchar(100) | NO   | UNI | NULL    |                |
| author           | varchar(100) | NO   |     | NULL    |                |
| genre            | varchar(100) | NO   |     | NULL    |                |
| rating           | float        | NO   |     | NULL    |                |
| isbn             | int          | NO   | UNI | NULL    |                |
| language         | varchar(20)  | NO   |     | NULL    |                |
| publication_year | int          | NO   |     | NULL    |                |
| prices           | int          | NO   |     | NULL    |                |
+------------------+--------------+------+-----+---------+----------------+

> Create table curuser with given specifications
+----------+--------------+------+-----+---------+-------+
| Field    | Type         | Null | Key | Default | Extra |
+----------+--------------+------+-----+---------+-------+
| username | varchar(100) | NO   | PRI | NULL    |       |
| password | varchar(100) | YES  |     | NULL    |       |
+----------+--------------+------+-----+---------+-------+

> Create table message with the given specifications
+---------+--------------+------+-----+---------+-------+
| Field   | Type         | Null | Key | Default | Extra |
+---------+--------------+------+-----+---------+-------+
| message | varchar(100) | YES  |     | NULL    |       |
+---------+--------------+------+-----+---------+-------+

> Create table request with the given specifications
+---------+--------------+------+-----+---------+----------------+
| Field   | Type         | Null | Key | Default | Extra          |
+---------+--------------+------+-----+---------+----------------+
| reqno   | int          | NO   | PRI | NULL    | auto_increment |
| reqbook | varchar(100) | YES  |     | NULL    |                |
+---------+--------------+------+-----+---------+----------------+

> Create table sign_up with the given specifications
+----------------+--------------+------+-----+---------+-------+
| Field          | Type         | Null | Key | Default | Extra |
+----------------+--------------+------+-----+---------+-------+
| username       | varchar(100) | NO   | PRI | NULL    |       |
| email_id       | varchar(100) | YES  | UNI | NULL    |       |
| passwordsignup | varchar(100) | YES  |     | NULL    |       |
| seckey         | int          | YES  |     | NULL    |       |
| booksread      | int          | NO   |     | 0       |       |
| membership     | varchar(50)  | YES  |     | NULL    |       |
+----------------+--------------+------+-----+---------+-------+

> Create table transactions with the given specifications
+---------+--------------+------+-----+---------+-------+
| Field   | Type         | Null | Key | Default | Extra |
+---------+--------------+------+-----+---------+-------+
| transid | int          | YES  |     | NULL    |       |
| user    | varchar(100) | YES  |     | NULL    |       |
| time    | datetime     | YES  |     | NULL    |       |
+---------+--------------+------+-----+---------+-------+

>
