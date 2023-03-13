<?php
require("controller/DashbordController.php");
$dashbord = new Dashbord();
require('template/header.php');

?>

<div class="container-fluid">
    <!-- breadcum -->
    <div class="db-breadcrumb">
        <h4 class="breadcrumb-title">Dashboard</h4>
        <ul class="db-breadcrumb-list">
            <li>
                <a href="#"><i class="fa fa-home"></i>Home</a>
            </li>
            <li>Dashboard</li>
        </ul>
    </div>
    <!--Start-sparklinedash-widget -->
    <div id="sparkline-widgets">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="white-box analytics-info">
                    <h4 class="box-title">All Orders</h4>
                    <ul class="list-inline two-part">
                        <li>
                            <div id="sparklinedash-widget-1"></div>
                        </li>
                        <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-purple">995</span></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="white-box analytics-info">
                    <h4 class="box-title">Processed Orders</h4>
                    <ul class="list-inline two-part">
                        <li>
                            <div id="sparklinedash-widget-2"></div>
                        </li>
                        <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-success">989</span></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="white-box analytics-info">
                    <h4 class="box-title">Pending Orders</h4>
                    <ul class="list-inline two-part">
                        <li>
                            <div id="sparklinedash-widget-3"></div>
                        </li>
                        <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">85</span></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="white-box analytics-info">
                    <h4 class="box-title">Rejected Orders</h4>
                    <ul class="list-inline two-part">
                        <li>
                            <div id="sparklinedash-widget-4"></div>
                        </li>
                        <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-danger">5</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End-sparklinedash-widget -->
    <div class="row">
        <div class="col-md-6">
            <div class="title">
                <h3 class="title-text">Line Chart</h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="title">
                <h3 class="title-text">Bar Chart</h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <canvas class="embed-responsive-item" id="barChartDemo"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="title">
                <h3 class="title-text">Recent Orders</h3>
                <div class="widget-content">
                    <div class="table-responsive">
                        <table class="table f-border-none">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="th-content">Customer</div>
                                    </th>
                                    <th>
                                        <div class="th-content">Product</div>
                                    </th>
                                    <th>
                                        <div class="th-content">Invoice</div>
                                    </th>
                                    <th>
                                        <div class="th-content th-heading">Price</div>
                                    </th>
                                    <th>
                                        <div class="th-content">Status</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="td-content customer-name"><img src="assets/images/pic.jpg" alt="avatar" />Andy King</div>
                                    </td>
                                    <td>
                                        <div class="td-content product-brand">Nike Sport</div>
                                    </td>
                                    <td>
                                        <div class="td-content">#76894</div>
                                    </td>
                                    <td>
                                        <div class="td-content pricing"><span class="">$88.00</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="badge outline-badge-primary">Shipped</span></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="td-content customer-name"><img src="assets/images/pic.jpg" alt="avatar" />Irene Collins</div>
                                    </td>
                                    <td>
                                        <div class="td-content product-brand">Speakers</div>
                                    </td>
                                    <td>
                                        <div class="td-content">#75844</div>
                                    </td>
                                    <td>
                                        <div class="td-content pricing"><span class="">$84.00</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="badge outline-badge-success">Paid</span></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="td-content customer-name"><img src="assets/images/pic.jpg" alt="avatar" />Laurie Fox</div>
                                    </td>
                                    <td>
                                        <div class="td-content product-brand">Camera</div>
                                    </td>
                                    <td>
                                        <div class="td-content">#66894</div>
                                    </td>
                                    <td>
                                        <div class="td-content pricing"><span class="">$126.04</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="badge outline-badge-danger">Pending</span></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="td-content customer-name"><img src="assets/images/pic.jpg" alt="avatar" />Luke Ivory</div>
                                    </td>
                                    <td>
                                        <div class="td-content product-brand">Headphone</div>
                                    </td>
                                    <td>
                                        <div class="td-content">#46894</div>
                                    </td>
                                    <td>
                                        <div class="td-content pricing"><span class="">$56.07</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="badge outline-badge-success">Paid</span></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="td-content customer-name"><img src="assets/images/pic.jpg" alt="avatar" />Ryan Collins</div>
                                    </td>
                                    <td>
                                        <div class="td-content product-brand">Sport</div>
                                    </td>
                                    <td>
                                        <div class="td-content">#89891</div>
                                    </td>
                                    <td>
                                        <div class="td-content pricing"><span class="">$108.09</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="badge outline-badge-primary">Shipped</span></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="td-content customer-name"><img src="assets/images/pic.jpg" alt="avatar" />Sonia Shaw</div>
                                    </td>
                                    <td>
                                        <div class="td-content product-brand">Watch</div>
                                    </td>
                                    <td>
                                        <div class="td-content">#76844</div>
                                    </td>
                                    <td>
                                        <div class="td-content pricing"><span class="">$110.00</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="badge outline-badge-success">Paid</span></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="widget widget-transactions">
                <div class="widget-heading mb-10">
                    <h5 class="">Transactions</h5>
                </div>
                <div class="widget-content">
                    <div class="transactions-list">
                        <div class="t-item">
                            <div class="t-company-name">
                                <div class="t-icon">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                        </svg>
                                    </div>
                                </div>
                                <div class="t-name">
                                    <h4>Electricity Bill</h4>
                                    <p class="meta-date">4 Aug 1:00PM</p>
                                </div>
                            </div>
                            <div class="t-rate rate-dec">
                                <p>
                                    <span>-$16.44</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <polyline points="19 12 12 19 5 12"></polyline>
                                    </svg>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="transactions-list">
                        <div class="t-item">
                            <div class="t-company-name">
                                <div class="t-icon">
                                    <div class="avatar avatar-xl">
                                        <span class="avatar-title rounded-circle">SP</span>
                                    </div>
                                </div>
                                <div class="t-name">
                                    <h4>Shaun Park</h4>
                                    <p class="meta-date">4 Aug 1:00PM</p>
                                </div>
                            </div>
                            <div class="t-rate rate-inc">
                                <p>
                                    <span>+$66.44</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up">
                                        <line x1="12" y1="19" x2="12" y2="5"></line>
                                        <polyline points="5 12 12 5 19 12"></polyline>
                                    </svg>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="transactions-list">
                        <div class="t-item">
                            <div class="t-company-name">
                                <div class="t-icon">
                                    <div class="avatar avatar-xl">
                                        <span class="avatar-title rounded-circle">AD</span>
                                    </div>
                                </div>
                                <div class="t-name">
                                    <h4>Amy Diaz</h4>
                                    <p class="meta-date">4 Aug 1:00PM</p>
                                </div>
                            </div>
                            <div class="t-rate rate-inc">
                                <p>
                                    <span>+$66.44</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up">
                                        <line x1="12" y1="19" x2="12" y2="5"></line>
                                        <polyline points="5 12 12 5 19 12"></polyline>
                                    </svg>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="transactions-list">
                        <div class="t-item">
                            <div class="t-company-name">
                                <div class="t-icon">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                        </svg>
                                    </div>
                                </div>
                                <div class="t-name">
                                    <h4>Netflix</h4>
                                    <p class="meta-date">4 Aug 1:00PM</p>
                                </div>
                            </div>
                            <div class="t-rate rate-dec">
                                <p>
                                    <span>-$32.00</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <polyline points="19 12 12 19 5 12"></polyline>
                                    </svg>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="transactions-list">
                        <div class="t-item">
                            <div class="t-company-name">
                                <div class="t-icon">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                        </svg>
                                    </div>
                                </div>
                                <div class="t-name">
                                    <h4>Netflix</h4>
                                    <p class="meta-date">4 Aug 1:00PM</p>
                                </div>
                            </div>
                            <div class="t-rate rate-dec">
                                <p>
                                    <span>-$32.00</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <polyline points="19 12 12 19 5 12"></polyline>
                                    </svg>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?php
            require('template/footer.php');
            ?>