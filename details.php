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
    <link rel="stylesheet" href="assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css">

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
            
                 <div class="row mt-3">
                    <nav>
                        <h4>Canvas ICT</h4>
                    </nav>
                     <div class="col-4 col-md-4">
                       <div class="row my-3">
                        <h5>Business Details </h5>
                        <div class="col-md-6 col-6  ">
                            <div class="client-detail py-3 text-end"> 
                        
                            <p class=" bg-gray-200 p-2 my-2">Legal Name</p>
                            <p class=" bg-gray-200 p-2 my-2">ABN</p>
                            <p class=" bg-gray-200 p-2 my-2">ACN</p>
                            <p class=" bg-gray-200 p-2 my-2">Email :</p>
                            <p class=" bg-gray-200 p-2 my-2">Phone</p>
                            <p class=" bg-gray-200 p-2 my-2">Status</p>
                            <p class=" bg-gray-200 p-2 my-2">Xero Orginazation</p>
                            <p class=" bg-gray-200 p-2 my-2">eBranding</p>
                            <p class=" bg-gray-200 p-2 my-2">Business Notes</p>
                            <p class=" bg-gray-200 p-2 my-2">Payroll Company Notes</p>
                            
                            
                        </div>
                        </div>
                        <div class="col-md-6 col-6 ">
                                <div class="client-detail py-3">     
                                <p class="  p-2 my-2 text-nowrap"> CANVAS ICT PTY LTD </p>
                                <p class="  p-2 my-2">41 062 067 878 <span class="text-white bg-success rounded-circle"><i data-feather="check" class="icon-sm" ></i></span></p>
                                <p class="  p-2 my-2">655 222 780</p>
                                <p class="  p-2 my-2">Payroll@hitechaust.com </p>
                                <p class="  p-2 my-2"> - </p>
                                <p class="  p-2 my-2">Enabled <span class="text-white bg-success rounded-circle"><i data-feather="check" class="icon-sm" ></i></span></p>
                                <p class="  p-2 my-2">Canvas ICT pty Ltd </p>
                                <p class="  p-2 my-2"> Canvas ICT </p>
                                <p class="  p-2 my-2"> - </p>
                                <p class="  p-2 my-2"> - </p>
                                
                            </div>
                        </div>
                       </div>
                    </div>
                    <div class="col-4 col-md-4">
                        <div class="row my-3">
                         <h5>Default Super Fund </h5>
                         <div class="col-md-6 col-6  ">
                             <div class="client-detail py-3 text-end"> 
                         
                             <p class=" bg-gray-200 p-2 my-2"> Name</p>
                             <p class=" bg-gray-200 p-2 my-2">USI</p>
                             <p class=" bg-gray-200 p-2 my-2">ABN</p>
   
                         </div>
                         </div>
                         <div class="col-md-6 col-6 ">
                                 <div class="client-detail py-3">     
                                 <p class="  p-2 my-2 text-nowrap "> Australian Super</p>
                                 <p class="  p-2 my-2"> STA0100AU </p>
                                 <p class="  p-2 my-2">65 714 394 898  <span class="text-white bg-success rounded-circle"><i data-feather="check" class="icon-sm" ></i></span> </p>
                                    
                             </div>
                         </div>
                        </div>
                     </div>
                     <div class="col-4 col-md-4">
                        <div class="row my-3">
                         <h5>Payroll Company </h5>
                         <div class="col-md-6 col-6  ">
                             <div class="client-detail py-3 text-end"> 
                         
                             <p class=" bg-gray-200 p-2 my-2">Legal Name</p>
                             <p class=" bg-gray-200 p-2 my-2">ABN</p>
                             <p class=" bg-gray-200 p-2 my-2">ACN</p>
                             <p class=" bg-gray-200 p-2 my-2">TFN:</p>
                             <p class=" bg-gray-200 p-2 my-2">Invoice Due Date</p>
                             <p class=" bg-gray-200 p-2 my-2 text-nowrap">Payment Term (days)</p>
                             <p class=" bg-gray-200 p-2 my-2">Status</p>
                             <p class=" bg-gray-200 p-2 my-2">Xero Contact Name </p>
                            
                         </div>
                         </div>
                         <div class="col-md-6 col-6 ">
                                 <div class="client-detail py-3">     
                                 <p class="  p-2 my-2 text-nowrap ">CANVAS ICT PTY LTD</p>
                                 <p class="  p-2 my-2 ">41 062 067 878 <span class="text-white bg-success rounded-circle"><i data-feather="check" class="icon-sm" ></i></span></p>
                                 <p class="  p-2 my-2">655 222 780</p>
                                 <p class="  p-2 my-2">Payroll@hitechaust.com</p>
                                 <p class="  p-2 my-2"> - </p>
                                 <p class="  p-2 my-2">Enabled</p>
                                 <p class="  p-2 my-2">Canvas ICT pty Ltd </p>
                                 <p class="  p-2 my-2"> Canvas Payroll </p>
                                
                                 
                             </div>
                         </div>
                        </div>
                     </div>
                 </div>
                 <nav class="page-breadcrumb">
                    <h4>Pay Sechedule</h4>
                </nav>
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="form-check">
                                      <label class="form-check-label" for="termsCheck">
                                        Show Active Only
                                      </label>
                                      <input type="checkbox" class="form-check-input" name="terms_agree" id="termsCheck">
                                    </div>
                                  </div>
                                <div class="table-responsive">
                                    <table id="dataTableExample" class="table">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Payment Frequency</th>
                                            <th>Strat Date</th>
                                            <th>Status</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Fortnightly</td>
                                            <td>Weekly</td>
                                            <td>Mon 16 jan, 2023</td>
                                            <td>Active</td>
                                              
                                        </tr> 
                                        <tr>
                                            <td>Fortnightly</td>
                                            <td>Weekly</td>
                                            <td>Mon 16 jan, 2023</td>
                                            <td>Active</td>
                                              
                                        </tr> 

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
        

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
<script src="assets/js/data-table.js"></script>
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
    <script src="assets/js/data-table.js"></script>
	<!-- End custom js for this page -->

	<!-- inject:js -->
	<script src="assets/vendors/feather-icons/feather.min.js"></script>
	<script src="assets/js/template.js"></script>
	<!-- endinject -->

</body>
</html>   
