<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content" ><!-- SLIDER BANNER-->
             
                <div class="section section-padding picture-gallery">
                   
                    <div class="picture-gallery-wrapper"><!-- Nav tabs-->
                        <h2>Gallery</h2><hr>
                        <!-- Tab panes-->
                        <div class="tab-content gallery-content">
                            
                                <div class="grid" style="width:80%;margin-left: 10%; border:2px solid black">
                              <?php   
								$v = $this->db->get("gallery");
								 if($v->num_rows()>0){									
								?>
								<?php $i=1;foreach($v->result() as $row):?>
								
								 <div class="grid-item grid-item-height3" style="height:230px"><a
                                            href="<?php echo base_url();?>scholarAcademy/assets/images/gallery/<?php echo $row->image;?>"
                                            class="content fancybox-button"><img
                                            src="<?php echo base_url();?>scholarAcademy/assets/images/gallery/<?php echo $row->image;?>" alt=""
                                            class="img-responsive"  style="width: 230px; height: 230px;padding: 10px;"></a></div>
                                    <?php $i++ ; endforeach;}
        	?>
								
                                   
                              
                            </div>
                          
                           
                           
                          
                        </div>
                    </div>
                </div>
                <!-- SLIDER LOGO-->
               
            </div>
        </div>
    </div>
    <!-- BUTTON BACK TO TOP-->
    <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
</div>
<!-- FOOTER-->

    <div class="footer-top">
        <div class="container">
            <div class="footer-top-wrapper">
                <div class="footer-top-left"><p class="footer-top-focus">Scholars Academy Gallery</p>

               </div>   
            </div>
        </div>
    </div>