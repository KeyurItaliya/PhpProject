$(document).on("click", '.getuserLogin', function(){

        var u_name = $('#user_name').val();
        var u_pass = $('#user_password').val();
                $.ajax({
                    type: 'POST',
                    url: 'process/sign_in_process.php',
                    data: {
                        "user_name" : u_name,
                        "user_password" : u_pass
                    },
                    dataType: 'json',

                        success: function(data){
                            location.reload();
                        }
                    
                });
        
        });

// ===============================================================================================

if($("#getsignupdata").length){
    $("#getsignupdata").validate({
            rules: {
                "u_name": {
                    required: true,
                },
                "u_addr": {
                    required: true,
                },
                "u_mno": {
                    required: true,
                },
                "u_pass": {
                    required: true,
                }
            },
    submitHandler: function(form) {
                $.ajax({
                    type: 'POST',
                    url: 'process/sign_up_process.php',
                    data: new FormData($("#getsignupdata")[0]),
                    dataType: 'json',
                    cache: false,
                    contentType: false,
                    processData: false,

                    success: function(mess) {
                        if (mess.success) {
                            $('.main-container').prepend(mess.alert);
                        } else {
                            $('.main-container').prepend(mess.error);
                        }
                    }
                    });
            }
    });
}

// ===============================================================================================

$(document).ready(function(){
    $('.cartidgetby').click(function(){
        var ref_id = $(this).data('id');
        $.ajax({
                    type: 'POST',
                    url: 'process/item_addto_cart.php',
                    data: {
                        "item_name" : item_name,
                        "item_discription" : item_discription,
                        "item_price" : item_price
                    },
                    dataType: 'json'
                    });
    })
});
// ===============================================================================================
	$(document).ready(function(){
		$('.idgetby').click(function(){	
            var ref_id = $(this).data('id');
			if(ref_id){
				$.ajax({
					type: 'POST',
					url: 'process/cart_popup.php',
					data: {
						ref_id : ref_id
					},
					dataType: 'json',
					success: function(data){ 
						$('#mod').html('');
						$('#mod').prepend(data.html);
					} 
				});
			}
		})
	});


// ===============================================================================================


    $(document).on("click", '.item_prod_add', function(){
        var ref_id = $(this).data('id');
        // var item_id = $('.item_id_text').data('id');
        // console.log(item_id);
		var item_image = $('.item_image_text').html();
		var item_name = $('.item_name_text').html();
        var item_price = $('.item_price_text').html();
        var time = $('.time').val();
        var color = $('.color').val();
		if(ref_id){
			$.ajax({
				type: 'POST',
				url: 'process/user_add_cart.php',
				data: {
					"item_image" :item_image, 
					"ref_id" :ref_id,
					"item_name" :item_name,
					"item_price" :item_price,
					"time" :time,
                    "color" :color
				},
				dataType: 'json',
				success: function(data){
                    alert(data.message);
                    location.reload();
                }
			})
		}
    });
// ===============================================================================================
    $(document).ready(function(){
		$('.checkout').click(function(){
        var country = $(".cname").val();
        var state = $(".state").val();
        var ccode = $(".ccode").val();
        var item_price = $(".price_item").html();
        var final_amount = $(".final_amount").html();
        var product_quantity = $('.all-quantity').val();
        // var idd = $('.all-quantity').data('id');
        if (confirm("Are you sure?")){
        $.ajax({
				type: 'POST',
				url: 'process/checkout_process.php',
				data: {
                    "cname" : country,
                    "state" : state,
                    "ccode" : ccode,
                    "item_price" :item_price,
                    "final_amount" : final_amount,
                    "product_quantity" : product_quantity
				},
                dataType: 'json',
                success: function(data){
                    alert(data.message);
                    window.location.href = 'thank_you.php';
                    // location.reload();
                }
            })
            }
            else{
                return false;
            }
        });
    });
// ===============================================================================================
    $(document).ready(function(){
        $('.item_delete').click(function(){
            if (confirm("Are you sure?")){
            var delete_id = $(this).data('id');
            $.ajax({
                    type: 'POST',
                    url : 'rocess/delete_item.php',
                    data: {
                        "delete_id" : delete_id,
                    },
                    dataType: 'json',
                    success: function(data){
                        alert(data.message);
                        location.reload();
                    }
            });
        }
        else{
            return false;
        }
        });
    });
// ===============================================================================================
    
// $(document).ready(function(){
//     $('.view_id').click(function(){
//         var get_view_id = $('.view_id').data('id');
//         $.ajax({
//                     type: 'POST',
//                     url: 'process/view_item_process.php',
//                     data: {
//                         "view_id" : get_view_id,
//                     },
//                     dataType: 'json',
//                     success: function(data){
//                         window.location.href = "view_item.php?id=" + get_view_id;
//                     }
//                 });
//         })
// });
    