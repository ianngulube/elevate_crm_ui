     <!-- Example DataTable for Dashboard Demo-->
     <div class="card mb-4">
        <div class="card-header">Documents Overview</div>
        <a style="float: right; margin:5px" class="btn btn-bg btn-primary text-white"
        href="{{ url('admin/documents/add/' . $member->id) }}" role="button">+Add Document</a>
        <div class="card-body">
            <table id="dtDocuments">
                <thead>
                    <tr>
                        <th scope="col">Document Type</th>
                        <th scope="col">Date loaded</th>
                        <th scope="col">Uploaded By</th>
                        <th scope="col">Document</th>
                    </tr>
                </thead>
                <tfoot>

                </tfoot>
                <tbody>
                    @foreach ($documents as $document)
                    <tr>
                        <td>{{ $document->type }}</td>
                        <td>{{ $document->created_at }}</td>
                        <td>{{ $document->user->name }}</td>
                        <td>
                          <a class="btn btn-info" href="{{ asset('uploads/' . $document->document_url) }}" target="_blank"> View Document</a>
                        </td>
                      </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
