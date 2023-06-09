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
        <style>
        body {
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container {
            margin-top: 100px;
            width: 500px;
            background-color: rgba(255, 255, 255, 0.7);
            padding: 20px;
            border-radius: 5px;
        }

        .captcha-image {
            width: 30%;
            height: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="text-center">欢迎来到NKU食堂评价系统</h2>
        <form method="post" action="login.php">
            <div class="mb-3">
                <label for="account" class="form-label">账号:</label>
                <input type="text" class="form-control" id="username" name="stu_id" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">密码:</label>
                <input type="password" class="form-control" id="password" name="pwd" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">登录</button>
            </div>
        </form>
        <p class="text-center mt-3" style="color: gray">如果没有账号, 请注册<br>或者使用默认账号<font color="pink">( 1 : 123456)</font></p>
        <div class="text-center">
            <a href="reg.php" class="btn btn-success">注册账号</a>
        </div>
    </div>
</body>


</html>