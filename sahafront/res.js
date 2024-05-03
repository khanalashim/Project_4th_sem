$(document).ready(function () {
    let clicked = false;

    $(".main_reviews .star-wrapper i").on("mouseover", function () {
        if (!clicked && $(this).siblings("i.vote-recorded").length == 0) {
            $(this).prevAll().addBack().addClass("fa-solid yellow").removeClass("fa-regular");
            $(this).nextAll().removeClass("fa-solid yellow").addClass("fa-regular");
        }
    });

    $("div.star-wrapper i").on("click", function () {
        clicked = true;
        let rating = $(this).prevAll().length + 1;
        $(this).prevAll().addBack().addClass("fa-solid yellow").removeClass("fa-regular");
        $(this).nextAll().removeClass("fa-solid yellow").addClass("fa-regular");

        submitRating(rating);
    });

    $("#reserve_btn_ratings").on("click", function () {
        let rating = $(".main_reviews .star-wrapper i.fa-solid").length;
        let comment = $("#comment").val();
        submitRating(rating, comment);
        
    });

    function submitRating(rating, comment = "") {
        $.ajax({
            type: "POST",
            url: "process_rating.php",
            data: { rating: rating, comment: comment, sellerid: sellerid, vehid: vehid },
            success: function (response) {
                // Handle success response if needed
                
            },
            error: function (xhr, status, error) {
                // Handle error response if needed
                console.error(xhr.responseText);
            }
        });
    }

});
