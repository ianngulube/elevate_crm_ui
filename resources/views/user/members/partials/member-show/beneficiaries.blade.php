     <!-- Example DataTable for Dashboard Demo-->
     <div class="card mb-4">
        <div class="card-header">Beneficiaries Information Overview</div>
        <a style="float: right; " class="btn btn-bg btn-primary text-white"
        href="{{ url('admin/beneficiaries/add/' . $member->id) }}" role="button">+Add Beneficiary</a>
        <div class="card-body">
            <table id="dtBeneficiaries">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Surname</th>
                        <th scope="col">Relationship</th>
                        <th scope="col">Contact</th>
                        <th scope="col">ID Number</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tfoot>

                </tfoot>
                <tbody>
                    @foreach ($beneficiaries as $beneficiary)

                    <tr>
                        <td>{{ $beneficiary->beneficiary_firstname }}</td>
                        <td>{{ $beneficiary->beneficiary_surname }}</td>
                        <td>{{ $beneficiary->beneficiary_relationship }}</td>
                        <td>{{ $beneficiary->beneficiary_contact }}</td>
                        <td>{{ $beneficiary->beneficiary_id_no }}</td>
                        <td><a href="{{ url('admin/payments/add/' . $beneficiary->id) }}"
                                class="btn btn-primary text-white" type="button">+Pay Beneficiary</a></td>

                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
