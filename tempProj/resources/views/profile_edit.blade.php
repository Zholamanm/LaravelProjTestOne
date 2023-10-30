@extends('layout')

@section('title') Profile edit @endsection

@section('main_content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="/profile/edit/check" enctype="multipart/form-data">
        @csrf
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img id="preview" class="rounded-circle mt-5" width="150px"
                         src="{{ auth()->user()->avatar ? asset('uploads/avatars/' . auth()->user()->avatar) : 'https://i2.wp.com/vdostavka.ru/wp-content/uploads/2019/05/no-avatar.png?fit=512%2C512&ssl=1' }}">
                    <input type="file" id="avatar" name="avatar" onchange="previewFile()">
                    <span class="font-weight-bold text-black">{{auth()->user()->username}}</span>
                    <span class="text-black-50">{{auth()->user()->email}}</span><span> </span>
                </div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Name</label><input type="text" id="fname" name="fname" class="form-control" placeholder="{{optional(auth()->user()->details)->first_name ?? 'enter First name'}}" value="{{optional(auth()->user()->details)->first_name ?? ''}}"></div>
                        <div class="col-md-6"><label class="labels">Surname</label><input type="text" id="lname" name="lname" class="form-control" placeholder="{{optional(auth()->user()->details)->last_name ?? 'enter Last name'}}" value="{{optional(auth()->user()->details)->last_name ?? ''}}"></div>
                    </div>
                    <div class="row mt-3 text-black">
                        <div class="col-md-12 mb-2"><label class="labels">Mobile Number</label>
                            <input type="text" id="mob_phone" name="mob_phone" class="form-control" placeholder="{{optional(auth()->user()->details)->mob_phone ?? 'enter mobile number'}}" value="{{optional(auth()->user()->details)->mob_phone ?? ''}}">
                        </div>
                        <div class="col-md-12 mb-2"><label class="labels">Phone Number</label>
                            <input type="text" id="phone" name="phone" class="form-control" placeholder="{{auth()->user()->phone ?? 'No information'}}" value="{{auth()->user()->phone ?? ''}}">
                        </div>
                        <div class="col-md-12 mb-2"><label class="labels">Address</label>
                            <input type="text" id="address" name="address" class="form-control" placeholder="{{optional(auth()->user()->details)->address ?? 'enter address'}}" value="{{optional(auth()->user()->details)->address ?? ''}}">
                        </div>
                        <div class="col-md-12 mb-2"><label class="labels">Postcode</label>
                            <input type="text" id="postcode" name="postcode" class="form-control" placeholder="{{optional(auth()->user()->details)->postcode ?? 'enter postcode'}}" value="{{optional(auth()->user()->details)->postcode ?? ''}}">
                        </div>
                        <div class="col-md-12 mb-2"><label class="labels">Citizenship</label>
                            <input type="text" id="citizenship" name="citizenship" class="form-control" placeholder="{{optional(auth()->user()->details)->citizenship ?? 'enter citizenship'}}" value="{{optional(auth()->user()->details)->citizenship ?? ''}}">
                        </div>
                        <div class="col-md-12 mb-2"><label class="labels">Birth Date</label>
                            <input type="date" id="bdate" name="bdate" class="form-control" placeholder="{{optional(auth()->user()->details)->birth_date ?? 'enter Birth Date'}}" value="{{optional(auth()->user()->details)->birth_date ?? ''}}">
                        </div>
                        <div class="col-md-12 mb-2"><label class="labels">Job title</label>
                            <input type="text" id="job_title" name="job_title" class="form-control" placeholder="{{optional(auth()->user()->details)->job_title ?? 'enter job title'}}" value="{{optional(auth()->user()->details)->job_title ?? ''}}">
                        </div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <script>
        function previewFile() {
            const preview = document.querySelector('#preview');
            const file = document.querySelector('#avatar').files[0];
            const reader = new FileReader();

            reader.addEventListener("load", function () {
                // Преобразует изображение файла в URL-адрес
                preview.src = reader.result;
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
