# Database_homework_2022

Database homework: a dining hall comment system

Env: MySQL5.6 and PHP8.0

demo photo:
![img](./static/show.png)

[demo site](https://homework.juis.top/dbhomework)

running:
- 1.excute the `database_restaurant_数据库创建源码.sql` in MySQL first and excute the `db_插入数据.txt` in MySQL manager(such as Navicat ) or excute its content in MySQL 
- 2.excute the content of `储存过程和触发器.txt` secondly in the command line
- 3.create `db_info.php` in `source/`
write the following
```php
<?php 
define('DB_PASSWORD', '123456'); 
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_NAME', 'root');
?>
```
- 4.ok

