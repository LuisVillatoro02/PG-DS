@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Order Create</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                    <strong>Please check the fields!</strong>
                                        @foreach ($errors->all() as $error )
                                            <span class="badge badge-danger">{{ $error }}</span>
                                        @endforeach
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                            @endif

                            <form action="{{ route('conditions.update',$condition->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Attending Surveyor</label>
                                            <input type="text" name="attending_su" class="form-control" value="{{ $condition->attending_su }}">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Surveyor Name</label>
                                            <input type="text" name="name_surveyor" class="form-control" value="{{ $condition->name_surveyor }}">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Master Name</label>
                                            <input type="text" name="master_name" class="form-control" value="{{ $condition->master_name }}">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Chief Name</label>
                                            <input type="text" name="chief_name" class="form-control" value="{{ $condition->chief_name }}">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Witness Dought</label>
                                            <input type="text" name="witness_dought" class="form-control" value="{{ $condition->witness_dought }}">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Witness Tank</label>
                                            <input type="text" name="witness_tank" class="form-control" value="{{ $condition->witness_tank }}">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Ship Location</label>
                                            <input type="text" name="ship_location" class="form-control" value="{{ $condition->ship_location }}">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Weather Temp</label>
                                            <input type="text" name="weather_temp" class="form-control" value="{{ $condition->weather_temp }}">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Sea Condition</label>
                                            <input type="text" name="sea_condition" class="form-control" value="{{ $condition->sea_condition }}">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Heading Ship</label>
                                            <input type="text" name="heading_ship" class="form-control" value="{{ $condition->heading_ship }}">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Direction Wind</label>
                                            <input type="text" name="direction_wind" class="form-control" value="{{ $condition->direction_wind }}">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Stream Speed</label>
                                            <input type="text" name="stream_speed" class="form-control" value="{{ $condition->stream_speed }}">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Tide</label>
                                            <input type="text" name="tide" class="form-control" value="{{ $condition->tide }}">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Ice</label>
                                            <input type="text" name="ice" class="form-control" value="{{ $condition->ice }}">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

