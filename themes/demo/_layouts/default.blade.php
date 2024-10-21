---
description: Default layout
---
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="{{ App::getLocale() }}">
<head>
    @partial('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="d-flex flex-column h-100 {{ $this->page->bodyClass }}">
    <header id="main-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="logo">
                        <a class="" href="{{ page_url('home') }}">
                            <i class="fas fa-utensils"></i> @lang($this->page->title)
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="page-wrapper" class="content-area">
        @page
    </div>

    <footer id="page-footer mt-auto">
        @partial('footer')
    </footer>
    <script type="text/javascript" src="{{ asset('app/admin/assets/js/admin.js') }}" id="app-js"></script>
    {!! get_script_tags(a) !!}</body>
</html>
