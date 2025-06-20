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
                                        <label for="example-text-input" class="form-control-label">Categories</label>
                                        <select class="form-control" name="category" value="{{ old('category', $project->category) }}">
                                            <option value="1"  @if($project->category == 1){{'selected'}}@endif>Residential</option>
                                            <option value="2"  @if($project->category == 2){{'selected'}}@endif>Commercial</option>
                                            <option value="3"  @if($project->category == 3){{'selected'}}@endif>Farmhouse/Villas</option>
                                            <option value="4"  @if($project->category == 4){{'selected'}}@endif>Investments</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Prime Categories</label>
                                        <select class="form-control" name="prime_category" value="{{ old('prime_category', $project->prime_category) }}">
                                            <option value="new-projects" @if($project->prime_category == 'new-projects'){{'selected'}}@endif>New Projects</option>
                                            <option value="ready-to-move" @if($project->prime_category == 'ready-to-move'){{'selected'}}@endif>Ready to Move</option>
                                            <option value="luxury" @if($project->prime_category == 'luxury'){{'selected'}}@endif>Luxury</option>
                                            <option value="independent-villas" @if($project->prime_category == 'independent-villas'){{'selected'}}@endif>Independent Villas</option>
                                            <option value="plots" @if($project->prime_category == 'plots'){{'selected'}}@endif>Plots</option>
                                            <option value="commercial" @if($project->prime_category == 'commercial'){{'selected'}}@endif>Commercial</option>
                                        </select>
                                    </div>
                                </div>
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
                                        <textarea class="form-control" type="text" name="description">{{ old('description',  $project->description) }}</textarea>
                                        @if($errors->has('description'))
                                            <div class="text-danger ps-1 pt-1">{{ $errors->first('description') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Address</label>
                                        <input class="form-control" type="text" name="address" value="{{ old('address', $project->address) }}">
                                        @if($errors->has('address'))
                                            <div class="text-danger ps-1 pt-1">{{ $errors->first('address') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Size</label>
                                        <input class="form-control" type="text" name="size" value="{{ old('size', $project->size) }}">
                                        @if($errors->has('size'))
                                            <div class="text-danger ps-1 pt-1">{{ $errors->first('size') }}</div>
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
                                        <label for="example-text-input" class="form-control-label">Image</label>
                                        <input class="form-control" type="file" name="image[]" multiple value="{{ old('image',  '') }}">
                                        @if($errors->has('image'))
                                            <div class="text-danger ps-1 pt-1">{{ $errors->first('image') }}</div>
                                        @endif
                                    </div>
                                </div>
                                @if($project['images'] && !$project['images']->isEmpty())
                                <div class="col-md-12">
                                    <div class="card-body pt-4 p-3">
                                        <ul class="list-group">
                                            @foreach($project['images'] as $image)
                                           <li class="list-group-item gallery-img border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                                <div class="d-flex flex-column">
                                                    <div><img src="{{url('images/small/'.$image->image)}}" alt="gallery"></div>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <a data-id="{{$image->id}}" data-image="{{$image->image}}" class="delete btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;">
                                                        <i class="far fa-trash-alt me-2"></i>Delete</a>
                                                </div>
                                            </li>
                                            @endforeach
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
@push('js')
<script>
    $(document).ready(function (){
        $('.gallery-img .delete').click(function(){
            if (confirm('Are you sure want to delete this image?')) {
                $(this).closest('.gallery-img').remove();
                var data = {
                    id : $(this).data('id'),
                    image : $(this).data('image'),
                    _token: "{{ csrf_token() }}",
                }
                console.log(data)
                $.ajax({
                    type: 'POST',
                    url: '/admin/project-image-delete',
                    data: data,
                    success: function success(data) {
                        console.log('hhh',data)
                        alert('Image deleted Successfully!');
                    },
                    error: function error(data) {
                
                    }
                });
            } else {
                alert('Why did you press cancel? You should have confirmed');
            }
            
        })
    })
</script>
@endpush