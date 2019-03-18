<?php
 $this->load->view('includes/header.php');
?>

  <div class="alice-bg section-padding-bottom">
    <div class="container no-gliters">
      <div class="row no-gliters">
        <div class="col">
          <div class="post-container">
            <div class="post-content-wrapper">
              <form action="#" class="job-post-form">
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
                  <h4><i data-feather="plus-circle"></i>Application Form - New Complementary & Alternative Medicine License</h4>
                  <div id="details" class="row">
                    <label class="col-md-3 col-form-label">Personal Details</label>
                    <div class="col-md-9">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Family/SurName">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Father's Name">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Mother's Name">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="date" class="form-control" placeholder="Date of Birth">
                            <small id="emailHelp" class="form-text text-muted">Date of Birth</small>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <select class="form-control">
                              <option>Gender</option>
                              <option>Male</option>
                              <option>Female</option>
                            </select>
                            <i class="fa fa-caret-down"></i>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email Id">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="pnone" class="form-control" placeholder="Your Mobile number">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Address">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="City">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="State">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Country">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Pin Code">
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
                              <input type="text" class="form-control" placeholder="Registration Number">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Medical Council">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="date" class="form-control" placeholder="Year of Registration">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Qualification">
                            </div>
                          </div>
                         
                      </div>
                    </div>
                  </div>
                  <div id="information" class="row">
                    <label class="col-md-3 col-form-label">CAM Speciality</label>
                    <div class="col-md-9">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <select class="form-control">
                              <option>Select Speciality</option>
                              <option>Doctor of Osteopathy</option>
                              <option>Doctor of Medicine with CAM Speciality - Osteopathy</option>
                              <option>Doctor of Medicine with CAM Speciality - Chiropractic</option>
                              <option>Doctor of Medicine with CAM Speciality - Traditional Chinese Medicine </option>
                              <option>Doctor of Medicine with CAM Speciality - Homeopathy</option>
                              <option>Doctor of Medicine with CAM Speciality - Naturopathy </option>
                              <option>Doctor of Medicine with CAM Speciality - Ayurveda</option>
                              <option>Doctor of Medicine with CAM Speciality - Therapeutic Massage</option>
                              <option>Doctor of Medicine with CAM Speciality - Unani</option>
                              <option>Doctor of CAM - Osteopathy</option>
                              <option>Doctor of CAM - Chiropractic</option>
                              <option>Doctor of CAM - Traditional Chinese Medicine </option>
                              <option>Doctor of CAM - Homeopathy</option>
                              <option>Doctor of CAM - Naturopathy </option>
                              <option>Doctor of CAM - Ayurveda</option>
                              <option>Doctor of CAM - Therapeutic Massage</option>
                              <option>Doctor of CAM - Unani</option>
                              <option>Associate Doctor of CAM - Osteopathy</option>
                              <option>Associate Doctor of CAM - Chiropractic</option>
                              <option>Associate Doctor of CAM - Traditional Chinese Medicine </option>
                              <option>Associate Doctor of CAM - Homeopathy</option>
                              <option>Associate Doctor of CAM - Naturopathy </option>
                              <option>Associate Doctor of CAM - Ayurveda</option>
                              <option>Associate Doctor of CAM - Therapeutic Massage</option>
                              <option>Associate Doctor of CAM - Unani</option>
                              <option>CAM Therapist - Traditional Chinese Medicine</option>
                              <option>CAM Therapist - Therapeutic Massage</option>
                            </select>
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
                              <input type="text" class="form-control" placeholder="Passport Number">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Country">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="date" class="form-control" >
                              <small id="emailHelp" class="form-text text-muted">Date of Issue</small>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="date" class="form-control">
                              <small id="emailHelp" class="form-text text-muted">Date of Expiry</small>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="National ID/Adhaar Card ID">
                            </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="PAN/Tax Card Number">
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
                                <input type="text" class="form-control" placeholder="Degree/Certificate/Diploma">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="University/Institute">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <input type="number" class="form-control" placeholder="Year of Passing">
                                <small id="emailHelp" class="form-text text-muted">Year of passing</small>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="Roll number/Id">
                                <small id="text" class="form-text text-muted">Admission number or Roll number</small>
                              </div>
                            </div>
                            <div class="col-md-9 text-right">
                                <div class="add-cv">
                                  <input type="file">Upload File<i data-feather="upload-cloud"></i>
                                </div>
                              </div>
                            
                            
                          </div>
                          <div class=" col-md-12 dropdown header-top-account login-modals text-right">
                            <button title="Title" type="button" data-toggle="modal" data-target="#educationModel">+ Add Education</button>
                            
                          </div>
                         
                        </div>
                      </div>
                 
                      <div id="details" class="row">
                          <label class="col-md-3 col-form-label">Experiance</label>
                          <div class="col-md-9">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Company Name">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Designation">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <input type="date" class="form-control"  >
                                  <small id="date" class="form-text text-muted">Start Date</small>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <input type="date" class="form-control"  >
                                  <small id="text" class="form-text text-muted">End Date</small>
                                </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Full Address">
                                    
                                  </div>
                                </div>
                              <div class="col-md-9 text-right">
                                  <div class="add-cv">
                                    <input type="file">Upload File<i data-feather="upload-cloud"></i>
                                  </div>
                                </div>
                              
                                <div class=" col-md-12 dropdown header-top-account login-modals text-right">
                                    <button title="Title" type="button" data-toggle="modal" data-target="#experienceModel">+ Add Experience</button>
                                    
                                  </div>
                            </div>
                            
                          </div>
                        </div>
                  
                  
                
                  <div id="qualification" class="row">
                    <label class="col-md-3 col-form-label">Special Qualifications</label>
                    <div class="col-md-9">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" class="form-control"  placeholder="Additional Qualifications" >
                          
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
                        <input class="custom-radio" type="checkbox" id="radio-4" name="termsandcondition">
                        <label for="radio-4">
                          <span class="dot"></span> You accepts our <a href="#">Terms and Conditions</a> and <a href="#">Privacy
                            Policy</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label"></label>
                    <div class="col-md-4">
                      <button class="button">Save Application</button>
                    </div>
                    <div class="col-md-4">
                      <button class="button">Pay & Submit</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>

            <?php
include("includes/leftmenu.php");
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
              <p>Add resume or post a job. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus,
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
  <div class="account-entry">
    <div class="modal fade" id="educationModel" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><i data-feather="user"></i>Education</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="#">
                <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Degree/Diploma/Certificate">
                        </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="University/Institute">
                          </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                              <input type="number" class="form-control" placeholder="Year of Passing">
                            </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="Registration/Roll Number">
                              </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="add-cv">
                                    <input type="file"> File<i data-feather="upload-cloud"></i>
                                  </div>
                              </div>
                    </div>
                  </div>
              
          
              <button class="button primary-bg btn-block">Save</button>
            </form>
             
          </div>
        </div>
      </div>
    </div>
    
<!--Experience Model-->
    <div class="modal fade" id="experienceModel" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><i data-feather="user"></i>Experience</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="#">
                  <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Company Name">
                          </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Designation">
                            </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <input type="date" class="form-control" placeholder="Start Date">
                                <small id="emailHelp" class="form-text text-muted">Start Date</small>
                              </div>
                            </div>
                       
                            <div class="col-md-6">
                                <div class="form-group">
                                  <input type="date" class="form-control" placeholder="End Date">
                                  <small id="emailHelp" class="form-text text-muted">End Date</small>
                                </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Full Address">
                                  </div>
                                </div>
                              <div class="col-md-12 mb-4">
                                  <div class="add-cv">
                                      <input type="file"> File<i data-feather="upload-cloud"></i>
                                    </div>
                                </div>
                      </div>
                    </div>
                
            
                <button class="button primary-bg btn-block">Save</button>
              </form>
               
            </div>
          </div>
        </div>
      </div>
  </div>
  <!-- Footer -->
  <?php
 include("includes/footer.php");
?>