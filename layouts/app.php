<!DOCTYPE html>
<html lang="id" data-bs-theme="dark" class="scroll-behavior-smooth" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Belajar Programming Dasar'; ?></title>
    <!-- Bootstrap 5.3.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" integrity="sha384-d7R/5J+oXgLxXykjoWBBI5KG5+FQ8RuOZx5Q7zLGx7qk6VhW8s4Tjv0q3h3p9mOZ" crossorigin="anonymous">
</head>
<body class="bg-body text-body">

    <!-- HEADER & NAVIGATION (Sama seperti @include('layouts.navbar')) -->
    <?php include_once __DIR__ . '/navbar.php'; ?>

    <!-- MAIN CONTENT CONTAINER (Sama seperti @yield('content')) -->
    <main>
        <?php echo $content; ?>
    </main>

    <!-- FOOTER (Sama seperti @include('layouts.footer')) -->
    <?php include_once __DIR__ . '/footer.php'; ?>

    <!-- Bootstrap 5.3.3 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QF0sFgpzcENg2jZ4PtfxeK9ki5T2r5Z1qfzFfI7C2z8l1J9Dq7gNkxDliXqk1PzV" crossorigin="anonymous"></script>
</body>
</html>
