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
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Form Edit User</h5>
                    <hr>
                    @foreach($user as $p)
                        <form class="" action="/admin/user/update" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $p->id }}"> <br/>

                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Nama User</label>
                                <div class="col-sm-10">
                                    <input name="name" placeholder="Nama user" type="text" value="{{ $p->name }}" class="form-control">
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input name="email" id="exampleEmail" value="{{ $p->email }}" placeholder="Email"  type="email" class="form-control">
                                </div>
                            </div>
                            <!-- <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input name="password" placeholder="password" type="password" class="form-control">
                                </div>
                            </div> -->
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">No HP</label>
                                <div class="col-sm-10">
                                    <input name="phone" placeholder="No HP" type="text" value="{{ $p->phone }}" class="form-control">
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                <textarea name="state" id="exampleText" class="form-control">{{ $p->state }}</textarea>
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleSelect" class="col-sm-2 col-form-label">Role</label>
                                <div class="col-sm-10">
                                    <select name="role" id="exampleSelect" class="form-control">
                                        <option value=2>Admin</option>
                                        <option value=1>Pegawai</option>
                                    </select>
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
