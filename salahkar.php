 <link href="css/bootstrap.min.css" rel="stylesheet">

<?php $active = "salahkar" ?>
<?php
	include "header.php";
?><br>
<div>
	<h2 ><font color="black" > <marquee> नोट: किसान मित्रों इस पेज पर आप विभिन्न जिलों के विभिन्न पदों वाले अधिकारियों की जानकारी केवल डमी के तोर पर लिखी गयी है यह सही नहीं हैं।.. </marquee> </font></h2>
</div>
<div class="container">
	<div class="row">
		<div class="col-3">
			<?php include "connection.php";
			$s = mysqli_query($con,"select distinct category from salahkaro");
			while($r = mysqli_fetch_array($s))
			{
			?>
            <div style="padding-bottom: 10px;font-size:20px !important;">
                <table>
                    <tr> <td>
                    <a href="salahkar.php?a=<?php echo $r['category'];?>"><?php echo $r['category']; ?></a>
                    </td> </tr>
                </table>
            </div>

			<?php
			}
			?>
		</div>

			<?php
			if(isset ($_GET['a']))
			{

				include "connection.php";
		 		$c = $_GET['a'];
				$s = mysqli_query($con,"select * from salahkaro where category='$c'");
			?>
			<div class="col-9">
			<table border=1 width="100%" class="salahkar-table more_detail">
				<tr >
					<th>	ज़िला</th>
					<th>	पद का नाम</th>
					<th>	<?php echo $c; ?> नाम</th>
					<th>	फ़ोन</th>

				</tr>
			<?php

				while($r = mysqli_fetch_array($s))
				{
			?>
				<tr>
					<td><?php echo $r['city']; ?></td>
					<td><?php echo $r['hodo']; ?></td>
					<td><?php echo $r['name']; ?></td>
					<td><?php echo $r['phone']; ?></td>

				</tr>
			<?php
			}
			?>
			</table>

		<?php } ?>
		</div>
	</div>

</div>

<?php
	include "footer.php";
?>
