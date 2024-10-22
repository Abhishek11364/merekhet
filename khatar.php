<?php $active = "khatar" ?>
<?php include  "header.php"; ?>
<div>
    <h2>
        <font color="black">
            <marquee>वनस्पती जगत में पोषण और विकास के काम आने वाले विघटन को खाद कहते हैं ! खाद रूप में प्रयुक्त जैव पदार्थों को जैविक खाद कहते हैं। </marquee>
        </font>
    </h2>
</div>
<div>
    <img src="kh2.png" class="img" width="auto">
</div><br>




<div class=container>
    <div class="row">
        <div class="col">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="row">
                        <?php include "connection.php";
                        $s = mysqli_query($con, "select * from khatar");
                        while ($r = mysqli_fetch_array($s)) {
                        ?>
                            <div class="col-lg-4 col-md-6 special-grid drinks">
                                <div class="gallery-single fix">
                                    <div class="d-flex justify-content-center">
                                        <img src="admin/<?php echo $r['photo']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
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
                                                       '

                                                >और देखें </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
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
<style type="text/css">
    .img {
        height: 30rem ;
        width: 100%;
    }
</style>
