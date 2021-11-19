<div class="product">
    <div class="thumb"><a class="image img-cover img-shine img-product" href="{{$val->category->slug}}/{{$val->slug}}.html" title="{{$val->name}}"><img src="data/product/thumbnail/{{$val->img}}" alt="{{$val->name}}" /></a><span class='price'><strong>Giá:</strong><i> @if($val->price) {{$val->price}} @else Liên hệ @endif </i></span></div>
    <div class="infor">
        <h3 class="title"><a href="{{$val->category->slug}}/{{$val->slug}}.html" title="{{$val->name}}">{{$val->name}}</a></h3>
        <span>{{$val->address}}, {{$val->district->name}}, {{$val->district->city->name}}</span>
    </div>
</div>