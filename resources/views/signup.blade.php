    @extends('layout.layout')

    @section('title', 'SignUp')

    @section('content')
        <section class="contact-us">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="down-contact">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="sidebar-item contact-form">
                                        <div class="sidebar-heading">
                                            <h2>Send us a message</h2>
                                        </div>
                                        <div class="content">
                                            <form id="contact" action="{{ route('register') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">

                                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                                        @include('components.alerts.error')
                                                    </div>

                                                    <div class="col-md-6 col-sm-12">
                                                        <fieldset>
                                                            <input value="{{ old('username') }}" name="username"
                                                                type="text" id="name" placeholder="Your username"
                                                                required="">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <fieldset>
                                                            <input value="{{ old('email') }}" name="email" type="text"
                                                                id="email" placeholder="Your email" required="">
                                                        </fieldset>
                                                    </div>

                                                    <div class="col-md-12 col-sm-12">
                                                        <fieldset>
                                                            <input name="password" type="password" id="password"
                                                                placeholder="*********">
                                                        </fieldset>
                                                    </div>

                                                    <div class="col-md-12 col-sm-12">
                                                        <fieldset>
                                                            <input name="re_password" type="password" id="password"
                                                                placeholder="*********">
                                                        </fieldset>
                                                    </div>

                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"
                                                                    id="inputGroupFileAddon01">Upload</span>
                                                            </div>
                                                            <div class="custom-file">
                                                                <input name="photo" type="file"
                                                                    class="custom-file-input" id="inputGroupFile01"
                                                                    aria-describedby="inputGroupFileAddon01">
                                                                <label class="custom-file-label"
                                                                    for="inputGroupFile01">Choose file (*.jpg, *.jpeg,
                                                                    *.png)</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <fieldset
                                                            style="display: flex; align-items: center; justify-content: flex-start;">
                                                            <input style="width: auto; height: auto; margin: 0 10px;"
                                                                type="checkbox" name="policy" />
                                                            <p>I agree to the privacy policy</p>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <fieldset>
                                                            <button type="submit" id="form-submit" class="main-button">
                                                                Sign Up
                                                            </button>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
