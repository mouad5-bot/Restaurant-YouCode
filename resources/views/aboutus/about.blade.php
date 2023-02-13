@extends('layouts.app')

@section('title')
About Us
@endsection

@section('css')
{{ asset('assets/css/about.css') }}
@endsection

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-body">
        <h2>About Us</h2>
        <p>Our restaurant was established in 2018 by OCP, with the aim of providing the Youcode community with a welcoming and delicious dining experience. Our restaurant is located at the heart of the Youcode campus, and we are open from 9:00 am to 4:30 pm, Monday to Friday.</p>
        <p>Our mission is to serve high-quality, fresh, and tasty food that meets the expectations of our customers. Our menu features a variety of specialties, including mouth-watering burgers, scrumptious sandwiches, delicious salads, and refreshing beverages.</p>
        <p>Our team consists of skilled and experienced chefs, servers, and staff who are passionate about providing excellent service and creating a welcoming atmosphere. Whether you're here for a quick bite or a leisurely meal, we strive to make every visit a memorable one.</p>
        <p>If you have any questions, comments, or feedback, we'd love to hear from you. Please don't hesitate to <a href="contact.html">contact us</a>.</p>
    </div>
    </div>
    <div class="image-container">
      <img src="{{ asset('assets/image/bergur.jpg') }}" alt="restaurant image">
    </div>
  </div>
@endsection 