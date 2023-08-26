"use strict";

// Class definition
var KTEcommerceUpdateProfile = (function () {
    var submitButton;
    var validator;
    var form;

    // Init form inputs
    var handleForm = function () {
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validator = FormValidation.formValidation(form, {
            fields: {
                first_name: {
                    validators: {
                        notEmpty: {
                            message: "Name is required",
                        },
                    },
                },
                last_name: {
                    validators: {
                        notEmpty: {
                            message: "Name is required",
                        },
                    },
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: "Email is required",
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

                        await handles.formRequest(
                            "customer/update-profile",
                            form,
                            "POST",
                            submitButton
                        );

                        // setTimeout(function() {
                        // 	submitButton.removeAttribute('data-kt-indicator');

                        // 	Swal.fire({
                        // 		text: "Your profile has been saved!",
                        // 		icon: "success",
                        // 		buttonsStyling: false,
                        // 		confirmButtonText: "Ok, got it!",
                        // 		customClass: {
                        // 			confirmButton: "btn btn-primary"
                        // 		}
                        // 	}).then(function (result) {
                        // 		if (result.isConfirmed) {
                        // 			// Enable submit button after loading
                        // 			submitButton.disabled = false;
                        // 		}
                        // 	});
                        // }, 2000);
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
    };

    return {
        // Public functions
        init: function () {
            // Elements
            form = document.querySelector("#kt_ecommerce_customer_profile");
            submitButton = form.querySelector(
                "#kt_ecommerce_customer_profile_submit"
            );

            handleForm();
        },
    };
})();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTEcommerceUpdateProfile.init();
});
