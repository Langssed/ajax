<!DOCTYPE html>
<html>
<head>
    <title>Laravel Pagination Pretty URL Example - ItSolutionStuff.com</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Laravel Ajax Get Request Example - ItSolutionStuff.com</h1>
        <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a 
                            href="javascript:void(0)" 
                            id="show-user" 
                            data-url="{{ route('users.show', $user->id) }}" 
                            class="btn btn-info">Show</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="userShowModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Show User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>ID:</strong> <span id="user-id"></span></p>
                    <p><strong>Name:</strong> <span id="user-name"></span></p>
                    <p><strong>Email:</strong> <span id="user-email"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            /*------------------------------------------
            When click user on Show Button
            --------------------------------------------*/
            $('body').on('click', '#show-user', function () {
                var userURL = $(this).data('url');
                $.ajax({
                    url: userURL,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#userShowModal').modal('show');
                        $('#user-id').text(data.id);
                        $('#user-name').text(data.name);
                        $('#user-email').text(data.email);
                    }
                });
            });
        });
    </script>
</body>
</html>