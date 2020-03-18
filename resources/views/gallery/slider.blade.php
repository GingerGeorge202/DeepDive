@extends('layouts.admin')
@section('content')

    <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="file" name="image">
            <input type="text" name="title">
        </div>
        <input type="submit" value="Add image" class="btn btn-outline-success">
    </form>


{{--    <form action="{{ url('/slider',$images->id) }}" method="post">--}}
{{--        @csrf--}}
{{--        <div class="form-group">--}}
{{--            <input type="hidden" name="id" value="3"> <br>--}}
{{--            <input type="hidden" name="pathImage" value="ZwfZMPakoecbOAaBkmcJ6keLINvy4P2mpNguTmUA.jpeg" class="mt-2">--}}
{{--        </div>--}}
{{--        x--}}
{{--        <input type="submit" value="Delete" class="btn btn-outline-danger">--}}
{{--    </form>--}}

    <div class="row">
        <div class='list-group gallery'>


            @if($images->count())
                @foreach($images as $image)
                    <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                        <a class="thumbnail fancybox" rel="ligthbox" href="/storage/{{ $image->image }}">
                            <img class="img-responsive" alt="" src="/storage/{{ $image->image }}" />
                            <div class='text-center'>
                                <small class='text-muted'>{{ $image->title }}</small>
                            </div> <!-- text-center / end -->
                        </a>
                        <form action="{{ url('/image-gallery',$image->id) }}" method="POST">
                            <input type="hidden" name="_method" value="delete">
                            {!! csrf_field() !!}
                            <button type="submit" class="close-icon btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>
                        </form>
                    </div> <!-- col-6 / end -->
                @endforeach
            @endif


        </div> <!-- list-group / end -->
    </div>

@endsection
