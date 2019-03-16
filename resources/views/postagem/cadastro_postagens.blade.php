@extends('template')

@section('admin')

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Postagens</h3>
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
                    @if( isset($errors) && count($errors) > 0 )
                    <div class="alert alert-danger">
                        @foreach( $errors->all() as $err )
                        <p>{{$err}}</p>
                        @endforeach
                    </div>
                    @endif
                    <h2>{{$cdtalt}} de Postagens</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    @if( isset($postagem) && count($postagem) > 0 )
                    <form method="post" action="{{url('/postagem/alteracao/alterar/' . $id)}}" class="form-horizontal" onsubmit="return validaForm( this.id )">
                    @else
                    <form method="post" action="{{url('/postagem/novo/gravar')}}" class="form-horizontal" onsubmit="return validaForm( this.id )">
                    @endif
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="col-md-12 center-margin">
                                <div class="form-group">
                                    <label>Titulo</label>
                                    <input type="text" class="form-control" id="titulo" name="titulo" value="{{isset($titulo) ? $titulo : ''}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 center-margin">
                                <div class="form-group">
                                    <label>Descrição</label>
                                    <textarea class="form-control" id="descricao" name="descricao" rows="3" required maxlength="255">{{isset($descricao) ? $descricao : ''}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">{{$cdtaltr}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
