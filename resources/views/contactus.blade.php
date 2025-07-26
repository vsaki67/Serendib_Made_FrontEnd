@extends('layouts.app')

@section('title', 'SerendibMade - Products')

@section('content')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=Raleway:wght@400;500;700&display=swap" rel="stylesheet">
 
    <!-- Contact page section start 
    <section class="aboutus py-8 text-center">
        <h1 class="text-4xl font-bold mb-4">Contact Us</h1>
        <span class="text-brown-dark">
            <a href="/homeindex" class="hover:underline">home</a> >> contact
        </span>
    </section>
    <img src="{{ asset('Images_used/ProductPage_images/gem1.png') }}" alt="Ceylon Gemstones" class="featured-product-image w-full">

    -->
    
    <!-- Contact page section start -->
    <section class="contact_us max-w-6xl mx-auto px-4 py-12 bg-cover bg-center bg-no-repeat" 
            style="background-image: url('{{ asset('Images_used/Contactus_images/img1.png') }}');">
        <div class="backdrop-blur-sm bg-white/80 p-8 rounded-lg">
            <div class="contact-row flex flex-col md:flex-row justify-between gap-8 mb-8">
                <div class="box bg-white p-6 rounded-lg shadow-md flex-1 backdrop-blur-sm">
                    <div class="info text-center">
                        <i class="bx bx-location-plus text-brown-dark text-3xl mb-2"></i>
                        <span class="block text-lg font-semibold text-brown-dark mb-1">Our Cake Shop</span>
                        <p class="text-text">Temple Rd, Horape, Ragama</p>
                    </div>
                </div>

                <div class="box bg-white p-6 rounded-lg shadow-md flex-1 backdrop-blur-sm">
                    <div class="info text-center">
                        <i class="bx bx-envelope text-brown-dark text-3xl mb-2"></i>
                        <span class="block text-lg font-semibold text-brown-dark mb-1">Email Us</span>
                        <p class="text-text">sakivo76@gmail.com</p>
                    </div>
                </div>

                <div class="box bg-white p-6 rounded-lg shadow-md flex-1 backdrop-blur-sm">
                    <div class="info text-center">
                        <i class="bx bx-phone text-brown-dark text-3xl mb-2"></i>
                        <span class="block text-lg font-semibold text-brown-dark mb-1">Call Us</span>
                        <p class="text-text">075 034 4245</p>
                    </div>
                </div>
            </div>
            
            <div class="form bg-white p-8 rounded-lg shadow-md max-w-3xl mx-auto backdrop-blur-sm">
                <form action="" method="POST">
                    @csrf
                    <div class="input-row flex flex-col md:flex-row justify-between gap-4 mb-4">
                        <input type="email" name="email" placeholder="Your Email" class="flex-1 p-3 border border-gray-300 rounded">
                        <input type="tel" name="phone" placeholder="Your Contact Number" class="flex-1 p-3 border border-gray-300 rounded">
                    </div>
                    <input type="text" name="subject" placeholder="Subject" class="w-full p-3 border border-gray-300 rounded mb-4">
                    <textarea name="message" cols="30" rows="5" placeholder="Message" class="w-full p-3 border border-gray-300 rounded mb-4"></textarea>
                    <div class="button text-center">
                        <button type="submit" class="bg-brown-dark text-white px-6 py-3 rounded hover:bg-brown-medium transition">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    <!-- Location - Googlemap section-->
    <div class="container flex flex-col md:flex-row justify-between max-w-5xl mx-auto px-4 py-8 mb-20">
        <div class="text flex-1 text-center p-4">
            <h2 class="text-brown text-4xl md:text-5xl font-bold mb-6">Opening Times</h2>
            <p class="text-text text-2xl">
                9 a.m. - 7 p.m.<br>(Monday - Friday)<br><br>
                8 a.m. - 8 p.m. <br>(Saturday & Sunday)
            </p>
        </div>
        <div class="map flex-1 p-1 border-4 border-brown-light">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.9101025755335!2d79.92722637475804!3d7.019852792981768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2f82e323494f5%3A0xcd6ebd5dab9a4e80!2sTemple%20Rd!5e0!3m2!1sen!2slk!4v1723865509675!5m2!1sen!2slk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    @include('partials.footer')
@endsection