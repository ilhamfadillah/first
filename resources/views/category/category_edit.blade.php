@extends('layouts.default') @section('title', 'Edit Category') @section('content')
<div class="container">
    <div class="row">
	<div class="col-xs-6">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">ADD NEW CATEGORY</h3>
                </div>
                <div class="box-body">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Add Category</div>
                        <div class="panel-body">
                            <form method="post" action="{{ action('CategoryController@update') }}">{{csrf_field()}}
                                <input type="hidden" name="_method" value="PUT"/>
                                <input type="hidden" name="id" value="{{ $category->id }}">
                                <div class="form-group">
                                    <label class="col-md-4">Name</label>
                                    <input type="text" class="form-control" name="category" value="{{$category->category}}"/>
                                    @if ($errors->has('category'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('category') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
	</div>
    </div>
</div>@endsection
