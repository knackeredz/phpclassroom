<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
  
  echo "<h1><center><b>รายงานสถานการณ์ COVID-19 ประจำวัน แยกตามรายจังหวัด</b></center></h1>"
  echo "<center><table border='1'>";
  echo "<tr align='center'>
        <td bgcolor='#413C69'><b>ลำดับ</b></td>
        <td bgcolor='#4382BB'><b>จังหวัด</b></td>
        <td bgcolor='#4682B4'><b>ผู้ป่วยใหม่</b></td>
        <td bgcolor='#218B81'><b>ผู้ป่วยรวม</b></td>
        <td bgcolor='#FFD700'><b>ผู้ป่วยในประเทศ</b></td>
        <td bgcolor='#FF4500'><b>ผู้ป่วยรวมในประเทศ</b></td>
        <td bgcolor='#A52A2A'><b>ผู้เสียชีวิตใหม่</b></td>
        <td bgcolor='#9C4B28'><b>ผู้เสียชีวิตรวม</b></td></tr>";
 
  foreach($data as $key=>$val){
    echo "<tr align='center'>";
    echo "<td bgcolor='#D8BFD8'>";
    echo ($key+1);
    echo "</td>";
    
    echo "<td bgcolor='#B0E0E6'>";
    echo $val->province;
    echo "</td>";
    
    echo "<td bgcolor='#B0C4DE'>";
    echo $val->new_case;
    echo "</td>";
    
    echo "<td bgcolor='#A9C8C0'>";
    echo $val->total_case;
    echo "</td>";
    
    echo "<td bgcolor='#FDFFBC'>";
    echo $val->new_case_excludeabroad;
    echo "</td>";
    
    echo "<td bgcolor='#FFD1BB'>";
    echo $val->total_case_excludeabroad;
    echo "</td>";
    
    echo "<td bgcolor='#FFB4B4'>";
    echo $val->new_death;
    echo "</td>";
    
    echo "<td bgcolor='#E9967A'>";
    echo $val->total_death;
    echo "</td>";
  }
  echo "</table></center>"; 

  echo "<h4><center><b>วันที่อัพเดท</b></center></h4>"
  echo $val->update_date;

?>
