     <!-- Example DataTable for Dashboard Demo-->
     <div class="card mb-4">
        <div class="card-header">Communication Overview</div>
        <a style="float: right; " class="btn btn-bg btn-primary text-white"
        href="{{ url('admin/sms/send/' . $member->id) }}" role="button">+Send SMS</a>
        <div class="card-body">
            <table id="dtCommunication">
                <thead>
                    <tr>
                        <th scope="col">Date Sent</th>
                        <th scope="col">MSISDN</th>
                        <th scope="col">Sent By</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tfoot>

                </tfoot>
                <tbody>
                    @foreach ($smses as $sms)

                    <tr>
                        <td>{{ $sms->created_at }}</td>
                        <td>{{ $sms->msisdn }}</td>
                        <td>{{ $sms->user_name }}</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#ss{{$sms->id }}">
                                View More
                               </button>

                               <!-- Modal -->
                               <div class="modal fade" id="ss{{$sms->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                 <div class="modal-dialog">
                                   <div class="modal-content">
                                     <div class="modal-header">
                                        {{ $sms->created_at }}


                                     </div>
                                     <div class="card-body" >
                                      {!! $sms->textMessage !!}
                                     </div>
                                     <div class="modal-footer">

                                       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                     </div>
                                   </div>
                                 </div>
                               </div>
                        </td>


                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
