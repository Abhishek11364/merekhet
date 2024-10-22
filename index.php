<?php $active = "home" ?>
<?php include  "header.php"; ?>
<div>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="p1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="p2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="p3.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="p4.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="p5.png" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-light p-5 content">
    <h3 style="color: Green; text-decoration: underline; text-align: center; font-family: @Arial Unicode MS;">
                            मेरे खेत</h3>

<center>नमस्कार किसान मित्रों वेबपोर्टल में आपका स्वागत है|<br></center></
यह वेब पोर्टल पूरी तरह से किसान मित्रों के लिए ही बनाया गया है <br>
यह वेब पोर्टल इसलिए बनाया गया है ताकि राज्य के किसानों को खेती के लिए आवश्यक कृषि संबंधी जानकारी समय पर मिल सके और आधुनिक कृषि संबंधी जानकारी उनकी उंगलियों पर उपलब्ध हो सके।
इस पोर्टल में पूर्णतः हिंदी भाषा &nbsp; का उपयोग इसलिए किया गया है ताकि किसान मित्रों को हर जानकारी समझने में बहुत आसानी हो। इस पोर्टल में आपको विभिन्न मेनू मिलेंगे जिसमें दवा, उर्वरक, सलाहकार, एफएक्यू और संपर्क जैसे विभिन्न प्रकार की कृषि संबंधी जानकारी मेनू में मिलेगी।



                            
</div>

<br><br>

<div class=container>
    <div class="row">
        <div class="col">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="row">
                        <?php include "connection.php";
                        $s = mysqli_query($con, "select * from kharif limit 4");
                        while ($r = mysqli_fetch_array($s)) {
                        ?>
                            <div class="col-lg-3 col-md-6 special-grid drinks">
                                <div class="gallery-single fix">
                                    <div class="d-flex justify-content-center">
                                        <img src="admin/<?php echo $r['photo']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
                                    </div>
                                    <div class="why-text">
                                        <h2><?php echo $r['kharif_title']; ?></h2>
                                        <p><?php echo nl2br($r['kharif_short']); ?></p>

                                        <h5 align="center">
                                            <a href="kharif_more.php?id=<?php echo $r['id']; ?>" class="btn btn-primary"
                                                onMouseOver="this.style.color='#000'"
                                            onMouseOut="this.style.color='#fff'"  
                                                       style='color: #fff;
                                                       background-color: #0B6E4F;
                                                       border-color: #000;
                                                       
                                                       :hover  color: #000; 
                                                       '> और देखें</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class=" p-4 text-center"><a href="kharif.php" class="btn btn-info"onMouseOver="this.style.color='#000'"
                                            onMouseOut="this.style.color='#fff'"  
                                                       style='color: #fff;
                                                       background-color: #0B6E4F;
                                                       border-color: #000;
                                                       
                                                       :hover  color: #000; 
                                                       '>और खरीफ की फसल देखने के लिए यहां क्लिक करें </a></div>
            </div>
        </div>
    </div>
</div>
<div class="col">

</div>
<div class="col"></div>
</div>
</div>
</div>

<div class=container>
    <div class="row">
        <div class="col">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="row">
                        <?php include "connection.php";
                        $s = mysqli_query($con, "select * from rabi limit 4");
                        while ($r = mysqli_fetch_array($s)) {
                        ?>
                            <div class="col-lg-3 col-md-6 special-grid drinks">
                                <div class="gallery-single fix">
                                    <div class="d-flex justify-content-center">
                                        <img src="admin/<?php echo $r['photo']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
                                    </div>
                                    <div class="why-text">
                                        <h2><?php echo $r['rabi_title']; ?></h2>
                                        <p><?php echo nl2br($r['rabi_short']); ?></p>

                                        <h5 align="center">
                                            <a href="rabi_more.php?id=<?php echo $r['id']; ?>" class="btn btn-primary"
                                                onMouseOver="this.style.color='#000'"
                                            onMouseOut="this.style.color='#fff'"  
                                                       style='color: #fff;
                                                       background-color: #0B6E4F;
                                                       border-color: #000;
                                                       
                                                       :hover  color: #000; 
                                                       '> और देखें</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class=" p-4 text-center"><a href="rabi.php" class="btn btn-info"onMouseOver="this.style.color='#000'"
                                            onMouseOut="this.style.color='#fff'"  
                                                       style='color: #fff;
                                                       background-color: #0B6E4F;
                                                       border-color: #000;
                                                       
                                                       :hover  color: #000; 
                                                       '>और रबी की फसल देखने के लिए यहां क्लिक करें </a></div>
            </div>
        </div>
    </div>
</div>
<div class="col">

</div>
<div class="col"></div>
</div>
</div>
</div>

<div class=container>
    <div class="row" >
        <div class="col">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="row">
                        <?php include "connection.php";
                        $s = mysqli_query($con, "select * from khatar limit 4");
                        while ($r = mysqli_fetch_array($s)) {
                        ?>
                            <div class="col-lg-3 col-md-6 special-grid drinks">
                                <div class="gallery-single fix">
                                    <div class="d-flex justify-content-center">
                                        <img src="admin/<?php echo $r['photo']; ?>" class="img-fluid mx-auto" alt="Image" style='width: 263px; height:170px;'>
                                    </div>
                                    <div class="why-text">
                                        <h2><?php echo $r['khatar_title']; ?></h2>
                                        <p><?php echo nl2br($r['khatar_short']); ?></p>

                                        <h5 align="center">
                                            <a href="khatar_more.php?id=<?php echo $r['id']; ?>" class="btn btn-primary"
                                            onMouseOver="this.style.color='#000'"
                                            onMouseOut="this.style.color='#fff'"  
                                                       style='color: #fff;
                                                       background-color: #0B6E4F;
                                                       border-color: #000;
                                                       
                                                       :hover  color: #000; 
                                                       '>और देखें </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <div class=" p-4 text-center"><a href="khatar.php" class="btn btn-info"onMouseOver="this.style.color='#000'"
                                            onMouseOut="this.style.color='#fff'"  
                                                       style='color: #fff;
                                                       background-color: #0B6E4F;
                                                       border-color: #000;
                                                       
                                                       :hover  color: #000; 
                                                       '>और देखने के लिए यहां क्लिक करें </a></div>
            </div>
        </div>
    </div>
</div>
<div class="col">

</div>
<div class="col"></div>
</div>
</div>



<div class=container>
    <div class="row">
        <div class="col">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="row">
                        <?php include "connection.php";
                        $s = mysqli_query($con, "select * from dava limit 4");
                        while ($r = mysqli_fetch_array($s)) {
                        ?>
                            <div class="col-lg-3 col-md-6 special-grid drinks">
                                <div class="gallery-single fix">
                                    <div class="d-flex justify-content-center">
                                        <img src="admin/<?php echo $r['photo']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
                                    </div>
                                    <div class="why-text">
                                        <h2><?php echo $r['dava_title']; ?></h2>
                                        <p><?php echo nl2br($r['dava_short']); ?></p>

                                        <h5 align="center">
                                            <a href="dava_more.php?id=<?php echo $r['id']; ?>" class="btn btn-primary"
                                                onMouseOver="this.style.color='#000'"
                                            onMouseOut="this.style.color='#fff'"  
                                                       style='color: #fff;
                                                       background-color: #0B6E4F;
                                                       border-color: #000;
                                                       
                                                       :hover  color: #000; 
                                                       '> और देखें</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class=" p-4 text-center"><a href="dava.php" class="btn btn-info"onMouseOver="this.style.color='#000'"
                                            onMouseOut="this.style.color='#fff'"  
                                                       style='color: #fff;
                                                       background-color: #0B6E4F;
                                                       border-color: #000;
                                                       
                                                       :hover  color: #000; 
                                                       '>और देखने के लिए यहां क्लिक करें </a></div>
            </div>
        </div>
    </div>
</div>
<div class="col">

</div>
<div class="col"></div>
</div>
</div>
</div>



<?php include "footer.php"; ?>
