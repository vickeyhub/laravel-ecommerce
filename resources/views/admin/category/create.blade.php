@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Add Category</h3>
                    <a href="{{ url('admin/category') }}" class="btn btn-success text-white">BACK</a>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/category') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Category Name</label>
                                <input type="text" id="name" class="form-control" name="name" placeholder="Category Name" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="slug">Slug</label>
                                <input type="text" id="slug" class="form-control" name="slug" placeholder="Slug" required>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="description">Description</label>
                                <textarea id="description" class="form-control" name="description" placeholder="Description" rows="3" required></textarea>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="image">Image</label>
                                <input type="file" id="image" class="form-control" name="image">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="status">Status</label>
                                <br>
                                <input type="checkbox" id="status" name="status">
                            </div>
                            <div class="form-group col-md-12">
                                <h4>SEO Tags</h4>
                                <hr>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="meta_title">Meta Title</label>
                                <input type="text" id="meta_title" class="form-control" name="meta_title" placeholder="Meta Title" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="meta_keyword">Meta Keyword</label>
                                <input type="text" id="meta_keyword" class="form-control" name="meta_keyword" placeholder="Meta Keyword" required>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="meta_description">Meta Description</label>
                                <textarea id="meta_description" class="form-control" name="meta_description" placeholder="Meta Description" rows="3" required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary float-end text-white">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
