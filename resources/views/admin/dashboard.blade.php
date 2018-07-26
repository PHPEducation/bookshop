@extends('layout.admin_layout')
@section('title' , 'Dashboard')
@section('content')
    <!--col -->
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="white-box">
            <div class="col-in row">
                <div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E" class="linea-icon linea-basic"></i>
                    <h5 class="text-muted vb">{{trans('common.new_client')}}</h5> </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <h3 class="counter text-right m-t-15 text-danger">23</h3> </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"> <span class="sr-only">40% {{trans('common.complete')}} ({{trans('common.success')}})</span> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.col -->
    <!--col -->
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="white-box">
            <div class="col-in row">
                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe01b;"></i>
                    <h5 class="text-muted vb">{{trans('common.new_project')}}</h5> </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <h3 class="counter text-right m-t-15 text-megna">169</h3> </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="progress">
                        <div class="progress-bar progress-bar-megna" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"> <span class="sr-only">40% {{trans('common.complete')}} ({{trans('common.success')}})</span> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.col -->
    <!--col -->
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="white-box">
            <div class="col-in row">
                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe00b;"></i>
                    <h5 class="text-muted vb">{{trans('common.new_invoice')}}</h5> </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <h3 class="counter text-right m-t-15 text-primary">157</h3> </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"> <span class="sr-only">40% {{trans('common.complete')}} ({{trans('common.success')}})</span> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
<!--row -->
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title">{{trans('common.sales_diff')}}</h3>
            <ul class="list-inline text-right">
                <li>
                    <h5><i class="fa fa-circle m-r-5 siteA"></i>{{trans('common.site_a')}}</h5>
                </li>
                <li>
                    <h5><i class="fa fa-circle m-r-5 siteB"></i>{{trans('common.site_b')}}</h5>
                </li>
            </ul>
            <div id="morris-area-chart2"></div>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection
