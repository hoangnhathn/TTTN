@extends('admin.layout.master')

@section('title','Product')
@section('content')
            <!-- Main -->
            <div class="app-main__inner">
                <div class="app-page-title">
                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
                            <div class="page-title-icon">
                                <i class="pe-7s-ticket icon-gradient bg-mean-fruit"></i>
                            </div>
                            <div>
                                Sản phẩm
                                <div class="page-title-subheading">
                                    Xem, tạo, cập nhật, xóa và quản lý.
                                </div>
                            </div>
                        </div>

                        <div class="page-title-actions">
                            <a href="./admin/product/create" class="btn-shadow btn-hover-shine mr-3 btn btn-primary">
                                    <span class="btn-icon-wrapper pr-2 opacity-7">
                                        <i class="fa fa-plus fa-w-20"></i>
                                    </span>
                                Tạo
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">

                            <div class="card-header">

                                <form>
                                    <div class="input-group">
                                        <input type="search" name="search" id="search" value="{{request('search')}}"
                                               placeholder="Tìm kiếm" class="form-control">
                                        <span class="input-group-append">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-search"></i>&nbsp;
                                                    Tìm kiếm
                                                </button>
                                            </span>
                                    </div>
                                </form>

                            </div>

                            <div class="table-responsive">
                                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th>Tên</th>
                                        <th class="text-center">Đơn giá</th>
                                        <th class="text-center">Số lượng</th>
                                        <th class="text-center">Hot</th>
                                        <th class="text-center">Hành động</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($products as $product)
                                    <tr>
                                        <td class="text-center text-muted">#{{$product->id}}</td>
                                        <td>
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <div class="widget-content-left">
                                                            <img style="height: 60px;"
                                                                 data-toggle="tooltip" title="Image"
                                                                 data-placement="bottom"
                                                                 src="./client/images/product/{{$product->productImages[0]->path ?? ''}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-left flex2">
                                                        <div class="widget-heading">{{$product->product_name}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">{{$product->price}}</td>
                                        <td class="text-center">{{$product->qty}}</td>
                                        <td class="text-center">
                                            <div class="badge badge-success mt-2">
                                                {{$product->featured ? 'Yes' : 'No'}}
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <a href="./admin/product/{{$product->id}}"
                                               class="btn btn-hover-shine btn-outline-primary border-0 btn-sm">
                                                Chi tiết
                                            </a>
                                            <a href="./admin/product/{{$product->id}}/edit" data-toggle="tooltip" title="Edit"
                                               data-placement="bottom" class="btn btn-outline-warning border-0 btn-sm">
                                                        <span class="btn-icon-wrapper opacity-8">
                                                            <i class="fa fa-edit fa-w-20"></i>
                                                        </span>
                                            </a>
                                            <form class="d-inline" action="./admin/product/{{$product->id}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-hover-shine btn-outline-danger border-0 btn-sm"
                                                        type="submit" data-toggle="tooltip" title="Delete"
                                                        data-placement="bottom"
                                                        onclick="return confirm('Bạn có chắc muốn xóa?')">
                                                            <span class="btn-icon-wrapper opacity-8">
                                                                <i class="fa fa-trash fa-w-20"></i>
                                                            </span>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>

                            <div class="d-block card-footer">
                                {{$products->links()}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- End Main -->
@endsection
