<?php 
    
    include('functions/userfunctions.php');
    include('includes/header.php'); 
    include('authenticate.php'); 

    $cartItems = getCartItems();

    if(mysqli_num_rows($cartItems) == 0)
    {
        header('Location: index.php');
    }
    
?>
<div class="py-3 bg-primary">
    <div class="container">
        <h6 class="text-white">
            <a href="index.php" class="text-white">
                Home /
            </a>
            <a href="checkout.php" class="text-white">
                Checkout
            </a>
        </h6>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="card">
            <div class="card-body shadow">
                <form action="functions/placeorder.php" method="POST">
                    <div class="row">
                        <div class="col-md-7">
                            <h5>Basic detail</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="" class="fw-bold">Name</label>
                                    <input type="text" name="name" id="name" required placeholder="Enter full name" class="form-control">
                                    <small class="text-danger name"></small>
                                </div>
                            
                                <div class="col-md-6 mb-3">
                                    <label for="" class="fw-bold">Email</label>
                                    <input type="email" name="email" id="email" required placeholder="Enter your email" class="form-control">
                                    <small class="text-danger email"></small>
                                </div>
                            
                                <div class="col-md-6 mb-3">
                                    <label for="" class="fw-bold">Phone</label>
                                    <input type="text" name="phone" id="phone" required placeholder="Enter your phone number" class="form-control">
                                    <small class="text-danger phone"></small>
                                </div>
                            
                                <div class="col-md-6 mb-3">
                                    <label for="" class="fw-bold">Pin code</label>
                                    <input type="text" name="pincode" id="pincode" required placeholder="Enter your pin code" class="form-control">
                                    <small class="text-danger pincode"></small>
                                </div>
                            
                                <div class="col-md-12 mb-3">
                                    <label for="" class="fw-bold">Address</label>
                                    <textarea name="address" id="address" required class="form-control" row="5"></textarea>
                                    <small class="text-danger address"></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <h5>Order Details</h5>
                            <hr>
                            
                            
                                <?php 
                                $items = getCartItems(); 
                                $totalPrice = 0;
                                foreach ($items as $citem)
                                {
                                    ?>
                                    <div class="mb-1 border">
                                        <div class="row align-items-center">
                                            <div class="col-md-2">
                                                <img src="uploads/products/<?=$citem['image']; ?>" alt="Image" width="80px">
                                            </div>
                                            <div class="col-md-5">
                                                <h6><?=$citem['name']; ?></h6>
                                            </div>
                                            <div class="col-md-3">
                                                <h6><?=$citem['selling_price']; ?>$</h6>
                                            </div>
                                            <div class="col-md-2">
                                                <h6><?=$citem['prod_qty']; ?></h6>
                                            </div>
                                            
                                        </div>  
                                    </div> 
                                    <?php
                                    $totalPrice += $citem['selling_price'] * $citem['prod_qty'];
                                }
                                ?>
                                <hr>
                            <h5>Total Price : <span class="float-end fw-bold"><?= $totalPrice; ?>$</span></h5>    
                            <div class="">
                                <input type="hidden" name="peyment_mode" value="COD">
                                <button type="submit" name="placeOrderBtn" class="btn btn-primary w-100">Confirm and place order</button>
                                <div id="paypal-button-container" class="mt-3"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Optional JavaScript; choose one of the two! -->
<?php include('includes/footer.php'); ?>

<script src="https://www.paypal.com/sdk/js?client-id=AbyXxzix-U3rzjn08ZTX7xpiEPQEgkB9YrL5YuaHZ7Yed7D_Rr0ETZuI8jpcGsHesiMh3259lD4mxBxs&currency=USD"></script>

<script>
    
    // Initialize PayPal Buttons
    paypal.Buttons({
        onClick(){
            var name = $('#name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var pincode = $('#pincode').val();
            var address = $('#address').val();

            if(name.length == 0){
                $('.name').text("This field is required"); 
            }
            else{
                $('.name').text(""); 
            }
            if(email.length == 0){
                $('.email').text("This field is required");
                
            }
            else{
                $('.email').text(""); 
            }
            if(phone.length == 0){
                $('.phone').text("This field is required"); 
            }
            else{
                $('.phone').text(""); 
            }
            if(pincode.length == 0){
                $('.pincode').text("This field is required");
                
            }
            else{
                $('.pincode').text(""); 
            }
            if(address.length == 0){
                $('.address').text("This field is required");
                
            }
            else{
                $('.address').text(""); 
            }
            if(name.length == 0 || email.length == 0 || phone.length == 0 || pincode.length == 0 || address.length == 0)
            {
                return false;
            }
        },
        // Set up the transaction when the button is clicked
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '<?= $totalPrice ?>' // Change this value to the price of the product/service
                    }
                }]
            });
        },

        // Finalize the transaction after buyer approval
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                // Show a success message to the buyer
                //alert('Transaction completed by ' + details.payer.name.given_name);
                //console.log(details);  // You can see full transaction details here in the console
                const transaction = details.purchase_units[0].payments.captures[0];
            
                var name = $('#name').val();
                var email = $('#email').val();
                var phone = $('#phone').val();
                var pincode = $('#pincode').val();
                var address = $('#address').val();

                var data = {
                    'name': name,
                    'email': email,
                    'phone': phone,
                    'pincode': pincode,
                    'address': address,
                    'payment_mode': "Paid by Paypal",
                    'payment_id': transaction.id,
                    'placeOrderBtn': true,
                };
                $.ajax({
                    method: "POST",
                    url: "functions/placeorder.php",
                    data: data,
                    success: function (response)
                    {
                        if(response == 201)
                        {
                            alertify.success("Order Placed Successfully");
                            //actions.redirect('my-orders.php');
                            window.location.href = 'my-orders.php';
                        }
                    }
                })
            });
        },

        // Optional: handle any errors that occur during the payment process
        onError: function(err) {
            console.error('An error occurred during the transaction', err);
            alert('An error occurred during the transaction. Please try again.');
        }
    }).render('#paypal-button-container'); // Render the PayPal buttons inside this div
</script>
