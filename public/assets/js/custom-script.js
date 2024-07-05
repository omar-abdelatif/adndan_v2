//! Jquery
$(document).ready(function () {
    //! Image Upload Preview
    $(document).on("change", "#image", function (e) {
        let memberId = $(this).data("member-id");
        let reader = new FileReader();
        reader.onload = function (e) {
            $("#showImage_" + memberId).attr("src", e.target.result);
        };
        reader.readAsDataURL(e.target.files[0]);
    });
    //! Single Datatable
    $("#table").DataTable({
        paging: true,
        scrollY: 400,
        ordering: true,
        select: {
            style: "multi",
        },
        autoWidth: true,
        searching: true,
        pageLength: 20,
        pagingTag: "button",
        pagingType: "simple_numbers",
    });
});
//! Multi Datatables in Same Page
for (let i = 0; i < 500; i++) {
    let table = document.querySelector("#table" + i);
    new DataTable(table, {
        paging: true,
        // scrollY: tables[i],
        ordering: true,
        select: {
            style: "os",
            selector: "th:first-child",
        },
        autoWidth: true,
        searching: true,
        pagingTag: "button",
        pagingType: "simple_numbers",
    });
}
//! Remove Alert After  5 Seconds
const errors = document.querySelectorAll(".alert-danger");
errors.forEach((error) => {
    setTimeout(function () {
        error.style.display = "none";
    }, 5000);
});
const success = document.querySelectorAll(".alert-success");
success.forEach((error) => {
    setTimeout(function () {
        error.style.display = "none";
    }, 5000);
});

