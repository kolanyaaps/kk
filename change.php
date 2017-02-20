
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<title>ประมวลผล โปรแกรมคำนวณอัตราแลกเปลี่ยนเงินตราต่างประเทศ</title>
</head>

<body>
<div align="center">

    <div class="wrapp_2">
   <h2>โปรแกรมคำนวณอัตราแลกเปลี่ยนเงินตราต่างประเทศ</h2>

<?php
  $money=$_POST['money'];   
  $coin=$_POST['coin'];

  echo $money;
 
 
  switch ($coin) {
  case 1:
    $coin_m=3.8;
    $sum=$money*$coin_m;
    echo "1 บาทไทย (THB) = ".$coin_m." Japan (JP)"."<br><br>";
    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)." Japan (JP)";
    break;

  case 2:
    $coin_m=33;
    $sum=$money*$coin_m;
    echo "1 บาทไทย (THB) = ".$coin_m." Korea (KR)"."<br><br>";
    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)." Korea (KR)";
    break;
  case 3:
    $coin_m=0.2;
    $sum=$money*$coin_m;
    echo "1 บาทไทย (THB) = ".$coin_m." China (CN)"."<br><br>";
    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)." China (CN)";
    break;
  }
     ?>
     </div><!-- wrapp_2 -->
   
 

</div>
</body>
</html>
