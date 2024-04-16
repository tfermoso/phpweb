<?php
session_start();
include "prueba.php";
if (isset($_SESSION["user"])) {
    header("Location: user.php");
    exit();
}
if (isset($_POST["email"])) {

    include("conexion.php");
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "select * from usuarios where email=? and password=?";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1,$email);
    $stmt->bindParam(2,$password);
    $stmt->execute();
    if ($stmt->rowCount()>0) {
        $_SESSION["user"] = $email;
        $_SESSION["datos"] = "otros datos";
        header("Location: user.php");
        exit();
    } else {
        $error = "Email or password incorrect";
    }
}
?>
<?php include("./templates/header.php");?>

    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="assets/img/img1.webp" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form action="" method="post">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">Logo</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="email" name="email" id="form2Example17" class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example17">Email address</label>
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example27">Password</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                                            <?php
                                            if (isset($error)) {
                                                echo "<p>" . $error . "</p>";
                                            }
                                            ?>
                                        </div>

                                        <a class="small text-muted" href="#!">Forgot password?</a>
                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="register.php" style="color: #393f81;">Register here</a></p>
                                        <a href="#!" class="small text-muted">Terms of use.</a>
                                        <a href="#!" class="small text-muted">Privacy policy</a>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php include("./templates/footer.php");?>