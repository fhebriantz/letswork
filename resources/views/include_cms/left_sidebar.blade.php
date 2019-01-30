<!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="text-muted menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="{{ url('/dashboard')}}" class="waves-effect active"><span class="label label-pill label-primary pull-xs-right">1</span><i class="zmdi zmdi-view-dashboard"></i><span> Dashboard </span> </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><span class="label label-pill label-warning pull-xs-right">8</span><i class="zmdi zmdi-collection-text"></i><span> Forms </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ url('/form')}}">General Elements</a></li>
                                    <li><a href="{{ url('/validation')}}">Form Validation</a></li>
                                    <li><a href="{{ url('/currency')}}">Form Currency</a></li>
                                    <li><a href="{{ url('/datepicker')}}">Form Datepicker</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-format-list-bulleted"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="{{ url('/datatable')}}">Basic Tables</a></li>
                                </ul>
                            </li>

                            <li class="text-muted menu-title">More</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><span class="label label-success label-pill pull-xs-right">9</span><i class="zmdi zmdi-collection-item"></i><span> Pages </span></a>
                                <ul class="list-unstyled">
                                	<li><a href="pages-starter.html">Starter Page</a></li>
                                    <li><a href="pages-login.html">Login</a></li>
                                    <li><a href="pages-register.html">Register</a></li>
                                    <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                    <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                    <li><a href="pages-404.html">Error 404</a></li>
                                    <li><a href="pages-500.html">Error 500</a></li>
                                    <li><a href="pages-timeline.html">Timeline</a></li>
                                    <li><a href="pages-invoice.html">Invoice</a></li>
                                </ul>
                            </li>


                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-blur-linear"></i><span>Master Dokter</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li class="has_sub">
                                        <a href="{{ url('/sponsor')}}" class="waves-effect"><span>Master Sponsor</span></a>
                                    </li>
                                    <li class="has_sub">
                                        <a href="{{ url('/brosur')}}" class="waves-effect"><span>Master Brosur</span></a>
                                    </li>
                                    <li class="has_sub">
                                        <a href="{{ url('/dokter')}}" class="waves-effect"><span>Master Dokter</span></a>
                                    </li>
                                    <li class="has_sub">
                                        <a href="{{ url('/kunjungan')}}" class="waves-effect"><span>Master Kunjungan</span></a>
                                    </li>
                                    <li class="has_sub">
                                        <a href="{{ url('/makloon')}}" class="waves-effect"><span>Master Makloon</span></a>
                                    </li>
                                    <li class="has_sub">
                                        <a href="{{ url('/medrep')}}" class="waves-effect"><span>Master Medrep</span></a>
                                    </li>
                                </ul>
                            </li>


                            <li class="has_sub">
                                <a href="{{ url('/transaksi')}}" class="waves-effect"><i class="zmdi zmdi-format-list-bulleted"></i> <span> List Transaction </span></a>
                                
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-assignment"></i><span>Transacion</span> <span class="menu-arrow"></span></a>
                                <ul>

                                    <li class="has_sub">
                                        <a href="{{ url('/so')}}" class="waves-effect"><span>Transaksi Order</span></a>
                                    </li>

                                    <li class="has_sub">
                                        <a  href="javascript:void(0);"  class="waves-effect"></i><span>Transaksi Tagihan</span><span class="menu-arrow"></a>
                                        <ul>
                                            <li class="has_sub"><a href="{{ url('/tagihan')}}" class="waves-effect"><span>Tagihan</span></a></li>
                                            <li class="has_sub"><a href="{{ url('/pembayaran')}}" class="waves-effect"><span>Pembayaran</span></a></li>
                                        </ul>
                                    </li>

                                    <li class="has_sub">
                                        <a href="{{ url('/penerimaan')}}" class="waves-effect"><span>Transaksi Penerimaan</span></a>
                                    </li>
                                </ul>
                            </li>


                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>
            <!-- Left Sidebar End -->