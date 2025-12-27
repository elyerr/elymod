<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Elymod – Admin</title>

    <link nonce={{ $nonce }} href="{{ asset('third-party/{{ module }}/css/app.css') }}" rel="stylesheet">

    <x-{{ module }}-translator />
    @inertiaHead
</head>
<body>
    @inertia
    <script nonce={{ $nonce }} src="{{ asset('third-party/{{ module }}/js/app.js') }}"></script>
</body>

</html>
