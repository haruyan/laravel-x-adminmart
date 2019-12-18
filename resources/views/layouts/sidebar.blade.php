<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item {{ $activePage == 'dashboard' ? 'selected' : '' }}">
                    <a class="sidebar-link sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false">
                        <i data-feather="home" class="feather-icon"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Active</span></li>
                <li class="sidebar-item {{ $activePage == 'users-index' ? 'selected' : '' }}">
                    <a class="sidebar-link" href="{{ route('users.index') }}" aria-expanded="false">
                        <i class="fas fa-user"></i>
                        <span class="hide-menu">User</span></a>
                </li>

                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Components</span></li>
                <li class="sidebar-item {{ $activePage == 'form' || $activePage == 'form2' ? 'selected' : '' }}">
                    <a class="sidebar-link has-arrow {{ $activePage == 'form' || $activePage == 'form2' ? 'active' : '' }}" href="javascript:void(0)" 
                        aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i>
                        <span class="hide-menu">Forms</span></a>
                    <ul aria-expanded="false" class="collapse {{ $activePage == 'form' || $activePage == 'form2' ? 'in' : '' }} first-level base-level-line">
                        <li class="sidebar-item {{ $activePage == 'form' ? 'active' : '' }}">
                            <a href="/form" class="sidebar-link {{ $activePage == 'form' ? 'active' : '' }}">
                                <span class="hide-menu">Form Inputs</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="javascript:void(0)" class="sidebar-link">
                                <span class="hide-menu">Form Grids</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="javascript:void(0)" class="sidebar-link">
                                <span class="hide-menu">Checkboxes & Radios</span></a>
                        </li>
                    </ul>
                </li>
                
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="box" class="feather-icon"></i><span
                            class="hide-menu">UI Elements </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                    class="hide-menu"> Buttons </span></a>
                        </li>
                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                    class="hide-menu"> Modals </span></a>
                        </li>
                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                    class="hide-menu"> Tabs </span></a></li>
                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                    class="hide-menu"> Toasts</span></a>
                        </li>
                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                    class="hide-menu"> Spinner </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="crosshair" class="feather-icon"></i><span
                            class="hide-menu">Multi
                            level
                            dd</span></a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                    class="hide-menu"> item 1.1</span></a>
                        </li>
                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                    class="hide-menu"> item 1.2</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)"
                                aria-expanded="false"><span class="hide-menu">Menu 1.3</span></a>
                            <ul aria-expanded="false" class="collapse second-level base-level-line">
                                <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                            class="hide-menu"> item
                                            1.3.1</span></a></li>
                                <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                            class="hide-menu"> item
                                            1.3.2</span></a></li>
                                <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                            class="hide-menu"> item
                                            1.3.3</span></a></li>
                                <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                            class="hide-menu"> item
                                            1.3.4</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                    class="hide-menu"> item
                                    1.4</span></a></li>
                    </ul>
                </li>

                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Applications</span></li>
                <li class="sidebar-item"> <a class="sidebar-link" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Ticket List
                        </span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="message-square" class="feather-icon"></i><span
                            class="hide-menu">Chat</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span
                            class="hide-menu">Calendar</span></a></li>
                
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Extra</span></li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="edit-3" class="feather-icon"></i><span
                            class="hide-menu">Documentation</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                            class="hide-menu">Logout</span></a></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>