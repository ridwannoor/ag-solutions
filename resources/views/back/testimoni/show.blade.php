@extends('back.layouts.app')

@section('m-subheader')
<div class="m-subheader">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title m-subheader__title--separator">{{ $judul }}</h3>
            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                <li class="m-nav__item m-nav__item--home">
                    <a href="/admin/home" class="m-nav__link m-nav__link--icon">
                        <i class="m-nav__link-icon la la-home"></i>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="/admin/testimoni" class="m-nav__link">
                        <span class="m-nav__link-text">{{ $judul }}</span>
                    </a>
                </li>
                {{-- <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="#" class="m-nav__link">
                        <span class="m-nav__link-text">JQVMap</span>
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>
</div>
@endsection

@section('m-content')
<div class="m-content">  
    @include('back.component.alert')

   <div class="row">
       <div class="col-xl-12">
       <!--begin::Portlet-->
		<div class="m-portlet">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
						<h3 class="m-portlet__head-text">
							{{ $judul }}	
						</h3>
					</div>
				</div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                            <a href="/admin/testimoni" class="btn btn-secondary m-btn m-btn--custom m-btn--icon m-btn--air">
                               <i class="fa fa-undo" aria-hidden="true"></i>&nbsp; Kembali
                                
                            </a>
                        </li>
                    </ul>
                </div>
			</div>
			<!--begin::Form-->
			<form class="m-form m-form--fit m-form--label-align-right" >
                {{-- <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" name="_method" value="PUT" />
                    <input type="hidden" name="id" value="{{$services->id}}" />
                </div> --}}
                <div class="m-portlet__body">
                    <div class="col-lg-12">
                        <table class="table m-table ">                        
                            <tbody>
                                <tr>
                                    <td>Title</td>
                                    <td>{{ $testimonis->title }}</td>
                                
                                </tr>
                                <tr>
                                    <td>Testimoni</td>
                                    <td>{{$testimonis->deskripsi }}</td>                              
                                </tr>
                                <tr>
                                    <td>Dibuat Oleh</td>
                                    <td>{{ $testimonis->name . " | " . $testimonis->email }}</td>                              
                                </tr>
                                <tr>
                                    <td>Image</td>
                                    <td><img src="/data_file/{{ $testimonis->image }}" width="30%" alt=""></td>                              
                                </tr>
                            </tbody>
                        </table>
					</div>

				</div>
				<div class="m-portlet__foot m-portlet__foot--fit">
					<div class="m-form__actions">
						<div class="row">
							
						</div>
					</div>
				</div>
			</form>
		
			<!--end::Form-->
		</div>
		<!--end::Portlet-->

   </div>
</div>
</div>
@endsection
