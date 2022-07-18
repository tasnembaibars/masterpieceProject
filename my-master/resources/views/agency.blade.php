<!DOCTYPE html>
<html lang="en" class="">

<!-- Mirrored from findhouse.bookingcore.org/agency by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 13:31:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="csrf-token" content="Mx8tV3YRdLdtHnRhK3OADMUJKZXT2VswAa0X5Oou">
<link rel="icon" type="image/png" href="uploads/demo/general/favicon.png" />
<title>FindHouse</title>
<meta name="description" content="" />
<link href="libs/flags/css/flag-icon.min.css" rel="stylesheet">
<link rel="stylesheet" href="findhouse/css/bootstrap.min.css">
<link rel="stylesheet" href="findhouse/css/style.css">

<link rel="stylesheet" href="findhouse/css/responsive.css">
<link rel="stylesheet" href="dist/frontend/css/frontend.css">


<link rel="dns-prefetch" href="http://fonts.gstatic.com/">
<script>
        var bookingCore = {
            url:'https://findhouse.bookingcore.org',
            url_root:'https://findhouse.bookingcore.org',
            booking_decimals:0,
            thousand_separator:'.',
            decimal_separator:',',
            currency_position:'left',
            currency_symbol:'$',
			currency_rate:'1',
            date_format:'MM/DD/YYYY',
            map_provider:'gmap',
            map_gmap_key:'',
            routes:{
                login:'https://findhouse.bookingcore.org/login',
                register:'https://findhouse.bookingcore.org/register',
            },
            currentUser:0,
            rtl: false
        };
        var i18n = {
            warning:"Warning",
            success:"Success",
        };
        var daterangepickerLocale = {
            "applyLabel": "Apply",
            "cancelLabel": "Cancel",
            "fromLabel": "From",
            "toLabel": "To",
            "customRangeLabel": "Custom",
            "weekLabel": "W",
            "first_day_of_week": 1,
            "daysOfWeek": [
                "Su",
                "Mo",
                "Tu",
                "We",
                "Th",
                "Fr",
                "Sa"
            ],
            "monthNames": [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December"
            ],
        };
    </script>

<link href="custom-css.css" rel="stylesheet">
</head>
<body class="frontend-page  ">
<div class="wrapper  mt-0 pt-0">
<div class="preloader d-none"></div>

<header class="header-nav menu_style_home_one navbar-scrolltofixed  stricky main-menu header-normal style2 ">
<div class="container-fluid p0">

<nav>

<div class="menu-toggle">
<img class="nav_logo_img img-fluid" src="uploads/demo/general/header-logo2.png" alt="FindHouse">
<button type="button" id="menu-btn">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<a href="index.html" class="navbar_brand float-left dn-smd">
<img class="logo1 img-fluid" src="uploads/demo/general/header-logo2.png" alt="FindHouse">
<img class="logo2 img-fluid" src="uploads/demo/general/header-logo2.png" alt="FindHouse">
<span>FindHouse</span>
</a>


<ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
<li class=" depth-0"><a target="" href="index.html">Home</a><ul class="children-menu menu-dropdown"><li class=" depth-1"><a target="" href="index.html">Home 1</a></li><li class=" depth-1"><a target="" href="page/home-page-3.html">Home 3</a></li><li class=" depth-1"><a target="" href="page/home-page-5.html">Home 5</a></li><li class=" depth-1"><a target="" href="page/home-page-6.html">Home 6</a></li><li class=" depth-1"><a target="" href="page/home-page-8.html">Home 8</a></li><li class=" depth-1"><a target="" href="page/home-page-10.html">Home 10</a></li></ul></li><li class=" depth-0"><a target="" href="#">Property</a><ul class="children-menu menu-dropdown"><li class=" depth-1"><a target="" href="property.html">Property List</a><ul class="children-menu menu-dropdown"><li class=" depth-2"><a target="" href="property659a.html?layout=1">Property List V1</a></li><li class=" depth-2"><a target="" href="property6d5a.html?layout=2">Property List V2</a></li></ul></li><li class=" depth-1"><a target="" href="property/renovated-apartment-1.html">Property Detail</a><ul class="children-menu menu-dropdown"><li class=" depth-2"><a target="" href="property/renovated-apartment-1659a.html?layout=1">Property Detail V1</a></li><li class=" depth-2"><a target="" href="property/renovated-apartment-16d5a.html?layout=2">Property Detail V2</a></li><li class=" depth-2"><a target="" href="property/renovated-apartment-1de65.html?layout=3">Property Detail V3</a></li><li class=" depth-2"><a target="" href="property/renovated-apartment-1d787.html?layout=4">Property Detail V4</a></li></ul></li></ul></li><li class=" active  depth-0"><a target="" href="#">Agencies</a><ul class="children-menu menu-dropdown"><li class=" active depth-1"><a target="" href="agency.html">Agencies</a></li><li class=" depth-1"><a target="" href="agency/real-estate-experts.html">Agency Detail</a></li><li class=" depth-1"><a target="" href="agent.html">Agent List</a></li><li class=" depth-1"><a target="" href="agent/1.html">Agent Detail</a></li></ul></li><li class=" depth-0"><a target="" href="#">Page</a><ul class="children-menu menu-dropdown"><li class=" depth-1"><a target="" href="news.html">News</a></li><li class=" depth-1"><a target="" href="news/city-spotlight-philadelphia.html">News Detail</a></li><li class=" depth-1"><a target="" href="contact.html">Contact</a></li><li class=" depth-1"><a target="" href="page/about-us.html">About</a></li><li class=" depth-1"><a target="" href="page/become-a-agent.html">Become a agent</a></li></ul></li> <li class="dropdown">
<a href="#" data-toggle="dropdown" class="is_login">
USD
<i class="fa fa-angle-down d-none"></i>
</a>
<ul class="dropdown-menu text-left width-auto">
<li>
<a href="agency.html?set_currency=eur" class="is_login">
EUR
</a>
</li>
<li>
<a href="agency.html?set_currency=jpy" class="is_login">
JPY
</a>
</li>
</ul>
</li>
<li class="dropdown">
<a href="#" data-toggle="dropdown" class="is_login">
<span class="flag-icon flag-icon-gb"></span>
English
</a>
<ul class="dropdown-menu text-left">
<li>
<a href="ja/agency.html?set_lang=ja" class="is_login">
<span class="flag-icon flag-icon-jp"></span>
Japanese
</a>
</li>
<li>
<a href="egy/agency.html?set_lang=egy" class="is_login">
<span class="flag-icon flag-icon-eg"></span>
Egyptian
</a>
</li>
</ul>
</li>
<li class="list-inline-item">
<a href="javascript:void(0)" class="btn flaticon-user"> <span class="dn-lg" data-toggle="modal" data-target="#login">Login/</span> <span data-toggle="modal" data-target="#register">Register</span> </a>
</li>
<li class="list-inline-item add_listing"><a href="login0ba4.html"><span class="flaticon-plus"></span><span class="dn-lg"> Create Listing</span></a></li>
</ul>
</nav>
</div>
</header>

<div id="page" class="stylehome1 h0">
<div class="mobile-menu">
<div class="header stylehome1">
<div class="main_logo_home2 text-center">
<img class="nav_logo_img img-fluid mt20" src="uploads/demo/general/header-logo2.png" alt="FindHouse">
<span class="mt20">FindHouse</span>
</div>
<ul class="menu_bar_home2">
<li class="list-inline-item list_s"><a href="login21b9.html"><span class="flaticon-user"></span></a></li>
<li class="list-inline-item"><a href="#menu"><span></span></a></li>
</ul>
</div>
</div>
<nav id="menu" class="stylehome1 mm-menu_offcanvas">
<ul>
<li class=" depth-0"><a target="" href="index.html">Home</a><ul class="children-menu menu-dropdown"><li class=" depth-1"><a target="" href="index.html">Home 1</a></li><li class=" depth-1"><a target="" href="page/home-page-3.html">Home 3</a></li><li class=" depth-1"><a target="" href="page/home-page-5.html">Home 5</a></li><li class=" depth-1"><a target="" href="page/home-page-6.html">Home 6</a></li><li class=" depth-1"><a target="" href="page/home-page-8.html">Home 8</a></li><li class=" depth-1"><a target="" href="page/home-page-10.html">Home 10</a></li></ul></li><li class=" depth-0"><a target="" href="#">Property</a><ul class="children-menu menu-dropdown"><li class=" depth-1"><a target="" href="property.html">Property List</a><ul class="children-menu menu-dropdown"><li class=" depth-2"><a target="" href="property659a.html?layout=1">Property List V1</a></li><li class=" depth-2"><a target="" href="property6d5a.html?layout=2">Property List V2</a></li></ul></li><li class=" depth-1"><a target="" href="property/renovated-apartment-1.html">Property Detail</a><ul class="children-menu menu-dropdown"><li class=" depth-2"><a target="" href="property/renovated-apartment-1659a.html?layout=1">Property Detail V1</a></li><li class=" depth-2"><a target="" href="property/renovated-apartment-16d5a.html?layout=2">Property Detail V2</a></li><li class=" depth-2"><a target="" href="property/renovated-apartment-1de65.html?layout=3">Property Detail V3</a></li><li class=" depth-2"><a target="" href="property/renovated-apartment-1d787.html?layout=4">Property Detail V4</a></li></ul></li></ul></li><li class=" active  depth-0"><a target="" href="#">Agencies</a><ul class="children-menu menu-dropdown"><li class=" active depth-1"><a target="" href="agency.html">Agencies</a></li><li class=" depth-1"><a target="" href="agency/real-estate-experts.html">Agency Detail</a></li><li class=" depth-1"><a target="" href="agent.html">Agent List</a></li><li class=" depth-1"><a target="" href="agent/1.html">Agent Detail</a></li></ul></li><li class=" depth-0"><a target="" href="#">Page</a><ul class="children-menu menu-dropdown"><li class=" depth-1"><a target="" href="news.html">News</a></li><li class=" depth-1"><a target="" href="news/city-spotlight-philadelphia.html">News Detail</a></li><li class=" depth-1"><a target="" href="contact.html">Contact</a></li><li class=" depth-1"><a target="" href="page/about-us.html">About</a></li><li class=" depth-1"><a target="" href="page/become-a-agent.html">Become a agent</a></li></ul></li> <li><a href="login.html"><span class="flaticon-user"></span> Login</a></li>
<li><a href="register.html"><span class="flaticon-edit"></span> Register</a></li>
<li><li class="dropdown">
<a href="#" data-toggle="dropdown" class="is_login">
USD
<i class="fa fa-angle-down d-none"></i>
</a>
<ul class=" text-left width-auto">
<li>
<a href="agency.html?set_currency=eur" class="is_login">
EUR
</a>
</li>
<li>
<a href="agency.html?set_currency=jpy" class="is_login">
JPY
</a>
</li>
</ul>
</li>
</li>
<li><li class="dropdown">
<a href="#" data-toggle="dropdown" class="is_login">
<span class="flag-icon flag-icon-gb"></span>
English
</a>
<ul class=" text-left">
<li>
<a href="ja/agency.html?set_lang=ja" class="is_login">
<span class="flag-icon flag-icon-jp"></span>
Japanese
</a>
</li>
<li>
<a href="egy/agency.html?set_lang=egy" class="is_login">
<span class="flag-icon flag-icon-eg"></span>
Egyptian
</a>
</li>
</ul>
</li>
</li>
</ul>
</nav>
</div>
<div class="wrapper">
<div class="preloader"></div>

<section class="our-listing bgc-f7 pb30-991">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="listing_sidebar dn db-991">
<div class="sidebar_content_details style3">

<div class="sidebar_listing_list style2 mobile_sytle_sidebar mb0">
<div class="sidebar_advanced_search_widget">
<h4 class="mb25">Advanced Search <a class="filter_closed_btn float-right" href="#"><small>Hide Filter</small> <span class="flaticon-close"></span></a></h4>
<ul class="sasw_list style2 mb0">
<li class="search_area">
<div class="form-group">
<input type="text" class="form-control" placeholder="keyword">
<label for="exampleInputEmail"><span class="flaticon-magnifying-glass"></span></label>
</div>
</li>
<li class="search_area">
<div class="form-group">
<input type="text" class="form-control" placeholder="Location">
<label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
</div>
</li>
<li>
<div class="search_option_two">
<div class="candidate_revew_select">
<select class="selectpicker w100 show-tick">
<option>Status</option>
<option>Apartment</option>
<option>Bungalow</option>
<option>Condo</option>
 <option>House</option>
<option>Land</option>
<option>Single Family</option>
</select>
</div>
</div>
</li>
<li>
<div class="search_option_two">
<div class="candidate_revew_select">
<select class="selectpicker w100 show-tick">
<option>Property Type</option>
<option>Apartment</option>
<option>Bungalow</option>
<option>Condo</option>
<option>House</option>
<option>Land</option>
<option>Single Family</option>
</select>
</div>
</div>
</li>
<li>
<div class="small_dropdown2">
<div id="prncgs" class="btn dd_btn">
<span>Price</span>
<label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
</div>
<div class="dd_content2">
<div class="pricing_acontent">
<input type="text" class="amount" placeholder="$52,239">
<input type="text" class="amount2" placeholder="$985,14">
<div class="slider-range"></div>
</div>
</div>
</div>
</li>
<li>
<div class="search_option_two">
<div class="candidate_revew_select">
<select class="selectpicker w100 show-tick">
<option>Bathrooms</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
</select>
</div>
</div>
</li>
<li>
<div class="search_option_two">
<div class="candidate_revew_select">
<select class="selectpicker w100 show-tick">
<option>Bedrooms</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
</select>
</div>
</div>
</li>
<li>
<div class="search_option_two">
 <div class="candidate_revew_select">
<select class="selectpicker w100 show-tick">
<option>Garages</option>
<option>Yes</option>
<option>No</option>
<option>Others</option>
</select>
</div>
</div>
</li>
<li>
<div class="search_option_two">
<div class="candidate_revew_select">
<select class="selectpicker w100 show-tick">
<option>Year built</option>
<option>2013</option>
<option>2014</option>
<option>2015</option>
<option>2016</option>
<option>2017</option>
<option>2018</option>
<option>2019</option>
<option>2020</option>
</select>
</div>
</div>
</li>
<li class="min_area style2 list-inline-item">
<div class="form-group">
<input type="text" class="form-control" placeholder="Min Area">
</div>
</li>
<li class="max_area list-inline-item">
<div class="form-group">
<input type="text" class="form-control" placeholder="Max Area">
</div>
</li>
<li>
<div id="accordion" class="panel-group">
<div class="panel">
<div class="panel-heading">
<h4 class="panel-title">
<a href="#panelBodyRating" class="accordion-toggle link" data-toggle="collapse" data-parent="#accordion"><i class="flaticon-more"></i> Advanced features</a>
</h4>
</div>
<div id="panelBodyRating" class="panel-collapse collapse">
<div class="panel-body row">
<div class="col-lg-12">
<ul class="ui_kit_checkbox selectable-list float-left fn-400">
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck1">
<label class="custom-control-label" for="customCheck1">Air Conditioning</label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck4">
<label class="custom-control-label" for="customCheck4">Barbeque</label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck10">
<label class="custom-control-label" for="customCheck10">Gym</label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck5">
<label class="custom-control-label" for="customCheck5">Microwave</label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck6">
<label class="custom-control-label" for="customCheck6">TV Cable</label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck2">
<label class="custom-control-label" for="customCheck2">Lawn</label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck11">
<label class="custom-control-label" for="customCheck11">Refrigerator</label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck3">
<label class="custom-control-label" for="customCheck3">Swimming Pool</label>
</div>
</li>
</ul>
<ul class="ui_kit_checkbox selectable-list float-right fn-400">
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck12">
 <label class="custom-control-label" for="customCheck12">WiFi</label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck14">
<label class="custom-control-label" for="customCheck14">Sauna</label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck7">
<label class="custom-control-label" for="customCheck7">Dryer</label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck9">
<label class="custom-control-label" for="customCheck9">Washer</label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck13">
<label class="custom-control-label" for="customCheck13">Laundry</label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck8">
<label class="custom-control-label" for="customCheck8">Outdoor Shower</label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck15">
<label class="custom-control-label" for="customCheck15">Window Coverings</label>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</li>
<li>
<div class="search_option_button">
 <button type="submit" class="btn btn-block btn-thm">Search</button>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="breadcrumb_content style2 mb0-991">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li class="breadcrumb-item active text-thm" aria-current="page">Simple Listing – Grid View</li>
</ol>
<h2 class="breadcrumb_title">Our Agencies</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-xl-4">
<div class="sidebar_listing_grid1 dn-991">
<div class="terms_condition_widget">
<h4 class="title">Featured Properties</h4>
<div class="sidebar_feature_property_slider">
<div class="item">
<div class="feat_property home7">
<div class="thumb">
<img class="img-whp" src="uploads/demo/property/property-1.jpg" alt="Renovated Apartment">
<div class="thmb_cntnt">
<ul class="tag mb0">
<li class="list-inline-item"><a>For Buy</a></li>
<li class="list-inline-item"><a>Featured</a></li>
</ul>
<a class="fp_price" href="#"> $121<small></small></a>
<a href="property/renovated-apartment-1.html"><h4 class="posr color-white">Renovated Apartment</h4></a>
</div>
</div>
</div>
</div>
<div class="item">
<div class="feat_property home7">
<div class="thumb">
<img class="img-whp" src="uploads/demo/property/property-4.jpg" alt="Luxury Family Home">
<div class="thmb_cntnt">
<ul class="tag mb0">
<li class="list-inline-item"><a>For Buy</a></li>
<li class="list-inline-item"><a>Featured</a></li>
</ul>
<a class="fp_price" href="#"> $800<small></small></a>
<a href="property/luxury-family-home.html"><h4 class="posr color-white">Luxury Family Home</h4></a>
</div>
</div>
</div>
</div>
<div class="item">
<div class="feat_property home7">
<div class="thumb">
<img class="img-whp" src="uploads/demo/property/property-6.jpg" alt="Gorgeous Villa Bay View">
<div class="thmb_cntnt">
<ul class="tag mb0">
<li class="list-inline-item"><a>For Buy</a></li>
<li class="list-inline-item"><a>Featured</a></li>
</ul>
<a class="fp_price" href="#"> $320<small></small></a>
<a href="property/gorgeous-villa-bay-view.html"><h4 class="posr color-white">Gorgeous Villa Bay View</h4></a>
</div>
</div>
 </div>
</div>
<div class="item">
<div class="feat_property home7">
<div class="thumb">
<img class="img-whp" src="uploads/demo/property/property-7.jpg" alt="EAST VILLAGE">
<div class="thmb_cntnt">
<ul class="tag mb0">
<li class="list-inline-item"><a>For Buy</a></li>
<li class="list-inline-item"><a>Featured</a></li>
</ul>
<a class="fp_price" href="#"> $260<small></small></a>
<a href="property/east-village.html"><h4 class="posr color-white">EAST VILLAGE</h4></a>
</div>
</div>
</div>
</div>
<div class="item">
<div class="feat_property home7">
<div class="thumb">
<img class="img-whp" src="uploads/demo/property/property-8.jpg" alt="PARIS GREENWICH VILLA">
<div class="thmb_cntnt">
<ul class="tag mb0">
<li class="list-inline-item"><a>For Buy</a></li>
<li class="list-inline-item"><a>Featured</a></li>
</ul>
<a class="fp_price" href="#"> $500<small></small></a>
<a href="property/paris-greenwich-villa.html"><h4 class="posr color-white">PARIS GREENWICH VILLA</h4></a>
</div>
</div>
</div>
</div>
<div class="item">
<div class="feat_property home7">
<div class="thumb">
<img class="img-whp" src="uploads/demo/property/property-9.jpg" alt="LUXURY SINGLE">
<div class="thmb_cntnt">
<ul class="tag mb0">
<li class="list-inline-item"><a>For Buy</a></li>
<li class="list-inline-item"><a>Featured</a></li>
</ul>
<a class="fp_price" href="#"> $350<small></small></a>
<a href="property/luxury-single.html"><h4 class="posr color-white">LUXURY SINGLE</h4></a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="terms_condition_widget">
<h4 class="title">Categories</h4>
<div class="widget_list">
<ul class="list_details">
<li><a href="propertybaa2.html?category_id=1"><i class="fa fa-caret-right mr10"></i>Apartment <span class="float-right">2 properties</span></a></li>
<li><a href="propertycfaa.html?category_id=2"><i class="fa fa-caret-right mr10"></i>Condo <span class="float-right">4 properties</span></a></li>
<li><a href="propertyd7b8.html?category_id=3"><i class="fa fa-caret-right mr10"></i>Family House <span class="float-right">2 properties</span></a></li>
<li><a href="property9738.html?category_id=4"><i class="fa fa-caret-right mr10"></i>Modern Villa <span class="float-right">2 properties</span></a></li>
<li><a href="property5125.html?category_id=5"><i class="fa fa-caret-right mr10"></i>Town House <span class="float-right">1 properties</span></a></li>
</ul>
</div>
</div>
<div class="sidebar_feature_listing">
<h4 class="title">Recently Viewed</h4>
<div class="media">
<img class="align-self-start mr-3" src="uploads/demo/property/property-1.jpg" alt="Renovated Apartment" style="width: 90px; height: 80px">
<div class="media-body">
<a target="_blank" href="property/renovated-apartment-1.html">
<h5 class="mt-0 post_title">Renovated Apartment</h5>
</a>
<a href="property/renovated-apartment-1.html"> $121</a>
<ul class="mb0">
<li class="list-inline-item">Beds: 3</li>
<li class="list-inline-item">Baths: 7</li>
<li class="list-inline-item">Sq Ft: 192 sqft</li>
</ul>
</div>
</div>
<div class="media">
<img class="align-self-start mr-3" src="uploads/demo/property/property-2.jpg" alt="Gorgeous Villa Bay View" style="width: 90px; height: 80px">
<div class="media-body">
<a target="_blank" href="property/gorgeous-villa-bay-view-1.html">
<h5 class="mt-0 post_title">Gorgeous Villa Bay View</h5>
</a>
<a href="property/gorgeous-villa-bay-view-1.html"> $900</a>
<ul class="mb0">
<li class="list-inline-item">Beds: 6</li>
<li class="list-inline-item">Baths: 9</li>
<li class="list-inline-item">Sq Ft: 175 sqft</li>
</ul>
</div>
</div>
<div class="media">
<img class="align-self-start mr-3" src="uploads/demo/property/property-3.jpg" alt="Luxury Family Home" style="width: 90px; height: 80px">
<div class="media-body">
<a target="_blank" href="property/luxury-family-home-1.html">
<h5 class="mt-0 post_title">Luxury Family Home</h5>
</a>
<a href="property/luxury-family-home-1.html"> $650</a>
<ul class="mb0">
<li class="list-inline-item">Beds: 10</li>
<li class="list-inline-item">Baths: 8</li>
<li class="list-inline-item">Sq Ft: 163 sqft</li>
</ul>
</div>
</div>
</div> </div>
</div>
<div class="col-md-12 col-lg-8">
<div class="row">
<div class="grid_list_search_result style2">
<div class="col-sm-12 col-md-4 col-lg-3 col-xl-3">
<div class="left_area">
<p>4 Search results</p>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-lg-6">
<div class="feat_property home7 agency">
<div class="thumb">
<img class="img-fluid" src="uploads/demo/agencies/agencies-4.jpg" alt="1.jpg">
<div class="thmb_cntnt">
<ul class="tag mb0">
<li class="list-inline-item dn"></li>
<li class="list-inline-item"><a href="#">2 Listings</a></li>
</ul>
</div>
</div>
<div class="details">
<div class="tc_content">
<a href="agency/real-estate-experts.html">
<h4>Real estate experts</h4>
</a>
<p class="text-thm">Agency</p>
<ul class="prop_details mb0">
<li><a href="#">Office: 134 456 3210</a></li>
<li><a href="#">Mobile: 891 456 9874</a></li>
<li><a href="#">Fax: 342 654 1258</a></li>
<li><a href="#">Email: <span><span class="__cf_email__" data-cfemail="592938322c353538193f30373d31362c2a3c773a3634">[email&#160;protected]</span></span></a></li>
</ul>
</div>
<div class="fp_footer">
 <ul class="fp_meta float-left mb0">
<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" target="_blank"></i></a></li>
</ul>
<a href="agency/real-estate-experts.html">
<div class="fp_pdate float-right text-thm">View My Listing <i class="fa fa-angle-right"></i></div>
</a>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6">
<div class="feat_property home7 agency">
<div class="thumb">
<img class="img-fluid" src="uploads/demo/agencies/agencies-3.jpg" alt="1.jpg">
<div class="thmb_cntnt">
<ul class="tag mb0">
<li class="list-inline-item dn"></li>
<li class="list-inline-item"><a href="#">2 Listings</a></li>
</ul>
</div>
</div>
<div class="details">
<div class="tc_content">
<a href="agency/modern-house-real-estate.html">
<h4>Modern House Real estate</h4>
</a>
<p class="text-thm">Agency</p>
<ul class="prop_details mb0">
<li><a href="#">Office: 134 456 3210</a></li>
<li><a href="#">Mobile: 891 456 9874</a></li>
<li><a href="#">Fax: 342 654 1258</a></li>
<li><a href="#">Email: <span><span class="__cf_email__" data-cfemail="9dedfcf6e8f1f1fcddfbf4f3f9f5f2e8eef8b3fef2f0">[email&#160;protected]</span></span></a></li>
</ul>
</div>
<div class="fp_footer">
<ul class="fp_meta float-left mb0">
<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" target="_blank"></i></a></li>
</ul>
<a href="agency/modern-house-real-estate.html">
<div class="fp_pdate float-right text-thm">View My Listing <i class="fa fa-angle-right"></i></div>
</a>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6">
<div class="feat_property home7 agency">
<div class="thumb">
<img class="img-fluid" src="uploads/demo/agencies/agencies-2.jpg" alt="1.jpg">
<div class="thmb_cntnt">
<ul class="tag mb0">
<li class="list-inline-item dn"></li>
<li class="list-inline-item"><a href="#">2 Listings</a></li>
</ul>
</div>
</div>
<div class="details">
<div class="tc_content">
<a href="agency/hight-rise-real-estate.html">
<h4>High-Rise Real Estate</h4>
</a>
<p class="text-thm">Agency</p>
<ul class="prop_details mb0">
<li><a href="#">Office: 134 456 3210</a></li>
<li><a href="#">Mobile: 891 456 9874</a></li>
<li><a href="#">Fax: 342 654 1258</a></li>
<li><a href="#">Email: <span><span class="__cf_email__" data-cfemail="eb9b8a809e87878aab8d82858f83849e988ec5888486">[email&#160;protected]</span></span></a></li>
</ul>
</div>
<div class="fp_footer">
<ul class="fp_meta float-left mb0">
<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" target="_blank"></i></a></li>
 </ul>
<a href="agency/hight-rise-real-estate.html">
<div class="fp_pdate float-right text-thm">View My Listing <i class="fa fa-angle-right"></i></div>
</a>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6">
<div class="feat_property home7 agency">
<div class="thumb">
<img class="img-fluid" src="uploads/demo/agencies/agencies-1.jpg" alt="1.jpg">
<div class="thmb_cntnt">
<ul class="tag mb0">
<li class="list-inline-item dn"></li>
<li class="list-inline-item"><a href="#">2 Listings</a></li>
</ul>
</div>
</div>
<div class="details">
<div class="tc_content">
<a href="agency/country-house-real-estate.html">
<h4>Country House Real Estate</h4>
</a>
<p class="text-thm">Agency</p>
<ul class="prop_details mb0">
<li><a href="#">Office: 134 456 3210</a></li>
<li><a href="#">Mobile: 891 456 9874</a></li>
<li><a href="#">Fax: 342 654 1258</a></li>
<li><a href="#">Email: <span><span class="__cf_email__" data-cfemail="acdccdc7d9c0c0cdeccac5c2c8c4c3d9dfc982cfc3c1">[email&#160;protected]</span></span></a></li>
</ul>
</div>
<div class="fp_footer">
<ul class="fp_meta float-left mb0">
<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" target="_blank"></i></a></li>
</ul>
<a href="agency/country-house-real-estate.html">
<div class="fp_pdate float-right text-thm">View My Listing <i class="fa fa-angle-right"></i></div>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
<section class="footer_one">
<div class="container">
<div class="row">
<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
<div class="footer_about_widget">
<h4>About Site</h4>
<p>
We’re reimagining how you buy, sell and rent. It’s now easier to get into a place you love. So let’s do this, together.
</p>
</div>
</div>
<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
<div class="footer_about_widget">
<h4>COMPANY</h4>
<ul>
<li><a href="#">About Us</a></li>
<li><a href="#">Community Blog</a></li>
<li><a href="#">Rewards</a></li>
<li><a href="#">Work with Us</a></li>
<li><a href="#">Meet the Team</a></li>
</ul>
</div>
</div>
<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
<div class="footer_about_widget">
<h4>SUPPORT</h4>
<ul>
<li><a href="#">Account</a></li>
<li><a href="#">Legal</a></li>
<li><a href="#">Contact</a></li>
<li><a href="#">Affiliate Program</a></li>
<li><a href="#">Privacy Policy</a></li>
</ul>
</div>
</div>
<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
<div class="footer_about_widget">
<h4>Follow us</h4>
<ul class="mb30">
<li class="list-inline-item footer-social-icon"><a href="#"><i class="fa fa-facebook"></i></a></li>
<li class="list-inline-item footer-social-icon"><a href="#"><i class="fa fa-twitter"></i></a></li>
<li class="list-inline-item footer-social-icon"><a href="#"><i class="fa fa-instagram"></i></a></li>
<li class="list-inline-item footer-social-icon"><a href="#"><i class="fa fa-pinterest"></i></a></li>
<li class="list-inline-item footer-social-icon"><a href="#"><i class="fa fa-dribbble"></i></a></li>
<li class="list-inline-item footer-social-icon"><a href="#"><i class="fa fa-google"></i></a></li>
</ul>
<h4>Subscribe</h4>
<form class="footer_mailchimp_form">
<div class="form-row align-items-center">
<div class="col-auto">
<input type="email" name="email" class="form-control mb-2" id="inlineFormInput" placeholder="Your email">
</div>
<div class="col-auto">
<button type="submit" class="btn btn-primary mb-2"><i class="fa fa-angle-right"></i></button>
</div>
</div>
<div class="form-mess"></div> </form>
</div>
</div>
</div>
</div>
</section>

<section class="footer_middle_area pt40 pb40">
<div class="container">
<div class="row">
<div class="col-lg-6 col-xl-6">
<div class="footer_menu_widget">
<ul>
<li class=" depth-0"><a target="" href="index.html">Home</a><ul class="children-menu menu-dropdown"><li class=" depth-1"><a target="" href="index.html">Home 1</a></li><li class=" depth-1"><a target="" href="page/home-page-3.html">Home 3</a></li><li class=" depth-1"><a target="" href="page/home-page-5.html">Home 5</a></li><li class=" depth-1"><a target="" href="page/home-page-6.html">Home 6</a></li><li class=" depth-1"><a target="" href="page/home-page-8.html">Home 8</a></li><li class=" depth-1"><a target="" href="page/home-page-10.html">Home 10</a></li></ul></li><li class=" depth-0"><a target="" href="#">Property</a><ul class="children-menu menu-dropdown"><li class=" depth-1"><a target="" href="property.html">Property List</a><ul class="children-menu menu-dropdown"><li class=" depth-2"><a target="" href="property659a.html?layout=1">Property List V1</a></li><li class=" depth-2"><a target="" href="property6d5a.html?layout=2">Property List V2</a></li></ul></li><li class=" depth-1"><a target="" href="property/renovated-apartment-1.html">Property Detail</a><ul class="children-menu menu-dropdown"><li class=" depth-2"><a target="" href="property/renovated-apartment-1659a.html?layout=1">Property Detail V1</a></li><li class=" depth-2"><a target="" href="property/renovated-apartment-16d5a.html?layout=2">Property Detail V2</a></li><li class=" depth-2"><a target="" href="property/renovated-apartment-1de65.html?layout=3">Property Detail V3</a></li><li class=" depth-2"><a target="" href="property/renovated-apartment-1d787.html?layout=4">Property Detail V4</a></li></ul></li></ul></li><li class=" active  depth-0"><a target="" href="#">Agencies</a><ul class="children-menu menu-dropdown"><li class=" active depth-1"><a target="" href="agency.html">Agencies</a></li><li class=" depth-1"><a target="" href="agency/real-estate-experts.html">Agency Detail</a></li><li class=" depth-1"><a target="" href="agent.html">Agent List</a></li><li class=" depth-1"><a target="" href="agent/1.html">Agent Detail</a></li></ul></li><li class=" depth-0"><a target="" href="#">Page</a><ul class="children-menu menu-dropdown"><li class=" depth-1"><a target="" href="news.html">News</a></li><li class=" depth-1"><a target="" href="news/city-spotlight-philadelphia.html">News Detail</a></li><li class=" depth-1"><a target="" href="contact.html">Contact</a></li><li class=" depth-1"><a target="" href="page/about-us.html">About</a></li><li class=" depth-1"><a target="" href="page/become-a-agent.html">Become a agent</a></li></ul></li> </ul>
</div>
</div>
<div class="col-lg-6 col-xl-6">
<div class="copyright-widget text-right">
<p>
© Findhouse. Made with love
<div class="f-visa">
</div>
</p>
</div>
</div>
</div>
</div>
</section>
<a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="libs/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="libs/jquery-ui.min.js"></script>
<script src="libs/vue/vue.js"></script>
<script type="text/javascript" src="findhouse/js/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="findhouse/js/popper.min.js"></script>
<script type="text/javascript" src="findhouse/js/bootstrap.min.js"></script>
<script type="text/javascript" src="findhouse/js/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="findhouse/js/ace-responsive-menu.js"></script>
<script type="text/javascript" src="findhouse/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="findhouse/js/isotop.js"></script>
<script type="text/javascript" src="findhouse/js/snackbar.min.js"></script>
<script type="text/javascript" src="findhouse/js/simplebar.js"></script>
<script type="text/javascript" src="findhouse/js/parallax.js"></script>
<script type="text/javascript" src="findhouse/js/scrollto.js"></script>
<script type="text/javascript" src="findhouse/js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="findhouse/js/jquery.counterup.js"></script>
<script type="text/javascript" src="findhouse/js/wow.min.js"></script>
<script type="text/javascript" src="findhouse/js/slider.js"></script>
<script type="text/javascript" src="findhouse/js/timepicker.js"></script>
<script src='https://maps.googleapis.com/maps/api/js?key=&amp;libraries=places'></script><script src='libs/infobox.js'></script><script src='module/core/js/map-engine914e.js?_ver=1.3.0'></script>

<script type="text/javascript" src="findhouse/js/script.js"></script>
<div class="booking_cookie_agreement p-3 d-flex fixed-bottom">
<div class="content-cookie"><p>This website requires cookies to provide all of its features. By using our website, you agree to our use of cookies. <a href="#">More info</a></p></div>
<button class="btn save-cookie">Got it</button>
</div>
<script>
        var save_cookie_url = 'check-cookie.json';
    </script>
<script src="js/cookie914e.js?_ver=1.3.0"></script>
<script src="js/functions.js"></script>
<script src="js/home.js"></script>
<div class="sign_up_modal modal fade bd-example-modal-lg" id="login" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<div class="modal-body container pb20">
<div class="tab-content container" id="myTabContent">
<div class="row mt25 tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
<div class="col-lg-6 col-xl-6">
<div class="login_thumb">
<img class="img-fluid w100" src="images/resource/login.jpg" alt="login.jpg">
</div>
</div>
<div class="col-lg-6 col-xl-6">
<div class="login_form">
<form action="https://findhouse.bookingcore.org/login" class="bravo-form-login" method="POST">
<input type="hidden" name="_token" value="Mx8tV3YRdLdtHnRhK3OADMUJKZXT2VswAa0X5Oou"> <div class="heading">
<h4>Login</h4>
</div>
<div class="input-group mb-2 mr-sm-2">
<input type="text" class="form-control" id="inlineFormInputGroupUsername2" name="email" autocomplete="off" placeholder="Email">
<div class="input-group-prepend">
<div class="input-group-text"><i class="flaticon-user"></i></div>
</div>
<span class="invalid-feedback error error-email"></span>
</div>
<div class="input-group form-group">
<input type="password" class="form-control" id="exampleInputPassword1" name="password" autocomplete="off" placeholder="Password">
<div class="input-group-prepend">
<div class="input-group-text"><i class="flaticon-password"></i></div>
</div>
<span class="invalid-feedback error error-password"></span>
</div>
<div class="form-group">
<label class="custom-control custom-checkbox">
<input type="checkbox" name="remember" class="custom-control-input" id="remember-me" value="1">
<span class="custom-control-label" for="exampleCheck1">Remember me</span>
</label>
<a class="btn-fpswd float-right" href="password/reset.html">Lost your password?</a>
</div>
<div class="error message-error invalid-feedback"></div>
<button type="submit" class="btn btn-log btn-block btn-thm">Log In</button>
<p class="text-center">Do not have an account? <a class="text-thm" href="javascript:void(0)" data-target="#register" data-toggle="modal">Register</a></p>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="sign_up_modal modal fade bd-example-modal-lg" id="register" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<div class="modal-body container pb20">
<div class="tab-content container" id="myTabContent">
<div class="row mt25 tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
<div class="col-lg-6 col-xl-6">
<div class="login_thumb">
<img class="img-fluid w100" src="images/resource/login.jpg" alt="login.jpg">
</div>
</div>
<div class="col-lg-6 col-xl-6">
<div class="sign_up_form">
<div class="heading">
<h4>Register</h4>
</div>
<form action="#" class="form bravo-form-register" method="post">
<input type="hidden" name="_token" value="Mx8tV3YRdLdtHnRhK3OADMUJKZXT2VswAa0X5Oou"> <div class="form-group input-group">
<input type="text" class="form-control" name="first_name" autocomplete="off" placeholder="First Name">
<div class="input-group-prepend">
<div class="input-group-text"><i class="flaticon-user"></i></div>
</div>
<span class="invalid-feedback error error-first_name"></span>
</div>
<div class="form-group input-group">
<input type="text" class="form-control" name="last_name" autocomplete="off" placeholder="Last Name">
<div class="input-group-prepend">
<div class="input-group-text"><i class="flaticon-user"></i></div>
</div>
<span class="invalid-feedback error error-last_name"></span>
</div>
<div class="form-group input-group">
<input type="email" class="form-control" name="email" autocomplete="off" placeholder="Email address">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
</div>
<span class="invalid-feedback error error-email"></span>
</div>
<div class="form-group input-group">
<input type="password" class="form-control" id="exampleInputPassword2" name="password" autocomplete="off" placeholder="Password">
<div class="input-group-prepend">
<div class="input-group-text"><i class="flaticon-password"></i></div>
</div>
<span class="invalid-feedback error error-password"></span>
</div>
<div class="form-group custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" name="term" id="exampleCheck2">
<label class="custom-control-label" for="exampleCheck2">I have read and accept the Terms and Privacy Policy?</label>
</div>
<div class="error message-error invalid-feedback"></div>
<button type="submit" class="btn btn-log btn-block btn-thm">Sign Up</button>
<p class="text-center">Already have an account? <a class="text-thm" href="javascript:void(0)" data-target="#login" data-toggle="modal">Log In</a></p>
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

</body>

<!-- Mirrored from findhouse.bookingcore.org/agency by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 13:31:39 GMT -->
</html>