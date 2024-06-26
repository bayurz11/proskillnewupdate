<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="ProSkill Akademia - Lembaga kursus komputer terbaik untuk pengembangan kemampuan teknologi Anda. Temukan layanan kursus yang dipersonalisasi dan berorientasi pada kebutuhan Anda.">
    <meta name="keywords"
        content="Proskill, Proskill Akademia, teknologi komputer, kursus komputer, proskill akademia, proskill, kursus komputer tanjungpinang">
    <meta name="author" content="Lembaga kursus komputer | ProSkill Akademia">
    <meta property="og:type" content="website">
    <meta property="og:title" content="ProSkill Akademia - Lembaga kursus komputer terbaik">
    <meta property="og:description"
        content="ProSkill Akademia adalah lembaga kursus komputer terkemuka yang menyediakan layanan kursus terbaik dalam pengembangan keterampilan teknologi.">
    <meta property="og:image" content="assets/img/preview-banner.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://proskill.sch.id/">
    @include('layout.partials.admin.head_admin')
    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets_admin/images/favicon.png" />
</head>

<body>
    <div class="main-wrapper">
        @include('layout.partials.admin.nav_admin')
        <div class="page-wrapper">
            @include('layout.partials.admin.header_admin')
            @yield('content')
            @include('layout.partials.admin.footer_admin-scripts')
        </div>
    </div>
</body>

</html>
