<?php
class forms
{
    public function sign_up_form()
    {
?>
        <div class="form-wrapper row align-items-md-stretch">
            <div class="col-md-8">
                <form action="Auth/SignupAuth.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="FirstName" class="form-label">First Name: </label>
                        <input type="text" name="FirstName" class="form-control form-control-lg" id="fullname" placeholder="Enter your First Name" maxlength="50" autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="LastName" class="form-label">Last Name: </label>
                        <input type="text" name="LastName" class="form-control form-control-lg" id="fullname" placeholder="Enter your Last Name" maxlength="50" autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address: </label>
                        <input type="email" name="Email" class="form-control form-control-lg" id="email" placeholder="Enter your email" maxlength="50">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username: </label>
                        <input type="text" name="Username" class="form-control form-control-lg" id="email" placeholder="Enter your username" maxlength="50">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone number: </label>
                        <input type="text" name="Phone" class="form-control form-control-lg" id="email" placeholder="Enter your phone number" maxlength="50">
                    </div>
                    <div class="mb-3">
                        <label for="Password" class="form-label">Password: </label>
                        <input type="password" name="Password" class="form-control form-control-lg" id="email" placeholder="Enter your password" maxlength="50">
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" name="signup" type="submit">Sign Up </button>
                    </div>
                </form>
            </div>
        <?php
    }
    public function Login()
    {
        ?>
            <form action="Auth/loginAuth.php" method="post" enctype="multipart/form-data" class=" form-wrapper ">
                <div class=" mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    <?php

    }
}
