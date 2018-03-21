<div class="span8">
    <?foreach($posts as $post):?>
    <h1><?=$post['post_subject']?></h1>
    <p><?=$post['post_text']?></p>
    <div>
        <span class="badge badge-success"><?=$post['post_created']?></span><div class="pull-right"><span class="label">alice</span> <span class="label">story</span> <span class="label">blog</span> <span class="label">personal</span></div
    </div>
    <?endforeach?>
</div>