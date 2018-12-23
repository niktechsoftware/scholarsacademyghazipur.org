<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section background-opacity page-title set-height-top">
                    <div class="container">
                        <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions">Info Corner</h2>
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="active"><a href="#">Career</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="section nav-subscribe">
                    <div class="container">
                        
                    </div>
                </div>
                <div class="section section-padding contact-main">
                    <div class="container">
                        <div class="contact-main-wrapper">
                            
                            <form class="bg-w-form contact-form" action="<?php echo base_url();?>index.php/welcome/summitResume" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div><?php if($msg=="success"){
                                    echo "Successfully Uploaded Resume";
                                    } ?> </div>
                                        <div class="form-group"><label class="control-label form-label">NAME <span
                                                class="highlight">*</span></label><input type="text" name ="name" placeholder=""
                                                                                         class="form-control form-input"><!--label.control-label.form-label.warning-label(for="") Warning for the above !-->
                                        </div>
                                    </div>
                                     <div class="col-md-6">
                                        <div class="form-group"><label class="control-label form-label">Subject Experience <span
                                                class="highlight">*</span></label><input type="text" name = "subExp" placeholder=""
                                                                                         class="form-control form-input"><!--label.control-label.form-label.warning-label(for="") Warning for the above !-->
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="control-label form-label">EMAIL <span
                                                class="highlight">*</span></label><input type="text" name="email1" placeholder=""
                                                                                         class="form-control form-input"><!--label.control-label.form-label.warning-label(for="")-->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="control-label form-label">Phone No. <span
                                                class="highlight">*</span></label><input type="text" name= "phone" placeholder=""
                                                                                         class="form-control form-input"><!--label.control-label.form-label.warning-label(for="")-->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="control-label form-label">Date <span
                                                class="highlight">*</span></label><input type="date" name="date1" placeholder=""
                                                                                         class="form-control form-input"><!--label.control-label.form-label.warning-label(for="")-->
                                        </div>
                                    </div>
                                 
                                 <div class="col-md-6">
                                        <div class="form-group"><label class="control-label form-label">Upload Resume<span
                                                class="highlight">*</span></label><input type="file" name = "upfile" placeholder=""
                                                                                         class="form-control form-input"><!--label.control-label.form-label.warning-label(for="")-->
                                        </div>
                                    </div>
                                 
                                 
                                   
                                 
                                </div>
                                <div class="contact-submit">
                                    <button type="submit" class="btn btn-contact btn-green"><span>SUBMIT </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- BUTTON BACK TO TOP-->
    <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
</div>