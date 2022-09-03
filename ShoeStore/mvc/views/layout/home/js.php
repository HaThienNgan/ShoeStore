<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
    $("a.addCart").click(function(event){
  		event.preventDefault(); //vô hiệu hóa thẻ href
  		var href=$(this).attr("href");
  		$.ajax({
  			url:href,
  			type:'GET',
  			data:{},
  			success:function(){
  				swal("Thêm thành công!","Vui lòng đến trang giỏ hàng để thanh toán", "success");
  				$('#num_cart_par').load("http://localhost:8080/SVAN/ #num_cart_par");
  			}
  		});
    });

    $("a.removeCart").click(function(event)
    {
        event.preventDefault();

        var href=$(this).attr("href");
        var id=$(this).attr("data-id");
        var name="#product"+id;
        $.ajax({
          url:href,
          type: 'GET',
          data:{},
          success:function()
          {
            swal("Đã xóa sản phẩm!", "");
            $(name).empty();
            $('#num_cart_par').load("http://localhost:8080/SVAN/cart/index #num_cart_par");
            $('#cart_total').load("http://localhost:8080/SVAN/cart/index #Cart_total");

          }
        });
    });

    $("a.updateBtn").click(function(event)
    {
        event.preventDefault();
        var id=$(this).attr("data-id");
        var inputName="#input"+id;
        var value=$(inputName).val();
        var href=$(this).attr("href");
        var subTotal="#subTotal"+id;
        var total="#total"+id;
        $.ajax({
            url:href,
            type:'POST',
            data:{value:value},
            success:function(res){
                $(subTotal).load("http://localhost:8080/SVAN/cart/index "+total);
                $('#cart_total').load("http://localhost:8080/SVAN/cart/index #Cart_total");
            }

        })


    });


	
	</script>