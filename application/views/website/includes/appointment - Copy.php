<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
    if (window.navigator.userAgent.indexOf("Trident/") > 0) {
        // console.log(window.location);
        alert("Internet Explorer is not supported.")
        document.location.href = "/mobile/unsupported"
        // window.location.replace("http://localhost/mobile/unsupported")
    }
</script>
<link type="text/stylesheet" href="./assets_web/vendor/dropzone-5.7.0/dist/dropzone.css" />

<style>
    /*
 * The MIT License
 * Copyright (c) 2012 Matias Meno <m@tias.me>
 */
    @-webkit-keyframes passing-through {
        0% {
            opacity: 0;
            -webkit-transform: translateY(40px);
            -moz-transform: translateY(40px);
            -ms-transform: translateY(40px);
            -o-transform: translateY(40px);
            transform: translateY(40px);
        }

        30%,
        70% {
            opacity: 1;
            -webkit-transform: translateY(0px);
            -moz-transform: translateY(0px);
            -ms-transform: translateY(0px);
            -o-transform: translateY(0px);
            transform: translateY(0px);
        }

        100% {
            opacity: 0;
            -webkit-transform: translateY(-40px);
            -moz-transform: translateY(-40px);
            -ms-transform: translateY(-40px);
            -o-transform: translateY(-40px);
            transform: translateY(-40px);
        }
    }

    @-moz-keyframes passing-through {
        0% {
            opacity: 0;
            -webkit-transform: translateY(40px);
            -moz-transform: translateY(40px);
            -ms-transform: translateY(40px);
            -o-transform: translateY(40px);
            transform: translateY(40px);
        }

        30%,
        70% {
            opacity: 1;
            -webkit-transform: translateY(0px);
            -moz-transform: translateY(0px);
            -ms-transform: translateY(0px);
            -o-transform: translateY(0px);
            transform: translateY(0px);
        }

        100% {
            opacity: 0;
            -webkit-transform: translateY(-40px);
            -moz-transform: translateY(-40px);
            -ms-transform: translateY(-40px);
            -o-transform: translateY(-40px);
            transform: translateY(-40px);
        }
    }

    @keyframes passing-through {
        0% {
            opacity: 0;
            -webkit-transform: translateY(40px);
            -moz-transform: translateY(40px);
            -ms-transform: translateY(40px);
            -o-transform: translateY(40px);
            transform: translateY(40px);
        }

        30%,
        70% {
            opacity: 1;
            -webkit-transform: translateY(0px);
            -moz-transform: translateY(0px);
            -ms-transform: translateY(0px);
            -o-transform: translateY(0px);
            transform: translateY(0px);
        }

        100% {
            opacity: 0;
            -webkit-transform: translateY(-40px);
            -moz-transform: translateY(-40px);
            -ms-transform: translateY(-40px);
            -o-transform: translateY(-40px);
            transform: translateY(-40px);
        }
    }

    @-webkit-keyframes slide-in {
        0% {
            opacity: 0;
            -webkit-transform: translateY(40px);
            -moz-transform: translateY(40px);
            -ms-transform: translateY(40px);
            -o-transform: translateY(40px);
            transform: translateY(40px);
        }

        30% {
            opacity: 1;
            -webkit-transform: translateY(0px);
            -moz-transform: translateY(0px);
            -ms-transform: translateY(0px);
            -o-transform: translateY(0px);
            transform: translateY(0px);
        }
    }

    @-moz-keyframes slide-in {
        0% {
            opacity: 0;
            -webkit-transform: translateY(40px);
            -moz-transform: translateY(40px);
            -ms-transform: translateY(40px);
            -o-transform: translateY(40px);
            transform: translateY(40px);
        }

        30% {
            opacity: 1;
            -webkit-transform: translateY(0px);
            -moz-transform: translateY(0px);
            -ms-transform: translateY(0px);
            -o-transform: translateY(0px);
            transform: translateY(0px);
        }
    }

    @keyframes slide-in {
        0% {
            opacity: 0;
            -webkit-transform: translateY(40px);
            -moz-transform: translateY(40px);
            -ms-transform: translateY(40px);
            -o-transform: translateY(40px);
            transform: translateY(40px);
        }

        30% {
            opacity: 1;
            -webkit-transform: translateY(0px);
            -moz-transform: translateY(0px);
            -ms-transform: translateY(0px);
            -o-transform: translateY(0px);
            transform: translateY(0px);
        }
    }

    @-webkit-keyframes pulse {
        0% {
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
        }

        10% {
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -ms-transform: scale(1.1);
            -o-transform: scale(1.1);
            transform: scale(1.1);
        }

        20% {
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
        }
    }

    @-moz-keyframes pulse {
        0% {
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
        }

        10% {
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -ms-transform: scale(1.1);
            -o-transform: scale(1.1);
            transform: scale(1.1);
        }

        20% {
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
        }
    }

    @keyframes pulse {
        0% {
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
        }

        10% {
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -ms-transform: scale(1.1);
            -o-transform: scale(1.1);
            transform: scale(1.1);
        }

        20% {
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
        }
    }

    .dropzone,
    .dropzone * {
        box-sizing: border-box;
    }

    .dropzone {
        min-height: 150px;
        border: 2px solid rgba(0, 0, 0, 0.3);
        background: white;
        padding: 20px 20px;
    }

    .dropzone.dz-clickable {
        cursor: pointer;
    }

    .dropzone.dz-clickable * {
        cursor: default;
    }

    .dropzone.dz-clickable .dz-message,
    .dropzone.dz-clickable .dz-message * {
        color: #3b3b3b !important;
        cursor: pointer;
    }

    .dropzone.dz-started .dz-message {
        color: #3b3b3b !important;
        display: none;
    }

    .dropzone.dz-drag-hover {
        border-style: solid;
    }

    .dropzone.dz-drag-hover .dz-message {
        color: #3b3b3b !important;
        opacity: 0.5;
    }

    .dropzone .dz-message {
        color: #3b3b3b !important;
        text-align: center;
        margin: 2em 0;
    }

    .dropzone .dz-message .dz-button {
        background: none;
        color: inherit;
        border: none;
        padding: 0;
        font: inherit;
        cursor: pointer;
        outline: inherit;
    }

    .dropzone .dz-preview {
        position: relative;
        display: inline-block;
        vertical-align: top;
        margin: 16px;
        min-height: 100px;
    }

    .dropzone .dz-preview:hover {
        z-index: 1000;
    }

    .dropzone .dz-preview:hover .dz-details {
        opacity: 1;
    }

    .dropzone .dz-preview.dz-file-preview .dz-image {
        border-radius: 20px;
        background: #999;
        background: linear-gradient(to bottom, #eee, #ddd);
    }

    .dropzone .dz-preview.dz-file-preview .dz-details {
        opacity: 1;
    }

    .dropzone .dz-preview.dz-image-preview {
        background: white;
    }

    .dropzone .dz-preview.dz-image-preview .dz-details {
        -webkit-transition: opacity 0.2s linear;
        -moz-transition: opacity 0.2s linear;
        -ms-transition: opacity 0.2s linear;
        -o-transition: opacity 0.2s linear;
        transition: opacity 0.2s linear;
    }

    .dropzone .dz-preview .dz-remove {
        font-size: 14px;
        text-align: center;
        display: block;
        cursor: pointer;
        border: none;
    }

    .dropzone .dz-preview .dz-remove:hover {
        text-decoration: underline;
    }

    .dropzone .dz-preview:hover .dz-details {
        opacity: 1;
    }

    .dropzone .dz-preview .dz-details {
        z-index: 20;
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
        font-size: 13px;
        min-width: 100%;
        max-width: 100%;
        padding: 2em 1em;
        text-align: center;
        color: rgba(0, 0, 0, 0.9);
        line-height: 150%;
    }

    .dropzone .dz-preview .dz-details .dz-size {
        margin-bottom: 1em;
        font-size: 16px;
    }

    .dropzone .dz-preview .dz-details .dz-filename {
        white-space: nowrap;
    }

    .dropzone .dz-preview .dz-details .dz-filename:hover span {
        border: 1px solid rgba(200, 200, 200, 0.8);
        background-color: rgba(255, 255, 255, 0.8);
    }

    .dropzone .dz-preview .dz-details .dz-filename:not(:hover) {
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .dropzone .dz-preview .dz-details .dz-filename:not(:hover) span {
        border: 1px solid transparent;
    }

    .dropzone .dz-preview .dz-details .dz-filename span,
    .dropzone .dz-preview .dz-details .dz-size span {
        background-color: rgba(255, 255, 255, 0.4);
        padding: 0 0.4em;
        border-radius: 3px;
    }

    .dropzone .dz-preview:hover .dz-image img {
        -webkit-transform: scale(1.05, 1.05);
        -moz-transform: scale(1.05, 1.05);
        -ms-transform: scale(1.05, 1.05);
        -o-transform: scale(1.05, 1.05);
        transform: scale(1.05, 1.05);
        -webkit-filter: blur(8px);
        filter: blur(8px);
    }

    .dropzone .dz-preview .dz-image {
        border-radius: 20px;
        overflow: hidden;
        width: 120px;
        height: 120px;
        position: relative;
        display: block;
        z-index: 10;
    }

    .dropzone .dz-preview .dz-image img {
        display: block;
    }

    .dropzone .dz-preview.dz-success .dz-success-mark {
        -webkit-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
        -moz-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
        -ms-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
        -o-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
        animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
    }

    .dropzone .dz-preview.dz-error .dz-error-mark {
        opacity: 1;
        -webkit-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
        -moz-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
        -ms-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
        -o-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
        animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
    }

    .dropzone .dz-preview .dz-success-mark,
    .dropzone .dz-preview .dz-error-mark {
        pointer-events: none;
        opacity: 0;
        z-index: 500;
        position: absolute;
        display: block;
        top: 50%;
        left: 50%;
        margin-left: -27px;
        margin-top: -27px;
    }

    .dropzone .dz-preview .dz-success-mark svg,
    .dropzone .dz-preview .dz-error-mark svg {
        display: block;
        width: 54px;
        height: 54px;
    }

    .dropzone .dz-preview.dz-processing .dz-progress {
        opacity: 1;
        -webkit-transition: all 0.2s linear;
        -moz-transition: all 0.2s linear;
        -ms-transition: all 0.2s linear;
        -o-transition: all 0.2s linear;
        transition: all 0.2s linear;
    }

    .dropzone .dz-preview.dz-complete .dz-progress {
        opacity: 0;
        -webkit-transition: opacity 0.4s ease-in;
        -moz-transition: opacity 0.4s ease-in;
        -ms-transition: opacity 0.4s ease-in;
        -o-transition: opacity 0.4s ease-in;
        transition: opacity 0.4s ease-in;
    }

    .dropzone .dz-preview:not(.dz-processing) .dz-progress {
        -webkit-animation: pulse 6s ease infinite;
        -moz-animation: pulse 6s ease infinite;
        -ms-animation: pulse 6s ease infinite;
        -o-animation: pulse 6s ease infinite;
        animation: pulse 6s ease infinite;
    }

    .dropzone .dz-preview .dz-progress {
        opacity: 1;
        z-index: 1000;
        pointer-events: none;
        position: absolute;
        height: 16px;
        left: 50%;
        top: 50%;
        margin-top: -8px;
        width: 80px;
        margin-left: -40px;
        background: rgba(255, 255, 255, 0.9);
        -webkit-transform: scale(1);
        border-radius: 8px;
        overflow: hidden;
    }

    .dropzone .dz-preview .dz-progress .dz-upload {
        background: #333;
        background: linear-gradient(to bottom, #666, #444);
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        width: 0;
        -webkit-transition: width 300ms ease-in-out;
        -moz-transition: width 300ms ease-in-out;
        -ms-transition: width 300ms ease-in-out;
        -o-transition: width 300ms ease-in-out;
        transition: width 300ms ease-in-out;
    }

    .dropzone .dz-preview.dz-error .dz-error-message {
        display: block;
    }

    .dropzone .dz-preview.dz-error:hover .dz-error-message {
        opacity: 1;
        pointer-events: auto;
    }

    .dropzone .dz-preview .dz-error-message {
        pointer-events: none;
        z-index: 1000;
        position: absolute;
        display: block;
        display: none;
        opacity: 0;
        -webkit-transition: opacity 0.3s ease;
        -moz-transition: opacity 0.3s ease;
        -ms-transition: opacity 0.3s ease;
        -o-transition: opacity 0.3s ease;
        transition: opacity 0.3s ease;
        border-radius: 8px;
        font-size: 13px;
        top: 130px;
        left: -10px;
        width: 140px;
        background: #be2626;
        background: linear-gradient(to bottom, #be2626, #a92222);
        padding: 0.5em 1.2em;
        color: white;
    }

    .dropzone .dz-preview .dz-error-message:after {
        content: '';
        position: absolute;
        top: -6px;
        left: 64px;
        width: 0;
        height: 0;
        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        border-bottom: 6px solid #be2626;
    }

    .coveredPersonTable {
        color: #3b3b3b
    }

    .coveredPersonTable td {
        border: 1px solid #D9D9D9;
        height: 10px !important;
    }

    .coveredPersonTableInput {
        width: 120px;
        border: none;
        outline: none;
    }

    .dobDay {
        width: 50px;
        border: none;
        outline: none;
        color: #828482;
    }

    .dobMonth {
        width: 70px;
        border: none;
        outline: none;
        border-left: 1px solid #D9D9D9;
        color: #828482;
    }

    .dobYear {
        width: 70px;
        border: none;
        outline: none;
        border-left: 1px solid #D9D9D9;
        color: #828482;
    }

    .divError {
        border: 1px solid #D03238 !important;
        color: #D03238
    }

    .textError {
        color: #D03238
    }

    .hidden {
        display: none;
    }

    #video {
        border: 1px solid black;
        box-shadow: 2px 2px 3px black;
        width: 320px;
        height: 240px;
    }

    #photo {
        border: 1px solid black;
        box-shadow: 2px 2px 3px black;
        width: 320px;
        height: 240px;
    }

    .UploadHidden {
        display: none !important;
    }

    .CaptureHidden {
        display: none !important;
    }

    .hidden {
        display: none !important;
    }

    #canvas {
        display: none;
    }

    .camera {
        width: 340px;
        display: inline-block;
    }

    .output {
        width: 340px;
        display: inline-block;
    }

    #startbutton {
        display: block;
        position: relative;
        margin-left: auto;
        margin-right: auto;
        bottom: 32px;
        background-color: rgba(0, 150, 0, 0.5);
        border: 1px solid rgba(255, 255, 255, 0.7);
        box-shadow: 0px 0px 1px 2px rgba(0, 0, 0, 0.2);
        font-size: 14px;
        font-family: "Lucida Grande", "Arial", sans-serif;
        color: rgba(255, 255, 255, 1.0);
    }

    /* The snackbar - position it at the bottom and in the middle of the screen */
    #snackbar {
        visibility: hidden;
        /* Hidden by default. Visible on click */
        min-width: 250px;
        /* Set a default minimum width */
        margin-left: -125px;
        /* Divide value of min-width by 2 */
        background-color: #333;
        /* Black background color */
        color: #fff;
        /* White text color */
        text-align: center;
        /* Centered text */
        border-radius: 2px;
        /* Rounded borders */
        padding: 16px;
        /* Padding */
        position: fixed;
        /* Sit on top of the screen */
        z-index: 1;
        /* Add a z-index if needed */
        left: 50%;
        /* Center the snackbar */
        bottom: 30px;
        /* 30px from the bottom */
    }

    /* Show the snackbar when clicking on a button (class added with JavaScript) */
    #snackbar.show {
        visibility: visible;
        /* Show the snackbar */
        /* Add animation: Take 0.5 seconds to fade in and out the snackbar.
  However, delay the fade out process for 2.5 seconds */
        -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
        animation: fadein 0.5s, fadeout 0.5s 2.5s;
    }

    /* Animations to fade the snackbar in and out */
    @-webkit-keyframes fadein {
        from {
            bottom: 0;
            opacity: 0;
        }

        to {
            bottom: 30px;
            opacity: 1;
        }
    }

    @keyframes fadein {
        from {
            bottom: 0;
            opacity: 0;
        }

        to {
            bottom: 30px;
            opacity: 1;
        }
    }

    @-webkit-keyframes fadeout {
        from {
            bottom: 30px;
            opacity: 1;
        }

        to {
            bottom: 0;
            opacity: 0;
        }
    }

    @keyframes fadeout {
        from {
            bottom: 30px;
            opacity: 1;
        }

        to {
            bottom: 0;
            opacity: 0;
        }
    }
</style>


<?php

$isNrc = $this->db->select('nrc')
    ->from('customers')->get();

$Nrcs = $isNrc->result();
?>



<div id="appointment-form" style="background-color: #304060; color:#F7F7F9">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12" style="margin:auto">
                <div class="form-container">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                                Personal details
                            </a>
                            <a class="nav-item nav-link disabled" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                                Cover type
                            </a>
                            <a class="nav-item nav-link disabled" id="nav-group-tab" data-toggle="tab" href="#nav-group" role="tab" aria-controls="nav-group" aria-selected="false">
                                Group type
                            </a>
                            <a class="nav-item nav-link disabled" id="nav-payment-tab" data-toggle="tab" href="#nav-payment" role="tab" aria-controls="nav-payment" aria-selected="false">
                                Payment Options
                            </a>
                        </div>
                    </nav>

                    <!-- Message & exception -->
                    <div class="col-sm-12">
                        <?php if ($this->session->flashdata('success') != null) {  ?>
                            <div class="alert alert-success">
                                <?php echo $this->session->flashdata('success'); ?>
                            </div>
                        <?php } ?>

                        <?php if ($this->session->flashdata('nextTab') != null) {  ?>
                            <?php echo $this->session->flashdata('nextTab'); ?>
                        <?php } ?>

                        <?php if ($this->session->flashdata('exception') != null) {  ?>
                            <div class="alert alert-danger">
                                <?php echo $this->session->flashdata('exception'); ?>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active col-lg-7" style="margin:auto" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <h2 style="color: #fff" class="semibold"><span style="background-color: #ccc; color: #004D61"><?= display('1') ?></span><?= display('provide_your_primary_information_about_the_following_details') ?>
                            </h2>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="typushi" id="individual" checked>
                                        <label class="form-check-label" for="individual">
                                            Individual
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="typushi" id="company">
                                        <label class="form-check-label" for="company" autocomplete="off">
                                            Company
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Individual data -->
                            <div class="form-row" id="individual_data">
                                <div class="form-group col-md-6">
                                    <label style="color: #fff">First Name of Proposer *</label>
                                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="First name" autocomplete="off">
                                    <div class="hidden textError" id="f_name_err"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label style="color: #fff">Last Name *</label>
                                    <input type="text" class="form-control" name="othername" id="othername" placeholder="Last name" autocomplete="off">
                                    <div class="hidden textError" id="othername_err"></div>
                                </div>
                            </div>
                            <!-- Company data -->
                            <div class="form-row hidden" id="company_data">
                                <div class="form-group col-md-6">
                                    <label style="color: #fff">Company Name *</label>
                                    <input type="text" class="form-control" name="c_name" id="c_name" placeholder="Company name" autocomplete="off">
                                    <div class="hidden textError" id="c_name_err"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label style="color: #fff">Registration Number *</label>
                                    <input type="text" class="form-control" name="c_reg" id="c_reg" placeholder="Registration number" autocomplete="off">
                                    <div class="hidden textError" id="c_reg_err"></div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label style="color: #fff">Postal Address </label>
                                    <input type="text" class="form-control" name="postal" id="postal" placeholder="Postal Address" required autocomplete="false">
                                    <div class="hidden textError" id="postal_err"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label style="color: #fff">Physical Address *</label>
                                    <input type="text" class="form-control" name="physical" id="physical" placeholder="physical address" required autocomplete="false">
                                    <div class="hidden textError" id="physical_err"></div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label style="color: #fff"><?= display('email') ?></label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="<?= display('email') ?>" autocomplete="off">
                                    <label style="color: #ccc"></label>
                                </div>
                                <div class="form-group col-md-6">
                                    <label style="color: #fff"><?= display('phone') ?> *</label>
                                    <input type="number" class="form-control" name="mobile" id="phonenumber" placeholder="Phone number without (+26)" required autocomplete="off">
                                    <div class="hidden textError" id="phonenumber_err"></div>
                                </div>
                            </div>

                            <div class="form-row" id='dobInput'>
                                <div class="form-group col-md-12">
                                    <label style="color: #fff">Date of birth</label> *</label>
                                    <input type="text" class="form-control datepicker" name="dob" id="date1" placeholder="Date of birth" required autocomplete="off">
                                    <div class="hidden textError" id="date1_err"></div>
                                </div>
                            </div>

                            <?php

                            $occupations = $this->db->select('id,title')
                                ->from('occupations')->get();
                            ?>

                            <div class="form-row" id='reg_NRC'>
                                <div class="form-group col-md-6">
                                    <label style="color: #fff">National Registion Card*</label>
                                    <input type="text" class="form-control" name="nrc" id="nrc" placeholder="NRC number" required autocomplete="off">
                                    <div class="hidden textError" id="nrcNumber_err"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label style="color: #fff">Occupation *</label>
                                    <select id='occupations' class=" form-control basic-single">
                                        <option value='self_service'>Self Service</option>
                                        <?php
                                        foreach ($occupations->result() as $row) {
                                            $list = $row->title;
                                            $occupationId = $row->id;
                                            echo "<option value='$occupationId'> $list</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <?php
                            $options = array(
                                'all'  => 'Pls Select Filter',
                                'male'    => 'Male List',
                                'female'   => 'Female List',
                            );
                            ?>

                            <div class="form-group" id="ganderIput">
                                <div class="form-group col-md-6">
                                    <label> Gender *</label>
                                    <?php echo form_dropdown('doctor_id', array(
                                        'male'    => 'Male',
                                        'female'   => 'Female',
                                        'other'   => 'Other',
                                    ), '', 'class="form-control basic-single" id="gender1"') ?>
                                    <p class="help-block" id="availableDays"></p>
                                </div>
                            </div>

                            <div style="margin-bottom:10px">
                                <button class="btn btn-primary" id="startCamera">
                                    Capture Picture from camera
                                </button>
                                <button class="btn btn-primary picUpload uploadFile" id="uploadFile">
                                    Upload Picture from Files
                                </button>
                                <button class="btn btn-primary docUpload hidden uploadFile" id="uploadFile">
                                    Upload Company Documents
                                </button>
                            </div>

                            <div class="cameraArea CaptureHidden" style="display:flex; justify-content:flex-start">
                                <!-- camera screen -->
                                <div class="camera">
                                    <video id="video">Video stream not available.</video>
                                    <button id="startbutton">Take photo</button>
                                </div>
                                <canvas id="canvas">
                                </canvas>
                                <div class="output">
                                    <img src="<?php echo $mop_logo ?>" id="photo" alt="The screen capture will appear in this box.">
                                </div>
                            </div>

                            <div class="UploadHidden" id="uploadFromFolder">
                                <form action='<?= base_url('website/appointment/saveTempImage') ?>' class="dropzone" id="PickPicker">
                                    <div class="input-group mb-3">
                                        <div class="dz-message" data-dz-message><span>Drop your file here or Click here</span></div>
                                        <div class="custom-file fallback">
                                            <input name="fileToUpload" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                            <label style="color: #3b3b3b" class="custom-file-label" for="inputGroupFile01">Choose Picture</label>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="terms" class="custom-control-input" id="customCheck2">
                                    <label class="custom-control-label" for="customCheck2">
                                        I have read and agree to the terms and conditions
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <a data-toggle="modal" data-target="#staticBackdrop" id="tcs" style="font-size:12px; text-decoration: underline; cursor: pointer;">Read
                                        Terms and Conditions</a>
                                </div>
                            </div>


                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div style="color: #3b3b3b" class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" style="color: #3b3b3b" id="staticBackdropLabel">
                                                Terms and Conditions</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <embed src="assets_web/docs/tncs.pdf" frameborder="0" width="100%" height="600px">

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Understood</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--  -->
                            <button type="submit" id="next_tab" class="btn btn-block btn-primary">Next</button>
                            <!-- Use a button to open the snackbar -->
                            <!-- <button onclick="myFunction()">Show Snackbar</button> -->

                            <!-- The actual snackbar -->
                            <div id="snackbar">
                                Registration was successful.
                            </div>
                        </div>

                        <script>
                            $('#next_tab').addClass('disabled');

                            $('#customCheck2').on('change', function(e) {
                                if ($(this).is(':checked')) {
                                    $('#next_tab').removeClass('disabled');
                                } else {
                                    $('#next_tab').addClass('disabled');
                                }

                            })
                        </script>

                        <!-- profile -->
                        <div class="tab-pane fade col-lg-12" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div>
                                <?php

                                $agents_rows = $this->db->select('f_name, l_name, id')
                                    ->from('agents')->get();
                                ?>

                                <div>
                                    <div class="form-group col-md-12">
                                        <label> Agent Name *</label>
                                        <select id='agentCode' class="form-control basic-single">
                                            <!-- <option value='self_service'>Self Service</option> -->
                                            <?php
                                            foreach ($agents_rows->result() as $row) {
                                                $f_name = $row->f_name;
                                                $l_name = $row->l_name;
                                                $agent_id = $row->id;
                                                echo "<option value='$agent_id'> $f_name $l_name</option>";
                                            }
                                            ?>
                                        </select>

                                    </div>
                                </div>

                                <div style="width: 100%; background-color:#6A6A6A; height:2px; margin-bottom: 12px;">
                                </div>

                                <div style="margin-top: 20px;">

                                    <div>
                                        <h5>Do you wish to upgrade your Policy To facilitate Cover and Premium Increase?
                                        </h5>
                                        <div class="form-row">
                                            <div class="form-check " style="margin-left: 5px;">
                                                <input class="form-check-input" type="radio" name="upgrade" id="upgrade1" checked autocomplete="off">
                                                <label class="form-check-label" for="upgrade1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check" style="margin-left: 15px;">
                                                <input class="form-check-input" type="radio" name="upgrade" id="upgrade2" autocomplete="off">
                                                <label class="form-check-label" for="upgrade2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div style="width: 100%; background-color:#6A6A6A; height:2px; margin-bottom: 12px; margin-top:10px; margin-bottom: 10px;">
                                    </div>
                                    <h5>Tick whichever is applicable</h5>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" autocomplete="off">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Accidental death Cover
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2" autocomplete="off">
                                                    Combined Insurance (Accidental Death , Permanent Disability, Hospitalisation)
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div style="width: 100%; background-color:#6A6A6A; height:2px; margin-bottom: 12px; margin-top:10px; margin-bottom: 10px;">
                                        </div>
                                        <div class="collapse" id="collapse1" aria-expanded="true">
                                            <h5>Accidental death Cover type</h5>

                                            <div class="container">

                                                <!-- Pay as you go start -->
                                                <div>
                                                    <input class="form-check-input" type="radio" name="cover1" id="covertype1" autocomplete="off">

                                                    <label class="form-check-label" for="covertype1">
                                                        <h6> <strong>Pay as you go </strong><span style="color:coral"> (
                                                                Premiums per Trip ZMW )</span></h6>
                                                    </label>
                                                </div>

                                                <div class="collapse" id="collapsePlan1" aria-expanded="true">
                                                    <div class="container">
                                                        <div>
                                                            <!-- 1 -->

                                                            <div style="width: 100%; background-color:#6A6A6A; height:2px; margin-bottom: 12px; margin-top:10px; margin-bottom: 10px;">
                                                            </div>

                                                            <div style="display:flex; ">

                                                                <div>
                                                                    <input class="form-check-input" type="radio" name="Premium1" id="PremiumPlan1">
                                                                    <label class="form-check-label" for="PremiumPlan1">
                                                                        <strong><span style="color:red; font-size:17px">-></span>
                                                                            Premium per Individual <span style="color:#6199F5;">(Single Policy)</span>
                                                                        </strong>
                                                                    </label>
                                                                </div>

                                                                <div style="margin-left: 40px;">
                                                                    <input class="form-check-input" disabled type="radio" name="Premium1" id="PremiumPlan2">
                                                                    <label class="form-check-label" for="PremiumPlan2">
                                                                        <strong><span style="color:red; font-size:17px">-></span>
                                                                            Premium per Individual <span style="color:#6199F5;">(Group
                                                                                Policy)</span></strong>
                                                                    </label>
                                                                </div>

                                                            </div>

                                                            <div class="collapse" id="PremiumCoverPlan1" aria-expanded="true">

                                                                <div class="row" id="PremiumCoverPlan1Layout">

                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- end -->
                                                        <div style="margin-top:10px">


                                                            <div class="collapse" id="PremiumCoverPlan2" aria-expanded="true">

                                                                <div class="row" id="PremiumCoverPlan2Layout">

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div style="width: 100%; background-color:#6A6A6A; height:2px; margin-bottom: 12px; margin-top:10px; margin-bottom: 10px;">
                                                    </div>
                                                </div>

                                                <!-- Pay as you go end -->

                                                <!-- pay pre trip starts here -->
                                                <div>
                                                    <input class="form-check-input" type="radio" name="cover1" id="covertype2">

                                                    <label class="form-check-label" for="covertype2">
                                                        <h6> <strong>Pay per trip cover </strong> <span style="color:coral">( Up to a maximum of 7 days )</span>
                                                        </h6>
                                                    </label>
                                                </div>

                                                <!-- pay pre trip expantion -->
                                                <div class="collapse" id="collapsePlan2" aria-expanded="true">

                                                    <div class="container">
                                                        <div>
                                                            <!-- 1 -->

                                                            <div style="width: 100%; background-color:#6A6A6A; height:2px; margin-bottom: 12px; margin-top:10px; margin-bottom: 10px;">
                                                            </div>

                                                            <div style="display:flex; ">

                                                                <div>
                                                                    <input class="form-check-input" type="radio" name="Premium2" id="PremiumPlan3">
                                                                    <label class="form-check-label" for="PremiumPlan3">
                                                                        <strong><span style="color:red; font-size:17px">-></span>
                                                                            Premium per Individual <span style="color:#6199F5;">(Single Policy)</span>
                                                                        </strong>
                                                                    </label>
                                                                </div>

                                                                <div style="margin-left: 40px;">
                                                                    <input class="form-check-input" disabled type="radio" name="Premium2" id="PremiumPlan4">
                                                                    <label class="form-check-label" for="PremiumPlan4">
                                                                        <strong><span style="color:red; font-size:17px">-></span>
                                                                            Premium per Individual <span style="color:#6199F5;">(Group
                                                                                Policy)</span></strong>
                                                                    </label>
                                                                </div>

                                                            </div>

                                                            <div class="collapse" id="PremiumCoverPlan3" aria-expanded="true">

                                                                <div class="row" id="PremiumCoverPlan3Layout">


                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- end -->
                                                        <div style="margin-top:10px">


                                                            <div class="collapse" id="PremiumCoverPlan4" aria-expanded="true">

                                                                <div class="row" id="PremiumCoverPlan4Layout">

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>


                                                </div>
                                                <!-- Pay Per trip end -->

                                                <!-- Way of life starts here -->
                                                <div>
                                                    <input class="form-check-input" type="radio" name="cover1" id="covertype3">

                                                    <label class="form-check-label" for="covertype3">
                                                        <h6> <strong>Way of life cover </strong> <span style="color:coral">( Premiums per Month ZMW )</span>
                                                        </h6>
                                                    </label>
                                                </div>

                                                <!-- Way of life expantion -->
                                                <div class="collapse" id="collapsePlan3" aria-expanded="true">

                                                    <div class="container">
                                                        <div>
                                                            <!-- 1 -->

                                                            <div style="width: 100%; background-color:#6A6A6A; height:2px; margin-bottom: 12px; margin-top:10px; margin-bottom: 10px;">
                                                            </div>

                                                            <div style="display:flex; ">

                                                                <div>
                                                                    <input class="form-check-input" type="radio" name="Premium3" id="PremiumPlan5">
                                                                    <label class="form-check-label" for="PremiumPlan5">
                                                                        <strong><span style="color:red; font-size:17px">-></span>
                                                                            Monthly Premium per Individual<span style="color:#6199F5;">(Single Policy)</span>
                                                                        </strong>
                                                                    </label>
                                                                </div>

                                                                <div style="margin-left: 40px;">
                                                                    <input class="form-check-input" disabled type="radio" name="Premium3" id="PremiumPlan6">
                                                                    <label class="form-check-label" for="PremiumPlan6">
                                                                        <strong><span style="color:red; font-size:17px">-></span>
                                                                            Monthly Premium per Individual <span style="color:#6199F5;">(Group
                                                                                Policy)</span></strong>
                                                                    </label>
                                                                </div>

                                                            </div>

                                                            <div class="collapse" id="PremiumCoverPlan5" aria-expanded="true">

                                                                <div class="row" id="PremiumCoverPlan5Layout">

                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- end -->
                                                        <div style="margin-top:10px">


                                                            <div class="collapse" id="PremiumCoverPlan6" aria-expanded="true">

                                                                <div class="row" id="PremiumCoverPlan6Layout">

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>


                                                </div>
                                                <!-- Way of life end -->

                                                <!-- Family Cover starts here -->
                                                <div>
                                                    <input class="form-check-input" type="radio" name="cover1" id="covertype4">

                                                    <label class="form-check-label" for="covertype4">
                                                        <h6> <strong>Family Cover </strong> <span style="color:coral">( Premiums per Month ZMW )</span>
                                                        </h6>
                                                    </label>
                                                </div>

                                                <!-- Family Cover expantion -->
                                                <div class="collapse" id="collapsePlan4" aria-expanded="true">

                                                    <div class="container">
                                                        <div>
                                                            <!-- 1 -->

                                                            <div style="width: 100%; background-color:#6A6A6A; height:2px; margin-bottom: 12px; margin-top:10px; margin-bottom: 10px;">
                                                            </div>

                                                            <div style="display:flex; ">

                                                                <div>
                                                                    <input class="form-check-input" type="radio" name="Premium4" id="PremiumPlan7">
                                                                    <label class="form-check-label" for="PremiumPlan7">
                                                                        <strong><span style="color:red; font-size:17px">-></span>
                                                                            Monthly Premium per Family<span style="color:#6199F5;">(Single Policy)</span>
                                                                        </strong>
                                                                    </label>
                                                                </div>

                                                                <div style="margin-left: 40px;">
                                                                    <input class="form-check-input" disabled type="radio" name="Premium4" id="PremiumPlan8">
                                                                    <label class="form-check-label" for="PremiumPlan8">
                                                                        <strong><span style="color:red; font-size:17px">-></span>
                                                                            Monthly Premium per Group <span style="color:#6199F5;">(min 10)</span></strong>
                                                                    </label>
                                                                </div>

                                                            </div>

                                                            <div class="collapse" id="PremiumCoverPlan7" aria-expanded="true">

                                                                <div class="row" id="PremiumCoverPlan7Layout">


                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- end -->
                                                        <div style="margin-top:10px">


                                                            <div class="collapse" id="PremiumCoverPlan8" aria-expanded="true">

                                                                <div class="row" id="PremiumCoverPlan8Layout">

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>


                                                </div>
                                                <!-- Family Cover end -->

                                                <!-- Student Cover starts here -->
                                                <div>
                                                    <input class="form-check-input" type="radio" name="cover1" id="covertype5">

                                                    <label class="form-check-label" for="covertype5">
                                                        <h6> <strong>Student Cover </strong> <span style="color:coral">( Premiums per 3 Month ZMW )</span>
                                                        </h6>
                                                    </label>
                                                </div>

                                                <!-- Student Cover expantion -->
                                                <div class="collapse" id="collapsePlan5" aria-expanded="true">

                                                    <div class="container">
                                                        <div>
                                                            <!-- 1 -->

                                                            <div style="width: 100%; background-color:#6A6A6A; height:2px; margin-bottom: 12px; margin-top:10px; margin-bottom: 10px;">
                                                            </div>

                                                            <div style="display:flex; ">

                                                                <div>
                                                                    <input class="form-check-input" type="radio" name="Premium9" id="PremiumPlan9">
                                                                    <label class="form-check-label" for="PremiumPlan9">
                                                                        <strong><span style="color:red; font-size:17px">-></span>
                                                                            Premium per Term per Student<span style="color:#6199F5;">(Single Policy)</span>
                                                                        </strong>
                                                                    </label>
                                                                </div>



                                                            </div>

                                                            <div class="collapse" id="PremiumCoverPlan9" aria-expanded="true">

                                                                <div class="row" id="PremiumCoverPlan9Layout">

                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- end -->

                                                    </div>


                                                </div>


                                            </div>
                                        </div>

                                        <!-- Collapse 2 -->
                                        <div>

                                            <div class="collapse" id="collapse2" aria-expanded="true">
                                                <h5>Combined insurance Cover</h5>

                                                <div class="container">

                                                    <!-- Pay as you go start -->
                                                    <div>
                                                        <input class="form-check-input" type="radio" name="com_cover1" id="com_covertype1" autocomplete="off">

                                                        <label class="form-check-label" for="com_covertype1">
                                                            <h6> <strong>Pay as you go </strong><span style="color:coral"> (
                                                                    Premiums per Trip ZMW )</span></h6>
                                                        </label>
                                                    </div>

                                                    <div class="collapse" id="com_collapsePlan1" aria-expanded="true">
                                                        <div class="container">
                                                            <div>
                                                                <!-- 1 -->

                                                                <div style="width: 100%; background-color:#6A6A6A; height:2px; margin-bottom: 12px; margin-top:10px; margin-bottom: 10px;">
                                                                </div>

                                                                <div style="display:flex; ">

                                                                    <div>
                                                                        <input class="form-check-input" type="radio" name="com_Premium1" id="com_PremiumPlan1">
                                                                        <label class="form-check-label" for="com_PremiumPlan1">
                                                                            <strong><span style="color:red; font-size:17px">-></span>
                                                                                Premium per Individual <span style="color:#6199F5;">(Single Policy)</span>
                                                                            </strong>
                                                                        </label>
                                                                    </div>

                                                                    <div style="margin-left: 40px;">
                                                                        <input class="form-check-input" disabled type="radio" name="com_Premium1" id="com_PremiumPlan2">
                                                                        <label class="form-check-label" for="com_PremiumPlan2">
                                                                            <strong><span style="color:red; font-size:17px">-></span>
                                                                                Premium per Individual <span style="color:#6199F5;">(Group
                                                                                    Policy)</span></strong>
                                                                        </label>
                                                                    </div>

                                                                </div>

                                                                <div class="collapse" id="com_PremiumCoverPlan1" aria-expanded="true">

                                                                    <div class="row">

                                                                        <?php


                                                                        $cover_benefits_id = $this->db->select("id")
                                                                            ->from('cover_benefits')
                                                                            ->like('title', 'COMBINED INSURANCE')
                                                                            ->get()
                                                                            ->result();

                                                                        $product_id  = $this->db->select("id")
                                                                            ->from('products')
                                                                            ->where('title', 'DOMESTIC TRAVEL INSURANCE')
                                                                            ->get()
                                                                            ->result();

                                                                        $plansList = $this->db->query("SELECT cover_benefits.title,plans.plan_code,plans.plan_name AS plan_name,
                                                                            sum_assured,fixed_premium,min_age,max_age,cover_types.title FROM `plan_dependents`
                                                                            inner JOIN plans on plans.id=plan_dependents.plan_id
                                                                            inner join cover_types on cover_types.id=plans.cover_type_id
                                                                            INNER JOIN cover_benefits on cover_benefits.id=plan_dependents.cover_benefits_type
                                                                            WHERE  cover_types.title !='GROUP' AND plans.product_id =(SELECT id FROM `products` WHERE title='DOMESTIC TRAVEL INSURANCE')
                                                                            AND ( plans.plan_name LIKE '%PAY%' AND plans.plan_name LIKE '%COMBI%' )
                                                                            AND fixed_premium != '0'
                                                                            GROUP BY plan_name
                                                                            ORDER BY sum_assured
                                                                        ");

                                                                        $results = $plansList->result_array();
                                                                        // var_dump($results);

                                                                        foreach ($results as $planrow) {
                                                                            $PlanName = $planrow['plan_name'];

                                                                            $plansList_details = $this->db->query("SELECT cover_benefits.title,plans.plan_code, plan_id, plans.plan_name AS plan_name,
                                                                            sum_assured,fixed_premium,min_age,max_age,cover_types.title AS cover_title FROM `plan_dependents`
                                                                            inner JOIN plans on plans.id=plan_dependents.plan_id
                                                                            inner join cover_types on cover_types.id=plans.cover_type_id
                                                                            INNER JOIN cover_benefits on cover_benefits.id=plan_dependents.cover_benefits_type
                                                                            WHERE  cover_types.title !='GROUP' AND plans.product_id =(SELECT id FROM `products` WHERE title='DOMESTIC TRAVEL INSURANCE')
                                                                            AND ( plans.plan_name LIKE '%PAY%' AND plans.plan_name LIKE '%COMBI%' )
                                                                            AND plan_name = '$PlanName'
                                                                            ");

                                                                            $results_details = $plansList_details->result_array();
                                                                        ?>
                                                                            <div class='card' style='width: 18rem; margin:5px'>
                                                                                <div class='card-body' style='color:#3b3b3b'>

                                                                                    <h6>
                                                                                        <b><?php echo $PlanName ?></b>
                                                                                    </h6>

                                                                                    <!-- <ul class='list-group list-group-flush'> -->

                                                                                    <?php
                                                                                    foreach ($results_details as $planrow_details) {
                                                                                        $title = $planrow_details['title'];
                                                                                        $Sum_assured = $planrow_details['sum_assured'];
                                                                                        $Fixed_premium = $planrow_details['fixed_premium'];
                                                                                        $plan_id = $planrow_details['plan_id'];
                                                                                        $plan_code = $planrow_details['plan_code'];

                                                                                        $f_sum_assured = number_format($Sum_assured);
                                                                                        if ($Fixed_premium > 0) {
                                                                                            $f_fixed_premium = number_format($Fixed_premium);
                                                                                        }

                                                                                        echo "<div>
                                                                                                    <div>
                                                                                                        <u> $title </u> <strong style='color:teal; font-size:19px'> : K
                                                                                                            $f_sum_assured  </strong>
                                                                                                    </div>
                                                                                                </div>";
                                                                                    }
                                                                                    ?>
                                                                                    <div style='width: 100%; background-color:#304060; height:1px '></div>
                                                                                    <div>
                                                                                        Get Started at <strong>K
                                                                                            <?php echo $f_fixed_premium ?></strong>
                                                                                    </div>
                                                                                    <!-- </ul> -->
                                                                                    <?php echo "
                                                                                    <button onclick='selectionBtn(this);' data-type='Combined' data-policy='pay_as_u_go' data-policytype='premium_per_individual_single' 
                                                                                        data-plantitle='" . $PlanName . "' data-sum=" . $f_sum_assured . " data-premium=" . $f_fixed_premium . " data-planid=" . $plan_id . " data-plancode=" . $plan_code . "
                                                                                        class='selection_btn btn btn-primary'>Select Cover
                                                                                    </button>
                                                                                    ";
                                                                                    ?>

                                                                                    <!-- <button data-type='Accidental pay_as_u_go premium_group $f_sum_assured $f_fixed_premium' class='selection_btn btn btn-primary'>Select
                                                                                        Cover
                                                                                    </button> -->
                                                                                </div>
                                                                            </div>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <!-- end -->
                                                            <div style="margin-top:10px">

                                                                <div class="collapse" id="com_PremiumCoverPlan2" aria-expanded="true">

                                                                    <div class="row">

                                                                        <?php
                                                                        $cover_benefits_id = $this->db->select("id")
                                                                            ->from('cover_benefits')
                                                                            ->like('title', 'ACCIDENTAL DEATH BENEFIT')
                                                                            ->get()
                                                                            ->result();

                                                                        $product_id  = $this->db->select("id")
                                                                            ->from('products')
                                                                            ->where('title', 'DOMESTIC TRAVEL INSURANCE')
                                                                            ->get()
                                                                            ->result();

                                                                        $plansList = $this->db->query("SELECT cover_benefits.title,plan_id,plans.plan_code,plans.plan_name,
                                                                            fixed_premium,min_age,max_age,cover_types.title FROM `plan_dependents`
                                                                            inner JOIN plans on plans.id=plan_dependents.plan_id
                                                                            inner join cover_types on cover_types.id=plans.cover_type_id
                                                                            INNER JOIN cover_benefits on cover_benefits.id=plan_dependents.cover_benefits_type
                                                                            WHERE  cover_types.title ='GROUP' AND plans.product_id =(SELECT id FROM `products` WHERE title='DOMESTIC TRAVEL INSURANCE')
                                                                            AND ( plans.plan_name LIKE '%PAY%' AND plans.plan_name LIKE '%COMBI%' )
                                                                            AND fixed_premium != '0'
                                                                            GROUP BY plan_name
                                                                            ORDER BY sum_assured
                                                                            ");

                                                                        $results = $plansList->result_array();
                                                                        // var_dump($results);

                                                                        foreach ($results as $planrow) {
                                                                            $PlanName = $planrow['plan_name'];
                                                                            ///////////////////////////////
                                                                            $plansList_details = $this->db->query("SELECT cover_benefits.title,plans.plan_code,plan_id,plans.plan_name,sum_assured,
                                                                            fixed_premium,min_age,max_age,cover_types.title AS cover_title FROM `plan_dependents`
                                                                            inner JOIN plans on plans.id=plan_dependents.plan_id
                                                                            inner join cover_types on cover_types.id=plans.cover_type_id
                                                                            INNER JOIN cover_benefits on cover_benefits.id=plan_dependents.cover_benefits_type
                                                                            WHERE  cover_types.title ='GROUP' AND plans.product_id =(SELECT id FROM `products` WHERE title='DOMESTIC TRAVEL INSURANCE')
                                                                            AND ( plans.plan_name LIKE '%PAY%' AND plans.plan_name LIKE '%COMBI%' )
                                                                            AND plan_name = '$PlanName'
                                                                            ");

                                                                            $results_details = $plansList_details->result_array();


                                                                        ?>
                                                                            <div class='card' style='width: 18rem; margin:5px'>
                                                                                <div class='card-body' style='color:#3b3b3b'>

                                                                                    <h6>
                                                                                        <b><?php echo $PlanName ?></b>
                                                                                    </h6>

                                                                                    <ul class='list-group list-group-flush'>

                                                                                        <?php
                                                                                        foreach ($results_details as $planrow_details) {
                                                                                            $title = $planrow_details['title'];
                                                                                            $Sum_assured = $planrow_details['sum_assured'];
                                                                                            $Fixed_premium = $planrow_details['fixed_premium'];

                                                                                            $plan_id = $planrow_details['plan_id'];
                                                                                            $plan_code = $planrow_details['plan_code'];

                                                                                            $f_sum_assured = number_format($Sum_assured);
                                                                                            if ($Fixed_premium > 0) {
                                                                                                $f_fixed_premium = number_format($Fixed_premium);
                                                                                            }
                                                                                            $all_sums .= $Sum_assured . "<br>";

                                                                                            // echo "<script> console.log('$all_sums')</script>";

                                                                                            echo "<div>
                                                                                                    <div>
                                                                                                        <u> $title </u> <strong style='color:teal; font-size:19px'> : K
                                                                                                            $f_sum_assured  </strong>
                                                                                                    </div>
                                                                                                </div>";
                                                                                        }
                                                                                        ?>
                                                                                        <div style='width: 100%; background-color:#304060; height:1px '></div>
                                                                                        <li class='list-group-item'>
                                                                                            Get Started at <strong>K
                                                                                                <?php echo $f_fixed_premium ?></strong>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <?php echo "
                                                                                        <button onclick='selectionBtn(this);' data-type='Accidental' data-policy='pay_as_u_go' data-policytype='premium_group' data-sum=" .
                                                                                        $f_sum_assured . " data-plantitle='" . $PlanName . "' data-premium=" . $f_fixed_premium . " data-planid=" . $plan_id . " data-plancode=" . $plan_code . "
                                                                                            class='selection_btn btn btn-primary'>Select Cover
                                                                                        </button>";
                                                                                    unset($all_sums);
                                                                                    ?>
                                                                                </div>
                                                                            </div>
                                                                        <?php
                                                                        }

                                                                        ?>


                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div style="width: 100%; background-color:#6A6A6A; height:2px; margin-bottom: 12px; margin-top:10px; margin-bottom: 10px;">
                                                        </div>
                                                    </div>

                                                    <!-- Pay as you go end -->

                                                    <!-- pay pre trip starts here -->
                                                    <div>
                                                        <input class="form-check-input" type="radio" name="com_cover1" id="com_covertype2">

                                                        <label class="form-check-label" for="com_covertype2">
                                                            <h6> <strong>Pay per trip cover </strong> <span style="color:coral">( Up to a maximum of 7 days )</span>
                                                            </h6>
                                                        </label>
                                                    </div>

                                                    <!-- pay pre trip expantion -->
                                                    <div class="collapse" id="com_collapsePlan2" aria-expanded="true">

                                                        <div class="container">
                                                            <div>
                                                                <!-- 1 -->

                                                                <div style="width: 100%; background-color:#6A6A6A; height:2px; margin-bottom: 12px; margin-top:10px; margin-bottom: 10px;">
                                                                </div>

                                                                <div style="display:flex; ">

                                                                    <div>
                                                                        <input class="form-check-input" type="radio" name="com_Premium2" id="com_PremiumPlan3">
                                                                        <label class="form-check-label" for="com_PremiumPlan3">
                                                                            <strong><span style="color:red; font-size:17px">-></span>
                                                                                Premium per Individual <span style="color:#6199F5;">(Single Policy)</span>
                                                                            </strong>
                                                                        </label>
                                                                    </div>

                                                                    <div style="margin-left: 40px;">
                                                                        <input class="form-check-input" disabled type="radio" name="com_Premium2" id="com_PremiumPlan4">
                                                                        <label class="form-check-label" for="com_PremiumPlan4">
                                                                            <strong><span style="color:red; font-size:17px">-></span>
                                                                                Premium per Individual <span style="color:#6199F5;">(Group
                                                                                    Policy)</span></strong>
                                                                        </label>
                                                                    </div>

                                                                </div>

                                                                <div class="collapse" id="com_PremiumCoverPlan3" aria-expanded="true">

                                                                    <div class="row">

                                                                        <?php


                                                                        $cover_benefits_id = $this->db->select("id")
                                                                            ->from('cover_benefits')
                                                                            ->like('title', 'COMBINED INSURANCE')
                                                                            ->get()
                                                                            ->result();

                                                                        $product_id  = $this->db->select("id")
                                                                            ->from('products')
                                                                            ->where('title', 'DOMESTIC TRAVEL INSURANCE')
                                                                            ->get()
                                                                            ->result();

                                                                        $plansList = $this->db->query("SELECT cover_benefits.title,plans.plan_code,plans.plan_name AS plan_name,
                                                                                sum_assured,fixed_premium,min_age,max_age,cover_types.title FROM `plan_dependents`
                                                                                inner JOIN plans on plans.id=plan_dependents.plan_id
                                                                                inner join cover_types on cover_types.id=plans.cover_type_id
                                                                                INNER JOIN cover_benefits on cover_benefits.id=plan_dependents.cover_benefits_type
                                                                                WHERE  cover_types.title LIKE '%INDI%' AND plans.product_id =(SELECT id FROM `products` WHERE title='DOMESTIC TRAVEL INSURANCE')
                                                                                AND ( plans.plan_name LIKE '%TRIP%' AND plans.plan_name LIKE '%COMBI%' )
                                                                                AND fixed_premium != '0'
                                                                                GROUP BY plan_name
                                                                                ORDER BY sum_assured
                                                                            ");

                                                                        $results = $plansList->result_array();
                                                                        // var_dump($results);

                                                                        foreach ($results as $planrow) {
                                                                            $PlanName = $planrow['plan_name'];

                                                                            $plansList_details = $this->db->query("SELECT cover_benefits.title,plans.plan_code, plan_id, plans.plan_name AS plan_name,
                                                                                sum_assured,fixed_premium,min_age,max_age,cover_types.title AS cover_title FROM `plan_dependents`
                                                                                inner JOIN plans on plans.id=plan_dependents.plan_id
                                                                                inner join cover_types on cover_types.id=plans.cover_type_id
                                                                                INNER JOIN cover_benefits on cover_benefits.id=plan_dependents.cover_benefits_type
                                                                                WHERE  cover_types.title LIKE '%INDI%' AND plans.product_id =(SELECT id FROM `products` WHERE title='DOMESTIC TRAVEL INSURANCE')
                                                                                AND ( plans.plan_name LIKE '%TRIP%' AND plans.plan_name LIKE '%COMBI%' )
                                                                                AND plan_name = '$PlanName'
                                                                                ");

                                                                            $results_details = $plansList_details->result_array();
                                                                        ?>
                                                                            <div class='card' style='width: 18rem; margin:5px'>
                                                                                <div class='card-body' style='color:#3b3b3b'>

                                                                                    <h6>
                                                                                        <b><?php echo $PlanName ?></b>
                                                                                    </h6>

                                                                                    <!-- <ul class='list-group list-group-flush'> -->

                                                                                    <?php
                                                                                    foreach ($results_details as $planrow_details) {
                                                                                        $title = $planrow_details['title'];
                                                                                        $Sum_assured = $planrow_details['sum_assured'];
                                                                                        $Fixed_premium = $planrow_details['fixed_premium'];
                                                                                        $plan_id = $planrow_details['plan_id'];
                                                                                        $plan_code = $planrow_details['plan_code'];

                                                                                        $f_sum_assured = number_format($Sum_assured);
                                                                                        if ($Fixed_premium > 0) {
                                                                                            $f_fixed_premium = number_format($Fixed_premium);
                                                                                        }

                                                                                        echo "<div>
                                                                                                        <div>
                                                                                                            <u> $title </u> <strong style='color:teal; font-size:19px'> : K
                                                                                                                $f_sum_assured  </strong>
                                                                                                        </div>
                                                                                                    </div>";
                                                                                    }
                                                                                    ?>
                                                                                    <div style='width: 100%; background-color:#304060; height:1px '></div>
                                                                                    <div>
                                                                                        Get Started at <strong>K
                                                                                            <?php echo $f_fixed_premium ?></strong>
                                                                                    </div>
                                                                                    <!-- </ul> -->
                                                                                    <?php echo "
                                                                                        <button onclick='selectionBtn(this);' data-type='Combined' data-policy='pay_as_u_go' data-policytype='premium_per_individual_single' 
                                                                                            data-sum=" . $f_sum_assured . " data-plantitle='" . $PlanName . "' data-premium=" . $f_fixed_premium . " data-planid=" . $plan_id . " data-plancode=" . $plan_code . "
                                                                                            class='selection_btn btn btn-primary'>Select Cover
                                                                                        </button>
                                                                                        ";
                                                                                    ?>

                                                                                    <!-- <button data-type='Accidental pay_as_u_go premium_group $f_sum_assured $f_fixed_premium' class='selection_btn btn btn-primary'>Select
                                                                                            Cover
                                                                                        </button> -->
                                                                                </div>
                                                                            </div>
                                                                        <?php
                                                                        }

                                                                        ?>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <!-- end -->
                                                            <div style="margin-top:10px">


                                                                <div class="collapse" id="com_PremiumCoverPlan4" aria-expanded="true">

                                                                    <div class="row">

                                                                        <?php
                                                                        $cover_benefits_id = $this->db->select("id")
                                                                            ->from('cover_benefits')
                                                                            ->like('title', 'ACCIDENTAL DEATH BENEFIT')
                                                                            ->get()
                                                                            ->result();

                                                                        $product_id  = $this->db->select("id")
                                                                            ->from('products')
                                                                            ->where('title', 'DOMESTIC TRAVEL INSURANCE')
                                                                            ->get()
                                                                            ->result();

                                                                        $plansList = $this->db->query("SELECT cover_benefits.title,plan_id,plans.plan_code,plans.plan_name,
                                                                                fixed_premium,min_age,max_age,cover_types.title FROM `plan_dependents`
                                                                                inner JOIN plans on plans.id=plan_dependents.plan_id
                                                                                inner join cover_types on cover_types.id=plans.cover_type_id
                                                                                INNER JOIN cover_benefits on cover_benefits.id=plan_dependents.cover_benefits_type
                                                                                WHERE  cover_types.title ='GROUP' AND plans.product_id =(SELECT id FROM `products` WHERE title='DOMESTIC TRAVEL INSURANCE')
                                                                                AND ( plans.plan_name LIKE '%TRIP%' AND plans.plan_name LIKE '%COMBI%' )
                                                                                AND fixed_premium != '0'

                                                                                GROUP BY plan_name
                                                                                ORDER BY sum_assured
                                                                                ");

                                                                        $results = $plansList->result_array();
                                                                        // var_dump($results);
                                                                        if (empty($results)) {
                                                                            echo  "</br>No Data </br>";
                                                                        }

                                                                        foreach ($results as $planrow) {
                                                                            $PlanName = $planrow['plan_name'];
                                                                            ///////////////////////////////
                                                                            $plansList_details = $this->db->query("SELECT cover_benefits.title,plans.plan_code,plan_id,plans.plan_name,sum_assured,
                                                                                fixed_premium,min_age,max_age,cover_types.title AS cover_title FROM `plan_dependents`
                                                                                inner JOIN plans on plans.id=plan_dependents.plan_id
                                                                                inner join cover_types on cover_types.id=plans.cover_type_id
                                                                                INNER JOIN cover_benefits on cover_benefits.id=plan_dependents.cover_benefits_type
                                                                                WHERE  cover_types.title ='GROUP' AND plans.product_id =(SELECT id FROM `products` WHERE title='DOMESTIC TRAVEL INSURANCE')
                                                                                AND ( plans.plan_name LIKE '%TRIP%' AND plans.plan_name LIKE '%COMBI%' )
                                                                                AND plan_name = '$PlanName'
                                                                                ");

                                                                            $results_details = $plansList_details->result_array();


                                                                        ?>
                                                                            <div class='card' style='width: 18rem; margin:5px'>
                                                                                <div class='card-body' style='color:#3b3b3b'>

                                                                                    <h6>
                                                                                        <b><?php echo $PlanName ?></b>
                                                                                    </h6>

                                                                                    <ul class='list-group list-group-flush'>

                                                                                        <?php
                                                                                        foreach ($results_details as $planrow_details) {
                                                                                            $title = $planrow_details['title'];
                                                                                            $Sum_assured = $planrow_details['sum_assured'];
                                                                                            $Fixed_premium = $planrow_details['fixed_premium'];

                                                                                            $plan_id = $planrow_details['plan_id'];
                                                                                            $plan_code = $planrow_details['plan_code'];

                                                                                            $f_sum_assured = number_format($Sum_assured);
                                                                                            if ($Fixed_premium > 0) {
                                                                                                $f_fixed_premium = number_format($Fixed_premium);
                                                                                            }
                                                                                            $all_sums .= $Sum_assured . "<br>";

                                                                                            // echo "<script> console.log('$all_sums')</script>";

                                                                                            echo "<div>
                                                                                                    <div>
                                                                                                        <u> $title </u> <strong style='color:teal; font-size:19px'> : K
                                                                                                            $f_sum_assured  </strong>
                                                                                                    </div>
                                                                                                </div>";
                                                                                        }
                                                                                        ?>
                                                                                        <div style='width: 100%; background-color:#304060; height:1px '></div>
                                                                                        <li class='list-group-item'>
                                                                                            Get Started at <strong>K
                                                                                                <?php echo $f_fixed_premium ?></strong>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <?php echo "
                                                                                        <button onclick='selectionBtn(this);' data-type='Accidental' data-policy='pay_as_u_go' data-policytype='premium_group' data-sum=" .
                                                                                        $f_sum_assured . " data-plantitle='" . $PlanName . "' data-premium=" . $f_fixed_premium . " data-planid=" . $plan_id . " data-plancode=" . $plan_code . "
                                                                                            class='selection_btn btn btn-primary'>Select Cover
                                                                                        </button>";
                                                                                    unset($all_sums);
                                                                                    ?>
                                                                                </div>
                                                                            </div>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>


                                                    </div>
                                                    <!-- Pay Per trip end -->

                                                    <!-- Way of life starts here -->
                                                    <div>
                                                        <input class="form-check-input" type="radio" name="com_cover1" id="com_covertype3">

                                                        <label class="form-check-label" for="com_covertype3">
                                                            <h6> <strong>Way of life cover </strong> <span style="color:coral">( Premiums per Month ZMW )</span>
                                                            </h6>
                                                        </label>
                                                    </div>

                                                    <!-- Way of life expantion -->
                                                    <div class="collapse" id="com_collapsePlan3" aria-expanded="true">

                                                        <div class="container">
                                                            <div>
                                                                <!-- 1 -->

                                                                <div style="width: 100%; background-color:#6A6A6A; height:2px; margin-bottom: 12px; margin-top:10px; margin-bottom: 10px;">
                                                                </div>

                                                                <div style="display:flex; ">

                                                                    <div>
                                                                        <input class="form-check-input" type="radio" name="com_Premium4" id="com_PremiumPlan5">
                                                                        <label class="form-check-label" for="com_PremiumPlan5">
                                                                            <strong><span style="color:red; font-size:17px">-></span>
                                                                                Monthly Premium per Family<span style="color:#6199F5;">(Single Policy)</span>
                                                                            </strong>
                                                                        </label>
                                                                    </div>

                                                                    <div style="margin-left: 40px;">
                                                                        <input class="form-check-input" disabled type="radio" name="com_Premium4" id="com_PremiumPlan6">
                                                                        <label class="form-check-label" for="com_PremiumPlan6">
                                                                            <strong><span style="color:red; font-size:17px">-></span>
                                                                                Monthly Premium per Group <span style="color:#6199F5;">(min 10)</span></strong>
                                                                        </label>
                                                                    </div>

                                                                </div>

                                                                <div class="collapse" id="com_PremiumCoverPlan5" aria-expanded="true">

                                                                    <div class="row">

                                                                        <?php


                                                                        $cover_benefits_id = $this->db->select("id")
                                                                            ->from('cover_benefits')
                                                                            ->like('title', 'COMBINED INSURANCE')
                                                                            ->get()
                                                                            ->result();

                                                                        $product_id  = $this->db->select("id")
                                                                            ->from('products')
                                                                            ->where('title', 'DOMESTIC TRAVEL INSURANCE')
                                                                            ->get()
                                                                            ->result();

                                                                        $plansList = $this->db->query("SELECT cover_benefits.title,plans.plan_code,plans.plan_name AS plan_name,
                                                                                sum_assured,fixed_premium,min_age,max_age,cover_types.title FROM `plan_dependents`
                                                                                inner JOIN plans on plans.id=plan_dependents.plan_id
                                                                                inner join cover_types on cover_types.id=plans.cover_type_id
                                                                                INNER JOIN cover_benefits on cover_benefits.id=plan_dependents.cover_benefits_type
                                                                                WHERE  cover_types.title !='GROUP' AND plans.product_id =(SELECT id FROM `products` WHERE title='DOMESTIC TRAVEL INSURANCE')
                                                                                AND ( plans.plan_name LIKE '%WAY%' AND plans.plan_name LIKE '%COMBI%' )
                                                                                AND fixed_premium != '0'
                                                                                GROUP BY plan_name
                                                                                ORDER BY sum_assured
                                                                            ");

                                                                        $results = $plansList->result_array();
                                                                        // var_dump($results);
                                                                        if (empty($results)) {
                                                                            echo  "</br>No Data </br>";
                                                                        }

                                                                        foreach ($results as $planrow) {
                                                                            $PlanName = $planrow['plan_name'];

                                                                            $plansList_details = $this->db->query("SELECT cover_benefits.title,plans.plan_code, plan_id, plans.plan_name AS plan_name,
                                                                                sum_assured,fixed_premium,min_age,max_age,cover_types.title AS cover_title FROM `plan_dependents`
                                                                                inner JOIN plans on plans.id=plan_dependents.plan_id
                                                                                inner join cover_types on cover_types.id=plans.cover_type_id
                                                                                INNER JOIN cover_benefits on cover_benefits.id=plan_dependents.cover_benefits_type
                                                                                WHERE  cover_types.title !='GROUP' AND plans.product_id =(SELECT id FROM `products` WHERE title='DOMESTIC TRAVEL INSURANCE')
                                                                                AND ( plans.plan_name LIKE '%WAY%' AND plans.plan_name LIKE '%COMBI%' )
                                                                                AND plan_name = '$PlanName'
                                                                                ");

                                                                            $results_details = $plansList_details->result_array();
                                                                        ?>
                                                                            <div class='card' style='width: 18rem; margin:5px'>
                                                                                <div class='card-body' style='color:#3b3b3b'>

                                                                                    <h6>
                                                                                        <b><?php echo $PlanName ?></b>
                                                                                    </h6>

                                                                                    <!-- <ul class='list-group list-group-flush'> -->

                                                                                    <?php
                                                                                    foreach ($results_details as $planrow_details) {
                                                                                        $title = $planrow_details['title'];
                                                                                        $Sum_assured = $planrow_details['sum_assured'];
                                                                                        $Fixed_premium = $planrow_details['fixed_premium'];
                                                                                        $plan_id = $planrow_details['plan_id'];
                                                                                        $plan_code = $planrow_details['plan_code'];

                                                                                        $f_sum_assured = number_format($Sum_assured);
                                                                                        if ($Fixed_premium > 0) {
                                                                                            $f_fixed_premium = number_format($Fixed_premium);
                                                                                        }

                                                                                        echo "<div>
                                                                                                        <div>
                                                                                                            <u> $title </u> <strong style='color:teal; font-size:19px'> : K
                                                                                                                $f_sum_assured  </strong>
                                                                                                        </div>
                                                                                                    </div>";
                                                                                    }
                                                                                    ?>
                                                                                    <div style='width: 100%; background-color:#304060; height:1px '></div>
                                                                                    <div>
                                                                                        Get Started at <strong>K
                                                                                            <?php echo $f_fixed_premium ?></strong>
                                                                                    </div>
                                                                                    <!-- </ul> -->
                                                                                    <?php echo "
                                                                                        <button onclick='selectionBtn(this);' data-type='Combined' data-policy='pay_as_u_go' data-policytype='premium_per_individual_single' 
                                                                                            data-sum=" . $f_sum_assured . " data-plantitle='" . $PlanName . "' data-premium=" . $f_fixed_premium . " data-planid=" . $plan_id . " data-plancode=" . $plan_code . "
                                                                                            class='selection_btn btn btn-primary'>Select Cover
                                                                                        </button>
                                                                                        ";
                                                                                    ?>

                                                                                    <!-- <button data-type='Accidental pay_as_u_go premium_group $f_sum_assured $f_fixed_premium' class='selection_btn btn btn-primary'>Select
                                                                                            Cover
                                                                                        </button> -->
                                                                                </div>
                                                                            </div>
                                                                        <?php
                                                                        }
                                                                        ?>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <!-- end -->
                                                            <div style="margin-top:10px">


                                                                <div class="collapse" id="com_PremiumCoverPlan6" aria-expanded="true">

                                                                    <div class="row">

                                                                        <?php
                                                                        $cover_benefits_id = $this->db->select("id")
                                                                            ->from('cover_benefits')
                                                                            ->like('title', 'ACCIDENTAL DEATH BENEFIT')
                                                                            ->get()
                                                                            ->result();

                                                                        $product_id  = $this->db->select("id")
                                                                            ->from('products')
                                                                            ->where('title', 'DOMESTIC TRAVEL INSURANCE')
                                                                            ->get()
                                                                            ->result();

                                                                        $plansList = $this->db->query("SELECT cover_benefits.title,plan_id,plans.plan_code,plans.plan_name,
                                                                                fixed_premium,min_age,max_age,cover_types.title FROM `plan_dependents`
                                                                                inner JOIN plans on plans.id=plan_dependents.plan_id
                                                                                inner join cover_types on cover_types.id=plans.cover_type_id
                                                                                INNER JOIN cover_benefits on cover_benefits.id=plan_dependents.cover_benefits_type
                                                                                WHERE  cover_types.title ='GROUP' AND plans.product_id =(SELECT id FROM `products` WHERE title='DOMESTIC TRAVEL INSURANCE')
                                                                                AND ( plans.plan_name LIKE '%WAY%' AND plans.plan_name LIKE '%COMBI%' )
                                                                                AND fixed_premium != '0'

                                                                                GROUP BY plan_name
                                                                                ORDER BY sum_assured
                                                                                ");

                                                                        $results = $plansList->result_array();
                                                                        // var_dump($results);
                                                                        if (empty($results)) {
                                                                            echo  "</br>No Data </br>";
                                                                        }

                                                                        foreach ($results as $planrow) {
                                                                            $PlanName = $planrow['plan_name'];
                                                                            ///////////////////////////////
                                                                            $plansList_details = $this->db->query("SELECT cover_benefits.title,plans.plan_code,plan_id,plans.plan_name,sum_assured,
                                                                                fixed_premium,min_age,max_age,cover_types.title AS cover_title FROM `plan_dependents`
                                                                                inner JOIN plans on plans.id=plan_dependents.plan_id
                                                                                inner join cover_types on cover_types.id=plans.cover_type_id
                                                                                INNER JOIN cover_benefits on cover_benefits.id=plan_dependents.cover_benefits_type
                                                                                WHERE  cover_types.title ='GROUP' AND plans.product_id =(SELECT id FROM `products` WHERE title='DOMESTIC TRAVEL INSURANCE')
                                                                                AND ( plans.plan_name LIKE '%WAY%' AND plans.plan_name LIKE '%COMBI%' )
                                                                                AND plan_name = '$PlanName'
                                                                                ");

                                                                            $results_details = $plansList_details->result_array();


                                                                        ?>
                                                                            <div class='card' style='width: 18rem; margin:5px'>
                                                                                <div class='card-body' style='color:#3b3b3b'>

                                                                                    <h6>
                                                                                        <b><?php echo $PlanName ?></b>
                                                                                    </h6>

                                                                                    <ul class='list-group list-group-flush'>

                                                                                        <?php
                                                                                        foreach ($results_details as $planrow_details) {
                                                                                            $title = $planrow_details['title'];
                                                                                            $Sum_assured = $planrow_details['sum_assured'];
                                                                                            $Fixed_premium = $planrow_details['fixed_premium'];

                                                                                            $plan_id = $planrow_details['plan_id'];
                                                                                            $plan_code = $planrow_details['plan_code'];

                                                                                            $f_sum_assured = number_format($Sum_assured);
                                                                                            if ($Fixed_premium > 0) {
                                                                                                $f_fixed_premium = number_format($Fixed_premium);
                                                                                            }
                                                                                            $all_sums .= $Sum_assured . "<br>";

                                                                                            // echo "<script> console.log('$all_sums')</script>";

                                                                                            echo "<div>
                                                                                                    <div>
                                                                                                        <u> $title </u> <strong style='color:teal; font-size:19px'> : K
                                                                                                            $f_sum_assured  </strong>
                                                                                                    </div>
                                                                                                </div>";
                                                                                        }
                                                                                        ?>
                                                                                        <div style='width: 100%; background-color:#304060; height:1px '></div>
                                                                                        <li class='list-group-item'>
                                                                                            Get Started at <strong>K
                                                                                                <?php echo $f_fixed_premium ?></strong>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <?php echo "
                                                                                        <button onclick='selectionBtn(this);' data-type='Accidental' data-policy='pay_as_u_go' data-policytype='premium_group' data-sum=" .
                                                                                        $f_sum_assured . " data-plantitle='" . $PlanName . "' data-premium=" . $f_fixed_premium . " data-planid=" . $plan_id . " data-plancode=" . $plan_code . "
                                                                                            class='selection_btn btn btn-primary'>Select Cover
                                                                                        </button>";
                                                                                    unset($all_sums);
                                                                                    ?>
                                                                                </div>
                                                                            </div>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>


                                                    </div>
                                                    <!-- Way of life end -->

                                                    <!-- Family Cover starts here -->
                                                    <div>
                                                        <input class="form-check-input" type="radio" name="com_cover1" id="com_covertype4">

                                                        <label class="form-check-label" for="com_covertype4">
                                                            <h6> <strong>Family Cover </strong> <span style="color:coral">( Premiums per Month ZMW )</span>
                                                            </h6>
                                                        </label>
                                                    </div>

                                                    <!-- Family Cover expantion -->
                                                    <div class="collapse" id="com_collapsePlan4" aria-expanded="true">

                                                        <div class="container">
                                                            <div>
                                                                <!-- 1 -->

                                                                <div style="width: 100%; background-color:#6A6A6A; height:2px; margin-bottom: 12px; margin-top:10px; margin-bottom: 10px;">
                                                                </div>

                                                                <div style="display:flex; ">

                                                                    <div>
                                                                        <input class="form-check-input" type="radio" name="com_Premium4" id="com_PremiumPlan7">
                                                                        <label class="form-check-label" for="com_PremiumPlan7">
                                                                            <strong><span style="color:red; font-size:17px">-></span>
                                                                                Monthly Premium per Family<span style="color:#6199F5;">(Single Policy)</span>
                                                                            </strong>
                                                                        </label>
                                                                    </div>

                                                                    <div style="margin-left: 40px;">
                                                                        <input class="form-check-input" disabled type="radio" name="com_Premium4" id="com_PremiumPlan8">
                                                                        <label class="form-check-label" for="com_PremiumPlan8">
                                                                            <strong><span style="color:red; font-size:17px">-></span>
                                                                                Monthly Premium per Group <span style="color:#6199F5;">(min 10)</span></strong>
                                                                        </label>
                                                                    </div>

                                                                </div>

                                                                <div class="collapse" id="com_PremiumCoverPlan7" aria-expanded="true">

                                                                    <div class="row">

                                                                        <?php


                                                                        $cover_benefits_id = $this->db->select("id")
                                                                            ->from('cover_benefits')
                                                                            ->like('title', 'COMBINED INSURANCE')
                                                                            ->get()
                                                                            ->result();

                                                                        $product_id  = $this->db->select("id")
                                                                            ->from('products')
                                                                            ->where('title', 'DOMESTIC TRAVEL INSURANCE')
                                                                            ->get()
                                                                            ->result();

                                                                        $plansList = $this->db->query("SELECT cover_benefits.title,plans.plan_code,plans.plan_name AS plan_name,
                                                                                sum_assured,fixed_premium,min_age,max_age,cover_types.title FROM `plan_dependents`
                                                                                inner JOIN plans on plans.id=plan_dependents.plan_id
                                                                                inner join cover_types on cover_types.id=plans.cover_type_id
                                                                                INNER JOIN cover_benefits on cover_benefits.id=plan_dependents.cover_benefits_type
                                                                                WHERE  cover_types.title !='GROUP' AND plans.product_id =(SELECT id FROM `products` WHERE title='DOMESTIC TRAVEL INSURANCE')
                                                                                AND ( plans.plan_name LIKE '%FAMI%' AND plans.plan_name LIKE '%COMBI%' )
                                                                                AND fixed_premium != '0'
                                                                                GROUP BY plan_name
                                                                                ORDER BY sum_assured
                                                                            ");

                                                                        $results = $plansList->result_array();
                                                                        // var_dump($results);
                                                                        if (empty($results)) {
                                                                            echo  "</br>No Data </br>";
                                                                        }

                                                                        foreach ($results as $planrow) {
                                                                            $PlanName = $planrow['plan_name'];

                                                                            $plansList_details = $this->db->query("SELECT cover_benefits.title,plans.plan_code, plan_id, plans.plan_name AS plan_name,
                                                                                sum_assured,fixed_premium,min_age,max_age,cover_types.title AS cover_title FROM `plan_dependents`
                                                                                inner JOIN plans on plans.id=plan_dependents.plan_id
                                                                                inner join cover_types on cover_types.id=plans.cover_type_id
                                                                                INNER JOIN cover_benefits on cover_benefits.id=plan_dependents.cover_benefits_type
                                                                                WHERE  cover_types.title !='GROUP' AND plans.product_id =(SELECT id FROM `products` WHERE title='DOMESTIC TRAVEL INSURANCE')
                                                                                AND ( plans.plan_name LIKE '%FAMILY%' AND plans.plan_name LIKE '%COMBI%' )
                                                                                AND plan_name = '$PlanName'
                                                                                ");

                                                                            $results_details = $plansList_details->result_array();
                                                                        ?>
                                                                            <div class='card' style='width: 18rem; margin:5px'>
                                                                                <div class='card-body' style='color:#3b3b3b'>

                                                                                    <h6>
                                                                                        <b><?php echo $PlanName ?></b>
                                                                                    </h6>

                                                                                    <!-- <ul class='list-group list-group-flush'> -->

                                                                                    <?php
                                                                                    foreach ($results_details as $planrow_details) {
                                                                                        $title = $planrow_details['title'];
                                                                                        $Sum_assured = $planrow_details['sum_assured'];
                                                                                        $Fixed_premium = $planrow_details['fixed_premium'];
                                                                                        $plan_id = $planrow_details['plan_id'];
                                                                                        $plan_code = $planrow_details['plan_code'];

                                                                                        $f_sum_assured = number_format($Sum_assured);
                                                                                        if ($Fixed_premium > 0) {
                                                                                            $f_fixed_premium = number_format($Fixed_premium);
                                                                                        }

                                                                                        echo "<div>
                                                                                                        <div>
                                                                                                            <u> $title </u> <strong style='color:teal; font-size:19px'> : K
                                                                                                                $f_sum_assured  </strong>
                                                                                                        </div>
                                                                                                    </div>";
                                                                                    }
                                                                                    ?>
                                                                                    <div style='width: 100%; background-color:#304060; height:1px '></div>
                                                                                    <div>
                                                                                        Get Started at <strong>K
                                                                                            <?php echo $f_fixed_premium ?></strong>
                                                                                    </div>
                                                                                    <!-- </ul> -->
                                                                                    <?php echo "
                                                                                        <button onclick='selectionBtn(this);' data-type='Combined' data-policy='pay_as_u_go' data-policytype='premium_per_individual_single' 
                                                                                            data-sum=" . $f_sum_assured . " data-plantitle='" . $PlanName . "' data-premium=" . $f_fixed_premium . " data-planid=" . $plan_id . " data-plancode=" . $plan_code . "
                                                                                            class='selection_btn btn btn-primary'>Select Cover
                                                                                        </button>
                                                                                        ";
                                                                                    ?>

                                                                                    <!-- <button data-type='Accidental pay_as_u_go premium_group $f_sum_assured $f_fixed_premium' class='selection_btn btn btn-primary'>Select
                                                                                            Cover
                                                                                        </button> -->
                                                                                </div>
                                                                            </div>
                                                                        <?php
                                                                        }
                                                                        ?>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <!-- end -->
                                                            <div style="margin-top:10px">


                                                                <div class="collapse" id="com_PremiumCoverPlan8" aria-expanded="true">

                                                                    <div class="row">
                                                                        <?php
                                                                        $cover_benefits_id = $this->db->select("id")
                                                                            ->from('cover_benefits')
                                                                            ->like('title', 'ACCIDENTAL DEATH BENEFIT')
                                                                            ->get()
                                                                            ->result();

                                                                        $product_id  = $this->db->select("id")
                                                                            ->from('products')
                                                                            ->where('title', 'DOMESTIC TRAVEL INSURANCE')
                                                                            ->get()
                                                                            ->result();

                                                                        $plansList = $this->db->query("SELECT cover_benefits.title,plan_id,plans.plan_code,plans.plan_name,
                                                                                fixed_premium,min_age,max_age,cover_types.title FROM `plan_dependents`
                                                                                inner JOIN plans on plans.id=plan_dependents.plan_id
                                                                                inner join cover_types on cover_types.id=plans.cover_type_id
                                                                                INNER JOIN cover_benefits on cover_benefits.id=plan_dependents.cover_benefits_type
                                                                                WHERE  cover_types.title ='GROUP' AND plans.product_id =(SELECT id FROM `products` WHERE title='DOMESTIC TRAVEL INSURANCE')
                                                                                AND ( plans.plan_name LIKE '%FAMILY%' AND plans.plan_name LIKE '%COMBI%' )
                                                                                AND fixed_premium != '0'

                                                                                GROUP BY plan_name
                                                                                ORDER BY sum_assured
                                                                                ");

                                                                        $results = $plansList->result_array();
                                                                        // var_dump($results);
                                                                        if (empty($results)) {
                                                                            echo  "</br>No Data </br>";
                                                                        }

                                                                        foreach ($results as $planrow) {
                                                                            $PlanName = $planrow['plan_name'];
                                                                            ///////////////////////////////
                                                                            $plansList_details = $this->db->query("SELECT cover_benefits.title,plans.plan_code,plan_id,plans.plan_name,sum_assured,
                                                                                fixed_premium,min_age,max_age,cover_types.title AS cover_title FROM `plan_dependents`
                                                                                inner JOIN plans on plans.id=plan_dependents.plan_id
                                                                                inner join cover_types on cover_types.id=plans.cover_type_id
                                                                                INNER JOIN cover_benefits on cover_benefits.id=plan_dependents.cover_benefits_type
                                                                                WHERE  cover_types.title ='GROUP' AND plans.product_id =(SELECT id FROM `products` WHERE title='DOMESTIC TRAVEL INSURANCE')
                                                                                AND ( plans.plan_name LIKE '%FAMILY%' AND plans.plan_name LIKE '%COMBI%' )
                                                                                AND plan_name = '$PlanName'
                                                                                ");

                                                                            $results_details = $plansList_details->result_array();


                                                                        ?>
                                                                            <div class='card' style='width: 18rem; margin:5px'>
                                                                                <div class='card-body' style='color:#3b3b3b'>

                                                                                    <h6>
                                                                                        <b><?php echo $PlanName ?></b>
                                                                                    </h6>

                                                                                    <ul class='list-group list-group-flush'>

                                                                                        <?php
                                                                                        foreach ($results_details as $planrow_details) {
                                                                                            $title = $planrow_details['title'];
                                                                                            $Sum_assured = $planrow_details['sum_assured'];
                                                                                            $Fixed_premium = $planrow_details['fixed_premium'];

                                                                                            $plan_id = $planrow_details['plan_id'];
                                                                                            $plan_code = $planrow_details['plan_code'];

                                                                                            $f_sum_assured = number_format($Sum_assured);
                                                                                            if ($Fixed_premium > 0) {
                                                                                                $f_fixed_premium = number_format($Fixed_premium);
                                                                                            }
                                                                                            $all_sums .= $Sum_assured . "<br>";

                                                                                            // echo "<script> console.log('$all_sums')</script>";

                                                                                            echo "<div>
                                                                                                    <div>
                                                                                                        <u> $title </u> <strong style='color:teal; font-size:19px'> : K
                                                                                                            $f_sum_assured  </strong>
                                                                                                    </div>
                                                                                                </div>";
                                                                                        }
                                                                                        ?>
                                                                                        <div style='width: 100%; background-color:#304060; height:1px '></div>
                                                                                        <li class='list-group-item'>
                                                                                            Get Started at <strong>K
                                                                                                <?php echo $f_fixed_premium ?></strong>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <?php echo "
                                                                                        <button onclick='selectionBtn(this);' data-type='Accidental' data-policy='pay_as_u_go' data-policytype='premium_group' data-sum=" .
                                                                                        $f_sum_assured . "  data-plantitle='" . $PlanName . "' data-premium=" . $f_fixed_premium . " data-planid=" . $plan_id . " data-plancode=" . $plan_code . "
                                                                                            class='selection_btn btn btn-primary'>Select Cover
                                                                                        </button>";
                                                                                    unset($all_sums);
                                                                                    ?>
                                                                                </div>
                                                                            </div>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>


                                                    </div>
                                                    <!-- Family Cover end -->

                                                    <!-- Student Cover starts here -->
                                                    <div>
                                                        <input class="form-check-input" type="radio" name="com_cover1" id="com_covertype5">

                                                        <label class="form-check-label" for="com_covertype5">
                                                            <h6> <strong>Student Cover </strong> <span style="color:coral">( Premiums per 3 Month ZMW )</span>
                                                            </h6>
                                                        </label>
                                                    </div>

                                                    <!-- Student Cover expantion -->
                                                    <div class="collapse" id="com_collapsePlan5" aria-expanded="true">

                                                        <div class="container">
                                                            <div>
                                                                <!-- 1 -->

                                                                <div style="width: 100%; background-color:#6A6A6A; height:2px; margin-bottom: 12px; margin-top:10px; margin-bottom: 10px;">
                                                                </div>

                                                                <div style="display:flex; ">

                                                                    <div>
                                                                        <input class="form-check-input" type="radio" name="com_Premium4" id="com_PremiumPlan9">
                                                                        <label class="form-check-label" for="com_PremiumPlan9">
                                                                            <strong><span style="color:red; font-size:17px">-></span>
                                                                                Premium per Term per Student<span style="color:#6199F5;">(Single Policy)</span>
                                                                            </strong>
                                                                        </label>
                                                                    </div>





                                                                </div>

                                                                <div class="collapse" id="com_PremiumCoverPlan9" aria-expanded="true">

                                                                    <div class="row">

                                                                        <?php


                                                                        $cover_benefits_id = $this->db->select("id")
                                                                            ->from('cover_benefits')
                                                                            ->like('title', 'COMBINED INSURANCE')
                                                                            ->get()
                                                                            ->result();

                                                                        $product_id  = $this->db->select("id")
                                                                            ->from('products')
                                                                            ->where('title', 'DOMESTIC TRAVEL INSURANCE')
                                                                            ->get()
                                                                            ->result();

                                                                        $plansList = $this->db->query("SELECT cover_benefits.title,plans.plan_code,plans.plan_name AS plan_name,
                                                                            sum_assured,fixed_premium,min_age,max_age,cover_types.title FROM `plan_dependents`
                                                                            inner JOIN plans on plans.id=plan_dependents.plan_id
                                                                            inner join cover_types on cover_types.id=plans.cover_type_id
                                                                            INNER JOIN cover_benefits on cover_benefits.id=plan_dependents.cover_benefits_type
                                                                            WHERE  cover_types.title ='GROUP' AND plans.product_id =(SELECT id FROM `products` WHERE title='DOMESTIC TRAVEL INSURANCE')
                                                                            AND ( plans.plan_name LIKE '%DTI STUDENT%' AND plans.plan_name LIKE '%COMBI%' )
                                                                            AND fixed_premium != '0'
                                                                            GROUP BY plan_name
                                                                            ORDER BY sum_assured
                                                                        ");

                                                                        $results = $plansList->result_array();
                                                                        // var_dump($results);
                                                                        if (empty($results)) {
                                                                            echo  "</br> No Data </br>";
                                                                        }

                                                                        foreach ($results as $planrow) {
                                                                            $PlanName = $planrow['plan_name'];

                                                                            $plansList_details = $this->db->query("SELECT cover_benefits.title,plans.plan_code, plan_id, plans.plan_name AS plan_name,
                                                                            sum_assured,fixed_premium,min_age,max_age,cover_types.title AS cover_title FROM `plan_dependents`
                                                                            inner JOIN plans on plans.id=plan_dependents.plan_id
                                                                            inner join cover_types on cover_types.id=plans.cover_type_id
                                                                            INNER JOIN cover_benefits on cover_benefits.id=plan_dependents.cover_benefits_type
                                                                            WHERE  cover_types.title ='GROUP' AND plans.product_id =(SELECT id FROM `products` WHERE title='DOMESTIC TRAVEL INSURANCE')
                                                                            AND ( plans.plan_name LIKE '%DTI STUDENT%' AND plans.plan_name LIKE '%COMBI%' )
                                                                            AND plan_name = '$PlanName'
                                                                            ");

                                                                            $results_details = $plansList_details->result_array();
                                                                        ?>
                                                                            <div class='card' style='width: 18rem; margin:5px'>
                                                                                <div class='card-body' style='color:#3b3b3b'>

                                                                                    <h6>
                                                                                        <b><?php echo $PlanName ?></b>
                                                                                    </h6>

                                                                                    <!-- <ul class='list-group list-group-flush'> -->

                                                                                    <?php
                                                                                    foreach ($results_details as $planrow_details) {
                                                                                        $title = $planrow_details['title'];
                                                                                        $Sum_assured = $planrow_details['sum_assured'];
                                                                                        $Fixed_premium = $planrow_details['fixed_premium'];
                                                                                        $plan_id = $planrow_details['plan_id'];
                                                                                        $plan_code = $planrow_details['plan_code'];

                                                                                        $f_sum_assured = number_format($Sum_assured);
                                                                                        if ($Fixed_premium > 0) {
                                                                                            $f_fixed_premium = number_format($Fixed_premium);
                                                                                        }

                                                                                        echo "<div>
                                                                                                    <div>
                                                                                                        <u> $title </u> <strong style='color:teal; font-size:19px'> : K
                                                                                                            $f_sum_assured  </strong>
                                                                                                    </div>
                                                                                                </div>";
                                                                                    }
                                                                                    ?>
                                                                                    <div style='width: 100%; background-color:#304060; height:1px '></div>
                                                                                    <div>
                                                                                        Get Started at <strong>K
                                                                                            <?php echo $f_fixed_premium ?></strong>
                                                                                    </div>
                                                                                    <!-- </ul> -->
                                                                                    <?php echo "
                                                                                    <button onclick='selectionBtn(this);' data-type='Combined' data-policy='pay_as_u_go' data-policytype='premium_per_individual_single' 
                                                                                        data-sum=" . $f_sum_assured . " data-plantitle='" . $PlanName . "' data-premium=" . $f_fixed_premium . " data-planid=" . $plan_id . " data-plancode=" . $plan_code . "
                                                                                        class='selection_btn btn btn-primary'>Select Cover
                                                                                    </button>
                                                                                    ";
                                                                                    ?>

                                                                                    <!-- <button data-type='Accidental pay_as_u_go premium_group $f_sum_assured $f_fixed_premium' class='selection_btn btn btn-primary'>Select
                                                                                        Cover
                                                                                    </button> -->
                                                                                </div>
                                                                            </div>
                                                                        <?php
                                                                        }
                                                                        ?>

                                                                    </div>


                                                                </div>
                                                            </div>
                                                            <!-- end -->

                                                        </div>


                                                    </div>


                                                </div>
                                            </div>

                                            <div style="width: 100%; background-color:#6A6A6A; height:2px; margin-top:10px; margin-bottom: 10px;">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Modal -->
                            </div>

                            <!-- End of covers tab -->

                        </div>
                        <div class="tab-pane fade col-lg-12" id="nav-group" role="tabpanel" aria-labelledby="nav-group-tab">
                            <div style="overflow:auto" class="card">
                                <div style="padding: 10px;">
                                    <h6 style="color:#3b3b3b">Select Benefit Level</h6>

                                </div>
                                <table id="autotable" class="coveredPersonTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Person Covered</th>
                                            <th scope="col">Surname</th>
                                            <th scope="col">Other names</th>
                                            <th scope="col">Date of Birth</th>
                                            <!-- <th scope="col">Age</th> -->
                                            <th scope="col">Gender</th>
                                            <th scope="col">NRC/Passport number</th>
                                            <th scope="col">Premium</th>
                                            <th scope="col">Sum Assured</th>
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                    </tbody>

                                </table>

                                <div style="padding: 20px; display:flex; justify-content: space-between">
                                    <div>
                                        <span>
                                            <button id="addtable" class="btn btn-primary btn-sm">
                                                One More
                                            </button>
                                        </span>
                                        <button type="button" name="load_manual_data" id="load_manual_data" class="btn btn-primary btn-sm">Add Rows</button>
                                        <span id="tcs1">
                                            <a data-toggle="modal" data-target="#uploadexcel" id="tcs" class="btn btn-primary btn-sm">Upload a document</a>
                                        </span>
                                        <button type="button" name="load_data" id="load_data" class="btn btn-primary btn-sm">Display data</button>

                                        <!-- <button type="button" value="<?php echo $this->session->userdata('docfile');?>" name="deleteCsv" id="deleteCsv" class="btn btn-primary btn-sm"> Reset </button> -->
                                        <!-- <button onclick="deleteCsv()" class="btn btn-primary btn-sm">Reset</button> -->
                                        <!-- <input  value="<?php //echo $this->session->userdata('docfile'); ?>" name="deleteCsv" id="deleteCsv" /> -->
                                        <!-- file input ends here -->
                                        <a data-toggle="modal" data-target="#staticBackdrop1" id="tcs" style="color:#fff; padding:5px; border-radius:20px; background-color:blue; cursor:pointer">How to upload</a>
                                        <!-- <div id="employee_table"></div> -->

                                    </div>


                                     <!-- uploadecel Modal giftps commented bellow 456732-->
                                     <div class="modal fade" id="uploadexcel" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop1Label" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div style="color: #3b3b3b" class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" style="color: #3b3b3b" id="staticBackdrop1Label">
                                                        Upload a Valid .csv Document</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">


                                                    <!-- <script type="text/javascript">
                                                        $(document).ready(function() {
                                                            $('#submitbtn').click(function(event) {

                                                                event.preventDefault()

                                                                $("#viewimage").html('');
                                                                $("#viewimage").html('<img src="img/loading.gif" />');
                                                                // $(".uploadform").ajaxForm({
                                                                //     target: '#viewimage'
                                                                // }).submit();
                                                                var formData = new FormData();
                                                                formData.append()
                                                                alert(formData);
                                                                $.ajax({
                                                                    url: '<?= base_url('website/appointment/uploadCSVfile') ?>',
                                                                    type: 'GET',
                                                                    dataType: "html",
                                                                    success: function(data) {
                                                                        alert("Successful")
                                                                    },
                                                                    error: function() {
                                                                        alert('failed');
                                                                    }
                                                                });

                                                            });
                                                        });
                                                    </script> -->
                                                    <h2> <img src="assets_web/img/mlifelogo.png" style="width:63%" class="img-responsive"> </h2>

                                                    <form id="fileToupload" class="uploadform" method="post" enctype="multipart/form-data" action=''>
                                                        Upload your image <input type="file" name="imagefile" />
                                                        <input type="submit" value="Submit" name="submitbtn" id="submitbtn">
                                                    </form>

                                                    <input type='hidden' id='viewimage'>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end uploadecel Modal -->


                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop1Label" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div style="color: #3b3b3b" class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" style="color: #3b3b3b" id="staticBackdrop1Label">
                                                        How To Upload an Excel Document</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- <embed src="assets_web/docs/tncs.pdf" frameborder="0" width="100%" height="600px"> -->
                                                    <p>Spep 1. Download the excel document template <a href="assets_web/docs/DTI_Table_template.csv"> here. </a>
                                                    <p>
                                                    <p>Step 2. Fill in with the details of the Persons Covered in the exact formart as shown in the template, and save the document.</p>
                                                    <p>Step 3. Upload the Excel document by clicking the <b>Upload an excel document instead</b> button.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Got it</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div style="color:#3b3b3b" id="remove_info">
                                        <p>
                                            Click on <span style="color:#fff; padding:5px; border-radius:20px; background-color:#D03238;">X</span> icon to remove any family or group member.
                                        </p>
                                    </div>
                                </div>

                                <div style="padding: 20px; width: 100%; background-color:#EEEEEE; border: 1px dotted #3b3b3b; display:flex; justify-content: space-between; color:#D03238">
                                    <div>
                                        Family Plan consists of Main Member, Spouse and Up to six Children
                                    </div>
                                    <div style="display: flex; justify-content:space-between">
                                        <div>
                                            Main Benefit Monthly Cost (K)
                                        </div>
                                        <div style="padding-left:10px">
                                            <h5>
                                                <div id="totalMonthlyCost"></div>
                                            </h5>
                                        </div>
                                    </div>
                                </div>

                                <div style="padding: 20px; right:0; display:relative; justify-content: space-between">
                                    <button onclick="goBackToCoverGrp()" class="btn btn-danger btn-sm pull-right">
                                        << Reset </button>

                                            <button onclick="goToPayment('group')" class="btn btn-secondary btn-sm pull-right">
                                                Next >>
                                            </button>
                                </div>


                                <div style="padding: 20px; right:0; display:relative; justify-content: space-between">

                                </div>

                                <div style="padding: 20px;"></div>


                            </div>
                        </div>

                        <div class="modal fade" id="errorAge" data-backdrop="modalerrorAge" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 style="color:red" class="modal-title" id="staticBackdropLabel">Warning</h5>
                                        <button id="modalerrorAge" type="button" class="modalerrorAge" data-dismiss="modalerrorAge" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>You have to insert the Day and Month before the year</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End of table tab -->


                        <div class="tab-pane fade col-lg-12" id="nav-payment" role="tabpanel" aria-labelledby="nav-payment-tab">

                            <div class="card">

                                <div style="padding:8px" class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-mobilemoney-tab" style="color:#3b3b3b !important;" data-toggle="tab" href="#nav-mobilemoney" role="tab" aria-controls="nav-mobilemoney" aria-selected="true">
                                        Mobile Money
                                    </a>
                                    <a class="nav-item nav-link" id="nav-visacard-tab" style="color:#3b3b3b !important;" data-toggle="tab" href="#nav-visacard" role="tab" aria-controls="nav-visacard" aria-selected="false">
                                        VISA Card
                                    </a>
                                </div>

                                <div class="container" style="color:#3b3b3b;">
                                    <div class="row">
                                        <div class="col-sm">
                                            <div style="padding: 5px; border: none; border-right: 1px solid #cccc">
                                                <div class="tab-content" id="nav-tabContent">

                                                    <div class="tab-pane fade show active col-lg-8" style="margin:auto" id="nav-mobilemoney" role="tabpanel" aria-labelledby="nav-mobilemoney-tab">
                                                        <?= form_open_multipart('website/appointment/mobile', 'id="processInfo"') ?>

                                                        <?php
                                                        $payment_query = $this->db->select("id,title")
                                                            ->from('collectionmodes')
                                                            ->get()
                                                            ->result();

                                                        foreach ($payment_query as $payment_mode) {
                                                            $mop = $payment_mode->title; //$mop for mode of payment
                                                            $id = $payment_mode->id;
                                                            if (($mop == 'AIRTEL MOBILE MONEY') || ($mop == 'MTN MOBILE MONEY') || ($mop == 'ZAMTEL KWACHA')) {

                                                                if ($mop == 'AIRTEL MOBILE MONEY') {
                                                                    $mop_logo = './assets_web/img/icons/airtel-icon-ug.png';
                                                                    $input_name = $mop;
                                                                    $input_id = 'airtel_input';
                                                                    $radio_id = 'airtel';
                                                                } elseif ($mop == 'MTN MOBILE MONEY') {
                                                                    $mop_logo = './assets_web/img/icons/download.png';
                                                                    $input_name = $mop;
                                                                    $input_id = 'mtn_input';
                                                                    $radio_id = 'mtn';
                                                                } elseif ($mop == 'ZAMTEL KWACHA') {
                                                                    $mop_logo = './assets_web/img/icons/0wZc1TWg.png';
                                                                    $input_name = $mop;
                                                                    $input_id = 'zamtel_input';
                                                                    $radio_id = 'zamtel';
                                                                }

                                                        ?>

                                                                <div style="width:100%">
                                                                    <img style="width:20%" src="<?php echo $mop_logo ?>" alt="Logo">
                                                                    <label style="color: #3b3b3b" for="<?php echo $radio_id ?>" class="form-label"><?php echo $mop ?></label>
                                                                    <div class="input-group">

                                                                        <div class="input-group-text">
                                                                            <input class="form-check-input mt-0" type="radio" value="" name="mobile_money" id="<?php echo $radio_id ?>" aria-label="Radio button for following text input" checked>
                                                                        </div>

                                                                        <input style="border: 1px solid #ccc" type="number" name="numberPhone" id="<?php echo $input_id ?>" class="form-control" placeholder="Enter phone number" aria-label="Text input with radio button" autocomplete="FALSE">
                                                                        <input type="hidden" name="paymentId" value="<?php echo $id ?>">
                                                                        <input type="hidden" name="Reg_type" id="Reg_type" value="Individual">
                                                                    </div>
                                                                </div>

                                                        <?php
                                                            }
                                                        }

                                                        ?>

                                                        <div style="height:50px;"></div>

                                                        <button type="submit" class="btn btn-block btn-primary">
                                                            Make Payment
                                                        </button>

                                                        <div style="height:70px;"></div>

                                                        <div id="backToCoverBtn1"></div>
                                                        <div id="backToCoverBtn"></div>

                                                        <?= form_close() ?>


                                                    </div>

                                                    <div class="tab-pane fade show col-lg-7" style="margin:auto" id="nav-visacard" role="tabpanel" aria-labelledby="nav-visacard-tab">
                                                        <div class="mb-3">
                                                            <div class="row"> <span class="header">Payment</span>
                                                                <div class="icons"> <img src="./assets_web/img/icons/visa.png" alt="" />
                                                                    <img src="./assets_web/img/icons/mastercard-logo.png" alt="Mastercard" /> <img src="./assets_web/img/icons/maestro.png" alt="maestro" />
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="mb-3">
                                                                    <label style="color: #3b3b3b" for="exampleFormControlInput1" class="form-label">Card Name</label>
                                                                    <input style="border: 1px solid #ccc" type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label style="color: #3b3b3b" for="exampleFormControlInput2" class="form-label">Card Number</label>
                                                                    <input style="border: 1px solid #ccc" type="email" class="form-control" id="exampleFormControlInput2" placeholder="">
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <label style="color: #3b3b3b" for="exampleFormControlInput3" class="form-label">Expiry Date</label>
                                                                        <input style="border: 1px solid #ccc" type="text" class="form-control" placeholder="" aria-label="First name">
                                                                    </div>
                                                                    <div class="col">
                                                                        <label style="color: #3b3b3b" for="exampleFormControlInput4" class="form-label">CVV</label>
                                                                        <input style="border: 1px solid #ccc" type="text" class="form-control" placeholder="" aria-label="Last name">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div style="height:50px;"></div>

                                                        <button type="button" class="btn btn-block btn-primary">
                                                            Make Payment
                                                        </button>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="container">
                                                <div>
                                                    <h3><u>Order Summary</u></h3>
                                                </div>
                                                <div id="oderContainer" style="padding-left: 20px">
                                                    <div id="names"></div>

                                                    <div id="ordersummarytype"></div>

                                                    <div id="ordersummarytype_name"></div>
                                                    <div id="ordersummarytype_email"></div>
                                                    <div id="ordersummarytype_phone"></div>
                                                    <div id="ordersummarytype_nrc"></div>
                                                    <div id="ordersummarytype_occupation"></div>

                                                    <h5 id="planType"></h5>
                                                    <div id="ordersummarycover4"></div>
                                                    <h5 id="sum"></h5>
                                                    <div style="padding:5px;">
                                                        <div style="border: none; border-top: 1px solid #A1A1A1; margin-bottom:5px"></div>
                                                        <div style="color:green">
                                                            <h5>Amount Payable : <span style="color:red">K <span id="totalMonthlyCost1"></span>.00</span></h5>
                                                        </div>
                                                    </div>
                                                    <!-- <h5 id="ordersummarycoverassured"></h5> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="panel-footer">
                                <div class="text-center">
                                    <strong><?php echo $this->session->userdata('title') ?></strong>
                                    <p class="text-center"><?php echo $this->session->userdata('address') ?></p>
                                </div>
                            </div>
                        </div>

                        <div style="width:100%; height:50vh">
                        </div>
                    </div>

                </div>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

                <script src="./assets_web/vendor/dropzone-5.7.0/dist/dropzone.js"></script>

                <script type="text/javascript">
                    // $("form#basic-form").submit(function(e) {
                    //     e.preventDefault();
                    // });
                    var CSV_ID = null;

                    $("#submitbtn").click(function(e) {
                        e.preventDefault();

                        $("#viewimage").html('');
                        // $("#viewimage").html('<img src="img/loading.gif" />');
                        var formData = new FormData(document.getElementById("fileToupload"));

                        $.ajax({
                            url: '<?= base_url('website/appointment/uploadCSVfile') ?>',
                            type: 'POST',
                            data: formData,
                            success: function(data) {
                                CSV_ID=data;
                                alert("File uploaded successfully.")
                            },
                            error: function(response) {
                                alert('Cant find php file')
                            },
                            cache: false,
                            contentType: false,
                            processData: false
                        });
                    });

                    var registion_type = 'individual'

                    $('#individual').on('change', function(e) {
                        if ($(this).is(':checked')) {
                            $("input[name='Reg_type'").val("Individual");
                            registion_type = 'individual'

                            $('#dobInput').removeClass('hidden');
                            $('#reg_NRC').removeClass('hidden');
                            $('#ganderIput').removeClass('hidden');
                            $('#startCamera').removeClass('hidden');

                            $('.picUpload').removeClass('hidden');
                            $('.docUpload').addClass('hidden');

                            $("input[id='PremiumPlan1']").prop('disabled', false);
                            $("input[id='PremiumPlan2']").prop('disabled', true);

                            $("input[id='PremiumPlan3']").prop('disabled', false);
                            $("input[id='PremiumPlan4']").prop('disabled', true);

                            $("input[id='PremiumPlan5']").prop('disabled', false);
                            $("input[id='PremiumPlan6']").prop('disabled', true);

                            $("input[id='PremiumPlan7']").prop('disabled', false);
                            $("input[id='PremiumPlan8']").prop('disabled', true);

                            // Combined

                            $("input[id='com_PremiumPlan1']").prop('disabled', false);
                            $("input[id='com_PremiumPlan2']").prop('disabled', true);

                            $("input[id='com_PremiumPlan3']").prop('disabled', false);
                            $("input[id='com_PremiumPlan4']").prop('disabled', true);

                            $("input[id='com_PremiumPlan5']").prop('disabled', false);
                            $("input[id='com_PremiumPlan6']").prop('disabled', true);

                            $("input[id='com_PremiumPlan7']").prop('disabled', false);
                            $("input[id='com_PremiumPlan8']").prop('disabled', true);

                            $('#individual_data').collapse('show')
                            $('#individual_data').removeClass('hidden')
                            $('#company_data').collapse('hide')
                            $('#company_data').addClass('hidden')
                        }
                    })
                    $('#company').on('change', function(e) {
                        if ($(this).is(':checked')) {
                            $("input[name='Reg_type'").val("Company");
                            registion_type = 'company'

                            $('#dobInput').addClass('hidden');
                            $('#reg_NRC').addClass('hidden');
                            $('#ganderIput').addClass('hidden');
                            $('#startCamera').addClass('hidden');

                            $('.picUpload').addClass('hidden');
                            $('.docUpload').removeClass('hidden');

                            $("input[id='PremiumPlan1']").prop('disabled', true);
                            $("input[id='PremiumPlan2']").prop('disabled', false);

                            $("input[id='PremiumPlan3']").prop('disabled', true);
                            $("input[id='PremiumPlan4']").prop('disabled', false);

                            $("input[id='PremiumPlan5']").prop('disabled', true);
                            $("input[id='PremiumPlan6']").prop('disabled', false);

                            $("input[id='PremiumPlan7']").prop('disabled', true);
                            $("input[id='PremiumPlan8']").prop('disabled', false);

                            // Combined

                            $("input[id='com_PremiumPlan1']").prop('disabled', true);
                            $("input[id='com_PremiumPlan2']").prop('disabled', false);

                            $("input[id='com_PremiumPlan3']").prop('disabled', true);
                            $("input[id='com_PremiumPlan4']").prop('disabled', false);

                            $("input[id='com_PremiumPlan5']").prop('disabled', true);
                            $("input[id='com_PremiumPlan6']").prop('disabled', false);

                            $("input[id='com_PremiumPlan7']").prop('disabled', true);
                            $("input[id='com_PremiumPlan8']").prop('disabled', false);

                            $('#company_data').collapse('show')
                            $('#company_data').removeClass('hidden')
                            $('#individual_data').collapse('hide')
                            $('#individual_data').addClass('hidden')
                        }
                    })

                    $("#inputGroupFile01").dropzone({
                        url: "/file/post"
                    })


                    var width = 320; // We will scale the photo width to this
                    var height = 0; // This will be computed based on the input stream

                    // |streaming| indicates whether or not we're currently streaming
                    // video from the camera. Obviously, we start at false.

                    var streaming = false;
                    // The various HTML elements we need to configure or control. These
                    // will be set by the startup() function.

                    var video = null;
                    var canvas = null;
                    var photo = null;
                    var startbutton = null;


                    function myFunction() {
                        // Get the snackbar DIV
                        var x = document.getElementById("snackbar");
                        // Add the "show" class to DIV
                        x.className = "show";
                        // After 3 seconds, remove the show class from DIV
                        setTimeout(function() {
                            x.className = x.className.replace("show", "");
                        }, 3000);
                    }


                    function startup() {
                        video = document.getElementById('video');
                        canvas = document.getElementById('canvas');
                        photo = document.getElementById('photo');
                        startbutton = document.getElementById('startbutton');

                        navigator.mediaDevices.getUserMedia({
                                video: true,
                                audio: false
                            })
                            .then(function(stream) {
                                video.srcObject = stream;
                                video.play();
                            })
                            .catch(function(err) {
                                console.log("An error occurred: " + err);
                            });

                        video.addEventListener('canplay', function(ev) {
                            if (!streaming) {
                                height = video.videoHeight / (video.videoWidth / width);
                                if (isNaN(height)) {
                                    height = width / (4 / 3);
                                }

                                video.setAttribute('width', width);
                                video.setAttribute('height', height);
                                canvas.setAttribute('width', width);
                                canvas.setAttribute('height', height);
                                streaming = true;
                            }
                        }, false);

                        startbutton.addEventListener('click', function(ev) {
                            takepicture();
                            ev.preventDefault();
                        }, false);

                        clearphoto();
                    }

                    // Fill the photo with an indication that none has been
                    // captured.

                    var usingWebCam = false

                    function clearphoto() {
                        var context = canvas.getContext('2d');
                        context.fillStyle = "#AAA";
                        context.fillRect(0, 0, canvas.width, canvas.height);

                        var data = canvas.toDataURL('image/png');
                        photo.setAttribute('src', data);
                    }


                    function stopVideoOnly() {
                        var stream = video.srcObject;
                        // now get all tracks
                        var tracks = stream.getTracks();
                        // now close each track by having forEach loop
                        tracks.forEach(function(track) {
                            // stopping every track
                            track.stop();
                        });
                        // assign null to srcObject of video
                        video.srcObject = null;
                        clearphoto()
                    }

                    // Capture a photo by fetching the current contents of the video
                    // and drawing it into a canvas, then converting that to a PNG
                    // format data URL. By drawing it on an offscreen canvas and then
                    // drawing that to the screen, we can change its size and/or apply
                    // other changes before drawing it.

                    function takepicture() {
                        var context = canvas.getContext('2d');
                        if (width && height) {
                            canvas.width = width;
                            canvas.height = height;
                            context.drawImage(video, 0, 0, width, height);

                            var data = canvas.toDataURL('image/png');
                            photo.setAttribute('src', data);
                        } else {
                            clearphoto();
                        }
                    }

                    $("#startCamera").on('click', function() {
                        $(".cameraArea").removeClass('CaptureHidden')
                        $("#uploadFromFolder").addClass('UploadHidden')
                        startup();
                        usingWebCam = true
                    })

                    $(".uploadFile").on('click', function() {
                        $("#uploadFromFolder").removeClass('UploadHidden')
                        $(".cameraArea").addClass('CaptureHidden')
                        stopVideoOnly()
                        usingWebCam = false
                    })


                    // $("#inputGroupFile01").change(function() {
                    //     alert("")
                    //     var form = $("#PickPicker");
                    //     // you can't pass Jquery form it has to be javascript form object
                    //     var formData = new FormData(form[0]);

                    // })

                    // var validator = $("#basic-form").validate({

                    // });
                    // validator.destroy();

                    var mtnMoney = $('#mtn')
                    var mtnMoneyInput = $('#mtn_input')

                    var airtelMoney = $('#airtel')
                    var airtelMoneyInput = $('#airtel_input')

                    var zamtelMoney = $('#zamtel')
                    var zamtelMoneyInput = $('#zamtel_input')

                    <?php
                    $dependent_type = $this->db->select('title, min_age, max_age')
                        ->from('dependent_type')->get();
                    ?>

                    mtnMoney.on('change', function() {
                        if ($(this).is(':checked')) {
                            mtnMoneyInput.prop('disabled', false);

                            airtelMoneyInput.prop('disabled', true);
                            airtelMoneyInput.val('');

                            zamtelMoneyInput.prop('disabled', true);
                            zamtelMoneyInput.val('');
                        }
                    })
                    airtelMoney.on('change', function() {
                        if ($(this).is(':checked')) {
                            mtnMoneyInput.prop('disabled', true);
                            mtnMoneyInput.val('');

                            airtelMoneyInput.prop('disabled', false);

                            zamtelMoneyInput.prop('disabled', true);
                            zamtelMoneyInput.val('');
                        }
                    })
                    zamtelMoney.on('change', function() {
                        if ($(this).is(':checked')) {
                            mtnMoneyInput.prop('disabled', true);
                            mtnMoneyInput.val('');

                            airtelMoneyInput.prop('disabled', true);
                            airtelMoneyInput.val('');

                            zamtelMoneyInput.prop('disabled', false);
                        }
                    })

                    $('#next_tab').on('click', function(event) {
                        // Prevent url change
                        event.preventDefault();
                        // `this` is the clicked <a> tag
                        validatePersonalInfoFunc()

                    });

                    // User Data ent

                    var data = []


                    function validatePersonalInfoFunc() {

                        var postal = $('#postal');
                        var postalErrmsg = document.getElementById("postal_err");

                        var physical = $('#physical');
                        var physicalErrmsg = document.getElementById("physical_err");

                        var phonenumber = $('#phonenumber');
                        var phonenumberErrmsg = document.getElementById("phonenumber_err");

                        var date1 = $('#date1');
                        var date1Errmsg = document.getElementById("date1_err");

                        if (registion_type === 'individual') {
                            var nrcData = '<?php echo json_encode($Nrcs); ?>';
                            var Nrc_found = nrcData.includes($('#nrc').val(), 0)

                            // console.log(Nrc_found);
                            var lastname = $('#lastname');
                            var lastnameErrmsg = document.getElementById("f_name_err");

                            var othername = $('#othername');
                            var othernameErrmsg = document.getElementById("othername_err");

                            var nrcNumber = $('#nrc');
                            var nrcNumberErrmsg = document.getElementById("nrcNumber_err");

                            if (lastname.val() === '') {

                                lastname.addClass('divError');

                                lastnameErrmsg.classList.remove('hidden');
                                lastnameErrmsg.innerHTML = "First name of proposer must not be empty"
                                lastname[0].scrollIntoView(true);

                                return
                            } else if (othername.val() === '') {

                                othername.addClass('divError');

                                othernameErrmsg.classList.remove('hidden');
                                othernameErrmsg.innerHTML = "Other name of proposer must not be empty"
                                othername[0].scrollIntoView(true);

                                return

                            } else if (physical.val() === '') {

                                physical.addClass('divError');

                                physicalErrmsg.classList.remove('hidden');
                                physicalErrmsg.innerHTML = "Physical Address of proposer must not be empty"
                                physical[0].scrollIntoView(true);

                                return

                            } else if (phonenumber.val() === '') {

                                phonenumber.addClass('divError');

                                phonenumberErrmsg.classList.remove('hidden');
                                phonenumberErrmsg.innerHTML = "Phone number of proposer must not be empty"
                                phonenumber[0].scrollIntoView(true);

                                return

                            } else if (nrcNumber.val() === '') {

                                nrcNumber.addClass('divError');

                                nrcNumberErrmsg.classList.remove('hidden');
                                nrcNumberErrmsg.innerHTML = "National registion of proposer must not be empty"
                                nrcNumber[0].scrollIntoView(true);

                                return

                            } else if (nrcNumber.val() === '') {

                                date1.addClass('divError');

                                date1Errmsg.classList.remove('hidden');
                                date1Errmsg.innerHTML = "Date of birth of proposer must not be empty"
                                date1[0].scrollIntoView(true);

                                return
                            }

                            var img = document.getElementById('photo')
                            var imgName = $('#lastname').val() + $('#othername').val() + $('#phonenumber').val() + ".png"

                            if (usingWebCam)
                                fetch(img.src)
                                .then(res => res.blob())
                                .then(blob => {
                                    const file = new File([blob], imgName, {
                                        type: 'image/png'
                                    });
                                    var fd = new FormData();
                                    fd.append("image", file);

                                    $.ajax({
                                        type: "POST",
                                        enctype: 'multipart/form-data',
                                        url: '<?= base_url('website/appointment/saveTempCamImage') ?>',
                                        data: fd,
                                        processData: false,
                                        contentType: false,
                                        cache: false,
                                        success: (data) => {
                                            // alert("yes");
                                        },
                                        error: function(xhr, status, error) {
                                            alert(xhr.responseText);
                                        }
                                    });
                                });

                            // $("form[name='fileToUpload']").on("submit", function(ev) {
                            //     ev.preventDefault(); // Prevent browser default submit.

                            //     var formData = new FormData(this);

                        } else {
                            var companyName = $('#c_name');
                            var companyNameErrmsg = document.getElementById("c_name_err");

                            var companyReg = $('#c_reg');
                            var companyRegErrmsg = document.getElementById("c_reg_err");

                            if (companyName.val() === '') {

                                companyName.addClass('divError');

                                companyNameErrmsg.classList.remove('hidden');
                                companyNameErrmsg.innerHTML = "Company name of proposer must not be empty"
                                companyName[0].scrollIntoView(true);

                                return
                            } else if (companyReg.val() === '') {

                                companyReg.addClass('divError');

                                companyRegErrmsg.classList.remove('hidden');
                                companyRegErrmsg.innerHTML = "Company Registration Number must not be empty"
                                companyReg[0].scrollIntoView(true);

                            } else if (physical.val() === '') {

                                physical.addClass('divError');

                                physicalErrmsg.classList.remove('hidden');
                                physicalErrmsg.innerHTML = "National registion of proposer must not be empty"
                                physical[0].scrollIntoView(true);

                                return

                            } else if (phonenumber.val() === '') {

                                phonenumber.addClass('divError');

                                phonenumberErrmsg.classList.remove('hidden');
                                phonenumberErrmsg.innerHTML = "Phone number of proposer must not be empty"
                                phonenumber[0].scrollIntoView(true);

                                return

                            }



                        }


                        if (postal.val() === '') {

                            postal.addClass('divError');

                            postalErrmsg.classList.remove('hidden');
                            postalErrmsg.innerHTML = "Postal addres of proposer must not be empty"
                            postal[0].scrollIntoView(true);

                            return

                        } else if (physical.val() === '') {

                            physical.addClass('divError');

                            physicalErrmsg.classList.remove('hidden');
                            physicalErrmsg.innerHTML = "Physical addres of proposer must not be empty"
                            physical[0].scrollIntoView(true);

                            return

                        } else if (physical.val() === '') {

                            phonenumber.addClass('divError');

                            phonenumberErrmsg.classList.remove('hidden');
                            phonenumberErrmsg.innerHTML = "Phone number of proposer must not be empty"
                            phonenumber[0].scrollIntoView(true);

                            return
                        } else {


                            // if (Nrc_found === true) {
                            //     nrcNumber.addClass('divError');

                            //                                                                                               nrcNumberErrmsg.classList.remove('hidden');
                            //     nrcNumberErrmsg.innerHTML = "National registion is already been used by other account"
                            //     nrcNumber[0].scrollIntoView(true);
                            //     return
                            // } else {

                            //     var target = $('#nav-profile-tab');
                            //     target.removeClass('disabled');

                            //     // opening tab
                            //     target.trigger('click');
                            //     // scrolling into view
                            //     target[0].scrollIntoView(true);
                            // }

                        }


                        var target = $('#nav-profile-tab');
                        target.removeClass('disabled');

                        // opening tab
                        target.trigger('click');
                        // scrolling into view
                        target[0].scrollIntoView(true);

                        // console.log(data);
                    }

                    // $('#agent').on('change', function() {
                    //     console.log('test');
                    // })

                    // Calculate total premium
                    var total_premuim = 0;
                    var total_beneficiaries = 0;
                    total_beneficiaries = document.getElementById("autotable").rows[0].cells.length;

                    function calculateTotalPremium(premium) {
                        // Get total policy beneficiaries...
                        total_beneficiaries++;
                        // console.log('pips= ', total_beneficiaries);
                        total_premuim = parseInt(premium) * (total_beneficiaries);
                        document.getElementById("totalMonthlyCost").innerHTML = total_premuim;
                        document.getElementById("totalMonthlyCost1").innerHTML = total_premuim;

                        // console.log('preem= ', total_premuim);
                    }

                    $('#flexRadioDefault1').on('change', function(e) {
                        if ($(this).is(':checked')) {
                            $('#collapse1').collapse('show')
                            $('#collapse2').collapse('hide')
                        }

                    })

                    $('#covertype1').on('change', function(e) {
                        if ($(this).is(':checked')) {
                            $('#collapsePlan1').collapse('show')
                            $('#collapsePlan2').collapse('hide')
                            $('#collapsePlan3').collapse('hide')
                            $('#collapsePlan4').collapse('hide')
                            $('#collapsePlan5').collapse('hide')
                        }

                    })
                    $('#covertype2').on('change', function(e) {
                        if ($(this).is(':checked')) {
                            $('#collapsePlan2').collapse('show')
                            $('#collapsePlan1').collapse('hide')
                            $('#collapsePlan3').collapse('hide')
                            $('#collapsePlan4').collapse('hide')
                            $('#collapsePlan5').collapse('hide')
                        }

                    })

                    $('#covertype3').on('change', function(e) {
                        if ($(this).is(':checked')) {
                            $('#collapsePlan1').collapse('hide')
                            $('#collapsePlan2').collapse('hide')
                            $('#collapsePlan3').collapse('show')
                            $('#collapsePlan4').collapse('hide')
                            $('#collapsePlan5').collapse('hide')
                        }

                    })

                    $('#covertype4').on('change', function(e) {
                        if ($(this).is(':checked')) {
                            $('#collapsePlan1').collapse('hide')
                            $('#collapsePlan2').collapse('hide')
                            $('#collapsePlan3').collapse('hide')
                            $('#collapsePlan4').collapse('show')
                            $('#collapsePlan5').collapse('hide')
                        }

                    })

                    $('#covertype5').on('change', function(e) {
                        if ($(this).is(':checked')) {
                            $('#collapsePlan1').collapse('hide')
                            $('#collapsePlan2').collapse('hide')
                            $('#collapsePlan3').collapse('hide')
                            $('#collapsePlan4').collapse('hide')
                            $('#collapsePlan5').collapse('show')
                        }

                    })

                    // combined

                    $('#com_covertype1').on('change', function(e) {
                        if ($(this).is(':checked')) {
                            $('#com_collapsePlan1').collapse('show')
                            $('#com_collapsePlan2').collapse('hide')
                            $('#com_collapsePlan3').collapse('hide')
                            $('#com_collapsePlan4').collapse('hide')
                            $('#com_collapsePlan5').collapse('hide')
                        }

                    })
                    $('#com_covertype2').on('change', function(e) {
                        if ($(this).is(':checked')) {
                            $('#com_collapsePlan2').collapse('show')
                            $('#com_collapsePlan1').collapse('hide')
                            $('#com_collapsePlan3').collapse('hide')
                            $('#com_collapsePlan4').collapse('hide')
                            $('#com_collapsePlan5').collapse('hide')
                        }

                    })

                    $('#com_covertype3').on('change', function(e) {
                        if ($(this).is(':checked')) {
                            $('#com_collapsePlan1').collapse('hide')
                            $('#com_collapsePlan2').collapse('hide')
                            $('#com_collapsePlan3').collapse('show')
                            $('#com_collapsePlan4').collapse('hide')
                            $('#com_collapsePlan5').collapse('hide')
                        }

                    })

                    $('#com_covertype4').on('change', function(e) {
                        if ($(this).is(':checked')) {
                            $('#com_collapsePlan1').collapse('hide')
                            $('#com_collapsePlan2').collapse('hide')
                            $('#com_collapsePlan3').collapse('hide')
                            $('#com_collapsePlan4').collapse('show')
                            $('#com_collapsePlan5').collapse('hide')
                        }

                    })

                    $('#com_covertype5').on('change', function(e) {
                        if ($(this).is(':checked')) {
                            $('#com_collapsePlan1').collapse('hide')
                            $('#com_collapsePlan2').collapse('hide')
                            $('#com_collapsePlan3').collapse('hide')
                            $('#com_collapsePlan4').collapse('hide')
                            $('#com_collapsePlan5').collapse('show')
                        }

                    })

                    $('#flexRadioDefault2').on('change', function(e) {
                        if ($(this).is(':checked')) {
                            $('#collapse1').collapse('hide')
                            $('#collapse2').collapse('show')
                        }
                    })

                    $('#PremiumPlan1').on('change', function(e) {
                        if ($(this).is(':checked')) {
                            $.ajax({
                                url: '<?= base_url('website/appointment/getPayAsGoIndividual') ?>',
                                type: 'GET',
                                dataType: "html",
                                success: function(data) {
                                    $('#PremiumCoverPlan1Layout').html(data)

                                    $('#PremiumCoverPlan1').collapse('show')
                                    $('#PremiumCoverPlan2').collapse('hide')
                                },
                                error: function() {
                                    alert('failed');
                                }
                            });

                        }
                    })

                    $('#PremiumPlan2').on('change', function(e) {
                        if ($(this).is(':checked')) {
                            $.ajax({
                                url: '<?= base_url('website/appointment/getPayAsGoGroup') ?>',
                                type: 'GET',
                                dataType: "html",
                                success: function(data) {
                                    $('#PremiumCoverPlan2Layout').html(data)

                                    $('#PremiumCoverPlan1').collapse('hide')
                                    $('#PremiumCoverPlan2').collapse('show')
                                },
                                error: function() {
                                    alert('failed');
                                }
                            });
                        }
                    })

                    $('#PremiumPlan3').on('change', function(e) {
                        if ($(this).is(':checked')) {
                            $.ajax({
                                url: '<?= base_url('website/appointment/getPerTripCoverSingle') ?>',
                                type: 'GET',
                                dataType: "html",
                                success: function(data) {
                                    $('#PremiumCoverPlan3Layout').html(data)

                                    $('#PremiumCoverPlan3').collapse('show')
                                    $('#PremiumCoverPlan4').collapse('hide')
                                },
                                error: function() {
                                    alert('failed');
                                }
                            });

                        }
                    })

                    $('#PremiumPlan4').on('change', function(e) {
                        if ($(this).is(':checked')) {
                            $.ajax({
                                url: '<?= base_url('website/appointment/getPerTripCoverGroup') ?>',
                                type: 'GET',
                                dataType: "html",
                                success: function(data) {
                                    $('#PremiumCoverPlan4Layout').html(data)

                                    $('#PremiumCoverPlan4').collapse('show')
                                    $('#PremiumCoverPlan3').collapse('hide')
                                },
                                error: function() {
                                    alert('failed');
                                }
                            });

                        }
                    })

                    $('#PremiumPlan5').on('change', function(e) {
                        if ($(this).is(':checked')) {
                            $.ajax({
                                url: '<?= base_url('website/appointment/getWayofLifeSingle') ?>',
                                type: 'GET',
                                dataType: "html",
                                success: function(data) {
                                    $('#PremiumCoverPlan5Layout').html(data)

                                    $('#PremiumCoverPlan5').collapse('show')
                                    $('#PremiumCoverPlan6').collapse('hide')
                                },
                                error: function() {
                                    alert('failed');
                                }
                            });

                        }
                    })

                    $('#PremiumPlan6').on('change', function(e) {
                        if ($(this).is(':checked')) {
                            $.ajax({
                                url: '<?= base_url('website/appointment/getWayofLifeGroup') ?>',
                                type: 'GET',
                                dataType: "html",
                                success: function(data) {
                                    $('#PremiumCoverPlan6Layout').html(data)

                                    $('#PremiumCoverPlan5').collapse('hide')
                                    $('#PremiumCoverPlan6').collapse('show')
                                },
                                error: function() {
                                    alert('failed');
                                }
                            });
                        }
                    })

                    $('#PremiumPlan7').on('change', function(e) {
                        if ($(this).is(':checked')) {
                            $.ajax({
                                url: '<?= base_url('website/appointment/getFamilyCoverSingle') ?>',
                                type: 'GET',
                                dataType: "html",
                                success: function(data) {
                                    $('#PremiumCoverPlan7Layout').html(data)

                                    $('#PremiumCoverPlan7').collapse('show')
                                    $('#PremiumCoverPlan8').collapse('hide')
                                },
                                error: function() {
                                    alert('failed');
                                }
                            });
                        }
                    })

                    $('#PremiumPlan8').on('change', function(e) {
                        if ($(this).is(':checked')) {
                            $.ajax({
                                url: '<?= base_url('website/appointment/getFamilyCoverGroups') ?>',
                                type: 'GET',
                                dataType: "html",
                                success: function(data) {
                                    $('#PremiumCoverPlan8Layout').html(data)

                                    $('#PremiumCoverPlan8').collapse('show')
                                    $('#PremiumCoverPlan7').collapse('hide')
                                },
                                error: function() {
                                    alert('failed');
                                }
                            });

                        }
                    })

                    $('#PremiumPlan9').on('change', function(e) {
                        if ($(this).is(':checked')) {
                            $.ajax({
                                url: '<?= base_url('website/appointment/getStudentSingle') ?>',
                                type: 'GET',
                                dataType: "html",
                                success: function(data) {
                                    $('#PremiumCoverPlan9Layout').html(data)

                                    $('#PremiumCoverPlan9').collapse('show')
                                    // $('#PremiumCoverPlan7').collapse('hide')
                                },
                                error: function() {
                                    alert('failed');
                                }
                            });

                        }
                    })

                    // combined

                    $('#com_PremiumPlan1').on('change', function(e) {
                        if ($(this).is(':checked')) {
                            $('#com_PremiumCoverPlan1').collapse('show')
                            $('#com_PremiumCoverPlan2').collapse('hide')
                        }
                    })

                    $('#com_PremiumPlan2').on('change', function(e) {
                        if ($(this).is(':checked')) {
                            $('#com_PremiumCoverPlan1').collapse('hide')
                            $('#com_PremiumCoverPlan2').collapse('show')
                        }
                    })

                    $('#com_PremiumPlan3').on('change', function(e) {
                        if ($(this).is(':checked')) {
                            $('#com_PremiumCoverPlan3').collapse('show')
                            $('#com_PremiumCoverPlan4').collapse('hide')
                        }
                    })

                    $('#com_PremiumPlan4').on('change', function(e) {
                        if ($(this).is(':checked')) {
                            $('#com_PremiumCoverPlan4').collapse('show')
                            $('#com_PremiumCoverPlan3').collapse('hide')
                        }
                    })

                    $('#com_PremiumPlan5').on('change', function(e) {
                        if ($(this).is(':checked')) {
                            $('#com_PremiumCoverPlan5').collapse('show')
                            $('#com_PremiumCoverPlan6').collapse('hide')
                        }
                    })

                    $('#com_PremiumPlan6').on('change', function(e) {
                        if ($(this).is(':checked')) {
                            $('#com_PremiumCoverPlan5').collapse('hide')
                            $('#com_PremiumCoverPlan6').collapse('show')
                        }
                    })

                    $('#com_PremiumPlan7').on('change', function(e) {
                        if ($(this).is(':checked')) {
                            $('#com_PremiumCoverPlan7').collapse('show')
                            $('#com_PremiumCoverPlan8').collapse('hide')
                        }
                    })

                    $('#com_PremiumPlan8').on('change', function(e) {
                        if ($(this).is(':checked')) {
                            $('#com_PremiumCoverPlan8').collapse('show')
                            $('#com_PremiumCoverPlan7').collapse('hide')
                        }
                    })
                    $('#com_PremiumPlan9').on('change', function(e) {
                        if ($(this).is(':checked')) {
                            $('#com_PremiumCoverPlan9').collapse('show')
                            $('#com_PremiumCoverPlan8').collapse('hide')
                        }
                    })


                    $("#deletetablerow").on('click', function() {
                        deleteRow("autotable")
                    })

                    // $('#cameraInput').on('change', function(e){
                    // $data = e.originalEvent.target.files[0];
                    // $reader = new FileReader();
                    // reader.onload = function(evt){
                    // $('#your_img_id').attr('src',evt.target.result);
                    // reader.readAsDataUrl($data);
                    // }});

                    var csvUploaded = false
                    // Skip grou type and go to payment
                    var multiply_by_people = '';

                    function goToPayment(type) {
                        var target = $('#nav-payment-tab');

                        if (type === 'group') {
                            var table = $('#autotable')
                            var tableData = []


                            if (!csvUploaded) {
                                alert("You can not proceed, you need to add atleast 10 members")
                            } else {
                                target.removeClass('disabled');
                                // opening tab
                                target.trigger('click');
                                // scrolling into view
                                target[0].scrollIntoView(true);
                                csvUploaded = false

                                table.find('tr').each(function(i, el) {
                                    var $tds = $(this).find('td')

                                    if ($tds.eq().children().prevObject.prevObject.length != 0) {
                                        if ($tds.eq().children().prevObject.prevObject[0].innerText != 'Plan Holder' && $tds.eq().children().prevObject.prevObject.length != 3) {

                                            var Covered = $tds.eq().children().prevObject.prevObject[0].innerText,
                                                Surname = $tds.eq().children().prevObject.prevObject[1].innerText,
                                                OtherName = $tds.eq().children().prevObject.prevObject[2].innerText,
                                                Dob = $tds.eq().children().prevObject.prevObject[3].innerText,
                                                Gender = $tds.eq().children().prevObject.prevObject[4].innerText,
                                                nrc = $tds.eq().children().prevObject.prevObject[5].innerText,
                                                Premium = $tds.eq().children().prevObject.prevObject[6].innerText,
                                                Sum = $tds.eq().children().prevObject.prevObject[7].innerText;


                                            tableData.push({
                                                Covered,
                                                Surname,
                                                OtherName,
                                                Dob,
                                                Gender,
                                                nrc,
                                                Premium,
                                                Sum
                                            })

                                        }

                                    }
                                    // console.log(tableData);

                                });

                                // console.log(tableData);

                                var processForm2 = document.getElementById('processInfo');

                                var groupTotal = document.createElement('input');
                                groupTotal.type = 'hidden';
                                groupTotal.name = 'groupTotal';
                                groupTotal.value = total_premuim;
                                processForm2.appendChild(groupTotal);

                                tableData.forEach((element, index) => {
                                    // console.log(element);

                                    var CoveredInput = document.createElement('input');
                                    var SurnameInput = document.createElement('input');
                                    var OtherNameInput = document.createElement('input');
                                    var DobInput = document.createElement('input');
                                    var GenderInput = document.createElement('input');
                                    var nrcInput = document.createElement('input');
                                    var PremiumInput = document.createElement('input');
                                    var SumInput = document.createElement('input');

                                    CoveredInput.type = 'hidden';
                                    CoveredInput.name = 'covered[]';
                                    CoveredInput.value = element.Covered;
                                    processForm2.appendChild(CoveredInput);

                                    SurnameInput.type = 'hidden';
                                    SurnameInput.name = 'surname[]';
                                    SurnameInput.value = element.Surname;
                                    processForm2.appendChild(SurnameInput);

                                    OtherNameInput.type = 'hidden';
                                    OtherNameInput.name = 'othername[]';
                                    OtherNameInput.value = element.OtherName;
                                    processForm2.appendChild(OtherNameInput);

                                    DobInput.type = 'hidden';
                                    DobInput.name = 'dob[]';
                                    DobInput.value = element.Dob;
                                    processForm2.appendChild(DobInput);

                                    GenderInput.type = 'hidden';
                                    GenderInput.name = 'gender[]';
                                    GenderInput.value = element.Gender;
                                    processForm2.appendChild(GenderInput);

                                    nrcInput.type = 'hidden';
                                    nrcInput.name = 'nrc1[]';
                                    nrcInput.value = element.nrc;
                                    processForm2.appendChild(nrcInput);

                                    PremiumInput.type = 'hidden';
                                    PremiumInput.name = 'premium[]';
                                    PremiumInput.value = element.Premium;
                                    processForm2.appendChild(PremiumInput);

                                    SumInput.type = 'hidden';
                                    SumInput.name = 'suminput[]';
                                    SumInput.value = element.Sum;
                                    processForm2.appendChild(SumInput);

                                    var br = document.createElement('br'); //Not sure why you needed this <br> tag but here it is
                                    processForm2.appendChild(br);
                                });

                                if (type == 'single') {
                                    document.getElementById("totalMonthlyCost1").innerHTML = premium_amount_selected;
                                    multiply_by_people = 1;
                                } else if (type == 'group') {
                                    multiply_by_people = 0;
                                }
                                var total = premium_amount_selected * multiply_by_people

                                var TotalInput = document.createElement('input');
                                TotalInput.type = 'hidden';
                                TotalInput.name = 'total';
                                TotalInput.value = total;
                                processForm2.appendChild(TotalInput);

                                // console.log(TotalInput);

                                // alert(multiply_by_people)
                                $("#ordersummarycoverassured").append(`
                                                                                <div style="padding:5px;">
                                                                                    <div style="border: none; border-top: 1px solid #A1A1A1; margin-bottom:5px"></div>
                                                                                    <div style="color:green">
                                                                                        <h5>Amount Payable : <span style="color:red">K ${premium_amount_selected * multiply_by_people }.00</span></h5>
                                                                                    </div>
                                                                                </div>
                                                                                 `)
                            }
                        } else {
                            target.removeClass('disabled');
                            // opening tab
                            target.trigger('click');
                            // scrolling into view
                            target[0].scrollIntoView(true);

                        }

                    }



                    arr = null;
                    var arr;

                    var cover_type_selected = '';
                    var table_type_select = '';
                    var plan_type_selected = '';
                    var policy_type_selected = '';
                    var sum_assured_selected = '';
                    var premium_amount_selected = '';

                    function selectionBtn(identifier) {
                        // alert('failed');
                        // Reset data each time it's called

                        $("#ordersummarytype").children("div").remove();
                        $("#ordersummarycoverassured").children("div").remove();
                        $("#backToCoverBtn").children("div").remove();
                        $("#backToCoverBtn1").children("div").remove();

                        // console.log($(identifier).data('plancode'), " <- plan-code");

                        var processForm2 = document.getElementById('processInfo');


                        var hiddenInput1 = document.createElement('input');

                        hiddenInput1.type = 'hidden';
                        hiddenInput1.name = 1;
                        hiddenInput1.value = $(identifier).data('type');
                        processForm2.appendChild(hiddenInput1);

                        var br1 = document.createElement('br'); //Not sure why you needed this <br> tag but here it is
                        processForm2.appendChild(br1);

                        var hiddenInput2 = document.createElement('input');

                        hiddenInput2.type = 'hidden';
                        hiddenInput2.name = 2;
                        hiddenInput2.value = $(identifier).data('policy');
                        processForm2.appendChild(hiddenInput2);

                        var br2 = document.createElement('br'); //Not sure why you needed this <br> tag but here it is
                        processForm2.appendChild(br2);

                        var hiddenInput3 = document.createElement('input');

                        hiddenInput3.type = 'hidden';
                        hiddenInput3.name = 3;
                        hiddenInput3.value = $(identifier).data('policytype');
                        processForm2.appendChild(hiddenInput3);

                        var br3 = document.createElement('br'); //Not sure why you needed this <br> tag but here it is
                        processForm2.appendChild(br3);

                        var hiddenInput4 = document.createElement('input');

                        hiddenInput4.type = 'hidden';
                        hiddenInput4.name = 4;
                        hiddenInput4.value = $(identifier).data('sum');
                        processForm2.appendChild(hiddenInput4);

                        var br4 = document.createElement('br'); //Not sure why you needed this <br> tag but here it is
                        processForm2.appendChild(br4);

                        var hiddenInput5 = document.createElement('input');

                        hiddenInput5.type = 'hidden';
                        hiddenInput5.name = 5;
                        hiddenInput5.value = $(identifier).data('premium');
                        processForm2.appendChild(hiddenInput5);

                        var br5 = document.createElement('br'); //Not sure why you needed this <br> tag but here it is
                        processForm2.appendChild(br5);

                        var hiddenInput6 = document.createElement('input');

                        hiddenInput6.type = 'hidden';
                        hiddenInput6.name = 6;
                        hiddenInput6.value = $(identifier).data('planid');
                        processForm2.appendChild(hiddenInput6);

                        var br6 = document.createElement('br'); //Not sure why you needed this <br> tag but here it is
                        processForm2.appendChild(br6);

                        var hiddenInput7 = document.createElement('input');

                        hiddenInput7.type = 'hidden';
                        hiddenInput7.name = 7;
                        hiddenInput7.value = $(identifier).data('plancode');
                        processForm2.appendChild(hiddenInput7);

                        var br7 = document.createElement('br'); //Not sure why you needed this <br> tag but here it is
                        processForm2.appendChild(br7);

                        // console.log($(identifier).data('sum'));

                        cover_type_selected = $(identifier).data('type');
                        plan_type_selected = $(identifier).data('policy');
                        policy_type_selected = $(identifier).data('policytype');
                        sum_assured_selected = $(identifier).data('sum');
                        premium_amount_selected = $(identifier).data('premium');
                        plan_name = $(identifier).data('plantitle');

                        // console.log(policy_type_selected);
                        // console.log(plan_type_selected);
                        // console.log(plan_name);

                        $('#sum').html('Sum assured K ' + sum_assured_selected)
                        $('#planType').html('Plan type ' + '<span style="color:green">' + plan_name + '</span>')

                        table_type_select = policy_type_selected

                        if (policy_type_selected === 'premium_group') {

                            var target = $('#nav-group-tab');
                            target.removeClass('disabled');

                            // Dissable cover type to avoid goign back without ressetting the table
                            $('#nav-profile-tab').addClass('disabled');
                            $('#nav-home-tab').addClass('disabled');

                            target.trigger('click');
                            // scrolling into view
                            target[0].scrollIntoView(true);

                            // $("#autotable tr").remove(); 
                            var Table = document.getElementById("autotable");
                            Table.innerHTML = "";

                            // Add main user 
                            var table = document.getElementById('autotable');

                            var rowCount = table.rows.length;
                            var row = table.insertRow(rowCount);

                            // cell1
                            var cell1 = row.insertCell(0);
                            var nameOfUser = document.createElement("div")

                            nameOfUser.id = "planeHolder";
                            nameOfUser.innerHTML = 'Plane Holder'

                            cell1.appendChild(nameOfUser);

                            // cell2
                            var cell2 = row.insertCell(1);
                            var sirnameOfUser = document.createElement("div")

                            sirnameOfUser.id = "sirnameOfUser";
                            sirnameOfUser.innerHTML = $('#c_name').val()

                            cell2.appendChild(sirnameOfUser);

                            // cell3
                            var cell3 = row.insertCell(2);
                            var othernameOfUser = document.createElement("div")

                            othernameOfUser.id = "othernameOfUser";
                            othernameOfUser.style = "padding:5px;"
                            // othernameOfUser.innerHTML = $('#othername').val()

                            cell3.appendChild(othernameOfUser);

                            // cell4
                            var cell4 = row.insertCell(3);
                            var DOBOfUser = document.createElement("div")

                            var dateNw = $('#date1').val()
                            var date = $('#date1').val()
                            var dateMonth = $('#date1').val()
                            var dateYear = $('#date1').val()

                            var dateString = dateNw.replaceAll('/', '')

                            var dateStringForDay = date.replaceAll('/', '')
                            var dateStringForMonth = dateMonth.replaceAll('/', '')
                            var dateStringForYear = dateYear.replaceAll('/', '')

                            var day = dateStringForDay.slice(0, 2)
                            var month = dateStringForMonth.slice(2, 4)
                            var year = dateStringForYear.slice(4, 8)


                            DOBOfUser.id = "DOBOfUser";
                            DOBOfUser.innerHTML = '<div style="display:flex;"><div style="width: 53px; padding-left:10px; padding-right:10px; border:none; border-right:1px solid #ccc">' + month + '</div><div style="width: 53px; padding-left:10px; padding-right:10px; border:none; border-right:1px solid #ccc">' + day + '</div><div style="width: 53px; padding-left:10px; padding-right:10px;" >' + year + '</div></div>'

                            cell4.appendChild(DOBOfUser);

                            var cell6 = row.insertCell(4)
                            var user_genderDiv = document.createElement("div")

                            user_genderDiv.id = "user_gender"
                            user_genderDiv.innerHTML = '<div style="padding-left:10px">' + $("#gender1").val() + '</div>'

                            cell6.appendChild(user_genderDiv);

                            var cell7 = row.insertCell(5)
                            var user_NRC_Div = document.createElement("div")

                            user_NRC_Div.id = "user_nrc"
                            user_NRC_Div.innerHTML = '<div style="padding-left:10px">' + $('#nrc').val() + '</div>'

                            cell7.appendChild(user_NRC_Div);

                            var cell8 = row.insertCell(6)
                            var user_premum_Div = document.createElement("div")

                            user_premum_Div.id = "user_premum"
                            user_premum_Div.innerHTML = '<div style="padding-left:10px">' + premium_amount_selected + '</div>'

                            cell8.appendChild(user_premum_Div);

                            var cell9 = row.insertCell(7)
                            var user_sum_Div = document.createElement("div")

                            user_sum_Div.id = "user_sum"
                            user_sum_Div.innerHTML = '<div style="padding-left:10px"> ' + sum_assured_selected + '</div>'

                            cell9.appendChild(user_sum_Div);

                            // Add 10 manadatory rows if group is selected
                            // for (i = 0; i < 9; i++) {
                            //     addRow("autotable", table_type_select);
                            // }
                            // calculateTotalPremium(premium_amount_selected, 11);

                            // Append excel doc data to table
                            // var excel_data = document.getElementById('excel_data').value;
                            $('#load_manual_data').show(); //show btn
                            $('#addtable_csv').show(); // show btn
                            $('#tcs1').show();
                            $('#load_data').show();
                            $('#remove_info').show();

                            $('#addtable').hide();
                            $('#addtable_csv').hide();



                        } else if (policy_type_selected === 'premium_group_family') {
                            var target = $('#nav-group-tab');
                            target.removeClass('disabled');

                            // Dissable cover type to avoid goign back without ressetting the table
                            $('#nav-profile-tab').addClass('disabled');
                            $('#nav-home-tab').addClass('disabled');

                            target.trigger('click');
                            // scrolling into view
                            target[0].scrollIntoView(true);

                            // Add main user 
                            var table = document.getElementById('autotable');

                            var rowCount = table.rows.length;
                            var row = table.insertRow(rowCount);

                            // cell1
                            var cell1 = row.insertCell(0);
                            var nameOfUser = document.createElement("div")

                            nameOfUser.id = "planeHolder";
                            nameOfUser.innerHTML = 'Plane Holder'

                            cell1.appendChild(nameOfUser);

                            // cell2
                            var cell2 = row.insertCell(1);
                            var sirnameOfUser = document.createElement("div")

                            sirnameOfUser.id = "sirnameOfUser";
                            sirnameOfUser.innerHTML = $('#lastname').val()

                            cell2.appendChild(sirnameOfUser);

                            // cell3
                            var cell3 = row.insertCell(2);
                            var othernameOfUser = document.createElement("div")

                            othernameOfUser.id = "othernameOfUser";
                            othernameOfUser.style = "padding:5px;"
                            othernameOfUser.innerHTML = $('#othername').val()

                            cell3.appendChild(othernameOfUser);

                            // cell4
                            var cell4 = row.insertCell(3);
                            var DOBOfUser = document.createElement("div")

                            var dateNw = $('#date1').val()
                            var date = $('#date1').val()
                            var dateMonth = $('#date1').val()
                            var dateYear = $('#date1').val()

                            var dateString = dateNw.replaceAll('/', '')

                            var dateStringForDay = date.replaceAll('/', '')
                            var dateStringForMonth = dateMonth.replaceAll('/', '')
                            var dateStringForYear = dateYear.replaceAll('/', '')

                            var day = dateStringForDay.slice(0, 2)
                            var month = dateStringForMonth.slice(2, 4)
                            var year = dateStringForYear.slice(4, 8)


                            DOBOfUser.id = "DOBOfUser";
                            DOBOfUser.innerHTML = '<div style="display:flex;"><div style="width: 53px; padding-left:10px; padding-right:10px; border:none; border-right:1px solid #ccc">' + month + '</div><div style="width: 53px; padding-left:10px; padding-right:10px; border:none; border-right:1px solid #ccc">' + day + '</div><div style="width: 53px; padding-left:10px; padding-right:10px;" >' + year + '</div></div>'

                            cell4.appendChild(DOBOfUser);

                            var cell6 = row.insertCell(4)
                            var user_genderDiv = document.createElement("div")

                            user_genderDiv.id = "user_gender"
                            user_genderDiv.innerHTML = '<div style="padding-left:10px">' + $("#gender1").val() + '</div>'

                            cell6.appendChild(user_genderDiv);

                            var cell7 = row.insertCell(5)
                            var user_NRC_Div = document.createElement("div")

                            user_NRC_Div.id = "user_nrc"
                            user_NRC_Div.innerHTML = '<div style="padding-left:10px">' + $('#nrc').val() + '</div>'

                            cell7.appendChild(user_NRC_Div);

                            var cell8 = row.insertCell(6)
                            var user_premum_Div = document.createElement("div")

                            user_premum_Div.id = "user_premum"
                            user_premum_Div.innerHTML = '<div style="padding-left:10px">' + premium_amount_selected + '</div>'

                            cell8.appendChild(user_premum_Div);

                            var cell9 = row.insertCell(7)
                            var user_sum_Div = document.createElement("div")

                            user_sum_Div.id = "user_sum"
                            user_sum_Div.innerHTML = '<div style="padding-left:10px"> ' + sum_assured_selected + '</div>'

                            cell9.appendChild(user_sum_Div);

                            // Add 10 manadatory rows if group is selected
                            // for (i = 0; i < 9; i++) {
                            //     addRow("autotable", table_type_select);
                            // }
                            // calculateTotalPremium(premium_amount_selected);

                            var employee_data = '';
                                

                                $('#load_data').click(function() {
                                
                                        csvUploaded = true;

                                        var uniqid =CSV_ID;
                                        $.ajax({
                                            url: "assets_web/docs/excel/" + uniqid + ".csv",
                                            dataType: "text",
                                            success: function(data) {
                                                employee_data = data.split(/\r?\n|\r/);
                                                // Validate to set minimum to 10
                                                if (employee_data.length < 11) {
                                                    alert('You cannot have less than 10 persons covered under the group policy.Add more members in the cvs documnet and reupload');
                                                } else {
                                                    var table_data = ''; //'<table class="table table-bordered table-striped">';
                                                    for (var count = 0; count < employee_data.length; count++) {
                                                        var cell_data = employee_data[count].split(",");
                                                        cell_data.push(premium_amount_selected, sum_assured_selected)
                                                        // console.log(premium_amount_selected, sum_assured_selected)
                                                        table_data += '<tr>';
                                                        for (var cell_count = 0; cell_count < cell_data.length; cell_count++) {
                                                            if (count === 0) {
                                                                // table_data += '<th>' + cell_data[cell_count] + '</th>';
                                                            } else {
                                                                table_data += '<td>' + cell_data[cell_count] + '</td>';
                                                            }
                                                        }
                                                        // table_data += '<td>' + premium_amount_selected + '</td> <td>' + sum_assured_selected + '</td> </tr>';
                                                        table_data += '</tr>';
                                                    }

                                                }
                                                // table_data += '</table>';
                                                // console.log(employee_data.length + "total rows");

                                                $('#employee_table').html(table_data);
                                                tabb = document.getElementById("autotable").rows[0].cells.length;
                                                $('#autotable').append(table_data);
                                                // tabb.append(table_data);// Calculate premium
                                                total_premuim = parseInt(premium_amount_selected) * (employee_data.length - 1);
                                                document.getElementById("totalMonthlyCost").innerHTML = total_premuim;
                                                document.getElementById("totalMonthlyCost1").innerHTML = total_premuim;
                                                // calculateTotalPremium(premium_amount_selected); 
                                                $('#load_manual_data').hide(); //Hide btn
                                                $('#addtable_csv').show(); // Hide btn
                                                $('#tcs1').hide();
                                                $('#load_data').hide();
                                                $('#remove_info').hide();
                                            },
                                            error: function(data) {
                                                // $('#employee_table').html('<br><h1>HELLOE </h1><br>');
                                                console.log('no file')
                                            }
                                        });
                                    }),
                                    $('#deleteCsv').click(function() {
                                        var uniqid =CSV_ID;
                                        // alert(uniqid);
                                        $.ajax({
                                            url: '',
                                            type: 'post',
                                            data: {
                                                uniqid: uniqid
                                            },
                                            success: function(response) {

                                                // Changing image source when remove
                                                if (response == 1) {
                                                    alert('Worked');
                                                    // $("#img_" + id).attr("src","images/noimage.png");
                                                }
                                            },
                                            error: function(response) {
                                                alert('Cant find php file')
                                            }
                                        });
                                    });

                          
                            var total_people = (employee_data.length - 1)
                            $("#addtable_csv").on('click', function() {
                                addRow("autotable", table_type_select);

                                total_people++;
                                total_premuim = parseInt(premium_amount_selected) * total_people;
                                document.getElementById("totalMonthlyCost").innerHTML = total_premuim;
                                document.getElementById("totalMonthlyCost1").innerHTML = total_premuim;
                            })

                            $('#addtable').hide();
                            $('#addtable_csv').hide();
                            $(document).ready(function() {
                                $('#load_manual_data').click(function() {
                                    // if ($('#load_manual_data').val() == 1) {
                                    //     $('.load_manual_data').hide();
                                    //     return;
                                    // } else {
                                    //     $('.load_manual_data').show()
                                    // }
                                    csvUploaded = true;
                                    // alert('this')
                                    $('#addtable').show();
                                    $('#load_manual_data').hide();
                                    $('#tcs1').hide();
                                    $('#load_data').hide();
                                    for (i = 0; i < 11; i++) {
                                        addRow("autotable", table_type_select);
                                    }
                                    calculateTotalPremium(premium_amount_selected);

                                });
                            });


                        } else {
                            document.getElementById("totalMonthlyCost1").innerHTML = premium_amount_selected;
                            goToPayment('single');

                        }

                        let monthDOB = $('#date1').val().slice(0, 2)
                        let dayDOB = $('#date1').val().slice(3, 5)
                        let yearDOB = $('#date1').val().slice(6, 10)

                        let formattedDate = yearDOB + '-' + monthDOB + '-' + dayDOB
                        // console.log(formattedDate);

                        data = [

                            {
                                value: $('#lastname').val(),
                                name: 'last_name'
                            },
                            {
                                value: $('#othername').val(),
                                name: 'other_name'
                            },
                            {
                                value: $('#c_name').val(),
                                name: 'c_name'
                            },
                            {
                                value: $('#c_reg').val(),
                                name: 'c_reg'
                            },
                            {
                                value: $('#postal').val(),
                                name: 'postalAddress'
                            },
                            {
                                value: $('#physical').val(),
                                name: 'physicalAddress'
                            },
                            {
                                value: $('#email').val(),
                                name: 'emailAddress'
                            },
                            {
                                value: $('#phonenumber').val(),
                                name: 'phoneNumber'
                            },
                            {
                                value: formattedDate,
                                name: 'date1'
                            },
                            {
                                value: $('#nrc').val(),
                                name: 'nrc'
                            },
                            {
                                value: $('#occupations').val(),
                                name: 'occupations'
                            },
                            {
                                value: $('#gender1').val(),
                                name: 'gender1'
                            },
                            {
                                value: $('#agentCode').val(),
                                name: 'agent'
                            },


                        ]

                        // console.log(total_premuim);

                        var processForm = document.getElementById('processInfo');

                        data.forEach(element => {
                            var hiddenInput = document.createElement('input');

                            hiddenInput.type = 'hidden';
                            hiddenInput.name = element.name;
                            hiddenInput.value = element.value;
                            processForm.appendChild(hiddenInput);

                            var br = document.createElement('br'); //Not sure why you needed this <br> tag but here it is
                            processForm.appendChild(br);
                        });

                        // console.log('policy tupe = ', policy_type_selected);

                        // var premium = premium_amount_selected;
                        $("#addtable").on('click', function() {
                            addRow("autotable", table_type_select);

                            var tableCount = document.getElementById('autotable');
                            calculateTotalPremium(premium_amount_selected);
                        })


                        if (policy_type_selected === 'premium_per_individual_single') {
                            // Add Back BTN
                            $("#backToCoverBtn1").append(`                     
                                                <div id="backToCoverBtnId1" class="btn btn-block btn-warning">
                                                    Back To Cover
                                                </div>
                                                `)
                        }

                        $("#backToCoverBtn").append(`                     
                                                <div id="resetTransaction" class="btn btn-block btn-danger">
                                                    Restart Transaction
                                                </div>
                                                `)

                        $("#backToCoverBtnId1").on('click', function() {
                            goBackToCover1();
                        })
                        $("#resetTransaction").on('click', function() {
                            resetTransaction();
                        })




                        // $("#oderContainer").append(`<div style="border: none; border-top: 1px solid #3b3b3b;"></div>`)
                        // $("#ordersummarycover").append(`
                        //                             <div style="padding:5px;">
                        //                                     <div style="border: none; border-top: 1px solid #A1A1A1; margin-bottom:5px"></div>
                        //                                     <i style="font-size:19px; color:green" class="fa fa-bed"></i>
                        //                                     <div style="color:#3b3b3b">
                        //                                         <h5>Cover Name</h5>
                        //                                         <h6>${arr[0]}</h6>
                        //                                     </div>
                        //                             </div>`);


                        $("#ordersummarytype").append(`
                                                    <div style="padding:5px;">
                                                        <div style="border: none; border-top: 1px solid #A1A1A1; margin-bottom:5px"></div>
                                                        <div style="color:#3b3b3b">
                                                            <h5>Cover Type</h5>
                                                            <h6>${cover_type_selected}</h6>
                                                        </div>
                                                    </div>
                                                `)

                        $("#ordersummarytype_name").append(`
                                                    <div style="padding:5px;">
                                                        <div style="border: none; border-top: 1px solid #A1A1A1; margin-bottom:5px"></div>
                                                        <div style="color:#3b3b3b">
                                                            <h5>Full Names/Company Name</h5>
                                                            <h6>${$('#lastname').val()+' '+$('#othername').val()+$('#c_name').val()}</h6>
                                                        </div>
                                                    </div>
                                                `)
                        $("#ordersummarytype_email").append(`
                                                    <div style="padding:5px;">
                                                        <div style="border: none; border-top: 1px solid #A1A1A1; margin-bottom:5px"></div>
                                                        <div style="color:#3b3b3b">
                                                            <h5>Email</h5>
                                                            <h6>${$('#email').val()}</h6>
                                                        </div>
                                                    </div>
                                                `)
                        $("#ordersummarytype_phone").append(`
                                                    <div style="padding:5px;">
                                                        <div style="border: none; border-top: 1px solid #A1A1A1; margin-bottom:5px"></div>
                                                        <div style="color:#3b3b3b">
                                                            <h5>Phone</h5>
                                                            <h6>${$('#phonenumber').val()}</h6>
                                                        </div>
                                                    </div>
                                                `)
                        $("#ordersummarytype_nrc").append(`
                                                    <div style="padding:5px;">
                                                        <div style="border: none; border-top: 1px solid #A1A1A1; margin-bottom:5px"></div>
                                                        <div style="color:#3b3b3b">
                                                            <h5>NRC</h5>
                                                            <h6>${$('#nrc').val()}</h6>
                                                        </div>
                                                    </div>
                                                `)
                        $("#ordersummarytype_occupation").append(`
                                                    <div style="padding:5px;">
                                                        <div style="border: none; border-top: 1px solid #A1A1A1; margin-bottom:5px"></div>
                                                        <div style="color:#3b3b3b">
                                                            <h5>Occupation</h5>
                                                            <h6>${$('#occupations').val()}</h6>
                                                        </div>
                                                    </div>
                                                `)


                        $("#ordersummarytype_address").append(`
                                                    <div style="padding:5px;">
                                                        <div style="border: none; border-top: 1px solid #A1A1A1; margin-bottom:5px"></div>
                                                        <div style="color:#3b3b3b">
                                                            <h5>Address</h5>
                                                            <h6>${cover_type_selected}</h6>
                                                        </div>
                                                    </div>
                                                `)

                        // $("#ordersummary3").append(`
                        //                             <div style="padding:5px;">
                        //                                 <div style="border: none; border-top: 1px solid #A1A1A1; margin-bottom:5px"></div>
                        //                                 <div style="color:#3b3b3b">
                        //                                     <h5>Policy</h5>
                        //                                     <h6>${arr[2]}</h6>
                        //                                 </div>
                        //                             </div>
                        //                         `)

                        // $("#ordersummarycover4").append(`
                        //                             <div style="padding:5px;">
                        //                                 <div style="border: none; border-top: 1px solid #A1A1A1; margin-bottom:5px"></div>
                        //                                 <div style="color:#3b3b3b">
                        //                                     <h5>Premium Type</h5>
                        //                                     <h6>${arr[3]}</h6>
                        //                                 </div>
                        //                             </div>
                        //                         `)

                        // Get the value of the total amount to be paid

                        // $("#ordersummarycoverpay").append(`
                        //                             <div style="padding:5px;">
                        //                                 <div style="border: none; border-top: 1px solid #A1A1A1; margin-bottom:5px"></div>
                        //                                 <div style="color:green">
                        //                                     <h5>Amount Assured : K ${arr[4]}.00</h5>
                        //                                 </div>
                        //                             </div>
                        //                         `)
                        // console.log(multiply_by_people)
                        // $("#ordersummarycoverassured").append(`
                        //                             <div style="padding:5px;">
                        //                                 <div style="border: none; border-top: 1px solid #A1A1A1; margin-bottom:5px"></div>
                        //                                 <div style="color:green">
                        //                                     <h5>Amount Payable : <span style="color:red">K ${premium_amount_selected * multiply_by_people}.00</span></h5>
                        //                                 </div>
                        //                             </div>
                        //                         `)

                    }

                    var employee_data = '';

                    $('#load_data').click(function() {

                        var uniqid = CSV_ID;
                        csvUploaded = true;

                        $.ajax({
                            url: "assets_web/docs/excel/" + uniqid + ".csv",
                            dataType: "text",
                            success: function(data) {
                                employee_data = data.split(/\r?\n|\r/);
                                // Validate to set minimum to 10
                                if (employee_data.length < 11) {
                                    alert('You cannot have less than 10 persons covered under the group policy.Add more members in the cvs documnet and reupload');
                                } else {
                                    var table_data = ''; //'<table class="table table-bordered table-striped">';
                                    for (var count = 0; count < employee_data.length; count++) {
                                        var cell_data = employee_data[count].split(",");
                                        cell_data.push(premium_amount_selected, sum_assured_selected)
                                        // console.log(premium_amount_selected, sum_assured_selected)
                                        table_data += '<tr>';
                                        for (var cell_count = 0; cell_count < cell_data.length; cell_count++) {
                                            if (count === 0) {
                                                // table_data += '<th>' + cell_data[cell_count] + '</th>';
                                            } else {
                                                table_data += '<td>' + cell_data[cell_count] + '</td>';
                                            }
                                        }
                                        // table_data += '<td>' + premium_amount_selected + '</td> <td>' + sum_assured_selected + '</td> </tr>';
                                        table_data += '</tr>';
                                    }

                                }
                                // table_data += '</table>';
                                // console.log(employee_data.length + "total rows");

                                $('#employee_table').html(table_data);
                                tabb = document.getElementById("autotable").rows[0].cells.length;
                                $('#autotable').append(table_data);
                                // tabb.append(table_data);// Calculate premium
                                total_premuim = parseInt(premium_amount_selected) * (employee_data.length - 2);
                                document.getElementById("totalMonthlyCost").innerHTML = total_premuim;
                                document.getElementById("totalMonthlyCost1").innerHTML = total_premuim;
                                // calculateTotalPremium(premium_amount_selected); 
                                $('#load_manual_data').hide(); //Hide btn
                                $('#addtable_csv').show(); // Hide btn
                                $('#tcs1').hide();
                                $('#load_data').hide();
                                $('#remove_info').hide();
                            },
                            error: function(data) {
                                // $('#employee_table').html('<br><h1>HELLOE </h1><br>');
                                console.log('no file')
                            }
                        });
                    })

                    $('#deleteCsv').click(function() {
                        var uniqid =CSV_ID;
                        // alert(uniqid);
                        $.ajax({
                            url: '',
                            type: 'post',
                            data: {
                                uniqid: uniqid
                            },
                            success: function(response) {

                                // Changing image source when remove
                                if (response == 1) {
                                    // $("#img_" + id).attr("src","images/noimage.png");
                                }
                            },
                            error: function(response) {
                                alert('Cant find php file')
                            }
                        });
                    });

                    var total_people = (employee_data.length - 2)
                    $("#addtable_csv").on('click', function() {
                        addRow("autotable", table_type_select);

                        total_people++;
                        total_premuim = parseInt(premium_amount_selected) * total_people;
                        document.getElementById("totalMonthlyCost").innerHTML = total_premuim;
                        document.getElementById("totalMonthlyCost1").innerHTML = total_premuim;
                    })

                    $('#load_manual_data').click(function() {
                        // if ($('#load_manual_data').val() == 1) {
                        //     $('.load_manual_data').hide();
                        //     return;
                        // } else {
                        //     $('.load_manual_data').show()
                        // }
                        csvUploaded = true;

                        $('#addtable').show();
                        $('#load_manual_data').hide();
                        $('#tcs1').hide();
                        $('#load_data').hide();

                        for (i = 0; i < 10; i++) {
                            addRow("autotable", table_type_select);
                        }
                        calculateTotalPremium(premium_amount_selected);

                    });

                    $(".selection_btn").on('click', function(e) {


                    })

                    function resetTransaction() {
                        location.assign(location.href.split('#')[0]);
                    }

                    function goBackToCover1() {
                        var target = $('#nav-profile-tab');
                        target.removeClass('disabled');
                        // Disable group tab
                        var grpTab = $('#nav-group-tab');
                        grpTab.addClass('disabled');
                        // opening tab
                        target.trigger('click');
                        // scrolling into view
                        target[0].scrollIntoView(true);

                        // total_beneficiaries--;
                        // reset table and table and premium
                        $("table").children().remove()
                        // location.assign(location.href.split('#')[0]);
                        total_premuim = 2 * 0;
                        premium_amount_selected = total_premuim;
                        document.getElementById("totalMonthlyCost").innerHTML = total_premuim;

                    }


                    var total_amount_to_pay = document.getElementById('totalMonthlyCost').value;

                    // var total_beneficiaries = document.getElementById("autotable").rows[0].cells.length;


                    function nextTab() {
                        // `this` is the clicked <a> tag
                        var target = $('#nav-profile-tab');
                        target.removeClass('disabled');

                        // opening tab
                        target.trigger('click');
                        // scrolling into view
                        target[0].scrollIntoView(true);
                    }

                    function addRow(tableID, type) {

                        var table = document.getElementById(tableID);

                        var rowCount = table.rows.length;
                        var row = table.insertRow(rowCount);

                        // cell1
                        var cell1 = row.insertCell(0);
                        // var typelist = document.createElement("div");    
                        var type_select = document.createElement("select");
                        var op = []

                        if (type === 'premium_group_family')
                            op = ["CHILD_1", "CHILD_2", "CHILD_3", "CHILD_4", "SPOUSE", "PLANHOLDER", "ADULT2", "DEPENDANT1", "DEPENDANT2", "DEPENDANT3", "DEPENDANT4", "ADULT1", "UNCLASSIFIED", "ADULT3", "CHILD_0-5 YRS", "DEPENDANT", "DEPENDANT", "PLANHOLDER", "DEPENDANT"];
                        else
                            op = ["GROUP MEMBER 1", "GROUP MEMBER 2", "GROUP MEMBER 3", "GROUP MEMBER 4", "GROUP MEMBER 5", "GROUP MEMBER 6", "GROUP MEMBER 7", "GROUP MEMBER 8", "GROUP MEMBER 9", "GROUP MEMBER 10", ];

                        for (const val of op) {
                            var option = document.createElement("option");

                            option.value = val;
                            option.text = val.charAt(0).toUpperCase() + val.slice(1);
                            type_select.appendChild(option);
                        }

                        type_select.className = "form-control"
                        type_select.className += " basic-single"

                        type_select.name = "element3";
                        type_select.id = "element3"
                        type_select.id = 'personCovered'

                        // typelist.appendChild(type_select);

                        // select.innerHTML='<select id="depand" class="form-control basic-single"></select>'

                        // var covered = ["spouse", "child", "dependent"];



                        // for (const val of covered) {
                        //     var option = document.createElement("option");
                        //     option.value = val;
                        //     option.text = val.charAt(0).toUpperCase() + val.slice(1);
                        //     select.appendChild(option);
                        // }

                        // cell 2
                        var surname = row.insertCell(1);
                        var surname_input = document.createElement("input");

                        surname_input.type = "text";
                        surname_input.name = "personCovered";
                        surname_input.placeholder = "surname";
                        surname_input.className = "coveredPersonTableInput";

                        // cell 3
                        var othername = row.insertCell(2);
                        var othername_input = document.createElement("input");

                        othername_input.type = "text";
                        othername_input.name = "personCovered";
                        othername_input.placeholder = "other name";
                        othername_input.className = "coveredPersonTableInput";

                        // cell 4
                        var dob = row.insertCell(3);
                        var dob_div = document.createElement("div");

                        var dob_select1 = document.createElement("select");
                        var dob_select2 = document.createElement("select");
                        var dob_select3 = document.createElement("select");


                        var days = ["Day", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31"];

                        for (const val of days) {
                            var option = document.createElement("option");
                            option.value = val;
                            option.text = val.charAt(0).toUpperCase() + val.slice(1);
                            dob_select1.appendChild(option);
                        }

                        dob_select1.id = "dobDay";
                        dob_select1.className = "dobDay"

                        dob_div.appendChild(dob_select1);

                        var months = ["Month", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"];

                        for (const val of months) {
                            var option = document.createElement("option");
                            option.value = val;
                            option.text = val.charAt(0).toUpperCase() + val.slice(1);
                            dob_select2.appendChild(option);
                        }

                        dob_select2.id = "dobMonth";
                        dob_select2.className = "dobMonth"

                        dob_div.appendChild(dob_select2);

                        var date = new Date();
                        var current_year = date.getFullYear();

                        var years = ['Year', '1950', '1951', '1952', '1953', '1954', '1955', '1956', '1957', '1958',
                            '1959', '1960', '1961', '1962', '1963', '1964', '1965', '1966', '1967', '1968', '1969',
                            '1970', '1971', '1972', '1973', '1974', '1975', '1976', '1977', '1978', '1979', '1980',
                            '1981', '1982', '1983', '1984', '1985', '1986', '1987', '1988', '1989', '1990', '1991',
                            '1992', '1993', '1994', '1995', '1996', '1997', '1998', '1999', '2000', '2001', '2002',
                            '2003', '2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011', '2012', '2013',
                            '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021'
                        ];


                        // const theDates = [];
                        // for (let year = new Date().getFullYear(); year !== null;) {
                        //     const row = [];
                        //     for (let i = 0; i < 5; i++, year = (year > 1901 ? year - 1 : null)) {
                        //         row.push(year);
                        //     }
                        //     years.push(row);
                        // }


                        for (const val of years) {
                            var option = document.createElement("option");
                            option.value = val;
                            option.text = val.charAt(0).toUpperCase() + val.slice(1);
                            dob_select3.appendChild(option);
                        }

                        dob_select3.id = "dobYear";
                        dob_select3.className = "dobYear"

                        dob_div.appendChild(dob_select3);

                        // cell6
                        var tbl_gender = row.insertCell(4);
                        var genderselect = document.createElement("select");

                        genderselect.name = "element3";
                        genderselect.id = "element3"
                        genderselect.className = "form-control"
                        genderselect.className += " basic-single"
                        genderselect.id = 'personCovered'

                        var genderselectOp = ["male", "female", "other"];

                        for (const val of genderselectOp) {
                            var option = document.createElement("option");
                            option.value = val;
                            option.text = val.charAt(0).toUpperCase() + val.slice(1);
                            genderselect.appendChild(option);
                        }

                        // cell 7
                        var idNumber = row.insertCell(5);
                        var idNumber_input = document.createElement("input");

                        idNumber_input.type = "text";
                        idNumber_input.name = "idNumber";
                        idNumber_input.placeholder = "NRC/Passport Number";
                        idNumber_input.className = "coveredPersonTableInput";


                        var cell8 = row.insertCell(6)
                        var user_premum_Div = document.createElement("div")

                        user_premum_Div.id = "user_premum"
                        user_premum_Div.innerHTML = '<div style="padding-left:10px">' + premium_amount_selected + '</div>'

                        cell8.appendChild(user_premum_Div);

                        var amountassuered = row.insertCell(7)
                        var amountassuered_input = document.createElement("div")


                        amountassuered_input.id = "user_sum"
                        amountassuered_input.innerHTML = '<div style="padding-left:10px"> ' + sum_assured_selected + '</div>'

                        amountassuered.appendChild(amountassuered_input);


                        // cell 10
                        var actionbtn = row.insertCell(8);
                        var actionDiv = document.createElement("div");

                        actionDiv.id = "remove";
                        actionDiv.innerHTML = '<div style="padding-left:10px"><button style="color:#fff; padding:5px; border-radius:20px; background-color:#D03238;">x</button> </div>';
                        actionDiv.setAttribute('onclick', 'removeRow(this)')

                        actionbtn.appendChild(actionDiv);

                        amountassuered_input.createTextNode = "20";

                        cell1.appendChild(type_select);
                        surname.appendChild(surname_input);
                        othername.appendChild(othername_input);
                        dob.appendChild(dob_div);
                        // age.appendChild(age_input);
                        tbl_gender.appendChild(genderselect);
                        idNumber.appendChild(idNumber_input);
                        amountassuered.appendChild(amountassuered_input);
                        idNumber.appendChild(idNumber_input);

                    }


                    $('#22').on('focusin', '.payreminder', function() {
                        $(this).datepicker({
                            dateFormat: $.datepicker.W3C,
                            changeMonth: true,
                            changeYear: true,
                            yearRange: '2011:2020'
                        });
                    });




                    function goBackToCoverGrp() {
                        var target = $('#nav-profile-tab');
                        target.removeClass('disabled');
                        // Disable group tab
                        var grpTab = $('#nav-group-tab');
                        grpTab.addClass('disabled');
                        // opening tab
                        target.trigger('click');
                        // scrolling into view
                        target[0].scrollIntoView(true);
                        console.log("tottal bene ", total_beneficiaries)
                        total_beneficiaries = 0;
                        // reset table and table and premium
                        $("table").children().remove()
                        // window.location.reload()
                        location.assign(location.href.split('#')[0]);
                        total_premuim = 2 * 0;
                        premium_amount_selected = total_premuim;
                        console.log("tottal bene 2 ", total_beneficiaries)
                        document.getElementById("totalMonthlyCost").innerHTML = total_premuim;
                    }

                    // UPDATE total premium IF ROW HAS BEEN REMOVED
                    var total_premuim = 0;

                    function removeTotalPremium(premium) {
                        // Get total policy beneficiaries...
                        total_beneficiaries--;
                        total_premuim = parseInt(premium) * (total_beneficiaries);
                        console.log(total_beneficiaries - premium);
                        document.getElementById("totalMonthlyCost").innerHTML = total_premuim;
                        document.getElementById("totalMonthlyCost1").innerHTML = total_premuim;
                    }

                    function removeRow(btn) {
                        var top10_index = btn.parentNode.parentNode.rowIndex;
                        if (top10_index < 11) {
                            alert("You cannot have less than 10 persons covered under the group policy");
                        } else {
                            var removeBtn = document.getElementById('autotable');
                            removeBtn.deleteRow(btn.parentNode.parentNode.rowIndex);
                            removeTotalPremium(premium_amount_selected);
                        }

                    }


                    var dayset = 0;
                    var monthset = 0;
                    var yearset = 0;

                    var yearsSet = 0;


                    $(document).on('change', '.dobDay', function() {
                        var temp = $('.dobDay').children(":selected").text();
                        var day = temp.slice(3);

                        // console.log(day);
                        dayset = parseInt(day);
                    })

                    $(document).on('change', '.dobMonth', function() {
                        var temp = $('.dobMonth').children(":selected").text();
                        var month = temp.slice(5);

                        monthset = parseInt(month);
                    })

                    $(document).on('change', '.dobYear', function() {
                        if (dayset === 0) {
                            $('#errorAge').modal("toggle")

                            $('#modalerrorAge').on("click", function() {
                                $('#errorAge').modal("toggle")
                            })
                        } else if (monthset === 0) {
                            $('#errorAge').modal("toggle")

                            $('#modalerrorAge').on("click", function() {
                                $('#errorAge').modal("toggle")
                            })

                        } else {

                            var temp = $('.dobYear').children(":selected").text();
                            var year = temp.slice(4);

                            yearset = parseInt(year);

                            yearsSet = dayset + monthset + yearset

                            var today = new Date();
                            var dd = String(today.getDate());
                            var mm = String(today.getMonth() + 1); //January is 0!
                            var yyyy = today.getFullYear();

                            var currentDate = parseInt(dd) + parseInt(mm) + parseInt(yyyy)

                            var newContent = document.createTextNode(currentDate - yearsSet)
                            // age_input.appendChild(newContent);
                            var new_age = currentDate - yearsSet;
                            // console.log(currentDate);

                            var yo = document.getElementById('age')
                            // alert(new_age);
                            yo.innerHTML = currentDate - yearsSet
                        }



                    })


                    $('#make_payment').on('click', function() {
                        $.ajax({
                            type: "POST", //type of method
                            url: "application/controllers/website/mobile_payment.php", //your page
                            data: {
                                customersPhoneNumber: $('#airtel_input').val(),
                            }, // passing the values
                            success: function(res) {
                                //do what you want here...
                            }
                        });
                    })
                </script>