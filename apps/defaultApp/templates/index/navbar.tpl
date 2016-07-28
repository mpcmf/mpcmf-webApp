<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Default App Logo{if isset($_title) && !empty($_title)}: {$_title}{/if}</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- /.navbar-header -->

        {include file="./navbar/topPanel.tpl"}
    </div>



    {*{include file="./navbar/sideBar.tpl"}*}
</nav>