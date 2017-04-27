<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Eduardo Pacheco - Full Stack Developer - PHP, Node, ASP.NET</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <meta name="theme-color" content="#2ab0aa">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">
    <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="//unpkg.com/vue-material/dist/vue-material.css">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div id="app">

      <md-layout>
        <md-layout md-flex="25" md-flex-small="100">
          <md-card>
            <md-card-media>
              <md-image :md-src="picture"></md-image>
            </md-card-media>
            <md-card-header>
              <div class="md-title">Eduardo Stefani Pacheco</div>
              <div class="md-subhead">Full Stack Developer</div>
            </md-card-header>
            <md-card-content>
              <strong class="md-body-2">Localização</strong> <address class="location">Porto Alegre - Brasil</address><br>

              <strong class="md-body-2">Email:</strong> <a v-bind:href="email_href">{{ email }}</a><br>

              <strong class="md-body-2">Linkedin</strong> <a href="https://www.linkedin.com/in/eduardopacheco/" target="_blank">@eduardopacheco</a><br>
              <strong class="md-body-2">Github</strong> <a href="https://github.com/kanema" target="_blank">@kanema</a><br>
              <strong class="md-body-2">Github 2</strong> <a href="https://github.com/eduardokanema" target="_blank">@eduardokanema</a><br>
              <strong class="md-body-2">Facebook</strong> <a href="https://www.facebook.com/eduardo.pacheco" target="_blank">@eduardo.pacheco</a><br>
            </md-card-content>
          </md-card>
        </md-layout>
        <md-layout md-flex="73" md-flex-small="100" class="main-content" md-align="end">
          <md-card>
            <md-card-header>
              <h2 class="md-title">Introdução</h2>
            </md-card-header>
            <md-card-content>
              <p>
                Trabalho a mais de 10 anos com desenvolvimento de sistemas. Atualmente atuo como freelancer Full Stack para diversar empresas.
                Tendo grande experiência em análise de sistemas, banco de dados, programação, interface e DevOps.
                Desempenho trabalho preferencialmente remoto em meio turno ou período integral, segundo demanda.
              </p>
            </md-card-content>
          </md-card>

          <md-card class="experience">
            <md-card-header>
              <h2 class="md-title">Experiência</h2>
            </md-card-header>
            <md-card-content>
              <h3 class="md-subheading">Desenvolvedor full stack</h3>
              <h4 class="md-caption">Freelance</h3>
              <i>fev de 2017 – o momento</i>
              <p>
                Trabalho remoto para diversas empresas com jobs full-time ou part-time. Atuando como analista de sistemas, programador, diagramador de interfaces e DevOps. Principalmente na área de Web em projetos em Node.js, PHP, C#, RoR, Lua, C e outras.
              </p>
              <hr>

              <h3 class="md-subheading">Lead programmer</h3>
              <h4 class="md-caption"><a href="http://www.huia.com.br">Huia</a></h4>
              <i>set de 2013 – fev de 2017 (3 anos 5 meses)</i>
              <p>
                Implemementação de entrega contínua, utilizando Jenkins. Analista de Desenvolvimento com projetos de O Boticário, W3Haus, Reckitt Benckiser, Mondelēz, Tramontina, Agiplan, Pestana, Shure e Grêmio. Desenvolvimento de ferramenta open-source no-backend. Desenvolveu e planejou a base do sistema, o Huia Kohana, com base na framework PHP Kohana, conseguindo aprimorar a qualidade e volume de entrega mesmo com redução da equipe. Integrações de API REST, Mobile, MongoDB, Android, RethinkDB, CouchDB. Sempre ativo na qualidade de entrega, apresentando soluções e trabalhando em projetos para automação de processos.
              </p>
              <hr>

              <h3 class="md-subheading">CIO & Co-Founder</h3>
              <h4 class="md-caption"><a href="http://www.cupcakese.com">Cupcake</a></h4>
              <i>fev de 2012 – set de 2013 (1 ano 9 meses)</i>
              <p>
                Como co-fundador trabalhou na estruturação de sistemas não relacionais de larga escalabilidade para jogos casuais para redes sociais. Entregando projetos em formato advergaming para empresas como Grendene, Kzuka, Universiário, Picadilly, Hello Kitty e Barbie.
              </p>
              <hr>

              <h3 class="md-subheading">Systems Analyst</h3>
              <h4 class="md-caption"><a href="http://www.w3haus.com.br">W3haus</a></h4>
              <i>jul de 2010 – fev de 2012 (1 ano 7 meses)</i>
              <p>
                Technical leader de back-end. Análise de necessidades, abordagens, metodologias, ferramentas, técnicas e diretrizes para atender as necessidades específicas de aplicações baseadas na web. Desenvolvimento em PHP, ASP.NET entre outros. Geração de documentação interna de desenvolvimento e trabalhos com testes unitários. Orçamentos e documentações de viabilidades técnicas. Criação de promoções em redes sociais.
              </p>
              <hr>

              <h3 class="md-subheading">Web Developer</h3>
              <h4 class="md-caption"><a href="http://www.gruporbs.com.br">Grupo RBS</a></h4>
              <i>ago de 2008 – jul de 2010 (2 anos)</i>
              <p>
                Trabalhou fortemente no desenvolvimento do novo hagah, maior portal do sul do país de local search. Também desenvolveu projetos em Wordpress e ferramentas internas em PHP. Consultor na área de SEO, trabalhando com profissionais para otimização e melhoria dos players.
              </p>
              <hr>

              <h3 class="md-subheading">Web Developer</h3>
              <h4 class="md-caption"><a href="http://www.medialine.com.br">Medialine - Soluções Digitais</a></h4>
              <i>jul de 2010 – fev de 2012 (1 ano 7 meses)</i>
              <p>
                Participou da padronização de código e migração de sistemas de tabelas para os padrões WEB. Trabalhando em ASP desenvolveu diversos sites para empresas como Elevato, Policlínica Central e Zamprogna.
              </p>

            </md-card-content>
          </md-card>
        </md-layout>
      </md-layout>

    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/vue/2.2.6/vue.min.js"></script>
    <script src="//unpkg.com/vue-material"></script>
    <script src="main.js"></script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-7013680-1', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>
