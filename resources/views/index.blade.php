@extends('app')
@section('content')
<x-alart type="success" message="payment done !"/>
    <section>
        <div class="img-one">
            <img src="{{asset('front/images/e12.webp')}}" alt="">
        </div>
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
    <section>
        <div>
            <div class="all-flex">
                <div><img class="img-flex" src="{{asset('front/images/ezz12.webp')}}" alt=""></div>

                <div class="para-flex">
                    <h2>lorem luymmd</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam impedit voluptatum facilis
                        molestiae
                        et unde placeat maiores repellendus consequuntur voluptates?</p>
                </div>
            </div>
            <div class="all-flex">
                <div class="para-flex">
                    <h2>lorem luymmd</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam impedit voluptatum facilis
                        molestiae
                        et unde placeat maiores repellendus consequuntur voluptates?</p>
                </div>
                <div><img class="img-flex" src="{{asset('front/images/e1.jpg')}}" alt=""></div>


            </div>
            <div class="all-flex">
                <div><img class="img-flex" src="{{asset('front/images/ezz13.jpg')}}" alt=""></div>

                <div class="para-flex">
                    <h2>lorem luymmd</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam impedit voluptatum facilis
                        molestiae
                        et unde placeat maiores repellendus consequuntur voluptates?</p>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('title', 'home page')
