@extends('admin.template.base')

@section('content')
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header border-0">
          <h3 class="mb-0">Data user
            <a href="{{ url('user/create') }}" class="btn btn-dark float-right">
              <i class="fa fa-plus"></i>
              Tambah user
            </a>
          </h3>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
               <th>No</th>
               <th>Aksi</th>
               <th>Nama</th>
               <th>Email</th>
               <th>Jenis Kelamin</th>
               <th>Username</th>
            </thead>
            <tbody class="list">
              @foreach ($list_user as $user)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                  <div class=" btn-group">

                    <a href="{{ url('user', $user->id) }}" class="btn btn-dark">
                      <i class="fa fa-info"></i>
                    </a>
                    <a href="{{ url('user', $user->id) }}/edit" class="btn btn-warning">
                      <i class="fa fa-edit"></i>
                    </a>
                    @include('utils.delete' , ['url' =>  url('user', $user->id) ])
                  </td>

                  </div>
                  <td>{{ucwords($user->nama)}}</td>
                  <td>{{($user->email)}}</td>
                  <td>{{($user->jenis_kelamin_string)}}</td>
                  <td>{{($user->username)}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
</div>      


@endsection