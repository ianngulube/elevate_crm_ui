     <!-- Example DataTable for Dashboard Demo-->
     <div class="card mb-4">
        <div class="card-header">Tasks Overview</div>
        <a style="float: right; margin:5px" class="btn btn-bg btn-primary text-white"
                                href="{{ route('admin.member-tasks.create') }}" role="button">+Log Task</a>
        <div class="card-body">
            <table id="dtTasks">
                <thead>
                    <tr>
                        <th scope="col">Created At</th>
                        <th scope="col">Created By</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Description</th>
                        <th scope="col">Status</th>
                        <th scope="col">Channel</th>
                        <th scope="col">Due Date</th>
                    </tr>
                </thead>
                <tfoot>

                </tfoot>
                <tbody>
                    @foreach ($tasks as $task)
                                    <tr>
                                        <td>{{ $task->created_at }}</td>
                                        <td>{{ $task->user_name }}</td>
                                        <td>{!! $task->name !!}</td>
                                        <td>{!! $task->description !!}</td>
                                        <td>{!! $task->status !!}</td>
                                        <td>{!! $task->priority !!}</td>
                                        <td>{!! $task->dueDate !!}</td>

                                    </tr>

                                @endforeach


                </tbody>
            </table>
        </div>
    </div>
