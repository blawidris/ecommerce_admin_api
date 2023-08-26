"use strict";

var handles = (function () {
    const _token = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");

    let headers = {
        "X-CSRF-TOKEN": _token,
    };

    const makeRequest = async (url, formData, type) => {
        if (type == "DELETE") {
            headers["Content-Type"] = "application/json";
            formData = JSON.stringify(formData);
        }

        // console.log(headers);

        // resource location
        const resourceLink = hostUrl + url;

        // access data
        const request = await fetch(resourceLink, {
            method: type,
            headers: headers,
            body: formData,
        });

        // console.log(header);

        return request.json();
    };

    const triggerPopupNotify = (response, button, form) => {
        button.removeAttribute("data-kt-indicator");

        Swal.fire({
            text: response.message,
            icon: response.type,
            buttonsStyling: false,
            confirmButtonText: "Ok, got it!",
            customClass: {
                confirmButton: "btn btn-primary",
            },
        }).then(function (result) {
            if (result.isConfirmed) {
                // Enable submit button after loading
                button.disabled = false;

                // Redirect to customers list page
                window.location = form.getAttribute("data-kt-redirect");
            }
        });
    };

    const popupNotification = (response) => {
        Swal.fire({
            text:
                response.message ??
                "Sorry, looks like there are some errors detected, please try again.",
            icon: response.type ?? "error",
            buttonsStyling: false,
            confirmButtonText: "Ok, got it!",
            customClass: {
                confirmButton: "btn btn-primary",
            },
        });
    };

    return {
        formRequest: async function (url, form, type, submitButton) {
            const formData = new FormData(form);
            ``;

            // make a request
            const response = await makeRequest(url, formData, type);

            if (!response.ok) {
                // Show error message on the top of the screen
                submitButton.removeAttribute("data-kt-indicator");
                submitButton.disabled = false;

                popupNotification(response);

                // console.log(response);

                return;
            }

            // console.log(response);

            setTimeout(function () {
                submitButton.removeAttribute("data-kt-indicator");
                submitButton.disabled = false;

                triggerPopupNotify(response, submitButton, form);
            }, 2000);
            // console.log(response);
        },

        delete: async function (url, data, button, table) {
            // set header
            // headers["Content-Type"] = "application/json";

            const response = await makeRequest(url, data, "DELETE");

            if (!response.success) {
                popupNotification(response);

                return;
            }

            const parent = button.target.closest("tr");

            setTimeout(function () {
                Swal.fire({
                    text: response.message + "!.",
                    icon: "success",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn fw-bold btn-primary",
                    },
                }).then(function () {
                    // Remove current row
                    table.row($(parent)).remove().draw();
                });
            }, 2000);
        },

        handleLogin: async function (form, button) {
            const formData = new FormData(form);

            // const url = "/login";
            const response = await makeRequest(
                "/admin/login",
                formData,
                "POST"
            );

            if (response.success) {
                Swal.fire({
                    text: response.message,
                    icon: response.type,
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary",
                    },
                }).then(function (result) {
                    button.removeAttribute("data-kt-indicator");
                    button.disabled = false;

                    if (result.isConfirmed) {
                        form.querySelector('[name="email"]').value = "";
                        form.querySelector('[name="password"]').value = "";

                        //form.submit(); // submit form
                        var redirectUrl = form.getAttribute(
                            "data-kt-redirect-url"
                        );

                        if (redirectUrl) {
                            location.href = redirectUrl;
                        }
                    }
                });
            } else {
                button.removeAttribute("data-kt-indicator");
                button.disabled = false;

                popupNotification(response);
            }
        },
    };
})();
