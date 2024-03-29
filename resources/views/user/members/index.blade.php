@extends('layouts.elevate')
@section('content')

<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container-xl px-4">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="users"></i></div>
                        Member :
                    </h1>
                    <div class="page-header-subtitle">
                        {{ $member->firstname . ' ' . $member->surname . ' [ Number ]:' . $member->membership_number }}</div>
                </div>

                <div class="col-12 col-xl-auto mt-4">
                    <div class="input-group input-group-joined border-0" style="width: 16.5rem">
                        <a class="zmdi zmdi-edit btn btn-md btn-white text-primary " href="{{ route('admin.members.edit', $member->id) }}"
                            role="button">Member Mantainance</a>
                    </div>
                </div>
           
            
            </div>
        </div>
    </div>
</header>


    <br>
   <p class="text-danger">Please  note  that your  membersip  is  not  active  </p>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5>Personal Information</h5>
                        <div class="table">
                            <table class="table table-sm">
                                <tbody>
                                    <tr>
                                        <th scope="row">Member Number</th>
                                        <td>{{ $member->membership_number }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Title</th>
                                        <td>{{ $member->title }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Firstname</th>
                                        <td>{{ $member->firstname }}
                                    </tr>
                                    <tr>
                                        <th scope="row">Surname</th>
                                        <td>{{ $member->surname }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Date of Birth</th>
                                        <td>{{ $member->dob }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ID Number</th>
                                        <td>{{ $member->id_number }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Passport Number</th>
                                        <td>{{ $member->passport_number }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Gender</th>
                                        <td>{{ $member->gender }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Alive / Deceased Status</th>
                                        <td>{{ $member->marital_status }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Profession</th>
                                        <td>{{ $member->profession }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5>Contact Details</h5>
                        <div class="table">
                            <table class="table table-sm">
                                <tbody>
                                    <tr>
                                        <th scope="row">Mobile</th>
                                        <td>{{ $member->cellphone_number }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Office</th>
                                        <td>{{ $member->office_number }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Home</th>
                                        <td>{{ $member->home_number }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email</th>
                                        <td>{{ $member->email }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Website</th>
                                        <td>{{ $member->website }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Address </th>
                                        <td>{{ $member->address_line1 }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Town</th>
                                        <td>{{ $member->address_line2 }}</td>
                                    <tr>                                       
                                    <tr>
                                        <th scope="row">City</th>
                                        <td>{{ $member->city }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Postal Code</th>
                                        <td>{{ $member->postal_code }}</td>
                                    </tr>    
                                    <tr>
                                        <th scope="row">Province</th>
                                        <td>{{ $member->province }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5>Product Information</h5>
                        <div class="table">
                            <table class="table table-sm">
                                <tbody>
                                    <tr>
                                        <th scope="row">Status</th>
                                        <td>{{ $member->status }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Product Name</th>
                                        <td>{{ $member->member_type }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Underwriter</th>
                                        <td>{{ $member->member_type }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Membership Date</th>
                                        <td>{{ $member->membership_date }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Reference # </th>
                                        <td>{{ $member->id_number }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">System Date</th>
                                        <td>{{ $member->created_at }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5>Next of Kin Details</h5>
                        <div class="table">
                            <table class="table table-sm">
                                <tbody>
                                    <tr>
                                        <th scope="row">Firstname</th>
                                        <td>{{ $member->next_of_kin_firstname }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Surname</th>
                                        <td>{{ $member->next_of_kin_surname }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Contact Number</th>
                                        <td>{{ $member->next_of_kin_phone }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email Address</th>
                                        <td>{{ $member->next_of_kin_email }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Office Address Line 1</th>
                                        <td>{{ $member->office_address_line1 }}</td>
                                    </tr> 
                                    <tr>
                                        <th scope="row">Province</th>
                                        <td>{{ $member->province }}</td>
                                    </tr>                                 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <hr>
        <!--  small  div  for button -->
        <div class="row col-lg-12">
            <div class="row col-lg-12">
        <a class="btn btn-md btn-primary" href=""
            role="button">Upload ID</a> 
            </div>
            <hr>
            <div class="row col-lg-12">
                <a class="btn btn-md btn-primary" href=""
                    role="button">Upload Signed Membership Form</a> 
            </div> 
            <hr>
            <div class="row col-lg-12">
                <a class="btn btn-md btn-primary" href=""
                    role="button">Upload Proof of Residance</a> 
            </div>                   
        </div>
        <br>
     @endsection
