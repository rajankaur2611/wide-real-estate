@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Project'])
    
    <div id="alert">
        @include('components.alert')
    </div>
    @php 
    @endphp
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div id="alert">
                    @include('components.alert')
                </div>
                <div class="card">
                    <form role="form" method="POST" action="{{ route('create-project') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="@if($project){{base64_encode($project->id)}}@endif">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Edit Project</p>
                                <button type="submit" class="btn btn-primary btn-sm ms-auto">Save</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">Project Information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Title</label>
                                        <input class="form-control" type="text" name="title" value="{{ old('title', $project->title) }}">
                                        @if($errors->has('title'))
                                            <div class="text-danger ps-1 pt-1">{{ $errors->first('title') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Description</label>
                                        <input class="form-control" type="text" name="description" value="{{ old('description',  $project->description) }}">
                                        @if($errors->has('description'))
                                            <div class="text-danger ps-1 pt-1">{{ $errors->first('description') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Price</label>
                                        <input class="form-control" type="text" name="price"  value="{{ old('price',  $project->price
                                        ) }}">
                                        @if($errors->has('price'))
                                            <div class="text-danger ps-1 pt-1">{{ $errors->first('price') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">image</label>
                                        <input class="form-control" type="file" name="image" value="{{ old('image',  '') }}">
                                        @if($errors->has('image'))
                                            <div class="text-danger ps-1 pt-1">{{ $errors->first('image') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <!-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Last name</label>
                                        <input class="form-control" type="text" name="lastname" value="{{ old('lastname', auth()->user()->lastname) }}">
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
