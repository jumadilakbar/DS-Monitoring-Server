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
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                    <h5 class="card-title">Form Edit Setting Notifikasi</h5>
                    <hr>
                    @foreach($notifikasi as $p)
                        <form class="" action="/admin/notifikasi/update" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id_notifkasi" value="{{ $p->id_notifkasi }}"> <br/>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10"><input name="email" value="{{ $p->email }}" required id="exampleEmail" placeholder="Email" type="email" class="form-control"></div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">SMTP</label>
                                <div class="col-sm-10"><input name="smtp" value="{{ $p->smtp }}" required id="exampleEmail" placeholder="SMTP" type="text" class="form-control"></div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Port</label>
                                <div class="col-sm-10"><input name="port" value="{{ $p->port }}" required id="exampleEmail" placeholder="Port" type="text" class="form-control"></div>
                            </div>
                            <div class="position-relative row form-group"><label for="exampleSelectMulti" class="col-sm-2 col-form-label">Penerima SMS</label>
                                <div class="col-sm-10">
                                    <select multiple="" name="penerima_sms" id="exampleSelectMulti" class="form-control">
                                        <option value="Staff">Staff</option>
                                        <option value="Manager">Manager</option>
                                        <option value="Supervisor">Supervisor</option>
                                    </select></div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="checkbox2" class="col-sm-2 col-form-label">
                                    Alarm
                                </label>
                                <div class="col-sm-10">
                                    <div class="position-relative form-check">
                                        <label class="form-check-label">
                                            <input name="alarm" type="radio" class="form-check-input" value="ON" checked> ON
                                        </label>
                                        
                                    </div>
                                    <div class="position-relative form-check">
                                        <label class="form-check-label">
                                            <input name="alarm" type="radio" class="form-check-input" value="OFF"> OFF
                                        </label>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <div class="position-relative row form-check">
                                <div class="col-sm-2 offset-sm-10">
                                    <button class="btn btn-danger">Reset</button>
                                    <button class="btn btn-secondary">Simpan</button>
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
