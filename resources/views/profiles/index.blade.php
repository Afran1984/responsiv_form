<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <title>প্রোফাইল তালিকা</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>সব প্রোফাইলের তালিকা</h2>
        <a href="{{ route('profiles.create') }}" class="btn btn-success">নতুন প্রোফাইল যোগ করুন</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>নাম</th>
                <th>ইমেইল</th>
                <th>বয়স</th>
                <th>ঠিকানা</th>
                <th>ফোন</th>
                <th>NID</th>
            </tr>
        </thead>
        <tbody>
            @forelse($profiles as $profile)
                <tr>
                    <td>{{ $profile->id }}</td>
                    <td>{{ $profile->name }}</td>
                    <td>{{ $profile->email }}</td>
                    <td>{{ $profile->age }}</td>
                    <td>{{ $profile->address }}</td>
                    <td>{{ $profile->phone }}</td>
                    <td>{{ $profile->nid }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">কোনো ডাটা পাওয়া যায়নি!</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>