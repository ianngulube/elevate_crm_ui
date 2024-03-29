     <!-- Example DataTable for Dashboard Demo-->
     <div class="card mb-4">
        <div class="card-header">Personal Information</div>
        <div class="card-body">
            <table class="table table-sm">
                <tbody>


                    <tr>
                        <th scope="row">Firstname</th>
                        <td>{{ $member->firstname }}</td>
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
                        <th scope="row">ID / Passport Number</th>
                        <td>{{ $member->id_number }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Tax Number</th>
                        <td>{{ $member->passport_number }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Source of Funds</th>
                        <td>{{ $member->gender }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Alive / Deceased Status</th>
                        <td>{{ $member->marital_status }}</td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>
