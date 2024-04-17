<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Card</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div><a href="/"><button>ADD IMAGE</button></a></div>
    <div id="box">


<div class="container mt-5">
  <div class="row">
  @foreach($image as $img)
    <div class="col-md-4">
      <div class="card">
        <img src="/storage/{{$img->image}}" class="card-img-top" alt="Image">
        <div class="card-body">
          <h5 class="card-title">Image Name : {{$img->name}}</h5>
          <p class="card-text">Image Type : {{$img->type}}</p>
          <a href="{{url('delete',$img->id)}}"><button>delete</button></a><a href="{{url('update',$img->id)}}"><button>update</button></a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

</div>

</body>
</html>
