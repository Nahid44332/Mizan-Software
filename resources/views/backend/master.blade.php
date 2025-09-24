<!doctype html>
<html lang="en">
<!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title> Dashboard</title>

    @include('backend.includes.style')
<style>
/* Sidebar always full height */
.sidebar {
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    overflow-y: auto;
    z-index: 1000;
}

/* Main wrapper যাতে sidebar-এর height অনুযায়ী adjust হয় */
.app-main {
    margin-left: 250px; /* default sidebar width */
    padding: 20px;
    transition: margin-left 0.3s ease;
    min-height: 100vh;
    box-sizing: border-box;
}

/* যখন sidebar collapse হবে */
body.sidebar-collapsed .app-main {
    margin-left: 70px; /* শুধু icon-এর জায়গা */
    width: calc(100% - 70px);
}

/* Small devices fix */
@media (max-width: 768px) {
    .app-main {
        margin-left: 70px;
        width: calc(100% - 70px);
        padding: 10px;
    }
    body.sidebar-collapsed .app-main {
        margin-left: 70px;
        width: calc(100% - 70px);
    }
}


@media (max-width: 991px) {
    .content-wrapper {
        margin-left: 0 !important; /* sidebar overlay বা hide হলে */
        padding: 10px;
    }
}
</style>

</head>
<!--end::Head-->
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">

        @include('backend.includes.navbar')
        @include('backend.includes.sidebar')
        <!--begin::App Main-->
        <main class="app-main">

            @yield('content')

        </main>
        <!--end::App Main-->

    </div>
    <!--end::App Wrapper-->

    @include('backend.includes.script')
    <script>
document.addEventListener("DOMContentLoaded", function () {
    const toggleBtn = document.getElementById("toggle_btn");
    const body = document.querySelector("body");

    if (toggleBtn) {
        toggleBtn.addEventListener("click", function () {
            body.classList.toggle("sidebar-collapsed");
        });
    }
});

</script>

@stack('script')
</body>
<!--end::Body-->

</html>
