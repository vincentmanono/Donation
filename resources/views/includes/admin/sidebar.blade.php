<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="user-pro">
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><img
                        src="/storage/user/{{$user->image}}" alt="user-img"
                            class="img-circle"><span class="hide-menu">{{ Auth::user()->name }}</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('user.edit',Auth::user()->id)}}"><i class="ti-user"></i> My Profile</a>
                        </li>
                        <li><a class="dropdown-item dropdown-footer btn btn-danger" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                <li class="nav-small-cap">------- DONATION -------</li>


                <li> <a class="waves-effect waves-dark" href="{{ route('showRequestDonationView') }}"
                        aria-expanded="false">

                        <i class="fa fa-hand-o-down" aria-hidden="true"></i>
                        @if (Auth::user()->is_admin)
                        <span class="hide-menu">Donation Request</span></a></li>
                @else
                <span class="hide-menu">Email Admins</span></a></li>
                @endif


                <li> <a class="waves-effect waves-dark" href="{{ route('acceptedProducts') }}" aria-expanded="false">

                        <i class="fa fa-money" aria-hidden="true"></i>
                        <span class="hide-menu">Donation Received</span></a></li>


                <li> <a class="waves-effect waves-dark" href="{{ route('products.index') }}" aria-expanded="false">


                        <i class="fa fa-key" aria-hidden="true"></i>
                        <span class="hide-menu">Donated Products</span></a></li>

                <li> <a class="waves-effect waves-dark" href="{{ route('products.create') }}" aria-expanded="false">

                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu">Donate Product</span></a></li>

                @if (Auth::user()->isAdmin())

                <li><a href="{{ route('user.index') }}">View All Users</a></li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                            class="ti-layout-accordion-merged"></i><span class="hide-menu">Donors</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('donors.index') }}">View Donors</a></li>

                    </ul>
                </li>
                @endif
                @if (Auth::user()->isAdmin())
                <li> <a class="waves-effect waves-dark" href="{{ route('companies.index') }}" aria-expanded="false">

                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu">Companies</span></a></li>
                @else
                @if ( Auth::user()->company != null )

                <li> <a class="waves-effect waves-dark" href="{{ route('companies.show',Auth::user()->company) }}"
                        aria-expanded="false">

                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu">My Company</span></a></li>

                @endif

                @if (Auth::user()->donation_type == 1 && empty(Auth::user()->company) )

                <li> <a class="waves-effect waves-dark" href="{{ route('companies.create') }}" aria-expanded="false">

                        <i class="fa fa-address-book" aria-hidden="true"></i>
                        <span class="hide-menu">Add Company Details</span></a></li>

                @endif





                @endif






            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
