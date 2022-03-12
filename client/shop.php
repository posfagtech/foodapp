

<?php
session_start();
include "../config/config.php";
// echo $_SESSION['admin_id'];
if(isset($_GET['id'])){
  $_SESSION['product_id']=$_GET["id"];
    $id= $_SESSION['product_id'];
$sql="SELECT * FROM admin_product p JOIN admin_table a ON (p.admin_id= a.admin_id) WHERE p.product_id= $id";
    $result = $conn->query($sql);
    // if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            $productname= $row["product_name"];
            $productprice= $row["product_price"];
            $adminid=$row["admin_id"];
            $productdescription= $row["product_description"];
            $_SESSION['productid']=$row['product_id'];
            $_SESSION['adminid']=$row['admin_id'];
            $productimage=$row['product_image1'];
            $kitchename=$row['store_name'];

            
          }

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"/>

          <!-- Favicon-->
          <link rel="icon" type="image/x-icon" href="../admin/image/favico.png" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/style2.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!"><img src="../admin/image/logo.png" class="rounded" alt="Cinque Terre" width="304" height="95"> 
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="">Report a seller</a></li> -->
                        <!-- modAL -->
                        

<li class="">
<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#yourModal">
    Report a Seller
  </button>
</div>

<!-- The Modal -->
<div class="modal fade" id="yourModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title" style="background:rgb(237,127,18); color:white">Report Seller</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Send message</button>
      </div>
      </div>

    </div>
  </div>
     </div>
</li>

 </ul>
             </nav>
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="../admin/<?php echo $productimage?> " alt="..." /></div>
                    <div class="col-md-6" style="background:rgb(237,127,18); color:white">
                        <div class="display-6 fw-bolder" style="background:rgb(237,127,18); color:white"><?php echo $kitchename?></div>
                        <h1 class="small mb-1"><?php echo $productname?></h1>
                        <div class="fs-5 mb-5">
                            <!-- <span class="text-decoration-line-through"><?php echo   $product_price?></span> -->
                            <span><i class="text-success">TL</i><?php echo  $productprice?></span>
                        </div>
                        <hr>
                        <p class="lead"><?php echo  $productdescription?>
                            <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Praesentium at dolorem quidem modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis delectus ipsam minima ea iste laborum vero?</p> -->
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <!-- <a href=""  class="btn btn-outline-dark bg-success text-white flex-shrink-0" type="button"> -->
                                <!-- Chat Seller -->
                                <button type="button" class="btn btn-outline-success bg-success text-white flex-shrink-0" data-bs-toggle="modal" data-bs-target="#myModal">
                                chat
                                <i class="bi-cart-fill me-1"></i>
                            </button>
                            </div>
                            <?php
                            include 'chat.php';
                            ?>
                            <!-- </a> -->
                            <!-- sjsjsjsjsj -->
                            <!-- Button to Open the Modal -->



                            <!-- ddddfghvhgghu -->
                        </div>
                    </div>
                </div>
            </div>


<!-- ihdihishadihsaihai -->
<section class="py-5 bg-light">
<h2 class="fw-bolder mb-4">Others Foods from this seller</h2>
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                $adminid=$_SESSION['adminid'] ;
                $product_id= $_SESSION['adminid'];
                //  $sql= "SELECT * FROM admin_product WHERE $id= 12";
                $sql= "SELECT * FROM admin_product WHERE admin_id= $adminid";
                $result = $conn->query($sql);
                //  $result = $conn->query($sql);
        foreach($result as $row){
           $_SESSION['product_name'] = $row["product_name"];
           $_SESSION['product_image'] = $row["product_image1"];
           $_SESSION['product_description'] = $row["product_description"];
           $_SESSION['product_price'] = $row["product_price"];

        //    $_SESSION['locaion'] = $row["admin_location"];
        //    $_SESSION['storename'] = $row["store_name"];
           $_SESSION['productid'] = $row["product_id"];
        //    $_SESSION['admin_id']= $row['admin_id'];
        // }
?>
   
                    <div class="col mb-5">
                        <div class="card h-40">
                            <!-- Sale badge-->
                            <div class="badge text-white position-absolute"  style="top: 0.5rem; right: 0.5rem; background:rgb(237,127,18)">
                             <?php 
                            //  echo ucfirst($storename)
                             ?> 
                        </div>
                            <!-- Product image-->
                            <img class="card-img-top" src="../admin/<?php echo$_SESSION['product_image'] ?>" alt="..." width="50" height="170" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $_SESSION['product_name']?></h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- <img src="../admin/image/location.jpg" height="50px" /><?php echo $locaion?><br> -->
                                    <!-- Product price-->
                                    <span class="text-muted"><i>TL</i><?php echo $_SESSION['product_price']?></span>
                                    
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-success mt-auto" href="shop.php?id=<?php echo $_SESSION['productid']?>">Contact Seller</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- anotehr one -->

                    <!-- ennnd -->
           
                           
                           
                  <?php
                };
                ?>
                </div>
            </div>
        </section>
            <!-- dcdihsaicsaichsia -->
        </section>
        <!-- Related items section-->
        
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; FoodHut.online 2021</p></div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script>
    $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>
    </body>
</html>
<?php
    };

?>

