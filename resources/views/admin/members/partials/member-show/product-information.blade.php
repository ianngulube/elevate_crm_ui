     <!-- Example DataTable for Dashboard Demo-->
     <div class="card mb-4">
        <div class="card-header">Product Info Overview</div>
        <a style="float: right; margin:5px" class="btn btn-bg btn-primary text-white"
                href="{{ url('admin/contributions/add/' . $member->id) }}" role="button">Member Certificate</a>

        <div class="card-body">
            <table class="table table-sm">
                <tbody>
                    <tr>
                        <th scope="row">Membership Status</th>
                        <td>{{ $member->status }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Product Name</th>
                        <td>{{ $member->member_type }}</td>
                    </tr>

                    <tr>
                        <th scope="row">Membership Date</th>
                        <td>{{ $member->membership_date }}</td>
                    </tr>
                    <tr>
                        <th scope="row">System Number </th>
                        <td>{{ $member->id }}</td>
                    </tr>
                    <tr>
                        <th scope="row">System Date</th>
                        <td>{{ $member->created_at }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
