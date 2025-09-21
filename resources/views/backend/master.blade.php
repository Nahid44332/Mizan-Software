<!doctype html>
<html lang="en">
<!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title> Dashboard</title>

    @include('backend.includes.style')
    <style>
<style>
.content-wrapper {
    padding: 20px;
    transition: margin 0.3s ease, width 0.3s ease;
}

.sidebar-collapsed .content-wrapper {
    margin-left: 20px; /* left এ ছোট gap */
    width: auto;
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
