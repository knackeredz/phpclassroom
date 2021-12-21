<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
  
  echo "<center><table border='1'>";
  echo "<tr align='center'><td bgcolor='#B0C4DE'><b>ลำดับ</b></td>
        <td bgcolor='#ADD8E6'><b>จังหวัด</b></td>
        <td bgcolor='#B0E0E6'><b>ผู้ป่วยใหม่</b></td>
        <td bgcolor='#AFEEEE'><b>ผู้ป่วยรวม</b></td>
        <td bgcolor='#7FFFD4'><b>ผู้ป่วยในประเทศ</b></td>
        <td bgcolor='#66CDAA'><b>ผู้ป่วยรวมในประเทศ</b></td>
        <td bgcolor='#5F9EA0'><b>ผู้เสียชีวิตใหม่</b></td>
        <td bgcolor='#4682B4'><b>ผู้เสียชีวิตรวม</b></td>
        <td bgcolor='#87CEEB'><b>วันที่อัพเดต</b></td></tr>";
  foreach($data as $key=>$val){
    echo "<tr align='center' bgcolor='#E0FFFF'>";
    echo "<td>";
    echo ($key+1);
    echo "</td>";
    echo "<td>";
    echo $val->province;
    echo "</td>";
    echo "<td>";
    echo $val->new_case;
    echo "</td>";
    echo "<td>";
    echo $val->total_case;
    echo "</td>";
    echo "<td>";
    echo $val->new_case_excludeabroad;
    echo "</td>";
    echo "<td>";
    echo $val->total_case_excludeabroad;
    echo "</td>";
    echo "<td>";
    echo $val->new_death;
    echo "</td>";
    echo "<td>";
    echo $val->total_death;
    echo "</td>";
    echo "<td>";
    echo $val->update_date;
    echo "</td>";
    echo "</tr>";
  }
  echo "</table></center>"; 
?>
