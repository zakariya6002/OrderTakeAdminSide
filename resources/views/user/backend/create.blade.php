@extends('user.layout')

@section('admin')

<!--begin::Modal dialog-->
<div class="modal-dialog modal-dialog-centered mw-650px ">
    <!--begin::Modal content-->
    <div class="modal-content">
        <!--begin::Form-->
        <form class="form" action="{{route('placeorder.store')}}" Method="POST" enctype="multipart/form">
            @csrf
            <!--begin::Modal header-->
            <div class="modal-header" id="kt_modal_add_customer_header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">Place Order</h2>
                <!--end::Modal title-->
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body py-10 px-lg-17">
                <!--begin::Scroll-->

                <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
                    <!--begin::Input group-->
                    <div class="fv-row mb-7">
                         <select class="form-control form-control-solid" name="customer_name">
                                        @foreach($cus as $c)
                                        <option value="{{$c->id}}">{{ $c->name}}</option>
                                        @endforeach
                        </select>
                    </div>
                    @foreach($cat as $cat)
                    <div class="fv-row mb-5 mt-5">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold">{{$cat->name}}</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="number" class="form-control form-control-solid w-150px h-25px d-inline-block" placeholder="" name="quantity" value="" />
                        <!--end::Input-->
                    </div>
                    @endforeach
                    <div class="fv-row mb-5 mt-5">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold">Schedule Date of Delivery</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="date" class="form-control form-control-solid w-150px h-25px d-inline-block" placeholder="" name="requireddate" value="" />
                        <!--end::Input-->
                    </div>

                </div>
                <!--end::Scroll-->
            </div>
            <!--end::Modal body-->
            <!--begin::Modal footer-->
            <div class="modal-footer flex-center">
                <!--begin::Button-->
                <button type="reset" id="kt_modal_add_customer_cancel" class="btn btn-light me-3">Discard</button>
                <!--end::Button-->
                <!--begin::Button-->
                <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                    <span class="indicator-label">Submit</span>
                    <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
                <!--end::Button-->
            </div>
            <!--end::Modal footer-->
        </form>
        <!--end::Form-->
    </div>
</div>
</div>
@endsection