<?php
session_start();
if(!isset( $_SESSION['uname']))
{
    header("Location: index.php");
    
}
$liadname=3;
$liadscode=5;
$file = trim(file_get_contents('codes.csv'));
$file=str_replace("\r","",$file);
$codes=str_replace("\"","",$file);
$codes= explode("\n", $codes);

$file = trim(file_get_contents('Leads.csv'));
$file=str_replace("\r","",$file);
$Lead=str_replace("\"","",$file);
$Lead= explode("\n", $Lead);
 $found=FALSE;
 for ($index1 = 1; $index1 < count($codes); $index1++) {

   $found=FALSE;
    $find=explode(",", $codes[$index1]);
    if($find[0]=="")
    {
        echo "list empty";
        break;
    }
    //print_r($find);
    for ($index = 1; $index < count($Lead); $index++) {
        $line=explode(",", $Lead[$index]);
        if($line[5]==$find[1])
        {
            $found=TRUE;
            echo $line[3]." ".$line[5]."</br>";
            header('Content-Encoding: UTF-8');
            $my_file = 'winners.csv';
            if(file_exists($my_file))
            {
                $file = trim(file_get_contents($my_file));
                $file=str_replace("\r","",$file);
                $winners=str_replace("\"","",$file);
                $winners= explode("\n", $winners);
                unlink($my_file);
            }
            if(!file_exists($my_file))
            {
                $handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
                fprintf($handle, $bom =( chr(0xEF) . chr(0xBB) . chr(0xBF) ));
                 fclose($handle);

            }
            $handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);

            fputcsv($handle, explode(",", $Lead[$index]));
            foreach ($winners as $winner)
            {
                fputcsv($handle, explode(",", $winner));
            }
            //fputcsv($handle, $Lead[$index]."\n");
            fclose($handle);
            break;
        }

    }
    if($found)
    {
        unset( $codes[$index1]);
        $handle = fopen('codes.csv', 'w') or die('Cannot open file:  '.$my_file);
        fprintf($handle, $bom =( chr(0xEF) . chr(0xBB) . chr(0xBF) ));
        foreach ($codes as $code)
        {
            fputcsv($handle, explode(",", $code));
        }
        fclose($handle);
        break;
    }
}
if(!$found)
{?>
  <div class="container text-center">
    <h2><?php   echo "אין זוכים בהגרלה זו..."; ?></h2>
    <a href="fileupload.php" class="btn btn-primary">חזרה לדף ההגרלות</a>
  </div>
<?php }
else {
  header("Location: winners.php");
}

/*for ($index = 1; $index < count($codes); $index++) {
    $line=explode(",", $codes[$index]);
    echo $line[1]."</br>";
}*/
//print_r(in_array("123478", $Lead));
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
