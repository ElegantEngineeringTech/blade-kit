<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue Kit</title>

    <script defer src="https://cdn.jsdelivr.net/npm/iconify-icon@2.3.0/dist/iconify-icon.min.js"></script>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    {{ Vite::useHotFile('vendor/blade-kit/blade-kit.hot')->useBuildDirectory('vendor/blade-kit')->withEntryPoints(['workbench/resources/js/app.ts']) }}
</head>

<body class="bg-gray-100 antialiased">
    <div id="app"></div>
</body>

</html>
