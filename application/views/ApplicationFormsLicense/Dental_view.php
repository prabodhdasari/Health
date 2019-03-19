<?php
 $this->load->view('includes/header.php');
?>
  <div class="alice-bg section-padding-bottom mt-0">
    <div class="container no-gliters">
      <div class="row no-gliters">
        <div class="col">
          <div class="post-container">
            <div class="post-content-wrapper">
             
                <div class="basic-info-input">
                    <div class="dropdown header-top-account login-modals md-12">
                        <button title="Title"     type="button" data-toggle="collapse" data-target="#Description">Description</button>

                        <button type="button"  style="width:200px"   data-toggle="collapse" data-target="#Documents"   >
                            Required Documents
                          </button>
                          <button type="button" style="width:200px"    data-toggle="collapse" data-target="#AssistingDocuments">
                              Assisting Documents
                            </button>
                            <button type="button" style="width:200px"    data-toggle="collapse" data-target="#Fee">
                             Fee
                            </button>
                      </div>
                      <div id="Fee" class="collapse col-md-12">
                        Medical healthcare professional license Fees:
                        <ul>
                          <li>Initial Application Fee</li>
                          <li>Review Fee</li>
                          <li>Background Verification fee (if applicable)</li>
                          <li>Exam Fee (if applicable)</li>
                          <li>ID card Printing</li>
                          <li>Courier Fee</li>
                          <li>Final Fee</li>
                          Note : All the fee are non refundable
                        </ul>
                      </div>
                  <div id="Description" class="collapse col-md-12">
                    This service enables the individuals to apply for a new Medical healthcare professional license
                  </div>
                  <div id="Documents" class="collapse   col-md-12">
                    <ul>
                      <li> Education certificates with transcript of records. Education Certificates may include any of
                        the followings: Diploma, Bachelor’s, Post Graduates Degree etc.</li>
                      <li>Recent experience letters.</li>
                      <li> Valid License/​Registration from licensing body of recent employment.</li>
                      <li> Valid Good Standing Certificate.</li>
                      <li> Valid ID card Copy.</li>
                      <li>Recent Photo.</li>
                      <li> Experience Certificate</li>
                      <li> Malpractice Insurance from recruiting facility (If Available).</li>
                    </ul>
                  </div>
                  <div id="AssistingDocuments" class="collapse col-md-12">
                    <ul>
                      <li>Download User Guide</li>
                      <li>Download License Requirements</li>
                    </ul>
                  </div>
                  <hr>
                  <?php
        
        $opts ='class="job-post-form"';
        echo form_open('Dental/addNewOrUpdate',$opts); ?>
                  <h4><i data-feather="plus-circle"></i>Application Form - New Dental License</h4>
                  <div id="details" class="row">
                                    <label class="col-md-3 col-form-label">Personal Details</label>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <!-- <input type="text" class="form-control" placeholder="Your Name"> -->
                                                    <?php 
                                                    $opts = 'placeholder="First_Name", class="form-control"';
                                                    echo form_input('First_Name',set_value('First_Name'),$opts);
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"> 
                                                <?php 
                                                    $opts = 'placeholder="Last_Name", class="form-control"';
                                                    echo form_input('Last_Name',set_value('Last_Name'),$opts);
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"> 
                                                <?php 
                                                    $opts = 'placeholder="Father Name", class="form-control"';
                                                    echo form_input('Father_Name',set_value('Father_Name'),$opts);
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'placeholder="Mother Name",  class="form-control"';
                                                    echo form_input('Mother_Name',set_value('Mother_Name'),$opts);
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"> 
                                                <?php 
                                                    $opts = 'placeholder="DOB", type="number", class="form-control"';
                                                    echo form_input('DOB',set_value('DOB'),$opts);
                                                    ?>
                                                    <small id="emailHelp" class="form-text text-muted">Date of
                                                        Birth</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">

                                              <?php  $gendertype=array('Gender','Male','Female','Others'); 
                                               $opts = '  class="form-control"';
                                              echo 
                                              form_dropdown('gender',($gendertype), $opts  );
                                              ?>
                                                   
                                                    <i class="fa fa-caret-down"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="email", placeholder="Email Id", class="form-control"';
                                                    echo form_input('Email_Id',set_value('Email_Id'),$opts);
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"> 
                                                <?php 
                                                    $opts = 'type="number", placeholder="Your Mobile", class="form-control"';
                                                    echo form_input('Mobile1',set_value('Mobile1'),$opts);
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", placeholder="Address", class="form-control"';
                                                    echo form_input('Address',set_value('Address'),$opts);
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", placeholder="City", class="form-control"';
                                                    echo form_input('City',set_value('City'),$opts);
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", placeholder="State", class="form-control"';
                                                    echo form_input('State',set_value('State'),$opts);
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", placeholder="Country", class="form-control"';
                                                    echo form_input('Country',set_value('City'),$opts);
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", placeholder="Pin Code", class="form-control"';
                                                    echo form_input('Pin_Code',set_value('Pin_Code'),$opts);
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="information" class="row">
                                    <label class="col-md-3 col-form-label">Medical Registraion</label>
                                    <div class="col-md-9">
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", placeholder="Registration Number", class="form-control"';
                                                    echo form_input('Registration_Number',set_value('Registration_Number'),$opts);
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", placeholder="Medical Council ", class="form-control"';
                                                    echo form_input('Medical_Council',set_value('Medical_Council'),$opts);
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", placeholder="Year of Registration", class="form-control"';
                                                    echo form_input('Year_of_Registration',set_value('Year_of_Registration'),$opts);
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", placeholder="Medical council Country", class="form-control"';
                                                    echo form_input('Medical_Council_Country',set_value('Medical_Council_Country'),$opts);
                                                    ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                  <div id="information" class="row">
                    <label class="col-md-3 col-form-label">Medical Speciality</label>
                    <div class="col-md-9">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                          <?php   
                                             $speciality=array('Select Speciality','Dental Public Health','Endodontics','Oral & Maxillofacial Pathology','Oral & Maxillofacial Radiology','Oral & Maxillofacial Surgery','Oral Medine','Orthodontics & Dentofacial Orthopedics','Pediatric Dentistry','Periodontics','Prosthodontics',); 
                                             
                                             $opts = 'class="form-control"';
                                            echo form_dropdown('Speciality_Name', $speciality, $opts);
                                             
                                             ?>
                            <i class="fa fa-caret-down"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="details" class="row">
                                    <label class="col-md-3 col-form-label">Identification Details</label>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", placeholder="Passport Number", class="form-control"';
                                                    echo form_input('Passport_Number',set_value('Passport_Number'),$opts);
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", placeholder="Country of Issuance", class="form-control"';
                                                    echo form_input('Passport_Country',set_value('Passport_Country'),$opts);
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", placeholder="Date of Issuance", class="form-control"';
                                                    echo form_input('Passport_Issue_Date',set_value('Passport_Issue_Date'),$opts);
                                                    ?>
                                                    <small id="emailHelp" class="form-text text-muted">Date of
                                                        Issue</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", placeholder="Date of Expiry", class="form-control"';
                                                    echo form_input('Passport_Expiry_Date',set_value('Passport_Expiry_Date'),$opts);
                                                    ?>
                                                    <small id="emailHelp" class="form-text text-muted">Date of
                                                        Expiry</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", placeholder="Nationial ID  / Adhaar Id", class="form-control"';
                                                    echo form_input('National_Id',set_value('National_Id'),$opts);
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", placeholder=" PAN ID / Tax Card Number", class="form-control"';
                                                    echo form_input('Tax_Number',set_value('Tax_Number'),$opts);
                                                    ?>
                                                        
                                                </div>
                                            </div>
                                            <div class="col-md-9 text-right">
                                                <div class="add-cv">
                                                    <input type="file">Upload ID<i data-feather="upload-cloud"></i>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div id="details" class="row">
                                    <label class="col-md-3 col-form-label">Education</label>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", placeholder= "Degree/Certificate/Diploma", class="form-control"';
                                                    echo form_input('Name_Degree',set_value('Name_Degree'),$opts);
                                                    ?>
                                                         
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", placeholder= "University/Institute", class="form-control"';
                                                    echo form_input('University',set_value('University'),$opts);
                                                    ?>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", placeholder="  Year of passing", class="form-control"';
                                                    echo form_input('Passing_Year',set_value('Passing_Year'),$opts);
                                                    ?>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", placeholder=" RollNumber", class="form-control"';
                                                    echo form_input('RollNumber',set_value('RollNumber'),$opts);
                                                    ?>
                                                    
                                                    <small id="text" class="form-text text-muted">Admission number or
                                                        Roll number</small>
                                                </div>
                                            </div>
                                            <div class="col-md-9 text-right">
                                                <div class="add-cv">
                                                    <input type="file">Upload File<i data-feather="upload-cloud"></i>
                                                </div>
                                            </div>


                                        </div>
                                        <div class=" col-md-12 dropdown header-top-account login-modals text-right">
                                            <button title="Title" type="button" data-toggle="modal"
                                                data-target="#educationModel">+ Add Education</button>

                                        </div>

                                    </div>
                                    <!-- <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", placeholder= "Degree/Certificate/Diploma", class="form-control"';
                                                    echo form_input('Name_Degree[]',set_value('Name_Degree[]'),$opts);
                                                    ?>
                                                         
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", placeholder= "University/Institute", class="form-control"';
                                                    echo form_input('University[]',set_value('University[]'),$opts);
                                                    ?>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", placeholder="  Year of passing", class="form-control"';
                                                    echo form_input('Passing_Year[]',set_value('Passing_Year[]'),$opts);
                                                    ?>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", placeholder=" RollNumber", class="form-control"';
                                                    echo form_input('RollNumber[]',set_value('RollNumber[]'),$opts);
                                                    ?>
                                                    
                                                    <small id="text" class="form-text text-muted">Admission number or
                                                        Roll number</small>
                                                </div>
                                            </div>
                                            <div class="col-md-9 text-right">
                                                <div class="add-cv">
                                                    <input type="file">Upload File<i data-feather="upload-cloud"></i>
                                                </div>
                                            </div>


                                        </div>
                                        <div class=" col-md-12 dropdown header-top-account login-modals text-right">
                                            <button title="Title" type="button" data-toggle="modal"
                                                data-target="#educationModel">+ Add Education</button>

                                        </div>

                                    </div> -->

                                </div>

                                <div id="details" class="row">
                                    <label class="col-md-3 col-form-label">Experiance</label>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", placeholder=" Company Name", class="form-control"';
                                                    echo form_input('Company_Name',set_value('Company_Name'),$opts);
                                                    ?>       </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", placeholder=" Designation", class="form-control"';
                                                    echo form_input('Designation',set_value('Designation'),$opts);
                                                    ?>     
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", placeholder=" Start Date", class="form-control"';
                                                    echo form_input('Start_date',set_value('Start_date'),$opts);
                                                    ?> 
                                                    <small id="date" class="form-text text-muted">Start Date</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", placeholder=" End Date", class="form-control"';
                                                    echo form_input('End_date',set_value('End_date'),$opts);
                                                    ?> 
                                                    <small id="text" class="form-text text-muted">End Date</small>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group"> 
                                                <?php 
                                                    $opts = 'type="text", placeholder=" Address", class="form-control"';
                                                    echo form_input('Exp_Address',set_value('Exp_Address'),$opts);
                                                    ?> 

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", placeholder=" City", class="form-control"';
                                                    echo form_input('Exp_City',set_value('Exp_City'),$opts);
                                                    ?> 
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", placeholder="Country", class="form-control"';
                                                    echo form_input('Exp_Country',set_value('Exp_Country'),$opts);
                                                    ?> 
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-9 text-right">
                                                <div class="add-cv">
                                                    <input type="file">Upload File<i data-feather="upload-cloud"></i>
                                                </div>
                                            </div>

                                            <div class=" col-md-12 dropdown header-top-account login-modals text-right">
                                                <button title="Title" type="button" data-toggle="modal"
                                                    data-target="#experienceModel">+ Add Experience</button>

                                            </div>
                                        </div>

                                    </div>
                                </div>



                                <div id="qualification" class="row">
                                    <label class="col-md-3 col-form-label">Special Qualifications</label>
                                    <div class="col-md-9">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            <?php 
                                                    $opts = 'type="text", placeholder="Special Qualification", class="form-control"';
                                                    echo form_input('Special_Qualification',set_value('Special_Qualification'),$opts);
                                                    ?> 

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="cv" class="row form-group">
                                    <label class="col-md-3 col-form-label">Upload Good Standing Certificate</label>
                                    <div class="col-md-9">
                                        <div class="add-cv">
                                            <input type="file">GSC File<i data-feather="upload-cloud"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="cv" class="row form-group">
                                    <label class="col-md-3 col-form-label">Upload CV</label>
                                    <div class="col-md-9">
                                        <div class="add-cv">
                                            <input type="file">CV File<i data-feather="upload-cloud"></i>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-9 offset-md-3">
                                        <div class="form-group mt-0 terms">
                                            <input class="custom-radio" type="checkbox" id="radio-4"
                                                name="termsandcondition">
                                            <label for="radio-4">
                                                <span class="dot"></span> You accepts our <a href="#">Terms and
                                                    Conditions</a> and <a href="#">Privacy
                                                    Policy</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label"></label>
                                    <div class="col-md-4">
                                      <?php
                                      
                                    $opts='class="button"';
                                    echo form_submit('Submit', 'Save Application',$opts); 
                                
                                 form_close();
?>

                                        <!-- <button class="button">Save Application</button> -->
                                    </div>
                                    <div class="col-md-4">
                                        <button class="button">Pay & Submit</button>
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
<div class="call-to-action-bg padding-top-90 padding-bottom-90">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="call-to-action-2">
                    <div class="call-to-action-content">
                        <h2>For Find Your Dream Job or Candidate</h2>
                        <p>Add resume or post a job. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                            tellus,
                            luctus nec.</p>
                    </div>
                    <div class="call-to-action-button">
                        <a href="#" class="button">Add Resume</a>
                        <span>Or</span>
                        <a href="#" class="button">Post A Job</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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