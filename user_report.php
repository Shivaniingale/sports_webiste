<?php  
  
$conn = new mysqli('localhost', 'root', '');  
mysqli_select_db($conn, 'loginsys');  
  
$setSql = "SELECT `username`,`email`,`roll`,`prn`,`branch`,`division`,`year`,`phone` FROM `users` ";  
$setRec = mysqli_query($conn, $setSql);  
  
$columnHeader = '';  
$columnHeader = "Name of student" . "\t"."Email" . "\t" . "Roll No" . "\t" . "PRN" . "\t" . "branch" . "\t" . "division" ."\t" . "year" .  "\t" . "phone" . "\t";  

  
$setData = '';  
  
while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=User_Detail_Reoprt.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
  
echo ucwords($columnHeader) . "\n" . $setData . "\n";  
  
?> 