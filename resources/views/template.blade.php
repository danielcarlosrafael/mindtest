<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog Teste</title>

        {{-- Arquivos CSS --}}
        <link href="{{url('admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{url('admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{url('admin/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
        <link href="{{url('admin/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
        <link href="{{url('admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
        <link href="{{url('admin/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
        <link href="{{url('admin/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
        <link href="{{url('admin/js/toastr/toastr.min.css')}}" rel="stylesheet">
        <link href="{{url('admin/dist/css/bootstrap-select.css')}}" rel="stylesheet">

		{{-- Datatables --}}
		<link href="{{url('admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{url('admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{url('admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{url('admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{url('admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
		{{-- Fim Datatables --}}

        <link href="{{url('admin/build/css/custom.min.css')}}" rel="stylesheet">
        <link href="{{url('admin/css/jquery-ui.min.css')}}" rel="stylesheet">
        <link href="{{url('admin/css/jquery-ui.structure.min.css')}}" rel="stylesheet">
        <link href="{{url('admin/css/jquery-ui.theme.min.css')}}" rel="stylesheet">
        <link href="{{url('admin/css/mycss.css')}}" rel="stylesheet">
        {{-- Fim Arquivos CSS --}}

    </head>

    <body class="nav-md">

        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="{{url('/postagem')}}" class="site_title"><span>Blog Teste</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="profile clearfix">
                            <div class="profile_pic">
                            </div>
                            <div class="profile_info">
                                <span>Bem vindo</span>
                                <h2>{{--$nome or 'Usuário Anônimo'--}}</h2>
                            </div>
                        </div>

                        <br />

                        {{-- Começo do Menu de Navegação --}}
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>Menu</h3>
                                <ul class="nav side-menu">
                                    <li><a href="{{url('/postagem')}}"><i class="fa fa-home"></i> Postagens</a></li>
                                </ul>
                            </div>

                        </div>
                        {{-- Fim do Menu de Navegação--}}


                    </div>
                </div>


                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        {{--$nome}}&nbsp;{{$sobrenome--}}
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="{{--url('/login/logout')--}}"><i class="fa fa-sign-out pull-right"></i>Sair</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                @yield('admin')

                <footer>
                    <div class="pull-right">
                        &copy; Blog Teste.
                        Desenvolvido por Daniel Carlos da Silva Rafael
                    </div>
                    <div class="clearfix"></div>
                </footer>

            </div>
        </div>
        <script src="{{url('admin/vendors/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{url('admin/js/jquery-ui.min.js')}}"></script>
        <script src="{{url('admin/js/jquery.maskedinput.js')}}"></script>
        <script src="{{url('admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{url('admin/vendors/fastclick/lib/fastclick.js')}}"></script>
        <script src="{{url('admin/vendors/nprogress/nprogress.js')}}"></script>
        <script src="{{url('admin/vendors/iCheck/icheck.min.js')}}"></script>
        <script src="{{url('admin/dist/js/bootstrap-select.js')}}"></script>
	<script src="{{url('admin/js/jquery-maskmoney/jquery.maskMoney.js')}}"></script>
	<script src="{{url('admin/js/toastr/toastr.min.js')}}"></script>
	{{-- Datatables --}}
	<script src="{{url('admin/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{url('admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
	<script src="{{url('admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
	<script src="{{url('admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
	<script src="{{url('admin/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
	<script src="{{url('admin/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
	<script src="{{url('admin/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
	<script src="{{url('admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
	<script src="{{url('admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
	<script src="{{url('admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{url('admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
	<script src="{{url('admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
	<script src="{{url('admin/vendors/jszip/dist/jszip.min.js')}}"></script>
	<script src="{{url('admin/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
	<script src="{{url('admin/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
	{{-- Fim Datatables --}}
	<script src="{{url('admin/build/js/custom.min.js')}}"></script>
               
	{{-- Arquivos proprios --}}
	<script src="{{url('admin/js/myjs.js')}}"></script>
	<script src="{{url('admin/js/validacaoFormulario.js')}}"></script>
	@if(session()->has('exibeMensagem'))
	<script>
            toastr.{{ session('exibeMensagem.tipo') }}("{{ session('exibeMensagem.mensagem') }}")
	</script>
	@endif
        <script src="{{url('admin/dist/js/bootstrap-select.js')}}"></script>
        <script>
            $(document).ready(function () {
                var mySelect = $('#first-disabled2');

                $('#special').on('click', function () {
                    mySelect.find('option:selected').prop('disabled', true);
                    mySelect.selectpicker('refresh');
                });

                $('#special2').on('click', function () {
                    mySelect.find('option:disabled').prop('disabled', false);
                    mySelect.selectpicker('refresh');
                });

                $('#basic2').selectpicker({
                    liveSearch: true,
                    maxOptions: 1
                });
            });
        </script>
        
    </body>

</html>