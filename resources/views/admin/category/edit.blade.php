@extends('admin.master')
@section('title')
   Update Category
@endsection
@section('body')
    <div class="row-fluid sortable">
        <div class="box span12">
            <h4>{{session('msg')}}</h4>
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Update Category</h2>
            </div>

            <div class="box-content">
                <form class="form-horizontal" action="{{route('categories.update',$category->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="date01">Category Name</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="cat_name" value="{{$category->name}}">
                            </div>
                        </div>

                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Category Description</label>
                            <div class="controls">
                                <textarea class="cleditor" name="cat_description" rows="3" required>{{$category->description}}</textarea>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">File Upload</label>
                            <div class="controls">
                                <input type="file" name="cat_image">
                            </div>
                            <img style="width: 100px;height: 100px;" src="{{asset($category->image)}}">
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Update Category</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div><!--/span-->
    </div><!--/row-->
@endsection
