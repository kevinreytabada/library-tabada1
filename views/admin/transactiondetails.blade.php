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
            <h4 style="margin-left: 14px;">Transaction Details </h4>
            <div class="hr"><hr /></div><br><br>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="panel-title"><strong>Transaction Details </strong></h3></div>
                        <div class="panel-body">
                            <div class="form-horizontal">

                            <!--     <div class="form-group">
                                    {{ Form::label('isbn', 'Search By Student ID:', array('class' => 'col-sm-2 control-label')) }}
                                    <div class="col-sm-4">
                                    {{ Form::text('isbn','', array('class' => 'form-control','placeholder'=>'Isbn')) }}
                                    </div>
                                </div> -->

                                 <div class="col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php $transactions = $transactions[0]; ?>
                                            {{ Form::label('ISBN:','' , array('class' => 'col-sm-0 control-label')) }}
                                            {{ $transactions->borrower_id; }}
                                            </br>
                                            {{ Form::label('Name :','', array('class' => 'col-sm-0 control-label')) }}
                                            {{ $transactions->last_name . " " . $transactions->first_name; }}
                                            </br>
                                            {{ Form::label('isbn', 'Type:', array('class' => 'col-sm-0 control-label')) }}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            {{ Form::label('isbn', ' Total Penalty:', array('class' => 'col-sm-0 control-label')) }}
                                            </br>
                                            {{ Form::label('isbn', 'Item Check Out:', array('class' => 'col-sm-0 control-label')) }}
                                            </br>
                                            {{ Form::label('isbn', 'Pending Request:', array('class' => 'col-sm-0 control-label')) }}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th><center>ISBN</center></th>
                                                <th><center>Title</center></th>
                                                <th><center>Category</center></th>
                                                <th><center>Due Date</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><center>{{ $transactions->ISBN }}<center></td>
                                                <td><center>{{ $transactions->title }}<center></td>
                                                <td><center>{{ $transactions->category }}<center></td>
                                                <td><center>{{ $transactions->returnedDate }}<center></td>
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