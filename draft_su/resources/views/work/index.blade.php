@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Work Orders</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @can('crear-works')
                                <a href="{{ route('works.create') }}" class="btn" style="background-color: #003366; color:#fff">New Work Order</a>
                            @endcan
                            <table class="table table-striped mt-2">
                                <thead style="background-color: #003366">
                                    <th style="color:#fff">ID</th>
                                    <th style="color:#fff">File Number</th>
                                    <th style="color:#fff">Branch</th>
                                    <th style="color:#fff">Terminal</th>
                                    <th style="color:#fff">Product</th>
                                    <th style="color:#fff">Vessel</th>
                                    <th style="color:#fff">File Status</th>
                                    <th style="color:#fff">ETA</th>
                                    <th style="color:#fff">Quantity</th>
                                    <th style="color:#fff">Type</th>
                                    <th style="color:#fff">Acctions</th>
                                </thead>
                                <tbody>
                                    @foreach ($works as $work)
                                        <tr>
                                            <td>{{ $work->id }}</td>
                                            <td>{{ $work->file_no }}</td>
                                            <td>{{ $work->branch }}</td>
                                            <td>{{ $work->terminal }}</td>
                                            <td>{{ $work->product }}</td>
                                            <td>{{ $work->vessel }}</td>
                                            <td>{{ $work->file_status }}</td>
                                            <td>{{ $work->eta }}</td>
                                            <td>{{ $work->charge }}MT</td>
                                            <td>{{ $work->types }}</td>
                                            <td>
                                                <form action="{{ route('works.destroy',$work->id) }}" method="POST">
                                                    @can('editar-work')
                                                        <a href="{{ route('works.edit',$work->id) }}" class="btn btn-info">Edit</a>
                                                    @endcan
                                                    @csrf
                                                    @method('DELETE')
                                                    @can('borrar-works')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    @endcan
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                               {!! $works->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

