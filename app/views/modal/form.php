<div class="modal" id="containerModal">
  <form method="post" id="postsForm">
    <h1>Novo Post</h1><br>
    
    <label for="title">Titulo<span> *</span></label>  
    <input name="title" id="title" placeholder="Titulo" value="" form="postsForm" maxlength="64" type="text">

    <label for="description">Description<span> *</span></label>  
    <textarea name="description" form="postsForm" value="" id="description" maxlength="512" placeholder="Descrição" cols="30" rows="10"></textarea><br>

    <button id="submit" name="addPost" type="submit">Adicionar</button>
    <button id="cancel" type="button" onclick="closeModal()">Cancelar</button>
  </form>
</div>