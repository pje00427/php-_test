<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>
<?php

$arr = array(
  "1팀" => array("팀장"=>"홍길동", "부팀장"=>"나대로", "팀원"=>"동수"),
  "2팀" => array("팀장"=>"개똥이", "부팀장"=>"C.m.A", "팀원"=>"멋쟁이"),
  "3팀" => array("팀장"=>"심청", "부팀장"=>"이쁜이", "팀원"=>"골뱅이")
);

$branch = array(
  "13639" => array("649"
                    => "a",
                    "648"
                    => "a2")
);

foreach($branch as $value){

  $test = array_keys($value);

}
print_r($test2);
$result = json_encode($test2);
print_r($result);
// foreach($arr as $value) {
//   echo $value['팀장']." , ".$value['부팀장']." , ".$value['팀원']."<br ,>";
// }



?>