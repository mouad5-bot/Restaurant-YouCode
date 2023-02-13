@extends('layouts.app')

@section('title')
Contact Us
@endsection

@section('css')
{{ asset('assets/css/contact.css') }}
@endsection

@section('content')
<div class="container">
    <h2>Contact Us</h2>
    <form>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
      </div>
      <div class="form-group mt-3">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
      </div>
      <div class="form-group mt-3 mb-2">
        <label for="message">Message:</label>
        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>  
@endsection 