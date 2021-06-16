<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>account-settings</title>
</head>
<style>
body{margin-top:20px;
color: #bcd0f7;
    background: #1A233A;
}
.account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
}
.account-settings .about {
    margin: 1rem 0 0 0;
    font-size: 0.8rem;
    text-align: center;
}
.card {
    background: #272E48;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}
.form-control {
    border: 1px solid #596280;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: #1A233A;
    color: #bcd0f7;
}
#imageUpload
{
    display: none;
}

#profileImage
{
    cursor: pointer;
}

#profile-container {
    margin: 0 auto !important;
    width: 150px;
    height: 150px;
    overflow: hidden;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
}

#profile-container img {
    width: 150px;
    height: 150px;
}
</style>
<body>
    
    @foreach ($auth as $user)
        

    <div class="container">
            @if (session('update'))
				<div class="alert alert-success" role="alert">
					{{ session('update') }}
				</div>
			@endif
			
			@if (session('create'))
				<div class="alert alert-success" role="alert">
					{{ session('create') }}
				</div>
			@endif
            {{-- validation note --}}
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger" role="alert" style="list-style-type: none; margin-left:0" >{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            {!!Form::open(['action' => ['PageController@authUpdate', $user->id ], 'method' =>'POST', ])!!}
            {{Form::hidden('_method','PUT')}}
        <div class="row gutters">
            
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="account-settings">
                            <div class="user-profile">
                                <div class="user-avatar">
                                    
                                    @if(Auth::user()->avatar)

                                        <div id="profile-container">
                                            
                                            <image id="profileImage" src="layout/images/{{$user->avatar}}" />
                                        </div>
                                        <input id="imageUpload" type="file" value="{{$user->avatar}}" >
                                         
                                     @else
                                        <div id="profile-container">
                                            
                                            <image id="profileImage" src="layout/images/{{$user->avatar}}" />
                                        </div>
                                        <input id="imageUpload" type="file" value="{{$user->avatar}}" name="avatar" placeholder="Photo"  capture>

                                     @endif

                                </div>
                                <h5 class="user-name">{{$user->name}}</h5>
                                <h6 class="user-email">{{$user->email}}</h6>
                            </div>
                            <div class="about">
                                <h5 class="mb-2 text-primary">Regency</h5>

                                @if(Auth::user()->lever == 0)

                                <p>Administrator</p>
                                <p style="position: relative; bottom: -88px">Join Date <br> {{ date('F d, Y', strtotime($user->created_at)) }}</p>

                                <img style="max-height: 100px; position: relative; top: -72px" src="{{url('layout/images/admintrue.png')}}" alt="Admin" title="ADMIN">
                                @else

                                <p>Menber</p>
                                <p style="position: relative; bottom: -88px">Join Date <br> {{ date('F d, Y', strtotime($user->created_at)) }}</p>

                                <img style="max-height: 100px; position: relative; top: -72px" src="{{url('layout/images/member.png')}}" alt="Member" title="MEMBER">

                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                       
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h6 class="mb-3 text-primary">Personal Details</h6>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="fullName">Full Name</label>
                                    <input type="text" class="form-control" name="name" id="fullName" value="{{$user->name}}" placeholder="Enter full name">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    
                                    <label for="eMail">Old Password</label>
                                    <input type="password" name="password" class="form-control"    placeholder="Enter old Password">
                                    @if (session('failed_password'))
                                            {{ session('failed_password') }}
                                    @endif
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" name="phone" id="phone" value="{{$user->phone}}" placeholder="Enter phone number">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="website">New Password</label>
                                    <input type="password" name="new_password" class="form-control" id="website" placeholder="Enter new Password">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="eMail">Email</label>
                                    <input type="email" class="form-control" name="email" id="eMail" value="{{$user->email}}" placeholder="Enter email ID">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="website">Confirm Password</label>
                                    <input type="password" class="form-control" id="website" placeholder="Enter new Password">
                                </div>
                            </div>
                        </div>
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h6 class="mb-3 text-primary">Address</h6>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="Street">Street</label>
                                    <input type="name" class="form-control" name="street" value="{{$user->street}}" id="Street" placeholder="Enter Street">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="ciTy">City</label>
                                    <input type="name" class="form-control" name="city" id="ciTy" value="{{$user->city}}" placeholder="Enter City">
                                </div>
                            </div>
                            
                        </div>
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="text-right">
                                    <a type="button" href="{{url('luis')}}" class="btn btn-secondary">Cancel</a>
                                    <input class="btn btn-secondary" style="background-color: rgb(158, 216, 153)"  type="submit" value="Update" />
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>

        </div>
        {!!Form::close()!!}
    </div>
    @endforeach
</body>
@foreach ($auth as $user)
<script>
    $("#profileImage").click(function(e) {
    $("#imageUpload").click();
});

function fasterPreview( uploader ) {
    if ( uploader.files && uploader.files[0] ){
          $('#profileImage').attr('src', 
             window.URL.createObjectURL(uploader.files[0]) );
    }
}

$("#imageUpload").change(function(){
    fasterPreview( this );
});
</script>
@endforeach

</html>


   