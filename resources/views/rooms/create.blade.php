@extends('layouts.app')

@section('content')


<form class="" action="{{route('room.store')}}" method="post">
                    @csrf

                        <div class="form-group">
                            <label for="name"> الاسم </label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="img_url"> رابط الصوره </label>
                            <input type="text" name="img_url" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="price">سعر الغرفه</label>
                            <input type="text" name="price" class="form-control">
                        </div>

                      

                    

                        <div class="form-group ">
                            <label for="available">متوفر؟</label>
                                <select class="form-select" aria-label="Default select example"  name="available" id="1">
                                    <option value="1">متوفر</option>
                                    <option value="0">غير متوفر</option>
                                </select>
                        </div>


                      


                        <div class="form-group">
                            <label for="content">المحتوى </label>
                            <textarea name="content" class="form-control"></textarea>
                        </div>

                                            
                        <div class="form-group">
                            <button class="btn btn-outline-danger"> <i class="fas fa-plus-square"></i> اضافة </button>
                        </div>

                    </form>

@endsection