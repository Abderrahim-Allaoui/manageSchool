@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Détails de l'administrateur</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nom et Prénom</label>
                            <div class="col-md-6">
                                <p class="form-control-static">{{ $admin->name }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-6">
                                <p class="form-control-static">{{ $admin->email }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href="{{ route('admins.index') }}" class="btn btn-primary">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
