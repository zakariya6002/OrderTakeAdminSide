@extends('user.layout')

@section('admin')
<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Card-->
                <div class="text-center">
                    <!--begin::Card body-->
                    <div class="card-body p-0">
                        <!--begin::Wrapper-->
                        <a href="#">
                            <img alt="Logo" src="{{url('backend/media/logos/logo.png')}}" class="h-100px w-full logo" />
                        </a>
                        <div class="card-px  py-20 my-10">

                            <!--begin::Title-->
                            <h2 class="fs-2x fw-bolder mb-10">Welcome!</h2>
                            <!--end::Title-->
                            <!--begin::Description-->
                            <p class="text-gray-400 fs-4 fw-bold mb-10">Make Your Order Here!.
                                <br />Schedule Your Order 
                            </p>
                            <!--end::Description-->
                            <!--begin::Action-->
                            <a href="{{route('placeorder.create')}}" class="btn btn-primary">Place Order</a>
                            <a href="{{route('dashboard')}}" class="btn btn-primary">Dashboard</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Illustration-->
                        <div class="text-center px-4">
                            <img class="mw-100 mh-300px" alt="" src="assets/media/illustrations/sketchy-1/2.png" />
                        </div>
                        <!--end::Illustration-->
                    </div>
                    <!--end::Card body-->
                </div>
            </div>
            <!--end::Container-->
        </div>
    </div>
</div>
@endsection