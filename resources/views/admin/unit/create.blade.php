@extends('admin.master')
@section('title')
    Add Unit
@endsection
@section('body')
    <div class="row-fluid sortable">
        <div class="box span12">
            <h4>{{session('msg')}}</h4>
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Unit</h2>
            </div>

            <div class="box-content">
                <form class="form-horizontal" action="{{route('units.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="date01">Unit Name</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="unit_name" required>
                            </div>
                        </div>

                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Unit Description</label>
                            <div class="controls">
                                <textarea class="cleditor" name="unit_description" rows="3" required></textarea>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Add Unit</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div><!--/span-->
    </div><!--/row-->
@endsection

