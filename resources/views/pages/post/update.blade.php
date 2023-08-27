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
                        Press Form
                    </h1>
                    <!--end::Title-->


                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">
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
                            Press </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            Press
                        </li>
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
                <!--begin::Form-->
                <form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row"
                    data-kt-redirect="{{ route('post.index') }}">


                    @csrf
                    @method('PUT')


                    <input type="hidden" name="id" value="{{ $post->id }}" id="post_id">


                    <!--begin::Aside column-->
                    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                        <!--begin::Thumbnail settings-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Add Cover</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body text-center pt-0">
                                <!--begin::Image input-->
                                <!--begin::Image input placeholder-->
                                <style>
                                    .image-input-placeholder {
                                        background-image: url({{ asset($post->image ? 'storage/' . $post->image : 'assets/media/svg/files/blank-image.svg') }});
                                    }

                                    [data-bs-theme="dark"] .image-input-placeholder {
                                        background-image: url({{ asset($post->image ? 'storage/' . $post->image : 'assets/media/svg/files/blank-image-dark.svg') }});
                                    }
                                </style>
                                <!--end::Image input placeholder-->

                                <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                                    data-kt-image-input="true">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-150px h-150px"></div>
                                    <!--end::Preview existing avatar-->

                                    <!--begin::Label-->
                                    <label
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                        <i class="ki-duotone ki-pencil fs-7"><span class="path1"></span><span
                                                class="path2"></span></i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="avatar_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Label-->

                                    <!--begin::Cancel-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                        <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span
                                                class="path2"></span></i> </span>
                                    <!--end::Cancel-->

                                    <!--begin::Remove-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                        <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span
                                                class="path2"></span></i> </span>
                                    <!--end::Remove-->
                                </div>
                                <!--end::Image input-->

                                <!--begin::Description-->
                                <div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg
                                    image files are accepted</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Thumbnail settings-->
                        <!--begin::Status-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Status</h2>
                                </div>
                                <!--end::Card title-->

                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <div class="rounded-circle bg-success w-15px h-15px"
                                        id="kt_ecommerce_add_product_status"></div>
                                </div>
                                <!--begin::Card toolbar-->
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Select2-->
                                <select class="form-select mb-2" data-control="select2" data-hide-search="true"
                                    data-placeholder="Select an option" id="kt_ecommerce_add_product_status_select"
                                    name="status">
                                    <option></option>
                                    <option value="published" {{ $post->status === 'published' ? 'selected' : '' }}>
                                        Published
                                    </option>
                                    <option value="draft" {{ $post->status === 'draft' ? 'selected' : '' }}>Draft</option>
                                    {{-- <option value="scheduled">Scheduled</option>
                                    <option value="inactive">Inactive</option> --}}
                                </select>
                                <!--end::Select2-->

                                <!--begin::Description-->
                                <div class="text-muted fs-7">Set the post status.</div>
                                <!--end::Description-->

                                <!--begin::Datepicker-->
                                {{-- <div class="d-none mt-10">
                                    <label for="kt_ecommerce_add_product_status_datepicker" class="form-label">Select
                                        publishing date and time</label>
                                    <input class="form-control" id="kt_ecommerce_add_product_status_datepicker"
                                        placeholder="Pick date & time" name="published_date" />
                                </div> --}}
                                <!--end::Datepicker-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Status-->

                        <!--begin::Category & tags-->
                        {{-- <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Post Details</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <!--begin::Label-->
                                <label class="form-label">Categories</label>
                                <!--end::Label-->

                                <!--begin::Select2-->
                                <select class="form-select mb-2" data-control="select2" data-placeholder="Select an option"
                                    data-allow-clear="true" multiple="multiple" name="category">
                                    <option></option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <!--end::Select2-->

                                <!--begin::Description-->
                                <div class="text-muted fs-7 mb-7">Add product to a category.</div>
                                <!--end::Description-->
                                <!--end::Input group-->

                                <!--begin::Button-->
                                <a href="{{ route('category.add') }}" class="btn btn-light-primary btn-sm mb-10">
                                    <i class="ki-duotone ki-plus fs-2"></i> Create new category
                                </a>
                                <!--end::Button-->

                                <!--begin::Input group-->
                                <!--begin::Label-->
                                <label class="form-label d-block">Tags</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input id="kt_ecommerce_add_product_tags" name="product_tags" class="form-control mb-2"
                                    value="" />
                                <!--end::Input-->

                                <!--begin::Description-->
                                <div class="text-muted fs-7">Add tags to a post.</div>
                                <!--end::Description-->
                                <!--end::Input group-->
                            </div>
                            <!--end::Card body-->
                        </div> --}}
                        <!--end::Category & tags-->


                    </div>
                    <!--end::Aside column-->

                    <!--begin::Main column-->
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">



                        <!--begin::General options-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>General</h2>
                                </div>
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">Post Title</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" name="title" class="form-control mb-2" placeholder="Post Title"
                                        value="{{ $post->title }}" />
                                    <!--end::Input-->


                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Description</label>
                                    <!--end::Label-->

                                    <!--begin::Editor-->
                                    <input type="hidden" name="description" id="kt_add_post_description_input"
                                        value="$post->body">
                                    <div id="kt_add_post_description" name="description" class="min-h-200px mb-2">
                                        {!! $post->body !!}
                                    </div>
                                    <!--end::Editor-->
                                </div>
                                <!--end::Input group-->



                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Meta Tag Title</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control mb-2" name="meta_title"
                                        placeholder="Meta tag name" value="{{ $post->meta_title ?? '' }}" />
                                    <!--end::Input-->

                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set a meta tag title. Recommended to be simple
                                        and precise keywords.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Meta Tag Description</label>
                                    <!--end::Label-->

                                    <!--begin::Editor-->
                                    <input type="hidden" name="meta_description" id="kt_post_meta_description_input">

                                    <div id="kt_post_meta_description" name="meta_description" class="min-h-100px mb-2">
                                        {!! $post->meta_desc ?? '' !!}
                                    </div>
                                    <!--end::Editor-->

                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set a meta tag description to the post for
                                        increased SEO ranking.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-15">
                                    <!--begin::Label-->
                                    <label class="form-label">Meta Tag Keywords</label>
                                    <!--end::Label-->

                                    <!--begin::Editor-->
                                    <input id="kt_post_meta_keywords" name="meta_keywords" class="form-control mb-2"
                                        value="{{ $post->meta_keyword ?? '' }}" />
                                    <!--end::Editor-->

                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set a list of keywords that the product is
                                        related to. Separate the keywords by adding a comma <code>,</code>
                                        between each keyword.</div>
                                    <!--end::Description-->
                                </div>

                                <div class="d-flex justify-content-end">
                                    <!--begin::Button-->
                                    <a href="{{ route('post.index') }}" id="kt_ecommerce_add_product_cancel"
                                        class="btn btn-light me-5">
                                        Cancel
                                    </a>
                                    <!--end::Button-->

                                    <!--begin::Button-->
                                    <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                                        <span class="indicator-label">
                                            Save Changes
                                        </span>
                                        <span class="indicator-progress">
                                            Please wait... <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>
                                    <!--end::Button-->
                                </div>
                            </div>
                            <!--end::Card header-->


                        </div>
                        <!--end::General options-->




                    </div>
                    <!--end::Main column-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
@endsection

@section('custom-js')
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/custom/apps/ecommerce/post/save-post.js') }}"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
@endsection
