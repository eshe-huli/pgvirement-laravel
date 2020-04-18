<div class="left-side-menu">

    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 4323.38px;">
        <div class="slimscroll-menu" style="overflow: hidden; width: auto; height: 4323.38px;">

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul class="metismenu" id="side-menu">

                    <li class="menu-title">Navigation</li>

                    <li>
                        <a href="{{route('dashboard')}}">
                            <i class="dripicons-meter"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('users.index')}}">
                            <i class="dripicons-user"></i>
                            <span> Utilisateurs </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('employees.index')}}">
                            <i class="dripicons-user-group"></i> <span> Salaries </span>
                        </a>
                    </li>

                    <li class="menu-title">Finance</li>

                    <li>
                        <a href="{{route('transferts.index')}}">
                            <i class="dripicons-archive"></i>
                            <span> Transferts</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('wallets.index')}}">
                            <i class="dripicons-wallet"></i>
                            <span> Portefeuille</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('validations.index')}}">
                            <i class="dripicons-checkmark"></i>
                            <span> Validation</span>
                        </a>
                    </li>


                    <li class="menu-title mt-2">Parametres</li>

                    <li>
                        <a href="#">
                            <i class="dripicons-gear"></i>
                            <span> Parametres </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level nav mm-collapse" aria-expanded="false">
                            
                            <li>
                                <a href="{{route('transactions_logs')}}">Historique</a>
                            </li>

                            <li>
                                <a href="{{route('countries.index')}}">Pays</a>
                            </li>


                            <li>
                                <a href="{{route('logs')}}">Logs</a>
                            </li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="{{route('logout')}}">
                            <i class="dripicons-power"></i>
                            <span> Deconnexion</span>
                        </a>
                    </li>

                </ul>


            </div>

            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
        <div class="slimScrollBar"
             style="background: rgb(158, 165, 171); width: 8px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 686.357px;"></div>
        <div class="slimScrollRail"
             style="width: 8px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
    </div>
    <!-- Sidebar -left -->

</div>
