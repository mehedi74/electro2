@extends('admin.master')
@section('title')
    Update Color
@endsection
@section('body')
    <div class="row-fluid sortable">
        <div class="box span12">
            <h4>{{session('msg')}}</h4>
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Colors</h2>
            </div>
            <div class="box-content">
                <form class="form-horizontal" action="{{route('colors.update',$color->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <fieldset>
                        <div class="control-group">
                            <h5>Recent Color</h5>
                            @foreach(json_decode($color->name) as $newcolor)
                                <ul>
                                    {{$newcolor}}
                                </ul>
                            @endforeach
                            <label class="control-label" for="date01">New Color Name</label>
                            <div class="controls">
                                <input type="text" value="" data-role="tagsinput" class="input-xlarge" name="color_name">
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Add Color</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div><!--/span-->
    </div><!--/row-->
@endsection


