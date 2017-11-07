@extends('layouts.app')

@section('menu_article', 'open active')
@section('title', 'Listado de Articulos')
@section('title-description', 'Administracion de Articulos ')

@section('content')

    <section class="section">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <a href="article/create"><button class="btn btn-success">NUEVO</button> </a>
                @include('article.search')
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <table id="mainTable">
                        <thead>
                        <tr>
                            <td>Codigo</td>
                            <td>Nombre</td>
                            <td>Stock</td>
                            <td>Estado</td>
                            <td>Precio Venta</td>
                        </tr>
                        </thead>
                        @foreach($articles as $article)
                            <tr>
                                <td>{{ $article->code}}</td>
                                <td>{{ $article->name}}</td>
                                <td>{{ $article->stock}}</td>
                                <td>{{ $article->state}}</td>
                                <td>{{ $article->sale_price}}</td>
                                <td>
                                    <a href="{{URL::action('ArticleController@edit',$article->id)}}"><button class="btn btn-info">EDITAR</button> </a>
                                    <a href="" data-target="#modal-delete-{{$article->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                                </td>
                                @include('article.modal')
                            </tr>

                        @endforeach
                        <tbody>
                        </tbody>
                    </table>
                </div>
                {{$articles->render()}}
            </div>
        </div>
    </section>
@endsection