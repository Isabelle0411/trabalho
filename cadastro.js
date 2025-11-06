function getUsuarios() {
  return JSON.parse(localStorage.getItem("usuarios")) || [];
}

function salvarUsuarios(usuarios) {
  localStorage.setItem("usuarios", JSON.stringify(usuarios));
}

function cadastrar() {
  const usuario = document.getElementById("usuario").value.trim();
  const senha = document.getElementById("senha").value.trim();
  const msg = document.getElementById("msg");

  if (!usuario || !senha) {
    msg.textContent = "Preencha todos os campos!";
    return;
  }

  let usuarios = getUsuarios();
  if (usuarios.find(u => u.usuario === usuario)) {
    msg.textContent = "Usuário já existe!";
    return;
  }

  usuarios.push({ usuario, senha });
  salvarUsuarios(usuarios);
  msg.textContent = "Usuário cadastrado com sucesso!";
}

function login() {
  const usuario = document.getElementById("usuario").value.trim();
  const senha = document.getElementById("senha").value.trim();
  const msg = document.getElementById("msg");

  let usuarios = getUsuarios();
  const existe = usuarios.find(u => u.usuario === usuario && u.senha === senha);

  if (existe) {
    localStorage.setItem("usuarioLogado", usuario);
    msg.textContent = "Login bem-sucedido!";
    setTimeout(() => window.location.href = "index.html", 1000);
  } else {
    msg.textContent = "Usuário ou senha incorretos!";
  }
}

function logout() {
  localStorage.removeItem("usuarioLogado");
  window.location.href = "login.html";
}

document.addEventListener("DOMContentLoaded", () => {
  const user = localStorage.getItem("usuarioLogado");
  const nav = document.querySelector("nav ul");
  if (user) {
    const li = document.createElement("li");
    li.innerHTML = `<a href="#" onclick="logout()">Sair (${user})</a>`;
    nav.appendChild(li);
  }
});


  
  