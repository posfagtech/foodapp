<?php
// session_start();
if( $_SESSION['product_id']){
    $id= $_SESSION['product_id'];
}

?>
<form  class="was-validated" action="chat.process.php" method="POST"> 
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header text-primary">
        <!-- <h4 class="modal-title">Modal Heading</h4> -->
        <h1 class="small mb-1" name=""><?php echo strtoupper($productname)?></h1>

        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label text-primary"><h3>You are sending order to</h4> &nbsp;<b style="color:rgb(237,127,18)"><?php echo strtoupper($kitchename);?></b></label>
                  <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="../admin/<?php echo $productimage?> " width="10" height="150" alt="..." /></div>
                  <span class="text-success">TL  &nbsp;<?php echo  $productprice?></span>
                </div>
<!-- buyer details -->
                    <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
                      <div class="form-outline">
                        <label class="form-label text-primary" for="form3Examplev2">Email</label>
                        <input type="email" name="buyeremail"id="form3Examplev2" class="form-control form-control-lg" required />
                        <div class="valid-feedback">Valid.</div>
                        <!-- <div class="invalid-feedback">Please fill out this field.</div> -->
                         </div>
                          </div>
                            <div class="col-md-6 mb-4 pb-2">
                              <div class="form-outline">
                            <label class="form-label text-primary" for="form3Examplev3">Phone Number</label>
                              <input type="phone" name="buyerphone" id="form3Examplev3" class="form-control form-control-lg" required />
                            <div class="valid-feedback">Valid.</div>
                            <!-- <div class="invalid-feedback">Please fill out this field.</div> -->
                           </div>
                           </div>
                            </div>
                            <div class="form-outline">
                        <label class="form-label text-primary" for="form3Examplev2">Please enter your location</label>
                        <input type="email text-primary" name="buyerlocation" id="form3Examplev2" class="form-control form-control-lg" required />
                        <div class="valid-feedback">Valid.</div>
                        <!-- <div class="invalid-feedback">Please fill out this field.</div> -->
                         </div>
<!-- buyer details end -->
                    <div class="form-group">
                    <label for="message-text" class="col-form-label text-primary">Message:</label>
                    <textarea class="form-control" name="buyermessage" id="message-text"></textarea>
                    </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success btn-lg">Send Order</button>


      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <!-- <a href="chat.process.php" type="submit" name="submit" class="btn btn-success">Send order</a> -->
      </div>
    </div>
  </div>
</div>
</form>
<?php
// };
?>






