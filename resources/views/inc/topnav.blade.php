<a class="btn btn-primary" href="{{route('products.list')}}">Products</a>
<a class="btn btn-primary" href="{{route('products.emptycart')}}">Empty Cart </a>
<a class="btn btn-primary" href="{{route('products.mycart')}}"> Cart </a>
@if(Session::has('user'))
<a class="btn btn-primary" href="{{route('customer.myorders')}}"> My Orders </a>
<a class="btn btn-primary" href="{{route('logout')}}"> Logout </a>
@endif
<!--<a class="btn btn-success" href="">My Profile</a>
<a class="btn btn-danger" href=""> Home </a>-->