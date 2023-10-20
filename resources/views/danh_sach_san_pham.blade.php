@extends('pages.masterVuexy.masterVuexy')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <b>Danh sách đơn hàng</b>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center align-middle bg-primary text-light">#</th>
                                <th class="text-center align-middle bg-primary text-light">Mã đơn hàng</th>
                                <th class="text-center align-middle bg-primary text-light">Số lượng</th>
                                <th class="text-center align-middle bg-primary text-light">Số điện thoại</th>
                                <th class="text-center align-middle bg-primary text-light">Địa chỉ</th>
                                <th class="text-center align-middle bg-primary text-light">Ghi chú</th>
                                <th class="text-center align-middle bg-primary text-light">Trạng thái</th>
                                <th class="text-center align-middle bg-primary text-light">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-center align-middle">1</th>
                                <td class="text-center align-middle">Dz01</td>
                                <td class="text-center align-middle">42</td>
                                <td class="text-center align-middle">2141251251</td>
                                <td class="text-center align-middle">Hội an</td>
                                <td class="text-center align-middle"><a href=""><div class="btn btn-info"><i class="fa-solid fa-info"></i></div></a></td>
                                <td class="text-center align-middle"><a href=""><div class="btn btn-warning" style="width: 180px;">Chưa thanh toán</div></a></td>
                                <td class="text-center align-middle"><a href=""><div class="btn border border-primary text-primary">Xem chi tiết</div></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
