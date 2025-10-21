$(document).ready(function(){
    $('.delete_product_btn').click(function(e){
        e.preventDefault();

        var id = $(this).val();
        alert(id);

        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              $.ajax({
                method: "POST",
                url: "code.php",
                data: {
                    'product_id': id,
                    'delete_product_btn': true,
                },
                success: function(response){

                }
              })
            } else {
              swal("Your imaginary file is safe!");
            }
          });
    });
});

$(document).ready(function(){
  $('.increment-btn').click(function(e){
      e.preventDefault();
      var qty = $('.input-qty').val();
      alert(qty);
  });
});