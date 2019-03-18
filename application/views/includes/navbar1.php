
<!-- <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li> -->
<?php 
    foreach($navitems as $navs){

        echo "<li class=\"nav-item text-dark active\"><a class=\"nav-link\" href=\" $navs[slug]\"> $navs[title]</a></li>";
      
    }
   
?>
 
 <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="menu-item active"><a title="Home" href="home-1.html">Home</a></li>
                <li class="menu-item dropdown">
                  <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Jobs</a>
                  <ul class="dropdown-menu">
                    <li class="menu-item"><a href="job-listing.html">Job Listing</a></li>
                    <li class="menu-item"><a href="job-listing-with-map.html">Job Listing With Map</a></li>
                    <li class="menu-item"><a href="job-details.html">Job Details</a></li>
                    <!-- <li class="menu-item"><a  href="post-job.html">Post Job</a></li> -->
                  </ul>
                </li>
                <li class="menu-item dropdown">
                  <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true"
                    aria-expanded="false">Candidates</a>
                  <ul class="dropdown-menu">
                    <li class="menu-item"><a href="candidate.html">Candidate Listing</a></li>
                    <li class="menu-item"><a href="candidate-details.html">Candidate Details</a></li>
                    <li class="menu-item"><a href="add-resume.html">Add Resume</a></li>
                  </ul>
                </li>
                <li class="menu-item dropdown">
                  <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true"
                    aria-expanded="false">Employers</a>
                  <ul class="dropdown-menu">
                    <li class="menu-item"><a href="employer-listing.html">Employer Listing</a></li>
                    <li class="menu-item"><a href="employer-details.html">Employer Details</a></li>
                    <li class="menu-item"><a href="employer-dashboard-post-job.html">Post a Job</a></li>
                  </ul>
                </li>
                <li class="menu-item dropdown">
                  <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Dashboard</a>
                  <ul class="dropdown-menu">
                    <li class="menu-item dropdown">
                      <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Candidate
                        Dashboard</a>
                      <ul class="dropdown-menu">
                        <li class="menu-item"><a href="dashboard.html">Dashboard</a></li>
                        <li class="menu-item"><a href="dashboard-edit-profile.html">Edit Profile</a></li>
                        <li class="menu-item"><a href="add-resume.html">Add Resume</a></li>
                        <li class="menu-item"><a href="resume.html">Resume</a></li>
                        <li class="menu-item"><a href="edit-resume.html">Edit Resume</a></li>
                        <li class="menu-item"><a href="dashboard-bookmark.html">Bookmarked</a></li>
                        <li class="menu-item"><a href="dashboard-applied.html">Applied</a></li>
                        <li class="menu-item"><a href="dashboard-pricing.html">Pricing</a></li>
                        <li class="menu-item"><a href="dashboard-message.html">Message</a></li>
                        <li class="menu-item"><a href="dashboard-alert.html">Alert</a></li>
                      </ul>
                    </li>
                    <li class="menu-item dropdown">
                      <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Employer
                        Dashboard</a>
                      <ul class="dropdown-menu">
                        <li class="menu-item"><a href="employer-dashboard.html">Employer Dashboard</a></li>
                        <li class="menu-item"><a href="employer-dashboard-edit-profile.html">Edit Profile</a></li>
                        <li class="menu-item"><a href="employer-dashboard-manage-candidate.html">Manage Candidate</a></li>
                        <li class="menu-item"><a href="employer-dashboard-manage-job.html">Manage Job</a></li>
                        <li class="menu-item"><a href="employer-dashboard-message.html">Dashboard Message</a></li>
                        <li class="menu-item"><a href="employer-dashboard-pricing.html">Dashboard Pricing</a></li>
                        <li class="menu-item"><a href="employer-dashboard-post-job.html">Post Job</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="menu-item dropdown">
                  <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true"
                    aria-expanded="false">Pages</a>
                  <ul class="dropdown-menu">
                    <li class="menu-item"><a href="about-us.html">About Us</a></li>
                    <li class="menu-item"><a href="how-it-work.html">How It Works</a></li>
                    <li class="menu-item"><a href="pricing.html">Pricing Plan</a></li>
                    <li class="menu-item"><a href="faq.html">FAQ</a></li>
                    <li class="menu-item dropdown">
                      <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">News
                        &amp; Advices</a>
                      <ul class="dropdown-menu">
                        <li class="menu-item"><a href="blog.html">News</a></li>
                        <li class="menu-item"><a href="blog-grid.html">News Grid</a></li>
                        <li class="menu-item"><a href="blog-details.html">News Details</a></li>
                      </ul>
                    </li>
                    <li class="menu-item"><a href="checkout.html">Checkout</a></li>
                    <li class="menu-item"><a href="payment-complete.html">Payment Complete</a></li>
                    <li class="menu-item"><a href="invoice.html">Invoice</a></li>
                    <li class="menu-item"><a href="terms-and-condition.html">Terms And Condition</a></li>
                  </ul>
                </li>
                <li class="menu-item"><a href="contact.html">Contact Us</a></li>
                <!-- <li class="menu-item post-job"><a href="post-job.html"><i class="fas fa-plus"></i>Post a Job</a></li> -->
              </ul>
            </div>
