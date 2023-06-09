<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="apple-touch-icon" sizes="180x180" href="../../img/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../img/fav/favicon-16x16.png">
    <link rel="manifest" href="../../img/fav/site.webmanifest">
    
    <title>Register</title>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/materialize.min.css">
    <link rel="stylesheet" href="../../css/tooplate.css">
</head>

<body id="register">
    <div class="container">
        <div class="row tm-register-row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 tm-register-col-l">
                <form action="" method="post">
                    <div class="mb-2">
                        <label class="mr-4">
                            <input class="with-gap" name="title" type="radio" value="mr" />
                            <span>ing</span>
                        </label>
                        <label class="mr-4">
                            <input class="with-gap" name="title" type="radio" value="ms" />
                            <span>Doc</span>
                        </label>
                        <label>
                            <input class="with-gap" name="title" type="radio" value="mrs" />
                            <span>Docta</span>
                        </label>
                    </div>

                    <div class="input-field">
                        <input placeholder="Nombre" id="first_name" name="first_name" type="text" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Apellido" id="last_name" name="last_name" type="text" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Email" id="email" name="email" type="text" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Celular" id="mobile" name="mobile" type="text" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Correo" id="address" name="address" type="text" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Ciudad" id="district" name="district" type="text" class="validate">
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 pl-0 tm-pr-xs-0">
                            <select name="city">
                                <option value="-">Ciudad</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Xela">Xela</option>

                            </select>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 pr-0 tm-pl-xs-0">
                            <div class="input-field">
                                <input placeholder="Codigo postal" id="zipcode" name="zipcode" type="text" class="validate">
                            </div>
                        </div>
                    </div>
                    <div class="text-right mt-4">
                        <button type="Enviar" class="waves-effect btn-large btn-large-white px-4 black-text">SUBMIT</button>
                    </div>
                </form>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 tm-register-col-r">
                <header class="mb-5">
                    <h3 class="mt-0 text-white">REGISTER</h3>
                    <p class="grey-text">BlaBlablabla</p>
                    <p class="grey-text">aaaaaaaaaaaaaaaaaaaaaaaaaa
                    </p>
                </header>

            </div>
        </div>
        <footer class="row tm-mt-big mb-3">
            <div class="col-xl-12">
                <p class="text-center grey-text text-lighten-2 tm-footer-text-small">
                    Copyright &copy; 2023 Company Name 
                
                </p>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script>
        $(document).ready(function () {
            $('select').formSelect();
        });
    </script>
</body>

</html>