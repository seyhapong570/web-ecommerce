<?php 
include('../midleware/adminMidleware.php');
include('includes/header.php'); 

?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add product</h4>
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
                                                        <option value="<?= $item['id'];?>"><?= $item['name'];?></option>
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
                                <div class="col-md-6">
                                    <label for="">Name</label>
                                    <input type="text" require name="name" placeholder="Enter Product Name" class="form-control mb-2">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Slug</label>
                                    <input type="text" require name="slug" placeholder="Enter Slug" class="form-control mb-2">
                                </div>
                                <div class="col-md-12">
                                    <label for="">Small Desctiption</label>
                                    <textarea row="3" require name="small_description" placeholder="Enter Small Description" class="form-control"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label for="">Desctiption</label>
                                    <textarea row="3" require name="description" placeholder="Enter Description" class="form-control"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Original Price</label>
                                    <input type="text" require name="original_price" placeholder="Enter Original Price" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Selling Price</label>
                                    <input type="text" require name="selling_price" placeholder="Enter Selling Price" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for="">Upload image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Quantity</label>
                                        <input type="number" require name="qty" placeholder="Enter quantity" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Status</label>
                                        <input type="checkbox" require name="status">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Trending</label>
                                        <input type="checkbox" name="trending">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="">Meta tile</label>
                                    <input type="text" require name="meta_title" placeholder="Enter Meta Title" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for="">Meta Description</label>
                                    <textarea row="3" require name="meta_description" placeholder="Enter Meta Description" class="form-control"></textarea>
                                    
                                </div>
                                <div class="col-md-12">
                                    <label for="">Mete Keywords</label>
                                    <textarea row="3" require name="meta_keywords" placeholder="Enter meta keywords" class="form-control"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success" name="add_product_btn" >Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>