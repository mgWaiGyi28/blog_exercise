<?php include('component/header.php') ?>

    <form action="" method="post">
        <h1 class="mb-3">Edit Your Blog</h1>
        <div class="mb-3">
            <label for="title">Title: </label>
            <input type="text" class="form-control" placeholder="Describe Your Article Title....">
        </div>
        <div class="mb-3">
            <label for="about">Title: </label>
            <textarea name="about" id="about" rows="5" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="image">Image: </label>
            <input type="file" class="form-control" name="image" value="No File Selected">
        </div>
        <input type="submit" class="btn btn-outline-success">
        <div class="mb-3">
            <img src="" alt="Your Image Here" class="object-fit-cover">
        </div>
    </form>

<?php include('component/footer.php') ?>