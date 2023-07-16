"use strict";

var handles = (function () {
    const _token = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");

    const makeRequest = async (url, formData, type, header) => {
        // console.log(_token);

        // resource location
        const resourceLink = hostUrl + url;

        // access data
        const request = await fetch(resourceLink, {
            method: type,
            header: header,
            body: formData,
        });

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

            // console.log(formData);

            // set header
            const headers = {
                "X-CSRF-TOKEN": formData._token,
            };

            // make a request
            const response = await makeRequest(url, formData, type, headers);

            if (!response.success) {
                submitButton.removeAttribute("data-kt-indicator");
                submitButton.disabled = false;

                popupNotification(response);

                return;
            }

            console.log(response);

            setTimeout(function () {
                submitButton.removeAttribute("data-kt-indicator");
                submitButton.disabled = false;

                triggerPopupNotify(response, submitButton, form);
            }, 2000);
            // console.log(response);
        },

        delete: async function (url, data) {
            const _data = new FormData();

            _data.append("id", data.id);
            _data.append("_method", "DELETE");
            _data.append("_token", data.token);

            // set header
            const headers = {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": data.token,
            };

            const response = await makeRequest(url, _data, "DELETE", headers);

            if (!response.success) {
                popupNotification(response);

                return;
            }

            setTimeout(function () {
                triggerPopupNotify(response, submitButton, form);
            }, 2000);
        },
    };
})();
