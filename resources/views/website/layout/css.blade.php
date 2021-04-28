<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <style>
       .navbar a {
            color: white;
            background-color: transparent;
            text-decoration: none;
        }

        .navbar a:hover {
        background-color: rgba(66, 183, 227, 255);
        width : 90%;
        color: black;
        }


       
        .navbar a.active{

            color: black;
            text-decoration: underline;
            font-weight: bold;
            background-color: rgba(66, 183, 227, 255);
            width: 92%;
            
        }

        #p2 {
            text-align: center;
            color: aliceblue;
            padding: 50px;
            
        }

        #div4 {
            --bs-gutter-x: 0;
            margin-top: -6px;
            background-color: rgba(14, 38, 50, 255);
        }

        #div5 {
            color: white;
        }

        #map {
            width: 1310px;
        }

        #textColor {
            color: aliceblue;
        }

        i {
            color: rgba(66, 183, 227, 255);
        }

        #container {
            position: relative;
        }

        #tag {

            position: absolute;


            background-color: #92AD40;

            color: #FFFFFF;

            width: 300px;
            height: 300px;
        }

        #responsiveForm {
            position: absolute;
            background-color: white;
            margin-left: 50px;
            min-height: 300px;
            height: auto;
            width: 20%;

        }

        #formDiv {

            height: 422px;
            width: 420px;
            margin-right: 190px;

            background-color: rgba(66, 183, 227, 255);

        }

        .container,
        .container-fluid,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl,
        .container-xxl {
            padding-right: var(--bs-gutter-x, 0);
            padding-left: var(--bs-gutter-x, 0);
        }

        @media (min-width: 368px) and (max-width: 667px) {
            body {
                font-size: 140%;
            }

        }

        @media (min-width: 668px) and (max-width: 991px) {
            body {
                font-size: 200%;
            }

            #columnWidth {
                width: 70%;
            }

            #col1 {
                width: 100%;
            }

            #logo{
                height : 190px;
                width: 240px;
               
            }

            .bg-img {
                background-image: url("banner.png");
                min-height: 680px;
            }

            #formDiv {
                height: 650px;
                width: 660px;
                margin-right: 170px;

            }

            .form-control {
                padding: 1.375rem .75rem;
                font-size: 2rem;
                font-weight: 700;
            }

            #footerText {
                margin-top: 50px;
                font-size: 20px;
            }

            #img1 {
                margin-bottom: 30px;
            }

            #responsiveForm {
                margin-left: 55px;
                width: 550px;
            }
            .navbar a{
                margin-left: 40px;
                font-size: 45px;
                text-align: center;
            }
            .navbar a:hover{
                width: 92%;
            }
            

        }

         @media (min-width: 992px) and (max-width: 1119px) {
            #responsiveForm {
                width: 320px;
            }
            

        } 
        
        

        .bg-img {
            /* The image used */
            background-image: url("banner.png");

            /* Control the height of the image */
            height: 460px;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
    </style>