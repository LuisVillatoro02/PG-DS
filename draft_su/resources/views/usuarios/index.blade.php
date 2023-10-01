@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Users</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <a class="btn" style="background-color: #003366; color:#fff" href="{{ route('usuarios.create') }}">New User</a>

                            <table class="table table-striped mt-2">
                                <thead style="background-color: #003366">
                                    <th style="color:#fff">ID</th>
                                    <th style="color:#fff">Name</th>
                                    <th style="color:#fff">E-Mail</th>
                                    <th style="color:#fff">Role</th>
                                    <th style="color:#fff">Acctions</th>
                                </thead>
                                <tbody>
                                    @foreach ($usuarios as $usuario)
                                        <tr>
                                            <td>{{ $usuario->id }}</td>
                                            <td>{{ $usuario->name }}</td>
                                            <td>{{ $usuario->email }}</td>
                                            <td>
                                                @if (!empty($usuario->getRoleNames()))
                                                    @foreach ($usuario->getRoleNames() as $rolName )
                                                        <h5><span class="badge badge-dark">{{ $rolName}}</span></h5>
                                                    @endforeach
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-info" href="{{ route('usuarios.edit', $usuario->id) }}">Edit</a>
                                                {!! Form::open(['method' =>'DELETE', 'route'=>['usuarios.destroy', $usuario->id], 'style'=>'display:inline']) !!}
                                                    {!! Form::submit('Delete', ['class'=> 'btn btn-danger ']) !!}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                               {!! $usuarios->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

