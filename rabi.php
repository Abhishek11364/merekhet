<?php $active = "rabi" ?>
<?php include  "header.php"; ?>
<div>
    <h2>
        <font color="black">
            <marquee>रबी की फसल उत्तर भारत में अक्टूबर और नवंबर माह के दौरान बोई जाती है जो कम तापमान में बोई जाती है, फसल की कटाई फरवरी और मार्च महीने मैं की जाती है। इसी के साथ में मध्यप्रदेश में रब्बी की फसलें अधिकतर आलू लहसुन प्याज गाजर और मूली चुकंदर इसी के साथ गराडू रतालू और प्याज के बीज बनाने के लिए झब्बू लगाए जाते हैं परंतु मध्यप्रदेश में अधिकतर किसानों को जल की कमी होने के कारण यहां आलू मुख्य रूप से लगाए जाते हैं</marquee>
        </font>
    </h2>
</div>

<div>
    <img src="rb2.png" class="img">
</div><br>



<div class=container>
    <div class="row">
        <div class="col">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="row">
                        <?php include "connection.php";
                        $s = mysqli_query($con, "select * from rabi");
                        while ($r = mysqli_fetch_array($s)) {
                        ?>
                            <div class="col-lg-4 col-md-6 special-grid drinks">
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
                                                       '

                                                > और देखें</a>
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
        height: 30rem;
        width: 100%;
    }
</style>
