<!doctype html>
<html lang="es" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Registrarse | Crispin - Plantilla de Administración y Panel de Control</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Plantilla Premium Multipropósito para Panel de Administración" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- Icono de la app -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Script de configuración de la plantilla -->
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
                        <div class="card overflow-hidden m-0">
                            <div class="row justify-content-center g-0">
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

                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4">
                                        <div>
                                            <h5 class="text-primary">Registrarse</h5>
                                            <p class="text-muted">Obtén tu cuenta gratuita en Crispin ahora.</p>
                                        </div>

                                        <div class="mt-4">
                                            <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate>
                                                @csrf

                                                <!-- Nombre -->
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Nombre <span class="text-danger">*</span></label>
                                                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Ingresa tu nombre" value="{{ old('name') }}" required autofocus>
                                                    @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <!-- Correo electrónico -->
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Correo electrónico <span class="text-danger">*</span></label>
                                                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Ingresa tu correo electrónico" value="{{ old('email') }}" required>
                                                    @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <!-- Contraseña -->
                                                <div class="mb-3">
                                                    <label for="password" class="form-label">Contraseña</label>
                                                    <div class="position-relative auth-pass-inputgroup">
                                                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Ingresa tu contraseña" required>
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none shadow-none text-muted password-addon" type="button">
                                                        </button>
                                                        @error('password')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <!-- Confirmar contraseña -->
                                                <div class="mb-3">
                                                    <label for="password_confirmation" class="form-label">Confirmar contraseña</label>
                                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirma tu contraseña" required>
                                                </div>

                                                <div class="mt-4">
                                                    <button class="btn btn-success w-100" type="submit">Registrarse</button>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="mt-5 text-center">
                                            <p class="mb-0">¿Ya tienes una cuenta? <a href="{{ route('login') }}" class="fw-semibold text-primary text-decoration-underline">Iniciar sesión</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- fin card -->
                    </div>
                    <!-- fin col -->

                </div>
                <!-- fin row -->
            </div>
            <!-- fin container -->
        </div>
        <!-- fin auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0">&copy;
                                <script>document.write(new Date().getFullYear())</script> Crispin. <i class="mdi mdi-heart text-danger"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- fin Footer -->
    </div>
    <!-- fin auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- inicialización de la validación -->
    <script src="assets/js/pages/form-validation.init.js"></script>
    <!-- inicialización de la creación de contraseñas -->
    <script src="assets/js/pages/passowrd-create.init.js"></script>
</body>

</html>
