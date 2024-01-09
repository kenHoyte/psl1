{{-- @extends('backend.main')

@section('content')


<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mt-5 d-flex justify-content-center ">
                                            <div class="content">
                                                <h5 class="mb-3">Specifications :</h5>
                                        
                                                <div class="table-responsive">
                                                    <table class="table mb-0 table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">Category</th>
                                                                <th scope="row">details</th>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Brand</th>
                                                                <td>JBL</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Color</th>
                                                                <td>Black</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Connectivity</th>
                                                                <td>Bluetooth</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Warranty Summary</th>
                                                                <td>1 Year</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>




@endsection --}}

@extends('backend.main')

@section('content')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Detail</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Invoices</a></li>
                                            <li class="breadcrumb-item active">Detail</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="invoice-title">
                                            <h4 class="float-right font-size-16">Order # 12345</h4>
                                            <div class="mb-4">
                                                <img src="assets/images/psl-logo.png" alt="logo" height="65"/>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <address>
                                                    <strong>Billed To:</strong><br>
                                                    John Smith<br>
                                                    1234 Main<br>
                                                    Apt. 4B<br>
                                                    Springfield, ST 54321
                                                </address>
                                            </div>
                                            <div class="col-sm-6 text-sm-right">
                                                <address class="mt-2 mt-sm-0">
                                                    <strong>Shipped To:</strong><br>
                                                    Kenny Rigdon<br>
                                                    1234 Main<br>
                                                    Apt. 4B<br>
                                                    Springfield, ST 54321
                                                </address>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 mt-3">
                                                <address>
                                                    <strong>Payment Method:</strong><br>
                                                    Visa ending **** 4242<br>
                                                    jsmith@email.com
                                                </address>
                                            </div>
                                            <div class="col-sm-6 mt-3 text-sm-right">
                                                <address>
                                                    <strong>Order Date:</strong><br>
                                                    October 16, 2019<br><br>
                                                </address>
                                            </div>
                                        </div>
                                        <div class="py-2 mt-3">
                                            <h3 class="font-size-15 font-weight-bold">Order summary</h3>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 70px;">No.</th>
                                                        <th>Item</th>
                                                        <th class="text-right">Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>01</td>
                                                        <td>Skote - Bootstrap 4 Admin Dashboard</td>
                                                        <td class="text-right">$499.00</td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>02</td>
                                                        <td>Skote - Bootstrap 4 Landing Template</td>
                                                        <td class="text-right">$399.00</td>
                                                    </tr>

                                                    <tr>
                                                        <td>03</td>
                                                        <td>Veltrix - Bootstrap 4 Admin Template</td>
                                                        <td class="text-right">$499.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="text-right">Sub Total</td>
                                                        <td class="text-right">$1397.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="border-0 text-right">
                                                            <strong>Shipping</strong></td>
                                                        <td class="border-0 text-right">$13.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="border-0 text-right">
                                                            <strong>Total</strong></td>
                                                        <td class="border-0 text-right"><h4 class="m-0">$1410.00</h4></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="d-print-none">
                                            <div class="float-right">
                                                <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light mr-1"><i class="fa fa-print"></i></a>
                                                <a href="invoices-detail.html#" class="btn btn-primary w-md waves-effect waves-light">Send</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Skote.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Design & Develop by Themesbrand
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-right">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
       

    </body>
</html>
@endsection