@extends('layout')

@section('content')

<div class="container maincontent bottom_margin">
    <div class="row justify-content-center">
        <h2 class="create_job">Create job</h2>
    </div>

    <div class="row justify-content-center">
        <form method="POST" action="/api/jobs">

            @csrf

            <div class="field col-sm-6">
                <label class="label" for="title">Job Title</label>
                <div class="control">
                    <input type="text" class="input" name="title" value="title">  
                </div>
            </div>

            <div class="field col-sm-6">
                <label class="label" for="title">City</label>
                <div class="control">
                    <input type="text" class="input" name="city" value="city">  
                </div>
            </div>

            <div class="field col-sm-6">
                <label class="label" for="title">Country</label>
                <div class="control">
                    <input type="text" class="input" name="country" value="country">  
                </div>
            </div>

            <div class="field col-sm-6">
                <label class="label" for="title">Short description</label>
                <div class="control">
                    <input type="text" class="input" name="short_description" value="short description">  
                </div>
            </div>

            <div class="field col-sm-6">
                <label class="label" for="title">Link to job</label>
                <div class="control">
                    <input type="text" class="input" name="url" value="url">  
                </div>
            </div>

            <div class="field col-sm-6">
                <label class="label" for="title">Language</label>
                <div class="control">
                    <input type="text" class="input" name="language" value="-">  
                </div>
            </div>

            <div class="field col-sm-6">
                <label class="label" for="title">Sector</label>
                <div class="control">
                    <input type="text" class="input" name="sector" value="-">  
                </div>
            </div>

            <div class="field col-sm-6">
                <label class="label" for="title">Salary</label>
                <div class="control">
                    <input type="number" class="input salary" name="salary" value="0">  
                </div>
            </div>

            <div class="field col-sm-12">
                <label class="label" for="description">Job description</label>
                <div class="control">
                    <textarea name="description" class="textarea">Description</textarea>
                </div>
            </div>

            <input type="hidden" value="{{$user_id}}" name="user_id">

            <div class="notification is-danger">
                <ul> 
                    @foreach ($errors->all() as $error)
                    <p>here</p>
                    <li>{{ $error}} </li>
                    @endforeach     
                </ul>
            </div>

            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Submit</button>
                </div>
            </div>             
        </form>
    </div>
</div>
@endsection