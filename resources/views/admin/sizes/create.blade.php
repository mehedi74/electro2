@extends('admin.master')
@section('title')
    Add Sizes
@endsection
@section('body')
    <div class="row-fluid sortable">
        <div class="box span12">
            <h4>{{session('msg')}}</h4>
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Sizes</h2>
            </div>
            <div class="box-content">
                <form class="form-horizontal" action="{{route('sizes.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="date01">Size Name</label>
                            <div class="controls">
                                <input type="text" value="" data-role="tagsinput" class="input-xlarge" name="size_name">
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Add Sizes</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div><!--/span-->
    </div><!--/row-->
@endsection


