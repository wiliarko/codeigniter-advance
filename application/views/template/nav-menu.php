<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/dashboard">Tutorial Codeigniter 3</a>
    </div>

    <?php $this->load->view('template/nav-right') ?>

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="/dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="/auth"><i class="fa fa-dashboard fa-fw"></i> Authentication</a>
                </li>
                <li>
                    <a href="/biodata"><i class="fa fa-dashboard fa-fw"></i> Biodata</a>
                </li>
            </ul>
        </div>
    </div>
</nav>