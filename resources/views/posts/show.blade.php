@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                    Post {{$post_id}} : {{$post->title}}
                    </h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-default float-right"
                       href="{{ route('posts.index') }}">
                                                    @lang('crud.back')
                                            </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @include('posts.show_fields')
                </div>
            </div>
        </div>
    </div>
    <section class="content-header mt-5">
        <div class="container-fluid">
            <div class="row mb-2 justify-content-between">
                <div class="col-sm-6">
                    <h1>Comments for the post</h1>
                </div>
                <div class="col-sm-2">
                    <a class="btn btn-primary float-right"
                       href="{{ route('posts.comments.create', ['post'=>$post_id]) }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            @include('comments.table')
        </div>
    </div>
@endsection
