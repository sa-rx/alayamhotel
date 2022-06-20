@extends('layouts.app')

@section('content')




<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Powerful Digital Solutions With Gp<span>.</span></h1>
          <h2>We are team of talented digital marketers</h2>
        </div>
      </div>
      @forelse($rooms as $room)
      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3><a href="">{{$room->name}}</a></h3>
          </div>
        </div>
      </div>  
      @empty
        <p>لا توجد عروض</p>
      @endforelse
     


    </div>
</section>
<!-- End Hero -->


<a href="{{route('room.create')}}" class="btn btn-dange">create</a>

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