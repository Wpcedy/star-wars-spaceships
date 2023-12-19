let params = new URLSearchParams(window.location.search);
var id = params.get("id");

function SubForm() {
  $.ajax({
    url: 'http://localhost:3000/spaceships/' + id,
    type: 'put',
    data: $('#myForm').serialize(),
    success: function () {
      alert("Spaceship salva com sucesso");
      window.location.replace("../../index.phtml");
    }
  });
}

window.onload = function () {
  $.ajax({
    url: 'http://localhost:3000/spaceships/' + id,
    type: 'get',
    success: function (response) {
      console.log(response);
      document.getElementById("name").value = response['name'];
      document.getElementById("model").value = response['model'];
    }
  });
}
