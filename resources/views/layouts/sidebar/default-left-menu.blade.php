<nav class="sidebar sidebar-offcanvas" id="sidebar" style="min-height: 3016.38px;">
    <ul class="nav">
        <li class="nav-item nav-profile nav-unhighlightable pt-5">
            <div class="nav-link">
                <a href="{{ route('profile-show', [Auth::id()]) }}" class="nounderline">
                    <div class="profile-image">
                        <img src="{{ Auth::user()->avatar }}" alt="Profile Image">
                        <span class="online-status online"></span>
                    </div>
                    <div class="profile-name">
                        <p class="name">
                        {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                        </p>
                        <p class="designation">
                            {{ Auth::user()->position  != ''? '-- '.Auth::user()->position.' --':'' }}
                        </p>
                    </div>
                </a>
            </div>
        </li>


        
        <li class="nav-item">
            <a href="/overview" class="nav-link">
                <i class="icon-rocket menu-icon text-dark"></i>
                <span class="menu-title text-dark">Overview</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="/profiles" class="nav-link">
                <i class="icon-user menu-icon text-dark"></i>
                <span class="menu-title text-dark">Staff</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="/clients" class="nav-link">
                <i class="icon-emotsmile menu-icon text-dark"></i>
                <span class="menu-title text-dark">Clients</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="/contractors" class="nav-link">
                <i class="icon-briefcase menu-icon text-dark"></i>
                <span class="menu-title text-dark">Contractors</span>
            </a>
        </li>
        <li class="nav-item d-none d-lg-block">
            <a data-toggle="collapse" href="#sub-jobcards" aria-expanded="false" aria-controls="sidebar-layouts" class="nav-link collapsed">
                <i class="icon-flag menu-icon text-dark"></i>
                <span class="menu-title text-dark">Jobcards</span>
                <i class="dropdown-arrow icon-arrow-down icons"></i>
            </a>
            <div id="sub-jobcards" class="collapse">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <hr class="m-0">
                        <a href="{{ route('jobcard-create') }}" class="nav-link">
                            <div class="badge badge-success badge-fw ml-0">
                                <i class="icon-plus menu-icon text-light mr-1"></i>Create Jobcard
                            </div>
                        </a>
                        <hr class="m-0">
                    </li>
                    <li class="nav-item">
                        <a href="/jobcards" class="nav-link">All Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a href="/jobcards/open" class="nav-link">Open Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a href="/jobcards/pending" class="nav-link">Pending Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a href="/jobcards/unpaid" class="nav-link">Unpaid Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a href="/jobcards/overdue" class="nav-link">Overdue Jobs</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a href="/calendar" class="nav-link">
                <i class="icon-calendar menu-icon text-dark"></i>
                <span class="menu-title text-dark">Calendar</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="icon-pie-chart menu-icon text-dark"></i>
                <span class="menu-title text-dark">Reports</span>
            </a>
        </li>
        <li class="nav-item nav-doc m-0">
            <a href="pages/documentation.html" class="nav-link bg-primary">
                <i class="icon-support menu-icon mr-2"></i>
                <span class="menu-title mt-1">Support</span>
            </a>
        </li>


        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="icon-user menu-icon text-dark"></i>
                <span class="menu-title text-dark">Accounts</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="icon-key menu-icon text-dark"></i>
                <span class="menu-title text-dark">Roles/Permissions</span>
            </a>
        </li>
        
        
        
        <hr>



    </ul>
</nav>