
<h4>Cadastrar Novo Artigo</h4>

<?php echo form_button('Novo Artigo', 0, 6) ?>

<table class="table table-hover">

    <thead>
        <th>Título</th>
        <th>Texto</th>
        <th>Ações</th>
    </thead>
    
    <tbody>
    
<?php foreach ($news as $news_item): ?>

        <tr>
            <td><?php echo $news_item['title'] ?></td>
            <td><?php echo $news_item['text'] ?></td>
            <td><a href="/news/<?php echo $news_item['slug'] ?>">Detalhes</a></td>
        </tr>
    
<?php endforeach ?>

    </tbody>
        
</table>

