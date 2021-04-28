
@extends("website.layout.layout")
@section("title", "Home Test")

@section("body")

<div id="container">

            <div class="bg-img d-flex justify-content-end align-items-center">
                <div id="formDiv">
                    <form class="mt-5 rounded-3" id="responsiveForm" action=""
                        style="padding: 20px; margin-right: 50px; margin-bottom : 80px;">
                        <label class="d-flex justify-content-center fs-5">Login</label>
                        <div class="mb-3">
                            <label for="name" class="form-label"> Name:</label>
                            <input type="text" class="form-control" id="name" />
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="mb-3">
                            <input type="submit" name="submit"
                                style="background-color: rgba(66,183,227,255); color: black;"
                                class="form-control btn btn-primary" value="Sign In" />
                        </div>
                        <p class="d-flex justify-content-center">Lost your password?</p>
                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->

                    </form>
                </div>
            </div>
        </div>






        <div class="row" style="--bs-gutter-x : 0;">

            <div id="col1" class="col-md-6" style="background-color:  rgba(66,183,227,255);">
                <p id="p2"> Stimulate your mind as you test your typing speed with this standard English paragraph
                    typing test. Watch your typing speed and accuracy increase as you learn about a variety of new
                    topics! Over 40 typing test selections available. Stimulate your mind as you test your typing speed
                    with this standard English paragraph
                    typing test. Watch your typing speed and accuracy increase as you learn about a variety of new
                    topics! Over 40 typing test selections available. Stimulate your mind as you test your typing speed
                    with this standard English paragraph
                    typing test. Watch your typing speed and accuracy increase as you learn about a variety of new
                    topics! Over 40 typing test selections available. Stimulate your mind as you test your typing speed
                    with this standard English paragraph
                    typing test. Watch your typing speed and accuracy increase as you learn about a variety of new
                    topics! Over 40 typing test selections available</p>
            </div>
            <div id="col1" class="col-md-6" style="background-color: rgba(14,38,50,255);">
                <p id="p2"> Stimulate your mind as you test your typing speed with this standard English paragraph
                    typing test. Watch your typing speed and accuracy increase as you learn about a variety of new
                    topics! Over 40 typing test selections available. Stimulate your mind as you test your typing speed
                    with this standard English paragraph
                    typing test. Watch your typing speed and accuracy increase as you learn about a variety of new
                    topics! Over 40 typing test selections available. Stimulate your mind as you test your typing speed
                    with this standard English paragraph
                    typing test. Watch your typing speed and accuracy increase as you learn about a variety of new
                    topics! Over 40 typing test selections available. Stimulate your mind as you test your typing speed
                    with this standard English paragraph
                    typing test. Watch your typing speed and accuracy increase as you learn about a variety of new
                    topics! Over 40 typing test selections available.</p>
            </div>

        </div>

        <div class="">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.1315841140627!2d74.40832901500829!3d31.52054575428752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190f7df22c3fe7%3A0x8dd7ffda40aa6b03!2sAllama%20Iqbal%20International%20Airport!5e0!3m2!1sen!2s!4v1618907910487!5m2!1sen!2s"
                style="border:0;" width="100%" height="500px" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <div id="div4" class="row container-fluid">

            <div id="columnWidth" class="col-md-4 col-sm-6 " style="padding: 30px;">
                <p id="textColor" style="color: white;"><b>Our History &nbsp
                        Our Biography &nbsp
                        Our Skills</b></p>

                <p id="textColor">Stimulate your mind as you test your typing speed with this standard English paragraph
                    typing test. Watch your typing speed and accuracy increase as you learn about a variety of new
                    topics! Over 40 typing test selections available.</p>

                <div class="row">
                    <!-- <div class="col-md-3">
                        </div> -->
                    <div class="col-md-4" id="textColor">

                        <i class="fa fa-check-square-o"></i> wewewew </br>
                        <i class="fa fa-check-square-o"></i> wewewew </br>
                        <i class="fa fa-check-square-o"></i> wewewew </br>
                        <i class="fa fa-check-square-o"></i> wewewew </br>
                        <i class="fa fa-check-square-o"></i> wewewew </br>
                        <i class="fa fa-check-square-o"></i> wewewew


                    </div>
                    <div class="col-md-4" id="textColor">
                        <i class="fa fa-check-square-o"></i> wewewew </br>
                        <i class="fa fa-check-square-o"></i> wewewew </br>
                        <i class="fa fa-check-square-o"></i> wewewew </br>
                        <i class="fa fa-check-square-o"></i> wewewew </br>
                        <i class="fa fa-check-square-o"></i> wewewew </br>
                        <i class="fa fa-check-square-o"></i> wewewew
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
            </div>


            <div class="row">
                <div>
                    <p id="footerText" class="text-center mt-5" style=" color: rgba(66,183,227,255);">Solstice Solution
                        2021 | All rights
                        reserved

                    </p>
                </div>
                <div class="text-end" style="margin-top : -50px;">
                    <img id="img1" src="img1.png" height="40px" width="40px">
                    <img id="img1" src="img2.png" height="40px" width="40px">
                    <img id="img1" src="img3.png" height="40px" width="40px">
                </div>

            </div>
        </div>

@endsection