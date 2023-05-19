@extends('admin.master')
@section('title')
    Update Sub Category
@endsection
@section('body')
    <div class="row-fluid sortable">
        <div class="box span12">
            <h4>{{session('msg')}}</h4>
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Update Sub Category</h2>
            </div>

            <div class="box-content">
                <form class="form-horizontal" action="{{route('subcategories.update',$subCategory->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="date01">Sub Category Name</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="subcat_name" value="{{$subCategory->name}}">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Select Category</label>
                            <div class="controls">
                                <select name="category_id">
                                    <option selected disabled>Select Category</option>
                                    @foreach($categories as $catagory)
                                        <option value="{{$catagory->id}}">{{$catagory->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Sub Category Description</label>
                            <div class="controls">
                                <textarea class="cleditor" name="subcat_description" rows="3" required>{{$subCategory->description}}}</textarea>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Update Sub Category</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div><!--/span-->
    </div><!--/row-->
@endsection

