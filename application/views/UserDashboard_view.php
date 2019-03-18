<?php
 //include(base_url(). "includes/header.php");
 //include("includes/header.php");
 $this->load->view('includes/header.php');
 
 //include('includes/ErrorNotifications.php');
// include(base_url()."includes/ErrorNotifications.php");
?>

<div class="alice-bg section-padding-bottom">
    <div class="container no-gliters">
        <div class="row no-gliters">
            <div class="col">
                <div class="post-container">
                    <div class="post-content-wrapper">
                        <!-- <form action="#" class="job-post-form"> -->
                            <div class="basic-info-input">
                                <div class="dropdown header-top-account login-modals md-12">
                                     
                                <div class="dashboard-applied">
                  <h4 class="apply-title"><?php
                  if($records):
                  echo sizeof($records). ' : ';  ?>
                  <?php else:  
                    echo '0 : ' ;
                  
                endif;
                  ?>
                  
                  Applications in progress</h4>
                  <div class="dashboard-apply-area">
                  <?php if ($records ): ?>
                
                  <?php foreach ($records as $row): ?>

                    
                    <div class="job-list">
                      <div class="thumb">
                        <a href="#">
                          <img src="images\job\company-logo-2.png" class="img-fluid" alt="">
                        </a>
                      </div>
                      <div class="body">
                        <div class="content">
                          <h4><a href="#"><?php echo $row->Application ?></a></h4>
                          <div class="info">
                            <span class="company"><a href="#"><i data-feather="briefcase"></i><?php echo $row->Status ?> </a></span>
                            <span class="office-location"><a href="#"><i data-feather="map-pin"></i>
                          <?php echo date('d-m-Y',strtotime($row->Application_Date)); ?> 
                          </a></span>
                            <span class="job-type part-time"><a href="#"><i data-feather="clock"></i>
                            <?php echo date('d-m-Y',strtotime($row->Application_Date)); ?> 
                          </a></span>
                          </div>
                        </div>
                        <div class="more">
                          <div class="buttons">
                            <a href="#" class="button">Apply Now</a>
                            <a href="#" class="favourite"><i data-feather="heart"></i></a>
                          </div>
                          <a href="#" class="bookmark-remove"><i class="fas fa-times"></i></a>
                          <p class="deadline">Deadline: Oct 31, 2018</p>
                        </div>
                      </div>
                    </div>
                    <?php endforeach; ?>
                        <?php endif; ?>
                    <div class="job-list">
                      <div class="thumb">
                        <a href="#">
                          <img src="images\job\company-logo-8.png" class="img-fluid" alt="">
                        </a>
                      </div>
                      <div class="body">
                        <div class="content">
                          <h4><a href="#">Restaurant Team Member - Crew </a></h4>
                          <div class="info">
                            <span class="company"><a href="#"><i data-feather="briefcase"></i>Geologitic</a></span>
                            <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New Orleans</a></span>
                            <span class="job-type temporary"><a href="#"><i data-feather="clock"></i>Temporary</a></span>
                          </div>
                        </div>
                        <div class="more">
                          <div class="buttons">
                            <a href="#" class="button">Apply Now</a>
                            <a href="#" class="favourite"><i data-feather="heart"></i></a>
                          </div>
                          <a href="#" class="bookmark-remove"><i class="fas fa-times"></i></a>
                          <p class="deadline">Deadline: Oct 31, 2018</p>
                        </div>
                      </div>
                    </div>
                    <div class="job-list">
                      <div class="thumb">
                        <a href="#">
                          <img src="images\job\company-logo-9.png" class="img-fluid" alt="">
                        </a>
                      </div>
                      <div class="body">
                        <div class="content">
                          <h4><a href="#">Nutrition Advisor</a></h4>
                          <div class="info">
                            <span class="company"><a href="#"><i data-feather="briefcase"></i>Theoreo</a></span>
                            <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New York City</a></span>
                            <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>Full Time</a></span>
                          </div>
                        </div>
                        <div class="more">
                          <div class="buttons">
                            <a href="#" class="button">Apply Now</a>
                            <a href="#" class="favourite"><i data-feather="heart"></i></a>
                          </div>
                          <a href="#" class="bookmark-remove"><i class="fas fa-times"></i></a>
                          <p class="deadline">Deadline: Oct 31, 2018</p>
                        </div>
                      </div>
                    </div>
                    <div class="job-list">
                      <div class="thumb">
                        <a href="#">
                          <img src="images\job\company-logo-10.png" class="img-fluid" alt="">
                        </a>
                      </div>
                      <div class="body">
                        <div class="content">
                          <h4><a href="#">UI Designer</a></h4>
                          <div class="info">
                            <span class="company"><a href="#"><i data-feather="briefcase"></i>Degoin</a></span>
                            <span class="office-location"><a href="#"><i data-feather="map-pin"></i>San Francisco</a></span>
                            <span class="job-type part-time"><a href="#"><i data-feather="clock"></i>Part Time</a></span>
                          </div>
                        </div>
                        <div class="more">
                          <div class="buttons">
                            <a href="#" class="button">Apply Now</a>
                            <a href="#" class="favourite"><i data-feather="heart"></i></a>
                          </div>
                          <a href="#" class="bookmark-remove"><i class="fas fa-times"></i></a>
                          <p class="deadline">Deadline: Oct 31, 2018</p>
                        </div>
                      </div>
                    </div>
                    <div class="job-list">
                      <div class="thumb">
                        <a href="#">
                          <img src="images\job\company-logo-3.png" class="img-fluid" alt="">
                        </a>
                      </div>
                      <div class="body">
                        <div class="content">
                          <h4><a href="#">Land Development Marketer</a></h4>
                          <div class="info">
                            <span class="company"><a href="#"><i data-feather="briefcase"></i>Realouse</a></span>
                            <span class="office-location"><a href="#"><i data-feather="map-pin"></i>Washington, D.C.</a></span>
                            <span class="job-type freelance"><a href="#"><i data-feather="clock"></i>Freelance</a></span>
                          </div>
                        </div>
                        <div class="more">
                          <div class="buttons">
                            <a href="#" class="button">Apply Now</a>
                            <a href="#" class="favourite"><i data-feather="heart"></i></a>
                          </div>
                          <a href="#" class="bookmark-remove"><i class="fas fa-times"></i></a>
                          <p class="deadline">Deadline: Oct 31, 2018</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                                   
                                
                                     
                                </div>
                            </div>
                        <!-- </form> -->
                    </div>



                    <?php
//include("includes/leftmenu.php");
$this->load->view('includes/leftmenu.php');
//include('/includes/leftmenu.php');
?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Call to Action -->

<!-- Call to Action End -->

<!--Education Model-->
 
<!-- Footer -->
<?php
 //include("includes/footer.php");
 //include('includes/footer.php');
 $this->load->view('includes/footer.php');
?>
<script>
$(document).ready(function () {
    //@naresh action dynamic childs
    var next = 0;
    $("#add-more").click(function(e){
        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = ' <div id="field'+ next +'" name="field'+ next +'"><!-- Text input--><div class="form-group">
         <label class="col-md-4 control-label" for="action_id">Action Id</label> 
         <div class="col-md-5">
          <input id="action_id" name="action_id" type="text" placeholder="" class="form-control input-md"> </div>
          </div><br><br>
           <!-- Text input-->
           <div class="form-group"> 
           <label class="col-md-4 control-label" for="action_name">Action Name</label>
            <div class="col-md-5">
             <input id="action_name" name="action_name" type="text" placeholder="" class="form-control input-md"> </div>
             </div><br><br>
             <!-- File Button --> 
             <div class="form-group"> 
             <label class="col-md-4 control-label" for="action_json">Action JSON File</label> 
             <div class="col-md-4">
              <input id="action_json" name="action_json" class="input-file" type="file"> </div>
              </div>
              </div>';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >Remove</button></div></div><div id="field">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });

});
</script>