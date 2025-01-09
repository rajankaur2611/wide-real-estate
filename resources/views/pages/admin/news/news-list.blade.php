@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
@endsection
@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'News'])
    <div class="row mt-4 mx-4">
        <div class="col-12">
            <div id="alert">
                @include('components.alert')
            </div>
            <div class="card mb-4">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">News</h6>
                        </div>
                        <div class="col-6 text-end">
                            <a class="btn bg-gradient-dark mb-0" href="{{ route('add-news') }}"><i
                                    class="fas fa-plus"></i>&nbsp;&nbsp;Add New news</a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-3">
                        <table class="table align-items-center mb-0" id="newslist">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Description</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($newses as $news)
                                <tr>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{$news['title']}}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">{{$news['description']}}</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-sm font-weight-bold mb-0">{{$news['price']}}</p>
                                    </td>
                                    <td class="align-middle text-end">
                                        <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                            <a href="{{ route('edit-news', base64_encode($news['id'])) }}" class="text-sm font-weight-bold mb-0">Edit</a>&nbsp;&nbsp;|
                                            <a href="{{ route('delete-news', base64_encode($news['id'])) }}" onclick="return confirm('Are you sure you want to delete this record?')" class="text-sm font-weight-bold mb-0 ps-2">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
<script src="{{url('assets/js/plugins/jquery-3.7.1.min.js')}}"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        let table = new DataTable('#newslist');
    });
</script>
@endpush