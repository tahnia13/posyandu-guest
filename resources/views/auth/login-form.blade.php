<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body { font-family: Arial; background: #f5f5f5; display: flex; justify-content: center; align-items: center; height: 100vh; }
        .login-box { background: white; padding: 25px; border-radius: 8px; width: 320px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h2 { text-align: center; margin-bottom: 20px; color: #333; }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input { width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ccc; border-radius: 4px; }
        button { margin-top: 15px; padding: 10px; width: 100%; background: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background: #45a049; }
        .error { color: red; font-size: 13px; margin-top: 3px; }
        .success { color: green; font-size: 14px; margin-top: 10px; text-align:center; }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>🔐 Login</h2>

        <div id="alert"></div>

        <form id="loginForm">
            <label>Username</label>
            <input type="text" name="username">

            <label>Password</label>
            <input type="password" name="password">

            <button type="submit">Login</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#loginForm').on('submit', function(e) {
            e.preventDefault();

            let formData = {
                username: $('input[name="username"]').val(),
                password: $('input[name="password"]').val(),
            };

            $.ajax({
                url: "{{ route('auth.login') }}",
                method: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.status === 'success') {
                        $('#alert').html('<p class="success">' + response.message + '</p>');
                        setTimeout(() => window.location.href = '/berhasil', 1000);
                    } else {
                        $('#alert').html('<p class="error">' + response.message + '</p>');
                    }
                },
                error: function(xhr) {
                    const res = xhr.responseJSON;
                    let msg = '';
                    if (res && res.errors) {
                        Object.values(res.errors).forEach(errArr => {
                            msg += '<p class="error">' + errArr[0] + '</p>';
                        });
                    } else {
                        msg = '<p class="error">Terjadi kesalahan.</p>';
                    }
                    $('#alert').html(msg);
                }
            });
        });
    </script>
</body>
</html>
