@extends('admin.admin')

@section('admin')
<div class="content-body" style="min-height: 788px;">
			<div class="container-fluid">
			<div class="row">

                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">create Information </h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">

        <form method="post" action="{{ route('information.store') }}" enctype="multipart/form-data">
        	@csrf
            
        
         <div class="form-group">
            <label class="info-title">About </label>
         <textarea class="form-control" name='about' rows="4" id="comment"></textarea>
       
          @error('about')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
           <div class="form-group">
            <label class="info-title">Refund </label>
         <textarea class="form-control" name='refund' rows="4" id="comment"></textarea>
       
          @error('refund')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
               <div class="form-group">
            <label class="info-title">terms</label>
         <textarea class="form-control" name='terms' rows="4" id="comment"></textarea>
       
          @error('terms')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
               <div class="form-group">
            <label class="info-title">Privacy</label>
         <textarea class="form-control" name='privacy' rows="4" id="comment"></textarea>
       
          @error('privacy')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            </div>
     


   




           <input type="submit" class="btn btn-secondary" value="Submit">
            
        </form>
    </div>
                            </div>
                        </div>
					</div>


					  




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endsection