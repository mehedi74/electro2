@extends('admin.master')
@section('title')
    Add Product
@endsection
@section('body')
    <div class="row-fluid sortable">
        <div class="box span12">
            <h4>{{session('msg')}}</h4>
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Product</h2>
            </div>

            <div class="box-content">
                <form class="form-horizontal" action="{{route('products.store')}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                        <div class="control-group" >
                            <label class="control-label" for="date01">Product Code</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="product_code" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Product Name</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="product_name" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Select Category</label>
                            <div class="controls">
                                <select name="pr_category" required>
                                    <option selected disabled>Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Select Sub Category</label>
                            <div class="controls">
                                <select name="pr_subcategory">
                                    <option selected disabled>Select Sub Category</option>
                                        @foreach($subCategories as $subCategory)
                                            <option value="{{$subCategory->id}}">{{$subCategory->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Select Brand</label>
                            <div class="controls">
                                <select name="pr_brand">
                                    <option selected disabled>Select Brand</option>
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Select Unit</label>
                            <div class="controls">
                                <select name="pr_unit">
                                    <option selected disabled>Select Unit</option>
                                    @foreach($units as $unit)
                                        <option value="{{$unit->id}}">{{$unit->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Select Size</label>
                            <div class="controls">
                                <select name="pr_size">
                                    <option selected disabled>Select Size</option>
                                    @foreach($sizes as $size)
                                        <option value="{{$size->id}}">
                                            @foreach(json_decode($size->name) as $newsize)
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
                                    @foreach($colors as $color)
                                        <option value="{{$color->id}}">
                                            @foreach(json_decode($color->name) as $newcolor)
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
                                <input type="number" class="input-xlarge" name="pr_price" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">File Upload</label>
                            <div class="controls">
                                <input type="file" name="file[]" multiple required>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div><!--/span-->
    </div><!--/row-->
@endsection

