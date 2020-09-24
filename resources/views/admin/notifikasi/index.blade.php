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
                        Notifikasi Management
                    
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
                            <h5>Data Setting Notifikasi </h5>
                            <hr>
                            <a href="/admin/notifikasi/tambah" class="btn btn-info">+ tambah</a>
                        </div>
                   
                        <table id="example" class="mb-0 table">
                            <thead>
                            <tr>
                                <th>Email</th>
                                <th>SMTP</th>
                                <th>Port</th>
                                <th>Penerima SMS</th>
                                <th>Alarm</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list_data as $p)
                            <tr>
                                <th scope="row">{{ $p->email }}</th>
                                <td>{{ $p->smtp }}</td>
                                <td>{{ $p->port }}</td>
                                <td>{{ $p->penerima_sms }}</td>
                                <td>{{ $p->alarm }}</td>
                                <td>
                                <a href="/admin/notifikasi/edit/{{ $p->id_notifkasi }}">Edit</a>
                                |
                                <a href="/admin/notifikasi/detail/{{ $p->id_notifkasi}}">Detail</a>
                                |
                                <a href="/admin/notifikasi/hapus/{{ $p->id_notifkasi }}">Hapus</a>
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
