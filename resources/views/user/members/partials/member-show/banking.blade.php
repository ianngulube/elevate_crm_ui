     <!-- Example DataTable for Dashboard Demo-->
     <div class="card mb-4">
        <div class="card-header">Banking Overview</div>
        <a style="float: right; margin:5px" class="btn btn-bg btn-primary text-white"
        href="{{ url('admin/bank-accounts/add/' . $member->id) }}" role="button">+Add Bank</a>
        <div class="card-body">
            <table id="dtBanking">
                <thead>
                    <tr>
                        <th scope="col">Beneficiary Name</th>
                        <th scope="col">Bank Name</th>
                        <th scope="col">Account Number</th>
                        <th scope="col">Account Type</th>
                        <th scope="col">Branch Code</th>
                      </tr>
                </thead>
                <tfoot>

                </tfoot>
                <tbody>
                    @foreach ($beneficiaryAccounts as $account) <tr>
                        <td>{{ $account->beneficiary_firstname . ' ' . $account->beneficiary_surname }}
                        </td>
                        <td>{{ $account->bank_name }}</td>
                        <td>{{ $account->account_number }}</td>
                        <td>{{ $account->type }}</td>
                        <td>{{ $account->branch_code }}</td>
                      </tr> @endforeach
                </tbody>
            </table>
        </div>
    </div>
