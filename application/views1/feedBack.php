<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section background-opacity page-title set-height-top">
                    <div class="container">
                        <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions">Contact</h2>
                            <ol class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="active"><a href="#">Feedback</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="section nav-subscribe">
                    <div class="container">
                        <div class="nav-subscribe-wrapper">
                            
                           
                        </div>
                    </div>
                </div>
                <div class="section section-padding contact-main">
                    <div class="container">
                        <div class="contact-main-wrapper">
                            
                            <form class="bg-w-form contact-form" action="<?php echo base_url();?>index.php/welcome/summitfeedback" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div> <?php if($msg=="success"){
                                    echo "Successfuly submitted your Message we will contact you soon.";
                                    }?> </div>
                                        <div class="form-group"><label class="control-label form-label">NAME <span
                                                class="highlight">*</span></label><input type="text" name="name" placeholder=""
                                                                                         class="form-control form-input"><!--label.control-label.form-label.warning-label(for="") Warning for the above !-->
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="control-label form-label">EMAIL <span
                                                class="highlight">*</span></label><input type="email" name= "email1" placeholder=""
                                                                                         class="form-control form-input"><!--label.control-label.form-label.warning-label(for="")-->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="control-label form-label">Mobile No. <span
                                                class="highlight">*</span></label><input type="text" name = "mobile" placeholder=""
                                                                                         class="form-control form-input"><!--label.control-label.form-label.warning-label(for="")-->
                                        </div>
                                    </div>
                                    
                               <div class="col-md-12">
                                        <div class="contact-question form-group"><label
                                                class="control-label form-label">Message<span
                                                class="highlight">*</span></label><textarea
                                                class="form-control form-input"></textarea></div>
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