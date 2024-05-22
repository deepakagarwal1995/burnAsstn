 <div class="side-content-wrap">
            <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
                <ul class="navigation-left">
                    <li class="nav-item ">
                        <a class="nav-item-hold" href="{{url('/admin')}}">
                            <i class="nav-icon i-Bar-Chart"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                     <li class="nav-item " data-item="Enquiry">
                        <a class="nav-item-hold" href="#">
                            <i class="nav-icon i-Bell"></i>
                            <span class="nav-text">Enquiry</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item " data-item="uikits">
                        <a class="nav-item-hold" href="#">
                            <i class="nav-icon i-Administrator"></i>
                            <span class="nav-text">Committee</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item " data-item="events">
                        <a class="nav-item-hold" href="#">
                            <i class="nav-icon i-Double-Tap"></i>
                            <span class="nav-text">Events</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item " data-item="reports">
                        <a class="nav-item-hold" href="#">
                            <i class="nav-icon i-Windows-2"></i>
                            <span class="nav-text">Reports</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item " data-item="Resourses">
                        <a class="nav-item-hold" href="#">
                            <i class="nav-icon i-File-Horizontal-Text"></i>
                            <span class="nav-text">Resourses</span>
                        </a>
                        <div class="triangle"></div>
                    </li>

                    <li class="nav-item " data-item="Gallery">
                        <a class="nav-item-hold" href="#">
                            <i class="nav-icon i-Library"></i>
                            <span class="nav-text">Gallery</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item " data-item="Banner">
                        <a class="nav-item-hold" href="#">
                            <i class="nav-icon i-Library"></i>
                            <span class="nav-text">Banner</span>
                        </a>
                        <div class="triangle"></div>
                    </li>


                </ul>
            </div>

            <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
                <!-- Submenu Dashboards -->
                <ul class="childNav" data-parent="Enquiry">



                    <li class="nav-item">
                        <a class="" href="{{route('contact')}}">
                             <i class="nav-icon i-Receipt-4"></i>
                            <span class="item-name">View Contact Enquiry</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="" href="{{route('resource')}}">
                            <i class="nav-icon i-Receipt-4"></i>
                            <span class="item-name">View Resources Enquiry</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="{{route('member')}}">
                            <i class="nav-icon i-Receipt-4"></i>
                            <span class="item-name">Member Registration </span>
                        </a>
                    </li>

                </ul>

                <ul class="childNav" data-parent="uikits">



                    <li class="nav-item">
                        <a class="" href="{{route('committee.create')}}">
                            <i class="nav-icon i-Split-Vertical"></i>
                            <span class="item-name">Add New Member</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="" href="{{route('committee.index')}}">
                            <i class="nav-icon i-Receipt-4"></i>
                            <span class="item-name">View Members</span>
                        </a>
                    </li>

                </ul>
                 <ul class="childNav" data-parent="events">



                    <li class="nav-item">
                        <a class="" href="{{route('events.create')}}">
                            <i class="nav-icon i-Split-Vertical"></i>
                            <span class="item-name">Add New Event</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="" href="{{route('events.index')}}">
                            <i class="nav-icon i-Receipt-4"></i>
                            <span class="item-name">View Events</span>
                        </a>
                    </li>

                </ul>
                <ul class="childNav" data-parent="reports">



                    <li class="nav-item">
                        <a class="" href="{{route('reports.create')}}">
                            <i class="nav-icon i-Split-Vertical"></i>
                            <span class="item-name">Add New Report</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="" href="{{route('reports.index')}}">
                            <i class="nav-icon i-Receipt-4"></i>
                            <span class="item-name">View Reports</span>
                        </a>
                    </li>

                </ul>
                 <ul class="childNav" data-parent="Resourses">



                    <li class="nav-item">
                        <a class="" href="{{route('ress.create')}}">
                            <i class="nav-icon i-Split-Vertical"></i>
                            <span class="item-name">Add New Resourse</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="" href="{{route('ress.index')}}">
                            <i class="nav-icon i-Receipt-4"></i>
                            <span class="item-name">View Resourses</span>
                        </a>
                    </li>

                </ul>
                 <ul class="childNav" data-parent="Gallery">



                    <li class="nav-item">
                        <a class="" href="{{route('gallery.create')}}">
                            <i class="nav-icon i-Split-Vertical"></i>
                            <span class="item-name">Add New File</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="" href="{{route('gallery.index')}}">
                            <i class="nav-icon i-Receipt-4"></i>
                            <span class="item-name">View Gallery</span>
                        </a>
                    </li>

                </ul>
                 <ul class="childNav" data-parent="Banner">



                    <li class="nav-item">
                        <a class="" href="{{route('banner.create')}}">
                            <i class="nav-icon i-Split-Vertical"></i>
                            <span class="item-name">Add New banner</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="" href="{{route('banner.index')}}">
                            <i class="nav-icon i-Receipt-4"></i>
                            <span class="item-name">View banner</span>
                        </a>
                    </li>

                </ul>



            </div>
            <div class="sidebar-overlay"></div>
        </div>
