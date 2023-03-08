@extends('layout')
@section('konten')
<h3>Halaman Login</h3>
<hr>
<br>
<div class="row">
    <div class="col-sm-8">
        <img src="/unsiq.jpg" alt="" width="100%">
    </div>
    <div class="col-sm-4">
        <form>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NIM</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="nim" type="text" placeholder="Silahkan Masukkan Nim Anda" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" type="text" placeholder="Silahkan Masukkan Password Anda">
            </div>
            <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <a href="/home" rel="noopener noreferrer" class="btn btn-primary"> Login</a>
        </form>

    </div>

</div>

@endsection

