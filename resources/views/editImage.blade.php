<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Upload Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <h2>Update Image</h2>
  <form action="{{url('edited',$getimg->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="image">Select Image:</label>
      <input type="file" class="form-control-file" id="image" name="image" value="{{$getimg->image}}">
    </div>
    <div class="form-group">
      <label for="imageName">Image Name:</label>
      <input type="text" class="form-control" id="imageName" name="imageName" placeholder="Enter image name" value="{{$getimg->name}}">
    </div>
    <div class="form-group">
      <label for="imageType">Image Type:</label>
      <select class="form-control" id="imageType" name="imageType" value="{{$getimg->type}}">
        <option value="JPEG">JPEG</option>
        <option value="PNG">PNG</option>
        <option value="GIF">GIF</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Upload</button>
  </form>
</div>

</body>
</html>