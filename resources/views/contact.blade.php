@extends('layouts.app')

@section('content')
<section class="section" id="reservation" style="margin-bottom: 30px; background-color: #19160d;">
    <div class="container" style="margin-top: 120px; padding: 120px 0px; background-image: url(../images/reservation-bg.jpg); background-position: center center; background-repeat: no-repeat; background-size: cover;">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="left-text-content" style="margin-bottom: 30px;">
                   
                   
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="phone" style="background-color: #FAF4E4; border-radius: 5px; text-align: center; padding: 0px 0px 20px 0px;">
                                <i style="width: 70px; height: 70px; display: inline-block; text-align: center; line-height: 70px; color: #FAF4E4; background-color: #D3A121; border-radius: 50%; font-size: 24px; margin-top: -35px; text-align: center; margin-left: auto; margin-right: auto;">✆</i>
                                <h4 style="font-size: 20px; font-weight: 700; margin-top: 15px; margin-bottom: 10px;">Phone Numbers</h4>
                                <span><a href="tel:0602-293534" style="font-size: 14px; color: #D3A121; transition: all .3s;">0602-293534</a><br></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="message" style="background-color: #FAF4E4; border-radius: 5px; text-align: center; padding: 0px 0px 20px 0px;">
                                <i style="width: 70px; height: 70px; display: inline-block; text-align: center; line-height: 70px; color: #FAF4E4; background-color: #D3A121; border-radius: 50%; font-size: 24px; margin-top: -35px; text-align: center; margin-left: auto; margin-right: auto;">✉</i>
                                <h4 style="font-size: 20px; font-weight: 700; margin-top: 15px; margin-bottom: 10px;">Emails</h4>
                                <span><a href="mailto:hello@company.com" style="font-size: 14px; color: #D3A121; transition: all .3s;">arabiparfum5@company.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <form name="contact-form" action="/post-email" method="POST" style="margin-left: 30px; padding: 45px 30px; background-color: #FAF4E4; border-radius: 5px;">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <h4 style="text-align: center; font-weight: 700; font-size: 30px; color: #2a2a2a; margin-bottom: 30px;">Contact Us</h4>
                                @if (Session::has('msg'))
                                    <p class="alert alert-success">{{ Session::get('msg') }}</p>
                                @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>

                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" id="name" placeholder="Your Name*" required style="color: #2a2a2a; font-size: 14px; border: 1px solid #ddd; background-color: #fff; width: 100%; height: 46px; border-radius: 5px; outline: none; padding-top: 3px; padding-left: 20px; padding-right: 20px; appearance: none; margin-bottom: 15px; border-color: #c8990b;">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <input name="email" type="email" id="email" placeholder="Your Email Address" required style="color: #2a2a2a; font-size: 14px; border: 1px solid #ddd; background-color: #fff; width: 100%; height: 46px; border-radius: 5px; outline: none; padding-top: 3px; padding-left: 20px; padding-right: 20px; appearance: none; margin-bottom: 15px; border-color: #c8990b;">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <input name="phone" type="text" id="phone" placeholder="Phone Number*" required style="color: #2a2a2a; font-size: 14px; border: 1px solid #ddd; background-color: #fff; width: 100%; height: 46px; border-radius: 5px; outline: none; padding-top: 3px; padding-left: 20px; padding-right: 20px; appearance: none; margin-bottom: 15px; border-color: #c8990b;">
                                </fieldset>
                            </div>
                           
                            
                            
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" rows="6" id="message" placeholder="Message" required style="color: #2a2a2a; font-size: 14px; border: 1px solid #ddd; background-color: #fff; width: 100%; height: 140px; border-radius: 5px; outline: none; padding-top: 10px; padding-left: 20px; padding-right: 20px; appearance: none; margin-bottom: 15px; border-color: #c8990b;"></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" class="main-button-icon" style="font-size: 15px; font-weight: 500; text-transform: uppercase; display: inline-block; background-color: #D3A121; color: #ffffff; line-height: 50px; padding: 0px 45px; border-radius: 5px; transition: all .3s;">SEND</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
