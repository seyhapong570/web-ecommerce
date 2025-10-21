<?php 
include('../midleware/adminMidleware.php');
include('includes/header.php'); 

?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>All Products</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $product = getAll('products');
                                if(mysqli_num_rows($product) > 0)
                                {
                                    foreach($product as $item){
                                        ?>
                                            <tr>
                                                <td><?= $item['id']; ?></td>
                                                <td><?= $item['name']; ?></td>
                                                <td>
                                                    <img src="../uploads/products/<?= $item['image']; ?>" width="50px" height="50px" alt="<?= $item['name']; ?>">
                                                </td>
                                                <td><?= $item['status'] == '0'? "Visible" : "Hiden" ?></td>
                                                <td>
                                                    <a href="edit-product.php?id=<?= $item['id']; ?>" class="btn btn-sm btn-outline-success">Edit</a>
                                                    
                                                </td>
                                                <td>
                                                    
                                                    <button type="button" class="btn btn-sm btn-outline-danger delete_product_btn" value="<?= $item['id']; ?>" >Delete</button>
                                                    
                                                </td>
                                            </tr>
                                        <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>