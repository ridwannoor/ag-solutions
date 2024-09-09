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
                    <a href="/admin/product" class="m-nav__link">
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
			<form class="m-form m-form--fit m-form--label-align-right" method="POST" action="/admin/product/update" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" name="_method" value="PUT" />
                    <input type="hidden" name="id" value="{{$products->id}}" />
                </div>
                <div class="m-portlet__body">
					<div class="form-group m-form__group row">
						<label for="example-text-input" class="col-2 col-form-label">Title</label>
						<div class="col-10">
							<input class="form-control m-input" name="title" type="text" value="{{ $products->title }}">
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label for="example-search-input" class="col-2 col-form-label">Deskripsi</label>
						<div class="col-10">
                            <textarea id="summernote" name="deskripsi">{!!$products->deskripsi !!}</textarea> 
                            {{-- <textarea class="form-control m-input" name="deskripsi" id="deskripsi" cols="30" rows="10">{{ $products->deskripsi }}</textarea> --}}
							{{-- <input class="form-control m-input" name="deskripsi" type="text" value="{{ $products->deskripsi }}" > --}}
						</div>
                    </div>
                    <div class="form-group m-form__group row">
						<label for="example-url-input" class="col-2 col-form-label">Category</label>
						<div class="col-10">
                            <select class="form-control m-input" name="categoryproduct_id" id="categoryproduct">
                                <option value="{{ $products->categoryproduct_id }}">{{ $products->categoryproduct->title }}</option>
                                @foreach ($categoryproducts as $item)    
                                @if ($products->categoryproduct_id != $item->id)
                                <option value="{{ $item->id }}">{{ $item->title }}</option>  
                                @endif      
                                @endforeach                            
                            </select>    
                            {{-- <textarea name="" id="" cols="30" rows="10"></textarea> --}}
						</div>
					</div>
                    <div class="form-group m-form__group row">
						<label for="example-text-input" class="col-2 col-form-label">Sub Category</label>
						<div class="col-10">
                            <select class="form-control m-input" name="subcategory_id" id="subcategory">
                                {{-- <option value="{{ $products->subcategory_id }}">{{ $products->subcategory->name }}</option>       
                                @foreach ($subcategorys as $item)
                                    @if ($products->subcategory_id != $item->id)
                                        <option value=""></option>          
                                    @endif                                    
                                @endforeach      --}}
                                <option value="{{ $products->subcategory_id }}">{{ $products->subcategory->name }}</option>
                                {{-- <option value=""></option>           --}}
                            </select>    
                            {{-- <textarea name="" id="" cols="30" rows="10"></textarea> --}}
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label for="example-url-input" class="col-2 col-form-label">Harga</label>
						<div class="col-10">
                            <input class="form-control m-input" name="harga" type="text" value="{{ $products->harga }}">
                            {{-- <span>example : http://xxxx.xx</span> --}}
						</div>
					</div>
                    <div class="form-group m-form__group row">
						<label for="example-search-input" class="col-2 col-form-label">Image</label>
						<div class="col-10">
                            <input class="form-control m-input" name="image[]" type="file" multiple>
                            <span></span>
                            <br>
                            <span>
                                @foreach ($products->productdetails as $item)
                                <div class="alert alert-dismissible fade show   m-alert m-alert--outline m-alert--air" role="alert">
                                <a href="/admin/product/destroyfile/{{$item->id}}" onclick="return confirm('Are you sure? Delete ')" class="close" aria-label="Close"> </a>
                                <strong>{{$item->image}}</strong>     
                                {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    </button>
                                      <strong>{{$item->filename}}</strong>				  	 --}}
                                </div>
                                @endforeach    
                            </span> <br>
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
                                    <a href="/admin/product" class="btn btn-secondary">Back</a>
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
{{-- <script src="{{ asset('back/assets/demo/default/custom/crud/forms/widgets/bootstrap-select.js') }}" type="text/javascript"></script> --}}
<script>
     $(document).ready(function () {
        $('#categoryproduct').on('change', function (e) {
            console.log(e);
            var categoryproduct_id = e.target.value;
            $.get('/admin/product/subcat?categoryproduct_id=' + categoryproduct_id, function (data) {
                console.log(data);
                $('#subcategory').empty();
                $.each(data, function (index, subcatObj) {
                    $('#subcategory').append('<option value="' + subcatObj.id + '">' +
                        subcatObj.name + '</option>');
                })
            });
        });
    });
</script>
@endsection