   <!-- ============================================================== -->
   <aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="user-pro">
                    <a class="has-arrow waves-effect waves-dark" href="#"
                        aria-expanded="false"><img src="{{asset('/admin/assets/images/users/1.jpg')}}" alt="user-img" class="img-circle"><span
                            class="hide-menu">{{Auth::user()->name}}</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                        <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                        <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                        <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                        <li><a class="dropdown-item dropdown-footer btn btn-danger" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                <li class="nav-small-cap">------- DONATION -------</li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                            class="icon-speedometer"></i><span class="hide-menu">Donations<span
                                class="badge badge-pill badge-cyan ml-auto"></span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Donation Requests </a></li>
                        <li><a href="#">Received Donations</a></li>
                        <li><a href="#">Approved Donations</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                            class="ti-layout-grid2"></i><span class="hide-menu">Products</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('products.index')}}">View Products</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                            class="ti-email"></i><span class="hide-menu">Collections</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="app-email.html">View Collections</a></li>
                        <li><a href="app-email-detail.html">Add Collection Detail</a></li>
                    </ul>
                </li>
               <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                            class="ti-layout-accordion-merged"></i><span class="hide-menu">Donors</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">View Donors</a></li>
                        <li><a href="#">Add Donor</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
