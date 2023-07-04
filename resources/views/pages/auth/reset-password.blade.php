<!DOCTYPE html>

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Gianna - Admin Login</title>
    <meta charset="utf-8" />

    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css7b91.css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->



    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center">

    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Page bg image-->
        <style>
            body {
                background-image: url("{{ asset('assets/media/auth/bg10.jpg') }}");
            }

            [data-bs-theme="dark"] body {
                background-image: url('assets/media/auth/bg10-dark.jpg');
            }
        </style>
        <!--end::Page bg image-->

        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row justify-content-center flex-column-fluid">

            <!--begin::Body-->
            <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center align-items-center">
                <!--begin::Wrapper-->
                <div
                    class="bg-body d-flex flex-column flex-center rounded-4 w-md-500px h-md-500px align-items-center justify-content-center">
                    <!--begin::Content-->
                    <div class="d-flex flex-center flex-column align-items-stretch w-md-400px">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-center flex-column flex-column-fluid pb-10">

                            <!--begin::Form-->
                            <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form"
                                data-kt-redirect-url="" action="#">
                                <!--begin::Heading-->
                                <div class="text-center mb-11">
                                    <!--begin::Title-->
                                    <h1 class="text-dark fw-bolder mb-3">
                                        Forgot Password ?
                                    </h1>
                                    <!--end::Title-->

                                    <div class="text-gray-500 fw-semibold fs-6">
                                        Enter your email to reset your password.
                                    </div>
                                </div>
                                <!--begin::Heading-->

                                <!--begin::Input group--->
                                <div class="fv-row mb-8">
                                    <!--begin::Email-->
                                    <input type="text" placeholder="Email" name="email" autocomplete="off"
                                        class="form-control bg-transparent" />
                                    <!--end::Email-->
                                </div>


                                <!--end::Wrapper-->

                                <!--begin::Submit button-->
                                <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                                    <button type="button" id="kt_password_reset_submit" class="btn btn-primary me-4">

                                        <!--begin::Indicator label-->
                                        <span class="indicator-label">
                                            Submit</span>
                                        <!--end::Indicator label-->

                                        <!--begin::Indicator progress-->
                                        <span class="indicator-progress">
                                            Please wait... <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                        <!--end::Indicator progress-->
                                    </button>

                                    <a href="{{ route('auth.login') }}" class="btn btn-light">Cancel</a>
                                </div>
                                <!--end::Submit button-->


                            </form>
                            <!--end::Form-->

                        </div>
                        <!--end::Wrapper-->


                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->

    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/index.html";
    </script>

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->


    <!--begin::Custom Javascript(used for this page only)-->
    <script src="assets/js/custom/authentication/sign-in/general.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->

</body>
<!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/metronic8/demo1/authentication/layouts/overlay/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jul 2023 00:29:55 GMT -->

</html>
