@extends('web.layouts.base') 
@section('title', '#404 '.trans('t.error_404')) 
 
@section('content')
<section class="section pt-4 sps sps--abv sps-pt-80">
    <div class="container">
        <div class="post-full content mt-sm-1 mt-md-3">
            <div class="row">
                <div class="col-12 mb-3 text-center mt-xl-3">
                    <h2 class="text-bold section-title">{{ trans('t.oops_error') }}</h2>
                    <hr class="divider w-75">
                </div>
                <div class="col-12 mt-3 mb-4 mb-xl-5">
                    <div class="content-body error-template text-center">
                        <h1>#404</h1>
                        <h2 class="lead">{{ trans('t.error_404') }}</h2>
                        <hr class="hr-1 w-25">
                        <a href="{{ route('web.home') }}" class="btn btn-primary">{{ trans('t.to_home') }}</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
 
@section('scripts')
<script>

</script>
@endsection