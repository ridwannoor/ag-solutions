@extends('back.layouts.app')

@section('script-head')
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

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
                    <a href="/admin/post" class="m-nav__link">
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
			</div>
			<!--begin::Form-->
			<form class="m-form m-form--fit m-form--label-align-right" method="POST" action="/admin/post/fileUpload" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" name="_method" value="POST" />
                    {{-- <input type="hidden" name="id" value="{{$generals->id}}" /> --}}
                </div>
                <div class="m-portlet__body">
					<div class="form-group m-form__group row">
						<label for="example-text-input" class="col-2 col-form-label">Title</label>
						<div class="col-10">
							<input class="form-control m-input" name="title" type="text" >
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label for="example-search-input" class="col-2 col-form-label">Deskripsi</label>
						<div class="col-10">
                            <textarea id="summernote" name="deskripsi"></textarea> 
						</div>
                    </div>
                    <div class="form-group m-form__group row">
						<label for="example-url-input" class="col-2 col-form-label">Category</label>
						<div class="col-10">
                            <select class="form-control m-input" name="categorypost_id" id="categorypost_id">
                                @foreach ($categoryposts as $item)                            
                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach                            
                            </select>    
                            {{-- <textarea name="" id="" cols="30" rows="10"></textarea> --}}
						</div>
                    </div>
                    <div class="form-group m-form__group row">
						<label for="example-url-input" class="col-2 col-form-label">Tag</label>
						<div class="col-10">
                            <select class="form-control m-input" id="exampleSelect2" name="tagposts[]" multiple>
                                @foreach ($tagposts as $item)                            
                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach                            
                            </select>    
                            {{-- <textarea name="" id="" cols="30" rows="10"></textarea> --}}
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label for="example-url-input" class="col-2 col-form-label">URL</label>
						<div class="col-10">
                            <input class="form-control m-input" name="url" type="url">
                            <span>example : http://xxxx.xx</span>
						</div>
					</div>
                    <div class="form-group m-form__group row">
						<label for="example-search-input" class="col-2 col-form-label">Image</label>
						<div class="col-10">
                            <input class="form-control m-input" name="image" type="file">
                            <span></span>
                            {{-- <span>Size : 500px X 500px </span> <br> --}}
                            <p class="text-danger">{{ $errors->first('image') }}</p>
                            
						</div>
					</div>
				</div>
				<div class="m-portlet__foot m-portlet__foot--fit">
					<div class="m-form__actions">
						<div class="row">
							<div class="col-2">
							</div>
							<div class="col-10">
                                <div class="btn-group">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <a href="/admin/post" class="btn btn-secondary">Back</a>
                                </div>                               
								{{-- <button type="reset" class="btn btn-secondary">Cancel</button> --}}
							</div>
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


@section('script-footer')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
     $('#summernote').summernote({
            height: "300px",
            // callbacks: {
            //     onImageUpload: function(image) {
            //         uploadImage(image[0]);
            //     },
            //     onMediaDelete: function(target) {
            //         deleteImage(target[0].src);
            //     }
            // }
        });
    </script>
   
@endsection    
