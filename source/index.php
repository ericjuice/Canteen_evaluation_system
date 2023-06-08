<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>登录</title>
    <link rel="stylesheet" type="text/css" href="./global.css"/>
</head>

<body>

    <div align="center">
        <h1>欢迎来到南开大学食堂评价系统!!!</h1>
        <a href="reg.php">还没注册?点我</a>
        <table width="900" border=10" cellspacing="20" cellpadding="10">
            <tr>
                <td height="40">
                    <form method="post" action="login.php">
                        <div align="center">
                            学号：
                            <input name="stu_id" type="text" id="username" size="12" placeholder="请输入您的学号" required="required" />
                            密码：
                            <input name="pwd" type="password" id="password" size="12" placeholder="请输入您的密码" required="required" />
                            <input type="submit" value="登录" />
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