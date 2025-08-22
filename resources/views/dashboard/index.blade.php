@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card bg-primary border-0 rounded-3 welcome-box mb-4">
            <div class="card-body p-4">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <div class="border-bottom position-relative top-5">
                            <h3 class="text-white fw-semibold mb-1">Good Morning, <span class="text-danger-div">Olivia!</span></h3>
                            <p class="text-light">Here's what's happening with your store today.</p>
                        </div>

                        <div class="d-flex align-items-center flex-wrap gap-4 gap-xxl-5">
                            <div class="d-flex align-items-center welcome-status-item">
                                <div class="flex-shrink-0">
                                    <i class="material-symbols-outlined">shopping_bag</i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="text-white fw-semibold mb-0">86 New orders</h5>
                                    <p class="text-light">Awaiting processing</p>
                                </div>
                            </div>

                            <div class="d-flex align-items-center welcome-status-item">
                                <div class="flex-shrink-0">
                                    <i class="material-symbols-outlined icon-bg">chat_error</i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="text-white fw-semibold mb-0">35 Products</h5>
                                    <p class="text-light">Out of stock</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="welcome-img text-center text-sm-end mt-4 mt-sm-0">
                            <img src="assets/images/welcome.png" alt="welcome">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card bg-white border-0 rounded-3 mb-4">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-3 mb-lg-30">
                    <h3 class="mb-0">Total Sales</h3>
                    <select class="form-select month-select form-control" aria-label="Default select example">
                        <option selected>Monthly</option>
                        <option value="1">Weekly</option>
                        <option value="2">Today</option>
                        <option value="3">Yearly</option>
                    </select>
                </div>

                <div style="margin-bottom: -15px; margin-left: -10px; margin-top: -10px;">
                    <div id="top_sales"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-12">
                <div class="card bg-white border-0 rounded-3 mb-4 stats-box">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between flex-wrap gap-2">
                            <div>
                                <div class="d-flex">
                                    <span>Total Orders</span>
                                    <span class="count">-7.6%</span>
                                </div>
                                <h3 class="fs-20 mt-1 mb-0">$72,458</h3>
                            </div>
                            <span class="fs-12">Last 7 days</span>
                        </div>
                        <div style="max-width: 153px; margin: auto; margin-top: -27px;  margin-bottom: -18px;">
                            <div id="total_orders1"></div>
                        </div>
                        <ul class="ps-0 mb-0 list-unstyled stats-list">
                            <li class="d-flex justify-content-between align-items-center">
                                <span class="title">Completed</span>
                                <span>62%</span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center">
                                <span class="title">Pending payment</span>
                                <span>38%</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-12">
                <div class="card bg-white border-0 rounded-3 mb-4 stats-box">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between flex-wrap gap-2">
                            <div>
                                <div class="d-flex">
                                    <span>Total Customers</span>
                                    <span class="count up">+5.4</span>
                                </div>
                                <h3 class="fs-20 mt-1 mb-0">1,528</h3>
                            </div>
                            <span class="fs-12">Last 7 days</span>
                        </div>
                        <div style="max-width: 290px; margin: auto; margin-top: -37px; margin-bottom: -24px;">
                            <div id="total_customers"></div>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap gap-2">
                            <span class="fs-12">1 June</span>
                            <span class="fs-12">7 June</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-12">
                <div class="card bg-white border-0 rounded-3 mb-4 stats-box">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between flex-wrap gap-2">
                            <div>
                                <div class="d-flex">
                                    <span>Total Revenue</span>
                                    <span class="count up">+10%</span>
                                </div>
                                <h3 class="fs-20 mt-1 mb-0">$165,458</h3>
                            </div>
                            <span class="fs-12">Last 30 days</span>
                        </div>
                        <div style="max-width: 196px; margin: auto; margin-top: -24px; margin-bottom: -15px;">
                            <div id="total_evenue"></div>
                        </div>
                        <ul class="ps-0 mb-0 list-unstyled stats-list">
                            <li class="d-flex justify-content-between align-items-center">
                                <span class="title">Fashion</span>
                                <span>75%</span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center">
                                <span class="title">Others</span>
                                <span>25%</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection