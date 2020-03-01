<?php
session_start();
$err="";
if(!isset( $_SESSION['uname']))
{
    header("Location: index.php");
    
}
    
if(isset($_POST['submit']))
{
    $uploadOk = TRUE;
    $target_file = basename($_FILES["fileToUpload"]["name"]);
    if (file_exists("Leads.csv")) {
        unlink("Leads.csv");
    }
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if($imageFileType != "csv")
    {
      $err = 'נא להעלות קובץ csv  בלבד';
        //echo 'not csv file';
        $uploadOk = FALSE;
    }
    if (!$uploadOk) {
    $err = 'מצטערים, הקובץ לא עלה';
    //echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else
    {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $err = "הקובץ ". basename( $_FILES["fileToUpload"]["name"]). " הועלה בהצלחה";
            //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            rename($_FILES["fileToUpload"]["name"], "Leads.csv");
        } else {
            $err = 'מצטערים, ישנה בעייה בהעלאת הקובץ...';
            //echo "Sorry, there was an error uploading your file.";
        }
    }


}

?>
<!DOCTYPE html>
<html dir="rtl" lang="he-IL">
<head>
  <meta charset="utf-8">
<title>העלאת קובץ הגרלות</title>
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
      <div class="container show-winners text-center">
        <a href="winners.php">להצגת הזוכים העדכנית לחץ כאן</a></br>
      </div>
      <div class="container text-center file-upload-wrap">
        <h1 class="text-center">ביצוע ההגרלה</h1>
        <form action="fileupload.php" method="post" enctype="multipart/form-data">
            בחר/י קובץ להעלאה
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="טען קובץ לידים" name="submit">
            <p class="err">
              <?php
               if (!empty($err)){
                 echo $err;
               }


               ?>
            </p>
        </form></br>

        <a href="hagrala.php">לחץ כאן להגרלה</a></br>
      </div>
    </body>
</html>
