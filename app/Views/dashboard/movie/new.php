<form action="./create" method="post">
    <?= csrf_field() ?>

    <label for="title">Title</label>
    <input type="input" id="title" name="title" /><br />

    <label for="description">Text</label>
    <textarea name="description" id="description" cols="45" rows="4"></textarea><br />

    <input type="submit" name="submit" value="Create news item" />
</form>