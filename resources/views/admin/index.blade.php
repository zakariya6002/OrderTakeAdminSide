@extends('admin.layout')

@section('admin')
<div class="row gy-5 g-xl-10">
								<!--begin::Col-->
                                <div class="col-xxl-2">
									<!--begin::Mixed Widget 13-->
									<div class="card card-xl-stretch mb-xl-5 h-150px" style="background-color: #cff5cb">
										<!--begin::Body-->
										<div class="card-body d-flex flex-column">
											<!--begin::Wrapper-->
											<div class="d-flex flex-column flex-grow-1">
												<!--begin::Title-->
												<a href="{{route('orders')}}" class="text-dark text-hover-primary fw-bolder fs-3 text-center mt-10 font-weight-bolder">Orders</a>
												<!--end::Title-->
											</div>
											<!--end::Wrapper-->
											
										</div>
										<!--end::Body-->
									</div>
									<!--end::Mixed Widget 13-->
								</div>
							</div>
@endsection