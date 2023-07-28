@extends('layouts.app')
@section('content')
    <div id="rcb" class="rcb">
        <div class="container">
            <div class="section-title mt-4">
                <h2>Contact Us</h2>
                <span> Please don't hesitate to get in touch with us. Use our quick
                    contact
                    form below and a member of our experienced and professional team of solicitors will contact you
                    as
                    soon as possible to discuss your requirements and your options.</span>
            </div>
            <form class="row g-3" action="{{ route('callback') }}" method="POST">
                @csrf
                <div class="col-md-6">
                    <label for="inputName" class="form-label">Name</label>
                    <input type="text" class="form-control" id="inputName4" name="name">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email">
                </div>
                <div class="col-md-6">
                    <label for="inputPhone4" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="inputPhone4" name="phone">
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
                </div>

                {{-- <div class="col-md-12">
                    <label for="inputNature" class="form-label">Nature of Your Enquiry</label>
                    <select class="form-select" name="enquiry">
                        <option selected>Please Select</option>
                        @foreach ($services as $service)
                            <option class="text-uppercase">{{ $service->name }}</option>
                        @endforeach

                    </select>
                </div> --}}
                <div class="col-md-12">
                    <label for="input" class="form-label">A Short Description of Your Enquiry </label>
                    <textarea class="form-control" name="description" id="inputDescription" placeholder="What is your Enquiry about?"
                        cols="5" rows="5"></textarea>
                </div>
                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary m-4">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
