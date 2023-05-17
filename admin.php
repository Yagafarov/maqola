<?php
include('./config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link rel="stylesheet" href="./assets/bootstrap-5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <div>
        <div class="container">
            <div class="modal-header my-4">
                <h5 class="modal-title">Admin panel</h5>
                <a href="./index.php" type="button" class="btn btn-danger">Chiqish</a>
            </div>
            <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                        type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Post</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                        type="button" role="tab" aria-controls="profile-tab-pane"
                        aria-selected="false">Yangilik</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                        type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Admin</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane"
                        type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">Xabar</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                    tabindex="0">
                    <div class="d-flex align-items-start py-5">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                aria-selected="true">Yaratish</button>
                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile" type="button" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">Ko'rish</button>
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-settings" type="button" role="tab"
                                aria-controls="v-pills-settings" aria-selected="false">Tahrirlash</button>
                        </div>
                        <div class="tab-content w-100" id="v-pills-tabContent">
                            <!-- postlar yaratish-->

                            <div class=" tab-pane fade show active " id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab" tabindex="0">
                                
                                <form method="POST" action="addpost.php">
    <div class="row bg-light p-4">
        <h5>Muallif</h5>
        <div class="col-md-4 mb-3">
            <input type="text" class="form-control" placeholder="Ism" name="muallif">
        </div>
        <div class="col-md-4 mb-3">
            <input type="text" class="form-control" placeholder="Familiya" name="familiya">
        </div>
        <div class="col-md-4 mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email">
        </div>
    </div>
    <div class="row bg-light p-4">
        <h5>Post</h5>
        <div class="col-md-12 mb-3">
            <input type="text" class="form-control" placeholder="Mavzu" name="mavzu">
        </div>
        <div class="col-md-12 mb-3">
            <textarea name="content" placeholder="Matn kiriting" class="form-control" rows="3"></textarea>
        </div>
        <div class="col-md-6 mb-3">
            <button type="submit" name="sendM" id="sendM" class="btn btn-primary">Junatish</button>
        </div>
    </div>
</form>

                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab" tabindex="0">...</div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                    tabindex="0">
                    <div class="d-flex align-items-start py-5">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                aria-selected="true">Yaratish</button>
                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile" type="button" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">Ko'rish</button>
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-settings" type="button" role="tab"
                                aria-controls="v-pills-settings" aria-selected="false">Tahrirlash</button>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab" tabindex="0">...</div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab" tabindex="0">...</div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
                        </div>
                    </div>
                </div>
                <!-- adminlar -->
                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                    tabindex="0">
                    <ul class="nav nav-pills my-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Ko'rish</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Tahrirlash</button>
                        </li>

                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab" tabindex="0">
                            <!--adminlar -> ko'rish  -->
                            <figure class="text-center">
                                <blockquote class="blockquote">
                                  <p>Tizimda mavjud adminlar</p>
                                </blockquote>
                                <figcaption class="blockquote-footer">
                                  Ularning xususiyatlari haqida <cite title="Source Title"> batafsil</cite> ma'lumot olishingiz mumkin
                                </figcaption>
                              </figure>
                            <table class="table table-hover table-striped w-100 m-auto">
                                <thead>
                                  <tr class="">
                                    <th scope="col">#</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Parol</th>
                                    <th scope="col" class="text-end">
                                        Xossa
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $sql = "SELECT * FROM adminlar";
                                    $result = mysqli_query($ulanish,$sql);

                                    while($data = $result->fetch_row()){
                                        echo '
                                        <tr>
                                             <th scope="row">'.$data[0].'</th>
                                             <td>'.$data[1].'</td>
                                             <td>'.$data[2].'</td>
                                             <td class="text-end"> 
                                                <a href="#" class="btn btn-primary">Tahrirlash</a>
                                               <a href="#" class="btn btn-danger">O`chirish</a>
                                             </td>
                                    
                                         </tr>
                                        ';
                                    }
                                    
                                    ?>
                                  
                                </tbody>
                              </table>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab" tabindex="0">...</div>
                    </div>
                </div>
                <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab"
                    tabindex="0">...</div>
            </div>

        </div>
    </div>

    <script src="./assets/bootstrap-5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>