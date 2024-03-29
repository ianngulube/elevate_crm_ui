     <!-- Example DataTable for Dashboard Demo-->
     <div class="card mb-4">
        <div class="card-header">Notes Overview</div>
        <a style="float: right; margin:5px" class="btn btn-bg btn-primary text-white"
        href="{{ url('admin/notes/add/' . $member->id) }}" role="button">+Add Note</a>
        <div class="card-body">
            <table id="dtNotes">
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Created By</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tfoot>

                </tfoot>
                <tbody>
                    @foreach ($notes as $note)
                                    <tr>
                                        <td>{{ $note->created_at }}</td>
                                        <td>{{ $note->user->name }}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#ex{{$note->id }}">
                                                View Note
                                               </button>

                                               <!-- Modal -->
                                               <div class="modal fade" id="ex{{$note->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                 <div class="modal-dialog">
                                                   <div class="modal-content">
                                                     <div class="modal-header">


                                                     </div>
                                                     <div class="card-body" >
                                                      {!! $note->description !!}
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
