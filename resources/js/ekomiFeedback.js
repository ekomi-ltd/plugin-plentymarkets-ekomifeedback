$(document).ready(function () {
        var prcBaseUrl = $('#prcBaseUrl').val();
        var prcItemID = $('#prcItemID').val();
        var prcFilter = 0;
        var prcOffset = 0;
        var reviewsLimit = parseInt($('#reviewsLimit').val());
        var reviewsCountTotal = parseInt($('#reviewsCountTotal').val());
        var reviewsCountPage = parseInt($('#reviewsCountPage').val());

        // sorting reviews data
        $('.ekomi_reviews_sort').on('change', function (e) {
            prcFilter = this.value;
            prcOffset = 0;
            var data = {
                prcItemID: prcItemID,
                prcOffset: prcOffset,
                reviewsLimit: reviewsLimit,
                prcFilter: prcFilter
            };

            $.ajax({
                type: "POST",
                url: prcBaseUrl + 'loadReviews',
                data: data,
                cache: false,
                success: function (data) {
                    var json = $.parseJSON(data);

                    $('#ekomi_reviews_container').html(json.result);

                    // reset the page offset

                    reviewsCountPage = json.count;

                    $('.current_review_batch').text(reviewsCountPage);
                    $('.loads_more_reviews').show();
                }
            });
        });

        // saving users feedback on reviews
        $('body').on('click', '.ekomi_review_helpful_button', function () {
            var current = $(this);

            var data = {
                prcItemID: prcItemID,
                review_id: $(this).data('review-id'),
                helpfulness: $(this).data('review-helpfulness')
            };

            $.ajax({
                type: "POST",
                url: prcBaseUrl + 'saveFeedback',
                data: data,
                cache: false,
                success: function (data) {
                    var json = $.parseJSON(data);

                    current.parent('.ekomi_review_helpful_question').hide();
                    current.parent().prev('.ekomi_review_helpful_thankyou').show();

                    var infoMsg= json.helpfullCount+" "+$('.ekomi_prc_out_of').text()+" "+json.totalCount+" "+$('.ekomi_prc_people_found').text();
                    current.parent().prev().prev('.ekomi_review_helpful_info').html(infoMsg);
                }
            });
        });

        // Loading reviews on paginatin
        $('body').on('click', '.loads_more_reviews', function (e) {
            prcOffset = reviewsCountPage;

            if (reviewsCountTotal / reviewsCountPage > 1) {
                var data = {
                    prcItemID: prcItemID,
                    prcOffset: prcOffset,
                    reviewsLimit: reviewsLimit,
                    prcFilter: prcFilter
                };

                $.ajax({
                    type: "POST",
                    url: prcBaseUrl + 'loadReviews',
                    data: data,
                    cache: false,
                    success: function (data) {
                        var json = $.parseJSON(data);

                        reviewsCountPage = reviewsCountPage + parseInt(json.count);
                        $('#ekomi_reviews_container').append(json.result);
                        $('.current_review_batch').text(reviewsCountPage);

                        if (reviewsCountTotal / reviewsCountPage <= 1) {
                            $('.loads_more_reviews').hide();
                        }
                    }
                });
            } else {
                $('.loads_more_reviews').hide();
            }
        });

        $('#ekomi_prc_reviews').on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $(".nav-tabs").offset().top
            }, 1800);

            $(".nav-tabs .nav-item:last a").click();
        });
});