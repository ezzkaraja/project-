@extends('app' )
@section('content')
<x-alart type="info" message="welcome our servese "/>
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
@section('title', 'serveses')
