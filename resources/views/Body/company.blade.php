@extends('Products.index')
@section('aboutus')

<section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">{{$name}} -- {{$id}}</h2>
                    </div>
                </div>
                <img class="img-fluid" src="{{asset('eCommerceFront/assets/img/ipad.png')}}" alt="..." />
            </div>
        </section>
        @stop