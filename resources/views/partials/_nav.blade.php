<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="list-style: none !important;">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('root.index')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('cars.index')}}">Cars</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.index')}}">Admin</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

{{-- <!--=================================
 mega menu -->

<div class="menu">
  <!-- menu start -->
   <nav id="menu" class="mega-menu">
    <!-- menu list items container -->
    <section class="menu-list-items">
     <div class="container">
      <div class="row">
       <div class="col-md-12">
        <!-- menu logo -->
        <ul class="menu-logo">
            <li>
                <a href="index.html"><img id="logo_img" src="{{asset('images/logo-light.png')}}" alt="logo"> </a>
            </li>
        </ul>
        <!-- menu links -->
        <ul class="menu-links">
            <!-- active class -->
            <li class="active"><a href="javascript:void(0)"> Home <i class="fa fa-angle-down fa-indicator"></i></a>
                 <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel">
                    <li class="active"><a href="index.html">Home 1</a></li>
                    <li><a href="index-2.html">Home 2</a></li>
                    <li><a href="index-3.html">Home 3</a></li>
                    <li><a href="index-4.html">Home 4</a></li>
                    <li><a href="index-5.html">Home 5</a></li>
                    <li><a href="index-6.html">Home 6</a></li>
                    <li><a href="index-7.html">Home 7</a></li>
                    <li><a href="index-8.html">Home 8</a></li>
                    <li><a href="index-9.html">Home 9</a></li>
                    <li><a href="index-10.html">Home 10</a></li>
                    <li><a href="index-car-service.html">Car service </a></li>
                    <li><a href="index-car-directory.html"> Car directory</a></li>
                    <li><a href="index-car-listing.html">Car listing </a></li>
                    <li><a href="index-landing-page.html">landing page</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)">Pages <i class="fa fa-angle-down fa-indicator"></i></a>
                <!-- drop down full width -->
                <div class="drop-down menu-bg grid-col-12">
                    <!--grid row-->
                    <div class="grid-row">
                        <!--grid column 3-->
                        <div class="grid-col-3">
                            <ul>
                              <li><a href="about-01.html">About 01</a></li>
                              <li><a href="about-02.html">About 02</a></li>
                              <li><a href="service-01.html">service 01</a></li>
                              <li><a href="service-02.html">service 02</a></li>
                              <li><a href="career.html">career</a></li>
                            </ul>
                        </div>
                        <!--grid column 3-->
                        <div class="grid-col-3">
                            <ul>
                              <li><a href="team-01.html">team 01</a></li>
                              <li><a href="team-02.html">team 02</a></li>
                              <li><a href="contact-01.html">contact 01</a></li>
                              <li><a href="contact-02.html">contact 02</a></li>
                              <li><a href="faq.html">faq</a></li>
                            </ul>
                        </div>
                        <!--grid column 3-->
                        <div class="grid-col-3">
                            <ul>
                              <li><a href="login.html">login</a></li>
                              <li><a href="register.html">register</a></li>
                              <li><a href="error-404.html">error 404</a></li>
                              <li><a href="coming-soon.html">coming soon</a></li>
                              <li><a href="typography.html">typography</a></li>
                            </ul>
                        </div>
                        <!--grid column 3-->
                        <div class="grid-col-3">
                            <ul>
                              <li><a href="page-left-sidebar.html">page left sidebar </a></li>
                              <li><a href="page-right-sidebar.html">page right sidebar </a></li>
                              <li><a href="page-both-sidebar.html">page both sidebar </a></li>
                              <li><a href="terms-and-conditions.html">terms and conditions </a></li>
                              <li><a href="privacy-policy.html">privacy policy </a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </li>
            <li><a href="javascript:void(0)">blog <i class="fa fa-angle-down fa-indicator"></i></a>
                <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel">
                    <li><a href="javascript:void(0)">blog classic <i class="fa fa-angle-right fa-indicator"></i> </a>
                        <!-- drop down second level -->
                        <ul class="drop-down-multilevel">
                           <li><a href="blog-left-sidebar.html">left sidebar</a></li>
                           <li><a href="blog-right-sidebar.html">right sidebar</a></li>
                           <li><a href="blog-fullwidth.html">fullwidth</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)">Masonry  <i class="fa fa-angle-right fa-indicator"></i> </a>
                      <!-- drop down second level -->
                        <ul class="drop-down-multilevel">
                            <li><a href="blog-masonry-2-collums.html"> 2 column </a> </li>
                            <li><a href="blog-masonry-3-collums.html"> 3 column </a> </li>
                            <li><a href="blog-masonry-4-collums.html"> 4 column </a> </li>
                            <li><a href="blog-masonry-left-sidebar.html">left sidebar</a></li>
                           <li><a href="blog-masonry-right-sidebar.html">right sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)">blog single <i class="fa fa-angle-right fa-indicator"></i> </a>
                      <!-- drop down second level -->
                        <ul class="drop-down-multilevel">
                            <li><a href="blog-single-01.html">blog single 01 </a> </li>
                            <li><a href="blog-single-02.html">blog single 02 </a> </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="javascript:void(0)">Car listing  <i class="fa fa-angle-down fa-indicator"></i></a>
               <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel">
                    <li><a href="listing-01.html">listing 01</a></li>
                    <li><a href="listing-02.html">listing 02</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)">Car details  <i class="fa fa-angle-down fa-indicator"></i></a>
               <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel">
                    <li><a href="details-01.html">details 01</a></li>
                    <li><a href="details-02.html">details 02</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)"> Contact <i class="fa fa-angle-down fa-indicator"></i></a>
                 <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel right-menu">
                   <li><a href="contact-01.html">contact 01</a></li>
                   <li><a href="contact-02.html">contact 02</a></li>
                </ul>
            </li>
            <li>
              <div class="search-top"> <a class="search-btn not_click d-none d-lg-block" href="javascript:void(0);">Search Button</a>
                <div class="search-box not-click">
                  <div class="row">
                    <div class="col-lg-2 col-sm-6">
                     <div class="selected-box">
                      <select class="selectpicker">
                      <option>Make </option>
                      <option>BMW</option>
                      <option>Honda </option>
                      <option>Hyundai </option>
                      <option>Nissan </option>
                      <option>Mercedes Benz </option>
                     </select>
                    </div>
                     </div>
                     <div class="col-lg-2 col-sm-6">
                      <div class="selected-box">
                         <select class="selectpicker">
                          <option>Model</option>
                          <option>3-Series</option>
                          <option>Carrera</option>
                          <option>GT-R</option>
                          <option>Cayenne</option>
                          <option>Mazda6</option>
                          <option>Macan</option>
                         </select>
                       </div>
                      </div>
                      <div class="col-lg-2 col-sm-6">
                       <div class="selected-box">
                       <select class="selectpicker">
                        <option>Year</option>
                        <option>2010</option>
                        <option>2011</option>
                        <option>2012</option>
                        <option>2013</option>
                        <option>2014</option>
                        <option>2015</option>
                        <option>2016</option>
                       </select>
                      </div>
                        </div>
                       <div class="col-lg-2 col-sm-6">
                        <div class="selected-box">
                         <select class="selectpicker">
                            <option>Body style</option>
                            <option>2dr Car</option>
                            <option>4dr Car</option>
                            <option>Convertible</option>
                            <option>Sedan</option>
                            <option>Sports Utility</option>
                           </select>
                          </div>
                        </div>
                       <div class="col-lg-2 col-sm-6">
                        <div class="selected-box">
                         <select class="selectpicker">
                            <option>Vehicle Status</option>
                            <option>Condition</option>
                            <option>All Conditions</option>
                            <option>Condition</option>
                            <option>Brand New</option>
                            <option>Slightly Used</option>
                            <option>Used</option>
                           </select>
                         </div>
                        </div>
                       <div class="col-lg-2 col-sm-6">
                        <div class="text-center">
                          <button class="button red" type="button">Search</button>
                      </div>
                    </div>
                  </div>
                 </div>
               </div>
              </li>
            </ul>
           </div>
          </div>
         </div>
        </section>
       </nav>
      <!-- menu end -->
     </div>
    </header>

<!--=================================
 header --> --}}
