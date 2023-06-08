<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>注册</title>
    <link rel="stylesheet" type="text/css" href="./global.css" charset='utf-8'/>
</head>

<body>
    <div align="center">
        <h1>注册</h1>
        <table width="900" border=10" cellspacing="20" cellpadding="10">
            <tr>
                <td height="40">
                    <form method="post" action="regok.php">
                        <div align="center">
                            姓名:
                            <input name="stu_name" type="text" id="username" size="12" placeholder="请输入您的姓名" required="required" />
                            学号：
                            <input name="stu_id" type="text" id="user_id" size="12" placeholder="请输入您的学号" required="required" />
                            密码：
                            <input name="pwd" type="text" id="password" size="12" placeholder="请输入您的密码" required="required" />
                            <input type="submit" value="注册" />
                            <input type="button" onclick="window.location.href='index.php'" value="返回登录" />
                        </div>
                    </form>
                </td>
            </tr>
        </table>
        <tr>
            <td>
                <hr />
            </td>
        </tr>
    </div>
</body>

</html>