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
            "#kt_post_meta_description",
            "#kt_add_post_description",
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
                maxImageSize: 1024,
                theme: "snow", // or 'bubble'
            });

            var toolbar = quill.getModule("toolbar");

            // toolbar.addHandler("image", function (image) {
            //     console.log(image);
            // });

            quill.on("text-change", function () {
                //  console.log(JSON.stringify(quill.getContents()));
                //  console.log(quill.root.innerHTML);
                // document.querySelector(`${element}_input`).value = quill.getText();
                document.querySelector(`${element}_input`).value =
                    quill.root.innerHTML;
            });
        });
    };

    // Init tagify
    // const initTagify = () => {
    //     // Define all elements for tagify
    //     const elements = [
    //         "#kt_ecommerce_add_product_category",
    //         "#kt_ecommerce_add_product_tags",
    //     ];

    //     // Loop all elements
    //     elements.forEach((element) => {
    //         // Get tagify element
    //         const tagify = document.querySelector(element);

    //         // Break if element not found
    //         if (!tagify) {
    //             return;
    //         }

    //         // Init tagify --- more info: https://yaireo.github.io/tagify/
    //         new Tagify(tagify, {
    //             whitelist: [],
    //             dropdown: {
    //                 maxItems: 20, // <- mixumum allowed rendered suggestions
    //                 classname: "tagify__inline__suggestions", // <- custom classname for this dropdown, so it could be targeted
    //                 enabled: 0, // <- show suggestions on focus
    //                 closeOnSelect: false, // <- do not hide the suggestions dropdown once an item has been selected
    //             },
    //         });
    //     });
    // };

    // Init DropzoneJS --- more info:
    // const initDropzone = () => {
    //     const form = document.getElementById("kt_ecommerce_add_product_form");
    //     let uploadedImage = {};

    //     var myDropzone = new Dropzone("#kt_ecommerce_add_product_media", {
    //         url: hostUrl + "/product/media/upload", // Set the url for your upload script location
    //         // paramName: "file", // The name that will be used to transfer the file
    //         maxFiles: 10,
    //         autoProcessQueue: true,
    //         uploadMultiple: true,
    //         maxFilesize: 10, // MB
    //         addRemoveLinks: true,
    //         acceptedFiles: "image/*, video/*",
    //         parallelUploads: 10,
    //         headers: {
    //             "X-CSRF-TOKEN": document
    //                 .querySelector('meta[name="csrf-token"]')
    //                 .getAttribute("content"),
    //         },
    //         method: "POST",
    //         accept: function (file, done) {
    //             if (file.name == "justinbieber.jpg") {
    //                 done("Naha, you don't.");
    //             } else {
    //                 done();
    //             }
    //         },
    //         successmultiple: (file, response) => {
    //             const data = response.media.name;

    //             data.map((val, key) => {
    //                 // create new form input
    //                 const createInput = document.createElement("input");
    //                 // set attribute
    //                 createInput.setAttribute("type", "hidden");
    //                 createInput.setAttribute("name", "media[]");
    //                 createInput.setAttribute("value", val);

    //                 form.append(createInput);

    //                 uploadedImage[file.name] = val;
    //             });
    //         },
    //         removedfile: function (file) {
    //             // file review
    //             file.previewElement.remove();
    //             let name = "";

    //             if (typeof file.name !== "undefined") {
    //                 name = file.name;
    //             } else {
    //                 name = uploadedImage[file.name];
    //             }

    //             console.log(name);

    //             // Remove input field from the form

    //             var inputField = form.querySelectorAll(
    //                 `input[name="media[]"][value="${name}"]`
    //             );

    //             inputField.forEach((el) => {
    //                 if (el.value === name) {
    //                     el.remove();
    //                 }
    //             });
    //         },
    //         init: function () {
    //             const medias = document.querySelectorAll(".medias");

    //             if (medias) {
    //                 medias.forEach((val, key) => {
    //                     const imageUrl = val.value;

    //                     var mockFile = { name: imageUrl, size: 12345 };
    //                     this.emit("addedfile", mockFile);
    //                     this.emit("thumbnail", mockFile, imageUrl);
    //                     this.emit("complete", mockFile);
    //                 });

    //                 var thumbnailElement = document.querySelectorAll(
    //                     "img[data-dz-thumbnail]"
    //                 );

    //                 thumbnailElement.forEach((e, i) => {
    //                     //   e.setAttribute('width', '100');
    //                     e.style.width = "120px";
    //                     e.style.height = "120px";
    //                     e.style.objectFit = "cover";
    //                 });
    //             }
    //         },
    //     });

    //     // myDropzone.success();
    // };

    // Handle discount options

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
                    // hideDatepicker();
                    break;
                }
                case "draft": {
                    target.classList.remove(...statusClasses);
                    target.classList.add("bg-primary");
                    // hideDatepicker();
                    break;
                }
                default:
                    break;
            }
        });

        // // Handle datepicker
        // const datepicker = document.getElementById(
        //     "kt_ecommerce_add_product_status_datepicker"
        // );

        // // Init flatpickr --- more info: https://flatpickr.js.org/
        // $("#kt_ecommerce_add_product_status_datepicker").flatpickr({
        //     enableTime: true,
        //     dateFormat: "Y-m-d H:i",
        // });

        // const showDatepicker = () => {
        //     datepicker.parentNode.classList.remove("d-none");
        // };

        // const hideDatepicker = () => {
        //     datepicker.parentNode.classList.add("d-none");
        // };
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

    // Init tagify
    const initTagify = () => {
        // Define all elements for tagify
        const elements = ["#kt_post_meta_keywords", "#kt_post_add_tags"];

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
                whitelist: [],
                dropdown: {
                    maxItems: 20, // <- mixumum allowed rendered suggestions
                    classname: "tagify__inline__suggestions", // <- custom classname for this dropdown, so it could be targeted
                    enabled: 0, // <- show suggestions on focus
                    closeOnSelect: false, // <- do not hide the suggestions dropdown once an item has been selected
                },
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
                title: {
                    validators: {
                        notEmpty: {
                            message: "Title is required",
                        },
                    },
                },
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
                    // console.log("validated!");

                    if (status !== "Valid") {
                        return;
                    }

                    if (status == "Valid") {
                        submitButton.setAttribute("data-kt-indicator", "on");

                        // Disable submit button whilst loading
                        submitButton.disabled = true;

                        let post_id = document.querySelector("#post_id");

                        const method = "POST";

                        const _id = post_id.value;

                        // console.

                        const link = _id ? "/post/" + _id : "/post";

                        // console.log(form)
                        await handles.formRequest(
                            link,
                            form,
                            method,
                            submitButton
                        );
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
            // initDropzone();
            // initConditionsSelect2();

            // Handle forms
            handleStatus();
            handleConditions();
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
