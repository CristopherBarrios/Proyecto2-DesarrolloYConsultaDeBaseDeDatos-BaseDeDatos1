<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hospital</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/materialize.min.css">
    <link rel="stylesheet" href="../../css/tooplate.css">
</head>

<body id="application">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12  mx-auto">
                <header class="mt-5 mb-5 text-center">
                    <h3>Hospital</h3>
                    <p class="tm-form-description">Ejemplos para ingresar algo</p>
                </header>
                <form action="" method="post" enctype="multipart/form-data" class="tm-form-white tm-font-big">
                    <div class="tm-bg-white tm-form-pad-big">
                        <div class="form-group mb-5">
                            <label for="name" class="black-text mb-4 big">Nombre Completo</label>
                            <input id="name" name="name" type="text" class="validate tm-input-white-bg">
                        </div>
                        <div class="form-group mb-5">
                            <label for="email" class="black-text mb-4 big">Email</label>
                            <input id="email" name="email" type="email" class="validate tm-input-white-bg">
                        </div>
                        <div class="form-group mb-5">
                            <label for="address1" class="black-text mb-4 big">Correos</label>
                            <input id="address1" name="address1" type="text" class="validate tm-input-white-bg mb-4">
                            <input id="address2" name="address2" type="text" class="validate tm-input-white-bg mt-1">
                        </div>
                        <div class="row">
                            <div class="form-group col-xl-6 col-lg-6 col-md-6 col-12 pl-0 tm-form-group-2-col tm-form-group-2-col-l">
                                <label for="city" class="black-text mb-4 big">Ciudad</label>
                                <select name="city">
                                    <option value="-">Ciudad</option>
                                    <option value="Guataemala">Guatemala</option>
                                    <option value="Xela">Xela</option>
                                </select>
                            </div>
                            <div class="form-group col-xl-6 col-lg-6 col-md-6 col-12 pr-0 tm-form-group-2-col tm-form-group-2-col-r">
                                <label for="zipcode" class="black-text mb-4 big">Codigo postal</label>
                                <input id="zipcode" name="zipcode" type="text" class="validate tm-input-white-bg mb-4">
                            </div>
                        </div>

                        <div class="form-group mb-5">
                            <label for="gender" class="black-text mb-4 big">Genero</label>
                            <div>
                                <label class="mr-4">
                                    <input class="with-gap" name="gender" type="radio" value="m" />
                                    <span>Hombre</span>
                                </label>
                                <label>
                                    <input class="with-gap" name="gender" type="radio" value="f" />
                                    <span>Mujer</span>
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group mb-2 col-xl-6 col-lg-6 col-md-6 col-12 pl-0 tm-form-group-2-col tm-form-group-2-col-l">
                                <label for="expectedsalary" class="black-text mb-4 big">Salario</label>
                                <select name="expectedsalary">
                                    <option value="-">Select</option>
                                    <option value="1000">$1,000 - 1,999</option>
                                    <option value="2000">$2,000 - 2,999</option>
                                    <option value="3000">$3,000 - 3,999</option>
                                </select>
                            </div>
                            <div class="form-group mb-2 col-xl-6 col-lg-6 col-md-6 col-12 pr-0 tm-form-group-2-col tm-form-group-2-col-r">
                                <label for="file" class="black-text mb-4 big">Subir Archivo</label>
                                <div class="file-field input-field">
                                    <div class="btn btn-white">
                                        <span>Buscar...</span>
                                        <input type="file" name="browse">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" name="file" type="text" placeholder="your-file.pdf">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="message" class="black-text mb-4 big">Envianos Mensaje</label>
                            <textarea class="p-3" name="message" id="message" cols="30" rows="4"></textarea>
                        </div>

                    </div>
                    <div class="text-center mt-5">
                        <button type="submit" class="waves-effect btn-large btn-large-white">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        <footer class="row tm-mt-big mb-3">
            <div class="col-xl-12 text-center">
                <p class="d-inline-block tm-bg-black white-text py-2 tm-px-5">
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