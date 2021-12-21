<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
  
  echo "<center><table border='1'>";
  echo "<tr align='center'><td bgcolor='#218B81'><b>ลำดับ</b></td>
        <td bgcolor='#698396'><b>จังหวัด</b></td>
        <td bgcolor='#A9C8C0'><b>ผู้ป่วยใหม่</b></td>
        <td bgcolor='#A9C8C0'><b>ผู้ป่วยรวม</b></td>
        <td bgcolor='#A9C8C0'><b>ผู้ป่วยในประเทศ</b></td>
        <td bgcolor='#A9C8C0'><b>ผู้ป่วยรวมในประเทศ</b></td>
        <td bgcolor='#A9C8C0'><b>ผู้เสียชีวิตใหม่</b></td>
        <td bgcolor='#AE8A8C'><b>ผู้เสียชีวิตรวม</b></td>
        <td><b>วันที่อัพเดต</b></td></tr>";
  foreach($data as $key=>$val){
    echo "<tr align='center'>";
    echo "<td bgcolor='#A9C8C0'>";
    echo ($key+1);
    echo "</td>";
    echo "<td bgcolor='#8EA4C9'>";
    echo $val->province;
    echo "</td>";
    echo "<td bgcolor='#A9C8C0'>";
    echo $val->new_case;
    echo "</td>";
    echo "<td bgcolor='#A9C8C0'>";
    echo $val->total_case;
    echo "</td>";
    echo "<td bgcolor='#A9C8C0'>";
    echo $val->new_case_excludeabroad;
    echo "</td>";
    echo "<td bgcolor='#E5DBD9'>";
    echo $val->total_case_excludeabroad;
    echo "</td>";
    echo "<td bgcolor='#ffe6e6'>";
    echo $val->new_death;
    echo "</td>";
    echo "<td bgcolor='#f9ecec'>";
    echo $val->total_death;
    echo "</td>";
    echo "<td bgcolor='#A9C8C0'";
    echo $val->update_date;
    echo "</td>";
    echo "</tr>";
  }
  echo "</table></center>"; 
?>
