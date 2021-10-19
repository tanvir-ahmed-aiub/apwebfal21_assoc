<form enctype="multipart/form-data" method="post" action="{{route('upload')}}">
    {{@csrf_field()}}
    <input type="file" name="image">
    <input type="submit" value="upload">
    @error('image')
    <span>{{$message}}</span>
    @enderror

</form>

<img width="300px" height="350px" src="{{asset('storage/uploads/1634624822_abhijit_bhowmik.jpg')}}">