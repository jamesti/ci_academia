
<h4>Cadastrar Novo Artigo</h4>

<?php echo html_button(array('Novo Artigo','/news/create'), 0, 1) ?>

<table class="table table-hover">

    <thead>
        <tr>
            <th>Título</th>
            <th>Texto</th>
            <th>Ações</th>
        </tr>        
    </thead>
    
    <tbody>
    
<?php foreach ($news as $news_item): ?>

        <tr>
            <td><?php echo $news_item['title'] ?></td>
            <td><?php echo $news_item['text'] ?></td>
            <td><?php echo html_button_dropdowns('Ações', array('Detalhes' => '/news/'.$news_item['slug']), 3) ?></td>
        </tr>
    
<?php endforeach ?>

    </tbody>
        
</table>

