@extends('admin.admin_layout')
@section('add_product')
    <title>Thêm mới Sản phẩm</title>
    <!-- Page Heading -->
    <div class="element-wrapper">
        <h6 class="element-header">
            THÊM MỚI SẢN PHẨM
        </h6>
    </div>
    <form action="add_product" method="post" enctype="multipart/form-data">
        @csrf
        <div class="element-box login-panel panel panel-default">

            <legend><span style="font-weight:bold">Thông tin Sản phẩm</span></legend>

            <div class="form-group">
                <label>Tên Sản phẩm</label>
                <input type="text" name="product_name" class="form-control" placeholder="Tên sản phẩm" data-error="Vui lòng nhập Tên sản phẩm" required>
                <div class="help-block form-text with-errors form-control-feedback"></div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Danh mục sản phẩm</label>
                        <select class="form-control" name="category_id">
                            @foreach($cate_product as $key=>$cate)
                                <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                            <label>Thương hiệu sản phẩm</label>
                            <select class="form-control" name="brand_id">
                                @foreach($brand_product as $key=>$brand)
                                    <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                @endforeach
                            </select>

                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Hình ảnh Sản phẩm</label>
                <input type="file" name="product_image" class="form-control">
            </div>

            <div class="form-group">
                <label>Thư viện ảnh Sản phẩm</label>
                <input type="file" name="filename[]" class="form-control" multiple>
            </div>

            <div class="form-group">
                <label>Mô tả Sản phẩm</label>
                <textarea type="number" name="product_description" class="form-control" placeholder="Mô tả sản phẩm" data-error="Vui lòng nhập Mô tả sản phẩm" required> </textarea>
                <div class="help-block form-text text-muted form-control-feedback">
                    Mô tả chi tiết sản phẩm
                </div>
            </div>

            <div class="form-group">
                <label>Nội dung Sản phẩm</label>
                <textarea type="number" name="product_content" class="form-control" placeholder="Nội dung sản phẩm" data-error="Vui lòng nhập Nội dung sản phẩm" required> </textarea>
                <div class="help-block form-text text-muted form-control-feedback">
                    Nội dung sản phẩm
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Giá Sản phẩm</label>
                        <div class="input-group">
                            <input type="text" name="product_price" class="form-control" placeholder="Giá sản phẩm" data-error="Vui lòng nhập Giá sản phẩm" required>
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    VNĐ
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Trạng thái</label>
                        <select class="form-control" name="product_status">
                            <option value="0">Ẩn</option>
                            <option value="1" selected>Hiển thị</option>
                        </select>
                    </div>
                </div>
            </div>
            <?php
            use Illuminate\Support\Facades\Session;
            $success = Session::get('success');
            if($success) {
                echo '<div class="alert alert-success" role="alert"><strong>Thành công! </strong>'.$success.'</div>';
                Session::put('success', null);
            }
            ?>

            <div class="form-buttons-w">
                <button class="btn btn-success" type="submit">Thêm Sản phẩm</button>
            </div>
        </div>
    </form>


@endsection
