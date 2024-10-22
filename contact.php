<?php $active = "contact" ?>
<?php include "header.php"; ?><br>

<div>
    <h2>
        <font color="black">
            <marquee> किसान मित्रों, यदि आपके मन में कृषि से संबंधित कोई प्रश्न है तो यह पेज उस प्रश्न को हम तक पहुंचाने में आपकी सहायता करेगा...   </marquee>
        </font>
    </h2>
</div>

<div>
    <form action="" method="post" enctype="multipart/form-data">
        <table border="3" align="center" height="400" width="50%" class="more_detail" style="font-size: 18px;">
            <tr align="center">
                <td> नाम</td>
                <td> <input type="text" name="nm" placeholder="नाम दर्ज करें" required></td>
            </tr>
            <tr align="center">
                <td>मोबाइल नंबर</td>
                <td> <input type="text" name="mo" placeholder="मोबाइल नंबर दर्ज करें" required></td>
            </tr>
            <tr align="center">
                <td>सवाल</td>
                <td> <textarea placeholder="अपना सवाल दर्ज करें " name="q" required></textarea></td>
            </tr>
            <tr align="center">
                <td colspan="2"> <input type="submit" name="s" value="भेजना "></td>
            </tr>
        </table>
    </form>
</div>



<?php
if (isset($_POST['s'])) {
    include "connection.php";
    $name = $_POST['nm'];
    $mobile = $_POST['mo'];
    $question = $_POST['q'];
    mysqli_query($con, "insert into contact(name,mobile,question) values('$name','$mobile','$question')");
    echo " <br> <div class='bg-success ' style='color:white; padding:15px;'>आपका सवाल सफलतापूर्वक भेज दिया गया है  </div>";
}
?>

<?php include "footer.php"; ?>
