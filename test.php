<?php


$full_ph =' 023451111 ';

$result = change_ph($full_ph);
print_r ($result);

/**
 * param : 전화번호
 * return : ph11, ph12, ph13
 */
function change_ph($full_ph){
    
    unset($_DATA);
    
    // 공백 제거 
    $full = trim($full_ph);
    // 자리수 추출 
    $ph_cnt = strlen($full);
    // 앞자리 추출 
    $ph11 = substr($full,0,2);

    if($ph11 == '02')
    {
        if($ph_cnt == 9)
        {   
            $_DATA['ph12']  =  substr($full,2,3);
        }
        else
        {
            $_DATA['ph12']  =  substr($full,2,4);
        }
       
    }
    else if($ph11 == '01' || $ph11 == '07')
    {
        $ph11 = $ph11.'0';
        $_DATA['ph12'] = substr($full,3,4);   
    }
    else // 그 외 지역번호
    {   
        $ph11 = substr($full,0,3);
        if($ph_cnt == 10)
        {
            $_DATA['ph12'] =  substr($full,3,3);
        }
        else
        {
            $_DATA['ph12'] = substr($full,3,4);
        }
    }

     // 공통 데이터 
     $_DATA['ph11'] = $ph11;
     $_DATA['ph13'] = substr($full,-4);
     
     return $_DATA;
}



?>