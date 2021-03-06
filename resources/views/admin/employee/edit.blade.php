@extends('admin.master')

@section('main_content')
    <section class="content-header">

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>


        <div class="container" style="height: 100%;width: 100%;">
            <div class="" >
                <div class="item  " style="margin-top: 1%; box-shadow: 1px 1px 1px black;">
                    <div class="thumbnail" style="margin-top: 1%">
                        <h1 style="margin-left: 5%">Edit Employee info </h1>
                        <hr>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <form class="form-horizontal form-label-left" novalidate style="margin-top: 5%; width:90%;margin-left: 5%;" action="{{ URL::to('/admin/employee/') }}" method="post" enctype="multipart/form-data" >

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="item form-group" >
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"  name="name" value="{{$employee->name}}" required="required" type="text">
                                </div>
                            </div>


                            <div class="item form-group" >
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="profession"> Profession <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="profession" class="form-control col-md-7 col-xs-12"  name="profession" value="{{$employee->profession}}" required="required" type="text">
                                </div>
                            </div>
                         <input type="hidden" name="empid" value="{{$employee->id}}">
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">

                                    <input type="file" name="image" class="btn btn-file">
                                    <br>
                                    <br>
                                    <button type="button" class="btn btn-primary" onclick="redirect()">Cancel</button>
                                    <input type="submit" class="btn btn-success" value="Save" >
                                </div>
                            </div>
                        </form>
                        <!-- /page content -->
                    </div>
                </div>
            </div>
        </div>

        <script>
            function redirect(){
                window.location="{{URL::to('/admin/employee')}}";
            }
        </script>

    </section>
@stop
