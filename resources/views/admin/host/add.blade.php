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
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                    <!-- <h5 class="card-title">Form Tambah Host</h5>
                    <hr> -->
                        <form class="" action="/admin/host/store" method="post">
                        {{ csrf_field() }}
                           <h5 class="card-title">Setting Host :</h5>
                            <hr>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Nama Host</label>
                                <div class="col-sm-10"><input required name="Hostname" id="exampleEmail" placeholder="Host -1" type="text" class="form-control"></div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">IP Address</label>
                                <div class="col-sm-10"><input required name="ip_address" id="exampleEmail" placeholder="111.0.21.10" type="text" class="form-control"></div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Port</label>
                                <div class="col-sm-10"><input required name="port" id="exampleEmail" placeholder="1534" type="text" class="form-control"></div>
                            </div>
                            <hr>
                            <!--  -->
                            <h5 class="card-title">Host Parameter : Nilai Normal Monitoring (percentase)</h5>
                            <hr>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">CPU</label>
                                <div class="col-sm-10"><input required name="cpu" id="exampleEmail" placeholder="<50 or >=50" type="text" class="form-control"></div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">RAM</label>
                                <div class="col-sm-10"><input required name="ram" id="exampleEmail" placeholder="<50 or >=50" type="ram" class="form-control"></div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Hardisk</label>
                                <div class="col-sm-10"><input required name="disk" id="exampleEmail" placeholder="<50 or >=50" type="disk" class="form-control"></div>
                            </div>
                            
                            <div class="position-relative row form-check">
                                <div class="col-sm-2 offset-sm-10">
                                    <button class="btn btn-danger">Reset</button>
                                    <button class="btn btn-secondary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div> 
        

      
    </div>
    <hr>
</div>

@endsection
