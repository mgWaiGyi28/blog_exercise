<?php include 'component/header.php' ?>

    <div class="d-flex justify-content-center">
        <form class="col-md-4 border border-1 rounded shadow-lg px-5 py-2" action="" method="post">
                <h1 class="text-center py-4 text-success"><i class="bi bi-person-circle pe-3"></i>Register</h1>
                <div class="mb-3">
                    <input name="name" type="name" class="form-control" placeholder="Name" >
                </div>
                <div class="mb-3">
                    <input name="email" type="email" class="form-control" placeholder="Email Address">
                </div>
                <div class="mb-3">
                    <input name="password" type="password" class="form-control" placeholder="Password" >
                </div>
                <div class="mb-3">
                    <input name="cpassword" type="password" class="form-control" placeholder="Confirm Password" >
                </div>
                <div class="text-center mb-3">
                    <input name="register" type="submit" class="btn btn-outline-success" value="Submit">
                </div>
                <div class="text-center">
                    <p class="">Already have account? <a href="login.php" class="">Login</a> Here</p>
                </div>
            </form>
    </div>

<?php include 'component/footer.php' ?>