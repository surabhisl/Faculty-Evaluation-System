<?php 
	  
	  include("includes/config_db.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Questions</title>
<link rel="stylesheet" type="text/css" href="includes/style.css" />
</head>

<body>
<table width="57%" align="center" border="0" cellpadding="0" cellspacing="1" >
<?php include('admin_panel_heading.php'); ?>
<tr>
<td width="22%" valign="top">
<? include('left_side.php');?>
</td>

<td width="78%" align="center" valign="top" >
<table width="100%" id="rounded-corner" border="0" align="center" >
<thead>
<tr>
	<th width="15%" scope="col" class="rounded-company" align="center">Que Id</th>
	<th width="74%" scope="col" class="rounded-q1" align="center">Question</th>
	<th width="74%" scope="col" class="rounded-q2" align="center">One_word</th>
	<th width="11%" scope="col" class="rounded-q4" align="center">&nbsp;</th>
</tr>
</thead>

<?php



        $result = mysql_query("SELECT * FROM feedback_ques_master ORDER BY q_id");
        //lets make a loop and get all news from the database
		$i=1;
        while($myrow = mysql_fetch_array($result))
             {//begin of loop
               //now print the results:
			   echo '<tr>';
               echo "<td align=center>".$i."</td>";$i++;
			   echo "<td align=left>".$myrow['ques']."</td>";
			   echo "<td align=left>".$myrow['one_word']."</td>";
               echo "<td align=center>"."<a href=\"edit_feed_ques.php?q_id=$myrow[q_id]\" class=\"button\">edit</a> "."</td>";
               echo '</tr>';  
              //"<!--<a href=\"delete_branch.php?b_id=$myrow[b_id]\">delete</a>-->".
              //echo "<br><a href=\"read_more.php?newsid=$myrow[newsid]\">Read More...</a>
              //  || <a href=\"edit_news.php?newsid=$myrow[newsid]\">Edit</a>
              //   || <a href=\"delete_news.php?newsid=$myrow[newsid]\">Delete</a><br><hr>";
             }//end of loop
?>
</table>
</td>
</tr>
</table>
</body>
</html>
