 <!DOCTYPE html>

<html dir="rtl" lang="he-IL">
    <head>
        <meta charset="utf-8">
<title>Purim Party PlayStation</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="copyright" content="&copy; 2020 Bianconeri-Digital" />
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="//code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />




</head>
<body>

	<div id="MainDiv">
    <form class="leadForm col-12" id="jetform" name="userForm" style="direction:rtl" novalidate="true">
  <div class="form-group">
      <label for="jf_txt_1" class="form_label sr-only" >
      שם מלא:
      </label>
      <input type="text" class="form-control" name="jf_txt_1" id="jf_txt_1" class="form_field" required="" placeholder="שם מלא" >
  </div>
    <div class="form-group">
      <label for="jf_txt_2"  class="form_label sr-only">
      טלפון:
      </label>
      <input type="tel" class="form-control text-right" name="jf_txt_2" id="jf_txt_2" class="form_field" required="" placeholder="טלפון" maxlength="10" >
    </div>
    <div class="form-group">
      <label for="jf_txt_4" class="form_label sr-only">
        קוד הגרלה
      </label>
      <input type="text" class="form-control" name="jf_txt_4" id="jf_txt_4" class="form_field" required="" style="text-align:right!important" placeholder="קוד הגרלה" >

    </div>
    <div id="jf-err">
    </div>
    <button type="submit" class="btn btn-primary btn_send">שליחה</button>
  </form>

  <div class="" id="thankYouBlock">
    <p>
      ההרשמה להגרלה בוצעה בהצלחה!
    </p>
  </div>
  <div class="go-to-lottery">
    <a href="admin/fileupload.php">לביצוע הגרלה הקש כאן</a>
  </div>
	</div>


<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/easyjetform.js"></script>
<script src="js/app.js" type="text/javascript"></script>



</body>
</html>
