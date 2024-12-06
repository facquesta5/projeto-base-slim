<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Observa Scan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .navbar-brand {
            font-size: 1.75rem;
            font-weight: bold;
        }

        .hero-section {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
            padding: 100px 15px;
            text-align: center;
        }

        .hero-section h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .hero-section p {
            font-size: 1.25rem;
        }

        .feature-card {
            transition: transform 0.3s;
        }

        .feature-card:hover {
            transform: scale(1.05);
        }

        .form-section {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .form-section .btn {
            padding: 10px 20px;
            font-size: 0.875rem;
        }

        /* Garantir que os cartões dentro da seção 'Como Usar' tenham a mesma altura */
        #como-usar .row {
            display: flex;
            flex-wrap: wrap;
        }

        #como-usar .card {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        #como-usar .col-md-6 {
            display: flex;
            align-items: stretch;
            /* Faz os itens se esticarem para ter a mesma altura */
        }

        #como-usar .flex-grow-1 {
            flex-grow: 1;
            /* Faz com que os cards ocupem o mesmo espaço, independentemente do conteúdo */
        }

        #como-usar .card h4 i {
            font-size: 1.5rem;
            /* Ajuste o tamanho do ícone */
            color: #007bff;
            /* Altere a cor do ícone se necessário */
        }

        /* Alinhar as colunas */
        .row .col-md-4 {
            display: flex;
            flex-direction: column;
        }

        /* Ajustar o espaçamento dos botões */
        .d-md-flex .btn {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Observa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#planos">Planos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#register">Registre-se</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#como-usar">Modo de usar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>Monitore Perfis do Instagram com Facilidade</h1>
            <p>Descubra quem são os novos seguidores ou quais novas contas seu perfil favorito está seguindo.</p>
            <a href="#como-usar" class="btn btn-light btn-lg mt-3">Saiba Mais</a>
        </div>
    </section>

    <!-- Como Usar Section -->
    <section id="como-usar" class="container mt-5">
        <h2 class="text-center mb-5">Como Usar o Observa</h2>
        <div class="row d-flex">
            <!-- Passo 1: Pré-Requisito -->
            <div class="col-md-6 mb-4 d-flex">
                <div class="card shadow-sm border-0 p-4 flex-grow-1">
                    <h4 class="mb-3">
                        <i class="fas fa-check-circle me-2"></i>Pré-Requisito
                    </h4>
                    <p class="text-muted">Para começar, certifique-se de ter acesso aos seguidores e seguidos do perfil do Instagram que você deseja monitorar. Sem essas informações, o processo não será possível.</p>
                </div>
            </div>
            <!-- Passo 2: Cadastro Inicial -->
            <div class="col-md-6 mb-4 d-flex">
                <div class="card shadow-sm border-0 p-4 flex-grow-1">
                    <h4 class="mb-3">
                        <i class="fas fa-clipboard-list me-2"></i>Cadastro Inicial
                    </h4>
                    <p>Selecione todos os seguidores do perfil manualmente e copie a lista (Ctrl+C). Em seguida, cole a lista no campo abaixo para registrar os seguidores pela primeira vez em nossa base de dados.</p>
                    <div class="mb-3">
                        <label for="seguidores-input" class="form-label">Cole os Seguidores Aqui</label>
                        <textarea id="seguidores-input" class="form-control" rows="4" placeholder="Cole a lista de seguidores aqui..."></textarea>
                    </div>
                    <button class="btn btn-primary">Cadastrar Seguidores</button>
                </div>
            </div>
        </div>
        <div class="row d-flex">
            <!-- Passo 3: Monitoramento Contínuo -->
            <div class="col-md-6 mb-4 d-flex">
                <div class="card shadow-sm border-0 p-4 flex-grow-1">
                    <h4 class="mb-3">
                        <i class="fas fa-search me-2"></i>Monitoramento
                    </h4>
                    <p>Após o cadastro inicial, esteja atento aos seguidores e seguidos do seu perfil monitorado. Sempre que novos seguidores forem adicionado, basta repetir o processo de copiar e colar a lista para que o sistema faça a comparação com os dados cadastrados. Dessa forma Observa Scan trará quais perfis novos em poucos instantes.</p>
                </div>
            </div>
            <!-- Passo 4: Concluído -->
            <div class="col-md-6 mb-4 d-flex">
                <div class="card shadow-sm border-0 p-4 flex-grow-1">
                    <h4 class="mb-3">
                        <i class="fas fa-check me-2"></i>Pronto!
                    </h4>
                    <p>Agora você pode acompanhar os novos seguidores do perfil monitorado em tempo real, com facilidade e agilidade. O sistema fará todo o trabalho de comparação automaticamente.</p>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="#planos" class="btn btn-primary btn-lg">Escolha seu Plano e Comece Agora</a>
        </div>
    </section>

    <!-- Cadastro de usuário section -->
    <section class="container mt-5 mb-5" id="register">
        <div class="form-section" style="background: linear-gradient(to right, #6a11cb, #2575fc)">
            <h3 class="text-center mb-4">Cadastre-se e tenha acesso total</h3>
            <!-- Formulário mais estreito -->
            <form id="register-form" class="mx-auto" style="max-width: 400px;">
                <!-- Email e Senha -->
                <div class="mb-3">
                    <label for="register-email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="register-email" placeholder="Digite seu email" required>
                </div>
                <div class="mb-3">
                    <label for="register-password" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="register-password" placeholder="Crie uma senha" required>
                </div>
                <div class="mb-3">
                    <label for="register-password-confirm" class="form-label">Confirmar Senha</label>
                    <input type="password" class="form-control" id="register-password-confirm" placeholder="Confirme sua senha" required>
                </div>

                <!-- Botões -->
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary btn-lg me-2">Cadastrar</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Planos Section -->
    <section id="planos" class="container mt-5">
        <h2 class="text-center mb-5">Escolha o Plano Ideal para Você</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <div class="card feature-card p-4">
                    <h3>Plano Básico</h3>
                    <p><strong>R$99,90/mês</strong></p>
                    <p>Monitore uma conta do Instagram. Perfis adicionais por R$25,00 cada.</p>
                    <button class="btn btn-primary select-plan" data-plan="Plano Básico" data-price="99.90">Assinar Agora</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card feature-card p-4">
                    <h3>Plano Intermediário</h3>
                    <p><strong>R$199,90/mês</strong></p>
                    <p>Monitore até 3 perfis do Instagram. Perfis adicionais por R$20,00 cada.</p>
                    <button class="btn btn-primary select-plan" data-plan="Plano Intermediário" data-price="199.90">Assinar Agora</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card feature-card p-4">
                    <h3>Plano Premium</h3>
                    <p><strong>R$299,90/mês</strong></p>
                    <p>Monitore até 10 perfis do Instagram. Perfis adicionais por R$15,00 cada.</p>
                    <button class="btn btn-primary select-plan" data-plan="Plano Premium" data-price="299.90">Assinar Agora</button>
                </div>
            </div>
        </div>
    </section>

    <section class="container mt-5 mb-5">
        <div class="form-section">
            <h3 class="text-center mb-4">Selecione seu plano e comece agora mesmo</h3>
            <form id="checkout-form">
                <!-- Nome e Dados Pessoais -->
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control" id="nome" placeholder="Digite seu nome" required>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Digite seu email" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="telefone" placeholder="Digite seu telefone" required>
                    </div>
                </div>

                <!-- Plano e Forma de Pagamento -->
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="selected-plan" class="form-label">Plano Escolhido</label>
                        <select class="form-control" id="selected-plan" required>
                            <option value="" disabled selected>Selecione um plano</option>
                            <option value="Plano Básico" data-price="99.90">Plano Básico - R$ 99,90</option>
                            <option value="Plano Intermediário" data-price="199.90">Plano Intermediário - R$ 199,90</option>
                            <option value="Plano Premium" data-price="299.90">Plano Premium - R$ 299,90</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="payment-method" class="form-label">Forma de Pagamento</label>
                        <select class="form-control" id="payment-method" required>
                            <option value="" disabled selected>Selecione uma forma de pagamento</option>
                            <option value="pix">Pix</option>
                            <option value="cartao">Cartão</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="d-flex justify-content-between align-items-center" style="flex-direction: column-reverse;">
                            <h4 class="mb-0">Valor: <span id="selected-price" class="font-weight-bold">R$ 0,00</span></h4>
                            <p class="text-muted" style="font-size: 14px;">Preço por mês</p>
                        </div>
                    </div>
                </div>

                <!-- Botões -->
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-success btn-lg me-2">Confirmar Compra</button>
                </div>

                <!-- Texto Persuasivo -->
                <div class="text-center mt-4">
                    <p class="text-muted"><small>Com seu plano escolhido, você terá acesso imediato e contínuo aos benefícios exclusivos. Faça sua escolha agora e aproveite todas as vantagens que o Observa pode oferecer!</small></p>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <!-- About Section -->
                <div class="col-md-4 mb-3">
                    <h5>Sobre Nós</h5>
                    <p>Somos uma empresa inovadora focada em soluções para monitoramento de perfis do Instagram. Nossa missão é facilitar o acesso a informações valiosas para nossos clientes, oferecendo planos acessíveis e eficientes.</p>
                </div>
                <!-- Links Section -->
                <div class="col-md-4 mb-3">
                    <h5>Links Úteis</h5>
                    <ul class="list-unstyled">
                        <li><a href="#planos" class="text-white">Planos</a></li>
                        <li><a href="/test-db" class="text-white">Teste DB</a></li>
                        <li><a href="#" class="text-white">Privacidade</a></li>
                        <li><a href="#" class="text-white">Termos de Serviço</a></li>
                    </ul>
                </div>
                <!-- Contact Section -->
                <div class="col-md-4 mb-3">
                    <h5>Contato</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-geo-alt"></i> Rua Exemplo, 123, Cidade, Estado</li>
                        <li><i class="bi bi-envelope"></i> contato@observa.com</li>
                        <li><i class="bi bi-phone"></i> +55 (11) 1234-5678</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p>&copy; 2024 Observa. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Icons (para os ícones no footer) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Atualiza o valor do plano selecionado
        function updatePlanValue() {
            const select = document.getElementById('selected-plan');
            const selectedOption = select.options[select.selectedIndex];

            // Verifica se uma opção válida foi selecionada
            if (selectedOption && selectedOption.value !== "") {
                const price = selectedOption.getAttribute('data-price');
                document.getElementById('selected-price').textContent = `R$ ${price}`;
            } else {
                document.getElementById('selected-price').textContent = 'R$ 0,00'; // Valor padrão
            }
        }

        // Evento de mudança no select
        document.getElementById('selected-plan').addEventListener('change', updatePlanValue);

        // Atualiza o plano e valor quando um botão é clicado
        document.querySelectorAll('.select-plan').forEach(button => {
            button.addEventListener('click', function() {
                document.getElementById('selected-plan').value = this.dataset.plan;
                document.getElementById('selected-price').textContent = `R$ ${this.dataset.price}`;
                window.location.href = '#checkout-form';
            });
        });

        // Chama a função de atualização inicial ao carregar
        updatePlanValue();

        document.getElementById('cancel-plan').addEventListener('click', function() {
            document.getElementById('selected-plan').value = '';
            document.getElementById('selected-price').textContent = 'R$ 0,00';
            window.location.href = '#planos';
        });
    </script>
</body>

</html>