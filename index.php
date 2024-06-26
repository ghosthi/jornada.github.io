<?php  
    date_default_timezone_set("America/Sao_Paulo");
    $month_arr = array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
    $d = date("d");
    $m2 = (int)$d <= 2 ? " de " . $month_arr[date("m")- 2] . ",": "";
    $m1 = (int)$d == 1 ? " de " . $month_arr[date("m")- 2] : "";

    if($m1 . "," == $m2) $m2 = " e";
    if($m1 == $m2) $m2 = ",";

    $d1 = date("d", strtotime("-1 days")) . $m1;
    $d2 = date("d", strtotime("-2 days")) . $m2;
    $m = $month_arr[date("m")- 1];
?>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="script.js"></script>
    </head>
    <body>
         <a href="https://pay.kiwify.com.br/Nv3TSSQ" class="call-to-action-btn countdown-btn"><i class="material-icons">flash_on</i> 30:00</a>
        <div class="header-text">
            Somente nos dias:  <span class="bold"><?php echo "$d2 $d1 e $d de $m"; ?></span> você terá um desconto especial de 53%
        </div>
        <div class="body-content">
            <div class="body-top-text">
                SOMENTE 5% DAS MULHERES SE TORNAM EMPRESÁRIAS DE SUCESSO
            </div>
            <div class="video-wrapper">
                <video src="assets/boasvindas.mp4" controls></video>
            </div>
            <div class="pre-content-wrapper">
                Chega de Empreender de forma Errada e não ter <span class="highlight-1">RESULTADOS</span>
                Aprenda a como Gerenciar um negócio de forma correta e <span class="highlight-2">FATURE</span> até 4x mais
                TODOS OS MESES
                <div class="pre-course-desc-wrapper">
                    <ul>
                        <li><i class="material-icons green-txt">check</i> Mesmo começando do Zero</li>
                        <li><i class="material-icons green-txt">check</i> Aplicável em qualquer área</li>
                        <li><i class="material-icons green-txt">check</i> Desconto de 53% (APENAS HOJE)</li>
                    </ul>
                </div>
            </div>
            <div class="center">
                <div class="call-to-action-btn">
                    <a href="https://pay.kiwify.com.br/Nv3TSSQ">
                        EU QUERO GANHAR BEM NA MINHA PROFISSÃO
                    </a>
                </div>
            </div>
            <div class="course-desc-wrapper">
                Um curso COMPLETO, do ZERO ao AVANÇADO, desenvolvido para quem deseja começar um negócio e quer ter sucesso.
            </div>
            <div class="img-1-wrapper">
                <img src="assets/img-1.png" alt="Quatro imagens de realização de procedimentos estéticos com o texto 'Eu precisei mudar'">
            </div>
            <div class="content-wrapper">
                Se eu não tivesse mudado teria perdido meu grande sonho e desistido de tudo. 
                <span class="bold">NENHUM</span> negócio prospera ser ter uma boa <span class="bold">ESTRATÉGIA</span>. 
                <div class="cdw-parent-div">
                    <div class="course-desc-2-wrapper">
                        <ul>
                            <li>VOCÊ NÃO PRECISA POSTAR <span class="list-highlight">TODO DIA</span></li>
                            <li>VOCÊ NÃO PRECISA TRABALHAR <span class="list-highlight">EXAUSTIVAMENTE</span></li>
                            <li>VOCÊ NÃO PRECISA FICAR DANDO <span class="list-highlight">DESCONTO</span> E COBRANDO <span class="list-highlight">BARATO</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="center">
                <div class="call-to-action-btn">
                    <a href="https://pay.kiwify.com.br/Nv3TSSQ">
                        EU QUERO MUDAR MINHA REALIDADE</a></div></div>
            <div class="method-desc">
                Método desenvolvido Exclusivo para Empreendedoras que desejam ter um negócio próspero e conquistar a liberdade financeira.
            </div>
            <div class="content-wrapper">
                <div class="cdw-parent-div">
                    <div class="course-desc-2-wrapper width-50pct">
                        <ul>
                            <li>
                                Se você é trabalha com estética, moda, beleza ou <span class="list-highlight">QUALQUER</span> área
                                que esteja com <span class="list-highlight">DIFICULDADES</span> para empreender este <span class="list-highlight">MÉTODO</span> vai te ajudar 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="center">
                <div class="call-to-action-btn">
                    <a href="https://pay.kiwify.com.br/Nv3TSSQ">
                        EU QUERO CONQUISTAR MINHA LIBERDADE FINANCEIRA
                    </a>
                </div>
            </div>
            <div class="course-description-itens-wrapper">
                <div class="desc-title">O que você vai aprender na JORNADA:</div>
                <div class="desc-subtitle">
                    A Jornada é a solução para quem nunca teve resultados no seu negócio e quer destravar seu faturamento 
                    e alavancar de uma vez por todas seus resultados.
                </div>
                <div class="course-desc-item-flex">
                    <div class="course-description-item">
                        <div class="item-no">1</div>
                        <div class="item-title">Não sabe nada e quer começar Algo?</div>
                        <div class="item-desc">Te ensino a técnica da Pirâmide para estruturar sua empresa e tornar ela um CICLO DE SUCESSO.</div>
                    </div>
                    <div class="course-description-item">
                        <div class="item-no">2</div>
                        <div class="item-title">Trabalha demais e não vê o dinheiro nas mãos?</div>
                        <div class="item-desc">Aprenda O SEGREDO da Gestão de sucesso para cuidar do seu dinheiro e fazer ele crescer.</div>
                    </div>
                    <div class="course-description-item">
                        <div class="item-no">3</div>
                        <div class="item-title">Sofre com a falta de clientes?</div>
                        <div class="item-desc">Aprenda sem enrolação como divulgar seus produtos/serviços, VENDER MAIS e como FIDELIZAR seus cliente para SEMPRE.</div>
                    </div>
                    <div class="course-description-item">
                        <div class="item-no">4</div>
                        <div class="item-title">Você cobra barato e vive dando descontos? e NUNCA tem lucro ?</div>
                        <div class="item-desc">Entenda por que você não prospera e COMO MUDAR ISSO a partir de hoje.</div>
                    </div>
                </div>
            </div>
            <div class="img-bg row">
                <div class="course-itens-wrapper">
                    <div class="course-itens-title">O curso da Jornada inclui:</div>
                    <ul>
                        <li>+11 MÓDULOS</li>
                        <li>+47 AULAS</li>
                        <li>+ 7 APOSTILAS</li>
                        <li>+ 3 PLANILHAS PARA BAIXAR</li>
                        <li>MATERIAL DE APOIO DOWLOAD</li>
                        <li>3 BÔNUS EXCLUSIVOS</li>
                        <li>TOP ESTRATÉGIAS SECRETAS</li>
                        <li>PRESENTE ESPECIAL NO FINAL</li>
                    </ul>
                </div>
                <div class="exclusive-modules-wrapper">
                    <div class="exclusive-modules-title">
                        Módulos EXCLUSIVOS:</div>
                    <ul>
                        <li>Como fazer marketing além da <span class="bold">INTERNET</span>.</li>
                        <li>O segredo da prosperidade para <span class="bold">MULHERES</span>.</li>
                        <li>Como ter equilibro e Sucesso: <span class="bold">TRABALHO E DESCANSO</span>.</li>
                    </ul>
                </div>

            </div>
            <div class="creator-info">
                <div class="creator-info-title">
                    Quem é Nathália Silva, criadora da Jornada?
                </div>
                <div class="creator-info-content">
                    <img src="assets/portrait.png" alt="">
                        <div class="creator-info-subtitle">
                            <ul>
                                <li>Empreendedora a + de 8 anos na Área de Beleza</li>
                                <li>Mais de 1000 Atendimentos realizados</li>
                                <li>Criou o método da JORNADA em 2022 que a fez CRESCER e EXPANDIR SEU NEGÓCIO, mesmo trabalhando SOZINHA</li>
                                <li>Campeã 2024 melhor Micropigmentadora na cidade Várzea Paulista</li>
                                <li>Mentora, professora e atualmente Artista de Micropigmentação e Tatuagens Fine Line</li>
                            </ul>
                        </div>
                </div>
            </div>
            <div class="carrousell-wrapper">
                <div class="arrow-left"></div>
                <div class="carrousell-content">
                    <img src="/assets/rocket.png" class='active' alt="rocket">
                    <img src="/assets/rocket.png" class='hidden' alt="rocket">
                    <img src="/assets/rocket.png" class='hidden' alt="rocket">
                    <img src="/assets/rocket.png" class='hidden' alt="rocket">
                    <img src="/assets/rocket.png" class='hidden' alt="rocket">
                    <img src="/assets/rocket.png" class='hidden' alt="rocket">
                </div>
                <div class="arrow-right"></div>
            </div>
            <div class="discount-wrapper">
                Eu sei que você precisa de ajuda <span class="highlight-2">URGENTE</span> <br>E somente esta semana vou te dar <span class="highlight-2">53% de DESCONTO</span> na Jornada
            </div>
            <div class="opportunitty">
                OPORTUNIDADE POR TEMPO LIMITADO
            </div>
            <div class="payment-method-img-wrapper">
                <img src="assets/payment.png" alt="Métodos de pagamento">
            </div>
            <div class="center">
                <div class="call-to-action-btn">
                    <a href="https://pay.kiwify.com.br/Nv3TSSQ">
                        EU QUERO APROVEITAR A OPORTUNIDADE HOJE
                    </a>
                </div>
            </div>
            <div class="vagas-info">
                Você precisa aproveitar esta oportunidade <span class="highlight-2">ANTES QUE ACABE</span><br>Pois as vagas da jornada com valor exclusivo estão acabando:
            </div>
            <div class="discount-info">
                <div class="mentoria-pricing">
                    SABE QUANTO VOCÊ PRECISA GASTAR NUMA MENTORIA FORA? <br> Eu te mostro <i class="material-icons">arrow_downward</i>
                </div>
                <div class="discount-info-wrapper">
                    <div class="discount-info-box">
                        Mentoria Profissional <span>R$ 1800,00</span>
                    </div>
                    <div class="discount-info-box">
                        Planilhas e Material Gestão e Administração <span>R$ 600,00</span>
                    </div>
                    <div class="discount-info-box">
                        Consultoria para MEI e pequenos negócios <span>R$ 870,00</span>
                    </div>
                    <div class="discount-info-box">
                        Curso de Marketing e Vendas <span>R$ 1297,00</span>
                    </div>
                    <div class="discount-info-box">
                        Desenvolvimento pessoal ESCLUSIVO para mulheres <span>R$ 2347,00</span>
                    </div>
                    <div class="discount-info-box">
                        SUPORTE ONLINE <span>Incalculável</span>
                    </div>
                    <div class="discount-info-box">
                        7 DIAS GRÁTIS <span>Incalculável</span>
                    </div>
                </div>
            </div>
            <div class="last-call-to-action-wrapper">
                <div class="investment">MAS <span class="highlight-2">SOMENTE HOJE </span>VOCÊ IRÁ INVESTIR 
                    <span class="highlight-2">APENAS</span>:</div>
                <div class="pricing">
                     <span class="price-label">12X DE R$ 69,98</span> ou apenas
                    <span class="price-label">R$ 697,00 à vista</span>
                </div>
                <div class="limited-info">VAGAS E TEMPO DA OFERTA LIMITADOS</div>
            </div>
            <div class="center">
                <div class="call-to-action-btn lg">
                    <a href="https://pay.kiwify.com.br/Nv3TSSQ">
                        EU QUERO APROVEITAR A OPORTUNIDADE
                    </a>
                </div>
            </div>
            <div class="collapsible-section">
                <div class="collapsible-wrapper">
                    <div class="collapsible-header">
                        Como tenho acesso as AULAS?
                    </div>
                    <div class="collapsible-content">
                        <span>
                            Assim que você colocar seus dados e finalizar sua compra, vamos te enviar um e-mail com 
                            as instruções de acesso da sua área de membros exclusiva. Por isso é importante inserir o 
                            e-mail correto na hora de finalizar a compra.
                        </span>
                    </div>
                </div>
                <div class="collapsible-wrapper">
                    <div class="collapsible-header">
                        Quanto tempo para ter os primeiros resultados?
                    </div>
                    <div class="collapsible-content">
                        <span>
                            Quanto maior for a sua dedicação, maior é a chance de você conseguir seus resultados.
                            Quem estuda e aplica já as técnicas começa a ter resultados efetivos nas primeiras semanas.
                        </span>
                    </div>
                </div>
                <div class="collapsible-wrapper">
                    <div class="collapsible-header">
                        O curso é seguro? Tem Garantia?
                    </div>
                    <div class="collapsible-content">
                        <span>
                            SUPER SEGURO! Você tem 7 dias para assistir as aulas do curso. 
                            Se nesse período, por qualquer motivo, achar que o curso não é para você,
                            é só solicitar o reembolso na plataforma que devolvemos 100% do seu dinheiro.
                        </span>
                    </div>
                </div>
                <div class="collapsible-wrapper">
                    <div class="collapsible-header">
                        Quanto tempo tenho acesso ao curso?
                    </div>
                    <div class="collapsible-content">
                        <span>
                            Você vai poder acessar todo o treinamento por 1 ano ano inteiro (365 dias)
                        </span>
                    </div>
                </div>
                <div class="collapsible-wrapper">
                    <div class="collapsible-header">
                        Tenho suporte durante a jornada?
                    </div>
                    <div class="collapsible-content">
                        <span>
                            TOTAL! Durante sua jornada, nossa equipe te dará todo suporte referente as suas dúvidas, através do nosso email de suporte.
                        </span>
                    </div>
                </div>
                <div class="collapsible-wrapper">
                    <div class="collapsible-header">
                        Qual as formas de Pagamento?
                    </div>
                    <div class="collapsible-content">
                        <span>
                            Você pode parcelar o curso em até 12 vezes no cartão de crédito 
                            (podendo também dividir a compra em 2 cartões diferentes se quiser). 
                            Além disso, você pode pagar à vista via boleto, PIX, Google Pay, etc.
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="footer-info">
                <div class="footer-info-rights">TODOS OS DIREITOS RESERVADOS</div>
                <div class="footer-info-link">CRIADO POR <a href="https://www.instagram.com/nathaliasilva.artist">@nathaliasilva.artist</a></div>
                <div class="footer-info-link">DESENVOLVIDO POR <a href="https://github.com/ghosthi">@_ghosthi</a></div>
            </div>
        </div>
    </body>
</html>