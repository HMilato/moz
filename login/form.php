
<div class="container modal fade " id="mylogin">
        <div class="row justify-content-center ">
            <div class="col-lg-5 bg-light mt-5 px-0">
                <h3 class="text-center text-light bg-secondary p-3"> Login</h3>
               
                <form action=" <?= $_SERVER['PHP_SELF'] ?>" method="post" class="p-4">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control form-control-lg" placeholder="Username" required>
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <input type="text" name="password" class="form-control form-control-lg" placeholder="Password" required>
                    </div>
                    <div class="form-group lead mb-3">
                        <label for="userType">Eu sou:</label>
                        <input type="radio" name="userType" value="student" class="custom-radio" required>&nbsp;Estudante |
                        <input type="radio" name="userType" value="teacher" class="custom-radio" required>&nbsp;Instrutor |
                        <input type="radio" name="userType" value="admin" class="custom-radio" required>&nbsp;Admin |
                    </div>
                    <div class="form-group d-grid gap-2 ">
                        <input type="submit" name="login" class="btn btn-primar" style="background-color: #3498DB">
                    </div>
                    <h5 class="text-danger text-center"><?= $msg; ?></h5>

                </form>
            </div>
        </div>
    </div>