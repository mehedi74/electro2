@extends('admin.master')
@section('title')
    Update Brands
@endsection
@section('body')
    <div class="row-fluid sortable">
        <div class="box span12">
            <h4>{{session('msg')}}</h4>
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Update Brands</h2>
            </div>

            <div class="box-content">
                <form class="form-horizontal" action="{{route('brands.update',$brand->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="date01">Brand Name</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="brand_name" value="{{$brand->name}}">
                            </div>
                        </div>

                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Brand Description</label>
                            <div class="controls">
                                <textarea class="cleditor" name="brand_description" rows="3" required>{{$brand->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Update Brand</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div><!--/span-->
    </div><!--/row-->
@endsection
