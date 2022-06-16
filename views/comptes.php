<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bijoux kadi & chen </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Add site Favicon -->
    <link rel="icon" href="views/assets/img/logo/jdid.png" sizes="32x32" />
    <link rel="icon" href="views/assets/img/logo/jdid.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="views/assets/img/logo/jdid.png" />
    <meta name="msapplication-TileImage" content="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-270x270.png" />
    <link rel="stylesheet" type="text/css" href="http://parsleyjs.org/src/parsley.css" />
    <!--=========CSS===============-->
    <link rel="stylesheet" href="views/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="views/assets/css/slick.css">
    <link rel="stylesheet" href="views/assets/css/ionicons.min.css">
    <link rel="stylesheet" href="views/assets/css/font.awesome.css">
    <link rel="stylesheet" href="views/assets/css/icofont.min.css">
    <link rel="stylesheet" href="views/assets/css/elegant-icons.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="views/assets/css/style.css">
</head>
<body>
    <!--header area end-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content text-center">
                        <h2>KADI & CHEN </h2>
                        <ul class="d-flex justify-content-center">
                            <li>
                                < <li><a href="index">Home</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------------------- Sign ---------------------->
    <div class="mt-5 col-sm-6 col-10 mx-auto mb-3" id="sign">
        <div class="card">
            <div>
                <ul class="nav nav-tabs">
                    <li class="nav-item col-6"><a href="#signin" type="button" class="nav-link tm-nav-link-border-right w-100 text-center active" id="btn_sign_in">CONNEXTION</a></li>
                    <li class="nav-item col-6"><a href="#signup" type="button" class="nav-link tm-no-border-right w-100 text-center" id="btn_sign_up">S'INSCRIRE</a></li>
                </ul>
            </div>
            <!---------------------- Sign In ---------------------->
            <div class="card-body" id="sign_in">
                <form class="mb-4" method="POST" action="operation" data-parsley-validate>
                    <h2 class="mb-5 mt-5 text-center">CONNEXTION</h2>
                    <div class="mb-4">
                        <label for="email" class="form-label">E-Mail:</label>
                        <input type="email" class="form-control" id="email" name="emailcon" required data-parsley-trigger="change" data-parsley-type="email">
                    </div>
                    <div class="mb-4">
                        <label for="pass" class="form-label">Mot De Passe:</label>
                        <input type="password" class="form-control" id="pass"name="passcon" required data-parsley-trigger="change">
                    </div>
                    <button type="submit" class="btn btn-primary mt-4" name="save">CONNEXION</button>
                </form>
            </div>
            <!---------------------- Sign Up ---------------------->
            <div class="card-body" id="sign_up">
                <form action="operation" method="POST" class="mb-4" data-parsley-validate>
                    <h2 class="mb-5 mt-5 text-center">Nouveau Client KADI & CHEN</h2>
                    <div class="mb-3">
                        <input class="form-control" hidden type="text" name="id" id="id">
                    </div>
                    <div class="mb-4">
                        <label for="nom" class="form-label">Nom Complet:</label>
                        <input type="text" class="form-control" name="nom" id="nom" required data-parsley-trigger="change">
                    </div>
                    <div class="mb-4">
                        <label for="tele" class="form-label">Numéro Téléphone:</label>
                        <input type="phone" class="form-control" id="tele" name="tele" data-parsley-type="number" required data-parsley-trigger="change">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">E-Mail:</label>
                        <input type="email" class="form-control" id="email" name="email" required data-parsley-trigger="change" data-parsley-type="email">
                    </div>
                    <div class="mb-4">
                        <label for="adrs" class="form-label">Address:</label>
                        <input type="text" class="form-control" id="adrs" name="adrs" required data-parsley-trigger="change">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Mot De Passe:</label>
                        <input type="password" class="form-control" id="anotherfield" name="password" required data-parsley-trigger="change">
                    </div>
                    <div class="mb-4">
                        <label for="pass" class="form-label">Confirmer Le Mot De Passe:</label>
                        <input type="password" class="form-control" id="pass" name="pass" data-parsley-equalto="#anotherfield" required data-parsley-trigger="change">
                    </div>
                    <div> <button type="submit" class="btn btn-primary mt-4" id="newclient" name="newclient">S'INSCRIRE</button></div>
            </div>
            <script>
                const btn_sign_in = document.getElementById('btn_sign_up');
                const btn_sign_up = document.getElementById('btn_sign_in');
                const sign_in = document.getElementById('sign_in');
                const sign_up = document.getElementById('sign_up');
                sign_up.style.display = "none";
                // Sign in && Sign up
                btn_sign_in.addEventListener('click', () => {
                    sign_up.style.display = "block";
                    sign_in.style.display = "none";
                    btn_sign_up.classList.remove('active');
                    btn_sign_in.classList.add('active');
                });
                btn_sign_up.addEventListener('click', () => {
                    sign_in.style.display = "block";
                    sign_up.style.display = "none";
                    btn_sign_in.classList.remove('active');
                    btn_sign_up.classList.add('active');
                });
            </script>
        </div>
    </div>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
</body>

</html>