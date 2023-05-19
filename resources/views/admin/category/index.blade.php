@extends('admin.master')
@section('title')
    All Category
@endsection
@section('body')

    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="{{route('dashboard')}}">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="{{route('categories.index')}}">Category</a></li>
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
                        <th>Serial No</th>
                        <th>Cat_Id</th>
                        <th>Cat_Name</th>
                        <th>Cat_Description</th>
                        <th>Cat_Image</th>
                        <th>Cat_Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $keys => $category)
                        <tr>
                            <td>{{$keys+1}}</td>
                            <td class="center">{{$category->id}}</td>
                            <td class="center">{{$category->name}}</td>
                            <td class="center">{{$category->description}}</td>
                            <td class="center"><img style="width: 100px;height: 100px;" src="{{$category->image}}"></td>
                            <td class="center">
                                @if($category->status == 1)
                                <span class="label label-success">Active</span>
                                @else
                                    <span class="label label-warning">Deactive</span>
                                @endif
                            </td>
                            <td class="center">
                                @if($category->status == 1)
                                <a href="{{route('category.updatae.status',['id'=>$category->id])}}" class="btn btn-danger">
                                    <i class="halflings-icon white thumbs-down" title="Deactive status?"></i>
                                </a>
                                @else
                                <a href="{{route('category.updatae.status',['id'=>$category->id])}}" class="btn btn-success" >
                                    <i class="halflings-icon thumbs-up" title="Active status?"></i>
                                </a>
                                @endif
                                <a href="{{route('categories.edit',$category->id)}}" class="btn btn-info">
                                    <i class="halflings-icon white edit"></i>
                                </a>
                                    <form style="display: inline-block;" action="{{route('categories.destroy',$category->id)}}" method="post">
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
