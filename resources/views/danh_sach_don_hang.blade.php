@extends('pages.masterVuexy.masterVuexy')
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card border border-primary">
                <div class="card-header">
                    <b>Thêm mới danh mục</b>
                </div>
                <div class="card-body">
                    <label for=""><b>Tên danh mục</b></label>
                    <input type="text" name="" id="" class="form-control my-2"
                        placeholder="Nhập tên danh mục">
                    <label for=""><b>Slug danh mục</b></label>
                    <input type="text" name="" id="" class="form-control my-2"
                        placeholder="Nhập Slug danh mục">
                    <label for=""><b>Tình trạng</b></label>
                    <select class="form-select my-2" aria-label="Default select example ">
                        <option selected>Yes</option>
                        <option value="1">No</option>
                        <option value="2">Another</option>
                    </select>
                </div>
                <div class="card-footer">
                    <div class="btn btn-primary">Thêm mới</div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card border border-primary">
                <div class="card-header">
                    <b>Danh sách danh mục</b>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="align-middle text-center">#</th>
                                <th class="align-middle text-center">Tên danh mục</th>
                                <th class="align-middle text-center">Slug danh mục</th>
                                <th class="align-middle text-center">Tình trạng</th>
                                <th class="align-middle text-center" colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <th class="align-middle text-center">1</th>
                              <td class="align-middle text-center">balo</td>
                              <td class="align-middle text-center">23</td>
                              <td class="align-middle text-center"><a href=""><div class="btn btn-success"><b>Yes</b></div></a></td>
                              <td class="align-middle text-center"><a href=""><div class="btn btn-info" style="min-width: 100px"><b>Cập nhật</b></div></a></td>
                              <td class="align-middle text-center"><a href=""><div class="btn btn-danger" style="min-width: 100px"><b>Xoá</b></div></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
