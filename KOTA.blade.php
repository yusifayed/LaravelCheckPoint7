@extends('template')
@section('content')

    <section class="main-section">
    <div class="content">
    <h1>Data Kota</h1>
    @if(Session::has('alert_message'))
        <div class="alert alert-success">
            <strong>{{ Session::get('alert_message') }}</strong>
        </div>
        @endif
        <div align="left">
        <a href="{{ URL::asset('kato/create') }}"><button class="btn btn-success btn-lg">Tambah Data Kota</button></a><br>
        </div>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Code</th>
                    <th>Description</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $datas)
                <tr>
                    <td>{{$datas->id}}</td>
                    <td>{{$datas->code}}</td>
                    <td>{{$datas->description}}</td>
                    <td>
                        <form action="{{ route('kato.destroy', $datas->id)}}" method="post">
                        {{ csrf_field()}}
                        {{ method_field('DELETE')}}
                        <a href="{{ route('kato.edit',$datas->id)}}" class="btn btn-sm btn-primary">Edit</a>
                        <button class="btn btn-sm btn-danger" type="sumbit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection