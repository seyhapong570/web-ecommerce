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
                    $category = getByID("categories", $id);
                    if(mysqli_num_rows($category) > 0)
                    {
                        $data = mysqli_fetch_array($category);
                        ?>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Edit category</h4>
                                </div>
        
                                <div class="card-body">
                                    <form action="code.php" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="hidden" name="category_id" value="<?=$data['id']; ?>">
                                                <label for="">Name</label>
                                                <input type="text" name="name" value="<?= $data['name']; ?>" placeholder="Enter Category Name" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Slug</label>
                                                <input type="text" name="slug" value="<?= $data['slug']; ?>" placeholder="Enter Slug" class="form-control">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="">Desctiption</label>
                                                <textarea row="3" name="description" placeholder="Enter Description" class="form-control"><?= $data['name']; ?></textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="">Upload image</label>
                                                <input type="file" name="image" class="form-control">
                                                <label for="">Current image</label>
                                                <input type="hidden" name="old_image" value="<?= $data['image']; ?>">
                                                <img src="../uploads/<?= $data['image']; ?>" height="50px" width="50px" alt="">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="">Meta tile</label>
                                                <input type="text" name="meta_title" value="<?= $data['meta_title']; ?>" placeholder="Enter Meta Title" class="form-control">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="">Meta Description</label>
                                                <textarea row="3" name="meta_description" placeholder="Enter Meta Description" class="form-control"><?= $data['meta_description']; ?></textarea>
                                                
                                            </div>
                                            <div class="col-md-12">
                                                <label for="">Mete Keywords</label>
                                                <textarea row="3" name="meta_keywords" placeholder="Enter meta keywords" class="form-control"><?= $data['meta_keywords']; ?></textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Status</label>
                                                <input type="checkbox" <?= $data['status'] ? "checked":"" ?> name="status">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Popular</label>
                                                <input type="checkbox" <?= $data['popular'] ? "checked":"" ?> name="popular">
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary" name="update_category_btn" >Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        <?php
                    }
                    else
                    {
                        echo "Category not found";
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