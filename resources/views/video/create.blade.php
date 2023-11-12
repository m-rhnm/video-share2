@extends('layout')

@section('content')
            <div id="upload">
                <x-validation-errors></x-validation-errors>
                <div class="row">
                <!-- upload -->
                    <div class="col-md-8">
						<h1 class="page-title"><span>آپلود</span> فیلم</h1>
						<form action="{{ route('videos.store') }}" method="post">
                            @csrf
                        	<div class="row">
                            <div class="col-md-6">
                                	<label>عنوان</label>
                                    <input type="text" name='name' class="form-control" value="{{ old('name') }}" placeholder="عنوان">
                                </div>
                            	<div class="col-md-6">
                                	<label>مدت زمان </label>
                                    <input type="text" name='length' class="form-control" value="{{ old('length') }}" placeholder="عنوان">
                                </div>
                            	<div class="col-md-6">
                                	<label>دسته بندی</label>
                                    <input type="text" name='category' class="form-control"value="{{ old('category') }}" placeholder="دسته بندی">
                                </div>
                            	<div class="col-md-6">
                                	<label>برچسب ها</label>
                                    <input type="text" name='slug' class="form-control" value="{{ old('slug') }}" placeholder="برچسب ها">
                                </div>
                                <div class="col-md-6">
                                	<label>ادرس فیلم</label>
                                    <input type="text" name='url' class="form-control" value="{{ old('url') }}" placeholder="ادرس فیلم">
                                </div>
                            	<!-- <div class="col-md-6">
                                	<label>آپلود فیلم</label>
                                    <input id="upload_file" name="url" type="file" class="file">
                                </div> -->
                            	<div class="col-md-12">
                                	<label>توضیحات</label>
                                    <textarea class="form-control" name="description" rows="4"  placeholder="توضیح">{{ old('description') }}</textarea>
                                </div>
                                <div class="col-md-6">
                                	<label>ادرس عکس</label>
                                    <input type="text" name='thumbnail' class="form-control" value="{{ old('thumbnail') }}"placeholder="ادرس عکس">
                                </div>
                            	<!-- <div class="col-md-6">
                                	<label>تصویر</label>
                                    <input id="featured_image" name="thumbnail" type="file" class="file">
                                </div> -->
                            	<div class="col-md-6">
                                    <button type="submit" id="contact_submit" class="btn btn-dm">ذخیره</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- // col-md-8 -->

                    <div class="col-md-4">
                    	<a href="#"><img src="{{ asset('img/upload-adv.png') }}" alt=""></a>
                    </div><!-- // col-md-8 -->
                    <!-- // upload -->
                </div><!-- // row -->
            </div><!-- // upload -->
		</div>
@endsection
