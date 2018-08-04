<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>后天管理</title>
        <!-- Mobile specific metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Force IE9 to render in normal mode -->
        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
        <meta name="author" content="SuggeElson" />
        <meta name="description" content=""
        />
        <meta name="keywords" content=""
        />
        <meta name="application-name" content="sprFlat admin template" />
        <!-- Import google fonts - Heading first/ text second -->
        <link rel='stylesheet' type='text/css'
        <!--[if lt IE 9]>

        <!-- <![endif]--> -->
        <!-- Css files -->
        <!-- Icons -->
        <link href="{{asset('admin')}}/css/icons.css" rel="stylesheet" />
        <!-- jQueryUI -->
        <link href="{{asset('admin')}}/css/sprflat-theme/jquery.ui.all.css" rel="stylesheet" />
        <!-- Bootstrap stylesheets (included template modifications) -->
        <link href="{{asset('admin')}}/css/bootstrap.css" rel="stylesheet" />
        <!-- Plugins stylesheets (all plugin custom css) -->
        <link href="{{asset('admin')}}/css/plugins.css" rel="stylesheet" />
        <!-- Main stylesheets (template main css file) -->
        <link href="{{asset('admin')}}/css/main.css" rel="stylesheet" />
        <!-- Custom stylesheets ( Put your own changes here ) -->
        <link href="{{asset('admin')}}/css/custom.css" rel="stylesheet" />
        <link href="{{asset('admin')}}/css/jquery-ui.css" rel="stylesheet" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('admin')}}/img/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('admin')}}/img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('admin')}}/img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="{{asset('admin')}}/img/ico/apple-touch-icon-57-precomposed.png">
        <link rel="icon" href="{{asset('admin')}}/img/ico/favicon.ico" type="image/png">
        <!-- Windows8 touch icon ( http://www.buildmypinnedsite.com/ )-->
        <style type="text/css">
            @yield('css')
        </style>
        @yield('link')
        <meta name="msapplication-TileColor" content="#3399cc" />
    </head>
    <body>
        <!-- Start #header -->
        @include('public/admin_header')
        <!-- End #header -->
        <!-- Start #sidebar -->
        @include('public/admin_sidebar')
        <!-- End #sidebar -->
        <!-- Start #right-sidebar -->
        @include('public/admin_right-sidebar')
        <!-- End #right-sidebar -->
        <!-- Start #content -->
        @yield('content')
        <!-- End #content -->
        <!-- Javascripts -->
        <!-- Load pace first -->
        <script src="{{asset('admin')}}/plugins/core/pace/pace.min.js"></script>
        <!-- Important javascript libs(put in all pages) -->
        <script src="{{asset('admin')}}/js/jquery-1.8.3.min.js"></script>
        <script>
        window.jQuery || document.write('<script src="{{asset('admin')}}/js/libs/jquery-2.1.1.min.js">\x3C/script>')
        </script>
        <script src="{{asset('admin')}}/js/jquery-ui.js"></script>
        <script>
        window.jQuery || document.write('<script src="{{asset('admin')}}/js/libs/jquery-ui-1.10.4.min.js">\x3C/script>')
        </script>
        <!--[if lt IE 9]>
  <script type="text/javascript" src="{{asset('admin')}}/js/libs/excanvas.min.js"></script>
  <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <script type="text/javascript" src="{{asset('admin')}}/js/libs/respond.min.js"></script>
<![endif]-->
        <!-- Bootstrap plugins -->
        <script src="{{asset('admin')}}/js/bootstrap/bootstrap.js"></script>
        <!-- Core plugins ( not remove ever) -->
        <!-- Handle responsive view functions -->
        <script src="{{asset('admin')}}/js/jRespond.min.js"></script>
        <!-- Custom scroll for sidebars,tables and etc. -->
        <script src="{{asset('admin')}}/plugins/core/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="{{asset('admin')}}/plugins/core/slimscroll/jquery.slimscroll.horizontal.min.js"></script>
        <!-- Resize text area in most pages -->
        <script src="{{asset('admin')}}/plugins/forms/autosize/jquery.autosize.js"></script>
        <!-- Proivde quick search for many widgets -->
        <script src="{{asset('admin')}}/plugins/core/quicksearch/jquery.quicksearch.js"></script>
        <!-- Bootbox confirm dialog for reset postion on panels -->
        <script src="{{asset('admin')}}/plugins/ui/bootbox/bootbox.js"></script>
        <!-- Other plugins ( load only nessesary plugins for every page) -->

        @yield('js')

    </body>
</html>
