@extends('layout.app')
@section('title', 'home')


@section('content')

    <div class="row m-0 parallax">
        <div class="col-md-4 text-center">
            <h2 class="text-white">Software Engineer</h2>
            <h4 class="text-white">Mobile & Web</h4>
            <button class="btn btn-primary">Learn more</button>
        </div>
    </div>
    <h2 class="text-center mt-2">Recent Project</h2>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/card.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/card.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/card.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
    <h2 class="p-3 text-center">Contact US</h2>
    <div class="row  mt-3">
        <div class="col-md-6">
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Your Message</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form> 
        </div>
        <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14602.331657071363!2d90.3466063!3d23.7978623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1709347364231!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
@endsection