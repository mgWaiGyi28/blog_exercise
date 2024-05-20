<?php include('component/header.php') ?>

    <div class="d-flex justify-content-center">
        <form class="col-md-4 border border-1 rounded shadow-lg px-5 py-3" action="" method="post">
            <h1 class="text-center py-4 text-success"><i class="bi bi-person-circle pe-3"></i>LOGIN</h1>
            <div class="mb-3">
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" >
            </div>
            <div class="mb-3">
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" >
            </div>
            <div class="text-center mb-3">
                <input name="login" value="Login" type="submit" class="btn btn-outline-success">
            </div>
            <div class="text-center">
                <p class="">No Account?<a href="register.php" class="">Register</a> Here</p>
            </div>
        </form>
    </div>

<?php include('component/footer.php') ?>