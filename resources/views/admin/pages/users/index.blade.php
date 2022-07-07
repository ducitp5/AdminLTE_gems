
@extends('admin.layout.layout')

@section('content')

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

{{--    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>--}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-sm-8">DataTables Advanced Tables <b>Details</b></div>
                                <div class="col-sm-4">
                                    <button id="add-new" type="button" class="btn btn-info" style="float: right"><i class="fa fa-plus"></i> Add New</button>
                                </div>
                            </div>

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Email</th>
                                            <th>Name</th>
                                            <th>email_verified_at</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        @foreach($users as $user)
                                            <tr class="gradeA">
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td class="center">{{ $user->email_verified_at }}</td>
                                                <td class="center">{{ $user->status ? 'active' : 'disable' }}</td>
                                                <td>
                                                    <a id="edit-user" data-id-user="{{ $user->id  }}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                                    <a id="delete-user" data-id-user="{{ $user->id  }}" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                                </td>
                                            </tr>
{{--                                            <tr class="gradeA">--}}
{{--                                                <td>Presto</td>--}}
{{--                                                <td>Opera 7.0</td>--}}
{{--                                                <td>Win 95+ / OSX.1+</td>--}}
{{--                                                <td class="center">-</td>--}}
{{--                                                <td class="center">A</td>--}}
{{--                                                <td>--}}
{{--                                                    <a class="edit" data-id = title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>--}}
{{--                                                    <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            <div class="well">
                                <h4>DataTables Usage Information</h4>
                                <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

        </div>

    </div>

    <script>

        $(document).on("click", "#add-new", function(){
            window.location.href = "{{ route('admin.create')}}";
        });

        // Edit row on edit button click
        $(document).on("click", "#edit-user", function(){

            $id = (this).getAttribute('data-id-user')

            window.location.href = '/admin/users/edit/'+$id;
        });

        // Edit row on edit button click
        $(document).on("click", "#delete-user", function(){

            $id = (this).getAttribute('data-id-user')

            window.location.href = '/admin/users/delete/'+$id;
        });

    </script>

    <!-- DataTables JavaScript -->
    <script src="/js/dataTables/jquery.dataTables.min.js"></script>
    <script src="/js/dataTables/dataTables.bootstrap.min.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>

@endsection
