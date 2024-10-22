<?php  session_start();
if(isset($_SESSION['aid']))
{ 
include "menu.php"; ?>



            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">

                    <div class="col-sm-12 col-xl-12">
                        <form action="" method="post" enctype="multipart/form-data">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Salahkaro <a href="s_view.php" class="d-flex flex-row-reverse"> View </a> </h6>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example" name="cate" required>
                                    <option value="जिला कृषि अधिकारी">  जिला कृषि अधिकारी </option>
                                    <option value="उप निदेशक (विस्तार)">  उप निदेशक (विस्तार)</option>
                                    <option value="उप निदेशक (प्रशिक्षण)उप निदेशक (प्रशिक्षण)">  उप निदेशक (प्रशिक्षण)</option>
                                    <option value="जिला आत्मा पदाधिकारी">   जिला आत्मा पदाधिकारी </option>
                                    <option value="उप/सहायक निदेशक, पशुपालन"> उप/सहायक निदेशक, पशुपालन </option>
                                    <option value="नोडल अधिकारी (दूध संघ)">   नोडल अधिकारी (दूध संघ) </option>

                                </select>
                                <label for="floatingSelect">Select This Opation</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="city" name="city" required>
                                <label for="floatingPassword">City</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" name="hodo" required>
                                <label for="floatingInput">Hodo</label>
                            </div>
                  			<div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" name="name" required>
                                <label for="floatingInput">Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" name="mo">
                                <label for="floatingInput">Phone</label>
                            </div>
                           <div class="form-floating mb-3">
                                <input type="submit" value="Upaload" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" name="ins">
                            </div>
                        </div>
                    </div>
                </div>

            </form>
                 <?php
                    if (isset($_POST['ins']))
                    {
                        include "connection.php";  
                        $cate = $_POST['cate'];
                        $city = $_POST['city'];
                        $hodo = $_POST['hodo'];
                        $name = $_POST['name'];
                        $mo = $_POST['mo'];
                        mysqli_query($con,"insert into salahkaro(category,city,hodo,name,phone) values('$cate','$city','$hodo','$name','$mo')");
                        echo "<div class='bg-success ' style='color:white; padding:15px;'>salahkaro Uploaded Success</div>"; 
                    }
                ?>


            </div>




<?php include "footer.php"; 
}
else
{
    header("location:index.php");
}
?>