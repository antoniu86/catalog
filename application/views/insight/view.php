<ol class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li><a href="/insights/list_all">Noutati</a></li>
    <li class="active"><?php echo $selected_insight->short_title(); ?></li>
</ol>

<div class="row">
    <div class="col-md-12">
        <?php if ($user->sys() || $user->admin()): ?>
            <a href="/insight/edit/<?php echo $selected_insight->id; ?>" class="btn btn-primary btn-sm">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;&nbsp;Modifica
            </a>
            <br><br>
        <?php endif; ?>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <table class="table table-striped table-bordered table-condensed table-responsive table-hover">
            <thead>
                <tr>
                    <th colspan="2">Noutate</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Titlu</td>
                    <td><?php echo $selected_insight->title; ?></td>
                </tr>
                
                <tr>
                    <td>Publicat la</td>
                    <td><?php echo $selected_insight->created_at; ?></td>
                </tr>

                <tr>
                    <td>Continut</td>
                    <td><?php echo $selected_insight->text; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
