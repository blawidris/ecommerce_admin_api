"use strict";

var handles = (function () {
    const makeRequest = async (url, formData, type, header) => {
        // console.log(hostUrl);

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
            text: response.msg,
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
            icon: response,
            type,
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

            if (response.success) {
                setTimeout(function () {
                    triggerPopupNotify(response, submitButton, form);
                }, 2000);
            } else {
                popupNotification(response);
            }

            console.log(response);
        },
    };
})();
