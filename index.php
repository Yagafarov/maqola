<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/bootstrap-5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Anodra</title>
</head>

<body>
    <a href="#wrapper" class="btn btn-success position-fixed" style="bottom:5%;right:3%;">!</a>
    <main class="wrapper" id="wrapper">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg ">
                <div class="container">
                    <a class="navbar-brand text-primary font-weight-bold" href="#">Anodra</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#wrapper">Asosiy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#news">Yangiliklar</a>
                            </li>
                            <li class="nav-item">
                                <a href="#posts" class="nav-link">Postlar</a>
                            </li>
                            <li class="nav-item">
                                <a href="#contact" class="nav-link">Aloqa</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Qidirish" aria-label="Search">
                            <button class="btn btn-outline-primary" type="submit">Qidirish</button>
                        </form>
                    </div>
                </div>
            </nav>
            <div class="container asosiy ">
                <div>
                    <h1 class="text-uppercase ">
                        Dunyodagi eng mashxur postlar!
                    </h1>
                    <p>
                    "Sizning biznesingizni kengaytirish va ko'p mijozlarni jalb qilishga yordam beradigan ajoyib xizmatimizga xush kelibsiz!
                    </p>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Boshlash</a>
                        <div class="position-absolute" style="top:10%; left:9%;">
                        <?php
                                    if (isset($_POST["signIn"])) {
                                        $lUser = $_POST['recipient-name'];
                                        $lPass = $_POST['pass'];
                                        require_once "./config.php";

                                        $sql = "SELECT * FROM adminlar WHERE aUsername = '$lUser' OR aPassword = '$lPass'";
                                        $result = mysqli_query($ulanish,$sql);

                                        $user = mysqli_fetch_array($result,MYSQLI_ASSOC);
                                        if ($user) {
                                            if($lPass == $user["aPassword"] AND $lUser == $user['aUsername']){
                                                header("Location: admin.php");
                                                die();
                                            }else{
                                                echo "<div class='alert alert-danger'>Parol noto'g'ri</div>";
                                            }
                                        }else{
                                            echo "<div class='alert alert-danger'>Bunday foydalanuvchi tizimga mavjud emas<br><a href='./index.php'>yangilash</a></div>";
                                        }
                                    }
                                    ?>
                        </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class=" w-100 fs-5 text-center">Tizimga kirish</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div>
                                   
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="index.php">
                                        <div class="mb-3">
                                            <label for="recipient-name"
                                                class="col-form-label  w-100  text-start">Username:</label>
                                            <input type="text" name="recipient-name" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="pass" class="col-form-label  w-100  text-start">Parol:</label>
                                            <input type="password" class="form-control" name="pass" id="pass">
                                        </div>
                                        <div class="mb-3 form-check text-start">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Yodda saqlash
                                            </label>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Chiqish</button>
                                            <button type="submit" class="btn btn-primary"  name="signIn">Kirish</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <section id="news">
        <div class="container pt-3">
            <blockquote class="blockquote">
                <h3 class="mb-3">Yangiliklar</h3>
                <footer class="blockquote-footer">Eng so'ngi yangiliklar bilan <cite
                        title="Source Title">tanishing</cite></footer>
            </blockquote>
            <div class="row mt-5">
            <?php
            require_once "./config.php";
                                    $sql = "SELECT * FROM yangiliklar";
                                    $result = mysqli_query($ulanish,$sql);

                                    while($data = $result->fetch_row()){
                                        echo '
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <div class="card mb-3" style="max-width: 540px;">
                                                <div class="row g-0">
                                                    <div class="col-md-4 p-3">
                                                        <img src="./assets/images/rasm.jpg"
                                                            class="img-fluid w-100 h-100 object-fit-cover border rounded" alt="...">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h5 class="card-title">'.$data[1].'</h5>
                                                            <p class="card-text">'.$data[2].'</p>
                                                            <p class="card-text"><small class="text-body-secondary">Anodra
                                                            </small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        ';
                                    }
                                    
                                    ?>
                
            </div>
        </div>
    </section>
    <section id="posts">
        <div class="container pt-3">
            <blockquote class="blockquote">
                <h3 class="mb-3">Postlar</h3>
                <footer class="blockquote-footer">Eng yaxshi postlar bilan <cite title="Source Title">tanishing</cite>
                </footer>
            </blockquote>
            <div class="row">
            <?php
            require_once "./config.php";
                                    $sql = "SELECT * FROM postlar";
                                    $result = mysqli_query($ulanish,$sql);

                                    while($data = $result->fetch_row()){
                                        echo '
                                        <div class="col-sm-4 mb-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">'.$data[4].'</h5>
                                                    <p class="card-text text-small" >'.$data[5].'
                                                    </p>
                                                    <a href="#" class="btn btn-primary">Batafsil</a>
                                                </div>
                                            </div>
                                        </div>
                                        ';
                                    }
                                    
                                    ?>
                

            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container pt-md-3">
            <blockquote class="blockquote">
                <h3 class="mb-3">Aloqa</h3>
                <footer class="blockquote-footer">Biz bilan bog'lanish <cite title="Source Title">uchun</cite>
                </footer>
            </blockquote>
            <form class="row g-3 needs-validation mt-5 shadow p-5" novalidate>
                <div class="col-md-6 position-relative">
                    <label for="validationTooltip01" class="form-label">First name</label>
                    <input type="text" class="form-control" id="validationTooltip01" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-6 position-relative">
                    <label for="validationTooltip02" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="validationTooltip02" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12 position-relative">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <div class="invalid-tooltip">
                        Please provide a valid zip.
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>
        </div>
    </section>
    <footer class="text-center text-white">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Section: Iframe -->
            <div class="">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="ratio ratio-16x9">
                            <iframe class="shadow-1-strong rounded" src="https://www.youtube.com/embed/yJXuvo48I7Q"
                                title="YouTube video player" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Section: Iframe -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3 bg-primary">
            © 2023 Copyright:
            <a class="text-white" href="#">Anodra</a>
        </div>
        <!-- Copyright -->
    </footer>
    <script src="./js/main.js"></script>
    <script src="./assets/bootstrap-5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>