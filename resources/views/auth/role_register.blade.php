<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register - Role</title>
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0" id="role_register">
                            <div class="card-body">
                                <h2 class="text-center"><span class="fw-lighter">Marketplace</span>.<span
                                        class="text-secondary fw-bolder">Katering</span>
                                </h2>
                                <br>
                                <p class="text-center">Daftar Sebagai</p>

                                <div class="d-grid gap-2">
                                    <a href="{{ route('register-customer') }}" type="button"
                                        class="btn btn-primary btn-lg m-1">Kantor
                                        (Customer)</a>
                                    <a href="{{ route('register-merchant') }}" type="button"
                                        class="btn btn-outline-secondary btn-lg m-1">Catering
                                        (Merchant)</a>
                                </div>

                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="fs-4 mb-0 fw-bold">Sudah memiliki Akun?</p>
                                    <a class="text-primary fw-bold ms-2" href="{{ route('login') }}">Sign In</a>
                                </div>
                                <div class="mb-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
