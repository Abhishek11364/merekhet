<script>
function callme(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("result").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "gethint.php?q="+str, true);
    xmlhttp.send();
  }
}
</script>
<script>
function callme2() {
  str = document.getElementById('suboption').value

  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("result2").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "mun_select.php?q="+str, true);
    xmlhttp.send();
  }
}
</script>
<?php $active = "munjavta_q" ?>
<?php include "header.php"; ?>
<div class="container">
    <div>
  <h2 ><font color="black" > <marquee> नोट: किसान मित्रों इस पेज में आपको बागवानी के साथ-साथ कृषि संबंधित फसल प्रश्न समाधान की जानकारी मिलेगी... </marquee> </font></h2>
</div>
  <div class="row" style="padding: 20; text-align: center; font-size: 5px;"><h1>
    :: सवाल :: </h1>
  </div><br>



<div class="row" style="padding: 10;">
  <div class="col">
  <form action="" method="post" enctype="multipart/form-data">
	<?php
		include "connection.php";
		$s = mysqli_query($con,"select distinct main_option from question_category");
	?>

	<select name="main" onchange="return callme(this.value);" required id="mainoption" class="form-inline">
    <option> कोई भी एक विकल्प चुनें  </option>
    <?php while($r = mysqli_fetch_array($s))
    {
    ?>
         <option value="<?php echo $r['main_option']; ?>"> <?php echo $r['main_option']; ?> </option>
    <?php
    }
    ?>

  </select>
  </div>
    <div id="result"></div>
    <div class="col" id="result"></div>
   <div class="col"> <input type="button" name="" value="आगे" onclick="callme2()"> </div></div>
    <div id="result2"></div>
  </form>


<div>
<script defer="">
str = document.getElementById("mainoption")
callme2(str.value)
</script>
</div>
</div>

<?php include "footer.php"; ?>
