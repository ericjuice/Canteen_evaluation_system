<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>登录</title>
    <link rel="stylesheet" type="text/css" href="./global.css" />
    <!-- 新 Bootstrap5 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css">

    <!--  popper.min.js 用于弹窗、提示、下拉菜单 -->
    <script src="https://cdn.staticfile.org/popper.js/2.9.3/umd/popper.min.js"></script>

    <!-- 最新的 Bootstrap5 核心 JavaScript 文件 -->
    <script src="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row flex justify-content-center align-items-center">
            <div class="col-md-6">
                <h1 class="text-center">欢迎来到NKU食堂评价系统!!!</h1>
                <!-- <a href="reg.php" class="d-block text-center my-3">还没注册?点我</a> -->
                <table class="table table-bordered table-striped">
                    <tr>
                        <td>
                            <form method="post" action="login.php">
                                <div class="form-group">
                                    <label for="username">学号：</label>
                                    <input name="stu_id" type="text" id="username" class="form-control" placeholder="请输入您的学号" required="required" />
                                </div>
                                <div class="form-group">
                                    <label for="password">密码：</label>
                                    <input name="pwd" type="password" id="password" class="form-control" placeholder="请输入您的密码" required="required" />
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary">登录</button>
                                    &nbsp;&nbsp;
                                    <button href="reg.php" class="btn btn-primary">注册</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                </table>
                <hr />
            </div>
        </div>
    </div>
</body>

<!-- <body>

    <div align="center">
        <h1>欢迎来到南开大学食堂评价系统!!!</h1>
        <a href="reg.php">还没注册?点我</a>
        <table width="900" border="10" cellspacing="20" cellpadding="10">
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
</body> -->

</html>