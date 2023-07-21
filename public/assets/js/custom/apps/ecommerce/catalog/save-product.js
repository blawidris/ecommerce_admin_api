"use strict";

// Class definition
var KTAppEcommerceSaveProduct = (function () {
    // Private functions

    // datatable
    const handleDate = () => {
        const tableRow = document.querySelectorAll(
            "table tbody tr[data-kt-row]"
        );

        tableRow.forEach((e) => {
            const tableData = e.lastElementChild;

            const reviewDate = tableData.getAttribute("data-kt-review-date");

            const newDate = new Date(reviewDate);

            const dateCount = moment(newDate).fromNow();

            tableData.firstElementChild.textContent = dateCount;
        });

        // console.log(dayjs().format());
    };

    // Init quill editor
    const initQuill = () => {
        // Define all elements for quill editor
        const elements = [
            "#kt_ecommerce_add_product_description",
            "#kt_ecommerce_add_product_meta_description",
        ];

        // Loop all elements
        elements.forEach((element) => {
            // Get quill element
            let quill = document.querySelector(element);

            // Break if element not found
            if (!quill) {
                return;
            }

            // Init quill --- more info: https://quilljs.com/docs/quickstart/
            quill = new Quill(element, {
                modules: {
                    toolbar: [
                        [
                            {
                                header: [1, 2, false],
                            },
                        ],
                        ["bold", "italic", "underline"],
                        ["image", "code-block"],
                    ],
                },
                placeholder: "Type your text here...",
                theme: "snow", // or 'bubble'
            });

            quill.on("text-change", function (delta, oldDelta, source) {
                document.querySelector(`${element}_input`).value =
                    quill.getText();
            });
        });
    };

    // Init tagify
    const initTagify = () => {
        // Define all elements for tagify
        const elements = [
            "#kt_ecommerce_add_product_category",
            "#kt_ecommerce_add_product_tags",
        ];

        // Loop all elements
        elements.forEach((element) => {
            // Get tagify element
            const tagify = document.querySelector(element);

            // Break if element not found
            if (!tagify) {
                return;
            }

            // Init tagify --- more info: https://yaireo.github.io/tagify/
            new Tagify(tagify, {
                whitelist: [
                   
                ],
                dropdown: {
                    maxItems: 20, // <- mixumum allowed rendered suggestions
                    classname: "tagify__inline__suggestions", // <- custom classname for this dropdown, so it could be targeted
                    enabled: 0, // <- show suggestions on focus
                    closeOnSelect: false, // <- do not hide the suggestions dropdown once an item has been selected
                },
            });
        });
    };

    // Init form repeater --- more info: https://github.com/DubFriend/jquery.repeater
    const initFormRepeater = () => {
        $("#kt_ecommerce_add_product_options").repeater({
            initEmpty: false,

            defaultValues: {
                "text-input": "foo",
            },

            show: function () {
                $(this).slideDown();

                // Init select2 on new repeated items
                initConditionsSelect2();
            },

            hide: function (deleteElement) {
                $(this).slideUp(deleteElement);
            },
        });
    };

    // Init condition select2
    const initConditionsSelect2 = () => {
        // Tnit new repeating condition types
        const allConditionTypes = document.querySelectorAll(
            '[data-kt-ecommerce-catalog-add-product="product_option"]'
        );
        allConditionTypes.forEach((type) => {
            if ($(type).hasClass("select2-hidden-accessible")) {
                return;
            } else {
                $(type).select2({
                    minimumResultsForSearch: -1,
                });
            }
        });
    };

    // Init noUIslider
    const initSlider = () => {
        var slider = document.querySelector(
            "#kt_ecommerce_add_product_discount_slider"
        );
        var value = document.querySelector(
            "#kt_ecommerce_add_product_discount_label"
        );

        noUiSlider.create(slider, {
            start: [10],
            connect: true,
            range: {
                min: 1,
                max: 100,
            },
        });

        slider.noUiSlider.on("update", function (values, handle) {
            value.innerHTML = Math.round(values[handle]);
            if (handle) {
                value.innerHTML = Math.round(values[handle]);
            }
        });
    };

    // Init DropzoneJS --- more info:
    const initDropzone = () => {
        const form = document.getElementById("kt_ecommerce_add_product_form");
        let uploadedImage = {};

        var myDropzone = new Dropzone("#kt_ecommerce_add_product_media", {
            url: hostUrl + "/product/media/upload", // Set the url for your upload script location
            // paramName: "file", // The name that will be used to transfer the file
            maxFiles: 10,
            autoProcessQueue: true,
            uploadMultiple: true,
            maxFilesize: 10, // MB
            addRemoveLinks: true,
            acceptedFiles: "image/*, video/*",
            parallelUploads: 10,
            headers: {
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
            method: "POST",
            accept: function (file, done) {
                if (file.name == "justinbieber.jpg") {
                    done("Naha, you don't.");
                } else {
                    done();
                }
            },
            successmultiple: (file, response) => {
                const data = response.media.name;

                data.map((val, key) => {
                    // create new form input
                    const createInput = document.createElement("input");
                    // set attribute
                    createInput.setAttribute("type", "hidden");
                    createInput.setAttribute("name", "media[]");
                    createInput.setAttribute("value", val);

                    form.append(createInput);

                    uploadedImage[file.name] = val;
                });
            },
            removedfile: function (file) {
                // file review
                file.previewElement.remove();
                let name = "";

                if (typeof file.name !== "undefined") {
                    name = file.name;
                } else {
                    name = uploadedImage[file.name];
                }

                console.log(name);

                // Remove input field from the form

                var inputField = form.querySelectorAll(
                    `input[name="media[]"][value="${name}"]`
                );

                inputField.forEach((el) => {
                    if (el.value === name) {
                        el.remove();
                    }
                });
            },
            init: function () {
                const medias = document.querySelectorAll(".medias");

                if (medias) {
                    medias.forEach((val, key) => {
                        const imageUrl = val.value;

                        var mockFile = { name: imageUrl, size: 12345 };
                        this.emit("addedfile", mockFile);
                        this.emit("thumbnail", mockFile, imageUrl);
                        this.emit("complete", mockFile);
                    });

                    var thumbnailElement = document.querySelectorAll(
                        "img[data-dz-thumbnail]"
                    );

                    thumbnailElement.forEach((e, i) => {
                        //   e.setAttribute('width', '100');
                        e.style.width = "120px";
                        e.style.height = "120px";
                        e.style.objectFit = "cover";
                    });
                }
            },
        });

        // myDropzone.success();
    };

    // Handle discount options
    const handleDiscount = () => {
        const discountOptions = document.querySelectorAll(
            'input[name="discount_option"]'
        );
        const percentageEl = document.getElementById(
            "kt_ecommerce_add_product_discount_percentage"
        );
        const fixedEl = document.getElementById(
            "kt_ecommerce_add_product_discount_fixed"
        );

        discountOptions.forEach((option) => {
            option.addEventListener("change", (e) => {
                const value = e.target.value;

                switch (value) {
                    case "2": {
                        percentageEl.classList.remove("d-none");
                        fixedEl.classList.add("d-none");
                        break;
                    }
                    case "3": {
                        percentageEl.classList.add("d-none");
                        fixedEl.classList.remove("d-none");
                        break;
                    }
                    default: {
                        percentageEl.classList.add("d-none");
                        fixedEl.classList.add("d-none");
                        break;
                    }
                }
            });
        });
    };

    // Shipping option handler
    // const handleShipping = () => {
    //     const shippingOption = document.getElementById('kt_ecommerce_add_product_shipping_checkbox');
    //     const shippingForm = document.getElementById('kt_ecommerce_add_product_shipping');

    //     shippingOption.addEventListener('change', e => {
    //         const value = e.target.checked;

    //         if (value) {
    //             shippingForm.classList.remove('d-none');
    //         } else {
    //             shippingForm.classList.add('d-none');
    //         }
    //     });
    // }

    // Category status handler
    const handleStatus = () => {
        const target = document.getElementById(
            "kt_ecommerce_add_product_status"
        );
        const select = document.getElementById(
            "kt_ecommerce_add_product_status_select"
        );
        const statusClasses = ["bg-success", "bg-warning", "bg-danger"];

        $(select).on("change", function (e) {
            const value = e.target.value;

            switch (value) {
                case "published": {
                    target.classList.remove(...statusClasses);
                    target.classList.add("bg-success");
                    hideDatepicker();
                    break;
                }
                case "scheduled": {
                    target.classList.remove(...statusClasses);
                    target.classList.add("bg-warning");
                    showDatepicker();
                    break;
                }
                case "inactive": {
                    target.classList.remove(...statusClasses);
                    target.classList.add("bg-danger");
                    hideDatepicker();
                    break;
                }
                case "draft": {
                    target.classList.remove(...statusClasses);
                    target.classList.add("bg-primary");
                    hideDatepicker();
                    break;
                }
                default:
                    break;
            }
        });

        // Handle datepicker
        const datepicker = document.getElementById(
            "kt_ecommerce_add_product_status_datepicker"
        );

        // Init flatpickr --- more info: https://flatpickr.js.org/
        $("#kt_ecommerce_add_product_status_datepicker").flatpickr({
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });

        const showDatepicker = () => {
            datepicker.parentNode.classList.remove("d-none");
        };

        const hideDatepicker = () => {
            datepicker.parentNode.classList.add("d-none");
        };
    };

    // Condition type handler
    const handleConditions = () => {
        const allConditions = document.querySelectorAll(
            '[name="method"][type="radio"]'
        );
        const conditionMatch = document.querySelector(
            '[data-kt-ecommerce-catalog-add-category="auto-options"]'
        );
        allConditions.forEach((radio) => {
            radio.addEventListener("change", (e) => {
                if (e.target.value === "1") {
                    conditionMatch.classList.remove("d-none");
                } else {
                    conditionMatch.classList.add("d-none");
                }
            });
        });
    };

    // Submit form handler
    const handleSubmit = () => {
        // Define variables
        let validator;

        // Get elements
        const form = document.getElementById("kt_ecommerce_add_product_form");
        const submitButton = document.getElementById(
            "kt_ecommerce_add_product_submit"
        );

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validator = FormValidation.formValidation(form, {
            fields: {
                product_name: {
                    validators: {
                        notEmpty: {
                            message: "Product name is required",
                        },
                    },
                },
                // 'sku': {
                //     validators: {
                //         notEmpty: {
                //             message: 'SKU is required'
                //         }
                //     }
                // },
                // 'sku': {
                //     validators: {
                //         notEmpty: {
                //             message: 'Product barcode is required'
                //         }
                //     }
                // },
                quantity: {
                    validators: {
                        notEmpty: {
                            message: "Shelf quantity is required",
                        },
                    },
                },
                price: {
                    validators: {
                        notEmpty: {
                            message: "Product base price is required",
                        },
                    },
                },
                // 'tax': {
                //     validators: {
                //         notEmpty: {
                //             message: 'Product tax class is required'
                //         }
                //     }
                // }
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap: new FormValidation.plugins.Bootstrap5({
                    rowSelector: ".fv-row",
                    eleInvalidClass: "",
                    eleValidClass: "",
                }),
            },
        });

        // Handle submit button
        submitButton.addEventListener("click", (e) => {
            e.preventDefault();

            // Validate form before submit
            if (validator) {
                validator.validate().then(async function (status) {
                    console.log("validated!");

                    if (status == "Valid") {
                        submitButton.setAttribute("data-kt-indicator", "on");

                        // Disable submit button whilst loading
                        submitButton.disabled = true;

                        let product_id = document.querySelector("#product_id");

                        const method = "POST";
                        const link = product_id.value
                            ? "/product/update"
                            : "/product/add";

                        // console.log(form)
                        await handles.formRequest(
                            link,
                            form,
                            method,
                            submitButton
                        );
                    } else {
                        Swal.fire({
                            html: "Sorry, looks like there are some errors detected, please try again. <br/><br/>Please note that there may be errors in the <strong>General</strong> or <strong>Advanced</strong> tabs",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary",
                            },
                        });
                    }
                });
            }
        });
    };

    // Public methods
    return {
        init: function () {
            // Init forms
            initQuill();
            initTagify();
            initSlider();
            initFormRepeater();
            initDropzone();
            initConditionsSelect2();

            // Handle forms
            handleStatus();
            handleConditions();
            handleDiscount();
            // handleShipping();
            handleSubmit();

            // handle date
            handleDate();
        },
    };
})();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTAppEcommerceSaveProduct.init();
});
