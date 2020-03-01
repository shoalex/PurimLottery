<?php
session_start();
if(!isset( $_SESSION['uname']))
{
    header("Location: index.php");
    
}
?>
<!DOCTYPE html>
<html dir="rtl" lang="he-IL">
<head>
  <meta charset="utf-8">
<title>תצוגת קובץ זוכים</title>
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
        <?php
       if (file_exists('winners.csv')) {?>

          <div class="text-center">
            <h1>הזוכים בהגרלה הם:</h1>
          </div>
          <?php
          $file = trim(file_get_contents('winners.csv'));
          $file=str_replace("\r","",$file);
          $winners=str_replace("\"","",$file);
          $winners= explode("\n", $winners);
          ?>
          <div class="container return-to-hag">
          <table class="table table-striped text-center">
            <thead>
              <tr>
                <th scope="col">שם מלא</th>
                <th scope="col">מספר טלפון</th>
                <th scope="col">קוד הגרלה</th>
              </tr>
           </thead>
            <tbody>
              <?php
              foreach ($winners as $winner)
               {
                $line= explode(",", $winner);
                ?>
                <tr>
                  <td><?php echo $line[3] ?></td>
                  <td><?php echo $line[4] ?></td>
                  <td><?php echo $line[5] ?></td>
                </tr>
                  <?php
                }

               }
       else
       {
         $noWinner = 'אין זוכים בהגרלה בינתיים...'; ?>
          <div class="container text-center no-winners">
            <h2><?php echo $noWinner; ?></h2>
          </div>

    <?php   } ?>
  </div>
        <div class="container text-center">
          <a href="fileupload.php" class="btn btn-primary">חזרה לדף ההגרלות</a>
        </div>
        <script src="../js/jquery-2.1.4.min.js"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/easyjetform.js"></script>
        <script src="../js/app.js" type="text/javascript"></script>
    </body>
</html>
