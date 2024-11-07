<?php include 'partials/header-2.php'; ?>

<style>
    #footer_area {
        padding: 110px 0 100px 0;
        background: #1D1A1A;
        margin-top: -95px;
        display: none;
    }

    .align-items-center {
        align-items: center !important;
        display: none;
    }

    .copyright_area {
        background-color: #1D1A1A;
        padding: 15px 0;
        border-top: 1px solid rgba(255, 255, 255, 0.10);
        display: none;
    }
</style>

<section id="banner_bottom_area" class="section_padding ">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section_heading">
                    <h2>Transporter Info</h2>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">

                <div class="main_service_item_wrapper1">

                    <div class="contact_form_main_area">
                        <form action="#!" id="contact_form">
                            <div class="row">
                                <div class="ptb-20">
                                    <p class="form-label-text">Name (Primary Owner)</p>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="text-left">
                                            <label class="form-label-text">First Name</label>
                                        </div>
                                        <input type="text" class="form-control3" placeholder="john" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="text-left">
                                            <label class="form-label-text">Last Name</label>
                                        </div>
                                        <input type="text" class="form-control3" placeholder="doe" required="">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="text-left">
                                            <label class="form-label-text">Name of Business</label>
                                        </div>
                                        <input type="text" class="form-control3" placeholder="" required="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="text-left">
                                            <label class="form-label-text">Email </label>
                                        </div>
                                        <input type="email" class="form-control3" placeholder="email" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="text-left">
                                            <label class="form-label-text">Phone Number</label>
                                        </div>
                                        <input type="number" class="form-control3"
                                            placeholder="Please enter a valid phone number." required="">
                                    </div>
                                </div>



                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="text-left">
                                            <label class="form-label-text">Address</label>
                                        </div>
                                        <input type="TEXT" class="form-control3" placeholder="Street Address"
                                            required="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">

                                        <input type="text" class="form-control3" placeholder="Street Address Line 2"
                                            required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="text-left">
                                            <label class="form-label-text">City</label>
                                        </div>
                                        <input type="text" class="form-control3" placeholder="" required="">
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="text-left">
                                            <label class="form-label-text">State / Province</label>
                                        </div>
                                        <input type="text" class="form-control3" placeholder="" required="">
                                    </div>

                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="text-left">
                                            <label class="form-label-text">Postal / Zip Code</label>
                                        </div>
                                        <input type="text" class="form-control3" placeholder="" required="">
                                    </div>

                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="text-left">
                                            <label class="form-label-text">Additional Information</label>
                                        </div>
                                        <!--begin::Form-->
                                        <form class="form" action="#" method="post">
                                            <!--begin::Input group-->
                                            <div class="fv-row">
                                                <!--begin::Dropzone-->
                                                <div class="dropzone" id="kt_dropzonejs_example_1">
                                                    <!--begin::Message-->
                                                    <div class="dz-message needsclick">
                                                        <i class="ki-duotone ki-file-up fs-3x text-primary"><span
                                                                class="path1"></span><span class="path2"></span></i>

                                                        <!--begin::Info-->
                                                        <div class="ms-4">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="77"
                                                                height="71" viewBox="0 0 77 71" fill="none">
                                                                <path
                                                                    d="M18.9664 50.0641C-5.6036 52.7941 -2.87361 22.7641 18.9664 25.4941C10.7764 -4.53583 57.1863 -4.53583 54.4563 17.3041C81.7563 9.11415 81.7563 52.7941 57.1863 50.0641M24.4264 39.1441L38.0763 28.2241M38.0763 28.2241L51.7263 39.1441M38.0763 28.2241V69.1741"
                                                                    stroke="#A6A6A6" stroke-width="3"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here
                                                                or click to upload.</h3>

                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                </div>
                                                <!--end::Dropzone-->
                                            </div>
                                            <!--end::Input group-->
                                        </form>
                                        <!--end::Form-->
                                    </div>

                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="text-left">
                                            <label class="form-label-text">Proof of Pet Insurance</label>
                                        </div>
                                        <!--begin::Form-->
                                        <form class="form" action="#" method="post">
                                            <!--begin::Input group-->
                                            <div class="fv-row">
                                                <!--begin::Dropzone-->
                                                <div class="dropzone" id="kt_dropzonejs_example_2">
                                                    <!--begin::Message-->
                                                    <div class="dz-message needsclick">
                                                        <i class="ki-duotone ki-file-up fs-3x text-primary"><span
                                                                class="path1"></span><span class="path2"></span></i>

                                                        <!--begin::Info-->
                                                        <div class="ms-4">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="77"
                                                                height="71" viewBox="0 0 77 71" fill="none">
                                                                <path
                                                                    d="M18.9664 50.0641C-5.6036 52.7941 -2.87361 22.7641 18.9664 25.4941C10.7764 -4.53583 57.1863 -4.53583 54.4563 17.3041C81.7563 9.11415 81.7563 52.7941 57.1863 50.0641M24.4264 39.1441L38.0763 28.2241M38.0763 28.2241L51.7263 39.1441M38.0763 28.2241V69.1741"
                                                                    stroke="#A6A6A6" stroke-width="3"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here
                                                                or click to upload.</h3>

                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                </div>
                                                <!--end::Dropzone-->
                                            </div>
                                            <!--end::Input group-->
                                        </form>
                                        <!--end::Form-->
                                    </div>

                                </div>

                                <div class="ptb-20">
                                    <p class="form-label-text">Driver's Info</p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="text-left">
                                            <label class="form-label-text">Number of Drivers Other than Yourself</label>
                                        </div>
                                        <input type="text" class="form-control3" placeholder="john" required="">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">



                                        <!--begin::Form-->
                                        <form class="form" action="#" method="post">
                                            <!--begin::Input group-->
                                            <div class="fv-row">
                                                <!--begin::Dropzone-->
                                                <div class="dropzone1" id="kt_dropzonejs_example_3">
                                                    <!--begin::Message-->
                                                    <div class="dz-message needsclick">
                                                        <i class="ki-duotone ki-file-up fs-3x text-primary"><span
                                                                class="path1"></span><span class="path2"></span></i>

                                                        <!--begin::Info-->
                                                        <div class="ms-4">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="154"
                                                                height="154" viewBox="0 0 154 154" fill="none">
                                                                <path
                                                                    d="M3.49194 76.5962C3.49194 41.9446 3.49194 24.6188 14.2535 13.8499C25.0297 3.08838 42.3482 3.08838 76.9998 3.08838C111.651 3.08838 128.977 3.08838 139.739 13.8499C150.508 24.6262 150.508 41.9446 150.508 76.5962C150.508 111.248 150.508 128.574 139.739 139.335C128.984 150.104 111.651 150.104 76.9998 150.104C42.3482 150.104 25.0224 150.104 14.2535 139.335C3.49194 128.581 3.49194 111.248 3.49194 76.5962Z"
                                                                    stroke="#B0B0B0" stroke-width="6" />
                                                                <path
                                                                    d="M106.403 61.8946C114.522 61.8946 121.105 55.3125 121.105 47.193C121.105 39.0736 114.522 32.4915 106.403 32.4915C98.2835 32.4915 91.7014 39.0736 91.7014 47.193C91.7014 55.3125 98.2835 61.8946 106.403 61.8946Z"
                                                                    stroke="#B0B0B0" stroke-width="6" />
                                                                <path
                                                                    d="M3.49194 80.2716L16.3705 69.0028C19.5985 66.1806 23.7782 64.6904 28.0636 64.8337C32.3489 64.977 36.4197 66.7431 39.452 69.7746L70.9868 101.31C73.4339 103.756 76.6657 105.261 80.1132 105.56C83.5607 105.858 87.003 104.931 89.8342 102.941L92.0321 101.398C96.1162 98.5293 101.052 97.1311 106.034 97.4315C111.016 97.7319 115.748 99.7132 119.458 103.052L143.157 124.376"
                                                                    stroke="#B0B0B0" stroke-width="6"
                                                                    stroke-linecap="round" />
                                                            </svg>
                                                            <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here
                                                                or click to upload.</h3>

                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                </div>
                                                <!--end::Dropzone-->
                                            </div>
                                            <!--end::Input group-->
                                        </form>
                                        <!--end::Form-->
                                    </div>

                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="text-left">
                                            <label class="form-label-text">First Name</label>
                                        </div>
                                        <input type="text" class="form-control3" placeholder="" required="">
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="text-left">
                                            <label class="form-label-text">Last Name</label>
                                        </div>
                                        <input type="text" class="form-control3" placeholder="" required="">
                                    </div>

                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="text-left">
                                            <label class="form-label-text">Driver's License</label>
                                        </div>
                                        <input type="text" class="form-control3" placeholder="" required="">
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="text-left">
                                            <label class="form-label-text">Social Security Number</label>
                                        </div>
                                        <input type="text" class="form-control3" placeholder="" required="">
                                    </div>

                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">



                                        <!--begin::Form-->
                                        <form class="form" action="#" method="post">
                                            <!--begin::Input group-->
                                            <div class="fv-row">
                                                <!--begin::Dropzone-->
                                                <div class="dropzone1" id="kt_dropzonejs_example_4">
                                                    <!--begin::Message-->
                                                    <div class="dz-message needsclick">
                                                        <i class="ki-duotone ki-file-up fs-3x text-primary"><span
                                                                class="path1"></span><span class="path2"></span></i>

                                                        <!--begin::Info-->
                                                        <div class="ms-4">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="154"
                                                                height="154" viewBox="0 0 154 154" fill="none">
                                                                <path
                                                                    d="M3.49194 76.5962C3.49194 41.9446 3.49194 24.6188 14.2535 13.8499C25.0297 3.08838 42.3482 3.08838 76.9998 3.08838C111.651 3.08838 128.977 3.08838 139.739 13.8499C150.508 24.6262 150.508 41.9446 150.508 76.5962C150.508 111.248 150.508 128.574 139.739 139.335C128.984 150.104 111.651 150.104 76.9998 150.104C42.3482 150.104 25.0224 150.104 14.2535 139.335C3.49194 128.581 3.49194 111.248 3.49194 76.5962Z"
                                                                    stroke="#B0B0B0" stroke-width="6" />
                                                                <path
                                                                    d="M106.403 61.8946C114.522 61.8946 121.105 55.3125 121.105 47.193C121.105 39.0736 114.522 32.4915 106.403 32.4915C98.2835 32.4915 91.7014 39.0736 91.7014 47.193C91.7014 55.3125 98.2835 61.8946 106.403 61.8946Z"
                                                                    stroke="#B0B0B0" stroke-width="6" />
                                                                <path
                                                                    d="M3.49194 80.2716L16.3705 69.0028C19.5985 66.1806 23.7782 64.6904 28.0636 64.8337C32.3489 64.977 36.4197 66.7431 39.452 69.7746L70.9868 101.31C73.4339 103.756 76.6657 105.261 80.1132 105.56C83.5607 105.858 87.003 104.931 89.8342 102.941L92.0321 101.398C96.1162 98.5293 101.052 97.1311 106.034 97.4315C111.016 97.7319 115.748 99.7132 119.458 103.052L143.157 124.376"
                                                                    stroke="#B0B0B0" stroke-width="6"
                                                                    stroke-linecap="round" />
                                                            </svg>
                                                            <h3 class="fs-5 fw-bold text-gray-900 mb-1"></h3>

                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                </div>
                                                <!--end::Dropzone-->
                                            </div>
                                            <!--end::Input group-->
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="text-left">
                                            <label class="form-label-text">Make</label>
                                        </div>
                                        <input type="text" class="form-control3" placeholder="" required="">
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="text-left">
                                            <label class="form-label-text">Year</label>
                                        </div>
                                        <input type="text" class="form-control3" placeholder="" required="">
                                    </div>

                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="text-left">
                                            <label class="form-label-text">Model</label>
                                        </div>
                                        <input type="text" class="form-control3" placeholder="" required="">
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="text-left">
                                            <label class="form-label-text">Color</label>
                                        </div>
                                        <input type="text" class="form-control3" placeholder="" required="">
                                    </div>

                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="text-left">
                                            <label class="form-label-text">VIN</label>
                                        </div>
                                        <input type="text" class="form-control3" placeholder="" required="">
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="text-left">
                                            <label class="form-label-text">License Plate Number</label>
                                        </div>
                                        <input type="text" class="form-control3" placeholder="" required="">
                                    </div>

                                </div>

                                <form class="form" action="#" method="post">

                                    <div class="text-left">
                                        <label class="form-label-text">Proof of Vehicle Insurance</label>
                                    </div>
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Dropzone-->
                                        <div class="dropzone" id="kt_dropzonejs_example_5">
                                            <!--begin::Message-->
                                            <div class="dz-message needsclick">
                                                <i class="ki-duotone ki-file-up fs-3x text-primary"><span
                                                        class="path1"></span><span class="path2"></span></i>

                                                <!--begin::Info-->
                                                <div class="ms-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="154" height="154"
                                                        viewBox="0 0 154 154" fill="none">
                                                        <path
                                                            d="M3.49194 76.5962C3.49194 41.9446 3.49194 24.6188 14.2535 13.8499C25.0297 3.08838 42.3482 3.08838 76.9998 3.08838C111.651 3.08838 128.977 3.08838 139.739 13.8499C150.508 24.6262 150.508 41.9446 150.508 76.5962C150.508 111.248 150.508 128.574 139.739 139.335C128.984 150.104 111.651 150.104 76.9998 150.104C42.3482 150.104 25.0224 150.104 14.2535 139.335C3.49194 128.581 3.49194 111.248 3.49194 76.5962Z"
                                                            stroke="#B0B0B0" stroke-width="6" />
                                                        <path
                                                            d="M106.403 61.8946C114.522 61.8946 121.105 55.3125 121.105 47.193C121.105 39.0736 114.522 32.4915 106.403 32.4915C98.2835 32.4915 91.7014 39.0736 91.7014 47.193C91.7014 55.3125 98.2835 61.8946 106.403 61.8946Z"
                                                            stroke="#B0B0B0" stroke-width="6" />
                                                        <path
                                                            d="M3.49194 80.2716L16.3705 69.0028C19.5985 66.1806 23.7782 64.6904 28.0636 64.8337C32.3489 64.977 36.4197 66.7431 39.452 69.7746L70.9868 101.31C73.4339 103.756 76.6657 105.261 80.1132 105.56C83.5607 105.858 87.003 104.931 89.8342 102.941L92.0321 101.398C96.1162 98.5293 101.052 97.1311 106.034 97.4315C111.016 97.7319 115.748 99.7132 119.458 103.052L143.157 124.376"
                                                            stroke="#B0B0B0" stroke-width="6" stroke-linecap="round" />
                                                    </svg>
                                                    <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here
                                                        or click to upload.</h3>

                                                </div>
                                                <!--end::Info-->
                                            </div>
                                        </div>
                                        <!--end::Dropzone-->
                                    </div>
                                    <!--end::Input group-->
                                </form>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <br>


                                        <!--begin::Form-->
                                        <form class="form" action="#" method="post">

                                            <div class="text-left">
                                                <label class="form-label-text">Signature</label>
                                            </div>
                                            <!--begin::Input group-->
                                            <div class="fv-row">
                                                <!--begin::Dropzone-->
                                                <div class="dropzone" id="kt_dropzonejs_example_6">
                                                    <!--begin::Message-->
                                                    <div class="dz-message needsclick">
                                                        <i class="ki-duotone ki-file-up fs-3x text-primary"><span
                                                                class="path1"></span><span class="path2"></span></i>

                                                        <!--begin::Info-->
                                                        <div class="ms-4">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="154"
                                                                height="154" viewBox="0 0 154 154" fill="none">
                                                                <path
                                                                    d="M3.49194 76.5962C3.49194 41.9446 3.49194 24.6188 14.2535 13.8499C25.0297 3.08838 42.3482 3.08838 76.9998 3.08838C111.651 3.08838 128.977 3.08838 139.739 13.8499C150.508 24.6262 150.508 41.9446 150.508 76.5962C150.508 111.248 150.508 128.574 139.739 139.335C128.984 150.104 111.651 150.104 76.9998 150.104C42.3482 150.104 25.0224 150.104 14.2535 139.335C3.49194 128.581 3.49194 111.248 3.49194 76.5962Z"
                                                                    stroke="#B0B0B0" stroke-width="6" />
                                                                <path
                                                                    d="M106.403 61.8946C114.522 61.8946 121.105 55.3125 121.105 47.193C121.105 39.0736 114.522 32.4915 106.403 32.4915C98.2835 32.4915 91.7014 39.0736 91.7014 47.193C91.7014 55.3125 98.2835 61.8946 106.403 61.8946Z"
                                                                    stroke="#B0B0B0" stroke-width="6" />
                                                                <path
                                                                    d="M3.49194 80.2716L16.3705 69.0028C19.5985 66.1806 23.7782 64.6904 28.0636 64.8337C32.3489 64.977 36.4197 66.7431 39.452 69.7746L70.9868 101.31C73.4339 103.756 76.6657 105.261 80.1132 105.56C83.5607 105.858 87.003 104.931 89.8342 102.941L92.0321 101.398C96.1162 98.5293 101.052 97.1311 106.034 97.4315C111.016 97.7319 115.748 99.7132 119.458 103.052L143.157 124.376"
                                                                    stroke="#B0B0B0" stroke-width="6"
                                                                    stroke-linecap="round" />
                                                            </svg>
                                                            <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here
                                                                or click to upload.</h3>

                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                </div>
                                                <!--end::Dropzone-->
                                            </div>
                                            <!--end::Input group-->
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                </div>



                                <div class="col-md-6 offset-md-3">
                                    <div class="submit_btn ">
                                        <button class="btn btn_theme2 w-100 btn_md">Continue <svg
                                                xmlns="http://www.w3.org/2000/svg" width="21" height="12"
                                                viewBox="0 0 21 12" fill="none">
                                                <path
                                                    d="M20.0088 4.33414L16.7834 1.07544C16.7059 0.997329 16.6138 0.935326 16.5122 0.893014C16.4106 0.850703 16.3017 0.828918 16.1917 0.828918C16.0817 0.828918 15.9727 0.850703 15.8712 0.893014C15.7696 0.935326 15.6774 0.997329 15.6 1.07544C15.4447 1.2316 15.3576 1.44283 15.3576 1.66301C15.3576 1.88319 15.4447 2.09442 15.6 2.25057L18.5669 5.24257H1.57342C1.35238 5.24257 1.14039 5.33038 0.984095 5.48667C0.827797 5.64297 0.73999 5.85496 0.73999 6.07599H0.73999C0.73999 6.29703 0.827797 6.50902 0.984095 6.66531C1.14039 6.82161 1.35238 6.90942 1.57342 6.90942H18.617L15.6 9.91808C15.5218 9.99556 15.4598 10.0877 15.4175 10.1893C15.3752 10.2909 15.3534 10.3998 15.3534 10.5098C15.3534 10.6198 15.3752 10.7288 15.4175 10.8303C15.4598 10.9319 15.5218 11.0241 15.6 11.1015C15.6774 11.1797 15.7696 11.2417 15.8712 11.284C15.9727 11.3263 16.0817 11.3481 16.1917 11.3481C16.3017 11.3481 16.4106 11.3263 16.5122 11.284C16.6138 11.2417 16.7059 11.1797 16.7834 11.1015L20.0088 7.86786C20.477 7.39905 20.74 6.76357 20.74 6.101C20.74 5.43842 20.477 4.80294 20.0088 4.33414Z"
                                                    fill="white" />
                                            </svg></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </div>
    </div>

</section>


<?php include 'partials/footer.php'; ?>


<script>
  // Dropzone initialization for each dropzone
var dropzones = ["#kt_dropzonejs_example_1", "#kt_dropzonejs_example_2", "#kt_dropzonejs_example_3", "#kt_dropzonejs_example_4", "#kt_dropzonejs_example_5", "#kt_dropzonejs_example_6"];

dropzones.forEach(function (dropzoneId, index) {
    var myDropzone = new Dropzone(dropzoneId, {
        url: "#", // No actual server request
        paramName: "file", // The name that will be used to transfer the file
        maxFiles: 10,
        maxFilesize: 10, // MB
        addRemoveLinks: true,
        autoProcessQueue: false, // Prevent Dropzone from sending files automatically
        init: function () {
            var dropzoneMessage = document.querySelector(dropzoneId + " .dz-message");

            // File added handler
            this.on("addedfile", function (file) {
                console.log("File added in Dropzone " + (index + 1) + ":", file.name);
                
                // Hide the dz-message when a file is added
                if (dropzoneMessage) {
                    dropzoneMessage.style.display = 'none';
                }
            });

            // File removed handler
            this.on("removedfile", function (file) {
                console.log("File removed in Dropzone " + (index + 1) + ":", file.name);

                // Show the dz-message again if there are no files left
                if (this.files.length === 0 && dropzoneMessage) {
                    dropzoneMessage.style.display = 'block';
                }
            });
        }
    });
});

</script>