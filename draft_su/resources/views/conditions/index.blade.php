@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Conditions</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @can('crear-conditions')
                                <a href="{{ route('conditions.create') }}" class="btn" style="background-color: #003366; color:#fff">New Conditions</a>
                            @endcan
                            <div class="table-responsive">
                                <table class="table table-striped mt-2 table-bordered table-hover">
                                    <thead style="background-color: #003366">
                                    <th style="color:#fff" class="d-none d-sm-table-cell">ID</th>
                                    <th style="color:#fff" class="d-none d-sm-table-cell">Attending Surveyor</th>
                                    <th style="color:#fff" class="d-none d-sm-table-cell">Surveyor Name</th>
                                    <th style="color:#fff" class="d-none d-sm-table-cell">Master Name</th>
                                    <th style="color:#fff" class="d-none d-sm-table-cell">Chief Name</th>
                                    <th style="color:#fff" class="d-none d-sm-table-cell">Witness Dought</th>
                                    <th style="color:#fff" class="d-none d-sm-table-cell">Witness Tank</th>
                                    <th style="color:#fff" class="d-none d-sm-table-cell">Ship Location</th>
                                    <th style="color:#fff" class="d-none d-sm-table-cell">Weather Temp</th>
                                    <th style="color:#fff" class="d-none d-sm-table-cell">Sea Conditions</th>
                                    <th style="color:#fff" class="d-none d-sm-table-cell">Heading Ship</th>
                                    <th style="color:#fff" class="d-none d-sm-table-cell">Direction Wind</th>
                                    <th style="color:#fff" class="d-none d-sm-table-cell">Stream Speed</th>
                                    <th style="color:#fff" class="d-none d-sm-table-cell">Tide</th>
                                    <th style="color:#fff" class="d-none d-sm-table-cell">Ice</th>
                                    <th style="color:#fff" class="d-none d-sm-table-cell">Actions</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($conditions as $condition)
                                        <tr>
                                            <td>{{ $condition->id }}</td>
                                            <td>{{ $condition->attending_su }}</td>
                                            <td>{{ $condition->name_surveyor }}</td>
                                            <td>{{ $condition->master_name }}</td>
                                            <td>{{ $condition->chief_name }}</td>
                                            <td>{{ $condition->witness_dought }}</td>
                                            <td>{{ $condition->witness_tank }}</td>
                                            <td>{{ $condition->ship_location }}</td>
                                            <td>{{ $condition->weather_temp }}</td>
                                            <td>{{ $condition->sea_condition }}</td>
                                            <td>{{ $condition->heading_ship }}</td>
                                            <td>{{ $condition->direction_wind }}</td>
                                            <td>{{ $condition->stream_speed }}</td>
                                            <td>{{ $condition->tide }}</td>
                                            <td>{{ $condition->ice }}</td>
                                            <td>
                                                <form action="{{ route('conditions.destroy',$condition->id) }}" method="POST">
                                                    @can('editar-conditions')
                                                        <a href="{{ route('conditions.edit',$condition->id) }}" class="btn btn-info">Edit</a>
                                                    @endcan
                                                    @csrf
                                                    @method('DELETE')
                                                    @can('borrar-conditions')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    @endcan
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                               {!! $conditions->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

