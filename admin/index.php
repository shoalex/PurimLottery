<?php
session_start();
session_destroy();
if(isset($_POST['submit']))
{
    if($_POST['uname']=="admin" && $_POST['psw']=="q12w23e3")
    {
        session_start();
        $_SESSION['uname']=$_POST['uname'];
        header("Location: fileupload.php");
    }
}



?>
<!DOCTYPE html>
<html dir="rtl" lang="he-IL">
    <head>
      <meta charset="utf-8">
<title>חיבור לביצוע הגרלות</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="copyright" content="&copy; 2020 Bianconeri-Digital" />
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="//code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <div class="container" style="direction: rtl; text-align:center">
        <form action="index.php" method="post">

          <div class="form-group text-right">
            <label for="username">שם משתמש</label>
            <input type="text" class="form-control" id="username"  aria-describedby="username" name="uname" required placeholder="הקש שם משתמש">
          </div>
          <div class="form-group text-right">
            <label for="password">סיסמא</label>
            <input type="password" class="form-control" id="password"  aria-describedby="password" name="psw" required placeholder="הקש שם משתמש">
          </div>

    <button type="submit" class="btn btn-primary" name="submit">התחבר</button>
    </form>
  </div>



    </body>
</html>
