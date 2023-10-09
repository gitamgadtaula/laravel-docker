@extends('layout.front') @section('content')

<div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>{{$category->name}}</h2>
                        <!-- <a href="packages.html">view more <i class="fa fa-angle-right"></i></a> -->
                    </div>
                </div>
                @isset($tours)
                @foreach ($tours as $tour) @php $tourDetailLink = route('tour', [$tour->id]) @endphp
                @php
                $tourDetailLink = route('tour', [$tour->id])
                @endphp
                <div class="col-md-4">
                    <div class="product-item">
                        <a href="{{$tourDetailLink}}"> @if(isset($tour->photos[0]))
                            <img width="200" height="247" src="{{ asset('storage/'.$tour->photos[0]->filename ) }}" >
                            @else
                            <img src="holder.js/200x123">
                            @endif</a>
                        <div class="down-content">
                            <a href="package-details.html">
                                <h4> {{str_limit($tour->name, 30)}}</h4>
                            </a>

                            <h6>$300 - $400</h6>

                            <p style="min-height:5rem;max-height:5rem;overflow:scroll">{{$tour->description}}</p>


                            <a class="filled-button" href="{{$tourDetailLink}}" style="width:-webkit-fill-available; text-align:center;">View Details</a>

                        </div>
                    </div>
                </div>
                @endforeach
                @endif

            </div>
        </div>
    </div>
 @endsection 