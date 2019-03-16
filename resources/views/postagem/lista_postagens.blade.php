@extends('template')

@section('admin')

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Postagem</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Listagem de Postagens</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <a class="btn btn-primary pull-right" href="{{url('/postagem/novo')}}"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Novo</a>
                <div class="x_content">

                    <div class="table-responsive">

                        <table id="customDatatable" class="table table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th class="column-title">Título</th>
                                    <th class="column-title">Descrição</th>
                                    <th class="column-title">Ações</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($postagens as $p)
                                <tr class="even pointer">
                                    <td class=" ">{{$p->titulo}}</td>
                                    <td class=" ">{{$p->descricao}}</td>
                                    <td class=" last">
                                        <a href="{{url('/postagem/alterar/' . $p->id)}}">Alterar</a>
                                        <a href="{{url('/postagem/deletar/' . $p->id)}}">Deletar</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
