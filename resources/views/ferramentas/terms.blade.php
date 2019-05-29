@extends('layouts.base')

{{-- STYLES --}}
@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
@endsection

{{-- CONTENTE --}}
@section('content')

    <div class="title-page">
        <h1>Termos de Privacidade</h1>
    </div>

    <div class="row">

        <div class="col">
            <form>
                <textarea name="mensagem" id="summernote"></textarea>
                <div class="form-group mt-3">
                    <button class="btn btn-sm btn-success">Salvar</button>
                    <button class="btn btn-sm btn-secondary">Cancelar</button>
                </div>
            </form>
        </div>

    </div>

@endsection

{{-- SCRIPTS --}}
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
<script>

let content = `<b>TERMOS E POLITICAS DE USO DOS SERVIÇOS PRESTADOS PELA TW-SOLUTIONS</b><br><br>O
 SISTEMA da TW-Solutions é um serviço de comunicações e de informação
on-line fornecido pela TW-Solutions Telecomunicações LTDA-ME
(TW-Solutions), sujeito ao seu cumprimento com os termos e condições
estabelecidos abaixo, inclusive de todos os anexos presentes neste
documento.&nbsp;<br><br>Favor ler cuidadosamente este Acordo antes de acessar ou
utilizar o Serviço. Ao acessar ou utilizar o Serviço, você estará
concordando em se submeter aos termos e condições estabelecidos abaixo.
Se você não quiser se submeter a tais termos e condições, não poderá
acessar ou utilizar o Serviço. A TW-Solutions pode modificar este Acordo
 em qualquer tempo, e tais modificações terão efeito imediato sobre a
adoção do Acordo modificado. Você deverá concordar em revisar o Acordo
periodicamente para estar ciente de tais modificações e seu acesso ou
uso contínuo do Serviço será reconhecido como aceitação conclusiva do
Acordo modificado.&nbsp;<br><br>SEM ACESSO A SERVIÇOS DE EMERGÊNCIA: O serviço da
 TW-Solutions não substitui seu telefone celular comum nem seu telefone
fixo. O usuário reconhece que a TW-Solutions, dada a sua natureza e
características, não constitui um serviço de telefonia fixa comutada;
não tem o objetivo de substituir o serviço de telefonia fixa e/ou de
telefonia móvel; não permite a realização de comunicação para, números
destinados a emergências (incluindo, mas sem se limitar, a polícia,
bombeiros, ambulâncias), números especiais e/ou de serviços e utilidades
 públicas (como, por exemplo, os números com prefixo iniciados por 1XX:
102; 103; 109;0800;103XX;&nbsp;<br><br>ABRANGÊNCIA NÚMEROS&nbsp;NACIONAIS 0800 E 40XX: A TW-Solutions deixa ciente que os numeros 0800 são de abrangência&nbsp;nacional e o números&nbsp;40XX (4000, 4020, 3003)&nbsp;&nbsp;são números que&nbsp;atendem apenas as principais capitais do Brasil, porem a&nbsp;abrangência real deverá ser consultada no ato da contratação do serviço e no contrato de prestação de serviço.<br><br>1. SEU TERMOS DE USO COM A TW-SOLUTIONS<br>Seu termo de uso com a TW-Solutions não substitui&nbsp;o contrato de prestação de serviços, mas sim são&nbsp;termos e condições de entendimento pré estabelecidos para continuidade e andamento da relação comercial.&nbsp;juntamente com quaisquer políticas de uso
justo descritas neste documento, no contrato de prestação de serviços on-line, no website da TW-Solutions e em
quaisquer Termos Adicionais.<br><br>2. ACEITAÇÃO DOS TERMOS<br>Para
baixar e/ou utilizar o Softphone, PRODUTOS/PLANOS e/ou Website da
TW-Solutions, primeiro você deve aceitar estes Termos. Estes termos são
aceitos por você (a) quando você clica para aceitar ou concordar com os
Termos, ou (b) quando você faz download e/ou usa o TW-Solutions,
PRODUTOS/PLANOS e/ou Websites da TW-Solutions. Aconselhamos você a
imprimir uma cópia destes Termos para seus registros. Estes Termos
permanecerão em vigor da data de aceitação até serem rescindidos por
você ou pela TW-Solutions.<br><br>3. ALTERAÇÕES NOS TERMOS<br>A
TW-Solutions poderá fazer periodicamente alterações nestes Termos. Você
entende e concorda que sua aceitação expressa dos Termos ou seu uso do
Software, PRODUTOS/PLANOS e/ou Websites da TW-Solutions a contar da data
 de publicação constituirão sua concordância com os Termos atualizados.
Se você não concordar com os Termos modificados, poderá encerrar seu
relacionamento com a TW-Solutions.<br><br>4. TARIFAS<br>Chamadas para
telefones fixos e celulares: As tarifas de chamadas para telefones fixos
 (sem assinatura) consistem em uma tarifa por minuto, conforme
estipulado na página de cada plano contratado ou conforme o simulador de
 custo no painel do usuário. A TW-Solutions poderá alterar as tarifas de
 chamadas para telefones fixos e móveis a qualquer momento sem aviso
prévio. A nova tarifa será aplicada imediatamente independente da data
da compra. Verifique as tarifas mais recentes antes de fazer uma
recarga. Caso não aceite as novas tarifas, não faça a chamada. A duração
 de uma chamada será calculada com base em minutos. Frações de minutos
serão arredondadas. Modo de tarifação 30/6. Durante a chamada, as taxas
incorridas serão deduzidas automaticamente do saldo.<br><br>5. PAGAMENTO<br><i>5.1
 Crédito. Você pode usar Crédito apenas para efetuar chamadas, envio de
SMS ou disparo de ligações. Você pode adquirir Créditos usando qualquer
método de pagamento disponibilizado para você pela TW-Solutions. O
Crédito que você comprar será creditado na sua Conta de Usuário no
momento da compra se por cartão de crédito via IUGU ou em até dois
dias úteis, caso o pagamento for efetuado por boleto bancário.&nbsp;</i><br><i>5.2 Crédito inativo. Os créditos possuem prazo de validade por 6 meses contados a partir da data de pagamento de cada recarga.&nbsp;</i><br><i>5.3
 Outros Métodos de Pagamento. A TW-Solutions não garante que você poderá
 usar seu saldo positivo de Crédito para comprar todos os
PRODUTOS/PLANOS. A TW-Solutions reserva-se o direito de retirar ou
alterar os métodos de pagamento disponíveis a seu exclusivo critério.&nbsp;</i><br><i>5.4
 Pagamentos de Mensalidades. Quando você adquirir PRODUTOS/PLANOS usando
 uma assinatura (mensalmente), você reconhecerá e concordará que este é
um pagamento recorrente e que pagamentos devem ser feitos à TW-Solutions
 pelo método escolhido por você em intervalos recorrentes escolhidos por
 você até que a sua assinatura referente ao Produto seja cancelada por
você ou pela TW-Solutions. Caso não haja o pagamento no período de até 5
 dias após o vencimento, a TW-Solutions bloqueará parcialmente a utilização de todos
os números, ou seja, o cliente não poderá realizar ou receber chamadas.
Decorridos 30 dias do bloqueio da utilização dos números, os mesmos
serão removidos da conta do Cliente, e disponibilizados a um novo
Cliente.&nbsp;</i><br><br>6. POLÍTICA DE REEMBOLSO<br><i>6.1 Quando
PRODUTOS/PLANOS Pagos são adquiridos diretamente da TW-Solutions, o
usuário tem direito a um período de cancelamento de trinta (7) dias a
menos que tenha usado os PRODUTOS/PLANOS Pagos de qualquer maneira.
Neste caso, a compra não poderá ser cancelada ou reembolsada, pois houve
 o uso efetivo do plano contratado.&nbsp;</i><br><i>6.2 A utilização de
Crédito TW-Solutions, a alocação de um numero de recebimento ou o uso de
 qualquer aspecto de uma assinatura correspondem ao “uso” de um Produto
Pago. Por este meio você concorda que Números de recebimento ao serem
alocados na conta do usuário, já inicia-se o uso efetivo do mesmo.&nbsp;</i><br><i>6.3
 Caso você acredite que a TW-Solutions tenha feito uma cobrança
indevida, é necessário entrar em contato dentro do prazo de 60 dias da
referida cobrança. Reembolsos não serão oferecidos para cobranças
realizadas há mais de 60 dias.&nbsp;</i><br><i>6.4 A TW-Solutions reserva o
direito de recusar uma solicitação de reembolso se tiver motivos para
acreditar que você está tentando explorar injustamente esta política de
reembolso, por exemplo, fazendo solicitações de reembolso repetitivas em
 relação ao mesmo Produto; se você estiver infringindo estes Termos; ou
se a TW-Solutions tiver motivos para suspeitar que você está usando
nossos PRODUTOS/PLANOS ou Software de forma fraudulenta, ou que sua
Conta de Usuário está sendo usada por terceiros de forma fraudulenta.&nbsp;</i><br><i>6.5 Esta política de reembolso não afeta seus direitos legais.&nbsp;</i><br><br>7. EXCLUSÃO DE GARANTIAS, LIMITAÇÃO DE RESPONSABILIDADE E INDENIZAÇÃO.<br><i>7.1
 O termo “TW-Solutions” abrange suas empresas subsidiárias e pessoas
jurídicas afiliadas e todos seus diretores, executivos, agentes,
licenciantes e funcionários.&nbsp;</i><br><i>7.2 Não existem garantias: NA
EXTENSÃO MÁXIMA PERMITIDA POR LEI: O SOFTWARE, PRODUTOS/PLANOS E
WEBSITES DA TW-SOLUTIONS SÃO FORNECIDOS “COMO SE ENCONTRAM” E USADOS POR
 SUA CONTA E RISCO, SEM GARANTIAS DE NATUREZA ALGUMA; A TW-SOLUTIONS NÃO
 FAZ QUALQUER GARANTIA, ALEGAÇÕES OU DECLARAÇÕES, E SE ISENTA
EXPRESSAMENTE DE TODAS AS REFERIDAS GARANTIAS DE QUALQUER TIPO, SEJAM
EXPRESSAS, IMPLÍCITAS OU LEGAIS, COM RELAÇÃO AO SOFTWARE,
PRODUTOS/PLANOS E/OU WEBSITES DA TW-SOLUTIONS, INCLUSIVE, ENTRE OUTROS,
GARANTIAS OU CONDIÇÕES DE QUALIDADE, DESEMPENHO, NÃO-VIOLAÇÃO,
COMERCIABILIDADE OU ADEQUAÇÃO PARA UMA FINALIDADE ESPECÍFICA. ALÉM
DISSO, A TW-SOLUTIONS NÃO AFIRMA NEM GARANTE QUE O SOFTWARE,
PRODUTOS/PLANOS E/OU WEBSITES SEMPRE ESTARÃO DISPONÍVEIS, ACESSÍVEIS,
ININTERRUPTOS, OPORTUNOS, SEGUROS, PRECISOS, COMPLETOS E LIVRES DE
ERROS, NEM QUE OPERARÁ SEM PERDA DE PACOTES, NEM GARANTE QUALQUER
CONEXÃO COM OU TRANSMISSÃO ATRAVÉS DA INTERNET, NEM A QUALIDADE DAS
CHAMADAS REALIZADAS POR MEIO DO SOFTWARE.&nbsp;</i><br><i>7.3 Nada nestes
Termos deverá excluir ou limitar a responsabilidade da TW-Solutions em
relação a (a) morte ou lesões corporais; perda resultante de omissão
intencional ou de negligência grave por parte da TW-Solutions; fraude ou
 falsidade ideológica; ou qualquer responsabilidade que não possa ser
limitada ou excluída por lei.&nbsp;</i><br><i>7.4 Isenção de
Responsabilidade: VOCÊ RECONHECE E CONCORDA QUE A TW-SOLUTIONS NÃO TERÁ
QUALQUER RESPONSABILIDADE, SEJA CONTRATUAL, EXTRA-CONTRATUAL (INCLUSIVE
NEGLIGÊNCIA) OU QUALQUER OUTRO TIPO DE RESPONSABILIDADE, E
INDEPENDENTEMENTE DE A POSSIBILIDADE DE TAIS DANOS OU PERDAS TIVER SIDO
INFORMADA À TW-SOLUTIONS OU NÃO, EM CONEXÃO OU DECORRÊNCIA DO USO DE
WEBSITES DA TW-SOLUTIONS, PLANOS OU DO SOFTWARE DE COMUNICAÇÃO PELA
INTERNET. SEU ÚNICO DIREITO OU RECURSO QUANTO A QUALQUER PROBLEMA OU
INSATISFAÇÃO COM O REFERIDO SOFTWARE, PLANOS/PRODUTOS, SERVIÇOS E/OU
WEBSITES DA TW-SOLUTIONS É A IMEDIATA DESINSTALAÇÃO DO REFERIDO SOFTWARE
 E ENCERRAMENTO DOS PLANOS E SERVIÇOS.&nbsp;<br></i>7.5 <i>Todo e gerenciamento sobre as gravações de audio é de responsabilidade do cliente, no fornecimento da plataforma as gravações dos ramais são desativadas por padrão de entrega, devendo o cliente ativa-lo quando necessário. O cliente ainda é responsavel pelos backups e gerenciamento do espaço em disco padrão disponibilizado pois ao atingir o limite os arquivos são sobrescritos sem a possibilidade de recuperação.</i><br><i>7.6 Limitação de
Responsabilidade: a TW-Solutions não terá qualquer responsabilidade
perante a você, seja contratual, extra-contratual (inclusive
negligência) ou qualquer outro tipo de responsabilidade, e
independentemente de a possibilidade de tais danos ou perdas tiver sido
informada à TW-Solutions ou não, pelo seguinte:</i><ul><li>Quaisquer danos indiretos, especiais, emergentes ou consequentes; ou</li><li>Qualquer
 perda de renda, negócios, lucros reais ou previstos, oportunidade,
credibilidade ou reputação (seja direta ou indiretamente); ou</li><li>Quaisquer danos a dados ou corrupção de dados (seja direta ou indiretamente);</li><li>Quaisquer reivindicações, danos ou perdas (sejam diretos ou indiretos) decorrentes ou relacionados com:<ul><li>Sua incapacidade de usar o serviço para contatar Serviços de Emergência;</li><li>A falta de tomada de providências adicionais para acessar Serviços de Emergência</li><li>As limitações do serviço</li><li>Sua incapacidade de fornecer informações precisas sobre sua localização física a um operador de Serviços de Emergência</li><li>Conduta de terceiros operadores de Serviços de Emergência e centrais de chamadas aos quais você possa ser conectado</li><li>Quaisquer
 reivindicações, danos ou perdas (sejam diretos ou indiretos)
decorrentes ou relacionados com: Qualquer produto ou serviço fornecido
por terceiros conforme seus próprios termos de serviço:<ul><li>A tecnologia de terceiros</li><li>Websites de terceiros</li></ul></li></ul></li></ul><i>7.6 Se qualquer terceiro fizer uma queixa contra a TW-Solutions em conexão ou decorrência de (i) sua violação destes Termos<ul><li>Sua violação de qualquer lei de regulação</li><li>Sua infração ou violação dos direitos de terceiros (inclusive direitos de propriedade intelectual)</li><li>Seus Itens Enviados pelo Usuário</li><li>sua
 reclamação em relação a qualquer Item Enviado pelo Usuário, você irá
indenizar e manter a TW-Solutions indene contra todos os danos,
responsabilidade, perda, custos e despesas (inclusive honorários e
despesas advocatícias) relacionados a tal reclamação</li></ul></i><br>8. EQUIPAMENTOS E INSTALAÇÕES<br><i>8.1
 A TW-Solutions reserva-se o direito de não garantir o funcionamento
perfeito de seu serviço em equipamentos de terceiros. De forma que, tais
 equipamentos adquiridos de terceiros, são de responsabilidade do
usuário. A TW-Solutions pode prestar o serviço de ajuda na instalação e
configuração de seu serviço no equipamento do usuário. Mas não garante o
 perfeito funcionamento, compatibilidade ou suporte a nível de hardware
ou software do equipamento de terceiros.<br><br>O usuário entende que é
preciso utilizar equipamentos que contenham as características, recursos
 básicos e recomendações específicas da TW-Solutions. Os Serviços serão
prestados através da instalação do SoftPhone ou de equipamentos
tais como Telefone IP, ATA, Roteador com porta VOIP, dentre outros
compatíveis com os Serviços da TW-Solutions.&nbsp;<br></i><br>8.2&nbsp;<i>A TW-Solutions também&nbsp;reserva-se o direito de não garantir o funcionamento de seu serviço e recomenda seu cliente em não utilizar o PABX VIRTUAL juntamente com PABX LOCAL legado(do próprio&nbsp;cliente). Para o devido funcionamento o cliente deve escolher qual PABX utilizar.<br></i>&nbsp; &nbsp; &nbsp;8.2.a Em caso da escolha do PABX LOCAL a TW-Solutions orientará a melhor forma de utilização, adaptação e configuração do equipamento.<br>&nbsp; &nbsp; &nbsp;8.2.b A responsabilidade pela configuração, ajustes e adaptações do PABX LOCAL Legado é totalmente do cliente sendo a mesma responsável pela contratação de um mantenedor especialista no equipamento do mesmo.<br><br>9. QUALIDADE<br><i>9.1
 O usuário entende que o serviço de comunicação multimídia ou ligações
telefônicas da TW-Solutions são originadas da Internet e como tal, é
preciso, o mínimo de 60kbps dedicados de Upload e Download do link do
usuário para que a qualidade do serviço seja minimamente mantida. O
usuário entende que a internet pública não está sob garantia de banda
dedicada ou falta de oscilações, o que podem acarretar perda de
qualidade na prestação de serviços da TW-Solutions.&nbsp;</i><br><i>9.2 O
Usuário entende que é preciso seguir as orientações quanto a uso de
codec e outras configurações no hardware ou software para que se
mantenha um mínimo de qualidade aceitável no serviço prestado. A
TW-Solutions não garante que mesmo as configurações sendo feitas de
acordo com estabelecido, que o serviço vá funcionar de forma perfeita em
 equipamento de terceiros.&nbsp;</i><br><i>9.3 O cliente entende que a
terminação de chamadas na rede pública pode ser afetada por fatores
externos a rede da TW-Solutions tais como falta de capacidade na rede
celular, ou rompimentos de fibra óptica nas carriers locais, e que por
isso, as chamadas para celulares ou fixos podem passar por
instabilidades momentâneas para algumas regiões do país ou mesmo de
forma generalizada.</i><br><br>10. POLÍTICA DE USO CONSCIENTE - Planos Ilimitados<div><br></div><div>Os planos ilimitados são destinados para comunicações pessoais e comerciais individuais. Em outras palavras, é proibido assinar um plano ilimitado e “distribuir” os minutos de forma manual ou automatizada. Ainda é proibido o uso para atividades de telemarketing, cobrança, pesquisa ou similares que tenham o telefone como ferramenta principal.&nbsp;</div><div><br></div><div>Fica terminantemente proibido:&nbsp;</div><div><br></div><div>a - Uso dos planos em Discadoras automatizadas e outros softwares de ligações automatizadas.</div><div>b - Uso dos planos ilimitados para atividades de Cobrança, Telemarketing, Pesquisas ou similares.</div><div>c - Compartilhar planos ilimitados com familiares, colegas, amigos e outros, seja por qualquer meio de compartilhamento.</div><div>d - Uso dos planos ilimitados para gerar renda para si mesmo ou terceiros.</div><div>e - Ligações excessivas para números 0800, portais de atendimento, e quaisquer espécie de chat de voz.</div><div><br></div><div>Caso um ou mais itens acima forem observados, a TW-SOLUTIONS emitirá um aviso ao usuário informando sobre a infração da política. E sua conta será bloqueada e impossibilitada de renovação de assinatura.</div><div><br></div>`;

$('#summernote').summernote({
    placeholder: 'Termo de privacidade',
    tabsize: 2,
    height: 300
}).summernote('code', content);


</script>
@endsection
