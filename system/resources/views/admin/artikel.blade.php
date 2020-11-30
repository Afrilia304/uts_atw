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
                    <th>Tanggal Upload</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <td>1</td>
                <td>12 Alasan Ilmiah Kenapa Kamu Harus Minum Kopi Hitam Setiap Hari</td>
				<td>29 Mei 2020</td>
				<td>
                    <a href="" class="btn btn-warning"><i class="far fa-edit"></i></a> 
                    <a onclick="" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>           
                </td>
			


            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>


@endsection