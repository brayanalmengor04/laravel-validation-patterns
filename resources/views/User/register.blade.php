@extends("template.template") 
@section("title","DSW 8 | User registration") 
@section("content")
<div class="row align-items-center py-5 mt-5">
                <div class="col-md-6 mb-5 mb-md-0">
                    <h6 class="text-white">QUALITY ROOFING SOLUTIONS</h6>
                    <h2 class="text-white fw-bold display-2">Expert roofers at your command</h2>
                    <p class="text-white">Sagittis pulvinar ut dis venenatis nunc nunc vitae aliquam vestibulum. Elit
                        adipiscing massa diam in dignissim. Risus tellus libero elementum aliquam etiam. Lectus
                        adipiscing est auctor mi quisque nunc non viverra est.</p>
                    <ul class="list-unstyled">
                        <li class="text-white fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23"
                                fill="none">
                                <g clip-path="url(#clip0_1_359)">
                                    <path
                                        d="M11.5 0.359375C5.34719 0.359375 0.359375 5.34719 0.359375 11.5C0.359375 17.6528 5.34719 22.6406 11.5 22.6406C17.6528 22.6406 22.6406 17.6528 22.6406 11.5C22.6406 5.34719 17.6528 0.359375 11.5 0.359375ZM11.5 2.51562C16.4653 2.51562 20.4844 6.53393 20.4844 11.5C20.4844 16.4653 16.4661 20.4844 11.5 20.4844C6.5347 20.4844 2.51562 16.4661 2.51562 11.5C2.51562 6.5347 6.53393 2.51562 11.5 2.51562ZM17.7982 8.36746L16.7859 7.34693C16.5762 7.13557 16.2349 7.13418 16.0235 7.34387L9.67375 13.6426L6.98778 10.9349C6.77813 10.7235 6.43681 10.7221 6.22545 10.9318L5.20487 11.9441C4.99352 12.1538 4.99212 12.4951 5.20182 12.7065L9.27987 16.8176C9.48952 17.0289 9.83084 17.0303 10.0422 16.8206L17.7952 9.12983C18.0065 8.92014 18.0079 8.57882 17.7982 8.36746Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1_359">
                                        <rect width="23" height="23" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            Fully legal licensed and insured
                        </li>
                        <li class="text-white fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23"
                                fill="none">
                                <g clip-path="url(#clip0_1_359)">
                                    <path
                                        d="M11.5 0.359375C5.34719 0.359375 0.359375 5.34719 0.359375 11.5C0.359375 17.6528 5.34719 22.6406 11.5 22.6406C17.6528 22.6406 22.6406 17.6528 22.6406 11.5C22.6406 5.34719 17.6528 0.359375 11.5 0.359375ZM11.5 2.51562C16.4653 2.51562 20.4844 6.53393 20.4844 11.5C20.4844 16.4653 16.4661 20.4844 11.5 20.4844C6.5347 20.4844 2.51562 16.4661 2.51562 11.5C2.51562 6.5347 6.53393 2.51562 11.5 2.51562ZM17.7982 8.36746L16.7859 7.34693C16.5762 7.13557 16.2349 7.13418 16.0235 7.34387L9.67375 13.6426L6.98778 10.9349C6.77813 10.7235 6.43681 10.7221 6.22545 10.9318L5.20487 11.9441C4.99352 12.1538 4.99212 12.4951 5.20182 12.7065L9.27987 16.8176C9.48952 17.0289 9.83084 17.0303 10.0422 16.8206L17.7952 9.12983C18.0065 8.92014 18.0079 8.57882 17.7982 8.36746Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1_359">
                                        <rect width="23" height="23" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            100% trustworthy company
                        </li>
                        <li class="text-white fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23"
                                fill="none">
                                <g clip-path="url(#clip0_1_359)">
                                    <path
                                        d="M11.5 0.359375C5.34719 0.359375 0.359375 5.34719 0.359375 11.5C0.359375 17.6528 5.34719 22.6406 11.5 22.6406C17.6528 22.6406 22.6406 17.6528 22.6406 11.5C22.6406 5.34719 17.6528 0.359375 11.5 0.359375ZM11.5 2.51562C16.4653 2.51562 20.4844 6.53393 20.4844 11.5C20.4844 16.4653 16.4661 20.4844 11.5 20.4844C6.5347 20.4844 2.51562 16.4661 2.51562 11.5C2.51562 6.5347 6.53393 2.51562 11.5 2.51562ZM17.7982 8.36746L16.7859 7.34693C16.5762 7.13557 16.2349 7.13418 16.0235 7.34387L9.67375 13.6426L6.98778 10.9349C6.77813 10.7235 6.43681 10.7221 6.22545 10.9318L5.20487 11.9441C4.99352 12.1538 4.99212 12.4951 5.20182 12.7065L9.27987 16.8176C9.48952 17.0289 9.83084 17.0303 10.0422 16.8206L17.7952 9.12983C18.0065 8.92014 18.0079 8.57882 17.7982 8.36746Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1_359">
                                        <rect width="23" height="23" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            Most Genuine and transparent
                        </li>
                    </ul>
                </div>
                <div class=" col-md-5 offset-md-1">
                    <form class="hero-form p-5"  action ="{{route('user.save')}}" method="POST">
                        <h3>Registration Users</h3>  

                        @if(session("message"))
                        <div
                            class="alert alert-success alert-dismissible fade show"
                            role="alert"
                        >
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="alert"
                                aria-label="Close"
                            ></button>
                            <strong>Excelent Registration!</strong> {{session("message")}}
                        </div>
                        @endif
                        @csrf
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label mb-0">First Name</label>
                            <input type="text" name="firstname" class="form-control border-0" id="exampleInputEmail1"> 
                            <p class="form-text text-muted ">{{$errors->first('firstname')}}</p>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail2" class="form-label mb-0">Last Name</label>
                            <input type="text" name="lastname" class="form-control border-0" id="exampleInputEmail2"> 
                            <p class="form-text text-muted">{{$errors->first('lastname')}}</p>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail3" class="form-label mb-0">Email</label>
                            <input type="email" name="email" class="form-control border-0" id="exampleInputEmail3"> 
                            <p class="form-text text-muted">{{$errors->first('email')}}</p>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail4" class="form-label mb-0">Password</label>
                            <input type="password" name="password" class="form-control border-0" id="exampleInputEmail4">
                            <p class="form-text text-muted">{{$errors->first('password')}}</p>
                        </div>  
                        <div class="mb-3">
                            <label for="exampleInputEmail4" class="form-label mb-0">Repeat Password</label>
                            <input type="password" name="password_confirmation" class="form-control border-0" id="exampleInputEmail4">
                            <p class="form-text text-muted">{{$errors->first('password_confirmation')}}</p>
                        </div> 

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Send data </button>
                        </div>
                    </form>
                </div>
            </div> 

           
            
@stop