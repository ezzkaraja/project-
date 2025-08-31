@extends('app')
@section('content')
    </section>
    <section>
        <div class="sec-two">
            <h2 class="h2-one">About Us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ex vitae quae voluptatibus asperiores ea,
                suscipit corporis? Quibusdam id dicta, temporibus consequuntur deleniti voluptatem vel tenetur ex vitae
                ipsam architecto.</p>
        </div>
    </section>
    <section>
        <div class="bak">
            <div class="wh">
                <div class="box">
                    <div class="images-box">
                        <img src="{{asset('front/images/e3.jpg')}}" alt="">
                    </div>
                    <h2>Lorem, ipsum</h2>
                </div>
                <div class="box">
                    <div class="images-box">
                        <img src="{{asset('front/images/e2.jpg')}}" alt="">
                    </div>
                    <h2>Lorem, ipsum</h2>
                </div>
                <div class="box">
                    <div class="images-box">
                        <img src="{{asset('front/images/ezz11.jpg')}}" alt="">
                    </div>
                    <h2>Lorem, ipsum</h2>
                </div>
            </div>
        </div>
    </section>
    <x-card>
        <x-slot:titel>
            <h2>About Us card</h2>
        </x-slot:titel>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ex vitae quae voluptatibus asperiores ea,
            suscipit corporis? Quibusdam id dicta, temporibus consequuntur deleniti voluptatem vel tenetur ex vitae
            ipsam architecto.</p>
    </x-card>
  @endsection
@section('title', 'about')
