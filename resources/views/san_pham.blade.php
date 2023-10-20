@extends('pages.masterCuba.masterCuba')
@section('content')
    <div id="app">
        <div class="product-wrapper">
            <div class="product-grid">
                <div class="feature-products">
                    <div class="row">
                        <div class="col-md-6 products-total">
                            <div class="square-product-setting d-inline-block"><a class="icon-grid grid-layout-view" href="#"
                                    data-original-title="" title="" data-bs-original-title=""><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-grid">
                                        <rect x="3" y="3" width="7" height="7"></rect>
                                        <rect x="14" y="3" width="7" height="7"></rect>
                                        <rect x="14" y="14" width="7" height="7"></rect>
                                        <rect x="3" y="14" width="7" height="7"></rect>
                                    </svg></a></div>
                            <div class="square-product-setting d-inline-block"><a class="icon-grid m-0 list-layout-view"
                                    href="#" data-original-title="" title="" data-bs-original-title=""><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-list">
                                        <line x1="8" y1="6" x2="21" y2="6"></line>
                                        <line x1="8" y1="12" x2="21" y2="12"></line>
                                        <line x1="8" y1="18" x2="21" y2="18"></line>
                                        <line x1="3" y1="6" x2="3" y2="6"></line>
                                        <line x1="3" y1="12" x2="3" y2="12"></line>
                                        <line x1="3" y1="18" x2="3" y2="18"></line>
                                    </svg></a></div><span class="d-none-productlist filter-toggle">
                                Filters<span class="ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-chevron-down toggle-data">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg></span></span>
                            <div class="grid-options d-inline-block">
                                <ul>
                                    <li><a class="product-2-layout-view" href="#" data-original-title="" title=""
                                            data-bs-original-title=""><span
                                                class="line-grid line-grid-1 bg-primary"></span><span
                                                class="line-grid line-grid-2 bg-primary"></span></a></li>
                                    <li><a class="product-3-layout-view" href="#" data-original-title="" title=""
                                            data-bs-original-title=""><span
                                                class="line-grid line-grid-3 bg-primary"></span><span
                                                class="line-grid line-grid-4 bg-primary"></span><span
                                                class="line-grid line-grid-5 bg-primary"></span></a></li>
                                    <li><a class="product-4-layout-view" href="#" data-original-title="" title=""
                                            data-bs-original-title=""><span
                                                class="line-grid line-grid-6 bg-primary"></span><span
                                                class="line-grid line-grid-7 bg-primary"></span><span
                                                class="line-grid line-grid-8 bg-primary"></span><span
                                                class="line-grid line-grid-9 bg-primary"></span></a></li>
                                    <li><a class="product-6-layout-view" href="#" data-original-title=""
                                            title="" data-bs-original-title=""><span
                                                class="line-grid line-grid-10 bg-primary"></span><span
                                                class="line-grid line-grid-11 bg-primary"></span><span
                                                class="line-grid line-grid-12 bg-primary"></span><span
                                                class="line-grid line-grid-13 bg-primary"></span><span
                                                class="line-grid line-grid-14 bg-primary"></span><span
                                                class="line-grid line-grid-15 bg-primary"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 text-end"><span class="f-w-600 m-r-5">Showing Products 1 - 24 Of 200
                                Results</span>
                            <div class="select2-drpdwn-product select-options d-inline-block">
                                <select class="form-control btn-square" name="select">
                                    <option value="opt1">Featured</option>
                                    <option value="opt2">Lowest Prices</option>
                                    <option value="opt3">Highest Prices</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="product-sidebar">
                                <div class="filter-section">
                                    <div class="card">
                                        <div class="card-header">
                                            <h6 class="mb-0 f-w-600">Filters<span class="pull-right"><i
                                                        class="fa fa-chevron-down toggle-data"></i></span></h6>
                                        </div>
                                        <div class="left-filter">
                                            <div class="card-body filter-cards-view animate-chk">
                                                <div class="product-filter">
                                                    <h6 class="f-w-600">Category</h6>
                                                    <div class="checkbox-animated mt-0">
                                                        <label class="d-block" for="edo-ani5">
                                                            <input class="radio_animated" id="edo-ani5" type="radio"
                                                                data-original-title="" title=""
                                                                data-bs-original-title="">Man Shirt
                                                        </label>
                                                        <label class="d-block" for="edo-ani6">
                                                            <input class="radio_animated" id="edo-ani6" type="radio"
                                                                data-original-title="" title=""
                                                                data-bs-original-title="">Man Jeans
                                                        </label>
                                                        <label class="d-block" for="edo-ani7">
                                                            <input class="radio_animated" id="edo-ani7" type="radio"
                                                                data-original-title="" title=""
                                                                data-bs-original-title="">Woman Top
                                                        </label>
                                                        <label class="d-block" for="edo-ani8">
                                                            <input class="radio_animated" id="edo-ani8" type="radio"
                                                                data-original-title="" title=""
                                                                data-bs-original-title="">Woman Jeans
                                                        </label>
                                                        <label class="d-block" for="edo-ani9">
                                                            <input class="radio_animated" id="edo-ani9" type="radio"
                                                                data-original-title="" title=""
                                                                data-bs-original-title="">Man T-shirt
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="product-filter">
                                                    <h6 class="f-w-600">Brand</h6>
                                                    <div class="checkbox-animated mt-0">
                                                        <label class="d-block" for="chk-ani">
                                                            <input class="checkbox_animated" id="chk-ani" type="checkbox"
                                                                data-original-title="" title=""
                                                                data-bs-original-title=""> Levi's
                                                        </label>
                                                        <label class="d-block" for="chk-ani1">
                                                            <input class="checkbox_animated" id="chk-ani1" type="checkbox"
                                                                data-original-title="" title=""
                                                                data-bs-original-title="">Diesel
                                                        </label>
                                                        <label class="d-block" for="chk-ani2">
                                                            <input class="checkbox_animated" id="chk-ani2" type="checkbox"
                                                                data-original-title="" title=""
                                                                data-bs-original-title="">Lee
                                                        </label>
                                                        <label class="d-block" for="chk-ani3">
                                                            <input class="checkbox_animated" id="chk-ani3" type="checkbox"
                                                                data-original-title="" title=""
                                                                data-bs-original-title="">Hudson
                                                        </label>
                                                        <label class="d-block" for="chk-ani4">
                                                            <input class="checkbox_animated" id="chk-ani4" type="checkbox"
                                                                data-original-title="" title=""
                                                                data-bs-original-title="">Denizen
                                                        </label>
                                                        <label class="d-block" for="chk-ani5">
                                                            <input class="checkbox_animated" id="chk-ani5" type="checkbox"
                                                                data-original-title="" title=""
                                                                data-bs-original-title="">Spykar
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="product-filter slider-product">
                                                    <h6 class="f-w-600">Colors</h6>
                                                    <div class="color-selector">
                                                        <ul>
                                                            <li class="white"></li>
                                                            <li class="gray"></li>
                                                            <li class="black"></li>
                                                            <li class="orange"></li>
                                                            <li class="green"></li>
                                                            <li class="pink"></li>
                                                            <li class="yellow"></li>
                                                            <li class="blue"></li>
                                                            <li class="red"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-filter pb-0">
                                                    <h6 class="f-w-600">Price</h6>
                                                    <span class="irs js-irs-0 irs-with-grid"><span class="irs"><span
                                                                class="irs-line" tabindex="0"><span
                                                                    class="irs-line-left"></span><span
                                                                    class="irs-line-mid"></span><span
                                                                    class="irs-line-right"></span></span><span class="irs-min"
                                                                style="visibility: visible;">$0</span><span class="irs-max"
                                                                style="visibility: visible;">$1 000</span><span
                                                                class="irs-from"
                                                                style="visibility: visible; left: 15.8614%;">$200</span><span
                                                                class="irs-to"
                                                                style="visibility: visible; left: 73.9808%;">$800</span><span
                                                                class="irs-single"
                                                                style="visibility: hidden; left: 39.3231%;">$200 —
                                                                $800</span></span><span class="irs-grid"
                                                            style="width: 96.9801%; left: 1.40995%;"><span
                                                                class="irs-grid-pol" style="left: 0%"></span><span
                                                                class="irs-grid-text js-grid-text-0"
                                                                style="left: 0%; margin-left: -1.67725%;">0</span><span
                                                                class="irs-grid-pol small" style="left: 20%"></span><span
                                                                class="irs-grid-pol small" style="left: 15%"></span><span
                                                                class="irs-grid-pol small" style="left: 10%"></span><span
                                                                class="irs-grid-pol small" style="left: 5%"></span><span
                                                                class="irs-grid-pol" style="left: 25%"></span><span
                                                                class="irs-grid-text js-grid-text-1"
                                                                style="left: 25%; visibility: visible; margin-left: -3.27514%;">250</span><span
                                                                class="irs-grid-pol small" style="left: 45%"></span><span
                                                                class="irs-grid-pol small" style="left: 40%"></span><span
                                                                class="irs-grid-pol small" style="left: 35%"></span><span
                                                                class="irs-grid-pol small" style="left: 30%"></span><span
                                                                class="irs-grid-pol" style="left: 50%"></span><span
                                                                class="irs-grid-text js-grid-text-2"
                                                                style="left: 50%; visibility: visible; margin-left: -3.33304%;">500</span><span
                                                                class="irs-grid-pol small" style="left: 70%"></span><span
                                                                class="irs-grid-pol small" style="left: 65%"></span><span
                                                                class="irs-grid-pol small" style="left: 60%"></span><span
                                                                class="irs-grid-pol small" style="left: 55%"></span><span
                                                                class="irs-grid-pol" style="left: 75%"></span><span
                                                                class="irs-grid-text js-grid-text-3"
                                                                style="left: 75%; visibility: visible; margin-left: -3.18291%;">750</span><span
                                                                class="irs-grid-pol small" style="left: 95%"></span><span
                                                                class="irs-grid-pol small" style="left: 90%"></span><span
                                                                class="irs-grid-pol small" style="left: 85%"></span><span
                                                                class="irs-grid-pol small" style="left: 80%"></span><span
                                                                class="irs-grid-pol" style="left: 100%"></span><span
                                                                class="irs-grid-text js-grid-text-4"
                                                                style="left: 100%; margin-left: -4.35183%;">1
                                                                000</span></span><span class="irs-bar"
                                                            style="left: 20.906%; width: 58.1881%;"></span><span
                                                            class="irs-shadow shadow-from" style="display: none;"></span><span
                                                            class="irs-shadow shadow-to" style="display: none;"></span><span
                                                            class="irs-slider from" style="left: 19.396%;"></span><span
                                                            class="irs-slider to type_last"
                                                            style="left: 77.5841%;"></span></span><input id="u-range-03"
                                                        type="text" class="irs-hidden-input" tabindex="-1"
                                                        readonly="" data-bs-original-title="" title="">
                                                    <h6 class="f-w-600">New Products</h6>
                                                </div>
                                                <div class="product-filter pb-0 new-products">
                                                    <div class="owl-carousel owl-theme owl-loaded owl-drag" id="testimonial">


                                                        <div class="owl-stage-outer">
                                                            <div class="owl-stage"
                                                                style="transform: translate3d(-788px, 0px, 0px); transition: all 0s ease 0s; width: 2366px;">
                                                                <div class="owl-item cloned"
                                                                    style="width: 364.25px; margin-right: 30px;">
                                                                    <div class="item">
                                                                        <div class="product-box row">
                                                                            <div class="product-img col-md-5"><img
                                                                                    class="img-fluid img-100"
                                                                                    src="https://scontent.fhan4-1.fna.fbcdn.net/v/t45.1600-4/392525880_23862100668360419_2510931518178685297_n.jpg?stp=cp0_dst-jpg_p526x296_q75_spS444&_nc_cat=104&ccb=1-7&_nc_sid=9aa348&_nc_ohc=oGPw_vm9ecQAX8exESL&_nc_ht=scontent.fhan4-1.fna&oh=00_AfCwgwWDF13VX-YkCR8btKcCiMcAoAtJhRIjcEI29Z0_FA&oe=6536537E"
                                                                                    alt="" data-original-title=""
                                                                                    title=""></div>
                                                                            <div class="product-details col-md-7 text-start">
                                                                                <span><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning"></i></span>
                                                                                <p class="mb-0">Fancy Shirt</p>
                                                                                <div class="product-price">$100.00</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-box row">
                                                                            <div class="product-img col-md-5"><img
                                                                                    class="img-fluid img-100"
                                                                                    src="https://scontent.fhan4-1.fna.fbcdn.net/v/t45.1600-4/392525880_23862100668360419_2510931518178685297_n.jpg?stp=cp0_dst-jpg_p526x296_q75_spS444&_nc_cat=104&ccb=1-7&_nc_sid=9aa348&_nc_ohc=oGPw_vm9ecQAX8exESL&_nc_ht=scontent.fhan4-1.fna&oh=00_AfCwgwWDF13VX-YkCR8btKcCiMcAoAtJhRIjcEI29Z0_FA&oe=6536537E"
                                                                                    alt="" data-original-title=""
                                                                                    title=""></div>
                                                                            <div class="product-details col-md-7 text-start">
                                                                                <span><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning"></i></span>
                                                                                <p class="mb-0">Fancy Shirt</p>
                                                                                <div class="product-price">$100.00</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-box row">
                                                                            <div class="product-img col-md-5"><img
                                                                                    class="img-fluid img-100"
                                                                                    src="../assets/images/ecommerce/03.jpg"
                                                                                    alt="" data-original-title=""
                                                                                    title=""></div>
                                                                            <div class="product-details col-md-7 text-start">
                                                                                <span><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning"></i></span>
                                                                                <p class="mb-0">Fancy Shirt</p>
                                                                                <div class="product-price">$100.00</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item cloned"
                                                                    style="width: 364.25px; margin-right: 30px;">
                                                                    <div class="item">
                                                                        <div class="product-box row">
                                                                            <div class="product-img col-md-5"><img
                                                                                    class="img-fluid img-100"
                                                                                    src="../assets/images/ecommerce/01.jpg"
                                                                                    alt="" data-original-title=""
                                                                                    title=""></div>
                                                                            <div class="product-details col-md-7 text-start">
                                                                                <span><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning"></i></span>
                                                                                <p class="mb-0">Fancy Shirt</p>
                                                                                <div class="product-price">$100.00</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-box row">
                                                                            <div class="product-img col-md-5"><img
                                                                                    class="img-fluid img-100"
                                                                                    src="https://scontent.fhan4-1.fna.fbcdn.net/v/t45.1600-4/392525880_23862100668360419_2510931518178685297_n.jpg?stp=cp0_dst-jpg_p526x296_q75_spS444&_nc_cat=104&ccb=1-7&_nc_sid=9aa348&_nc_ohc=oGPw_vm9ecQAX8exESL&_nc_ht=scontent.fhan4-1.fna&oh=00_AfCwgwWDF13VX-YkCR8btKcCiMcAoAtJhRIjcEI29Z0_FA&oe=6536537E"
                                                                                    alt="" data-original-title=""
                                                                                    title=""></div>
                                                                            <div class="product-details col-md-7 text-start">
                                                                                <span><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning"></i></span>
                                                                                <p class="mb-0">Fancy Shirt</p>
                                                                                <div class="product-price">$100.00</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-box row">
                                                                            <div class="product-img col-md-5"><img
                                                                                    class="img-fluid img-100"
                                                                                    src="../assets/images/ecommerce/03.jpg"
                                                                                    alt="" data-original-title=""
                                                                                    title=""></div>
                                                                            <div class="product-details col-md-7 text-start">
                                                                                <span><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning"></i></span>
                                                                                <p class="mb-0">Fancy Shirt</p>
                                                                                <div class="product-price">$100.00 </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item active"
                                                                    style="width: 364.25px; margin-right: 30px;">
                                                                    <div class="item">
                                                                        <div class="product-box row">
                                                                            <div class="product-img col-md-5"><img
                                                                                    class="img-fluid img-100"
                                                                                    src="../assets/images/ecommerce/01.jpg"
                                                                                    alt="" data-original-title=""
                                                                                    title=""></div>
                                                                            <div class="product-details col-md-7 text-start">
                                                                                <span><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning"></i></span>
                                                                                <p class="mb-0">Fancy Shirt</p>
                                                                                <div class="product-price">$100.00</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-box row">
                                                                            <div class="product-img col-md-5"><img
                                                                                    class="img-fluid img-100"
                                                                                    src="https://scontent.fhan4-1.fna.fbcdn.net/v/t45.1600-4/392525880_23862100668360419_2510931518178685297_n.jpg?stp=cp0_dst-jpg_p526x296_q75_spS444&_nc_cat=104&ccb=1-7&_nc_sid=9aa348&_nc_ohc=oGPw_vm9ecQAX8exESL&_nc_ht=scontent.fhan4-1.fna&oh=00_AfCwgwWDF13VX-YkCR8btKcCiMcAoAtJhRIjcEI29Z0_FA&oe=6536537E"
                                                                                    alt="" data-original-title=""
                                                                                    title=""></div>
                                                                            <div class="product-details col-md-7 text-start">
                                                                                <span><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning"></i></span>
                                                                                <p class="mb-0">Fancy Shirt</p>
                                                                                <div class="product-price">$100.00</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-box row">
                                                                            <div class="product-img col-md-5"><img
                                                                                    class="img-fluid img-100"
                                                                                    src="../assets/images/ecommerce/03.jpg"
                                                                                    alt="" data-original-title=""
                                                                                    title=""></div>
                                                                            <div class="product-details col-md-7 text-start">
                                                                                <span><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning"></i></span>
                                                                                <p class="mb-0">Fancy Shirt</p>
                                                                                <div class="product-price">$100.00</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item"
                                                                    style="width: 364.25px; margin-right: 30px;">
                                                                    <div class="item">
                                                                        <div class="product-box row">
                                                                            <div class="product-img col-md-5"><img
                                                                                    class="img-fluid img-100"
                                                                                    src="../assets/images/ecommerce/01.jpg"
                                                                                    alt="" data-original-title=""
                                                                                    title=""></div>
                                                                            <div class="product-details col-md-7 text-start">
                                                                                <span><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning"></i></span>
                                                                                <p class="mb-0">Fancy Shirt</p>
                                                                                <div class="product-price">$100.00</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-box row">
                                                                            <div class="product-img col-md-5"><img
                                                                                    class="img-fluid img-100"
                                                                                    src="https://scontent.fhan4-1.fna.fbcdn.net/v/t45.1600-4/392525880_23862100668360419_2510931518178685297_n.jpg?stp=cp0_dst-jpg_p526x296_q75_spS444&_nc_cat=104&ccb=1-7&_nc_sid=9aa348&_nc_ohc=oGPw_vm9ecQAX8exESL&_nc_ht=scontent.fhan4-1.fna&oh=00_AfCwgwWDF13VX-YkCR8btKcCiMcAoAtJhRIjcEI29Z0_FA&oe=6536537E"
                                                                                    alt="" data-original-title=""
                                                                                    title=""></div>
                                                                            <div class="product-details col-md-7 text-start">
                                                                                <span><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning"></i></span>
                                                                                <p class="mb-0">Fancy Shirt</p>
                                                                                <div class="product-price">$100.00</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-box row">
                                                                            <div class="product-img col-md-5"><img
                                                                                    class="img-fluid img-100"
                                                                                    src="../assets/images/ecommerce/03.jpg"
                                                                                    alt="" data-original-title=""
                                                                                    title=""></div>
                                                                            <div class="product-details col-md-7 text-start">
                                                                                <span><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning"></i></span>
                                                                                <p class="mb-0">Fancy Shirt</p>
                                                                                <div class="product-price">$100.00 </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item cloned"
                                                                    style="width: 364.25px; margin-right: 30px;">
                                                                    <div class="item">
                                                                        <div class="product-box row">
                                                                            <div class="product-img col-md-5"><img
                                                                                    class="img-fluid img-100"
                                                                                    src="../assets/images/ecommerce/01.jpg"
                                                                                    alt="" data-original-title=""
                                                                                    title=""></div>
                                                                            <div class="product-details col-md-7 text-start">
                                                                                <span><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning"></i></span>
                                                                                <p class="mb-0">Fancy Shirt</p>
                                                                                <div class="product-price">$100.00</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-box row">
                                                                            <div class="product-img col-md-5"><img
                                                                                    class="img-fluid img-100"
                                                                                    src="https://scontent.fhan4-1.fna.fbcdn.net/v/t45.1600-4/392525880_23862100668360419_2510931518178685297_n.jpg?stp=cp0_dst-jpg_p526x296_q75_spS444&_nc_cat=104&ccb=1-7&_nc_sid=9aa348&_nc_ohc=oGPw_vm9ecQAX8exESL&_nc_ht=scontent.fhan4-1.fna&oh=00_AfCwgwWDF13VX-YkCR8btKcCiMcAoAtJhRIjcEI29Z0_FA&oe=6536537E"
                                                                                    alt="" data-original-title=""
                                                                                    title=""></div>
                                                                            <div class="product-details col-md-7 text-start">
                                                                                <span><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning"></i></span>
                                                                                <p class="mb-0">Fancy Shirt</p>
                                                                                <div class="product-price">$100.00</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-box row">
                                                                            <div class="product-img col-md-5"><img
                                                                                    class="img-fluid img-100"
                                                                                    src="../assets/images/ecommerce/03.jpg"
                                                                                    alt="" data-original-title=""
                                                                                    title=""></div>
                                                                            <div class="product-details col-md-7 text-start">
                                                                                <span><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning"></i></span>
                                                                                <p class="mb-0">Fancy Shirt</p>
                                                                                <div class="product-price">$100.00</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item cloned"
                                                                    style="width: 364.25px; margin-right: 30px;">
                                                                    <div class="item">
                                                                        <div class="product-box row">
                                                                            <div class="product-img col-md-5"><img
                                                                                    class="img-fluid img-100"
                                                                                    src="../assets/images/ecommerce/01.jpg"
                                                                                    alt="" data-original-title=""
                                                                                    title=""></div>
                                                                            <div class="product-details col-md-7 text-start">
                                                                                <span><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning"></i></span>
                                                                                <p class="mb-0">Fancy Shirt</p>
                                                                                <div class="product-price">$100.00</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-box row">
                                                                            <div class="product-img col-md-5"><img
                                                                                    class="img-fluid img-100"
                                                                                    src="https://scontent.fhan4-1.fna.fbcdn.net/v/t45.1600-4/392525880_23862100668360419_2510931518178685297_n.jpg?stp=cp0_dst-jpg_p526x296_q75_spS444&_nc_cat=104&ccb=1-7&_nc_sid=9aa348&_nc_ohc=oGPw_vm9ecQAX8exESL&_nc_ht=scontent.fhan4-1.fna&oh=00_AfCwgwWDF13VX-YkCR8btKcCiMcAoAtJhRIjcEI29Z0_FA&oe=6536537E"
                                                                                    alt="" data-original-title=""
                                                                                    title=""></div>
                                                                            <div class="product-details col-md-7 text-start">
                                                                                <span><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning"></i></span>
                                                                                <p class="mb-0">Fancy Shirt</p>
                                                                                <div class="product-price">$100.00</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-box row">
                                                                            <div class="product-img col-md-5"><img
                                                                                    class="img-fluid img-100"
                                                                                    src="../assets/images/ecommerce/03.jpg"
                                                                                    alt="" data-original-title=""
                                                                                    title=""></div>
                                                                            <div class="product-details col-md-7 text-start">
                                                                                <span><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning me-1"></i><i
                                                                                        class="fa fa-star font-warning"></i></span>
                                                                                <p class="mb-0">Fancy Shirt</p>
                                                                                <div class="product-price">$100.00 </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-nav"><button type="button" role="presentation"
                                                                class="owl-prev"><span
                                                                    aria-label="Previous">‹</span></button><button
                                                                type="button" role="presentation" class="owl-next"><span
                                                                    aria-label="Next">›</span></button></div>
                                                        <div class="owl-dots disabled"></div>
                                                    </div>
                                                </div>
                                                <div class="product-filter text-center"><img class="img-fluid banner-product"
                                                        src="../assets/images/ecommerce/banner.jpg" alt=""
                                                        data-original-title="" title=""></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <form>
                                <div class="form-group m-0">
                                    <input class="form-control" type="search" placeholder="Search.." data-original-title=""
                                        title="" data-bs-original-title=""><i class="fa fa-search"></i>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="product-wrapper-grid">
                    <div class="row">
                        {{-- sản phẩm --}}
                       <template v-for="(value,key) in list_san_pham">
                         <div class="col-md-3 d-flex">
                            <div class="card">
                                <div class="product-box">
                                    <div class="product-img text-center"><img class="img-fluid"
                                            v-bind:src="value.hinh_anh" style="height: 350px; width: 350px;"
                                            alt="">
                                        <div class="product-hover">
                                            <ul>
                                                <li>
                                                    <button class="btn" type="button" data-bs-original-title=""
                                                        title=""><i class="icon-shopping-cart"></i></button>
                                                </li>
                                                <li>
                                                    <button class="btn" type="button" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter4" data-bs-original-title=""
                                                        title=""><i class="icon-eye"></i></button>
                                                </li>
                                                <li>
                                                    <button class="btn" type="button" data-bs-original-title=""
                                                        title=""><i class="icofont icofont-law-alt-2"></i></button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenter4" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <div class="product-box row">
                                                        <div class="product-img col-lg-6"><img class="img-fluid"
                                                                src="https://scontent.fhan4-1.fna.fbcdn.net/v/t45.1600-4/392525880_23862100668360419_2510931518178685297_n.jpg?stp=cp0_dst-jpg_p526x296_q75_spS444&_nc_cat=104&ccb=1-7&_nc_sid=9aa348&_nc_ohc=oGPw_vm9ecQAX8exESL&_nc_ht=scontent.fhan4-1.fna&oh=00_AfCwgwWDF13VX-YkCR8btKcCiMcAoAtJhRIjcEI29Z0_FA&oe=6536537E"
                                                                alt=""></div>
                                                        <div class="product-details col-lg-6 text-start">
                                                            <h4>Woman T-shirt</h4>
                                                            <div class="product-price">$26.00
                                                                <del>$350.00 </del>
                                                            </div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-600">Product Details</h6>
                                                                <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus
                                                                    error sit voluptatem accusantium doloremque laudantium,
                                                                    totam rem aperiam eaque ipsa, quae ab illo.</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul>
                                                                    <li>
                                                                        <button class="btn btn-outline-light" type="button"
                                                                            data-bs-original-title=""
                                                                            title="">M</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn btn-outline-light" type="button"
                                                                            data-bs-original-title=""
                                                                            title="">L</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn btn-outline-light" type="button"
                                                                            data-bs-original-title=""
                                                                            title="">Xl</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-600">Quantity</h6>
                                                                <fieldset>
                                                                    <div class="input-group bootstrap-touchspin">
                                                                        <button
                                                                            class="btn btn-primary btn-square bootstrap-touchspin-down"
                                                                            type="button" data-bs-original-title=""
                                                                            title=""><i
                                                                                class="fa fa-minus"></i></button><span
                                                                            class="input-group-text bootstrap-touchspin-prefix"
                                                                            style="display: none;"></span><input
                                                                            class="touchspin text-center form-control"
                                                                            type="text" value="5"
                                                                            style="display: block;" data-bs-original-title=""
                                                                            title=""><span
                                                                            class="input-group-text bootstrap-touchspin-postfix"
                                                                            style="display: none;"></span><button
                                                                            class="btn btn-primary btn-square bootstrap-touchspin-up"
                                                                            type="button" data-bs-original-title=""
                                                                            title=""><i class="fa fa-plus"></i></button>
                                                                    </div>
                                                                </fieldset>
                                                                <div class="addcart-btn">
                                                                    <button class="btn btn-primary" type="button"
                                                                        data-bs-original-title="" title="">Add to
                                                                        Cart</button>
                                                                    <button class="btn btn-primary" type="button"
                                                                        data-bs-original-title="" title="">View
                                                                        Details</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                        aria-label="Close" data-bs-original-title="" title=""></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-details">
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                        </div>
                                        <h4>@{{value.ten_san_pham}}</h4>
                                        <p>Simply dummy text of the printing.</p>
                                        <div class="product-price">
                                            $26.00 </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       </template>
                        {{-- end sản phẩm --}}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        new Vue({
            el : "#app",
            data : {
                list_san_pham : [],
            },
            created() {
                axios
                    .get('http://localhost:3000/sanpham')
                    .then((res) => {
                        this.list_san_pham = res.data;
                        console.log(res.data);
                    })
            },
            method() {
            },
        });
    </script>
@endsection

