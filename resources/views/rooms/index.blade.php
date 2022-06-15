



   @forelse($rooms as $room)
<div class="card" style="width: 18rem;">
  <img src="{{$room->img_url}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$room->name}}</h5>
    <p class="card-text">{{$room->content}}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>


@empty
                <p>لا توجد عروض</p>
            @endforelse