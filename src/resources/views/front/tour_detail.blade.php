
 @extends('layout.front') 

@section('content')
    <!-- <div class="page-heading about-heading header-text"
        style="background-image: url(assets/images/heading-6-1920x500.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>€300 - €4000</h4>

                        <h2>Lorem ipsum dolor sit amet</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="">
                        <h2>{{$tour->name}}</h2>

                        @if ('tour' === \Request::route()->getName())
                        <ul id="">
                            @forelse ($tour->photos as $photo)
                            <li>
                                <img src="{{ asset('storage/' . $photo->filename ) }}" style="width:100%">
                            </li>
                            @empty
                            <li>
                                <img src="holder.js/325x200">
                            </li>
                            @endforelse
                        </ul>

                        <div class="summary">{!!$tour->summary!!}</div>
                        @endif
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-4 col-6">
                            <div>
                                <img src="assets/images/product-1-370x270.jpg" alt="" class="img-fluid">
                            </div>
                            <br>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div>
                                <img src="assets/images/product-2-370x270.jpg" alt="" class="img-fluid">
                            </div>
                            <br>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div>
                                <img src="assets/images/product-3-370x270.jpg" alt="" class="img-fluid">
                            </div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <p class="lead">
                        <i class="fa fa-calendar"></i> Available: Spring &nbsp;&nbsp; <i class="fa fa-cube"></i> 20
                        nights &nbsp;&nbsp; <i class="fa fa-plane"></i> Flight included
                    </p>

                    <br>

                    <p><i class="fa fa-map-marker"></i> <strong>6 Regeneration Road, SE16 2NX, London</strong></p>

                    <br>


                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, delectus totam non est excepturi
                        expedita, illum vitae vel dolore exercitationem nobis quasi dicta illo id quas. Error commodi,
                        modi minus. <br><br>
                        Perferendis, quidem, facilis. Aspernatur alias numquam saepe deleniti dolorem quos repudiandae
                        eaque ad eligendi quam, ratione, error minima culpa suscipit nostrum magni omnis est. Suscipit
                        dolor sint aut maiores eius, id nemo, optio, quos tempora cum est quas. At recusandae obcaecati
                        consequatur ipsa dignissimos, eius commodi qui quae exercitationem fugiat, voluptatem, nesciunt!
                    </p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem voluptatem vero culpa rerum
                        similique labore, nisi minus voluptatum numquam fugiat. <br><br>Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Placeat fugit sint reiciendis quas temporibus quam maxime nulla
                        vitae consectetur perferendis, fugiat assumenda ex dicta molestias soluta est quo totam cum?</p>

                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="section-heading" style="border: 0">
                <h2>Availability &amp; Prices</h2>
            </div>

            <div class="table-responsive">
                @isset($dates)
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table">
                    <thead>
                        <tr>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($dates as $date)
                        <tr>
                            <td>{{$date->start_date}}</td>
                            <td>{{$date->end_date}}</td>
                            <td>{{$date->price}} {{$date->currency}}</td>
                            <td>
                                <a class="" href="{{route('reservation.selectpax', [$date->id])}}" role="button">
                                    <div class="contact-form">
                                        <button type="submit" class="filled-button">@lang('frontLang.make-reservation')
                                        </button>
                                    </div>
                                </a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>

    <!-- <div class="section">
        <div class="container">
            <div class="section-heading" style="border: 0">
                <h2>Info</h2>
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-2 col-sm-3">
                            <p class="pjVpProductPolicyTitle">
                                <strong>Check-in</strong>
                            </p>
                        </div>
                        <div class="col-md-10 col-sm-9">
                            <p>
                                Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed
                                pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut
                                accumsan dignissim rutrum.
                            </p>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-2 col-sm-3">
                            <p>
                                <strong>Check-out</strong>
                            </p>
                        </div>

                        <div class="col-md-10 col-sm-9">
                            <p>
                                Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed
                                pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut
                                accumsan dignissim rutrum.
                            </p>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-2 col-sm-3">
                            <p>
                                <strong>Pets</strong>
                            </p>
                        </div>
                        <div class="col-md-10 col-sm-9">
                            <p>
                                Not allowed
                            </p>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-2 col-sm-3">
                            <p>
                                <strong>Policies</strong>
                            </p>
                        </div>
                        <div class="col-md-10 col-sm-9">
                            <div>
                                <p>
                                    Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed
                                    pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut
                                    accumsan dignissim rutrum. <br>
                                    Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed
                                    pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut
                                    accumsan dignissim rutrum. <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-2 col-sm-3">
                            <p>
                                <strong>Fees</strong>
                            </p>
                        </div>

                        <div class="col-md-10 col-sm-9">
                            <div>
                                <p>
                                    Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed
                                    pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut
                                    accumsan dignissim rutrum. <br>
                                    Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed
                                    pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut
                                    accumsan dignissim rutrum. <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>


        </div>
    </div> -->

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="section-heading">
                        <h2>Map</h2>
                    </div>

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11628.751733874766!2d27.948302749999996!3d43.22651925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbg!4v1592215682178!5m2!1sen!2sbg"
                        width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>

                <div class="col-md-3">
                    <div class="section-heading">
                        <h2>Contact Details</h2>
                    </div>

                    <div class="left-content">
                        <p>
                            <span>Name</span>

                            <br>

                            <strong>John Smith</strong>
                        </p>

                        <p>
                            <span>Phone</span>

                            <br>

                            <strong>
                                <a href="tel:123-456-789">123-456-789</a>
                            </strong>
                        </p>

                        <p>
                            <span>Mobile phone</span>

                            <br>

                            <strong>
                                <a href="tel:456789123">456789123</a>
                            </strong>
                        </p>

                        <p>
                            <span>Email</span>

                            <br>

                            <strong>
                                <a href="mailto:john@carsales.com">john@carsales.com</a>
                            </strong>
                        </p>

                        <div class="contact-form">
                            <button type="submit" class="filled-button">Request Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="section-heading">
                        <h2>Enquiry</h2>
                    </div>

                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Name"
                                            required="">
                                    </fieldset>
                                </div>

                                <div class="col-sm-6">
                                    <fieldset>
                                        <input name="email" type="email" class="form-control" id="email"
                                            placeholder="Email" required="">
                                    </fieldset>
                                </div>

                                <div class="col-sm-6">
                                    <fieldset>
                                        <input name="phone" type="text" class="form-control" id="phone"
                                            placeholder="Phone" required="">
                                    </fieldset>
                                </div>

                                <div class="col-sm-3">
                                    <fieldset>
                                        <input name="date1" type="text" class="form-control" id="date1"
                                            placeholder="From 16.06.2020" required="">
                                    </fieldset>
                                </div>

                                <div class="col-sm-3">
                                    <fieldset>
                                        <input name="date2" type="text" class="form-control" id="date2"
                                            placeholder="To 16.06.2020" required="">
                                    </fieldset>
                                </div>

                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message"
                                            placeholder="Notes" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="filled-button">Send
                                            Request</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="section-heading">
                        <h2>Booking terms</h2>
                    </div>

                    <p>Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque
                        odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim
                        rutrum. Mauris tincidunt sollicitudin mi eu congue. Suspendisse tincidunt cursus porttitor.
                        Fusce pharetra lorem vel dolor imperdiet malesuada. Ut porttitor gravida quam, eu alique.</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form">
                        <form action="#" id="contact">
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Pick-up location"
                                            required="">
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Return location"
                                            required="">
                                    </fieldset>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Pick-up date/time"
                                            required="">
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Return date/time"
                                            required="">
                                    </fieldset>
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter full name" required="">

                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Enter email address"
                                            required="">
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Enter phone" required="">
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Book Now</button>
                </div>
            </div>
        </div>
    </div>


 @endsection 