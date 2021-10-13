@extends('master.admin')
@section('main')

<!--begin::Card-->
<div class="card ">



    <!--begin::Header-->
    <div class="card-header align-items-center flex-wrap justify-content-between py-5 h-auto">

        <!--begin::Left-->
        <div class="d-flex align-items-center my-2">
            <div class="font-weight-bold font-size-h3 mr-3">Tiêu đề: {{$contact->subject}}</div>
        </div>
        <!--end::Left-->

    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body p-0">
        <!--begin::Header-->
        <div class="d-flex align-items-center justify-content-between flex-wrap card-spacer-x py-5">
            <!--begin::Title-->
            <div class="d-flex align-items-center mr-2 py-2">
                <div class="font-weight-bold font-size-h3 mr-3">Người liên hệ: {{$contact->name}}</div>
                <!-- <span class="label label-light-primary font-weight-bold label-inline mr-2">inbox</span>
                            <span class="label label-light-danger font-weight-bold label-inline">important</span> -->
            </div>


            <!--end::Title-->
            <!--begin::Toolbar-->
            <div class="d-flex py-2">
                <span class="btn btn-default btn-sm btn-icon mr-2">
                    <i class="flaticon2-sort"></i>
                </span>
                <span class="btn btn-default btn-sm btn-icon" data-dismiss="modal">
                    <i class="flaticon2-fax"></i>
                </span>
            </div>

            <!--end::Toolbar-->
        </div>
        <!--end::Header-->
        <!--begin::Messages-->
        <div class="mb-3">
            <div class="cursor-pointer toggle-on" data-inbox="message">
                <!--begin::Message Heading-->
                <div
                    class="d-flex card-spacer-x py-6 flex-column flex-md-row flex-lg-column flex-xxl-row justify-content-between">
                    <div class="d-flex align-items-center">
                        <span class="symbol symbol-50 mr-4">
                            <span class="symbol-label"
                                style="background-image: url('assets/media/users/100_13.jpg')"></span>
                        </span>
                        <div class="d-flex flex-column flex-grow-1 flex-wrap mr-2">
                            <div class="d-flex">
                                <a href="#"
                                    class="font-size-lg font-weight-bolder text-dark-75 text-hover-primary mr-2">{{$contact->email}}</a>
                                <!-- <div class="font-weight-bold text-muted">
                                                <span class="label label-success label-dot mr-2"></span>1 Day ago
                                            </div> -->
                            </div>
                            <!-- <div class="d-flex flex-column">
                                            <div class="toggle-off-item">
                                                <span class="font-weight-bold text-muted cursor-pointer"
                                                    data-toggle="dropdown">to me
                                                    <i class="flaticon2-down icon-xs ml-1 text-dark-50"></i></span>
                                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left p-5">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-muted min-w-75px py-2">From</td>
                                                                <td>Mark Andre</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted py-2">Date:</td>
                                                                <td>Jul 30, 2019, 11:27 PM</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted py-2">Subject:</td>
                                                                <td>Trip Reminder. Thank you for flying with us!</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted py-2">Reply to:</td>
                                                                <td>mark.andre@gmail.com</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="text-muted font-weight-bold toggle-on-item" data-inbox="toggle">
                                                With resrpect, i must disagree with Mr.Zinsser. We all know the most
                                                part of important part....</div>
                                        </div> -->
                        </div>
                    </div>
                    <div
                        class="d-flex my-2 my-xxl-0 align-items-md-center align-items-lg-start align-items-xxl-center flex-column flex-md-row flex-lg-column flex-xxl-row">
                        <div class="font-weight-bold text-muted mx-2">{{date('H:i', strtotime($contact->created_at))}},
                            Ngày {{date('d-m-y', strtotime($contact->created_at))}}</div>
                        <div class="d-flex align-items-center flex-wrap flex-xxl-nowrap" data-inbox="toolbar">
                            <span class="btn btn-clean btn-sm btn-icon mr-2" data-toggle="tooltip" data-placement="top"
                                title="" data-original-title="Star">
                                <i class="flaticon-star icon-1x"></i>
                            </span>
                            <span class="btn btn-clean btn-sm btn-icon mr-2" data-toggle="tooltip" data-placement="top"
                                title="" data-original-title="Mark as important">
                                <i class="flaticon-add-label-button icon-1x"></i>
                            </span>
                            <span class="btn btn-clean btn-sm btn-icon mr-2" data-toggle="tooltip" data-placement="top"
                                title="" data-original-title="Reply">
                                <i class="flaticon2-reply-1 icon-1x"></i>
                            </span>
                            <span class="btn btn-clean btn-sm btn-icon" data-toggle="tooltip" data-placement="top"
                                title="" data-original-title="Settings">
                                <i class="flaticon-more icon-1x"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <!--end::Message Heading-->
                <div class="card-spacer-x py-5">
                    {{$contact->message}}
                </div>
            </div>


        </div>
        <!--end::Messages-->

    </div>
    <!--end::Body-->
    <div class="d-flex align-items-center justify-content-start text-right pl-5 py-5 my-2 show">
        <a href="{{route('contact.index')}}" class="btn btn-light-success font-weight-bold mr-2"><i class="flaticon2-reply-1 icon-1x"></i>Quay lại</a>
    </div>
</div>

<!--end::Card-->

@stop()