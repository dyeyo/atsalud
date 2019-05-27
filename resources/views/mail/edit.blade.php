@extends('layouts.layout-dashboard')
@section('styles')
@endsection
@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            @include('mail.partials.breadcrumb')
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('/')}}">Dasboard</a></li>
                    <li class="breadcrumb-item"><a href="{{route('emails.index')}}">Emails</a></li>
                    <li class="breadcrumb-item"><a href="{{route('emails.edit',$email->id)}}">{{$email->name}}</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Edición del Email</h4>
                </div>
                <div class="card-body">
                    <div id="response"></div>
                    <form action="javascript:void(0)" method="post" id="editEmail" name="editEmail">
                        {{method_field('PUT')}}
                        {{csrf_field()}}
                        <div class="form-body">
                            <h3 class="card-title">Datos del rol {{$email->name}}</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="name_send" name="name_send" class="form-control" placeholder="Nombre del enviador(*)" value="{{$email->name_send}}" required>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" id="email_send" name="email_send" class="form-control form-control-danger" placeholder="Email (*)" value="{{$email->email_send}}" required>
                                    </div>
                                    <!--/span-->
                                </div>
                            </div>
                            <br>
                            <input type="hidden" name="id" id="id" value="{{auth()->user()->id}}">
                            <div class="form-actions">
                                <button class="btn btn-success" onclick="update_email({{$email->id}})"> <i class="fa fa-check"></i> Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <br>

            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
