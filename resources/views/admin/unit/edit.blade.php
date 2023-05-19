@extends('admin.master')
@section('title')
    Update Unit
@endsection
@section('body')
    <div class="row-fluid sortable">
        <div class="box span12">
            <h4>{{session('msg')}}</h4>
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Update Unit</h2>
            </div>

            <div class="box-content">
                <form class="form-horizontal" action="{{route('units.update',$unit->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="date01">Unit Name</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="unit_name" value="{{$unit->name}}">
                            </div>
                        </div>

                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Unit Description</label>
                            <div class="controls">
                                <textarea class="cleditor" name="unit_description" rows="3" required>{{$unit->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Update Unit</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div><!--/span-->
    </div><!--/row-->
@endsection


