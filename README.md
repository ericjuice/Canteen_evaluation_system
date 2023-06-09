# Database_homework_2022



database homework: a dining hall comment system based on MySQL5.6 and PHP8.0

数据库课程设计：简易食堂评价系统，支持用户注册、登录、评价、查看、注销等功能，基于MySQL5.6和php8.0

running:
- 1.excute the `database_restaurant_数据库创建源码.sql` in MySQL first and excute the `db_插入数据.txt` in MySQL manager(such as Navicat ) or excute its content in MySQL 
- 2.excute the content of `储存过程和触发器.txt` secondly in the command line
- 3.done
- 
tips:the pwd.php file is deleted for security, u should add a file named "pwd.php" and write ` <?php define('DB_PASSWORD', 'your_password_here'); ?>"` in it 


运行:
- 1.在mysql里执行`数据库创建源码.sql`文件，然后使用Navicat执行`插入数据.txt`,(也可以在mysql执行里面的插入语句)
- 2.在命令行执行`触发器.txt`里的命令
- 3.在`source/`创建db_info.php这个文件
写入如下(自己更改密码等代码)
```php
<?php 
define('DB_PASSWORD', '123456'); 
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_NAME', 'root');
?>
```
- 4.完成

