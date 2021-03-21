<?


$sql_bd014tm = "SELECT ".$BD014TM_STR." FROM BD014TM";
$rs_bd014tm = db2_query($as_conn, $sql_bd014tm);
// DB::TABLE("ST002TM")->SELECT($ST002TM_STR);
while($v = db2_fetch_assoc($rs_bd014tm))
{
  //변수 정리 
  unset($INS);
  $INS  = $v;

  // 전화번호
  $ph11 = substr($INS['TEL_NO'], 0, 2);

  // 지역 번호 02인 경우 
  if($ph11 == '02') 
  {
    $INS['PH11']  = $ph11;
    $INS['PH12']  = substr($INS['TEL_NO'], 2, 4);
  } 
  else 
  { // 01인 경우도 추가해줘야함 
    if($ph11 == '01')
    {
      $INS['PH12']  = substr($INS['TEL_NO'], 3, 4);
    }
    else
    {
      $INS['PH12']  = substr($INS['TEL_NO'], 3, 3);
    }
    $INS['PH11']  = substr($INS['TEL_NO'], 0, 3);
  }

  $INS['PH13']  = substr($INS['TEL_NO'], 6, 4);

  // 변경일시가 존재 한다면 save_time 덮어씌우기 
  if($INS['UPD_DT']   !="")   $INS['SAVE_TIME']   = $INS['UPD_DT'];

  // 14자리로 변경 해주기 
  $INS['SAVE_TIME']   = datetimetotime($INS['SAVE_TIME']);
  
  // BORROW_COMP 에 INSERT
  $mode = 'INS';
  //$rslt = DB::dataProcess($mode, 'USERS', $INS);

}



?>