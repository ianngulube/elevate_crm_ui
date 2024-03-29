     <!-- Example DataTable for Dashboard Demo-->
     <div class="card mb-4">
        <div class="card-header">Member Contributions Overview</div>
        <a style="float: right; margin:5px" class="btn btn-bg btn-primary text-white"
                href="{{ url('admin/contributions/add/' . $member->id) }}" role="button">+Add Transaction</a>
                <a style="float: right; margin:5px" class="btn btn-bg btn-primary text-white"
                href="{{ url('admin/contributions/add/' . $member->id) }}" role="button">Member Statement</a>
               
               
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
                <div style="text-align: center;">
                    <h7> Total Payments: (R) {{ number_format($contributionsSum, 2, '.', ',') }} </h7>
                     <hr>   
                  
                  
                     </div>
 
                </tfoot>
                <tbody>
                    @foreach ($contributions as $contribution)
                            <tr>
                                <td>{{ $contribution->payment_date }}</td>
                                <td>{{ $contribution->type }}</td>
                                <td>{{ $contribution->bank_name }}</td>
                                <td>{{ $contribution->amount }}</td>
                                <td>{{ $contribution->payment_reference }}</td>
                            </tr>
                        @endforeach

                </tbody>
            </table>
        </div>
    </div>
