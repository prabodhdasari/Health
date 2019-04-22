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
                                    <button title="Title" type="button" data-toggle="collapse"
                                        data-target="#Description">Description</button>

                                    <button type="button" style="width:200px" data-toggle="collapse"
                                        data-target="#Documents">
                                        Required Documents
                                    </button>
                                    <button type="button" style="width:200px" data-toggle="collapse"
                                        data-target="#AssistingDocuments">
                                        Assisting Documents
                                    </button>
                                    <button type="button" style="width:200px" data-toggle="collapse" data-target="#Fee">
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
                                    This service enables the individuals to apply for a new Medical healthcare
                                    professional license
                                </div>
                                <div id="Documents" class="collapse   col-md-12">
                                    <ul>
                                        <li> Education certificates with transcript of records. Education Certificates
                                            may include any of
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
        echo form_open('general/addNewOrUpdate',$opts); ?>
                                <h4><i data-feather="plus-circle"></i>Application Form - New General Medicine License
                                </h4>
                                <div id="details" class="row">
                                    <label class="col-md-3 col-form-label">Personal Details</label>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-6 box">
                                                <div class="form-group">
                                                                                                      <?php 
                                                    $opts = 'required="", class="form-control"';
                                                    echo form_input('First_Name',set_value('First_Name'),$opts);
                                                    ?><label>First Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 box">
                                                <div class="form-group"> 
                                                <?php 
                                                    $opts = 'required ="", class="form-control"';
                                                    echo form_input('Last_Name',set_value('Last_Name'),$opts);
                                                    ?><label> Last Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 box">
                                                <div class="form-group"> 
                                                <?php 
                                                    $opts = 'required="", class="form-control"';
                                                    echo form_input('Father_Name',set_value('Father_Name'),$opts);
                                                    ?><label>Father's Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 box">
                                                <div class="form-group">
                                                <?php 
                                                     $opts = 'required="",class="form-control"';
                                                    echo form_input('Mother_Name',set_value('Mother_Name'),$opts);
                                                    ?><label>Mother's Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 box">
                                                <div class="form-group"> 
                                                <?php 
                                                     $opts = 'required="", class="form-control"';
                                                    echo form_input('DOB',set_value('DOB'),$opts);
                                                    ?><label>Date of Birth</label>
                                                    <!-- <small id="emailHelp" class="form-text text-muted">Date of
                                                        Birth</small> -->
                                                </div>
                                            </div>
                                            <div class="col-md-6 box">
                                                <div class="form-group">

                                              <?php  $gendertype=array('Gender','Male','Female','Others'); 
                                               $opts = '  class="form-control"';
                                              echo 
                                              form_dropdown('gender',($gendertype), $opts  );
                                              ?>
                                                   
                                                    <i class="fa fa-caret-down"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6 box">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'required="", class="form-control", type="email"';
                                                    echo form_input('Email_Id',set_value('Email_Id'),$opts);
                                                    ?><label>Email ID</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 box">
                                                <div class="form-group"> 
                                                <?php 
                                                     $opts = 'required="", class="form-control", type="number",';
                                                    echo form_input('Mobile1',set_value('Mobile1'),$opts);
                                                    ?><label>Mobile</label>
                                                </div>
                                            </div>
                                            <div class="col-md-12 box">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'required="", class="form-control"';
                                                    echo form_input('Address',set_value('Address'),$opts);
                                                    ?><label>Address</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 box">
                                                <div class="form-group">
                                                <?php 
                                                      $opts = 'required="", class="form-control"';
                                                    echo form_input('City',set_value('City'),$opts);
                                                    ?><label>City</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 box">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'required="", class="form-control", type="text" ';
                                                    echo form_input('State',set_value('State'),$opts);
                                                    ?><label>State</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 box">
                                                <div class="form-group">
                                                <?php 
                                                     $opts = 'required="",  class="form-control", type="text",';
                                                    echo form_input('Country',set_value('City'),$opts);
                                                    ?><label>Country</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 box">
                                                <div class="form-group">
                                                <?php 
                                                     $opts = 'required="", class="form-control", type="text"';
                                                    echo form_input('Pin_Code',set_value('Pin_Code'),$opts);
                                                    ?><label>Zip/Pin Code</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="information" class="row">
                                    <label class="col-md-3 col-form-label">Medical Registraion</label>
                                    <div class="col-md-9">
                                        <div class="row">

                                            <div class="col-md-6 box">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", required="", class="form-control"';
                                                    echo form_input('Registration_Number',set_value('Registration_Number'),$opts);
                                                    ?><label for="">Registration Number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 box">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", required="", class="form-control"';
                                                    echo form_input('Medical_Council',set_value('Medical_Council'),$opts);
                                                    ?><label for="">Medical Council</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 box">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="number", required="", class="form-control"';
                                                    echo form_input('Year_of_Registration',set_value('Year_of_Registration'),$opts);
                                                    ?><label for="">Year of Registration</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 box">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", required="",  class="form-control"';
                                                    echo form_input('Medical_Council_Country',set_value('Medical_Council_Country'),$opts);
                                                    ?> <label for="">Medical Council Country</label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div id="information" class="row">
                                    <label class="col-md-3 col-form-label">Medical Speciality</label>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-12 box">
                                                <div class="form-group">
                                             <?php   
                                             $speciality=array('Select Speciality','General Medicine','General Dentistry'); 
                                             
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
                                            <div class="col-md-6 box">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", required="", class="form-control"';
                                                    echo form_input('Passport_Number',set_value('Passport_Number'),$opts);
                                                    ?><label for="">Passport Number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 box">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", required="", class="form-control"';
                                                    echo form_input('Passport_Country',set_value('Passport_Country'),$opts);
                                                    ?><label for="">Country of issuance</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 box">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", required="", class="form-control"';
                                                    echo form_input('Passport_Issue_Date',set_value('Passport_Issue_Date'),$opts);
                                                    ?><label for="">Issue Date </label>
                                                   
                                                </div>
                                            </div>
                                            <div class="col-md-6 box">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", required="", class="form-control"';
                                                    echo form_input('Passport_Expiry_Date',set_value('Passport_Expiry_Date'),$opts);
                                                    ?><label for="">Expiry Date</label>
                                                  
                                                </div>
                                            </div>
                                            <div class="col-md-6 box">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", required="", class="form-control"';
                                                    echo form_input('National_Id',set_value('National_Id'),$opts);
                                                    ?><label for=""> Nationial ID  / Adhaar Id </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 box">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", required="",  class="form-control"';
                                                    echo form_input('Tax_Number',set_value('Tax_Number'),$opts);
                                                    ?><label for=""> PAN ID / Tax Card Number</label>
                                                        
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
                                            <div class="col-md-6 box">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", required="", class="form-control"';
                                                    echo form_input('Name_Degree',set_value('Name_Degree'),$opts);
                                                    ?>
                                                        <label >Name of Degree/Certificate</label> 
                                                </div>
                                            </div>
                                            <div class="col-md-6 box">
                                                <div class="form-group">
                                                <?php 
                                                   $opts = 'type="text", required="", class="form-control"';
                                                    echo form_input('University',set_value('University'),$opts);
                                                    ?><label for="">University</label>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6 box">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", required="", class="form-control"';
                                                    echo form_input('Passing_Year',set_value('Passing_Year'),$opts);
                                                    ?><label for="">Year of Passing</label>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6 box">
                                                <div class="form-group">
                                                <?php 
                                                   $opts = 'type="text", required="", class="form-control"';
                                                    echo form_input('RollNumber',set_value('RollNumber'),$opts);
                                                    ?><label for="">Roll Number</label>
                                                    
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
                                            <div class="col-md-6 box">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", placeholder= "Degree/Certificate/Diploma", class="form-control"';
                                                    echo form_input('Name_Degree[]',set_value('Name_Degree[]'),$opts);
                                                    ?>
                                                         
                                                </div>
                                            </div>
                                            <div class="col-md-6 box">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", placeholder= "University/Institute", class="form-control"';
                                                    echo form_input('University[]',set_value('University[]'),$opts);
                                                    ?>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6 box">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", placeholder="  Year of passing", class="form-control"';
                                                    echo form_input('Passing_Year[]',set_value('Passing_Year[]'),$opts);
                                                    ?>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6 box">
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
                                            <div class="col-md-6 box">
                                                <div class="form-group">
                                                <?php 
                                                    $opts = 'type="text", required="", class="form-control"';
                                                    echo form_input('Company_Name',set_value('Company_Name'),$opts);
                                                    ?>    <label for="">Company Name</label>
                                                       </div>
                                            </div>
                                            <div class="col-md-6 box">
                                                <div class="form-group">
                                                <?php 
                                                   $opts = 'type="text", required="", class="form-control"';
                                                    echo form_input('Designation',set_value('Designation'),$opts);
                                                    ?>     <label for="">Designation</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 box">
                                                <div class="form-group">
                                                <?php 
                                                  $opts = 'type="date", required="", class="form-control"';
                                                    echo form_input('Start_date',set_value('Start_date'),$opts);
                                                    ?> <label for="">Start Date</label>
                                                         </div>
                                            </div>
                                            <div class="col-md-3 box">
                                                <div class="form-group">
                                                <?php 
                                                  $opts = 'type="date", required="", class="form-control"';
                                                    echo form_input('End_date',set_value('End_date'),$opts);
                                                    ?> <label for="">End Date</label>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6 box">
                                                <div class="form-group">
                                                <?php 
                                                   $opts = 'type="text", required="", class="form-control"';     
                                                   echo form_input('Exp_WebSite',set_value('Exp_WebSite'),$opts);
                                                    ?> <label for="">Website</label>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-12 box">
                                                <div class="form-group"> 
                                                <?php 
                                                    $opts = 'type="text", required="", class="form-control"';
                                                    echo form_input('Exp_Address',set_value('Exp_Address'),$opts);
                                                    ?> <label for="">Company Address</label>

                                                </div>
                                            </div>
                                            <div class="col-md-3 box">
                                                <div class="form-group">
                                                <?php 
                                                   $opts = 'type="text", required="", class="form-control"';     
                                                   echo form_input('Exp_City',set_value('Exp_City'),$opts);
                                                    ?> <label for="">City</label>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-3 box">
                                                <div class="form-group">
                                                <?php 
                                                   $opts = 'type="text", required="", class="form-control"';     
                                                   echo form_input('Exp_State',set_value('Exp_State'),$opts);
                                                    ?> <label for="">State</label>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6 box">
                                                <div class="form-group">
                                                <?php 
                                                 $opts = 'type="text", required="", class="form-control"';
                                                    echo form_input('Exp_Country',set_value('Exp_Country'),$opts);
                                                    ?> <label for="">Country</label>
                                                    
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
                                        <div class="col-md-6 box">
                                            <div class="form-group">
                                            <?php 
                                                    $opts = 'type="text", required="", class="form-control"';
                                                    echo form_input('Special_Qualification',set_value('Special_Qualification'),$opts);
                                                    ?> <label for="">Special Qualification</label>

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