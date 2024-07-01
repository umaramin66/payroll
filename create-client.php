<?php
session_start();
// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
    
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>CANVAS ICT</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="assets/vendors/core/core.css">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/flatpickr/flatpickr.min.css">
    <!-- End plugin css for this page -->
    <!-- <link rel="stylesheet" href="assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css"> -->

    <!-- inject:css -->
    <link rel="stylesheet" href="assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/demo1/style.css">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>
<body>
<div class="main-wrapper">

    <!-- partial:partials/_sidebar.html -->
    <?php include('sidebar.php') ?>

    <!-- partial -->

    <div class="page-wrapper">

        <!-- partial:partials/_navbar.html -->
        <nav class="navbar">

        </nav>
        <!-- partial -->
        <div class="page-content">
            <nav class="page-breadcrumb">
                <h4 class="">Create Client</h4>
            </nav>
            <div class="col-8">
            <ul class="nav nav-tabs nav-tabs-line" id="lineTab" role="tablist">
                <div class="col-12 d-flex justify-content-between">
              <li class="nav-item">
                <a class="nav-link active" id="home-line-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"> Client Details</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-line-tab" data-bs-toggle="tab" href="#schedule" role="tab" aria-controls="schedule" aria-selected="false"> Schedule</a>
              </li>
              </div>
            </ul>
         </div>
              <div class="tab-content mt-3" id="lineTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-line-tab">
               
                    <div class="row">
                       <div class="col-lg-8 col-8 grid-margin stretch-card">
                           <div class="card">
                               <div class="card-body">  
                               <form id="clientForm">
                        <div class="mb-3">
                            <label for="summary" class="form-label">Summary</label>
                            <!-- <input id="summary" class="form-control" name="summary" type="text" placeholder="Summary"> -->
                        </div>
                        <div class="mb-3">
                            <label class="mb-2">Name</label>
                            <input id="name" class="form-control" name="name" type="text" placeholder="Name*">
                            <span id="nameError" class="text-danger"></span>
                        </div>
                        <div class="mb-3">
                            <label class="mb-2">Abn</label>
                            <input id="abn" class="form-control" name="abn" type="text" placeholder="ABN*">
                            <span id="abnError" class="text-danger"></span>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="invoiceDateTypeSelect" class="form-label">Invoice Date Type</label>
                                    <select class="form-select" name="invoice_date_type" id="invoiceDateTypeSelect">
                                        <option selected disabled class="text-muted">Select Invoice Date Type</option>
                                        <option value="issue_date">Invoice Issue Date</option>
                                        <option value="due_date">Due Date</option>
                                        <option value="payment_date">Payment Date</option>
                                        <option value="delivery_date">Delivery Date</option>
                                        <option value="receipt_date">Receipt Date</option>
                                        <option value="posting_date">Posting Date</option>
                                    </select>
                                    <span id="invoiceDateTypeSelectError" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="paymentTermsSelect" class="form-label">Payment Terms</label>
                                    <select class="form-select" name="payment_terms" id="paymentTermsSelect">
                                        <option selected disabled class="text-muted">Payment Terms (days)</option>
                                        <option value="net_7">Net 7</option>
                                        <option value="net_10">Net 10</option>
                                        <option value="net_15">Net 15</option>
                                        <option value="net_30">Net 30</option>
                                        <option value="net_45">Net 45</option>
                                        <option value="net_60">Net 60</option>
                                        <option value="net_90">Net 90</option>
                                    </select>
                                    <span id="paymentTermsSelectError" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="statusSelect" class="form-label">Status</label>
                                    <select class="form-select" name="status" id="statusSelect">
                                        <option selected disabled class="text-muted">Select Status</option>
                                        <option value="draft">Draft</option>
                                        <option value="sent">Sent</option>
                                        <option value="paid">Paid</option>
                                        <option value="overdue">Overdue</option>
                                        <option value="canceled">Canceled</option>
                                    </select>
                                    <span id="statusSelectError" class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="mb-2">Contract Name</label>
                            <input id="contract_name" class="form-control" name="contract_name" type="text" placeholder="Contract Name*">
                            <span id="contract_nameError" class="text-danger"></span>
                        </div>
                        <div class="mb-3">
                            <label class="mb-2">Email</label>
                            <input id="email" class="form-control" name="email" type="email" placeholder="Email*">
                            <span id="emailError" class="text-danger"></span>
                        </div>
                        <div class="mb-3">
                            <label class="mb-2">Description</label>
                            <textarea id="description" class="form-control" name="description" maxlength="100" rows="8" placeholder="This textarea has a limit of 100 chars."></textarea>
                            <span id="descriptionError" class="text-danger"></span>
                        </div>
                        <div class="mb-3 d-flex justify-content-end">
                            <input class="btn btn-primary" type="submit" value="Next">
                        </div>
                    </form>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>           
                    </div>

            <div class="tab-pane fade" id="schedule" role="tabpanel" aria-labelledby="profile-line-tab">
              <nav class="page-breadcrumb">
                 
              </nav>
              <div class="row">
                <div class="col-lg-8 col-8 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">  
                        <form id="scheduleForm">
                                <h4 class="my-3">Invoice Schedule</h4>
                                <div class="mb-3">
                                    <label class="mb-2">Schedule</label>
                                    <input id="schedule" class="form-control" name="schedule" type="text" placeholder="Schedule">
                                    <span id="scheduleError" class="text-danger"></span>
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2">ABN</label>
                                    <input id="abn" class="form-control" name="abn" type="text" placeholder="ABN*">
                                    <span id="abnError" class="text-danger"></span>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label for="frequencySelect" class="form-label">Frequency</label>
                                            <select class="form-select" name="frequency" id="frequencySelect">
                                                <option selected disabled class="text-muted">Select Frequency</option>
                                                <option>Daily</option>
                                                <option>Weekly</option>
                                                <option>Bi-Weekly</option>
                                                <option>Monthly</option>
                                                <option>Quarterly</option>
                                                <option>Annually</option>
                                            </select>
                                            <span id="frequencyError" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label for="startSelect" class="form-label">Start</label>
                                            <select class="form-select" name="start" id="startSelect">
                                                <option selected disabled class="text-muted">Select Start</option>
                                                <option>Now</option>
                                                <option>Tomorrow</option>
                                                <option>This Week</option>
                                                <option>Next Week</option>
                                                <option>This Month</option>
                                                <option>Next Month</option>
                                            </select>
                                            <span id="startError" class="text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <textarea id="maxlength-textarea" class="form-control" id="defaultconfig-4" maxlength="100" rows="8" placeholder="This textarea has a limit of 100 chars."></textarea>
                                </div>
                                <div class="mb-3 d-flex justify-content-end">
                                    <input class="btn btn-primary me-3" type="submit" value="Back">
                                    <input class="btn btn-primary" type="submit" value="Submit">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>  
         </div>
      </div>
              
    </div>
  </div>  
</div>
     
        <!-- partial:partials/_footer.html -->
        <?php include('footer.php') ?>
        <!-- partial -->

    </div>
</div>

<!-- core:js -->
<script src="assets/vendors/core/core.js"></script>
<!-- endinject -->
<script src="assets/vendors/core/core.js"></script>
<!-- Plugin js for this page -->
<script src="assets/vendors/flatpickr/flatpickr.min.js"></script>
<script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
<!-- End plugin js for this page -->

<!-- inject:js -->
<script src="assets/vendors/feather-icons/feather.min.js"></script>
<script src="assets/js/template.js"></script>
<!-- endinject -->

<!-- Custom js for this page -->
<script src="assets/js/dashboard-light.js"></script>
<!-- End custom js for this page -->

<!-- endinject -->

<!-- Plugin js for this page -->
<script src="assets/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
<!-- End plugin js for this page -->

<!-- inject:js -->
<script src="assets/vendors/feather-icons/feather.min.js"></script>
<script src="assets/js/template.js"></script>
<!-- endinject -->

<!-- Custom js for this page -->
<!-- <script src="assets/js/data-table.js"></script> -->
<!-- End custom js for this page -->
<!-- core:js -->
<script src="assets/vendors/core/core.js"></script>
<!-- endinject -->

<!-- Plugin js for this page -->
<script src="assets/vendors/flatpickr/flatpickr.min.js"></script>
<script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
<!-- End plugin js for this page -->

<!-- inject:js -->
<script src="assets/vendors/feather-icons/feather.min.js"></script>
<script src="assets/js/template.js"></script>
<!-- endinject -->

<!-- Custom js for this page -->
<script src="assets/js/dashboard-light.js"></script>
<!-- End custom js for this page -->
	<!-- Custom js for this page -->
    <!-- <script src="assets/js/data-table.js"></script> -->
	<!-- End custom js for this page -->

	<!-- inject:js -->
	<script src="assets/vendors/feather-icons/feather.min.js"></script>
	<script src="assets/js/template.js"></script>
	<!-- endinject -->


    <script>
        function validateClientForm() {
            let isValid = true;
            const requiredFields = ['name', 'abn', 'invoiceDateTypeSelect', 'paymentTermsSelect', 'statusSelect', 'contract_name', 'email'];
            requiredFields.forEach(field => {
                const input = document.getElementById(field);
                const errorSpan = document.getElementById(field + 'Error');
                if (input.value.trim() === '') {
                    errorSpan.textContent = 'This field is required';
                    isValid = false;
                } else {
                    errorSpan.textContent = '';
                }
            });

            const email = document.getElementById('email');
            const emailError = document.getElementById('emailError');
            const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
            if (!email.value.match(emailPattern)) {
                emailError.textContent = 'Invalid email address';
                isValid = false;
            } else {
                emailError.textContent = '';
            }

            return isValid;
        }
        $(document).ready(function() {
            $('#clientForm').on('submit', function(event) {
                event.preventDefault();
                if (validateClientForm()) {
                    $.ajax({
                        url: 'assets/ajax/create_client.php',
                        method: 'POST',
                        data: $(this).serialize(),
                        success: function(data) {
                            alert(data);
                            $('#clientForm')[0].reset();
                            // Switch to the Schedule tab
                            $('#profile-line-tab').tab('show');
                        },
                        error: function() {
                            alert('There was an error processing your request.');
                        }
                    });
                }
            });

            $('#scheduleForm').on('submit', function(event) {
                event.preventDefault();
                // Validate schedule form fields if needed
                // For example:
                // const isValid = validateScheduleForm();
                
                // if (isValid) {
                $.ajax({
                    url: 'assets/ajax/client_invoice_schedule.php',
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function(data) {
                        alert(data);
                        // Optionally, reset the form after successful submission
                        $('#scheduleForm')[0].reset();
                    },
                    error: function() {
                        alert('There was an error processing your request.');
                    }
                });
                // }
            });
        });
    </script>

</body>
</html>   
