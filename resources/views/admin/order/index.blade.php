@extends('admin.layout')

@section('admin')
<div class="card pt-2 mb-6 mb-xl-9">
													<!--begin::Card header-->
													<div class="card-header border-0">
														<!--begin::Card title-->
														<div class="card-title">
															<h2>Invoices</h2>
														</div>
														<!--end::Card title-->
														<!--begin::Toolbar-->
														<div class="card-toolbar m-0">
															<!--begin::Tab nav-->
															<ul class="nav nav-stretch fs-5 fw-bold nav-line-tabs nav-line-tabs-2x border-transparent" role="tablist">
																<li class="nav-item" role="presentation">
																	<a id="kt_referrals_year_tab" class="nav-link text-active-primary active" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_1">Todays Orders</a>
																</li>
															</ul>
															<!--end::Tab nav-->
														</div>
														<!--end::Toolbar-->
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body pt-0">
														<!--begin::Tab Content-->
														<div id="kt_referred_users_tab_content" class="tab-content">
															<!--begin::Tab panel-->
															<div id="kt_customer_details_invoices_1" class="py-0 tab-pane fade show active" role="tabpanel">
																<!--begin::Table-->
																<table id="kt_customer_details_invoices_table_1" class="table align-middle table-row-dashed fs-6 fw-bolder gy-5">
																	<!--begin::Thead-->
																	<thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bolder">
																		<tr class="text-start text-muted gs-0">
																			<th class="min-w-100px">Order ID</th>
                                                                            <th class="min-w-100px">Customer Name</th>
                                                                            <th class="min-w-100px">Sales Man</th>
																			<th class="min-w-100px">Amount</th>
																			<th class="min-w-125px">Date</th>
                                                                            <th class="min-w-100px text-end pe-7">Status</th>
																			<th class="min-w-100px text-end pe-7">Invoice</th>
																		</tr>
																	</thead>
																	<!--end::Thead-->
																	<!--begin::Tbody-->
																	<tbody class="fs-6 fw-bold text-gray-600">
																		<tr>
																			<td>
																				<a href="#" class="text-gray-600 text-hover-primary">102445788</a>
																			</td>
                                                                            <td>
																				<a href="#" class="text-gray-600 text-hover-primary">CC</a>
																			</td>
                                                                            <td>
																				<a href="#" class="text-gray-600 text-hover-primary">Dini</a>
																			</td>
																			<td class="text-success">$38.00</td>
																			<td>Nov 01, 2020</td>
                                                                            <td class="text-end">
																				<button class="btn btn-sm btn-light-primary btn-active-light-primary">Accept Order</button>
																			</td>
																			<td class="text-end">
																				<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																			</td>
																		</tr>
																	</tbody>
																	<!--end::Tbody-->
																</table>
																<!--end::Table-->
															</div>

														</div>
														<!--end::Tab Content-->
													</div>
													<!--end::Card body-->
												</div>
@endsection