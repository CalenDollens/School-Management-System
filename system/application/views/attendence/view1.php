<?php

echo "<div class='container'>";
echo "<div class='content_header'>";
/*---------------     content title       ---------------------*/
echo "<div class='content_title'>";
echo $pagetitle.' > '. $event;
echo "</div>";
echo "<div class='content_message'>";
echo "</div>";
/*---------------     content events       ---------------------*/
echo "<div class='content_events'>";

echo "<div class='events'>";
echo "<a href='".$url."attendence/listview/".$this->session->userdata('yearat')."' >";
echo "<span><img src='".$url."images/cancel.png' border='0' /></span>";
echo "<span> Cancel </span>";
echo "</a>";
echo "</div>";

echo "<div class='events'>";
echo "<a onclick='edit_data();' >";
echo "<span><img src='".$url."images/edit.png' border='0' /></span>";
echo "<span> Edit </span>";
echo "</a>";
echo "</div>";

echo "</div>";
echo "</div>";
/*---------------     content        ---------------------*/
echo "<div align='center' class='content'>";
echo "<table border='0' cellpadding='0' cellspacing = '0' class='formtable'>";
foreach($result as $row):
echo "<input type='hidden' name = 'AttendenceId' id = 'AttendenceId' value = '".$row->AttendenceId."'";
echo "<tr>";
echo "<td align='right' width='15%' class = 'datafield' >Student Roll No</td>";
echo "<td width='2%' class='spacetd' > </td>";
echo "<td width='33%' class = 'dataview' >".$row->StudentName ."</td></tr>";

echo "<tr>";
echo "<td align='right' width='15%' class = 'datafield' >Cast Category</td>";
echo "<td width='2%' class='spacetd' > </td>";
echo "<td width='33%' class = 'dataview' >".$row->MonthName."</td></tr>";


echo "<tr>";
echo "<td align='right' width='15%' class = 'datafield' >Total Working Days</td>";
echo "<td width='2%' class='spacetd' > </td>";
echo "<td width='33%' class = 'dataview' >" . $row->TotalDays . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td align='right' width='15%' class = 'datafield' >Morning Attend Days</td>";
echo "<td width='2%' class='spacetd' > </td>";
echo "<td width='33%' class = 'dataview' >". $row->Morning."</td>";
echo "</tr>";

echo "<tr>";
echo "<td align='right' width='15%' class = 'datafield' >Afternoon Attend Days</td>";
echo "<td width='2%' class='spacetd' > </td>";
echo "<td width='33%' class = 'dataview' >". $row->Afternoon ."</td>";
echo "</tr>";
endforeach;
echo '</table>';
echo "</div>";
echo "</div>";
?>
<script>
function edit_data(){
var rollid = $('input[name=AttendenceId]').val();
 window.location='<?=$url?>attendence/edit/'+rollid;
}		
</script>
