<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('styles.css') }}" rel="stylesheet">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Simple Portfolio</title>
</head>
<body>

@include('sweetalert::alert')

<!--header section starts-->
<header>

    <div id="menu-bars" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#services">services</a>
        <a href="#contact">contact</a>


    </nav>

</header>
<!--header section ends-->

<!-- home section starts  -->

<section class="home" id="home">



    <div class="content">
        <img class="tilt" src="images/slydd.JPG" alt="">
        <h3> sylvester <span>akwaowo</span> </h3>
        <p> i am a <span class="typing-text"> software developer </span> </p>
        <a href="#about" class="btn">about me</a>
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> about <span>me</span> </h1>

    <div class="row">

        <div class="image">
            <img class="tilt" src="public/images/slydd.JPG" alt="">
        </div>

        <div class="content">
            <h3> my name is <span> sylvester akwaowo </span> </h3>
            <p class="info">Passionate software developer, exploring Web and Mobile application development. Kotlin | Java | Android | PHP | Laravel | TailwindCSS | PostgreSQL.</p>
            <div class="box-container">
                <div class="box">
                    <p> <span> age: </span> 32 </p>
                    <p> <span> gender: </span> male </p>
                    <p> <span> experience  : </span> 2 years </p>
                    <p> <span> freelance : </span> available </p>
                </div>
                <div class="box">
                    <p> <span> language : </span> ibibio / english </p>
                    <p> <span> phone : </span> +233 553217288 </p>
                    <p> <span> email : </span> ultrasoft101@gmail.com </p>
                    <p> <span> address : </span> royal ravico, greater accra</p>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> <span> my </span> services </h1>

    <div class="box-container">

        <div class="box tilt">
            <i class="fas fa-code"></i>
            <h3>web development</h3>
            <p>we develop beautiful, high-performance websites that will impress your visitors.</p>
        </div>

        <div class="box tilt">
            <i class="fas fa-mobile"></i>
            <h3>Mobile Apps</h3>
            <p>An expert mobile developer with a deep knowledge, highly skilled and rich experienced regarding the mobile field.</p>
        </div>

        <div class="box tilt">
            <i class="fas fa-bullhorn"></i>
            <h3>seo marketing</h3>
            <p>We deliver the best SEO services, tailored to rank you higher than your competitors</p>
        </div>


    </div>

</section>

<!-- services section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> contact <span> me </span> </h1>

    <div class="row">

        <div class="image">
            <img class="tilt" src="images/contact-img.svg" alt="">
        </div>

        <form action="{{route('contact.form')}}" method="post">
            @csrf

            <div class="inputBox">
                <input type="text"  placeholder="Name" name="name" value="" required>


                <input type="email" placeholder="Email" name="email" required>
            </div>



            <input type="text" placeholder="Subject" class="box" name="subject" required>


            <textarea placeholder="Message" required name="message"  cols="30" rows="10"></textarea>

            <input type="submit" class="btn" value="send message">

        </form>

    </div>

</section>

<!-- contact section ends -->

<!-- footer section  -->

<div class="footer"> simple portfolio <span> sylvester akwaowo </span> |HNGi8 </div>














<!-- javascript part  -->

<!-- typed.js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>


<!-- particles.js links  -->
<script src="js/particles.min.js"></script>
<script src="js/app.js"></script>

<!-- vanilla-tilt.js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"></script>

<script>

    let menu = document.querySelector('#menu-bars');
    let header = document.querySelector('header');

    menu.onclick = () =>{
        menu.classList.toggle('fa-times');
        header.classList.toggle('active');
    }

    window.onscroll = () =>{
        menu.classList.remove('fa-times');
        header.classList.remove('active');
    };

    // var typed = new Typed('.typing-text', {
    //     strings : ['front end developer', 'web designer', 'graphic designer', 'web developer'],
    //     loop : true,
    //     typeSpeed : 150
    // });

    VanillaTilt.init(document.querySelectorAll('.tilt'),{
        max:25
    });

</script>



</body>
</html>
