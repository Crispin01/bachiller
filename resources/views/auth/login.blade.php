<!doctype html>
<html lang="es" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="utf-8" />
    <title>Iniciar sesión | Plantilla Crispin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Plantilla Premium Multipropósito para Panel de Administración" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- Icono de la app -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Configuración de la plantilla Js -->
    <script src="assets/js/layout.js"></script>
    <!-- CSS de Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- CSS de Iconos -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- CSS de la app -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- CSS personalizado -->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Contenedor de la página de autenticación -->
    <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-overlay"></div>
        <!-- Contenido de la página de autenticación -->
        <div class="auth-page-content overflow-hidden pt-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card overflow-hidden">
                            <div class="row g-0">
                                <!-- Cabecera o sección lateral -->
                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4 auth-one-bg h-100">
                                        <div class="bg-overlay"></div>
                                        <div class="position-relative h-100 d-flex flex-column">
                                            <div class="mb-4">
                                                <a href="/" class="d-block">
                                                    <img src="assets/images/logo-light1.png" alt="Logo" height="18">
                                                </a>
                                            </div>
                                            <div class="mt-auto">
                                                <div class="mb-3">
                                                    <i class="ri-double-quotes-l display-4 text-success"></i>
                                                </div>
                                                <p class="text-white-50">¡Bienvenido a nuestra aplicación!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Formulario de Inicio de sesión -->
                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4">
                                        <div>
                                            <h5 class="text-primary">¡Bienvenido de nuevo!</h5>
                                            <p class="text-muted">Inicia sesión en tu cuenta</p>
                                        </div>

                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <!-- Correo electrónico -->
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Correo electrónico</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                       placeholder="Ingresa tu correo electrónico" value="{{ old('email') }}" required autofocus>
                                                @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Contraseña -->
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Contraseña</label>
                                                <input type="password" class="form-control" id="password" name="password"
                                                       placeholder="Ingresa tu contraseña" required>
                                                @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Recordarme -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="remember" name="remember">
                                                <label class="form-check-label" for="remember">Recuérdame</label>
                                            </div>

                                            <!-- Botón de inicio de sesión -->
                                            <div class="mt-4">
                                                <button class="btn btn-success w-100" type="submit">Iniciar sesión</button>
                                            </div>

                                            <!-- Olvidaste tu contraseña -->
                                            <div class="mt-4 text-end">
                                                @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}" class="text-muted">¿Olvidaste tu contraseña?</a>
                                                @endif
                                            </div>
                                        </form>

                                        <!-- Registro -->
                                        <div class="mt-5 text-center">
                                            <p>No tienes una cuenta?
                                                <a href="{{ route('register') }}" class="fw-semibold text-primary text-decoration-underline">Regístrate</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fin del formulario -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin del contenido -->

        <!-- Pie de página -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0">&copy; <script>document.write(new Date().getFullYear())</script> Crispin. <i class="mdi mdi-heart text-danger"></i></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Fin del pie de página -->
    </div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>
</body>

</html>
