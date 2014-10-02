@extends('layout')
@section('content')
    @include('include.nav')
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
            <h4 style="margin-left: 14px;">All Transactions</h4>
            <div class="hr"><hr /></div><br><br>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="panel-title"><strong>All Transactions </strong></h3></div>
                        <div class="panel-body">
              <!--               {{ link_to('books/add', '+ Add Books',['class="btn btn-success"']) }} -->
                            <br><br>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th><center>ID</center></th>
                                        <th><center>Name</center></th>
                                        <th><center>Title</center></th>
                                        <th><center>Due Date</center></th>
                                        <th><center>Action</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($transactions as $r)
                                    <tr>
                                        <td><center>{{ $r->ISBN }}<center></td>
                                        <td><center>{{ $r->first_name }}{{ $r->last_name }}<center></td>
                                        <td><center>{{ $r->title }}<center></td>
                                        <td><center>{{ $r->returnedDate }}<center></td>
                                        <td class="text-center">{{ link_to('books/transactionDetails/'.$r->id,'View Details',array('class'=>'btn btn-info btn-xs')) }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="clearfix"></div>
                            <ul class="pagination pull-right">
                                <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
@endsection
@section('script')
@endsection