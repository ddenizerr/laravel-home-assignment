<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Contact Us</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .background-image {
            background: linear-gradient(45deg, rgba(244, 246, 246, 0.18), rgba(233, 201, 173, 0.38)), url({{url('images/background.jpg')}});
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .heart {
            animation: beat .5s 3 alternate;
            transform-origin: center;
        }

        /* Heart beat animation */
        @keyframes beat {
            to {
                transform: scale(1.3);
            }
        }

    </style>
</head>
<body class="background-image">
<div class="container" style="padding-top: 15rem">
    <div class="row h-100">
        <div class="col-xl-12 col-xs-12">
            <div class="card card-block" style="border-radius: 15px;">
                <div class="card-body col-lg-12 p-5 col-xs-12">
                    <div class="row d-flex justify-content-center align-items-center ">
                        @if(!session('success'))
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <h3 class="text-center"> Looking for us? </h3>
                                <br>
                                <h4 class="text-center"> Feel free to send us a message!</h4>
                            </div>
                            <div class="col-lg-6 col-xs-6 mt-1">
                                <form action="{{ route('store') }}" method="POST" class="row g-3">
                                    @csrf
                                    <div class="col-md-12 col-xs-12">
                                        <label for="name"
                                               class="form-label">Name</label>
                                        <input type="text" class="form-control  @error('name') is-invalid @enderror"
                                               name="name" id="name" placeholder="Rae Row">
                                        @error('email')
                                        <div id="name" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror

                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <label for="email"
                                               class="form-label">Email</label>
                                        <input type="email" class="form-control  @error('email') is-invalid @enderror"
                                               name="email" id="email" placeholder="dear@customer.com">
                                        @error('email')
                                        <div id="email" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror

                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <label for="comment"
                                               class="form-label ">Comment</label>
                                        <textarea type="textarea"
                                                  class="form-control @error('comment') is-invalid @enderror"
                                                  name="comment" id="comment"></textarea>
                                        @error('comment')
                                        <div id="comment" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-12 col-xs-12 heart text-center">
                                        <button class="btn" style="background-color: #6cafaf; color: aliceblue"
                                                type="submit">Submit
                                        </button>
                                    </div>
                                </form>

                            </div>
                        @elseif(session('success'))
                            <div class="col-lg-6 col-xs-6 mt-1">
                                <h3 class="text-center"> Thank you! </h3>
                                <br>
                                <h4 class="text-center"> We will get in touch soon.</h4>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 text-center">
                                <img src="{{url('images/thankyou.png')}}" style="width: 100%" alt="thank you image">
                                <small><a style="text-decoration: none; color: burlywood" href="https://storyset.com/people">People illustrations by Storyset</a></small>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>
</html>
