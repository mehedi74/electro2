@extends('admin.master')
@section('title')
    Update Product
@endsection
@section('body')
    <div class="row-fluid sortable">
        <div class="box span12">
            <h4>{{session('msg')}}</h4>
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Update Product</h2>
            </div>

            <div class="box-content">
                <form class="form-horizontal" action="{{route('products.update',$data->id)}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <fieldset>
                        <div class="control-group" >
                            <label class="control-label" for="date01">Product Code</label>
                            <div class="controls">
                                <input value="{{$data->code}}" type="text" class="input-xlarge" name="product_code" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Product Name</label>
                            <div class="controls">
                                <input value="{{$data->name}}" type="text" class="input-xlarge" name="product_name" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="date01">Select Category: </label>
                            <div class="controls">
                                <select name="pr_category">
                                    <option selected disabled>Select Category</option>
                                    @foreach($categories as $value)
                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Select Sub Category</label>
                            <div class="controls">
                                <select name="pr_subcategory">
                                    <option selected disabled>Select Sub Category</option>

                                    @foreach($subCategory as $value)
                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Select Brand</label>
                            <div class="controls">
                                <select name="pr_brand">
                                    <option selected disabled>Select Brand</option>
                                    @foreach($brand as $value)
                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Select Unit</label>
                            <div class="controls">
                                <select name="pr_unit">
                                    <option selected disabled>Select Unit</option>

                                    @foreach($unit as $value)
                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Select Size</label>
                            <div class="controls">
                                <select name="pr_size">
                                    <option selected disabled>Select Size</option>
                                    @foreach($size as $value)
                                        <option value="{{$value->id}}">
                                            @foreach(json_decode($value->name) as $newsize)
                                                {{$newsize}}
                                            @endforeach
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Select Color</label>
                            <div class="controls">
                                <select name="pr_color">
                                    <option selected disabled>Select Color</option>
                                    @foreach($color as $value)
                                        <option value="{{$value->id}}">
                                            @foreach(json_decode($value->name) as $newcolor)
                                                {{$newcolor}}
                                            @endforeach
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2"> Description</label>
                            <div class="controls">
                                <textarea class="cleditor" name="pr_description" rows="3" required></textarea>
                            </div>
                        </div>
                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Product Price</label>
                            <div class="controls">
                                <input value="{{$data->price}}" type="number" class="input-xlarge" name="pr_price" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">File Upload</label>
                            <div class="controls">
                                <input type="file" name="file[]" multiple required>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Update Product</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div><!--/span-->
    </div><!--/row-->
@endsection

