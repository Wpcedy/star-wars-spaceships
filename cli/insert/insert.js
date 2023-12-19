function SubForm() {
  $.ajax({
    url: 'http://localhost:3000/spaceships',
    type: 'post',
    data: $('#myForm').serialize(),
    success: function () {
      alert("Spaceship salva com sucesso");
      window.location.replace("../../index.phtml");
    }
  });
}
