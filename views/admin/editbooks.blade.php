@extends('layout')
@section('content')
    @include('include.nav')
        {{ Form::open(array('url'=>'books/update', 'PUT')) }}
            {{ Form::hidden('id', $books['id']) }}
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
            <h4 style="margin-left: 14px;">Edit Book</h4>
            <div class="hr"><hr /></div><br><br>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="panel-title"><strong>Edit Books </strong></h3></div>
                        <div class="panel-body">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    {{ Form::label('isbn', 'ISBN', array('class' => 'col-sm-2 control-label')) }}
                                <div class="col-sm-8">
                                    {{ Form::text('isbn',$books['ISBN'], array('class' => 'form-control','placeholder'=>'Isbn')) }}
                                </div>
                                </div>
                                <div class="form-group">
                                    {{ Form::label('title', 'TITLE', array('class' => 'col-sm-2 control-label')) }}
                                <div class="col-sm-8">
                                    {{ Form::text('title',$books['title'], array('class' => 'form-control','placeholder'=>'Title')) }}
                                </div>
                                </div>
                                <div class="form-group">
                                    {{ Form::label('author', 'AUTHOR', array('class' => 'col-sm-2 control-label')) }}
                                <div class="col-sm-8">
                                    {{ Form::text('author',$books['author'], array('class' => 'form-control','placeholder'=>'Author')) }}
                                </div>
                                </div>
                                <div class="form-group">
                                    {{ Form::label('description', 'DESCRIPTION', array('class' => 'col-sm-2 control-label')) }}
                                <div class="col-sm-8">
                                    {{ Form::textarea('description',$books['description'], array('class'=>'form-control','rows'=>'3','placeholder'=>'Description')) }}
                                </div>
                                </div>
                                <div class="form-group">
                                    {{ Form::label('category', 'CATEGORY', array('class' => 'col-sm-2 control-label')) }}
                                <div class="col-sm-8">
                                    {{ Form::text('category',$books['category'], array('class' => 'form-control','placeholder'=>'Category')) }}
                                </div>
                                </div>
                                <div class="form-group">
                                    {{ Form::label('quantity', 'QUANTITY', array('class' => 'col-sm-2 control-label')) }}
                                <div class="col-sm-8">
                                    {{ Form::text('quantity',$books['quantity'], array('class' => 'form-control','placeholder'=>'Quantity')) }}
                                </div>
                                </div>
                            </div>  
                            <div style="margin-left: 820px;">
                               {{ Form::submit('Update',['class="btn btn-success"']) }}
                            </div>
                        </div>
                </div>
            </div>
        </div>
        {{ Form::close() }}
@endsection
@section('script')
@endsection