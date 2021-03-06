(function($) {
    "use strict";

    // Pricing Options Show

    $('#pricing_select input[name="rating_option"]').on('click', function() {
        if ($(this).val() == 'price_free') {
            $('#custom_price_cont').hide();
        }
        if ($(this).val() == 'custom_price') {
            $('#custom_price_cont').show();
        } else {}
    });

    // Education Add More

    $(".education-info").on('click', '.trash', function() {
        $(this).closest('.education-cont').remove();
        return false;
    });

    $(".add-education").on('click', function() {

        var educationcontent = '<div class="row form-row education-cont">' +
            '<div class="col-12 col-md-10 col-lg-11">' +
            '<div class="row form-row">' +
            '<div class="col-12 col-md-6 col-lg-4">' +
            '<div class="form-group">' +
            '<label>Degree</label>' +
            '<input type="text" class="form-control" name="degree">' +
            '</div>' +
            '</div>' +
            '<div class="col-12 col-md-6 col-lg-4">' +
            '<div class="form-group">' +
            '<label>College/Institute</label>' +
            '<input type="text" class="form-control" name="collage">' +
            '</div>' +
            '</div>' +
            '<div class="col-12 col-md-6 col-lg-4">' +
            '<div class="form-group">' +
            '<label>Year of Completion</label>' +
            '<input type="text" class="form-control" name="year_of_completion">' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<div class="col-12 col-md-2 col-lg-1"><label class="d-md-block d-sm-none d-none">&nbsp;</label><a href="#" class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a></div>' +
            '</div>';

        $(".education-info").append(educationcontent);
        return false;
    });

    // Experience Add More

    $(".experience-info").on('click', '.trash', function() {
        $(this).closest('.experience-cont').remove();
        return false;
    });

    $(".add-experience").on('click', function() {

        var experiencecontent = '<div class="row form-row experience-cont">' +
            '<div class="col-12 col-md-10 col-lg-11">' +
            '<div class="row form-row">' +
            '<div class="col-12 col-md-6 col-lg-4">' +
            '<div class="form-group">' +
            '<label>Hospital Name</label>' +
            '<input type="text" class="form-control" name="hospital_name">' +
            '</div>' +
            '</div>' +
            '<div class="col-12 col-md-6 col-lg-4">' +
            '<div class="form-group">' +
            '<label>From</label>' +
            '<input type="text" class="form-control" name="from_date">' +
            '</div>' +
            '</div>' +
            '<div class="col-12 col-md-6 col-lg-4">' +
            '<div class="form-group">' +
            '<label>To</label>' +
            '<input type="text" class="form-control" name="to_date">' +
            '</div>' +
            '</div>' +
            '<div class="col-12 col-md-6 col-lg-4">' +
            '<div class="form-group">' +
            '<label>Designation</label>' +
            '<input type="text" class="form-control" name="design">' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<div class="col-12 col-md-2 col-lg-1"><label class="d-md-block d-sm-none d-none">&nbsp;</label><a href="#" class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a></div>' +
            '</div>';

        $(".experience-info").append(experiencecontent);
        return false;
    });

    // Awards Add More

    $(".awards-info").on('click', '.trash', function() {
        $(this).closest('.awards-cont').remove();
        return false;
    });

    $(".add-award").on('click', function() {

        var regcontent = '<div class="row form-row awards-cont">' +
            '<div class="col-12 col-md-5">' +
            '<div class="form-group">' +
            '<label>Awards</label>' +
            '<input type="text" class="form-control" name="award_name">' +
            '</div>' +
            '</div>' +
            '<div class="col-12 col-md-5">' +
            '<div class="form-group">' +
            '<label>Year</label>' +
            '<input type="text" class="form-control" ward_year>' +
            '</div>' +
            '</div>' +
            '<div class="col-12 col-md-2">' +
            '<label class="d-md-block d-sm-none d-none">&nbsp;</label>' +
            '<a href="#" class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a>' +
            '</div>' +
            '</div>';

        $(".awards-info").append(regcontent);
        return false;
    });





})(jQuery);