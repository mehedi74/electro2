@extends('admin.master')
@section('title')
    Update Sizes
@endsection
@section('body')
    <div class="row-fluid sortable">
        <div class="box span12">
            <h4>{{session('msg')}}</h4>
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Update Sizes</h2>
            </div>
            <div class="box-content">
                <form class="form-horizontal" action="{{route('sizes.update',$size->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <fieldset>
                        <div class="control-group">
                            <h3>Recent Sizes:</h3>
                            @foreach(json_decode($size->name) as $newsize)
                                <ul class="span1">
                                    {{$newsize}}
                                </ul>
                            @endforeach
                            <label class="control-label" for="date01">New Size Name</label>
                            <div class="controls">
                                <input type="text" value=" " data-role="tagsinput" class="input-xlarge" name="size_name">
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Update Sizes</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div><!--/span-->
    </div><!--/row-->
@endsection



