@extends('layouts.master')

@section('pageTitle', $pageTitle)

@section('content')
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">

        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">

            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">



                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Settings
                    </h1>
                    <!--end::Title-->


                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="index.html" class="text-muted text-hover-primary">
                                Home </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            eCommerce </li>
                        <!--end::Item-->

                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
               
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->

        <!--begin::Content-->
        <div id="kt_app_content" class="app-content  flex-column-fluid ">


            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container  container-xxl ">
                <!--begin::Card-->
                <div class="card card-flush">
                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin:::Tabs-->
                        <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-transparent fs-4 fw-semibold mb-15">
                            <!--begin:::Tab item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary d-flex align-items-center pb-5 active"
                                    data-bs-toggle="tab" href="#kt_ecommerce_settings_general">
                                    <i class="ki-duotone ki-home fs-2 me-2"></i> General
                                </a>
                            </li>
                            <!--end:::Tab item-->

                            <!--begin:::Tab item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary d-flex align-items-center pb-5" data-bs-toggle="tab"
                                    href="#kt_ecommerce_settings_store">
                                    <i class="ki-duotone ki-shop fs-2 me-2"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span><span class="path5"></span></i> Store
                                </a>
                            </li>
                            <!--end:::Tab item-->

                            <!--begin:::Tab item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary d-flex align-items-center pb-5" data-bs-toggle="tab"
                                    href="#kt_ecommerce_settings_localization">
                                    <i class="ki-duotone ki-compass fs-2 me-2"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    Localization
                                </a>
                            </li>
                            <!--end:::Tab item-->

                            <!--begin:::Tab item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary d-flex align-items-center pb-5"
                                    data-bs-toggle="tab" href="#kt_ecommerce_settings_products">
                                    <i class="ki-duotone ki-package fs-2 me-2"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span></i> Products
                                </a>
                            </li>
                            <!--end:::Tab item-->

                            <!--begin:::Tab item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary d-flex align-items-center pb-5"
                                    data-bs-toggle="tab" href="#kt_ecommerce_settings_customers">
                                    <i class="ki-duotone ki-people fs-2 me-2"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span><span class="path5"></span></i> Customers
                                </a>
                            </li>
                            <!--end:::Tab item-->
                        </ul>
                        <!--end:::Tabs-->

                        <!--begin:::Tab content-->
                        <div class="tab-content" id="myTabContent">
                            <!--begin:::Tab pane-->
                            <div class="tab-pane fade show active" id="kt_ecommerce_settings_general" role="tabpanel">


                                <!--begin::Form-->
                                <form id="kt_ecommerce_settings_general_form" class="form" action="#">
                                    <!--begin::Heading-->
                                    <div class="row mb-7">
                                        <div class="col-md-9 offset-md-3">
                                            <h2>General Settings</h2>
                                        </div>
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span class="required">Meta Title</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Set the title of the store for SEO.">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span> </label>
                                            <!--end::Label-->
                                        </div>

                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid"
                                                name="meta_title" value="" />
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span>Meta Tag Description</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Set the description of the store for SEO.">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span> </label>
                                            <!--end::Label-->
                                        </div>

                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <textarea class="form-control form-control-solid" name="meta_description"></textarea>
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span>Meta Keywords</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Set keywords for the store separated by a comma.">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span> </label>
                                            <!--end::Label-->
                                        </div>

                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid"
                                                name="meta_keywords" value=""
                                                data-kt-ecommerce-settings-type="tagify" />
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span>Theme</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Set theme style for the store.">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span> </label>
                                            <!--end::Label-->
                                        </div>

                                        <div class="col-md-9">
                                            <div class="w-100">
                                                <!--begin::Select2-->
                                                <select class="form-select form-select-solid" name="theme"
                                                    data-control="select2" data-hide-search="true"
                                                    data-placeholder="Select a layout">
                                                    <option></option>
                                                    <option value="Default" selected>Default</option>
                                                    <option value="Minimalist">Minimalist</option>
                                                    <option value="Dark">Dark</option>
                                                    <option value="High_Contrast">High Contrast
                                                    </option>
                                                </select>
                                                <!--end::Select2-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span>Default Layout</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Set default layout style for the store.">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span> </label>
                                            <!--end::Label-->
                                        </div>

                                        <div class="col-md-9">
                                            <div class="w-100">
                                                <!--begin::Select2-->
                                                <select class="form-select form-select-solid" name="layout"
                                                    data-control="select2" data-hide-search="true"
                                                    data-placeholder="Select a layout">
                                                    <option></option>
                                                    <option value="Default" selected>Default</option>
                                                    <option value="Electronics">Electronics</option>
                                                    <option value="Fashion">Fashion</option>
                                                    <option value="Home">Home</option>
                                                    <option value="Dining">Dining</option>
                                                    <option value="Interior">Interior</option>
                                                </select>
                                                <!--end::Select2-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Action buttons-->
                                    <div class="row py-5">
                                        <div class="col-md-9 offset-md-3">
                                            <div class="d-flex">
                                                <!--begin::Button-->
                                                <button type="reset" data-kt-ecommerce-settings-type="cancel"
                                                    class="btn btn-light me-3">
                                                    Cancel
                                                </button>
                                                <!--end::Button-->

                                                <!--begin::Button-->
                                                <button type="submit" data-kt-ecommerce-settings-type="submit"
                                                    class="btn btn-primary">
                                                    <span class="indicator-label">
                                                        Save
                                                    </span>
                                                    <span class="indicator-progress">
                                                        Please wait... <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                    </span>
                                                </button>
                                                <!--end::Button-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Action buttons-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end:::Tab pane-->

                            <!--begin:::Tab pane-->
                            <div class="tab-pane fade" id="kt_ecommerce_settings_store" role="tabpanel">
                                <!--begin::Form-->
                                <form id="kt_ecommerce_settings_general_store" class="form" action="#">
                                    <!--begin::Heading-->
                                    <div class="row mb-7">
                                        <div class="col-md-9 offset-md-3">
                                            <h2>Store Settings</h2>
                                        </div>
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span class="required">Store Name</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Set the name of the store">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span> </label>
                                            <!--end::Label-->
                                        </div>

                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid"
                                                name="store_name" value="" />
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span class="required">Store Owner</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Set the store owner's name">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span> </label>
                                            <!--end::Label-->
                                        </div>

                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid"
                                                name="store_owner" value="" />
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span class="required">Address</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Set the store's full address.">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span> </label>
                                            <!--end::Label-->
                                        </div>

                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <textarea class="form-control form-control-solid" name="store_address"></textarea>
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span>Geocode</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Enter the store geocode manually (optional)">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span> </label>
                                            <!--end::Label-->
                                        </div>

                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid"
                                                name="store_geocode" value="" />
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span class="required">Email</span>
                                            </label>
                                            <!--end::Label-->
                                        </div>

                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="email" class="form-control form-control-solid"
                                                name="store_email" value="" />
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span class="required">Phone</span>
                                            </label>
                                            <!--end::Label-->
                                        </div>

                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid"
                                                name="store_phone" value="" />
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span>Fax</span>
                                            </label>
                                            <!--end::Label-->
                                        </div>

                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid"
                                                name="store_fax" value="" />
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Action buttons-->
                                    <div class="row py-5">
                                        <div class="col-md-9 offset-md-3">
                                            <div class="d-flex">
                                                <!--begin::Button-->
                                                <button type="reset" data-kt-ecommerce-settings-type="cancel"
                                                    class="btn btn-light me-3">
                                                    Cancel
                                                </button>
                                                <!--end::Button-->

                                                <!--begin::Button-->
                                                <button type="submit" data-kt-ecommerce-settings-type="submit"
                                                    class="btn btn-primary">
                                                    <span class="indicator-label">
                                                        Save
                                                    </span>
                                                    <span class="indicator-progress">
                                                        Please wait... <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                    </span>
                                                </button>
                                                <!--end::Button-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Action buttons-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end:::Tab pane-->

                            <!--begin:::Tab pane-->
                            <div class="tab-pane fade" id="kt_ecommerce_settings_localization" role="tabpanel">
                                <!--begin::Form-->
                                <form id="kt_ecommerce_settings_general_localization" class="form" action="#">
                                    <!--begin::Heading-->
                                    <div class="row mb-7">
                                        <div class="col-md-9 offset-md-3">
                                            <h2>Localization Settings</h2>
                                        </div>
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span class="required">Country</span>
                                            </label>
                                            <!--end::Label-->
                                        </div>

                                        <div class="col-md-9">
                                            <!--begin::Select2-->
                                            <select id="kt_ecommerce_localization_country"
                                                class="form-select form-select-solid" name="localization_country"
                                                data-kt-ecommerce-settings-type="select2_flags"
                                                data-placeholder="Select a country">
                                                <option></option>
                                                <option value="AF"
                                                    data-kt-select2-country="assets/media/flags/afghanistan.html">
                                                    Afghanistan</option>
                                                <option value="AX"
                                                    data-kt-select2-country="assets/media/flags/aland-islands.html">
                                                    Aland Islands</option>
                                                <option value="AL"
                                                    data-kt-select2-country="assets/media/flags/albania.html">
                                                    Albania</option>
                                                <option value="DZ"
                                                    data-kt-select2-country="assets/media/flags/algeria.html">
                                                    Algeria</option>
                                                <option value="AS"
                                                    data-kt-select2-country="assets/media/flags/american-samoa.html">
                                                    American Samoa</option>
                                                <option value="AD"
                                                    data-kt-select2-country="assets/media/flags/andorra.html">
                                                    Andorra</option>
                                                <option value="AO"
                                                    data-kt-select2-country="assets/media/flags/angola.html">
                                                    Angola</option>
                                                <option value="AI"
                                                    data-kt-select2-country="assets/media/flags/anguilla.html">
                                                    Anguilla</option>
                                                <option value="AG"
                                                    data-kt-select2-country="assets/media/flags/antigua-and-barbuda.svg">
                                                    Antigua and Barbuda</option>
                                                <option value="AR"
                                                    data-kt-select2-country="assets/media/flags/argentina.html">
                                                    Argentina</option>
                                                <option value="AM"
                                                    data-kt-select2-country="assets/media/flags/armenia.html">
                                                    Armenia</option>
                                                <option value="AW"
                                                    data-kt-select2-country="assets/media/flags/aruba.html">
                                                    Aruba</option>
                                                <option value="AU"
                                                    data-kt-select2-country="assets/media/flags/australia.html">
                                                    Australia</option>
                                                <option value="AT"
                                                    data-kt-select2-country="assets/media/flags/austria.html">
                                                    Austria</option>
                                                <option value="AZ"
                                                    data-kt-select2-country="assets/media/flags/azerbaijan.html">
                                                    Azerbaijan</option>
                                                <option value="BS"
                                                    data-kt-select2-country="assets/media/flags/bahamas.html">
                                                    Bahamas</option>
                                                <option value="BH"
                                                    data-kt-select2-country="assets/media/flags/bahrain.html">
                                                    Bahrain</option>
                                                <option value="BD"
                                                    data-kt-select2-country="assets/media/flags/bangladesh.html">
                                                    Bangladesh</option>
                                                <option value="BB"
                                                    data-kt-select2-country="assets/media/flags/barbados.html">
                                                    Barbados</option>
                                                <option value="BY"
                                                    data-kt-select2-country="assets/media/flags/belarus.html">
                                                    Belarus</option>
                                                <option value="BE"
                                                    data-kt-select2-country="assets/media/flags/belgium.html">
                                                    Belgium</option>
                                                <option value="BZ"
                                                    data-kt-select2-country="assets/media/flags/belize.html">
                                                    Belize</option>
                                                <option value="BJ"
                                                    data-kt-select2-country="assets/media/flags/benin.html">
                                                    Benin</option>
                                                <option value="BM"
                                                    data-kt-select2-country="assets/media/flags/bermuda.html">
                                                    Bermuda</option>
                                                <option value="BT"
                                                    data-kt-select2-country="assets/media/flags/bhutan.html">
                                                    Bhutan</option>
                                                <option value="BO"
                                                    data-kt-select2-country="assets/media/flags/bolivia.html">
                                                    Bolivia, Plurinational State of</option>
                                                <option value="BQ"
                                                    data-kt-select2-country="assets/media/flags/bonaire.html">
                                                    Bonaire, Sint Eustatius and Saba</option>
                                                <option value="BA"
                                                    data-kt-select2-country="assets/media/flags/bosnia-and-herzegovina.html">
                                                    Bosnia and Herzegovina</option>
                                                <option value="BW"
                                                    data-kt-select2-country="assets/media/flags/botswana.html">
                                                    Botswana</option>
                                                <option value="BR"
                                                    data-kt-select2-country="assets/media/flags/brazil.html">
                                                    Brazil</option>
                                                <option value="IO"
                                                    data-kt-select2-country="assets/media/flags/british-indian-ocean-territory.html">
                                                    British Indian Ocean Territory</option>
                                                <option value="BN"
                                                    data-kt-select2-country="assets/media/flags/brunei.html">
                                                    Brunei Darussalam</option>
                                                <option value="BG"
                                                    data-kt-select2-country="assets/media/flags/bulgaria.html">
                                                    Bulgaria</option>
                                                <option value="BF"
                                                    data-kt-select2-country="assets/media/flags/burkina-faso.html">
                                                    Burkina Faso</option>
                                                <option value="BI"
                                                    data-kt-select2-country="assets/media/flags/burundi.html">
                                                    Burundi</option>
                                                <option value="KH"
                                                    data-kt-select2-country="assets/media/flags/cambodia.html">
                                                    Cambodia</option>
                                                <option value="CM"
                                                    data-kt-select2-country="assets/media/flags/cameroon.html">
                                                    Cameroon</option>
                                                <option value="CA"
                                                    data-kt-select2-country="assets/media/flags/canada.html">
                                                    Canada</option>
                                                <option value="CV"
                                                    data-kt-select2-country="assets/media/flags/cape-verde.html">
                                                    Cape Verde</option>
                                                <option value="KY"
                                                    data-kt-select2-country="assets/media/flags/cayman-islands.html">
                                                    Cayman Islands</option>
                                                <option value="CF"
                                                    data-kt-select2-country="assets/media/flags/central-african-republic.html">
                                                    Central African Republic</option>
                                                <option value="TD"
                                                    data-kt-select2-country="assets/media/flags/chad.html">
                                                    Chad</option>
                                                <option value="CL"
                                                    data-kt-select2-country="assets/media/flags/chile.html">
                                                    Chile</option>
                                                <option value="CN"
                                                    data-kt-select2-country="assets/media/flags/china.html">
                                                    China</option>
                                                <option value="CX"
                                                    data-kt-select2-country="assets/media/flags/christmas-island.html">
                                                    Christmas Island</option>
                                                <option value="CC"
                                                    data-kt-select2-country="assets/media/flags/cocos-island.html">
                                                    Cocos (Keeling) Islands</option>
                                                <option value="CO"
                                                    data-kt-select2-country="assets/media/flags/colombia.html">
                                                    Colombia</option>
                                                <option value="KM"
                                                    data-kt-select2-country="assets/media/flags/comoros.html">
                                                    Comoros</option>
                                                <option value="CK"
                                                    data-kt-select2-country="assets/media/flags/cook-islands.html">
                                                    Cook Islands</option>
                                                <option value="CR"
                                                    data-kt-select2-country="assets/media/flags/costa-rica.html">
                                                    Costa Rica</option>
                                                <option value="CI"
                                                    data-kt-select2-country="assets/media/flags/ivory-coast.html">
                                                    Côte d'Ivoire</option>
                                                <option value="HR"
                                                    data-kt-select2-country="assets/media/flags/croatia.html">
                                                    Croatia</option>
                                                <option value="CU"
                                                    data-kt-select2-country="assets/media/flags/cuba.html">
                                                    Cuba</option>
                                                <option value="CW"
                                                    data-kt-select2-country="assets/media/flags/curacao.html">
                                                    Curaçao</option>
                                                <option value="CZ"
                                                    data-kt-select2-country="assets/media/flags/czech-republic.html">
                                                    Czech Republic</option>
                                                <option value="DK"
                                                    data-kt-select2-country="assets/media/flags/denmark.html">
                                                    Denmark</option>
                                                <option value="DJ"
                                                    data-kt-select2-country="assets/media/flags/djibouti.html">
                                                    Djibouti</option>
                                                <option value="DM"
                                                    data-kt-select2-country="assets/media/flags/dominica.html">
                                                    Dominica</option>
                                                <option value="DO"
                                                    data-kt-select2-country="assets/media/flags/dominican-republic.html">
                                                    Dominican Republic</option>
                                                <option value="EC"
                                                    data-kt-select2-country="assets/media/flags/ecuador.html">
                                                    Ecuador</option>
                                                <option value="EG"
                                                    data-kt-select2-country="assets/media/flags/egypt.html">
                                                    Egypt</option>
                                                <option value="SV"
                                                    data-kt-select2-country="assets/media/flags/el-salvador.html">
                                                    El Salvador</option>
                                                <option value="GQ"
                                                    data-kt-select2-country="assets/media/flags/equatorial-guinea.html">
                                                    Equatorial Guinea</option>
                                                <option value="ER"
                                                    data-kt-select2-country="assets/media/flags/eritrea.html">
                                                    Eritrea</option>
                                                <option value="EE"
                                                    data-kt-select2-country="assets/media/flags/estonia.html">
                                                    Estonia</option>
                                                <option value="ET"
                                                    data-kt-select2-country="assets/media/flags/ethiopia.html">
                                                    Ethiopia</option>
                                                <option value="FK"
                                                    data-kt-select2-country="assets/media/flags/falkland-islands.html">
                                                    Falkland Islands (Malvinas)</option>
                                                <option value="FJ"
                                                    data-kt-select2-country="assets/media/flags/fiji.html">
                                                    Fiji</option>
                                                <option value="FI"
                                                    data-kt-select2-country="assets/media/flags/finland.html">
                                                    Finland</option>
                                                <option value="FR"
                                                    data-kt-select2-country="assets/media/flags/france.html">
                                                    France</option>
                                                <option value="PF"
                                                    data-kt-select2-country="assets/media/flags/french-polynesia.html">
                                                    French Polynesia</option>
                                                <option value="GA"
                                                    data-kt-select2-country="assets/media/flags/gabon.html">
                                                    Gabon</option>
                                                <option value="GM"
                                                    data-kt-select2-country="assets/media/flags/gambia.html">
                                                    Gambia</option>
                                                <option value="GE"
                                                    data-kt-select2-country="assets/media/flags/georgia.html">
                                                    Georgia</option>
                                                <option value="DE"
                                                    data-kt-select2-country="assets/media/flags/germany.html">
                                                    Germany</option>
                                                <option value="GH"
                                                    data-kt-select2-country="assets/media/flags/ghana.html">
                                                    Ghana</option>
                                                <option value="GI"
                                                    data-kt-select2-country="assets/media/flags/gibraltar.html">
                                                    Gibraltar</option>
                                                <option value="GR"
                                                    data-kt-select2-country="assets/media/flags/greece.html">
                                                    Greece</option>
                                                <option value="GL"
                                                    data-kt-select2-country="assets/media/flags/greenland.html">
                                                    Greenland</option>
                                                <option value="GD"
                                                    data-kt-select2-country="assets/media/flags/grenada.html">
                                                    Grenada</option>
                                                <option value="GU"
                                                    data-kt-select2-country="assets/media/flags/guam.html">
                                                    Guam</option>
                                                <option value="GT"
                                                    data-kt-select2-country="assets/media/flags/guatemala.html">
                                                    Guatemala</option>
                                                <option value="GG"
                                                    data-kt-select2-country="assets/media/flags/guernsey.html">
                                                    Guernsey</option>
                                                <option value="GN"
                                                    data-kt-select2-country="assets/media/flags/guinea.html">
                                                    Guinea</option>
                                                <option value="GW"
                                                    data-kt-select2-country="assets/media/flags/guinea-bissau.html">
                                                    Guinea-Bissau</option>
                                                <option value="HT"
                                                    data-kt-select2-country="assets/media/flags/haiti.html">
                                                    Haiti</option>
                                                <option value="VA"
                                                    data-kt-select2-country="assets/media/flags/vatican-city.html">
                                                    Holy See (Vatican City State)</option>
                                                <option value="HN"
                                                    data-kt-select2-country="assets/media/flags/honduras.html">
                                                    Honduras</option>
                                                <option value="HK"
                                                    data-kt-select2-country="assets/media/flags/hong-kong.html">
                                                    Hong Kong</option>
                                                <option value="HU"
                                                    data-kt-select2-country="assets/media/flags/hungary.html">
                                                    Hungary</option>
                                                <option value="IS"
                                                    data-kt-select2-country="assets/media/flags/iceland.html">
                                                    Iceland</option>
                                                <option value="IN"
                                                    data-kt-select2-country="assets/media/flags/india.html">
                                                    India</option>
                                                <option value="ID"
                                                    data-kt-select2-country="assets/media/flags/indonesia.html">
                                                    Indonesia</option>
                                                <option value="IR"
                                                    data-kt-select2-country="assets/media/flags/iran.html">
                                                    Iran, Islamic Republic of</option>
                                                <option value="IQ"
                                                    data-kt-select2-country="assets/media/flags/iraq.html">
                                                    Iraq</option>
                                                <option value="IE"
                                                    data-kt-select2-country="assets/media/flags/ireland.html">
                                                    Ireland</option>
                                                <option value="IM"
                                                    data-kt-select2-country="assets/media/flags/isle-of-man.html">
                                                    Isle of Man</option>
                                                <option value="IL"
                                                    data-kt-select2-country="assets/media/flags/israel.html">
                                                    Israel</option>
                                                <option value="IT"
                                                    data-kt-select2-country="assets/media/flags/italy.html">
                                                    Italy</option>
                                                <option value="JM"
                                                    data-kt-select2-country="assets/media/flags/jamaica.html">
                                                    Jamaica</option>
                                                <option value="JP"
                                                    data-kt-select2-country="assets/media/flags/japan.html">
                                                    Japan</option>
                                                <option value="JE"
                                                    data-kt-select2-country="assets/media/flags/jersey.html">
                                                    Jersey</option>
                                                <option value="JO"
                                                    data-kt-select2-country="assets/media/flags/jordan.html">
                                                    Jordan</option>
                                                <option value="KZ"
                                                    data-kt-select2-country="assets/media/flags/kazakhstan.html">
                                                    Kazakhstan</option>
                                                <option value="KE"
                                                    data-kt-select2-country="assets/media/flags/kenya.html">
                                                    Kenya</option>
                                                <option value="KI"
                                                    data-kt-select2-country="assets/media/flags/kiribati.html">
                                                    Kiribati</option>
                                                <option value="KP"
                                                    data-kt-select2-country="assets/media/flags/north-korea.html">
                                                    Korea, Democratic People's Republic of</option>
                                                <option value="KW"
                                                    data-kt-select2-country="assets/media/flags/kuwait.html">
                                                    Kuwait</option>
                                                <option value="KG"
                                                    data-kt-select2-country="assets/media/flags/kyrgyzstan.html">
                                                    Kyrgyzstan</option>
                                                <option value="LA"
                                                    data-kt-select2-country="assets/media/flags/laos.html">
                                                    Lao People's Democratic Republic</option>
                                                <option value="LV"
                                                    data-kt-select2-country="assets/media/flags/latvia.html">
                                                    Latvia</option>
                                                <option value="LB"
                                                    data-kt-select2-country="assets/media/flags/lebanon.html">
                                                    Lebanon</option>
                                                <option value="LS"
                                                    data-kt-select2-country="assets/media/flags/lesotho.html">
                                                    Lesotho</option>
                                                <option value="LR"
                                                    data-kt-select2-country="assets/media/flags/liberia.html">
                                                    Liberia</option>
                                                <option value="LY"
                                                    data-kt-select2-country="assets/media/flags/libya.html">
                                                    Libya</option>
                                                <option value="LI"
                                                    data-kt-select2-country="assets/media/flags/liechtenstein.html">
                                                    Liechtenstein</option>
                                                <option value="LT"
                                                    data-kt-select2-country="assets/media/flags/lithuania.html">
                                                    Lithuania</option>
                                                <option value="LU"
                                                    data-kt-select2-country="assets/media/flags/luxembourg.html">
                                                    Luxembourg</option>
                                                <option value="MO"
                                                    data-kt-select2-country="assets/media/flags/macao.html">
                                                    Macao</option>
                                                <option value="MG"
                                                    data-kt-select2-country="assets/media/flags/madagascar.html">
                                                    Madagascar</option>
                                                <option value="MW"
                                                    data-kt-select2-country="assets/media/flags/malawi.html">
                                                    Malawi</option>
                                                <option value="MY"
                                                    data-kt-select2-country="assets/media/flags/malaysia.html">
                                                    Malaysia</option>
                                                <option value="MV"
                                                    data-kt-select2-country="assets/media/flags/maldives.html">
                                                    Maldives</option>
                                                <option value="ML"
                                                    data-kt-select2-country="assets/media/flags/mali.html">
                                                    Mali</option>
                                                <option value="MT"
                                                    data-kt-select2-country="assets/media/flags/malta.html">
                                                    Malta</option>
                                                <option value="MH"
                                                    data-kt-select2-country="assets/media/flags/marshall-island.html">
                                                    Marshall Islands</option>
                                                <option value="MQ"
                                                    data-kt-select2-country="assets/media/flags/martinique.html">
                                                    Martinique</option>
                                                <option value="MR"
                                                    data-kt-select2-country="assets/media/flags/mauritania.html">
                                                    Mauritania</option>
                                                <option value="MU"
                                                    data-kt-select2-country="assets/media/flags/mauritius.html">
                                                    Mauritius</option>
                                                <option value="MX"
                                                    data-kt-select2-country="assets/media/flags/mexico.html">
                                                    Mexico</option>
                                                <option value="FM"
                                                    data-kt-select2-country="assets/media/flags/micronesia.html">
                                                    Micronesia, Federated States of</option>
                                                <option value="MD"
                                                    data-kt-select2-country="assets/media/flags/moldova.html">
                                                    Moldova, Republic of</option>
                                                <option value="MC"
                                                    data-kt-select2-country="assets/media/flags/monaco.html">
                                                    Monaco</option>
                                                <option value="MN"
                                                    data-kt-select2-country="assets/media/flags/mongolia.html">
                                                    Mongolia</option>
                                                <option value="ME"
                                                    data-kt-select2-country="assets/media/flags/montenegro.html">
                                                    Montenegro</option>
                                                <option value="MS"
                                                    data-kt-select2-country="assets/media/flags/montserrat.html">
                                                    Montserrat</option>
                                                <option value="MA"
                                                    data-kt-select2-country="assets/media/flags/morocco.html">
                                                    Morocco</option>
                                                <option value="MZ"
                                                    data-kt-select2-country="assets/media/flags/mozambique.html">
                                                    Mozambique</option>
                                                <option value="MM"
                                                    data-kt-select2-country="assets/media/flags/myanmar.html">
                                                    Myanmar</option>
                                                <option value="NA"
                                                    data-kt-select2-country="assets/media/flags/namibia.html">
                                                    Namibia</option>
                                                <option value="NR"
                                                    data-kt-select2-country="assets/media/flags/nauru.html">
                                                    Nauru</option>
                                                <option value="NP"
                                                    data-kt-select2-country="assets/media/flags/nepal.html">
                                                    Nepal</option>
                                                <option value="NL"
                                                    data-kt-select2-country="assets/media/flags/netherlands.html">
                                                    Netherlands</option>
                                                <option value="NZ"
                                                    data-kt-select2-country="assets/media/flags/new-zealand.html">
                                                    New Zealand</option>
                                                <option value="NI"
                                                    data-kt-select2-country="assets/media/flags/nicaragua.html">
                                                    Nicaragua</option>
                                                <option value="NE"
                                                    data-kt-select2-country="assets/media/flags/niger.html">
                                                    Niger</option>
                                                <option value="NG"
                                                    data-kt-select2-country="assets/media/flags/nigeria.html">
                                                    Nigeria</option>
                                                <option value="NU"
                                                    data-kt-select2-country="assets/media/flags/niue.html">
                                                    Niue</option>
                                                <option value="NF"
                                                    data-kt-select2-country="assets/media/flags/norfolk-island.html">
                                                    Norfolk Island</option>
                                                <option value="MP"
                                                    data-kt-select2-country="assets/media/flags/northern-mariana-islands.html">
                                                    Northern Mariana Islands</option>
                                                <option value="NO"
                                                    data-kt-select2-country="assets/media/flags/norway.html">
                                                    Norway</option>
                                                <option value="OM"
                                                    data-kt-select2-country="assets/media/flags/oman.html">
                                                    Oman</option>
                                                <option value="PK"
                                                    data-kt-select2-country="assets/media/flags/pakistan.html">
                                                    Pakistan</option>
                                                <option value="PW"
                                                    data-kt-select2-country="assets/media/flags/palau.html">
                                                    Palau</option>
                                                <option value="PS"
                                                    data-kt-select2-country="assets/media/flags/palestine.html">
                                                    Palestinian Territory, Occupied</option>
                                                <option value="PA"
                                                    data-kt-select2-country="assets/media/flags/panama.html">
                                                    Panama</option>
                                                <option value="PG"
                                                    data-kt-select2-country="assets/media/flags/papua-new-guinea.html">
                                                    Papua New Guinea</option>
                                                <option value="PY"
                                                    data-kt-select2-country="assets/media/flags/paraguay.html">
                                                    Paraguay</option>
                                                <option value="PE"
                                                    data-kt-select2-country="assets/media/flags/peru.html">
                                                    Peru</option>
                                                <option value="PH"
                                                    data-kt-select2-country="assets/media/flags/philippines.html">
                                                    Philippines</option>
                                                <option value="PL"
                                                    data-kt-select2-country="assets/media/flags/poland.html">
                                                    Poland</option>
                                                <option value="PT"
                                                    data-kt-select2-country="assets/media/flags/portugal.html">
                                                    Portugal</option>
                                                <option value="PR"
                                                    data-kt-select2-country="assets/media/flags/puerto-rico.html">
                                                    Puerto Rico</option>
                                                <option value="QA"
                                                    data-kt-select2-country="assets/media/flags/qatar.html">
                                                    Qatar</option>
                                                <option value="RO"
                                                    data-kt-select2-country="assets/media/flags/romania.html">
                                                    Romania</option>
                                                <option value="RU"
                                                    data-kt-select2-country="assets/media/flags/russia.html">
                                                    Russian Federation</option>
                                                <option value="RW"
                                                    data-kt-select2-country="assets/media/flags/rwanda.html">
                                                    Rwanda</option>
                                                <option value="BL"
                                                    data-kt-select2-country="assets/media/flags/st-barts.html">
                                                    Saint Barthélemy</option>
                                                <option value="KN"
                                                    data-kt-select2-country="assets/media/flags/saint-kitts-and-nevis.html">
                                                    Saint Kitts and Nevis</option>
                                                <option value="LC"
                                                    data-kt-select2-country="assets/media/flags/st-lucia.html">
                                                    Saint Lucia</option>
                                                <option value="MF"
                                                    data-kt-select2-country="assets/media/flags/sint-maarten.html">
                                                    Saint Martin (French part)</option>
                                                <option value="VC"
                                                    data-kt-select2-country="assets/media/flags/st-vincent-and-the-grenadines.html">
                                                    Saint Vincent and the Grenadines</option>
                                                <option value="WS"
                                                    data-kt-select2-country="assets/media/flags/samoa.html">
                                                    Samoa</option>
                                                <option value="SM"
                                                    data-kt-select2-country="assets/media/flags/san-marino.html">
                                                    San Marino</option>
                                                <option value="ST"
                                                    data-kt-select2-country="assets/media/flags/sao-tome-and-prince.html">
                                                    Sao Tome and Principe</option>
                                                <option value="SA"
                                                    data-kt-select2-country="assets/media/flags/saudi-arabia.html">
                                                    Saudi Arabia</option>
                                                <option value="SN"
                                                    data-kt-select2-country="assets/media/flags/senegal.html">
                                                    Senegal</option>
                                                <option value="RS"
                                                    data-kt-select2-country="assets/media/flags/serbia.html">
                                                    Serbia</option>
                                                <option value="SC"
                                                    data-kt-select2-country="assets/media/flags/seychelles.html">
                                                    Seychelles</option>
                                                <option value="SL"
                                                    data-kt-select2-country="assets/media/flags/sierra-leone.html">
                                                    Sierra Leone</option>
                                                <option value="SG"
                                                    data-kt-select2-country="assets/media/flags/singapore.html">
                                                    Singapore</option>
                                                <option value="SX"
                                                    data-kt-select2-country="assets/media/flags/sint-maarten.html">
                                                    Sint Maarten (Dutch part)</option>
                                                <option value="SK"
                                                    data-kt-select2-country="assets/media/flags/slovakia.html">
                                                    Slovakia</option>
                                                <option value="SI"
                                                    data-kt-select2-country="assets/media/flags/slovenia.html">
                                                    Slovenia</option>
                                                <option value="SB"
                                                    data-kt-select2-country="assets/media/flags/solomon-islands.html">
                                                    Solomon Islands</option>
                                                <option value="SO"
                                                    data-kt-select2-country="assets/media/flags/somalia.html">
                                                    Somalia</option>
                                                <option value="ZA"
                                                    data-kt-select2-country="assets/media/flags/south-africa.html">
                                                    South Africa</option>
                                                <option value="KR"
                                                    data-kt-select2-country="assets/media/flags/south-korea.html">
                                                    South Korea</option>
                                                <option value="SS"
                                                    data-kt-select2-country="assets/media/flags/south-sudan.html">
                                                    South Sudan</option>
                                                <option value="ES"
                                                    data-kt-select2-country="assets/media/flags/spain.html">
                                                    Spain</option>
                                                <option value="LK"
                                                    data-kt-select2-country="assets/media/flags/sri-lanka.html">
                                                    Sri Lanka</option>
                                                <option value="SD"
                                                    data-kt-select2-country="assets/media/flags/sudan.html">
                                                    Sudan</option>
                                                <option value="SR"
                                                    data-kt-select2-country="assets/media/flags/suriname.html">
                                                    Suriname</option>
                                                <option value="SZ"
                                                    data-kt-select2-country="assets/media/flags/swaziland.html">
                                                    Swaziland</option>
                                                <option value="SE"
                                                    data-kt-select2-country="assets/media/flags/sweden.html">
                                                    Sweden</option>
                                                <option value="CH"
                                                    data-kt-select2-country="assets/media/flags/switzerland.html">
                                                    Switzerland</option>
                                                <option value="SY"
                                                    data-kt-select2-country="assets/media/flags/syria.html">
                                                    Syrian Arab Republic</option>
                                                <option value="TW"
                                                    data-kt-select2-country="assets/media/flags/taiwan.html">
                                                    Taiwan, Province of China</option>
                                                <option value="TJ"
                                                    data-kt-select2-country="assets/media/flags/tajikistan.html">
                                                    Tajikistan</option>
                                                <option value="TZ"
                                                    data-kt-select2-country="assets/media/flags/tanzania.html">
                                                    Tanzania, United Republic of</option>
                                                <option value="TH"
                                                    data-kt-select2-country="assets/media/flags/thailand.html">
                                                    Thailand</option>
                                                <option value="TG"
                                                    data-kt-select2-country="assets/media/flags/togo.html">
                                                    Togo</option>
                                                <option value="TK"
                                                    data-kt-select2-country="assets/media/flags/tokelau.html">
                                                    Tokelau</option>
                                                <option value="TO"
                                                    data-kt-select2-country="assets/media/flags/tonga.html">
                                                    Tonga</option>
                                                <option value="TT"
                                                    data-kt-select2-country="assets/media/flags/trinidad-and-tobago.html">
                                                    Trinidad and Tobago</option>
                                                <option value="TN"
                                                    data-kt-select2-country="assets/media/flags/tunisia.html">
                                                    Tunisia</option>
                                                <option value="TR"
                                                    data-kt-select2-country="assets/media/flags/turkey.html">
                                                    Turkey</option>
                                                <option value="TM"
                                                    data-kt-select2-country="assets/media/flags/turkmenistan.html">
                                                    Turkmenistan</option>
                                                <option value="TC"
                                                    data-kt-select2-country="assets/media/flags/turks-and-caicos.html">
                                                    Turks and Caicos Islands</option>
                                                <option value="TV"
                                                    data-kt-select2-country="assets/media/flags/tuvalu.html">
                                                    Tuvalu</option>
                                                <option value="UG"
                                                    data-kt-select2-country="assets/media/flags/uganda.html">
                                                    Uganda</option>
                                                <option value="UA"
                                                    data-kt-select2-country="assets/media/flags/ukraine.html">
                                                    Ukraine</option>
                                                <option value="AE"
                                                    data-kt-select2-country="assets/media/flags/united-arab-emirates.html">
                                                    United Arab Emirates</option>
                                                <option value="GB"
                                                    data-kt-select2-country="assets/media/flags/united-kingdom.html">
                                                    United Kingdom</option>
                                                <option value="US"
                                                    data-kt-select2-country="assets/media/flags/united-states.html">
                                                    United States</option>
                                                <option value="UY"
                                                    data-kt-select2-country="assets/media/flags/uruguay.html">
                                                    Uruguay</option>
                                                <option value="UZ"
                                                    data-kt-select2-country="assets/media/flags/uzbekistan.html">
                                                    Uzbekistan</option>
                                                <option value="VU"
                                                    data-kt-select2-country="assets/media/flags/vanuatu.html">
                                                    Vanuatu</option>
                                                <option value="VE"
                                                    data-kt-select2-country="assets/media/flags/venezuela.html">
                                                    Venezuela, Bolivarian Republic of</option>
                                                <option value="VN"
                                                    data-kt-select2-country="assets/media/flags/vietnam.html">
                                                    Vietnam</option>
                                                <option value="VI"
                                                    data-kt-select2-country="assets/media/flags/virgin-islands.html">
                                                    Virgin Islands</option>
                                                <option value="YE"
                                                    data-kt-select2-country="assets/media/flags/yemen.html">
                                                    Yemen</option>
                                                <option value="ZM"
                                                    data-kt-select2-country="assets/media/flags/zambia.html">
                                                    Zambia</option>
                                                <option value="ZW"
                                                    data-kt-select2-country="assets/media/flags/zimbabwe.html">
                                                    Zimbabwe</option>
                                            </select>
                                            <!--end::Select2-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span class="required">Language</span>
                                            </label>
                                            <!--end::Label-->
                                        </div>

                                        <div class="col-md-9">
                                            <div class="w-100">
                                                <!--begin::Select2-->
                                                <select class="form-select form-select-solid" name="localization_language"
                                                    data-control="select2" data-placeholder="Select a language">
                                                    <option></option>
                                                    <option value="id">Bahasa Indonesia -
                                                        Indonesian</option>
                                                    <option value="msa">Bahasa Melayu - Malay
                                                    </option>
                                                    <option value="ca">Català - Catalan</option>
                                                    <option value="cs">Čeština - Czech</option>
                                                    <option value="da">Dansk - Danish</option>
                                                    <option value="de">Deutsch - German</option>
                                                    <option value="en">English</option>
                                                    <option value="en-gb">English UK - British
                                                        English</option>
                                                    <option value="es">Español - Spanish</option>
                                                    <option value="fil">Filipino</option>
                                                    <option value="fr">Français - French</option>
                                                    <option value="ga">Gaeilge - Irish (beta)
                                                    </option>
                                                    <option value="gl">Galego - Galician (beta)
                                                    </option>
                                                    <option value="hr">Hrvatski - Croatian
                                                    </option>
                                                    <option value="it">Italiano - Italian</option>
                                                    <option value="hu">Magyar - Hungarian</option>
                                                    <option value="nl">Nederlands - Dutch</option>
                                                    <option value="no">Norsk - Norwegian</option>
                                                    <option value="pl">Polski - Polish</option>
                                                    <option value="pt">Português - Portuguese
                                                    </option>
                                                    <option value="ro">Română - Romanian</option>
                                                    <option value="sk">Slovenčina - Slovak
                                                    </option>
                                                    <option value="fi">Suomi - Finnish</option>
                                                    <option value="sv">Svenska - Swedish</option>
                                                    <option value="vi">Tiếng Việt - Vietnamese
                                                    </option>
                                                    <option value="tr">Türkçe - Turkish</option>
                                                    <option value="el">Ελληνικά - Greek</option>
                                                    <option value="bg">Български език - Bulgarian
                                                    </option>
                                                    <option value="ru">Русский - Russian</option>
                                                    <option value="sr">Српски - Serbian</option>
                                                    <option value="uk">Українська мова - Ukrainian
                                                    </option>
                                                    <option value="he">עִבְרִית - Hebrew</option>
                                                    <option value="ur">اردو - Urdu (beta)</option>
                                                    <option value="ar">العربية - Arabic</option>
                                                    <option value="fa">فارسی - Persian</option>
                                                    <option value="mr">मराठी - Marathi</option>
                                                    <option value="hi">हिन्दी - Hindi</option>
                                                    <option value="bn">বাংলা - Bangla</option>
                                                    <option value="gu">ગુજરાતી - Gujarati</option>
                                                    <option value="ta">தமிழ் - Tamil</option>
                                                    <option value="kn">ಕನ್ನಡ - Kannada</option>
                                                    <option value="th">ภาษาไทย - Thai</option>
                                                    <option value="ko">한국어 - Korean</option>
                                                    <option value="ja">日本語 - Japanese</option>
                                                    <option value="zh-cn">简体中文 - Simplified Chinese
                                                    </option>
                                                    <option value="zh-tw">繁體中文 - Traditional Chinese
                                                    </option>
                                                </select>
                                                <!--end::Select2-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span class="required">Currency</span>
                                            </label>
                                            <!--end::Label-->
                                        </div>

                                        <div class="col-md-9">
                                            <div class="w-100">
                                                <!--begin::Select2-->
                                                <select class="form-select form-select-solid" name="localization_currency"
                                                    data-control="select2" data-hide-search="true"
                                                    data-placeholder="Select a currency">
                                                    <option></option>
                                                    <option value="USD">US Dollar</option>
                                                    <option value="Euro">Euro</option>
                                                    <option value="Pound">Pound</option>
                                                    <option value="AUD">Australian Dollar</option>
                                                    <option value="JPY">Japanese Yen</option>
                                                    <option value="KRW">Korean Won</option>
                                                </select>
                                                <!--end::Select2-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span>Length Class</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Set the unit measurement for length.">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span> </label>
                                            <!--end::Label-->
                                        </div>

                                        <div class="col-md-9">
                                            <div class="w-100">
                                                <!--begin::Select2-->
                                                <select class="form-select form-select-solid" name="localization_currency"
                                                    data-control="select2" data-hide-search="true"
                                                    data-placeholder="Select a length class">
                                                    <option></option>
                                                    <option value="cm" selected>Centimeter
                                                    </option>
                                                    <option value="mm">Milimeter</option>
                                                    <option value="in">Inch</option>
                                                </select>
                                                <!--end::Select2-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span>Weight Class</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Set the unit measurement for weight.">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span> </label>
                                            <!--end::Label-->
                                        </div>

                                        <div class="col-md-9">
                                            <div class="w-100">
                                                <!--begin::Select2-->
                                                <select class="form-select form-select-solid" name="localization_currency"
                                                    data-control="select2" data-hide-search="true"
                                                    data-placeholder="Select a weight class">
                                                    <option></option>
                                                    <option value="kg" selected>Kilogram</option>
                                                    <option value="g">Gram</option>
                                                    <option value="lb">Pound</option>
                                                    <option value="oz">Ounce</option>
                                                </select>
                                                <!--end::Select2-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Action buttons-->
                                    <div class="row py-5">
                                        <div class="col-md-9 offset-md-3">
                                            <div class="d-flex">
                                                <!--begin::Button-->
                                                <button type="reset" data-kt-ecommerce-settings-type="cancel"
                                                    class="btn btn-light me-3">
                                                    Cancel
                                                </button>
                                                <!--end::Button-->

                                                <!--begin::Button-->
                                                <button type="submit" data-kt-ecommerce-settings-type="submit"
                                                    class="btn btn-primary">
                                                    <span class="indicator-label">
                                                        Save
                                                    </span>
                                                    <span class="indicator-progress">
                                                        Please wait... <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                    </span>
                                                </button>
                                                <!--end::Button-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Action buttons-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end:::Tab pane-->

                            <!--begin:::Tab pane-->
                            <div class="tab-pane fade" id="kt_ecommerce_settings_products" role="tabpanel">
                                <!--begin::Form-->
                                <form id="kt_ecommerce_settings_general_products" class="form" action="#">
                                    <!--begin::Heading-->
                                    <div class="row mb-7">
                                        <div class="col-md-9 offset-md-3">
                                            <h2>Cateogries Settings</h2>
                                        </div>
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span>Category Product Count</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Show the number of products inside the subcategories in the storefront header category menu. Be warned, this will cause an extreme performance hit for stores with a lot of subcategories!">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span> </label>
                                            <!--end::Label-->
                                        </div>

                                        <div class="col-md-9">
                                            <div class="d-flex mt-3">
                                                <!--begin::Radio-->
                                                <div class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="radio" value=""
                                                        name="category_product_count" id="category_product_count_yes"
                                                        checked />
                                                    <label class="form-check-label" for="category_product_count_yes">
                                                        Yes
                                                    </label>
                                                </div>

                                                <div class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" value=""
                                                        name="category_product_count" id="category_product_count_no" />
                                                    <label class="form-check-label" for="category_product_count_no">
                                                        No
                                                    </label>
                                                </div>
                                                <!--end::Radio-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-16">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span class="required">Default Items Per Page</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Determines how many items are shown per page.">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span> </label>
                                            <!--end::Label-->
                                        </div>

                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid"
                                                name="products_items_per_page" value="10" />
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Heading-->
                                    <div class="row mb-7">
                                        <div class="col-md-9 offset-md-3">
                                            <h2>Reviews Settings</h2>
                                        </div>
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span>Allow Reviews</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Enable/disable review entries for registered customers.">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span> </label>
                                            <!--end::Label-->
                                        </div>

                                        <div class="col-md-9">
                                            <div class="d-flex mt-3">
                                                <!--begin::Radio-->
                                                <div class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="radio" value=""
                                                        name="allow_reviews" id="allow_reviews_yes" checked />
                                                    <label class="form-check-label" for="allow_reviews_yes">
                                                        Yes
                                                    </label>
                                                </div>

                                                <div class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" value=""
                                                        name="allow_reviews" id="allow_reviews_no" />
                                                    <label class="form-check-label" for="allow_reviews_no">
                                                        No
                                                    </label>
                                                </div>
                                                <!--end::Radio-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-16">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span>Allow Guest Reviews</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Enable/disable review entries for public guest customers">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span> </label>
                                            <!--end::Label-->
                                        </div>

                                        <div class="col-md-9">
                                            <div class="d-flex mt-3">
                                                <!--begin::Radio-->
                                                <div class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="radio" value=""
                                                        name="allow_guest_reviews" id="allow_guest_reviews_yes" />
                                                    <label class="form-check-label" for="allow_guest_reviews_yes">
                                                        Yes
                                                    </label>
                                                </div>

                                                <div class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" value=""
                                                        name="allow_guest_reviews" id="allow_guest_reviews_no"
                                                        checked />
                                                    <label class="form-check-label" for="allow_guest_reviews_no">
                                                        No
                                                    </label>
                                                </div>
                                                <!--end::Radio-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Heading-->
                                    <div class="row mb-7">
                                        <div class="col-md-9 offset-md-3">
                                            <h2>Vouchers Settings</h2>
                                        </div>
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span class="required">Minimum Vouchers</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Minimum number of vouchers customers can attach to an order">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span> </label>
                                            <!--end::Label-->
                                        </div>

                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid"
                                                name="products_min_voucher" value="1" />
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-16">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span class="required">Maximum Vouchers</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Maximum number of vouchers customers can attach to an order">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span> </label>
                                            <!--end::Label-->
                                        </div>

                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid"
                                                name="products_max_voucher" value="10" />
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Heading-->
                                    <div class="row mb-7">
                                        <div class="col-md-9 offset-md-3">
                                            <h2>Tax Settings</h2>
                                        </div>
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span>Display Prices with Tax</span>
                                            </label>
                                            <!--end::Label-->
                                        </div>

                                        <div class="col-md-9">
                                            <div class="d-flex mt-3">
                                                <!--begin::Radio-->
                                                <div class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="radio" value=""
                                                        name="product_tax" id="product_tax_yes" checked />
                                                    <label class="form-check-label" for="product_tax_yes">
                                                        Yes
                                                    </label>
                                                </div>

                                                <div class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" value=""
                                                        name="product_tax" id="product_tax_no" />
                                                    <label class="form-check-label" for="product_tax_no">
                                                        No
                                                    </label>
                                                </div>
                                                <!--end::Radio-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span class="required">Default Tax Rate</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Determines the tax percentage (%) applied to orders">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span> </label>
                                            <!--end::Label-->
                                        </div>

                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid"
                                                name="products_tax_rate" value="15%" />
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Action buttons-->
                                    <div class="row py-5">
                                        <div class="col-md-9 offset-md-3">
                                            <div class="d-flex">
                                                <!--begin::Button-->
                                                <button type="reset" data-kt-ecommerce-settings-type="cancel"
                                                    class="btn btn-light me-3">
                                                    Cancel
                                                </button>
                                                <!--end::Button-->

                                                <!--begin::Button-->
                                                <button type="submit" data-kt-ecommerce-settings-type="submit"
                                                    class="btn btn-primary">
                                                    <span class="indicator-label">
                                                        Save
                                                    </span>
                                                    <span class="indicator-progress">
                                                        Please wait... <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                    </span>
                                                </button>
                                                <!--end::Button-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Action buttons-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end:::Tab pane-->

                            <!--begin:::Tab pane-->
                            <div class="tab-pane fade" id="kt_ecommerce_settings_customers" role="tabpanel">

                                <!--begin::Form-->
                                <form id="kt_ecommerce_settings_general_customers" class="form" action="#">
                                    <!--begin::Heading-->
                                    <div class="row mb-7">
                                        <div class="col-md-9 offset-md-3">
                                            <h2>Customers Settings</h2>
                                        </div>
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span>Customers Online</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Enable/disable tracking customers online status.">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span> </label>
                                            <!--end::Label-->
                                        </div>

                                        <div class="col-md-9">
                                            <div class="d-flex mt-3">
                                                <!--begin::Radio-->
                                                <div class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="radio" value=""
                                                        name="customers_online" id="customers_online_yes" checked />
                                                    <label class="form-check-label" for="customers_online_yes">
                                                        Yes
                                                    </label>
                                                </div>

                                                <div class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" value=""
                                                        name="customers_online" id="customers_online_no" />
                                                    <label class="form-check-label" for="customers_online_no">
                                                        No
                                                    </label>
                                                </div>
                                                <!--end::Radio-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span>Customers Activity</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Enable/disable tracking customers activity.">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span> </label>
                                            <!--end::Label-->
                                        </div>

                                        <div class="col-md-9">
                                            <div class="d-flex mt-3">
                                                <!--begin::Radio-->
                                                <div class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="radio" value=""
                                                        name="customers_activity" id="customers_activity_yes" checked />
                                                    <label class="form-check-label" for="customers_activity_yes">
                                                        Yes
                                                    </label>
                                                </div>

                                                <div class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" value=""
                                                        name="customers_activity" id="customers_activity_no" />
                                                    <label class="form-check-label" for="customers_activity_no">
                                                        No
                                                    </label>
                                                </div>
                                                <!--end::Radio-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span>Customer Searches</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Enable/disable logging customers search keywords.">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span> </label>
                                            <!--end::Label-->
                                        </div>

                                        <div class="col-md-9">
                                            <div class="d-flex mt-3">
                                                <!--begin::Radio-->
                                                <div class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="radio" value=""
                                                        name="customers_searches" id="customers_searches_yes" checked />
                                                    <label class="form-check-label" for="customers_searches_yes">
                                                        Yes
                                                    </label>
                                                </div>

                                                <div class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" value=""
                                                        name="customers_searches" id="customers_searches_no" />
                                                    <label class="form-check-label" for="customers_searches_no">
                                                        No
                                                    </label>
                                                </div>
                                                <!--end::Radio-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span>Allow Guest Checkout</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Enable/disable guest customers to checkout.">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span> </label>
                                            <!--end::Label-->
                                        </div>

                                        <div class="col-md-9">
                                            <div class="d-flex mt-3">
                                                <!--begin::Radio-->
                                                <div class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="radio" value=""
                                                        name="customers_guest_checkout"
                                                        id="customers_guest_checkout_yes" />
                                                    <label class="form-check-label" for="customers_guest_checkout_yes">
                                                        Yes
                                                    </label>
                                                </div>

                                                <div class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" value=""
                                                        name="customers_guest_checkout" id="customers_guest_checkout_no"
                                                        checked />
                                                    <label class="form-check-label" for="customers_guest_checkout_no">
                                                        No
                                                    </label>
                                                </div>
                                                <!--end::Radio-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span>Login Display Prices</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Only show prices when customers log in.">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span> </label>
                                            <!--end::Label-->
                                        </div>

                                        <div class="col-md-9">
                                            <div class="d-flex mt-3">
                                                <!--begin::Radio-->
                                                <div class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="radio" value=""
                                                        name="customers_login_prices" id="customers_login_prices_yes" />
                                                    <label class="form-check-label" for="customers_login_prices_yes">
                                                        Yes
                                                    </label>
                                                </div>

                                                <div class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" value=""
                                                        name="customers_login_prices" id="customers_login_prices_no"
                                                        checked />
                                                    <label class="form-check-label" for="customers_login_prices_no">
                                                        No
                                                    </label>
                                                </div>
                                                <!--end::Radio-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span class="required">Max Login Attempts</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Set the max number of login attempts before the customer account is locked for 1 hour.">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span> </label>
                                            <!--end::Label-->
                                        </div>

                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid"
                                                name="customer_login_attempts" value="" />
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Action buttons-->
                                    <div class="row py-5">
                                        <div class="col-md-9 offset-md-3">
                                            <div class="d-flex">
                                                <!--begin::Button-->
                                                <button type="reset" data-kt-ecommerce-settings-type="cancel"
                                                    class="btn btn-light me-3">
                                                    Cancel
                                                </button>
                                                <!--end::Button-->

                                                <!--begin::Button-->
                                                <button type="submit" data-kt-ecommerce-settings-type="submit"
                                                    class="btn btn-primary">
                                                    <span class="indicator-label">
                                                        Save
                                                    </span>
                                                    <span class="indicator-progress">
                                                        Please wait... <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                    </span>
                                                </button>
                                                <!--end::Button-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Action buttons-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end:::Tab pane-->
                        </div>
                        <!--end:::Tab content-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
@endsection

<!--begin::Javascript-->
<script>
    var hostUrl = "assets/index.html";
</script>


@section('custom-js')
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="assets/js/custom/apps/ecommerce/settings/settings.js"></script>
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="assets/js/custom/utilities/modals/users-search.js"></script>

@endsection
