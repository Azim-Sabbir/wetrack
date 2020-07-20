@extends('layouts.app')
@section('page_name') Users @endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="/">Home</a>
</li>
<li class="breadcrumb-item"><a href="/">Users</a>
</li>
<li class="breadcrumb-item active">Track
</li>
@endsection
@section('content')
<div class="card-content">
                                    <div class="row">
                                        <div class="col-xl-9 col-lg-12">
                                            <div id="world-map-markers" class="height-500"></div>
                                        </div>
                                        <div class="col-xl-3 col-lg-12">
                                            <div class="card-body">
                                                <h4 class="card-title pt-1 text-center">Sales All Over The World</h4>
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-4 col-sm-12 pl-1">
                                                        <div class="media">
                                                            <div class="media-body">
                                                                <span class="text-bold-500">Total Orders <i class="feather icon-arrow-down warning"></i> <span class="warning">4.27%</span></span>
                                                                <h2 class="mb-0">789</h2>
                                                            </div>
                                                            <div class="media-right media-top pr-2">
                                                                <i class="icon-cart font-large-1"></i>
                                                            </div>
                                                        </div>
                                                        <div id="map-total-orders" class="height-100"></div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-4 col-sm-12">
                                                        <div class="media">
                                                            <div class="media-body">
                                                                <span class="text-bold-500">Total Profit <i class="feather icon-arrow-up success"></i> <span class="teal accent-3">6.89%</span></span>
                                                                <h2 class="mb-0">$47.8K</h2>
                                                            </div>
                                                            <div class="media-right media-top pr-2">
                                                                <i class="icon-dollar font-large-1"></i>
                                                            </div>
                                                        </div>
                                                        <div id="map-total-profit" class="height-100"></div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-4 col-sm-12">
                                                        <div class="sales">
                                                            <div class="sales-today mb-1">
                                                                <p class="m-0">Today <span class="sucess float-right"><i class="feather icon-arrow-up success"></i> 6.89%</span></p>
                                                                <div class="progress mt-1 mb-0" style="height: 7px;">
                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <div class="sales-yesterday">
                                                                <p class="m-0">Yesterday <span class="warning float-right"><i class="feather icon-arrow-down warning"></i> 4.18%</span></p>
                                                                <div class="progress mt-1 mb-0" style="height: 7px;">
                                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
@endsection