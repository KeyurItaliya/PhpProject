    <?php
        include('../include/config.php');
        $id = $_POST['modal_id'];
        $qry = "SELECT * FROM `product` WHERE `id` ='$id'";
        $result = mysqli_query($dbcon, $qry);
        $data = mysqli_fetch_assoc($result);
        ob_start(); 
    ?>
           
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Product Detail Update</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="process/product_update_process.php" enctype="multipart/form-data">
                <div class="modal-body mx-3">
                    <div class="md-form mb-3 text-dark">
                        <label data-error="wrong" data-success="right" >Product name</label>
                        <input type="text" name="product_name" class="form-control validate" value="<?php echo $data['product_name']; ?>">		
                    </div>
                    <div class="md-form mb-3 text-dark">
                        <label data-error="wrong" data-success="right">Product price </label>
                        <input type="text" name="product_price" class="form-control validate" value="<?php echo $data['product_price']; ?>">		
                    </div>
                    <div class="md-form mb-2 text-dark">
                        <label data-error="wrong" data-success="right">Product Image</label>
                    </div>
                    <div>
                        <img id="image-value" style="width:100px;" src="<?php echo './img/'.$data['product_image'];?>"><br>
                    </div>
                    <div class="mt-3">
                        <input class="border-none" name="update_img_value" id="update_img_value" type="file" class="form-control mt-3">
                    </div>
                    <div class="md-form mt-3 text-dark">
                        <label data-error="wrong" data-success="right">Status</label>
                        <div>
                            <input type="radio" name="status" value = "Y" id="formGroupExampleInput2" checked>Active
                            <input type="radio" class="ml-3" name="status" value = "N"  id="formGroupExampleInput2">Inactive
                        </div>			
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <input type="hidden" id="update_id_value" value="<?php echo $data['id']; ?>" >
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                </div>
            </form>	
       
        <?php
            $response['html'] = ob_get_clean();

            echo json_encode($response);
        ?>