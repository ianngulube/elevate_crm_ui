     <!-- Example DataTable for Dashboard Demo-->
     <div class="card mb-4">
        <div class="card-header">Cashflow Overview</div>
        <div class="card-body">
            <table id="dtCashflow">
                <thead>
                    <tr>
                        <th scope="col">Payment Date</th>
                        <th scope="col">Payment Reference</th>
                        <th scope="col">Payment Reason</th>
                        <th scope="col">Amount (ZAR)</th>
                        <th scope="col">Type</th>
                        <th scope="col">Beneficiary Name</th>
                        <th scope="col">Beneficiary Surname</th>
                        <th scope="col">Bank Name</th>
                        <th scope="col">Account Number</th>
                    </tr>
                </thead>
                <tfoot>

                </tfoot>
                <tbody>
                    @foreach ($cashflows as $cashflow)

                    <tr>
                        <td>{{ $cashflow->payment_date }}</td>
                        <td>{{ $cashflow->reference }}</td>
                        <td>{{ $cashflow->payment_reason }}</td>
                        <td>{{ $cashflow->amount }}</td>
                        <td>{{ $cashflow->type }}</td>
                        <td>{{ $cashflow->beneficiary_firstname }}</td>
                        <td>{{ $cashflow->beneficiary_surname }}</td>
                        <td>{{ $cashflow->bank_name }}</td>
                        <td>{{ $cashflow->account_number }}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
