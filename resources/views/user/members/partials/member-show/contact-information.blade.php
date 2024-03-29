     <!-- Example DataTable for Dashboard Demo-->
     <div class="card mb-4">
        <div class="card-header">Contact Info Overview</div>
        <div class="card-body">
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
