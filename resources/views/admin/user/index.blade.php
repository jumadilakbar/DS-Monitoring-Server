@extends('master_layouts.app')
@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>
                        User Management 
                    
                        <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
                        </div>
                    </div>
                </div>
                
            </div>
        </div> 
        <div class="row">
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div class="card-title">
                            <a href="/admin/user/tambah" class="btn btn-info">+ tambah</a>
                        </div>
                   
                        <table id="example" class="mb-0 table">
                            <thead>
                            <tr>
                                <th>ID User</th>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>No HP</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list_user as $p)
                            <tr>
                                <th scope="row">{{ $p->id }}</th>
                                <td>{{ $p->name }}</td>
                                <td>{{ $p->email }}</td>
                                <td>{{ $p->phone }}</td>
                                <td>
                                <a href="/admin/user/edit/{{ $p->id }}">Edit</a>
                                |
                                <a href="/admin/user/hapus/{{ $p->id }}">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>                    
        </div>
      
    </div>
    <hr>
</div>

@endsection
