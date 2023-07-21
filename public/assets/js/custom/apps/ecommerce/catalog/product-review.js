"use strict";

var KTDatatablesServerSide = function () {
    var table;
    var dt;
    var filterReview;

    var initDataTable = () => {
        dt = $("#kt_ecommerce_add_product_reviews").DataTable({
            searchDelay: 500,
            processing: true,
            serverside: true,
            order: [[4, "desc"]],
            stateSave: true,
            select: {
                style: "multi",
                selector: 'td:first-child input[type="checkbox"]',
                className: "row-selected",
            },
            ajax: {
                url: "",
            },
            columns: {
                data: "id",
                data: "customer",
                data: "comment",
                data: "date",
                data: null,
            },
            columnDefs: [
                {
                    target: 1,
                    
                }
            ],
        });
    };
};
