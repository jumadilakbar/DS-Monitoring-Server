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
                        Host Management
                    
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
                            <h5>Data Host Server </h5>
                            <hr>
                            <a href="/admin/host/tambah" class="btn btn-info">+ tambah</a>
                        </div>
                   
                        <table id="example" class="mb-0 table">
                            <thead>
                            <tr>
                                <th>Host Name</th>
                                <th>IP Address</th>
                                <th>Port</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list_data as $p)
                            <tr>
                                <th scope="row">{{ $p->Hostname }}</th>
                                <td>{{ $p->ip_address }}</td>
                                <td>{{ $p->port }}</td>
                                <td>{{ $p->status }}</td>
                                <td>
                                <a href="/admin/host/edit/{{ $p->id_host }}">Edit</a>
                                |
                                <a href="/admin/host/detail/{{ $p->id_host }}">Detail</a>
                                |
                                <a href="/admin/host/hapus/{{ $p->id_host }}">Hapus</a>
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
