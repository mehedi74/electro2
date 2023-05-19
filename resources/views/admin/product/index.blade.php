@extends('admin.master')
@section('title')
    All Product
@endsection
@section('body')

    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="{{route('dashboard')}}">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="{{route('products.index')}}">Product</a></li>
    </ul>
    <h2>{{session('msg')}}</h2>
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Unit</th>
                        <th>Size</th>
                        <th>Color</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $keys => $value)
                        <tr>
                            <td>{{$keys+1}}</td>
                            <td class="center">{{$value->id}}</td>
                            <td class="center">{{$value->name}}</td>
                            <td class="center">{{$value->code}}</td>
                            <td class="center">{{$value->category->name}}</td>
                            <td class="center">{{$value->brand->name}}</td>
                            <td class="center">{{$value->unit->name}}</td>
                            <td class="center">
                                @foreach(json_decode($value->size->name) as $key => $newdata)
                                        {{$newdata}}
                                @endforeach
                            </td>
                            <td  class="center">
                                @foreach(json_decode($value->color->name) as $key => $newdata)
                                    {{$newdata}}
                                @endforeach
                            </td>
                            <td class="center">{{substr($value->description,0,10)}}...</td>
                            <td  class="center">{{$value->price}}</td>
                            <td  class="center">
                                    <?php
                                    $data = explode('|', $value->image);
                                foreach ($data as $newimage){
                                    ?>
                                <img style="width: 30px;height: 30px;display:block" src="{{asset($newimage)}}">
                                    <?php
                                }
                                    ?>
                            </td>
                            <td  class="center">
                                @if($value->status == 1)
                                    <span class="label label-success">Active</span>
                                @else
                                    <span class="label label-warning">Deactive</span>
                                @endif
                            </td>
                            <td width="30%" class="center">
                                @if($value->status == 1)
                                    <a href="{{route('products.update.status',['id'=>$value->id])}}"
                                       class="btn btn-danger">
                                        <i class="halflings-icon white thumbs-down" title="Deactive status?"></i>
                                    </a>
                                @else
                                    <a href="{{route('products.update.status',['id'=>$value->id])}}"
                                       class="btn btn-success">
                                        <i class="halflings-icon thumbs-up" title="Active status?"></i>
                                    </a>
                                @endif
                                <a href="{{route('products.edit',$value->id)}}" class="btn btn-info">
                                    <i class="halflings-icon white edit"></i>
                                </a>
                                    <form style="display: inline-block;" action="{{route('products.destroy',$value->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button style="display: inline-block;" type="submit" class="btn btn-danger" onclick="confirm('Are you sure to delete?')"><i class="halflings-icon white trash"></i></button>
                                    </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div><!--/span-->
    </div><!--/row-->
@endsection
