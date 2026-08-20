<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <title>প্রোফাইল ফর্ম</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">নতুন তথ্য এন্ট্রি</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('profiles.store') }}" method="POST">
                        @csrf
                        <div class="mb-2">
                            <label>নাম:</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-2">
                            <label>ইমেইল:</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-2">
                            <label>বয়স:</label>
                            <input type="number" name="age" class="form-control" required>
                        </div>
                        <div class="mb-2">
                            <label>ঠিকানা:</label>
                            <textarea name="address" class="form-control" required></textarea>
                        </div>
                        <div class="mb-2">
                            <label>ফোন নম্বর:</label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>NID নম্বর:</label>
                            <input type="text" name="nid" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">সাবমিট করুন</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>