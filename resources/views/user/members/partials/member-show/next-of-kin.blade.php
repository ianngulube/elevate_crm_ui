     <!-- Example DataTable for Dashboard Demo-->
     <div class="card mb-4">
        <div class="card-header">Next Of Kin Overview</div>
        <div class="card-body">
            <table class ="table table-sm" id="dtNextOfKin">
                <thead>

                </thead>
                <tfoot>

                </tfoot>
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

                </tbody>
            </table>
        </div>
    </div>
