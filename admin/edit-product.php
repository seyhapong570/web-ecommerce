<?php 
include('../midleware/adminMidleware.php');
include('includes/header.php'); 

?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                    if(isset($_GET['id']))
                    {
                        $id = $_GET['id'];
                        $product = getByID("products", $id);
                        if(mysqli_num_rows($product) > 0)
                        {
                            $data = mysqli_fetch_array($product);
                            ?>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Edit product
                                        <a href="products.php" class="btn btn-primary float-end">Back</a>
                                    </h4>
                                </div>
    
                                <div class="card-body">
                                    <form action="code.php" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="">Select category</label>
                                                <select name="category_id" class="form-select">
                                                    <option selected>Select category</option>
                                                    <?php
                                                        $categories = getAll("categories");
                                                        if(mysqli_num_rows($categories) > 0)
                                                        {
                                                            foreach($categories as $item)
                                                            {
                                                                ?>
                                                                    <option value="<?= $item['id'];?>" <?= $data['category_id'] == $item['id'] ? 'selected':'' ?>><?= $item['name'];?></option>
                                                                <?php
                                                            }
                                                        }
                                                        else
                                                        {
                                                            echo "No category available";
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <input type="hidden" name="product_id" value="<?= $data['id']; ?>">
                                            <div class="col-md-6">
                                                <label for="">Name</label>
                                                <input type="text" require name="name" value="<?= $data['name']; ?>" placeholder="Enter Product Name" class="form-control mb-2">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Slug</label>
                                                <input type="text" require name="slug" value="<?= $data['name']; ?>" placeholder="Enter Slug" class="form-control mb-2">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="">Small Desctiption</label>
                                                <textarea row="3" require name="small_description" placeholder="Enter Small Description" class="form-control"><?= $data['small_description']; ?></textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="">Desctiption</label>
                                                <textarea row="3" require name="description" placeholder="Enter Description" class="form-control"><?= $data['description']; ?></textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Original Price</label>
                                                <input type="text" require name="original_price" value="<?= $data['original_price']; ?>" placeholder="Enter Original Price" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Selling Price</label>
                                                <input type="text" require name="selling_price" value="<?= $data['selling_price']; ?>" placeholder="Enter Selling Price" class="form-control">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="">Upload image</label>
                                                <input type="hidden" name="old_image" value="<?= $data['image']; ?>">
                                                <input type="file" name="image" class="form-control">
                                                <label for="">Current image</label>
                                                <img src="../uploads/products/<?= $data['image']; ?>" width="50px" height="50px" alt="Product image">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="">Quantity</label>
                                                    <input type="number" require name="qty" value="<?= $data['qty']; ?>" placeholder="Enter quantity" class="form-control">
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="">Status</label>
                                                    <input type="checkbox" require name="status" <?= $data['status'] == '0'?'':'checked' ?>>
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="">Trending</label>
                                                    <input type="checkbox" name="trending" <?= $data['trending'] == '0'?'':'checked' ?>>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="">Meta tile</label>
                                                <input type="text" require name="meta_title" value="<?= $data['meta_title']; ?>" placeholder="Enter Meta Title" class="form-control">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="">Meta Description</label>
                                                <textarea row="3" require name="meta_description" placeholder="Enter Meta Description" class="form-control"><?= $data['meta_description']; ?></textarea>
                                                
                                            </div>
                                            <div class="col-md-12">
                                                <label for="">Mete Keywords</label>
                                                <textarea row="3" require name="meta_keywords" placeholder="Enter meta keywords" class="form-control"><?= $data['meta_keywords']; ?></textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <br>
                                                <button type="submit" class="btn btn-primary" name="update_product_btn" >Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <?php
                        }
                        else
                        {
                            echo "Product not found for given id";
                        }
                    }
                    else
                    {
                        echo "Id missing from url";
                    }
                ?>
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>

