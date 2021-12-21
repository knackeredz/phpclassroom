<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
  
  echo "<table border='1'>";
  echo "<tr align="center"><td><b>ลำดับ</b></td>
        <td><b>จังหวัด</b></td>
        <td><b>ผู้ป่วยใหม่</b></td>
        <td><b>ผู้ป่วยรวม</b></td>
        <td><b>ผู้ป่วยในประเทศ</b></td>
        <td><b>ผู้ป่วยรวมในประเทศ</b></td>
        <td><b>ผู้เสียชีวิตใหม่</b></td>
        <td><b>ผู้เสียชีวิตรวม</b></td>
        <td><b>วันที่อัพเดต</b></td></tr>";
  foreach($data as $key=>$val){
    echo "<tr align="center">";
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
    echo $val->tatal_case;
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
  echo "</table>"; 

?>
