@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Role</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @can('crear-rol')
                                <a href="{{ route('roles.create') }}" class="btn" style="background-color: #003366; color:#fff">Create Role</a>
                            @endcan
                            <table class="table table-striped mt-2">
                                <thead style="background-color: #003366">
                                    <th style="color:#fff">Role</th>
                                    <th style="color:#fff">Acctions</th>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td>{{ $role->name }}</td>
                                            <td>
                                                <a class="btn btn-info" href="{{ route('roles.edit', $role->id) }}">Edit</a>
                                                {!! Form::open(['method' =>'DELETE', 'route'=>['roles.destroy', $role->id], 'style'=>'display:inline']) !!}
                                                    {!! Form::submit('Delete', ['class'=> 'btn btn-danger ']) !!}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                               {!! $roles->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

