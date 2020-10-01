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
                        Report Management
                    
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
                            <h5>Host Report Monitoring</h5>
                            <hr>
                        </div>
                   
                        <table id="example" class="mb-0 table">
                            <thead>
                            <tr>
                                <th>IP Address</th>
                                <th>Komponen</th>
                                <th>Used</th>
                                <th>Status</th>
                                <th>Time</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list_data as $p)
                            <tr>
                                <th scope="row">{{ $p->ip_address }}</th>
                                <td>{{ $p->used }}</td>
                                <td>{{ $p->komponen }} %</td>
                                @if($p->status =='Normal')         
                                    <td >
                                        <div class="badge badge-success">
                                        {{ $p->status }}    
                                        </div>
                                    </td>
                                @elseif($p->status =='Warning')
                                    <td>
                                        <div class="badge badge-warning">
                                        {{ $p->status }}
                                        </div>
                                    </td>
                                @else
                                    <td>
                                     <div class="badge badge-danger">
                                     {{ $p->status }}
                                     </div>
                                    </td>

                                @endif
                                <td>{{ $p->time_mtr }}</td>
                               
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
