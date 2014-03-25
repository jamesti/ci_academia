<h2>Create a news item</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create', 'class="form-horizontal" role="form" method="post"') ?>

<fieldset>
    <legend>Novo Item</legend>
    
<?php echo form_input("text", "title", "Título:", set_value('title'), "", "required", 3) ?>

<?php echo form_input("textarea", "text", "Texto:", set_value('text'), "", "required", 3) ?>

<?php echo form_input("checkbox", "chktest", "Marque-me. É só um teste!", "T") ?>

<?php echo form_input("radio", "rtest", "Escolha-me 54. É só um teste!", "54", "", "", 1) ?>
    
<?php echo form_input("radio", "rtest", "Escolha-me 64. É só um teste!", "64", "", "checked", 2) ?>
    
<?php echo form_select("sltteste", "Cidade:", array('PA' => 'Pará', 'MA' => 'Maranhão', 'CE' => 'Ceará'), 'MA') ?>
    
<input type="submit" name="submit" value="Create news item" />

</fieldset>

</form>