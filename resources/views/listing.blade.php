@extends('app')
@section('content')
<div id="content">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-lg-12 col-xl-10">
                <div class="row has-sidebar">
                    <div class="col-md-4 col-lg-3">
                        <button id="toggle-filters" class="btn btn-primary btn-circle mobile-filter"><i class="fa fa-filter"></i></button>
                        <div id="sidebar" class="sidebar-left">
                            <button class="close-panel btn btn-white"><i class="fa fa-long-arrow-left"></i></button>
                            <div class="sidebar_inner">
                                <div id="filters">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#" aria-expanded="true" aria-controls="p_features"> Features </a> </h4>
                                        </div>
                                        <div id="p_features" class="panel-collapse collapse show" role="tabpanel">
                                            <div class="card-body">
                                                <div class="checkbox">
                                                    <input type="checkbox" value="" id="garden">
                                                    <label for="garden"> Garden</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" value="" id="parking">
                                                    <label for="parking"> Parking</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" value="" id="fireplace">
                                                    <label for="fireplace"> Fireplace</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" value="" id="restaurant">
                                                    <label for="restaurant"> Restaurant</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" value="" id="school">
                                                    <label for="school"> School</label>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-lg btn-primary">Filter</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-9">
                        <div class="sorting">
                            <div class="row justify-content-between">
                                <div class="col-sm-5 col-md-5 col-lg-5 col-xl-4">
                                    <div class="form-group">
                                        <select class="form-control ui-select">
                                            <option selected="selected">Most recent</option>
                                            <option>Highest price</option>
                                            <option>Lowest price</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="item-listing list">
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="item-image"> <a href="property_single.html"><img src="img/demo/property/1.jpg" class="img-fluid" alt="">
                                                <div class="item-badges">
                                                    <div class="item-badge-left">Sponsored</div>
                                                    <div class="item-badge-right">For Sale</div>
                                                </div>
                                                <div class="item-meta">
                                                    <div class="item-price">$420,000
                                                        <small>$777 / sq m</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="property_listing.html#" class="save-item"><i class="fa fa-star"></i></a> </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="item-info">
                                            <h3 class="item-title"><a href="property_single.html">3 bed semi-detached house for sale</a></h3>
                                            <div class="item-location"><i class="fa fa-map-marker"></i> Kirkstone Road, Middlesbrough TS3</div>
                                            <div class="item-details-i"> <span class="bedrooms" data-toggle="tooltip" title="3 Bedrooms">3 <i class="fa fa-bed"></i></span> <span class="bathrooms" data-toggle="tooltip" title="2 Bathrooms">2 <i class="fa fa-bath"></i></span> </div>
                                            <div class="item-details">
                                                <ul>
                                                    <li>Sq Ft <span>730-2600</span></li>
                                                    <li>Type <span>Apartments</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="added-on">Listed on 19th Feb 2017 </div>

                                            </div>
                                            <div class="col-md-6">
                                                <a href="property_listing.html#" class="added-by">by John Doe</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="item-image"> <a href="property_single.html"><img src="img/demo/property/2.jpg" class="img-fluid" alt="">
                                                <div class="item-badges">
                                                    <div class="item-badge-left">Sponsored</div>
                                                    <div class="item-badge-right">For Sale</div>
                                                </div>
                                                <div class="item-meta">
                                                    <div class="item-price">$420,000
                                                        <small>$777 / sq m</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="property_listing.html#" class="save-item"><i class="fa fa-star"></i></a> </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="item-info">
                                            <h3 class="item-title"><a href="property_single.html">3 bed semi-detached house for sale</a></h3>
                                            <div class="item-location"><i class="fa fa-map-marker"></i> Kirkstone Road, Middlesbrough TS3</div>
                                            <div class="item-details-i"> <span class="bedrooms" data-toggle="tooltip" title="3 Bedrooms">3 <i class="fa fa-bed"></i></span> <span class="bathrooms" data-toggle="tooltip" title="2 Bathrooms">2 <i class="fa fa-bath"></i></span> </div>
                                            <div class="item-details">
                                                <ul>
                                                    <li>Sq Ft <span>730-2600</span></li>
                                                    <li>Type <span>Apartments</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="added-on">Listed on 19th Feb 2017 </div>

                                            </div>
                                            <div class="col-md-6">
                                                <a href="property_listing.html#" class="added-by">by John Doe</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="item-image"> <a href="property_single.html"><img src="img/demo/property/3.jpg" class="img-fluid" alt="">
                                                <div class="item-badges">
                                                    <div class="item-badge-left">Sponsored</div>
                                                    <div class="item-badge-right">For Sale</div>
                                                </div>
                                                <div class="item-meta">
                                                    <div class="item-price">$420,000
                                                        <small>$777 / sq m</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="property_listing.html#" class="save-item"><i class="fa fa-star"></i></a> </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="item-info">
                                            <h3 class="item-title"><a href="property_single.html">3 bed semi-detached house for sale</a></h3>
                                            <div class="item-location"><i class="fa fa-map-marker"></i> Kirkstone Road, Middlesbrough TS3</div>
                                            <div class="item-details-i"> <span class="bedrooms" data-toggle="tooltip" title="3 Bedrooms">3 <i class="fa fa-bed"></i></span> <span class="bathrooms" data-toggle="tooltip" title="2 Bathrooms">2 <i class="fa fa-bath"></i></span> </div>
                                            <div class="item-details">
                                                <ul>
                                                    <li>Sq Ft <span>730-2600</span></li>
                                                    <li>Type <span>Apartments</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="added-on">Listed on 19th Feb 2017 </div>

                                            </div>
                                            <div class="col-md-6">
                                                <a href="property_listing.html#" class="added-by">by John Doe</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="item-image"> <a href="property_single.html"><img src="img/demo/property/4.jpg" class="img-fluid" alt="">
                                                <div class="item-badges">
                                                    <div class="item-badge-left">Sponsored</div>
                                                    <div class="item-badge-right">For Sale</div>
                                                </div>
                                                <div class="item-meta">
                                                    <div class="item-price">$420,000
                                                        <small>$777 / sq m</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="property_listing.html#" class="save-item"><i class="fa fa-star"></i></a> </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="item-info">
                                            <h3 class="item-title"><a href="property_single.html">3 bed semi-detached house for sale</a></h3>
                                            <div class="item-location"><i class="fa fa-map-marker"></i> Kirkstone Road, Middlesbrough TS3</div>
                                            <div class="item-details-i"> <span class="bedrooms" data-toggle="tooltip" title="3 Bedrooms">3 <i class="fa fa-bed"></i></span> <span class="bathrooms" data-toggle="tooltip" title="2 Bathrooms">2 <i class="fa fa-bath"></i></span> </div>
                                            <div class="item-details">
                                                <ul>
                                                    <li>Sq Ft <span>730-2600</span></li>
                                                    <li>Type <span>Apartments</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="added-on">Listed on 19th Feb 2017 </div>

                                            </div>
                                            <div class="col-md-6">
                                                <a href="property_listing.html#" class="added-by">by John Doe</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="item-image"> <a href="property_single.html"><img src="img/demo/property/5.jpg" class="img-fluid" alt="">
                                                <div class="item-badges">
                                                    <div class="item-badge-left">Sponsored</div>
                                                    <div class="item-badge-right">For Sale</div>
                                                </div>
                                                <div class="item-meta">
                                                    <div class="item-price">$420,000
                                                        <small>$777 / sq m</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="property_listing.html#" class="save-item"><i class="fa fa-star"></i></a> </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="item-info">
                                            <h3 class="item-title"><a href="property_single.html">3 bed semi-detached house for sale</a></h3>
                                            <div class="item-location"><i class="fa fa-map-marker"></i> Kirkstone Road, Middlesbrough TS3</div>
                                            <div class="item-details-i"> <span class="bedrooms" data-toggle="tooltip" title="3 Bedrooms">3 <i class="fa fa-bed"></i></span> <span class="bathrooms" data-toggle="tooltip" title="2 Bathrooms">2 <i class="fa fa-bath"></i></span> </div>
                                            <div class="item-details">
                                                <ul>
                                                    <li>Sq Ft <span>730-2600</span></li>
                                                    <li>Type <span>Apartments</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="added-on">Listed on 19th Feb 2017 </div>

                                            </div>
                                            <div class="col-md-6">
                                                <a href="property_listing.html#" class="added-by">by John Doe</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="item-image"> <a href="property_single.html"><img src="img/demo/property/6.jpg" class="img-fluid" alt="">
                                                <div class="item-badges">
                                                    <div class="item-badge-left">Sponsored</div>
                                                    <div class="item-badge-right">For Sale</div>
                                                </div>
                                                <div class="item-meta">
                                                    <div class="item-price">$420,000
                                                        <small>$777 / sq m</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="property_listing.html#" class="save-item"><i class="fa fa-star"></i></a> </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="item-info">
                                            <h3 class="item-title"><a href="property_single.html">3 bed semi-detached house for sale</a></h3>
                                            <div class="item-location"><i class="fa fa-map-marker"></i> Kirkstone Road, Middlesbrough TS3</div>
                                            <div class="item-details-i"> <span class="bedrooms" data-toggle="tooltip" title="3 Bedrooms">3 <i class="fa fa-bed"></i></span> <span class="bathrooms" data-toggle="tooltip" title="2 Bathrooms">2 <i class="fa fa-bath"></i></span> </div>
                                            <div class="item-details">
                                                <ul>
                                                    <li>Sq Ft <span>730-2600</span></li>
                                                    <li>Type <span>Apartments</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="added-on">Listed on 19th Feb 2017 </div>

                                            </div>
                                            <div class="col-md-6">
                                                <a href="property_listing.html#" class="added-by">by John Doe</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="property_listing.html#">&laquo;</a></li>
                                <li class="page-item active"><a class="page-link" href="property_listing.html#">1</a></li>
                                <li class="page-item"><a class="page-link" href="property_listing.html#">2</a></li>
                                <li class="page-item"><a class="page-link" href="property_listing.html#">3</a></li>
                                <li class="page-item"><a class="page-link" href="property_listing.html#">&raquo;</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Agent Modal -->
<div class="modal fade  item-badge-rightm" id="leadform" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="media">
                    <div class="media-left"><a href="property_single.html"><img src="img/demo/property/1.jpg" class="img-rounded" width="64" alt=""></a></div>
                    <div class="media-body">
                        <h4 class="media-heading">Send Message for<br>
                            <small><a href="property_single.html">3 bed semi-detached house for sale</a></small></h4>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-map-marker"></i> Kirkstone Road, Middlesbrough TS3</li>
                            <li><a href="tel:01502392905"><i class="fa fa-phone fa-fw" aria-hidden="true"></i> Call: 01502 392905</a></li>
                        </ul>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="lead_name">Your Name</label>
                        <input type="text" class="form-control" id="lead_name" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <label for="lead_email">Your Email</label>
                        <input type="email" class="form-control" id="lead_email" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <label for="lead_phone">Your Telephone</label>
                        <input type="tel" class="form-control" id="lead_phone" placeholder="Your Telephone">
                    </div>
                    <div class="form-group">
                        <label for="lead_message">Message</label>
                        <textarea rows="4" class="form-control" id="lead_message" placeholder="Please include any useful details, i.e. current status, availability for viewings, etc."></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Send Message</button>
            </div>
        </div>
    </div>
</div>
@endsection
