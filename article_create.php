<?php 
    $title =htmlspecialchars(trim($_POST['title']));
    $about = htmlspecialchars(trim($_POST['about']));
    $image = $_FILES['image'];
    $error = [];

    empty($title) ? ($error[] = "Please Enter Your Title") : "";
    empty($about) ? ($error[] = "Please Enter Your Article") : "";
    is_uploaded_file($image['tmp_name']) ? '' : ($error[] = "Please Insert Your Image");

?> 
<?php include('component/header.php') ?>

    <form action="" method="post" enctype="multipart/form-data" >
        <h1 class="mb-3">New Blog</h1>

        <div class="">
            <ul class="text-danger">
                <?php
                    foreach($error as $e){
                        echo "<li>".$e."</li>";
                    }

                ?>
            </ul>
        </div>

        <div class="mb-3">
            <label for="title">Title: </label>
            <input name="title" type="text" class="form-control" placeholder="Describe Your Article Title....">
        </div>
        <div class="mb-3">
            <label for="about">Title: </label>
            <textarea name="about" id="about" rows="5" class="form-control"></textarea>
        </div>
        <div class="my-3">
            <label for="image">Image:</label>
            <input type="file" id="image" name="image" class="form-control">
        </div>
        <input type="submit" name="add-article" class="btn btn-outline-success">
    </form>
<?php include('component/footer.php') ?>