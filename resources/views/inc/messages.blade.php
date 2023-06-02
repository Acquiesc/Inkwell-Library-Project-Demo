@if ($message = Session::get('success'))
<div class="container justify-content-evenly alert alert-success alert-dismissible fade show mt-5 fixed-top" role="alert">
        <div class="row">
                <div class="col-10 text-center">
                        <strong>{{ $message }}</strong>
                </div>
                <div class="col-2 justify-content-center text-center">
                        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close" style="margin-left: auto;">
                                <span aria-hidden="true">&times;</span>        
                        </button>	
                </div>
        </div>
</div>
@endif


@if ($message = Session::get('error'))
<div class="container justify-content-evenly alert alert-danger alert-dismissible fade show mt-5 fixed-top" role="alert">
        <div class="row">
                <div class="col-10 text-center">
                        <strong>{{ $message }}</strong>
                </div>
                <div class="col-2 justify-content-center text-center">
                        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close" style="margin-left: auto;">
                                <span aria-hidden="true">&times;</span>        
                        </button>	
                </div>
        </div>
</div>
@endif


@if ($message = Session::get('warning'))
<div class="container justify-content-evenly alert alert-warning alert-dismissible fade show mt-5 fixed-top" role="alert">
        <div class="row">
                <div class="col-10 text-center">
                        <strong>{{ $message }}</strong>
                </div>
                <div class="col-2 justify-content-center text-center">
                        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close" style="margin-left: auto;">
                                <span aria-hidden="true">&times;</span>        
                        </button>	
                </div>
        </div>
</div>
@endif


@if ($message = Session::get('info'))
<div class="container justify-content-evenly alert alert-info alert-dismissible fade show mt-5 fixed-top" role="alert">
        <div class="row">
                <div class="col-10 text-center">
                        <strong>{{ $message }}</strong>
                </div>
                <div class="col-2 justify-content-center text-center">
                        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close" style="margin-left: auto;">
                                <span aria-hidden="true">&times;</span>        
                        </button>	
                </div>
        </div>
</div>
@endif


@if ($errors->any())
<div class="container justify-content-evenly alert alert-danger alert-dismissible fade show mt-5 fixed-top" role="alert">
        <div class="row">
                <div class="col-10 text-center">
                        <ul>
                        @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                </div>
                <div class="col-2 justify-content-center text-center">
                        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close" style="margin-left: auto;">
                                <span aria-hidden="true">&times;</span>        
                        </button>	
                </div>
        </div>
</div>
@endif