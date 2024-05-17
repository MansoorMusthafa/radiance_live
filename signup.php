<!doctype html>
<html lang="en" class="h-100">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>GoWatr Smart Water Management System</title>

    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="manifest" href="manifest.json" />

    <link rel="icon" href="assets/img/fav-logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="assets/css/style.css" rel="stylesheet" id="style">
    <script src='api/fetch.js'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<style>
    .p-viewer {
        position: relative;
        margin: -42px 16px;
        float: right;
    }

    .fa-eye {
        color: #0c4880;
        cursor: pointer;
        font-size: 18px;
    }

    ::placeholder {

        color: #dfdfdf !important;
        font-size: 14px !important;
    }
</style>


<!-- script to choose dropdown -->
<script>
    function doorno(val) {
        $.ajax({
            type: "POST",
            url: "drop.php",
            data: 'flat=' + val,
            success: function(data) {
                $("#door_no").html(data);
            }
        });
    }
</script>

<!-- script to choose dropdown -->



<body class="body-scroll" data-page="signin" style="overflow: hidden;">
    <div class="blob_div">
        <img class="blob_img_1" src="./assets/img/blob.png">
        <img class="blob_img_2" src="./assets/img/blob.png">
        <!-- <img class="blob_img_2" src="./assets/img/blob.png"> -->
    </div>

    <div class="container-fluid header sign_header">

        <div class="row ">

            <div class="col-sm-12 header_content">
                <div class="col left_right">
                    <img class="gw-logo gowatr_logo" src="assets/img/logo.png">
                </div>
                <div class="col-sm-6 flat_name left_right">
                    <p>Sign Up</p>
                </div>
                <div class="col left_right">
                    <img class="gw-logo gowatr_logo" src="assets/img/radiance_1.png">
                </div>



            </div>



        </div>


    </div>

    <div class="container" style="margin-top: 20px;">

        <div class="form_div">
            <form action="" style="width: 100%;">

                <div class="col select_input" style="position: relative;">
                    <input class="form-control sign_in_select type_input" placeholder="User Name" type="text">
                    <span class="signup-toggle-icon">
                        <svg class="signup_color" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                        </svg>
                    </span>

                </div>
                <div class="col select_input">
                    <select class="form-select sign_in_select" aria-label="Default select example">
                        <option selected>Chennai</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col select_input" style="position: relative;">
                    <input class="form-control sign_in_select type_input" placeholder="Mobile Number" type="text">
                    <span class="signup-toggle-icon">
                        <svg class="signup_color" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                        </svg>
                    </span>

                </div>
                <div class="col select_input" style="position: relative;">
                    <input class="form-control sign_in_select type_input" placeholder="Email" type="text">
                    <span class="signup-toggle-icon">
                        <svg class="signup_color" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                        </svg>
                    </span>

                </div>
                <div class="col select_input" style="position: relative;">
                    <input id="password" class="sign_in_select" type="password" placeholder="Password">
                    <span id="togglePassword" class="password-toggle-icon"><i class="fas fa-eye-slash"></i></span>
                </div>

                <div class="col select_input" style="position: relative;">
                    <input id="confirm_password" class="sign_in_select" type="password" placeholder="Confirm Password">
                    <span id="confirm_togglePassword" class="password-toggle-icon"><i class="fas fa-eye-slash"></i></span>
                </div>

                <div class="col select_input">
                    <button class="submit_btn_signin sign_in_select" type="submit">Sign in</button>

                </div>


                <div class="col select_input">
                    <a class="already_sign" href="#"> Already have an account ? <a href="signin.php" class="signup_span">Sign in</a></a>
                </div>



            </form>
        </div>
        <!-- <div class="col bottom_img">
            <img class="below_img_sign" src="./assets/img/sign_water.png">
        </div> -->
    </div>





    <script defer src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script src="https://kit.fontawesome.com/cd2d9c3abd.js" crossorigin="anonymous"></script>
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye icon
            this.querySelector('i').classList.toggle('fa-eye-slash');
            this.querySelector('i').classList.toggle('fa-eye');
        });
    </script>
    <script>
        const togglePassword2 = document.querySelector('#confirm_togglePassword');
        const password2 = document.querySelector('#confirm_password');

        togglePassword2.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
            password2.setAttribute('type', type);
            // toggle the eye icon
            this.querySelector('i').classList.toggle('fa-eye-slash');
            this.querySelector('i').classList.toggle('fa-eye');
        });
    </script>

</body>

</html>