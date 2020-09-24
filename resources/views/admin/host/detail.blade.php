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
                        Host Management / Detail Host
                    
                        <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                    @foreach($host as $p)
                        <form class="" action="/admin/host/update" method="post">
                        {{ csrf_field() }}
                           <h5 class="card-title">Setting Host :</h5>
                            <hr>
                            <input type="hidden" name="id_host" value="{{ $p->id_host }}"> <br/>

                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Nama Host</label>
                                <div class="col-sm-10">
                                    <input required name="Hostname" id="exampleEmail"  disabled
                                    value="{{ $p->Hostname }}" placeholder="Host -1" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">IP Address</label>
                                <div class="col-sm-10">
                                    <input required name="ip_address" id="exampleEmail"  disabled
                                    value="{{ $p->ip_address }}" placeholder="111.0.21.10" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Port</label>
                                <div class="col-sm-10">
                                    <input required name="port" id="exampleEmail"  disabled placeholder="1534"
                                    value="{{ $p->port }}" type="text" class="form-control">
                                </div>
                            </div>
                            <hr>
                            <!--  -->
                            <h5 class="card-title">Host Parameter : Nilai Normal Monitoring (percentase)</h5>
                            <hr>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">CPU</label>
                                <div class="col-sm-10">
                                    <input required name="cpu" id="exampleEmail"  disabled placeholder="<50 or >=50" value="{{ $p->prm_cpu }}" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">RAM</label>
                                <div class="col-sm-10">
                                    <input required name="ram" id="exampleEmail"  disabled placeholder="<50 or >=50" value="{{ $p->prm_ram }}" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Hardisk</label>
                                <div class="col-sm-10">
                                    <input required name="disk" id="exampleEmail"  disabled placeholder="<50 or >=50" value="{{ $p->prm_disk }}" type="text" class="form-control">
                                </div>
                            </div>
                            
                            
                        </form>
                    @endforeach
                    </div>
                </div>
            </div>
            
        </div> 
        

      
    </div>
    <hr>
</div>

@endsection
