<?php include 'partials/header-2.php'; ?>

<style>
    .stepwizard-step p {
        margin-top: 0px;
        color: #666;
    }

    .stepwizard-row {
        display: table-row;
    }

    .btn-success:hover {
        color: #fff;
        background-color: #22A6B3 !important;
        border-color: #22A6B3 !important;
    }

    .btn-success {
    background-color: #22A6B3 !important;
    border-color: #22A6B3 !important;
    color: #fff !important;
}

    .stepwizard-row:before {
        top: 14px;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 100%;
        height: 1px;
        background-color: #22A6B3;
        /* Default blue color */
        z-index: 0;
        height: 15px;
        border-radius: 12px;
        transition: background-color 0.3s;
        /* Add a smooth transition */
    }

    .stepwizard-row.active-line:before {
        background-color: black;
        /* Active color */
    }


    .stepwizard {
        display: table;
        width: 100%;
        position: relative;

    }

    .btn-circle:active {
        width: 90px;
        height: 90px;
        text-align: center;
        padding: 6px 0;
        font-size: 12px;
        line-height: 1.428571429;
        border-radius: 55px;
        background: green;
        padding-top: 25px;
    }



    .stepwizard-step button[disabled] {
        /*opacity: 1 !important;
    filter: alpha(opacity=100) !important;*/
    }

    .stepwizard .btn.disabled,
    .stepwizard .btn[disabled],
    .stepwizard fieldset[disabled] .btn {
        opacity: 1 !important;
        color: #bbb;
    }

    .stepwizard-row:before {
        top: 14px;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 100%;
        height: 1px;
        background-color: #22A6B3;
        z-index: 0;
        stroke-width: 15px;
        stroke: #22A6B3;
        height: 15px;
        border-radius: 12px;
    }

    .stepwizard-step {
        display: table-cell;
        text-align: center;
        position: relative;
        top: -2rem;
    }


    .btn-circle {
        width: 90px;
        height: 90px;
        text-align: center;
        padding: 6px 0;
        font-size: 12px;
        line-height: 1.428571429;
        border-radius: 55px;
        background: #B9ECF6;
        border-color: #B9ECF6;
        padding-top: 25px;
        z-index: 1;
        background-color: #B9ECF6;
    }

    .btn-active {
        background-color: #22A6B3;
        color: #fff;
        border: #22A6B3;
    }

    .file-input-container {
        display: inline-block;
        position: relative;
        overflow: hidden;
        border-bottom: 1px solid #9F9F9F;
    }

    .file-input {
        /* position: absolute; */
        top: 0;
        right: 0;
        opacity: 0;
        font-size: 15px;
        cursor: pointer;

    }

    button.styled-button {
        left: 20%;
        position: relative;
    }

    .styled-button {
        background-color: #17a2b8;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 14px;
        cursor: pointer;
        display: inline-block;
        border-radius: 5px;
    }

    .image-preview {
        margin-top: 20px;
        max-width: 100%;
        height: auto;
        display: none;
    }

    .stepwizard-row:before {
        content: "";
        position: absolute;
        top: 10%;
        left: 0;
        width: 100%;
        height: 13px;
        background-color: #B9ECF6;
        z-index: 0;
        transition: width 0.3s ease;
    }

    .stepwizard-row .line-progress {
        content: "";
        position: absolute;
        top: 10%;
        left: 0;
        height: 13px;
        background-color: #22A6B3;
        z-index: 0;
        transition: width 0.3s ease;
        border-radius: 20px;
        /* width: 135px; */
    }

    .line-step-1 {
        width: 25%;
    }

    .line-step-2 {
        width: 50%;
    }

    .line-step-3 {
        width: 75%;
    }

    .line-step-4 {
        width: 100%;
    }
</style>


<section id="banner_bottom_area" class="section_padding">
    <div class="container">
        <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step col-xs-3">
                    <a href="#step-1" type="button" class="btn btn-success btn-circle"><img
                            src="assets/img/form/4 (4).png" alt=""></a>

                </div>
                <div class="stepwizard-step col-xs-3">
                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled"><img
                            src="assets/img/form/4 (2).png" alt=""></a>

                </div>
                <div class="stepwizard-step col-xs-3">
                    <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled"><img
                            src="assets/img/form/4 (3).png" alt=""></a>

                </div>
                <div class="stepwizard-step col-xs-3">
                    <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled"><img
                            src="assets/img/form/4 (1).png" alt=""></a>

                </div>
            </div>
        </div>

        <form role="form">
            <div class="panel panel-primary setup-content" id="step-1">
                <div class="panel-heading">
                    <h3 class="category cabin">Shipment Information</h3>
                    <p>Choose shipping information</p>

                    <div class="ptb-50">
                        <div class="border-bottom"></div>
                    </div>
                </div>
                <div class="panel-body">
                    <h3 class="category1 cabin">Title Information*</h3>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label class="control-label">No. of Dogs</label>
                                <input maxlength="100" type="number" required="required" class="form-control2"
                                    placeholder="" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">Shipment Title</label>
                                <input maxlength="100" type="text" required="required" class="form-control2"
                                    placeholder="" />
                            </div>
                        </div>
                    </div>

                    <br>
                    <h3 class="category1 cabin">Title Information*</h3>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label class="control-label">Dog Name</label>
                                <input maxlength="100" type="text" required="required" class="form-control2"
                                    placeholder="" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">Dog bread</label>
                                <input maxlength="100" type="text" required="required" class="form-control2"
                                    placeholder="" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">Dog’s Weight</label>
                                <input maxlength="100" type="text" required="required" class="form-control2"
                                    placeholder="" />
                            </div>
                        </div>
                    </div>
                    <div class="ptb-50">
                        <div class="border-bottom"></div>
                    </div>

                    <h3 class="category1 cabin">Add More Information*</h3>
                    <div class="row">
                        <div class="col-md-2">

                            <div class="file-input-container">
                                <label class="control-label">Upload Picture</label>
                                <button class="styled-button" id="uploadButton">Choose file</button>
                                <input type="file" class="file-input" id="fileInput" />
                            </div>
                            <img id="imagePreview" class="image-preview" alt="Image Preview" />
                        </div>


                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">Additional details</label>
                            <input maxlength="100" type="text" required="required" class="form-control2"
                                placeholder="You have 1200 characters left" />
                        </div>
                    </div>

                    <div class="ptb-50">

                        <button class="btn btn_black btn_md" type="button">Back</button>
                        <button class="btn  nextBtn pull-right btn btn_theme2 btn_md" type="button">Continue</button>
                    </div>
                </div>
            </div>

            <div class="panel panel-primary setup-content" id="step-2">
                <div class="panel-heading">
                    <h3 class="category cabin">Pickup & Delivery Information</h3>
                    <p>Choose Pickup and Delivery information</p>

                    <div class="ptb-50">
                        <div class="border-bottom"></div>
                    </div>
                </div>
                <div class="panel-body">
                    <h3 class="category1 cabin">Pickup Information*</h3>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label class="control-label">Pickup Location is a</label>
                                <input maxlength="100" type="text" required="required" class="form-control2"
                                    placeholder="" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">Location</label>
                                <input maxlength="100" type="text" required="required" class="form-control2"
                                    placeholder="" />
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">When can your shipment be picked up?</label>
                                <input maxlength="100" type="text" required="required" class="form-control2"
                                    placeholder="" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">Date</label>
                                <input maxlength="100" type="date" required="required" class="form-control2"
                                    placeholder="" />
                            </div>
                        </div>
                    </div>

                    <br>
                    <h3 class="category1 cabin">Delivery Information*</h3>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label class="control-label">Pickup Location is a</label>
                                <input maxlength="100" type="text" required="required" class="form-control2"
                                    placeholder="" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">Location</label>
                                <input maxlength="100" type="text" required="required" class="form-control2"
                                    placeholder="" />
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">When can your shipment be picked up?</label>
                                <input maxlength="100" type="text" required="required" class="form-control2"
                                    placeholder="" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">Date</label>
                                <input maxlength="100" type="date" required="required" class="form-control2"
                                    placeholder="" />
                            </div>
                        </div>
                    </div>






                    <div class="ptb-50">

                        <button class="btn btn_black btn_md" type="button">Back</button>
                        <button class="btn  nextBtn pull-right btn btn_theme2 btn_md" type="button">Continue</button>
                    </div>
                </div>
            </div>

            <div class="panel panel-primary setup-content" id="step-3">
                <div class="panel-heading">
                    <h3 class="category cabin">User Information</h3>
                    <p>Pleas enter your information</p>

                    <div class="ptb-50">
                        <div class="border-bottom"></div>
                    </div>
                </div>
                <div class="panel-body">
                    <h3 class="category1 cabin">Create an Account</h3>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label class="control-label">First Name</label>
                                <input maxlength="100" type="text" required="required" class="form-control2"
                                    placeholder="" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">Last Name</label>
                                <input maxlength="100" type="text" required="required" class="form-control2"
                                    placeholder="" />
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Enter your Email Address</label>
                                <input maxlength="100" type="email" required="required" class="form-control2"
                                    placeholder="" />
                            </div>
                        </div>

                    </div>

                    <br>
                    <h3 class="category1 cabin">Account Information</h3>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label class="control-label">Account Type</label>
                                <input maxlength="100" type="text" required="required" class="form-control2"
                                    placeholder="" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">Password</label>
                                <input maxlength="100" type="password" required="required" class="form-control2"
                                    placeholder="" />
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="para">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            I agree to the terms of <a href="">User Agreement</a> and <a href=""> Privacy Policy. </a>
                        </div>
                    </div>


                    <div class="ptb-50">

                        <button class="btn btn_black btn_md" type="button">Back</button>
                        <button class="btn  nextBtn pull-right btn btn_theme2 btn_md" type="button">Continue</button>
                    </div>

                    <div class="ptb-10">
                        <p>By clicking Continue, you accept the terms and conditions of the <a href="">User
                                Agreement</a> and <a href=""> Privacy
                                Policy.</a> By entering an email address and clicking "Join petshipsters" you agree to
                            be contacted
                            by petshipsters for site notifications, transactional emails and select petshipsters
                            promotions.
                            We do not sell, rent or share your email and you may opt out of all emails at any time.</p>
                    </div>
                </div>
            </div>

            <div class="panel panel-primary setup-content" id="step-4">
                <div class="panel-heading">
                    <h3 class="category cabin">Ready to Book?</h3>
                    <p>Chose an option below</p>

                    <div class="ptb-50">
                        <div class="border-bottom"></div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4 offset-md-2">
                            <div class="our_pricing_wrapper">
                                <div class="our_pricing_top">

                                    <p class="cabin quotes">Get Quotes Now!</p>
                                    <h6 class="qtext">Service providers quote to win your business</h6>
                                </div>
                                <div class="our_pricing_bottom">
                                    <ul>
                                        <li class="active"><img src="assets/img/home/clock.png" alt=""> AVG. Time to
                                            Book
                                        </li>
                                        <p class="d-days"> 5 days</p>

                                        <div class="ptb-10">
                                            <div class="border-bottom"></div>
                                        </div>
                                        <li><i class="fas fa-check-circle"></i> Receive quotes within hours or even
                                            minutes </li>
                                        <li><i class="fas fa-check-circle"></i> Compare rates, timeframes and reviews
                                        </li>
                                        <li><i class="fas fa-check-circle"></i> Pick your winning service provider at
                                            any time
                                        </li>
                                        <div class="ptb-10">
                                            <div class="border-bottom"></div>
                                        </div>
                                        <div class="our_pricing_btn">
                                            <a href="#" class="btn btn_theme_white btn_md">Request quotes</a>
                                        </div>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 offset-md-1">
                            <div class="our_pricing_wrapper">
                                <div class="our_pricing_top">

                                    <p class="cabin quotes">Set Your Own Price</p>
                                    <h6 class="qtext">Make an offer to service providers with available space</h6>
                                </div>
                                <div class="our_pricing_bottom">
                                    <ul>
                                        <li class="active"><img src="assets/img/home/clock.png" alt=""> AVG. Time to
                                            Book
                                        </li>
                                        <p class="d-days"> 2-3 days</p>

                                        <div class="ptb-10">
                                            <div class="border-bottom"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label class="control-label1">Enter your Price</label>
                                                    <input maxlength="100" type="number" required="required"
                                                        class="form-control2" placeholder="$ 364.00" />
                                                </div>
                                            </div>

                                        </div>
                                        <div class="ptb-10">
                                            <div class="border-bottom"></div>
                                        </div>
                                        <div class="our_pricing_btn">
                                            <a href="#" class="btn btn_theme_white btn_md">Submit My Offer</a>
                                        </div>
                                    </ul>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="ptb-50">

                        <button class="btn btn_black btn_md" type="button">Back</button>
                        <button class="btn  nextBtn pull-right btn btn_theme2 btn_md" type="button">Finish</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<?php include 'partials/footer.php'; ?>

<script>
    // Get the button and file input elements
    const uploadButton = document.getElementById('uploadButton');
    const fileInput = document.getElementById('fileInput');
    const imagePreview = document.getElementById('imagePreview');

    // Trigger the file input when the button is clicked
    uploadButton.addEventListener('click', function () {
        fileInput.click();
    });

    // Handle file input change and show image preview
    fileInput.addEventListener('change', function (event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                imagePreview.src = e.target.result;
                imagePreview.style.display = 'block'; // Show the image
            }
            reader.readAsDataURL(file);
        }
    });
</script>

<script>
  $(document).ready(function () {
    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn'),
        stepwizardRow = $('.stepwizard-row');

    allWells.hide();

    function updateLineProgress(index) {
        stepwizardRow.find('.line-progress').remove();

        // Add a progress line
        var progressLine = $('<div class="line-progress"></div>');
        stepwizardRow.append(progressLine);

        // Add the appropriate class based on the current index
        if (index === 0) {
            progressLine.addClass('line-step-1');
        } else if (index === 1) {
            progressLine.addClass('line-step-2');
        } else if (index === 2) {
            progressLine.addClass('line-step-3');
        } else if (index === 3) {
            progressLine.addClass('line-step-4');
        }
    }

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this),
            index = $item.parent().index();

        if (!$item.hasClass('disabled')) {
            // Remove active class from all and add to the current item
            navListItems.removeClass('btn-success btn-active').addClass('btn-default');
            $item.addClass('btn-success btn-active');

            // Change color for all previous steps
            navListItems.each(function (i) {
                if (i < index) {
                    $(this).removeClass('btn-default').addClass('btn-success');
                }
            });

            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();

            // Update the progress line
            updateLineProgress(index);
        }
    });

    allNextBtn.click(function () {
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type=\"text\"], input[type=\"url\"]");
            isValid = true;

        $(".form-group").removeClass("has-error");
        for (var i = 0; i < curInputs.length; i++) {
            if (!curInputs[i].validity.valid) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid) {
            nextStepWizard.removeAttr('disabled').trigger('click');
        }
    });

    // Trigger the first step on page load
    $('div.setup-panel div a.btn-success').trigger('click');
});


</script>