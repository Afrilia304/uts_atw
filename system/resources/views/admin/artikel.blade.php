@extends('admin.template')
@section('content')

	


<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data</h3>
        <a href="{{url('dataMotor/create')}}" class="btn btn-dark btn-sm float-right"> <i class="fa fa-plus mr-2"></i> Tambah Data</a>

    </div>
    <!-- /.card-header -->
    <div class="card-body table_datatable">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Content</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <td>1</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
				<td>hh</td>
				<td>
                    <a href="" class="btn btn-warning"><i class="far fa-edit"></i></a> <br>
                    <a onclick="" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                </td>
			


            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>


@endsection