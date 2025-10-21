<?php 
    include('functions/userfunctions.php');
    include('includes/header.php'); 
    include('includes/slider.php'); 
    
?>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Trending Products</h4>
                <div class="underline mb-2"></div>
                <div class="owl-carousel">
                    <?php
                        $trendingProducts = getAllTrending();
                        if(mysqli_num_rows($trendingProducts) > 0)
                        {
                            foreach($trendingProducts as $item)
                            {
                                ?>
                                    <div class="item">
                                        <a href="product-view.php?product=<?= $item['slug'];?>">
                                            <div class="card shadow">
                                                <div class="card-body">
                                                    <img src="uploads/products/<?= $item['image']; ?>" alt="Product Image" class="w-100" height="200px">
                                                    <h6 class="text-center"><?= $item['name']; ?></h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                
                                <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-f2f2f2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>About Us</h4>
                <div class="underline mb-2"></div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae sapiente reprehenderit velit nisi debitis, corporis, in, maxime nostrum dolor maiores minus adipisci libero blanditiis recusandae quis eveniet ab eum laudantium!
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae sapiente reprehenderit velit nisi debitis, corporis, in, maxime nostrum dolor maiores minus adipisci libero blanditiis recusandae quis eveniet ab eum laudantium!
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. At expedita atque assumenda? Molestias eius consequatur ratione cupiditate! Non fugiat porro autem maiores, dolore animi odit deleniti. Facere quia ducimus veritatis.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4 class="text-white">Khmer-Shop</h4>
                <div class="underline mb-2"></div>
                <a href="index.php" class="text-white"><i class="fa fa-angle-right">Home</i></a><br>
                <a href="#" class="text-white"><i class="fa fa-angle-right">About Us</i></a><br>
                <a href="cart.php" class="text-white"><i class="fa fa-angle-right">My Cart</i></a><br>
                <a href="categories.php" class="text-white"><i class="fa fa-angle-right">Our Collections</i></a>
            </div>
            <div class="col-md-3">
                <h4 class="text-white">Address</h4>
                <p class="text-white">
                    #24,
                    Phnom Penh, <br>
                    Cambodia

                </p>
                <a href="tel:+855123456789" class="text-white"><i class="fa fa-phone"> +855 123456789</i></a><br>
                <a href="mailto:khmershop@gmail.com" class="text-white"><i class="fa fa-envelope"> khmershop@gmail.com</i></a>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d250151.46368162904!2d104.72537131268837!3d11.579317636202067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109513dc76a6be3%3A0x9c010ee85ab525bb!2sPhnom%20Penh!5e0!3m2!1sen!2skh!4v1728961973450!5m2!1sen!2skh" class="w-100" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>

<div class="py-2 bg-danger">
    <div class="text-center">
        <p class="mb-0">All rights reserved. Copyright <a href="https://www.youtube.com/@Haa-w6r" target="_blank" class="text-white">@ David</a> - <?= date('Y') ?></p>
    </div>
</div>

<!-- Optional JavaScript; choose one of the two! -->
<?php include('includes/footer.php'); ?>
<script>
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        })
    })
</script>