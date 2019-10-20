
    // $(document).on("click", '.signup_value', function(){
    //     var update_id = $(this).data('id');
    //             $.ajax({
    //                 type: 'POST',
    //                 url: 'process/product_update_process.php',
    //                 data: {
    //                     "update_id" : update_id
    //                 },
    //                 dataType: 'json',

    //                     success: function(data){
    //                         location.reload();
    //                     }
                    
    //             });
        
    //     });

       
            $(document).ready(function(){
                $('.product_update_id').click(function(){	
                    var modal_id = $(this).data('id');
                    if(modal_id){
                        $.ajax({
                            type: 'POST',
                            url: 'process/product_update_model.php',
                            data: {
                                "modal_id" : modal_id
                            },
                            dataType: 'json',
                            success: function(data){ 
                                $('#show_data').html('');
                                $('#show_data').prepend(data.html);
                            } 
                        });
                    }
                })
            });

            $(document).on("click", '.final_update_id', function(){
                var update_id_value = $('#update_id_value').val();
                var update_img_value = $('#update_img_value').val();
                var product_name = $('#product_name').val();
                var product_price = $('#product_price').val();
                var status = $('#status').val();
                        $.ajax({
                            type: 'POST',
                            url: 'process/product_update_process.php',
                            data: {
                                "update_id_value" : update_id_value,
                                "product_name" : product_name,
                                "product_price" : product_price,
                                "update_img_value" : update_img_value,
                                "status" : status
                            },
                            dataType: 'json',
                                success: function(data){
                                    alert(data.message);
                                    window.location.href = "product.php";
                                    location.reload();
                                }
                            
                        });
                
                });
    