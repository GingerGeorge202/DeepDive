@extends('layouts.admin')
@section('content')

<div class="container">

    <h1 class="h1-gallery">Image Gallery</h1>
    <form action="{{ route('image-gallery.store') }}" class="form-image-upload" method="POST" enctype="multipart/form-data">


        {!! csrf_field() !!}


        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif


        <div class="row">
            <div class="col-md-5">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="col-md-5">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="col-md-2">
                <br/>
                <button type="submit" class="btn btn-success">Завантажити</button>
            </div>
        </div>


    </form>


    <div class="row">
        <div class='list-group gallery'>


            @if($images->count())
                @foreach($images as $image)
                    <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                        <a class="thumbnail fancybox" rel="ligthbox" href="{{ $image->pathImage }}">
                            <img class="img-responsive" alt="" src="{{ $image->pathImage }}" />
                            <div class='text-center'>
                                <small class='text-muted'>{{ $image->title }}</small>
                            </div> <!-- text-center / end -->
                        </a>
                        <form action="{{ route('image-gallery.destroy', $image->id)  }}" method="POST" onsubmit=" if (confirm('Точно видалити'))  { return true} else { return false}">
                            <input type="hidden" name="_method" value="delete">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="close-icon btn btn-danger f-size"><i class="glyphicon glyphicon-remove"></i></button>
                        </form>
                    </div> <!-- col-6 / end -->
                @endforeach
            @endif


        </div> <!-- list-group / end -->
    </div> <!-- row / end -->
</div> <!-- container / end -->
<script type="text/javascript">
    $(document).ready(function(){
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
</script>

@endsection
