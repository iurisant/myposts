$(document).ready(function () {
  var longPressTimer;

  $('.post').on('mousedown', function () {
    longPressTimer = setTimeout(function () {
      var id = $(this).attr('id');
      var action = $(this).hasClass('destaque') ? 'remover' : 'adicionar';
      $.ajax({
        url: './app/controllers/selectedPostsController.php',
        method: 'POST',
        data: { id: id, action: action },
        success: function (response) {
          if (action === 'adicionar') {
            $(this).addClass('destaque');
          } else {
            $(this).removeClass('destaque');
          }
          console.log(response)
        }.bind(this),
        error: function (xhr, status, error) {
          console.error(xhr.responseText);
        }
      });
    }.bind(this), 400); // 1000ms = 1 segundo
  }).on('mouseup mouseleave', function () {
    clearTimeout(longPressTimer);
  });
});

function closeModal() {
  document.getElementById("title").value = "";
  document.getElementById("description").value = "";
  document.getElementById("containerModal").style.display = "none";
}

function openModal() {
  document.getElementById("containerModal").style.display = "flex";
}