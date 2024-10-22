<?php
$input = $_GET['q'];

include "connection.php";
$s = mysqli_query($con,"select * from question where subject='$input'");
?>
<table border="3" align="center" width="50%" cellpadding="20" class="more_detail">
	<tr align="center">
		<th>विषय/गतिविधि</th>
		<th>संपर्क</th>
	</tr>
<?php
while($r = mysqli_fetch_array($s))
{
?>
	<tr align="center">
		<td><?php echo $r['title']; ?></td>
		<td><a href="<?php echo "admin/".$r['pdf']; ?>">देखने के लिए यहाँ क्लिक करें</a></td>
	</tr>
<?php
}
?>
</table>
