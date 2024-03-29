     <!-- Example DataTable for Dashboard Demo-->
     <div class="card mb-4">
        <div class="card-header">Member Contributions Overview</div>
        <a style="float: right; margin:5px" class="btn btn-bg btn-primary text-white"
                href="{{ url('admin/contributions/add/' . $member->id) }}" role="button">+Add Contribution</a>
        <div class="card-body">
            <table id="dtTransactions">
                <thead>
                    <tr>
                        <th scope="col">Transaction Date</th>
                        <th scope="col">Transaction Reference</th>
                        <th scope="col">Bank</th>
                        <th scope="col">Amount (ZAR)</th>
                        <th scope="col">Transaction Type</th>
                    </tr>
                </thead>
                <tfoot>

                <hr>
                <h5> Opening Balance (R) {{ number_format($contributionsSum, 2, '.', ',') }} | Contributions (R) {{ number_format($contributionsSum, 2, '.', ',') }} | Outstanding (R) {{ number_format($contributionsSum, 2, '.', ',') }}| Penalty Fees (R) {{ number_format($contributionsSum, 2, '.', ',') }}| Admin Fees (R) {{ number_format($contributionsSum, 2, '.', ',') }}</h5>
                    
                <hr>
                </tfoot>
                <tbody>
                    @foreach ($contributions as $contribution)
                            <tr>
                                <td>{{ $contribution->payment_date }}</td>
                                <td>{{ $contribution->payment_reference }}</td>
                                <td>{{ $contribution->bank_name }}</td>
                                <td>{{ $contribution->amount }}</td>
                                <td>{{ $contribution->type }}</td>
                            </tr>
                        @endforeach

                </tbody>
            </table>
        </div>
    </div>
