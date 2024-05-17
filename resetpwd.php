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
    .input_div{
        top: 15% !important;
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




            </div>



        </div>


    </div>

    <div class="container input_div">
        <div class="signin_img_div">
            <img class="lock_img" src="./assets/img/password.png" alt="">
        </div>
        <div class="col forgot_psw_txt" style="text-align: center;">
            <p class="psw">Reset Password</p>
        </div>
        <div class="col forgot_psw_txt" style="text-align: center;">
            <p class="psw_txt">
                Set the new password for your account so<br>
                you can login and access all the features.
            </p>
        </div>
        <div class="form_div forgot_psw_txt">
            <form action="" style="width: 100%;">
                <div class="col select_input" style="position: relative;">
                    <input id="password" class="sign_in_select" type="password" placeholder="Password">
                    <span id="togglePassword" class="password-toggle-icon"><i class="fas fa-eye-slash"></i></span>
                </div>

                <div class="col select_input" style="position: relative;">
                    <input id="confirm_password" class="sign_in_select" type="password" placeholder="Confirm Password">
                    <span id="confirm_togglePassword" class="password-toggle-icon"><i class="fas fa-eye-slash"></i></span>
                </div>

                <div class="col select_input">
                    <button class="submit_btn_signin sign_in_select" type="submit">Send <svg class="right_icon" xmlns="http://www.w3.org/2000/svg" width="24" height="20" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                        </svg></button>


                </div>





            </form>
        </div>

    </div>

    <div class="col bottom_img">
        <img class="below_img_sign" src="./assets/img/sign_water.png">
    </div>



    <script defer src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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