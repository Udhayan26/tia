<!DOCTYPE html>
<html lang="ta">
<head>
    <meta charset="UTF-8">
    <title>Tamil Inscriptions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center">தமிழ் கல்வெட்டு ஆவணங்கள்</h1>
        <div id="div-dashboard" class="card p-4 shadow-sm mt-4">
            Loading analytics...
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $.get('/api/dashboard', function(data) {
                $('#div-dashboard').html('Total Inscriptions: ' + data.total_inscriptions);
            });
        });
    </script>
</body>
</html>
