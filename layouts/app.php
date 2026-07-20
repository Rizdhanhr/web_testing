<!DOCTYPE html>
<html lang="id" data-bs-theme="dark" class="scroll-behavior-smooth" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Belajar Programming Dasar'; ?></title>
    <!-- Bootstrap 5.3.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body class="bg-body text-body">

    <!-- HEADER & NAVIGATION (Sama seperti @include('layouts.navbar')) -->
    <?php include __DIR__ . '/navbar.php'; ?>

    <!-- MAIN CONTENT CONTAINER (Sama seperti @yield('content')) -->
    <main>
        <?php echo $content; ?>
    </main>

    <!-- FOOTER (Sama seperti @include('layouts.footer')) -->
    <?php include __DIR__ . '/footer.php'; ?>

    <!-- Bootstrap 5.3.3 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>