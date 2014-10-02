@extends('layout')

@section('content')
    @include('include.nav')
        {{ Form::open(array('url'=>'books/issueBooks/searchName')) }}
    <style type="text/css">
        div.hr {
            background: #1abc9c  no-repeat scroll center;
            margin-left: 15px;
            margin-right: 15px;
            width:1110px;
            height:2px;
            }

            div.hr hr {
            display: none;
        }
    </style>
        <div class="container" style="margin-top:30px">
            <h4 style="margin-left: 14px;">Book Issue</h4>
            <div class="hr"><hr /></div><br><br>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="panel-title"><strong>Book Issue </strong></h3></div>
                        <div class="panel-body">
                            <div class="form-horizontal">

                                <div class="form-group">
                                    {{ Form::label('isbn', 'Search By Student ID:', array('class' => 'col-sm-2 control-label')) }}
                                    <div class="col-sm-4">
                                    {{ Form::text('code','', array('class' => 'form-control','placeholder'=>'Isbn')) }}
                                    </div>
                                    {{ link_to('books/issueBooks/searchName', 'Search',['class="btn btn-success"']) }}
                                </div>
                                
                                 <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            {{ Form::label('isbn', ' ID:', array('class' => 'col-sm-0 control-label')) }}
                                            </br>
                                            {{ Form::label('isbn', 'Name:', array('class' => 'col-sm-0 control-label')) }}
                                        </div>
                                    </div>
                                </div>

                 
                                <div class="form-group">
                                    {{ Form::label('isbn', 'Search By Book :', array('class' => 'col-sm-2 control-label')) }}
                                    <div class="col-sm-4">
                                    {{ Form::text('isbn','', array('class' => 'form-control','placeholder'=>'Isbn')) }}
                                    </div>
                                    {{ link_to('books/issueBooks/searchName', 'Search',['class="btn btn-success"']) }}
                                </div>     

                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th><center>ISBN</center></th>
                                                <th><center>Title</center></th>
                                                <th><center>Author</center></th>
                                                <th><center>Category</center></th>
                                                <th><center>Action</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><center>989383<center></td>
                                                <td><center>PHP LARAVEL<center></td>
                                                <td><center>KEVIN LOVE<center></td>
                                                <td><center>COMPUTER PROGRAMMING<center></td>
                                                <td class="text-center">{{ link_to('books/edit','Borrow',array('class'=>'btn btn-success btn-xs')) }}
                                            </tr>
                                        </tbody>
                                    </table>
                                        </div>
                                    </div>
                                </div>
                        </div>
                </div>
            </div>
        </div>

@endsection
@section('script')
@endsection