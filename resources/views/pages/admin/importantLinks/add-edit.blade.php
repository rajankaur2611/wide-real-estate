@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Important Links'])
    
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
                    <form role="form" method="POST" action="{{ route('create-important-links') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="@if($importantLinks){{base64_encode($importantLinks->id)}}@endif">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Edit News</p>
                                <button type="submit" class="btn btn-primary btn-sm ms-auto">Save</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">News Information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Title</label>
                                        <input class="form-control" type="text" name="title" value="{{ old('title', $importantLinks->title) }}">
                                        @if($errors->has('title'))
                                            <div class="text-danger ps-1 pt-1">{{ $errors->first('title') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Description</label>
                                        <input class="form-control" type="text" name="description" value="{{ old('description',  $importantLinks->description) }}">
                                        @if($errors->has('description'))
                                            <div class="text-danger ps-1 pt-1">{{ $errors->first('description') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Link</label>
                                        <input class="form-control" type="text" name="link"  value="{{ old('link',  $importantLinks->link
                                        ) }}">
                                        @if($errors->has('link'))
                                            <div class="text-danger ps-1 pt-1">{{ $errors->first('link') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Image</label>
                                        <input class="form-control" type="file" name="image"  value="{{ old('image',  $importantLinks->image) }}">
                                        @if($errors->has('image'))
                                            <div class="text-danger ps-1 pt-1">{{ $errors->first('image') }}</div>
                                        @endif
                                    </div>
                                </div>
                                @if($importantLinks->image)
                                <div class="col-md-12">
                                    <div class="card-body pt-4 p-3">
                                        <ul class="list-group">
                                            
                                           <li class="list-group-item gallery-img border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                                <div class="d-flex flex-column">
                                                    <div><img src="{{url('images/small/'.$importantLinks->image)}}" alt="gallery"></div>
                                                </div>
                                                <!-- <div class="ms-auto text-end">
                                                    <a data-id="" data-image="{{$importantLinks->image}}" class="delete btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;">
                                                        <i class="far fa-trash-alt me-2"></i>Delete</a>
                                                </div> -->
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
