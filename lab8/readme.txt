C:\xampp\mysql\bin>mysql -u root -p
MariaDB [(none)]> CREATE gces;
MariaDB [(none)]> CREATE database gces;
Query OK, 1 row affected (0.046 sec)

MariaDB [(none)]> USE gces;
Database changed
MariaDB [gces]> show databases;

MariaDB [gces]> CREATE TABLE student(
    -> id int UNIQUE AUTO_INCREMENT,
    -> name varchar(100),
    -> address varchar(100),
    -> phone_number int UNIQUE,
    -> bio text
    -> );
Query OK, 0 rows affected (0.463 sec)

MariaDB [gces]> INSERT INTO student (`name`,`address`,`phone_number`,`bio`) VALUES ("bandana","ranipauwa","9808475044","hello");
Query OK, 1 row affected, 1 warning (0.083 sec)

MariaDB [gces]> INSERT INTO student (`name`,`address`,`phone_number`,`bio`) VALUES ("sagun","mahendrapool",982222222,"hello"),("avishek","hemja",846543654,"opkanxa"),("pramod","pokhara",6546854,"guru"),("suvham","lekhnath",48645321,"loaded");
Query OK, 4 rows affected, 1 warning (0.135 sec)
Records: 4  Duplicates: 0  Warnings: 1

MariaDB [gces]> INSERT INTO student (`name`,`address`,`phone_number`,`bio`) VALUES ("pramod","nadipur",88888888,"hello");
Query OK, 1 row affected (0.042 sec)

MariaDB [gces]> ALTER TABLE student
    -> RENAME TO students;
Query OK, 0 rows affected (0.392 sec)

MariaDB [gces]> ALTER TABLE students
    -> ADD (user_id int);
Query OK, 0 rows affected (0.134 sec)
Records: 0  Duplicates: 0  Warnings: 0


MariaDB [gces]> UPDATE students
    -> SET user_id = 45
    -> WHERE id = 10;
Query OK, 1 row affected (0.073 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [gces]> SELECT * FROM students WHERE name = "avishek";
+----+---------+---------+--------------+---------+---------+
| id | name    | address | phone_number | bio     | user_id |
+----+---------+---------+--------------+---------+---------+
| 11 | abhishek | hemja   |    877777777 | hello   |      46 |
+----+---------+---------+--------------+---------+---------+
1 row in set (0.000 sec)


MariaDB [gces]> SELECT * FROM students WHERE name LIKE "a%";
+----+---------+---------+--------------+---------+---------+
| id | name    | address | phone_number | bio     | user_id |
+----+---------+---------+--------------+---------+---------+
| 11 | abhishek | hemja   |    87777777 | hello |      46 |
+----+---------+---------+--------------+---------+---------+


MariaDB [gces]> UPDATE students
    -> SET address = "nadipur"
    -> WHERE id = 12
    -> ;



MariaDB [gces]> DELETE FROM students WHERE id = 10;