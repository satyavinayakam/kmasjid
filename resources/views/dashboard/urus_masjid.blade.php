@extends('layout.dashboard')

@section('dashboard-header')
    @parent



@section('dashboard-sidemenu')
    @parent

@endsection
@endsection

@section('content-dashboard')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->

            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Horizontal Form</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>

                                    <div class="col-sm-10">
                                        <input class="form-control" id="inputEmail3" placeholder="Name Masjid" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Location</label>

                                    <div class="col-sm-10">
                                        <input class="form-control" id="inputPassword3" placeholder="Location" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-info pull-right">Search</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>
                    </div>
                    <!-- /.nav-tabs-custom -->

                </section>
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->

                <!-- right col -->
                <section class="col-lg-12 connectedSortable">
                    <div class="box box-success">
                        <div class="box-header">
                            <h3 class="box-title">Senarai Bayaran dari 01/01/2017 sehingga 01/05/2017</h3>

                            <div class="box-tools">
                                <div class="btn-group" role="group" aria-label="...">
                                    <button type="button" class="btn btn-warning"><i class="fa fa-print"></i></button>
                                    <button type="button" class="btn btn-success"><i class="fa fa-file-excel-o"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <table class="table table-bordered">
                                <tbody><tr>
                                    <th style="width: 10px">#</th>
                                    <th>Task</th>
                                    <th>Progress</th>
                                    <th style="width: 40px">Label</th>
                                </tr>
                                <tr>
                                    <td>1.</td>
                                    <td>Update software</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-red">55%</span></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Clean database</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-yellow">70%</span></td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Cron job running</td>
                                    <td>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-light-blue">30%</span></td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Fix and squish bugs</td>
                                    <td>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-green">90%</span></td>
                                </tr>
                                </tbody></table>
                        </div>
                        <div class="box-footer">
                            <ul class="pagination pull-right no-margin">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </section>
            </div>
            <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
@section('dashboard-footer')

    @parent

@endsection
