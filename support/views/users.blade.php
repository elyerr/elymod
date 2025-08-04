<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .copyable {
            cursor: pointer;
            user-select: none;
        }
    </style>
</head>

<body>

    <div class="container py-5">
        <h1 class="mb-4">System Users</h1>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <span class="navbar-brand">Admin Panel</span>
                <div class="d-flex ms-auto">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-outline-light">Logout</button>
                    </form>
                </div>
            </div>
        </nav>


        <!-- GSR ID quick registration form -->
        <div class="card mb-4">
            <div class="card-header">Quick Register GSR ID</div>
            <div class="card-body">
                <form method="POST" action="{{ route('scopes.store') }}">
                    @csrf
                    <div class="row g-3 align-items-center">
                        <div class="col-md-10">
                            <label for="gsr_id" class="form-label">GSR ID</label>
                            <input type="text" class="form-control" id="gsr_id" name="gsr_id"
                                placeholder="Enter new GSR ID" required>
                        </div>
                        <div class="col-md-2 d-grid mt-4">
                            <button type="submit" class="btn btn-success">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <!-- Scope assignment form -->
        <div class="card mb-4">
            <div class="card-header">Assign a Scope to a User</div>
            <div class="card-body">
                <form method="POST" action="{{ route('users.scopes') }}">
                    @csrf
                    <div class="row g-3 align-items-center">
                        <div class="col-md-5">
                            <label for="user_id" class="form-label">Select User</label>
                            <select class="form-select" id="user_id" name="user_id" required>
                                <option value="" selected disabled>-- Select a user --</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }} {{ $user->last_name }}
                                        ({{ $user->email }})
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-5">
                            <label for="scope_id" class="form-label">Select Scope</label>
                            <select class="form-select" id="scope_id" name="scope_id" required>
                                <option value="" selected disabled>-- Select a scope --</option>
                                @foreach ($scopes as $scope)
                                    <option value="{{ $scope->id }}">{{ $scope->gsr_id }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-2 d-grid mt-4">
                            <button type="submit" class="btn btn-primary">Assign</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- User Table -->
        @if (count($users) > 0)
            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Email Verified</th>
                            <th>API Token</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->email_verified_at }}</td>
                                <td>
                                    @if ($user->api_token)
                                        <code class="copyable text-primary"
                                            onclick="copyToClipboard(this, '{{ $user->api_token }}')"
                                            data-bs-toggle="tooltip" data-bs-title="Click to copy">
                                            {{ \Illuminate\Support\Str::limit($user->api_token, 30) }}
                                        </code>
                                    @else
                                        <span class="text-muted">N/A</span>
                                    @endif
                                </td>
                            </tr>
                            @if ($user->scopes->count())
                                <tr class="table-secondary">
                                    <td colspan="5">
                                        <strong>GSR IDs:</strong>
                                        @foreach ($user->scopes as $scope)
                                            <span class="badge bg-info text-dark">{{ $scope->gsr_id }}</span>
                                        @endforeach
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="alert alert-warning">
                No users found.
            </div>
        @endif
    </div>

    <!-- Bootstrap 5 JS + Tooltip Init -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Initialize tooltips
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        tooltipTriggerList.forEach(el => {
            new bootstrap.Tooltip(el);
        });

        function copyToClipboard(el, fullToken) {
            navigator.clipboard.writeText(fullToken).then(() => {
                const tooltip = bootstrap.Tooltip.getInstance(el);
                tooltip.setContent({
                    '.tooltip-inner': 'Copied!'
                });
                tooltip.show();
                setTimeout(() => {
                    tooltip.setContent({
                        '.tooltip-inner': 'Click to copy'
                    });
                }, 1500);
            });
        }
    </script>

</body>

</html>
