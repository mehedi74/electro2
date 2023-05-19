<div id="sidebar-left" class="span2">
    <div class="nav-collapse sidebar-nav">
        <ul class="nav nav-tabs nav-stacked main-menu">
            <li><a href="{{route('dashboard')}}"><i class="icon-bar-chart"></i><span
                        class="hidden-tablet"> Dashboard</span></a></li>
            <li>
                <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span
                        class="hidden-tablet">Category</span></a>
                <ul>
                    <li>
                        <a class="submenu" href="{{route('categories.create')}}"><i class="icon-file-alt"></i>
                            <span class="hidden-tablet">Add Category</span></a>
                    </li>
                    <li>
                        <a class="submenu" href="{{route('categories.index')}}"><i class="icon-file-alt"></i>
                            <span class="hidden-tablet">All Category</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Sub Category</span></a>
                <ul>
                    <li><a class="submenu" href="{{route('subcategories.create')}}"><i class="icon-file-alt"></i><span
                                class="hidden-tablet">Add Sub Category</span></a></li>
                    <li><a class="submenu" href="{{route('subcategories.index')}}"><i class="icon-file-alt"></i><span
                                class="hidden-tablet">All Sub Category</span></a></li>
                </ul>
            </li>
            <li>
                <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span
                        class="hidden-tablet">Brands</span></a>
                <ul>
                    <li><a class="submenu" href="{{route('brands.create')}}"><i class="icon-file-alt"></i><span
                                class="hidden-tablet">Add Brands</span></a></li>
                    <li><a class="submenu" href="{{route('brands.index')}}"><i class="icon-file-alt"></i><span
                                class="hidden-tablet">All Brands</span></a></li>
                </ul>
            </li>
            <li>
                <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span
                        class="hidden-tablet">Units</span></a>
                <ul>
                    <li><a class="submenu" href="{{route('units.create')}}"><i class="icon-file-alt"></i><span
                                class="hidden-tablet">Add Unit</span></a></li>
                    <li><a class="submenu" href="{{route('units.index')}}"><i class="icon-file-alt"></i><span
                                class="hidden-tablet">All Unit</span></a></li>
                </ul>
            </li>
            <li>
                <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span
                        class="hidden-tablet">Sizes</span></a>
                <ul>
                    <li><a class="submenu" href="{{route('sizes.create')}}"><i class="icon-file-alt"></i><span
                                class="hidden-tablet">Add Size</span></a></li>
                    <li><a class="submenu" href="{{route('sizes.index')}}"><i class="icon-file-alt"></i><span
                                class="hidden-tablet">All Sizes</span></a></li>
                </ul>
            </li>
            <li>
                <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span
                        class="hidden-tablet">Color</span></a>
                <ul>
                    <li><a class="submenu" href="{{route('colors.create')}}"><i class="icon-file-alt"></i><span
                                class="hidden-tablet">Add Color</span></a></li>
                    <li><a class="submenu" href="{{route('colors.index')}}"><i class="icon-file-alt"></i><span
                                class="hidden-tablet">All Colors</span></a></li>
                </ul>
            </li>
            <li>
                <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span
                        class="hidden-tablet">Product</span></a>
                <ul>
                    <li><a class="submenu" href="{{route('products.create')}}"><i class="icon-file-alt"></i><span
                                class="hidden-tablet">Add Product</span></a></li>
                    <li><a class="submenu" href="{{route('products.index')}}"><i class="icon-file-alt"></i><span
                                class="hidden-tablet">All Product</span></a></li>
                </ul>
            </li>
{{--            <li>--}}
{{--                <a href="{{route('order.manage')}}"><i class="icon-folder-close-alt"></i><span--}}
{{--                        class="hidden-tablet">Manage Order</span></a>--}}
{{--            </li>--}}
        </ul>
    </div>
</div>
