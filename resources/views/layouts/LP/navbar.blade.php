<header class="main-header clearfix">
    <nav class="main-menu clearfix">
        <div class="main-menu-wrapper clearfix">
            <div class="main-menu-wrapper__left clearfix">
                <div class="main-menu-wrapper__logo">
                    <a href="index.html"><img src="assets/images/resources/logo.png" alt=""></a>
                </div>
                <div class="main-menu-wrapper__search-box">
                    <a href="#" class="main-menu-wrapper__search search-toggler icon-magnifying-glass"></a>
                </div>
                <div class="main-menu-wrapper__social">
                    <a href="https://twitter.com/BientiMedia"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=100070769754833" class="clr-fb"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/bienti.id/" class="clr-ins"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="main-menu-wrapper__main-menu">
                <a href="#" class="mobile-nav__toggler">
                    <span></span>
                </a>
                <ul class="main-menu__list">
                    <li class="dropdown">
                        <a href="index.html">Home</a>
                        <ul>
                            <li>
                                <a href="index.html">Home one</a>
                            </li>
                            <li><a href="index2.html">Home two</a></li>
                            <li><a href="index3.html">Home three <span class="new-tag">new</span></a></li>
                            <li><a href="index-one-page.html">Home one page</a>
                            </li>
                            <li class="dropdown">
                                <a href="#">Header styles</a>
                                <ul>
                                    <li><a href="index.html">Header one</a></li>
                                    <li><a href="index2.html">Header two</a></li>
                                    <li><a href="index3.html">Header three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Services </a>
                        <ul>
                            <li><a href="services.html">Services</a></li>
                            </li>
                            <li><a href="web-development.html">Social Media Management</a></li>
                            <li><a href="website-design.html">Event Management</a></li>
                            <li><a href="web-application.html">Press Release</a></li>
                            <li><a href="content-writing.html">Influencer/KOL's Marketing</a></li>
                            <li><a href="ui-ux-design.html">Digital Video Production</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">About</a>
                        <ul>
                            <li><a href="about.html">About</a></li>
                            <li><a href="about-me.html">About me <span class="new-tag">new</span></a></li>
                            <li><a href="our-mission.html">Our Client <span class="new-tag">New</span></a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="faqs.html">FAQs</a></li>
                            <li><a href="404.html">404</a></li> 
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Portfolio</a>
                        <ul>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="portfolio-detail.html">Portfolio details</a></li>
                            <li><a href="portfolio-detail-fullwidth.html">Portfolio details full</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Blog</a>
                        <ul class="">
                            <li><a href="blog.html">Blog</a></li>
                            <li class="dropdown">
                                <a href="blog-sidebar.html">Blog sidebar <span class="new-tag">new</span></a>
                                <ul>
                                    <li><a href="blog-sidebar-left.html">Blog left sidebar <span
                                                class="new-tag">new</span></a></li>
                                    <li><a href="blog-sidebar.html">Blog right sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="blog-details.html">Blog details</a></li>
                        </ul>
                    </li>
                    {{-- @auth
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         Welcome back , {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{ route('dashboard')}}"><i class="bi bi-layout-text-sidebar-reverse me-2"></i>My Dashboard</a></li>
                          <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="{{ route('logout')}}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="bi bi-box-arrow-right "></i>
                                        Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                      </li>
                        @else
                        <li class="col-3">
                            <div class="col-12">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="{{ route('login')}}" class="btn col-md-12 rounded-pill text-white border">Login Admin</a>
                                </div>
                            </div>
                        </li>
                    @endauth --}}
                </ul>
            </div>
            <div class="main-menu-wrapper__right ">
                <div class="main-menu-wrapper__right-contact-box">
                    <div class="main-menu-wrapper__right-contact-icon">
                        <span class="icon-phone-call"></span>
                    </div>
                    <div class="main-menu-wrapper__right-contact-number">
                        <a href="tel:92-666-888-0000">92 666 888 0000</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>