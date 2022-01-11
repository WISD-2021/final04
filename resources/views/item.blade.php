@extends('layouts.master')
@section('content')
            <!-- Page Header-->
    <header>
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                    </div>
                </div>
            </div>
        </div>
    </header>

            <!-- Main Content -->
            <section class="py-5">
            <br><br>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4">
                @foreach ($item as $items)
                    <div class="col mb-5">
                        <div class="card h-50">
                            <img class="card-img-top" src="assets/img/{{$items->image}}" alt="..." />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">{{$items->name}}</h5>
                                    ${{$items->money}}
                                    </div>
                                </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <center><button type="submit" class="btn btn-outline-success mt-auto" name="items_id" value="{{$items->id}}">加入餐點</button></center>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    </section>
@endsection
