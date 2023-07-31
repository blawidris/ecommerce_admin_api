"use strict";

// Class definition
var KTModalCustomersAdd = (function () {
    var submitButton;
    var cancelButton;
    var closeButton;
    var validator;
    var form;
    var modal;

    // Init form inputs
    var handleForm = function () {
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validator = FormValidation.formValidation(form, {
            fields: {
                email: {
                    validators: {
                        notEmpty: {
                            message: "Customer email is required",
                        },
                    },
                },
                "f_name": {
                    validators: {
                        notEmpty: {
                            message: "First name is required",
                        },
                    },
                },
                "l_name": {
                    validators: {
                        notEmpty: {
                            message: "Last name is required",
                        },
                    },
                },
                country: {
                    validators: {
                        notEmpty: {
                            message: "Country is required",
                        },
                    },
                },
                phone: {
                    validators: {
                        notEmpty: {
                            message: "Phone is required",
                        },
                    },
                },
                address1: {
                    validators: {
                        notEmpty: {
                            message: "Address 1 is required",
                        },
                    },
                },
                city: {
                    validators: {
                        notEmpty: {
                            message: "City is required",
                        },
                    },
                },
                state: {
                    validators: {
                        notEmpty: {
                            message: "State is required",
                        },
                    },
                },
                postcode: {
                    validators: {
                        notEmpty: {
                            message: "Postcode is required",
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

        // Revalidate country field. For more info, plase visit the official plugin site: https://select2.org/
        $(form.querySelector('[name="country"]')).on("change", function () {
            // Revalidate the field when an option is chosen
            validator.revalidateField("country");
        });

        // Action buttons
        submitButton.addEventListener("click", function (e) {
            e.preventDefault();

            // Validate form before submit
            if (validator) {
                validator.validate().then(async function (status) {
                    console.log("validated!");

                    if (status == "Valid") {
                        submitButton.setAttribute("data-kt-indicator", "on");

                        // Disable submit button whilst loading
                        submitButton.disabled = true;

                        const response = await handles.formRequest(
                            "/admin/customer/store",
                            form,
                            "POST",
                            submitButton
                        );
                        modal.hide();

                    } else {
                        Swal.fire({
                            text: "Sorry, looks like there are some errors detected, please try again.",
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

        cancelButton.addEventListener("click", function (e) {
            e.preventDefault();

            Swal.fire({
                text: "Are you sure you would like to cancel?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, cancel it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light",
                },
            }).then(function (result) {
                if (result.value) {
                    form.reset(); // Reset form
                    modal.hide(); // Hide modal
                } else if (result.dismiss === "cancel") {
                    Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        },
                    });
                }
            });
        });

        closeButton.addEventListener("click", function (e) {
            e.preventDefault();

            Swal.fire({
                text: "Are you sure you would like to cancel?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, cancel it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light",
                },
            }).then(function (result) {
                if (result.value) {
                    form.reset(); // Reset form
                    modal.hide(); // Hide modal
                } else if (result.dismiss === "cancel") {
                    Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        },
                    });
                }
            });
        });
    };

    return {
        // Public functions
        init: function () {
            // Elements
            modal = new bootstrap.Modal(
                document.querySelector("#kt_modal_add_customer")
            );

            form = document.querySelector("#kt_modal_add_customer_form");
            submitButton = form.querySelector("#kt_modal_add_customer_submit");
            cancelButton = form.querySelector("#kt_modal_add_customer_cancel");
            closeButton = form.querySelector("#kt_modal_add_customer_close");

            handleForm();
        },
    };
})();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTModalCustomersAdd.init();
});
