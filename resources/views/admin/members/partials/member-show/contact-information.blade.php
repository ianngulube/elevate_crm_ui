     <!-- Example DataTable for Dashboard Demo-->
     <div class="card mb-4">
        <div class="card-header">Contact Information Overview</div>
        <div class="card-body">
            <table class="table table-sm">
                <tbody>
                    <tr>
                        <th scope="row">Mobile Contact Number</th>
                        <td>{{ $member->cellphone_number }}</td>
                    </tr>

                    <tr>
                        <th scope="row">Home Contact Number</th>
                        <td>{{ $member->home_number }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Email Address</th>
                        <td>{{ $member->email }}</td>
                    </tr>

                    <tr>
                        <th scope="row"> Residential Address </th>
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

                </tbody>
            </table>
        </div>
    </div>
