@extends('app')
@section('content')
<div id="content">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-lg-12 col-xl-10">
                <div class="row has-sidebar">
                    <div class="col-md-5 col-lg-4 col-xl-4 col-sidebar">
                        <div id="sidebar" class="sidebar-left">
                            <div class="sidebar_inner">
                                <div class="list-group no-border list-unstyled">
                                    <span class="list-group-item heading">Manage Listings</span>
                                    <a href="my_listing_add.html" class="list-group-item active"><i class="fa fa-fw fa-plus-square-o"></i> Add Listing</a>
                                    <a href="my_bookmarked_listings.html" class="list-group-item d-flex justify-content-between align-items-center"><span><i class="fa fa-fw fa-bookmark-o"></i> Bookmarked Listing</span>
                                        <span class="badge badge-primary badge-pill">10</span>
                                    </a>
                                    <a href="my_listings.html" class="list-group-item d-flex justify-content-between align-items-center"><span><i class="fa fa-fw fa-bars"></i> My Listings</span>
                                        <span class="badge badge-primary badge-pill">7</span>
                                    </a>
                                    <span class="list-group-item heading">Manage Account</span>
                                    <a href="my_profile.html" class="list-group-item"><i class="fa fa-fw fa-pencil"></i> My Profile</a>
                                    <a href="my_password.html" class="list-group-item"><i class="fa fa-fw fa-lock"></i> Change Password</a>
                                    <a href="my_notifications.html" class="list-group-item"><i class="fa fa-fw fa-bell-o"></i> Notifications</a>
                                    <a href="my_membership.html" class="list-group-item"><i class="fa fa-fw fa-cubes"></i> Membership</a>
                                    <a href="my_payments.html" class="list-group-item"><i class="fa fa-fw fa-credit-card"></i> Payments</a>
                                    <a href="my_account.html" class="list-group-item"><i class="fa fa-fw fa-cog"></i> Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-8 col-xl-8">
                        <div class="page-header bordered">
                            <h1>Submit your property</h1>
                        </div>
                        <form action="/property/create" >
                            <h3 class="subheadline">Basic Details</h3>
                            <div class="form-group">
                                <label for="title">Property Title</label>
                                <input type="text" class="form-control form-control-lg" id="title" placeholder="Property Title" autofocus>
                            </div>

                            <div class="form-group">
                                <label>Price (IN KES )</label>
                                <input type="text" class="form-control form-control-lg" placeholder="Price (IN KES)">
                            </div>

                            <div class="form-group">
                                <label>Location</label>
                                <input type="text" class="form-control form-control-lg" id="autocomplete" placeholder="Enter your location">
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="bedrooms">Bedrooms</label>
                                        <select name="bedrooms" id="bedrooms" class="form-control form-control-lg ui-select">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7+">7+</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="bathrooms">Bathrooms</label>
                                        <select name="bathrooms" id="bathrooms" class="form-control form-control-lg ui-select">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5+">5+</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Area Sq/ft</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <h3 class="subheadline">Additional Features</h3>
                                <div class="feature-list three_cols">
                                    <div class="checkbox">
                                        <input type="checkbox" id="Garden">
                                        <label for="Garden">Garden</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="Gym">
                                        <label for="Gym">Gym</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="Internet">
                                        <label for="Internet">Internet</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="Pool">
                                        <label for="Pool">Swimming Pool</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="Window">
                                        <label for="Window">Window Covering</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="Parking">
                                        <label for="Parking">Parking</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="School">
                                        <label for="School">School</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="Bank">
                                        <label for="Bank">Bank</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="Metro">
                                        <label for="Metro">Metro</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="Airport">
                                        <label for="Airport">Airport</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Property Description</label>
                                <textarea class="form-control form-control-lg text-editor" placeholder=""></textarea>
                            </div>
                            <div class="form-group">
                                <h3 class="subheadline">Upload Photos</h3>
                                <div class="ui-dropzone">
                                    <div class="icon"></div>
                                    <div>Drag and drop images or click to upload</div>
                                    <input type="file" class="form-control form-control-lg" id="gallery" multiple>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-primary">Submit Property</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
