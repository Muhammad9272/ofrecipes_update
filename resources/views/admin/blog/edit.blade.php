@extends('admin.layouts.app')

@section('pagelevel_styles')
<link href="{{ asset('assets/admin_assets/img_upload/imgUpload.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('page_content')
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->

    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                <i class="fa fa-edit"></i>                      
                </a>
                
                <span class="caption-subject font-red-sunglo bold uppercase">Edit Blog</span>

               

                                                <div class="btn-group">
                                                    <a id="sample_editable_1_new" class="btn sbold green" href="{{route('admin-article-index')}}"> <i class="fa fa-arrow-left"></i>&nbsp;Back
                                                        
                                                    </a>
                                                </div>
                                         
                                    
               
            </div>

        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <div class="gocover" style="background: url({{asset('assets/images/'.$gs->admin_loader)}}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
            <form id="geniusform" action="{{route('admin-article-update',$data->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            {{csrf_field()}}
                <div class="side-btn-save">
                   <div>
                    <a id="rc-pr-link" href="{{route('front.blog.detail',$data->slug)}}" class="btn btn-lg green-haze btn-outline">Preview</a>
                       <button type="submit" class="btn btn-lg blue addProductSubmit-btn">
                        <i class="fa fa-check"></i> Update </button>
                   </div>
               </div>
               @include('includes.admin.form-both')
            
                <div class="form-body">

                    <div class="form-group">
                        <label class="col-md-3 control-label" >Category</label>
                        <div class="col-md-8 d-inline-flex">

                            <select  name="category_id" required="" class="form-control">
                              <option value="">{{ __('Select Category') }}</option>
                                @foreach($cats as $cat)
                                  <option value="{{ $cat->id }}" {{ $cat->id==$data->category_id?"selected":'' }}>{{ $cat->name }}</option>
                                @endforeach
                            </select>                             
       
                        </div>                        
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" >Title</label>
                        <div class="col-md-8 d-inline-flex">
                            <input type="text" class="form-control"  name="title" required="" value="{{$data->title}}">  
       
                        </div>                        
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" >Slug</label>
                        <div class="col-md-8 d-inline-flex">
                            <input type="text" class="form-control"  name="slug" required="" value="{{$data->slug}}">  
       
                        </div>                        
                    </div>

                    <div class="form-group">
                                <label class="col-md-3 control-label">Image *</label>
                                <div class="col-md-7">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail">
                                            <img id="profile-photo-preview"  src="{{$data->photo?$data->photo:'http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image'}}" alt="" /> </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                        <div>
                                            <span class="btn default btn-file" onclick="filemanager.selectFile('profile-photo')">
                                                <span class="fileinput-new" > Select image </span>
                                                <span class="fileinput-exists"> Change </span>
                                                <input id="profile-photo" type="text" name="photo" > 
                                            </span>
                                            <span>(Preferred size 620*350)</span>
                                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                        </div>
                                    </div>                                   
                                </div>
                            </div>  
                            <div class="row"> 

                                <label class="col-md-3 control-label" >Post Schedule</label>
                                <div class="col-md-4 d-inline-flex">
                                    <input class="input-group form-control form-control-inline" type="datetime-local" id="post-schedule" name="post_schedule" value="{{ Carbon\Carbon::parse($data->post_schedule)->format('Y-m-d\TH:i:s') }}" > 
               
                                </div>
                            </div>


                            <div class="row mb-10"> 

                                <label class="col-md-3 control-label" >Allow Publish Date</label>
                                <div class="col-md-4 d-inline-flex mt-5">
                                     <label class="mt-checkbox">
                                        <input type="checkbox" id="publish-check" value="1" class="form-control" {{$data->publish_check==1?'checked':''}} name="publish_check"> <span></span>
                                                                                                
                                    </label>
                                                   
                                </div>
                            </div>

                           <div class="{{$data->publish_check==1?'':'custom-publish-date'}}"  id="custom-publish-date">
                                <div class="row"> 

                                    <label class="col-md-3 control-label fw-200" >Publish Date</label>
                                    <div class="col-md-4 d-inline-flex">
                                        <input class="input-group form-control form-control-inline" type="date" value="{{$data->publish_date}}" name="publish_date" id="pb-date" > 
                   
                                    </div>
                                </div>   
                           </div>

                            <div class="row mb-10"> 

                                <label class="col-md-3 control-label" >Allow Updated Date</label>
                                <div class="col-md-4 d-inline-flex mt-5">
                                     <label class="mt-checkbox">
                                        <input type="checkbox" id="updated-check" value="1" class="form-control" {{$data->updated_check==1?'checked':''}} name="updated_check"> <span></span>
                                                                                                
                                    </label>
                                                   
                                </div>
                            </div>


                           <div class="{{$data->updated_check==1?'':'custom-updated-date'}}" id="custom-updated-date">
                                <div class="row"> 

                                    <label class="col-md-3 control-label fw-200" >Updated Date</label>
                                    <div class="col-md-4 d-inline-flex">
                                        <input class="input-group form-control form-control-inline" type="date" value="{{$data->updated_date}}" name="updated_date"  > 
                   
                                    </div>
                                </div>
                           </div>



                    <div class="form-group">
                        <label class="col-md-3 control-label" >Small Detail</label>
                        <div class="col-md-8 d-inline-flex">
                            <textarea style="height: 70px;" type="text" class="form-control"  name="small_desc"  required="" >
                                {{$data->small_desc}}
                            </textarea>  
       
                        </div>                        
                    </div>

                    <div class="row">
                        <div class="col-md-12">

                        <div class="form-group last">
                            <label class="control-label col-md-3">Page Detail</label>
                            <div class="col-md-8">
                                  <textarea name="desc" class="nic-edit" style="width: 100%;">
                                    {{$data->desc}}
                                  </textarea>
                            </div>
                        </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-9">
                            <div class="mt-checkbox-inline">
                                <label class="mt-checkbox mt-checkbox-outline">
                                    <input type="checkbox" class="seocheck" {{$data->seo_check==1?'checked':''}}  value="1" name="seo_check" >{{ __('Allow Page SEO') }}
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="{{$data->seo_check==1?'':'seofields'}}" id="seofield">
                        <div class="form-group">
                            <label class="col-md-3 control-label" >Meta Title</label>
                            <div class="col-md-8 d-inline-flex">
                                <input  type="text" class="form-control"  name="meta_title"  value="{{$data->meta_title}}" >  
           
                            </div>                        
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" >Meta tags</label>
                            <div class="col-md-8 d-inline-flex">
                                <input  type="text" class="form-control"  name="meta_tag" value="{{$data->meta_tag}}" data-role="tagsinput" >  
           
                            </div>                        
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" >Meta description</label>
                            <div class="col-md-8 d-inline-flex">
                                <input  type="text" class="form-control"  name="meta_desc" value="{{$data->meta_desc}}" >         
                            </div>                        
                        </div>
                    </div>




                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-4">
                            <button type="submit" class="btn green addProductSubmit-btn">update</button>
                            <button type="button" class="btn default">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
            <!-- END FORM-->
        </div>
    </div>

        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->

@endsection
@section('pagelevel_scripts')
<script src="{{ asset('assets/admin_assets/img_upload/imgUpload.js') }}" type="text/javascript"></script>
<script>
    $(document).ready(function()
    {
        $("#publish-check").on( "change", function() {
            if(this.checked){
             $('#custom-publish-date').removeClass('custom-publish-date');
             $('.pb-date').attr('required',true);
            }
            else{
              $('#custom-publish-date').addClass('custom-publish-date');
              $('.pb-date').attr('required',false);
                            
            }

          });
          $("#updated-check").on( "change", function() {
            if(this.checked){
             $('#custom-updated-date').removeClass('custom-updated-date');
             $('.up-date').attr('required',true);
             
            }
            else{
              $('#custom-updated-date').addClass('custom-updated-date');
                 $('.up-date').attr('required',false);           
            }

          });

    })
</script>
@endsection