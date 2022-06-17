@extends('layouts.app')

@section('content')




   @forelse($rooms as $room)
<div class="card" style="width: 18rem;">
  <img src="{{$room->img_url}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$room->name}}</h5>
    <p class="card-text">{{$room->content}}</p>
    <a href="{{route('room.show',$room)}}" class="btn btn-primary">show</a>
    <a href="{{route('room.edit',$room)}}" class="btn btn-dange">edir</a>

    <form method="post" action="{{route('room.destroy',$room)}}">
        @method('delete')
        @csrf
        <button onclick="return confirm('هل انت متأكد؟')" class="btn btn-outline-danger" >gbgb <i class="fas fa-trash-alt"></i></button>
    </form>

  </div>
</div>


@empty
     <p>لا توجد عروض</p>
          @endforelse
          @endsection