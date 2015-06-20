<nav class="navbar navbar-default">
    <div class="navbar-header">
        <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
    </div>

    <div class="navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <?php if ($user->sys()): ?>
                <li><a href="/schools/list_all">Scoli</a></li>
            <?php endif; ?>

            <?php if (!$user->sys()): ?>
                <li><a href="/school/view/<?php echo $school->id; ?>">Scoala</a></li>
            <?php endif; ?>

            <?php if ($user->admin()): ?>
                <li><a href="/subjects/list_all">Materii</a></li>
                <li><a href="/teachers/list_all">Profesori</a></li>
                <li><a href="/students/list_all">Elevi</a></li>
                <li><a href="/years/list_all">Ani scolari</a></li>
                <li><a href="/insights/list_all">Noutati</a></li>
            <?php endif; ?>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="/user/view/<?php echo $user->id; ?>"><?php echo $user->full_name(); ?></a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="caret"></span></a>

                <ul class="dropdown-menu" role="menu">
                    <li><a href="/user/edit/<?php echo $user->id; ?>">Edit</a></li>
                    <li class="divider"></li>
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>