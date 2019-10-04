@extends('template')
@section('content')
    <section class="main-section">
        <div class="content">
            <h1>Tambah Data Kota</h1>
            <hr>
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                    <li><strong>{{$error}}</strong>
                    @endforeach
                </div>
            @endif
            <form action="{{ route('kato.store') }}" method="post">
            {{ csrf_field()}}
            <div class="form-group">
                <label for="email">Code:</label>
                <input type="text" class="form-control" id="email" name="code">
            </div>
            <div class="form-group">
                <label for="nohp">Description:</label>
                <input type="text" class="form-control" id="nohp" name="des">
            </div>
            <div class="form-group">
                <button type="sumbit" class="btn btn-md btn-primary">Submit</button>
                <button type="reset" class="btn btn-md btn-danger">Cancel</button>
            </div>
        </form>
    </div>
</section>
@endsection